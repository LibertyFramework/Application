<?php
/**
 *
 *
 */

namespace Module\Demodata\Model;

use Javanile\Liberty\Storable;

class SimpleItem extends Storable
{
	/**
     * 
     * 
     */
    static $__config__ = [
        'DefaultIntSize' => 10
    ];

    /**
     *
     * @var type
     */
	public $id = self::PRIMARY_KEY;

	/**
     *
     * @var type
     */
	public $name = "";
	
	/**
     *
     * @var type 
     */
	public $surname = "";

    /**
     *
     * @var type
     */
	public $other = "";

    /**
     *
     * @var type
     */
	public $rest = "";
}
