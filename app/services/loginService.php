<?php
require __DIR__ . '/../repositories/loginrepository.php';

class LoginService {
    public function getAll() {
        $repository = new LoginRepository();
        return $repository->getAll();
    }
    public function validateUser(string $username,string $password) {
        $repository = new LoginRepository();
        return $repository->validateUser($username,$password);
    }
}