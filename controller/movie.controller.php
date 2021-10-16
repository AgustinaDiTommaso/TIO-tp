<?php
require_once 'model/movie.model.php';
//require_once 'app/MovieView.php';

class MovieController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new TaskModel();
        //$this->view = new MovieView();
    }

    function showMoviesByGenre() {

        // verifica datos obligatorios
        if (!isset($_GET['genre']) || empty($_GET['genre'])) {
            $this->view->renderError();
            return;
        }

        // obtiene el genero enviado por GET 
        $genre = $_GET['genre'];

        // obtengo las peliculas del modelo
        $movies = $this->model->getMoviesByGenre($genre);

        // actualizo la vista
        $this->view->renderMoviesByGenre($genre, $movies);
    }

    function showHome() {


        // actualizo la vista
        //$this->view->renderMovies($movies);
    }

}
