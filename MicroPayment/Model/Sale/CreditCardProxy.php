<?php
namespace  MicroPayment\Model\Sale;
/**
 * MicroPayment library in PHP.
 *
 * @version   0.1.0
 */

use MicroPayment\Model\Sale;
use MicroPayment\Common\SaleResourceModel;

class CreditCardProxy extends SaleResourceModel
{
    public function setInput(Input $input){
        $this->input = $input;
    }
}