<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Library of interface functions and constants for module thutong
 *
 * All the core Moodle functions, neeeded to allow the module to work
 * integrated in Moodle should be placed here.
 * All the thutong specific functions, needed to implement all the module
 * logic, should go to locallib.php. This will help to save some memory when
 * Moodle is performing actions across all modules.
 *
 * @package    mod_thutong
 * @copyright  2018 Digital BlackSmiths
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

define('MOD_THUTONG_FRANKY','mod_thutong');
define('MOD_THUTONG_LANG','mod_thutong');
define('MOD_THUTONG_TABLE','thutong');
define('MOD_THUTONG_USERTABLE','thutong_attempt');
define('MOD_THUTONG_MODNAME','thutong');
define('MOD_THUTONG_URL','/mod/thutong');
define('MOD_THUTONG_CLASS','mod_thutong');

define('MOD_THUTONG_GRADEHIGHEST', 0);
define('MOD_THUTONG_GRADELOWEST', 1);
define('MOD_THUTONG_GRADELATEST', 2);
define('MOD_THUTONG_GRADEAVERAGE', 3);
define('MOD_THUTONG_GRADENONE', 4);
define('THUTONG_EVENT_TYPE_OPEN', 'open');
define('THUTONG_EVENT_TYPE_CLOSE', 'close');

////////////////////////////////////////////////////////////////////////////////
// Moodle core API                                                            //
////////////////////////////////////////////////////////////////////////////////

/**
 * Returns the information on whether the module supports a feature
 *
 * @see plugin_supports() in lib/moodlelib.php
 * @param string $feature FEATURE_xx constant for requested feature
 * @return mixed true if the feature is supported, null if unknown
 */
function thutong_supports($feature) {
    switch($feature) {
        case FEATURE_MOD_INTRO:         return true;
        case FEATURE_SHOW_DESCRIPTION:  return true;
		case FEATURE_COMPLETION_HAS_RULES: return true;
        case FEATURE_COMPLETION_TRACKS_VIEWS: return true;
        case FEATURE_GRADE_HAS_GRADE:         return true;
        case FEATURE_GRADE_OUTCOMES:          return true;
        case FEATURE_BACKUP_MOODLE2:          return true;
        default:                        return null;
    }
}

/**
 * Implementation of the function for printing the form elements that control
 * whether the course reset functionality affects the thutong.
 *
 * @param $mform form passed by reference
 */
function thutong_reset_course_form_definition(&$mform) {
    $mform->addElement('header', MOD_THUTONG_MODNAME . 'header', get_string('modulenameplural', MOD_THUTONG_LANG));
    $mform->addElement('advcheckbox', 'reset_' . MOD_THUTONG_MODNAME , get_string('deletealluserdata',MOD_THUTONG_LANG));
}

/**
 * Course reset form defaults.
 * @param object $course
 * @return array
 */
function thutong_reset_course_form_defaults($course) {
    return array('reset_' . MOD_THUTONG_MODNAME =>1);
}

/**
 * Removes all grades from gradebook
 *
 * @global stdClass
 * @global object
 * @param int $courseid
 * @param string optional type
 */
function thutong_reset_gradebook($courseid, $type='') {
    global $CFG, $DB;

    $sql = "SELECT l.*, cm.idnumber as cmidnumber, l.course as courseid
              FROM {" . MOD_THUTONG_TABLE . "} l, {course_modules} cm, {modules} m
             WHERE m.name='" . MOD_THUTONG_MODNAME . "' AND m.id=cm.module AND cm.instance=l.id AND l.course=:course";
    $params = array ("course" => $courseid);
    if ($moduleinstances = $DB->get_records_sql($sql,$params)) {
        foreach ($moduleinstances as $moduleinstance) {
            thutong_grade_item_update($moduleinstance, 'reset');
        }
    }
}

