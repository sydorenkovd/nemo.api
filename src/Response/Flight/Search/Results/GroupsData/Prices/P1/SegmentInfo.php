<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 16:38
 */

namespace Nemo\Library\Response\Flight\Search\Result\GroupsData\Prices\P1;


use Nemo\Library\Core\BaseHelper;

class SegmentInfo
{

    private $segNum;
    private $bookingClass;
    private $serviceClass;
    private $avlSeats;
    private $freeBaggage;

    private $base;

    public function __construct()
    {
        $this->base = new BaseHelper();
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
    public function getBookingClass()
    {
        return $this->bookingClass;
    }

    /**
     * @param mixed $bookingClass
     */
    public function setBookingClass($bookingClass)
    {
        $this->bookingClass = $bookingClass;
    }

    /**
     * @return mixed
     */
    public function getServiceClass()
    {
        return $this->serviceClass;
    }

    /**
     * @param mixed $serviceClass
     */
    public function setServiceClass($serviceClass)
    {
        $this->serviceClass = $serviceClass;
    }

    /**
     * @return mixed
     */
    public function getAvlSeats()
    {
        return $this->avlSeats;
    }

    /**
     * @param mixed $avlSeats
     */
    public function setAvlSeats($avlSeats)
    {
        $this->avlSeats = $avlSeats;
    }

    /**
     * @return mixed
     */
    public function getFreeBaggage()
    {
        return $this->base->getIterator($this->freeBaggage);
    }

    /**
     * @param mixed $freeBaggage
     */
    public function setFreeBaggage($freeBaggage)
    {
        $this->freeBaggage = $this->base->getIterator($freeBaggage);
    }

}