<?php require_once"../inc/init.inc.php"; ?>
<?php require_once"../filters/Guest.filters.php"; ?>
<?php 

	if(!empty($_GET['id'])){

		$data = find_code_by_id($_GET['id']);

			if(!$data){

				$code = "";
			}else{

				$code = $data->code;
			}
		
	}else{

		$code = "";
	}
	
	if($_POST){

		if(not_empty(array('titre_post','langage_use','code'))){

			extract($_POST);

			$req = $bdd->prepare("INSERT INTO codes(code,titre_post,langage_use,id_users) 
							VALUES(:code,:titre_post,:langage_use,:id_users)");

							$req->bindParam(':code',$code,PDO::PARAM_STR);
							$req->bindParam(':titre_post',$titre_post,PDO::PARAM_STR);
							$req->bindParam(':langage_use',$langage_use,PDO::PARAM_STR);
							$req->bindParam(':id_users',$_SESSION['Auth']['id_users'],PDO::PARAM_STR);
							$success = $req->execute();

							if($success){

								$id = $bdd->lastInsertId();
								redirect('show_code.php?id='.$id);
							}

		}else{

			$errors['Champs non saisie'] = "Veuillez saisir tous les champs";
		}
	}
	
?>
<?php require_once'../views/share_code.view.php'; ?>