/**
 * Actual implementation of the reset course functionality, delete all the
 * thutong attempts for course $data->courseid.
 *
 * @global stdClass
 * @global object
 * @param object $data the data submitted from the reset course.
 * @return array status array
 */
function thutong_reset_userdata($data) {
    global $CFG, $DB;

    $componentstr = get_string('modulenameplural', MOD_THUTONG_LANG);
    $status = array();

    if (!empty($data->{'reset_' . MOD_THUTONG_MODNAME})) {
        $sql = "SELECT l.id
                         FROM {".MOD_THUTONG_TABLE."} l
                        WHERE l.course=:course";

        $params = array ("course" => $data->courseid);
        $DB->delete_records_select(MOD_THUTONG_USERTABLE, MOD_THUTONG_MODNAME . "id IN ($sql)", $params);

        // remove all grades from gradebook
        if (empty($data->reset_gradebook_grades)) {
            thutong_reset_gradebook($data->courseid);
        }

        $status[] = array('component'=>$componentstr, 'item'=>get_string('deletealluserdata', MOD_THUTONG_LANG), 'error'=>false);
    }

    /// updating dates - shift may be negative too
    if ($data->timeshift) {
        shift_course_mod_dates(MOD_THUTONG_MODNAME, array('available', 'deadline'), $data->timeshift, $data->courseid);
        $status[] = array('component'=>$componentstr, 'item'=>get_string('datechanged'), 'error'=>false);
    }

    return $status;
}




/**
 * Create grade item for activity instance
 *
 * @category grade
 * @uses GRADE_TYPE_VALUE
 * @uses GRADE_TYPE_NONE
 * @param object $moduleinstance object with extra cmidnumber
 * @param array|object $grades optional array/object of grade(s); 'reset' means reset grades in gradebook
 * @return int 0 if ok, error code otherwise
 */
function thutong_grade_item_update($moduleinstance, $grades=null) {
    global $CFG;
    if (!function_exists('grade_update')) { //workaround for buggy PHP versions
        require_once($CFG->libdir.'/gradelib.php');
    }

    if (array_key_exists('cmidnumber', $moduleinstance)) { //it may not be always present
        $params = array('itemname'=>$moduleinstance->name, 'idnumber'=>$moduleinstance->cmidnumber);
    } else {
        $params = array('itemname'=>$moduleinstance->name);
    }

    if ($moduleinstance->grade > 0) {
        $params['gradetype']  = GRADE_TYPE_VALUE;
        $params['grademax']   = $moduleinstance->grade;
        $params['grademin']   = 0;
    } else if ($moduleinstance->grade < 0) {
        $params['gradetype']  = GRADE_TYPE_SCALE;
        $params['scaleid']   = -$moduleinstance->grade;

        // Make sure current grade fetched correctly from $grades
        $currentgrade = null;
        if (!empty($grades)) {
            if (is_array($grades)) {
                $currentgrade = reset($grades);
            } else {
                $currentgrade = $grades;
            }
        }

        // When converting a score to a scale, use scale's grade maximum to calculate it.
        if (!empty($currentgrade) && $currentgrade->rawgrade !== null) {
            $grade = grade_get_grades($moduleinstance->course, 'mod', MOD_THUTONG_MODNAME, $moduleinstance->id, $currentgrade->userid);
            $params['grademax']   = reset($grade->items)->grademax;
        }
    } else {
        $params['gradetype']  = GRADE_TYPE_NONE;
    }

    if ($grades  === 'reset') {
        $params['reset'] = true;
        $grades = null;
    } else if (!empty($grades)) {
        // Need to calculate raw grade (Note: $grades has many forms)
        if (is_object($grades)) {
            $grades = array($grades->userid => $grades);
        } else if (array_key_exists('userid', $grades)) {
            $grades = array($grades['userid'] => $grades);
        }
        foreach ($grades as $key => $grade) {
            if (!is_array($grade)) {
                $grades[$key] = $grade = (array) $grade;
            }
            //check raw grade isnt null otherwise we insert a grade of 0
            if ($grade['rawgrade'] !== null) {
                $grades[$key]['rawgrade'] = ($grade['rawgrade'] * $params['grademax'] / 100);
            } else {
                //setting rawgrade to null just in case user is deleting a grade
                $grades[$key]['rawgrade'] = null;
            }
        }
    }


    return grade_update('mod/' . MOD_THUTONG_MODNAME, $moduleinstance->course, 'mod', MOD_THUTONG_MODNAME, $moduleinstance->id, 0, $grades, $params);
}

