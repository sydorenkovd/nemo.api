<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 17:48
 */

namespace Nemo\Library\Response\Flight\Search;


use Nemo\Library\Core\BaseHelper;

class ResultMatrix
{
/** collection */
    private $rangeData;
    private $base;

    public function __construct()
    {
        $this->base = new BaseHelper();
    }

    /**
     * @return mixed
     */
    public function getRangeData()
    {
        return $this->base->getIterator($this->rangeData);
    }

    /**
     * @param mixed $rangeData
     */
    public function setRangeData($rangeData)
    {
        $this->rangeData = $this->base->getIterator($rangeData);
    }



}