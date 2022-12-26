<?php
require __DIR__ . '/../services/loginservice.php';

class LoginController
{
    private $loginService;

    function __construct()
    {
        $this->loginService = new LoginService();
    }

    public function index()
    {
        require __DIR__ . '/../views/login/login.php';
    }

    public function validateUser(string $username, string $password){
        $model = $this->loginService->validateUser($username,$password);

        require __DIR__ . '/../views/login/login.php';
    }
}

?>