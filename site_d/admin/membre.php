<?php
require_once"../inc/init.inc.php";
require_once"../filters/Guest.filters.php";

if(isset($_GET['id']) && (ctype_digit($_GET['id']) || !isset($_GET['id']))){

	$query = $bdd->prepare("SELECT * FROM users WHERE id_users = :id_users");

	$query->bindParam(":id_users",$_GET['id'],PDO::PARAM_INT);

	$query->execute();

	
	$data_get = $query->fetch(PDO::FETCH_ASSOC);

	if(!$data_get){

		header('location:membre.php?id='.$_SESSION['Auth']['id_users']);
	}


	if(isset($_GET['action']) && $_GET['action'] == 'ajouter_amis'){

		$query = $bdd->prepare("INSERT INTO amis(id_expediteur,id_destinataire) VALUES(:id_exp,:id_dest)");

		$query->bindParam(':id_exp',$_SESSION['Auth']['id_users'] ,PDO::PARAM_INT);
		$query->bindParam(':id_dest',$_GET['id'],PDO::PARAM_INT);

		$query->execute();

		header('location:membre.php?id='.$_GET['id']);


	}
	
	
}else{

	header('location:membre.php?id='.$_SESSION['Auth']['id_users']);
}

if(isset($_GET['action']) && $_GET['action'] == 'Ajouter'){

	Accepte();
	
}

if($_POST){

		extract($_POST);

		insert_or_update('infos_users');

		$_SESSION['Auth']['infos_users'] = get_in_table('infos_users'); 
		
	 	header('location:membre.php');


}
		
$infos_users = get_in_table('infos_users');
		

?>
<?php require_once'../views/membre.view.php';?>




