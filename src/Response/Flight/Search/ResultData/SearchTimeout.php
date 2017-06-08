<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 13:16
 */

namespace Nemo\Library\Response\Flight\Search\ResultData;


class SearchTimeout
{

    private $useSearchTimeout;
    private $warningBeforeSearchTimeout;
    private $searchTimeout;

    /**
     * @return mixed
     */
    public function getUseSearchTimeout()
    {
        return $this->useSearchTimeout;
    }

    /**
     * @param mixed $useSearchTimeout
     */
    public function setUseSearchTimeout($useSearchTimeout)
    {
        $this->useSearchTimeout = $useSearchTimeout;
    }

    /**
     * @return mixed
     */
    public function getWarningBeforeSearchTimeout()
    {
        return $this->warningBeforeSearchTimeout;
    }

    /**
     * @param mixed $warningBeforeSearchTimeout
     */
    public function setWarningBeforeSearchTimeout($warningBeforeSearchTimeout)
    {
        $this->warningBeforeSearchTimeout = $warningBeforeSearchTimeout;
    }

    /**
     * @return mixed
     */
    public function getSearchTimeout()
    {
        return $this->searchTimeout;
    }

    /**
     * @param mixed $searchTimeout
     */
    public function setSearchTimeout($searchTimeout)
    {
        $this->searchTimeout = $searchTimeout;
    }
}