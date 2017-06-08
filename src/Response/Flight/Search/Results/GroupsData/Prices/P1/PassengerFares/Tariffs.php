<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 16:33
 */

namespace Nemo\Library\Response\Flight\Search\Result\GroupsData\Prices\P1\PassengerFares;


class Tariffs
{

    private $code;
    private $segNum;
    private $routeNumber;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getSegNum()
    {
        return $this->segNum;
    }

    /**
     * @param mixed $segNum
     */
    public function setSegNum($segNum)
    {
        $this->segNum = $segNum;
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
}