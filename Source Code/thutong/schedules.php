<?php

/**
 * Schedule for thutong
 *
 *
 * @package    mod_thutong
 * @copyright  2018 Digital BlackSmiths
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


require_once(dirname(dirname(dirname(__FILE__))).'/config.php');
require_once(dirname(__FILE__).'/lib.php');
require_once(dirname(__FILE__).'/scheduleclasses.php');


$id = optional_param('id', 0, PARAM_INT); // course_module ID, or
$n  = optional_param('n', 0, PARAM_INT);  // englishcentral instance ID - it should be named as the first character of the module
$format = optional_param('format', 'html', PARAM_TEXT); //export format csv or html
$showschedule = optional_param('schedule', 'menu', PARAM_TEXT); // schedule type
$userid = optional_param('userid', 0, PARAM_INT); // userid
$attemptid = optional_param('attemptid', 0, PARAM_INT); // attemptid

//Input from the input boxes
$forminput = new stdClass();
$forminput->time = optional_param('time', 0, PARAM_INT);
$forminput->duration = optional_param('duration', 0, PARAM_INT);
$forminput->decription = optional_param('description', 'description', PARAM_TEXT);

//paging details
$paging = new stdClass();
$paging->perpage = optional_param('perpage',40, PARAM_INT);
$paging->pageno = optional_param('pageno',0, PARAM_INT);
$paging->sort  = optional_param('sort','iddsc', PARAM_TEXT);


if ($id) {
    $cm         = get_coursemodule_from_id(MOD_THUTONG_MODNAME, $id, 0, false, MUST_EXIST);
    $course     = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
    $moduleinstance  = $DB->get_record(MOD_THUTONG_TABLE, array('id' => $cm->instance), '*', MUST_EXIST);
} elseif ($n) {
    $moduleinstance  = $DB->get_record(MOD_THUTONG_TABLE, array('id' => $n), '*', MUST_EXIST);
    $course     = $DB->get_record('course', array('id' => $moduleinstance->course), '*', MUST_EXIST);
    $cm         = get_coursemodule_from_instance(MOD_THUTONG_TABLE, $moduleinstance->id, $course->id, false, MUST_EXIST);
} else {
    error('You must specify a course_module ID or an instance ID');
}

if($showschedule=='menu'){
	$PAGE->set_url(MOD_THUTONG_URL . '/schedules.php', array('id' => $cm->id));
}else{
	$PAGE->set_url(MOD_THUTONG_URL . '/schedules.php', 
		array('id' => $cm->id,'format'=>$format,'schedule'=>$showschedule,'userid'=>$userid,'attemptid'=>$attemptid));
}
require_login($course, true, $cm);
$modulecontext = context_module::instance($cm->id);

//Diverge logging logic at Moodle 2.7
if($CFG->version<2014051200){
	add_to_log($course->id, MOD_THUTONG_MODNAME, 'schedules', "schedules.php?id={$cm->id}", $moduleinstance->name, $cm->id);
}else{
	// Trigger module viewed event.
	$event = \mod_thutong\event\course_module_viewed::create(array(
	   'objectid' => $moduleinstance->id,
	   'context' => $modulecontext
	));
	$event->add_record_snapshot('course_modules', $cm);
	$event->add_record_snapshot('course', $course);
	$event->add_record_snapshot(MOD_THUTONG_MODNAME, $moduleinstance);
	$event->trigger();
} 


/// Set up the page header
$PAGE->set_title(format_string($moduleinstance->name));
$PAGE->set_heading(format_string($course->fullname));
$PAGE->set_context($modulecontext);
$PAGE->set_pagelayout('course');

	//Get an admin settings 
	$config = get_config(MOD_THUTONG_FRANKY);

//==================================================================================================================
//This puts all our display logic into the renderer.php files in this plugin
$renderer = $PAGE->get_renderer(MOD_THUTONG_FRANKY);
$schedulerenderer = $PAGE->get_renderer(MOD_THUTONG_FRANKY,'schedule');

//From here we actually display the page. This is core renderer stuff
$mode = "schedules";
$extraheader="<h2>Schedules</h2>";
switch ($showschedule){

	//not a true schedule, separate implementation in renderer
	case 'menu':
		echo $renderer->header($moduleinstance, $cm, $mode, null, get_string('schedules', MOD_THUTONG_LANG));
		//echo '<iframe height="600" width="1200" src="https://docs.moodle.org"> Your browser does not diplay iFrames</iframe>';
		echo $schedulerenderer->render_createsession($moduleinstance,$cm);
		if( !$forminput->time == 0 ){
			$newdate = date( 'l jS \of F Y \@ h:i A' , $forminput->time) ;
			echo '<div style="border: 2px solid green;border-radius: 5px;text-align: center;color: blue;">';
			echo '<h2> New Session Scheduled </h2>';
			echo '<p>'. $newdate .' </p> ';
			echo '<p>'. $forminput->duration/60 . ' minutes </p>';
			echo '<p style="border: border-box;border-radius: 10px;background-color: yellow;">'. $forminput->decription . '</p>' ;
			echo '</div>';
			$schedule = new mod_thutong_basic_schedule();
			$lastinsertid = $schedule->add_new_schedule( $forminput , $moduleinstance , $cm ) ;
		}
		//echo '<form action="'. new moodle_url( MOD_THUTONG_URL . '/schedules.php').'">First name:<br><input type="text" name="firstname" value="Mickey"><br>Last name:<br><input type="text" name="lastname" value="Mouse"><br><br><input type="submit" value="Submit"></form>'; 
		// Finish the page
		
		echo $renderer->footer();
		return;

	case 'basic':
		$schedule = new mod_thutong_basic_schedule();
		$formdata = new stdClass();
		break;

		
		
	default:
		echo $renderer->header($moduleinstance, $cm, $mode, null, get_string('schedules', MOD_THUTONG_LANG));
		echo "unknown schedule type.";
		echo $renderer->footer();
		return;
}

/*
1) load the class
2) call schedule->process_raw_data
3) call $rows=schedule->fetch_formatted_records($withlinks=true(html) false(print/excel))
5) call $schedulerenderer->render_section_html($sectiontitle, $schedule->name, $schedule->get_head, $rows, $schedule->fields);
*/

$schedule->process_raw_data($formdata);
$scheduleheading = $schedule->fetch_formatted_heading();

switch($format){
	case 'join':
		//Here we open the ifream for the live session 
		$schedulerows = $schedule->fetch_formatted_rows(false);
		$schedulerenderer->render_section_csv($scheduleheading, $schedule->fetch_name(), $schedule->fetch_head(), $schedulerows, $schedule->fetch_fields());
		exit;
	default:
		//Here we output the schedule as it is from the database
		$schedulerows = $schedule->fetch_formatted_rows(true);
		$allrowscount = $schedule->fetch_all_rows_count();
		$pagingbar = $schedulerenderer->show_paging_bar($allrowscount, $paging,$PAGE->url);
		echo $renderer->header($moduleinstance, $cm, $mode, null, get_string('schedules', MOD_THUTONG_LANG));
		echo $extraheader;
		echo $pagingbar;
		echo $schedulerenderer->render_section_html($scheduleheading, $schedule->fetch_name(), $schedule->fetch_head(), $schedulerows, $schedule->fetch_fields(),$moduleinstance,$cm);
		echo $pagingbar;
		echo $schedulerenderer->show_schedules_footer($moduleinstance,$cm,$formdata,$showschedule);
		echo $renderer->footer();
}