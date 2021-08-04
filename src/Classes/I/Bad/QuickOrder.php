<?php


namespace App\I\Bad;


use Exception;

class QuickOrder implements IOrderable
{

    /**
     * @throws Exception
     */
    public function getPaymentMethod()
    {
        throw new Exception('Payment error');
    }

    /**
     * @throws Exception
     */
    public function getShipmentMethod()
    {
        throw new Exception('Shipment error');
    }

    /**
     * @throws Exception
     */
    public function getDiscount()
    {
        throw new Exception('Discount error');
    }

    public function getTotalPrice()
    {
        return 100;
    }

    public function getClientInfo()
    {
        return 'Phone';
    }

    public function getComment()
    {
        throw new Exception('Comment error');
    }
}