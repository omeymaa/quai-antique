<?php
require('./templates/header.php');
require('actions/connections/signupAction.php');
?>
<script src="./scripts/checkPassword.js"></script>

<section class="vh-100 bg-brown-dark">
    <div class="container py-3 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-lg-block">
                            <img src="assets/images/connexion-inscription.jpg" alt="login form" class="img-fluid" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5">
                                <form method="POST" id="signup-form" onsubmit="return CheckPassword();">
                                    <?php
                                    if (isset($error)) {
                                        echo "<p class='alert alert-danger'>$error</p>";
                                    } ?>
                                    <div class="d-flex align-items-center mb-2 pb-1">
                                        <a href="index.php"><img src="assets/images/logo-quai-antique.png" alt="Logo Quai Antique" class="w-50"></a>
                                    </div>

                                    <h5 class="fw-bold mb-2 pb-2 orange">Inscrivez-vous</h5>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <span class="form-label" for="firstname"></span>
                                                <input type="text" id="firstname" class="form-control form-control-sm" placeholder="Prénom" name="firstname" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <span class="form-label" for="lastname"></span>
                                                <input type="text" id="lastname" class="form-control form-control-sm" placeholder="Nom" name="lastname" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <span class="form-label" for="email"></span>
                                        <input type="email" id="email" class="form-control form-control-sm" placeholder="E-mail" name="email" required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <span class="form-label" for="password"></span>
                                        <input type="password" id="password" class="form-control form-control-sm" placeholder="Mot de passe" name="password" required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <span class="form-label" for="confirm_password"></span>
                                        <input type="password" id="confirm_password" name="confirm_password" class="form-control form-control-sm" placeholder="Confirmez le mot de passe" required />
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <span class="form-label" for="guest"></span>
                                                <input type="number" id="guest" class="form-control form-control-sm" placeholder="Nombre de convives par défaut" name="guest" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <span class="form-label" for="allergens"></span>
                                                <input type="text" id="allergens" class="form-control form-control-sm" placeholder="Allergie alimentaire" name="allergens" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="check" />
                                        <label class="form-check-label" for="check">
                                            <p class="small">J'accepte toutes les <a href="#!" class="purple">conditions générales</a></p>
                                        </label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <p id="message"></p>
                                        <button class="btn orange-button btn-lg" type="submit" name="validate">S'inscrire</button>
                                    </div>
                                    <p class="small">Vous avez déjà un compte ? <a href="login.php" class="purple">Connexion</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a>
                </div>
            </div>
        </div>
    </div>
</section>