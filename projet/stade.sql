-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 23 jan. 2022 à 22:13
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_integratif`
--

-- --------------------------------------------------------

--
-- Structure de la table `stade`
--

CREATE TABLE `Stade` (
  `Id_Stade` int(11) NOT NULL,
  `Longitude` varchar(50) NOT NULL,
  `Latitude` varchar(50) NOT NULL,
  `NomStade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `stade`
--

INSERT INTO `stade` (`Id_Stade`, `Longitude`, `Latitude`, `NomStade`) VALUES
(1, '43.5993776775', '1.48922709192', 'Alain Coulon'),
(2, '43.6416638432', '1.44093220614', 'Georges Rigal'),
(3, '43.579466996', '1.43822899578', 'Corbarrieu'),
(4, '43.5833122947', '1.43411467808', 'Stadium'),
(5, '43.6209006587', '1.47821116277', 'Argoulets - Pierre Cahuzac'),
(6, '43.6360386187', '1.45600646814', 'Complexe Sportif de Borderouge'),
(7, '43.5977812467', '1.40060545651', 'TOEC'),
(8, '43.5532478767', '1.44702386756', 'Sordelo'),
(9, '43.6013874178', '1.42226792265', 'Les Fontaines'),
(10, '43.5743416148', '1.4856945707', 'Struxiano'),
(11, '43.6252068425', '1.43543164148', 'Arnauné'),
(12, '43.565650046', '1.41602582702', 'Gironis - Henri MACH'),
(13, '43.5630500055', '1.4475900026', 'Barran'),
(14, '43.6217902904', '1.4155622125', 'Ernest Wallon'),
(15, '43.5777265766', '1.38630729978', 'Les Pradettes'),
(16, '43.5807696074', '1.4319762685', 'Daniel Faucher');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `stade`
--
ALTER TABLE `stade`
  ADD PRIMARY KEY (`Id_Stade`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `stade`
--
ALTER TABLE `stade`
  MODIFY `Id_Stade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
