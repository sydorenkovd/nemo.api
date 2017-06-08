<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 15:34
 */
namespace Nemo\Library\Response\Flight\Search\Result\GroupsData\Prices\P1;

class Warnings
{

    private $insBookingNotAllowedBySupplier;

    /**
     * @return mixed
     */
    public function getInsBookingNotAllowedBySupplier()
    {
        return $this->insBookingNotAllowedBySupplier;
    }

    /**
     * @param mixed $insBookingNotAllowedBySupplier
     */
    public function setInsBookingNotAllowedBySupplier($insBookingNotAllowedBySupplier)
    {
        $this->insBookingNotAllowedBySupplier = $insBookingNotAllowedBySupplier;
    }
}