<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 09.06.17
 * Time: 11:28
 */

namespace Nemo\Library\Response\Flight\Search\Request;


use Nemo\Library\Core\Airport;

class Segments
{

    private $departureDate;
    private $departure;
    private $arrival;

    public function __construct()
    {
        $this->departure = new Airport();
        $this->arrival = new Airport();
    }

    /**
     * @return mixed
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @param mixed $departureDate
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;
    }

    /**
     * @return mixed
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * @param mixed $departure
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;
    }

    /**
     * @return mixed
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * @param mixed $arrival
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;
    }


}