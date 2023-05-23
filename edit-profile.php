<?php
require('./templates/header.php');
require('./templates/navbar.php');
require('./lib/session-start.php');
require('./actions/users/getInfosUsersAction.php');
require('./actions/users/editInfosUsersAction.php');
?>
<script src="./scripts/checkPassword.js"></script>

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

            if (isset($user_email)) { ?>
                <form method="POST" id="signup-form" class="py-4">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <span class="form-label" for="firstname"></span>
                                <input type="text" id="firstname" class="form-control form-control-sm" placeholder="Prénom" name="firstname" value="<?= $user_firstname; ?>" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <span class="form-label" for="lastname"></span>
                                <input type="text" id="lastname" class="form-control form-control-sm" placeholder="Nom" name="lastname" value="<?= $user_lastname; ?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <span class="form-label" for="email"></span>
                        <input type="email" id="email" class="form-control form-control-sm" placeholder="E-mail" name="email" value="<?= $user_email; ?>" />
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <span class="form-label" for="guest"></span>
                                <input type="number" id="guest" class="form-control form-control-sm" placeholder="Nombre de convives par défaut" name="guest" value="<?= $user_guest; ?>" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <span class="form-label" for="allergens"></span>
                                <input type="text" id="allergens" class="form-control form-control-sm" placeholder="Allergie alimentaire" name="allergens" value="<?= $user_allergens; ?>" />
                            </div>
                        </div>
                    </div>

                    <div class="pt-1 mb-4">
                        <button class="btn orange-button" type="submit" name="validate">Modifier mes informations</button>
                    </div>
                </form>

                <form method="POST" id="signup-form" class="py-4">
                    <div class="form-outline mb-4">
                        <span class="form-label" for="password"></span>
                        <input type="password" id="password" class="form-control form-control-sm" placeholder="Mot de passe" name="password" value="<?= $user_password; ?>" />
                    </div>

                    <div class="form-outline mb-4">
                        <span class="form-label" for="confirm_password"></span>
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control form-control-sm" placeholder="Confirmez le mot de passe" required />
                    </div>

                    <div class="pt-1 mb-4">
                        <button class="btn orange-button" type="submit" name="modify" onclick="return CheckPassword();">Modifier mon mot de passe</button>
                        <p id="message"></p>
                    </div>
                </form>

            <?php } ?>
        </div>

    </div>
</section>


<?php require('templates/footer.php'); ?>