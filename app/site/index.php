<?php
/**
 *
 */

// app name and mode
define('__NAME__', 'site');
define('__MODE__', 'demo');

// app framework class loader
require_once '../../bootstrap.php';

// app instance construct
$app = new App\Inventario\InventarioWebApp(array(
    'index'       => __FILE__,
	'config'      => $config,
	'php_self'    => filter_input(INPUT_SERVER, 'PHP_SELF'),
	'request_uri' => filter_input(INPUT_SERVER, 'REQUEST_URI'),
));

// run
$app->run();