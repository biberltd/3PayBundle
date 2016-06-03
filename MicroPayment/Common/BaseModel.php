<?php
namespace  MicroPayment\Common;
/**
 * MicroPayment library in PHP.
 *
 * @version   0.1.0
 */
class BaseModel
{
    private $_fields = array();
    public function __get($key)
    {
        if ($this->__isset($key)) {
            return $this->_fields[$key];
        }
        return null;
    }
    public function __set($key, $value)
    {
        if (!is_array($value) && $value === null) {
            $this->__unset($key);
        } else {
            $this->_fields[$key] = $value;
        }
    }
    public function __isset($key)
    {
        return isset($this->_fields[$key]);
    }
    public function __unset($key)
    {
        unset($this->_fields[$key]);
    }
    public function toArray()
    {
        return $this->_convertToArray($this->_fields);
    }
    private function _convertToArray($param)
    {
        $ret = array();
        foreach ($param as $k => $v) {
            if ($v instanceof BaseModel) {
                $ret[$k] = $v->toArray();
            } else if (sizeof($v) <= 0 && is_array($v)) {
                $ret[$k] = array();
            } else if (is_array($v)) {
                $ret[$k] = $this->_convertToArray($v);
            } else {
                $ret[$k] = $v;
            }
        }
        if (sizeof($ret) <= 0) {
            $ret = new BaseModel();
        }
        return $ret;
    }
    public function __call($methodName, $args) {
        //answer to undefined getter methods
        if( substr($methodName, 0, 3) == "get") {
            $propertyName = substr($methodName, 3);
            if($this->__isset($propertyName)){
                return $this->__get($propertyName);
            }else{
                return false;
            }
        }
    }
}