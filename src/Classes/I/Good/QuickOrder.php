<?php


namespace App\I\Good;


class QuickOrder implements IOrder
{
    public function getTotalPrice()
    {
        return 100;
    }

    public function getClientInfo()
    {
        return 'Phone';
    }
}