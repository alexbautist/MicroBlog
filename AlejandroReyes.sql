-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 18 jan. 2019 à 19:42
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Micro_blog2`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `votes` int(11) NOT NULL,
  `dernierIP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `contenu`, `votes`, `dernierIP`) VALUES
(21, '     DeuxiÃ©me ', 1, '::1'),
(22, ' TroisiÃ¨me message', 0, ''),
(24, 'e5', 0, ''),
(26, 'Nf6', 0, ''),
(27, 'Bc4', 0, ''),
(28, 'Nc6', 0, ''),
(29, 'Ng5', 0, ''),
(30, 'd5', 0, ''),
(31, 'exd5', 0, ''),
(32, 'Test', 0, ''),
(33, 'Test', 0, ''),
(34, ' Test 2.1', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `mail`, `mdp`, `sid`) VALUES
(1, 'a@a.com', '$2y$10$sqNc3vlBOKiG7p8AH3zPnuM2ZPyuLNwDoAGbdyhTiQ/F1D3RNGZ7y', '115b47c53be565142205a375246a4fcc'),
(2, 'b@b.com', '$2y$10$fvEnWj4CVxBHFUQ0BeWfN.341EOEpjMeH4Ygxw/nFlMcsRemBQAcO', '4ae1eb3506797c92248405f8bb571cf2'),
(8, 'a@a.com', '$2y$10$oyLveFMH5McDk/MgsvCiUOJnHFqVkQtiHSPd04yFtknKFAXd2L/pm', ''),
(9, 'a@a.com', '$2y$10$mVjUeQb5L8gplSmQIGvDp.dCCnlEbh6gYpi5JGIHLHZAg/Ojw//mK', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