/**
 * Update grades in central gradebook
 *
 * @category grade
 * @param object $moduleinstance
 * @param int $userid specific user only, 0 means all
 * @param bool $nullifnone
 */
function thutong_update_grades($moduleinstance, $userid=0, $nullifnone=true) {
    global $CFG, $DB;
    require_once($CFG->libdir.'/gradelib.php');

    if ($moduleinstance->grade == 0) {
        thutong_grade_item_update($moduleinstance);

    } else if ($grades = thutong_get_user_grades($moduleinstance, $userid)) {
        thutong_grade_item_update($moduleinstance, $grades);

    } else if ($userid and $nullifnone) {
        $grade = new stdClass();
        $grade->userid   = $userid;
        $grade->rawgrade = null;
        thutong_grade_item_update($moduleinstance, $grade);

    } else {
        thutong_grade_item_update($moduleinstance);
    }
	
	//echo "updategrades" . $userid;
}

/**
 * Return grade for given user or all users.
 *
 * @global stdClass
 * @global object
 * @param int $moduleinstance
 * @param int $userid optional user id, 0 means all users
 * @return array array of grades, false if none
 */
function thutong_get_user_grades($moduleinstance, $userid=0) {
    global $CFG, $DB;

    $params = array("moduleid" => $moduleinstance->id);

    if (!empty($userid)) {
        $params["userid"] = $userid;
        $user = "AND u.id = :userid";
    }
    else {
        $user="";

    }

	$idfield = 'a.' . MOD_THUTONG_MODNAME . 'id';
    if ($moduleinstance->maxattempts==1 || $moduleinstance->gradeoptions == MOD_THUTONG_GRADELATEST) {

        $sql = "SELECT u.id, u.id AS userid, a.sessionscore AS rawgrade
                  FROM {user} u,  {". MOD_THUTONG_USERTABLE ."} a
                 WHERE u.id = a.userid AND $idfield = :moduleid
                       AND a.status = 1
                       $user";
	
	}else{
		switch($moduleinstance->gradeoptions){
			case MOD_THUTONG_GRADEHIGHEST:
				$sql = "SELECT u.id, u.id AS userid, MAX( a.sessionscore  ) AS rawgrade
                      FROM {user} u, {". MOD_THUTONG_USERTABLE ."} a
                     WHERE u.id = a.userid AND $idfield = :moduleid
                           $user
                  GROUP BY u.id";
				  break;
			case MOD_THUTONG_GRADELOWEST:
				$sql = "SELECT u.id, u.id AS userid, MIN(  a.sessionscore  ) AS rawgrade
                      FROM {user} u, {". MOD_THUTONG_USERTABLE ."} a
                     WHERE u.id = a.userid AND $idfield = :moduleid
                           $user
                  GROUP BY u.id";
				  break;
			case MOD_THUTONG_GRADEAVERAGE:
            $sql = "SELECT u.id, u.id AS userid, AVG( a.sessionscore  ) AS rawgrade
                      FROM {user} u, {". MOD_THUTONG_USERTABLE ."} a
                     WHERE u.id = a.userid AND $idfield = :moduleid
                           $user
                  GROUP BY u.id";
				  break;

        }

    } 

    return $DB->get_records_sql($sql, $params);
}


function thutong_get_completion_state($course,$cm,$userid,$type) {
	return thutong_is_complete($course,$cm,$userid,$type);
}


