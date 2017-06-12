<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 12.06.17
 * Time: 11:04
 */

namespace Nemo\Library\Core;


class DateOptions
{
    private $minOffset;
    private $maxOffset;
    private $incorrectDatesBlock;
    private $aroundDatesValues;

    public function __construct()
    {

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