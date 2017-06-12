<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 09.06.17
 * Time: 15:36
 */
namespace Nemo\Library\Response\Flight\Search\History;

use Nemo\Library\Core\DateOptions;
use Nemo\Library\Core\MaxLimits;
use Nemo\Library\Core\PassengersSelect;

class FormData
{

    private $maxLimits;
    private $dateOptions;
    private $useURLParams;
    private $showCitySwapBtn;
    private $passengersSelect;
    private $id;
    private $uri;

    public function __construct()
    {
        $this->maxLimits = new MaxLimits();
        $this->dateOptions = new DateOptions();
        $this->passengersSelect = new PassengersSelect();
        $this->uri = "/api/flights/search/formData/" . $this->id;

    }

    /**
     * @return mixed
     */
    public function getMaxLimits()
    {
        return $this->maxLimits;
    }

    /**
     * @param mixed $maxLimits
     */
    public function setMaxLimits($maxLimits)
    {
        $this->maxLimits = $maxLimits;
    }

    /**
     * @return mixed
     */
    public function getDateOptions()
    {
        return $this->dateOptions;
    }

    /**
     * @param mixed $dateOptions
     */
    public function setDateOptions($dateOptions)
    {
        $this->dateOptions = $dateOptions;
    }

    /**
     * @return mixed
     */
    public function getUseURLParams()
    {
        return $this->useURLParams;
    }

    /**
     * @param mixed $useURLParams
     */
    public function setUseURLParams($useURLParams)
    {
        $this->useURLParams = $useURLParams;
    }

    /**
     * @return mixed
     */
    public function getShowCitySwapBtn()
    {
        return $this->showCitySwapBtn;
    }

    /**
     * @param mixed $showCitySwapBtn
     */
    public function setShowCitySwapBtn($showCitySwapBtn)
    {
        $this->showCitySwapBtn = $showCitySwapBtn;
    }

    /**
     * @return mixed
     */
    public function getPassengersSelect()
    {
        return $this->passengersSelect;
    }

    /**
     * @param mixed $passengersSelect
     */
    public function setPassengersSelect($passengersSelect)
    {
        $this->passengersSelect = $passengersSelect;
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

}