//this is called internally only 
function thutong_is_complete($course,$cm,$userid,$type) {
	 global $CFG,$DB;


	// Get module object
    if(!($moduleinstance=$DB->get_record(MOD_THUTONG_TABLE,array('id'=>$cm->instance)))) {
        throw new Exception("Can't find module with cmid: {$cm->instance}");
    }
	$idfield = 'a.' . MOD_THUTONG_MODNAME . 'id';
	$params = array('moduleid'=>$moduleinstance->id, 'userid'=>$userid);
	$sql = "SELECT  MAX( sessionscore  ) AS grade
                      FROM {". MOD_THUTONG_USERTABLE ."}
                     WHERE userid = :userid AND " . MOD_THUTONG_MODNAME . "id = :moduleid";
	$result = $DB->get_field_sql($sql, $params);
	if($result===false){return false;}
	 
	//check completion reqs against satisfied conditions
	switch ($type){
		case COMPLETION_AND:
			$success = $result >= $moduleinstance->mingrade;
			break;
		case COMPLETION_OR:
			$success = $result >= $moduleinstance->mingrade;
	}
	//return our success flag
	return $success;
}


/**
 * A task called from scheduled or adhoc
 *
 * @param progress_trace trace object
 *
 */
function thutong_dotask(progress_trace $trace) {
    $trace->output('executing dotask');
}

/**
 * Saves a new instance of the thutong into the database
 *
 * Given an object containing all the necessary data,
 * (defined by the form in mod_form.php) this function
 * will create a new instance and return the id number
 * of the new instance.
 *
 * @param object $thutong An object from the form in mod_form.php
 * @param mod_thutong_mod_form $mform
 * @return int The id of the newly inserted thutong record
 */
function thutong_add_instance(stdClass $thutong, mod_thutong_mod_form $mform = null) {
    global $DB;

    $thutong->timecreated = time();

    # You may have to add extra stuff in here #

    return $DB->insert_record(MOD_THUTONG_TABLE, $thutong);
}

/**
 * Updates an instance of the thutong in the database
 *
 * Given an object containing all the necessary data,
 * (defined by the form in mod_form.php) this function
 * will update an existing instance with new data.
 *
 * @param object $thutong An object from the form in mod_form.php
 * @param mod_thutong_mod_form $mform
 * @return boolean Success/Fail
 */
function thutong_update_instance(stdClass $thutong, mod_thutong_mod_form $mform = null) {
    global $DB;

    $thutong->timemodified = time();
    $thutong->id = $thutong->instance;

    # You may have to add extra stuff in here #

    return $DB->update_record(MOD_THUTONG_TABLE, $thutong);
}

/**
 * Removes an instance of the thutong from the database
 *
 * Given an ID of an instance of this module,
 * this function will permanently delete the instance
 * and any data that depends on it.
 *
 * @param int $id Id of the module instance
 * @return boolean Success/Failure
 */
function thutong_delete_instance($id) {
    global $DB;

    if (! $thutong = $DB->get_record(MOD_THUTONG_TABLE, array('id' => $id))) {
        return false;
    }

    # Delete any dependent records here #

    $DB->delete_records(MOD_THUTONG_TABLE, array('id' => $thutong->id));

    return true;
}

/**
 * Returns a small object with summary information about what a
 * user has done with a given particular instance of this module
 * Used for user activity reports.
 * $return->time = the time they did it
 * $return->info = a short text description
 *
 * @return stdClass|null
 */
function thutong_user_outline($course, $user, $mod, $thutong) {

    $return = new stdClass();
    $return->time = 0;
    $return->info = '';
    return $return;
}

/**
 * Prints a detailed representation of what a user has done with
 * a given particular instance of this module, for user activity reports.
 *
 * @param stdClass $course the current course record
 * @param stdClass $user the record of the user we are generating report for
 * @param cm_info $mod course module info
 * @param stdClass $thutong the module instance record
 * @return void, is supposed to echp directly
 */
