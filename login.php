<?php
require('./templates/header.php');
?>

<section class="vh-100 bg-brown-dark">
    <div class="container py-3 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="assets/images/connexion-inscription.jpg" alt="login form" class="img-fluid" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5">
                                <form method="POST">
                                    <?php
                                    if (isset($error)) {
                                        echo "<p class='alert alert-danger'>$error</p>";
                                    } ?>
                                    <div class="d-flex align-items-center mb-2 pb-1">
                                        <a href="index.php"><img src="assets/images/logo-quai-antique.png" alt="Logo Quai Antique" class="w-50"></a>
                                    </div>

                                    <h5 class="fw-bold mb-2 pb-2 orange">Identifiez-vous</h5>

                                    <div class="form-outline mb-4">
                                        <span class="form-label" for="form2Example17"></span>
                                        <input type="email" id="form2Example17" class="form-control" placeholder="E-mail" name="email" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <span class="form-label" for="form2Example27"></span>
                                        <input type="password" id="form2Example27" class="form-control" placeholder="Mot de passe" name="password" />
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn orange-button btn-lg" type="submit" name="validate">Se connecter</button>
                                    </div>

                                    <a class="small text-muted" href="#!">Mot de passe oublié ?</a>
                                    <p class="small">Vous n'avez pas de compte ? <a href="signup.php" class="purple">Inscription</a></p>
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