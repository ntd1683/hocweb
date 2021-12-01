-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2021 at 03:46 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `j2school`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_model`
--

CREATE TABLE `info_model` (
  `code` int(11) NOT NULL,
  `name` text NOT NULL,
  `sex` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `link_picture` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `adress` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_model`
--

INSERT INTO `info_model` (`code`, `name`, `sex`, `email`, `link_picture`, `date`, `adress`, `subject`) VALUES
(1, 'Nguyễn Đặng Hải Yến', 'Nam', 'haiyen7703@gmail.com', 'https://live.staticflickr.com/65535/51310901869_aaa9661d25_h.jpg', '2003-07-07', 'Đắk Lắk', 'Chụp ảnh'),
(2, 'Quang Thành', 'Nam', 'quangthanh@gmail.com', 'https://live.staticflickr.com/65535/51309445022_1d7c3e3671_z.jpg', '2021-12-01', 'Buôn Ma Thuột', 'Xem stream'),
(3, 'Nguyễn Tấn Dũng', 'Nam', 'ntdvlog1683@gmail.com', 'https://live.staticflickr.com/65535/51718007430_84c9b055b5_z.jpg', '2003-08-16', 'Buôn Ma Thuột', 'Chụp ảnh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_model`
--
ALTER TABLE `info_model`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_model`
--
ALTER TABLE `info_model`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
