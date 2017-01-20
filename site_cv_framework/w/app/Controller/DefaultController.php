<?php

namespace Controller;

use \W\Controller\Controller;
use Model\HomeModel;
use \W\Model\Model;
use \W\Security\AuthentificationModel as Auth;
use \W\Security\AuthorizationModel;
use W\Model\UsersModel;

class DefaultController extends Controller
{

		private $homeModel = '';
		private $Auth = '';
		private $Authorization = '';
		private $UsersModel = '';
		

	 public function __construct(){

	 	$this->homeModel = new HomeModel();
	 	$this->Auth = new Auth();
	 	$this->Authorization = new AuthorizationModel();
	 	$this->UsersModel = new UsersModel();
	 }

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{

		$this->homeModel->setTable('t_experience');
		$experiences = $this->homeModel->findAll();

		$this->show('default/home', array('experiences' => $experiences));
	}

	public function Auth(){

	

		$this->homeModel->setTable('t_utilisateur');
		$this->homeModel->setPrimaryKey('id_utilisateurs');
		
		if($_POST){

			$errors = array();
		
			$auth = $this->Auth->isValidLoginInfo($_POST['email'],$_POST['mdp']);
			if($auth){

				$datasUsers = $this->homeModel->find($auth);

				$this->Auth->logUserIn($datasUsers);

				$this->redirectToRoute('Admin_homeAdmin');

			}else{

				$errors['errors'] = "Mot de passe ou nom d'identifiant incorrecte";

			}
		}
			
			$this->show('default/Auth.php',array('errors' => isset($errors) ? $errors : null));


	}

	

}