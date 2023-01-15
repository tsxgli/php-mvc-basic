<?php
require __DIR__ . '/../services/orderservice.php';
require __DIR__ . '/../models/order.php';
class OrderController
{
    private $orderService;

    function __construct()
    {
        $this->orderService = new OrderService();
    }

    public function paymentSuccessful()
    {
        require __DIR__ . '/../views/order/paymentSuccessful.php';
    }
    public function index()
    {
        require __DIR__ . '/../views/order/index.php';
    }
    // public function addToCart()
    // {
    //     if ($_POST['buyMovieBtn']) {
    //         $_SESSION['cart'][] = $movie;
    //     }
    //     require __DIR__ . '/../views/order/index.php';
    // }

    public function addToCart()
    {
        // Get the movie id from the form submission
        $movieId = htmlspecialchars($_POST['movieId']);

        // Load the movie model
      
        // Get the movie object from the database using the movie id
        $movie = $this->orderService->getById($movieId);
        // Start the session
        // Check if the cart session variable exists
        if (!isset($_SESSION['cart'])) {
            // If it doesn't exist, create it as an empty array
            $_SESSION['cart'] = array();
        }
        // Add the movie object to the cart session variable
        array_push($_SESSION['cart'], $movie);

        // Redirect the user back to the detail page
        header('Location: /movies/detail/' . $movieId);

     
    }
}

?>