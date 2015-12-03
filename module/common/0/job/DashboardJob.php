<?php



/**
 *
 */
class DashboardJob
{
	/**
     *
     */
	public function index_action() {
		
		//
		$app = Liberty\Framework::getApp();
				
		//
		$app->html();
	}

    /**
     *
     */
	public function test_action(){
        $app=App::getInstance();
        $app->html();
	}

}