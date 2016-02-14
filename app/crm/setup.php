<?php
/**
 *
 *
 */

//
require_once '../../vendor/autoload.php';

//
use Javanile\Liberty\Setup;
use Module\Userrole\Model\User;

//
$setup = new Setup([

    //
    'name' => 'crm',

    //
    'mode' => 'demo',

    //
    'index' => 'index.php',

    //
    'bootstrap' => '../../bootstrap.php',

    //
    'populate' => function () {

        // create admin user if not exists
        $AdminUser = User::submit([
            'username' => 'admin',
            'password' => md5('admin'),
            'userrole' => 'sa',
        ]);

        // update admin password
        //User::update($AdminUser->id, 'password', md5('admin'));

        //
        return true;
    }
]);

//
$setup->run();

