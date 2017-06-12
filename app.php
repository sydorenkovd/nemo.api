<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 12.06.17
 * Time: 15:10
 */
require __DIR__ . '/vendor/autoload.php';
echo "<pre>";
$data = json_decode('{"system": {
        "info": {
            "response": {
                "timestamp": 1468245066.1008,
                "responseTime": 0.01235294342041
            },
            "user": {
                "userID": 90540,
                "agencyID": 90538,
                "status": "guest",
                "isB2B": false,
                "settings": {
                    "currentLanguage": "ru",
                    "currentCurrency": "UAH",
                    "agencyCurrency": "UAH",
                    "googleMapsApiKey": null,
                    "googleMapsClientId": null
                }
            }
        }
    }}', true);
$ystemInfo = new \Nemo\Library\Response\SystemInfo($data['system']['info']);
//print_r($ystemInfo);
$client = new GuzzleHttp\Client(['base_uri' => 'http://demo.nemo.travel/']);
$response = $client->request('GET', '/api/flights/search/formData');
echo $response->getBody();