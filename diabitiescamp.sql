-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2013 at 12:31 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diabitiescamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `camps`
--

CREATE TABLE IF NOT EXISTS `camps` (
  `id` int(2) NOT NULL,
  `name` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE IF NOT EXISTS `histories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `previous_ulcer_amputation` tinyint(1) DEFAULT NULL,
  `previous_foot_education` tinyint(1) DEFAULT NULL,
  `social_isolation` tinyint(1) DEFAULT NULL,
  `poor_access_to_healthcare` tinyint(1) DEFAULT NULL,
  `walking_barefoot` tinyint(1) DEFAULT NULL,
  `neuropathy_symptoms` varchar(1024) DEFAULT NULL,
  `claudication` tinyint(1) DEFAULT NULL,
  `rest_pain` tinyint(1) DEFAULT NULL,
  `pedal_pulses` tinyint(1) DEFAULT NULL,
  `color` varchar(256) DEFAULT NULL,
  `temperature` varchar(256) DEFAULT NULL,
  `Oedema` varchar(256) DEFAULT NULL,
  `deformities_bony_prominences` varchar(256) DEFAULT NULL,
  `assesment_inside_outside` varchar(256) DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nutritional_statuses`
--

CREATE TABLE IF NOT EXISTS `nutritional_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `height` int(3) DEFAULT NULL,
  `weight` int(3) DEFAULT NULL,
  `ibw` int(3) DEFAULT NULL,
  `bmi` int(3) DEFAULT NULL,
  `waist_girth` int(3) DEFAULT NULL,
  `hip_girth` int(3) DEFAULT NULL,
  `waist_hip_ratio` float DEFAULT NULL,
  `body_fat` float DEFAULT NULL,
  `hydration` float DEFAULT NULL,
  `visceral_fat` float DEFAULT NULL,
  `muscle_mass` float DEFAULT NULL,
  `skeletal_mass` float DEFAULT NULL,
  `metabolic_rate` int(5) DEFAULT NULL,
  `metabolic_age` int(3) DEFAULT NULL,
  `impression_advice` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pressure_point_distribution_assessments`
--

CREATE TABLE IF NOT EXISTS `pressure_point_distribution_assessments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `report` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `units_codes`
--

CREATE TABLE IF NOT EXISTS `units_codes` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(256) NOT NULL,
  `age` int(2) NOT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `address` varchar(512) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `gender` int(11) NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=151 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `age`, `contact_number`, `address`, `id`, `created`, `gender`, `modified`) VALUES
('abcde', 28, NULL, 'sampledata', 82, NULL, 0, NULL),
('abcde', 92, '9987766', 'aslkdhlsakdh', 150, '2013-06-02 07:04:23', 0, '2013-06-02 07:04:23');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `histories`
--
ALTER TABLE `histories`
  ADD CONSTRAINT `histories_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nutritional_statuses`
--
ALTER TABLE `nutritional_statuses`
  ADD CONSTRAINT `nutritional_statuses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
