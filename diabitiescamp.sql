-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2013 at 01:04 AM
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
  `adhaar_card_number` int(16) DEFAULT NULL,
  `patient_photo_path` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=165 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `age`, `contact_number`, `address`, `id`, `created`, `gender`, `modified`, `adhaar_card_number`, `patient_photo_path`) VALUES
('Srinivasa Murthy', 50, '9738663357', 'Jayanagar', 72, '2013-06-02 06:34:06', 0, '2013-06-02 06:34:06', NULL, NULL),
('Shashanka N', 27, '9448970085', 'Kanakapura Road', 73, '2013-06-02 06:34:52', 0, '2013-06-02 06:34:52', NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 82, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 83, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 84, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 85, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 86, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 87, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 88, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 89, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 90, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 91, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 92, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 93, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 94, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 95, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 96, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 97, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 98, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 99, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 100, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 101, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 102, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 103, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 104, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 105, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 106, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 107, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 108, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 109, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 110, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 111, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 112, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 113, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 114, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 115, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 116, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 117, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 118, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 119, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 120, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 121, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 122, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 123, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 124, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 125, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 126, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 127, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 128, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 129, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 130, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 131, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 132, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 133, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 134, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 135, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 136, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 137, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 138, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 139, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 140, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 141, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 142, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 143, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 144, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 145, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 146, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 147, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 148, NULL, 0, NULL, NULL, NULL),
('Shank', 28, NULL, 'Kanakapura Road', 149, NULL, 0, NULL, NULL, NULL),
('Anand', 92, '9987766', 'aslkdhlsakdh', 150, '2013-06-02 07:04:23', 0, '2013-06-02 07:04:23', NULL, NULL),
('popo', 29, '', '', 151, '2013-06-03 15:47:17', 0, '2013-06-03 15:47:17', 2147483647, NULL),
('oops', 29, '018273', '', 152, '2013-06-03 16:01:48', 0, '2013-06-03 16:01:48', NULL, NULL),
('asd', 23, '1928376', '', 153, '2013-06-03 16:31:58', 0, '2013-06-03 16:31:58', NULL, NULL),
('loks', 23, '875875', '', 154, '2013-06-03 17:02:44', 0, '2013-06-03 17:02:44', NULL, NULL),
('Shashank', 23, '198237', '', 155, '2013-06-04 00:08:31', 0, '2013-06-04 00:08:31', NULL, NULL),
('klop', 99, '88723', '', 156, '2013-06-04 00:20:31', 0, '2013-06-04 00:20:31', NULL, NULL),
('klop', 23, '987123', '', 157, '2013-06-04 00:23:37', 0, '2013-06-04 00:23:37', NULL, NULL),
('jjok', 21, '123123', '', 158, '2013-06-04 00:24:15', 0, '2013-06-04 00:24:15', NULL, NULL),
('kls', 22, '17236', '', 159, '2013-06-04 00:27:58', 0, '2013-06-04 00:27:58', NULL, NULL),
('asd', 23, '123123', '', 160, '2013-06-04 00:34:39', 0, '2013-06-04 00:34:39', NULL, NULL),
('lkasd', 23, '123123', '', 161, '2013-06-04 00:35:34', 0, '2013-06-04 00:35:34', NULL, NULL),
('asd', 23, '123123', '', 162, '2013-06-04 00:36:15', 0, '2013-06-04 00:36:15', NULL, NULL),
('lkasd', 23, '123123', '', 163, '2013-06-04 00:39:22', 0, '2013-06-04 00:39:22', NULL, NULL),
('lkasd', 23, '123123', '', 164, '2013-06-04 00:45:23', 0, '2013-06-04 00:45:23', NULL, 'PatientImages/20130604004522.jpg');

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
