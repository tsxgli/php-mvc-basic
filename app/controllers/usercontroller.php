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
        require __DIR__ . '/../views/admin/usersmanagement.php'; 
    }
}

?>