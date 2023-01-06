<?php
require __DIR__ . '/../services/loginservice.php';


class LoginController
{
    private $loginService;

    function __construct()
    {
        $this->loginService = new LoginService();
    }

   // public function validateUser(): ?User
    // {
    //     require __DIR__ . '/../views/login/index.php';
    //     $_SESSION["loggedInUser"] = array();
    //     $user = new User();
    //     if (isset($_POST['loginButton'])) {
    //         $email = htmlspecialchars($_POST['emailLogin']);
    //         $password = htmlspecialchars($_POST['passwordLogin']);

    //         $user = $this->loginService->validateUser($email, $password);
    //         if($user == null){
    //            echo " <script type='text/javascript'>alert('Invalid email or password. Please try again');</script>";
    //         }
    //         else{
    //             echo "<script>location.href='/movies'</script>";
                
    //             $_SESSION["loggedInUser"] = serialize($user);
    //             echo $user->getFirstName();
    //         }
    //     }
    //     return null;
    // }

    public function validateUser(): ?User
    {
        require __DIR__ . '/../views/login/index.php';
     
        if (isset($_POST['loginButton'])) {
            $email = htmlspecialchars($_POST['emailLogin']);
            $password = htmlspecialchars($_POST['passwordLogin']);

            $user = $this->loginService->validateUser($email, $password);
            if($user == null){
               echo " <script type='text/javascript'>alert('Invalid email or password. Please try again');</script>";
            }
            else{
                echo "<script>location.href='/movies'</script>";
                
                $_SESSION["loggedInUser"] = serialize($user);
            }
        }
        return null;
    }
    public function logout(){
        session_destroy();
        echo "<script>location.href='/'</script>";
    }
}
?>