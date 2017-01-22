<?php
$t_experience = array();

$t_experience = array_slice($columns[2],20,25);
$t_competence = array_slice($columns[2],17,+3);
				
?>
<?php $this->layout('Layout.admin.responsive'); ?>


<?php $this->start('panel-utilisateurs'); ?>
	
	<thead>
		<tr>
			<?php foreach($columns[0] as $key => $column):?>
					<?php if($key != 0): ?>
							<?php if($key%2): ?>
								<?php echo'<th class="text-center">'.$column['name'].'</th>'?>
							<?php endif; ?>
					<?php endif; ?>
				<?php endforeach;?>
		</tr>
	</thead>

	<tbody>
		
		<?php foreach($datas[0] as $key => $data):?>

					<?php 

						echo'<tr>';
									
									echo'<td>'.$data['nom'].'</td>';



									echo'<td>'.$data['email'].'</td>';
									echo'<td>'.$data['sexe'].'</td>';

									
									echo'<td>'.$data['code_postal'].'</td>';
								
									echo'<td>'.$data['pays'].'</td>';
									echo'<td>'.$data['mdp'].'</td>';

									
									echo'<td>'.$data['avatar'].'</td>';

									echo'<td>'.$data['notes'].'</td>';



								echo'</tr>';
					?>

				<?php endforeach; ?>	
	</tbody>

<?php $this->stop('panel-experience'); ?>


<?php $this->start('panel-experience'); ?>
	
	<thead>
		<tr>
			<?php foreach($t_experience as $key => $column):?>
						
						<?php if($key != 0 && $key != 5): ?>
								<?php echo'<th class="text-center">'.$column['name'].'</th>'; ?>

						<?php endif; ?>
				<?php endforeach;?>
		</tr>
	</thead>

<?php $this->stop('panel-experience'); ?>
<?php $this->start('panel-competence'); ?>
	
	<thead>
		<tr>
			<?php foreach($t_competence as $column):?>
					
					<?php echo'<th class="text-center">'.$column['name'].'</th>'; ?>
						
					
				<?php endforeach;?>
		</tr>
	</thead>

<?php $this->stop('panel-competence'); ?>


