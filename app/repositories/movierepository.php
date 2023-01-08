<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../models/movie.php';

class MovieRepository extends Repository
{

    function getAll()
    {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM Movie");
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Movie');
            $movies = $stmt->fetchAll();

            return $movies;

        } catch (PDOException $e) {
            echo $e;
        }
    }
    function filterMovies($filter)
    {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM Movie where genre = :filter");
            $stmt->bindValue(':filter', $filter);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Movie');
            $movies = $stmt->fetchAll();

            return $movies;

        } catch (PDOException $e) {
            echo $e;
        }
    }
    function getMovie($id)
    {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM Movie where _id = :id");
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Movie');
            $movie = $stmt->fetchAll();

            return $movie;

        } catch (PDOException $e) {
            echo $e;
        }
    }

    public function deleteMovie($id)
    {
        try{
            $stmt = $this->connection->prepare("Delete from Movie where _id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }        
         catch (PDOException $e) {
            echo $e;
        }
      
    }
}