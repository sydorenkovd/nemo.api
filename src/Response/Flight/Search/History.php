<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 09.06.17
 * Time: 14:30
 */

namespace Nemo\Library\Response\Flight\Search;


use Nemo\Library\Core\BaseHelper;
use Nemo\Library\Response\Flight\Search\History\FormData;
use Nemo\Library\Response\Flight\Search\Request;

class History
{

    private $hasResults;
    private $resultsCount;
    private $isDateRange;
    private $request;
    private $formData;
    public $base;


    public $test;
    public function __construct($data)
    {
        $this->base = new BaseHelper();
        $this->request = new Request();
        $this->formData = new FormData();
        $this->base->mapper($data, $this);
    }

    /**
     * @return mixed
     */
    public function getHasResults()
    {
        return $this->hasResults;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param Request $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }

    /**
     * @return FormData
     */
    public function getFormData()
    {
        return $this->formData;
    }

    /**
     * @param FormData $formData
     */
    public function setFormData($formData)
    {
        $this->formData = $formData;
    }

    /**
     * @param mixed $hasResults
     */
    public function setHasResults($hasResults)
    {
        $this->hasResults = $hasResults;
    }

    /**
     * @return mixed
     */
    public function getResultsCount()
    {
        return $this->resultsCount;
    }

    /**
     * @param mixed $resultsCount
     */
    public function setResultsCount($resultsCount)
    {
        $this->resultsCount = $resultsCount;
    }

    /**
     * @return mixed
     */
    public function getIsDateRange()
    {
        return $this->isDateRange;
    }

    /**
     * @param mixed $isDateRange
     */
    public function setIsDateRange($isDateRange)
    {
        $this->isDateRange = $isDateRange;
    }

}