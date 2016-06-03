<?php
namespace  MicroPayment\Exception;
/**
 * MicroPayment library in PHP.
 *
 * @version   0.1.0
 */

class MicroPaymentException extends \Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}