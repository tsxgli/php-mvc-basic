<?php
require __DIR__ . '/../services/orderservice.php';
require __DIR__ . '/../models/order.php';
class OrderController
{
    private $orderService;

    function __construct()
    {
        $this->orderService = new OrderService();
    }

    public function addToCart()
    {

    }
    public function paymentSuccessful(){
        require __DIR__ . '/../views/cart/paymentSuccessful.php';   
    }

  
}

?>