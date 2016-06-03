<?php
namespace  MicroPayment\Model\Sale;
/**
 * MicroPayment library in PHP.
 *
 * @version   0.1.0
 */

use MicroPayment\Common\SaleResourceModel;

class CheckTicket extends SaleResourceModel
{
    function __construct($ticketObjectId)
    {
        parent::__construct();
        $this->ticketObjectId = $ticketObjectId;
    }
}