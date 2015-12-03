<?php

/**
 * 
 */
namespace Module\Userrole;

/**
 * 
 */
use Javanile\Liberty;

/**
 * 
 */
class User extends Liberty\Storable 
{
	/**
	 *
	 * @var type 
	 */
	public $id = self::PRIMARY_KEY;
    
	/**
	 *
	 * @var type 
	 */
	public $username = "";
	
	/**
	 *
	 * @var type 
	 */
	public $password = "";
   
	/**
	 *
	 * @var type 
	 */
	public $role = array(
		'sa',
		'admin',
		'public'
	);	
	
	/**
	 * 
	 * @param type $username
	 * @param type $password
	 * @return type
	 */
	public static function canUserLogin($username, $password) {			
		
		##
		$query = array(
			'username' => $username,
			'password' => md5($password)
		);
			
		##
		return User::exists($query);		
	}
	
	/**
	 * 
	 * @param type $username
	 * @return type
	 */
	public static function fetchByUsername($username) {
	
		##
		return User::load(array('username' => $username));		
	}
}

/**
 * 
 */
User::connect();
