<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 12.06.17
 * Time: 15:44
 */

namespace Nemo\Library\Request;


class FlightInfo
{

    private $uri;
    private $flightId;

    public function __construct()
    {
        $this->uri = " /api/flights/search/flightInfo/". $this->flightId;
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
    public function getFlightId()
    {
        return $this->flightId;
    }

    /**
     * @param mixed $flightId
     */
    public function setFlightId($flightId)
    {
        $this->flightId = $flightId;
    }

}