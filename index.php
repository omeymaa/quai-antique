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

<!-- Presentation -->
<section class="container py-5" id="introduction">
    <h2>Découvrez l’authenticité de Quai Antique</h2>
    <p>Hac habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris a diam maecenas sed enim ut sem viverra aliquet eget sit amet tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros in cursus turpis massa tincidunt dui ut ornare <strong>lectus sit amet est placerat in egestas erat imperdiet sed euismod</strong> nisi porta lorem mollis aliquam ut porttitor leo a diam sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus nullam eget felis eget nunc lobortis mattis aliquam faucibus purus in massa tempor nec feugiat nisl pretium fusce id velit ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae.</p>
</section>

<section class="container py-5" id="presentation">
    <div class="row pb-5 align-items-md-stretch d-flex justify-content-center">
        <div class="image-presentation col-lg-6 col-12">
            <img class="img-fluid" src="assets/images/restaurant-quai-antique.jpg" alt="Presentation du restaurant">
        </div>

        <div class="text-presentation col-lg-6 col-12 align-self-center pt-2">
            <h2>Quai antique, typiquement savoyard</h2>
            <p>Pretium nibh ipsum consequat nisl vel pretium lectus quam id leo in vitae turpis massa sed elementum tempus egestas sed sed risus pretium quam vulputate dignissim suspendisse in est ante in nibh mauris cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet non curabitur gravida arcu ac <strong>tortor dignissim convallis aenean et tortor at risus viverra adipiscing at in tellus integer feugiat scelerisque</strong> varius morbi enim nunc faucibus a pellentesque sit amet porttitor eget dolor morbi non arcu risus quis varius quam quisque id diam vel quam elementum.</p>
            <a href="about.php" class="orange-button btn text-uppercase">En savoir plus</a>
        </div>
    </div>

    <div class="row mt-5 align-items-md-stretch d-flex justify-content-center">
        <div class="text-presentation col-lg-6 col-12 align-self-center pt-2">
            <h2>Cuisine artisanale & produits de qualité</h2>
            <p>Pretium nibh ipsum consequat nisl vel pretium lectus quam id leo in vitae turpis <strong>massa sed elementum tempus egestas sed sed risus pretium quam vulputate</strong> dignissim suspendisse in est ante in nibh mauris cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet non curabitur gravida arcu ac tortor dignissim convallis aenean et tortor at risus viverra adipiscing at in tellus integer feugiat scelerisque varius morbi enim nunc faucibus a pellentesque sit amet porttitor eget dolor morbi non arcu risus quis varius quam quisque id diam vel quam elementum.</p>
            <a href="menu.php" class="orange-button btn text-uppercase">Voir la carte</a>
        </div>

        <div class="image-presentation col-lg-6 col-12">
            <img class="img-fluid" src="assets/images/menu-quai-antique.jpg" alt="Presentation Menus">
        </div>
    </div>
</section>

<!-- Galerie -->
<section class="container py-5" id="gallery">
    <h2 class="pb-3">Nos plats les plus appréciés</h2>
    <div class="row">
        <div class="col-lg-4 col-6 pb-4">
            <a href="assets/images/plats/camembert-roti.jpg" data-lightbox="photos" data-title="Camembert rôti" data-caption="Caption Two goes here">
                <img class="img-fluid" src="assets/images/plats/camembert-roti.jpg" alt="Presentation Menus">
            </a>
        </div>
        <div class="col-lg-4 col-6 pb-4">
            <a href="assets/images/plats/fondue-savoyarde.jpg" data-lightbox="photos" data-title="Fondue savoyarde">
                <img class="img-fluid" src="assets/images/plats/fondue-savoyarde.jpg" alt="Presentation Menus">
            </a>
        </div>
        <div class="col-lg-4 col-6 pb-4">
            <a href="assets/images/plats/gratin-pates-fromage.jpg" data-lightbox="photos" data-title="Gratin de pates au fromage">
                <img class="img-fluid" src="assets/images/plats/gratin-pates-fromage.jpg" alt="Presentation Menus">
            </a>
        </div>
        <div class="col-lg-4 col-6 pb-4">
            <a href="assets/images/plats/raclette-a-partager.jpg" data-lightbox="photos" data-title="Raclette à partager">
                <img class="img-fluid" src="assets/images/plats/raclette-a-partager.jpg" alt="Presentation Menus">
            </a>
        </div>
        <div class="col-lg-4 col-6 pb-4">
            <a href="assets/images/plats/salade-du-chef.jpg" data-lightbox="photos" data-title="Salade du chef">
                <img class="img-fluid" src="assets/images/plats/salade-du-chef.jpg" alt="Presentation Menus">
            </a>
        </div>
        <div class="col-lg-4 col-6 pb-4">
            <a href="assets/images/plats/spaghettis-savoyarde.jpg" data-lightbox="photos" data-title="Spaghettis savoyarde">
                <img class="img-fluid" src="assets/images/plats/spaghettis-savoyarde.jpg" alt="Presentation Menus">
            </a>
        </div>
    </div>
</section>



<?php require('templates/footer.php'); ?>