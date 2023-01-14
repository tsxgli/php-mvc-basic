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
 
    public function showCartItems()
    {
        require __DIR__ . '/../views/order/index.php';
    }


    // public function addMovieToCart()
    // {
    //     $movieId = $_GET['id'];
    //     $movie = $this->movieservice->getMovie($movieId);
    //     if (!isset($_SESSION['cartItems'])) {
    //         $_SESSION['cartItems'] = array();
    //     }
    //     if (isset($_POST['buyMovieBtn']) || isset($_POST['buyMovieBtnHome'])) {
    //         $movieExists = false;
    //         if (isset($_SESSION['cartItems'])) {
    //             foreach ($_SESSION['cartItems'] as $cartItem) {
    //                 if ($cartItem['_id'] == $movieId) {
    //                     $cartItem['quantity']++;
    //                     $movieExists = true;
    //                     break;
    //                 }
    //             }
    //         }
    //         if (!$movieExists) {
    //             array_push($_SESSION['cartItems'], [$movie, 'quantity' => 1]);
    //         }
    //     }
    //     echo " <script type='text/javascript'>alert('Item has been added to cart.');</script>";
    // }
    public function addMovieToCart()
    {
        $movieId = $_GET['id'];
        $movie = $this->movieservice->getMovie($movieId);
        if (!isset($_SESSION['cartItems'])) {
            $_SESSION['cartItems'] = array();
        }
        $movieExists = false;
        foreach($_SESSION['cartItems'] as &$item) {
            if($item['movie']->_id == $movie->_id) {
                $item['quantity']++;
                $movieExists = true;
                break;
            }
        }
        if(!$movieExists) {
            $_SESSION['cartItems'][] = array(
                'quantity' => 1,
                'movie' => $movie
            );
        }
    }

    public function updateMovie(){
        if (isset($_POST['updateMovieBtn'])){
            $id = htmlspecialchars($_POST['editId']);
            $title = htmlspecialchars($_POST['editTitle']);
            $description=htmlspecialchars($_POST['editDescription']);
            $director=htmlspecialchars($_POST['editDirector']);
            $dateProduced = htmlspecialchars(htmlspecialchars($_POST['editDateProduced']));
            $rating=htmlspecialchars($_POST['editRating']);
            $price=htmlspecialchars($_POST['editPrice']);
            $genre = htmlspecialchars($_POST['editGenre']);
            if(isset($_FILES['imageSelector'])){
                $image = $_FILES['imageSelector'];
            }
            $image = $_POST['editImage'];
            $this->movieservice->updateMovie($id,$title, $description, $genre, $rating, $dateProduced, $price, $director, $image);
            echo'<div class="alert alert-success" role="alert">Successfully updated movie. </div>';

        }else{
            echo'<div class="alert alert-danger" role="alert">Could not update movie. </div>';
        }
        require __DIR__ . '/../views/admin/managemovies.php';
    }
    
    

    

}