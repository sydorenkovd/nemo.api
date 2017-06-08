<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 17:15
 */
class StopPoints
{

    private $airportCode;
    private $cityCode;
    private $utc;

    /**
     * @return mixed
     */
    public function getAirportCode()
    {
        return $this->airportCode;
    }

    /**
     * @param mixed $airportCode
     */
    public function setAirportCode($airportCode)
    {
        $this->airportCode = $airportCode;
    }

    /**
     * @return mixed
     */
    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param mixed $cityCode
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;
    }

    /**
     * @return mixed
     */
    public function getUtc()
    {
        return $this->utc;
    }

    /**
     * @param mixed $utc
     */
    public function setUtc($utc)
    {
        $this->utc = $utc;
    }

    /**
     * @return mixed
     */
    public function getTerminal()
    {
        return $this->terminal;
    }

    /**
     * @param mixed $terminal
     */
    public function setTerminal($terminal)
    {
        $this->terminal = $terminal;
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
    public function getPassengerLanding()
    {
        return $this->passengerLanding;
    }

    /**
     * @param mixed $passengerLanding
     */
    public function setPassengerLanding($passengerLanding)
    {
        $this->passengerLanding = $passengerLanding;
    }

    private $terminal;
    private $depDateTime;
    private $arrDateTime;
    private $passengerLanding;
}
