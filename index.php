<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 10:45
 */
require __DIR__ . '/vendor/autoload.php';


$object = new Nemo\Library\Response\SystemInfoUser();
print_r($object->getSettings());