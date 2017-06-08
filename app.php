<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 10:45
 */
require __DIR__ . '/vendor/autoload.php';


//$object = new Nemo\Library\Response\SystemInfoUser();

$req = new \Nemo\Library\Request\FlightSearchRequest();
$req->setSegment(json_decode('{
            "departure": {
                "IATA": "MOW",
                "isCity": true
            },
            "arrival": {
                "IATA": "BER",
                "isCity": true
            },
            "departureDate": "2015-05-10T00:00:00"
        }'));
echo "<pre>";
foreach ($req->getSegment() as $segment) {
    if(isset($segment->isCity)) {
        print_r($segment->isCity);
    }

}