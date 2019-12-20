<?php
require_once('controller/controller.php');

if (isset ($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$title = 'Accueil';
$content = 'Contenu de la page du Flicage';

switch ($action) {
    case 'movies':
        showMovies();
        break;
    case 'concerts':
        showConcerts();
        break;
    default:
        require_once'view/home.php';
        break;
}
?>
