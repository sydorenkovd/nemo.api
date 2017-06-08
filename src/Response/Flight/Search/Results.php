<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 13:51
 */

namespace Nemo\Library\Response\Flight\Search;


use Nemo\Library\Response\Flight\Search\Result\GroupsData\Prices;
use Nemo\Library\Response\Flight\Search\Result\Info;

class Results
{

    private $groupsData;

    private $info;
    private $id;
    private $uri;
    private $matrixUri;

    public function __construct()
    {
        $this->groupsData = new Prices();
        $this->info = new Info();
    }
    /**
     * @return mixed
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param mixed $info
     */
    public function setInfo($info)
    {
        $this->info = $info;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param mixed $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return mixed
     */
    public function getMatrixUri()
    {
        return $this->matrixUri;
    }

    /**
     * @param mixed $matrixUri
     */
    public function setMatrixUri($matrixUri)
    {
        $this->matrixUri = $matrixUri;
    }

    /**
     * @return mixed
     */
    public function getGroupsData()
    {
        return $this->groupsData;
    }

    /**
     * @param mixed $groupsData
     */
    public function setGroupsData($groupsData)
    {
        $this->groupsData = $groupsData;
    }

}
