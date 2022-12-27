<?php
require __DIR__ . '/../services/loginservice.php';

class LoginController
{
    private $loginService;

    function __construct()
    {
        $this->loginService = new LoginService();
        session_start();
    }
   

    public function index()
    {
        require __DIR__ . '/../views/login/index.php';
        echo $_POST['password'];
    }

    public function validateUser(string $email, string $password){
        require __DIR__ . '/../views/login/index.php';

        if(isset($_POST['loginButton'])){
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
    
            $model = $this->loginService->validateUser($email,$password);
            if ($model) {
                header("Location: /home");
                echo "yeah";
            }
            else{
                echo "wrong";
            }
        }
       
        require __DIR__ . '/../views/login/index.php';
    }
}

?>