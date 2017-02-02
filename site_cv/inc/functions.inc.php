<?php 
//Cette fonction permet de retourner la page dans laquelle actuellement ou l'utilisateur se trouve
if(!function_exists('that_is_it')){

	function that_is_it(){

		$earlie_path = $_SERVER['SCRIPT_FILENAME'];

		$end_path = explode('/',$earlie_path);

		$end_section = end($end_path);

		return $end_section;

	}
}

//Cette fonction va servir à échaper les caractères
function e($html){

	return htmlentities($html);
}

//Cette fonction va faire en sorte renvoyer si les champs on été poster ou non

if(!function_exists('verif_field')){
	// on définis un tableau qui contiendra tous nos champs
	function verif_field($fields = []){
		//On compte si dans notre tableau il y'a bien des champs
		if(count($fields) > 0){
			// Si oui on retourne true et on parcours tous notre tableau
			foreach ($fields as $field) {
				// si il trouve dans notre tableau un champs vide ou un champs qui contient des espace
				//alors il nous retourne false et nous renvoie une erreur
				if(empty($_POST[$field]) && trim($_POST[$field]) == ''){

					return false;

				}
			}

			return true;
		}

	}
}



//Cette fonction va nous vérifier si le compte existe en vérifiant l'email ou le prenom avec le mot de passe

if(!function_exists('verif_compte')){

	function verif_compte($identifiant,$mdp,$name = null){

		global $bdd;

		$verif_compte = $bdd->prepare("SELECT email,name,password FROM users WHERE email = :identifiant OR name = :identifiant  AND password = :mdp ");
		$verif_compte->bindParam(':identifiant',$identifiant,PDO::PARAM_STR);
		$verif_compte->bindParam(':mdp',$mdp,PDO::PARAM_STR);
		if($name != null){

		$verif_compte->bindParam(':name',$name,PDO::PARAM_STR);

		}

		$verif_compte->execute();

		return $verif_compte->rowCount();
	}
}

// function qui va nous donner tous les informations de l'utilisateur

if(!function_exists('get_users')){

	function get_users($email , $name = null){

		global $bdd;

		$get_users_connect =  $bdd->prepare("SELECT * FROM users WHERE email = :email");

		$get_users_connect->bindParam(':email',$email,PDO::PARAM_STR);

		$get_users_connect->execute();

		$data_users = $get_users_connect->fetch(PDO::FETCH_ASSOC);

		return $data_users;
	}
}

//Ajouter une variable session selon la pages

if(!function_exists('session_started')){

	function session_started(){
	// On déclare une variables qui contiendra toutes nos pages
	$pages = array();

	// On crée une variables qui contiendra le chemin du dossier racine du site
	$directory = '../site_cv';

	//Nous scannons tous ce qu'il y'a dans le répertoir site_cv en veillant enlevant bien les points qui nous servent à rien 
	$scanned_page = array_diff(scandir($directory), array('..', '.'));
	
	//Ensuite nous parcourons notre scanne du dossier
	foreach($scanned_page as $key => $value){
		// On explose la chaîne de caractère à .php afin qu'il nous reste que le nom du dossier
		$setKey = explode('.php',$value);
		// On veille à remplacer tous ce qu'il y'a dans notre variable $key par le nom du dossier
		//pour qu'il devienne un tableau associatif
		$key = $setKey[0];

		//On analyse toutes les extension dans le dossier site_cv et nous récupérons que les fichier
		//Contenant l'extension php
		$extension = strpos($value,'.php');
		// Si il trouve bien des extension php alors il nous les affiche
		if($extension){
			// On crée une variable extension_php qui sera un tableau
			$extension_php = array();
			//Ensuite nous faisons en sorte que dans notre tableau il y'a une clés pour chacune de nos page pour qu'il soit ensuite manipulable
			$extension_php[$key] = $value;
			//Si la clé est égale à l'index qui est l'accueil ou à la connexion
			if($key == 'index' || $key == 'connexion'){
				//On pousse dans notre tableau pages les page nécéssaire avec sa clé
				$pages [$key] = $value;
			}

		}

	}
	//On définis le chemin de notre admin 
	$directory_admin = 'admin/';
	//Nous scannons tous ce qu'il y'a dans le répertoir site_cv en veillant enlevant bien les points qui nous servent à rien 
	$scanned_admin = array_diff(scandir($directory_admin), array('..', '.'));
		//Ensuite nous parcourons notre scanne du dossier
		foreach ($scanned_admin as $key => $value) {
			// On explose la chaîne de caractère à .php afin qu'il nous reste que le nom du dossier
			$setKey = explode('.php',$value);
		// On veille à remplacer tous ce qu'il y'a dans notre variable $key par le nom du dossier
		//pour qu'il devienne un tableau associatif
			$key = $setKey[0];
			//On pousse dans notre tableau pages les page nécéssaire avec sa clé
		    $pages[$key] = $value;


		}
	//On retourne notre tableau
		
	return $pages;
	}

}
// Cette fonction va nous servir à mettre à tous nos page qui ont besoin d'une session
if(!function_exists('is_page_session')){

	function is_page_session($pages = []){

		//On explose la chaine de caractère par le '/'
		$chemin = explode('/',$_SERVER['SCRIPT_FILENAME']);
		// Ensuite nous prenons que la fin de la chaine qui à été exploser ici en loccurence c'est la page
		$page = end($chemin);
		//Nous parcourons toutes nos pages
		foreach($pages as $key => $value){
		//Si la page variable est égale à notre page acutelle alors on fait quelque chose
		if($page == $value){
			// On vérifie que si dans notre tableau pages il y'a bien notre page qui est variable
			//Alors on inclus la varible session page
			if(in_array($page,$pages)){
					//démarage de la session
					session_start();
				
				}
			}
		}
		
	}

}

