<?php

##
class CrmQuote extends Storable {

	##
	public $id = self::PRIMARY_KEY;
   
	##
	public $account = "";
	
	##
	public $date = MYSQL_DATE;
}

##
CrmQuote::connect();
