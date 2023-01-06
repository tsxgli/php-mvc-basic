<?php
require __DIR__ . '/../repositories/movierepository.php';

class MovieService {

    private $repository;
    function __construct()
    {
        $this->repository = new MovieRepository();
  
    }
    public function getAll() {
        return $this->repository->getAll();
    }
    public function filterMovies(string $filter){
        return $this->repository->filterMovies($filter);
    }
    public function getMovie($id) {
        return $this->repository->getMovie($id);
    }
}