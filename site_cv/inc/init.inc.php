<?php 
/*Connexions à la base de données*/
try{

	$bdd = new PDO('mysql:host=localhost;dbname=site_cv','root','');
	$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$bdd->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND,'SET NAMES utf8');
}
catch(Exception $e){

	echo'error : '.$e->getMessage();
}

//Définission de la variable du chemin racine

define('WEBROOT','assets/');

//Définissions de la variable contenu 

$contenu = '';





require_once"function.inc.php";