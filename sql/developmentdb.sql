-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jan 11, 2023 at 01:22 PM
-- Server version: 10.9.4-MariaDB-1:10.9.4+maria~ubu2204
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `developmentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `author` varchar(255) NOT NULL,
  `posted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `author`, `posted_at`) VALUES
(1, 'Test title', 'test content', 'test author', '2022-11-30 13:09:55'),
(2, 'Another test title', 'Some more test content', 'test author', '2022-11-29 13:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `Movie`
--

CREATE TABLE `Movie` (
  `_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `director` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `genre` varchar(50) NOT NULL,
  `dateProduced` varchar(10) NOT NULL,
  `price` varchar(7) NOT NULL,
  `image` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `rating` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Movie`
--

INSERT INTO `Movie` (`_id`, `title`, `director`, `description`, `genre`, `dateProduced`, `price`, `image`, `stock`, `rating`) VALUES
(1, 'Avatar: The Way of Water', 'James Cameron', 'Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na\'vi race to protect their home.', 'Action', '2022-12-16', '€20.00', 'avatar-way-of-water.jpg', 100, '7.90'),
(4, 'Glass Onion: A Knives Out Mystery', 'Rian Johnson', 'Five long-time friends are invited to the Greek island home of billionaire Miles Bron. All five know Bron from way back and owe their current wealth, fame and careers to him. The main event is a murder weekend game with Bron to be the victim. In reality, they all have reasons to kill him. Also invited is Benoit Blanc, the world\'s greatest detective', 'Drama', '2022-12-23', ' €20.00', 'a-knives-out-mystery.jpg', 100, '9.50');

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `_id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `dateOrdered` datetime NOT NULL,
  `movieID` int(11) NOT NULL,
  `orderStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Stock`
--

CREATE TABLE `Stock` (
  `movieId` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `birthdate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`_id`, `firstname`, `lastname`, `email`, `password`, `isAdmin`, `address`, `postcode`, `birthdate`) VALUES
(2, 'Tsagli', 'Philip', 'philiptsagli', '$2y$10$bQFJLYoaOLP3y19ksQX0sOwtjdC5mHOMT8hR04gWZmpWEjsW2SOIa', 0, 'Olympisch Stadion 2', '1076 DE', '2022-12-24'),
(3, 'phil', 'bro', 'phil@email.com', '$2y$10$1yVEgcJH39OZrMxZS4pDgeseh9UoKSe.zdqwDSb83daCAfJd4c6oC', 0, 'Inholland ', '1234AG', '2022-12-16'),
(4, 'Admin', 'Admin', 'admin@email.com', '$2y$10$7sYtFaTNzQOb67GEPJLzZO9zvIT7cI1Ol/UGnrsFhmlya.q4pjr4a', 1, 'Inholland ', '1234AG', '2022-12-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Movie`
--
ALTER TABLE `Movie`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD KEY `userID` (`userID`),
  ADD KEY `movieID` (`movieID`);

--
-- Indexes for table `Stock`
--
ALTER TABLE `Stock`
  ADD KEY `movieId` (`movieId`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Movie`
--
ALTER TABLE `Movie`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `Orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `User` (`_id`),
  ADD CONSTRAINT `Orders_ibfk_2` FOREIGN KEY (`movieID`) REFERENCES `Movie` (`_id`);

--
-- Constraints for table `Stock`
--
ALTER TABLE `Stock`
  ADD CONSTRAINT `Stock_ibfk_1` FOREIGN KEY (`movieId`) REFERENCES `Movie` (`_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
