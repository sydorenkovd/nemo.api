<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 09.06.17
 * Time: 14:30
 */

namespace Nemo\Library\Response\Flight\Search;


class History
{

    private $hasResults;
    private $resultsCount;
    private $isDateRange;
    private $request;
    private $formData;

    public function __construct()
    {
        $this->request = '';
        $this->formData = '';
    }

    /**
     * @return mixed
     */
    public function getHasResults()
    {
        return $this->hasResults;
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