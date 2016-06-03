<?php
namespace  MicroPayment\Model\Sale;
/**
 * MicroPayment library in PHP.
 *
 * @version   0.1.0
 */


use MicroPayment\Common\SaleResourceModel;

class GetSaleResultMPAY extends SaleResourceModel
{
    public function __construct($MPAY){
        parent::__construct();
        //mpay
        $this->MPAY = $MPAY;
    }
}