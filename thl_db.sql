-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 12:05 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `thl_cate`
--

CREATE TABLE `thl_cate` (
  `cate_id` int(11) NOT NULL,
  `cate_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `thl_products`
--

CREATE TABLE `thl_products` (
  `products_id` int(11) NOT NULL,
  `products_code` text,
  `cate_id` int(11) DEFAULT NULL,
  `sub_cate_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thl_products`
--

INSERT INTO `thl_products` (`products_id`, `products_code`, `cate_id`, `sub_cate_id`, `status_id`) VALUES
(15, 'dkp-3307188', NULL, NULL, 1),
(16, 'dkp-1155191', NULL, NULL, 1),
(17, 'dkp-3237363', NULL, NULL, 1),
(19, 'dkp-3624595', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `thl_sub_cate`
--

CREATE TABLE `thl_sub_cate` (
  `sub_cate_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `sub_cate_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thl_cate`
--
ALTER TABLE `thl_cate`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `thl_products`
--
ALTER TABLE `thl_products`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `thl_sub_cate`
--
ALTER TABLE `thl_sub_cate`
  ADD PRIMARY KEY (`sub_cate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thl_cate`
--
ALTER TABLE `thl_cate`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thl_products`
--
ALTER TABLE `thl_products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `thl_sub_cate`
--
ALTER TABLE `thl_sub_cate`
  MODIFY `sub_cate_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
