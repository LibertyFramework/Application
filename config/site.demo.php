<?php 

##
return array(
	
	##
	'debug'	=> true,
	
	##
	'name'	=> 'My Demo Site',
	
	##
	'home'	=> __URL__.'/app/site/',
	
	##
	'db' => array(
		'pref' => 'site_',
	),
	
	##
	'default' => array(
		'controller' => 'Site',
		'theme' => 'default',
		'theme-option' => array(
			'type' => 'block'  
		),

	),
	
	##
	'module' => array(
		'demodata'
	),	
);

