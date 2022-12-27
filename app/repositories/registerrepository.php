<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../views/register/index.php';

class RegisterRepository extends Repository
{
    function registerUser(User $user)
    {
        try {
            $stmt = $this->connection->prepare("INSERT INTO `Users` (`firstname`, `lastname`, `email`, `password`, `isAdmin`, `address`, `postcode`, `birthdate`) 
                                                VALUES (:firstname, :lastname, :email, :password, :isAdmin, :address, :postcode, :birthdate);");
        
            $stmt->bindValue(':email', $user->getEmail());
            $stmt->bindValue(':address', $user->getAddress());
            $stmt->bindValue(':password', $user->getPassword());
            $stmt->bindValue(':postcode', $user->getPostCode());
            $stmt->bindValue(':lastname', $user->getLastName());
            $stmt->bindValue(':firstname', $user->getFirstName());
            $stmt->bindValue(':birthdate', $user->getBirthdate());
            $stmt->bindValue(':isAdmin', $user->getIsAdmin());
        
            $stmt->execute();
        
        } catch(PDOException $e){
            echo "Registering user failed: " . $e->getMessage();
        }
        
    }

}