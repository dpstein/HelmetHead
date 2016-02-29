-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2016 at 03:05 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `helmet`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'h_base'),
(2, 'h_wrap'),
(3, 'h_visor'),
(4, 'h_flare'),
(5, 'h_tech');

-- --------------------------------------------------------

--
-- Table structure for table `helmet_builds`
--

CREATE TABLE IF NOT EXISTS `helmet_builds` (
  `build_id` int(20) NOT NULL AUTO_INCREMENT,
  `h_base` varchar(255) NOT NULL,
  `h_visor` varchar(255) NOT NULL,
  `h_wrap` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `h_flare` varchar(255) NOT NULL,
  `h_tech` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  PRIMARY KEY (`build_id`),
  UNIQUE KEY `build_id` (`build_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=169 ;

--
-- Dumping data for table `helmet_builds`
--

INSERT INTO `helmet_builds` (`build_id`, `h_base`, `h_visor`, `h_wrap`, `user_id`, `h_flare`, `h_tech`, `comments`) VALUES
(38, '1', '1', '1', 29, '0', '2', ''),
(39, '1', '1', '1', 29, '0', '2', ''),
(40, '1', '1', '1', 29, '0', '2', ''),
(41, '1', '1', '1', 29, '0', '2', ''),
(42, '1', '1', '1', 29, '0', '2', ''),
(43, '1', '1', '1', 29, '0', '2', ''),
(44, '1', '1', '1', 29, '0', '2', ''),
(45, '1', '1', '1', 29, '0', '2', ''),
(46, '1', '1', '1', 29, '0', '2', ''),
(47, '1', '1', '1', 29, '0', '2', ''),
(48, '1', '', '', 29, '', '', ''),
(49, '1', '', '', 29, '', '', ''),
(50, '1', '', '', 29, '', '', ''),
(51, '1', '', '', 29, '', '', ''),
(52, '2', '', '', 29, '', '', ''),
(53, '2', '', '', 29, '', '', ''),
(54, '2', '', '', 29, '', '', ''),
(55, '2', '', '', 29, '', '', ''),
(56, '2', '', '', 29, '', '', ''),
(57, '2', '', '', 29, '', '', ''),
(58, '2', '', '', 29, '', '', ''),
(59, '2', '', '', 29, '', '', ''),
(60, '2', '', '', 29, '', '', ''),
(61, '2', '', '', 29, '', '', ''),
(62, '2', '', '', 29, '', '', ''),
(63, '2', '', '', 29, '', '', ''),
(64, '2', '', '', 29, '', '', ''),
(65, '2', '', '', 29, '', '', ''),
(66, '2', '', '', 29, '', '', ''),
(67, '2', '', '', 29, '', '', ''),
(68, '2', '', '', 29, '', '', ''),
(69, '2', '', '', 29, '', '', ''),
(70, '2', '', '', 29, '', '', ''),
(71, '2', '', '', 29, '', '', ''),
(72, '2', '', '', 29, '', '', ''),
(73, '2', '', '', 29, '', '', ''),
(74, '2', '', '', 29, '', '', ''),
(75, '2', '', '', 29, '', '', ''),
(76, '1', '', '', 29, '', '', ''),
(77, '1', '', '', 29, '', '', ''),
(78, '1', '', '', 29, '', '', ''),
(79, '1', '', '', 29, '', '', ''),
(80, '1', '', '', 29, '', '', ''),
(81, '1', '', '', 29, '', '', ''),
(82, '1', '', '', 29, '', '', ''),
(83, '1', '', '', 29, '', '', ''),
(84, '1', '', '', 29, '', '', ''),
(85, '1', '', '', 29, '', '', ''),
(86, '2', '', '', 29, '', '', ''),
(87, '2', '', '', 29, '', '', ''),
(88, '2', '', '', 29, '', '', ''),
(89, '3', '', '', 29, '', '', ''),
(90, '3', '', '', 29, '', '', ''),
(91, '3', '', '', 29, '', '', ''),
(92, '3', '', '', 29, '', '', ''),
(93, '3', '', '', 29, '', '', ''),
(94, '3', '', '', 29, '', '', ''),
(95, '3', '', '', 29, '', '', ''),
(96, '1', '', '', 29, '', '', ''),
(97, '1', '', '', 29, '', '', ''),
(98, '1', '', '', 29, '', '', ''),
(99, '1', '', '', 29, '', '', ''),
(100, '1', '', '', 29, '', '', ''),
(101, '1', '', '', 29, '', '', ''),
(102, '1', '', '', 29, '', '', ''),
(103, '1', '', '', 29, '', '', ''),
(104, '1', '', '', 29, '', '', ''),
(105, '1', '', '', 29, '', '', ''),
(106, '1', '', '', 29, '', '', ''),
(107, '1', '', '', 29, '', '', ''),
(108, '1', '', '', 29, '', '', ''),
(109, '1', '', '', 29, '', '', ''),
(110, '1', '', '', 29, '', '', ''),
(111, '1', '', '', 29, '', '', ''),
(112, '1', '', '', 29, '', '', ''),
(113, '1', '', '', 29, '', '', ''),
(114, '1', '', '', 29, '', '', ''),
(115, '1', '', '', 29, '', '', ''),
(116, '1', '', '', 29, '', '', ''),
(117, '1', '', '', 29, '', '', ''),
(118, '1', '', '', 29, '', '', ''),
(119, '1', '', '', 29, '', '', ''),
(120, '1', '', '', 29, '', '', ''),
(121, '2', '2', '2', 29, '0', '2', ''),
(122, '1', '', '', 29, '', '', ''),
(123, '1', '', '', 29, '', '', ''),
(124, '2', '', '', 29, '', '', ''),
(125, '2', '', '', 29, '', '', ''),
(126, '2', '', '', 29, '', '', ''),
(127, '2', '', '', 29, '', '', ''),
(128, '2', '', '', 29, '', '', ''),
(129, '2', '', '', 29, '', '', ''),
(130, '3', '', '', 29, '', '', ''),
(131, '2', '', '', 29, '', '', ''),
(132, '1', '', '', 29, '', '', ''),
(133, '1', '', '', 29, '', '', ''),
(134, '1', '', '', 29, '', '', ''),
(135, '1', '', '', 29, '', '', ''),
(136, '2', '', '', 29, '', '', ''),
(137, '2', '', '', 29, '', '', ''),
(138, '1', '', '', 29, '', '', ''),
(139, '3', '', '', 29, '', '', ''),
(140, '3', '', '', 29, '', '', ''),
(141, '1', '', '', 29, '', '', ''),
(142, '1', '', '', 29, '', '', ''),
(143, '1', '', '', 29, '', '', ''),
(144, '1', '', '', 29, '', '', ''),
(145, '1', '', '', 29, '', '', ''),
(146, '1', '', '', 29, '', '', ''),
(147, '1', '', '', 29, '', '', ''),
(148, '1', '', '', 29, '', '', ''),
(149, '1', '', '', 29, '', '', ''),
(150, '1', '', '', 29, '', '', ''),
(151, '1', '', '', 29, '', '', ''),
(152, '1', '', '', 29, '', '', ''),
(153, '1', '', '', 29, '', '', ''),
(154, '1', '', '', 29, '', '', ''),
(155, '1', '', '', 29, '', '', ''),
(156, '1', '', '', 29, '', '', ''),
(157, '1', '', '', 29, '', '', ''),
(158, '1', '', '', 29, '', '', ''),
(159, '1', '', '', 29, '', '', ''),
(160, '1', '', '', 29, '', '', ''),
(161, '2', '2', '2', 29, '1', '2', ''),
(162, '2', '2', '2', 29, '1', '2', ''),
(163, '2', '2', '2', 29, '1', '2', ''),
(164, '2', '2', '2', 29, '1', '2', ''),
(165, '1', '2', '2', 29, '', '', ''),
(166, '3', '1', '3', 29, '', '', ''),
(167, 'base_2', '', '', 29, '', '', ''),
(168, 'base_2', '', '', 29, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `h_base`
--

CREATE TABLE IF NOT EXISTS `h_base` (
  `base_name` varchar(255) DEFAULT NULL,
  `base_desc` text NOT NULL,
  `base_id` int(11) NOT NULL AUTO_INCREMENT,
  `base_price` float NOT NULL,
  `base_order` int(3) DEFAULT NULL,
  `base_vis` tinyint(1) NOT NULL DEFAULT '1',
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`base_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `h_base`
--

INSERT INTO `h_base` (`base_name`, `base_desc`, `base_id`, `base_price`, `base_order`, `base_vis`, `cat_id`) VALUES
('Street Base', 'Mixtape biodiesel cray wayfarers yr gochujang. Freegan affogato iPhone ethical next level. Synth swag humblebrag, squid cardigan YOLO bitters lo-fi four dollar toast fap lomo pork belly organic seitan yr. ', 1, 175, 1, 1, 1),
('Commuter Base', 'Get to work on time', 2, 185, 2, 1, 1),
('Off-Road Base', 'Let''s get dirty', 3, 169, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `h_flare`
--

CREATE TABLE IF NOT EXISTS `h_flare` (
  `flare_name` varchar(255) DEFAULT NULL,
  `flare_id` int(11) NOT NULL,
  `flare_vis` tinyint(1) NOT NULL,
  `flare_price` float NOT NULL,
  `flare_order` int(3) NOT NULL,
  `flare_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `h_flare`
--

INSERT INTO `h_flare` (`flare_name`, `flare_id`, `flare_vis`, `flare_price`, `flare_order`, `flare_desc`) VALUES
('Mohawk', 0, 1, 35, 1, ''),
('Spikes', 1, 1, 22, 2, ''),
('horns', 0, 1, 24.99, 3, 'Bring out the devil in your ride');

-- --------------------------------------------------------

--
-- Table structure for table `h_tech`
--

CREATE TABLE IF NOT EXISTS `h_tech` (
  `tech_name` varchar(255) DEFAULT NULL,
  `tech_desc` text NOT NULL,
  `tech_order` int(11) NOT NULL,
  `tech_price` float NOT NULL,
  `tech_vis` int(2) NOT NULL,
  `tech_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`tech_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `h_tech`
--

INSERT INTO `h_tech` (`tech_name`, `tech_desc`, `tech_order`, `tech_price`, `tech_vis`, `tech_id`) VALUES
('Wireless Audio', 'Cillum id minim est, proident ut sunt kevin do pork chop labore beef ribs hamburger cupidatat. Aute prosciutto tenderloin pork belly, et beef fugiat salami reprehenderit deserunt jowl officia tempor.', 1, 255, 1, 1),
('Bluetooth Package', 'Esse mollit consequat frankfurter. Minim eu spare ribs ad. Cupim tail filet mignon fatback picanha pariatur magna chuck turkey boudin aute. Non tenderloin reprehenderit biltong aliquip voluptate dolore.', 3, 165, 1, 2),
('XPD Extreme', 'Excepteur culpa in minim esse kielbasa hamburger corned beef proident ut bacon strip steak commodo ipsum cillum. Deserunt velit turkey beef, biltong laboris turducken pancetta chicken ut est ribeye culpa cillum.', 3, 347, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `h_visor`
--

CREATE TABLE IF NOT EXISTS `h_visor` (
  `visor_name` varchar(255) DEFAULT NULL,
  `visor_desc` text NOT NULL,
  `visor_id` int(11) NOT NULL AUTO_INCREMENT,
  `visor_order` int(2) NOT NULL,
  `visor_vis` tinyint(1) NOT NULL,
  `visor_price` float NOT NULL,
  PRIMARY KEY (`visor_id`),
  UNIQUE KEY `visor_id` (`visor_id`),
  UNIQUE KEY `visor_id_2` (`visor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `h_visor`
--

INSERT INTO `h_visor` (`visor_name`, `visor_desc`, `visor_id`, `visor_order`, `visor_vis`, `visor_price`) VALUES
('Mirrored', 'Sick as snot, mirrored surface', 1, 1, 1, 35),
('Smoke', 'Grey Smoke with a slight mirrored finish', 2, 2, 1, 27),
('Colored', 'Pick from a rainbow of color choices', 3, 3, 1, 18.99);

-- --------------------------------------------------------

--
-- Table structure for table `h_wrap`
--

CREATE TABLE IF NOT EXISTS `h_wrap` (
  `wrap_name` varchar(255) DEFAULT NULL,
  `wrap_desc` text NOT NULL,
  `wrap_id` int(11) NOT NULL AUTO_INCREMENT,
  `wrap_order` int(11) NOT NULL,
  `wrap_vis` tinyint(1) NOT NULL,
  `wrap_price` decimal(10,0) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`wrap_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `h_wrap`
--

INSERT INTO `h_wrap` (`wrap_name`, `wrap_desc`, `wrap_id`, `wrap_order`, `wrap_vis`, `wrap_price`, `cat_id`) VALUES
('Flower Power', 'Bacon ipsum dolor amet cillum boudin turducken, in chicken pancetta andouille. Beef ribs in alcatra, fatback dolore boudin strip steak capicola biltong. Veniam in pancetta shoulder leberkas enim ball tip. ', 1, 1, 1, '0', 2),
('Striper', 'Flank picanha boudin ad. Eu bresaola ut laborum. Cupidatat bresaola lorem ut. Corned beef esse exercitation kevin brisket, salami doner ad tongue. Quis elit fugiat rump jerky sausage culpa. Meatball et elit aliqua alcatra esse.', 2, 2, 1, '0', 2),
('Graphic Wonder', 'Tongue sirloin et eu rump quis short ribs sunt jerky beef officia picanha ut hamburger. Bacon frankfurter pastrami eu sint ut meatloaf occaecat commodo magna t-bone quis short ribs.', 3, 3, 1, '0', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `user_status` varchar(6) DEFAULT NULL,
  `pwd` varchar(255) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `fname`, `lname`, `email`, `user_status`, `pwd`, `timeStamp`) VALUES
(25, 'Mark', 'Gray', 'Gray@aol.com', NULL, '$2y$10$j8NOwHTfMzTnhx8kpe5cEeiHypB4DKdQ3oM80IKAzYRZa4npV00tu', '2016-02-22 13:31:50'),
(29, 'David', 'Steiner', 'dp_steiner@yahoo.com', NULL, '$2y$10$oICUbCvbkVAsOVveKHfI6uqUzRIPiDvynhinRLdDbzsghmCK441.G', '2016-02-22 21:13:41');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
