<?php
require __DIR__ . '/../services/movieservice.php';

class MovieController
{
    private $movieservice;

    function __construct()
    {
        $this->movieservice = new MovieService();
    }
    public function index()
    {
        $model = $this->movieservice->getAll();
        require __DIR__ . '/../views/home/index.php';
    }
    public function filterMovies(string $filter)
    {
        $model = $this->movieservice->filterMovies($filter);
        $_SESSION['genre'] = $filter;
        require __DIR__ . '/../views/home/genre.php';
    }
    public function getMovie()
    {
        $id = $_GET['id'];
        $model = $this->movieservice->getMovie($id);
        require __DIR__ . '/../views/home/detail.php';
    }
    public function addMovieToCart()
    { 
        if (!isset($_SESSION['cartItems'])) {
        $_SESSION ['cartItems'] = array ();
    }
        if (isset($_POST['buyMovieBtn'])||isset($_POST['buyMovieBtnHome'])) {
            $movie = $this->movieservice->getMovie($_GET['id']);
            $_SESSION['cartItems'][] = $movie;
            array_push($_SESSION['cartItems'], $movie);
            //print_r($myArray);
        }
       
        require __DIR__ . '/../views/order/index.php';
    }
    // public function addMovieToCart()
    // { 
    //     // if (!isset($_SESSION['cartItems'])) {
    //     //     $_SESSION ['cartItems'] = array ();
    //     // }
    //     // if (isset($_POST['buyMovieBtn'])||isset($_POST['buyMovieBtnHome'])) {
    //     //     $movie = $this->movieservice->getMovie($_GET['id']);
    //     //     $_SESSION['cartItems'] = $movie;  
    //     // }

    //     if (isset($_POST["buyMovieBtn"])) {
    //         // Check the item is not already in the cart
    //         if (!in_array($_POST ['buyMovieBtn'],$_SESSION['cartItems'])) {
    //             // Add new item to cart
    //             $_SESSION ['cartItems'][] = $_POST['buyMovieBtn'];
    //         }
    //     }
    //     require __DIR__ . '/../views/order/index.php';
    // }

}