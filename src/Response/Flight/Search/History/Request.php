<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 09.06.17
 * Time: 15:36
 */

namespace Nemo\Library\Response\Flight\Search\History;

class Request
{

    private $id;
    private $uri;
    private $segments;
    private $passengers;
    private $parameters;
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
        $this->passengers = $passengers;
    }

    /**
     * @return mixed
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
}