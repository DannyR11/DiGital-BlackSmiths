<?php

require_once("$CFG->libdir/formslib.php");
 
class thutong_update_form extends moodleform {
 
    function definition() {
        global $CFG;
 
        $mform = $this->_form;	// Don't forget the underscore! 
		
		//Grouping the update live session form
		
		//1. A group of select boxes to select a date (Day Month and Year) and time (Hour and Minute)
		//		the fourth param here is an array of options
		$startpoint = array(
			'startyear' => Date("Y"), 
			'timezone'  => 140,
			'step'      => 10
		);
		$mform->addElement('date_time_selector', 'sessionstart', get_string('from'), $startpoint );
		
		//2. Lets the user input an interval of time.
		//$opt = array('optional' => false);
		//$size = array('size' => 4);
		//$mform->addElement('duration', 'timelimit', get_string('timelimit', 'thutong'),$opt , $size );
		$mform->addElement('duration', 'timelimit', get_string('timelimit', 'thutong') );
		
		//3. For a simple text input element.
		$attributes=array('size'=>'50');
        $mform->addElement('text', 'name', get_string('description', 'thutong'), $attributes);
		
		//4. Add all the 'action' buttons to the end of your form i.e. (submit/reset/cancel)
		$this->add_action_buttons(false,'create');

    }                           
}               