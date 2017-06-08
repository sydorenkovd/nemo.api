<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 17:23
 */

namespace Nemo\Library\Response\Flight\Search\Result;


class Info
{
    private $errorCode;
    private $errorMessageEng;

    /**
     * @return mixed
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param mixed $errorCode
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return mixed
     */
    public function getErrorMessageEng()
    {
        return $this->errorMessageEng;
    }

    /**
     * @param mixed $errorMessageEng
     */
    public function setErrorMessageEng($errorMessageEng)
    {
        $this->errorMessageEng = $errorMessageEng;
    }

}