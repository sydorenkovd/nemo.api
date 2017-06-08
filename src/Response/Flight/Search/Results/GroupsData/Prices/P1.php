<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 14:33
 */
namespace Nemo\Library\Response\Flight\Search\Result\GroupsData\Prices;
use Nemo\Library\Core\Price;
use Nemo\Library\Response\Flight\Search\Result\GroupsData\Prices\P1\PricingDebug;
use Nemo\Library\Response\Flight\Search\Result\GroupsData\Prices\P1\Warnings;

class P1
{

    private $flightPrice;
    private $agencyCharge;
    private $totalPrice;
    private $priceWithoutPromocode;

    private $validatingCompany;
    private $refundable;
    private $privateFareInd;
    private $ticketTimeLimit;
    private $service;
    private $avlSeatsMin;
    private $pricingDebug;
    private $warnings;
    private $passengerFares;

    public function __construct()
    {
        $this->flightPrice = new Price();
        $this->agencyCharge = new Price();
        $this->totalPrice = new Price();
        $this->priceWithoutPromocode = new Price();

        $this->pricingDebug = new PricingDebug();
        $this->warnings = new Warnings();
    }
    /**
     * @return Price
     */
    public function getFlightPrice()
    {
        return $this->flightPrice;
    }

    /**
     * @param Price $flightPrice
     */
    public function setFlightPrice($flightPrice)
    {
        $this->flightPrice = $flightPrice;
    }

    /**
     * @return Price
     */
    public function getAgencyCharge()
    {
        return $this->agencyCharge;
    }

    /**
     * @param Price $agencyCharge
     */
    public function setAgencyCharge($agencyCharge)
    {
        $this->agencyCharge = $agencyCharge;
    }

    /**
     * @return Price
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param Price $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return Price
     */
    public function getPriceWithoutPromocode()
    {
        return $this->priceWithoutPromocode;
    }

    /**
     * @param Price $priceWithoutPromocode
     */
    public function setPriceWithoutPromocode($priceWithoutPromocode)
    {
        $this->priceWithoutPromocode = $priceWithoutPromocode;
    }

    /**
     * @return mixed
     */
    public function getValidatingCompany()
    {
        return $this->validatingCompany;
    }

    /**
     * @param mixed $validatingCompany
     */
    public function setValidatingCompany($validatingCompany)
    {
        $this->validatingCompany = $validatingCompany;
    }

    /**
     * @return mixed
     */
    public function getRefundable()
    {
        return $this->refundable;
    }

    /**
     * @param mixed $refundable
     */
    public function setRefundable($refundable)
    {
        $this->refundable = $refundable;
    }

    /**
     * @return mixed
     */
    public function getPrivateFareInd()
    {
        return $this->privateFareInd;
    }

    /**
     * @param mixed $privateFareInd
     */
    public function setPrivateFareInd($privateFareInd)
    {
        $this->privateFareInd = $privateFareInd;
    }

    /**
     * @return mixed
     */
    public function getTicketTimeLimit()
    {
        return $this->ticketTimeLimit;
    }

    /**
     * @param mixed $ticketTimeLimit
     */
    public function setTicketTimeLimit($ticketTimeLimit)
    {
        $this->ticketTimeLimit = $ticketTimeLimit;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }

    /**
     * @return mixed
     */
    public function getAvlSeatsMin()
    {
        return $this->avlSeatsMin;
    }

    /**
     * @param mixed $avlSeatsMin
     */
    public function setAvlSeatsMin($avlSeatsMin)
    {
        $this->avlSeatsMin = $avlSeatsMin;
    }

}