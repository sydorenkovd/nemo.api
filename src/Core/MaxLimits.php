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