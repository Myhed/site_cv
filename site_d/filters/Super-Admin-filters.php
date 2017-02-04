<?php
	
		if($_SESSION['Auth']['grade'] != 'super-admin'){

			header('location:membre.php');
		}
 ?>