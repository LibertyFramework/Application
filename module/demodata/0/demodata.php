<?php

##
class DemodataModule {

	##
	public function __construct() {
		
		##
		$app = App::getInstance();

		##
		if (get_class($app) == 'SiteWebApp') {
			$app->request['class'] = 'SiteController';
			$app->request['method'] = 'indexAction';
		}
		
		##
		if (get_class($app) == 'BlogWebApp') {
			$app->request['class'] = 'BlogController';
			$app->request['method'] = 'indexAction';
		}	
		
		/*
		##
		$app->addMenu("navbar",array(
			'label' => 'license',
			'link'	=> __HOME__.'/main/license',
		));
		*/
	}
}