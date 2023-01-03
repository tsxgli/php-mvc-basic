<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../views/login/index.php';


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

    function validateUser(string $email, string $password): ?User {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM Users WHERE Email = :email");
            $stmt->bindValue(':email', $email);
            $stmt->execute();
            $row = $stmt->fetch();
        
            if (password_verify($password, $row['password'])) {
                $user = new User();
                $user->set_id($row['_id'])
                     ->setFirstName($row['firstname'])
                     ->setLastName($row['lastname'])
                     ->setPostCode($row['postcode'])
                     ->setAddress($row['address'])
                     ->setBirthdate($row['birthdate'])
                     ->setEmail($row['email'])
                     ->setPassword($row['password'])
                     ->setIsAdmin($row['isAdmin']);
                return $user;
            } 
            return null;
            
        } catch (PDOException $e) {
            echo $e;
        }
    }
    
}