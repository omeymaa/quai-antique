<?php
require('./lib/config.php');

// recuperer l'identifiant de l'utilisateur
if (isset($_GET['id']) and !empty($_GET['id'])) {

    // id de l'utilisateur
    $idOfUser = $_GET['id'];

    // verifier si l'utilisateur existe
    $checkIfUserExists = $db->prepare('SELECT firstname, lastname, email, password, guest, allergens FROM user WHERE id =?');
    $checkIfUserExists->execute(array($idOfUser));

    if ($checkIfUserExists->rowCount() > 0) {

        // recuperer toutes les données de l'utilisateur
        $usersInfos = $checkIfUserExists->fetch();

        $user_firstname = $usersInfos['firstname'];
        $user_lastname = $usersInfos['lastname'];
        $user_email = $usersInfos['email'];
        $user_password = $usersInfos['password'];
        $user_guest = $usersInfos['guest'];
        $user_allergens = $usersInfos['allergens'];

        // recuperer toutes les questions publiées par l'utilisateur
        $getHisQuestions = $db->prepare('SELECT * FROM user FROM user WHERE id =?');
        $getHisQuestions->execute(array($idOfUser));
    } else {
        $error = 'L\'utilisateur n\'existe pas';
    }
} else {
    $error = 'L\'utilisateur n\'existe pas';
}
