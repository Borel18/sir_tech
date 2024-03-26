-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 26 mars 2024 à 01:07
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `espace_membre`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `confirmation_token`, `confirmed_at`, `reset_token`, `reset_at`, `remember_token`) VALUES
(2, 'kenfack', 'kenfack@gmail.com', '$2y$10$H0xwys4u46fIMFGhj9V78uB0mVjxR4WbtM1io4MAGgXNN3W2HvRnO', NULL, '2023-08-25 15:27:50', 'F1udnRTYmE93IHT3ClUC7zvQpbNwLI2XwV5NAcEJN5Grt3QSnekyHPNIDXMYsDVFaMt8k9rkz5Ap64T7hnIZJGk8LDbvDKNGMNJ9', '2023-09-29 20:08:02', 'kw2tpoXMHH1e9xSwZnmzKoxnZk6d7CYCdpp01XSC8gBNNJybvOuneKyZXvOa0HQKTUVSBNnW4kzgaUrOH45h9yxd7KOauPYh4hkd'),
(4, 'borel', 'borel4596@gmail.com', '$2y$10$bvKAlKyznr6y0H9jFWcSreezWdXSv3Z1//g3BDJuT3HtXeoFht5lq', NULL, '2023-11-05 11:08:41', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `image`) VALUES
(1, 'camera ', './img/shop02.png'),
(2, 'ordinateur', './img/shop01.png');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `prix_total` int(11) NOT NULL,
  `email_cust` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `statut` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `prix_total`, `email_cust`, `date`, `statut`) VALUES
