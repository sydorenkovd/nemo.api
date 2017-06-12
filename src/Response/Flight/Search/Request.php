<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 15:38
 */

namespace Nemo\Library\Response\Flight\Search;


use Nemo\Library\Core\BaseHelper;
use Nemo\Library\Response\Flight\Search\Request\Parameters;
use Nemo\Library\Response\Iterators\CustomArrayIterator;
use Nemo\Library\Response\Iterators\SegmentsIterator;

class Request
{

    private $segments = [];

    private $passengers = [];
    private $parameters;
    private $base;

    public function __construct()
    {
        $this->base = new BaseHelper();
        $this->parameters = new Parameters();
    }
    /**
     * @return Parameters
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param mixed $parameters
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }




    /**
     * @return mixed
     */
    public function getPassengers()
    {
        return $this->base->getIterator($this->passengers);
    }

    /**
     * @param mixed $passengers
     * @param null $class
     */
    public function setPassengers($passengers, $class = null)
    {
        $this->passengers = $this->base->getIterator($passengers, $class);
    }

    /**
     * @return SegmentsIterator
     */
    public function getSegments()
    {
        return $this->base->getIterator($this->segments);
    }

    /**
     * @param array $segments
     */
    public function setSegments($segments, $class)
    {
        $this->segments = $this->base->getIterator($segments, $class);
    }

}