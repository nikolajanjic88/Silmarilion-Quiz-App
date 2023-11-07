-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 04, 2023 at 03:35 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silmarilion`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `incorrect_answers` json NOT NULL,
  `correct_answer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `incorrect_answers`, `correct_answer`) VALUES
(7, 'Seven Gates barred the way to which land?', '[\"Doriath\", \"Beleriand\", \"Mordor\"]', 'Gondolin'),
(8, 'Who inflicted seven wounds on Morgoth in a duel to which he challenged him?', '[\"Gil-Galad\", \"Feanor\", \"Elendil\"]', 'Fingolfin'),
(9, 'After the fifth battle in the Wars of Beleriad, Turgon ordered seven ships be sent into the West. Only one of them came back. And of this ship\'s crew only one sailor survived. What was his name?', '[\"Earendil\", \"Turgon\", \"Tuor\"]', 'Voronwe'),
(10, 'Who was the oldest of the seven sons of Feanor?', '[\"Curufin\", \"Celegorm\", \"Maglor\"]', 'Maedhros'),
(11, ' Feanor is a derivation of the name his mother called him. His original name was Curufinwe. One of his sons bears a similar name, what is it.', '[\"Curufeanor\", \"Curanthir\", \"Curanar\"]', 'Curufin'),
(12, 'How many sons did Feanor have?', '[\"Three\", \"Five\", \"One\"]', 'Seven'),
(13, 'The original Dark Lord was Melkor, later renamed Morgoth. What Does Melkor translate to?', '[\"Evil Lord\", \"The Black Enemy\", \"Powerful Enemy\"]', 'He Who Arises In Might'),
(14, 'Who, among the sons of Feanor, was considered the greatest singer after Daeron, the minstrel of Thingol?', '[\"Celegorm\", \"Curufin\", \"Maedhros\"]', 'Maglor'),
(15, 'During the battle of Gondolin, Ecthelion slew and was slain by Gothmog. Gothmog is a(n)?', '[\"Wolf\", \"Orc\", \"Dragon\"]', 'Balrog'),
(16, 'Which mountain kept Gondolin in secret?', '[\"Edoras\", \"Ered Luin\", \"Ered Wethrin\"]', 'Echoriath'),
(17, 'Who saved Maedhros from Thangorodrim?', '[\"Fingolfin\", \"Maglor\", \"Feanor\"]', 'Fingon'),
(18, 'Battle of Unnumbered Tears or?', '[\"Dagor Aglareb\", \"Dagor-nuin-Giliath\", \"Dagor Bragollach\"]', 'Nírnaeth Arnoediad');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

DROP TABLE IF EXISTS `scores`;
CREATE TABLE IF NOT EXISTS `scores` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int UNSIGNED NOT NULL,
  `score` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_userID` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `user_id`, `score`) VALUES
(23, 5, 70),
(24, 5, 30),
(25, 6, 40),
(26, 6, 10),
(27, 7, 80),
(28, 8, 60),
(29, 9, 20),
(30, 10, 50),
(31, 10, 10),
(32, 10, 50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(5, 'Glorfindel', 'glorfindel@gmail.com', '$2y$10$iAxNimntgqCGTmfXUU3rbeHdihkIHS6wgGCuxT8chlwhofMLPwHfq', '2023-10-04 13:52:13'),
(6, 'diablo', 'diablo@gmail.com', '$2y$10$meOf7SqMR/HN.E.oF8h1x.jVK4FOhyfePIRRhVR0lBk.tRVhAyFE.', '2023-10-04 13:53:49'),
(7, 'nikola', 'nikola@gmail.com', '$2y$10$In4vTCne44riyhdkVtk.2.G72oDGNter/8uhGUUJH6h2LQ0IPfI7y', '2023-10-04 14:09:42'),
(8, 'hand of God', 'maradona@gmail.com', '$2y$10$ctVP5n3GpmApAe6egDRD1.afDqy3BhKIxyT9V/KUrq97qfVJQCG6C', '2023-10-04 14:15:28'),
(9, 'Mr Wick', 'mrwick@gmail.com', '$2y$10$MAKO..MLJV.piuFTPzSBreNeF9BN9Hy5k60aqUTJhhEdfXlBdl5Hy', '2023-10-04 14:16:43'),
(10, 'R9', 'nazario@gmail.com', '$2y$10$SkxyuzUWwUXsjU2m6GFHCuECWFCJ6XwGe2lC5ynBK8a9J8OHaetWS', '2023-10-04 14:23:54');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `fk_userID` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