function thutong_user_complete($course, $user, $mod, $thutong) {
}

/**
 * Given a course and a time, this module should find recent activity
 * that has occurred in thutong activities and print it out.
 * Return true if there was output, or false is there was none.
 *
 * @return boolean
 */
function thutong_print_recent_activity($course, $viewfullnames, $timestart) {
    return false;  //  True if anything was printed, otherwise false
}

/**
 * Prepares the recent activity data
 *
 * This callback function is supposed to populate the passed array with
 * custom activity records. These records are then rendered into HTML via
 * {@link thutong_print_recent_mod_activity()}.
 *
 * @param array $activities sequentially indexed array of objects with the 'cmid' property
 * @param int $index the index in the $activities to use for the next record
 * @param int $timestart append activity since this time
 * @param int $courseid the id of the course we produce the report for
 * @param int $cmid course module id
 * @param int $userid check for a particular user's activity only, defaults to 0 (all users)
 * @param int $groupid check for a particular group's activity only, defaults to 0 (all groups)
 * @return void adds items into $activities and increases $index
 */
function thutong_get_recent_mod_activity(&$activities, &$index, $timestart, $courseid, $cmid, $userid=0, $groupid=0) {
}

/**
 * Prints single activity item prepared by {@see thutong_get_recent_mod_activity()}

 * @return void
 */
function thutong_print_recent_mod_activity($activity, $courseid, $detail, $modnames, $viewfullnames) {
}

/**
 * Function to be run periodically according to the moodle cron
 * This function searches for things that need to be done, such
 * as sending out mail, toggling flags etc ...
 *
 * @return boolean
 * @todo Finish documenting this function
 **/
function thutong_cron () {
    return true;
}

/**
 * Returns all other caps used in the module
 *
 * @example return array('moodle/site:accessallgroups');
 * @return array
 */
function thutong_get_extra_capabilities() {
    return array();
}

////////////////////////////////////////////////////////////////////////////////
// Gradebook API                                                              //
////////////////////////////////////////////////////////////////////////////////

/**
 * Is a given scale used by the instance of thutong?
 *
 * This function returns if a scale is being used by one thutong
 * if it has support for grading and scales. Commented code should be
 * modified if necessary. See forum, glossary or journal modules
 * as reference.
 *
 * @param int $thutongid ID of an instance of this module
 * @return bool true if the scale is used by the given thutong instance
 */
function thutong_scale_used($thutongid, $scaleid) {
    global $DB;

    /** @example */
    if ($scaleid and $DB->record_exists(MOD_THUTONG_TABLE, array('id' => $thutongid, 'grade' => -$scaleid))) {
        return true;
    } else {
        return false;
    }
}

/**
 * Checks if scale is being used by any instance of thutong.
 *
 * This is used to find out if scale used anywhere.
 *
 * @param $scaleid int
 * @return boolean true if the scale is used by any thutong instance
 */
function thutong_scale_used_anywhere($scaleid) {
    global $DB;

    /** @example */
    if ($scaleid and $DB->record_exists(MOD_THUTONG_TABLE, array('grade' => -$scaleid))) {
        return true;
    } else {
        return false;
    }
}



////////////////////////////////////////////////////////////////////////////////
// File API                                                                   //
////////////////////////////////////////////////////////////////////////////////

/**
 * Returns the lists of all browsable file areas within the given module context
 *
 * The file area 'intro' for the activity introduction field is added automatically
 * by {@link file_browser::get_file_info_context_module()}
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param stdClass $context
 * @return array of [(string)filearea] => (string)description
 */
function thutong_get_file_areas($course, $cm, $context) {
    return array();
}

/**
 * File browsing support for thutong file areas
 *
 * @package mod_thutong
 * @category files
 *
 * @param file_browser $browser
 * @param array $areas
 * @param stdClass $course
 * @param stdClass $cm
 * @param stdClass $context
 * @param string $filearea
 * @param int $itemid
 * @param string $filepath
 * @param string $filename
 * @return file_info instance or null if not found
 */
