<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 10:45
 */
require __DIR__ . '/vendor/autoload.php';
echo "<pre>";

//$object = new Nemo\Library\Response\SystemInfoUser();

//$req = new \Nemo\Library\Request\FlightSearchRequest();
//$req->setSegment(json_decode('{
//            "departure": {
//                "IATA": "MOW",
//                "isCity": true
//            },
//            "arrival": {
//                "IATA": "BER",
//                "isCity": true
//            },
//            "departureDate": "2015-05-10T00:00:00"
//        }'));

//foreach ($req->getSegment() as $segment) {
//    if(isset($segment->isCity)) {
//        print_r($segment->isCity);
//    }
//
//}

//$fl = new \Nemo\Library\Request\FlightSearchScheduleRequest();
//$fl->getDeparture()->setIATA('ia');


//$aircraft = new \Nemo\Library\Response\GuideAircraft();
//$aircraft->setOriginCountries([
//    "RU"
//]);
//foreach ($aircraft->getOriginCountries() as $single) {
//    print_r($single);
//}

//$matrix = new \Nemo\Library\Request\Matrix('/api/flights/search/results/53159/2015-07-09/2015-07-14');

//var_dump($matrix);

$req = new \Nemo\Library\Response\Flight\Search\Request();
$res = $req->getParameters()->setAirlines([
            ["IATA" => "UT"],
            ["IATA" => "ZT"]
        ], \Nemo\Library\Response\Flight\Search\Request\Parameters\Airlines::class)->getAirlines();
/** @var \Nemo\Library\Response\Flight\Search\Request\Parameters\Airlines $r */
//var_dump($req->getParameters());

$req->setPassengers([
    ['type' => 'ADT', 'count' => 1],
    ['type' => 'DRS', 'count' => 2],
], \Nemo\Library\Response\Flight\Search\Request\Passengers::class);
//    var_dump($req->getPassengers());

$req->setSegments([
    ['departureDate' => "2015-05-10T00:00:00", 'departure' => ['IATA' => 'BER', 'isCity' => true], 'arrival' => ['IATA' => 'MOW', 'isCity' => true] ],
    ['departureDate' => "2015-06-10T00:00:00", 'departure' => ['IATA' => 'BER', 'isCity' => true], 'arrival' => ['IATA' => 'MOW', 'isCity' => true] ]
], \Nemo\Library\Response\Flight\Search\Request\Segments::class);
var_dump($req->getSegments());