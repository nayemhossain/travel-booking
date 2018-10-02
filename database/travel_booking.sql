-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2018 at 11:03 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `BookingId` int(11) NOT NULL,
  `PackageId` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `Comment` varchar(250) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `cncl_cnfrm_by` varchar(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`BookingId`, `PackageId`, `client_id`, `transaction_id`, `Comment`, `RegDate`, `status`, `cncl_cnfrm_by`, `UpdationDate`) VALUES
(2, 5, 1, 0, '\"Lorem ipsum dolor sit amet, cpariatur. Excepteur sint ', '2017-05-13 19:01:10', 1, 'admin', '2018-06-28 18:43:22'),
(3, 5, 3, 0, 'casf esd sg gd gdfh df', '2017-05-13 20:20:01', 0, NULL, '2018-06-28 18:43:06'),
(4, 5, 7, 0, 'dwef  fwe', '2017-05-13 20:32:54', 0, NULL, '2018-06-28 18:43:08'),
(5, 5, 8, 0, 'dwef  fwe', '2017-05-13 20:33:17', 0, NULL, '2018-06-28 18:43:10'),
(6, 2, 9, 0, 'test demo', '2017-05-13 21:18:37', 0, NULL, '2018-06-28 18:43:12'),
(7, 4, 10, 0, 'est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaeca', '2017-05-14 05:09:11', 2, 'admin', '2018-06-15 12:26:39'),
(8, 2, 11, 0, 'ubub5u6', '2017-05-14 05:10:24', 2, 'a', '2018-05-26 02:40:52'),
(9, 1, 12, 0, 'demo test demo test', '2017-05-14 07:45:11', 2, 'admin', '2018-06-15 13:16:08'),
(10, 5, 13, 0, 'test test t test test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test t', '2017-05-14 07:56:26', 1, 'admin', '2018-06-15 12:22:48'),
(11, 2, 14, 0, '', '2018-05-24 03:50:21', 1, 'admin', '2018-05-26 02:41:02'),
(12, 2, 15, 0, '', '2018-05-24 03:52:01', 2, 'admin', '2018-06-15 09:48:55'),
(13, 2, 16, 0, '', '2018-05-24 03:55:36', 2, 'admin', '2018-06-15 09:26:49'),
(14, 2, 17, 0, 'fdfdf', '2018-05-24 03:57:09', 2, 'admin', '2018-06-15 08:38:51'),
(15, 2, 18, 0, 'fgfgfg', '2018-05-24 03:57:49', 1, 'admin', '2018-05-26 02:41:17'),
(16, 3, 19, 0, 'yh', '2018-05-26 04:50:38', 1, 'admin', '2018-06-15 12:20:37'),
(17, 3, 19, 4, 'fgfg', '2018-05-26 04:57:07', 1, 'admin', '2018-06-15 12:19:10'),
(18, 3, 19, 5, 'ytyt', '2018-05-26 05:01:46', 1, 'admin', '2018-06-15 12:16:58'),
(19, 3, 19, 6, 'dfd', '2018-05-26 05:02:34', 2, 'admin', '2018-06-15 12:13:20'),
(20, 1, 19, 7, 'th', '2018-05-26 05:16:26', 2, 'admin', '2018-06-15 12:11:33'),
(21, 2, 19, 8, 'xcxcxcxc', '2018-06-17 08:51:30', 0, '0', '2018-06-18 10:46:58'),
(22, 3, 19, 9, 'vfsf', '2018-06-17 08:54:52', 0, NULL, '2018-06-18 10:46:07'),
(23, 3, 19, 10, 'rerer', '2018-06-17 08:56:49', 2, 'user', '2018-06-18 10:47:27'),
(24, 6, 19, 11, 'sddsd', '2018-06-17 08:58:13', 1, 'admin', '2018-06-28 17:56:30'),
(25, 6, 19, 12, 'sdsds', '2018-06-17 09:01:57', 1, 'admin', '2018-06-28 12:01:12'),
(26, 6, 19, 13, 'gfgfgf', '2018-06-17 09:02:37', 1, 'admin', '2018-06-28 17:48:35'),
(27, 1, 19, 14, 'sdsd', '2018-06-17 16:13:46', 0, NULL, '2018-06-18 08:30:55'),
(28, 8, 19, 15, 'dfdfdf', '2018-06-24 06:46:05', 0, NULL, NULL),
(29, 3, 19, 16, 'dfdfdf', '2018-06-24 08:34:26', 0, NULL, NULL),
(30, 1, 19, 17, 'sddsds', '2018-06-25 09:39:55', 0, NULL, NULL),
(31, 2, 19, 18, 'dffdfdfdf', '2018-06-27 18:12:22', 0, NULL, NULL),
(32, 2, 19, 19, 'dfdfd', '2018-06-27 18:15:57', 0, NULL, NULL),
(33, 2, 19, 20, 'sdss', '2018-06-27 18:17:00', 0, NULL, NULL),
(34, 1, 19, 21, 'fgfgfg', '2018-06-27 18:32:03', 0, NULL, NULL),
(35, 2, 19, 22, 'sd', '2018-06-27 18:33:18', 0, NULL, NULL),
(36, 3, 19, 23, 'fdfdf', '2018-06-27 18:33:56', 0, NULL, NULL),
(37, 2, 19, 24, 'tytytytyty', '2018-06-27 18:35:28', 0, NULL, NULL),
(38, 2, 19, 25, 'dfdfdf', '2018-06-27 18:36:11', 0, NULL, NULL),
(39, 6, 19, 26, 'fgfgfgf', '2018-06-27 18:39:25', 1, 'admin', '2018-06-28 17:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_clients`
--

CREATE TABLE `tb_clients` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `MobileNumber` char(10) NOT NULL,
  `EmailId` varchar(70) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_clients`
--

INSERT INTO `tb_clients` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Password`, `image`, `RegDate`, `UpdationDate`) VALUES
(1, 'Anuj kumar', '1111111111', 'anuj@gmail.com', '5c428d8875d2948607f3e3fe134d71b4', '14.jpg', '2017-05-10 10:38:17', '2018-06-15 08:28:16'),
(3, 'sarita', '9999999999', 'sarita@gmail.com', '5c428d8875d2948607f3e3fe134d71b4', '5.jpg', '2017-05-10 10:50:48', '2018-05-25 07:12:12'),
(7, 'test', '7676767676', 'test@gm.com', 'f925916e2754e5e03f75dd58a5733251', '', '2017-05-10 10:54:56', '0000-00-00 00:00:00'),
(8, 'Anuj kumar', '9999999999', 'demo@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '', '2017-05-14 07:17:44', '0000-00-00 00:00:00'),
(9, 'XYZabc', '3333333333', 'xyz@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '', '2017-05-14 07:25:13', '2017-05-14 07:25:42'),
(10, 'Anuj Kumar', '4543534534', 'demo@test.com', 'f925916e2754e5e03f75dd58a5733251', '', '2017-05-14 07:43:23', '2017-05-14 07:46:57'),
(11, 'XYZ', '8888888888', 'abc@g.com', 'f925916e2754e5e03f75dd58a5733251', '', '2017-05-14 07:54:32', '2017-05-14 07:55:17'),
(12, 'papon', 'papon@yaho', '12345', 'password', '', '2018-05-23 05:50:23', '2018-05-23 05:50:23'),
(13, 'papon', 'papon@yaho', '12345', 'password', '', '2018-05-23 05:51:22', '2018-05-23 05:51:22'),
(14, 'papon', 'papon@yaho', '12345', 'password', '', '2018-05-23 05:52:51', '2018-05-23 05:52:51'),
(15, 'papon', '11111', 'papon@yahoo.com', '12345', '', '2018-05-23 06:02:55', '2018-05-25 06:26:06'),
(16, 'papon', '12345', 'paponbd@gmail.com', '12345', '', '2018-05-24 03:35:51', '2018-05-24 03:35:51'),
(17, 'dfdff', '525252', 'paponbdc@gmail.com', '25252', '', '2018-05-24 04:52:27', '2018-05-24 04:52:27'),
(18, 'papon', '', 'papon@gmail.com', '12345', 'a8.jpg', '2018-05-25 07:20:53', '0000-00-00 00:00:00'),
(19, 'papon', '12345', 'admin@gmail.com', '12345', 'Kuakata-Sea-Beach-Bangladesh-Tourist-Spot.jpg', '2018-05-25 07:21:57', '2018-06-24 12:04:11'),
(20, 'papon', 'papoen@gma', 'admin', 'Test@123', NULL, '2018-06-17 16:26:46', '2018-06-17 16:27:02'),
(21, 'papon', 'papons@yah', '9999999999', '5c428d8875d2948607f3e3fe134d71b4', NULL, '2018-06-17 16:27:42', '2018-06-17 16:27:42'),
(22, 'dfdf', 'papofnbd@g', 'admin', 'Test@123', NULL, '2018-06-17 16:29:54', '2018-06-17 16:29:54'),
(23, 'papon', '12345', 'paponbddb@gmail.com', '1234512345', NULL, '2018-06-17 16:43:24', '0000-00-00 00:00:00'),
(24, 'papon', 'ddd', 'paponddd@gmail.com', 'ddd', '', '2018-06-17 16:57:45', '0000-00-00 00:00:00'),
(25, 'papon', '212112', 'papon@ffmail.com', '21212', '', '2018-06-17 17:07:59', '0000-00-00 00:00:00'),
(26, 'papon', '11111', 'papo33n@gmail.com', '12345', '15.jpg', '2018-06-17 17:09:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_comments`
--

CREATE TABLE `tb_comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `replay` varchar(500) DEFAULT NULL,
  `approval` int(1) NOT NULL DEFAULT '0',
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updation_date` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_comments`
--

INSERT INTO `tb_comments` (`id`, `post_id`, `name`, `email`, `message`, `replay`, `approval`, `posting_date`, `updation_date`) VALUES
(2, 11, 'cvcv', 'ccv@gmail.com', 'gcdvfbf fgdfg dfg df ', 'there is no replay', 1, '2018-06-21 06:36:05', '2018-06-25 09:06:31'),
(3, 11, 'cvcv', 'ccv@gmail.com', 'dfdfdfbv sfdsfd dfdfd', NULL, 1, '2018-06-21 06:36:52', '2018-06-25 09:06:35'),
(4, 13, 'cvcv', 'ccv@gmail.com', 'dfdfdfdf', NULL, 0, '2018-06-21 08:26:59', '2018-06-25 09:06:38'),
(5, 13, 'cvcv', 'ccv@gmail.com', 'ccscs', NULL, 0, '2018-06-21 09:24:00', '2018-06-25 09:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `tb_enquery`
--

CREATE TABLE `tb_enquery` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `MobileNumber` char(10) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Description` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `replay` varchar(500) DEFAULT NULL,
  `replay_date` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_enquery`
--

INSERT INTO `tb_enquery` (`id`, `FullName`, `EmailId`, `MobileNumber`, `Subject`, `Description`, `PostingDate`, `replay`, `replay_date`, `Status`) VALUES
(1, 'anuj', 'anuj.lpu1@gmail.com', '2354235235', 'The standard Lorem Ipsum passage, used since the 1500s', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2017-05-13 22:23:53', 'dfdfdf', '2018-06-19 06:05:32', 1),
(2, 'efgegter', 'terterte@gmail.com', '3454353453', 'The standard Lorem Ipsum passage', 'nventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat volup', '2017-05-13 22:27:00', 'dfdfdfdf', '2018-06-19 06:05:32', 1),
(3, 'fwerwetrwet', 'fwsfhrtre@hdhdhqw.com', '8888888888', 'erwt wet', 'nventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat volup', '2017-05-13 22:28:11', 'dfdfdf', '2018-06-19 06:05:32', 1),
(4, 'Test', 'test@gm.com', '4747474747', 'Test', 'iidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiid', '2017-05-14 07:54:07', 'dfdfdf', '2018-06-19 06:05:32', 1),
(5, 'swsws', 'admin@gmail.com', '41141', '', '4141', '2018-06-18 18:27:08', 'dfdfdfdf', '2018-06-19 06:13:19', 1),
(6, 'papon', 'papon@gmail.com', '012154125', 'subject', 'descrioption', '2018-06-18 18:29:07', NULL, '2018-06-19 09:51:33', NULL),
(7, 'fdf', 'papon@gmail.com', '012154125', 'dff', 'dfdf', '2018-06-19 09:52:05', NULL, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_issues`
--

CREATE TABLE `tb_issues` (
  `id` int(11) NOT NULL,
  `client_id` varchar(100) NOT NULL,
  `Issue` varchar(100) NOT NULL,
  `Description` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `AdminRemark` mediumtext,
  `AdminremarkDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_issues`
--

INSERT INTO `tb_issues` (`id`, `client_id`, `Issue`, `Description`, `PostingDate`, `AdminRemark`, `AdminremarkDate`) VALUES
(4, '19', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco ', '2017-05-13 22:03:33', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur', '2018-06-18 17:41:38'),
(5, '19', '2', 'tbt 3y 34y4 3y3hgg34t', '2017-05-14 05:12:14', 'sg sd gs g sdgfs ', '2018-06-18 17:41:44'),
(6, '19', '3', 'demo test.com demo test.comdemo test.comdemo test.comdemo test.com', '2017-05-14 07:45:37', NULL, '2018-06-18 17:41:48'),
(7, '19', '4', 'test test ttest test ttest test ttest test ttest test ttest test t', '2017-05-14 07:56:46', 'vetet ert erteryre', '2018-06-18 17:41:52'),
(8, '19', '1', 'ererer', '2018-06-18 17:45:20', 'sdfsf', '2018-06-19 05:55:54');

-- --------------------------------------------------------

--
-- Table structure for table `tb_packages`
--

CREATE TABLE `tb_packages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) NOT NULL,
  `PackageType` varchar(150) NOT NULL,
  `PackageLocation` varchar(100) NOT NULL,
  `from_date` text,
  `to_date` text,
  `PackagePrice` int(11) NOT NULL,
  `PackageFetures` varchar(255) NOT NULL,
  `PackageDetails` mediumtext NOT NULL,
  `PackageImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_packages`
--

INSERT INTO `tb_packages` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `from_date`, `to_date`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`) VALUES
(1, 'Manali Trip ', 'couple', 'Kullu Manali India', '1529445600', '1529877600', 1000, 'fetures', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"\"', 'image_21.jpg'),
(2, 'Phuket', 'family', 'Delhi India', '1529445600', '1529877600', 40000, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'image_2.jpeg'),
(3, 'Kolkata', 'Family and Couple', 'China', '1529445600', '1531173600', 30000, 'velit esse cillum dolore eu fugiat nulla pariatur...', 'velit esse cillum dolore eu fugiat nulla pariatur...', 'image_3.jpg'),
(4, 'Kerla', 'Familty and Couple', 'Kerlal', '1529445600', '1531173600', 2000, ' velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', ' velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'image_4.jpg'),
(5, 'Tour Packages', 'General', 'Coorg', '1531173600', '1531605600', 3000, ' velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', ' velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'image_5.jpg'),
(6, 'Indonesia', 'Family', 'Indonesia', '1531173600', '1531605600', 5000, 'Frree wifi, pickup and drop etc', 'Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test ', 'image_6.jpg'),
(7, '', 'General', 'Japan', '1530136800', '1532469600', 5000, 'Lorem ipsum dolor sit amet, consectetur adipiscin...', 'Lorem ipsum dolor sit amet, consectetur adipiscin...', 'image_7.jpg'),
(8, 'Kuala Lampur', 'Family', 'Malaysia', '1530136800', '1532469600', 10000, 'Frree wifi, pickup and drop etc', 'Frree wifi, pickup and drop etc', 'image_9.jpeg'),
(9, 'Bangkok', 'Family', 'Thailand', '1530136800', '1532469600', 4000, 'Air Conditioning ,Balcony / Terrace,Cable / Satell..', 'Air Conditioning ,Balcony / Terrace,Cable / Satell..', 'image_10.jpeg'),
(10, 'Phuket', 'Gdeneral', 'Thailand', '1530136800', '1532469600', 5000, 'Lorem ipsum dolor sit amet, consectetur adipiscin...', 'Lorem ipsum dolor sit amet, consectetur adipiscin...', 'image_11.jpeg'),
(11, 'Kolkata', 'Family and Couple', 'India', '1530136800', '1532469600', 6000, 'Air Conditioning ,Balcony / Terrace,Cable / Satell..', 'Air Conditioning ,Balcony / Terrace,Cable / Satell..', 'image_12.jpeg'),
(12, 'Miami', 'Genaral', 'Florida', '1530136800', '1532469600', 9000, 'velit esse cillum dolore eu fugiat nulla pariatur...', 'velit esse cillum dolore eu fugiat nulla pariatur...', 'image_13.jpeg'),
(13, 'Pattaya', 'Family', 'Thailand', '1530136800', '1532469600', 3000, 'Air Conditioning ,Balcony / Terrace,Cable / Satell..', 'Air Conditioning ,Balcony / Terrace,Cable / Satell..', 'image_14.jpeg'),
(14, 'Bali', 'Family and Couple', 'Indonesia', '1530136800', '1532469600', 10000, '\r\nFrree wifi, pickup and drop etc', '\r\nFrree wifi, pickup and drop etc', 'image_15.jpeg'),
(15, 'Kuala Lampur', 'Family', 'Japan', '1530136800', '1532469600', 50000, 'velit esse cillum dolore eu fugiat nulla pariatur...', 'velit esse cillum dolore eu fugiat nulla pariatur...', 'image_16.jpeg'),
(16, 'Pattaya', 'General', 'India', '1530136800', '1532469600', 20000, 'Lorem ipsum dolor sit amet, consectetur adipiscin...', 'Lorem ipsum dolor sit amet, consectetur adipiscin...', 'image_17.jpeg'),
(17, 'Bangkok', 'General', 'Indonesia', '1530136800', '1532469600', 10000, 'Lorem ipsum dolor sit amet, consectetur adipiscin...', 'Lorem ipsum dolor sit amet, consectetur adipiscin...', 'image_18.jpeg'),
(18, 'Pattaya', 'Family', 'India', '1530136800', '1532469600', 12000, 'Frree wifi, pickup and drop etc', 'Frree wifi, pickup and drop etc', 'image_19.jpg'),
(19, 'sdsds', 'couple', 'dssds', '1530136800', '1532469600', 10000, 'sddsdsdsds', 'sdsdsdsdd', 'image_20.jpg'),
(20, 'New Package', 'family', 'Dhaka', '1531173600', '1532037600', 5000, 'There are some fetures', 'There are some details', 'image_12.jpeg'),
(21, 'papon', 'family', 'cvcv', '1531173600', '1532037600', 50000, 'cvcv', 'cvcvvv', 'image_12.jpeg'),
(22, 'papon', 'family', 'grfg', '1527199200', '1531173600', 5000, 'fgfg', 'fgfg', 'image_11.jpeg'),
(23, 'papon', 'family', 'xcxc', '1527199200', '1531173600', 0, 'cvcv', 'cvcv', 'image_7.jpg'),
(24, 'dfdff', 'couple', 'cvbc', '1531173600', '1531605600', 4141, 'fgfgfgg', 'fgfgfgf', 'image_9.jpeg'),
(25, 'hilly area', 'couple', 'dfdf', '1531173600', '1531605600', 0, 'dfdf', 'dfdf', 'image_6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pages`
--

CREATE TABLE `tb_pages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pages`
--

INSERT INTO `tb_pages` (`id`, `type`, `detail`) VALUES
(1, 'terms', '<P align=justify><FONT size=2><STRONG><FONT color=#990000>(1) ACCEPTANCE OF TERMS</FONT><BR><BR></STRONG>Welcome to Yahoo! India. 1Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: <A href=\"http://in.docs.yahoo.com/info/terms/\">http://in.docs.yahoo.com/info/terms/</A>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>\r\n<P align=justify><FONT size=2>Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </FONT><A href=\"http://in.docs.yahoo.com/info/terms/\"><FONT size=2>http://in.docs.yahoo.com/info/terms/</FONT></A><FONT size=2>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>\r\n<P align=justify><FONT size=2>Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </FONT><A href=\"http://in.docs.yahoo.com/info/terms/\"><FONT size=2>http://in.docs.yahoo.com/info/terms/</FONT></A><FONT size=2>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>'),
(2, 'privacy', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'),
(3, 'aboutus', '										<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Test test</span>'),
(11, 'contact', '										<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Address------Test</span>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_post`
--

CREATE TABLE `tb_post` (
  `id` int(5) NOT NULL,
  `category` int(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(250) NOT NULL,
  `body` varchar(1000) NOT NULL,
  `feathered_image` varchar(100) DEFAULT NULL,
  `image_2` varchar(100) DEFAULT NULL,
  `image_3` varchar(100) DEFAULT NULL,
  `image_4` varchar(100) DEFAULT NULL,
  `image_5` varchar(100) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `posted_by` varchar(20) NOT NULL,
  `updation_date` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_post`
--

INSERT INTO `tb_post` (`id`, `category`, `title`, `subtitle`, `body`, `feathered_image`, `image_2`, `image_3`, `image_4`, `image_5`, `posting_date`, `posted_by`, `updation_date`) VALUES
(11, 2, 'sdsdsggg', 'dfdfd', 'eryryrty', '11.jpg', '', '', '', '', '2018-06-21 09:53:43', '', '0000-00-00 00:00:00'),
(13, 1, 'fdf', 'dfdfd', 'fgggfgfg', 'a4.jpg', '14.jpg', '', '', '', '2018-06-21 10:00:08', 'admin', '2018-06-21 10:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_post_category`
--

CREATE TABLE `tb_post_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updation_date` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_post_category`
--

INSERT INTO `tb_post_category` (`id`, `category`, `posting_date`, `updation_date`) VALUES
(1, 'sea beach', '2018-06-19 08:51:29', '2018-06-19 09:36:26'),
(2, 'hilly area', '2018-06-19 08:51:29', '2018-06-21 04:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_subject`
--

CREATE TABLE `tb_subject` (
  `id` int(11) NOT NULL,
  `issue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_subject`
--

INSERT INTO `tb_subject` (`id`, `issue`) VALUES
(1, 'Others'),
(2, 'Booking'),
(3, 'Cancellation'),
(4, 'Refund');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaction`
--

CREATE TABLE `tb_transaction` (
  `transaction_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `card_no` varchar(100) NOT NULL,
  `package_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaction`
--

INSERT INTO `tb_transaction` (`transaction_id`, `client_id`, `amount`, `card_no`, `package_id`, `date`) VALUES
(1, 19, 10000, '1215412541', 3, '2018-05-26 10:46:50'),
(2, 19, 0, '', 3, '2018-05-26 10:50:38'),
(3, 19, 0, '', 3, '2018-05-26 10:56:03'),
(4, 19, 0, '', 3, '2018-05-26 10:57:06'),
(5, 19, 0, '', 3, '2018-05-26 11:01:46'),
(6, 19, 0, '', 3, '2018-05-26 11:02:34'),
(7, 19, 1000, '2221212121', 1, '2018-05-26 11:16:25'),
(8, 19, 0, '1111111111', 2, '2018-06-17 14:51:29'),
(9, 19, 0, '4444444444', 3, '2018-06-17 14:54:52'),
(10, 19, 0, '1414141414', 3, '2018-06-17 14:56:49'),
(11, 19, 0, '7777777777', 6, '2018-06-17 14:58:13'),
(12, 19, 0, '7777777777', 6, '2018-06-17 15:01:56'),
(13, 19, 0, '7777777777', 6, '2018-06-17 15:02:36'),
(14, 19, 0, '7777777777', 1, '2018-06-17 22:13:46'),
(15, 19, 0, '1212121212', 8, '2018-06-24 12:46:04'),
(16, 19, 0, '1414141411', 3, '2018-06-24 14:34:26'),
(17, 19, 0, '1212121212', 1, '2018-06-25 15:39:55'),
(18, 19, 0, '7777777777', 2, '2018-06-28 00:12:22'),
(19, 19, 0, '1111111111', 2, '2018-06-28 00:15:57'),
(20, 19, 40000, '1111111111', 2, '2018-06-28 00:17:00'),
(21, 19, 1000, '1212121212', 1, '2018-06-28 00:32:03'),
(22, 19, 40000, '1212121212', 2, '2018-06-28 00:33:18'),
(23, 19, 30000, '7777777777', 3, '2018-06-28 00:33:56'),
(24, 19, 40000, '1212121212', 2, '2018-06-28 00:35:27'),
(25, 19, 40000, '1212121212', 2, '2018-06-28 00:36:11'),
(26, 19, 5000, '7777777777', 6, '2018-06-28 00:39:25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `update_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `name`, `email`, `phone`, `password`, `type`, `image`, `update_on`) VALUES
(1, 'admin', 'admin@gmail.com', '01254121', '12345', 'admin', '9.jpeg', '2018-06-15 08:26:25'),
(2, 'paponyyyuuu', 'papon@gmail.com', '12544125', '12345', 'admin', 'a10.jpg', '2018-05-25 05:57:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `tb_clients`
--
ALTER TABLE `tb_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`EmailId`),
  ADD KEY `EmailId_2` (`EmailId`);

--
-- Indexes for table `tb_comments`
--
ALTER TABLE `tb_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_enquery`
--
ALTER TABLE `tb_enquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_issues`
--
ALTER TABLE `tb_issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_packages`
--
ALTER TABLE `tb_packages`
  ADD PRIMARY KEY (`PackageId`);

--
-- Indexes for table `tb_pages`
--
ALTER TABLE `tb_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_post_category`
--
ALTER TABLE `tb_post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_subject`
--
ALTER TABLE `tb_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaction`
--
ALTER TABLE `tb_transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `tb_clients`
--
ALTER TABLE `tb_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_comments`
--
ALTER TABLE `tb_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_enquery`
--
ALTER TABLE `tb_enquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_issues`
--
ALTER TABLE `tb_issues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_packages`
--
ALTER TABLE `tb_packages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_pages`
--
ALTER TABLE `tb_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_post_category`
--
ALTER TABLE `tb_post_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_subject`
--
ALTER TABLE `tb_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_transaction`
--
ALTER TABLE `tb_transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
