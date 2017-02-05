<?php require_once"../inc/init.inc.php"; ?>
<?php require_once"../filters/Guest.filters.php"; ?>
<?php 
	if(!empty($_GET['id'])){

		$data = find_code_by_id($_GET['id']); 

			if(!$data || $data->id_users != $_SESSION['Auth']['id_users']){

				redirect('share_code.php');
			}
		
	}else{

		redirect('share_code.php');
	}
?>
<?php require_once'../views/show_code.view.php'; ?>