function thutong_get_file_info($browser, $areas, $course, $cm, $context, $filearea, $itemid, $filepath, $filename) {
    return null;
}

/**
 * Serves the files from the thutong file areas
 *
 * @package mod_thutong
 * @category files
 *
 * @param stdClass $course the course object
 * @param stdClass $cm the course module object
 * @param stdClass $context the thutong's context
 * @param string $filearea the name of the file area
 * @param array $args extra arguments (itemid, path)
 * @param bool $forcedownload whether or not force download
 * @param array $options additional options affecting the file serving
 */
function thutong_pluginfile($course, $cm, $context, $filearea, array $args, $forcedownload, array $options=array()) {
    global $DB, $CFG;

    if ($context->contextlevel != CONTEXT_MODULE) {
        send_file_not_found();
    }

    require_login($course, true, $cm);

    send_file_not_found();
}

////////////////////////////////////////////////////////////////////////////////
// Navigation API                                                             //
////////////////////////////////////////////////////////////////////////////////

/**
 * Extends the global navigation tree by adding thutong nodes if there is a relevant content
 *
 * This can be called by an AJAX request so do not rely on $PAGE as it might not be set up properly.
 *
 * @param navigation_node $navref An object representing the navigation tree node of the thutong module instance
 * @param stdClass $course
 * @param stdClass $module
 * @param cm_info $cm
 */
function thutong_extend_navigation(navigation_node $thutongnode, stdclass $course, stdclass $module, cm_info $cm) {
}

/**
 * Extends the settings navigation with the thutong settings
 *
 * This function is called when the context for the page is a thutong module. This is not called by AJAX
 * so it is safe to rely on the $PAGE.
 *
 * @param settings_navigation $settingsnav {@link settings_navigation}
 * @param navigation_node $thutongnode {@link navigation_node}
 */
function thutong_extend_settings_navigation(settings_navigation $settingsnav, navigation_node $thutongnode=null) {
}
////////////////////////////////////////////////////////////////////////////////
// Calendar API                                                             //
////////////////////////////////////////////////////////////////////////////////

/**
 * This function receives a calendar event and returns the action associated with it, or null if there is none.
 *
 * This is used by block_myoverview in order to display the event appropriately. If null is returned then the event
 * is not displayed on the block.
 *
 * @param calendar_event $event
 * @param \core_calendar\action_factory $factory
 * @return \core_calendar\local\event\entities\action_interface|null
 */
function mod_thutong_core_calendar_provide_event_action(calendar_event $event,
                                                       \core_calendar\action_factory $factory) {
    global $DB, $CFG, $USER;
    require_once($CFG->dirroot . '/mod/thutong/locallib.php');

    $cm = get_fast_modinfo($event->courseid)->instances['thutong'][$event->instance];
    $record = $DB->get_record('thutong_attempt', array('id' => $cm->instance), '*', MUST_EXIST) ;

	$courseid = $event->courseid;
    $modulename = $event->modulename;
    $instanceid = $event->instance;

    $coursemodule = get_fast_modinfo($courseid)->instances[$modulename][$instanceid];
    $context = context_module::instance($coursemodule->id);
	
	if( has_capability('mod/thutong:preview',$context) ){
		$livesession = 'start' ;
	}else{
		$livesession = 'join' ;
	}
    return $factory->create_instance(
        get_string('join', 'thutong'),
        //new \moodle_url('/mod/thutong/view.php', ['id' => $cm->id]),
		new \moodle_url('/mod/thutong/view.php', array('view'=>$livesession,'id'=>$cm->id)),
        1,
        is_accessible( $record )
    );
}

