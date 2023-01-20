<?php
require __DIR__ . '/../services/userservice.php';
class UserController
{
    private $userservice;

    function __construct()
    {
        $this->userservice = new UserService();
    }
    public function adminIndex()
    {
        require __DIR__ . '/../views/admin/index.php';
    }

    public function manageUsers()
    {
        $model = $this->userservice->getAll();
        require __DIR__ . '/../views/admin/usersmanagement.php';
    }
    public function deleteUser()
    {
        $userId = $_GET['id'];
        $this->userservice->deleteUser($userId);
        echo "<script>location.href='/admin/manageusers'</script>";
    }
    public function editUser()
    {
        $model = $this->userservice->getUser($_GET['id']);
        require __DIR__ . '/../views/admin/edituser.php';
    }
  
    public function updateUser()
    {
        if (isset($_POST['updateUserBtn'])) {
            $data = array(
                'id' => htmlspecialchars($_POST['editId']),
                'firstname' => htmlspecialchars($_POST['editFirstname']),
                'lastname' => htmlspecialchars($_POST['editLastname']),
                'postcode' => htmlspecialchars($_POST['editPostcode']),
                'address' => htmlspecialchars($_POST['editAddress']),
                'birthdate' => htmlspecialchars($_POST['editBirthdate']),
                'email' => htmlspecialchars($_POST['editEmail']),
                'isAdmin' => htmlspecialchars(($_POST['isAdmin'] === "true") ? 0 : 1),
            );
            $this->userservice->updateUser($data);
            echo " <script type='text/javascript'>alert('Successfully updated user.');</script>";

        } else {
            echo " <script type='text/javascript'>alert('Could not update user.');</script>";
        }
        echo "<script>location.href='/admin/manageusers'</script>";
    }

    public function addUser()
    {
        require __DIR__ . '/../views/admin/adduser.php';
    }
    public function addnewUser(){
        if (isset($_POST['addUserBtn'])) {
            $data = array(
                'firstname' => htmlspecialchars($_POST['addFirstname']),
                'lastname' => htmlspecialchars($_POST['addLastname']),
                'password'=>(password_hash(htmlspecialchars($_POST['addPassword']),PASSWORD_DEFAULT)),
                'postcode' => htmlspecialchars($_POST['addPostcode']),
                'address' => htmlspecialchars($_POST['addAddress']),
                'birthdate' => htmlspecialchars($_POST['addBirthdate']),
                'email' => htmlspecialchars($_POST['addEmail']),
                'isAdmin' => htmlspecialchars(($_POST['isAdmin'] === "true") ? 0 : 1),
            );
            $this->userservice->addUser($data);
            echo " <script type='text/javascript'>alert('Successfully added user.');</script>";
        } else {
            echo " <script type='text/javascript'>alert('Could not add user.');</script>";
        }
        echo "<script>location.href='/admin/manageusers'</script>";
    }
}

?>