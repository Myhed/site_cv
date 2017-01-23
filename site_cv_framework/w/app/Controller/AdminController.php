<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model\Model;
use \W\Security\AuthentificationModel as Auth;
use \W\Security\AuthorizationModel as Author;
use Model\HomeAdminModel;

class AdminController extends Controller{

	private $homeModel;

	private $messagesModel;

	private $competenceModel;

	private $portfolioModel;

	private $AllTable = array();

	private $columns = array();

	private $result = array();

	private $Auth = '';

	private $Author = '';
	public function __construct(){

		$this->homeModel = new HomeAdminModel();
		$this->Auth = new Auth();
		$this->Author = new Author();
		 $this->homeModel->setTable('t_utilisateur');
			 $this->AllTable [] =$this->homeModel->getTable();
		 $this->homeModel->setTable('t_competence');
		 $this->AllTable [] = $this->homeModel->getTable();
		 $this->homeModel->setTable('t_experience');
		  $this->AllTable [] =$this->homeModel->getTable();

	}

	public function homeAdmin(){

			foreach($this->AllTable as $table){

				$this->homeModel->setTable($table);
			
			$this->homeModel->getColumnName();
			$columns[] = $this->homeModel->data;
			$result[] = $this->homeModel->findAll();
			
				
			}




		$this->show('default/admin/home', array('datas' => $result,'columns' => $columns));
					
	}

	public function messages(){
			$this->Author->isGranted('Admin');
		$this->show('default/admin/Messages');
	}

	public function competence(){
		 $this->homeModel->setTable('t_competence');
		 $this->homeModel->getColumnName();
		$columns = $this->homeModel->data;
		$datas_competence = $this->homeModel->findAll();
		$this->Author->isGranted('Admin');
		$this->show('default/admin/Competence',['datas_competence' => $datas_competence,'columns' => $columns]);
	}

	public function experience(){

		$this->homeModel->setTable('t_experience');

		$experiences = $this->homeModel->findAll();
		$this->homeModel->getColumnName();
		$columns = $this->homeModel->data;
		$this->Author->isGranted('Admin');
		$this->show('default/admin/experience',array('experiences' => $experiences,'columns' => $columns));
	}

	public function supprimer($chemin,$table,$setPrimaryKey,$id){
			$this->Author->isGranted('Admin');
			$this->homeModel->setTable($table);
			 $this->homeModel->setPrimaryKey($setPrimaryKey);
			 
		if(!$this->homeModel->ifUserExist($id)){

			$this->redirectToRoute($chemin);

		}

		$this->homeModel->delete($id);
		$this->redirectToRoute($chemin);

	}

	public function modifier($chemin,$table,$setPrimaryKey,$id_utilisateurs){
		
			$this->homeModel->setTable($table);
			 $this->homeModel->setPrimaryKey($setPrimaryKey);
			 
		if(!$this->homeModel->ifUserExist($id_utilisateurs)){

			$this->redirectToRoute($chemin);

		}

		if($_POST){

			if(isset($_POST['mdp'])){

				$_POST['mdp'] = $this->Auth->hashPassword($_POST['mdp']);
			
			}

			$this->homeModel->update($_POST,$id_utilisateurs);
			$this->redirectToRoute($chemin);

		}
		$findId = $this->homeModel->find($id_utilisateurs);

		/*$getAllById = $this->homeModel->findAll*/
			/*$this->Author->isGranted('Admin');*/
		$this->show('default/admin/modifier',['datas' => $findId,'table' => $table]);
	}

	public function ajouter($chemin,$table){

		$this->homeModel->setTable($table);

		if($_POST){

			$this->homeModel->insert($_POST);
			$this->redirectToRoute($chemin);
		}

		$this->show('default/admin/ajouter',array('table' => $table));
	}

	public function deconnexion(){

		$this->Auth->logUserOut();
		$this->Author->isGranted('Admin');
		$this->redirectToRoute('default_Auth');
	}


	public function test(){

			foreach($this->AllTable as $table){

					$this->homeModel->setTable($table);
				
				$this->homeModel->getColumnName();
				$columns[] = $this->homeModel->data;
				$result[] = $this->homeModel->findAll();
				$this->Auth = new Auth();


		}
		$this->Author->isGranted('Admin');
			$this->show('default/admin/test',array('datas' => $result,'columns' => $columns));

	}
}