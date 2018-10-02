<?php

defined('MOODLE_INTERNAL') || die();

require_once(dirname(__FILE__).'\update_form.php');
/**
 * A custom renderer class that extends the plugin_renderer_base.
 *
 * @package mod_thutong
 * @copyright 2018 Digital BlackSmiths
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mod_thutong_renderer extends plugin_renderer_base {
	
	/**
     * Returns the header for the module
     *
     * @param mod $instance
     * @param string $currenttab current tab that is shown.
     * @param int    $item id of the anything that needs to be displayed.
     * @param string $extrapagetitle String to append to the page title.
     * @return string
     */
    public function header($moduleinstance, $cm, $currenttab = '', $itemid = null, $extrapagetitle = null) {
        global $CFG;

        $activityname = format_string($moduleinstance->name, true, $moduleinstance->course);
        if (empty($extrapagetitle)) {
            $title = $this->page->course->shortname.": ".$activityname;
        } else {
            $title = $this->page->course->shortname.": ".$activityname.": ".$extrapagetitle;
        }

        // Build the buttons
        $context = context_module::instance($cm->id);

		// Header setup
        $this->page->set_title($title);
        $this->page->set_heading($this->page->course->fullname);
        $output = $this->output->header();

        if (has_capability('mod/thutong:manage', $context)) {
        // $output .= $this->output->heading_with_help($activityname, 'overview', MOD_THUTONG_LANG);

            if (!empty($currenttab)) {
                ob_start();
                include($CFG->dirroot.'/mod/thutong/tabs.php');
                $output .= ob_get_contents();
                ob_end_clean();
            }
        } else {
            $output .= $this->output->heading($activityname);
        }
	

        return $output;
    }
	
	/**
     * Return HTML to display limited header
     */
    public function notabsheader(){
      	return $this->output->header();
      }

    /**
     *
     */
    public function show_something($showtext) {
		$ret = $this->output->box_start();
		$ret .= $this->output->heading($showtext, 4, 'main');
		$ret .= $this->output->box_end();
        return $ret;
    }

	 /**
     *
     */
	public function show_intro($thutong,$cm){
		$ret = "";
		if (trim(strip_tags($thutong->intro))) {
			$ret .= $this->output->box_start('mod_introbox');
			$ret .= format_module_intro('thutong', $thutong, $cm->id);
			$ret .= $this->output->box_end();
		}
		return $ret;
	}
	
	public function render_schedulemenu($moduleinstance,$cm) {
		
		$basic = new single_button(
			new moodle_url(MOD_THUTONG_URL . '/schedules.php',array('schedules'=>'basic','id'=>$cm->id,'n'=>$moduleinstance->id)), 
			get_string('basicreport',MOD_THUTONG_LANG), 'get');

		$ret = html_writer::div($this->render($basic) .'<br />'  ,MOD_THUTONG_CLASS  . '_listbuttons');

		return $ret;
	}
	
	  /**
       * Returns HTML to display a single paging bar to provide access to other pages  (usually in a search)
       * @param int $totalcount The total number of entries available to be paged through
       * @param stdclass $paging an object containting sort/perpage/pageno fields. Created in view.php and grading.php
       * @param string|moodle_url $baseurl url of the current page, the $pagevar parameter is added
       * @return string the HTML to output.
       */
    function show_paging_bar($totalcount,$paging,$baseurl){
		$pagevar="pageno";
		//add paging params to url (NOT pageno)
		$baseurl->params(array('perpage'=>$paging->perpage,'sort'=>$paging->sort));
    	return $this->output->paging_bar($totalcount,$paging->pageno,$paging->perpage,$baseurl,$pagevar);
    }
	
	public function render_section_html($sectiontitle, $report, $head, $rows, $fields , $moduleinstance , $cm,$modulecontext ) {
		global $CFG;
		if(empty($rows)){
			return $this->render_empty_section_html($sectiontitle);
		}
		
		//set up our table and head attributes
		$tableattributes = array('class'=>'generaltable '. MOD_THUTONG_CLASS .'_table');
		$headrow_attributes = array('class'=>MOD_THUTONG_CLASS . '_headrow');
		
		$htmltable = new html_table();
		$htmltable->attributes = $tableattributes;
		
		
		$htr = new html_table_row();
		$htr->attributes = $headrow_attributes;
		foreach($head as $headcell){
			$htr->cells[]=new html_table_cell($headcell);
		}
		$htmltable->data[]=$htr;
		
		foreach($rows as $row){
			if( ($row->time - time())/60 + ($row->duration/60 ) < 0   ){
				//dont show the schedules that have expired
				continue;
			}
			$htr = new html_table_row();
			//set up descrption cell
			$cells = array();
			foreach($fields as $field){
				
				if( $field == 'button' && has_capability('mod/thutong:preview',$modulecontext) ){
					$cell = new html_table_cell($this->render_deletebutton($moduleinstance,$cm,$row));
				}else if( $field == 'time'){
					//Check if time has past 
					if( $row->{$field} < time() ){
						//Check if user has privilage ...
						if( has_capability('mod/thutong:preview',$modulecontext) ){
							//You can/should go live now 
							$cell = new html_table_cell( 
								'<h2 style="color:red;"> LIVE </h2> ' 
								. $this->render_startbutton($moduleinstance,$cm,$row)
							);
						}else{
							//session is currently live
							$cell = new html_table_cell( 
								'<h2 style="color:red;"> LIVE </h2> ' 
								. $this->render_joinbutton($moduleinstance,$cm,$row)
							);
						}
							
					}else{
						//time havent past its yet to come ...
						$cell = new html_table_cell(date('l jS \of F \@ h:i A',$row->{$field}));
					}
					
				}else if( $field == 'duration'){
					$cell = new html_table_cell( $row->{$field}/60 );
				}else{
					$cell = new html_table_cell($row->{$field});
				}
				//$cell = new html_table_cell($row->{$field});
				$cell->attributes= array('class'=>MOD_THUTONG_CLASS . '_cell_' . $report . '_' . $field);
				$htr->cells[] = $cell;
			}
			//-----------------------------
			$htmltable->data[]=$htr;
		}
		$html = $this->output->heading($sectiontitle, 4);
		$html .= html_writer::table($htmltable);
		return $html;
		
	}
	
	public function render_empty_section_html($sectiontitle) {
		global $CFG;
		return $this->output->heading(get_string('nodataavailable',MOD_THUTONG_LANG),3);
	}
	
	function show_view_footer($moduleinstance,$cm,$formdata,$showreport){
		// print's a popup link to your custom page
		$link = new moodle_url(MOD_THUTONG_URL . '/reports.php',array('report'=>'menu','id'=>$cm->id,'n'=>$moduleinstance->id));
		$ret =  html_writer::link($link, get_string('returntoreports',MOD_THUTONG_LANG));
		$ret .= $this->render_exportbuttons_html($cm,$formdata,$showreport);
		return $ret;
	}
	
	public function render_exportbuttons_html($cm,$formdata,$showreport){
		//convert formdata to array
		$formdata = (array) $formdata;
		$formdata['id']=$cm->id;
		$formdata['report']=$showreport;
		$formdata['format']='csv';
		$excel = new single_button(
			new moodle_url(MOD_THUTONG_URL . '/reports.php',$formdata), 
			get_string('exportexcel',MOD_THUTONG_LANG), 'get');

		return html_writer::div( $this->render($excel),MOD_THUTONG_CLASS  . '_actionbuttons');
	}
	
	public function render_joinbutton($moduleinstance,$cm,$record){
		global $USER ;
		$basic = new single_button(
			new moodle_url(MOD_THUTONG_URL . '/view.php',array('view'=>'join','id'=>$cm->id,'n'=>$moduleinstance->id)), 
			get_string('join',MOD_THUTONG_LANG), 'get');

		$ret = html_writer::div($this->render($basic) .'<br />'  ,MOD_THUTONG_CLASS  . '_listbuttons');

		return $ret;
	}
	
	public function render_startbutton($moduleinstance,$cm,$record){
		global $USER ;
		$basic = new single_button(
			new moodle_url(MOD_THUTONG_URL . '/view.php',array('view'=>'start','id'=>$cm->id,'n'=>$moduleinstance->id)), 
			get_string('start',MOD_THUTONG_LANG), 'get');

		$ret = html_writer::div($this->render($basic) .'<br />'  ,MOD_THUTONG_CLASS  . '_listbuttons');

		return $ret;
	}
	
	
	public function render_deletebutton($moduleinstance,$cm,$record){
		global $USER ;
		$basic = new single_button(
			new moodle_url(
				MOD_THUTONG_URL . '/view.php',
				array('view'=>'delete','id'=>$cm->id,'n'=>$moduleinstance->id,
					'time'=>$record->time, 'duration'=>$record->duration,'decription'=>$record->decription
				)
			), get_string('delete',MOD_THUTONG_LANG), 'get');

		$ret = html_writer::div($this->render($basic) .'<br />'  ,MOD_THUTONG_CLASS  . '_deletebuttons');

		return $ret;
	}
}

