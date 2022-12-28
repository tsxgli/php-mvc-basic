<?php
require __DIR__ . '/../repositories/registerrepository.php';

class RegisterService {
    
    private $repository;
    function __construct()
    {
        $this->repository = new RegisterRepository();
    }
    public function registerUser(User $user) {
        $this->repository->registerUser($user);
    }
    
}