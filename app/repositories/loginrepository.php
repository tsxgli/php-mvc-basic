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

    function validateUser(string $email, string $password)
    {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM Users WHERE Email = :email");
            $stmt->bindValue(':email', $email);
            $stmt->execute();
            $row = $stmt->fetch();
        
            if (password_verify($password, $row['password'])) {
                return true;
            } 
                return false;
            
        } catch (PDOException $e) {
            echo $e;
        }
    }
}