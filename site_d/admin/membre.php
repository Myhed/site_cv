<?php
require_once"../inc/init.inc.php";
require_once"../filters/Guest.filters.php";
require_once'../views/membre.view.php';
?>

<div class="container">
	<div class="row">
		<div class="panel panel-default col-md-6">
			<div class="panel-heading">
				<h2>Profil de <?=$_SESSION['Auth']['pseudo']; ?></h2>
			</div>
		</div>
	</div>
</div>


