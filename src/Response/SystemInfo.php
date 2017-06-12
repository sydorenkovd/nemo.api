<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 12.06.17
 * Time: 15:17
 */

namespace Nemo\Library\Response;


use Nemo\Library\Core\BaseHelper;
use Nemo\Library\Response\SystemInfo\Response;
use Nemo\Library\Response\SystemInfo\User;

class SystemInfo
{

    private $response;
    private $user;
    private $base;

    public function __construct($data)
    {
        $this->response = new Response();
        $this->user = new User();
        $this->base = new BaseHelper();
        $this->base->mapper($data, $this);
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param mixed $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
}