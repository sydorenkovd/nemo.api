<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 18:03
 */

namespace Nemo\Library\Response\Flight\Search\ResultMatrix\RangeData\MinPriceFlight;

class Segments
{
    private $routeNumber;
    private $serviceClass;
    private $depDateTime;
    private $arrDateTime;
    private $depAirp;
    private $arrAirp;

    /**
     * @return mixed
     */
    public function getRouteNumber()
    {
        return $this->routeNumber;
    }

    /**
     * @param mixed $routeNumber
     */
    public function setRouteNumber($routeNumber)
    {
        $this->routeNumber = $routeNumber;
    }

    /**
     * @return mixed
     */
    public function getServiceClass()
    {
        return $this->serviceClass;
    }

    /**
     * @param mixed $serviceClass
     */
    public function setServiceClass($serviceClass)
    {
        $this->serviceClass = $serviceClass;
    }

    /**
     * @return mixed
     */
    public function getDepDateTime()
    {
        return $this->depDateTime;
    }

    /**
     * @param mixed $depDateTime
     */
    public function setDepDateTime($depDateTime)
    {
        $this->depDateTime = $depDateTime;
    }

    /**
     * @return mixed
     */
    public function getArrDateTime()
    {
        return $this->arrDateTime;
    }

    /**
     * @param mixed $arrDateTime
     */
    public function setArrDateTime($arrDateTime)
    {
        $this->arrDateTime = $arrDateTime;
    }

    /**
     * @return mixed
     */
    public function getDepAirp()
    {
        return $this->depAirp;
    }

    /**
     * @param mixed $depAirp
     */
    public function setDepAirp($depAirp)
    {
        $this->depAirp = $depAirp;
    }

    /**
     * @return mixed
     */
    public function getArrAirp()
    {
        return $this->arrAirp;
    }

    /**
     * @param mixed $arrAirp
     */
    public function setArrAirp($arrAirp)
    {
        $this->arrAirp = $arrAirp;
    }

}