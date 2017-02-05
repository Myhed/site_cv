<?php require_once'../inc/haut.inc.php'; ?>
		
		<div id="main-content">
			
			<div id="main-content-share-code">
				<?php require_once'../inc/errors.inc.php'; ?>
				<form action="" autocomplete="off" method="POST">
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Titre du poste</label>
							<input type="text" name="titre_post" class="form-control" placeholder="Mettez le titre de votre code...">
						</div>
						<div class="form-group">
							<label for="">Le ou les language(s) utilisé</label>
							<input type="text" name="langage_use" class="form-control" placeholder="Vos language(s)">
						</div>
					</div>
					<textarea name="code" id="code" cols="30" placeholder="Entrer votre code ici..." rows="10" required="required"><?= e($code);?></textarea>
					<div class="btn-group nav">	
							<button class="btn btn-success">Enregistrer</button>
							<input type="reset" class="btn btn-danger" value="Tous effacer">
					</div>
				</form>
			</div>

		</div>
		
<?php require_once'../inc/bas.inc.php'; ?>
<script src="../assets/js/tabby.js"></script>
<script>
	$("#code").tabby();
	$("#code").height($(window).height());
</script>
