<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 11:21
 */

namespace Nemo\Library\Request;


use Nemo\Library\Core\RequestAirport;

class FlightSearchScheduleRequest
{

    private $id;
    private $uri;
    private $datePeriodBegin;
    private $datePeriodEnd;

    private $departure;
    private $arrival;

    /**
     * @return RequestAirport
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * @param RequestAirport $departure
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;
    }

    /**
     * @return RequestAirport
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * @param RequestAirport $arrival
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;
    }


    public function __construct()
    {
        $this->departure = new RequestAirport();
        $this->arrival = new RequestAirport();
    }

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
    public function getDatePeriodBegin()
    {
        return $this->datePeriodBegin;
    }

    /**
     * @param mixed $datePeriodBegin
     */
    public function setDatePeriodBegin($datePeriodBegin)
    {
        $this->datePeriodBegin = $datePeriodBegin;
    }

    /**
     * @return mixed
     */
    public function getDatePeriodEnd()
    {
        return $this->datePeriodEnd;
    }

    /**
     * @param mixed $datePeriodEnd
     */
    public function setDatePeriodEnd($datePeriodEnd)
    {
        $this->datePeriodEnd = $datePeriodEnd;
    }

    /**
     * @return mixed
     */
    public function getDirect()
    {
        return $this->direct;
    }

    /**
     * @param mixed $direct
     */
    public function setDirect($direct)
    {
        $this->direct = $direct;
    }
    private $direct;

    public function getUri() {
        return "/api/flights/search/scheduleRequest/" . $this->id;
    }

}