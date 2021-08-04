<?php


namespace App\I\Bad;


interface IOrderable
{
    public function getPaymentMethod();

    public function getShipmentMethod();

    public function getDiscount();

    public function getTotalPrice();

    public function getClientInfo();

    public function getComment();
}