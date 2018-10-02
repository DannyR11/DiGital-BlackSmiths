<?php
/**
 *  Schedule Classes.
 *
 * @package    mod_thutong
 * @copyright  2018 Digital BlackSmiths
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
/**
 * Classes for Reports 
 *
 *	The important functions are:
*  process_raw_data : turns log data for one thig (question attempt) into one row
 * fetch_formatted_fields: uses data prepared in process_raw_data to make each field in fields full of formatted data
 * The allusers report is the simplest example 
 *
 * @package    mod_thutong
 * @copyright  2018 Digital BlackSmiths
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
abstract class mod_thutong_base_schedule {

    protected $report="";
    protected $head=array();
	protected $rawdata=null;
    protected $fields = array();
	protected $dbcache=array();
	
	
	abstract function process_raw_data($formdata,$paging=false);
	abstract function fetch_formatted_heading();
	
	public function fetch_fields(){
		return $this->fields;
	}
	public function fetch_head(){
		$head=array();
		foreach($this->fields as $field){
			$head[]=get_string($field,MOD_THUTONG_LANG);
		}
		return $head;
	}
	public function fetch_name(){
		return $this->report;
	}

	public function truncate($string, $maxlength){
		if(strlen($string)>$maxlength){
			$string=substr($string,0,$maxlength - 2) . '..';
		}
		return $string;
	}

	public function fetch_cache($table,$rowid){
		global $DB;
		if(!array_key_exists($table,$this->dbcache)){
			$this->dbcache[$table]=array();
		}
		if(!array_key_exists($rowid,$this->dbcache[$table])){
			$this->dbcache[$table][$rowid]=$DB->get_record($table,array('id'=>$rowid));
		}
		return $this->dbcache[$table][$rowid];
	}

	public function fetch_formatted_time($seconds){
			
			//return empty string if the timestamps are not both present.
			if(!$seconds){return '';}
			$time=time();
			return $this->fetch_time_difference($time, $time + $seconds);
	}
	
	public function fetch_time_difference($starttimestamp,$endtimestamp){
			
			//return empty string if the timestamps are not both present.
			if(!$starttimestamp || !$endtimestamp){return '';}
			
			$s = $date = new DateTime();
			$s->setTimestamp($starttimestamp);
						
			$e =$date = new DateTime();
			$e->setTimestamp($endtimestamp);
						
			$diff = $e->diff($s);
			$ret = $diff->format("%H:%I:%S");
			return $ret;
	}
	
	public function fetch_all_rows_count(){
		return $this->rawdata ? count($this->rawdata) : 0;
	}
	
	public function fetch_formatted_rows($withlinks=true,$paging=false){
		$records = $this->rawdata;
		$fields = $this->fields;
		$returndata = array();
		
		//if we are paging, prepare start and end
		if($paging){
			$startrecord = ($paging->perpage * $paging->pageno) + 1;
			$endrecord = $startrecord + $paging->perpage - 1;
		}
		$reccount = 0;
		//loop through each record and prepare it for output
		foreach($records as $record){
			
			//if paging, limit what we return
			//this is a hack method, best to do it in process_raw_data really
			$reccount++;
			if($paging && ($reccount < $startrecord || $reccount > $endrecord)){
				continue;
			}
			
			$data = new stdClass();
			foreach($fields as $field){
				$data->{$field}=$this->fetch_formatted_field($field,$record,$withlinks);
			}//end of for each field
			$returndata[]=$data;
		}//end of for each record
		return $returndata;
	}
	
	public function fetch_formatted_field($field,$record,$withlinks){
				global $DB;
			switch($field){
				case 'timecreated':
					$ret = date("Y-m-d H:i:s",$record->timecreated);
					break;
				case 'userid':
					$u = $this->fetch_cache('user',$record->userid);
					$ret =fullname($u);
					break;
				default:
					if(property_exists($record,$field)){
						$ret=$record->{$field};
					}else{
						$ret = '';
					}
			}
			return $ret;
	}
	
}

/*
*
*/
class mod_thutong_basic_schedule extends  mod_thutong_base_schedule {
	
	protected $report="basic";
	//protected $fields = array('id','name','timecreated','button');	
	protected $fields = array('time','duration','decription','button');
	protected $headingdata = null;
	protected $qcache=array();
	protected $ucache=array();
	
	public function fetch_formatted_field($field,$record,$withlinks){
				global $DB;
			switch($field){
				case 'time':
						$ret = $record->time ;
					break;
				
				case 'duration':
						$ret = $record->duration ;
					break;
				
				case 'decription':
						$ret = $record->decription ;
					break;
					
				default:
					if(property_exists($record,$field)){
						$ret=$record->{$field};
					}else{
						$ret = '';
					}
			}
			return $ret;
	}
	
	public function fetch_formatted_fields($field,$record,$withlinks){
				global $DB;
			switch($field){
				case 'id':
						$ret = $record->id;
						break;
				
				case 'name':
						$ret = $record->name;
					break;
				
				case 'timecreated':
						$ret = date("Y-m-d H:i:s",$record->timecreated);
					break;
					
				default:
					if(property_exists($record,$field)){
						$ret=$record->{$field};
					}else{
						$ret = '';
					}
			}
			return $ret;
	}
	
	public function fetch_formatted_heading(){
		$record = $this->headingdata;
		$ret='';
		if(!$record){return $ret;}
		//$ec = $this->fetch_cache(MOD_THUTONG_TABLE,$record->englishcentralid);
		return get_string('schedules',MOD_THUTONG_LANG);
		
	}
	
	public function process_raw_data($formdata,$paging=false){
		global $DB;
		
		//heading data
		$this->headingdata = new stdClass();
		
		$emptydata = array();
		//$alldata = $DB->get_records(MOD_THUTONG_TABLE,array());
		//$alldata = $DB->get_records('thutong',array());
		$alldata = $DB->get_records('thutong_attempt',array());
		if($alldata){
			$this->rawdata= $alldata;
		}else{
			$this->rawdata= $emptydata;
		}
		return true;
	}
	
	
	public function add_new_schedule($data , $moduleinstance , $cm ){
		global $USER ;
		global $DB ;
		//require_once($CFG->dirroot . '/mod/thutong/locallib.php');
		require_once(dirname(__FILE__).'/locallib.php');
		
		//Update other data fields
		$data->courseid = $moduleinstance->course ;
		$data->thutongid = $moduleinstance->id ;
		$data->userid = $USER->id ;
		$data->status = 0 ;
		$data->sessionscore = 0 ;
		$data->timecreated = time() ;
		$data->timemodified = time() ;

		//Insert into the database
		$lastinsertid = $DB->insert_record('thutong_attempt', $data, false);
		
		$lastinsert = $DB->get_record('thutong_attempt', 
			array('timecreated'=>$data->timecreated , 'time'=>$data->time ) 
		);
		
		//Create a calendar event for this schedule 
		create_schedule_event( $lastinsert );
		
		//Update the calendar
		return $lastinsertid ;
	}
	
	public function check_ifexist( $data, $moduleinstance , $cm ){
		
	}
}
