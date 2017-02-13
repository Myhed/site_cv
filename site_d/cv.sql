-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 10 Février 2017 à 15:21
-- Version du serveur :  10.1.8-MariaDB
-- Version de PHP :  5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `amis`
--

CREATE TABLE `amis` (
  `id_amis` int(11) NOT NULL,
  `id_expediteur` int(11) NOT NULL,
  `id_destinataire` int(11) NOT NULL,
  `choix` enum('En-attente','Accepter','Refuser') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `amis`
--

INSERT INTO `amis` (`id_amis`, `id_expediteur`, `id_destinataire`, `choix`) VALUES
(6, 3, 2, 'Accepter'),
(7, 1, 2, 'Accepter'),
(8, 2, 3, 'Accepter'),
(9, 3, 1, 'Accepter'),
(10, 1, 3, 'Accepter'),
(11, 2, 1, 'Accepter');

-- --------------------------------------------------------

--
-- Structure de la table `codes`
--

CREATE TABLE `codes` (
  `id_code` int(11) NOT NULL,
  `code` longtext NOT NULL,
  `titre_post` varchar(255) NOT NULL,
  `langage_use` varchar(255) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `codes`
--

INSERT INTO `codes` (`id_code`, `code`, `titre_post`, `langage_use`, `id_users`) VALUES
(1, 'yo', 'dqz', 'dqzdq', 1),
(2, '<?php require_once''inc/haut.inc.php''; ?>\r\n\r\n        <div class="section-a">\r\n          <div class="container">\r\n                <div class="row">\r\n                  <div class="col-md-4">\r\n                      <i class="fa fa-html5"></i>\r\n                      <h3>Apprentissage du html 5</h3>\r\n                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime hic excepturi, at quidem non beatae. Quos sit necessitatibus, ducimus, saepe sapiente sint esse, quo, odit dolor assumenda in praesentium corporis.</p>\r\n                  </div>\r\n                  <div class="col-md-4">\r\n                      <i class="fa fa-gear"></i> \r\n                      <h3>Site fait avec SASS et GULP</h3>\r\n                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime hic excepturi, at quidem non beatae. Quos sit necessitatibus, ducimus, saepe sapiente sint esse, quo, odit dolor assumenda in praesentium corporis.</p>\r\n                  </div>\r\n                  <div class="col-md-4">\r\n                      <i class="fa fa-lightbulb-o"></i> \r\n                      <h3>Customizable</h3>\r\n                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime hic excepturi, at quidem non beatae. Quos sit necessitatibus, ducimus, saepe sapiente sint esse, quo, odit dolor assumenda in praesentium corporis.</p>\r\n                  </div>\r\n                </div>\r\n          </div>\r\n        </div>\r\n\r\n        <div class="section-b">\r\n          <div class="container">\r\n                <div class="row">\r\n                  <div class="col-md-6">\r\n                      \r\n                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">\r\n                                   <div class="panel panel-default">\r\n                                         <div class="panel-heading" role="tab" id="headingOne">\r\n                                               <h4 class="panel-title">\r\n                                                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">\r\n                                                      Collapsible Group Item #1\r\n                                                       </a>\r\n                                              </h4>\r\n                                        </div>\r\n                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">\r\n                                              <div class="panel-body">\r\n                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.\r\n                                             </div>\r\n                                      </div>\r\n                              <!-- FIN de la div panel-collapse -->\r\n                                </div>\r\n                         <!-- FIN de la div panel panel-default -->\r\n                        </div>\r\n                    <!-- FIN de la div panel-group -->\r\n                      \r\n              </div>\r\n              <!-- FIN de la div col-md-6 -->\r\n                  <div class="col-md-6">\r\n\r\n                         <div class="progress skill-bar ">\r\n                               <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">\r\n                               <span class="skill">HTML <i class="val">100%</i></span>\r\n                              </div>\r\n                        </div>\r\n                \r\n                     \r\n                          </div>\r\n                     <!-- FIN de la div col-md-6 -->\r\n                    </div>\r\n                <!-- FIN de la div row -->\r\n              </div>\r\n                <!-- FIN de la div container -->\r\n        </div>\r\n        <!-- FIN de la div section-b -->\r\n\r\n        <div class="section-c"> \r\n            <div class="container"> \r\n                <div class="row"> \r\n                    <div class="col-md-8 col-md-offset-2">\r\n                    <h2>S''inscrire Ã  ma newsletter</h2>\r\n                        <form action="#" method="POST">\r\n                            <div class="form-group">\r\n                              <input type="text" placeholder="Saisissez votre email..." class="form-control input-lg">\r\n                            </div>\r\n                            <button class="btn btn-primary">S''inscrire</button>\r\n                        </form>\r\n                    </div>\r\n                </div>\r\n           </div>\r\n<?php require_once''inc/bas.inc.php''; ?>', 'COmment faire un strcuture html', 'html css', 1),
(3, '<?php require_once''inc/haut.inc.php''; ?>\r\n\r\n        <div class="section-a">\r\n          <div class="container">\r\n                <div class="row">\r\n                  <div class="col-md-4">\r\n                      <i class="fa fa-html5"></i>\r\n                      <h3>Apprentissage du html 5</h3>\r\n                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime hic excepturi, at quidem non beatae. Quos sit necessitatibus, ducimus, saepe sapiente sint esse, quo, odit dolor assumenda in praesentium corporis.</p>\r\n                  </div>\r\n                  <div class="col-md-4">\r\n                      <i class="fa fa-gear"></i> \r\n                      <h3>Site fait avec SASS et GULP</h3>\r\n                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime hic excepturi, at quidem non beatae. Quos sit necessitatibus, ducimus, saepe sapiente sint esse, quo, odit dolor assumenda in praesentium corporis.</p>\r\n                  </div>\r\n                  <div class="col-md-4">\r\n                      <i class="fa fa-lightbulb-o"></i> \r\n                      <h3>Customizable</h3>\r\n                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime hic excepturi, at quidem non beatae. Quos sit necessitatibus, ducimus, saepe sapiente sint esse, quo, odit dolor assumenda in praesentium corporis.</p>\r\n                  </div>\r\n                </div>\r\n          </div>\r\n        </div>\r\n\r\n        <div class="section-b">\r\n          <div class="container">\r\n                <div class="row">\r\n                  <div class="col-md-6">\r\n                      \r\n                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">\r\n                                   <div class="panel panel-default">\r\n                                         <div class="panel-heading" role="tab" id="headingOne">\r\n                                               <h4 class="panel-title">\r\n                                                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">\r\n                                                      Collapsible Group Item #1\r\n                                                       </a>\r\n                                              </h4>\r\n                                        </div>\r\n                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">\r\n                                              <div class="panel-body">\r\n                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.\r\n                                             </div>\r\n                                      </div>\r\n                              <!-- FIN de la div panel-collapse -->\r\n                                </div>\r\n                         <!-- FIN de la div panel panel-default -->\r\n                        </div>\r\n                    <!-- FIN de la div panel-group -->\r\n                      \r\n              </div>\r\n              <!-- FIN de la div col-md-6 -->\r\n                  <div class="col-md-6">\r\n\r\n                         <div class="progress skill-bar ">\r\n                               <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">\r\n                               <span class="skill">HTML <i class="val">100%</i></span>\r\n                              </div>\r\n                        </div>\r\n                \r\n                     \r\n                          </div>\r\n                     <!-- FIN de la div col-md-6 -->\r\n                    </div>\r\n                <!-- FIN de la div row -->\r\n              </div>\r\n                <!-- FIN de la div container -->\r\n        </div>\r\n        <!-- FIN de la div section-b -->\r\n\r\n        <div class="section-c"> \r\n            <div class="container"> \r\n                <div class="row"> \r\n                    <div class="col-md-8 col-md-offset-2">\r\n                    <h2>S''inscrire Ã  ma newsletter</h2>\r\n                        <form action="#" method="POST">\r\n                            <div class="form-group">\r\n                              <input type="text" placeholder="Saisissez votre email..." class="form-control input-lg">\r\n                            </div>\r\n                            <button class="btn btn-primary">S''inscrire</button>\r\n                        </form>\r\n                    </div>\r\n                </div>\r\n           </div>\r\n<?php require_once''inc/bas.inc.php''; ?>', 'qdzdq', 'qzdqzdq', 1),
(4, '<?php require_once''../inc/haut.inc.php''; ?>\r\n		\r\n		<div id="main-content">\r\n			\r\n			<div id="main-content-share-code">\r\n			\r\n			<pre class="prettyprint linenums"><?= e($data->code);?></pre>\r\n\r\n				<div class="btn-group nav">	\r\n					<a class="btn btn-warning" href="share_code.php?id=<?= $_GET[''id'']?>">Cloner</a>\r\n					<a  class="btn btn-info" href="share_code.php">Nouveau</a>\r\n				</div>\r\n			</div>\r\n\r\n		</div>\r\n		\r\n<?php require_once''../inc/bas.inc.php''; ?>\r\n<script src="../assets/js/google-code-prettify/src/prettify.js"></script>\r\n<script>\r\n	prettyPrint();\r\n</script>', 'Comment faire une structure en js', 'js et html', 1),
(5, '<!DOCTYPE html>\r\n<html lang="fr">\r\n  <head>\r\n    <meta charset="utf-8">\r\n    <meta http-equiv="X-UA-Compatible" content="IE=edge">\r\n    <meta name="viewport" content="width=device-width, initial-scale=1">\r\n    <meta description="Cv de Myhed Ben-Rhouma DÃ©veloppeur/IntÃ©grateur WEB">\r\n    <meta keywords="myhed, ben-Rhouma , myhed ben-Rhouma, developpeur web, ">\r\n    <title>Starter Template for Bootstrap</title>\r\n    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">\r\n    <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">\r\n    <link rel="stylesheet" href="<?= WEBROOT ?>assets/js/google-code-prettify/src/prettify.css">\r\n \r\n        \r\n      \r\n    \r\n      <link rel="stylesheet" href="<?= WEBROOT ?>assets/css/app.css">\r\n     \r\n    <!-- Bootstrap core CSS -->\r\n\r\n        \r\n    <!-- Just for debugging purposes. Don''t actually copy these 2 lines! -->\r\n    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->\r\n\r\n    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->\r\n    <!--[if lt IE 9]>\r\n      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>\r\n      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>\r\n    <![endif]-->\r\n  </head>\r\n\r\n  <body>\r\n', 'Comment faire une structure html', 'html', 2),
(6, '<!DOCTYPE html>\r\n<html lang="fr">\r\n  <head>\r\n    <meta charset="utf-8">\r\n    <meta http-equiv="X-UA-Compatible" content="IE=edge">\r\n    <meta name="viewport" content="width=device-width, initial-scale=1">\r\n    <meta description="Cv de Myhed Ben-Rhouma DÃ©veloppeur/IntÃ©grateur WEB">\r\n    <meta keywords="myhed, ben-Rhouma , myhed ben-Rhouma, developpeur web, ">\r\n    <title>Starter Template for Bootstrap</title>\r\n    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">\r\n    <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">\r\n    <link rel="stylesheet" href="<?= WEBROOT ?>assets/js/google-code-prettify/src/prettify.css">\r\n \r\n        \r\n      \r\n    \r\n      <link rel="stylesheet" href="<?= WEBROOT ?>assets/css/app.css">\r\n     \r\n    <!-- Bootstrap core CSS -->\r\n\r\n        \r\n    <!-- Just for debugging purposes. Don''t actually copy these 2 lines! -->\r\n    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->\r\n\r\n    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->\r\n    <!--[if lt IE 9]>\r\n      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>\r\n      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>\r\n    <![endif]-->\r\n  </head>\r\n\r\n  <body>\r\n', 'dqz', 'dqzd', 2),
(7, '<!DOCTYPE html>\r\n<html lang="fr">\r\n  <head>\r\n    <meta charset="utf-8">\r\n    <meta http-equiv="X-UA-Compatible" content="IE=edge">\r\n    <meta name="viewport" content="width=device-width, initial-scale=1">\r\n    <meta description="Cv de Myhed Ben-Rhouma DÃ©veloppeur/IntÃ©grateur WEB">\r\n    <meta keywords="myhed, ben-Rhouma , myhed ben-Rhouma, developpeur web, ">\r\n    <title>Starter Template for Bootstrap</title>\r\n    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">\r\n    <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">\r\n    <link rel="stylesheet" href="<?= WEBROOT ?>assets/js/google-code-prettify/src/prettify.css">\r\n \r\n        \r\n      \r\n    \r\n      <link rel="stylesheet" href="<?= WEBROssssssssOT ?>assets/css/app.css">\r\n     \r\n    <!-- Bootstrap core CSS -->\r\n\r\n        \r\n    <!-- Just for debugging purposes. Don''t actually copy these 2 lines! -->\r\n    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->\r\n\r\n    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->\r\n    <!--[if lt IE 9]>\r\n      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>\r\n      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>\r\n    <![endif]-->\r\n  </head>\r\n\r\n  <body>\r\n', 'qdz', 'qzdqdzq', 2),
(8, '$(function(){\r\n\r\n	$(''#search'').keyup(function(){\r\n\r\n		var searchlength = $(this).val().length\r\n\r\n		if(searchlength >= 2){\r\n			var search = $(this).val()\r\n			var data = $.trim(''search=''+search);\r\n			if($.trim(search)){\r\n\r\n			\r\n			$.ajax({\r\n\r\n				type: ''GET'',\r\n				url : ''result.php'',\r\n				data : data,\r\n				dataType:''html'',\r\n				success: function(html){\r\n					\r\n\r\n					$(''#result'').css({\r\n\r\n						display:''block''\r\n					});\r\n					$("#result").append(html).show();\r\n\r\n						console.log(html);\r\n					\r\n				}\r\n\r\n			});\r\n		}\r\n\r\n			}else if(searchlength < 1){\r\n\r\n				$(''#result'').html('''').show();\r\n				$(''#result'').css({\r\n\r\n					display:''none''\r\n				});\r\n			}\r\n	});\r\n\r\n});', 'Recherche en AJAX', 'ajax + js + php', 1),
(9, '$(function(){\r\n\r\n	$(''#search'').keyup(function(){\r\n\r\n		var searchlength = $(this).val().length\r\n\r\n		if(searchlength >= 2){\r\n			var search = $(this).val()\r\n			var data = $.trim(''search=''+search);\r\n			if($.trim(search)){\r\n\r\n			\r\n			$.ajax({\r\n\r\n				type: ''GET'',\r\n				url : ''result.php'',\r\n				data : data,\r\n				dataType:''html'',\r\n				success: function(html){\r\n					\r\n\r\n					$(''#result'').css({\r\n\r\n						display:''block''\r\n					});\r\n					$("#result").append(html).show();\r\n\r\n						console.log(html);\r\n					\r\n				}\r\n\r\n			});\r\n		}\r\n\r\n			}else if(searchlength < 1){\r\n\r\n				$(''#result'').html('''').show();\r\n				$(''#result'').css({\r\n\r\n					display:''none''\r\n				});\r\n			}\r\n	});\r\n\r\n});', 'Recherche en AJAX', 'ajax + php + js', 1);

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `id_competence` int(11) NOT NULL,
  `competence` varchar(100) NOT NULL,
  `niveau` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `id_experience` int(11) NOT NULL,
  `experience` longtext NOT NULL,
  `date` longtext NOT NULL,
  `acquisition` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_formation` int(11) NOT NULL,
  `formation` longtext,
  `date` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `infos_users`
--

CREATE TABLE `infos_users` (
  `id_infos_users` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `infos_users`
--

INSERT INTO `infos_users` (`id_infos_users`, `nom`, `prenom`, `ville`, `tel`, `description`, `id_users`) VALUES
(1, 'Ben', 'Myhed', 'AsniÃ¨res', '01 47 94 52 63', 'Je suis developpeur web :)', 1),
(2, 'dqzd', 'dqz', 'dqz', 'dqz', 'a', 2),
(3, 'Jean', 'yves', 'AsniÃ¨res', '06 13 ', 'Je suis dÃ©veloppeur web junior', 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sexe` enum('m','f') NOT NULL,
  `statut_compte` enum('gelé','actif','En-attente') NOT NULL,
  `grade` enum('utilisateur','admin','super-admin') NOT NULL DEFAULT 'utilisateur',
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_users`, `pseudo`, `email`, `password`, `sexe`, `statut_compte`, `grade`, `image`) VALUES
(1, 'Myhed', 'capuchondu92@hotmail.fr', 'myhed88', 'm', 'actif', 'super-admin', 'https://pbs.twimg.com/profile_images/548978935011475456/fnLFojjT.jpeg'),
(2, 'Thomas', 'Thomasdu92@hotmail.fr', '123456', 'm', 'actif', 'utilisateur', 'http://www.freeiconspng.com/uploads/user-icon-png-person-user-profile-icon-20.png'),
(3, 'JeanYves', 'JeanYvesdu92@hotmail.fr', '123456', 'm', 'actif', 'utilisateur', 'https://cdn.pixabay.com/photo/2016/08/31/11/54/user-1633249_960_720.png'),
(4, 'Myhed', 'myheddu92@hotmail.fr', '123456', 'm', 'actif', 'utilisateur', 'http://www.freeiconspng.com/uploads/-avatar-people-person-profile-user-women-icon--icon-search-engine-23.png');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `amis`
--
ALTER TABLE `amis`
  ADD PRIMARY KEY (`id_amis`);

--
-- Index pour la table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id_code`);

--
-- Index pour la table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`id_competence`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id_experience`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_formation`);

--
-- Index pour la table `infos_users`
--
ALTER TABLE `infos_users`
  ADD PRIMARY KEY (`id_infos_users`),
  ADD KEY `id_users` (`id_users`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `amis`
--
ALTER TABLE `amis`
  MODIFY `id_amis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `codes`
--
ALTER TABLE `codes`
  MODIFY `id_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `competence`
--
ALTER TABLE `competence`
  MODIFY `id_competence` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `id_experience` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_formation` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `infos_users`
--
ALTER TABLE `infos_users`
  MODIFY `id_infos_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
