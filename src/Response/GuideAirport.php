<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 13:50
 */

namespace Nemo\Library\Response;


class GuideAirport
{
    private $IATA;
    private $name;
    private $nameEn;
    private $properName;
    private $properNameEn;

    /**
     * @return mixed
     */
    public function getIATA()
    {
        return $this->IATA;
    }

    /**
     * @param mixed $IATA
     */
    public function setIATA($IATA)
    {
        $this->IATA = $IATA;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getNameEn()
    {
        return $this->nameEn;
    }

    /**
     * @param mixed $nameEn
     */
    public function setNameEn($nameEn)
    {
        $this->nameEn = $nameEn;
    }

    /**
     * @return mixed
     */
    public function getProperName()
    {
        return $this->properName;
    }

    /**
     * @param mixed $properName
     */
    public function setProperName($properName)
    {
        $this->properName = $properName;
    }

    /**
     * @return mixed
     */
    public function getProperNameEn()
    {
        return $this->properNameEn;
    }

    /**
     * @param mixed $properNameEn
     */
    public function setProperNameEn($properNameEn)
    {
        $this->properNameEn = $properNameEn;
    }

    /**
     * @return mixed
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param mixed $cityId
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }

    /**
     * @return mixed
     */
    public function getIsAggregation()
    {
        return $this->isAggregation;
    }

    /**
     * @param mixed $isAggregation
     */
    public function setIsAggregation($isAggregation)
    {
        $this->isAggregation = $isAggregation;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param mixed $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }
    private $cityId;
    private $isAggregation;
    private $countryCode;
}