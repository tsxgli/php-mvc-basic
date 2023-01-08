<?php
require __DIR__ . '/../services/registerservice.php';
require __DIR__ . '/../models/user.php';
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
}

?>