<?php
/**
 *
 *
 */

namespace Module\Common\Code;

use Javanile\Liberty\Runtime;

class HomeCode
{
	/**
     *
     */
	public function indexAction()
    {
		//
		$app = Runtime::getApp();
				
		//
		echo $app->html();
	}

    /**
     *
     */
	public function testAction()
    {
        //
        $app = Runtime::getApp();
      
        //
        echo $app->html();
	}
}