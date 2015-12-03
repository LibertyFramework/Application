<?php
## app name and mode
define('__NAME__','main');
define('__MODE__','main');

## app framework class loader
require_once 'bootstrap.php';

## app class load
require_once __BASE__.'/app/main/MainWebApp.php';

## app instance
$app = new MainWebApp(
	__FILE__,
	$_SERVER['PHP_SELF'],
	$_SERVER['REQUEST_URI']
);

## run
$app->run();


