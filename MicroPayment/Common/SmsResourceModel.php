<?php
namespace  MicroPayment\Common;
/**
 * MicroPayment library in PHP.
 *
 * @version   0.1.0
 */
use MicroPayment\Model\Shared\Input;
use BaseResourceModel;

class SmsResourceModel extends BaseResourceModel
{
    public function __construct($custom = null){
        self::$wsdlAddress = "http://vas.mikro-odeme.com/services/msendsmsservice.asmx?wsdl";
        //this means, custom number will be used
        if(!is_null($custom)){
            self::$wsdlAddress = "http://vas.mikro-odeme.com/services/MCustomSendSMSService.asmx?wsdl";
        }
    }
    public function setInput(Input $input){
        $this->input = $input;
    }
}