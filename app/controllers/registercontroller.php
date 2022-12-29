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
            
            $user->setEmail($_POST['emailRegister']); 
            $user-> setPassword(password_hash($_POST['passwordRegister'],PASSWORD_DEFAULT));
            $user-> setFirstName($_POST['firstnameRegister']) ;
            $user->setLastName($_POST['lastnameRegister']);
            $user->setPostCode( $_POST['postcodeRegister']);
            $user->setAddress($_POST['addressRegister']) ;
            $user->setBirthdate($_POST['birthdateRegister']);
            $user->setIsAdmin(false);
            $this->registerService->registerUser($user);
            //echo "<script>location.href='/login'</script>";
        }
    }

  
}

?>