<?php
/**
 *
 */

namespace Module\Common;

use Javanile\Liberty\Runtime;

class ServerCode
{
	/**
     *
     *
     */
	public function indexAction() {

		//
		$app = Runtime::getApp();

		//
		echo $app->html();
	}

    /**
     *
     *
     */
	public function testAction(){

        //
		$app = Runtime::getApp();

		//
		echo $app->html();
	}    
}