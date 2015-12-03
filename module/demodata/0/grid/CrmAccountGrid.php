<?php

/**
 * 
 */
namespace Module\Demodata;

/**
 * 
 */
use Javanile\Liberty;
use Module\Demodata\Model\CrmAccount;

/**
 * 
 */
class CrmAccountGrid extends Liberty\Grids\Grid 
{    
	##
	public function __construct() {		

		## abolire la chiamare del costruttore della classe parent per eleganza
		#parent::__construct();

		##
		$app = App::getInstance();
		
		
		##
		$this->source = CrmAccount::table();
		
		##
		$this->endpoint = $app->url('crm/account-grid');
		
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