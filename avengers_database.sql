-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 13 avr. 2018 à 02:40
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `avengers_database`
--

-- --------------------------------------------------------

--
-- Structure de la table `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `id_website` tinyint(2) NOT NULL,
  `id_marvel` int(11) NOT NULL,
  `id_superhero` int(11) NOT NULL,
  `id_actor` int(11) NOT NULL,
  `anecdote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `characters`
--

INSERT INTO `characters` (`id`, `name`, `id_website`, `id_marvel`, `id_superhero`, `id_actor`, `anecdote`) VALUES
(30, 'Doctor Strange', 0, 1009282, 226, 71580, 'Benedict Timothy Carlton Cumberbatch is the son of actors Timothy Carlton and Wanda Ventham. He has played in a large number of films, some of which are recognized by people in the community. In 2014, Time Magazine included it in its Time 100 of \"the most influential people in the world\"'),
(31, 'Spider-Man', 1, 1009610, 620, 1136406, 'Tom Holland during the filming of Captain America Civil War did not stay very long but managed to hurt himself. \"It\'s not the most heroic memory of my life,\" says Peter Parker\'s new interpreter.'),
(32, 'Iron Man', 2, 1009368, 346, 3223, 'At 16, Robert Downey Jr once pulled the comic out of the hands of one of his comrades, calling him a geek by the way, which earned him a suspension from his high school. The comics this student read was \"The Invincible Iron Man\". The irony of life …'),
(33, 'Thor', 3, 1009664, 659, 74568, 'For his role as superhero, Thor, Chris Hemsworth has embarked on an intensive training gaining nearly 15 pounds of muscle. A volume increase so spectacular that the originally planned costume was found too fair during final fitting.'),
(34, 'Vision', 4, 1009697, 697, 6162, 'The actor Paul Bettany, embodying Vision in all Marvel works where this character is present, also gives his voice to J.A.R.V.I.S (the artificial intelligence of Iron Man). He also recently confessed that he did not see any Iron Man or Avengers, what is rather funny. '),
(35, 'Captain America', 5, 1009220, 149, 16828, 'Chris never read Comics as soon as he was a child. He says he was playing superheroes by putting on a mantle around his neck, because that\'s what all kids do. He had to work hard to upgrade and interpret Captain America or The Human Torch of Fantastic Four.'),
(36, 'Star-Lord', 6, 1010733, 630, 73457, 'After a fifth place at a high school wrestling contest his teacher asked him what he wanted to do later. Chris pratt replied \"I do not know, but I know I\'ll be famous and I know I\'ll have a ton of money. I did not know how. I did not do anything very productive.'),
(37, 'Black Panther', 7, 1009187, 106, 172069, 'Chadwick Boseman is the first actor in the entire Marvel film series to perform a black superhero, making his first appearance in Captain America: Civil War, but it will take a total of 18 films to see an African-American actor having his movie of super-solo hero.'),
(38, 'Hulk', 8, 1009351, 332, 103, 'He co-founded the Orpheus theater company, where he worked in almost all trades. From playing, writing, directing, producing to running lights and building games while building one\'s resume. He was also a bartender for almost nine years to support himself financially and was close to giving up everything.'),
(39, 'Winter Soldier', 9, 1010740, 714, 60898, 'Born in Romania, he is forced to flee his country at the age of eight with his mother, Georgeta Orlovschi. Four years later, they leave for New York after his mother married Anthony Fruhauf, the director of private school Rockland Country Day School, where Stan studied.'),
(40, 'Black Widow', 10, 1009189, 107, 1245, 'Not everyone knows it, but the world-famous actress Scarlett Johansson, playing the black widow in Avengers: Infinity War, is not just an actress. Indeed she participated in a non-profit album bringing together several famous actors, but she also created her new band \"The Singles\" in February 2015, releasing their first title is Candy.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
