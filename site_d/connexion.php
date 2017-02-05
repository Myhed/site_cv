<?php

require_once'inc/init.inc.php'; 
require_once'filters/Auth.filters.php';
//On vérifie qu'il y'ait bien un des données poster dans le formulaire
if($_POST){
	//On extrait tous ce qu'il y'a dans la variable $_POST pour ensuite pouvoir les réutiliser en variable simple
	extract($_POST);
	// Si les champs demander ne manque pas alors on passe à la suite du traitement
	if(verif_field(array('password','email'))){
		//On définis notre tableau d'erreur
		$errors = array();

			if(verif_compte($email,$password) > 0){

				//Faire en sorte de le rediriger vers la page admin

				$_SESSION['Auth'] = get_users($email);
				header('location:admin/membre.php?id='.$_SESSION['Auth']['id_users']);

			}else{

				//sinon on lui affiche que c'est identifiant sont incorrecte

				$errors['identifiant/password incorrecte'] = "L' identifiant ou votre mot de passe sont incorrecte";
			}

	}else{// Sinon on met dans notre tableau d'erreur un message

		$errors ['Erreur/tous les champs'] = 'Veuillez saisir tous vos champs';
	}
}

require_once"views/connexion.view.php";
?>

