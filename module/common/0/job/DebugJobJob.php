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
class DebugJobJob
{
	/**
     *
     */
	public function indexAction() {

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

    /**
     *
     */
    public function ciaoComeStaiAction() {

        //
		$app = Runtime::getApp();

		//
		echo $app->html(null,'index');
    }
}