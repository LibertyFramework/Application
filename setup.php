<?php
/**
 *
 *
 */

//
define('__NAME__', 'main');
define('__MODE__', 'main');

//
require_once 'vendor/autoload.php';

//
use Javanile\Liberty\Setup;

//
$setup = new Setup(array(
    'index'     => 'index.php',
    'bootstrap' => 'bootstrap.php',
));

//
$setup->run();
