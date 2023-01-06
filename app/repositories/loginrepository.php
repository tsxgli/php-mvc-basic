<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../models/user.php';
class LoginRepository extends Repository
{
    function getAll()
    {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM User");
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            $articles = $stmt->fetchAll();

            return $articles;

        } catch (PDOException $e) {
            echo $e;
        }
    }

    // function validateUser(string $email, string $password){
    //     try {
    //         $stmt = $this->connection->prepare("SELECT * FROM Users WHERE Email = :email");
    //         $stmt->bindValue(':email', $email);
    //         $stmt->execute();
    //         $row = $stmt->fetch();
        
    //         if (is_null($row)) {
    //             // No rows were returned, so return null
    //             return null;
    //         }
    //         if (password_verify($password, $row['password '])) {
    //             $user = new User();
    //             $user->set_id($row['_id']);
    //             $user->setFirstName($row['firstname']);
    //             $user->setLastName($row['lastname']);
    //             $user->setPostCode($row['postcode']);
    //             $user->setAddress($row['address']);
    //             $user->setBirthdate($row['birthdate']);
    //             $user->setEmail($row['email']);
    //             $user->setPassword($row['password']);
    //             $user->setIsAdmin($row['isAdmin']);
                     
    //             return $user;
    //         } 
    //     } catch (PDOException $e) {
    //         echo $e;
    //     }
    // }
    

    function validateUser(string $email, string $password){
        try {
            $stmt = $this->connection->prepare("SELECT * FROM User WHERE Email = :email");
            $stmt->bindValue(':email', $email);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            $row = $stmt->fetch();
            if (password_verify($password, $row['password'])) {
                return $row;
            }
            
        } catch (PDOException $e) {
            echo $e;
        }
    }
    
}