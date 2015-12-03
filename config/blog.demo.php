<?php 

##
return array(
	
	##
	'debug'	=> true,
	
	##
	'name'	=> 'My Personal Blog',
	
	##
	'home'	=> '/app/blog/',
	
	##
	'db' => array(
		'pref' => 'blog_',
	),
	
	##
	'default' => array(
		'controller' => 'Blog',
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

