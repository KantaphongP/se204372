-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 04:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databasese`
--

-- --------------------------------------------------------

--
-- Table structure for table `petition`
--

CREATE TABLE `petition` (
  `id_p` int(11) NOT NULL,
  `date_d` date NOT NULL,
  `id_t` int(11) NOT NULL,
  `id_c` int(11) NOT NULL,
  `id_s` varchar(11) NOT NULL,
  `status_ap_company` varchar(12) NOT NULL,
  `position_s` varchar(50) NOT NULL,
  `name_getbook` varchar(50) NOT NULL,
  `position_g` varchar(50) NOT NULL,
  `name_hr` varchar(50) NOT NULL,
  `phone_hr` varchar(10) NOT NULL,
  `email_hr` varchar(50) NOT NULL,
  `apartment` varchar(5) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `status_approve` varchar(12) NOT NULL,
  `reason` varchar(50) DEFAULT NULL,
  `year` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petition`
--

INSERT INTO `petition` (`id_p`, `date_d`, `id_t`, `id_c`, `id_s`, `status_ap_company`, `position_s`, `name_getbook`, `position_g`, `name_hr`, `phone_hr`, `email_hr`, `apartment`, `date_start`, `date_end`, `status_approve`, `reason`, `year`) VALUES
(3, '2022-03-02', 1, 1, 'b6220503555', 'รอดำเนินการ', 'เล่นเกม', 'มี่', 'หัวหน้าหมู', 'มี่', '7777777', 'thidarat.pi@ku.th', 'มี', '2022-03-01', '2022-03-01', 'ไม่อนุมัติ', '', '2564'),
(4, '2022-03-24', 1, 6, 'b6220503555', 'รอดำเนินการ', 'eryery5ht', 'rhrtht', 'htrhtt', 'hhhhhhtrh', 'rhtrh', 'trhthth', 'มี', '2022-03-14', '2022-04-01', 'ไม่อนุมัติ', 'เหตุผลข้อเดียวเท่านั้น', '2564'),
(5, '2022-03-01', 1, 5, 'b6220504444', 'รอดำเนินการ', 'เล่นเกม', 'มาเรียม คงคี', 'ชั้นเป็นเจ้านายแก', 'ดาวเด่น ดวงเดือน', '7777777', '', 'ไม่มี', '2022-03-14', '2022-04-09', 'รอดำเนินการ', NULL, '2563'),
(6, '2022-03-25', 2, 1, 'b6220504444', 'รอดำเนินการ', 'kkkk', 'vfdvfdbfd', 'advffdafv', 'vfdvfdv', 'vfdvfvf', 'vfdavfdv', '2564', '2022-03-22', '2022-03-31', 'รอดำเนินการ', NULL, '2563'),
(7, '2022-03-09', 2, 5, 'b6220504444', 'รอดำเนินการ', 'dvdvd', 'cvdv', 'vxvd', 'dxvd', 'vdvdxv', 'vdxvdddd', 'dvdv', '2022-03-16', '2022-03-30', 'รอดำเนินการ', NULL, '2564');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `petition`
--
ALTER TABLE `petition`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `id_t` (`id_t`),
  ADD KEY `id_c` (`id_c`),
  ADD KEY `id_s` (`id_s`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petition`
--
ALTER TABLE `petition`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `petition`
--
ALTER TABLE `petition`
  ADD CONSTRAINT `petition_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `company` (`id_c`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `petition_ibfk_3` FOREIGN KEY (`id_t`) REFERENCES `type` (`id_t`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `petition_ibfk_5` FOREIGN KEY (`id_s`) REFERENCES `student` (`id_s`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
