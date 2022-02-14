-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 08:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` bigint(20) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `matricul` varchar(20) NOT NULL,
  `post` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `nom`, `matricul`, `post`, `password`) VALUES
(2, 'Hassan Agmir', 'root', 'responsable', 'jf]xwVnt'),
(3, 'Simo Agmir', 'agmir', 'responsable', '1234'),
(4, 'Simo Agmir', 'agmir', 'responsable', '1234'),
(5, 'Ali', 'agmir', 'responsable', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `porblem`
--

CREATE TABLE `porblem` (
  `id` bigint(20) NOT NULL,
  `type_prob` varchar(20) NOT NULL,
  `text_autre` varchar(100) DEFAULT NULL,
  `matricul` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `porblem`
--

INSERT INTO `porblem` (`id`, `type_prob`, `text_autre`, `matricul`) VALUES
(17, 'Autre', 'kkkkkkkkkkkkkk', 0),
(18, 'Autre', 'kkkkkkkkkkkkkk', 0),
(19, 'Technique', 'kkkkkkk', 0),
(20, 'Technique', 'kkkkkkk', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matricul` (`matricul`),
  ADD KEY `nom` (`nom`);

--
-- Indexes for table `porblem`
--
ALTER TABLE `porblem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `porblem`
--
ALTER TABLE `porblem`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
