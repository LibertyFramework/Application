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
$setup = new Setup(array(

    //
    'index' => 'index.php',

    //
    'bootstrap' => '../../bootstrap.php',

    //
    'populate' => function () {

        // create admin user if not exists
        $AdminUser = User::submit(array(
            'username' => 'admin',
            'userrole' => 'sa',
        ));

        // update admin password
        User::update($AdminUser->id, 'password', md5('admin'));
    }
));

//
$setup->run();

