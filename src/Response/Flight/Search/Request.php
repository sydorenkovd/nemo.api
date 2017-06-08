<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 15:38
 */

namespace Nemo\Library\Response\Flight\Search;


use Nemo\Library\Response\Iterators\CustomArrayIterator;
use Nemo\Library\Response\Iterators\SegmentsIterator;

class Request
{

    private $segments;

    private $passengers;

    /**
     * @return mixed
     */
    public function getPassengers()
    {
        return $this->passengers;
    }

    /**
     * @param mixed $passengers
     */
    public function setPassengers($passengers)
    {
        $this->passengers = new CustomArrayIterator($passengers);;
    }
    /**
     * @return SegmentsIterator
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * @param SegmentsIterator $segments
     */
    public function setSegments($segments)
    {
        $this->segments = new SegmentsIterator($segments);
    }

}