<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 12.06.17
 * Time: 16:33
 */
namespace Nemo\Library\Response\Flight\Search\FlightInfo;

use Nemo\Library\Core\Price;

class PriceStatus
{

    private $changed;
    private $oldValue;
    private $newValue;

    /**
     * @return mixed
     */
    public function getChanged()
    {
        return $this->changed;
    }

    /**
     * @param mixed $changed
     */
    public function setChanged($changed)
    {
        $this->changed = $changed;
    }

    /**
     * @return Price
     */
    public function getOldValue()
    {
        return $this->oldValue;
    }

    /**
     * @param Price $oldValue
     */
    public function setOldValue($oldValue)
    {
        $this->oldValue = $oldValue;
    }

    /**
     * @return Price
     */
    public function getNewValue()
    {
        return $this->newValue;
    }

    /**
     * @param Price $newValue
     */
    public function setNewValue($newValue)
    {
        $this->newValue = $newValue;
    }

    public function __construct()
    {
        $this->oldValue = new Price();
        $this->newValue = new Price();
    }
}