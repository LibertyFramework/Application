<?php

//
require_once __BASE__.'/module/userrole/grid/UserGrid.php';

//
class UserController {
	
	//
    public function index_action(){   
      
		//
		$app = App::getInstance();		
		
		//
		$grid = new UserGrid();		
		
		//
		$app->html(array(
			'title'		=> _('User list'),
			'createUrl' => __HOME__.'/user/create',
			'grid'		=> $grid->html(),
		)); 			
    }
	
	//
    public function create_action() {		
		
		//
		$app = App::getInstance();				
		
		//
		$app->html(array(
			'title'		=> _('New user'),
			'closeUrl'	=> __HOME__.'/user',
			'item'		=> new User(),
		));
    }    
	
	//
    public function detail_action() {		
	
		//
		$app = App::getInstance();		
		
		//
		$id = (int) $app->getUrlParam('id');		
		
		//
		$user = User::load($id);		
		
		//
		$app->html(array(
			'title' => 'Dettaglio Utente',
			'modifyUrl' => __HOME__.'/user/modify/id/'.$id,
			'item'	=> $user,			
		));
    }
	
	//
    public function delete_action(){
		
		//
		$app = App::getInstance();		
		
		//
		$id = (int) $app->getUrlParam('id');		
		
		//
		User::delete($id);		
		
		//
		$app->redirect(__HOME__.'/user/');
    }
	
	//
    public function modify_action() {
	
		//
		$app = App::getInstance();
		
		//
		$id = (int) $app->getUrlParam('id');
		
		//
		$user = User::load($id);
		
		//
		$user->password = "";		
		
		//
		$app->html(array(
			'title' => _('Modify user'),
			'item'	=> $user,			
		));
	}
	
	//
    public function save_action() {		
		
		//
		$app = App::getInstance();		
		
		//
		if ($_POST['password']) {
			$_POST['password'] = md5($_POST['password']);
		} else {
			unset($_POST['password']);
		}
		
		//
		$item = User::build($_POST);
		
		//
		$item->store();		
		
		//
		$app->redirect(__HOME__.'/user/');
    }
	
	//
    public function grid_action() {		
		
		//	
		$grid = new UserGrid();		
		
		//
		echo json_encode($grid->ajax());			
    }

	//
    public function render_action() {		
		
		//
		$id = (int) $_POST['id'];
		
		//
		$item = User::load($id);		

		//
		echo json_encode($item);
    }  
}    
