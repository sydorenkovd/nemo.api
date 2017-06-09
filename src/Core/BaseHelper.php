<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 08.06.17
 * Time: 10:41
 */

namespace Nemo\Library\Core;


use Nemo\Library\Response\Iterators\CustomArrayIterator;

class BaseHelper
{
    /**
     * @param $data
     * @param null $class
     * @return array|\ArrayIterator|\Traversable
     */
    public function getIterator($data, $class = null)
    {
        if ($data instanceof \ArrayIterator) {
            return $data;
        } else {
            if ($class && $data && !empty($data)) {
                $iterator = [];
                foreach ($data as $item) {
                    $object = new $class();
                    foreach ($item as $name => $value) {
                        if (is_array($value)) {
                            $getNestedObject = 'get' . ucfirst($name);
                            $nestedObject = $object->$getNestedObject();
                            $reflect = new \ReflectionClass($nestedObject);
                            $props = $reflect->getProperties(\ReflectionProperty::IS_PRIVATE | \ReflectionProperty::IS_PUBLIC | \ReflectionProperty::IS_PROTECTED);
                            foreach ($props as $prop) {
                                if(isset($value[$prop->name])) {
                                    $nestedMethod = 'set' . ucfirst($prop->name);
                                    $nestedObject->$nestedMethod($value[$prop->name]);
                                }
                            }
                        } else {
                            $method = 'set' . ucfirst($name);
                            $object->$method($value);
                        }

                    }
                    $iterator[] = $object;
                }

                return $iterator;
            } else {
                if ($data) {
                    return (new CustomArrayIterator($data))->getIterator();
                } else {
                    return null;
                }
            }
        }

    }
}