-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2022 at 02:38 PM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18486238_maaji`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `id` int(15) UNSIGNED ZEROFILL NOT NULL,
  `owner` varchar(255) NOT NULL,
  `value` int(12) NOT NULL,
  `datechanged` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`id`, `owner`, `value`, `datechanged`) VALUES
(000000000000022, '+2347026662066', 8374, '1647536594'),
(000000000000023, '+2348064110208', 100384, '1647536702'),
(000000000000024, '+2349068858601', 114193, '1647537119'),
(000000000000025, '+2348101029771', 1035987465, '1647608517'),
(000000000000026, '+2348114528984', 1844, '1648035035'),
(000000000000027, '+2348023880729', 1101, '1648043479'),
(000000000000028, '+2348022276859', 0, '1648050712'),
(000000000000029, '+2348037386998', 5000, '1648505516'),
(000000000000030, '+2347026662060', 0, '1648515825'),
(000000000000031, '+23470266620605', 0, '1648515899'),
(000000000000032, '+2347026662666', 0, '1648515964'),
(000000000000033, '+2347026662166', 701, '1648516082'),
(000000000000034, '+2348033428098', 0, '1648561604');

-- --------------------------------------------------------

--
-- Table structure for table `bot`
--

CREATE TABLE `bot` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `queries` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `replies` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bot`
--

INSERT INTO `bot` (`id`, `queries`, `replies`, `dt`) VALUES
(0000000001, 'hi', 'Hi, Welcome to Maaji Services\r\n<br>\r\nReply\r\n<br>\r\nA Credit (Loan)\r\n<br>\r\nB Insurance\r\n<br>\r\nC Investment', '2022-03-23 14:21:43'),
(0000000002, 'a', 'With Maaji Quick loan, you can get loan easily and pay back at you\r\n<br>\r\nP. Proceed\r\n<br>\r\nB. Back', '2022-03-28 16:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `cvv` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `expdt` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `dateadded` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `fullname`, `pan`, `cvv`, `pin`, `expdt`, `owner`, `dateadded`) VALUES
(0000000001, '', 'NTU1NTU1NTU1NTU1', 'b53b3a3d6ab90ce0268229151c9bde11', '', 'NTU1', 'MDAwMDAwMDAxNQ==', '1644424367'),
(0000000002, '', 'NTU1NTU1NTU1NTU1', 'b53b3a3d6ab90ce0268229151c9bde11', '', 'NTU1', 'MDAwMDAwMDAxNQ==', '1644424372'),
(0000000003, '', 'NTU1NTU1NTU1NTU1', 'b53b3a3d6ab90ce0268229151c9bde11', '', 'NTU1', 'MDAwMDAwMDAxNQ==', '1644424553'),
(0000000004, '', 'NTU1NTU1NTU1NTU1', 'b53b3a3d6ab90ce0268229151c9bde11', '', 'NTU1', 'MDAwMDAwMDAxNQ==', '1644424557'),
(0000000005, '', 'NTU1NTU1NTU1NTU1', 'b53b3a3d6ab90ce0268229151c9bde11', '', 'NTU1', 'MDAwMDAwMDAxNQ==', '1644424558'),
(0000000006, '', 'NTU1NTU1NTU1NTU1', 'b53b3a3d6ab90ce0268229151c9bde11', '', 'NTU1', 'MDAwMDAwMDAxNQ==', '1644424558'),
(0000000007, '', 'NTU1NTU1NTU1NTU1', 'b53b3a3d6ab90ce0268229151c9bde11', '', 'NTU1', 'MDAwMDAwMDAxNQ==', '1644424559'),
(0000000008, '', 'NTU1NTU1NTU1NTU1Ng==', 'b53b3a3d6ab90ce0268229151c9bde11', '', 'NTU1', 'MDAwMDAwMDAxNQ==', '1644424687'),
(0000000009, '', 'NTU1NTU1NTU1NTU1Njc=', '6e2713a6efee97bacb63e52c54f0ada0', '', 'NTU1', 'MDAwMDAwMDAxNQ==', '1644424729'),
(0000000010, '', 'NTU1NTU1NTU1NTU1NTU1', '6074c6aa3488f3c2dddff2a7ca821aab', '', 'NTU1NTU=', 'MDAwMDAwMDAxNQ==', '1644424879'),
(0000000011, '', 'NTU1NTU1NTU1NTU1NTU1NQ==', 'e4da3b7fbbce2345d7772b0674a318d5', '', 'NTU1NTU1NTU1NTU1NTU1', 'MDAwMDAwMDAxNQ==', '1644425099'),
(0000000012, '', 'NTU1NTU1NTU1NTU1NTU=', 'fa1d3eb08a879de9a4cd9995a1aa91e1', '', 'MTExMTExMTExMTExMTExMTExMTExMTExMQ==', 'aWJraGFsZWFsQGdtYWlsLmNvbQ==', '1644510887'),
(0000000013, '', 'NTU1NTU1NTU1NTU1NTU2', 'fa1d3eb08a879de9a4cd9995a1aa91e1', '', 'MTExMTExMTExMTExMTExMTExMTExMTExMQ==', 'aWJraGFsZWFsQGdtYWlsLmNvbQ==', '1644510945'),
(0000000014, '', 'NTU1NTU1NTU1NTU1NQ==', 'fa1d3eb08a879de9a4cd9995a1aa91e1', '', 'MTExMTExMTExMTExMTExMTExMTExMTExMQ==', 'aWJraGFsZWFsQGdtYWlsLmNvbQ==', '1644510968'),
(0000000015, '', 'NTU1NTU1NTU1NTU1NXI=', 'fa1d3eb08a879de9a4cd9995a1aa91e1', '', 'MTExMTExMTExMTExMTExMTExMTExMTExMQ==', 'aWJraGFsZWFsQGdtYWlsLmNvbQ==', '1644510985');

-- --------------------------------------------------------

--
-- Table structure for table `carins`
--

CREATE TABLE `carins` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `applicant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `st` varchar(266) COLLATE utf8_unicode_ci NOT NULL,
  `reciept` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amt` varchar(266) COLLATE utf8_unicode_ci NOT NULL,
  `famt` varchar(266) COLLATE utf8_unicode_ci NOT NULL,
  `dt` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carins`
--

INSERT INTO `carins` (`id`, `type`, `applicant`, `brand`, `model`, `st`, `reciept`, `amt`, `famt`, `dt`) VALUES
(0000000001, '', 'MDcwMjY2NjIwNjY=', 'Mercedez-Benz', 'GLK 350', 'old', 'images/vinsreciepts/914754img_9523.jpg', '2332', '', '1646060715'),
(0000000002, '', 'MDcwMjY2NjIwNjY=', 'Mercedez-Benz', 'GLK 350', 'old', 'images/vinsreciepts/542740img_9523.jpg', '2332', '', '1646060792'),
(0000000003, 'car', 'MDcwMjY2NjIwNjY=', 'Mercedez-Benz', 'GLK 350', 'new', 'images/vinsreciepts/373751favicon.png', '34434454565', '', '1647267226');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `fromc` varchar(255) NOT NULL,
  `toc` varchar(255) NOT NULL,
  `ccontent` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `dt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `cid` varchar(244) NOT NULL,
  `owner` varchar(222) NOT NULL,
  `dateadded` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `cid`, `owner`, `dateadded`) VALUES
