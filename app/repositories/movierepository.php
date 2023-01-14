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
        try {
            $stmt = $this->connection->prepare("Delete from Movie where _id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e;
        }
    }
    // public function updateMovie($movie)
    // {
    //     try {
    //         $stmt = $this->connection->prepare("UPDATE Movie SET title = :title, description = :description, 
    //                                 director = :director, dateProduced = :dateProduced, 
    //                                 genre = :genre, rating = :rating, price = :price WHERE _id = :id");
    //         $stmt->bindParam(':id', $movie['_id']);
    //         $stmt->bindParam(':title', $movie['title']);
    //         $stmt->bindParam(':description', $movie['description']);
    //         $stmt->bindParam(':director', $movie['director']);
    //         $stmt->bindParam(':dateProduced', $movie['dateProduced']);
    //         $stmt->bindParam(':genre', $movie['genre']);
    //         $stmt->bindParam(':rating', $movie['rating']);
    //         $stmt->bindParam(':price', $movie['price']);
    //         $stmt->bindParam(':image', $movie['image']);
    //         $stmt->execute();

    //         echo "movie updated";
    //     } catch (PDOException $e) {
    //         echo $e;
    //     }
    // }

    public function updateMovie($id,$title,$description,$genre,$rating,$dateProduced,$price,$director,$image){

        try {
            $stmt = $this->connection->prepare("UPDATE Movie SET title = :title, description = :description, 
                                    director = :director, dateProduced = :dateProduced, 
                                    genre = :genre, image=:image,rating = :rating, price = :price WHERE _id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':description',$description);
            $stmt->bindParam(':director', $director);
            $stmt->bindParam(':dateProduced', $dateProduced);
            $stmt->bindParam(':genre', $genre);
            $stmt->bindParam(':rating', $rating);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':image',$image);
            $stmt->execute();

           
        } catch (PDOException $e) {
            echo "Something went wrong updating the movies: ".$e;
        }
    }
}