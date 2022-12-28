<?php
require __DIR__ . '/../repositories/loginrepository.php';

class LoginService {

    private $repository;
    function __construct()
    {
        $this->repository = new LoginRepository();
  
    }
    public function getAll() {
        return $this->repository->getAll();
    }
    public function validateUser(string $username,string $password) {
        return $this->repository->validateUser($username,$password);
    }
}