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
    public function showTop250Movies(){
        require __DIR__ . '/../views/api/topmovies.php';
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
        // $id = $_GET['id'];
        // $this->movieservice->deleteMovie($id);
        // echo "<script>location.href='/admin/managemovies'</script>"; 
        if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            $id = $_GET['id'];
            $this->movieservice->deleteMovie($id);
            http_response_code(204);
        } else {
            http_response_code(405);
        }
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
        foreach ($_SESSION['cartItems'] as &$item) {
            if ($item['movie']->_id == $movie->_id) {
                $item['quantity']++;
                $movieExists = true;
                break;
            }
        }
        if (!$movieExists) {
            $_SESSION['cartItems'][] = array(
                'quantity' => 1,
                'movie' => $movie
            );
        } 
    }

    public function updateMovie()
    {
        
        if (isset($_POST['updateMovieBtn'])) {

            $newImageName= $this->movePicture($_FILES['imageSelector']);

            $id = htmlspecialchars($_POST['editId']);
            $title = htmlspecialchars($_POST['editTitle']);
            $description = htmlspecialchars($_POST['editDescription']);
            $director = htmlspecialchars($_POST['editDirector']);
            $dateProduced = htmlspecialchars(htmlspecialchars($_POST['editDateProduced']));
            $rating = htmlspecialchars($_POST['editRating']);
            $price = htmlspecialchars($_POST['editPrice']);
            $genre = htmlspecialchars($_POST['editGenre']);
            $image = $newImageName;

            $this->movieservice->updateMovie($id, $title, $description, $genre, $rating, $dateProduced, $price, $director, $image);
            echo " <script type='text/javascript'>alert('Successfully updated movie.');</script>";
        } else {
            echo " <script type='text/javascript'>alert('Could not update movie.');</script>";
        }
        echo "<script>location.href='/admin/managemovies'</script>";
    }

    public function addMovieIndex()
    {
        require __DIR__ . '/../views/admin/addmovie.php';
    }
    public function addMovie()
    {
        // A list of permitted file extensions
        if (isset($_POST['addMovieBtn'])) {
            $newImageName= $this->movePicture($_FILES['addImage']);
            $data = array(
                'title' => htmlspecialchars($_POST['addTitle']),
                'description' => (htmlspecialchars($_POST['addDescription'])),
                'dateProduced' => htmlspecialchars($_POST['addDateProduced']),
                'director' => htmlspecialchars($_POST['addDirector']),
                'genre' => htmlspecialchars($_POST['addGenre']),
                'rating' => htmlspecialchars($_POST['addRating']),
                'price' => htmlspecialchars($_POST['addPrice']),
                'image' => ($newImageName),
                'stock' => (100),
            );
            $this->movieservice->addMovie($data);
            echo "<script>location.href='/admin/managemovies'</script>";
            //exit;
        }

    }
    public function movePicture($imageName)
    {
            $fileName = $imageName['name'];
            $tempName = $imageName['tmp_name'];
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $newImageName = uniqid() . '.' . $ext;

            if (isset($fileName)) {
                if (!empty($fileName)) {
                    $location = "images/";
                    if (move_uploaded_file($tempName, $location . $newImageName)) {
                        echo 'File Uploaded';
                    }
                }
            }
        
        return $newImageName;
    }



}