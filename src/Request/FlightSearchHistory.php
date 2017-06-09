<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 09.06.17
 * Time: 14:28
 */

namespace Nemo\Library\Request;


class FlightSearchHistory
{

    private $uri = '/api/flights/search/history';

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }
}