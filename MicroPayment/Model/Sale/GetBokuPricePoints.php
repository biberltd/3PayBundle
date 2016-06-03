<?php
namespace  MicroPayment\Model\Sale;
/**
 * MicroPayment library in PHP.
 *
 * @version   0.1.0
 */


use MicroPayment\Common\SaleResourceModel;

class GetBokuPricePoints extends SaleResourceModel
{
    public function setCountry($Country){
        $this->Country = $Country;
    }
}