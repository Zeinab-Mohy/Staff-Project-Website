-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 09:49 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ia_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `second_name` varchar(50) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `scientific_degree` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `gender` enum('Female','Male') NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `first_name`, `second_name`, `birth_date`, `email`, `scientific_degree`, `faculty`, `gender`, `id_number`, `nationality`, `phone_number`, `password`, `confirm_password`, `image`) VALUES
(5, 'zeinab', 'mohy', '2023-08-09', 'zeinabmohy700@fcai.usc.edu.eg', 'Assistant Lecturer', 'FCAI', 'Female', '789456123789456', 'Egyption', '01234567895', '$2y$10$iG8O9VGyYaCowfrAJglOEOyf/ZauYtsrP8Xl35R4fdF3ifHLe2IOO', '$2y$10$Yz9PiCuHWOi0VKCN03EINetHSmCtm0p.jq5FYi4JKRLj6DJRod8Xq', '64c95b41d14fa.jpg'),
(7, 'heba', 'ahmed', '2023-08-16', 'heba@edu.usc.edu.eg', 'Assistant Professor', 'EDU', 'Female', '789456123785274', 'Egyption', '01478529632', '$2y$10$bY1xzOEwjDlrD/XZVxBmxu.T2alsfrroWC56gqx9zjBxTQRCuRJ1m', '$2y$10$UrxgVQWDfN4bNVRZoOFr3OXfsXK1l9hgsT6FCE3BTLdz2NHSLHG.C', '64c958b9dbcc0.jpg'),
(9, 'noor', 'ahmed', '2023-08-10', 'noor@fcai.usc.edu.eg', 'Dean of the Faculty', 'FCAI', 'Female', '741852741852852', 'egyption', '08501472741', '$2y$10$WiSO1g0r7ttnCJcN85YF.OWEjCaItb8yz1YEQFSSqhKcTDUqj/Vg2', '$2y$10$jsY1HcdLyhyIYshlbgE7UOQOADzLeXCWylOZaUjmEXL45IR5aS09K', '64c95d3709c0c.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id_number` (`id_number`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
