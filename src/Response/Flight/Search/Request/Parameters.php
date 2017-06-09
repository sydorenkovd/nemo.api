<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 09.06.17
 * Time: 11:20
 */
namespace Nemo\Library\Response\Flight\Search\Request;

use Nemo\Library\Core\BaseHelper;
use Nemo\Library\Response\Flight\Search\Request\Parameters\Airlines;

class Parameters
{
    private $searchType;
    private $direct;
    private $aroundDates;
    private $serviceClass;
    private $delayed;
    private $airlines;
    private $base;

    public $test;
    public function __construct()
    {
        $this->base = new BaseHelper();
    }

    /**
     * @return Airlines
     */
    public function getAirlines()
    {
        return $this->base->getIterator($this->airlines);
    }

    /**
     * @param mixed $airlines
     */
    public function setAirlines($airlines, $class = null)
    {
        $this->airlines = $this->base->getIterator($airlines, $class);
        $this->test = $class;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDelayed()
    {
        return $this->delayed;
    }

    /**
     * @param mixed $delayed
     */
    public function setDelayed($delayed)
    {
        $this->delayed = $delayed;
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
    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * @param mixed $searchType
     */
    public function setSearchType($searchType)
    {
        $this->searchType = $searchType;
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

    /**
     * @return mixed
     */
    public function getAroundDates()
    {
        return $this->aroundDates;
    }

    /**
     * @param mixed $aroundDates
     */
    public function setAroundDates($aroundDates)
    {
        $this->aroundDates = $aroundDates;
    }
}