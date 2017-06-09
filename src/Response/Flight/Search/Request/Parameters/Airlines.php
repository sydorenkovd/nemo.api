<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 09.06.17
 * Time: 11:23
 */
namespace Nemo\Library\Response\Flight\Search\Request\Parameters;

class Airlines
{

    private $IATA;

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

}