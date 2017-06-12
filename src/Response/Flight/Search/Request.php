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
use Nemo\Library\Response\Flight\Search\Request\Passengers;
use Nemo\Library\Response\Flight\Search\Request\Segments;
use Nemo\Library\Response\Iterators\CustomArrayIterator;
use Nemo\Library\Response\Iterators\SegmentsIterator;

class Request
{

    private $segments = [];
    private $passengers = [];

    private $parameters;
    private $id;
    private $uri;
    private $base;

    public function __construct()
    {
        $this->base = new BaseHelper();
        $this->parameters = new Parameters();
        $this->passengers = $this->base->createIterator(Passengers::class);
        $this->segments = $this->base->createIterator(Segments::class);
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param mixed $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
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