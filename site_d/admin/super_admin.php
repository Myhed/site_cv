
<?php require_once'../inc/init.inc.php';?>
<?php require_once'../filters/Super-Admin-filters.php'; ?>
<?php require_once'../filters/Guest.filters.php'; ?>
	
	<?php 
		if(isset($_POST['competence'])){
			unset($_POST['comp']);

			if(not_empty(array('competence','niveau'))){
				$errors = array();

			$query = $bdd->prepare("INSERT INTO competence(competence,niveau) VALUES(:competence,:niveau)");
			$query->bindParam(':competence',$_POST['competence'],PDO::PARAM_STR);
			$query->bindParam(':niveau',$_POST['niveau'],PDO::PARAM_STR);
			$query->execute();

			header('location:super_admin_data.php?affichage=show_competence');
				
			}else{
				$errors['formation'] = 'Veuillez saisir tous les champs du formulaire <strong>Competence</strong>';

			}
		}
		if(isset($_POST['forma'])){
			if(not_empty(array('formation','date_forma'))){
				$errors = array();

			unset($_POST['forma']);
			$query = $bdd->prepare("INSERT INTO formation(formation,date_forma) VALUES(:formation,:date_forma)");
			$query->bindParam(':formation',$_POST['formation'],PDO::PARAM_STR);
			$query->bindParam(':date_forma',$_POST['date_forma'],PDO::PARAM_STR);
			$query->execute();
				header('location:super_admin_data.php?affichage=show_formation');
			}else{

				$errors['formation'] = 'Veuillez saisir tous les champs du formulaire <strong>Formation</strong>';
			}

			
		}
		if(isset($_POST['exp'])){
			if(not_empty(array('experience','date_exp'))){
				$errors = array();
				unset($_POST['exp']);
				$query = $bdd->prepare("INSERT INTO experience(experience,date_exp) VALUES(:experience,:date_exp)");
				$query->bindParam(':experience',$_POST['experience'],PDO::PARAM_STR);
				$query->bindParam(':date_exp',$_POST['date_exp'],PDO::PARAM_STR);
				$query->execute();
				header('location:super_admin_data.php?affichage=show_experience');
			}else{

				$errors['experience'] = 'Veuillez saisir tous les champs du formulaire <strong>Experience</strong>';
			}
		}
	?>

<?php require_once'../views/super-admin.view.php';?>