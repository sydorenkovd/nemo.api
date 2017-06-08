<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 15:57
 */

namespace Nemo\Library\Response\Flight\Search\Result\GroupsData\Prices\P1\PassengerFares;

use Nemo\Library\Core\Price;

class Taxes
{

    private $airportTypeOfTaxes;
    private $value;

    public function __construct()
    {
        $this->value = new Price();
    }
}