<?php
require('./templates/header.php');
require('./templates/navbar.php');
?>
<script src="./scripts/booking.js" defer></script>

<div class="container d-flex align-items-center justify-content-center w-100 p-3">
    <section class="wrapper col-4 rounded bg-success-subtle">

        <header class="d-flex align-items-center justify-content-between px-3 pt-4">
            <p class="current-date fw-bold ">Mai 2023</p>
            <div class="icons">
                <span id="prev" class="material-symbols-rounded rounded">chevron_left</span>
                <span id="next" class="material-symbols-rounded rounded">chevron_right</span>
            </div>
        </header>

        <div class="calendar p-2">
            <ul class="weeks d-flex flex-wrap list-unstyled text-center fw-bold">
                <li>Lun.</li>
                <li>Mar.</li>
                <li>Mer.</li>
                <li>Jeu.</li>
                <li>Ven.</li>
                <li>Sam.</li>
                <li>Dim.</li>
            </ul>
            <ul class="days d-flex flex-wrap list-unstyled text-center mb-4"></ul>
        </div>

    </section>
</div>

<?php require('templates/footer.php'); ?>