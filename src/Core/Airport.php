<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 11:40
 */

namespace Nemo\Library\Core;


class Airport
{

    private $IATA;
    private $isCity;
    private $cityId;

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
    public function getIsCity()
    {
        return $this->isCity;
    }

    /**
     * @param mixed $isCity
     */
    public function setIsCity($isCity)
    {
        $this->isCity = $isCity;
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
}