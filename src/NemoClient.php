<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 13:31
 */

namespace Nemo\Library;


class NemoClient
{

    private $login = null;
    private $password = null;
    private $domain = null;

    const DIRECTION_DEP_STATION = 'departure_stations';
    const DIRECTION_ARR_STATION = 'arrive_stations';
    const TRANSPORT_TRAIN = 'rw';
    const TRANSPORT_BUS = 'bus';

    /**
     * @var self
     */
    private static $instance;

    private function __construct($login, $password, $domain)
    {
        $this->login = $login;
        $this->password = $password;
        $this->domain = $domain;
    }

    public static function instance($login = null, $password = null, $domain = "https://sandbox-api.t2t.in.ua/") {
        if(!self::$instance instanceof NemoClient) {
            self::$instance = new self($login, $password, $domain);
        }

        if($login) {
            self::$instance->setLogin($login);
        }

        if($password) {
            self::$instance->setPassword($password);
        }

        if($domain) {
            self::$instance->setDomain($domain);
        }

        return self::$instance;
    }

    /**
     * @param string $login
     * @return $this
     */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @param string $domain
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Вохвращаем URL для соедение с сервером
     * @return string
     */
    public function getUrlConnect() {
        $url = preg_replace('/(https|http)\:\/\//', null, $this->domain);
        return "https://{$this->login}:{$this->password}@$url";
    }

}