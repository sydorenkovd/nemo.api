<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 12:08
 */

namespace Nemo\Library\Core;


class Color
{

    private $companyColor;
    private $companyColorAdditional;

    /**
     * @return mixed
     */
    public function getCompanyColor()
    {
        return $this->companyColor;
    }

    /**
     * @param mixed $companyColor
     */
    public function setCompanyColor($companyColor)
    {
        $this->companyColor = $companyColor;
    }

    /**
     * @return mixed
     */
    public function getCompanyColorAdditional()
    {
        return $this->companyColorAdditional;
    }

    /**
     * @param mixed $companyColorAdditional
     */
    public function setCompanyColorAdditional($companyColorAdditional)
    {
        $this->companyColorAdditional = $companyColorAdditional;
    }
}