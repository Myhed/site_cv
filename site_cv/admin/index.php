<?php require_once"../inc/init.inc.php"; ?>
	
	<?php 
		$query = $bdd ->query("SELECT * FROM t_utilisateur");

		$data = $query->fetch();
		$contenu .= '<span>'.$data['prenom'].'</span>'.' ';
		$contenu .= '<span>'.$data['nom'].'</span>';
	?>

<?php require_once"../inc/haut.inc.php";?>

	<h1>Espace administratif du site CV</h1>
	<?=$contenu?>

<?php require_once"../inc/bas.inc.php";?>