<?php
namespace  MicroPayment\Model\Subscribe;
/**
 * MicroPayment library in PHP.
 *
 * @version   0.1.0
 */


use MicroPayment\Model\Shared\Input;
use MicroPayment\Common\SubscribeResourceModel;

class SelectSubscriber extends SubscribeResourceModel
{
    public function setInput($input){
        $this->input = $input;
    }
}