class mod_thutong_report_renderer extends plugin_renderer_base {


	public function render_reportmenu($moduleinstance,$cm) {
		
		$basic = new single_button(
			new moodle_url(MOD_THUTONG_URL . '/reports.php',array('report'=>'basic','id'=>$cm->id,'n'=>$moduleinstance->id)), 
			get_string('basicreport',MOD_THUTONG_LANG), 'get');

		$ret = html_writer::div($this->render($basic) .'<br />'  ,MOD_THUTONG_CLASS  . '_listbuttons');

		return $ret;
	}

	public function render_delete_allattempts($cm){
		$deleteallbutton = new single_button(
				new moodle_url(MOD_THUTONG_URL . '/manageattempts.php',array('id'=>$cm->id,'action'=>'confirmdeleteall')), 
				get_string('deleteallattempts',MOD_THUTONG_LANG), 'get');
		$ret =  html_writer::div( $this->render($deleteallbutton) ,MOD_THUTONG_CLASS  . '_actionbuttons');
		return $ret;
	}

	public function render_reporttitle_html($course,$username) {
		$ret = $this->output->heading(format_string($course->fullname),2);
		$ret .= $this->output->heading(get_string('reporttitle',MOD_THUTONG_LANG,$username),3);
		return $ret;
	}

	public function render_empty_section_html($sectiontitle) {
		global $CFG;
		return $this->output->heading(get_string('nodataavailable',MOD_THUTONG_LANG),3);
	}
	
