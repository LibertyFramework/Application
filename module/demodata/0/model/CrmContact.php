<?php

##
class CrmContact extends Storable {

	##
	public $id = self::PRIMARY_KEY;
   
	##
	public $account = 0;
	
	##
	public $firstname = "";
	
	##
	public $lastname = "";
	
	##
	public $email = "";
}

##
CrmContact::connect();
