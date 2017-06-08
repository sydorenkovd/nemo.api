<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 13:15
 */

namespace Nemo\Library\Response\Flight\Search\ResultData;

class ShowBlocks
{

    private $useShowCase;
    private $showBestOffers;
    private $showHotelOffer;
    private $useFlightCompareTable;

    /**
     * @return mixed
     */
    public function getUseShowCase()
    {
        return $this->useShowCase;
    }

    /**
     * @param mixed $useShowCase
     */
    public function setUseShowCase($useShowCase)
    {
        $this->useShowCase = $useShowCase;
    }

    /**
     * @return mixed
     */
    public function getShowBestOffers()
    {
        return $this->showBestOffers;
    }

    /**
     * @param mixed $showBestOffers
     */
    public function setShowBestOffers($showBestOffers)
    {
        $this->showBestOffers = $showBestOffers;
    }

    /**
     * @return mixed
     */
    public function getShowHotelOffer()
    {
        return $this->showHotelOffer;
    }

    /**
     * @param mixed $showHotelOffer
     */
    public function setShowHotelOffer($showHotelOffer)
    {
        $this->showHotelOffer = $showHotelOffer;
    }

    /**
     * @return mixed
     */
    public function getUseFlightCompareTable()
    {
        return $this->useFlightCompareTable;
    }

    /**
     * @param mixed $useFlightCompareTable
     */
    public function setUseFlightCompareTable($useFlightCompareTable)
    {
        $this->useFlightCompareTable = $useFlightCompareTable;
    }

}