<?php
require __DIR__ . '/../services/orderservice.php';
require __DIR__ . '/../models/order.php';
use PHPMailer\PHPMailer\PHPMailer;
require __DIR__ . '/../vendor/autoload.php';

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
        $current_datetime = date('Y-m-d H:i:s');
        if (isset($_POST['payBtn'])) {
            $checkoutEmail = $_POST['checkoutEmail'];
            $order->setMovieID($_POST['movieId']);
            $order->setDateOrdered($current_datetime);
            $order->setUserID($_SESSION['loggedInUser']['_id']);

            $this->orderService->insertOrder($order);

            $this->sendEmail($checkoutEmail);
            require __DIR__ . '/../views/order/paymentSuccessful.php';
        }
    }

    public function getAllOrders()
    {
        $model = $this->orderService->getAll();
        require __DIR__ . '/../views/admin/orderhistory.php';
    }

    public function sendEmail($emailAddress)
    {
        require __DIR__ . '/../config/phpmailerconfig.php';
        // Instantiate a new PHPMailer object
        $mail = new PHPMailer;

        // Set the mailer to use SMTP
        $mail->isSMTP();

        // Specify the SMTP server details
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $email;
        $mail->Password = $password;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Set the sender and recipient email addresses
        $mail->setFrom($email, 'WMovies');
        $mail->addAddress($emailAddress, '');

        // Set the subject and message body
        $mail->Subject = 'Movie Purchase';
        $mail->Body = 'Your movie purchase was successful. Here is your link to the movie: https://www.youtube.com/watch?v=d9MyW72ELq0&t=5s ';

        // Check if the email was sent successfully
        if (!$mail->send()) {
            echo 'Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Email sent successfully!';
        }

    }
}

?>