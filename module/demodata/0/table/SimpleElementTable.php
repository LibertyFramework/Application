<?php
/**
 *
 *
 */

namespace Module\Demodata\Table;

use Javanile\Liberty\Table;
use Module\Demodata\Model\SimpleElement;

class SimpleElementTable extends Table
{    	
	/**
     * 
     *
     */
	public function __construct()
    {
		//
		$this->sql = SimpleElement::getTable();
		
		//
		$this->ajax = __HOME__.'/simple/ajax-table-element';
		
		//
		$this->columns = [
			
			//
			'id' => [
				'visible' => true,
			],
			
			//
			'name' => [

            ],

			//
			'surname' => [

            ]
		];
		
		//
		$this->events = [
			'row.click' => 'window.location = "'.__HOME__.'/crm/detail/id/"+id;', 			
		];
	}	
}