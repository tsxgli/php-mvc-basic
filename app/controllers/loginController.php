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
            $email = htmlspecialchars($_POST['emailLogin']);
            $password = htmlspecialchars($_POST['passwordLogin']);

            $model = $this->loginService->validateUser($email, $password);
            if ($model) {
                echo "<script>location.href='/home'</script>";
            } else {
                echo "wrong password";
            }
        }

    }
}

?>