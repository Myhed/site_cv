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

	public function __construct(){

		$this->homeModel = new HomeAdminModel();
	}

	public function homeAdmin(){

			$this->homeModel->setTable('t_utilisateur');
			$this->homeModel->getColumnName();
			$columns = $this->homeModel->data;
			$result = $this->homeModel->findAll();

		$this->show('default/admin/home', array('datas' => $result,'columns' => $columns));
	}

	public function messages(){

		$this->show('default/admin/Messages');
	}

	public function competence(){

		$this->show('default/admin/Competence');
	}

	public function portfolio(){

		$this->show('default/admin/portfolio');
	}
}