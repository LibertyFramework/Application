<?php
/**
 *
 *
 */

namespace Module\Common\Table;

use Javanile\Liberty\Table;

class ModelEntityTable extends Table
{
	/**
     *
     *
     */
	public function __construct($entity)
    {
        //
        $name = $entity->getName();

        //
        $model = $entity->getModel();
        
		//
		$this->sql = call_user_func($model.'::getTable');

		//
		$this->ajax = __HOME__.'/manage/entity/'.$name.'/table';

        //
		$schema = $model::getSchema();

        //
        foreach ($schema as $field => $attributes) {
            if (false) {


            }

            //
            else {
                $this->columns[$field] = [
                    'label' => t($field),
                ];
            }
        }
        
		//
		$this->events = [
			'row.click' => 'window.location = "'
                         . __HOME__
                         . '/manage/entity/'
                         . $name
                         . '/detail/id/"+id;',
		];
	}
}
