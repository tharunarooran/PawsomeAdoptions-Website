-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 03, 2023 at 02:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pets_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `code` varchar(5) NOT NULL,
  `expire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `email`, `code`, `expire`) VALUES
(1, 'tetramacabee@gmail.com', '41368', 1690777064),
(2, 'tetramacabee@gmail.com', '72789', 1690777066),
(3, 'tetramacabee@gmail.com', '52258', 1690798048),
(4, 'tetramacabee@gmail.com', '27891', 1690798455),
(5, 'tetramacabee@gmail.com', '96550', 1690799264),
(6, 'devi@gmail.com', '54747', 1690799923),
(7, 'devi@gmail.com', '36252', 1690800981),
(8, 'devi@gmail.com', '28590', 1690801428),
(9, 'tetramacabee@gmail.com', '25474', 1690802842),
(10, 'tetramacabee@gmail.com', '69513', 1690981401),
(11, 'tetramacabee@gmail.com', '90673', 1690981524),
(12, 'tetramacabee@gmail.com', '16942', 1690981694),
(13, 'tetramacabee@gmail.com', '19435', 1691034747),
(14, 'tetramacabee@gmail.com', '60633', 1691034844),
(15, 'tetramacabee@gmail.com', '32820', 1691034880);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(7, 'Dave', 'dave@gmail.com', 'How many pets can I adopt from your website?', 'Hello Pawsome Adoptions!\r\n I just want to know how many pets can i possibly adopt from ur website. I am aware that i have to go through background checks and interviews. but i want to know how many can i adopt. I am anticipating for your reply. \r\nThank you.'),
(9, 'John', 'tiknwan@gmail.com', 'Awesome Website', 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `pdfs`
--

CREATE TABLE `pdfs` (
  `id` int(100) NOT NULL,
  `pdf` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdfs`
--

INSERT INTO `pdfs` (`id`, `pdf`) VALUES
(60, 'Lighthouse Report - ADMIN.pdf'),
(61, 'Pawsome_Adoptions_Form (3).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `petname` varchar(100) NOT NULL,
  `breed` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `spec_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `image`, `petname`, `breed`, `description`, `spec_id`) VALUES
(52, 'pup1.jpg', 'Rupert', 'Pug', 'Rupert is 4 months old.\r\nHe loves to play in the grass.', 1),
(53, 'pup3.jpg', 'Charlie', 'Aussie Shepherd', 'Charlie is 5 months old.\r\nShe loves chew toys and warm hugs', 1),
(54, 'kit1.jpg', 'Elsa', 'American Shorthair', 'Elsa is one month old.\r\nShe loves milk and spools of wool', 2),
(55, 'pup2.jpg', 'Snowball', 'Bichon', 'Snowball is 2 months old.\r\nHe loves to play with shoes and take lap naps.', 1),
(56, 'kit5.jpg', 'Pepper', 'Bombay Cat', 'Pepper is 1 month old.\r\nPepper is  very curious and would always love to play with other cats.', 2),
(57, 'kit2.jpg', 'Oliver', 'Tabby Tomcat', 'Oliver is 3 months old\r\nShe does not really enjoy cat nip.', 2),
(58, 'pup4.jpg', 'Ginger', 'Basque Shepherd', 'Ginger is 3 months.\r\nShe loves to play indoors and enjoys watching TV', 1),
(59, 'kit3.jpg', 'Simba', 'Domestic Short-haired', 'Simba is 1 year old.\r\nHe loves drinking milk and eating fish.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `species`
--

CREATE TABLE `species` (
  `spec_id` int(100) NOT NULL,
  `spec_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `species`
--

INSERT INTO `species` (`spec_id`, `spec_name`) VALUES
(1, 'Dogs'),
(2, 'Cats'),
(3, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `mobile_no`, `date`) VALUES
(58, 'Kevin', 'kevin@gmail.com', '$2y$10$ZktUEbClgmvEV8rfuVKjQesoZnbMu9BjBj8dsNRYeuLVm/H3/oLlW', '0798823421', '2023-07-31 01:24:45'),
(64, 'Devi', 'devi@gmail.com', '$2y$10$Ra5sDrae6wEcsci06fyFzuhcKBRcQCHIIwVRBz/6iZu9lw326.daW', '0798823424', '2023-07-31 11:03:13'),
(79, 'Tharun', 'atharun2002@gmail.com', '$2y$10$7QUbjWDA6F.iM2Vvn1YaT.kiPBi6ttaa8kjcMiBfJ9kw.gPaqIMR6', '0769888207', '2023-07-31 01:24:45'),
(86, 'Tetra', 'tetramacabee@gmail.com', '$2y$10$sDzJiA1SxdOm10vfQOiWQO/CSfv3t17iQEEYw58Bwe5URzTaktJvS', '0769696920', '2023-08-03 03:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `xpetzra`
--

CREATE TABLE `xpetzra` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `xpetzra`
--

INSERT INTO `xpetzra` (`id`, `username`, `password`) VALUES
(1, 'admin', '3pawsome3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`),
  ADD KEY `email` (`email`),
  ADD KEY `expire` (`expire`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdfs`
--
ALTER TABLE `pdfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`spec_id`);

--
-- Indexes for table `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`spec_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `xpetzra`
--
ALTER TABLE `xpetzra`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pdfs`
--
ALTER TABLE `pdfs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `species`
--
ALTER TABLE `species`
  MODIFY `spec_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `xpetzra`
--
ALTER TABLE `xpetzra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`spec_id`) REFERENCES `species` (`spec_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
