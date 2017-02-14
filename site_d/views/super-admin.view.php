<?php require_once'../inc/haut.inc.php';?>
	<div class="container">
		<?php require_once"../inc/errors.inc.php";?>
			<div class="row">
				<!-- formulaire pour les competence -->
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel panel-heading">
							<h4>Compétences</h4>
						</div>
						<div class="panel panel-body">
							<form action="" method="POST">
								<div class="form-group">
									<div class="row">
										<div class="col-md-6">
										<label for="">Compétence</label>
											<input type="text" name="competence" class="form-control">
										</div>
										<div class="col-md-6">
											<label for="">Niveau</label>
											<input type="text" name="niveau" class="form-control">
										</div>
									</div>
								</div>
								<input type="submit" name="comp" class="btn btn-default"><a href="super_admin_data.php?affichage=show_competence" class="btn btn-info">Voir competence</a>
							</form>
						</div>
					</div>
				</div>
				<!-- Fin du formulaire de competence -->
				<!-- Debut du formulaire pour les formations -->
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel panel-heading">
							<h4>formation</h4>
						</div>
						<div class="panel panel-body">
							<form action="" method="POST">
								<div class="form-group">
									<div class="row">
										<div class="col-md-6">
										<label for="">formation</label>
											<input type="text" name="formation" class="form-control" class="btn btn-info">
										</div>
										<div class="col-md-6">
											<label for="">date</label>
											<input type="text" name="date_forma" class="form-control">
										</div>
									</div>
								</div>
								<input type="submit" name="forma" class="btn btn-default"><a href="super_admin_data.php?affichage=show_formation" class="btn btn-info">Voir formation</a>
							</form>
						</div>
					</div>
				</div>
				<!-- Fin du formulaire de formations -->
				<!-- Debut du formulaire pour les experience -->
			</div>
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel panel-heading">
							<h4>expérience professionnel</h4>
						</div>
						<div class="panel panel-body">
							<form action="" method="POST">
								<div class="form-group">
									<div class="row">
										<div class="col-md-6">
										<label for="">experience</label>
											<input type="text" name="experience" class="form-control">
										</div>
										<div class="col-md-6">
											<label for="">date</label>
											<input type="text" name="date_exp" class="form-control">
										</div>
									</div>
								</div>
								<input type="submit" name="exp" class="btn btn-default"><a href="super_admin_data.php?affichage=show_experience" class="btn btn-info">Voir experience</a>
							</form>
						</div>
					</div>
				</div>
				
			</div>
			<!-- Fin du formulaire de experience -->
	</div>
	

<?php require_once'../inc/bas.inc.php';?>