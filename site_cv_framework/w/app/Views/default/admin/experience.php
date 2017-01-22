


<?php $this->layout('layout.admin',['title' => 'Experience','LayoutLateralBar' => 'Mes experience']);?>
		

<?php $this->start('main_content');?>
			
<?php $this->stop('main_content');?>

<?php $this->start('sidebar'); ?>
			<table class="table">
				<?php foreach($columns as $key => $column):?>
					

					<?php 
						if($key != 5 && $key != 0){

							if($key%5){

								echo '<th>'.$column['name'].'</th>';
							}
						}

					?>

				<?php endforeach; ?>
					<th>Modifier</th>
					<th>supprimer</th>
					<th>Ajouter</th>
				<?php foreach($experiences as $experience):?>
									<tr>
							<?php echo'<td style="font-size:12px;">'.$experience['titre_experience'].'</td>'; ?>
							<?php echo'<td style="font-size:12px;">'.$experience['sous_titre_experience'].'</td>'; ?>
							<?php echo'<td style="font-size:12px;">'.$experience['dates'].'</td>'; ?>
							<?php echo'<td style="font-size:12px;">'.$experience['description'].'</td>'; ?>
							<?php echo'<td><a href='.$this->url('Admin_modifier',array('chemin' => 'Admin_experience', 'table' => $columns[0]['table'], 'setPrimaryKey' => $columns[0]['name'],'id' => $experience['id_experience'])).' class="btn btn-warning btn-xs">modifier</a></td>';?>
							<?php echo'<td><a href='.$this->url('Admin_supprimer',array('chemin' => 'Admin_experience', 'table' => $columns[0]['table'], 'setPrimaryKey' => $columns[0]['name'],'id' => $experience['id_experience'])).' class="btn btn-danger btn-xs">supprimer</a></td>';?>
								
								
							<td><a href="<?=$this->url('Admin_ajouter',['chemin' => 'Admin_experience','table' => $columns[0]['table']]);?>" class="btn btn-info btn-xs ">Ajouter</a></td>
							</tr>

				<?php endforeach; ?>
			</table>
<?php $this->stop('sidebar');?>
