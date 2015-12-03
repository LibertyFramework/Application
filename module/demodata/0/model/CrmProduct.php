<?php

##
class CrmProduct extends Storable {

	##
	public $id = self::PRIMARY_KEY;
   
	##
	public $name = "";
	
	##
	public $price = 0.0;
}

##
CrmProduct::connect();
