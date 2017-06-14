<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 12.06.17
 * Time: 17:30
 */

namespace Nemo\Library\Response\Flight\Search;


use Nemo\Library\Core\Airport;

class ScheduleRequest
{

    private $id;
    private $uri;
    private $departure;
    private $arrival;
    private $datePeriodBegin;
    private $datePeriodEnd;
    private $direct;

    public function __construct()
    {
        $this->departure = new Airport();
        $this->arrival = new Airport();
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
}