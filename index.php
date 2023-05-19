<?php
require('templates/header.php');
?>

<!-- Navbar -->
<div class="background w-100 h-100 d-flex flex-column justify-content-between">
    <?php require('templates/navbar.php'); ?>

    <!-- Landing Page -->
    <section id="landing-page">
        <div class="text-landing-page text-center h-100">
            <h1 class="purple fw-bold">Quai Antique</h1>
            <p class="purple">Restaurant Savoyard à Chambéry</p>
            <a href="./booking.php" class="orange-button btn text-uppercase">Réserver une table</a>
        </div>
    </section>

    <div class="scroll text-center p-5">
        <a class="scroll-down purple" href="#introduction"><i class="fa-solid fa-circle-chevron-down fa-2xl"></i></a>
    </div>
</div>



<?php require('templates/footer.php'); ?>