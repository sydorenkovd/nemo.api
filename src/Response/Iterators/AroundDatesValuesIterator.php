<?php

/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 14:30
 */

namespace Nemo\Library\Response\Iterators;

class AroundDatesValuesIterator implements \IteratorAggregate
{
    protected $attributes;

    public function __construct($attributes)
    {
        $this->attributes = $attributes;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->attributes);
    }

}