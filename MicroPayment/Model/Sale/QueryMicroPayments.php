<?php
namespace  MicroPayment\Model\Sale;
/**
 * MicroPayment library in PHP.
 *
 * @version   0.1.0
 */


use MicroPayment\Model\Shared\Input;
use MicroPayment\Common\SaleResourceModel;

class QueryMicroPayments extends SaleResourceModel
{
    public function setInput(Input $input){
        parent::__construct();
        $this->input = $input;
    }
}