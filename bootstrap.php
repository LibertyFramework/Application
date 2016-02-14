<?php
/**
 *
 * 
 */

//
if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    die('Required PHP 5.4.0 or higher');
}

// report all error types
error_reporting(E_ALL);

// by default print-out all errors
ini_set('html_errors', true);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);

// disable xdebug
if (function_exists('xdebug_disable')) { 
    xdebug_disable();
}

// define base dir
if (!defined('__BASE__')) {
    define('__BASE__', __DIR__);
}

// require vendor autoload
require_once __BASE__.'/vendor/autoload.php';

//
use Javanile\Liberty\Text;
use Javanile\Liberty\Runtime;
use Javanile\Liberty\Framework;
use Javanile\SchemaDB\Database;
use Javanile\Urlman\Urlman;

// universal string and text translator function
function t($text, $domain=null) {
    
    //
    return Text::getText($text, $domain);
}


// define base constants
if (!defined('__NAME__')) {
	Runtime::error('define constant "__NAME__" in your "index.php"', 102);
}

// define base constants
if (!defined('__MODE__')) {
	Runtime::error('define constant "__MODE__" in your "index.php"', 103);
}

// retrieve config
$config = Framework::config();

//
if (isset($config->db)) {
    
    // connect database
    $db = new Database(array(
        'type'     => $config->db->type,
        'host'     => $config->db->host,
        'dbname'   => $config->db->dbname,
        'username' => $config->db->username,
        'password' => $config->db->password,
        'prefix'   => $config->db->prefix,
    ));

    // set print out generated and sended sql queries
    $db->setDebug($config->debug && filter_input(INPUT_GET, 'debug_sql'));
}

// register app class autoloader
spl_autoload_register(function($class) {

    //
    $classFile = Framework::getAppClassFile($class);

    //
    if ($classFile && file_exists($classFile)) {
        include_once $classFile;
    }
});

// register module class autoloader
spl_autoload_register(function($class) {

    //
    $classFile = Framework::getModClassFile($class);

    //
    if ($classFile && file_exists($classFile)) {
        include_once $classFile;
    }
});

// base url of installed framework
define('__URL__', rtrim($config->url, '/'));

// other constants
if (!isset($config->home)) {
    define('__HOME__', __URL__);
} else if (Urlman::isUrl($config->home)) {
    define('__HOME__', rtrim($config->home, '/'));
} else {
    define('__HOME__', __URL__.'/'.trim($config->home, '/'));
}

// hash session code 
define('__HASH__', __FILE__.'|'.__NAME__.'|'.__MODE__);

// other constants
define('__PUBLIC__', __URL__.'/public');

// other constants
define('__MODULE__', __BASE__.'/module');

// 
Framework::debug(isset($config->debug) ? $config->debug : true);

//
return $config;