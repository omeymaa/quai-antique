<?php
require('./lib/config.php');

$getInfosUser = $db->prepare('SELECT id, firstname, lastname, email, password, guest, allergens FROM user WHERE id = ?');
$getInfosUser->execute(array($_SESSION['id']));