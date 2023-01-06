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
    public function filterMovies(string $filter){
       $model =  $this->movieservice->filterMovies($filter);
        $_SESSION['genre'] = $filter;
        require __DIR__ . '/../views/home/genre.php';   
    }
    public function getMovie(){
        $id = 0;
        $id = $_GET['id'];
        $model =  $this->movieservice->getMovie($id);
        require __DIR__ . '/../views/home/detail.php';   
    }
    public function addMovieToCart(){
        require __DIR__ . '/../views/order/index.php'; 
        if(isset($_POST['buyMovieBtn'])||isset($_POST['buyMovieBtnHome'])){
            $movie =  $this->movieservice->getMovie($_GET['id']);
            array_push($_SESSION['cartItems'], $movie);
        }
        var_dump($_SESSION['cartItems']);
    }
}