-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 03, 2021 at 04:22 PM
-- Server version: 8.0.19
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int NOT NULL,
  `incoming_msg_id` int NOT NULL,
  `outgoing_msg_id` int NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `message`) VALUES
(11, 266940945, 390354878, '1'),
(12, 266940945, 390354878, '2'),
(13, 266940945, 390354878, '3'),
(14, 266940945, 390354878, '4'),
(15, 266940945, 390354878, '5'),
(16, 390354878, 266940945, 'd'),
(17, 266940945, 390354878, 'Привет'),
(18, 266940945, 390354878, 'в'),
(19, 266940945, 390354878, 'Ну че?'),
(20, 390354878, 390354878, 'в'),
(21, 390354878, 266940945, 'Ниче'),
(22, 266940945, 390354878, 'Сам че?'),
(23, 390354878, 266940945, 'd'),
(24, 266940945, 390354878, 'dscdsdcsdcsd sdcjhbsdjhcbsdhb sdjhcbdjhbcjhsdbjhcbsd sdhbcjsdbh'),
(25, 266940945, 390354878, 'last msg'),
(26, 390354878, 649403776, 'привет'),
(27, 266940945, 390354878, 'dscsdddckjnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn'),
(28, 649403776, 390354878, 'пока'),
(29, 390354878, 649403776, 'bj'),
(30, 390354878, 390354878, 'fvdvd'),
(31, 649403776, 390354878, 'dfv'),
(32, 266940945, 390354878, 'vv'),
(33, 266940945, 390354878, 'dcsds'),
(34, 266940945, 649403776, 'привет'),
(35, 390354878, 649403776, 'априветъ'),
(36, 649403776, 390354878, 'свысвысывсв'),
(37, 649403776, 390354878, 'высывс'),
(38, 649403776, 390354878, 'высыв'),
(39, 649403776, 390354878, 'свысвысывсвы'),
(40, 649403776, 390354878, 'высвысывсывс'),
(41, 649403776, 390354878, 'ывсывсвы'),
(42, 649403776, 390354878, 'ывсвсыв'),
(43, 649403776, 390354878, 'свысвысвы'),
(44, 390354878, 649403776, 'cds'),
(45, 390354878, 649403776, 'sdc'),
(46, 390354878, 649403776, 'sdc'),
(47, 390354878, 649403776, 'sdc'),
(48, 390354878, 649403776, 'ssdcds'),
(49, 390354878, 649403776, 'cdcd'),
(50, 649403776, 390354878, 'cdscds'),
(51, 649403776, 390354878, 'dscds'),
(52, 390354878, 649403776, 'cdcd'),
(53, 649403776, 390354878, 'cdcdd'),
(54, 649403776, 390354878, 'cdcd'),
(55, 649403776, 390354878, 'cdcdscd'),
(56, 649403776, 390354878, 'h'),
(57, 649403776, 390354878, 'j'),
(58, 649403776, 390354878, '1'),
(59, 390354878, 649403776, 'ds'),
(60, 390354878, 649403776, 'c'),
(61, 390354878, 649403776, 'c'),
(62, 390354878, 649403776, 'dd'),
(63, 390354878, 649403776, 'd'),
(64, 390354878, 649403776, 'd'),
(65, 390354878, 649403776, 'd'),
(66, 390354878, 649403776, 'd'),
(67, 390354878, 649403776, 'cew'),
(68, 649403776, 390354878, 'c'),
(69, 649403776, 390354878, 'f'),
(70, 390354878, 649403776, 'xs'),
(71, 649403776, 390354878, 'cfdc'),
(72, 649403776, 390354878, 'cd'),
(73, 649403776, 390354878, 'dc'),
(74, 390354878, 649403776, 'cdf'),
(75, 390354878, 649403776, 'cdf'),
(76, 649403776, 390354878, 'sdcs'),
(77, 649403776, 390354878, 'cfdc'),
(78, 649403776, 390354878, 'cfcdf'),
(79, 649403776, 390354878, 'dsc'),
(80, 649403776, 390354878, 'ds'),
(81, 649403776, 390354878, 's'),
(82, 649403776, 390354878, 'ssswswawsawsaw'),
(83, 649403776, 390354878, 'w'),
(84, 649403776, 390354878, 'klmcdscsdlckmdslkcmdlksmlckmsdlkmclkdmslkmcldksmlkcdmslkmdklmsdlkcmlsdkm'),
(85, 649403776, 390354878, 'cdfdfvf'),
(86, 390354878, 649403776, 'sdcd'),
(87, 390354878, 649403776, 'dscd'),
(88, 649403776, 390354878, 'dsdcsd'),
(89, 390354878, 649403776, 'dscds'),
(90, 390354878, 649403776, 'cdsc'),
(91, 649403776, 390354878, 'dscds'),
(92, 390354878, 649403776, 'dsc'),
(93, 390354878, 649403776, 'vdf'),
(94, 649403776, 390354878, 'привт'),
(95, 649403776, 390354878, 'свысвы'),
(96, 649403776, 390354878, 'ьич'),
(97, 1406154016, 1263469171, 'привет'),
(98, 1263469171, 1406154016, 'пока');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `unique_id` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(400) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `first_name`, `last_name`, `email`, `password`, `img`, `status`) VALUES
(15, '1406154016', 'Azizbek', 'Rasulov', 'khan.ak33.ak47@gmail.com', '1df53b2fdb2e4859d46116691aa7427573f81e4938d2f64a77225143093e513319dda3283573ab4df58a8105c4f9eb33138dc2068131622c53ae41815dc1e782', '1630091031IMG_20190518_131733.jpg', 'Офлайн'),
(16, '1263469171', 'demo', 'demo', 'demo@mail.ru', '26c669cd0814ac40e5328752b21c4aa6450d16295e4eec30356a06a911c23983aaebe12d5da38eeebfc1b213be650498df8419194d5a26c7e0a50af156853c79', '1630091144IMG_20180525_201721.jpg', 'Офлайн');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
