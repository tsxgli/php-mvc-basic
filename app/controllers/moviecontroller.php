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
}