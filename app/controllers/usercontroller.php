<?php
require __DIR__ . '/../services/userservice.php';
class UserController
{
    private $userservice;

    function __construct()
    {
        $this->userservice = new UserService();
    }
    public function adminIndex(){
        require __DIR__ . '/../views/admin/index.php'; 
    } 
  
    public function manageUsers(){
        $model= $this->userservice->getAll();
        require __DIR__ . '/../views/admin/usersmanagement.php'; 
    }
    public function deleteUser(){
        $userId=$_GET['id'];
        $this->userservice->deleteUser($userId);
    }
}

?>