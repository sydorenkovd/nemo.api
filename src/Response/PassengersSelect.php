<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 15:16
 */

namespace Nemo\Library\Response;


use Nemo\Library\Response\Iterators\AroundDatesValuesIterator;

class PassengersSelect
{

    /** @var  boolean */
    private $extendedPassengersSelect;

    private $fastPassengersSelect;

    public function __construct()
    {
        $this->fastPassengersSelect = new AroundDatesValuesIterator([]);
    }

}