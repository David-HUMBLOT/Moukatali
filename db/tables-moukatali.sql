-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 15 jan. 2021 à 08:03
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `moukatali`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `post` text NOT NULL,
  `publication_date` datetime NOT NULL,
  `vote_for` mediumint(9) DEFAULT NULL,
  `vote_against` mediumint(9) DEFAULT NULL,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `subject_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

CREATE TABLE `topic` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `topic_description` text,
  `publication_date` datetime DEFAULT NULL,
  `nb_comment` mediumint(9) DEFAULT NULL,
  `vote_for` mediumint(9) DEFAULT NULL,
  `vote_against` mediumint(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `topic`
--

INSERT INTO `topic` (`id`, `picture`, `title`, `topic_description`, `publication_date`, `nb_comment`, `vote_for`, `vote_against`) VALUES
(1, '1610445476-boy.svg', 'Test', 'des', '2021-01-12 10:57:56', 0, 0, 0),
(2, '1610445546-hacker.svg', 'Modifier', 'Il Ã©tait une fois', '2021-01-12 13:59:06', 0, 0, 0),
(3, '1610468835-man (1).svg', 'Mon titre', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id nulla ligula. Aliquam erat volutpat.', '2021-01-12 20:27:15', 0, 0, 0),
(4, '1610471517-woman.svg', 'Gferd de kfir', 'jcejcz jchdz cjce j czbbcheu djebh ', '2021-01-12 21:11:57', 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user_info`
--

CREATE TABLE `user_info` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(320) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `point` mediumint(9) DEFAULT NULL,
  `vote_for` mediumint(9) DEFAULT NULL,
  `vote_against` mediumint(9) DEFAULT NULL,
  `my_vote_for` mediumint(9) DEFAULT NULL,
  `my_vote_against` mediumint(9) DEFAULT NULL,
  `registration_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Index pour la table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `topic` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`);
