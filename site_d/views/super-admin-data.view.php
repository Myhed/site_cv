 <?php require_once'../inc/haut.inc.php';?>

 	<?php 
 		if(isset($_GET['affichage']) && $_GET['affichage'] == 'show_competence' || $_GET['affichage'] == 'show_experience' || $_GET['affichage'] == 'show_formation'):

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
							<th class="text-center">
							<?php 
							if($name['name'] != 'id_'.$table_name){

										echo $name['name'];
										
									} 
									?>
										
								</th>
								
							<?php endfor; ?>
							<th class="text-center">Modifier</th>
							<th class="text-center">supprimer</th>
							</thead>
							
							<?php if($_GET['affichage'] === 'show_competence'): ?>
									
							<?php elseif($_GET['affichage'] === 'show_experience'): ?>
									<?php 
										foreach($datas as $data):

											
											
												
										
									?>
										<tr>
											<td><?=$data['experience']; ?></td>
											<td><?=$data['date_exp']; ?></td>
										</tr>
								<?php endforeach; ?>
							<?php elseif($_GET['affichage'] === 'show_formation'): ?>
									
									

							<?php else: header('location:super_admin.php');?>
							
							<?php endif; ?>
						
						</table>
					</div>
				</div>

	<?php else: 
		header('location:super_admin.php');
	?>
	
<?php endif; ?>