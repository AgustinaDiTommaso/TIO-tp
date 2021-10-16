<?php
/**
 * Imprime la lista de peliculas por un género determinado.
 * 
 * Este archivo obtiene el parametro GET 'genre' 
 * que determina el género solicitado.
 */


// verifica datos obligatorios
if (!isset($_GET['genre']) || empty($_GET['genre'])) {
    echo "<h2>Error! Género no especificado.</h2>";
    die();
}

// obtiene el genero enviado por GET 
$genre = $_GET['genre'];
