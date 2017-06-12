<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 12.06.17
 * Time: 11:12
 */

namespace Nemo\Library\Core;


class PassengersSelect
{
    /** @var  boolean */
    private $extendedPassengersSelect;

    private $fastPassengersSelect;

    public function __construct()
    {
    }

    /**
     * @return boolean
     */
    public function isExtendedPassengersSelect()
    {
        return $this->extendedPassengersSelect;
    }

    /**
     * @param boolean $extendedPassengersSelect
     */
    public function setExtendedPassengersSelect($extendedPassengersSelect)
    {
        $this->extendedPassengersSelect = $extendedPassengersSelect;
    }

    /**
     * @return mixed
     */
    public function getFastPassengersSelect()
    {
        return $this->fastPassengersSelect;
    }

    /**
     * @param mixed $fastPassengersSelect
     */
    public function setFastPassengersSelect($fastPassengersSelect)
    {
        $this->fastPassengersSelect = $fastPassengersSelect;
    }
}