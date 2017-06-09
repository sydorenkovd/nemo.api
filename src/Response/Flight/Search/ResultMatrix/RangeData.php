<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 17:54
 */
namespace Nemo\Library\Response\Flight\Search\ResultMatrix;

use Nemo\Library\Response\Flight\Search\ResultMatrix\RangeData\MinPriceFlight;

class RangeData
{
    private $uri;
    private $flightDate;
    private $flightDateBack;
    private $minPriceFlight;

    public function __construct()
    {
        $this->minPriceFlight = new MinPriceFlight();
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param mixed $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return mixed
     */
    public function getFlightDate()
    {
        return $this->flightDate;
    }

    /**
     * @param mixed $flightDate
     */
    public function setFlightDate($flightDate)
    {
        $this->flightDate = $flightDate;
    }

    /**
     * @return mixed
     */
    public function getFlightDateBack()
    {
        return $this->flightDateBack;
    }

    /**
     * @param mixed $flightDateBack
     */
    public function setFlightDateBack($flightDateBack)
    {
        $this->flightDateBack = $flightDateBack;
    }

}