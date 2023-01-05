<?php
require __DIR__ . '/../services/loginservice.php';
//require __DIR__ . '/../models/user.php';

class LoginController
{
    private $loginService;

    function __construct()
    {
        $this->loginService = new LoginService();

    }
    // public function validateUser():?User{
    //     if (isset($_POST['loginButton'])) {
    //         $email = htmlspecialchars($_POST['emailLogin']);
    //         $password = htmlspecialchars($_POST['passwordLogin']);
             
    //         $user = $this->loginService->validateUser($email, $password);
    //         if ($user) {
    //             session_start();
    //             echo "<script>location.href='/home'</script>";
    //             $_SESSION['loggedInUser'] = $user;
    //         } else {
    //             echo "wrong password";
    //         }
    //     }
      
    // }
    public function validateUser(): ?User {
        if (isset($_POST['loginButton'])) {
            $email = htmlspecialchars($_POST['emailLogin']);
            $password = htmlspecialchars($_POST['passwordLogin']);
    
            $user = $this->loginService->validateUser($email, $password);
            if ($user) {
                session_start();
                echo "<script>location.href='/home'</script>";
                $_SESSION['loggedInUser'] = $user;
                return $user;
            } 
                echo "Invalid email or password. Please try again.";
        }
        return null;
    }
}
?>