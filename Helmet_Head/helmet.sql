-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2016 at 01:35 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=342 ;

--
-- Dumping data for table `helmet_builds`
--

INSERT INTO `helmet_builds` (`build_id`, `h_base`, `h_visor`, `h_wrap`, `user_id`, `h_flare`, `h_tech`, `comments`) VALUES
(329, '', '', '', 33, '', '', ''),
(330, 'None Selected', '', '', 33, '', '', ''),
(331, 'None Selected', 'None Selected', 'None Selected', 33, 'None Selected', 'None Selected', ''),
(332, 'None Selected', 'None Selected', 'None Selected', 0, 'None Selected', 'None Selected', ''),
(333, 'None Selected', 'None Selected', 'None Selected', 0, 'None Selected', 'None Selected', ''),
(334, 'None Selected', 'None Selected', 'None Selected', 33, 'None Selected', 'None Selected', ''),
(335, '1', '2', '2', 33, '1', '2', ''),
(336, '1', '1', '1', 33, '2', 'None Selected', ''),
(337, '1', '1', '2', 33, '1', '2', ''),
(338, '1', '1', '3', 33, '3', '1', ''),
(339, '1', '1', '1', 32, '2', '2', ''),
(340, '1', '1', '2', 32, '1', '2', ''),
(341, '1', '1', '2', 32, '1', '2', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `h_base`
--

INSERT INTO `h_base` (`base_name`, `base_desc`, `base_id`, `base_price`, `base_order`, `base_vis`, `cat_id`) VALUES
('Street Base', 'Mixtape biodiesel cray wayfarers yr gochujang. Freegan affogato iPhone ethical next level. ', 1, 175, 1, 1, 1),
('Commuter Base', 'Get to work on time. Beef ribs in alcatra, fatback dolore boudin strip steak capicola biltong. ', 2, 185, 2, 1, 1),
('Off-Road Base', 'Let''s get dirty. Veniam in pancetta shoulder leberkas enim ball tip. ', 3, 169, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `h_flare`
--

CREATE TABLE IF NOT EXISTS `h_flare` (
  `flare_id` int(11) NOT NULL AUTO_INCREMENT,
  `flare_name` varchar(255) NOT NULL,
  `flare_desc` text NOT NULL,
  `flare_price` float NOT NULL,
  `flare_order` int(11) NOT NULL,
  `flare_vis` int(11) NOT NULL,
  PRIMARY KEY (`flare_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `h_flare`
--

INSERT INTO `h_flare` (`flare_id`, `flare_name`, `flare_desc`, `flare_price`, `flare_order`, `flare_vis`) VALUES
(1, 'Mohawk', 'Bacon ipsum dolor amet swine spare ribs chuck pastrami, andouille kielbasa sausage.', 24, 1, 1),
(2, 'Spikes', 'Swine corned beef venison kevin, ball tip pork loin pastrami chuck kielbasa ham hock hamburger filet mignon short ribs.', 32, 2, 1),
(3, 'Horns', 'Capicola filet mignon spare ribs rump alcatra chuck, leberkas corned beef tenderloin t-bone ribeye ham jowl.', 28, 3, 1);

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
('Bluetooth Pkg', 'Esse mollit consequat frankfurter. Minim eu spare ribs ad. Cupim tail filet mignon fatback picanha pariatur magna chuck turkey boudin aute. Non tenderloin reprehenderit biltong aliquip voluptate dolore.', 3, 165, 1, 2),
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
('Colored', 'Pick from a rainbow of color choices', 3, 3, 1, 18);

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
('Flower Power', 'Bacon ipsum dolor amet cillum boudin turducken, in chicken pancetta andouille. ', 1, 1, 1, '69', 2),
('Striper', 'Flank picanha boudin ad. Eu bresaola ut laborum. Cupidatat bresaola lorem ut. Corned beef esse exercitation kevin brisket, salami doner ad tongue.', 2, 2, 1, '47', 2),
('Skull Candy', 'Tongue sirloin et eu rump quis short ribs sunt jerky beef officia picanha ut hamburger.', 3, 3, 1, '52', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `fname`, `lname`, `email`, `user_status`, `pwd`, `timeStamp`) VALUES
(25, 'Mark', 'Gray', 'Gray@aol.com', NULL, '$2y$10$j8NOwHTfMzTnhx8kpe5cEeiHypB4DKdQ3oM80IKAzYRZa4npV00tu', '2016-02-22 13:31:50'),
(29, 'David', 'Steiner', 'dp_steiner@yahoo.com', NULL, '$2y$10$oICUbCvbkVAsOVveKHfI6uqUzRIPiDvynhinRLdDbzsghmCK441.G', '2016-02-22 21:13:41'),
(30, 'Dave', 'Stein', 'dpsteiner@gmail.com', NULL, '$2y$10$74WNM20FGFu5bbF5d13lZOpxVBHVFO7V6ilxd7tD3XPRA.RoyMh0C', '2016-03-06 23:19:58'),
(31, '', '', '', NULL, '$2y$10$YbayzqJ0yOBebzme7JamX.bJzqtPTNphKnUPoxll9z5NcPblF0ZjK', '2016-03-07 00:10:20'),
(32, 'John', 'Stewart', 'js@gmail.com', NULL, '$2y$10$NLSOcJAJTvHRhvR0Yl.vOe7WzJELUnFSHBZyIRN/qaKJD8ZW2JPEe', '2016-03-10 19:21:30'),
(33, 'John', 'Jacob', 'dingle@heimer.com', NULL, '$2y$10$VcZF/rYRN4wMTE3iZOlR1O8Nd7TIR7DvcOviQjjTa6HnGsV8TqIOC', '2016-03-14 11:25:07'),
(34, 'John', 'Jacob', 'dingle@heimer.com', NULL, '$2y$10$1OYRvf87sJ9z2Mb2f8dpdekMve1fgJWJubCO0iw8Exye5AKEGTW5e', '2016-03-14 11:25:51');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
