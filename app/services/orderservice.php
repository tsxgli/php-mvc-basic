<?php
require __DIR__ . '/../repositories/orderrepository.php';

class OrderService {

    private $repository;
    function __construct()
    {
        $this->repository = new OrderRepository();
    }
    

}