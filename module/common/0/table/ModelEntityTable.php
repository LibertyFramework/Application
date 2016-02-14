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
        $model::applyTable();
        
		//
		$this->sql = call_user_func($model.'::getTable');

		//
		$this->ajax = __HOME__.'/manage/entity/'.$name.'/table';

        //
		$schema = $model::getSchema();
       
        //
        #var_Dump($schema);

        $exludeColumns = [
            'owner',
            'created_at','created_by',
            'updated_at','updated_by',
        ];

        //
        foreach ($schema as $field => $attributes) {
            
            //
            if (in_array($field, $exludeColumns)) {
                continue;
            }

            //
            $column = [
                'label' =>  t($field),
            ];

            //
            if ($attributes['Key'] == 'PRI') {
                $column['visible'] = false;
            }

            //
            if ($attributes['Type'] == 'date') {
                $column['width'] = 100;
            }

            //
            if ($attributes['Type'] == 'tinyint(1)') {
                $column['width'] = 100;
            }

            //
            if (substr($attributes['Type'], 0, 4) == 'enum') {
                $column['width'] = 100;
            }

            //
            if (substr($attributes['Type'], 0, 5) == 'float') {
                $column['width'] = 100;
            }

            //
            $this->columns[$field] = $column;
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
