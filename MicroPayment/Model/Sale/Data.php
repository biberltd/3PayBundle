<?php
namespace  MicroPayment\Model\Sale;
/**
 * MicroPayment library in PHP.
 *
 * @version   0.1.0
 */


use MicroPayment\Common\BaseModel;

class Data extends BaseModel
{
    public function setCreditCardNumber($CreditCardNumber){
        $this->CreditCardNumber = $CreditCardNumber;
    }
    public function setCreditCardExpireMonth($CreditCardExpireMonth){
        $this->CreditCardExpireMonth = $CreditCardExpireMonth;
    }
    public function setCreditCardExpireYear($CreditCardExpireYear){
        $this->CreditCardExpireYear = $CreditCardExpireYear;
    }
    public function setCreditCardOwner($CreditCardOwner){
        $this->CreditCardOwner = $CreditCardOwner;
    }
    public function setCVV($CVV){
        $this->CVV = $CVV;
    }
}