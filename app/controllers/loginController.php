<?php
require __DIR__ . '/../services/loginservice.php';
require __DIR__ . '/../views/login/index.php';
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
    }

    public function validateUser(){

        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $email = $_POST['emailInput'];
            $password = $_POST('passwordInput');

            if (isset($_POST['loginButton'])) {

                echo($email);
                echo($password);
    
                $model = $this->loginService->validateUser($email, $password);
                if ($model==true) {   
                    header("Location: /home");
                } else {
                    echo "wrong";
                }
            }
        //}
        
        }
}

?>