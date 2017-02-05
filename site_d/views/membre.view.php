<?php require_once'../inc/haut.inc.php'; ?>
<div class="container">
	<div class="row">
		<div class="panel panel-default col-md-6">
			<div class="panel-heading">
				<h4>Profil de <?= $_SESSION['Auth']['pseudo']; ?></h4>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Compléter mon profil</h4></div>
				<div class="panel-body">
				<?php require_once'../inc/errors.inc.php';?>
					<form action="" method="POST">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Nom</label>
										<input type="text" name="nom" class="form-control" value="<?=e($infos_users['nom']); ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">prenom</label>
										<input type="text" name="prenom" class="form-control" value="<?=e($infos_users['prenom']); ?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Telephone</label>
										<input type="text" name="tel" class="form-control" value="<?=e($infos_users['tel']); ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">ville</label>
										<input type="text"  name="ville" class="form-control" value="<?=e($infos_users['ville']); ?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Description</label>
										<textarea name="description" id="description" cols="30" rows="10" class="form-control"><?=e($infos_users['description']); ?></textarea>
									</div>
								</div>	
							</div>
							<button class="btn btn-primary">Envoyer</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once'../inc/bas.inc.php'; ?>