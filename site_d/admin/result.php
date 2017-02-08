<?php
require_once'../inc/init.inc.php';
require_once'../filters/Guest.filters.php';

?>
<?php 

	if(isset($_GET['search'])):

		$search = trim($_GET['search']);
		$query = $bdd->prepare("SELECT * FROM users WHERE pseudo LIKE :search or email LIKE :search ");

		$query->bindParam(':search',$search,PDO::PARAM_STR);

		$query->execute();

		if($query->rowCount() > 0):

			while($data_user = $query->fetch()):

?>				<div class="profil" style="border:1px solid black; padding:5px;">
					<img src="<?= $data_user['image']?>" alt="" height="75">
					<p style="color:blue; display:inline-block;"><?=$data_user['pseudo']?></p>
					<p style="color:blue; display:inline-block;"><?=$data_user['email']?></p>
	
				</div>
				

			<?php  endwhile; $query->closeCursor();?>

		<?php else:?>
		
		<?php endif;?>
	<?php else: ?>
	<?php header('location:membre.php'); ?>
<?php endif; ?>

