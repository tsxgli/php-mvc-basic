<?php
require __DIR__ . '/repository.php';

class OrderRepository extends Repository
{
    function insertOrder($order)
    {
        try {
            $query = "INSERT INTO Orders (userId, dateOrdered, movieId) VALUES (:userId, :dateOrdered, :movieId)";

            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':movieId', $order->getMovieID());
            $stmt->bindValue(':dateOrdered', $order->getDateOrdered()->format('Y-m-d H:i:s'));
            $stmt->bindValue(':userId', $order->getUserID());
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e;
        }

    }
}