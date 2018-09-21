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
 * Prints a particular instance of thutong
 *
 * You can have a rather longer description of the file as well,
 * if you like, and it can span multiple lines.
 *
 * @package    mod_thutong
 * @copyright  2018 Digital BlackSmiths
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


require_once(dirname(dirname(dirname(__FILE__))).'/config.php');
require_once(dirname(__FILE__).'/lib.php');
require_once(dirname(__FILE__).'/scheduleclasses.php');



$id = optional_param('id', 0, PARAM_INT); // course_module ID, or
$n  = optional_param('n', 0, PARAM_INT);  // thutong instance ID - it should be named as the first character of the module
$showschedule = optional_param('schedule', 'menu', PARAM_TEXT); // schedule type
$showiframe = optional_param('view', 'no', PARAM_TEXT); // schedule type


//paging details
$paging = new stdClass();
$paging->perpage = optional_param('perpage',5, PARAM_INT);
$paging->pageno = optional_param('pageno',1, PARAM_INT);
$paging->sort  = optional_param('sort','iddsc', PARAM_TEXT);

if ($id) {
    $cm         = get_coursemodule_from_id('thutong', $id, 0, false, MUST_EXIST);
    $course     = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
    $moduleinstance  = $DB->get_record('thutong', array('id' => $cm->instance), '*', MUST_EXIST);
} elseif ($n) {
    $moduleinstance  = $DB->get_record('thutong', array('id' => $n), '*', MUST_EXIST);
    $course     = $DB->get_record('course', array('id' => $moduleinstance->course), '*', MUST_EXIST);
    $cm         = get_coursemodule_from_instance('thutong', $moduleinstance->id, $course->id, false, MUST_EXIST);
} else {
    print_error(get_string('missingidandcmid',MOD_THUTONG_LANG));
}

$PAGE->set_url('/mod/thutong/view.php', array('id' => $cm->id));
require_login($course, true, $cm);
$modulecontext = context_module::instance($cm->id);

//Diverge logging logic at Moodle 2.7
if($CFG->version<2014051200){
	add_to_log($course->id, 'thutong', 'view', "view.php?id={$cm->id}", $moduleinstance->name, $cm->id);
}else{
	// Trigger module viewed event.
	$event = \mod_thutong\event\course_module_viewed::create(array(
	   'objectid' => $moduleinstance->id,
	   'context' => $modulecontext
	));
	$event->add_record_snapshot('course_modules', $cm);
	$event->add_record_snapshot('course', $course);
	$event->add_record_snapshot('thutong', $moduleinstance);
	$event->trigger();
} 

//if we got this far, we can consider the activity "viewed"
$completion = new completion_info($course);
$completion->set_module_viewed($cm);

//are we a teacher or a student?
$mode= "view";

/// Set up the page header
$PAGE->set_title(format_string($moduleinstance->name));
$PAGE->set_heading(format_string($course->fullname));
$PAGE->set_context($modulecontext);
$PAGE->set_pagelayout('course');

	//Get an admin settings 
	$config = get_config(MOD_THUTONG_FRANKY);
  	$someadminsetting = $config->someadminsetting;

	//Get an instance setting
	$someinstancesetting = $moduleinstance->someinstancesetting;


//get our javascript all ready to go
//We can omit $jsmodule, but its nice to have it here, 
//if for example we need to include some funky YUI stuff
$jsmodule = array(
	'name'     => 'mod_thutong',
	'fullpath' => '/mod/thutong/module.js',
	'requires' => array()
);

//here we set up any info we need to pass into javascript
$opts = Array();
$opts['someinstancesetting'] = $someinstancesetting;


//this inits the M.mod_thutong thingy, after the page has loaded.
$PAGE->requires->js_init_call('M.mod_thutong.helper.init', array($opts),false,$jsmodule);

//this loads any external JS libraries we need to call
//$PAGE->requires->js("/mod/thutong/js/somejs.js");
//$PAGE->requires->js(new moodle_url('http://www.somewhere.com/some.js'),true);

//This puts all our display logic into the renderer.php file in this plugin
//theme developers can override classes there, so it makes it customizable for others
//to do it this way.
$renderer = $PAGE->get_renderer('mod_thutong');
//---------------------------------------------------------------------------------------------------------
//From here we actually display the page. This is core renderer stuff
switch($showiframe){
	case 'start':
		if(has_capability('mod/thutong:preview',$modulecontext)){
			echo $renderer->header($moduleinstance, $cm, $mode, null, get_string('view', MOD_THUTONG_LANG));
		}else{
			echo $renderer->notabsheader();
		}
		//$liveurl = 'localhost:8080/client' . $USER->id ;
		$liveurl =  "https://docs.moodle.org" ;
		echo '<iframe height="600" width="1000" src="'. $liveurl .'"> Your browser does not diplay iFrames</iframe>';
		echo $renderer->footer();
		return;
	case 'join':
		if(has_capability('mod/thutong:preview',$modulecontext)){
			echo $renderer->header($moduleinstance, $cm, $mode, null, get_string('view', MOD_THUTONG_LANG));
		}else{
			echo $renderer->notabsheader();
		}
		//$liveurl = 'localhost:8080' . $USER->id ;
		$liveurl = "https://docs.moodle.org" ; 
		echo '<iframe height="600" width="1000" src="'. $liveurl .'"> Your browser does not diplay iFrames</iframe>';
		echo $renderer->footer();
		return;
	case 'delete':
		//call some methods to delete schedule from database ;
		break;
	default:
		break;
}
$mode = "basicviews";
$extraheader="<h2>Schedules</h2>";
$basicview = new mod_thutong_basic_schedule();
$formdata = new stdClass();
$basicview->process_raw_data($formdata);
$basicviewheading = $basicview->fetch_formatted_heading();
$basicviewrows = $basicview->fetch_formatted_rows(true);
$allrowscount = $basicview->fetch_all_rows_count();
$pagingbar = $renderer->show_paging_bar($allrowscount, $paging,$PAGE->url);

//if we are teacher we see tabs. If student we just see the basicview
if(has_capability('mod/thutong:preview',$modulecontext)){
	echo $renderer->header($moduleinstance, $cm, $mode, null, get_string('view', MOD_THUTONG_LANG));
}else{
	echo $renderer->notabsheader();
}

echo $renderer->show_intro($moduleinstance,$cm);

//if we have too many attempts, lets report that.
if($moduleinstance->maxattempts > 0){
	$attempts =  $DB->get_records(MOD_THUTONG_USERTABLE,array('userid'=>$USER->id, MOD_THUTONG_MODNAME.'id'=>$moduleinstance->id));
	if($attempts && count($attempts)<$moduleinstance->maxattempts){
		echo get_string("exceededattempts",MOD_THUTONG_LANG,$moduleinstance->maxattempts);
	}
}

//Here we output the basicview as it is from the database
//echo $extraheader;
echo $pagingbar;
echo $renderer->render_section_html($basicviewheading, $basicview->fetch_name(), $basicview->fetch_head(), $basicviewrows, $basicview->fetch_fields(),$moduleinstance,$cm,$modulecontext);
echo $pagingbar;
//echo $renderer->show_view_footer($moduleinstance,$cm,$formdata,$showschedule);

//This is specfic to our renderer
//echo $renderer->show_something($someadminsetting);
//echo $renderer->show_something($someinstancesetting);

// Finish the page
echo $renderer->footer();
