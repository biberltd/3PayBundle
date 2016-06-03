<?php
namespace  MicroPayment\Exception;
/**
 * MicroPayment library in PHP.
 *
 * @version   0.1.0
 */

class ConfigurationException extends \Exception
{
    public function __construct($message = null, $code = 0)
    {
        parent::__construct($message, $code);
    }
}