	public function render_exportbuttons_html($cm,$formdata,$showreport){
		//convert formdata to array
		$formdata = (array) $formdata;
		$formdata['id']=$cm->id;
		$formdata['report']=$showreport;
		/*
		$formdata['format']='pdf';
		$pdf = new single_button(
			new moodle_url(MOD_THUTONG_URL . '/reports.php',$formdata),
			get_string('exportpdf',MOD_THUTONG_LANG), 'get');
		*/
		$formdata['format']='csv';
		$excel = new single_button(
			new moodle_url(MOD_THUTONG_URL . '/reports.php',$formdata), 
			get_string('exportexcel',MOD_THUTONG_LANG), 'get');

		return html_writer::div( $this->render($excel),MOD_THUTONG_CLASS  . '_actionbuttons');
	}
	

	
	public function render_section_csv($sectiontitle, $report, $head, $rows, $fields) {

        // Use the sectiontitle as the file name. Clean it and change any non-filename characters to '_'.
        $name = clean_param($sectiontitle, PARAM_FILE);
        $name = preg_replace("/[^A-Z0-9]+/i", "_", trim($name));
		$quote = '"';
		$delim= ",";//"\t";
		$newline = "\r\n";

		header("Content-Disposition: attachment; filename=$name.csv");
		header("Content-Type: text/comma-separated-values");

		//echo header
		$heading="";	
		foreach($head as $headfield){
			$heading .= $quote . $headfield . $quote . $delim ;
		}
		echo $heading. $newline;
		
		//echo data rows
        foreach ($rows as $row) {
			$datarow = "";
			foreach($fields as $field){
				$datarow .= $quote . $row->{$field} . $quote . $delim ;
			}
			 echo $datarow . $newline;
		}
        exit();
	}

	public function render_section_html($sectiontitle, $report, $head, $rows, $fields) {
		global $CFG;
		if(empty($rows)){
			return $this->render_empty_section_html($sectiontitle);
		}
		
		//set up our table and head attributes
		$tableattributes = array('class'=>'generaltable '. MOD_THUTONG_CLASS .'_table');
		$headrow_attributes = array('class'=>MOD_THUTONG_CLASS . '_headrow');
		
		$htmltable = new html_table();
		$htmltable->attributes = $tableattributes;
		
		
		$htr = new html_table_row();
		$htr->attributes = $headrow_attributes;
		foreach($head as $headcell){
			$htr->cells[]=new html_table_cell($headcell);
		}
		$htmltable->data[]=$htr;
		
		foreach($rows as $row){
			$htr = new html_table_row();
			//set up descrption cell
			$cells = array();
			foreach($fields as $field){
				$cell = new html_table_cell($row->{$field});
				$cell->attributes= array('class'=>MOD_THUTONG_CLASS . '_cell_' . $report . '_' . $field);
				$htr->cells[] = $cell;
			}

			$htmltable->data[]=$htr;
		}
		$html = $this->output->heading($sectiontitle, 4);
		$html .= html_writer::table($htmltable);
		return $html;
		
	}
	
