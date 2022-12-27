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
        echo "Y";
    }

    public function validateUser(string $email, string $password){
        require __DIR__ . '/../views/login/index.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $email = $_POST['emailInput'];
            $password = $_POST('passwordInput');


            if (isset($_POST['loginButton'])) {


                $model = $this->loginService->validateUser($email, $password);
                if ($model) {
                    header("Location: /home");
                    echo "yeah";
                } else {
                    echo "wrong";
                }
            }
        }
       
        require __DIR__ . '/../views/login/index.php';
    }
}

?>