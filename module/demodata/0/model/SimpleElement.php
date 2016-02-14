<?php
/**
 *
 *
 */

namespace Module\Demodata\Model;

use Javanile\Liberty\Storable;

class SimpleElement extends Storable
{
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

    /**
     *
     *
     */
    public function encode()
    {
        //
        $this->name = strtolower($this->name);
    }

    /**
     *
     *
     */
    public function decode()
    {
        //
        $this->name = strtoupper($this->name);
    }
}
