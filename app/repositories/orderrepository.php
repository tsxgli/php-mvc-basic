<?php
require __DIR__ . '/repository.php';

class OrderRepository extends Repository
{
    function addToCart(Order $order)
    {
        //return $_SESSION['orders'] += $order;
    }
}