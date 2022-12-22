-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 02 juil. 2022 à 00:53
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `emp`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `Cin` varchar(15) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`Cin`, `Email`, `Pass`) VALUES
('admin', 'yassine@yassine.com', '123'),
('F661540', 'ayoubbellahcen10@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Cin` varchar(15) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Tel` varchar(50) DEFAULT NULL,
  `Pass` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `ImgP` varchar(50) DEFAULT NULL,
  `Idlo` int(11) DEFAULT NULL,
  `act` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Cin`, `Email`, `Tel`, `Pass`, `Prenom`, `Nom`, `ImgP`, `Idlo`, `act`) VALUES
('1234', 'CZXZ@JL', '0670721922', '1234', 'DACAC', 'SADA', 'h1_hero.jpg', 8, 1);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `objet` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `message`, `email`, `objet`) VALUES
(1, 'nom', 'message', 'test@test', 'objet'),
(2, 'zdzdz', 'awacax', 'admin@argon.com', 'DZZCFZ'),
(3, 'D2D2', 'zevrcexz', 'Yassinemaadane99@gmail.com', 'DZZCFZ'),
(4, 'zcvcz', 'dzcpzoaxo,', 'massinemaadane@gmail.Com', 'DZZCFZ');

-- --------------------------------------------------------

--
-- Structure de la table `item_rating`
--

CREATE TABLE `item_rating` (
  `ratingId` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `ratingNumber` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = Block, 0 = Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

CREATE TABLE `localisation` (
  `Idl` int(11) NOT NULL,
  `Ville` varchar(50) DEFAULT NULL,
  `idre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `localisation`
--

INSERT INTO `localisation` (`Idl`, `Ville`, `idre`) VALUES
(1, 'Tanger-Asilah', 1),
(2, 'Chefchaouen', 1),
(3, 'Hoceima', 1),
(4, 'Tetouan', 1),
(5, 'Oujda', 2),
(6, 'Nador', 2),
(7, 'Berkane', 2),
(8, 'Fes', 3),
(9, 'Taza', 3),
(10, 'Meknes', 3),
(11, 'Ifrane', 3),
(12, 'Rabat', 4),
(13, 'Sale', 4),
(14, 'Kenitra', 4),
(15, 'Beni Mellal', 5),
(16, 'Khenifra', 5),
(17, 'Khouribga', 5),
(18, 'Settat', 6),
(19, 'Casablanca', 6),
(20, 'Mohammedia', 6),
(21, 'Marrakech', 7),
(22, 'Kelaa des Sraghna', 7),
(23, 'Safi', 7),
(24, 'Ouarzazate', 8),
(25, 'Zagora', 8),
(26, 'Errachidia', 8),
(27, 'Midelt', 8),
(28, 'Agadir Ida-Outanane', 9),
(29, 'Taroudant', 9),
(30, 'Tata', 9),
(31, 'Guelmim', 10),
(32, 'Sidi Ifni', 10),
(33, 'Tan-Tan', 10),
(34, 'Laayoune', 11),
(35, 'Tarfaya', 11),
(36, 'Boujdour', 11),
(37, 'Aousserd', 12),
(38, 'Oued Ed-Dahab', 12);

-- --------------------------------------------------------

--
-- Structure de la table `ouvrier`
--

CREATE TABLE `ouvrier` (
  `Cin` varchar(15) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Tel` varchar(50) DEFAULT NULL,
  `Pass` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `ImgP` text DEFAULT NULL,
  `Imgc` text DEFAULT NULL,
  `Idlo` int(11) DEFAULT NULL,
  `act` tinyint(1) DEFAULT NULL,
  `Idpr` int(11) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `Imgc1` varchar(255) DEFAULT NULL,
  `Imgc2` varchar(255) DEFAULT NULL,
  `Imgc3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ouvrier`
--

INSERT INTO `ouvrier` (`Cin`, `Email`, `Tel`, `Pass`, `Prenom`, `Nom`, `ImgP`, `Imgc`, `Idlo`, `act`, `Idpr`, `des`, `Imgc1`, `Imgc2`, `Imgc3`) VALUES
('1111', 'nyj@ybn', '0670721922', '123', 'evce', 'CDDV', 'macon.jpg', 'macon.jpg', 10, 1, 2, 'FAZGEZZGGGZGHGEHZGEHZGAFZGEHJREHZGEHHZGAFZGEHJHZG', 'macon1.jpg', 'macon2.jpeg', 'macon3.JPG'),
('123', '44@gmail.Com', '0670721922', '1234', 'adhkcd', 'Ahmed', 'banner-left.png', 'car-rent-2.png', 10, 1, 2, 'XCA', NULL, 'proffession.png', 'Décrire-une-ville.jpg'),
('1234444', 'admin@AFACA', '0670721922', '123', 'DACAC', 'SADA', 'plumber.jpg', 'plumber.jpg', 8, 1, 1, 'V  ALMVLZNKJH', NULL, NULL, NULL),
('3333', 'admin@dakdha.Com', '0670721922', '123', 'modhm', 'mohmd', 'car-rent-2.jpeg', 'car-rent-2.jpeg', 10, 1, 1, 'FAZGEZZGGGZGHGEHZGEHZGAFZGEHJREHZGEHHZGAFZGEHJHZG', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `proffession`
--

CREATE TABLE `proffession` (
  `Idp` int(11) NOT NULL,
  `Prof` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `proffession`
--

INSERT INTO `proffession` (`Idp`, `Prof`) VALUES
(1, 'Plombier'),
(2, 'Macon'),
(3, 'Plafonnier'),
(4, 'soudeur'),
(5, 'Menuisier');

-- --------------------------------------------------------

--
-- Structure de la table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `comm` text NOT NULL,
  `score` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Cino` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rate`
--

INSERT INTO `rate` (`id`, `comm`, `score`, `Nom`, `Cino`,`email`) VALUES
(7, 'aaxacad', 3, 'Yassine', '1111','yassine@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `Idr` int(11) NOT NULL,
  `Reg` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`Idr`, `Reg`) VALUES
(1, 'Tanger-Tétouan-Al Hoceïma'),
(2, 'Oriental'),
(3, 'Fès-Meknès'),
(4, 'Rabat-Salé-Kénitra'),
(5, 'Béni Mellal-Khénifra'),
(6, 'Casablanca-Settat'),
(7, 'Marrakech-Safi'),
(8, 'Drâa-Tafilalet'),
(9, 'Souss-Massa'),
(10, 'Guelmim-Oued Noun'),
(11, 'Laâyoune-Sakia El Hamra'),
(12, 'Dakhla-Oued Ed-Dahab');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Cin`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Cin`),
  ADD KEY `Idlo` (`Idlo`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `item_rating`
--
ALTER TABLE `item_rating`
  ADD PRIMARY KEY (`ratingId`);

--
-- Index pour la table `localisation`
--
ALTER TABLE `localisation`
  ADD PRIMARY KEY (`Idl`),
  ADD KEY `idre` (`idre`);

--
-- Index pour la table `ouvrier`
--
ALTER TABLE `ouvrier`
  ADD PRIMARY KEY (`Cin`),
  ADD KEY `Idlo` (`Idlo`),
  ADD KEY `Idpr` (`Idpr`);

--
-- Index pour la table `proffession`
--
ALTER TABLE `proffession`
  ADD PRIMARY KEY (`Idp`);

--
-- Index pour la table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`Idr`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `localisation`
--
ALTER TABLE `localisation`
  MODIFY `Idl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `proffession`
--
ALTER TABLE `proffession`
  MODIFY `Idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`Idlo`) REFERENCES `localisation` (`Idl`);

--
-- Contraintes pour la table `localisation`
--
ALTER TABLE `localisation`
  ADD CONSTRAINT `localisation_ibfk_1` FOREIGN KEY (`idre`) REFERENCES `region` (`Idr`);

--
-- Contraintes pour la table `ouvrier`
--
ALTER TABLE `ouvrier`
  ADD CONSTRAINT `ouvrier_ibfk_1` FOREIGN KEY (`Idlo`) REFERENCES `localisation` (`Idl`),
  ADD CONSTRAINT `ouvrier_ibfk_2` FOREIGN KEY (`Idpr`) REFERENCES `proffession` (`Idp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