	  /**
       * Returns HTML to display a single paging bar to provide access to other pages  (usually in a search)
       * @param int $totalcount The total number of entries available to be paged through
       * @param stdclass $paging an object containting sort/perpage/pageno fields. Created in reports.php and grading.php
       * @param string|moodle_url $baseurl url of the current page, the $pagevar parameter is added
       * @return string the HTML to output.
       */
    function show_paging_bar($totalcount,$paging,$baseurl){
		$pagevar="pageno";
		//add paging params to url (NOT pageno)
		$baseurl->params(array('perpage'=>$paging->perpage,'sort'=>$paging->sort));
    	return $this->output->paging_bar($totalcount,$paging->pageno,$paging->perpage,$baseurl,$pagevar);
    }
	
	function show_reports_footer($moduleinstance,$cm,$formdata,$showreport){
		// print's a popup link to your custom page
		$link = new moodle_url(MOD_THUTONG_URL . '/reports.php',array('report'=>'menu','id'=>$cm->id,'n'=>$moduleinstance->id));
		$ret =  html_writer::link($link, get_string('returntoreports',MOD_THUTONG_LANG));
		$ret .= $this->render_exportbuttons_html($cm,$formdata,$showreport);
		return $ret;
	}

}

class mod_thutong_schedule_renderer extends plugin_renderer_base {


	public function render_schedulemenu($moduleinstance,$cm) {
		
		$basic = new single_button(
			new moodle_url(MOD_THUTONG_URL . '/schedules.php',array('schedules'=>'basic','id'=>$cm->id,'n'=>$moduleinstance->id)), 
			get_string('basicreport',MOD_THUTONG_LANG), 'get');

		$ret = html_writer::div($this->render($basic) .'<br />'  ,MOD_THUTONG_CLASS  . '_listbuttons');

		return $ret;
	}
	
	public function render_createsession( $moduleinstance,$cm){
		//Instantiate thutong_update_form 
		$mform = new thutong_update_form( new moodle_url( MOD_THUTONG_URL . '/schedules.php',
			array('schedules'=>'menu','id'=>$cm->id,'n'=>$moduleinstance->id)
		));
		
		//Form processing and displaying is done here
		if ($fromform = $mform->get_data()) {
			//In this case you process validated data. $mform->get_data() returns data posted in form.
			$data = array(
				'time'=>$fromform->sessionstart,
				'duration'=>$fromform->timelimit,
				'description'=>$fromform->name,
				'id'=>$cm->id,
				'n'=>$moduleinstance->id,
				'schedule'=>'menu'
			);
			redirect( new moodle_url(MOD_THUTONG_URL . '/schedules.php',$data)); 
			//return  new moodle_url(MOD_THUTONG_URL . '/schedules.php',$ndata); 
			//get_string('basicreport',MOD_THUTONG_LANG), 'get');
		} else {
			// this branch is executed if the form is submitted but the data doesn't validate and the form should be redisplayed
			// or on the first display of the form.
			 
			//Set default data (if any)
			$toform;
			//$mform->set_data($toform);
			//displays the form
			$mform->display();
		}
	}
	
	
	  /**
       * Returns HTML to display a single paging bar to provide access to other pages  (usually in a search)
       * @param int $totalcount The total number of entries available to be paged through
       * @param stdclass $paging an object containting sort/perpage/pageno fields. Created in reports.php and grading.php
       * @param string|moodle_url $baseurl url of the current page, the $pagevar parameter is added
       * @return string the HTML to output.
       */
    function show_paging_bar($totalcount,$paging,$baseurl){
		$pagevar="pageno";
		//add paging params to url (NOT pageno)
		$baseurl->params(array('perpage'=>$paging->perpage,'sort'=>$paging->sort));
    	return $this->output->paging_bar($totalcount,$paging->pageno,$paging->perpage,$baseurl,$pagevar);
    }
	
