<?php
session_start();
require('./lib/config.php');

// Validation du formulaire
if (isset($_POST['validate'])) {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Vérifier si les champs obligatoires sont remplis
    if (
        !empty($firstname) &&
        !empty($lastname) &&
        !empty($email) &&
        !empty($password)
    ) {
        // Récupérer les valeurs des champs optionnels
        $guest = isset($_POST['guest']) ? intval($_POST['guest']) : null;
        $allergens = isset($_POST['allergens']) ? htmlspecialchars($_POST['allergens']) : null;

        // Vérifier si l'utilisateur existe déjà sur le site
        $checkIfUserExists = $db->prepare('SELECT email FROM user WHERE email = ?');
        $checkIfUserExists->execute(array($email));

        if ($checkIfUserExists->rowCount() == 0) {
            // Insérer l'utilisateur dans la base de données
            $insertUserOnWebsite = $db->prepare('INSERT INTO user (firstname, lastname, email, password, guest, allergens) VALUES (?, ?, ?, ?, ?, ?)');
            $insertUserOnWebsite->execute(array($firstname, $lastname, $email, $password, $guest, $allergens));

            // Récupérer les informations de l'utilisateur
            $getInfosOfThisUserReq = $db->prepare('SELECT id, firstname, lastname, email, password, guest, allergens FROM user WHERE firstname = ? AND lastname = ? AND email = ? AND password = ? AND guest = ? AND allergens = ?');
            $getInfosOfThisUserReq->execute(array($firstname, $lastname, $email, $password, $guest, $allergens));

            $userInfos = $getInfosOfThisUserReq->fetch();

            // Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globales
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $userInfos['id'];
            $_SESSION['firstname'] = $userInfos['firstname'];
            $_SESSION['lastname'] = $userInfos['lastname'];
            $_SESSION['email'] = $userInfos['email'];

            // Rediriger l'utilisateur vers la page d'accueil
            header("Location: login.php");
        } else {
            $error = 'L\'utilisateur existe déjà sur le site';
        }
    } else {
        $error = 'Veuillez remplir tous les champs';
    }
}
