<?php 
use Symfony\Component\VarDumper;
// Connexions à la base de données
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=cv','root','');
		$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$bdd->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND,'SET NAMES utf8');
	}
	catch(Exception $e){

		echo 'error : '.$e->getMessage();
	}
//Variables contenu et errors

$contenu = '';

//Racine du site


//inclusion des fonctions


require_once'functions.inc.php';