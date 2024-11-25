-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 05 mai 2024 à 03:46
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pfa`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idadmin`, `nom`, `mdp`) VALUES
(1, 'chrigui', 'admin'),
(6, 'hamza', 'farhat');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `cin` varchar(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`cin`, `email`, `nom`, `prenom`, `num`) VALUES
('01010101', 'hamdi.ayoub@esen.tn', 'hamdi', 'ayoub', 12321231),
('01234567', 'ghassen.chrigui@esen.tn', 'chrigui', 'ghassen', 21326589),
('01237456', 'ghassen.chrigui@esen.tn', 'hamza', 'chrigui', 21326589),
('01587459', 'farhathamza@esen.tn', 'farhat', 'hamza', 21326589),
('02222222', 'mo3ezali@hotmail.com', 'moez', 'ali', 21121212),
('02254589', 'ihebbecha@gmail.com', 'iheb', 'becha', 12236458),
('02315467', 'aziz@mail.vom', 'hcini', 'aziz', 12236458),
('02587456', 'ghassen.chrigui@esen.tn', 'miloud', 'sassi', 21236547),
('02587459', 'marwen.chrigui@esen.tn', 'marwen', 'chrigui', 21326589),
('05555555', 'youssef@mail.vom', 'youusef', 'fekir', 21326589),
('06446464', 'oumayma@hotmail.com', 'oumayma', 'fekih', 21121212),
('08888888', 'sbouisonia@gmail.com', 'sboui', 'sonia', 22365478);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `date_commande` date NOT NULL,
  `cin` varchar(8) NOT NULL,
  `produit_id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `date_commande`, `cin`, `produit_id`, `quantite`, `total`) VALUES
(25, '2024-05-05', '01010101', 5, 1, '50 euros');

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE `location` (
  `idloc` int(11) NOT NULL,
  `cin` varchar(8) NOT NULL,
  `produit_id` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  `dateloc` date NOT NULL,
  `dateret` date NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`idloc`, `cin`, `produit_id`, `qte`, `dateloc`, `dateret`, `total`) VALUES
(7, '08888888', 13, 2, '2024-05-05', '2024-05-07', '131.04 euros'),
(8, '08888888', 19, 2, '2024-05-05', '2024-05-07', '2.8 euros');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `produit_id` int(11) NOT NULL,
  `nom_produit` varchar(30) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `description` varchar(20) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`produit_id`, `nom_produit`, `prix`, `description`, `quantite`) VALUES
(1, 'Assasin\'s creed 2', '22', 'jeu video', 94),
(2, 'Red dead redemption ', '60', 'jeu video', 100),
(3, 'Resident evil 4 remake', '60', 'jeu video', 100),
(4, 'DOOM Eternal', '50', 'jeu video', 100),
(5, 'GTA V', '50', 'jeu video', 85),
(6, 'Asssasin\'s creed 4 black flag', '30', 'jeu video', 100),
(7, 'DBZ kakarot', '50', 'jeu video', 100),
(8, 'Mafia Defenitive Edition', '50', 'jeu video', 100),
(9, 'Forza Horizon 5', '50', 'jeu video', 100),
(10, 'Outlast2', '50', 'jeu video', 100),
(11, 'Minecraft TM', '40', 'jeu video', 100),
(12, 'Shadow of The Tomb Raider', '60', 'jeu video', 99),
(13, 'COD.5', '728', 'pc gamer', 98),
(14, 'Void 3', '650', 'pc gamer', 99),
(15, 'Dark 1 ', '600', 'pc gamer', 99),
(16, 'SPIRIT OF GAMER PRO K5', '19', 'clavier', 100),
(17, 'MARS GAMING MKAX H-MECHANICAL ', '12', 'clavier', 100),
(18, 'CLAVIER STARWAVE MK1112', '5', 'clavier', 100),
(19, 'SOURIS GAMING GM1142 GAMING', '14', 'souris', 97),
(20, 'SOURIS GAMING GM1142 GAMING', '17', 'souris', 99),
(21, 'SOURIS GAMING XVMX9 GAMING', '19', 'souris', 100),
(22, 'Casque Stéréo en Noir SBOX HS-', '10', 'casque', 100),
(23, 'WHITE SHARK GH-1947 MARGAY', '19', 'casque', 100),
(24, 'WHITE SHARK GH-2140 OX', '22', 'casque', 100);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `idrec` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL,
  `titre` varchar(20) NOT NULL,
  `description` varchar(190) NOT NULL,
  `daterec` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`),
  ADD UNIQUE KEY `mdp_unique` (`mdp`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`cin`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `cin` (`cin`),
  ADD KEY `commande_ibfk_1` (`produit_id`);

--
-- Index pour la table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`idloc`),
  ADD KEY `produit_id` (`produit_id`),
  ADD KEY `cin` (`cin`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`produit_id`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`idrec`),
  ADD KEY `id_commande` (`id_commande`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `location`
--
ALTER TABLE `location`
  MODIFY `idloc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `idrec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`produit_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`cin`) REFERENCES `client` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_2` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`produit_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `location_ibfk_3` FOREIGN KEY (`cin`) REFERENCES `client` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `reclamation_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
