<?php


namespace App\I\Good;


interface IOrder
{
    public function getTotalPrice();

    public function getClientInfo();
}