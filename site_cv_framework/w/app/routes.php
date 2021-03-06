<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/Auth', 'Default#Auth', 'default_Auth'],

		['GET', '/admin', 'Admin#homeAdmin', 'Admin_homeAdmin'],
		['GET|POST', '/admin/messages', 'Admin#messages', 'Admin_messages'],
		['GET|POST', '/admin/competences', 'Admin#competence', 'Admin_competence'],
		['GET|POST', '/admin/experience', 'Admin#experience', 'Admin_experience'],
		['GET|POST', '/admin/supprimer/[:chemin]/[:table]/[:setPrimaryKey]/[i:id]', 'Admin#supprimer', 'Admin_supprimer'],
		['GET|POST', '/admin/modifier/[:chemin]/[:table]/[:setPrimaryKey]/[i:id]', 'Admin#modifier', 'Admin_modifier'],
		['GET|POST','/admin/ajouter/[:chemin]/[:table]','Admin#ajouter','Admin_ajouter'],
		['GET|POST','/admin/test','Admin#test','Admin_test'],
		['GET|POST','/admin/deconnexion','Admin#deconnexion','Admin_deconnexion'],
	);