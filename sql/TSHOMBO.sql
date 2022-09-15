-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 04 sep. 2022 à 13:54
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `TSHOMBO`
--

-- --------------------------------------------------------

--
-- Structure de la table `ADMINISTRATEUR`
--

CREATE TABLE `ADMINISTRATEUR` (
  `idAdministrateur` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `passwd` varchar(200) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ADRESSE`
--

CREATE TABLE `ADRESSE` (
  `idAdresse` int(11) NOT NULL,
  `idClient` int(11) DEFAULT NULL,
  `idShop` int(11) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `avenue` varchar(200) NOT NULL,
  `quartier` varchar(200) NOT NULL,
  `commune` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `CLIENT`
--

CREATE TABLE `CLIENT` (
  `idClient` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `passwd` varchar(200) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `COMMANDE`
--

CREATE TABLE `COMMANDE` (
  `idCommande` int(11) NOT NULL,
  `idShop` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `lieu` varchar(200) NOT NULL,
  `total` float NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `DETAIL_COMMANDE`
--

CREATE TABLE `DETAIL_COMMANDE` (
  `idDetailCommande` int(11) NOT NULL,
  `idCommande` int(11) NOT NULL,
  `idTelephone` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `MARQUE`
--

CREATE TABLE `MARQUE` (
  `idMarque` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `NUMERO`
--

CREATE TABLE `NUMERO` (
  `idNumero` int(11) NOT NULL,
  `idShop` int(11) DEFAULT NULL,
  `idClient` int(11) DEFAULT NULL,
  `numero` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `PANIER`
--

CREATE TABLE `PANIER` (
  `idPanier` int(11) NOT NULL,
  `idShop` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idTelephone` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `PROMOTION`
--

CREATE TABLE `PROMOTION` (
  `idPromotion` int(11) NOT NULL,
  `idShop` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `SHOP`
--

CREATE TABLE `SHOP` (
  `idShop` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `passwd` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `SPECIFICATION`
--

CREATE TABLE `SPECIFICATION` (
  `idSpecification` int(11) NOT NULL,
  `idTelephone` int(11) NOT NULL,
  `os` varchar(200) NOT NULL,
  `ecran` float NOT NULL,
  `processeur` float NOT NULL,
  `ram` int(11) NOT NULL,
  `stockage` int(11) NOT NULL,
  `photo` int(11) NOT NULL,
  `batterie` int(11) NOT NULL,
  `couleur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `TELEPHONE`
--

CREATE TABLE `TELEPHONE` (
  `idTelephone` int(11) NOT NULL,
  `idMarque` int(11) NOT NULL,
  `idShop` int(11) NOT NULL,
  `model` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ADMINISTRATEUR`
--
ALTER TABLE `ADMINISTRATEUR`
  ADD PRIMARY KEY (`idAdministrateur`);

--
-- Index pour la table `ADRESSE`
--
ALTER TABLE `ADRESSE`
  ADD PRIMARY KEY (`idAdresse`),
  ADD KEY `idClient` (`idClient`),
  ADD KEY `idShop` (`idShop`);

--
-- Index pour la table `CLIENT`
--
ALTER TABLE `CLIENT`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `COMMANDE`
--
ALTER TABLE `COMMANDE`
  ADD PRIMARY KEY (`idCommande`),
  ADD KEY `idClient` (`idClient`),
  ADD KEY `idShop` (`idShop`);

--
-- Index pour la table `DETAIL_COMMANDE`
--
ALTER TABLE `DETAIL_COMMANDE`
  ADD PRIMARY KEY (`idDetailCommande`),
  ADD KEY `idCommande` (`idCommande`),
  ADD KEY `idTelephone` (`idTelephone`);

--
-- Index pour la table `MARQUE`
--
ALTER TABLE `MARQUE`
  ADD PRIMARY KEY (`idMarque`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- Index pour la table `NUMERO`
--
ALTER TABLE `NUMERO`
  ADD PRIMARY KEY (`idNumero`),
  ADD KEY `idClient` (`idClient`),
  ADD KEY `idShop` (`idShop`);

--
-- Index pour la table `PANIER`
--
ALTER TABLE `PANIER`
  ADD KEY `idClient` (`idClient`),
  ADD KEY `idShop` (`idShop`);

--
-- Index pour la table `PROMOTION`
--
ALTER TABLE `PROMOTION`
  ADD PRIMARY KEY (`idPromotion`),
  ADD KEY `idShop` (`idShop`);

--
-- Index pour la table `SHOP`
--
ALTER TABLE `SHOP`
  ADD PRIMARY KEY (`idShop`);

--
-- Index pour la table `SPECIFICATION`
--
ALTER TABLE `SPECIFICATION`
  ADD PRIMARY KEY (`idSpecification`),
  ADD KEY `idTelephone` (`idTelephone`);

--
-- Index pour la table `TELEPHONE`
--
ALTER TABLE `TELEPHONE`
  ADD PRIMARY KEY (`idTelephone`),
  ADD KEY `idMarque` (`idMarque`),
  ADD KEY `idShop` (`idShop`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ADMINISTRATEUR`
--
ALTER TABLE `ADMINISTRATEUR`
  MODIFY `idAdministrateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ADRESSE`
--
ALTER TABLE `ADRESSE`
  MODIFY `idAdresse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `CLIENT`
--
ALTER TABLE `CLIENT`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `COMMANDE`
--
ALTER TABLE `COMMANDE`
  MODIFY `idCommande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `DETAIL_COMMANDE`
--
ALTER TABLE `DETAIL_COMMANDE`
  MODIFY `idDetailCommande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `MARQUE`
--
ALTER TABLE `MARQUE`
  MODIFY `idMarque` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `NUMERO`
--
ALTER TABLE `NUMERO`
  MODIFY `idNumero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `PROMOTION`
--
ALTER TABLE `PROMOTION`
  MODIFY `idPromotion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `SHOP`
--
ALTER TABLE `SHOP`
  MODIFY `idShop` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `SPECIFICATION`
--
ALTER TABLE `SPECIFICATION`
  MODIFY `idSpecification` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `TELEPHONE`
--
ALTER TABLE `TELEPHONE`
  MODIFY `idTelephone` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ADRESSE`
--
ALTER TABLE `ADRESSE`
  ADD CONSTRAINT `ADRESSE_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `CLIENT` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ADRESSE_ibfk_2` FOREIGN KEY (`idShop`) REFERENCES `SHOP` (`idShop`);

--
-- Contraintes pour la table `COMMANDE`
--
ALTER TABLE `COMMANDE`
  ADD CONSTRAINT `COMMANDE_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `CLIENT` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `COMMANDE_ibfk_2` FOREIGN KEY (`idShop`) REFERENCES `SHOP` (`idShop`);

--
-- Contraintes pour la table `DETAIL_COMMANDE`
--
ALTER TABLE `DETAIL_COMMANDE`
  ADD CONSTRAINT `DETAIL_COMMANDE_ibfk_1` FOREIGN KEY (`idCommande`) REFERENCES `COMMANDE` (`idCommande`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `DETAIL_COMMANDE_ibfk_2` FOREIGN KEY (`idTelephone`) REFERENCES `TELEPHONE` (`idTelephone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `NUMERO`
--
ALTER TABLE `NUMERO`
  ADD CONSTRAINT `NUMERO_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `CLIENT` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `NUMERO_ibfk_2` FOREIGN KEY (`idShop`) REFERENCES `SHOP` (`idShop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `PANIER`
--
ALTER TABLE `PANIER`
  ADD CONSTRAINT `PANIER_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `CLIENT` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PANIER_ibfk_2` FOREIGN KEY (`idShop`) REFERENCES `SHOP` (`idShop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `PROMOTION`
--
ALTER TABLE `PROMOTION`
  ADD CONSTRAINT `PROMOTION_ibfk_1` FOREIGN KEY (`idShop`) REFERENCES `SHOP` (`idShop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `SPECIFICATION`
--
ALTER TABLE `SPECIFICATION`
  ADD CONSTRAINT `SPECIFICATION_ibfk_1` FOREIGN KEY (`idTelephone`) REFERENCES `TELEPHONE` (`idTelephone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `TELEPHONE`
--
ALTER TABLE `TELEPHONE`
  ADD CONSTRAINT `TELEPHONE_ibfk_1` FOREIGN KEY (`idMarque`) REFERENCES `MARQUE` (`idMarque`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TELEPHONE_ibfk_2` FOREIGN KEY (`idShop`) REFERENCES `SHOP` (`idShop`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
