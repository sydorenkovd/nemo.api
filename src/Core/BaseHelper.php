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
                $method = 'get'.ucfirst($name);
                // request
                $fValue = $model->$method();
                $this->iterate($fValue, $value);
        }
    }

    private function iterate($fValue, $value) {
        if(is_object($fValue)) {
            $props = $this->reflection($fValue);
            if(!empty($props)) {
                foreach ($props as $prop) {
                    try {
                        $methodGet = 'get'. ucfirst($prop->name);
                        $methodSet = 'set'. ucfirst($prop->name);
                        if(method_exists($fValue, $methodGet)) {
                            $sValue = $fValue->$methodGet();
                            if($sValue === null) {
                                $fValue->$methodSet($value[$prop->name]);
                            } else if ($sValue == 'array' || is_a($sValue, \ArrayIterator::class)) {
                                $locClass = get_class($sValue[0]);
                                $props = $this->reflection($sValue[0]);
                                unset($sValue[0]);
                                    foreach ($value[$prop->name] as $objData) {
                                        $obj = new $locClass();
                                        foreach ($props as $prop) {
                                            $method = 'set' .ucfirst($prop->name);
                                            $obj->$method($objData[$prop->name]);
                                        }
                                        $sValue->append($obj);
                                    }
//                                    die(print_r($sValue));
                            } else if ($sValue == 'object' || is_object($sValue)) {
                                    $this->iterate($sValue, $value[$prop->name]);
                            }
                        }
                    } catch (\Exception $e) {
                        $errors = $e->getMessage();
                    }
                }
            }
        }
    }

    private function reflection($object) {
        return (new \ReflectionClass($object))->getProperties(\ReflectionProperty::IS_PRIVATE | \ReflectionProperty::IS_PUBLIC | \ReflectionProperty::IS_PROTECTED);
    }


    public function createIterator($class) {
        return new \ArrayIterator([new $class()]);
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
                    return $data;
                }
            }
        }

    }
}