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

					<?php 

						echo'<tr>';
									echo'<td>'.$data['id_utilisateurs'].'</td>';
									echo'<td>'.$data['nom'].'</td>';
									echo'<td>'.$data['prenom'].'</td>';

									echo'<td>'.$data['email'].'</td>';
									echo'<td>'.$data['age'].'</td>';
									echo'<td>'.$data['sexe'].'</td>';

									echo'<td>'.$data['adresse'].'</td>';
									echo'<td>'.$data['code_postal'].'</td>';
									echo'<td>'.$data['ville'].'</td>';

									echo'<td>'.$data['pays'].'</td>';
									echo'<td>'.$data['etat_civil'].'</td>';
									echo'<td>'.$data['mdp'].'</td>';

									echo'<td>'.$data['tel'].'</td>';
									echo'<td>'.$data['avatar'].'</td>';
									echo'<td>'.$data['pseudo'].'</td>';

									echo'<td>'.$data['notes'].'</td>';
									echo'<td>'.$data['statut'].'</td>';



								echo'</tr>';
					?>

					<td><a href="<?=$this->url('Admin_modifier', array('chemin' => 'Admin_homeAdmin','table' => $columns[0][0]['table'],'setPrimaryKey' => $columns[0][0]['name'],'id' => $data['id_utilisateurs'])); ?>" class="btn btn-warning">Modifier</a></td>
							
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

					<?php foreach($datas[2] as $experience): ?>
							
							<?php 
								echo'<tr>';
									echo'<td>'.$experience['id_experience'].'</td>';
									echo'<td>'.$experience['titre_experience'].'</td>';
									echo'<td>'.$experience['sous_titre_experience'].'</td>';
									echo'<td>'.$experience['dates'].'</td>';
									echo'<td>'.$experience['description'].'</td>';
									echo'<td>'.$experience['id_competence'].'</td>';
								echo'</tr>';
							?>

				<?php endforeach;?>

			
		</table>
	<?php $this->stop('sidebar-2');?>





	<?php $this->start('sidebar-3');?>


		<table class="table table-3">

					
					<?php foreach($t_competence as $column):?>
					
					<?php echo'<th class="text-center">'.$column['name'].'</th>'; ?>
						
					
				<?php endforeach;?>
				
				<?php foreach($datas[1] as $competence): ?>
							
							<?php 
								echo'<tr>';
									echo'<td>'.$competence['id_competence'].'</td>';
									echo'<td>'.$competence['competence_titre'].'</td>';
									echo'<td>'.$competence['competence'].'</td>';
								echo'</tr>';
							?>

				<?php endforeach;?>

		
				</table>
	<?php $this->stop('sidebar-3');?>