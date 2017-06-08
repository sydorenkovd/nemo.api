<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 13:32
 */

namespace Nemo\Library\Response\Flight\Search\ResultData;


class PostFilters
{

    private $showPostFilterHint;

    /**
     * @return mixed
     */
    public function getShowPostFilterHint()
    {
        return $this->showPostFilterHint;
    }

    /**
     * @param mixed $showPostFilterHint
     */
    public function setShowPostFilterHint($showPostFilterHint)
    {
        $this->showPostFilterHint = $showPostFilterHint;
    }

//      "postFiltersSort": {
//        "transfersCount",
//        "departureAirport",
//        "arrivalAirport",
//        "departureTime",
//        "arrivalTime",
//        "timeEnRoute",
//        "transfersDuration",
//        "carrier",
//        "price"
//      },
// реализовать свойсво
    private $postFiltersSort;


}