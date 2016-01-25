<?php

//
require_once __MODULE__.'/grid/MainItemGrid.php';

//
class MainController {
	
	//
	public function index_action() {
	
		//
		$app = App::getInstance();
		
		//
		$app->html();		
	}
	
	//
	public function item_create_action() {
	
		//
		$app = App::getInstance();
		
		//
		$app->html(array(
			'title' => 'Create New Item',
		));		
	}
	
	//
	public function item_modify_action() {
	
		//
		$app = App::getInstance();
		
		//
		$app->html();		
	}
	
	//
	public function item_detail_action() {
	
		//
		$app = App::getInstance();
		
		//
		$app->html();		
	}
	
	//
	public function item_save_action() {
	
		//
		$app = App::getInstance();
		
		//
		$app->html();		
	}
	
	//
	public function item_list_action() {
	
		//
		$app = App::getInstance();
		
		//
		$grid = new MainItemGrid();
		
		//
		$app->html(array(
			'grid' => $grid->html(),
		));		
	}
	
	//
	public function item_grid_action() {
	
		//
		$grid = new MainItemGrid();
		
		//
		echo json_encode($grid->ajax());		
	}
	
	//
	public function license_action() {
		
		//
		$app = App::getInstance(); 
		
		//
		$app->html();		
	}
}