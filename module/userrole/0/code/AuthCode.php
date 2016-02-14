<?php
/**
 *
 * 
 */

namespace Module\Userrole\Code;

use Javanile\Liberty\Runtime;
use Module\Userrole\Model\User;

class AuthCode
{		
	/**
     * 
	 * 
	 */
	public function indexAction()
    {
		//
		$app = Runtime::getApp();
		
		//
		echo $app->htmlView();
	}
	
	/**
	 *
     *
	 */
	public function loginAction()
    {
		//
		$app = Runtime::getApp();

		//
		$username = filter_input(INPUT_POST, "username");
		$password = filter_input(INPUT_POST, "password");
		$redirect = filter_input(INPUT_POST, "redirect");
		$remember = filter_input(INPUT_POST, "remember");
				
		//
		if (!User::canUserLogin($username, $password)) {
            
            //
            $app->redirect('auth', [
				'message' => 'Username non valido'				
			]);            
        }

        //
        $user = User::fetchByUsername($username);

        //
        $roles = [$user->role];

        //
        $app->setSessionUser(
            $user->id,
            $user->username,
            $roles
        );

        //
        $app->redirect($redirect ? $redirect : null);						
	}
	
	/**
	 * logout action
	 *
	 */
	public function logoutAction()
    {
		//
		$app = Runtime::getApp();

		//
		$app->delSessionUser();
		
		//
		$app->redirect('auth');
	}		
}