<?php

//
require_once __BASE__.'/class/grid/Grid.php';

//
require_once __MODULE__.'/model/CrmQuote.php';

//
class CrmQuoteGrid extends Grid {    
	
	//
	public function __construct() {		

		//
		parent::__construct();

		//
		$q = CrmQuote::table();
		$a = CrmAccount::table();
		
		//
		$sql = "      SELECT q.id"
			 . "           , q.date"
			 . "           , a.companyname AS account"
			 . "        FROM {$q} AS q"
			 . "   LEFT JOIN {$a} AS a ON a.id = q.account"
			 ;
		
		//
		$this->source = $sql;
		
		//
		$this->endpoint = __HOME__.'/crm/quote-grid';
		
		//
		$this->columns = array(
			
			//
			'id' => array(
				'visible' => true,
			),	
			
			//
			'date' => array(
				
			),
			
			//
			'account' => array(
				
			),
		);	
		
		//
		$this->events = array(
			'row.click' => 'window.location = "'.__HOME__.'/crm/account-detail/id/"+id;', 			
		);
	}	
}