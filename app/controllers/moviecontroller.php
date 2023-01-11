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
        $movieId = $_GET['id'];
        $movie = $this->movieservice->getMovie($movieId);
        if (!isset($_SESSION['cartItems'])) {
            $_SESSION['cartItems'] = array();
        }
        if (isset($_POST['buyMovieBtn']) || isset($_POST['buyMovieBtnHome'])) {
            if (isset($_SESSION['cartItems'][$movieId])) {

                $_SESSION['cartItems'][$movieId]['quantity']++;
            } else {
                $_SESSION['cartItems'][$movieId] = ['id' => $movieId, 'quantity' => 1];
            }
            array_push($_SESSION['cartItems'],$movie );
           // print_r($_SESSION['cartItems']);
        }
            require __DIR__ . '/../views/order/index.php';
    }
    public function manageMovies()
    {
        $model = $this->movieservice->getAll();
        require __DIR__ . '/../views/admin/moviesmanagement.php';
    }
    public function deleteMovie(){
        $id = $_GET['id'];
        $this->movieservice->deleteMovie($id);
    }
    public function editMovie(){
        $id = $_GET['id'];
        $model = $this->movieservice->getMovie($id);
        require __DIR__ . '/../views/admin/editmovie.php'; 
    }

    public function updateMovie(){
        require __DIR__ . '/../views/admin/editmovie.php';
        require __DIR__ . '/../models/movie.php';
        $movie = new Movie();
        $movie->title = $_POST['editTitle'];
        $movie->description = $_POST['editDescription'];
        $movie->director = $_POST['editDirector'];
        $movie->dateProduced = $_POST['editDateProduced'];
        $movie->genre = $_POST['editGenre'];
        $movie->rating = $_POST['editRating'];
        $movie->$price = $_POST['editPrice'];
    }

}





// public function addMovieToCart()
    // { 
    //     if (!isset($_SESSION['cartItems'])) {
    //     $_SESSION ['cartItems'] = array ();
    // }
    //     if (isset($_POST['buyMovieBtn'])||isset($_POST['buyMovieBtnHome'])) {
    //         $movie = $this->movieservice->getMovie($_GET['id']);
    //         $_SESSION['cartItems'][] = $movie;
    //         array_push($_SESSION['cartItems'], $movie);
    //         //print_r($myArray);
    //     }

    //     require __DIR__ . '/../views/order/index.php';
    // }