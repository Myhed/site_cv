<?php 
	 $columnsTable = array();
	 $columnsT_utilisateur = array();
	 $columnsT_competence = array();
	 $columnsT_experience = array(); 
	 $dataUtilisateurs = array();

	 foreach ($columns as $key => $value) {

	 	$columnsTitle [$columns[0][0]['name']] = $columns[0][0] ;
	 	$columnsTitle [$columns[1][17]['name']] = $columns[1][17] ;
	 	$columnsTitle [$columns[2][20]['name']] = $columns[2][20] ;

	 	



	 	$columnsT_utilisateur[$columns[1][0]['table']] = $columns[1];

	 	$t_competence = array_slice($columns[2], 17, 19);

	 	$columnsT_competence[$t_competence[0]['table']] = $t_competence;

	 	

	 

	 }
	
	 $columnsT_experience = array_slice($columnsT_competence['t_competence'],3,8);
	 $columnsT_competence = array_slice($columnsT_competence['t_competence'],0,2);
	  $columnsT_utilisateur = array_slice($columnsT_utilisateur['t_utilisateur'], 0, 17);

?>

<?php $this->layout('layout.admin',array('title' => 'Home',
										'LayoutLateralBar' => 'Mes infos'	)); ?>

<?php $this->start('main_content');?>


<?php $this->stop('main_content');?>

<?php $this->start('sidebar');?>

	<div class="table-responsive">
		<table class="table">
	<?php
		foreach ($columnsT_utilisateur as $key => $value) {

			if($key%2){
					
			echo'<th class="text-center">'.$value['name'].'</th>';

			}
		}

	  
	  		foreach ($datas[0] as $key => $value) {
			
			echo'<tr>';
				echo'<td>'.$value['nom'].'</td>';
				echo'<td>'.$value['prenom'].'</td>';
				echo'<td>'.$value['sexe'].'</td>';
				echo'<td>'.$value['code_postal'].'</td>';
				echo'<td>'.$value['pays'].'</td>';
				echo'<td>'.$value['mdp'].'</td>';
				echo'<td>'.$value['avatar'].'</td>';
				echo'<td>'.$value['notes'].'</td>';
			echo'</tr>';
		}
	?>
	<tr>
	<td></td>
		<td><a href="<?=$this->url('Admin_modifier' , ['chemin' => 'Admin_homeAdmin','table' => $columns[0][0]['table'],'setPrimaryKey' => $columns[0][0]['name'],'id' => $datas[0][0]['id_utilisateurs']]) ?>" class="btn btn-warning ">Modification</a></td>
		<td><a href="<?=$this->url('Admin_supprimer' , ['chemin' => 'Admin_homeAdmin','table' => $columns[0][0]['table'],'setPrimaryKey' => $columns[0][0]['name'],'id' => $datas[0][0]['id_utilisateurs']]) ?>" class="btn btn-danger ">supprimer</a></td>

		<td><a href="<?=$this->url('Admin_ajouter',['chemin' => 'Admin_homeAdmin','table' => $columns[0][0]['table']]);?>" class="btn btn-info ">Ajouter</a></td>
		</tr>
		</table>
	</div>

<?php $this->stop('sidebar');?>