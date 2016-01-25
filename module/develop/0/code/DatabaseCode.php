<?php

namespace Module\Develop\Code;

use Javanile\SchemaDB\Database;
use Module\Develop\Model\People;

class DatabaseCode
{
    /**
     *
     * 
     */
    public function indexAction()
    {
        //
        echo '<h1>Database</h1>';

        //
        $db = Database::getDefault();

        //
        $db->drop('People', 'confirm');

        //
        $db->insert('People', array(
            'name' => 'Francesco',
            'surname' => 'Bianco',
        ));
       
        //
        $db->dump('People');

        //
        $people = new People(array(
            'name' => 'Ciao2'
        ));

        //
        $people->store();
        
        //
        People::dump();
    }
}