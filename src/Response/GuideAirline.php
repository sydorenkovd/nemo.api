<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 12:03
 */

namespace Nemo\Library\Response;


use Nemo\Library\Core\Color;
use Nemo\Library\Core\Logo;

class GuideAirline
{

    private $IATA;
    private $name;
    private $nameEn;
    private $rating;
    private $countryCode;
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
    public function getIATA()
    {
        return $this->IATA;
    }

    /**
     * @param mixed $IATA
     */
    public function setIATA($IATA)
    {
        $this->IATA = $IATA;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getNameEn()
    {
        return $this->nameEn;
    }

    /**
     * @param mixed $nameEn
     */
    public function setNameEn($nameEn)
    {
        $this->nameEn = $nameEn;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param mixed $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

}