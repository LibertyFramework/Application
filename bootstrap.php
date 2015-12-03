<?php

// by default print-out all errors
error_reporting(E_ALL);
ini_set('html_errors', true);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
if (function_exists('xdebug_disable')) { xdebug_disable(); }

// define base dir
if (!defined('__BASE__'))
{
	define('__BASE__',__DIR__);
	define('__BASE_LIB__',__DIR__.'/lib');
	define('__BASE_CLASS__',__DIR__.'/class');
}

## required base library
require_once __BASE__.'/vendor/autoload.php';

##
use Javanile\Liberty;

##  
Liberty\Framework::debug(true);

//
require_once __BASE__.'/vendor/javanile/redate/src/redate.php'; 

## define base constants
if (!defined('__NAME__')) {
	Liberty\Framework::error("[E#102] define constant '__NAME__' in your 'index.php'");
}

## define base constants
if (!defined('__MODE__')) {
	Liberty\Framework::error("[E#103] define constant '__MODE__' in your 'index.php'");
}

## retrieve config
$config = Liberty\Framework::config();

## connect database
use Javanile\SchemaDB;

## connect database
$db = new SchemaDB\Database(array(
	'host' => $config['db']['host'],
	'user' => $config['db']['user'],
	'pass' => $config['db']['pass'],
	'name' => $config['db']['name'],
	'pref' => $config['db']['pref']
));

//
$db->setDebug(isset($_GET['debug_sql']));

##
use Javanile\Urlman\Urlman;

## 
define('__URL__', rtrim($config['url'],'/'));

## other constants
define('__HOME__', !Urlman::isUrl($config['home']) ? rtrim(__URL__.'/'.ltrim($config['home'],'/'),'/') : rtrim($config['home'],'/'));

## other constants
define('__PUBLIC__', __URL__.'/public');

## other constants
define('__MODULE__', __BASE__.'/module');

##
putenv('LC_ALL='.$config['default']['locale']);

## set locale
setlocale(LC_ALL,$config['default']['locale']);

##
Liberty\Framework::debug(isset($config['debug']) ? $config['debug'] : true);