(0000000001, 'aWJraGFsZWFsQGdtYWlsLmNvbQ==', 'aWJraGFsZWFsQGdtYWlsLmNvbQ==', ''),
(0000000002, 'aWJraGFsZWFsQGdtYWlsLmNvbQ==', 'aWJraGFsZWFsQGdtYWlsLmNvbQ==', ''),
(0000000003, 'MDgwODI5MDU2NTk=', 'aWJraGFsZWFsQGdtYWlsLmNvbQ==', ''),
(0000000004, 'aWJraGFsZWFsQGdtYWlsLmNvbQ==', 'MDgwODI5MDU2NTk=', '');

-- --------------------------------------------------------

--
-- Table structure for table `frequent_asks`
--

CREATE TABLE `frequent_asks` (
  `id` int(30) NOT NULL,
  `question_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frequent_asks`
--

INSERT INTO `frequent_asks` (`id`, `question_id`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 4),
(12, 1),
(13, 6),
(14, 7),
(15, 7),
(16, 1),
(17, 7),
(18, 8),
(19, 7),
(20, 7),
(21, 7),
(22, 6),
(23, 7),
(24, 7),
(25, 7),
(26, 7),
(27, 7),
(28, 7),
(29, 9),
(30, 1),
(31, 8),
(32, 2),
(33, 7),
(34, 14),
(35, 9),
(36, 9),
(37, 9),
(38, 1),
(39, 4),
(40, 6),
(41, 7),
(42, 9),
(43, 9),
(44, 9),
(45, 12),
(46, 1),
(47, 16),
(48, 2),
(49, 2),
(50, 1),
(51, 1),
(52, 16),
(53, 9),
(54, 9),
(55, 9),
(56, 9),
(57, 9),
(58, 16);

-- --------------------------------------------------------

--
-- Table structure for table `investment`
--

CREATE TABLE `investment` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `applicant` varchar(255) NOT NULL,
  `itype` varchar(255) NOT NULL,
  `dt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investment`
--

INSERT INTO `investment` (`id`, `applicant`, `itype`, `dt`) VALUES
(0000000001, 'MDgwMjUxMDA3Nzc=', '500', '1646145176'),
(0000000002, 'MDgwMjUxMDA3Nzc=', '500', '1646145327'),
(0000000003, 'MDgwMjUxMDA3Nzc=', '500', '1646145352'),
(0000000004, 'MDgwMjUxMDA3Nzc=', '500', '1646145466'),
(0000000005, 'MDgwMjUxMDA3Nzc=', '500', '1646145507'),
(0000000006, 'MDgwMjUxMDA3Nzc=', '500', '1646145532'),
(0000000007, 'MDgwMjUxMDA3Nzc=', '500', '1646145592'),
(0000000008, 'MDgwMjUxMDA3Nzc=', '500', '1646145596'),
(0000000009, 'MDgwMjUxMDA3Nzc=', '500', '1646145598'),
(0000000010, 'MDgwMjUxMDA3Nzc=', '500', '1646145609'),
(0000000011, 'MDgwMjUxMDA3Nzc=', '500', '1646145612'),
(0000000012, 'MDgwMjUxMDA3Nzc=', '500', '1646145615'),
(0000000013, 'MDgwMjUxMDA3Nzc=', '500', '1646145619'),
(0000000014, 'MDgwMjUxMDA3Nzc=', '500', '1646145621'),
(0000000015, 'MDgwMjUxMDA3Nzc=', '500', '1646145648'),
(0000000016, 'MDgwMjUxMDA3Nzc=', '500', '1646146717'),
(0000000017, 'MDgwMjUxMDA3Nzc=', '500', '1646146746'),
(0000000018, 'MDgwMjUxMDA3Nzc=', '500', '1646146792'),
(0000000019, 'MDgwMjUxMDA3Nzc=', '500', '1646146800'),
(0000000020, 'MDgwMjUxMDA3Nzc=', '500', '1646148816'),
(0000000021, 'MDgwMjUxMDA3Nzc=', '500', '1646148832'),
(0000000022, 'MDgwMjUxMDA3Nzc=', '500', '1646148835'),
(0000000023, 'MDgwMjUxMDA3Nzc=', '500', '1646149045'),
(0000000024, 'MDgwMjUxMDA3Nzc=', '500', '1646149080'),
(0000000025, 'MDgwMjUxMDA3Nzc=', '500', '1646149465'),
(0000000026, 'MDgwMjUxMDA3Nzc=', '500', '1646149674'),
(0000000027, 'MDgwMjUxMDA3Nzc=', '500', '1646149749'),
(0000000028, 'MDcwMjY2NjIwNjY=', '500', '1646237018'),
(0000000029, 'MDcwMjY2NjIwNjY=', '500', '1646237028'),
(0000000030, 'MDcwMjY2NjIwNjY=', '500', '1646238523'),
(0000000031, 'MDcwMjY2NjIwNjY=', '500', '1646844991'),
(0000000032, 'MDgwMzczODY5OTg=', '500', '1647448535'),
(0000000033, 'MDgwMzczODY5OTg=', '500', '1647448550');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `applicant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amt` int(11) NOT NULL,
  `dt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dtdue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `applicant`, `amt`, `dt`, `dtdue`, `status`) VALUES
(0000000001, 'MDcwMjY2NjIwNjY=', 344, '', '', '0'),
(0000000002, 'MDcwMjY2NjIwNjY=', 344, '1645457681', '1852817681', '0'),
(0000000003, 'MDcwMjY2NjIwNjY=', 344, '1645457703', '1852817703', '0'),
(0000000004, 'MDcwMjY2NjIwNjY=', 344, '1645457720', '1852817720', '0'),
(0000000005, 'MDgwNjQxMTAyMDg=', 500, '1645713491', '1853073491', '0'),
(0000000006, 'MDcwMjY2NjIwNjY=', 444, '1647276699', '1854636699', '0');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `question` text DEFAULT NULL,
  `response_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `response_id`) VALUES
(0000000001, 'what are you', '1'),
(0000000002, 'who are you', '1'),
(0000000003, 'what is your name', '1'),
(0000000004, 'What can you do', '2'),
(0000000007, 'what is PHP', '4'),
(0000000008, 'What is ChatBot', '5'),
(0000000009, 'hi', '6'),
(0000000010, 'hello', '6'),
(0000000011, 'yow', '6'),
(0000000012, 'good day', '6'),
(0000000014, 'sample', '7'),
(0000000015, 'what topic can I ask', '8'),
(0000000016, 'loan', 'loan'),
(0000000017, 'who are you?', '0'),
(0000000018, 'who are you?', '0');

