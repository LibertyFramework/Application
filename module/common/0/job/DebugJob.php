<?php

/**
 *
 */
namespace Module\Common;

/**
 *
 */
use Javanile\Liberty\Runtime;

/**
 *
 */
class DebugJob
{
	/**
     *
     */
	public function index_action() {

		##
		$app = Runtime::getApp();

		##
		echo $app->html();
	}

    /**
     * 
     */
	public function testAction(){

        //
		$app = Runtime::getApp();

		//
		echo $app->html();
	}

}