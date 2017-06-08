<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 15:44
 */

namespace Nemo\Library\Response\Flight\Search\Result\GroupsData\Prices\P1;


use Nemo\Library\Core\BaseHelper;
use Nemo\Library\Core\Price;

class PassengerFares
{

    private $type;
    private $count;
    private $baseFare;
    private $equivFare;
    private $totalFare;
    /** collection of Taxes objects */
    private $taxes;
    /** collection of Tarifs objects */
    private $tarifs;
    private $base;

    public function __construct()
    {
        $this->baseFare = new Price();
        $this->equivFare = new Price();
        $this->totalFare = new Price();
        $this->base = new BaseHelper();
    }
    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return Price
     */
    public function getBaseFare()
    {
        return $this->baseFare;
    }

    /**
     * @param Price $baseFare
     */
    public function setBaseFare($baseFare)
    {
        $this->baseFare = $baseFare;
    }

    /**
     * @return Price
     */
    public function getEquivFare()
    {
        return $this->equivFare;
    }

    /**
     * @param Price $equivFare
     */
    public function setEquivFare($equivFare)
    {
        $this->equivFare = $equivFare;
    }

    /**
     * @return Price
     */
    public function getTotalFare()
    {
        return $this->totalFare;
    }

    /**
     * @param Price $totalFare
     */
    public function setTotalFare($totalFare)
    {
        $this->totalFare = $totalFare;
    }

    /**
     * @return mixed
     */
    public function getTaxes()
    {
        return $this->base->getIterator($this->taxes);
    }

    /**
     * @param mixed $taxes
     */
    public function setTaxes($taxes)
    {
        $this->taxes = $this->base->getIterator($taxes);
    }


}