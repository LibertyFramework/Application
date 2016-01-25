<?php
/**
 *
 */
namespace Module\Demodata;

/**
 *
 */
use Javanile\Liberty\Runtime;

/**
 *
 */
class DemodataModule
{
	/**
     *
     */
	public function __construct()
    {
		//
		$app = Runtime::getApp();

		//
		if (get_class($app) == 'SiteWebApp') {
			$app->request['class'] = 'SiteController';
			$app->request['method'] = 'indexAction';
		}
		
		//
		if (get_class($app) == 'BlogWebApp') {
			$app->request['class'] = 'BlogController';
			$app->request['method'] = 'indexAction';
		}	
		
		/*
		//
		$app->addMenu("navbar",array(
			'label' => 'license',
			'link'	=> __HOME__.'/main/license',
		));
		*/
	}
}