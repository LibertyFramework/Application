<?php

//
class SiteController {
	
	//
	public function __construct() {
	
	}
	
	//
	public function indexAction() {

		//
		$app = App::getInstance();
		
		//
		$app->html(array(
			'title' => 'A',
		),'index','Site');
	}
}