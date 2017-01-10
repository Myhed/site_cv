<?php 
require_once"../inc/init.inc.php"; 
/*Requête pour récupérer tous les utilisateur*/
	 $query = $bdd->query("SELECT avatar,nom,prenom,email,pseudo,tel FROM t_utilisateur");
	$users_data = $query->fetch(PDO::FETCH_ASSOC);

/*On crée le tableau pour mettre toutes nos données dedans*/
	 $contenu .= '<table class="info">';
		 $contenu .= '<caption class="titre-info-tableau fa-id-card-o"><h2>Mes informations</h2></caption>';
		 				for($i = 0; $i <=$query->columnCount(); $i++ ){

		 					$name = $query->getColumnMeta($i);
		 					
		 					$contenu .='<th>'.$name['name'].'</th>';
		 				}

		 				$contenu .= '<tr>';
		 					
				/*On fait un foreach pour récupérer toutes nos valeur*/
			foreach ($users_data as $key => $value) {

		 				if($key == 'avatar'){
		 					$contenu.='<td><img src="../img/'.$value.'" height="100" width="100" class="avatar"/></td>';
		 				}else{
		 				$contenu.='<td class="">'.$value.'</td>';
		 				}
		 			}			
			
		 				$contenu .= '<tr>';
		 				
	 $contenu .= '</table>';
	 $contenu .='<hr class="hr">';
		 

?>
	 

<?php require_once"../inc/haut.inc.php";?>
		<!-- On affiche le contenu avec la variable $contenu -->
		<?=$contenu; ?>
<?php require_once"../inc/bas.inc.php";?>