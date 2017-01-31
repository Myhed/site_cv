<?php if(isset($errors) && count($errors) > 0):?>
	   
	   <?php foreach($errors as $error):?>
				
				<div class="alert alert-danger" >
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?= $error ?>
					
				</div>

	   <?php endforeach;?>

<?php endif; ?>