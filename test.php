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

//==========================================

//$req = new \Nemo\Library\Response\Flight\Search\Request();
//$res = $req->getParameters()->setAirlines([
//            ["IATA" => "UT"],
//            ["IATA" => "ZT"]
//        ], \Nemo\Library\Response\Flight\Search\Request\Parameters\Airlines::class)->getAirlines();
///** @var \Nemo\Library\Response\Flight\Search\Request\Parameters\Airlines $r */
////var_dump($req->getParameters());
//
//$req->setPassengers([
//    ['type' => 'ADT', 'count' => 1],
//    ['type' => 'DRS', 'count' => 2],
//], \Nemo\Library\Response\Flight\Search\Request\Passengers::class);
////    var_dump($req->getPassengers());
//
//$req->setSegments([
//    ['departureDate' => "2015-05-10T00:00:00", 'departure' => ['IATA' => 'BER', 'isCity' => true], 'arrival' => ['IATA' => 'MOW', 'isCity' => true] ],
//    ['departureDate' => "2015-06-10T00:00:00", 'departure' => ['IATA' => 'BER', 'isCity' => true], 'arrival' => ['IATA' => 'MOW', 'isCity' => true] ]
//], \Nemo\Library\Response\Flight\Search\Request\Segments::class);
//var_dump($req->getSegments());






//=====================================
//$uagent = "Opera/9.80 (Windows NT 6.1; WOW64) Presto/2.12.388 Version/12.14";
//$url  = "http://ya.ru";
//$ch = curl_init( $url );
//
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   // возвращает веб-страницу
//curl_setopt($ch, CURLOPT_HEADER, 0);           // не возвращает заголовки
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);   // переходит по редиректам
//curl_setopt($ch, CURLOPT_ENCODING, "");        // обрабатывает все кодировки
//curl_setopt($ch, CURLOPT_USERAGENT, $uagent);  // useragent
//curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120); // таймаут соединения
//curl_setopt($ch, CURLOPT_TIMEOUT, 120);        // таймаут ответа
//curl_setopt($ch, CURLOPT_MAXREDIRS, 10);       // останавливаться после 10-ого редиректа
//
//$content = curl_exec( $ch );
//$err     = curl_errno( $ch );
//$errmsg  = curl_error( $ch );
//$header  = curl_getinfo( $ch );
//curl_close( $ch );
//
//$header['errno']   = $err;
//$header['errmsg']  = $errmsg;
//$header['content'] = $content;
// var_dump($header);

//$client = new \GuzzleHttp\Client([
//    'base_uri' => 'http://httpbin.org',
//    'timeout'  => 2.0,
//]);



$data = json_decode('{
          "request": {
               "id": 59673,
               "uri": "/api/flights/search/request/59673",
               "segments": [
                    {
                         "departure": {
                              "IATA": "MOW",
                              "isCity": true,
                              "cityId": 58165
                         },
                         "arrival": {
                              "IATA": "BER",
                              "isCity": true,
                              "cityId": 22046
                         },
                         "departureDate": "2015-09-10T00:00:00"
                    }
               ],
               "passengers": [
                    {
                         "type": "ADT",
                         "count": 1
                    }
               ],
               "parameters": {
                    "searchType": "OW",
                    "direct": false,
                    "aroundDates": 0,
                    "serviceClass": "Economy",
                    "airlines": [],
                    "delayed": true
               }
          },
          "formData": {
               "maxLimits": {
                    "passengerCount": {
                         "ADT": "5",
                         "SRC": "5",
                         "YTH": "5",
                         "CLD": "5",
                         "INF": "1",
                         "INS": "3"
                    },
                    "totalPassengers": "6",
                    "flightSegments": "6"
               },
               "dateOptions": {
                    "minOffset": 0,
                    "maxOffset": 365,
                    "incorrectDatesBlock": true,
                    "aroundDatesValues": [
                         0,
                         1,
                         3
                    ]
               },
               "useURLParams": true,
               "showCitySwapBtn": false,
               "passengersSelect": {
                    "extendedPassengersSelect": true,
                    "fastPassengersSelect": [
                         {
                              "label": "singleAdult",
                              "set": {
                                   "ADT": 1
                              }
                         },
                         {
                              "label": "twoAdults",
                              "set": {
                                    "ADT": 2
                              }
                         }
                    ]
               },
               "id": 59673,
               "uri": "/api/flights/search/formData/59673"
          },
          "hasResults": true,
          "resultsCount": 125,
          "isDateRange": false
     }', true);
$history = new \Nemo\Library\Response\Flight\Search\History($data);
//$ar = new ArrayIterator([]);
//$ar->rewind()
print_r($history);



















