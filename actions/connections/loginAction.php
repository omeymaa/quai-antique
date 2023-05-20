<?php
session_start();
require('./lib/config.php');

if (isset($_POST['validate'])) {

    // vérifier si l'utilisateur a bien vérifié tous les champs
    if (!empty($_POST['email']) and !empty($_POST['password'])) {

        // données de l'utilisateur
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        // verifier si l'utilisateur existe (et que le pseudo est correct)
        $checkIfUserExists = $db->prepare('SELECT * FROM user WHERE email = ?');
        $checkIfUserExists->execute(array($email));

        if ($checkIfUserExists->rowCount() > 0) {

            // recuperer les donnees de l'utilisateur
            $usersInfos = $checkIfUserExists->fetch();

            // verifier si le mot de passe est correct
            if (password_verify($password, $usersInfos['password'])) {

                // authentifier l'utilisateur sur le site et recuperer ses donnes dans des variables globales
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['email'] = $usersInfos['email'];
                $_SESSION['firstname'] = $usersInfos['firstname'];
                $_SESSION['lastname'] = $usersInfos['lastname'];

                // rediriger l'utilisateur vers la page d'accueil
                header('location:user-dashboard.php');
            } else {
                $error = 'Votre pseudo ou mot de passe est incorrect';
            }
        } else {
            $error = 'Votre pseudo ou mot de passe est incorrect';
        }
    } else {
        $error = 'Veuillez remplir tous les champs';
    }
}
