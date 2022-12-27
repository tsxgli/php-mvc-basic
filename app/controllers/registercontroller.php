<?php
require __DIR__ . '/../services/registerservice.php';

class RegisterController
{
    private $registerService;

    function __construct()
    {
        $this->registerService = new RegisterService();
    }

    public function index()
    {
        require __DIR__ . '/../views/register/index.php';
    }

  
}

?>