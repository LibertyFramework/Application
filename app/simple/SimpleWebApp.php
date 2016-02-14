<?php
/**
 *
 *
 */

namespace App\Simple;

use Javanile\Liberty\App\PublicWebApp;

class SimpleWebApp extends PublicWebApp
{ 	
	/**
     *
     *
     */
	public function onInit()
    {
        //
        $this->addItemMenu();

        //
        $this->addElementMenu();
	}

    /**
     *
     *
     */
    public function addItemMenu()
    {
        //
		$this->addMenu('navbar',array(

			//
			'label' => 'Item',

			//
			'children' => array(
				array(
					'label' => 'Create new item',
					'link'	=> $this->url('simple/create-item')
				),
				array(
					'label' => 'Open items archive',
					'link'	=> $this->url('simple/list-item')
				),
			),
		));
    }

    /**
     *
     *
     */
    public function addElementMenu()
    {
        //
		$this->addMenu('navbar',array(

			//
			'label' => 'Element',

			//
			'children' => array(
				array(
					'label' => 'Create new element',
					'link'	=> $this->url('simple/create-element')
				),
				array(
					'label' => 'Open elements archive',
					'link'	=> $this->url('simple/list-element')
				),
			),
		));
    }
}

