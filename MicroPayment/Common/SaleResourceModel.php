<?php
namespace  MicroPayment\Common;
/**
 * MicroPayment library in PHP.
 *
 * @version   0.1.0
 */
use BaseResourceModel;

class SaleResourceModel extends BaseResourceModel
{
    public function __construct(){
        self::$wsdlAddress = "https://www.3pay.com/services/saleservice.asmx?wsdl";
    }
}