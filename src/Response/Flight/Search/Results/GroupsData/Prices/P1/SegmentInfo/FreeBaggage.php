<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 16:49
 */
namespace Nemo\Library\Response\Flight\Search\Result\GroupsData\Prices\P1;

class FreeBaggage
{

    private $passtype;
    private $value;
    private $measurement;

    /**
     * @return mixed
     */
    public function getPasstype()
    {
        return $this->passtype;
    }

    /**
     * @param mixed $passtype
     */
    public function setPasstype($passtype)
    {
        $this->passtype = $passtype;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getMeasurement()
    {
        return $this->measurement;
    }

    /**
     * @param mixed $measurement
     */
    public function setMeasurement($measurement)
    {
        $this->measurement = $measurement;
    }

}