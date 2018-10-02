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
 * Internal library of functions for module thutong
 *
 * All the thutong specific functions, needed to implement the module
 * logic, should go here. Never include this file from your lib.php!
 *
 * @package    mod_thutong
 * @copyright  2018 Digital BlackSmiths
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Creates an actionable Calendar event
 *
 * @param array $things
 * @return object
 */


function delete_schedule_event( $record ) {
    global $CFG, $DB;
    //require_once($CFG->libdir.'/gradelib.php');
    require_once($CFG->dirroot.'/calendar/lib.php');

    //$cm = get_coursemodule_from_instance('lesson', $this->properties->id, $this->properties->course);

	
    $eventdatas = $DB->get_record(
		'thutong_attempt', 
		array('time'=> $record->time , 'duration'=> $record->duration )
	);
	
	$eventid = $DB->get_record('event', array('instance' => (int)$eventdatas->id), '*', MUST_EXIST);
	//Delete record from the events table
	/*$eventid ;
	foreach($eventdatas as $eventdata){
		$eventid = $eventdata->id ;
		break;
	}*/
	if($event = calendar_event::load( $eventid )){
		$event->delete();
	}
	
	//Delete record from the database
	$DB->delete_records(
		'thutong_attempt', 
		array('time'=> $record->time , 'duration'=> $record->duration )
	);
	  
    return true;
}



function create_schedule_event( $record ) {
    global $CFG, $DB;
    require_once($CFG->dirroot.'/calendar/lib.php');
	
	//Add more variables to the record
	$record->deadline = $record->time + $record->duration ;
	$record->available = $record->time ;
	$record->course = $record->courseid ;
	
	//THUTONG_EVENT_TYPE_OPEN: Constant defined somewhere in your code. It is a way to identify the event.
	//CALENDAR_EVENT_TYPE_STANDARD: Used for events we only want to display on the calendar, and are not needed on the block_myoverview.
	//CALENDAR_EVENT_TYPE_ACTION: This is used for events we want to be actionable i.e. needed on block_myoverview.
	
	//Create an event to add to calendar
	$event = new stdClass();
	$event->eventtype = THUTONG_EVENT_TYPE_OPEN; 
	$event->type = !$record->deadline ? CALENDAR_EVENT_TYPE_ACTION : CALENDAR_EVENT_TYPE_STANDARD; 
	$event->name = get_string('calendarstart', 'thutong');
	$event->description = $record->decription ;
	$event->courseid = $record->courseid;
	$event->groupid = 0;
	$event->userid = $record->userid ;
	$event->modulename = 'thutong';
	$event->instance = $record->id;
	$event->timestart = $record->time;
	$event->visible = instance_is_visible('thutong', $record );
	$event->timeduration = $record->duration ;
	$event->timesort = $record->time;
	 
	calendar_event::create($event);

    return true;
}

function is_accessible( $record ) {
    $available = $record->time;
    $deadline = $record->time + $record->duration;
    return (($available == 0 || time() >= $available) && ($deadline == 0 || time() < $deadline));
}