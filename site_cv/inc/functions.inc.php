<?php 

function check_menu_active($page){

	$page = $page.'.php';

	$chemin = $_SERVER['SCRIPT_FILENAME'];
	$chemin_page = explode('/',$chemin);

	$chemin_page = end($chemin_page);

	if($chemin_page === $page){

		return'active';
	}
}

function insert($table = null,$competence_titre,$competence){

	global $bdd;



	$query = $bdd->prepare("INSERT INTO $table(competence_titre,competence)
		VALUES(:competence_titre,:competence)");

	$query->bindParam(':competence_titre',$competence_titre,PDO::PARAM_STR);
	$query->bindParam(':competence',$competence,PDO::PARAM_STR);

	$query->execute();

}