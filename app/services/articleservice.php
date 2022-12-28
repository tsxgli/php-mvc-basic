<?php
require __DIR__ . '/../repositories/articlerepository.php';

class ArticleService {

    private $repository;
    function __construct()
    {
        $this->repository = new ArticleRepository();
  
    }
    public function getAll() {
       
        return $this->repository->getAll();
    }
}