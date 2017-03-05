<?php 
require_once"../inc/init.inc.php";

if(!isset($_GET['affichage'])){

	header('location:index.php?affichage=show_competence');
}



?>

<?php require_once"../filters/Super-Admin-filters.php";?>


<?php require_once"../views/indexAdmin.view.php"; ?>