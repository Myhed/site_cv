<?php
require_once'inc/init.inc.php';
//On vérifie qu'il y'ait bien un des données poster dans le formulaire
if($_POST){
	//On extrait tous ce qu'il y'a dans la variable $_POST pour ensuite pouvoir les réutiliser en variable simple
	extract($_POST);
	// Si les champs demander ne manque pas alors on passe à la suite du traitement
	if(verif_field(array('password','email'))){
		//On définis notre tableau d'erreur
		$errors = array();

	}else{// Sinon on met dans notre tableau d'erreur un message

		$errors ['Erreur/tous les champs'] = 'Veuillez saisir tous vos champs';
	}
 }
?>

<?php require_once'inc/haut.inc.php'; ?>
	
	<div class="jumbotron">
		
		<div class="container">

			<div class="row">
				
				<p>Si vous n'avez pas de compte dans mon portefolio afin de pouvoir parler avec moi via le t-chat du site veuillez demander un accées en me contactant via l'adress email suivant : <strong>myhed.ben-rhouma@lepoles.fr</strong> </p>

			</div>

		</div>

	</div>
	<div class="container">
	<div class="well col-md-8 col-md-offset-2">
	<?php require_once"inc/errors.inc.php"; ?>
		<h2>Connexion</h2>
		<form action="" method="POST">
			<div class="form-group">
				<input type="text" name="email" placeholder="Veuillez saisir votre email" class="form-control">
			</div>
			<div class="form-group">
				<input type="text" name="password" placeholder="Veuillez saisir votre mot de passe" class="form-control">
			</div>
			<button class="btn btn-primary">Connexion</button>
		</form>

	</div>
		
	</div>

<?php require_once'inc/bas.inc.php'; ?>