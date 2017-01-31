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




