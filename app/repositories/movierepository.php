<?php
require_once __DIR__ . '/repository.php';
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

    function deleteMovie($id)
    {
        try {
            $stmt = $this->connection->prepare("Delete from Movie where _id=:id");
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function updateMovie($id, $title, $description, $genre, $rating, $dateProduced, $price, $director, $image)
    {

        try {
            $stmt = $this->connection->prepare("UPDATE Movie SET title = :title, description = :description, 
                                    director = :director, dateProduced = :dateProduced, 
                                    genre = :genre, image=:image,rating = :rating, price = :price WHERE _id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':director', $director);
            $stmt->bindParam(':dateProduced', $dateProduced);
            $stmt->bindParam(':genre', $genre);
            $stmt->bindParam(':rating', $rating);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':image', $image);
            $stmt->execute();


        } catch (PDOException $e) {
            echo "Something went wrong updating the movies: " . $e;
        }
    }

    function addMovie($data)
    {
        try {
            $stmt = $this->connection->prepare('INSERT INTO Movie (title, director,description, genre, dateProduced, price,image, stock,rating) 
                                                    VALUES ( :title, :director,:description, :genre, :dateProduced, :price,:image, :stock,:rating);');

            $stmt->bindParam(':title', $data['title']);
            $stmt->bindParam(':director', $data['director']);
            $stmt->bindParam(':description', $data['description']);
            $stmt->bindParam(':genre', $data['genre']);
            $stmt->bindParam(':dateProduced', $data['dateProduced']);
            $stmt->bindParam(':price', $data['price']);
            $stmt->bindParam(':stock', $data['stock']);
            $stmt->bindParam(':rating', $data['rating']);
            $stmt->bindParam(':image', $data['image']);
            $stmt->execute();

        } catch (PDOException $e) {
            echo "Adding movie failed: " . $e->getMessage();
        }
    }

    function updateStock($id)
    {
        try {
            $stmt = $this->connection->prepare("UPDATE Movie SET stock = stock - 1  WHERE _id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();   
        } catch (PDOException $e) {
            echo "Something went wrong updating the stock: " . $e;
        }
    }
}