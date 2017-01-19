<?php

namespace Controller;

use \W\Controller\Controller;
use Model\HomeModel;


class DefaultController extends Controller
{

		private $homeModel = '';
		

	 public function __construct(){

	 	$this->homeModel = new HomeModel();
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

	

}