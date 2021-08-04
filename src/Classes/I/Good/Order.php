<?php


namespace App\I\Good;


class Order implements IOrder, IPayment, IDiscount, IShipment
{

    public function getPaymentMethod()
    {
        return 'Webmoney';
    }

    public function getShipmentMethod()
    {
        return 'Post';
    }

    public function getDiscount()
    {
        return 50;
    }

    public function getTotalPrice()
    {
        return 100;
    }

    public function getClientInfo()
    {
        return 'Email, phone';
    }
}