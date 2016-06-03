<?php
namespace  MicroPayment\Model\Shared;
/**
 * MicroPayment library in PHP.
 *
 * @version   0.1.0
 */


use MicroPayment\Common\BaseModel;

class Token extends BaseModel
{
    public function setUserCode($userCode){
        $this->UserCode = $userCode;
    }
    public function setPin($pin){
        $this->Pin = $pin;
    }
}