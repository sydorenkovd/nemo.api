<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 16:33
 */

namespace Nemo\Library\Response;


class SystemInfoResponse
{

    private $timestamp;
    private $responseTime;

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param mixed $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return mixed
     */
    public function getResponseTime()
    {
        return $this->responseTime;
    }

    /**
     * @param mixed $responseTime
     */
    public function setResponseTime($responseTime)
    {
        $this->responseTime = $responseTime;
    }
}