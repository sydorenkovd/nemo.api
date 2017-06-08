<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 17:43
 */

namespace Nemo\Library\Request;


use Nemo\Library\Core\BaseHelper;
use Nemo\Library\Response\Iterators\CustomArrayIterator;

class FlightSearchRequest
{

    private $segment;
    private $passengers;
    private $parameters;
    private $base;

    public function __construct()
    {
        $this->base = new BaseHelper();
    }

    /**
     * @param mixed $segment
     */
    public function setSegment($segment)
    {
        $this->segment = $this->base->getIterator($segment);
    }

    /**
     * @param mixed $passengers
     */
    public function setPassengers($passengers)
    {
        $this->passengers = $this->base->getIterator($passengers);
    }

    /**
     * @param mixed $parameters
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @return mixed
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * @return mixed
     */
    public function getPassengers()
    {
        return $this->passengers;
    }

    /**
     * @return mixed
     */
    public function getParameters()
    {
        return $this->parameters;
    }
}