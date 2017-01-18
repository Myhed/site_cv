<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model\Model;
use Model\HomeAdminModel;

class AdminController extends Controller{

	private $homeModel;

	private $messagesModel;

	private $competenceModel;

	private $portfolioModel;

	private $AllTable = array();

	private $columns = array();

	private $result = array();

	public function __construct(){

		$this->homeModel = new HomeAdminModel();
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

		$this->show('default/admin/Messages');
	}

	public function competence(){
		 $this->homeModel->setTable('t_competence');
		 $this->homeModel->getColumnName();
		$columns = $this->homeModel->data;
		$datas_competence = $this->homeModel->findAll();

		$this->show('default/admin/Competence',['datas_competence' => $datas_competence,'columns' => $columns]);
	}

	public function portfolio(){

		$this->show('default/admin/portfolio');
	}

	public function supprimer($chemin,$table,$setPrimaryKey,$id){

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

			$this->homeModel->update($_POST,$id_utilisateurs);
			$this->redirectToRoute($chemin);

		}
		$findId = $this->homeModel->find($id_utilisateurs);

		/*$getAllById = $this->homeModel->findAll*/

		$this->show('default/admin/modifier',['datas' => $findId,'table' => $table]);
	}

	public function ajouter($chemin,$table){

		$this->homeModel->setTable($table);

		if($_POST){

			$this->homeModel->insert($_POST);
			$this->redirectToRoute($chemin);
		}

		$this->show('default/admin/ajouter',['table' => $table]);
	}
}