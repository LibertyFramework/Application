<?php 

##
return array(
	
	##
	'debug'	=> true,
	
	##
	'name'	=> 'CRM',
	
	##
	'home'	=> '/app/crm',
	
	##
	'db' => array(		
		'pref' => 'crm_',
	),
	
	##
	'default' => array(
		'controller' => 'Crm',
		'theme'		 => 'default',
		'theme-option' => array(
			'type' => 'fluid',  
			'navbar' => 'fixed'  
		),		
	),
	
	##
	'module' => array(
		'demodata'
	),
	
);

