<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 12:05
 */

namespace Nemo\Library\Core;


class Logo
{

    private $image;
    private $icon;
    private $height;
    private $width;

    private $logo;
    private $monochromeLogo;

    private $colors;

    public function __construct()
    {
        $this->logo = new Logo();
        $this->monochromeLogo = new Logo();
        $this->colors = new Color();
    }

    /**
     * @return Color
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * @param Color $colors
     */
    public function setColors($colors)
    {
        $this->colors = $colors;
    }
    /**
     * @return Logo
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param Logo $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * @return Logo
     */
    public function getMonochromeLogo()
    {
        return $this->monochromeLogo;
    }

    /**
     * @param Logo $monochromeLogo
     */
    public function setMonochromeLogo($monochromeLogo)
    {
        $this->monochromeLogo = $monochromeLogo;
    }


    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param mixed $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }
}