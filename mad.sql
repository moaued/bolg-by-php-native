-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 04:49 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mad`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpost`
--

CREATE TABLE `addpost` (
  `id` int(11) NOT NULL,
  `posttitel` varchar(255) NOT NULL,
  `posttype` varchar(255) NOT NULL,
  `postimg` varchar(220) NOT NULL,
  `post` varchar(1000) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `postriter` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addpost`
--

INSERT INTO `addpost` (`id`, `posttitel`, `posttype`, `postimg`, `post`, `date`, `postriter`) VALUES
(11, 'jddk.', 'ييي', '341_images.jpg', ';plokjhdwkjqljmioj;[][poiuyjhgf', '2020-09-01 10:18:35.080384', 'مصطفي عايد '),
(12, 'fghj', 'css', '877_220px-Transformer-hightolow_smaller.jpg', 'zaasasasass', '2020-09-01 10:37:42.845344', 'مصطفي عايد '),
(13, 'css', 'css', '256_220px-Transformer-hightolow_smaller.jpg', 'csssss', '2020-09-01 11:02:48.074574', 'مصطفي عايد '),
(14, 'css2', 'css', '640_', 'sssssssssssssssssssss', '2020-09-01 11:03:07.069803', 'مصطفي عايد '),
(15, 'css2', 'css', '595_', 'sssssssssssssssssssss', '2020-09-01 11:54:39.845094', 'مصطفي عايد '),
(16, 'sss', 'html', '292_95879091_2876339659101626_2120212443916402688_o.jpg', 'q11w22ww2', '2020-09-01 12:56:57.643855', 'مصطفي عايد ');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'engmostafaaued31@gmail.com', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `tesn`
--

CREATE TABLE `tesn` (
  `id` int(11) NOT NULL,
  `tesnname` varchar(29) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tesn`
--

INSERT INTO `tesn` (`id`, `tesnname`, `date`) VALUES
(21, 'css', '2020-09-01 10:34:40'),
(22, 'php', '2020-09-01 11:02:09'),
(23, 'html', '2020-09-01 11:02:16'),
(24, 'js', '2020-09-01 11:02:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpost`
--
ALTER TABLE `addpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tesn`
--
ALTER TABLE `tesn`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addpost`
--
ALTER TABLE `addpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tesn`
--
ALTER TABLE `tesn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
