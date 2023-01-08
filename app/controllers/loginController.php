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
        require __DIR__ . '/../views/login/index.php';
    }
    public function validateUser()
    {
        require __DIR__ . '/../views/login/index.php';
        if (isset($_POST['loginButton'])) {
            $email = htmlspecialchars($_POST['emailLogin']);
            $password = htmlspecialchars($_POST['passwordLogin']);

            $user = $this->loginService->validateUser($email, $password);
            if ($user == null) {
                echo " <script type='text/javascript'>alert('Invalid email or password. Please try again');</script>";
            } else {

                if (!(isset($_SESSION))){
                    session_start();
                }
                echo "<script>location.href='/movies'</script>";
                $_SESSION['loggedInUser'] = $user;
                //echo $_SESSION['loggedInUser'];
            }
        }

        return null;
    }
    public function logout()
    {
        unset($_SESSION['loggedInUser']);
        echo " <script type='text/javascript'>alert('You have successfully logged out.');</script>";
        echo "<script>location.href='/'</script>";
        var_dump($_SESSION['loggedInUser']);      
    }
}
