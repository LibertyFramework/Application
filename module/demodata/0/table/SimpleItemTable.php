<?php
/**
 * 
 * 
 */

namespace Module\Demodata\Table;

use Javanile\Liberty\Table;
use Module\Demodata\Model\SimpleItem;

class SimpleItemTable extends Table
{    
	/**
     *
     *
     */
	public function __construct()
    {		
		//
		$this->sql = SimpleItem::getTable();
		
		//
		$this->ajax = __HOME__.'/simple/ajax-table-item';
		
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
                
            ],
		];
		
		//
		$this->events = [
			'row.click' => 'window.location = "'.__HOME__.'/crm/detail/id/"+id;', 			
		];
	}	
}