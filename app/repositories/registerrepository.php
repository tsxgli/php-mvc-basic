<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../views/register/index.php';

class RegisterRepository extends Repository
{
    function registerUser(User $user)
    {
        try {
                $stmt = $this->connection->prepare('INSERT INTO Users (_id,firstname, lastname,email, password, isAdmin, address,postcode, birthdate) 
                                                    VALUES (null, :lastname, :email, :password, :isAdmin, :address, :postcode, :birthdate);');
            
                $stmt->bindValue(':email', $user->getEmail(),PDO::PARAM_STR);
                $stmt->bindValue(':address', $user->getAddress(),PDO::PARAM_STR);
                $stmt->bindValue(':password', $user->getPassword(),PDO::PARAM_STR);
                $stmt->bindValue(':postcode', $user->getPostCode(),PDO::PARAM_STR);
                $stmt->bindValue(':lastname', $user->getLastName(),PDO::PARAM_STR);
            $stmt->bindValue(':firstname', $user->getFirstName(), PDO::PARAM_STR);
                $stmt->bindValue(':birthdate', $user->getBirthdate(),PDO::PARAM_STR);
                $stmt->bindValue(':isAdmin', $user->getIsAdmin(),PDO::PARAM_BOOL);
            
                $stmt->execute();

          
            echo "registered bro";
        
        } catch(PDOException $e){
            echo "Registering user failed: " . $e->getMessage();
        }   
        
    }

}