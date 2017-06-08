<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 17:30
 */

namespace Nemo\Library\Request;

class SearchWIthId
{

    private $searchId;
    private $uri = "/api/flights/search/formData/{searchId}";

    /**
     * @return mixed
     */
    public function getSearchId()
    {
        return $this->searchId;
    }

    /**
     * @param mixed $searchId
     */
    public function setSearchId($searchId)
    {
        $this->searchId = $searchId;
    }

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