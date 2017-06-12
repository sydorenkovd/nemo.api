<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 12.06.17
 * Time: 10:54
 */

namespace Nemo\Library\Core;


class MaxLimits
{
    private $ADT;
    private $CLD;
    private $SRC;
    private $YTH;
    private $INF;
    private $INS;
    private $totalPassengers;
    private $flightSegments;
    /**
     * @return mixed
     */
    public function getADT()
    {
        return $this->ADT;
    }

    /**
     * @return mixed
     */
    public function getCLD()
    {
        return $this->CLD;
    }

    /**
     * @return mixed
     */
    public function getSRC()
    {
        return $this->SRC;
    }

    /**
     * @return mixed
     */
    public function getYTH()
    {
        return $this->YTH;
    }

    /**
     * @return mixed
     */
    public function getINF()
    {
        return $this->INF;
    }

    /**
     * @return mixed
     */
    public function getINS()
    {
        return $this->INS;
    }

    /**
     * @param mixed $ADT
     */
    public function setADT($ADT)
    {
        $this->ADT = $ADT;
    }

    /**
     * @param mixed $CLD
     */
    public function setCLD($CLD)
    {
        $this->CLD = $CLD;
    }

    /**
     * @param mixed $SRC
     */
    public function setSRC($SRC)
    {
        $this->SRC = $SRC;
    }

    /**
     * @param mixed $YTH
     */
    public function setYTH($YTH)
    {
        $this->YTH = $YTH;
    }

    /**
     * @param mixed $INF
     */
    public function setINF($INF)
    {
        $this->INF = $INF;
    }

    /**
     * @param mixed $INS
     */
    public function setINS($INS)
    {
        $this->INS = $INS;
    }

    /**
     * @param mixed $totalPassengers
     */
    public function setTotalPassengers($totalPassengers)
    {
        $this->totalPassengers = $totalPassengers;
    }

    /**
     * @param mixed $flightSegments
     */
    public function setFlightSegments($flightSegments)
    {
        $this->flightSegments = $flightSegments;
    }

    /**
     * @return mixed
     */
    public function getTotalPassengers()
    {
        return $this->totalPassengers;
    }

    /**
     * @return mixed
     */
    public function getFlightSegments()
    {
        return $this->flightSegments;
    }
}