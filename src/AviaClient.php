<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 13:26
 */

namespace Nemo\Library;


class AviaClient
{

    private $_client = null;
    /**
     * @var string
     */
    private $language;

    public function __construct($language = 'ru')
    {
        $this->_client = curl_init();
        $this->language = $language;
    }


    private function getResponse(Request $request) {
        $url = NemoClient::instance()->getUrlConnect() . $request->getUrlPattern();
        curl_setopt_array($this->_client, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
        ]);
        $response = curl_exec($this->_client);
        $result = json_decode($response, true);

        if(array_key_exists('error', $result)) {
            $lines = implode("-", array_map(function() { return null; }, range(0, 10)));
            throw new \ErrorException("\n" . implode("\n", [
                    null, $lines,
                    "Code Error: {$result['error']['code']}",
                    "Message: {$result['error']['message']}",
                    $lines, null, null, null
                ]));
        }

        return $result;
    }

    public function __destruct()
    {
        curl_close($this->_client);
    }

}