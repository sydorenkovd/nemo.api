<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 14:58
 */

namespace Nemo\Library\Response\Flight\Search;


use Nemo\Library\Core\MaxLimits;
use Nemo\Library\Response\DateOptions;
use Nemo\Library\Response\PassengersSelect;

class FormData
{
    private $id;
    private $maxLimits;
    private $dateOptions;
    private $uri;
    private $passengersSelect;
    /** @var boolean */
    private $useURLParams;
    /** @var boolean */
    private $showCitySwapBtn;

    private $aroundDatesValues;

    /**
     * @return mixed
     */
    public function getAroundDatesValues()
    {
        return $this->aroundDatesValues;
    }

    /**
     * @param mixed $aroundDatesValues
     */
    public function setAroundDatesValues($aroundDatesValues)
    {
        $this->aroundDatesValues = $aroundDatesValues;
    }
    public function __construct()
    {
        $this->maxLimits = new MaxLimits();
        $this->dateOptions = new DateOptions($this->aroundDatesValues);
        $this->passengersSelect = new PassengersSelect();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return MaxLimits
     */
    public function getMaxLimits()
    {
        return $this->maxLimits;
    }

    /**
     * @return DateOptions
     */
    public function getDateOptions()
    {
        return $this->dateOptions;
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return mixed
     */
    public function getPassengersSelect()
    {
        return $this->passengersSelect;
    }

    /**
     * @return boolean
     */
    public function isUseURLParams()
    {
        return $this->useURLParams;
    }

    /**
     * @return boolean
     */
    public function isShowCitySwapBtn()
    {
        return $this->showCitySwapBtn;
    }


}