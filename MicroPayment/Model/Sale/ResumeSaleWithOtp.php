<?php
namespace  MicroPayment\Model\Sale;
/**
 * MicroPayment library in PHP.
 *
 * @version   0.1.0
 */


use MicroPayment\Common\SaleResourceModel;

class ResumeSaleWithOtp extends SaleResourceModel
{
    public function setOrderId($orderId){
        $this->orderId = $orderId;
    }
    public function setOtp($otp){
        $this->otp = $otp;
    }
}