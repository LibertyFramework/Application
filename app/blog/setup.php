<?php
/**
 *
 *
 */

//
require_once '../../vendor/autoload.php';

//
use Javanile\Liberty\Setup;

//
$setup = new Setup([

    //
    'name' => 'blog',

    //
    'mode' => 'demo',

    //
    'index' => './index.php',

    //
    'bootstrap' => '../../bootstrap.php',
]);

//
$setup->run();

