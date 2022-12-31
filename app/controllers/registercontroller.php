<?php
require __DIR__ . '/../services/registerservice.php';
require __DIR__ . '/../models/user.php';
class RegisterController
{
    private $registerService;

    function __construct()
    {
        $this->registerService = new RegisterService();
    }

    public function registerUser()
    {
       // require __DIR__ . '/../views/register/index.php';

        $user = new User();
        if (isset($_POST['registerBtn'])) {
            
            $user->setEmail(htmlspecialchars($_POST['emailRegister'])); 
            $user-> setPassword(password_hash(htmlspecialchars($_POST['passwordRegister']),PASSWORD_DEFAULT));
            $user-> setFirstName(htmlspecialchars($_POST['firstnameRegister']));
            $user->setLastName(htmlspecialchars($_POST['lastnameRegister']));
            $user->setPostCode(htmlspecialchars( $_POST['postcodeRegister']));
            $user->setAddress(htmlspecialchars($_POST['addressRegister']));
            $user->setBirthdate(htmlspecialchars($_POST['birthdateRegister']));
            $user->setIsAdmin(false);
            $this->registerService->registerUser($user);
            
            // navigate to login page after register
            echo "<script>location.href='/login'</script>";
        }
    }

  
}

?>