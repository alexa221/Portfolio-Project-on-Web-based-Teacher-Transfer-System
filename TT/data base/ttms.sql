-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 01:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ttms`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `u_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(40) NOT NULL,
  `status` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`u_id`, `username`, `password`, `role`, `status`) VALUES
(9, 'metadel/9', '81dc9bdb52d04dc20036dbd8313ed055', 'zmersu', '1'),
(10, 'mehari/10', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', '1'),
(11, 'yadelew/11', 'ea8d40e40c55ab8dd154f7e4ee46b636', 'wmersu', '1'),
(12, 'mengistu/12', 'f87cc5c72341e09f6102762f321f2f02', 'wmersu', '1'),
(13, 'tadesse/13', '7a67c5d7628ddcd6e340328cf7bd1964', 'wmersu', '1'),
(14, 'mulugeta/14', '81dc9bdb52d04dc20036dbd8313ed055', 'wmersu', '1'),
(15, 'wudneh/15', '81dc9bdb52d04dc20036dbd8313ed055', 'wmersu', '1'),
(16, 'hilena/16', '81dc9bdb52d04dc20036dbd8313ed055', 'wmersu', '1'),
(17, 'yalew/17', 'd6d9dbd662b58c3e9aee21887ed66397', 'wmersu', '1'),
(18, 'debebe/18', 'b3d3cf1979cf9a989eeefe224bbb7ebb', 'wmersu', '1'),
(102, 'Aysey/102', 'ce90345b7128e7bfba1e66ec9626092c', 'teacher', '0'),
(103, 'kassahun/103', '4bcea9d9e2eab0e7ca7657ca7d9ab9fe', 'teacher', '1'),
(108, 'gojame/108', 'e0012f1c0359e201a7d5ab4c680e5120', 'teacher', '1'),
(109, 'hiwot/109', 'e7a015e7a73f10eec1b2f94c2b92b5dd', 'teacher', '1'),
(110, 'Mezgebu/110', '0e5151efd31c14fbdec4de4b9c28093d', 'director', '1'),
(111, 'mesert/111', 'ee239cd3f7b5c5aa4cf44070aef7c2c2', 'teacher', '1'),
(112, 'kelem/112', '5f304229faea3c369c69e5830ed8198d', 'teacher', '1'),
(113, 'habtamu/113', 'aa9b5cab18f759e082d296ea9769afd5', 'teacher', '1'),
(114, 'habtie/114', '721a51991badc292069f08d2c0100522', 'teacher', '1'),
(115, 'haimanot/115', 'b866700ce38e29e0bfedf0b9febef851', 'teacher', '1'),
(116, 'mandie/116', 'a90196bca61f5636ffc153b0fbf6ced5', 'teacher', '1'),
(117, 'marga/117', '1cc3249efd67028367f9fb2699a9607f', 'teacher', '1'),
(118, 'muluken/118', 'cf0e2352ed5f2aca979778e3c23ff3f2', 'teacher', '1'),
(120, 'yonatan/120', '74ee1363206bd6de6a21e8b3c36d5a60', 'director', '1'),
(121, 'zewdu/121', 'e7a015e7a73f10eec1b2f94c2b92b5dd', 'director', '1'),
(122, 'meskerem/122', 'af2ffd2b421acdf105d968f5bdc2f0b7', 'director', '1'),
(123, 'beti/123', '5909ff08088582d6df84799cc91790b4', 'director', '1'),
(124, 'HIZKIEL/124', 'd134f3ee7f6fbe3b2f835c19e5149bab', 'teacher', '1'),
(125, 'ABAEL/125', '6386c38805cffc5958d8dd6633c61c65', 'teacher', '1'),
(126, 'ABEBE/126', '20d8c2e0c39848441511ab296e31df80', 'teacher', '1'),
(127, 'ABSRA/127', '33090c938fbd3a93e1408da6d01ca746', 'teacher', '1'),
(128, 'ADDISIE/128', 'e9cc67148640b47e9759936cbc9cbdff', 'teacher', '1'),
(129, 'ADISU/129', '60974896ef9b6f9ae2b831a29cd839be', 'teacher', '1'),
(130, 'AGUMAS/130', '58688f5dba6296dd7be19b1fecd58bba', 'teacher', '1'),
(131, 'ALEMAYEHU/131', '2db469965393d9f01946ae5c2f832ab8', 'teacher', '1'),
(132, 'AMANUEL/132', 'd134f3ee7f6fbe3b2f835c19e5149bab', 'teacher', '1'),
(133, 'SIMACHEW/133', '12c210b3bae252518e35fbc2e902665d', 'teacher', '1'),
(134, 'ANDUAMLAK/134', '46825c16e738eaed1c1514203a558654', 'director', '1'),
(135, 'MENGISTIE/135', 'e02c1725b6aa33cb1e711768368b62f8', 'director', '1'),
(136, 'GETU/136', 'a1efc455f83cbb65260a0fcf7ca8576d', 'director', '1'),
(137, 'GETAHUN/137', 'c09878b645cf71432cf4a41b99acc121', 'director', '1'),
(138, 'GEDAMU/138', '57b3f01d8afda87cb4fafa529143fc8d', 'teacher', '1'),
(139, 'GASHAW/139', '093d3a3aeda23046cf1cb94bac8bedf7', 'teacher', '1'),
(140, 'ESUBALEW/140', 'c42e86bf98ac6b23dfef514d83100be4', 'teacher', '1'),
(141, 'SELAMWIT/141', '5109eebe341f7f1b51256a6fbc7f61ca', 'teacher', '1'),
(142, 'MOGES/142', 'fb00c606ca001414aebf7e176b6be4da', 'teacher', '1'),
(143, 'SOLOMON/143', '5c732e0645b35fa0aa24242dd07d525f', 'director', '1'),
(144, 'MEKDES/144', '49bade6eb65379cda09f6002661e8da1', 'director', '1'),
(145, 'ABEBECH/145', 'f9b971475bf2a8f1b7723bd75a5ef387', 'director', '1'),
(146, 'DESTA/146', 'a2c1e35febde7eb52e98668945d735ea', 'teacher', '1'),
(147, 'FIKADIE/147', 'd5b210684604b3b9063362f629a72425', 'teacher', '1'),
(148, 'ESUBALEW/148', 'c42e86bf98ac6b23dfef514d83100be4', 'teacher', '1'),
(149, 'ESKEDAR/149', '9aebf2f51425162bdc266773d8e3a830', 'teacher', '1'),
(150, 'ENDALEW/150', '3358c1330db6aea2d274eb4a1b61cb55', 'teacher', '1'),
(151, 'ELSA/151', 'eb5eebc91f459eac7d6ff8ae818b2b36', 'teacher', '1'),
(152, 'ELISABET/152', '1473dfbe9cfdd43e77b7fda1d041da83', 'teacher', '1'),
(153, 'DEBASU/153', 'f05c8ee1d9592d8b51b56902c4c73fdd', 'director', '1'),
(154, 'BIRHANU/154', '02e751a7ac6e37c2e0e10beb92900129', 'director', '1'),
(155, 'BELAYNESH/155', '08dd7571253219a0dafacf1ba9a6fe75', 'director', '1'),
(156, 'AWOKE/156', '170c3ad19942c394a1ba4fdccbf02b6d', 'director', '1'),
(157, 'ARAGAW/157', '1068869bcbd61e3511710ec7397f5af4', 'teacher', '1'),
(158, 'molla/158', 'aba4cacb24c2033cd40fe4ae2c42cebb', 'teacher', '1'),
(159, 'zelalem/159', '2194c4bfacf4b791cb9254be8a87ad91', 'teacher', '1'),
(160, 'desalegn/160', '07e882e91e22b768b74751057ad610c1', 'teacher', '1'),
(161, 'geremew/161', 'e7a015e7a73f10eec1b2f94c2b92b5dd', 'teacher', '1'),
(162, 'kebede/162', '4fe39f22d1834b3741612e0ff889c3c6', 'teacher', '1'),
(163, 'Lamesigin/163', '2d81d10bb6a489cf78a3fd4ad5aff366', 'teacher', '1'),
(164, 'Ayalew/164', 'dc95ded7ae1ea210d0ce78de89a5227c', 'teacher', '1'),
(165, 'Abiriham/165', '51832c871384cfec2b2821c76008198b', 'teacher', '1'),
(166, 'Alemu/166', 'd167aa2ba5399dae959f1981e6575a1e', 'teacher', '1'),
(167, 'melese/167', '9a1282cc8a74b1c0dbbd793754ff90b0', 'teacher', '1'),
(168, 'seble/168', '57e9794f925ee7aa5f25c422e5087573', 'teacher', '1'),
(169, 'tegaye/169', 'ddeb7bbba7807ec83e6e34d6a81ff4af', 'teacher', '1'),
(170, 'bewket/170', '7bd78784e655ee6103f8b496df14c7b8', 'teacher', '1'),
(171, 'yalem/171', 'ab454e083e0ec1a8d58bc196247bfa27', 'teacher', '1'),
(172, 'emebet/172', '0d556f3dd567654cad31131f8c93c3a4', 'teacher', '1'),
(173, 'Gashaw/173', '1d3d328c0b60f51e3b9e5cdf6af4d2de', 'teacher', '1'),
(174, 'mihret/174', '863cacfc0a399990a4db29dbd46dd31b', 'teacher', '1'),
(175, 'Tibeb/175', '89f9d9948f95201582167d194cb39a17', 'teacher', '1'),
(179, 'gebre/179', 'bc814eaa35c259fa1e0e8934bca1d14e', 'teacher', '1'),
(180, 'chalachew/180', '7b9611952aeaa5331c19420bf718dbc4', 'teacher', '1'),
(181, 'lalem/181', '7714ce35304c954600e71a53d7c6b14e', 'teacher', '1'),
(182, 'seble/182', 'd8301bce7e989dcf281b92352c0b2c42', 'teacher', '1'),
(183, 'zelalem/183', '46bdb3e96823b7cfe809854af0227d25', 'teacher', '1'),
(184, 'dawite/184', '44b157962f396988bc09dd3307ef7ab7', 'teacher', '1'),
(185, 'Biniyam/185', '0c78133aea1c106ed691ac25ed8cbd99', 'teacher', '1'),
(186, 'senayt/186', '33959e995605e38512d6317e4e8b1636', 'teacher', '1'),
(187, 'Lijalem/187', '518a1b98fc6e33668dd8de91af8ad701', 'teacher', '1'),
(189, 'gebere/189', '1d6009fde4a980280a06cae2e1608a4e', 'teacher', '1'),
(190, 'molalgn/190', '0b1c01b097c63af3eb12d9196d9cfc7d', 'teacher', '1'),
(192, 'yared/192', 'bc814eaa35c259fa1e0e8934bca1d14e', 'teacher', '1'),
(193, 'ababa/193', '1d6009fde4a980280a06cae2e1608a4e', 'teacher', '1');

-- --------------------------------------------------------

--
-- Table structure for table `apply_date`
--

CREATE TABLE `apply_date` (
  `ApplyDateID` int(11) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_date`
--

INSERT INTO `apply_date` (`ApplyDateID`, `StartDate`, `EndDate`) VALUES
(1, '2022-07-01', '2023-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `archive_result`
--

CREATE TABLE `archive_result` (
  `Ar_id` int(11) NOT NULL,
  `RID` int(11) NOT NULL,
  `wcode` varchar(88) NOT NULL,
  `Fname` varchar(45) NOT NULL,
  `Lname` varchar(45) NOT NULL,
  `major` varchar(50) NOT NULL,
  `T_woreda_id` varchar(88) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `archive_school_form`
--

CREATE TABLE `archive_school_form` (
  `Aid` int(11) NOT NULL,
  `trid` int(11) NOT NULL,
  `Fname` varchar(45) NOT NULL,
  `Lname` varchar(45) NOT NULL,
  `dateofocp` date NOT NULL,
  `major` varchar(88) NOT NULL,
  `wcode` int(11) NOT NULL,
  `sid` varchar(110) NOT NULL,
  `service` int(11) NOT NULL,
  `first_choice` varchar(110) NOT NULL,
  `second_choice` varchar(88) NOT NULL,
  `third_choice` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `archive_school_result`
--

CREATE TABLE `archive_school_result` (
  `Arid` int(11) NOT NULL,
  `RID` int(11) NOT NULL,
  `sid` varchar(110) NOT NULL,
  `wcode` varchar(45) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(88) NOT NULL,
  `major` varchar(45) NOT NULL,
  `T_School_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `archive_transfer_form`
--

CREATE TABLE `archive_transfer_form` (
  `Ar_id` int(11) NOT NULL,
  `wtrid` int(11) NOT NULL,
  `Fname` varchar(88) NOT NULL,
  `Lname` varchar(45) NOT NULL,
  `dateofocp` date NOT NULL,
  `major` varchar(88) NOT NULL,
  `wcode` varchar(45) NOT NULL,
  `service` int(11) NOT NULL,
  `first_choice` varchar(50) NOT NULL,
  `second_choice` varchar(88) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request_table`
--

CREATE TABLE `request_table` (
  `R_id` int(11) NOT NULL,
  `Did` int(11) NOT NULL,
  `wcode` int(11) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Amharic` int(11) NOT NULL,
  `English` int(11) NOT NULL,
  `Biology` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL,
  `Physics` int(11) NOT NULL,
  `ICT` int(11) NOT NULL,
  `Total_teach` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_table`
--

INSERT INTO `request_table` (`R_id`, `Did`, `wcode`, `sid`, `Name`, `Amharic`, `English`, `Biology`, `Chemistry`, `Physics`, `ICT`, `Total_teach`) VALUES
(28, 153, 8, '105', 'DEBASU', 0, 1, 0, 1, 0, 1, 7),
(30, 154, 8, '106', 'BIRHANU', 1, 0, 0, 0, 1, 0, 10),
(31, 155, 8, '107', 'BELAYNESH', 0, 0, 1, 0, 0, 1, 6),
(32, 156, 8, '117', 'AWOKE', 0, 1, 0, 0, 1, 0, 7),
(33, 110, 1, '100', 'Mezgebu', 0, 1, 1, 0, 1, 1, 7),
(34, 143, 1, '102', 'SOLOMON', 1, 1, 1, 1, 0, 1, 6),
(35, 144, 1, '103', 'MEKDES', 1, 0, 0, 1, 0, 0, 4),
(36, 145, 1, '104', 'ABEBECH', 0, 0, 0, 1, 1, 1, 6),
(37, 120, 6, '111', 'yonatan', 1, 1, 0, 0, 1, 0, 4),
(38, 121, 6, '112', 'zewdu', 0, 1, 0, 0, 1, 0, 4),
(39, 122, 6, '113', 'meskerem', 0, 0, 0, 1, 0, 1, 7),
(40, 123, 6, '114', 'beti', 0, 0, 1, 1, 0, 0, 5),
(42, 135, 7, '110', 'MENGISTIE', 1, 0, 0, 0, 0, 1, 4),
(43, 136, 7, '116', 'GETU', 1, 1, 0, 0, 1, 0, 6),
(44, 137, 7, '115', 'GETAHUN', 1, 1, 0, 1, 0, 0, 4),
(45, 134, 7, '109', 'ANDUAMLAK', 0, 0, 1, 1, 1, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `RID` int(11) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `wcode` int(11) NOT NULL,
  `Fname` varchar(40) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  `T_School_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `sid` int(1) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `slevel` varchar(100) NOT NULL,
  `wcode` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`sid`, `sname`, `slevel`, `wcode`, `rank`, `date`) VALUES
(100, 'Achefer', 'Secondary School', 1, 2, '2022-06-16'),
(101, 'yismala', 'Secondary School', 2, 2, '2022-06-16'),
(102, 'liben', 'Secondary School', 1, 2, '2022-06-16'),
(103, 'schoolB', 'Secondary School', 1, 2, '2022-06-16'),
(104, 'schoolC', 'Secondary School', 1, 2, '2022-06-16'),
(105, 'Abay Minch', 'Secondary School', 8, 2, '2022-06-17'),
(106, 'Gishi Abay', 'Secondary School', 8, 2, '2022-06-17'),
(107, 'Zeleke desta', 'Secondary School', 8, 3, '2022-06-17'),
(108, 'schoolD', 'Secondary School', 1, 4, '2022-06-17'),
(109, 'Mengescha', 'Secondary School', 7, 3, '2022-06-17'),
(110, 'Bure shikudad', 'Secondary School', 7, 2, '2022-06-17'),
(111, 'Alefa', 'Secondary School', 6, 2, '2022-06-17'),
(112, 'fendika', 'Secondary School', 6, 2, '2022-06-17'),
(113, 'shaka', 'Secondary School', 6, 3, '2022-06-17'),
(114, 'Giorgis', 'Secondary School', 6, 2, '2022-06-17'),
(115, 'burie Abo', 'Secondary School', 7, 4, '2022-06-20'),
(116, 'burie damote', 'Secondary School', 7, 3, '2022-06-20'),
(117, 'sekella', 'Primary School', 8, 2, '2022-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `age` varchar(40) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `role` varchar(100) NOT NULL,
  `dateofocp` date NOT NULL,
  `levelofedu` varchar(30) NOT NULL,
  `major` varchar(100) NOT NULL,
  `wcode` int(11) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `service` int(11) DEFAULT NULL,
  `salary` int(11) NOT NULL,
  `To_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `Fname`, `Lname`, `age`, `sex`, `role`, `dateofocp`, `levelofedu`, `major`, `wcode`, `sid`, `service`, `salary`, `To_day`) VALUES
(102, 'Aysey', 'lamesgin', '23', 'male', 'teacher', '2017-05-16', 'Degree', 'Biology', 1, '100', 163123200, 3000, '2022-07-17'),
(103, 'kassahun', 'gebrie', '23', 'male', 'teacher', '2016-04-16', 'Degree', 'Amharic', 1, '100', 197251200, 3000, '2022-07-17'),
(108, 'gojame', 'zeleke', '23', 'femal', 'teacher', '2016-04-16', 'Degree', 'Biology', 1, '102', 197251200, 1234, '2022-07-17'),
(109, 'hiwot', 'worku', '23', 'femal', 'teacher', '2019-05-16', 'Degree', 'English', 1, '102', 100051200, 1234, '2022-07-17'),
(110, 'Mezgebu', 'Melese', '23', 'male', 'director', '2017-05-16', 'Degree', 'ICT', 1, '100', 163123200, 5345, '2022-07-17'),
(111, 'mesert', 'melkamu', '23', 'male', 'teacher', '2016-12-09', 'Degree', 'Biology', 1, '103', 176770800, 3465, '2022-07-17'),
(112, 'kelem', 'getahun', '20', 'femal', 'teacher', '2019-05-17', 'Degree', 'Amharic', 1, '100', 99964800, 4906, '2022-07-17'),
(113, 'habtamu', 'asmare', '23', 'male', 'teacher', '2015-05-17', 'Degree', 'Amharic', 6, '111', 226195200, 5345, '2022-07-17'),
(114, 'habtie', 'dagne', '23', 'male', 'teacher', '2016-04-17', 'Degree', 'Physics', 6, '112', 197164800, 3465, '2022-07-17'),
(115, 'haimanot', 'genanew', '23', 'male', 'teacher', '2018-04-17', 'Degree', 'Chemistry', 6, '113', 134092800, 4906, '2022-07-17'),
(116, 'mandie', 'Biyazn', '23', 'male', 'teacher', '2018-04-17', 'Degree', 'ICT', 6, '114', 134092800, 5345, '2022-07-17'),
(117, 'marga', 'fenta', '23', 'male', 'teacher', '2018-12-17', 'Degree', 'ICT', 6, '114', 113007600, 5345, '2022-07-17'),
(118, 'muluken', 'bekele', '24', 'male', 'teacher', '2017-03-17', 'Degree', 'Amharic', 6, '111', 168303600, 5345, '2022-07-17'),
(120, 'yonatan', 'aduna', '23', 'male', 'director', '2016-02-17', 'Degree', 'Biology', 6, '111', 202345200, 5345, '2022-07-17'),
(121, 'zewdu', 'worku', '25', 'male', 'director', '2017-04-17', 'Degree', 'Physics', 6, '112', 165628800, 5345, '2022-07-17'),
(122, 'meskerem', 'fekadu', '24', 'femal', 'director', '2019-12-17', 'Degree', 'Amharic', 6, '113', 81471600, 6000, '2022-07-17'),
(123, 'beti', 'negrew', '22', 'femal', 'director', '2018-04-17', 'Degree', 'Biology', 6, '114', 134092800, 4900, '2022-07-17'),
(124, 'HIZKIEL', 'MENGISTIE', '24', 'male', 'teacher', '2016-02-08', 'Degree', 'Chemistry', 6, '113', 203122800, 4900, '2022-07-17'),
(125, 'ABAEL', 'BIZUAYEHU', '25', 'male', 'teacher', '2018-03-20', 'Degree', 'Physics', 6, '112\r\n', 136508400, 4900, '2022-07-17'),
(126, 'ABEBE', 'ALEM', '23', 'male', 'teacher', '2016-10-20', 'Degree', 'Amharic', 7, '115', 181094400, 4906, '2022-07-17'),
(127, 'ABSRA', 'GETALEM', '20', 'femal', 'teacher', '2018-02-28', 'Degree', 'English', 7, '109', 138236400, 4900, '2022-07-17'),
(128, 'ADDISIE', 'TENAW', '23', 'femal', 'teacher', '2015-02-28', 'Degree', 'Amharic', 7, '109', 232930800, 4906, '2022-07-17'),
(129, 'ADISU', 'KEBEDE', '20', 'male', 'teacher', '2015-11-20', 'Degree', 'English', 7, '115', 210034800, 4900, '2022-07-17'),
(130, 'AGUMAS', 'GETIE', '20', 'male', 'teacher', '2019-05-10', 'Degree', 'Biology', 7, '116', 100569600, 4900, '2022-07-17'),
(131, 'ALEMAYEHU', 'SEFINEH', '24', 'male', 'teacher', '2018-01-20', 'Degree', 'Biology', 7, '116', 141606000, 4906, '2022-07-17'),
(132, 'AMANUEL', 'MENGISTIE', '20', 'male', 'teacher', '2017-02-20', 'Degree', 'Chemistry', 7, '116', 170463600, 4900, '2022-07-17'),
(133, 'SIMACHEW', 'ADMAS', '23', 'male', 'teacher', '2017-04-20', 'Degree', 'Chemistry', 7, '116', 165369600, 4900, '2022-07-17'),
(134, 'ANDUAMLAK', 'TEMESGEN', '24', 'male', 'director', '2015-03-20', 'M.Sc', 'Biology', 7, '109', 231202800, 4906, '2022-07-17'),
(135, 'MENGISTIE', 'KELEMU', '23', 'male', 'director', '2015-03-20', 'Degree', 'Chemistry', 7, '110', 231202800, 6000, '2022-07-17'),
(136, 'GETU', 'WONDIMAGENE', '23', 'male', 'director', '2018-03-20', 'M.Sc', 'English', 7, '116', 136508400, 4900, '2022-07-17'),
(137, 'GETAHUN', 'MULU', '20', 'male', 'director', '2014-03-20', 'M.Sc', 'Chemistry', 7, '115', 262738800, 3465, '2022-07-17'),
(138, 'GEDAMU', 'GETAHUN', '20', 'male', 'teacher', '2017-02-08', 'Degree', 'English', 7, '115', 171500400, 3465, '2022-07-17'),
(139, 'GASHAW', 'ABYE', '20', 'male', 'teacher', '2022-04-30', 'Degree', 'Biology', 7, '115', 6739200, 4906, '2022-07-17'),
(140, 'ESUBALEW', 'GEBRIE', '20', 'male', 'teacher', '2021-01-20', 'Degree', 'Physics', 7, '115', 46911600, 6000, '2022-07-17'),
(141, 'SELAMWIT', 'BEKALU', '23', 'femal', 'teacher', '2017-03-20', 'Degree', 'English', 1, '102', 168044400, 4906, '2022-07-17'),
(142, 'MOGES', 'ABEBAW', '20', 'male', 'teacher', '2016-01-20', 'Degree', 'ICT', 1, '100', 204764400, 6000, '2022-07-17'),
(143, 'SOLOMON', 'YOHANS', '20', 'male', 'director', '2016-08-20', 'M.Sc', 'Chemistry', 1, '102', 186364800, 6000, '2022-07-17'),
(144, 'MEKDES', 'MOLLA', '20', 'femal', 'director', '2015-04-20', 'Degree', 'Biology', 1, '103', 228528000, 6000, '2022-07-17'),
(145, 'ABEBECH', 'HAILU', '20', 'femal', 'director', '2016-02-20', 'Degree', 'Physics', 1, '104', 202086000, 6000, '2022-07-17'),
(146, 'DESTA', 'TESFAYE', '23', 'male', 'teacher', '2017-04-20', 'Degree', 'Mathematics', 1, '102', 165369600, 4906, '2022-07-17'),
(147, 'FIKADIE', 'AMBAW', '20', 'male', 'teacher', '2015-04-20', 'Degree', 'English', 8, '105', 228528000, 4900, '2022-07-17'),
(148, 'ESUBALEW', 'GEBRIE', '24', 'male', 'teacher', '2016-04-20', 'Degree', 'English', 8, '105', 196905600, 6000, '2022-07-17'),
(149, 'ESKEDAR', 'MIKRIE', '23', 'femal', 'teacher', '2017-02-20', 'Degree', 'Biology', 8, '106', 170463600, 6000, '2022-07-17'),
(150, 'ENDALEW', 'WORKU', '23', 'male', 'teacher', '2016-04-20', 'Degree', 'Biology', 8, '106', 196905600, 6000, '2022-07-17'),
(151, 'ELSA', 'DEMILEW', '23', 'femal', 'teacher', '2017-03-20', 'Degree', 'ICT', 8, '107', 168044400, 4900, '2022-07-17'),
(152, 'ELISABET', 'TILAHUN', '20', 'femal', 'teacher', '2015-04-20', 'Degree', 'ICT', 8, '107', 228528000, 4906, '2022-07-17'),
(153, 'DEBASU', 'ADISIA', '23', 'male', 'director', '2016-04-20', 'M.Sc', 'Amharic', 8, '105', 196905600, 6000, '2022-07-17'),
(154, 'BIRHANU', 'WONDAY', '23', 'male', 'director', '2014-04-20', 'M.Sc', 'Chemistry', 8, '106', 260064000, 6000, '2022-07-17'),
(155, 'BELAYNESH', 'AYALEW', '20', 'male', 'director', '2016-05-20', 'Degree', 'Biology', 8, '107', 194313600, 6000, '2022-07-17'),
(156, 'AWOKE', 'MIHARI', '23', 'male', 'director', '2017-04-20', 'Degree', 'Physics', 8, '117', 165369600, 4906, '2022-07-17'),
(157, 'ARAGAW', 'DAGNAW', '20', 'male', 'teacher', '2016-03-20', 'Degree', 'Chemistry', 8, '117', 199580400, 4906, '2022-07-17'),
(158, 'molla', 'gebeyehu', '20', 'male', 'teacher', '2015-04-20', 'Degree', 'Amharic', 8, '117', 228528000, 4900, '2022-07-17'),
(159, 'zelalem', 'asefa', '23', 'male', 'teacher', '2018-02-22', 'Degree', 'Amharic', 7, '110', 138754800, 4900, '2022-07-17'),
(160, 'desalegn', 'ferede', '20', 'male', 'teacher', '2017-10-22', 'Degree', 'English', 7, '109', 149385600, 3465, '2022-07-17'),
(161, 'geremew', 'worku', '23', 'male', 'teacher', '2018-01-08', 'Degree', 'Chemistry', 7, '115', 142642800, 4906, '2022-07-17'),
(162, 'kebede', 'zelalem', '23', 'male', 'teacher', '2017-04-06', 'Degree', 'ICT', 7, '110', 166579200, 6000, '2022-07-17'),
(163, 'Lamesigin', 'sewale', '23', 'male', 'teacher', '2016-04-22', 'Degree', 'ICT', 7, '110', 196732800, 6000, '2022-07-17'),
(164, 'Ayalew', 'Tariku', '23', 'male', 'teacher', '2014-04-22', 'Degree', 'Physics', 7, '109', 259891200, 6000, '2022-07-17'),
(165, 'Abiriham', 'Abnate', '23', 'male', 'teacher', '2018-05-22', 'Degree', 'Biology', 7, '109', 131068800, 5345, '2022-07-17'),
(166, 'Alemu', 'chanie', '23', 'male', 'teacher', '2017-03-22', 'Degree', 'Chemistry', 7, '109', 167871600, 4900, '2022-07-17'),
(167, 'melese', 'gizachew', '23', 'male', 'teacher', '2016-03-22', 'Degree', 'ICT', 7, '110', 199407600, 4900, '2022-07-17'),
(168, 'seble', 'balew', '20', 'femal', 'teacher', '2016-03-22', 'Degree', 'Amharic', 7, '116', 199407600, 6000, '2022-07-17'),
(169, 'tegaye', 'mulu', '23', 'male', 'teacher', '2016-04-22', 'Degree', 'ICT', 7, '110', 196732800, 6000, '2022-07-17'),
(170, 'bewket', 'zewdu', '24', 'male', 'teacher', '2015-04-22', 'Degree', 'English', 7, '116', 228355200, 6000, '2022-07-17'),
(171, 'yalem', 'Getie', '23', 'femal', 'teacher', '2019-05-22', 'Degree', 'Amharic', 6, '111', 99532800, 4900, '2022-07-17'),
(172, 'emebet', 'Menber', '23', 'femal', 'teacher', '2020-04-22', 'Degree', 'English', 6, '112', 70502400, 4900, '2022-07-17'),
(173, 'Gashaw', 'Workie', '23', 'male', 'teacher', '2016-04-22', 'Degree', 'Chemistry', 6, '113', 196732800, 4900, '2022-07-17'),
(174, 'mihret', 'Abate', '20', 'femal', 'teacher', '2017-03-22', 'Degree', 'ICT', 6, '114', 167871600, 4900, '2022-07-17'),
(175, 'Tibeb', 'Biadig', '20', 'male', 'teacher', '2020-04-22', 'Degree', 'Biology', 6, '112', 70502400, 6000, '2022-07-17'),
(179, 'gebre', 'alemu', '30', 'male', 'teacher', '2017-06-03', 'Degree', 'English', 7, '110', 161568000, 700, '2022-07-17'),
(180, 'chalachew', 'alehegn', '30', 'male', 'teacher', '2016-05-27', 'Degree', 'Mathematics', 8, '106', 193708800, 3000, '2022-07-17'),
(181, 'lalem', 'yeneneh', '30', 'male', 'teacher', '2016-11-27', 'Degree', 'Biology', 7, '110', 177807600, 3000, '2022-07-17'),
(182, 'seble', 'meshesha', '30', 'male', 'teacher', '2016-08-27', 'Degree', 'Physics', 7, '110', 185760000, 3000, '2022-07-17'),
(183, 'zelalem', 'anmew', '30', 'male', 'teacher', '2017-06-28', 'Degree', 'Amharic', 8, '106', 159408000, 3000, '2022-07-17'),
(184, 'dawite', 'minchile', '20', 'male', 'teacher', '2016-03-28', 'Degree', 'ICT', 8, '106', 198892800, 3000, '2022-07-17'),
(185, 'Biniyam', 'mengistie', '20', 'male', 'teacher', '2013-12-28', 'Degree', 'Biology', 8, '105', 269823600, 3000, '2022-07-17'),
(186, 'senayt', 'Alamiy', '20', 'femal', 'teacher', '2015-04-28', 'Degree', 'Biology', 8, '106', 227836800, 4000, '2022-07-17'),
(187, 'Lijalem', 'Gebru', '23', 'male', 'teacher', '2019-04-28', 'Degree', 'ICT', 8, '106', 101606400, 4000, '2022-07-17'),
(189, 'gebere', 'lamesgen', '20', 'male', 'teacher', '2013-04-29', 'Degree', 'English', 7, '109', 290822400, 3000, '2022-07-17'),
(190, 'molalgn', 'kebede', '20', 'male', 'teacher', '2016-10-28', 'Degree', 'ICT', 7, '109', 180403200, 4000, '2022-07-17'),
(192, 'yared', 'alemu', '20', 'male', 'teacher', '2018-02-22', 'Degree', 'Amharic', 7, '109', 138754800, 3000, '2022-07-17'),
(193, 'ababa', 'lamesgen', '20', 'femal', 'teacher', '2016-03-01', 'Degree', 'Amharic', 7, '109', 201222000, 3000, '2022-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `transfer_form`
--

CREATE TABLE `transfer_form` (
  `trid` int(11) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `age` varchar(40) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `dateofocp` date NOT NULL,
  `levelofedu` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  `wcode` int(11) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `service` int(11) NOT NULL,
  `multiplayer` double NOT NULL,
  `sum_E` int(11) NOT NULL,
  `first_choice` varchar(100) NOT NULL,
  `second_choice` varchar(100) NOT NULL,
  `third_choice` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer_form`
--

INSERT INTO `transfer_form` (`trid`, `Fname`, `Lname`, `age`, `sex`, `dateofocp`, `levelofedu`, `major`, `wcode`, `sid`, `service`, `multiplayer`, `sum_E`, `first_choice`, `second_choice`, `third_choice`, `status`) VALUES
(102, 'Aysey', 'lamesgin', '23', 'male', '2017-05-16', 'Degree', 'Biology', 1, 'Achefer', 163123200, 1.2, 189043200, '102', '103', '104', 'pandding'),
(108, 'gojame', 'zeleke', '23', 'femal', '2016-04-16', 'Degree', 'Biology', 1, 'liben', 197251200, 1.2, 228355200, '100', '103', '104', 'pandding'),
(109, 'hiwot', 'worku', '23', 'femal', '2019-05-16', 'Degree', 'English', 1, 'liben', 100051200, 1.2, 115603200, '100', '103', '104', 'pandding'),
(111, 'mesert', 'melkamu', '23', 'male', '2016-12-09', 'Degree', 'Biology', 1, 'schoolB', 176770800, 1.2, 202690800, '100', '102', '104', 'pandding'),
(112, 'kelem', 'getahun', '20', 'femal', '2019-05-17', 'Degree', 'Amharic', 1, 'Achefer', 99964800, 1.2, 115516800, '102', '103', '104', 'pandding'),
(113, 'habtamu', 'asmare', '23', 'male', '2015-05-17', 'Degree', 'Amharic', 6, 'Alefa', 226195200, 1.2, 262483200, '112', '113', '114', 'transfered'),
(114, 'habtie', 'dagne', '23', 'male', '2016-04-17', 'Degree', 'Physics', 6, 'fendika', 197164800, 1.2, 228268800, '111', '114', '113', 'transfered'),
(115, 'haimanot', 'genanew', '23', 'male', '2018-04-17', 'Degree', 'Chemistry', 6, 'shaka', 134092800, 1.2, 154828800, '111', '114', '112', 'transfered'),
(116, 'mandie', 'Biyazn', '23', 'male', '2018-04-17', 'Degree', 'ICT', 6, 'Giorgis', 134092800, 1.2, 154828800, '111', '112', '113', 'transfered'),
(117, 'marga', 'fenta', '23', 'male', '2018-12-17', 'Degree', 'ICT', 6, 'Giorgis', 113007600, 1.2, 128559600, '111', '112', '113', 'pandding'),
(118, 'muluken', 'bekele', '24', 'male', '2017-03-17', 'Degree', 'Amharic', 6, 'Alefa', 168303600, 1.2, 194223600, '112', '114', '113', 'transfered'),
(124, 'HIZKIEL', 'MENGISTIE', '24', 'male', '2016-02-08', 'Degree', 'Chemistry', 6, 'shaka', 203122800, 1.2, 234226800, '112', '114', '111', 'transfered'),
(125, 'ABAEL', 'BIZUAYEHU', '25', 'male', '2018-03-20', 'Degree', 'Physics', 6, 'fendika', 136508400, 1.2, 157244400, '111', '113', '114', 'pandding'),
(126, 'ABEBE', 'ALEM', '23', 'male', '2016-10-20', 'Degree', 'Amharic', 7, 'Mengescha', 181094400, 1.1, 194054400, '115', '110', '116', 'pandding'),
(127, 'ABSRA', 'GETALEM', '20', 'femal', '2018-02-28', 'Degree', 'English', 7, 'Mengescha', 138236400, 1.1, 148604400, '115', '110', '116', 'transfered'),
(128, 'ADDISIE', 'TENAW', '23', 'femal', '2015-02-28', 'Degree', 'Amharic', 7, 'Mengescha', 232930800, 1.1, 251074800, '115', '116', '110', 'transfered'),
(129, 'ADISU', 'KEBEDE', '20', 'male', '2015-11-20', 'Degree', 'English', 7, 'Mengescha', 210034800, 1.1, 225586800, '115', '110', '116', 'pandding'),
(130, 'AGUMAS', 'GETIE', '20', 'male', '2019-05-10', 'Degree', 'Biology', 7, 'burie damote', 100569600, 1.1, 108345600, '109', '110', '115', 'pandding'),
(131, 'ALEMAYEHU', 'SEFINEH', '24', 'male', '2018-01-20', 'Degree', 'Biology', 7, 'burie damote', 141606000, 1.1, 151974000, '109', '110', '115', 'transfered'),
(132, 'AMANUEL', 'MENGISTIE', '20', 'male', '2017-02-20', 'Degree', 'Chemistry', 7, 'burie damote', 170463600, 1.1, 183423600, '109', '110', '115', 'transfered'),
(133, 'SIMACHEW', 'ADMAS', '23', 'male', '2017-04-20', 'Degree', 'Chemistry', 7, 'burie damote', 165369600, 1.1, 178329600, '110', '115', '109', 'transfered'),
(141, 'SELAMWIT', 'BEKALU', '23', 'femal', '2017-03-20', 'Degree', 'English', 1, 'liben', 168044400, 1.2, 193964400, '100', '103', '104', 'pandding'),
(142, 'MOGES', 'ABEBAW', '20', 'male', '2016-01-20', 'Degree', 'ICT', 1, 'Achefer', 204764400, 1.2, 235868400, '102', '104', '103', 'pandding'),
(147, 'FIKADIE', 'AMBAW', '20', 'male', '2015-04-20', 'Degree', 'English', 8, 'Abay Minch', 228528000, 1.2, 264816000, '106', '107', '117', 'transfered'),
(148, 'ESUBALEW', 'GEBRIE', '24', 'male', '2016-04-20', 'Degree', 'English', 8, 'Abay Minch', 196905600, 1.2, 228009600, '106', '107', '117', 'transfered'),
(149, 'ESKEDAR', 'MIKRIE', '23', 'femal', '2017-02-20', 'Degree', 'Biology', 8, 'Gishi Abay', 170463600, 1.2, 196383600, '105', '107', '117', 'transfered'),
(150, 'ENDALEW', 'WORKU', '23', 'male', '2016-04-20', 'Degree', 'Biology', 8, 'Gishi Abay', 196905600, 1.2, 228009600, '105', '117', '107', 'transfered'),
(151, 'ELSA', 'DEMILEW', '23', 'femal', '2017-03-20', 'Degree', 'ICT', 8, 'Zeleke desta', 168044400, 1.2, 193964400, '105', '106', '117', 'transfered'),
(152, 'ELISABET', 'TILAHUN', '20', 'femal', '2015-04-20', 'Degree', 'ICT', 8, 'Zeleke desta', 228528000, 1.2, 264816000, '105', '117', '106', 'transfered'),
(157, 'ARAGAW', 'DAGNAW', '20', 'male', '2016-03-20', 'Degree', 'Chemistry', 8, 'sekella', 199580400, 1.2, 230684400, '105', '106', '107', 'transfered'),
(158, 'molla', 'gebeyehu', '20', 'male', '2015-04-20', 'Degree', 'Amharic', 8, 'sekella', 228528000, 1.2, 264816000, '105', '107', '106', 'transfered'),
(159, 'zelalem', 'asefa', '23', 'male', '2018-02-22', 'Degree', 'Amharic', 7, 'Mengescha', 138754800, 1.1, 149122800, '115', '110', '116', 'pandding'),
(160, 'desalegn', 'ferede', '20', 'male', '2017-10-22', 'Degree', 'English', 7, 'Mengescha', 149385600, 1.1, 159753600, '110', '116', '115', 'pandding'),
(161, 'geremew', 'worku', '23', 'male', '2018-01-08', 'Degree', 'Chemistry', 7, 'Bure shikudad', 142642800, 1.1, 153010800, '109', '116', '115', 'pandding'),
(162, 'kebede', 'zelalem', '23', 'male', '2017-04-06', 'Degree', 'ICT', 7, 'Bure shikudad', 166579200, 1.1, 179539200, '109', '115', '116', 'transfered'),
(163, 'Lamesigin', 'sewale', '23', 'male', '2016-04-22', 'Degree', 'ICT', 7, 'Mengescha', 196732800, 1.1, 212284800, '110', '115', '116', 'pandding'),
(164, 'Ayalew', 'Tariku', '23', 'male', '2014-04-22', 'Degree', 'Physics', 7, 'Bure shikudad', 259891200, 1.1, 280627200, '109', '116', '115', 'pandding'),
(165, 'Abiriham', 'Abnate', '23', 'male', '2018-05-22', 'Degree', 'Biology', 7, 'burie damote', 131068800, 1.1, 141436800, '109', '110', '115', 'pandding'),
(166, 'Alemu', 'chanie', '23', 'male', '2017-03-22', 'Degree', 'Chemistry', 7, 'Bure shikudad', 167871600, 1.1, 180831600, '109', '115', '116', 'pandding'),
(167, 'melese', 'gizachew', '23', 'male', '2016-03-22', 'Degree', 'ICT', 7, 'Bure shikudad', 199407600, 1.1, 214959600, '109', '115', '116', 'pandding'),
(168, 'seble', 'balew', '20', 'femal', '2016-03-22', 'Degree', 'Amharic', 7, 'burie Abo', 199407600, 1.1, 214959600, '109', '116', '110', 'pandding'),
(169, 'tegaye', 'mulu', '23', 'male', '2016-04-22', 'Degree', 'ICT', 7, 'Bure shikudad', 196732800, 1.1, 212284800, '116', '109', '115', 'pandding'),
(170, 'bewket', 'zewdu', '24', 'male', '2015-04-22', 'Degree', 'English', 7, 'burie Abo', 228355200, 1.1, 246499200, '110', '109', '116', 'pandding'),
(171, 'yalem', 'Getie', '23', 'femal', '2019-05-22', 'Degree', 'Amharic', 6, 'Alefa', 99532800, 1.2, 115084800, '113', '112', '114', 'pandding'),
(172, 'emebet', 'Menber', '23', 'femal', '2020-04-22', 'Degree', 'English', 6, 'fendika', 70502400, 1.2, 80870400, '113', '111', '114', 'pandding'),
(173, 'Gashaw', 'Workie', '23', 'male', '2016-04-22', 'Degree', 'Chemistry', 6, 'shaka', 196732800, 1.2, 227836800, '111', '114', '112', 'pandding'),
(174, 'mihret', 'Abate', '20', 'femal', '2017-03-22', 'Degree', 'ICT', 6, 'Giorgis', 167871600, 1.2, 193791600, '112', '111', '113', 'pandding'),
(175, 'Tibeb', 'Biadig', '20', 'male', '2020-04-22', 'Degree', 'Biology', 6, 'fendika', 70502400, 1.2, 80870400, '113', '114', '111', 'pandding'),
(183, 'zelalem', 'anmew', '30', 'male', '2017-06-28', 'Degree', 'Amharic', 8, 'Gishi Abay', 159408000, 1.2, 185328000, '107', '105', '117', 'transfered'),
(184, 'dawite', 'minchile', '20', 'male', '2016-03-28', 'Degree', 'ICT', 8, 'Gishi Abay', 198892800, 1.2, 229996800, '107', '117', '105', 'transfered'),
(185, 'Biniyam', 'mengistie', '20', 'male', '2013-12-28', 'Degree', 'Biology', 8, 'Abay Minch', 269823600, 1.2, 311295600, '117', '106', '107', 'pandding'),
(186, 'senayt', 'Alamiy', '20', 'femal', '2015-04-28', 'Degree', 'Biology', 8, 'Gishi Abay', 227836800, 1.2, 264124800, '105', '107', '117', 'transfered'),
(187, 'Lijalem', 'Gebru', '23', 'male', '2019-04-28', 'Degree', 'ICT', 8, 'Gishi Abay', 101606400, 1.2, 117158400, '105', '107', '117', 'pandding'),
(192, 'yared', 'alemu', '20', 'male', '2018-02-22', 'Degree', 'Amharic', 7, 'Mengescha', 138754800, 1.1, 149122800, '110', '115', '116', 'pandding');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` text NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `wcode` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` varchar(40) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `fname`, `lname`, `age`, `sex`, `wcode`, `role`, `status`, `date`) VALUES
(9, 'metadel', 'amogne', 23, 'female', 0, 'zmersu', 'Hasaccount', '2022-06-16'),
(10, 'mehari', 'temesgen', 23, 'male', 0, 'admin', 'Hasaccount', '2022-06-16'),
(11, 'yadelew', 'lewoye', 23, 'male', 1, 'wmersu', 'Hasaccount', '2022-06-16'),
(12, 'mengistu', 'takele', 25, 'male', 2, 'wmersu', 'Hasaccount', '2022-06-16'),
(13, 'tadesse', 'tilahun', 23, 'male', 3, 'wmersu', 'Hasaccount', '2022-06-16'),
(14, 'mulugeta', 'walle', 23, 'male', 6, 'wmersu', 'Hasaccount', '2022-06-16'),
(15, 'wudneh', 'worku', 25, 'male', 7, 'wmersu', 'Hasaccount', '2022-06-16'),
(16, 'hilena', 'bekalu', 23, 'female', 8, 'wmersu', 'Hasaccount', '2022-06-17'),
(17, 'yalew', 'demelash', 20, 'male', 4, 'wmersu', 'Hasaccount', '2022-06-28'),
(18, 'debebe', 'alemu', 20, 'male', 12, 'wmersu', 'Hasaccount', '2022-06-30'),
(102, 'Aysey', 'lamesgin', 23, 'male', 1, 'teacher', 'Hasaccount', '2022-06-16'),
(103, 'kassahun', 'gebrie', 23, 'male', 1, 'teacher', 'Hasaccount', '2022-06-16'),
(108, 'gojame', 'zeleke', 23, 'femal', 1, 'teacher', 'Hasaccount', '2022-06-16'),
(109, 'hiwot', 'worku', 23, 'femal', 1, 'teacher', 'Hasaccount', '2022-06-16'),
(110, 'Mezgebu', 'Melese', 23, 'male', 1, 'director', 'Hasaccount', '2022-06-16'),
(111, 'mesert', 'melkamu', 23, 'male', 1, 'teacher', 'Hasaccount', '2022-06-17'),
(112, 'kelem', 'getahun', 20, 'femal', 1, 'teacher', 'Hasaccount', '2022-06-17'),
(113, 'habtamu', 'asmare', 23, 'male', 6, 'teacher', 'Hasaccount', '2022-06-17'),
(114, 'habtie', 'dagne', 23, 'male', 6, 'teacher', 'Hasaccount', '2022-06-17'),
(115, 'haimanot', 'genanew', 23, 'male', 6, 'teacher', 'Hasaccount', '2022-06-17'),
(116, 'mandie', 'Biyazn', 23, 'male', 6, 'teacher', 'Hasaccount', '2022-06-17'),
(117, 'marga', 'fenta', 23, 'male', 6, 'teacher', 'Hasaccount', '2022-06-17'),
(118, 'muluken', 'bekele', 24, 'male', 6, 'teacher', 'Hasaccount', '2022-06-17'),
(120, 'yonatan', 'aduna', 23, 'male', 6, 'director', 'Hasaccount', '2022-06-17'),
(121, 'zewdu', 'worku', 25, 'male', 6, 'director', 'Hasaccount', '2022-06-17'),
(122, 'meskerem', 'fekadu', 24, 'femal', 6, 'director', 'Hasaccount', '2022-06-17'),
(123, 'beti', 'negrew', 22, 'femal', 6, 'director', 'Hasaccount', '2022-06-17'),
(124, 'HIZKIEL', 'MENGISTIE', 24, 'male', 6, 'teacher', 'Hasaccount', '2022-06-20'),
(125, 'ABAEL', 'BIZUAYEHU', 25, 'male', 6, 'teacher', 'Hasaccount', '2022-06-20'),
(126, 'ABEBE', 'ALEM', 23, 'male', 7, 'teacher', 'Hasaccount', '2022-06-20'),
(127, 'ABSRA', 'GETALEM', 20, 'femal', 7, 'teacher', 'Hasaccount', '2022-06-20'),
(128, 'ADDISIE', 'TENAW', 23, 'femal', 7, 'teacher', 'Hasaccount', '2022-06-20'),
(129, 'ADISU', 'KEBEDE', 20, 'male', 7, 'teacher', 'Hasaccount', '2022-06-20'),
(130, 'AGUMAS', 'GETIE', 20, 'male', 7, 'teacher', 'Hasaccount', '2022-06-20'),
(131, 'ALEMAYEHU', 'SEFINEH', 24, 'male', 7, 'teacher', 'Hasaccount', '2022-06-20'),
(132, 'AMANUEL', 'MENGISTIE', 20, 'male', 7, 'teacher', 'Hasaccount', '2022-06-20'),
(133, 'SIMACHEW', 'ADMAS', 23, 'male', 7, 'teacher', 'Hasaccount', '2022-06-20'),
(134, 'ANDUAMLAK', 'TEMESGEN', 24, 'male', 7, 'director', 'Hasaccount', '2022-06-20'),
(135, 'MENGISTIE', 'KELEMU', 23, 'male', 7, 'director', 'Hasaccount', '2022-06-20'),
(136, 'GETU', 'WONDIMAGENE', 23, 'male', 7, 'director', 'Hasaccount', '2022-06-20'),
(137, 'GETAHUN', 'MULU', 20, 'male', 7, 'director', 'Hasaccount', '2022-06-20'),
(138, 'GEDAMU', 'GETAHUN', 20, 'male', 7, 'teacher', 'Hasaccount', '2022-06-20'),
(139, 'GASHAW', 'ABYE', 20, 'male', 7, 'teacher', 'Hasaccount', '2022-06-20'),
(140, 'ESUBALEW', 'GEBRIE', 20, 'male', 7, 'teacher', 'Hasaccount', '2022-06-20'),
(141, 'SELAMWIT', 'BEKALU', 23, 'femal', 1, 'teacher', 'Hasaccount', '2022-06-20'),
(142, 'MOGES', 'ABEBAW', 20, 'male', 1, 'teacher', 'Hasaccount', '2022-06-20'),
(143, 'SOLOMON', 'YOHANS', 20, 'male', 1, 'director', 'Hasaccount', '2022-06-20'),
(144, 'MEKDES', 'MOLLA', 20, 'femal', 1, 'director', 'Hasaccount', '2022-06-20'),
(145, 'ABEBECH', 'HAILU', 20, 'femal', 1, 'director', 'Hasaccount', '2022-06-20'),
(146, 'DESTA', 'TESFAYE', 23, 'male', 1, 'teacher', 'Hasaccount', '2022-06-20'),
(147, 'FIKADIE', 'AMBAW', 20, 'male', 8, 'teacher', 'Hasaccount', '2022-06-20'),
(148, 'ESUBALEW', 'GEBRIE', 24, 'male', 8, 'teacher', 'Hasaccount', '2022-06-20'),
(149, 'ESKEDAR', 'MIKRIE', 23, 'femal', 8, 'teacher', 'Hasaccount', '2022-06-20'),
(150, 'ENDALEW', 'WORKU', 23, 'male', 8, 'teacher', 'Hasaccount', '2022-06-20'),
(151, 'ELSA', 'DEMILEW', 23, 'femal', 8, 'teacher', 'Hasaccount', '2022-06-20'),
(152, 'ELISABET', 'TILAHUN', 20, 'femal', 8, 'teacher', 'Hasaccount', '2022-06-20'),
(153, 'DEBASU', 'ADISIA', 23, 'male', 8, 'director', 'Hasaccount', '2022-06-20'),
(154, 'BIRHANU', 'WONDAY', 23, 'male', 8, 'director', 'Hasaccount', '2022-06-20'),
(155, 'BELAYNESH', 'AYALEW', 20, 'male', 8, 'director', 'Hasaccount', '2022-06-20'),
(156, 'AWOKE', 'MIHARI', 23, 'male', 8, 'director', 'Hasaccount', '2022-06-20'),
(157, 'ARAGAW', 'DAGNAW', 20, 'male', 8, 'teacher', 'Hasaccount', '2022-06-20'),
(158, 'molla', 'gebeyehu', 20, 'male', 8, 'teacher', 'Hasaccount', '2022-06-20'),
(159, 'zelalem', 'asefa', 23, 'male', 7, 'teacher', 'Hasaccount', '2022-06-22'),
(160, 'desalegn', 'ferede', 20, 'male', 7, 'teacher', 'Hasaccount', '2022-06-22'),
(161, 'geremew', 'worku', 23, 'male', 7, 'teacher', 'Hasaccount', '2022-06-22'),
(162, 'kebede', 'zelalem', 23, 'male', 7, 'teacher', 'Hasaccount', '2022-06-22'),
(163, 'Lamesigin', 'sewale', 23, 'male', 7, 'teacher', 'Hasaccount', '2022-06-22'),
(164, 'Ayalew', 'Tariku', 23, 'male', 7, 'teacher', 'Hasaccount', '2022-06-22'),
(165, 'Abiriham', 'Abnate', 23, 'male', 7, 'teacher', 'Hasaccount', '2022-06-22'),
(166, 'Alemu', 'chanie', 23, 'male', 7, 'teacher', 'Hasaccount', '2022-06-22'),
(167, 'melese', 'gizachew', 23, 'male', 7, 'teacher', 'Hasaccount', '2022-06-22'),
(168, 'seble', 'balew', 20, 'femal', 7, 'teacher', 'Hasaccount', '2022-06-22'),
(169, 'tegaye', 'mulu', 23, 'male', 7, 'teacher', 'Hasaccount', '2022-06-22'),
(170, 'bewket', 'zewdu', 24, 'male', 7, 'teacher', 'Hasaccount', '2022-06-22'),
(171, 'yalem', 'Getie', 23, 'femal', 6, 'teacher', 'Hasaccount', '2022-06-22'),
(172, 'emebet', 'Menber', 23, 'femal', 6, 'teacher', 'Hasaccount', '2022-06-22'),
(173, 'Gashaw', 'Workie', 23, 'male', 6, 'teacher', 'Hasaccount', '2022-06-22'),
(174, 'mihret', 'Abate', 20, 'femal', 6, 'teacher', 'Hasaccount', '2022-06-22'),
(175, 'Tibeb', 'Biadig', 20, 'male', 6, 'teacher', 'Hasaccount', '2022-06-22'),
(179, 'gebre', 'alemu', 30, 'male', 7, 'teacher', 'Hasaccount', '2022-06-26'),
(180, 'chalachew', 'alehegn', 30, 'male', 8, 'teacher', 'Hasaccount', '2022-06-27'),
(181, 'lalem', 'yeneneh', 30, 'male', 7, 'teacher', 'Hasaccount', '2022-06-27'),
(182, 'seble', 'meshesha', 30, 'male', 7, 'teacher', 'Hasaccount', '2022-06-27'),
(183, 'zelalem', 'anmew', 30, 'male', 8, 'teacher', 'Hasaccount', '2022-06-28'),
(184, 'dawite', 'minchile', 20, 'male', 8, 'teacher', 'Hasaccount', '2022-06-28'),
(185, 'Biniyam', 'mengistie', 20, 'male', 8, 'teacher', 'Hasaccount', '2022-06-28'),
(186, 'senayt', 'Alamiy', 20, 'femal', 8, 'teacher', 'Hasaccount', '2022-06-28'),
(187, 'Lijalem', 'Gebru', 23, 'male', 8, 'teacher', 'Hasaccount', '2022-06-28'),
(189, 'gebere', 'lamesgen', 20, 'male', 7, 'teacher', 'Hasaccount', '2022-06-29'),
(190, 'molalgn', 'kebede', 20, 'male', 7, 'teacher', 'Hasaccount', '2022-06-30'),
(192, 'yared', 'alemu', 20, 'male', 7, 'teacher', 'Hasaccount', '2022-07-01'),
(193, 'ababa', 'lamesgen', 20, 'femal', 7, 'teacher', 'Hasaccount', '2022-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `woreda`
--

CREATE TABLE `woreda` (
  `wcode` int(11) NOT NULL,
  `wname` varchar(50) NOT NULL,
  `multiplayer` double NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `woreda`
--

INSERT INTO `woreda` (`wcode`, `wname`, `multiplayer`, `date`) VALUES
(1, 'North Achefer', 1.2, '2022-06-16'),
(2, 'S/Achefer', 1.2, '2022-06-16'),
(3, 'Bahirdar zoria', 1.2, '2022-06-16'),
(4, 'Y/densa', 1.2, '2022-06-16'),
(5, 'Gongi kolela', 1.2, '2022-06-16'),
(6, 'Burie Zuriya', 1.2, '2022-06-16'),
(7, 'Burie Town', 1.1, '2022-06-16'),
(8, 'sekella', 1.2, '2022-06-17'),
(12, 'dembecha', 1.2, '2022-06-29'),
(14, 'wemberma', 1.1, '2022-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `wtow_result`
--

CREATE TABLE `wtow_result` (
  `RID` int(11) NOT NULL,
  `wcode` varchar(100) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  `T_woreda_id` varchar(40) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `w_request_table`
--

CREATE TABLE `w_request_table` (
  `Wrid` int(11) NOT NULL,
  `wcode` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Amharic` int(11) NOT NULL,
  `English` int(11) NOT NULL,
  `Biology` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL,
  `Physics` int(11) NOT NULL,
  `ICT` int(11) NOT NULL,
  `Total_teach` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `w_request_table`
--

INSERT INTO `w_request_table` (`Wrid`, `wcode`, `Name`, `Amharic`, `English`, `Biology`, `Chemistry`, `Physics`, `ICT`, `Total_teach`) VALUES
(14, 'Burie Zuriya', 'mulugeta', 1, 2, 1, 2, 2, 1, 9),
(15, 'Burie Town', 'wudneh', 3, 2, 1, 2, 2, 1, 11),
(16, 'sekella', 'hilena', 1, 2, 1, 1, 2, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `w_transfer_form`
--

CREATE TABLE `w_transfer_form` (
  `wtrid` int(11) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `age` varchar(40) NOT NULL,
  `sex` varchar(3) NOT NULL,
  `dateofocp` date NOT NULL,
  `levelofedu` varchar(100) NOT NULL,
  `major` varchar(40) NOT NULL,
  `wcode` varchar(100) NOT NULL,
  `service` int(11) NOT NULL,
  `multiplayer` double NOT NULL,
  `sum_E` int(11) NOT NULL,
  `first_choice` varchar(40) NOT NULL,
  `second_choice` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `w_transfer_form`
--

INSERT INTO `w_transfer_form` (`wtrid`, `Fname`, `Lname`, `age`, `sex`, `dateofocp`, `levelofedu`, `major`, `wcode`, `service`, `multiplayer`, `sum_E`, `first_choice`, `second_choice`) VALUES
(113, 'habtamu', 'asmare', '23', 'mal', '2015-05-17', 'Degree', 'Amharic', 'Burie Zuriya', 223948800, 1.2, 260236800, 'Burie Town', 'sekella'),
(114, 'habtie', 'dagne', '23', 'mal', '2016-04-17', 'Degree', 'Physics', 'Burie Zuriya', 194918400, 1.2, 226022400, 'Burie Town', 'sekella'),
(115, 'haimanot', 'genanew', '23', 'mal', '2018-04-17', 'Degree', 'Chemistry', 'Burie Zuriya', 131846400, 1.2, 152582400, 'Burie Town', 'sekella'),
(116, 'mandie', 'Biyazn', '23', 'mal', '2018-04-17', 'Degree', 'ICT', 'Burie Zuriya', 131846400, 1.2, 152582400, 'Burie Town', 'sekella'),
(117, 'marga', 'fenta', '23', 'mal', '2018-12-17', 'Degree', 'ICT', 'Burie Zuriya', 110761200, 1.2, 126313200, 'Burie Town', 'sekella'),
(118, 'muluken', 'bekele', '24', 'mal', '2017-03-17', 'Degree', 'Amharic', 'Burie Zuriya', 166057200, 1.2, 191977200, 'Burie Town', 'sekella'),
(124, 'HIZKIEL', 'MENGISTIE', '24', 'mal', '2016-02-08', 'Degree', 'Chemistry', 'Burie Zuriya', 200876400, 1.2, 231980400, 'sekella', 'Burie Town'),
(126, 'ABEBE', 'ALEM', '23', 'mal', '2016-10-20', 'Degree', 'Amharic', 'Burie Town', 178848000, 1.1, 191808000, 'Burie Zuriya', 'sekella'),
(127, 'ABSRA', 'GETALEM', '20', 'fem', '2018-02-28', 'Degree', 'English', 'Burie Town', 135990000, 1.1, 146358000, 'Burie Zuriya', 'sekella'),
(128, 'ADDISIE', 'TENAW', '23', 'fem', '2015-02-28', 'Degree', 'Amharic', 'Burie Town', 230684400, 1.1, 248828400, 'sekella', 'Burie Zuriya'),
(131, 'ALEMAYEHU', 'SEFINEH', '24', 'mal', '2018-01-20', 'Degree', 'Biology', 'Burie Town', 139359600, 1.1, 149727600, 'sekella', 'Burie Zuriya'),
(132, 'AMANUEL', 'MENGISTIE', '20', 'mal', '2017-02-20', 'Degree', 'Chemistry', 'Burie Town', 168217200, 1.1, 181177200, 'sekella', 'Burie Zuriya'),
(133, 'SIMACHEW', 'ADMAS', '23', 'mal', '2017-04-20', 'Degree', 'Chemistry', 'Burie Town', 163123200, 1.1, 176083200, 'sekella', 'Burie Zuriya'),
(147, 'FIKADIE', 'AMBAW', '20', 'mal', '2015-04-20', 'Degree', 'English', 'sekella', 226281600, 1.2, 262569600, 'Burie Town', 'Burie Zuriya'),
(148, 'ESUBALEW', 'GEBRIE', '24', 'mal', '2016-04-20', 'Degree', 'English', 'sekella', 194659200, 1.2, 225763200, 'Burie Town', 'Burie Zuriya'),
(149, 'ESKEDAR', 'MIKRIE', '23', 'fem', '2017-02-20', 'Degree', 'Biology', 'sekella', 168217200, 1.2, 194137200, 'Burie Zuriya', 'Burie Town'),
(150, 'ENDALEW', 'WORKU', '23', 'mal', '2016-04-20', 'Degree', 'Biology', 'sekella', 194659200, 1.2, 225763200, 'Burie Town', 'Burie Zuriya'),
(151, 'ELSA', 'DEMILEW', '23', 'fem', '2017-03-20', 'Degree', 'ICT', 'sekella', 165798000, 1.2, 191718000, 'Burie Town', 'Burie Zuriya'),
(152, 'ELISABET', 'TILAHUN', '20', 'fem', '2015-04-20', 'Degree', 'ICT', 'sekella', 226281600, 1.2, 262569600, 'Burie Zuriya', 'Burie Town'),
(157, 'ARAGAW', 'DAGNAW', '20', 'mal', '2016-03-20', 'Degree', 'Chemistry', 'sekella', 197334000, 1.2, 228438000, 'Burie Town', 'Burie Zuriya'),
(158, 'molla', 'gebeyehu', '20', 'mal', '2015-04-20', 'Degree', 'Amharic', 'sekella', 226281600, 1.2, 262569600, 'Burie Zuriya', 'Burie Town'),
(161, 'geremew', 'worku', '23', 'mal', '2018-01-08', 'Degree', 'Chemistry', 'Burie Town', 140482800, 1.1, 150850800, 'sekella', 'Burie Zuriya'),
(162, 'kebede', 'zelalem', '23', 'mal', '2017-04-06', 'Degree', 'ICT', 'Burie Town', 164419200, 1.1, 177379200, 'sekella', 'Burie Zuriya'),
(183, 'zelalem', 'anmew', '30', 'mal', '2017-06-28', 'Diploma', 'Amharic', 'sekella', 157939200, 1.2, 183859200, 'Burie Zuriya', 'Burie Town'),
(184, 'dawite', 'minchile', '20', 'mal', '2016-03-28', 'Degree', 'ICT', 'sekella', 197424000, 1.2, 228528000, 'Burie Zuriya', 'Burie Town'),
(186, 'senayt', 'Alamiy', '20', 'fem', '2015-04-28', 'Degree', 'Biology', 'sekella', 226368000, 1.2, 262656000, 'Burie Town', 'Burie Zuriya'),
(187, 'Lijalem', 'Gebru', '23', 'mal', '2019-04-28', 'Degree', 'ICT', 'sekella', 100137600, 1.2, 115689600, 'Burie Zuriya', 'Burie Town');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `apply_date`
--
ALTER TABLE `apply_date`
  ADD PRIMARY KEY (`ApplyDateID`);

--
-- Indexes for table `archive_result`
--
ALTER TABLE `archive_result`
  ADD PRIMARY KEY (`Ar_id`);

--
-- Indexes for table `archive_school_form`
--
ALTER TABLE `archive_school_form`
  ADD PRIMARY KEY (`Aid`);

--
-- Indexes for table `archive_school_result`
--
ALTER TABLE `archive_school_result`
  ADD PRIMARY KEY (`Arid`);

--
-- Indexes for table `archive_transfer_form`
--
ALTER TABLE `archive_transfer_form`
  ADD PRIMARY KEY (`Ar_id`);

--
-- Indexes for table `request_table`
--
ALTER TABLE `request_table`
  ADD PRIMARY KEY (`R_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `wcode` (`wcode`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `wcode` (`wcode`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `transfer_form`
--
ALTER TABLE `transfer_form`
  ADD PRIMARY KEY (`trid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `woreda`
--
ALTER TABLE `woreda`
  ADD PRIMARY KEY (`wcode`);

--
-- Indexes for table `wtow_result`
--
ALTER TABLE `wtow_result`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `w_request_table`
--
ALTER TABLE `w_request_table`
  ADD PRIMARY KEY (`Wrid`);

--
-- Indexes for table `w_transfer_form`
--
ALTER TABLE `w_transfer_form`
  ADD PRIMARY KEY (`wtrid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive_result`
--
ALTER TABLE `archive_result`
  MODIFY `Ar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT for table `archive_school_form`
--
ALTER TABLE `archive_school_form`
  MODIFY `Aid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `archive_school_result`
--
ALTER TABLE `archive_school_result`
  MODIFY `Arid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `archive_transfer_form`
--
ALTER TABLE `archive_transfer_form`
  MODIFY `Ar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_table`
--
ALTER TABLE `request_table`
  MODIFY `R_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `sid` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `school`
--
ALTER TABLE `school`
  ADD CONSTRAINT `school_ibfk_1` FOREIGN KEY (`wcode`) REFERENCES `woreda` (`wcode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`wcode`) REFERENCES `woreda` (`wcode`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
