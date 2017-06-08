<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 12:56
 */

namespace Nemo\Library\Response\Flight\Search;


use Nemo\Library\Response\Flight\Search\ResultData\SearchTimeout;
use Nemo\Library\Response\Flight\Search\ResultData\ShowBlocks;

class ResultData
{

    private $defaultSort;
    private $defaultShowVariants;
    private $useHintOverlay;
    private $showBlocks;
    private $searchTimeout;
    private $postFilters;

    public function __construct()
    {
        $this->showBlocks = new ShowBlocks();
        $this->searchTimeout = new SearchTimeout();
    }

    /**
     * @return mixed
     */
    public function getDefaultSort()
    {
        return $this->defaultSort;
    }

    /**
     * @param mixed $defaultSort
     */
    public function setDefaultSort($defaultSort)
    {
        $this->defaultSort = $defaultSort;
    }

    /**
     * @return mixed
     */
    public function getDefaultShowVariants()
    {
        return $this->defaultShowVariants;
    }

    /**
     * @param mixed $defaultShowVariants
     */
    public function setDefaultShowVariants($defaultShowVariants)
    {
        $this->defaultShowVariants = $defaultShowVariants;
    }

    /**
     * @return mixed
     */
    public function getUseHintOverlay()
    {
        return $this->useHintOverlay;
    }

    /**
     * @param mixed $useHintOverlay
     */
    public function setUseHintOverlay($useHintOverlay)
    {
        $this->useHintOverlay = $useHintOverlay;
    }

    /**
     * @return ShowBlocks
     */
    public function getShowBlocks()
    {
        return $this->showBlocks;
    }

    /**
     * @param ShowBlocks $showBlocks
     */
    public function setShowBlocks($showBlocks)
    {
        $this->showBlocks = $showBlocks;
    }

    /**
     * @return SearchTimeout
     */
    public function getSearchTimeout()
    {
        return $this->searchTimeout;
    }

    /**
     * @param SearchTimeout $searchTimeout
     */
    public function setSearchTimeout($searchTimeout)
    {
        $this->searchTimeout = $searchTimeout;
    }

    /**
     * @return mixed
     */
    public function getPostFilters()
    {
        return $this->postFilters;
    }

    /**
     * @param mixed $postFilters
     */
    public function setPostFilters($postFilters)
    {
        $this->postFilters = $postFilters;
    }

}