<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../views/login/login.php';

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
    $stmt = $this->connection->prepare("SELECT * FROM Users WHERE Email = :email AND Password = :password");

    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password);

    $stmt->execute();

    $row = $stmt->fetch();
    $hashedPassword = $row['password'];

    if ($stmt->rowCount() > 0) {
        if (password_verify($password, $hashedPassword)) {
            return true;
        }
    }
    return false;
}

}