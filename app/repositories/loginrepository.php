<?php
require __DIR__ . '/repository.php';
//require __DIR__ . '/../models/user.php';
class LoginRepository extends Repository
{
    function validateUser(string $email, string $password){
        try {
            $stmt = $this->connection->prepare("SELECT * FROM User WHERE Email = :email");
            $stmt->bindValue(':email', $email);
            $stmt->execute();
            //$stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            $row = $stmt->fetch();
            if (is_null($row['password'])) {
                return;
            }
            else if (password_verify($password, $row['password'])) {
                return $row;
            }
            
        } catch (PDOException $e) {
            echo $e;
        }
    }
    
}