<?php
require('./lib/config.php');

// validation du formulaire
if (isset($_POST['validate'])) {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);


    // Vérifier si les champs obligatoires sont remplis
    if (
        !empty($firstname) &&
        !empty($lastname) &&
        !empty($email)

    ) {
        // Récupérer les valeurs des champs optionnels
        $guest = isset($_POST['guest']) && is_numeric($_POST['guest']) ? intval($_POST['guest']) : null;
        $allergens = isset($_POST['allergens']) ? htmlspecialchars($_POST['allergens']) : null;

        //les donnees a faire passer dans la requete
        $new_firstname = htmlspecialchars($_POST['firstname']);
        $new_lastname = htmlspecialchars($_POST['lastname']);
        $new_email = htmlspecialchars($_POST['email']);
        $new_guest = $guest; // Utiliser la variable $guest ici
        $new_allergens = $allergens;

        // modifier les informations de la question qui possede l'id rentré en parametre dans l'url
        $editUser = $db->prepare('UPDATE user SET firstname = ?, lastname = ?, email = ?, guest = ?, allergens = ? WHERE id = ?');
        $editUser->execute(array($new_firstname, $new_lastname, $new_email, $new_guest, $new_allergens, $idOfUser));

        // rediriger vers la page d'affichage des questions de l'utilisateur
        header('location: my-profile.php');
    } else {
        $error = 'Veuillez remplir tous les champs';
    }
}

if (isset($_POST['modify'])) {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (!empty($password)) {
        $new_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $editUser = $db->prepare('UPDATE user SET password = ? WHERE id = ?');
        $editUser->execute(array($new_password, $idOfUser));

        // Rediriger vers la page d'affichage des questions de l'utilisateur
        header('location: my-profile.php');
    } else {
        $error = 'Veuillez remplir tous les champs';
    }
}
