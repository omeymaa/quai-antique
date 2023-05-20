<?php
require('./templates/header.php');
require('./templates/navbar.php');
require('./lib/session-start.php');

?>

<section class="container py-5">
    <div class="row">
        <div class="col-3 col-lg-3">
            <div class="flex-shrink-0 p-3">

                <ul class="list-unstyled ps-0">

                    <li><a href="user-dashboard.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded fw-bold purple mb-1">Mes réservations</a></li>
                    <li><a href="my-profile.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded mb-1">Mon profil</a></li>

                    <li class="border-top my-3"></li>
                    <li class="mb-1"><a href="logout.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Deconnexion</a></li>
                </ul>
            </div>
        </div>

        <div class="col-9 col-lg-9">
            <h1 class="fw-bold purple">Mes réservations</h1>
        </div>

    </div>
</section>

<?php require('templates/footer.php'); ?>