<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/admin', 'Admin#homeAdmin', 'Admin_homeAdmin'],
		['GET|POST', '/admin/messages', 'Admin#messages', 'Admin_messages'],
		['GET|POST', '/admin/competences', 'Admin#competence', 'Admin_competence'],
		['GET|POST', '/admin/portfolio', 'Admin#portfolio', 'Admin_portfolio'],
	);