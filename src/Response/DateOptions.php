<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 14:23
 */

namespace Nemo\Library\Response;


use Nemo\Library\Response\Iterators\AroundDatesValuesIterator;

class DateOptions
{

    private $minOffset;
    private $maxOffset;
    private $incorrectDatesBlock;
    private $aroundDatesValues;

    public function __construct($aroundDatesValues)
    {
        $this->aroundDatesValues = (new AroundDatesValuesIterator($aroundDatesValues))->getIterator();
    }

    /**
     * @return mixed
     */
    public function getMinOffset()
    {
        return $this->minOffset;
    }

    /**
     * @param mixed $minOffset
     */
    public function setMinOffset($minOffset)
    {
        $this->minOffset = $minOffset;
    }

    /**
     * @return mixed
     */
    public function getMaxOffset()
    {
        return $this->maxOffset;
    }

    /**
     * @param mixed $maxOffset
     */
    public function setMaxOffset($maxOffset)
    {
        $this->maxOffset = $maxOffset;
    }

    /**
     * @return mixed
     */
    public function getIncorrectDatesBlock()
    {
        return $this->incorrectDatesBlock;
    }

    /**
     * @param mixed $incorrectDatesBlock
     */
    public function setIncorrectDatesBlock($incorrectDatesBlock)
    {
        $this->incorrectDatesBlock = $incorrectDatesBlock;
    }
}