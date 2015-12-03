<?php

##
class BlogController {
	
	##
	public function __construct() {
	
	}
	
	##
	public function index_action() {

		##
		$app = App::getInstance();
		
		##
		$app->html(array(
			'title' => 'A',
		),'index','Blog');
	}
	
	##
	public function save_action() {
				
	}
}