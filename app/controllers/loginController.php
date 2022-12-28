<?php
require __DIR__ . '/../services/loginservice.php';

class LoginController
{
    private $loginService;

    function __construct()
    {
        $this->loginService = new LoginService();
  
    }
    public function validateUser(){
      
        require __DIR__ . '/../views/login/index.php';

            if (isset($_POST['loginButton'])) {
                $email = $_POST['emailInput'];
                $password = $_POST['passwordInput'];
    
                echo($email);
                echo($password);
    
                $model = $this->loginService->validateUser($email, $password);
                if ($model==true) {
                echo "password is correcg";
                } else {
                echo "<script>location.href='/home'</script>";
                    echo "wrong";

                }
            }
        //}
        
        }
}

?>