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


    public function manageMovies()
    {
        $model = $this->movieservice->getAll();
        require __DIR__ . '/../views/admin/moviesmanagement.php';
    }
    public function deleteMovie()
    {
        $id = $_GET['id'];
        $this->movieservice->deleteMovie($id);
    }
    public function editMovie()
    {
        $id = $_GET['id'];
        $model = $this->movieservice->getMovie($id);
        require __DIR__ . '/../views/admin/editmovie.php';
    }

    public function updateMovie()
    {
       

        $movie = new Movie();   
        $movie->setTitle($_POST['editTitle']) ;
        $movie->setDescription($_POST['editDescription']);
        $movie->setDirector($_POST['editDirector']);
        $movie->setDateProduced($_POST['editDateProduced']);
        $movie->setGenre( $_POST['editGenre']);
        $movie->setRating($_POST['editRating']);
        $movie->setPrice($_POST['editPrice']);
        var_dump($movie);
        rename($_FILES['imageSelector'], "/images/".$movie->getTitle().".jpg");
        $this->movieservice->updateMovie($movie);
        echo'<div class="alert alert-success" role="alert">Successfully updated movie. </div>';
   
    }

    public function showCartItems()
    {
        require __DIR__ . '/../views/order/index.php';
    }


    public function addMovieToCart()
    {
        $movieId = $_GET['id'];

        $movie = $this->movieservice->getMovie($movieId);
        if (!isset($_SESSION['cartItems'])) {
            $_SESSION['cartItems'] = array();
        }
        if (isset($_POST['buyMovieBtn']) || isset($_POST['buyMovieBtnHome'])) {
            $movieExists = false;
            if (isset($_SESSION['cartItems'])) {
                foreach ($_SESSION['cartItems'] as $cartItem) {
                    if ($cartItem['Movie']->get_id() == $movieId) {
                        $cartItem['quantity']++;
                        $movieExists = true;
                        break;
                    }
                }
            }
            if (!$movieExists) {
                array_push($_SESSION['cartItems'], [$movie, 'quantity' => 1]);
            }
        }
        echo " <script type='text/javascript'>alert('Item has been added to cart.');</script>";
    }
    
}