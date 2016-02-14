<?php
/**
 *
 *
 */

namespace Module\Demodata\Code;

use Javanile\Liberty\Runtime;
use Module\Demodata\Model\SimpleItem;
use Module\Demodata\Table\SimpleItemTable;
use Module\Demodata\Model\SimpleElement;
use Module\Demodata\Table\SimpleElementTable;

class SimpleCode
{
    /**
     *
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
     * 
     */
	public function createItemAction()
    {
		//
		$app = Runtime::getApp();

        //
        $item = new SimpleItem();

        // before to send to user interface
        // decote data in human readable form
        $item->decode();

		//
		echo $app->html([
			'title'   => 'Create new item',
            'saveUrl' => $app->url('simple/save-item?debug_sql=1'),
            'Item'    => $item,
		]);
	}
	
	/**
     *
     *
     */
	public function modifyItemAction()
    {	
		//
		$app = Runtime::getApp();
		
		//
		$app->html();		
	}
	
	/**
     *
     * 
     */
	public function detailItemAction()
    {
		//
		$app = Runtime::getApp();
		
        //
        $id = $app->getUrlParam('id');

        //
        $item = SimpleItem::load($id);

		//
		echo $app->html([
            'Item' => $item,
        ]);
	}
	
	/**
     *
     * 
     */
	public function saveItemAction()
    {
		//
		$app = Runtime::getApp();

        // human readable input from ui
        $values = filter_input_array(INPUT_POST);

        // create object model
        $item = new SimpleItem($values);

        // assert for validate fields
        // if ($item->assert()) {
        // }

        // before store object
        // encode human readable
        // data from $_POST
        $item->encode();

        // now store
        $item->store();

        //
        $app->redirect('simple/detail-item/id/'.$item->id);
	}
	
	/**
     *
     *
     */
	public function listItemAction()
    {
		//
		$app = Runtime::getApp();
		
		//
		$table = new SimpleItemTable();
		
		//
		echo $app->html([
            'table' => $table->html(),
        ]);
	}
	
	/**
     *
     *
     */
	public function ajaxTableItemAction()
    {
		//
		$table = new SimpleItemTable();
		
		//
		echo $table->json();
	}

    /**
     *
     *
     */
	public function deleteItemAction()
    {
		//
		$table = new ItemTable();

		//
		echo $table->json();
	}

    /**
     *
     *
     */
	public function createElementAction()
    {
		//
		$app = Runtime::getApp();

		//
		echo $app->html(array(
			'title'     => 'Create new element',
            'Element'   => new SimpleElement(),
 		));
	}

	/**
     *
     *
     */
	public function modifyElementAction()
    {
		//
		$app = Runtime::getApp();

		//
		$app->html();
	}

	/**
     *
     *
     */
	public function detailElementAction()
    {
		//
		$app = Runtime::getApp();

		//
		$app->html();
	}

	/**
     * 
     *
     */
	public function saveElementAction()
    {
		//
		$app = Runtime::getApp();

        // human readable input from ui
        $values = filter_input_array(INPUT_POST);

        // create object model
        $item = new SimpleItem($values);

        // assert for validate fields
        // if ($item->assert()) {
        // }

        // before store object
        // encode human readable
        // data from $_POST
        $item->encode();

        // now store
        $item->store();

        //
        $app->redirect('simple/detail-element/id/'.$item->id);
	}

	/**
     *
     *
     */
	public function listElementAction()
    {
		//
		$app = Runtime::getApp();

		//
		$table = new SimpleElementTable();

		//
		echo $app->html(array(
			'table' => $table->html(),
		));
	}

	/**
     *
     *
     */
	public function ajaxTableElementAction()
    {
		//
		$table = new SimpleElementTable();

		//
		echo $table->ajax();
	}

    /**
     *
     *
     */
	public function deleteElementAction()
    {
		//
		$table = new ItemTable();

		//
		echo $table->ajax();
	}
}