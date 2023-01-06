<?php
require __DIR__ . '/../services/loginservice.php';


class LoginController
{
    private $loginService;

    function __construct()
    {
        $this->loginService = new LoginService();
    }

    public function validateUser(): ?User
    {
        require __DIR__ . '/../views/login/index.php';
        $_SESSION["loggedInUser"] = array();
       // $user = new User();
        if (isset($_POST['loginButton'])) {
            $email = htmlspecialchars($_POST['emailLogin']);
            $password = htmlspecialchars($_POST['passwordLogin']);

            $model = $this->loginService->validateUser($email, $password);
            if($model == null){
                echo " <script type='text/javascript'>alert('Invalid email or password. Please try again');</script>";
            }
            else{
                echo "<script>location.href='/movies'</script>";
                $_SESSION["loggedInUser"] = $model;
                echo $model->getFirstName();
            }
            // if ($user != null) {
            //     array_push($_SESSION["loggedInUser"], $user);
            
            //     //var_dump($user);
            //     return $user;
            // }
            // else{
            //    
            // }
            
        }
        return $user;
    }
    public function logout(){
        session_abort();
        echo "<script>location.href='/'</script>";
    }
}
?>