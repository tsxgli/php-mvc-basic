<?php
require __DIR__ . '/../repositories/userrepository.php';

class UserService {
    
    private $repository;
    function __construct()
    {
        $this->repository = new UserRepository();
    }
    function getAll(){
        return $this->repository->getAll();
    }
   
    function deleteUser($id){
        return $this->repository->deleteUser($id);
    }
}