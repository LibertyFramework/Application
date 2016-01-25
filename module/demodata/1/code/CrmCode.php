<?php

//
require_once __MODULE__.'/grid/CrmQuoteGrid.php';
require_once __MODULE__.'/grid/CrmContactGrid.php';
require_once __MODULE__.'/grid/CrmAccountGrid.php';
require_once __MODULE__.'/grid/CrmAccountDialogGrid.php';
require_once __MODULE__.'/grid/CrmProductGrid.php';

//
class CrmController {
		
	//
	public function index_action() {
		
		//
		$app = App::getInstance();
		
		//
		$app->html();			
	}
	
	//
	public function account_action() {
		
		//
		$app = App::getInstance();
				
		//
		$grid = new CrmAccountGrid();
		
		//
		$app->html(array(
			'title' => _('Account'),
			'grid'	=> $grid->html(),
		));			
	}
	
	//
	public function account_grid_action() {
				
		//
		$grid = new CrmAccountGrid();
		
		//
		echo json_encode($grid->json());		
	}	
	
	//
	public function account_detail_action() {
		
		//
		$app = App::getInstance();
		
		//
		$id = $app->getUrlParam('id'); 

		//
		$account = CrmAccount::load($id); 
		
		//
		$app->html(array(
			'title'	  => _('Account detail'),
			'account' => $account,
		));
	}
	
	//
	public function account_search_dialog_action() {
		
		//
		$app = App::getInstance();
				
		//
		$grid = new CrmAccountDialogGrid();
		
		//
		echo $app->htmlView(array(
			'title' => _('Account'),
			'grid'	=> $grid->html(),
		));			
	}
	
	//
	public function contact_action() {
		
		//
		$app = App::getInstance();
				
		//
		$grid = new CrmAccountGrid();
		
		//
		$app->html(array(
			'title' => _('Quote'),
			'grid'	=> $grid->html(),
		));				
	}

	//
	public function quote_action() {
		
		//
		$app = App::getInstance();
				
		//
		$grid = new CrmQuoteGrid();
		
		//
		$app->html(array(
			'title' => _('Quote'),
			'grid'	=> $grid->html(),
			'createUrl' => __HOME__.'/crm/quote-create',
		));				
	}
	
	//
	public function quote_grid_action() {
				
		//
		$grid = new CrmQuoteGrid();
		
		//
		echo json_encode($grid->json());		
	}	
	
	//
	public function quote_create_action() {
		
		//
		$app = App::getInstance();
		
		//
		$app->html(array(			
			'title' => _('Create Quote'),		
			'quote' => new CrmQuote(),
		));		
	}	
	
	//
	public function product_action() {
		
		//
		$app = App::getInstance();
				
		//
		$grid = new CrmProductGrid();
		
		//
		$app->html(array(
			'title' => _('Product'),
			'grid'	=> $grid->html(),
		));				
	}
	
	//
	public function product_grid_action() {
				
		//
		$grid = new CrmProductGrid();
		
		//
		echo json_encode($grid->json());		
	}	
	
	
}