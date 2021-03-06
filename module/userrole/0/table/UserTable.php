<?php
/**
 * 
 * 
 */

namespace Module\Userrole\Table;

use Javanile\Liberty\Table;

class UserTable extends Table
{    
	/**
     *
     *
     */
	public function __construct() {		
	
		//		
		$this->source = User::table();
		
		//
		$this->endpoint = __HOME__.'/user/grid';
		
		//
		$this->columns = array(
			
			//
			'id' =>array(
				'visible' => false,
			),
			
			//
			'username' => array(
				'label' => 'Nome Utente'
			),
                   
			//
			'password' => array(
				'label' => 'Password'
			),
                   			
			//
			'command' => array(
				'label'	=> 'Comandi',
				'field' => 'id',
				'html'	=>
					'<a href="'.__HOME__.'/user/detail/id/{?}" class="btn btn-xs btn-success"> Visualizza</a> '.
					'<a href="'.__HOME__.'/user/modify/id/{?}" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i> Modifica</a> '.
					'<a href="'.__HOME__.'/user/delete/id/{?}" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Elimina</a>',
			),
		);		
		
		//
		$this->events = array(
			// 'row.click' => 'window.location = "'.__HOME__.'/user/detail/id/"+id;', 			
		);
	}	
}