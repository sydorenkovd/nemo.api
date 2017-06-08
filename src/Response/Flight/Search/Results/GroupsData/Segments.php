<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 17:05
 */

namespace Nemo\Library\Response\Flight\Search\Result\GroupsData;


use Nemo\Library\Core\BaseHelper;

class Segments
{
/** collection of Segment Objects */
    private $segments;

    private $base;

    public function __construct()
    {
        $this->base = new BaseHelper();
    }

    /**
     * @return mixed
     */
    public function getSegments()
    {
        return $this->base->getIterator($this->segments);
    }

    /**
     * @param mixed $segments
     */
    public function setSegments($segments)
    {
        $this->segments = $this->base->getIterator($segments);
    }


}