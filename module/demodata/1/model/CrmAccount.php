<?php

//
class CrmAccount extends Storable {

	//
	public $id = self::PRIMARY_KEY;
   
	//
	public $companyname = "";
	
	//
	public $website = "";
	
	//
	public $email = "";
	
	//
	public $phone = "";
}

//
CrmAccount::connect();
