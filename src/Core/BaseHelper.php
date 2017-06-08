<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 10:41
 */

namespace Nemo\Library\Core;


use Nemo\Library\Response\Iterators\CustomArrayIterator;

class BaseHelper
{
    /**
     * @param $data
     * @return \ArrayIterator|\Traversable
     */
    public function getIterator($data) {
       return (new CustomArrayIterator($data))->getIterator();
    }
}