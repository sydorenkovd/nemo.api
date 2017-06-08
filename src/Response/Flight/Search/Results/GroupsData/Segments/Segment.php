<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 17:07
 */

namespace Nemo\Library\Response\Flight\Search\Result\GroupsData\Segments;
class Segment
{

    private $id;
    private $depAirp;
    private $arrAirp;
    private $routeNumber;
    private $operatingCompany;
    private $marketingCompany;
    private $flightNumber;
    private $aircraftType;
    private $depDateTime;
    private $arrDateTime;
    private $depTerminal;
    private $arrTerminal;
    private $flightTime;
    private $eTicket;
    private $stopPoints;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getOperatingCompany()
    {
        return $this->operatingCompany;
    }

    /**
     * @param mixed $operatingCompany
     */
    public function setOperatingCompany($operatingCompany)
    {
        $this->operatingCompany = $operatingCompany;
    }

    /**
     * @return mixed
     */
    public function getMarketingCompany()
    {
        return $this->marketingCompany;
    }

    /**
     * @param mixed $marketingCompany
     */
    public function setMarketingCompany($marketingCompany)
    {
        $this->marketingCompany = $marketingCompany;
    }

    /**
     * @return mixed
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * @param mixed $flightNumber
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;
    }

    /**
     * @return mixed
     */
    public function getAircraftType()
    {
        return $this->aircraftType;
    }

    /**
     * @param mixed $aircraftType
     */
    public function setAircraftType($aircraftType)
    {
        $this->aircraftType = $aircraftType;
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
    public function getDepTerminal()
    {
        return $this->depTerminal;
    }

    /**
     * @param mixed $depTerminal
     */
    public function setDepTerminal($depTerminal)
    {
        $this->depTerminal = $depTerminal;
    }

    /**
     * @return mixed
     */
    public function getArrTerminal()
    {
        return $this->arrTerminal;
    }

    /**
     * @param mixed $arrTerminal
     */
    public function setArrTerminal($arrTerminal)
    {
        $this->arrTerminal = $arrTerminal;
    }

    /**
     * @return mixed
     */
    public function getFlightTime()
    {
        return $this->flightTime;
    }

    /**
     * @param mixed $flightTime
     */
    public function setFlightTime($flightTime)
    {
        $this->flightTime = $flightTime;
    }

    /**
     * @return mixed
     */
    public function getETicket()
    {
        return $this->eTicket;
    }

    /**
     * @param mixed $eTicket
     */
    public function setETicket($eTicket)
    {
        $this->eTicket = $eTicket;
    }

    /**
     * @return mixed
     */
    public function getStopPoints()
    {
        return $this->stopPoints;
    }

    /**
     * @param mixed $stopPoints
     */
    public function setStopPoints($stopPoints)
    {
        $this->stopPoints = $stopPoints;
    }

}