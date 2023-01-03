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
                require __DIR__ . '/../controllers/moviecontroller.php';
                $controller = new MovieController();
                $controller->index();
                break;

            case 'home/about':
                require __DIR__ . '/../controllers/homecontroller.php';
                $controller = new HomeController();
                $controller->about();
                break;
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