/**
 * This function calculates the minimum and maximum cutoff values for the timestart of
 * the given event.
 *
 * It will return an array with two values, the first being the minimum cutoff value and
 * the second being the maximum cutoff value. Either or both values can be null, which
 * indicates there is no minimum or maximum, respectively.
 *
 * If a cutoff is required then the function must return an array containing the cutoff
 * timestamp and error string to display to the user if the cutoff value is violated.
 *
 * A minimum and maximum cutoff return value will look like:
 * [
 *     [1505704373, 'The due date must be after the start date'],
 *     [1506741172, 'The due date must be before the cutoff date']
 * ]
 *
 * @param calendar_event $event The calendar event to get the time range for
 * @param stdClass $instance The module instance to get the range from
 * @return array
 */
function mod_thutong_core_calendar_get_valid_event_timestart_range(\calendar_event $event, \stdClass $instance) {
    $mindate = null;
    $maxdate = null;

    if ($event->eventtype == THUTONG_EVENT_TYPE_OPEN) {
        // The start time of the open event can't be equal to or after the
        // close time of the lesson activity.
        if (!empty($instance->deadline)) {					// $instance->timeclose
            $maxdate = [
                $instance->deadline,						// $instance->timeclose
                get_string('openafterclose', 'thutong')
            ];
        }
    } else if ($event->eventtype == THUTONG_EVENT_TYPE_CLOSE) {
        // The start time of the close event can't be equal to or earlier than the
        // open time of the lesson activity.
		
        if (!empty($instance->available)) { 				// $instance->timeopen
            $mindate = [
                $instance->available,						// $instance->timeopen
                get_string('closebeforeopen', 'thutong')
            ];
        }
    }

    return [$mindate, $maxdate];
}

/**
 * This function will update the lesson module according to the
 * event that has been modified.
 *
 * It will set the available or deadline value of the lesson instance
 * according to the type of event provided.
 *
 * @throws \moodle_exception
 * @param \calendar_event $event
 * @param stdClass $lesson The module instance to get the range from
 */
function mod_thutong_core_calendar_event_timestart_updated(\calendar_event $event, \stdClass $lesson) {
    global $DB;

    if (empty($event->instance) || $event->modulename != 'thutong') {
        return;
    }

    if ($event->instance != $lesson->id) {
        return;
    }

    if (!in_array($event->eventtype, [LESSON_EVENT_TYPE_OPEN, LESSON_EVENT_TYPE_CLOSE])) {
        return;
    }

    $courseid = $event->courseid;
    $modulename = $event->modulename;
    $instanceid = $event->instance;
    $modified = false;

    $coursemodule = get_fast_modinfo($courseid)->instances[$modulename][$instanceid];
    $context = context_module::instance($coursemodule->id);

    // The user does not have the capability to modify this activity.
    if (!has_capability('moodle/course:manageactivities', $context)) {
        return;
    }

	$newdata = new stdClass();
	$newdata->id = $lesson->id ;
	
    if ($event->eventtype == LESSON_EVENT_TYPE_OPEN) {
        // If the event is for the lesson activity opening then we should
        // set the start time of the lesson activity to be the new start
        // time of the event.
        if ($lesson->available != $event->timestart) {
            $lesson->available = $event->timestart;
            $lesson->timemodified = time();
			$modified = true;
			
			//***********
			$newdata->time = $lesson->available ;
			$newdata->timemodified = $lesson->timemodified ;
            
        }
    } else if ($event->eventtype == LESSON_EVENT_TYPE_CLOSE) {
        // If the event is for the lesson activity closing then we should
        // set the end time of the lesson activity to be the new start
        // time of the event.
        if ($lesson->deadline != $event->timestart) {
            $lesson->deadline = $event->timestart;
            $modified = true;
        }
    }
	
	
	
	
	$newdata->duration = $lesson->duration ;
	

    if ($modified) {
        $lesson->timemodified = time();
        $DB->update_record('thutong_attempt', $newdata);
        $event = \core\event\course_module_updated::create_from_cm($coursemodule, $context);
        $event->trigger();
    }
}
