<?php
require_once"../inc/init.inc.php";
require_once"../filters/Guest.filters.php";
if($_POST){

		extract($_POST);

		insert_or_update('infos_users');
		

		$_SESSION['Auth']['infos_users'] = get_in_table('infos_users'); 
		
	 


}
		$infos_users = get_in_table('infos_users');

?>
<?php require_once'../views/membre.view.php';?>




