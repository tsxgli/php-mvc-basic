<?php
require __DIR__ . '/../services/registerservice.php';

class RegisterController
{
    private $registerService;

    function __construct()
    {
        $this->registerService = new RegisterService();
    }

    public function registerUser()
    {
        require __DIR__ .'/../views/register/index.php';
    
        if (isset($_POST['registerBtn'])) {
            echo "this word";
            $user = new User();
            $user->setEmail($_POST['email']); 
            $user-> setPassword(password_hash($_POST['password'],PASSWORD_DEFAULT));
            $user-> setFirstName($_POST['firstname']) ;
            $user->setLastName($_POST['lastname']);
            $user->setPostCode( $_POST['postcode']);
            $user->setAddress($_POST['address']) ;
            $user->setBirthdate($_POST['birthdate']);

            $this->registerService->registerUser($user);
            echo "<script>location.href='/login'</script>";
        }

    }

  
}

?>