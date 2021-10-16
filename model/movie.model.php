<?php

class MovieModel{
    private $db;
    
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_movies;charset=utf8', 'root', '');
    }

    public function getMoviesByGenre($genre){
        $query = $this->db ->prepare('SELECT * FROM movies WHERE genre = ?');
        $query->execute([$genre]);
        $movies = $query->fetchAll(PDO::FETCH_OBJ);

        return $movies;
    }

}