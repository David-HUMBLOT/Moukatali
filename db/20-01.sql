-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 19 jan. 2021 à 19:47
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `moukatali`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `post` text,
  `vote_for` mediumint(9) DEFAULT '0',
  `vote_against` mediumint(9) DEFAULT '0',
  `publication_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `topic_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post`, `vote_for`, `vote_against`, `publication_date`, `user_id`, `topic_id`) VALUES
(1, 'Mon premier commentaire', 0, 0, '2021-01-19 19:13:58', 7, 1),
(2, 'Mon deuxiéme commentaire', 0, 0, '2021-01-19 19:24:18', 10, 1),
(3, 'Mon troisième commentaire', 0, 0, '2021-01-19 19:32:41', 10, 1);

-- --------------------------------------------------------

--
-- Structure de la table `topics`
--

CREATE TABLE `topics` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `topic_description` text,
  `nb_comment` mediumint(9) DEFAULT NULL,
  `vote_for` mediumint(9) DEFAULT NULL,
  `vote_against` mediumint(9) DEFAULT NULL,
  `published` tinyint(1) DEFAULT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `topics`
--

INSERT INTO `topics` (`id`, `user_id`, `picture`, `title`, `topic_description`, `nb_comment`, `vote_for`, `vote_against`, `published`, `creation_date`, `update_date`) VALUES
(1, 1, '1610994134-joe-bedier-mob.jpg', 'ZOREIL DEHORS ! TER LA C LA REUNION !', '(Il d&eacute;fend la r&eacute;union. Personne nous dit quoi faire chez soi !) Koi ou en pense ? Li la bien fait ou bien lo zistoir va atisse le racisme ? Domoun en france va croire que nous l&eacute; bande sauvage ?', 0, 0, 0, 1, '2021-01-18 18:22:14', '2021-01-18 20:53:28');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$LlUcS4V0Z4Ai3n2iik.oZeqvBVQ230GImZ0PJMR4F6NRHr3zHnRqK'),
(7, 'John', '$2y$10$tjiNip9oRGECxvRwU65eBeuTLK3vTgGKyWsv56Kn1Ls2/.z2rgsZG'),
(8, 'moderator', '$2y$10$JwUheot7MdU5Cguj4.rja.CVpo8d46MFb95hCxiEfuUEksKpO3H8q'),
(9, 'author', '$2y$10$O2zdog2.e6BATFKu0P62sus4DgaTHWOmDr09C4IcEDWJKSiByIbi2'),
(10, 'user1', '$2y$10$rMh6USePDqCpfgKE6NrDTutIMYilsuwDsxz.i3htlXbx5RRopnrhC');

-- --------------------------------------------------------

--
-- Structure de la table `user_info`
--

CREATE TABLE `user_info` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `my_points` mediumint(9) DEFAULT '0',
  `vote_for` mediumint(9) DEFAULT '0',
  `vote_against` mediumint(9) DEFAULT '0',
  `my_vote_for` mediumint(9) DEFAULT '0',
  `my_vote_against` mediumint(9) DEFAULT '0',
  `role` varchar(15) DEFAULT NULL,
  `user_status` varchar(255) DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `username`, `first_name`, `last_name`, `email`, `phone`, `password`, `my_points`, `vote_for`, `vote_against`, `my_vote_for`, `my_vote_against`, `role`, `user_status`, `registration_date`, `update_date`) VALUES
(1, 1, 'admin', 'Admin', 'Admin', 'admin@admin.com', '0692000000', '$2y$10$LlUcS4V0Z4Ai3n2iik.oZeqvBVQ230GImZ0PJMR4F6NRHr3zHnRqK', NULL, NULL, NULL, NULL, NULL, 'admin', NULL, '2021-01-18 07:04:08', '2021-01-18 07:04:08'),
(3, 7, 'John', 'John', 'Doe', 'john@doe.com', '0692000000', '$2y$10$tjiNip9oRGECxvRwU65eBeuTLK3vTgGKyWsv56Kn1Ls2/.z2rgsZG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-18 07:51:50', '2021-01-18 07:51:50'),
(4, 8, 'moderator', 'Moderator', 'Moderator', 'moderator@moderator.com', NULL, '$2y$10$JwUheot7MdU5Cguj4.rja.CVpo8d46MFb95hCxiEfuUEksKpO3H8q', 0, 0, 0, 0, 0, 'moderator', NULL, '2021-01-18 12:47:26', '2021-01-18 12:47:26'),
(5, 9, 'author', 'Author', 'Author', 'author@author.com', NULL, '$2y$10$O2zdog2.e6BATFKu0P62sus4DgaTHWOmDr09C4IcEDWJKSiByIbi2', 0, 0, 0, 0, 0, 'author', NULL, '2021-01-18 12:48:33', '2021-01-18 12:48:33'),
(6, 10, 'user1', 'User1', 'User1', 'user1@user.com', '0692000000', '$2y$10$rMh6USePDqCpfgKE6NrDTutIMYilsuwDsxz.i3htlXbx5RRopnrhC', 0, 0, 0, 0, 0, NULL, NULL, '2021-01-19 18:18:13', '2021-01-19 18:18:13');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_ibfk_1` (`user_id`),
  ADD KEY `comments_ibfk_2` (`topic_id`);

--
-- Index pour la table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_info_ibfk_1` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
