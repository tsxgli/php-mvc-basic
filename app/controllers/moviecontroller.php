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
        if (isset($_POST['buyMovieBtn'])||isset($_POST['buyMovieBtnHome'])) {
            
            $movie = $this->movieservice->getMovie($_GET['id']);
            if (!isset($_SESSION['cartItems']) || !in_array($movie, $_SESSION['cartItems'])) {
                $_SESSION['cartItems'][] = $movie;
              }
          
        }
        require __DIR__ . '/../views/order/index.php';
    }
}