-- --------------------------------------------------------

--
-- Table structure for table `refs`
--

CREATE TABLE `refs` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `refcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paidby` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `used` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dt` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `refs`
--

INSERT INTO `refs` (`id`, `refcode`, `paidby`, `used`, `dt`) VALUES
(0000000001, '10949869', '3444343434', '0', '15:30:57'),
(0000000002, '2807922', NULL, 'true', NULL),
(0000000003, '2807922', NULL, NULL, NULL),
(0000000004, '2807922', NULL, NULL, NULL),
(0000000005, '2807922', NULL, NULL, NULL),
(0000000006, '3910263', NULL, 'true', NULL),
(0000000007, '1740341', NULL, 'true', NULL),
(0000000008, '9813082', NULL, 'true', NULL),
(0000000009, '9813082', NULL, NULL, NULL),
(0000000010, '2836166', NULL, 'true', NULL),
(0000000011, '2836166', NULL, NULL, NULL),
(0000000012, '10333161', NULL, 'true', NULL),
(0000000013, '2692253', NULL, 'true', NULL),
(0000000014, '6459266', NULL, 'true', NULL),
(0000000015, '9187783', NULL, 'true', NULL),
(0000000016, '10362217', NULL, 'true', NULL),
(0000000017, '9301185', NULL, 'true', NULL),
(0000000018, '4449071', NULL, 'true', NULL),
(0000000019, '3715255', NULL, 'true', NULL),
(0000000020, '10409294', NULL, 'true', NULL),
(0000000021, '578927', NULL, 'true', NULL),
(0000000022, '9534440', NULL, 'true', NULL),
(0000000023, '802833', NULL, 'true', NULL),
(0000000024, '1297776', NULL, 'true', NULL),
(0000000025, '9903335', NULL, 'true', NULL),
(0000000026, '1454563', NULL, 'true', NULL),
(0000000027, '1716489', NULL, 'true', NULL),
(0000000028, '9180048', NULL, 'true', NULL),
(0000000029, '11267866', NULL, 'true', NULL),
(0000000030, '1446693', NULL, 'true', NULL),
(0000000031, '1446693', NULL, NULL, NULL),
(0000000032, '11619784', NULL, 'true', NULL),
(0000000033, '1731628', NULL, 'true', NULL),
(0000000034, '3651546', NULL, 'true', NULL),
(0000000035, '2900121', NULL, 'true', NULL),
(0000000036, '1554522', NULL, 'true', NULL),
(0000000037, '9855372', NULL, 'true', NULL),
(0000000038, '2714185', NULL, 'true', NULL),
(0000000039, '1892583', NULL, 'true', NULL),
(0000000040, '2470150', NULL, 'true', NULL),
(0000000041, '3053533', NULL, 'true', NULL),
(0000000042, '8037920', NULL, 'true', NULL),
(0000000043, '9662419', NULL, 'true', NULL),
(0000000044, '9662419', NULL, NULL, NULL),
(0000000045, '8748511', NULL, 'true', NULL),
(0000000046, '3816321', NULL, 'true', NULL),
(0000000047, '7204347', NULL, 'true', NULL),
(0000000048, '10756464', NULL, 'true', NULL),
(0000000049, '10756464', NULL, NULL, NULL),
(0000000050, '12300326', NULL, 'true', NULL),
(0000000051, '11772303', NULL, 'true', NULL),
(0000000052, '2400402', NULL, 'true', NULL),
(0000000053, '2937858', NULL, 'true', NULL),
(0000000054, '8558355', NULL, 'true', NULL),
(0000000055, '5543494', NULL, 'true', NULL),
(0000000056, '3570307', NULL, 'true', NULL),
(0000000057, '7166096', NULL, 'true', NULL),
(0000000058, '5969077', NULL, 'true', NULL),
(0000000059, '9978848', NULL, 'true', NULL),
(0000000060, '1751151', NULL, 'true', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` varchar(255) NOT NULL,
  `response_message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`id`, `response_message`) VALUES
('', 'I am who I am.'),
('1', 'I am John, the chatBot of this application.'),
('2', 'I am in charge to answer your questions.'),
('3', 'You can ask me about something related to this website.'),
('4', 'PHP (recursive acronym for PHP: Hypertext Preprocessor ) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.'),
('5', 'A chatbot is a software application used to conduct an on-line chat conversation via text or text-to-speech, in lieu of providing direct contact with a live human agent.'),
('6', 'Hi there, how can I help you ? :)'),
('7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam congue, lectus non tincidunt viverra, lacus erat venenatis mauris, sed hendrerit libero diam ac tellus. Integer imperdiet massa lacus, sed porta ligula efficitur at. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; '),
('8', 'You can ask me about something related to this website.'),
('loan', 'What type of loan do you want to apply for?');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Maaji Services'),
(4, 'intro', 'Hi Welcome to Maaji Services.\r\nWhich service do you need?\r\nQuick Loan\r\nInsurance\r\nInvestment'),
(6, 'short_name', 'Maaji Services'),
(10, 'no_result', 'I am sorry. I can&apos;t understand your question. Please rephrase your question and make sure it is related to this site. Thank you.'),
(11, 'logo', 'uploads/1647615420_logo.jpg'),
(12, 'bot_avatar', 'uploads/bot_avatar.jpg'),
(13, 'user_avatar', 'uploads/user_avatar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `tfrom` varchar(255) NOT NULL,
  `tto` varchar(255) NOT NULL,
  `tamt` varchar(255) NOT NULL,
  `refid` varchar(255) NOT NULL,
  `dsc` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `dt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`id`, `tfrom`, `tto`, `tamt`, `refid`, `dsc`, `msg`, `dt`) VALUES
