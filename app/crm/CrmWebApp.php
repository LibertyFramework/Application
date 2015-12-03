<?php

##
use Javanile\Liberty;

##
class CrmWebApp extends Liberty\Apps\PrivateWebApp 
{
	##
	public function onReady() {
				
		##
		$this->addMenu('navbar',array(
			'label' => 'Account',
			'link'	=> __HOME__.'/crm/account/',			
		));
		
		##
		$this->addMenu('navbar',array(
			'label' => 'Contact',
			'link'	=> __HOME__.'/crm/contact/',			
		));		

		##
		$this->addMenu('navbar',array(
			'label' => 'Quote',
			'link'	=> __HOME__.'/crm/quote/',			
		));		

		##
		$this->addMenu('navbar',array(
			'label' => 'Product',
			'link'	=> __HOME__.'/crm/product/',			
		));		
	}		
}

