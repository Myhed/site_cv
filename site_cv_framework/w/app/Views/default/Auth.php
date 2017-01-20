<?php $this->layout('layout', array('title' => 'Authentification'));?>

<?php $this->start('content-section-a');?>
	
	<?php
	if(isset($errors) && count($errors) > 0): 
	foreach($errors as $error):?>
			<div class="alert alert-danger col-md-4 col-md-offset-4 text-center"><?= $error ?></div>
	<?php endforeach;?>
	<?php endif;?>
 <div class="container">
	
	<div class="well col-md-8 col-md-offset-2">
		<h1 class="text-center">Connexion</h1>
		<form action="" method="POST">
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" name="email" class="form-control">
			</div>

			<div class="form-group">
				<label for="">Mot de passe</label>
				<input type="password" name="mdp" class="form-control">
			</div>
			<button class="btn btn-primary">Connexion</button>
		</form>

	</div>

</div> 

<?php $this->stop('content-section-a');?>