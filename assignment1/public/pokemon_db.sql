-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 07, 2024 at 02:31 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokemon_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `battle`
--

CREATE TABLE `battle` (
  `id` int(11) NOT NULL,
  `battle_date` datetime NOT NULL,
  `player1_pokemon_id` int(11) DEFAULT NULL,
  `player2_pokemon_id` int(11) DEFAULT NULL,
  `winner_pokemon_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `battle_log`
--

CREATE TABLE `battle_log` (
  `id` int(11) NOT NULL,
  `battle_id` int(11) DEFAULT NULL,
  `turn_number` int(11) NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `moves`
--

CREATE TABLE `moves` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `power` int(11) NOT NULL,
  `accuracy` int(11) NOT NULL,
  `pp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moves`
--

INSERT INTO `moves` (`id`, `name`, `type`, `power`, `accuracy`, `pp`) VALUES
(1, 'Tackle', 'Normal', 40, 100, 35),
(2, 'Vine Whip', 'Grass', 45, 100, 25),
(3, 'Ember', 'Fire', 40, 100, 25),
(4, 'Water Gun', 'Water', 40, 100, 25),
(5, 'Thunder Shock', 'Electric', 40, 100, 30),
(6, 'Quick Attack', 'Normal', 40, 100, 30),
(7, 'Scratch', 'Normal', 40, 100, 35),
(8, 'Razor Leaf', 'Grass', 55, 95, 25),
(9, 'Flamethrower', 'Fire', 90, 100, 15),
(10, 'Surf', 'Water', 90, 100, 15),
(11, 'Thunderbolt', 'Electric', 90, 100, 15),
(12, 'Wing Attack', 'Flying', 60, 100, 35),
(13, 'Hyper Beam', 'Normal', 150, 90, 5),
(14, 'Earthquake', 'Ground', 100, 100, 10),
(15, 'Psychic', 'Psychic', 90, 100, 10),
(16, 'Shadow Ball', 'Ghost', 80, 100, 15),
(17, 'Dragon Claw', 'Dragon', 80, 100, 15),
(18, 'Ice Beam', 'Ice', 90, 100, 10),
(19, 'Rock Slide', 'Rock', 75, 90, 10),
(20, 'Solar Beam', 'Grass', 120, 100, 10);

-- --------------------------------------------------------

--
-- Table structure for table `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type1` varchar(20) NOT NULL,
  `type2` varchar(20) DEFAULT NULL,
  `hp` int(11) NOT NULL,
  `attack` int(11) NOT NULL,
  `defense` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `special_attack` int(11) NOT NULL,
  `special_defense` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pokemon`
--

INSERT INTO `pokemon` (`id`, `name`, `type1`, `type2`, `hp`, `attack`, `defense`, `speed`, `special_attack`, `special_defense`) VALUES
(1, 'Pikachu', 'Electric', NULL, 35, 55, 40, 90, 50, 50),
(2, 'Bulbasaur', 'Grass', 'Poison', 45, 49, 49, 45, 65, 65),
(3, 'Ivysaur', 'Grass', 'Poison', 60, 62, 63, 60, 80, 80),
(4, 'Venusaur', 'Grass', 'Poison', 80, 82, 83, 80, 100, 100),
(5, 'Charmander', 'Fire', NULL, 39, 52, 43, 65, 60, 50),
(6, 'Charmeleon', 'Fire', NULL, 58, 64, 58, 80, 80, 65),
(7, 'Charizard', 'Fire', 'Flying', 78, 84, 78, 100, 109, 85),
(8, 'Squirtle', 'Water', NULL, 44, 48, 65, 43, 50, 64),
(9, 'Wartortle', 'Water', NULL, 59, 63, 80, 58, 65, 80),
(10, 'Blastoise', 'Water', NULL, 79, 83, 100, 78, 85, 105),
(11, 'Caterpie', 'Bug', NULL, 45, 30, 35, 45, 20, 20),
(12, 'Metapod', 'Bug', NULL, 50, 20, 55, 30, 25, 25),
(13, 'Butterfree', 'Bug', 'Flying', 60, 45, 50, 70, 90, 80),
(14, 'Weedle', 'Bug', 'Poison', 40, 35, 30, 50, 20, 20),
(15, 'Kakuna', 'Bug', 'Poison', 45, 25, 50, 35, 25, 25),
(16, 'Beedrill', 'Bug', 'Poison', 65, 90, 40, 75, 45, 80),
(17, 'Pidgey', 'Normal', 'Flying', 40, 45, 40, 56, 35, 35),
(18, 'Pidgeotto', 'Normal', 'Flying', 63, 60, 55, 71, 50, 50),
(19, 'Pidgeot', 'Normal', 'Flying', 83, 80, 75, 101, 70, 70),
(20, 'Rattata', 'Normal', NULL, 30, 56, 35, 72, 25, 35),
(21, 'Raticate', 'Normal', NULL, 55, 81, 60, 97, 50, 70);

-- --------------------------------------------------------

--
-- Table structure for table `pokemon_moves`
--

CREATE TABLE `pokemon_moves` (
  `pokemon_id` int(11) DEFAULT NULL,
  `move_id` int(11) DEFAULT NULL,
  `level_learned` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pokemon_moves`
--

INSERT INTO `pokemon_moves` (`pokemon_id`, `move_id`, `level_learned`) VALUES
(1, 1, 1),
(1, 2, 7),
(2, 1, 1),
(2, 2, 7),
(3, 1, 1),
(3, 2, 7),
(4, 1, 1),
(4, 3, 7),
(5, 1, 1),
(5, 3, 7),
(6, 1, 1),
(6, 3, 7),
(7, 1, 1),
(7, 4, 7),
(8, 1, 1),
(8, 4, 7),
(9, 1, 1),
(9, 4, 7),
(10, 1, 1),
(11, 1, 1),
(12, 1, 1),
(12, 6, 7),
(13, 1, 1),
(14, 1, 1),
(15, 1, 1),
(15, 6, 7),
(16, 1, 1),
(16, 6, 7),
(17, 1, 1),
(17, 6, 7),
(18, 1, 1),
(18, 6, 7),
(19, 1, 1),
(19, 6, 7),
(20, 1, 1),
(20, 6, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `battle`
--
ALTER TABLE `battle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player1_pokemon_id` (`player1_pokemon_id`),
  ADD KEY `player2_pokemon_id` (`player2_pokemon_id`),
  ADD KEY `winner_pokemon_id` (`winner_pokemon_id`);

--
-- Indexes for table `battle_log`
--
ALTER TABLE `battle_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `battle_id` (`battle_id`);

--
-- Indexes for table `moves`
--
ALTER TABLE `moves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pokemon_moves`
--
ALTER TABLE `pokemon_moves`
  ADD KEY `pokemon_id` (`pokemon_id`),
  ADD KEY `move_id` (`move_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `battle`
--
ALTER TABLE `battle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `battle_log`
--
ALTER TABLE `battle_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `moves`
--
ALTER TABLE `moves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `battle`
--
ALTER TABLE `battle`
  ADD CONSTRAINT `battle_ibfk_1` FOREIGN KEY (`player1_pokemon_id`) REFERENCES `pokemon` (`id`),
  ADD CONSTRAINT `battle_ibfk_2` FOREIGN KEY (`player2_pokemon_id`) REFERENCES `pokemon` (`id`),
  ADD CONSTRAINT `battle_ibfk_3` FOREIGN KEY (`winner_pokemon_id`) REFERENCES `pokemon` (`id`);

--
-- Constraints for table `battle_log`
--
ALTER TABLE `battle_log`
  ADD CONSTRAINT `battle_log_ibfk_1` FOREIGN KEY (`battle_id`) REFERENCES `battle` (`id`);

--
-- Constraints for table `pokemon_moves`
--
ALTER TABLE `pokemon_moves`
  ADD CONSTRAINT `pokemon_moves_ibfk_1` FOREIGN KEY (`pokemon_id`) REFERENCES `pokemon` (`id`),
  ADD CONSTRAINT `pokemon_moves_ibfk_2` FOREIGN KEY (`move_id`) REFERENCES `moves` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
