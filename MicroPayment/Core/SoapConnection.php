<?php
namespace  MicroPayment\Core;
/**
 * MicroPayment library in PHP.
 *
 * @version   0.1.0
 */
use MicroPayment\Exception\ConfigurationException;

class SoapConnection
{
    private static $lastRequest;
    private static $lastResponse;
    private static $soapOptions = array(
        'soap_version' => 'SOAP_1_1',
        'exceptions' => true,
        'trace' => 1,
        'cache_wsdl' => 'WSDL_CACHE_NONE'
    );
    private $soapClient;
    public function __construct($wsdlAddress){
        if(!extension_loaded('soap')){
            throw new ConfigurationException("SOAP module is not available on this system");
        }
        $this->soapClient = new \SoapClient($wsdlAddress, self::$soapOptions);
    }
    public function execute($methodName, $requestData){
        $result = $this->soapClient->__soapCall($methodName, array($requestData));
        self::$lastRequest = $this->soapClient->__getLastRequest();
        self::$lastResponse = $this->soapClient->__getLastResponse();
        return $result;
    }
    public function getLastRequest(){
        return self::$lastRequest;
    }
    public function getLastResponse(){
        return self::$lastResponse;
    }
}