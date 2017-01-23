<?php
$t_experience = array();

$t_experience = array_slice($columns[2],20,25);
$t_competence = array_slice($columns[2],17,+3);
				
?>
<?php $this->layout('Layout.admin.responsive',['title' => 'Dashbord']); ?>


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


									echo'<td><a href="'.$this->url('Admin_modifier', array('chemin' => 'Admin_homeAdmin','table' => $columns[0][0]['table'],'setPrimaryKey' => $columns[0][0]['name'],'id' => $data['id_utilisateurs'])).'" class="btn btn-warning btn-xs">Modifier</a></td>
						';
								echo'</tr>';

					?>


				<?php endforeach; ?>	
				<td><a href="<?=$this->url('Admin_ajouter',['chemin' => 'Admin_test','table' => $columns[0][0]['table']]);?>" class="btn btn-info btn-xs ">Ajouter</a></td>
							</tr>
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

	<?php foreach($datas[2] as $key => $experience): ?>
							
							<?php 
								if($key != 0):

								
								echo'<tr>';
								
									echo'<td>'.$experience['titre_experience'].'</td>';
									echo'<td>'.$experience['sous_titre_experience'].'</td>';
									echo'<td>'.$experience['dates'].'</td>';
									echo'<td>'.$experience['description'].'</td>';
									echo'<td><a href="'.$this->url('Admin_modifier', array('chemin' => 'Admin_test','table' => $t_experience[0]['table'],'setPrimaryKey' => $t_experience[0]['name'], 'id' => $experience['id_experience'])).'" class="btn btn-warning btn-xs">Modifier</a></td>';
								echo'</tr>';
							?>
						<?php endif; ?>
				<?php endforeach;?>

				<td><a href="<?=$this->url('Admin_ajouter',['chemin' => 'Admin_experience','table' => $t_experience[0]['table']]);?>" class="btn btn-info btn-xs ">Ajouter</a></td>
							</tr>

<?php $this->stop('panel-experience'); ?>
<?php $this->start('panel-competence'); ?>
	
	<thead>
		<tr>
			<?php foreach($t_competence as $key => $column):?>
					
					<?php if($key != 0):?>
					<?php echo'<th class="text-center">'.$column['name'].'</th>'; ?>
						
					<?php endif; ?>
				<?php endforeach;?>
		</tr>
	</thead>
<?php foreach($datas[1] as $key => $competence): ?>
							
							<?php 

								
								echo'<tr>';
									
									echo'<td class="text-center">'.$competence['competence_titre'].'</td>';
									echo'<td class="text-center">'.$competence['competence'].'</td>';
									echo'<td><a href="'.$this->url('Admin_modifier', array('chemin' => 'Admin_test','table' => $t_competence[0]['table'],'setPrimaryKey' => $t_competence[0]['name'], 'id' => $competence['id_competence'])).'" class="btn btn-warning btn-xs">Modifier</a></td>';
								echo'</tr>';
							?>
					
				<?php endforeach;?>


				<td><a href="<?=$this->url('Admin_ajouter',['chemin' => 'Admin_competence','table' => $t_competence[0]['table']]);?>" class="btn btn-info btn-xs ">Ajouter</a></td>
							</tr>
<?php $this->stop('panel-competence'); ?>


