<?php
## 
define('__NAME__','admin');
define('__MODE__','demo');

##
require_once __DIR__.'/../../class/Setup.php';

##
$setup = new Setup(
	__DIR__.'/../../bootstrap.php',
	__DIR__.'/index.php'
);

##
$setup->run();