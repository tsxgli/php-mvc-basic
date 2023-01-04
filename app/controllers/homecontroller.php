<?php

include_once('baseRepository.php');

class lawyerRepository extends baseRepository
{
    public function addLawyer($lawyer)
    {
        try {
            require_once("../model/lawyer.php");
            $stmt = $this->connection->prepare("INSERT INTO `employee` (`firstname`, `email`, `type`)
            VALUES (:firstname, :email, :type);");
            $stmt->bindParam(':firstname', $lawyer->firstname);
            $stmt->bindParam(':email', $lawyer->email);
            $area_id = $this->switchLawArea($lawyer->area);
            $stmt->bindParam(':type', $area_id);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e;
        }

    }

    private function switchLawArea($area)
    {
        return match ($area) {
            "Criminal" => 1,
            "Public" => 2,
            "Civil" => 3,
            default => 0,
        };
    }

    public function getAllLawyers()
    {
        require_once("../model/lawyer.php");

        $stmt = $this->connection->prepare("select * from employee");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'lawyer');
        return $stmt->fetchAll();
    }

    public function getLawyerByName($name)
    {
        require_once("../model/lawyer.php");
        $stmt = $this->connection->prepare("SELECT * FROM `employee` WHERE firstname=:firstname");
        $stmt->bindParam(":firstname", $name);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'lawyer');
        return $stmt->fetch();
    }

    public function getLawArea()
    {
        require_once("../model/law_area.php");

        $stmt = $this->connection->prepare("select * from employee_type");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'law_area');
        return $stmt->fetchAll();
    }
}