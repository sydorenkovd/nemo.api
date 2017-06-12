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
    public function mapper($data, $model) {
        foreach ($data as $name => $value) {
            if($name == 'request') {
                $method = 'get'.ucfirst($name);
                $fValue = $model->$method();
                if(is_object($fValue)) {
                    $props = $this->reflection($fValue);
                    if(!empty($props)) {
                        foreach ($props as $prop) {

                        }
                    }
                }
            }
        }
    }

    private function reflection($object) {
        return (new \ReflectionClass($object))->getProperties(\ReflectionProperty::IS_PRIVATE | \ReflectionProperty::IS_PUBLIC | \ReflectionProperty::IS_PROTECTED);
    }
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
                            $props = $this->reflection($nestedObject);
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