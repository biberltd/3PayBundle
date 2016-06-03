<?php
namespace  MicroPayment\Validation;
/**
 * MicroPayment library in PHP.
 *
 * @version   0.1.0
 */
use MicroPayment\Exception\MicroPaymentException;

class MicroPaymentErrorChecker
{
    public static function check($resultObject, $methodName){
        $baseProperty = $methodName."Result";
        //something went wrong on Micro Payment
        if($resultObject->$baseProperty->StatusCode == 1){
            throw new MicroPaymentException($resultObject->$baseProperty->ErrorMessage);
        }
    }
}