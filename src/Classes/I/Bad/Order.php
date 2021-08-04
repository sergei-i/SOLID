<?php


namespace App\I\Bad;


class Order implements IOrderable
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

    public function getComment()
    {
        return 'Comment';
    }
}