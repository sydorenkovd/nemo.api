<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 16:35
 */

namespace Nemo\Library\Response\SystemInfo;

use Nemo\Library\Response\SystemInfo\User\Settings;

class User
{
    private $userID;
    private $agencyID;
    private $status;
    private $isB2B;
    private $settings;

    public function __construct()
    {
        $this->settings = new Settings();
    }

    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param mixed $userID
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    /**
     * @return mixed
     */
    public function getAgencyID()
    {
        return $this->agencyID;
    }

    /**
     * @param mixed $agencyID
     */
    public function setAgencyID($agencyID)
    {
        $this->agencyID = $agencyID;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getIsB2B()
    {
        return $this->isB2B;
    }

    /**
     * @param mixed $isB2B
     */
    public function setIsB2B($isB2B)
    {
        $this->isB2B = $isB2B;
    }

    /**
     * @return mixed
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * @param mixed $settings
     */
    public function setSettings($settings)
    {
        $this->settings = $settings;
    }

}