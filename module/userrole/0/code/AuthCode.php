<?php
/**
 * 
 */
namespace Module\Userrole\Code;

/**
 * 
 */
use Javanile\Liberty\Runtime;
use Module\Userrole\Model\User;

/**
 * 
 */
class AuthJob 
{		
	/**
	 * 
	 */
	function index_action() {		
		
		//
		$app = Runtime::getApp();
		
		//
		echo $app->htmlView();
	}
	
	/**
	 * 
	 */
	function login_action() {
		
		//
		$app = Liberty\Runtime::getApp();

		//
		$username = @$_POST["username"];
		$password = @$_POST["password"];
		$redirect = @$_POST["redirect"];
		$remember = @$_POST["remember"];		
				
		//
		if (User::canUserLogin($username, $password)) {		
						
			//
			$user = User::fetchByUsername($username);	
			
			//
			$app->setSessionUser(
				$user->id,
				$user->username,
				array($user->role)
			);						
			
			//
			$app->redirect($redirect ? $redirect : null);						
		} 
		
		//
		else {			
			$app->redirect('auth',array(
				'message' => 'Username non valido'				
			));						
		}		
	}
	
	/**
	 * logout action
	 *
	 */
	public function logout_action() {
		
		//
		$app = Liberty\Runtime::getApp();

		//
		$app->delSessionUser();
		
		//
		$app->redirect('auth');
	}		
}