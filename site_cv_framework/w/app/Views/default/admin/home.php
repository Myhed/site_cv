

<?php $this->layout('layout.admin',array('title' => 'Home',
										'LayoutLateralBar' => 'Mes infos')); ?>

<?php $this->start('main_content');?>
<?php var_dump($datas[2][0]); ?>

<?php $this->stop('main_content');?>

		
<?php $this->start('sidebar');?>

	<div class="table-responsive">
		<table class="table">
				<?php foreach($columns[0] as $column):?>
					
					<?php echo'<th class="text-center">'.$column['name'].'</th>'?>
				<?php endforeach;?>
						
				<?php foreach($datas[0] as $key => $data):?>
						<?php var_dump();?>
				<?php endforeach;?>
		</table>
	</div>

<?php $this->stop('sidebar');?>
<?php var_dump();?>
	<?php $this->start('sidebar-2');?>
		<table class="table table-2">	
					<?php foreach($columns[2] as $column):?>
					
					<!-- ?php echo'<th class="text-center">'.$column['name'].'</th>'?> -->

					<?php var_dump($column);?>
				<?php endforeach;?>
		</table>
	<?php $this->stop('sidebar-2');?>





	<?php $this->start('sidebar-3');?>

	<?php $this->stop('sidebar-3');?>