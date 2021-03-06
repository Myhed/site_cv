<?php $this->layout('Layout.admin.responsive',['title' => 'Ajouter','LayoutLateralBar' => 'Mes ajouts']);

?>

<?php $this->start('main_content');?>
<div class="well col-md-8 col-md-offset-2">
	<h1>Ajouter des informations sur vos experience</h1>
	<form action="" method="POST" enctype="multipart/data">
	<?php if($table == 't_utilisateur'):?>
		<div class="form-group">
			<label for="">Nom</label>
			<input type="text" name="nom" class="form-control">
		</div>
		<div class="form-group">
			<label for="">prenom</label>
			<input type="text" name="prenom" class="form-control" >
		</div>
		<div class="form-group">
			<label for="">Age</label>
			<input type="text" name="age" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Sexe</label>
			<select name="sexe" id="" class="form-control">
				<option value="h">Homme</option>
				<option value="f">Femme</option>
			</select>
		</div>
		<div class="form-group">
			<label for="">Adresse</label>
			<input type="text" name="adresse" class="form-control" value="">
		</div>
		<div class="form-group">
			<label for="">Code Postal</label>
			<input type="text" name="code_postal" class="form-control" value="">
		</div>
		<div class="form-group">
			<label for="">Ville</label>
			<input type="text" name="ville" class="form-control" >
		</div>
		<div class="form-group">
			<label for="">Etat civil</label>
			<select name="etat_civil" id="" class="form-control">
				<option value="Mr">Mr</option>
				<option value="M">M</option>
			</select>
		</div>
		<div class="form-group">
			<label for="">Mot de passe</label>
			<input type="text" name="mdp" class="form-control" value="">
		</div>
		<div class="form-group">
			<label for="">Telephone</label>
			<input type="text" name="tel" class="form-control" value="">
		</div>
		<div class="form-group">
			<label for="">Avatar</label>
			<input type="text" name="avatar" class="form-control" value="">
		</div>
		<div class="form-group">
			<label for="">pseudo</label>
			<input type="text" name="pseudo" class="form-control" value="">
		</div>
		<div class="form-group">
			<label for="">notes</label>
			<textarea name="notes" id="" cols="30" rows="10" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="">Statut</label>
			<input type="text" name="statut" class="form-control" value="">
		</div>
		
		<?php elseif($table == 't_experience'):?>
				
				<div class="form-group">
				
				<label for="">Titre de l'expérience</label>
				<input type="text" name="titre_experience" class="form-control" value="">
				

			</div>

			<div class="form-group">

				<label for="">Sous titre de votre experience</label>
				<input type="text" name="sous_titre_experience" class="form-control" value="">
			</div>

			<div class="form-group">
				<label for="">dates</label>
				<input type="text" name="dates" class="form-control" >
			</div>

				<div class="form-group">
				<label for="">description</label>
				<textarea name="description" id="" cols="30" class="form-control" rows="10"></textarea>
			</div>


				<?php elseif($table == 't_competence'):?>
			
			<div class="form-group">
				
				<label for="">Titre de ma compétence</label>
				<input type="text" name="competence_titre" class="form-control" value="">
				

			</div>

		
			<div class="form-group">
				<label for="">Vote competence</label>
				<input type="text" name="competence" class="form-control">
			</div>
	<?php endif;?>

		<button class="btn btn-primary">Ajouter</button>
	</form>

</div>
<?php $this->stop('main_content');?>


<?php $this->start('sidebar'); ?>

<?php $this->stop('sidebar'); ?>