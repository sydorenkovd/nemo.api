<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 16:37
 */

namespace Nemo\Library\Response\SystemInfo\User;


class Settings
{
    private $currentLanguage;
    private $currentCurrency;
    private $agencyCurrency;
    private $googleMapsApiKey;
    private $googleMapsClientId;

    /**
     * @return mixed
     */
    public function getCurrentLanguage()
    {
        return $this->currentLanguage;
    }

    /**
     * @param mixed $currentLanguage
     */
    public function setCurrentLanguage($currentLanguage)
    {
        $this->currentLanguage = $currentLanguage;
    }

    /**
     * @return mixed
     */
    public function getCurrentCurrency()
    {
        return $this->currentCurrency;
    }

    /**
     * @param mixed $currentCurrency
     */
    public function setCurrentCurrency($currentCurrency)
    {
        $this->currentCurrency = $currentCurrency;
    }

    /**
     * @return mixed
     */
    public function getAgencyCurrency()
    {
        return $this->agencyCurrency;
    }

    /**
     * @param mixed $agencyCurrency
     */
    public function setAgencyCurrency($agencyCurrency)
    {
        $this->agencyCurrency = $agencyCurrency;
    }

    /**
     * @return mixed
     */
    public function getGoogleMapsApiKey()
    {
        return $this->googleMapsApiKey;
    }

    /**
     * @param mixed $googleMapsApiKey
     */
    public function setGoogleMapsApiKey($googleMapsApiKey)
    {
        $this->googleMapsApiKey = $googleMapsApiKey;
    }

    /**
     * @return mixed
     */
    public function getGoogleMapsClientId()
    {
        return $this->googleMapsClientId;
    }

    /**
     * @param mixed $googleMapsClientId
     */
    public function setGoogleMapsClientId($googleMapsClientId)
    {
        $this->googleMapsClientId = $googleMapsClientId;
    }

}