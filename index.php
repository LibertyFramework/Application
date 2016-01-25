<?php
/**
 *
 * 
 */

// app name and mode
define('__NAME__', 'main');
define('__MODE__', 'main');

// app framework class loader
$config = require_once 'bootstrap.php';

// app instance
$app = new App\Main\MainWebApp(array(
    'index'       => __FILE__,
	'config'      => $config,
	'php_self'    => filter_input(INPUT_SERVER, 'PHP_SELF'),
	'request_uri' => filter_input(INPUT_SERVER, 'REQUEST_URI'),
));

// run
$app->run();


