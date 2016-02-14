<?php
/**
 *
 */

namespace App\Blog;

use Javanile\Liberty\Apps\HierarchyWebApp;

class CrmWebApp extends HierarchyWebApp
{
	/**
     *
     *
     */
	public function onReady()
    {
		//
		$this->addMenu('navbar', array(
			'label' => 'Account',
			'link'	=> $this->url('account'),
		));
		
		//
		$this->addMenu('navbar', array(
			'label' => 'Contact',
			'link'	=> __HOME__.'/contact/',			
		));		

		//
		$this->addMenu('navbar', array(
			'label' => 'Quote',
			'link'	=> __HOME__.'/quote/',			
		));		

		//
		$this->addMenu('navbar', array(
			'label' => 'Product',
			'link'	=> __HOME__.'/product/',			
		));		
	}		
}

