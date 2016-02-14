<?php
/**
 *
 * 
 */

namespace Module\Common\Code;

use Javanile\Liberty\Runtime;

class LocaleCode
{
	/**
     *
     *
     */
	public function getAction() {

		//
		$app = Runtime::getApp();

		//
		echo $app->html();
	}

    /**
     *
     *
     */
	public function setAction(){

        //
		$app = Runtime::getApp();

        //
        if (isset($app->request->params['locale'])) {
            $app->setLocale($app->request->params['locale']);
        }

        //
        $referer = filter_input(INPUT_SERVER, 'HTTP_REFERER');

        //
        if ($referer) {
            $app->redirect($referer);
        } else {
            $app->redirect(__HOME__);
        }
	}    
}