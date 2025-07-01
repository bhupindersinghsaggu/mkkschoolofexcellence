-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2025 at 10:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `pdfs`
--

CREATE TABLE `pdfs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `upload_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdfs`
--

INSERT INTO `pdfs` (`id`, `title`, `category`, `file_name`, `upload_date`) VALUES
(12, 'Book List Jr-Wing', 'book-list', '1 (1).pdf', '2025-06-29'),
(13, 'Book List Sr Wing', 'book-list', 'Letter e (1).pdf', '2025-06-29'),
(15, 'Book list', 'book-list', '1 (1).pdf', '2025-07-01'),
(16, 'fee', 'fee-structure', 'School Committee 2025-26.pdf', '2025-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `upload_date` date DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `upload_date`, `url`, `image`) VALUES
(9, 'Plantation activity', '2025-05-15', 'https://www.facebook.com/photo?fbid=122121630818843634&set=pb.61575309024980.-2207520000', 'WhatsApp Image 2025-06-09 at 23.17.18 (1).jpeg'),
(11, 'Earth Day', '2025-04-25', 'https://www.facebook.com/photo?fbid=122121631262843634&set=pcb.122121630896843634', 'WhatsApp Image 2025-06-09 at 22.47.36.jpeg'),
(12, 'Parents Orientation', '2025-04-15', 'https://www.facebook.com/photo/?fbid=122121570668843634&set=pcb.122121571418843634', '504665377_122121571172843634_6125125831342720871_n (1).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pdfs`
--
ALTER TABLE `pdfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pdfs`
--
ALTER TABLE `pdfs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
