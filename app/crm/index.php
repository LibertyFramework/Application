<?php
## app name and mode
define('__NAME__','crm');
define('__MODE__','demo');

## app framework class loader
require_once '../../bootstrap.php';

## app class load
require_once __BASE__.'/app/crm/CrmWebApp.php';

## app instance
$app = new CrmWebApp(
	__FILE__,
	$_SERVER['PHP_SELF'],
	$_SERVER['REQUEST_URI']
);

## run
$app->run(); 

