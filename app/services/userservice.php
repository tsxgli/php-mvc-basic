<?php
require __DIR__ . '/../repositories/userrepository.php';

class RegisterService {
    
    private $repository;
    function __construct()
    {
        $this->repository = new UserRepository();
    }
   
    
}