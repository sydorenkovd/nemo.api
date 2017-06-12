<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 12.06.17
 * Time: 16:00
 */

namespace Nemo\Library\Response\Flight\Search;


use Nemo\Library\Core\BaseHelper;
use Nemo\Library\Response\Flight\Search\FlightInfo\PriceStatus;

class FlightInfo
{

    private $isAvail;
    private $priceStatus;
    private $tariffRules;
    private $createOrderLink;

    public function __construct()
    {
        $this->priceStatus = new PriceStatus();
        $this->base = new BaseHelper();

    }

    /**
     * @return mixed
     */
    public function getIsAvail()
    {
        return $this->isAvail;
    }

    /**
     * @param mixed $isAvail
     */
    public function setIsAvail($isAvail)
    {
        $this->isAvail = $isAvail;
    }

    /**
     * @return mixed
     */
    public function getPriceStatus()
    {
        return $this->priceStatus;
    }

    /**
     * @param mixed $priceStatus
     */
    public function setPriceStatus($priceStatus)
    {
        $this->priceStatus = $priceStatus;
    }

    /**
     * @return mixed
     */
    public function getTariffRules()
    {
        return $this->tariffRules;
    }

    /**
     * @param mixed $tariffRules
     */
    public function setTariffRules($tariffRules)
    {
        $this->tariffRules = $tariffRules;
    }

    /**
     * @return mixed
     */
    public function getCreateOrderLink()
    {
        return $this->createOrderLink;
    }

    /**
     * @param mixed $createOrderLink
     */
    public function setCreateOrderLink($createOrderLink)
    {
        $this->createOrderLink = $createOrderLink;
    }
}