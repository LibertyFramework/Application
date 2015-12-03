<?php

##
require_once __BASE__.'/class/app/PublicWebApp.php';

##
class MainWebApp extends PublicWebApp { 
	
	##
	public function onReady() {
		
		##
		$this->addMenu('navbar',array(
			
			##
			'label' => 'My Items',
			
			##
			'children' => array(
				array(
					'label' => 'Create New Item',
					'link'	=> __HOME__.'/main/create-item/'
				),
				array(
					'label' => 'Items Archive',
					'link'	=> __HOME__.'/main/list-item/'
				),				
			),
		));		
	}
}

