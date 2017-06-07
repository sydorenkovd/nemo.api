<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 * Date: 07.06.17
 * Time: 13:21
 */
namespace Nemo\Library;


/**
 * Interface for customized serializing.
 * @link http://php.net/manual/en/class.serializable.php
 */
abstract class Response implements \Serializable
{
    public function __construct($items)
    {
        $this->autoload($items);
    }

    protected function autoload($items, $fromCache = false) {
        if($items && is_array($items)) {
            foreach ($items as $nameProperty => $value) {
                if(property_exists($this, $nameProperty)) {
                    $this->{$nameProperty} = $value;
                }
            }
        }
    }

    /**
     * @param $nameObject
     * @param $items
     * @return $this|null
     */
    public static function factory($nameObject, $items) {
        $fullName = __NAMESPACE__ . '\\Response\\' . $nameObject;
        if(class_exists($fullName)) {
            return new $fullName($items);
        } else {
            return null;
        }
    }

    public function serialize()
    {
        return serialize(get_object_vars($this));
    }

    public function unserialize($serialized)
    {
        $this->autoload(unserialize($serialized), true);
    }
}
