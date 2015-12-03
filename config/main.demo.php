<?php 

##
return array(
	
	##
	'debug'	=> true,
	
	##
	'name'	=> 'My Application',
		
	##
	'home'	=> __URL__.'/',
	
	##
	'db' => array(
		'pref' => 'main_',
	),
	
	##
	'default' => array(
		'locale'		=> 'en_US',
		'controller'	=> 'Main',
		'theme'			=> 'default',
		'theme-option'	=> array(
			'type' => 'fluid'  
		),
	),
	
	##
	'module' => array(
		'demodata'
	),	
);

