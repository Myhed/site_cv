

<?php require_once"../inc/init.inc.php";?>

<?php session_destroy();
$_SESSION = [];
header('location:<?= WEBROOT ?>connexion.php');