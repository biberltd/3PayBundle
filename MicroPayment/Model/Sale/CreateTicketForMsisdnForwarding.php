<?php
namespace  MicroPayment\Model\Sale;
/**
 * MicroPayment library in PHP.
 *
 * @version   0.1.0
 */

use MicroPayment\Common\SaleResourceModel;

class CreateTicketForMsisdnForwarding extends SaleResourceModel
{
    function __construct($redirectUrl)
    {
        parent::__construct();
        $this->redirectUrl = $redirectUrl;
    }
}