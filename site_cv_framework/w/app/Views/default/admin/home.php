<?php
$t_experience = array();

$t_experience = array_slice($columns[2],20,25);
$t_competence = array_slice($columns[2],17,+3);
				
?>

<?php $this->layout('layout.admin',array('title' => 'Home',
										'LayoutLateralBar' => 'Mes infos')); ?>

<?php $this->start('main_content');?>

<?php $this->stop('main_content');?>



		
<?php $this->start('sidebar');?>

	<div class="table-responsive">
		<table class="table">
				<?php foreach($columns[0] as $column):?>
					
					<?php echo'<th class="text-center">'.$column['name'].'</th>'?>
				<?php endforeach;?>
						
				<?php foreach($datas[0] as $key => $data):?>
						
				<?php endforeach;?>
		</table>
	</div>

<?php $this->stop('sidebar');?>
<?php var_dump();?>
	<?php $this->start('sidebar-2');?>
		<table class="table table-2">

					
					<?php foreach($t_experience as $column):?>
					
					<?php echo'<th class="text-center">'.$column['name'].'</th>'; ?>

					
				<?php endforeach;?>

			
		</table>
	<?php $this->stop('sidebar-2');?>





	<?php $this->start('sidebar-3');?>


		<table class="table table-3">

					
					<?php foreach($t_competence as $column):?>
					
					<?php echo'<th class="text-center">'.$column['name'].'</th>'; ?>

					
				<?php endforeach;?>

				
		
				</table>
	<?php $this->stop('sidebar-3');?>