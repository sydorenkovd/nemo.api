<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 12:19
 */

namespace Nemo\Library\Response;


use Nemo\Library\Core\BaseHelper;
use Nemo\Library\Core\Logo;

class GuideAircraft
{

    private $id;
    private $name;
    private $nameEn;
    private $manufacture;
    private $originCountries;
    private $distanceType;
    private $fuselageType;
    private $capacity;
    private $cruiseSpeed;
    private $isTurbineAirctaft;
    private $isHomeAirctaft;
    private $image;
    private $map_image;

    private $base;

    public function __construct()
    {
        $this->image = new Logo();
        $this->map_image = new Logo();
        $this->base = new BaseHelper();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getManufacture()
    {
        return $this->manufacture;
    }

    /**
     * @param mixed $manufacture
     */
    public function setManufacture($manufacture)
    {
        $this->manufacture = $manufacture;
    }

    /**
     * @return mixed
     */
    public function getOriginCountries()
    {
        return $this->base->getIterator($this->originCountries);
    }

    /**
     * @param mixed $originCountries
     */
    public function setOriginCountries($originCountries)
    {
        $this->originCountries = $this->base->getIterator($originCountries);
    }

    /**
     * @return mixed
     */
    public function getDistanceType()
    {
        return $this->distanceType;
    }

    /**
     * @param mixed $distanceType
     */
    public function setDistanceType($distanceType)
    {
        $this->distanceType = $distanceType;
    }

    /**
     * @return mixed
     */
    public function getFuselageType()
    {
        return $this->fuselageType;
    }

    /**
     * @param mixed $fuselageType
     */
    public function setFuselageType($fuselageType)
    {
        $this->fuselageType = $fuselageType;
    }

    /**
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param mixed $capacity
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    /**
     * @return mixed
     */
    public function getCruiseSpeed()
    {
        return $this->cruiseSpeed;
    }

    /**
     * @param mixed $cruiseSpeed
     */
    public function setCruiseSpeed($cruiseSpeed)
    {
        $this->cruiseSpeed = $cruiseSpeed;
    }

    /**
     * @return mixed
     */
    public function getIsTurbineAirctaft()
    {
        return $this->isTurbineAirctaft;
    }

    /**
     * @param mixed $isTurbineAirctaft
     */
    public function setIsTurbineAirctaft($isTurbineAirctaft)
    {
        $this->isTurbineAirctaft = $isTurbineAirctaft;
    }

    /**
     * @return mixed
     */
    public function getIsHomeAirctaft()
    {
        return $this->isHomeAirctaft;
    }

    /**
     * @param mixed $isHomeAirctaft
     */
    public function setIsHomeAirctaft($isHomeAirctaft)
    {
        $this->isHomeAirctaft = $isHomeAirctaft;
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
    public function getMapImage()
    {
        return $this->map_image;
    }

    /**
     * @param mixed $map_image
     */
    public function setMapImage($map_image)
    {
        $this->map_image = $map_image;
    }


}