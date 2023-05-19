<?php

$mainMenu = [
    //'index.php' => 'Accueil',
    'about-us.php' => 'Le restaurant',
    'menu.php' => 'La carte',
    'booking.php' => 'Réserver',
    'login.php' => 'Connexion',
    'logout.php' => 'Deconnexion',

];

try {
    $db = new PDO('mysql:host=localhost:8889;dbname=quai_antique;charset=utf8', 'root', 'root');
}catch(Exception $e) {
    die('Une erreur est survenue :'. $e->getMessage());
}