(0000000034, 'MDcwMjY2NjIwNjY=', 'aWJraGFsZWFsQGdtYWlsLmNvbQ==', 'Mzc5MjAx', 'VDIwMjJfRmViX01vbl8xNDQ0NDJfMTc1MjM=', '', '', '1645454682'),
(0000000035, 'MDcwMjY2NjIwNjY=', 'MDgxNiAyMjIgNDQwNw==', 'MTAwMDAwMA==', 'VDIwMjJfRmViX01vbl8xNTU1MjdfNzE4Ng==', '', '', '1645458927'),
(0000000036, 'MDcwMjY2NjIwNjY=', 'MDgwODI5MDU2NTk=', 'MjIzMzM=', 'VDIwMjJfRmViX01vbl8xNjExNDhfNjE4NDQ=', '', '', '1645459908'),
(0000000037, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MTExMTE=', 'VDIwMjJfRmViX1dlZF8xMzU2MzJfNTQ4NzI=', '', '', '1645624592'),
(0000000038, 'MDcwMjY2NjIwNjY=', 'MDgwNjQxMTAyMDg=', 'MjAwMDAwMA==', 'VDIwMjJfRmViX1RodV8xNDMxNDlfNzQxOTM=', '', '', '1645713109'),
(0000000039, 'MDgwNjQxMTAyMDg=', 'KzIzNDgwMzczODY5OTg=', 'MzQzNTU=', 'VDIwMjJfRmViX1RodV8xNDMzMTJfNjYyOTI=', '', '', '1645713192'),
(0000000040, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MQ==', 'VDIwMjJfTWFyX1dlZF8xODI3MTdfMzYyNDA=', '', '', '1646245637'),
(0000000041, 'MDcwMjY2NjIwNjY=', 'MDgwNjQxMTAyMDg=', 'MTAwMA==', 'VDIwMjJfTWFyX1dlZF8xODM5NDBfMjU3Mw==', '', '', '1646246380'),
(0000000042, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjIzMjMyMw==', 'VDIwMjJfTWFyX1R1ZV8xMzU3NTBfNzQyNA==', '', '', '1646747870'),
(0000000043, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MTMy', 'VDIwMjJfTWFyX1R1ZV8xMzU4MTJfOTAxMDU=', '', '', '1646747892'),
(0000000044, 'MDcwMjY2NjIwNjY=', 'MDgxMzc5MjY5MDQ=', 'MjMzMg==', 'VDIwMjJfTWFyX1R1ZV8xNjA1MzRfNDk3MjE=', '', '', '1646755534'),
(0000000045, 'MDcwMjY2NjIwNjY=', 'MDgxMzc5MjY5MDQ=', 'MjMzMg==', 'VDIwMjJfTWFyX1R1ZV8xNjEzNTFfMTI1NDg=', '', '', '1646756031'),
(0000000046, 'MDcwMjY2NjIwNjY=', 'MDgxMzc5MjY5MDQ=', 'MTk=', 'VDIwMjJfTWFyX1R1ZV8xNjE1MzhfMzY1MjI=', '', '', '1646756138'),
(0000000047, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646757341'),
(0000000048, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'slm', '1646758459'),
(0000000049, 'MDcwMjY2NjIwNjY=', 'MDgwODI5MDU2NTk=', '', '', '', 'sai oga', '1646758990'),
(0000000050, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xMzUzNDdfMTQ0ODc=', '', '', '1646834027'),
(0000000051, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xNDM3NThfMTE2MTE=', '', '', '1646836678'),
(0000000052, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MTIy', 'VDIwMjJfTWFyX1dlZF8xNTU4MzZfNjQ2MDU=', '', '', '1646841516'),
(0000000053, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MTIy', 'VDIwMjJfTWFyX1dlZF8xNTU5MDhfNDEwNTU=', '', '', '1646841548'),
(0000000054, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MzA=', 'VDIwMjJfTWFyX1dlZF8xNzAzMzhfODAzMjU=', '', '', '1646841818'),
(0000000055, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MzA=', 'VDIwMjJfTWFyX1dlZF8xNzA0MzRfNjkxOTg=', '', '', '1646841874'),
(0000000061, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646842293'),
(0000000062, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', 'VDIwMjJfTWFyX1dlZF8xNzExMzNfNjA3OTY=', '', '', '1646842293'),
(0000000063, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646842345'),
(0000000064, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xNzEzMDRfNzc0ODc=', '', '', '1646842384'),
(0000000065, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646842438'),
(0000000066, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xNzE1MDhfNjczOA==', 'gg', '', '1646842508'),
(0000000067, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646842612'),
(0000000068, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xNzMzMTdfMjgyMg==', 'ji', '', '1646843597'),
(0000000069, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646843621'),
(0000000070, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646843652'),
(0000000071, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646843691'),
(0000000072, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646843727'),
(0000000073, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646843772'),
(0000000074, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646843786'),
(0000000075, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646843839'),
(0000000076, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xNzQzMDZfOTA2Mzk=', 'hi', '', '1646844186'),
(0000000077, 'MDcwMjY2NjIwNjY=', 'MDgxNiAyMjIgNDQwNw==', 'ODAwMDAw', 'VDIwMjJfTWFyX1dlZF8xNzUwMjdfMzQ3MDk=', 'test', '', '1646844627'),
(0000000078, 'MDcwMjY2NjIwNjY=', 'MDgxNiAyMjIgNDQwNw==', 'ODAwMDAw', 'VDIwMjJfTWFyX1dlZF8xNzUwMzJfMzUxMDE=', 'test', '', '1646844632'),
(0000000079, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xNzUwNTJfNjU0OTQ=', 'hi', '', '1646844652'),
(0000000080, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xNzUwNThfNDI2MDQ=', 'hh', '', '1646844658'),
(0000000081, 'MDcwMjY2NjIwNjY=', 'MDgxNiAyMjIgNDQwNw==', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xNzUxMTBfNjAwMg==', 'test', '', '1646844670'),
(0000000082, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xNzUxMjhfMjIxMQ==', 'ho', '', '1646844688'),
(0000000083, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'oo', '1646844693'),
(0000000084, 'MDcwMjY2NjIwNjY=', 'MDgxMzc5MjY5MDQ=', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xNzU0MzlfMTQ1Mzg=', 'hi', '', '1646844879'),
(0000000085, 'MDcwMjY2NjIwNjY=', 'MDgxNiAyMjIgNDQwNw==', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xNzU4MDBfOTQyNDg=', 'test', '', '1646845080'),
(0000000086, 'MDcwMjY2NjIwNjY=', 'MDgwNjQxMTAyMDg=', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xNzU4MTJfODAzNDY=', 'test', '', '1646845092'),
(0000000087, 'MDcwMjY2NjIwNjY=', 'MDgwODI5MDU2NTk=', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xNzU4MjhfNzU5MTU=', 'ttt', '', '1646845108'),
(0000000088, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xNzU4NDBfNzc3NTI=', 'tt', '', '1646845120'),
(0000000089, 'MDgwMzczODY5OTg=', 'KzIzNDgwMzczODY5OTg=', 'NjAw', 'VDIwMjJfTWFyX1dlZF8xODIwMDZfMTc2MTk=', 'School fee', '', '1646846406'),
(0000000090, 'MDgwMzczODY5OTg=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'Hi', '1646846439'),
(0000000091, 'MDgwODI5MDU2NTk=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'Hello', '1646889068'),
(0000000092, 'MDgwODI5MDU2NTk=', 'KzIzNDgwMzczODY5OTg=', 'NTAw', 'VDIwMjJfTWFyX1RodV8wNjEyMDdfNDc3ODU=', 'Desc', '', '1646889127'),
(0000000093, 'MDgxNiAyMjIgNDQwNw==', 'KzIzNDgwMzczODY5OTg=', 'NTAwMA==', 'VDIwMjJfTWFyX1RodV8xNDE1MTdfMTUxMzY=', 'SELF CARE', '', '1646918117'),
(0000000094, 'MDgxNiAyMjIgNDQwNw==', 'KzIzNDgwMzczODY5OTg=', 'NTAwMA==', 'VDIwMjJfTWFyX1RodV8xNDE1MjVfNTQ5MzM=', 'SELF CARE', '', '1646918125'),
(0000000095, 'MDgxNiAyMjIgNDQwNw==', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'have you seen money', '1646918164'),
(0000000096, 'MDcwMjY2NjIwNjY=', 'MDgxNiAyMjIgNDQwNw==', '', '', '', 'hi', '1646919456'),
(0000000097, 'MDcwMjY2NjIwNjY=', 'MDgxNiAyMjIgNDQwNw==', '', '', '', 'hi', '1646919593'),
(0000000098, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646919772'),
(0000000099, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646919949'),
(0000000100, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'i', '1646920063'),
(0000000101, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646920361'),
(0000000102, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646920604'),
(0000000103, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646920622'),
(0000000104, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646920623'),
(0000000105, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hello', '1646920623'),
(0000000106, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646921517'),
(0000000107, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646921593'),
(0000000108, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646921824'),
(0000000109, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xNTE4MjNfNzY5MTA=', 'hi', '', '1646921903'),
(0000000110, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xNTI0NDlfMjA2MDg=', 't', '', '1646922289'),
(0000000111, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xNjAzNTJfNDk4NDE=', 't', '', '1646924632'),
(0000000112, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'OTAw', 'VDIwMjJfTWFyX1RodV8xNjQzMzhfMTEzOTY=', '', '', '1646927018'),
(0000000113, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'OTAw', 'VDIwMjJfTWFyX1RodV8xODA4MzBfNzAxMDI=', '', '', '1646932110'),
(0000000114, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MTExMQ==', 'VDIwMjJfTWFyX1RodV8xODEzMTJfOTgxNjc=', '111', '', '1646932392'),
(0000000115, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODEzNDVfOTc4OTU=', 'tytytytt', '', '1646932425'),
(0000000116, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODEzNTFfNDA5OTA=', 'tytytytt', '', '1646932431'),
(0000000117, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODEzNTJfNDIyNTQ=', 'tytytytt', '', '1646932432'),
(0000000118, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODEzNTNfODAzODk=', 'tytytytt', '', '1646932433'),
(0000000119, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODEzNTNfMTUwOTY=', 'tytytytt', '', '1646932433'),
(0000000120, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODEzNTVfNDk2OTA=', 'tytytytt', '', '1646932435'),
(0000000121, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MTIz', 'VDIwMjJfTWFyX1RodV8xODE0NDlfMTIzNTg=', '2', '', '1646932489'),
(0000000122, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE2MTZfNTg1ODc=', 'm', '', '1646932576'),
(0000000123, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646932586'),
(0000000124, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE2NTVfODc0NTY=', 'm', '', '1646932615'),
(0000000125, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE2NTdfNjcxMjI=', 'm', '', '1646932617'),
(0000000126, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE2NThfOTIzMjg=', 'm', '', '1646932618'),
(0000000127, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE2NTlfMTY5NzE=', 'm', '', '1646932619'),
(0000000128, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE3MDJfMjA3NjA=', 'm', '', '1646932622'),
(0000000129, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE3MDNfNDIxNDg=', 'm', '', '1646932623'),
(0000000130, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE3MDRfNjE1NDE=', 'm', '', '1646932624'),
(0000000131, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE3MDZfMTg5MTQ=', 'm', '', '1646932626'),
(0000000132, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE3MDdfMTczNDk=', 'm', '', '1646932627'),
(0000000133, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE3MDhfNjMzMA==', 'm', '', '1646932628'),
(0000000134, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE3MTBfNzM0MDE=', 'm', '', '1646932630'),
(0000000135, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE3MTFfODQwNTk=', 'm', '', '1646932631'),
(0000000136, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE3MjRfNzE1NTI=', 'm', '', '1646932644'),
(0000000137, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE3MjZfNTE3Nzg=', 'm', '', '1646932646'),
(0000000138, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE3MjdfNzUxNzM=', 'm', '', '1646932647'),
(0000000139, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE3MjhfNTMwNjc=', 'm', '', '1646932648'),
(0000000140, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE3MjlfMzQ0Njk=', 'm', '', '1646932649'),
(0000000141, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE3MjlfMjY4MzQ=', 'm', '', '1646932649'),
(0000000142, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE3MzBfNjAyODc=', 'm', '', '1646932650'),
(0000000143, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE3MzBfOTUwOTE=', 'm', '', '1646932650'),
(0000000144, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1RodV8xODE3NTZfOTE5NTA=', 'm', '', '1646932676'),
(0000000145, 'MDcwMjY2NjIwNjY=', 'MDgxMzc5MjY5MDQ=', 'MTIzMzM0NA==', 'VDIwMjJfTWFyX1RodV8xODE5MzFfNjE2ODc=', 'gift', '', '1646932771'),
(0000000146, 'MDcwMjY2NjIwNjY=', 'MDgxMzc5MjY5MDQ=', '', '', '', 'hi', '1646932785'),
(0000000147, 'MDcwMjY2NjIwNjY=', 'MDgxMzc5MjY5MDQ=', '', '', '', 'hello', '1646932794'),
(0000000148, 'MDcwMjY2NjIwNjY=', 'MDgxMDEwMjk3NzE=', '', '', '', 'hi', '1646933180'),
(0000000149, 'MDgxMDEwMjk3NzE=', 'MDcwMjY2NjIwNjY=', '', '', '', 'Hello?', '1646933193'),
(0000000150, 'MDcwMjY2NjIwNjY=', 'MDgxMDEwMjk3NzE=', '', '', '', 'how are you?', '1646933201'),
(0000000151, 'MDgxMDEwMjk3NzE=', 'MDcwMjY2NjIwNjY=', '', '', '', 'How much are you supposed to send to me?', '1646933235'),
(0000000152, 'MDcwMjY2NjIwNjY=', 'MDgxMDEwMjk3NzE=', '', '', '', ' Let me send you !m now', '1646933250'),
(0000000153, 'MDgxMDEwMjk3NzE=', 'MDcwMjY2NjIwNjY=', '', '', '', 'Oka, I am waiting?', '1646933264'),
(0000000154, 'MDcwMjY2NjIwNjY=', 'MDgxMDEwMjk3NzE=', 'MTAwMDAwMA==', 'VDIwMjJfTWFyX1RodV8xODI4MDJfMTMyOTg=', 'gift for you', '', '1646933282'),
(0000000155, 'MDgwMzczODY5OTg=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'Hhhh', '1646933291'),
(0000000156, 'MDgwMzczODY5OTg=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'Rtuh', '1646933299'),
(0000000157, 'MDcwMjY2NjIwNjY=', 'MDgxMDEwMjk3NzE=', '', '', '', 'have you received it?', '1646933312'),
(0000000158, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'hi', '1646933343'),
(0000000159, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', '', '', '', 'hi', '1646933395'),
(0000000160, 'MDgwMzczODY5OTg=', 'MDcwMjY2NjIwNjY=', '', '', '', 'Hello', '1646933405'),
(0000000161, 'MDgwMzczODY5OTg=', 'MDcwMjY2NjIwNjY=', '', '', '', 'Hello', '1646933406'),
(0000000162, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', 'MTAwMDAwMA==', 'VDIwMjJfTWFyX1RodV8xODMwMzVfMjAwNA==', 'use this to buy water', '', '1646933435'),
(0000000163, 'MDgwMzczODY5OTg=', 'MDcwMjY2NjIwNjY=', '', '', '', 'Thanks', '1646933449'),
(0000000164, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', '', '', '', 'good', '1646933456'),
(0000000165, 'MDgwMzczODY5OTg=', 'MDcwMjY2NjIwNjY=', '', '', '', 'Pls am broke send me 1 billion na', '1646933482'),
(0000000166, 'MDgwMzczODY5OTg=', 'MDcwMjY2NjIwNjY=', '', '', '', 'Pls am broke send me 1 billion na', '1646933484'),
(0000000167, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', 'MTAwMDAwMA==', 'VDIwMjJfTWFyX1RodV8xODMxNDdfOTE0NTg=', 'here is it', '', '1646933507'),
(0000000168, 'MDgwMzczODY5OTg=', 'MDgwNjQxMTAyMDg=', 'MzAwMDA=', 'VDIwMjJfTWFyX1RodV8xODMyNDFfMzAzMzI=', 'CHOp money', '', '1646933561'),
(0000000169, 'MDgwNjQxMTAyMDg=', 'KzIzNDgwMzczODY5OTg=', '', '', '', 'I love you infinity very much', '1646933782'),
(0000000170, 'MDgwMzczODY5OTg=', 'MDcwMjY2NjIwNjY=', '', '', '', 'Hello', '1646933944'),
(0000000171, 'MDgwMzczODY5OTg=', 'MDgwNjQxMTAyMDg=', '', '', '', 'Hi', '1646933955'),
(0000000172, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwODk5NjMwNTA=', '', '', '', 'Hi', '1646953749'),
(0000000173, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX01vbl8xNzAyMDZfNDMwMTA=', 'd', '', '1647273726'),
(0000000174, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', '', 'VDIwMjJfTWFyX01vbl8xNzAyMjZfMjMyMTc=', '', '', '1647273746'),
(0000000175, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', '', 'VDIwMjJfTWFyX01vbl8xNzAzMjhfNTQ3MzM=', '', '', '1647273808'),
(0000000176, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX01vbl8xNzA0MDlfOTUzODc=', 'aa', '', '1647273849'),
(0000000177, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX01vbl8xNzA4MTNfMjg5NTk=', 'ww', '', '1647274093'),
(0000000178, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX01vbl8xNzEwMjlfNTQ2Mg==', 'hiii', '', '1647274229'),
(0000000179, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX01vbl8xNzEwMzJfMTAzNzc=', 'hiii', '', '1647274232'),
(0000000180, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX01vbl8xNzEwMzdfNDUwMjM=', 'hiii', '', '1647274237'),
(0000000181, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX01vbl8xNzEwMzhfMjE1MTQ=', 'hiii', '', '1647274238'),
(0000000182, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX01vbl8xNzEwMzhfNTcwMjQ=', 'hiii', '', '1647274238'),
(0000000183, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MTIy', 'VDIwMjJfTWFyX01vbl8xNzIzNDFfODkwMTg=', 'hh', '', '1647275021'),
(0000000184, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX01vbl8xNzI0MjhfOTMwMw==', 'hhh', '', '1647275068'),
(0000000185, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MTIyMg==', 'VDIwMjJfTWFyX01vbl8xNzM5NDdfODE4MTM=', 'test', '', '1647275987'),
(0000000186, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MTEzMw==', 'VDIwMjJfTWFyX01vbl8xNzQ3NDhfMzE4NjM=', 'test', '', '1647276468'),
(0000000187, 'MDcwMjY2NjIwNjY=', 'MDgxMzc5MjY5MDQ=', 'MTEyMjI=', 'VDIwMjJfTWFyX01vbl8xNzQ5MDNfNTY0MDA=', 'dd', '', '1647276543'),
(0000000188, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MTQy', 'VDIwMjJfTWFyX01vbl8xNzUwMDNfNjg2NA==', 'test', '', '1647276603'),
(0000000189, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MTIyMjIy', 'VDIwMjJfTWFyX01vbl8xNzU0MjBfMTQ5NDk=', 'rrrrrrrr', '', '1647276860'),
(0000000190, 'MDgxMDEwMjk3NzE=', 'KzIzNDgwMzczODY5OTg=', 'MzA=', 'VDIwMjJfTWFyX01vbl8yMjI5MDdfMjMxMDQ=', 'Money', '', '1647293347'),
(0000000191, 'MDgxMDEwMjk3NzE=', 'KzIzNDgwODk5NjMwNTA=', 'MTgwNzEwMA==', 'VDIwMjJfTWFyX01vbl8yMjMxMjFfOTY4ODY=', 'Money', '', '1647293481'),
(0000000192, 'MDgxMDEwMjk3NzE=', 'KzIzNDgwMzczODY5OTg=', 'OQ==', 'VDIwMjJfTWFyX1R1ZV8xMzU1MzZfMjgzMzE=', 'q', '', '1647348936'),
(0000000193, 'MDgxMDEwMjk3NzE=', 'KzIzNDgwMzczODY5OTg=', 'MQ==', 'VDIwMjJfTWFyX1R1ZV8xMzU1NTZfNTg0OTg=', 'q', '', '1647348956'),
(0000000194, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1R1ZV8xNDUyNTJfNzUxNTI=', 'A', '', '1647352372'),
(0000000195, 'MDcwMjY2NjIwNjY=', 'MDgxMzc5MjY5MDQ=', 'MjMzMg==', 'VDIwMjJfTWFyX1R1ZV8xNTEyMjZfODUyNzc=', 'a', '', '1647353546'),
(0000000196, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1R1ZV8xNTU5NDZfMjIzMDk=', 'a', '', '1647356386'),
(0000000197, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjM0MzQ0', 'VDIwMjJfTWFyX1R1ZV8xNjA3NTlfOTgzMg==', 'test', '', '1647356879'),
(0000000198, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjM0MzQ0', 'VDIwMjJfTWFyX1R1ZV8xNjA4MzhfODk4MzM=', 'test', '', '1647356918'),
(0000000199, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1R1ZV8xNjI1MTJfMTI4NDE=', 'hh', '', '1647357912'),
(0000000200, 'MDgxMDEwMjk3NzE=', 'KzIzNDgwMzczODY5OTg=', 'MTAwMDAwMA==', 'VDIwMjJfTWFyX1R1ZV8xNzA3MTFfMjUxNzU=', 'm', '', '1647360431'),
(0000000201, 'MDgxMDEwMjk3NzE=', 'MDcwMjY2NjIwNjY=', 'NDU2Nzg4OQ==', 'VDIwMjJfTWFyX1dlZF8wOTM5MjhfMzgzOTU=', 'wsfdsf', '', '1647419968'),
(0000000202, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xNDQ2MDVfMjYzOQ==', '111111111111', '', '1647438365'),
(0000000203, 'MDcwMjY2NjIwNjY=', 'KzIzNDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xNDQ2MjZfNzI1Ng==', '111111111111', '', '1647438386'),
(0000000204, 'MDgwMzczODY5OTg=', 'MDcwMjY2NjIwNjY=', 'MzAwMDA=', 'VDIwMjJfTWFyX1dlZF8xNDU3NThfMTgzNDQ=', 'free', '', '1647439078'),
(0000000205, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xNDU4MThfNTAwODg=', 'hi', '', '1647439098'),
(0000000206, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', 'MjMzMg==', 'VDIwMjJfTWFyX1dlZF8xNTA1NTNfNjQ3NzU=', 'hi', '', '1647439553'),
(0000000207, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', 'MjMzMjU=', 'VDIwMjJfTWFyX1dlZF8xNTA3MDdfMjUzNw==', '55', '', '1647439627'),
(0000000208, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', 'MTE=', 'VDIwMjJfTWFyX1dlZF8xNTExMjFfMzY1MTY=', '11', '', '1647439881'),
(0000000209, 'MDcwMjY2NjIwNjY=', 'MDgwMzczODY5OTg=', 'MTAwMA==', 'VDIwMjJfTWFyX1dlZF8xNjAzMjFfMzQxNDQ=', 'hhh', '', '1647443001'),
(0000000210, '', '', '', '', '', 'hi', '1647443454'),
(0000000211, '', '', '', '', '', 'hi', '1647443497'),
(0000000212, '', '', '', '', '', 'hi', '1647443508'),
(0000000213, '', '', '', '', '', 'hi', '1647443514'),
(0000000214, '', '', '', '', '', 'hi', '1647443549'),
(0000000215, '', '', '', '', '', 'hi', '1647443574'),
(0000000216, '', '', '', '', '', 'hi', '1647443576'),
(0000000217, '', '', '', '', '', 'Hello?\r\nThere\'s is no light here yet...', '1647455890'),
(0000000218, 'MDgxMDEwMjk3NzE=', 'KzIzNDgwMzczODY5OTg=', 'MTAwMA==', 'VDIwMjJfTWFyX1dlZF8xOTM5MDRfNzEyOTQ=', 'jmnjjjjj', '', '1647455944'),
(0000000219, '', '', '', '', '', 'hi', '1647535176'),
(0000000220, '', '', '', '', '', 'hi', '1647535235'),
(0000000221, '', '', '', '', '', 'hi', '1647535411'),
(0000000222, '+2347026662066', '+2348064110208', 'MTMyMw==', 'VDIwMjJfTWFyX1RodV8xNzUwMDBfMTU2NjI=', 'test', '', '1647535800'),
(0000000223, '+2347026662066', '+2348064110208', 'MTMyMw==', 'VDIwMjJfTWFyX1RodV8xNzUwMDBfMTU2NjI=', 'test', '', '1647535800'),
(0000000224, '+2347026662066', '+2348064110208', 'MTMyMw==', 'VDIwMjJfTWFyX1RodV8xNzUwMDBfMTU2NjI=', 'test', '', '1647535800'),
(0000000225, '', '', '', '', '', 'hi', '1647535827'),
(0000000226, '+2347026662066', '+2348064110208', '100', 'T2022_Mar_Thu_175252_68529', 'testing', '', '1647535972'),
(0000000227, '+2347026662066', '+2348064110208', '100', 'T2022_Mar_Thu_175252_68529', 'testing', '', '1647535972'),
(0000000228, '+2347026662066', '+2348064110208', '100', 'T2022_Mar_Thu_175252_68529', 'testing', '', '1647535972'),
(0000000229, '+2347026662066', '+2348064110208', '', '', '', 'hi', '1647536155'),
(0000000230, '+2347026662066', '+2348064110208', '100', 'T2022_Mar_Thu_175743_64667', 'aa', '', '1647536263'),
(0000000231, '+2347026662066', '+2348064110208', '100', 'T2022_Mar_Thu_175743_64667', 'aa', '', '1647536263'),
(0000000232, '+2347026662066', '+2348064110208', '100', 'T2022_Mar_Thu_175743_64667', 'aa', '', '1647536263'),
(0000000233, '+2347026662066', '+2348064110208', '', '', '', 'hi', '1647536326'),
(0000000234, '+2348064110208', '+2347026662066', '', '', '', 'hi', '1647536727'),
(0000000235, '+2348064110208', '+2347026662066', '100', 'T2022_Mar_Thu_180621_35068', '1000', '', '1647536781'),
(0000000236, '+2348064110208', '+2349068858601', '750', 'T2022_Mar_Thu_181314_54269', 'aaaaaaaaa', '', '1647537194'),
(0000000237, '+2348101029771', '+2347026662066', '', '', '', 'Hello', '1647608676'),
(0000000238, '+2348101029771', '+2347026662066', '123', 'T2022_Mar_Fri_140605_33542', 'ewew', '', '1647608765'),
(0000000239, '+2347026662066', '+2349068858601', '', '', '', 'hi', '1647613799'),
(0000000240, '+2347026662066', '+2349068858601', '', '', '', 'hello', '1647613831'),
(0000000241, '+2347026662066', '+2349068858601', '2332', 'T2022_Mar_Fri_153042_90887', 'Gift', '', '1647613842'),
(0000000242, '+2347026662066', '+2349068858601', '', '', '', 'hello', '1647613995'),
(0000000243, '+2347026662066', '+2349068858601', '', '', '', 'hello', '1647613998'),
(0000000244, '+2347026662066', '+2349068858601', '', '', '', 'hi', '1647614499'),
(0000000245, '+2347026662066', '+2349068858601', '', '', '', 'hio', '1647615641'),
(0000000246, '+2347026662066', '+2349068858601', '', '', '', 'Hi', '1647941342'),
(0000000247, '+2348101029771', '+2347026662066', '', '', '', 'Hello?', '1647959317'),
(0000000248, '+2348101029771', '+2347026662066', '1000', 'T2022_Mar_Tue_152914_72116', 'Money', '', '1647959354'),
(0000000249, '+2347026662066', '+2349068858601', '', '', '', 'hi', '1647960623'),
(0000000250, '+2347026662066', '+2349068858601', '111111', 'T2022_Mar_Tue_155027_82239', '111', '', '1647960627'),
(0000000251, '+2347026662066', '+2349068858601', '', '', '', 'hi', '1647960636'),
(0000000252, '+2348101029771', '+2348064110208', '1234', 'T2022_Mar_Wed_111520_80033', 'Money', '', '1648030520'),
(0000000253, '+2348023880729', '+2348114528984', '', '', '', 'hi', '1648045702'),
(0000000254, '+2348023880729', '+2348114528984', '100', 'T2022_Mar_Wed_152829_53254', 'gift', '', '1648045709'),
(0000000255, '+2348023880729', '+2348114528984', '', '', '', 'hi', '1648045884'),
(0000000256, '+2348023880729', '+2348114528984', '', '', '', 'hi', '1648045884'),
(0000000257, '+2348023880729', '+2348114528984', '', '', '', 'hi', '1648045884'),
(0000000258, '+2348023880729', '+2348114528984', '', '', '', 'hi', '1648045884'),
(0000000259, '+2348023880729', '+2348114528984', '', '', '', 'hi', '1648045884'),
(0000000260, '+2348023880729', '+2348114528984', '', '', '', 'hi', '1648045885'),
(0000000261, '+2348023880729', '+2348114528984', '', '', '', 'hi', '1648045885'),
(0000000262, '+2348023880729', '+2348114528984', '', '', '', 'hi', '1648045885'),
(0000000263, '+2348101029771', '+2348114528984', '1200', 'T2022_Mar_Fri_171912_59323', 'Money', '', '1648225152'),
(0000000264, '+2348101029771', '+2348023880729', '', '', '', ' ', '1648225266'),
(0000000265, '+2348101029771', '+2348023880729', '', '', '', '                                                                                                                       ', '1648225278'),
(0000000266, '+2348101029771', '+2348023880729', '', '', '', '                                                                                                                                                               xv        vc', '1648225292'),
(0000000267, '+2347026662066', '+2348114528984', '', '', '', 'hi', '1648511653'),
(0000000268, '+2347026662066', '+2348114528984', '100', 'T2022_Mar_Tue_005427_32616', 'gift', '', '1648511667'),
(0000000269, '+2347026662066', '+2348114528984', '', '', '', 'have you recievd it?', '1648511688'),
(0000000270, '+2347026662066', '+2348114528984', '', '', '', 'hi', '1648511750'),
(0000000271, '+2347026662066', '+2348114528984', '', '', '', 'hi', '1648511777'),
(0000000272, '+2347026662066', '+2348023880729', '', '', '', 'hi', '1648511890'),
(0000000273, '+2347026662066', '+2348023880729', '', '', '', 'hi', '1648512147'),
(0000000274, '+2347026662066', '+2348114528984', '', '', '', 'hi', '1648515990'),
(0000000275, '+2347026662066', '+2348114528984', '444', 'T2022_Mar_Tue_020639_84131', 'dee', '', '1648515999'),
(0000000276, '+2348101029771', '+2348114528984', '', '', '', 'Hello, bro! These seems to be some bugs in your backend code...', '1648554979'),
(0000000277, '+2347026662066', '+2348033428098', '', '', '', 'hi\r\n', '1648658409');

-- --------------------------------------------------------

--
-- Table structure for table `unanswered`
--

CREATE TABLE `unanswered` (
  `id` int(30) NOT NULL,
  `question` text DEFAULT NULL,
  `no_asks` int(30) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unanswered`
--

INSERT INTO `unanswered` (`id`, `question`, `no_asks`) VALUES
(1, 'what can you do?', 5),
(2, 'what can you do ?', 5),
(3, 'what topic can I ask', 5),
(4, 'chat bot', 5),
(5, 'asdasd', 5),
(6, 'asdaaa', 5),
(7, 'asd', 5),
(9, 'hello', 5),
(10, 'sample', 5),
(11, 'test', 5),
(12, 'loan', 3),
(13, 'okay', 3),
(14, 'aaaaaaaaaaaaa', 0),
(15, 'fgvvfvfg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pwd` varchar(266) NOT NULL,
  `datecreated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone`, `pwd`, `datecreated`) VALUES
(0000000044, 'Ibrahim Hassan Muhammad', '', '+2347026662066', '81dc9bdb52d04dc20036dbd8313ed055', '1647536594'),
(0000000045, 'Muhammad Abubakar', '', '+2348064110208', '81dc9bdb52d04dc20036dbd8313ed055', '1647536702'),
(0000000046, 'MASK COM', '', '+2349068858601', 'b59c67bf196a4758191e42f76670ceba', '1647537119'),
(0000000047, 'Nnakwue Kene', '', '+2348101029771', '827ccb0eea8a706c4c34a16891f84e7b', '1647608517'),
(0000000048, 'Faruq Hassan', '', '+2348114528984', '81dc9bdb52d04dc20036dbd8313ed055', '1648035035'),
(0000000049, 'Muhammad Hassan Hassan', '', '+2348023880729', '81dc9bdb52d04dc20036dbd8313ed055', '1648043479'),
(0000000050, 'Khaleal', '', '+2348022276859', '81dc9bdb52d04dc20036dbd8313ed055', '1648050712'),
(0000000051, 'Ma\'aji', '', '+2348037386998', '446227a1c2e3e61e9a6bfcec3eb04db7', '1648505516'),
(0000000052, 'Maaji', '', '+2347026662060', '81dc9bdb52d04dc20036dbd8313ed055', '1648515825'),
(0000000053, 'Maaji', '', '+23470266620605', '81dc9bdb52d04dc20036dbd8313ed055', '1648515899'),
(0000000054, 'Maaji', '', '+2347026662666', '81dc9bdb52d04dc20036dbd8313ed055', '1648515964'),
(0000000055, 'Suraja Muhammad', '', '+2347026662166', '81dc9bdb52d04dc20036dbd8313ed055', '1648516082'),
(0000000056, 'Abu Hassan', '', '+2348033428098', '81dc9bdb52d04dc20036dbd8313ed055', '1648561604');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bot`
--
ALTER TABLE `bot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carins`
--
ALTER TABLE `carins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investment`
--
ALTER TABLE `investment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refs`
--
ALTER TABLE `refs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balance`
--
ALTER TABLE `balance`
  MODIFY `id` int(15) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `bot`
--
ALTER TABLE `bot`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `carins`
--
ALTER TABLE `carins`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `investment`
--
ALTER TABLE `investment`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `refs`
--
ALTER TABLE `refs`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
