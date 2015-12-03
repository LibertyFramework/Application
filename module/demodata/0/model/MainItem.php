<?php

##
class MainItem extends Storable {

	##
	public $id = self::PRIMARY_KEY;

	##
	public $name = "";
	
	##
	public $value = "";	
}

##
MainItem::connect();
