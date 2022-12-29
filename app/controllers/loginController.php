<?php
require __DIR__ . '/../services/loginservice.php';

class LoginController
{
    private $loginService;

    function __construct()
    {
        $this->loginService = new LoginService();

    }
    public function validateUser()
    {
        if (isset($_POST['loginButton'])) {
 
            $email = $_POST['emailLogin'];
            $password = $_POST['passwordLogin'];

            $model = $this->loginService->validateUser($email, $password);
            if ($model) {

            } else {
                echo $email;
              echo "<script>location.href='/home'</script>";
            }
        }

    }
}

?>