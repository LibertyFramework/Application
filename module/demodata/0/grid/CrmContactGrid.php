<?php

##
require_once __BASE__.'/class/grid/Grid.php';

##
require_once __MODULE__.'/model/CrmContact.php';

##
class CrmContactGrid extends Grid {    
	
	##
	public function __construct() {		

		##
		parent::__construct();

		##
		$this->source = CrmAccount::table();
		
		##
		$this->endpoint = __HOME__.'/crm/account-grid';
		
		##
		$this->columns = array(
			
			##
			'id' => array(
				'visible' => true,
			),	
			
			##
			'companyname' => array(
				
			),
		);	
		
		##
		$this->events = array(
			'row.click' => 'window.location = "'.__HOME__.'/crm/account-detail/id/"+id;', 			
		);
	}	
}