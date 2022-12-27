<?php
require __DIR__ . '/../repositories/registerrepository.php';

class RegisterService {
    public function register(User $user) {
        $repository = new RegisterRepository();
        return $repository->registerUser($user);
    }
    
}