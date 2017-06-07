<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 15:59
 */

namespace Nemo\Library\Response\Iterators;


class CustomArrayIterator implements \IteratorAggregate
{
    private $segments;

    public function __construct($segments)
    {
        $this->segments = $segments;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->segments);
    }

}