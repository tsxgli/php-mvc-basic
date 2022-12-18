<?php
require __DIR__ . '/../services/articleservice.php';

class LoginController
{
    private $loginService;

    function __construct()
    {
        $this->loginService = new LoginService();
    }

    public function index()
    {
        $model = $this->loginService->getAll();

        require __DIR__ . '/../views/article/index.php';
    }
}

?>