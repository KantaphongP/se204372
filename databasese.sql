-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 07:52 PM
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
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id_c` int(11) NOT NULL,
  `name_c` varchar(50) NOT NULL,
  `address_c` varchar(50) NOT NULL,
  `phone_c` varchar(10) NOT NULL,
  `quantity` int(5) NOT NULL,
  `income` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id_c`, `name_c`, `address_c`, `phone_c`, `quantity`, `income`) VALUES
(1, 'โกไฟต์กับใคร', 'สมุดหนังสือ', '9999999', 8, 400),
(2, 'yyy', 'gg', '33333', 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `crq`
--

CREATE TABLE `crq` (
  `id_p` int(11) NOT NULL,
  `status_crq` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `internship_record`
--

CREATE TABLE `internship_record` (
  `id_p` int(11) NOT NULL,
  `result` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `id_l` int(11) NOT NULL,
  `name_l` varchar(50) NOT NULL,
  `lastname_l` varchar(50) NOT NULL,
  `passwords` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`id_l`, `name_l`, `lastname_l`, `passwords`) VALUES
(0, 'อนุมัติ', 'อนุมัติ', 'jjjjj');

-- --------------------------------------------------------

--
-- Table structure for table `petition`
--

CREATE TABLE `petition` (
  `id_p` int(11) NOT NULL,
  `date_d` date NOT NULL,
  `id_t` int(11) NOT NULL,
  `id_l` int(11) DEFAULT NULL,
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
  `status_approve` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petition`
--

INSERT INTO `petition` (`id_p`, `date_d`, `id_t`, `id_l`, `id_c`, `id_s`, `status_ap_company`, `position_s`, `name_getbook`, `position_g`, `name_hr`, `phone_hr`, `email_hr`, `apartment`, `date_start`, `date_end`, `status_approve`) VALUES
(3, '2022-03-02', 1, NULL, 1, 'b6220503555', 'รอดำเนินการ', 'เล่นเกม', 'มี่', 'หัวหน้าหมู', 'มี่', '7777777', 'thidarat.pi@ku.th', 'มี', '2022-03-01', '2022-03-01', 'ไม่อนุมัติ');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_s` varchar(11) NOT NULL,
  `name_s` varchar(50) DEFAULT NULL,
  `lastname_s` varchar(50) DEFAULT NULL,
  `passwords` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_s` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_s`, `name_s`, `lastname_s`, `passwords`, `email`, `phone_s`) VALUES
('b6220503555', ',มาติกาน', 'โทรหาใคร', 'lovebabe', 'matikarn.t@ku.th', '555555');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_t` int(11) NOT NULL,
  `name_t` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_t`, `name_t`) VALUES
(1, 'ภาคฤดูร้อน'),
(2, 'สหกิจ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `crq`
--
ALTER TABLE `crq`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `id_p` (`id_p`);

--
-- Indexes for table `internship_record`
--
ALTER TABLE `internship_record`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `id_p` (`id_p`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`id_l`);

--
-- Indexes for table `petition`
--
ALTER TABLE `petition`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `id_t` (`id_t`),
  ADD KEY `id_l` (`id_l`),
  ADD KEY `id_c` (`id_c`),
  ADD KEY `id_s` (`id_s`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_s`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_t`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `petition`
--
ALTER TABLE `petition`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_t` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `crq`
--
ALTER TABLE `crq`
  ADD CONSTRAINT `crq_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `petition` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `internship_record`
--
ALTER TABLE `internship_record`
  ADD CONSTRAINT `internship_record_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `petition` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `petition`
--
ALTER TABLE `petition`
  ADD CONSTRAINT `petition_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `company` (`id_c`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `petition_ibfk_3` FOREIGN KEY (`id_t`) REFERENCES `type` (`id_t`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `petition_ibfk_4` FOREIGN KEY (`id_l`) REFERENCES `lecturer` (`id_l`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `petition_ibfk_5` FOREIGN KEY (`id_s`) REFERENCES `student` (`id_s`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
