<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 11:01
 */

namespace Nemo\Library\Request;


use Nemo\Library\Core\BaseHelper;

class FlightSearchRequestParameters
{

    private $searchType;
    private $direct;
    private $aroundDates;
    private $serviceClass;
    private $delayed;
    private $airlines;
    private $base;

    public function __construct()
    {
        $this->base = new BaseHelper();
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
    public function getAirlines()
    {
        return $this->airlines;
    }

    /**
     * @param mixed $airlines
     */
    public function setAirlines($airlines)
    {
        $this->airlines = $this->base->getIterator($airlines);
    }
}