<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../views/order/index.php';
class OrderRepository extends Repository
{
    function addToCart(Order $order)
    {
        return $_SESSION['orders'] += $order;
    }
}