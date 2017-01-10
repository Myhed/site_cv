<?php require_once"../inc/init.inc.php"; 
		if($_POST){

			extract($_POST);

			insert('t_competence',$competence_titre,$competence);
		}
?>
<?php require_once"../inc/haut.inc.php"; ?>
		<form action="" method="POST">
			<label for="">titre de la compétence</label><br>
			<input type="text" name="competence_titre"><br>
			<label for="">Votre competence</label><br>
			<input type="text" name="competence"><br><br>
			<input type="submit">
		</form>
<?php require_once"../inc/bas.inc.php"; ?>