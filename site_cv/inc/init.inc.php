<?php 
//connexion à la base de données
try{
	 $bdd = new PDO('mysql:host=localhost;dbname=site_cv','root','');
	 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 $bdd->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
}catch(Exception $e){

	echo'error : '.$e->getMessage;
}

//déclaration de la variable du contenu du site 
$contenu = '';
//délcaration d'une constante pour le chemin racite de notre site
define('WEBROOT','/site_cv/');