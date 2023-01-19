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

    public function buyMovie()
    {
        $order = new Order();
        if(isset($_POST['payBtn'])){
            $checkoutEmail =$_POST['checkoutEmail'];
           
            $order->setMovieID($_POST['movieId']);
            $order->setDateOrdered(date_create());
            $order->setUserID($_SESSION['loggedInUser']['_id']);

            var_dump($order);
            $this->orderService->insertOrder($order);

            $this->sendMail($checkoutEmail);
            require __DIR__ . '/../views/order/paymentSuccessful.php';
        }
    }

    public function sendMail($checkoutEmail){
        $to = $checkoutEmail;
    $subject = "Movie Purchase Wmovies";
    $message = "Your movie purchase was successful. You can watch it here https://www.youtube.com/watch?v=d9MyW72ELq0";
    $headers = "From: wmovies@email.com" . "\r\n" .
               "Reply-To: wmovies@email.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);
    echo "Email sent!";   
    }
}

?>