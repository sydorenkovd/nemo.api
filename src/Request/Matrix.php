<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 09.06.17
 * Time: 10:17
 */

namespace Nemo\Library\Request;


class Matrix
{

    private $uri;
    private $searchId;
    private $depDate;
    private $depDateBack;

    public $test;
    /**
     * Matrix constructor.
     * @param $uri
     * URI or URI parameters array
     */
    public function __construct($uri)
    {
        $permanentUri = '/api/flights/search/results/';
        if(strpos($uri, $permanentUri) !== false) {
           $uriParametersArray = explode('/', str_replace($permanentUri, '', trim($uri)));

            if(isset($uriParametersArray[0])) {
                $this->searchId = $uriParametersArray[0];
            } if (isset($uriParametersArray[1])) {
                $this->depDate = $uriParametersArray[1];
            } if(isset($uriParametersArray[2])) {
                $this->depDateBack = $uriParametersArray[2];
            }
            $this->test = $uriParametersArray;
        } else {
            $this->uri = $uri;
        }

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
     * @return mixed
     */
    public function getDepDate()
    {
        return $this->depDate;
    }

    /**
     * @param mixed $depDate
     */
    public function setDepDate($depDate)
    {
        $this->depDate = $depDate;
    }

    /**
     * @return mixed
     */
    public function getDepDateBack()
    {
        return $this->depDateBack;
    }

    /**
     * @param mixed $depDateBack
     */
    public function setDepDateBack($depDateBack)
    {
        $this->depDateBack = $depDateBack;
    }

}