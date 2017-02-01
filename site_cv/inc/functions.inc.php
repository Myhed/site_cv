<?php 
//Cette fonction permet de retourner la page dans laquelle actuellement ou l'utilisateur ce trouve
if(!function_exists('that_is_it')){

	function that_is_it(){

		$earlie_path = $_SERVER['SCRIPT_FILENAME'];

		$end_path = explode('/',$earlie_path);

		$end_section = end($end_path);

		return $end_section;

	}
}

//Cette fonctions va servir à échaper les caractère
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
