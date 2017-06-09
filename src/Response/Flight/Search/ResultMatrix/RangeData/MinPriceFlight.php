<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 17:58
 */
namespace Nemo\Library\Response\Flight\Search\ResultMatrix\RangeData;

use Nemo\Library\Core\BaseHelper;
use Nemo\Library\Core\Price;

class MinPriceFlight
{

    private $carrier;
    private $minPrice;
    /** collection */
    private $segments;

    private $base;

    public function __construct()
    {
        $this->minPrice = new Price();
        $this->base = new BaseHelper();
    }

    /**
     * @return mixed
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param mixed $carrier
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
    }

    /**
     * @return mixed
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * @param mixed $minPrice
     */
    public function setMinPrice($minPrice)
    {
        $this->minPrice = $minPrice;
    }

    /**
     * @return mixed
     */
    public function getSegments()
    {
        return $this->base->getIterator($this->segments);
    }

    /**
     * @param mixed $segments
     */
    public function setSegments($segments)
    {
        $this->segments = $this->base->getIterator($segments);
    }
}