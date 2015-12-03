<?php

##
require_once __BASE__.'/class/grid/Grid.php';

##
require_once __MODULE__.'/model/CrmProduct.php';

##
class CrmProductGrid extends Grid {    
	
	##
	public function __construct() {		

		##
		parent::__construct();

		##
		$this->source = CrmProduct::table();
		
		##
		$this->endpoint = __HOME__.'/crm/product-grid';
		
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
			'price' => array(
				
			),
		);	
		
		##
		$this->events = array(
			'row.click' => 'window.location = "'.__HOME__.'/crm/product-detail/id/"+id;', 			
		);
	}	
}