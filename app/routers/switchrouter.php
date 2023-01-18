<?php
class SwitchRouter
{
    public function route($uri)
    {

        $uri = $this->stripParameters($uri);

        switch ($uri) {
            case '':
            case 'home':
            case 'home/index':
                if (!empty($_SESSION['loggedInUser'])) {
                    require __DIR__ . '/../controllers/moviecontroller.php';
                    $controller = new MovieController();
                    $controller->index();
                    break;
                } else {
                    require __DIR__ . '/../controllers/logincontroller.php';
                    $controller = new LoginController();
                    $controller->validateUser();
                    break;
                }
            case 'movies':
                require __DIR__ . '/../controllers/moviecontroller.php';
                $controller = new MovieController();
                $controller->index();
                break;
            case 'login':
                require __DIR__ . '/../controllers/logincontroller.php';
                $controller = new LoginController();
                $controller->validateUser();
                break;
            case 'register':
                require __DIR__ . '/../controllers/registercontroller.php';
                $controller = new RegisterController();
                $controller->registerUser();
                break;
            case 'genre/drama':
                require __DIR__ . '/../controllers/moviecontroller.php';
                $controller = new MovieController();
                $controller->filterMovies("drama");
                break;
            case 'genre/thriller':
                require __DIR__ . '/../controllers/moviecontroller.php';
                $controller = new MovieController();
                $controller->filterMovies("thriller");
                break;
            case 'genre/comedy':
                require __DIR__ . '/../controllers/moviecontroller.php';
                $controller = new MovieController();
                $controller->filterMovies("comedy");
                break;
            case 'genre/action':
                require __DIR__ . '/../controllers/moviecontroller.php';
                $controller = new MovieController();
                $controller->filterMovies("action");
                break;
            case 'detail':
                if (isset($_GET['id'])) {
                    require __DIR__ . '/../controllers/moviecontroller.php';
                    $controller = new MovieController();
                    $controller->getMovie();
                }
                break;
            case 'orders':
                require __DIR__ . '/../controllers/ordercontroller.php';
                $controller = new OrderController();
                $controller->index();
                break;
            case 'paymentSuccessful':
                require __DIR__ . '/../controllers/ordercontroller.php';
                $controller = new OrderController();
                $controller->paymentSuccessful();
                break;
            case 'cart':
                require __DIR__ . '/../controllers/moviecontroller.php';
                $controller = new MovieController();
                $controller->addMovieToCart();
                break;
            case 'cartItems':
                require __DIR__ . '/../controllers/moviecontroller.php';
                $controller = new MovieController();
                $controller->showCartItems();
                break;
            case 'logout':
                require __DIR__ . '/../controllers/logincontroller.php';
                $controller = new LoginController();
                $controller->logout();
                break;
            case 'admin/index':
                require __DIR__ . '/../controllers/usercontroller.php';
                $controller = new UserController();
                $controller->adminIndex();
                break;
            case 'admin/orderhistory':
                require __DIR__ . '/../controllers/usercontroller.php';
                $controller = new UserController();
                $controller->adminIndex();
                break;
            case 'admin/manageusers':
                require __DIR__ . '/../controllers/usercontroller.php';
                $controller = new UserController();
                $controller->manageUsers();
                break;
            case 'admin/managemovies':
                require __DIR__ . '/../controllers/moviecontroller.php';
                $controller = new MovieController();
                $controller->manageMovies();
                break;
            case 'admin/deleteMovie':
                require __DIR__ . '/../controllers/moviecontroller.php';
                $controller = new MovieController();
                $controller->deleteMovie();
                break;
            case 'admin/editMovie':
                require __DIR__ . '/../controllers/moviecontroller.php';
                $controller = new MovieController();
                $controller->editMovie();
                break;
            case 'admin/updatemovie':
                require __DIR__ . '/../controllers/moviecontroller.php';
                $controller = new MovieController();
                $controller->updateMovie();
                break;
            case 'admin/editUser':
                require __DIR__ . '/../controllers/usercontroller.php';
                $controller = new UserController();
                $controller->editUser();
                break;
            case 'admin/deleteUser':
                require __DIR__ . '/../controllers/usercontroller.php';
                $controller = new UserController();
                $controller->deleteUser();
                break;
            case 'admin/updateUser':
                require __DIR__ . '/../controllers/usercontroller.php';
                $controller = new UserController();
                $controller->updateUser();
                break;
            case 'admin/addUser':
                require __DIR__ . '/../controllers/usercontroller.php';
                $controller = new UserController();
                $controller->addUser();
                break;
            case 'admin/addNewUser':
                require __DIR__ . '/../controllers/usercontroller.php';
                $controller = new UserController();
                $controller->addnewUser();
                break;
            case 'admin/addMovie':
                require __DIR__ . '/../controllers/moviecontroller.php';
                $controller = new MovieController();
                $controller->addMovieIndex();
                break;
            case 'admin/addNewMovie':
                require __DIR__ . '/../controllers/moviecontroller.php';
                $controller = new MovieController();
                $controller->addMovie();
                break;
         
            case 'topmovies':
                require __DIR__ . '/../controllers/moviecontroller.php';
                $controller = new MovieController();
                $controller->showTop250Movies();
                break;
                case 'api/movies':
                    require __DIR__ . '/../api/movieapicontroller.php';
                    $controller = new MovieAPIController();
                    $controller->index();
                    break;
            default:
                http_response_code(404);
                break;
        }
    }

    private function stripParameters($uri)
    {
        if (str_contains($uri, '?')) {
            $uri = substr($uri, 0, strpos($uri, '?'));
        }
        return $uri;
    }
}