<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 15:41
 */

namespace Nemo\Library\Response\Iterators;


class SegmentsIterator implements \IteratorAggregate
{
    private $attributes;

    public function __construct($attributes)
    {
        $this->attributes = $attributes;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->attributes);
    }

}