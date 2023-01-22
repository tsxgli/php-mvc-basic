<?php
require __DIR__ . '/../services/movieservice.php';

class MovieAPIController
{
    private $movieservice;

    // initialize services
    function __construct()
    {
        $this->movieservice = new MovieService();
    }
    // router maps this to /api/article automatically
    public function index()
    {
        header("Access-Control-Allow-Origin: *"); 
        header("Access-Control-Allow-Headers: *");
        header("Access-Control-Allow-Methods: *");  
        // Respond to a GET request to /api/article
        if ($_SERVER["REQUEST_METHOD"] == "GET") {

            // your code here
            // return all articles in the database as JSON

            $movies = $this->movieservice->getAll();
            header("Content-Type:application/json");
            header("Access-Control-Allow-Origin: *"); 
            echo json_encode($movies);
        }

        // Respond to a POST request to /api/article
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // your code here
            // read JSON from the request, convert it to an article object
            // and have the service insert the article into the database

            $body = file_get_contents('php://input');
            $object= json_decode($body);
            $id = $object->movieId;

            $this->movieservice->deleteMovie($id);
            $movies = $this->movieservice->getAll();
            echo json_encode($movies);

        }
    }
}
?>