<?php

##
require_once __BASE__.'/model/grid/Grid.php';

##
require_once __MODULE__.'/model/MainItem.php';

##
class MainItemGrid extends Grid {    
	
	##
	public function __construct() {		

		##
		parent::__construct();

		##
		$this->source = MainItem::table();
		
		##
		$this->endpoint = __HOME__.'/main/grid-item';
		
		##
		$this->columns = array(
			
			##
			'id' => array(
				'visible' => true,
			),	
			
			##
			'name' => array(
				
			),

			##
			'value' => array(
				
			),
		);	
		
		##
		$this->events = array(
			'row.click' => 'window.location = "'.__HOME__.'/crm/detail/id/"+id;', 			
		);
	}	
}