<?php
require('./templates/header.php');
require('./templates/navbar.php');
require('./lib/session-start.php');
require('./actions/users/myProfileAction.php');
?>

<section class="container py-5">
    <div class="row">
        <div class="col-3 col-lg-3">
            <div class="flex-shrink-0 p-3">

                <ul class="list-unstyled ps-0">

                    <li><a href="user-dashboard.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded mb-1">Mes réservations</a></li>
                    <li><a href="my-profile.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded fw-bold purple mb-1">Mon profil</a></li>

                    <li class="border-top my-3"></li>
                    <li class="mb-1"><a href="logout.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Deconnexion</a></li>
                </ul>
            </div>
        </div>

        <div class="col-9 col-lg-9">
            <h1 class="fw-bold purple">Mes informations personnelles</h1>
            <?php
            if (isset($error)) {
                echo '<p>' . $error . '</p>';
            }

            // if (isset($getHisQuestions)) { 
            if ($infosUser = $getInfosUser->fetch()) { ?>

                <form method="POST" id="signup-form" class="py-4">
                    <fieldset disabled>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <span class="form-label" for="firstname">Prénom</span>
                                    <input type="text" id="firstname" class="form-control form-control-sm" value="<?= $infosUser['firstname']; ?>" name="firstname" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <span class="form-label" for="lastname">Nom</span>
                                    <input type="text" id="lastname" class="form-control form-control-sm" value="<?= $infosUser['lastname']; ?>" name="lastname" />
                                </div>
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <span class="form-label" for="email">E-mail</span>
                            <input type="email" id="email" class="form-control form-control-sm" value="<?= $infosUser['email']; ?>" name="email" />
                        </div>

                        <div class="form-outline mb-4">
                            <span class="form-label" for="password">Mot de passe</span>
                            <input type="password" id="password" class="form-control form-control-sm" value="<?= $infosUser['password']; ?>" name="password" />
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <span class="form-label" for="guest">Nombre de convives par défaut</span>
                                    <input type="number" id="guest" class="form-control form-control-sm" value="<?= $infosUser['guest']; ?>" name="guest" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <span class="form-label" for="allergens">Allergie alimentaire</span>
                                    <input type="text" id="allergens" class="form-control form-control-sm" value="<?= $infosUser['allergens']; ?>" name="allergens" />
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <div class="pt-1 mb-4">
                        <a href="edit-profile.php?id=<?= $infosUser['id']; ?>" class="orange-button btn">Modifier mes informations</a>
                    </div>

                </form>
            <?php } ?>
        </div>

    </div>
</section>

<?php require('templates/footer.php'); ?>