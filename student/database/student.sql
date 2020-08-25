-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2017 at 12:19 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `attendance_date` date NOT NULL,
  `attendance_status` enum('p','a') NOT NULL DEFAULT 'a',
  PRIMARY KEY (`attendance_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `student_id`, `attendance_date`, `attendance_status`) VALUES
(1, 45, '2016-12-08', 'p'),
(3, 47, '2016-12-09', 'p'),
(4, 46, '2016-12-09', 'p'),
(5, 48, '2016-12-09', 'p'),
(6, 49, '2016-12-09', 'p'),
(7, 50, '2016-12-09', 'p'),
(8, 50, '2016-12-16', 'p'),
(9, 47, '2016-12-17', 'p'),
(10, 53, '2016-12-20', 'p'),
(11, 46, '2016-12-26', 'p'),
(12, 49, '2016-12-26', 'p'),
(13, 46, '2017-01-02', 'p'),
(14, 46, '2017-01-04', 'p'),
(15, 50, '2017-01-05', 'p'),
(16, 51, '2017-01-05', 'p'),
(17, 57, '2017-01-05', 'p'),
(18, 62, '2017-01-05', 'p'),
(19, 46, '2017-01-05', 'p'),
(20, 55, '2017-01-05', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_no` int(10) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `course_duration` int(10) NOT NULL,
  `course_status` varchar(400) NOT NULL,
  `semester` int(10) NOT NULL,
  PRIMARY KEY (`course_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_no`, `course_name`, `course_duration`, `course_status`, `semester`) VALUES
(1, 'BCA', 3, '1', 6),
(2, 'CIVIL', 4, '1', 8),
(3, 'CSE', 4, '1', 8),
(4, 'ECE', 4, '1', 8),
(5, 'EE', 4, '1', 8),
(6, 'IT', 4, '1', 8),
(7, 'HMCT', 3, '1', 6),
(8, 'BBA', 3, '1', 6),
(9, 'MCA', 3, '1', 6),
(10, 'MBA', 2, '1', 4),
(11, 'MECHANICAL', 4, '1', 8),
(12, 'BSC', 3, '1', 6),
(13, 'HMCT(H)', 2, '1', 4),
(14, 'BE', 4, '1', 8),
(15, 'Diploma', 2, '1', 4),
(16, 'BE', 1, '1', 4),
(17, 'Electrical', 4, '1', 8),
(19, 'MBA', 2, '1', 4);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(100) NOT NULL,
  `event_desc` varchar(500) NOT NULL,
  `event_date` date NOT NULL,
  `event_pic` varchar(500) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_desc`, `event_date`, `event_pic`) VALUES
(1, 'TechnoVision 2K15', 'TechnoVision 2015', '2015-01-03', '2015-02-14-15-54-52-298.jpg'),
(2, 'Book Fair 2k16', 'Book Fair in our Institute on 20 aug 2016', '2016-08-11', 'WP_20150214_036.jpg'),
(3, 'Dance Program', 'Dance Program in Book Fair 2k15 in our College', '2016-03-08', 'IMG-20160222-WA0018.jpg'),
(4, 'gafgqa', 'afaqhf', '1998-08-13', '918906553824.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE IF NOT EXISTS `logindetails` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`id`, `name`, `userid`, `password`) VALUES
(1, 'Lovely chakraborty', 'admin', 'admin123'),
(2, 'Lovely chakraborty', 'lovely', '@lovely123');

-- --------------------------------------------------------

--
-- Table structure for table `marks_details`
--

CREATE TABLE IF NOT EXISTS `marks_details` (
  `mark_det_id` int(11) NOT NULL AUTO_INCREMENT,
  `marks_id` int(11) NOT NULL,
  `subject_no` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `marks` int(11) NOT NULL,
  PRIMARY KEY (`mark_det_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `marks_details`
--

INSERT INTO `marks_details` (`mark_det_id`, `marks_id`, `subject_no`, `marks`) VALUES
(1, 1, 'BCA101', 98),
(2, 1, 'BCA102', 89),
(3, 1, 'BCA103', 87),
(4, 1, 'BCA104', 67),
(5, 1, 'BM101', 78),
(6, 2, 'BCA201', 87),
(7, 2, 'BCA202', 78),
(8, 2, 'BCA203', 80),
(9, 2, 'BM201', 65),
(10, 2, 'HU201', 57),
(11, 3, 'BCA201', 89),
(12, 3, 'BCA202', 75),
(13, 3, 'BCA203', 77),
(14, 3, 'BM201', 98),
(15, 3, 'HU201', 60),
(16, 4, 'BBA301', 78),
(17, 4, 'BCA301', 98),
(18, 4, 'BCA302', 86),
(19, 4, 'BCA303', 89),
(20, 4, 'BM301', 75);

-- --------------------------------------------------------

--
-- Table structure for table `mark_master`
--

CREATE TABLE IF NOT EXISTS `mark_master` (
  `marks_id` int(10) NOT NULL AUTO_INCREMENT,
  `student_id` int(10) NOT NULL,
  `course_no` int(10) NOT NULL,
  `semester` int(10) NOT NULL,
  PRIMARY KEY (`marks_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mark_master`
--

INSERT INTO `mark_master` (`marks_id`, `student_id`, `course_no`, `semester`) VALUES
(1, 46, 1, 1),
(2, 50, 1, 2),
(3, 51, 1, 2),
(4, 49, 1, 3),
(5, 46, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `student_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `mother_name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `alt_contact_no` bigint(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `postal_code` int(10) NOT NULL,
  `course_no` int(10) NOT NULL,
  `semester` int(10) NOT NULL,
  `profile_pic` varchar(500) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`student_id`, `first_name`, `middle_name`, `last_name`, `father_name`, `mother_name`, `dob`, `gender`, `email_id`, `contact_no`, `alt_contact_no`, `address`, `postal_code`, `course_no`, `semester`, `profile_pic`) VALUES
(46, 'Lovely', '', 'Chakraborty', 'D. Chakraborty', 'P. Chakraborty', '1995-02-23', 'F', 'lovely@gmail.com', 9003456287, 8979994559, 'Phansidewa,Darjeeling', 734434, 1, 1, 'WP_20150214_027.jpg'),
(63, 'Beauty', '', 'Chakraborty', 'D. Chakraborty', 'P. Chakraborty', '1995-02-23', 'F', 'beau@gmail.com', 7890009648, 8767645524, 'Siliguri, Darjeeling', 734434, 1, 1, 'students_01_hd_picture_168121.jpg'),
(55, 'Argha', 'Nil', 'Chakraborty', 'J. Chakraborty', 'S. Chakraborty', '1996-02-27', 'F', 'argha23@gmail.com', 9876545371, 8986000589, 'Siliguri, Darjeeling', 734423, 1, 1, 'IMG-20151124-WA0004.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_no` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `subject_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `course_no` int(10) NOT NULL,
  `subject_status` varchar(400) NOT NULL,
  `semester` int(10) NOT NULL,
  PRIMARY KEY (`subject_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_no`, `subject_name`, `course_no`, `subject_status`, `semester`) VALUES
('34g', 'math', 2, '1', 2),
('BBA301', 'Management & Accounting', 1, '1', 3),
('BCA101', 'Digital Electronics', 1, '1', 1),
('BCA102', 'Business Systems and Applications', 1, '1', 1),
('BCA103', 'Introduction to Programming', 1, '1', 1),
('BCA104', 'PC Software', 1, '1', 1),
('BCA201', 'Computer Architecture and Systems Software', 1, '1', 2),
('BCA202', 'Information Systems Analysis & Design', 1, '1', 2),
('BCA203', 'Computer Programming', 1, '1', 2),
('BCA301', 'Operating Systems', 1, '1', 3),
('BCA302', 'Data Structures with C', 1, '1', 3),
('BCA303', 'Graphics & Internet', 1, '1', 3),
('BM101', 'Mathematics', 1, '1', 1),
('BM201', 'Mathematics', 1, '1', 2),
('BM301', 'Mathematics for Computing ', 1, '1', 3),
('BM401', 'MATH', 1, '1', 4),
('D11', 'Mathematics', 15, '1', 1),
('D123', 'Digital Electronics', 14, '1', 7),
('Electrical', 'Tharmal Power', 17, '1', 1),
('HU201', 'English Language and Communication', 1, '1', 2),
('math202', 'Math', 2, '1', 2),
('mb197', 'management', 19, '1', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
