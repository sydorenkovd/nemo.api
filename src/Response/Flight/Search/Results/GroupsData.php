<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 13:59
 */

namespace Nemo\Library\Response\Flight\Search\Result;


class GroupsData
{

    private $prices;
    private $segments;

    /**
     * @return mixed
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @param mixed $prices
     */
    public function setPrices($prices)
    {
        $this->prices = $prices;
    }

    /**
     * @return mixed
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * @param mixed $segments
     */
    public function setSegments($segments)
    {
        $this->segments = $segments;
    }
}