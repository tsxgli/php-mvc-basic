<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../models/login.php';

class LoginRepository extends Repository {

    function getAll() {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM User");
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            $articles = $stmt->fetchAll();

            return $articles;

        } catch (PDOException $e)
        {
            echo $e;
        }
    }
     function validateUser(string $email, string $password)
    {
        $stmt=$this->connection->prepare("Select * from Users where Email = :email and Password = :password");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        $stmt->execute();
        foreach ($stmt as $row) {
            if (($row['email'] == $email) && ($row['Password'] == $password)) {
                return true;
            }
        }
        return false;
    }
}