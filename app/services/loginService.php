<?php
require __DIR__ . '/../repositories/loginrepository.php';
require __DIR__ . '/../models/user.php';
class LoginService {

    private $repository;
    function __construct()
    {
        $this->repository = new LoginRepository();
  
    }

    public function validateUser(string $email, string $password) {
        return $this->repository->validateUser($email, $password);
    }
}