(1, 54000, 'borel4596@gmail.com', '2024-02-18', NULL),
(2, 1450000, 'borel4596@gmail.com', '2024-02-18', NULL),
(3, 2974000, 'borel4596@gmail.com', '2024-02-18', NULL),
(4, 79000, 'borel4596@gmail.com', '2024-02-19', NULL),
(5, 5000, 'borel4596@gmail.com', '2024-02-19', NULL),
(6, 49000, 'langouo30@gmail.com', '2024-02-21', NULL),
(7, 1450000, 'borel4596@gmail.com', '2024-03-06', NULL),
(8, 1450000, 'borel4596@gmail.com', '2024-03-06', NULL),
(9, 1450000, 'borel4596@gmail.com', '2024-03-06', NULL),
(10, 1455000, 'borel4596@gmail.com', '2024-03-06', NULL),
(11, 1499000, 'borel4596@gmail.com', '2024-03-14', NULL),
(12, 1499000, 'borel4596@gmail.com', '2024-03-14', NULL),
(13, 1499000, 'borel4596@gmail.com', '2024-03-14', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `com_produit`
--

CREATE TABLE `com_produit` (
  `id` int(11) NOT NULL,
  `id_com` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `statut` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `com_produit`
--

INSERT INTO `com_produit` (`id`, `id_com`, `id_prod`, `quantite`, `statut`) VALUES
(1, 1, 25, 1, 'annule'),
(2, 1, 26, 1, 'annule'),
(3, 2, 24, 1, 'annule'),
(4, 3, 24, 2, 'annule'),
(5, 3, 26, 1, 'en_cour'),
(6, 3, 27, 1, 'en_cour'),
(7, 4, 25, 1, 'en_cour'),
(8, 4, 26, 1, 'en_cour'),
(9, 4, 27, 1, 'en_cour'),
(10, 5, 25, 1, 'en_cour'),
(11, 6, 26, 1, 'annule'),
(12, 7, 24, 1, NULL),
(13, 8, 24, 1, NULL),
(14, 9, 24, 1, NULL),
(15, 10, 24, 1, NULL),
(16, 10, 25, 1, NULL),
(17, 11, 24, 1, NULL),
(18, 11, 26, 1, NULL),
(19, 12, 24, 1, NULL),
(20, 12, 26, 1, NULL),
(21, 13, 24, 1, NULL),
(22, 13, 26, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `custumer`
--

CREATE TABLE `custumer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `tel` int(50) NOT NULL,
  `date` date DEFAULT NULL,
  `pp` varchar(255) NOT NULL DEFAULT 'default-pp.png',
  `id_com` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `custumer`
--

INSERT INTO `custumer` (`id`, `name`, `last_name`, `email`, `address`, `city`, `pays`, `tel`, `date`, `pp`, `id_com`) VALUES
(10, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-11', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(12, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-11', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(13, 'bouya', 'boreldylan', 'borel4596@gmail.com', 'foto', 'dschan', 'Cameroun', 0, '2024-02-11', 'default-pp.png', 0),
(14, 'bouya', 'boreldylan', 'borel4596@gmail.com', 'foto', 'dschan', 'Cameroun', 65412358, '2024-02-11', 'default-pp.png', 0),
(15, 'bouya', 'boreldylan', 'borel45@gmail.com', 'foto', 'dschan', 'Cameroun', 65412358, '2024-02-11', 'default-pp.png', 0),
(16, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-11', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(17, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-11', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(18, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-11', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(19, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-11', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(20, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-11', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(21, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-11', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(22, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-11', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(23, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-11', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(24, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-11', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(25, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-11', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(26, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-11', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(27, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-11', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(28, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-11', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(29, 'bouya', 'boreldylan', 'borel4595426@gmail.com', 'foto', 'dschan', 'Cameroun', 65412358, '2024-02-14', 'default-pp.png', 0),
(30, 'bouya', 'boreldylan', 'borel4595426@gmail.com', 'foto', 'dschan', 'Cameroun', 65412358, '2024-02-14', 'default-pp.png', 0),
(31, 'bouya', 'boreldylan', 'borel459545426@gmail.com', 'foto', 'dschan', 'Cameroun', 65412358, '2024-02-14', 'default-pp.png', 0),
(32, 'bouya', 'boreldylan', 'borel459545426@gmail.com', 'foto', 'dschan', 'Cameroun', 65412358, '2024-02-14', 'default-pp.png', 0),
(33, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-14', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(34, 'bouya', 'boreldylan', 'borel4596@gmail.com', 'foto', 'dschan', 'Cameroun', 65412358, '2024-02-14', 'default-pp.png', 0),
(35, 'bouya', 'boreldylan', 'borel4596@gmail.com', 'foto', 'dschan', 'Cameroun', 65412358, '2024-02-14', 'default-pp.png', 0),
(36, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-18', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(37, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-18', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(38, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-18', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(39, 'borel', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-02-19', 'boreldylan65bd20fd1295a4.08375911.jpeg', 0),
(40, 'arlette', 'lagou', 'borel4596@gmail.com', '', '', '', 0, '2024-02-19', 'lagou65d329e94e2fe4.44450188.png', 0),
(41, 'arlette', 'lagou', 'borel4596@gmail.com', '', '', '', 0, '2024-02-21', 'lagou65d329e94e2fe4.44450188.png', 0),
(42, 'arlette', 'lagou', 'langouo30@gmail.com', '', '', '', 0, '2024-02-21', 'lagou65d329e94e2fe4.44450188.png', 0),
(43, 'bouya', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-03-06', 'borel65d992703bddf5.71953914.jpg', 0),
(44, 'bouya', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-03-06', 'borel65d992703bddf5.71953914.jpg', 0),
(45, 'bouya', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-03-06', 'borel65d992703bddf5.71953914.jpg', 0),
(46, 'bouya', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-03-06', 'borel65d992703bddf5.71953914.jpg', 0),
(47, 'bouya', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-03-14', 'borel65d992703bddf5.71953914.jpg', 0),
(48, 'bouya', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-03-14', 'borel65d992703bddf5.71953914.jpg', 0),
(49, 'bouya', 'borel', 'borel4596@gmail.com', '', '', '', 0, '2024-03-14', 'borel65d992703bddf5.71953914.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id_like` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id_like`, `id_article`, `id_user`) VALUES
(10, 2, 0),
(50, 1, 4),
(53, 12, 4),
(54, 13, 4),
(55, 14, 4),
(56, 15, 4),
(59, 25, 4);

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

CREATE TABLE `livreur` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`id`, `username`, `email`, `password`, `confirmation_token`, `confirmed_at`, `reset_token`, `reset_at`, `remember_token`) VALUES
(1, 'livreur', 'livreur@gmail.com', '$2y$10$7KImViI8tM/KF02TxWQWVuUHTgWcsW2n5RSYmqXzlgpo5G6G4LANy', NULL, '2023-09-29 22:31:26', NULL, NULL, 'iXN1MptTvaKYdAjYPla4QC41b11SBaX54IiRCveSuk5uhxylLCX0duO7hgaSiuDyKRkkFpbZoWFCC7RQYjbWfvCQtw3gYgzDCb12');

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `id_not` int(11) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `valeur` int(1) NOT NULL DEFAULT 0,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text NOT NULL,
  `cathegorie` varchar(100) NOT NULL,
  `type` varchar(255) NOT NULL,
  `ancien_prix` int(11) NOT NULL,
  `solde` tinyint(1) DEFAULT NULL,
  `pourcentage_reduction` int(11) DEFAULT NULL,
  `nouveau` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `image`, `nom`, `prix`, `description`, `cathegorie`, `type`, `ancien_prix`, `solde`, `pourcentage_reduction`, `nouveau`) VALUES
(24, '1.jpg', 'ordinateur', 725000, 'ram: 4go', 'ordinateur', 'ordinateur', 0, 1, 50, 0),
(25, '1-5.jpg', 'casque', 5000, 'ram: 4go', 'ordinateur', 'ordinateur', 0, 1, 20, 0),
(26, '3-thumb.png', 'tecno', 49000, 'b khg h jhg jhv', 'camera ', 'ram', 0, 1, 30, 0),
(27, '3.jpg', 'tablette', 25000, 'stockage 123go ram 6go', 'ordinateur', 'ordinateur', 0, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `review_table`
--

CREATE TABLE `review_table` (
  `id_review` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_ rating` int(11) NOT NULL,
  `user_review` text NOT NULL,
  `datatime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `review_table`
--

INSERT INTO `review_table` (`id_review`, `username`, `email`, `user_ rating`, `user_review`, `datatime`) VALUES
(1, 'john smith', '', 4, 'tres bon produit', '2023-09-06 07:45:44'),
(2, 'peter grill', '', 3, 'tres mauvais produit', '2023-09-06 07:45:44');

-- --------------------------------------------------------

--
-- Structure de la table `solde`
--

CREATE TABLE `solde` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `ancien_prix` int(11) NOT NULL,
  `qualite` varchar(255) NOT NULL,
  `reduction` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `solde`
--

INSERT INTO `solde` (`id`, `image`, `nom`, `prix`, `ancien_prix`, `qualite`, `reduction`, `categorie`, `description`) VALUES
(0, './img/product01.png', 'casque', 15000, 20000, 'nouveau', 30, 'accessoire', 'autonomie 6 heures'),
(1, './img/product01.png', 'casques', 15000, 20000, 'nouveau', 30, 'accessoire', 'cvbn,;:'),
(3, './img/product03.png', 'ordinateur', 8000, 12000, 'new', 20, 'accessoire', 'ram:10go');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `nom`) VALUES
(1, 'casque'),
(2, 'ordinateur'),
(3, 'ram');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL DEFAULT 'default-pp.png',
  `confirmation_token` varchar(255) DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `fname`, `username`, `email`, `password`, `pp`, `confirmation_token`, `confirmed_at`, `reset_token`, `reset_at`, `remember_token`) VALUES
(56, 'bouya', 'borel', 'borel4596@gmail.com', '$2y$10$Sl2SIOW1iqWdFFq64n7EqOWlhWF0WULhvqIsZ0/sMc3aIXwg7Zmge', 'borel65d992703bddf5.71953914.jpg', NULL, '2024-02-02 18:05:36', NULL, NULL, 'ja4tRklQO5gmAHYQ7YdCD45Tn7Fep4GNp6PoSxl8DamoVOosNiC7QlGC9tV2AICLMI8D0KeRkmlYuur0ThL5xcz0wDV6sXvyndpY'),
(57, 'lagou', 'lagou', 'langouo30@gmail.com', '$2y$10$u1HiQ.3f3ZB9F8D25We2ReQ/cRZLf44T3bk.Tsory0AwrVlV4WJkO', 'borel65d992703bddf5.71953914.jpg', NULL, '2024-02-19 11:10:34', NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `com_produit`
--
ALTER TABLE `com_produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `custumer`
--
ALTER TABLE `custumer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_like`);

--
-- Index pour la table `livreur`
--
ALTER TABLE `livreur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_not`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`id_review`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `com_produit`
--
ALTER TABLE `com_produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `custumer`
--
ALTER TABLE `custumer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `livreur`
--
ALTER TABLE `livreur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_not` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
