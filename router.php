<?php

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$action = $_GET["action"];

$params = explode('/',$action);

if (!empty($_GET['action'])){
    $action = $_GET['action'];
}
else {
    $action = 'home';
}

switch ($params[0]) {
    case 'home':
        $this->controller->showHome();
        break;
    case 'show':
        $this->controller->showMoviesByCategorias($params[1]);
        break;
    default:
        echo '404 - Página no encontrada';
        break;
        
}