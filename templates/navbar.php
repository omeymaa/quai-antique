<?php
require('./lib/config.php');

$currentPage = basename($_SERVER['SCRIPT_NAME']);
?>

<div class="container mt-4">
    <header class="navbar navbar-light navbar-expand-lg">
        <div class="logo">
            <a href="index.php" class="navbar-brand">
                <img class="img-fluid" src="assets/images/logo-quai-antique.png" alt="Logo Quai Antique">
            </a>
        </div>

        <button class="navbar-toggler ms-auto navbar-light custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavToggler" aria-controls="navbarNavToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <nav class="collapse navbar-collapse text-uppercase fw-bold justify-content-end ms-2" id="navbarNavToggler">
            <?php if ($currentPage === 'index.php') { ?>
                <ul class="navbar-nav nav-pills">
                    <?php foreach ($mainMenu as $key => $value) { ?>
                        <li class="nav-item ms-3"><a href="<?= $key; ?>" class="nav-link purple"><?= $value; ?></a></li>
                    <?php } ?>
                </ul>
            <?php } else { ?>

                <ul class="navbar-nav nav-pills">
                    <?php foreach ($mainMenu as $key => $value) { ?>
                        <li class="nav-item ms-3"><a href="<?= $key; ?>" class="nav-link purple <?php if ($currentPage === $key) {
                                                                                                    echo 'active';
                                                                                                } ?>"><?= $value; ?></a></li>
                <?php }
                } ?>
                </ul>

                <?php if (!isset($_SESSION['auth'])) { ?>

                    <a href="login.php" class="nav-link purple ms-3">Connexion</a>

                <?php } else { ?>
                    <a href="user-dashboard.php" class="nav-link purple ms-3">Mon compte</a>
                <?php } ?>
        </nav>
    </header>
</div>