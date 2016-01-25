<?php
// 
define('__NAME__','crm');
define('__MODE__','demo');

//
require_once __DIR__.'/../../class/Setup.php';

//
class CrmSetup extends Setup {
	
	//
	public function populate() {
		
		//
		require_once __BASE__.'/lib/spreadbase/SpreadBase.php';
		
		//
		require_once __BASE__.'/module/demodata/model/CrmAccount.php';
		
		//
		CrmAccount::drop();
		
		//
		foreach(SpreadBase::select(__BASE__.'/files/crm/xls/Account.xls') as $row) {
			
			//
			$account = CrmAccount::map($row,array(
				'Company Name' => 'companyname',				
			));
			
			//
			$account->store_insert(true);
		}
		
		//
		require_once __BASE__.'/module/demodata/model/CrmProduct.php';
		
		//
		CrmProduct::drop();
		
		//
		CrmProduct::import(array(
			array('name'=>'Stone','price'=>1.5),
			array('name'=>'Sand','price'=>2.4),
			array('name'=>'Iron','price'=>5.2),
		));		
	}	
}

//
$setup = new CrmSetup(
	__DIR__.'/../../bootstrap.php',
	__DIR__.'/index.php'
);

//
$setup->run();