<?php $this->layout('layout.admin',array('title' => 'Home',
										'LayoutLateralBar' => 'Mes infos'	)); ?>

<?php $this->start('main_content');?>
	<div class="">
		
	
	</table>
	<hr class="hr">
	</div>
<?php $this->stop('main_content');?>

<?php $this->start('sidebar');?>


	<table class="table">
	<?php
	$titre_champs = array();
	foreach ($columns as $key => $value) {
	 		
		$titre_champs [$value['name']] = $value['name'];
	 } 

	 echo'<tr>
			<th class="text-center">'.$titre_champs['nom'].'</th>
			<td>'.$datas[0]['nom'].'</td>
		</tr>';
		echo'<tr>
			<th class="text-center">'.$titre_champs['prenom'].'</th>
			<td>'.$datas[0]['prenom'].'</td>
		</tr>';
		echo'<tr>
			<th class="text-center">'.$titre_champs['email'].'</th>
			<td>'.$datas[0]['email'].'</td>
		</tr>';
		echo'<tr>
			<th class="text-center">'.$titre_champs['age'].'</th>
			<td>'.$datas[0]['age'].'</td>
		</tr>';
		echo'<tr>
			<th class="text-center">'.$titre_champs['sexe'].'</th>
			<td>'.$datas[0]['sexe'].'</td>
		</tr>';
		echo'<tr>
			<th class="text-center">'.$titre_champs['adresse'].'</th>
			<td>'.$datas[0]['adresse'].'</td>
		</tr>';
		echo'<tr>
			<th class="text-center">'.$titre_champs['code_postal'].'</th>
			<td>'.$datas[0]['code_postal'].'</td>
		</tr>';	echo'<tr>
			<th class="text-center">'.$titre_champs['ville'].'</th>
			<td>'.$datas[0]['ville'].'</td>
		</tr>';	echo'<tr>
			<th class="text-center">'.$titre_champs['pays'].'</th>
			<td>'.$datas[0]['pays'].'</td>
		</tr>';	echo'<tr>
			<th class="text-center">'.$titre_champs['etat_civil'].'</th>
			<td>'.$datas[0]['etat_civil'].'</td>
		</tr>';	echo'<tr>
			<th class="text-center">'.$titre_champs['mdp'].'</th>
			<td>'.$datas[0]['mdp'].'</td>
		</tr>';	echo'<tr>
			<th class="text-center">'.$titre_champs['tel'].'</th>
			<td>'.$datas[0]['tel'].'</td>
		</tr>';	echo'<tr>
			<th class="text-center">'.$titre_champs['avatar'].'</th>
			<td>'.$datas[0]['avatar'].'</td>
		</tr>';	echo'<tr>
			<th class="text-center">'.$titre_champs['pseudo'].'</th>
			<td>'.$datas[0]['pseudo'].'</td>
		</tr>';	echo'<tr>
			<th class="text-center">'.$titre_champs['notes'].'</th>
			<td>'.$datas[0]['notes'].'</td>
		</tr>';	echo'<tr>
			<th class="text-center">'.$titre_champs['statut'].'</th>
			<td>'.$datas[0]['statut'].'</td>
		</tr>';

		
	?> 
	</table>

<?php $this->stop('sidebar');?>