	public function render_section_html($sectiontitle, $report, $head, $rows, $fields , $moduleinstance , $cm ) {
		global $CFG;
		if(empty($rows)){
			return $this->render_empty_section_html($sectiontitle);
		}
		
		//set up our table and head attributes
		$tableattributes = array('class'=>'generaltable '. MOD_THUTONG_CLASS .'_table');
		$headrow_attributes = array('class'=>MOD_THUTONG_CLASS . '_headrow');
		
		$htmltable = new html_table();
		$htmltable->attributes = $tableattributes;
		
		
		$htr = new html_table_row();
		$htr->attributes = $headrow_attributes;
		foreach($head as $headcell){
			$htr->cells[]=new html_table_cell($headcell);
		}
		$htmltable->data[]=$htr;
		
		foreach($rows as $row){
			$htr = new html_table_row();
			//set up descrption cell
			$cells = array();
			foreach($fields as $field){
				if( $field == 'button' && has_capability('mod/thutong:preview',$modulecontext) ){
					$cell = new html_table_cell($this->render_deletebutton($moduleinstance,$cm,$row));
				}else if( $field == 'time'){
					//Check if time has past 
					if( $row->{$field} < time() ){
						//Check if user has privilage ...
						if( has_capability('mod/thutong:preview',$modulecontext) ){
							//You can/should go live now 
							$cell = new html_table_cell( 
								'<h2 style="color:red;"> LIVE </h2> ' 
								. $this->render_startbutton($moduleinstance,$cm,$row)
							);
						}else{
							//session is currently live
							$cell = new html_table_cell( 
								'<h2 style="color:red;"> LIVE </h2> ' 
								. $this->render_joinbutton($moduleinstance,$cm,$row)
							);
						}
							
					}else{
						//time havent past its yet to come ...
						$cell = new html_table_cell(date('l jS \of F Y \@ h:i A',$row->{$field}));
					}
					
				}else if( $field == 'duration'){
					$cell = new html_table_cell( $row->{$field}/60 );
				}else{
					$cell = new html_table_cell($row->{$field});
				}
				//$cell = new html_table_cell($row->{$field});
				$cell->attributes= array('class'=>MOD_THUTONG_CLASS . '_cell_' . $report . '_' . $field);
				$htr->cells[] = $cell;
			}
			//-----------------------------
			$htmltable->data[]=$htr;
		}
		$html = $this->output->heading($sectiontitle, 4);
		$html .= html_writer::table($htmltable);
		return $html;
		
	}
	
	function show_schedules_footer($moduleinstance,$cm,$formdata,$showreport){
		// print's a popup link to your custom page
		$link = new moodle_url(MOD_THUTONG_URL . '/reports.php',array('report'=>'menu','id'=>$cm->id,'n'=>$moduleinstance->id));
		$ret =  html_writer::link($link, get_string('returntoreports',MOD_THUTONG_LANG));
		$ret .= $this->render_exportbuttons_html($cm,$formdata,$showreport);
		return $ret;
	}
	
	public function render_exportbuttons_html($cm,$formdata,$showreport){
		//convert formdata to array
		$formdata = (array) $formdata;
		$formdata['id']=$cm->id;
		$formdata['report']=$showreport;
		$formdata['format']='csv';
		$excel = new single_button(
			new moodle_url(MOD_THUTONG_URL . '/reports.php',$formdata), 
			get_string('exportexcel',MOD_THUTONG_LANG), 'get');

		return html_writer::div( $this->render($excel),MOD_THUTONG_CLASS  . '_actionbuttons');
	}
	
	public function render_joinbutton($moduleinstance,$cm,$record){
		global $USER ;
		$basic = new single_button(
			new moodle_url(MOD_THUTONG_URL . '/view.php',array('view'=>'join','id'=>$cm->id,'n'=>$moduleinstance->id)), 
			get_string('join',MOD_THUTONG_LANG), 'get');

		$ret = html_writer::div($this->render($basic) .'<br />'  ,MOD_THUTONG_CLASS  . '_sessionbuttons');

		return $ret;
	}
	
	public function render_startbutton($moduleinstance,$cm,$record){
		global $USER ;
		$basic = new single_button(
			new moodle_url(MOD_THUTONG_URL . '/view.php',array('view'=>'start','id'=>$cm->id,'n'=>$moduleinstance->id)), 
			get_string('start',MOD_THUTONG_LANG), 'get');

		$ret = html_writer::div($this->render($basic) .'<br />'  ,MOD_THUTONG_CLASS  . '_sessionbuttons');

		return $ret;
	}
	//Input from the input boxes

	public function render_deletebutton($moduleinstance,$cm,$record){
		global $USER ;
		$basic = new single_button(
			new moodle_url(
				MOD_THUTONG_URL . '/view.php',
				array('view'=>'delete','id'=>$cm->id,'n'=>$moduleinstance->id,
					'time'=>$record->time, 'duration'=>$record->duration,'decription'=>$record->decription
				)
			), get_string('delete',MOD_THUTONG_LANG), 'get');

		$ret = html_writer::div($this->render($basic) .'<br />'  ,MOD_THUTONG_CLASS  . '_deletebuttons');

		return $ret;
	}
}

