<?php
require('./lib/config.php');

// verifier si l'id de l'id est bien passé en parametre dans l'url
if (isset($_GET['id']) and !empty($_GET['id'])) {

    $idOfUser = $_GET['id'];

    // verifier si le user existe
    $checkIfUserExists = $db->prepare('SELECT * FROM user WHERE id = ?');
    $checkIfUserExists->execute(array($idOfUser));

    if ($checkIfUserExists->rowCount() > 0) {

        // recuperer les donnees de la question
        $usersInfos = $checkIfUserExists->fetch();
        if ($usersInfos['id'] == $_SESSION['id']) {

            $user_firstname = $usersInfos['firstname'];
            $user_lastname = $usersInfos['lastname'];
            $user_email = $usersInfos['email'];
            $user_password = $usersInfos['password'];
            $user_guest = $usersInfos['guest'];
            $user_allergens = $usersInfos['allergens'];
        } else {
            $error = 'Vous n\'avez pas accès à ce compte.';
        }
    } else {
        $error = 'Aucune question n\'a été trouvée';
    }
} else {
    $errorMsg = 'Aucune question n\'a été trouvée';
}
