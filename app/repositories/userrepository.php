<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../models/user.php';


class UserRepository extends Repository
{
    function getAll()
    {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM User");
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            $users = $stmt->fetchAll();

            return $users;

        } catch (PDOException $e) {
            echo $e;
        }
    }
    function deleteUser($id)
    {
        try {
            $stmt = $this->connection->prepare("Delete from User where _id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e;
        }
    }
    public function updateUser($data)
    {

        try {
            $stmt = $this->connection->prepare("UPDATE User SET firstname = :firstname, lastname = :lastname, 
                                    postcode = :postcode, address = :address, 
                                    birthdate = :birthdate, email=:email,isAdmin = :isAdmin WHERE _id = :id");
            $stmt->bindParam(':id', $data['id']);
            $stmt->bindParam(':firstname', $data['firstname']);
            $stmt->bindParam(':lastname', $data['lastname']);
            $stmt->bindParam(':postcode', $data['postcode']);
            $stmt->bindParam(':address', $data['address']);
            $stmt->bindParam(':birthdate', $data['birthdate']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':isAdmin', $data['isAdmin']);
            $stmt->execute();


        } catch (PDOException $e) {
            echo "Something went wrong updating the user: " . $e;
        }
    }
    function getUser($id)
    {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM User WHERE _id = :id");
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            $row = $stmt->fetchAll();
            return $row;

        } catch (PDOException $e) {
            echo $e;
        }
    }
    function addUser($data)
    {
        try {
            $stmt = $this->connection->prepare('INSERT INTO User (firstname, lastname,email, password, isAdmin, address,postcode, birthdate) 
                                                    VALUES ( :firstname,:lastname, :email, :password, :isAdmin, :address, :postcode, :birthdate);');

            $stmt->bindParam(':firstname', $data['firstname']);
            $stmt->bindParam(':lastname', $data['lastname']);
            $stmt->bindParam(':postcode', $data['postcode']);
            $stmt->bindParam(':address', $data['address']);
            $stmt->bindParam(':password', $data['password']);
            $stmt->bindParam(':birthdate', $data['birthdate']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':isAdmin', $data['isAdmin']);
            $stmt->execute();

        } catch (PDOException $e) {
            echo "Adding user failed: " . $e->getMessage();
        }

    }

}