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
        require __DIR__ . '/../views/login/index.php';
        if (isset($_POST['loginButton'])) {
            $email = htmlspecialchars($_POST['emailLogin']);
            $password = htmlspecialchars($_POST['passwordLogin']);
            $user = $this->loginService->validateUser($email, $password);

            if (is_null($user)) {
                echo " <script type='text/javascript'>alert('Invalid email or password. Please try again');</script>";
            } else {
                $_SESSION['loggedInUser']= $user;
                echo "<script>location.href='/movies'</script>";
            }
        }
        return null;
    }
    public function logout()
    {
       
        unset($_SESSION['loggedInUser']);
        //session_destroy();
        $_SESSION = array();
        echo " <script type='text/javascript'>alert('You have successfully logged out.');</script>";
        echo "<script>location.href='/'</script>";    
    }
}
