 <?php require_once'../inc/haut.inc.php';?>

 	<?php 
 		if(isset($_GET['affichage']) && ($_GET['affichage'] == 'show_competence' || $_GET['affichage'] == 'show_experience' || $_GET['affichage'] == 'show_formation')):

 			$title_table = explode('_',$_GET['affichage']);
 			$table_name = $title_table[1];
 			
 	?>
	
		<div class="container">
		
			<div class="row">
				<!-- formulaire pour les competence -->
				<div class="col-md-12">
						<table class="table table-hover">
							<thead>

								<?php $get_data_table = $bdd->query("SELECT * FROM $table_name ");
									  
									  		$datas = array();
									  while($data_table = $get_data_table->fetch(PDO::FETCH_ASSOC)){
									  		$datas [] = $data_table;
									  }
								 ?>
							<?php 
								$number_column = get_colonne($table_name,'column');
								for($i=0; $i < $number_column; $i++):
									$name = $column->getColumnMeta($i);
							?>
							
							<?php 
							if($name['name'] != 'id_'.$table_name){
										echo '<th class="text-center">'.$name['name'].'</th>';	
									} 
									?>
							<?php endfor; ?>
							<th class="text-center">Modifier/supprimer</th>
							
							</thead>
							
							<?php if($_GET['affichage'] === 'show_competence'): ?>
											<?php 
										foreach($datas as $data):
											var_dump($data);
									?>
										<tr>
											<td class="text-center"><?=$data['competence']; ?></td>
											<td class="text-center"><?=$data['niveau']; ?></td>
											<div class="btn-group">
												<td class="text-center"><a href="modificationSupression.php?modification_competence=<?= $data['id_competence'] ?>" class="btn btn-info btn-xs">Modifier</a><a href="modificationSupression.php?supression_competence=<?= $data['id_competence'] ?>" class="btn btn-warning btn-xs">supprimer</a></td>
											
											</div>
										</tr>
								<?php endforeach; ?>
									
							<?php elseif($_GET['affichage'] === 'show_experience'): ?>
									<?php 
										foreach($datas as $data):
									?>
										<tr>
											<td><?=$data['experience']; ?></td>
											<td><?=$data['date_exp']; ?></td>
											<td class="text-center"><a href="modificationSupression.php?modification_competence=<?= $data['id_experience'] ?>" class="btn btn-info btn-xs">Modifier</a><a href="modificationSupression.php?supression_competence=<?= $data['id_experience'] ?>" class="btn btn-warning btn-xs">supprimer</a></td>
										</tr>
								<?php endforeach; ?>
							<?php elseif($_GET['affichage'] === 'show_formation'): ?>
								<?php foreach($datas as $data):?>
												<tr>
											<td><?=$data['formation']; ?></td>
											<td><?=$data['date_forma']; ?></td>
											<td class="text-center"><a href="modificationSupression.php?modification_competence=<?= $data['id_formation'] ?>" class="btn btn-info btn-xs">Modifier</a><a href="modificationSupression.php?supression_competence=<?= $data['id_formation'] ?>" class="btn btn-warning btn-xs">supprimer</a></td>
										</tr>
								<?php endforeach; ?>
							
							<?php endif; ?>
						
						</table>
					</div>
				</div>

	<?php else: 
		header('location:super_admin.php');
		exit();
	?>
	
<?php endif; ?>