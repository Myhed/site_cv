-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 05 Janvier 2017 à 17:05
-- Version du serveur :  10.1.8-MariaDB
-- Version de PHP :  5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site_cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_competence`
--

CREATE TABLE `t_competence` (
  `id_competence` int(11) NOT NULL,
  `competence_titre` text NOT NULL,
  `competence` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_experience`
--

CREATE TABLE `t_experience` (
  `id_experience` int(11) NOT NULL,
  `titre_experience` text NOT NULL,
  `sous_titre_experience` text NOT NULL,
  `dates` date NOT NULL,
  `description` text NOT NULL,
  `id_competence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_loisir`
--

CREATE TABLE `t_loisir` (
  `id_loisir` int(11) NOT NULL,
  `titre_loisir` varchar(15) NOT NULL,
  `loisir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_titre`
--

CREATE TABLE `t_titre` (
  `id_titre` smallint(5) NOT NULL,
  `titre_cv` text NOT NULL,
  `accroche` text NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_utilisateur`
--

CREATE TABLE `t_utilisateur` (
  `id_utilisateurs` int(10) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` smallint(5) NOT NULL,
  `sexe` enum('M','F') NOT NULL,
  `adresse` text NOT NULL,
  `code_postal` varchar(5) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `pays` varchar(13) NOT NULL,
  `etat_civil` enum('Mr','M') NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `avatar` varchar(13) NOT NULL,
  `pseudo` varchar(13) NOT NULL,
  `notes` text NOT NULL,
  `statut` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_utilisateur`
--

INSERT INTO `t_utilisateur` (`id_utilisateurs`, `nom`, `prenom`, `email`, `age`, `sexe`, `adresse`, `code_postal`, `ville`, `pays`, `etat_civil`, `mdp`, `tel`, `avatar`, `pseudo`, `notes`, `statut`) VALUES
(1, 'Ben-rhouma', 'Myhed', 'capuchondu92@hotmail.fr', 20, 'M', '1 rue charles linnée', '92600', 'Asnières', 'France', 'Mr', '4658777eae50bb8c0ff9', '0613501406', 'Ducoup.jpg', 'Naytchead', 'je sais pas ', '12');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `t_competence`
--
ALTER TABLE `t_competence`
  ADD PRIMARY KEY (`id_competence`);

--
-- Index pour la table `t_experience`
--
ALTER TABLE `t_experience`
  ADD PRIMARY KEY (`id_experience`),
  ADD KEY `id_competence` (`id_competence`);

--
-- Index pour la table `t_loisir`
--
ALTER TABLE `t_loisir`
  ADD PRIMARY KEY (`id_loisir`);

--
-- Index pour la table `t_titre`
--
ALTER TABLE `t_titre`
  ADD PRIMARY KEY (`id_titre`);

--
-- Index pour la table `t_utilisateur`
--
ALTER TABLE `t_utilisateur`
  ADD PRIMARY KEY (`id_utilisateurs`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `t_competence`
--
ALTER TABLE `t_competence`
  MODIFY `id_competence` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t_experience`
--
ALTER TABLE `t_experience`
  MODIFY `id_experience` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t_loisir`
--
ALTER TABLE `t_loisir`
  MODIFY `id_loisir` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t_titre`
--
ALTER TABLE `t_titre`
  MODIFY `id_titre` smallint(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t_utilisateur`
--
ALTER TABLE `t_utilisateur`
  MODIFY `id_utilisateurs` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
