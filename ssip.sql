-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 05:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssip`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(11) NOT NULL,
  `index_no` int(11) NOT NULL,
  `c_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `number` int(11) NOT NULL,
  `a_number` int(11) NOT NULL,
  `website` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `district` varchar(250) NOT NULL,
  `university` varchar(250) NOT NULL,
  `c_image` varchar(250) NOT NULL,
  `description` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `index_no`, `c_name`, `password`, `date`, `number`, `a_number`, `website`, `email`, `address`, `state`, `district`, `university`, `c_image`, `description`) VALUES
(1, 1011, 'CZMG B.C.A college', '1011', '2022-10-08', 454565466, 5464646, 'https://czmgbca.oshwaleducationtrust.org/ ', 'info.czmgbca@oshwaleducationtrust.org', 'Shah Bhagvandji Kachrabhai Edu. Complex, Ahead of Oshwal Circle,ndira Gandhi Marg,Jamnagar - 361004.', 'Gujarat', 'Jamnagar', 'Saurashtra University', '../upload/czmg.png', 'Good college'),
(2, 1022, 'PD PATEL INSTITUTE OF SCIENCES ', '1022', '2022-10-08', 43535, 45345, ' https://www.charusat.ac.in/pdpias/', 'principal.pdpias@charusat.ac.in', ' Off. Nadiad-Petlad Highway, Changa-388421, Anand, Gujarat', 'Gujarat', 'Anand', 'Gujarat University', '../upload/PD Patel.webp', 'Good college'),
(3, 1033, 'NATIONAL INSTITUTE OF FASHION TECHNOLOGY ', '1033', '2022-10-08', 54654, 5465466, 'https://nift.ac.in/', 'info@nift.ac.in', 'National Institute of Fashion Technology Hauz Khas, Near Gulmohar Park,Gujarat', 'Gujarat', 'Bhavnagar', 'Gujarat University', '../upload/National-Institute-of-Fashion-Technology-to-hire-190-professors-copy-min.jpg', 'Good college'),
(4, 1044, 'Marwadi College', '1044', '2022-10-08', 54654, 5465466, 'https://marwadieducation.edu.in/', 'info@marwadieducation.edu.in', 'Rajkot-Morbi Road, At & PO : Gauridad', 'Gujarat', 'Rajkot', 'Saurashtra University', '../upload/SAVE_20230313_214747.jpg', 'Good college'),
(5, 1055, 'Dr subhash technical  college', '1055', '2022-10-08', 78779869, 5465466, 'https://dsuni.ac.in/home/', 'info@dsuni.ac.in', 'Dr. Subhash University Dr. Subhash Road, Junagadh - 362001, Gujarat.', 'Gujarat', 'Junagadh', 'Saurashtra University', '../upload/Dr subhash.jpeg', 'Good college');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `emp_no` int(11) NOT NULL,
  `emp_name` varchar(250) NOT NULL,
  `emp_password` varchar(250) NOT NULL DEFAULT '1230',
  `number` int(11) NOT NULL,
  `a_number` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `district` varchar(250) NOT NULL,
  `emp_adhar` varchar(250) NOT NULL,
  `emp_pan` varchar(250) NOT NULL,
  `emp_election` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `emp_no`, `emp_name`, `emp_password`, `number`, `a_number`, `email`, `address`, `state`, `district`, `emp_adhar`, `emp_pan`, `emp_election`) VALUES
(1, 2001, 'Patel Raj', '1230', 1234567864, 123456793, 'jhaverij16@gmail.com', 'asdfghjk', 'Gujarat', 'Jamnagar', '../document/', '../document/', '../document/'),
(2, 12313, 'abc', '1230', 123546, 132151, 'abc@gmail.com', 'jhfgfjfjhf', 'Gujarat', 'Ahmedabad', '../document/', '../document/', '../document/'),
(3, 12313, 'abc', '1230', 123546, 132151, 'abc@gmail.com', 'jhfgfjfjhf', 'Gujarat', 'Ahmedabad', '../document/', '../document/', '../document/'),
(4, 31321, 'jay', '1230', 2147483647, 2147483647, 'darshit@gmail.com', 'lkjyjhgshdgiykgg', 'Gujarat', 'Ahmedabad', '../document/', '../document/', '../document/');

-- --------------------------------------------------------

--
-- Table structure for table `emp_req`
--

CREATE TABLE `emp_req` (
  `id` int(11) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'pending',
  `emp_no` int(11) NOT NULL,
  `emp_name` varchar(250) NOT NULL,
  `number` int(11) NOT NULL,
  `a_number` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `district` varchar(250) NOT NULL,
  `emp_adhar` varchar(250) NOT NULL,
  `emp_pan` varchar(250) NOT NULL,
  `emp_election` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_req`
--

INSERT INTO `emp_req` (`id`, `status`, `emp_no`, `emp_name`, `number`, `a_number`, `email`, `address`, `state`, `district`, `emp_adhar`, `emp_pan`, `emp_election`) VALUES
(1, 'approved', 2001, 'Patel Raj', 1234567864, 123456793, 'jhaverij16@gmail.com', 'asdfghjk', 'Gujarat', 'Jamnagar', '../document/', '../document/', '../document/'),
(2, 'rejected', 2002, 'om adreja', 2147483647, 1234567890, 'jhaverij16@gmail.com', 'asdfghjk', 'Gujarat', 'Jamnagar', '../document/', '../document/', '../document/'),
(3, 'approved', 12313, 'abc', 123546, 132151, 'abc@gmail.com', 'jhfgfjfjhf', 'Gujarat', 'Ahmedabad', '../document/', '../document/', '../document/'),
(4, 'approved', 31321, 'jay', 2147483647, 2147483647, 'darshit@gmail.com', 'lkjyjhgshdgiykgg', 'Gujarat', 'Ahmedabad', '../document/', '../document/', '../document/'),
(5, 'pending', 53151, 'darshit', 321534, 2147483647, 'darshit@gmial.cpm', 'jgftfurujhguy', 'Gujarat', 'Palitana', '../document/', '../document/', '../document/');

-- --------------------------------------------------------

--
-- Table structure for table `life_cycle`
--

CREATE TABLE `life_cycle` (
  `id` int(11) NOT NULL,
  `slms_no` int(11) NOT NULL,
  `sc_name` longtext NOT NULL,
  `course` longtext NOT NULL,
  `ds` varchar(250) NOT NULL,
  `district` varchar(250) NOT NULL,
  `ad_date` date DEFAULT NULL,
  `marks` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `life_cycle`
--

INSERT INTO `life_cycle` (`id`, `slms_no`, `sc_name`, `course`, `ds`, `district`, `ad_date`, `marks`) VALUES
(1, 101, 'The Riverside School', 'Nursery', 'A', 'Ahmedabad', '2006-10-06', 0),
(2, 101, 'Eklavya School', 'LKG', 'B', 'Ahmedabad', '2007-10-06', 0),
(3, 101, 'Sunrise Global School', 'UKG', 'D', 'Ahmedabad', '2008-10-06', 0),
(4, 101, 'Calorx Olive International School', '1', 'D', 'Ahmedabad', '2009-10-06', 0),
(5, 101, 'DPS', '2', 'B', 'Ahmedabad', '2010-10-06', 0),
(6, 101, 'The Aditya Birla Public School', '3', 'C', 'Ahmedabad', '2011-10-06', 0),
(7, 101, 'The Aditya Birla Public School', '4', 'E', 'Ahmedabad', '2012-10-06', 0),
(8, 101, 'The Aditya Birla Public School', '5', 'B', 'Ahmedabad', '2013-10-06', 0),
(9, 101, 'The Aditya Birla Public School', '6', 'A', 'Ahmedabad', '2014-10-06', 0),
(10, 102, 'Eklavya School', 'Nursery', 'C', 'Ahmedabad', '2006-06-15', 0),
(11, 101, 'The Aditya Birla Public School', '7', 'B', 'Ahmedabad', '2015-10-06', 0),
(12, 101, 'The Aditya Birla Public School', '8', 'A', 'Ahmedabad', '2016-10-06', 0),
(13, 103, 'Eklavya School', 'Nursery', 'A', 'Ahmedabad', '2006-06-15', 0),
(14, 101, 'The Aditya Birla Public School', '9', 'B', 'Ahmedabad', '2017-10-06', 0),
(15, 104, 'Calorx Olive International School', 'Nursery', 'B', 'Ahmedabad', '2006-06-15', 0),
(16, 105, 'Dayanand Arya Vedic Public School', 'Nursery', 'D', 'Gandhinagar', '2006-06-15', 0),
(17, 101, 'Calorx Olive International School', '10', 'D', 'Ahmedabad', '2018-10-06', 0),
(18, 106, 'Kendriya Vidyalaya INS', 'Nursery', 'E', 'Jamnagar', '2006-06-15', 0),
(19, 107, 'The Riverside School', '10', 'B', 'Ahmedabad', '2022-10-26', 0),
(20, 108, 'The Riverside School', '12', 'A', 'Ahmedabad', '2022-10-14', 0),
(21, 109, 'The Riverside School', '11', 'A', 'Ahmedabad', '2022-11-03', 0),
(22, 110, 'The Riverside School', '3', 'B', 'Ahmedabad', '2022-10-08', 0),
(23, 107, 'The Riverside School', 'Nursery', 'A', 'Ahmedabad', '2006-10-06', 0),
(24, 107, 'Eklavya School', 'LKG', 'C', 'Ahmedabad', '2007-10-06', 0),
(25, 108, 'The Riverside School', 'Nursery', 'E', 'Ahmedabad', '2022-10-19', 0),
(26, 109, 'Eklavya School', 'Nursery', 'B', 'Ahmedabad', '2006-05-14', 0),
(27, 110, 'The Riverside School', '12', 'A', 'ja', '2022-10-10', 0),
(28, 111, 'The Riverside School', 'Nursery', 'A', 'Ahmedabad', '2022-10-21', 0),
(29, 112, 'The Riverside School', 'Nursery', 'A', 'Ahmedabad', '2022-10-19', 0),
(30, 113, 'The Riverside School', 'Nursery', 'B', 'Ahmedabad', '2023-03-13', 0),
(31, 114, 'Calorx Olive International School', '1', 'C', 'Ahmedabad', '2022-10-25', 0),
(32, 115, 'Dayanand Arya Vedic Public School', 'Nursery', 'E', 'Gandhinagar', '2022-10-24', 0),
(33, 116, 'The Riverside School', 'Nursery', 'C', 'Ahmedabad', '2022-10-12', 0),
(34, 112, 'The Riverside School', 'LKG', 'C', 'Ahmedabad', '2023-03-07', 0),
(35, 117, 'The Riverside School', 'Nursery', 'A', 'Ahmedabad', '2023-03-13', 0),
(36, 118, 'The Riverside School', 'LKG', 'A', 'Ahmedabad', '2023-03-20', 0),
(37, 119, 'The Riverside School', 'LKG', 'A', 'Ahmedabad', '2023-03-20', 88),
(38, 119, 'The Riverside School', 'UKG', 'C', 'Ahmedabad', '2023-03-20', 99),
(39, 120, '', 'Bachelor of Computer Application', 'Sem-1', 'Jamnagar', '2023-04-03', 89);

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `id` int(11) NOT NULL,
  `heading` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `website` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`id`, `heading`, `description`, `website`) VALUES
(1, 'SSIP', 'The start-up culture in India is a developing phenomenon that is receiving widespread attention as a driver of growth and employability.', 'http://www.ssipgujarat.in/hackathon'),
(2, 'Gujarat Infrastructure Development Board', 'Gujarat believes that development of infrastructure is pivotal to industrial and economic growth.', 'https://www.gidb.org/'),
(3, 'Governance', 'The Gujarat University derives its power and privileges from the Gujarat University Act 1949, of the State Legislative.', 'https://www.gujaratuniversity.ac.in/'),
(4, 'TEB', 'TEB is committed to provide quality, value based, and demand and future driven human resource teaching-learning & training programs at certificate, diploma, advanced diploma and post diploma course.', 'https://teb.gujarat.gov.in/');

-- --------------------------------------------------------

--
-- Table structure for table `pstudr`
--

CREATE TABLE `pstudr` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `sc_name` varchar(250) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `stud_name` varchar(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `m_name` varchar(250) NOT NULL,
  `f_occupation` varchar(250) NOT NULL,
  `m_occupation` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `caste` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `blood` varchar(4) NOT NULL,
  `number` int(11) NOT NULL,
  `a_number` int(11) NOT NULL,
  `adhar` int(11) NOT NULL,
  `class` varchar(250) NOT NULL,
  `ds` varchar(250) NOT NULL,
  `ad_date` date DEFAULT NULL,
  `remarks` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `district` varchar(250) NOT NULL,
  `board` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `birth_certificate` varchar(250) NOT NULL,
  `birth_certificate_check` varchar(250) NOT NULL DEFAULT 'off',
  `f_adhar` varchar(250) NOT NULL,
  `f_adhar_check` varchar(250) NOT NULL DEFAULT 'off',
  `m_adhar` varchar(250) NOT NULL,
  `m_adhar_check` varchar(250) NOT NULL DEFAULT 'off',
  `remark` varchar(250) DEFAULT NULL,
  `marks` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pstudr`
--

INSERT INTO `pstudr` (`id`, `status`, `sc_name`, `c_name`, `stud_name`, `f_name`, `m_name`, `f_occupation`, `m_occupation`, `gender`, `caste`, `email`, `dob`, `blood`, `number`, `a_number`, `adhar`, `class`, `ds`, `ad_date`, `remarks`, `state`, `district`, `board`, `image`, `birth_certificate`, `birth_certificate_check`, `f_adhar`, `f_adhar_check`, `m_adhar`, `m_adhar_check`, `remark`, `marks`) VALUES
(1, 'approved', 'The Riverside School', '', 'Jhaveri Jeet Asheetbhai', 'Jhaveri Asheetbhai Mahendrabhai', 'Jhaveri Kavitaben Asheetbhai ', 'Business', 'House Wife', 'Male', 'ST', 'jhaverij16@gmail.com', '2003-10-06', 'o+', 2147483647, 2147483647, 1234567897, 'Nursery', 'A', '2006-10-06', 'Good Student', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/JHAVERI JEET-0443 (1).JPG', '../document/Python-Cheat-Sheet.pdf', '', '../document/WhatsApp Image 2022-10-06 at 6.03.56 PM (2).pdf', '', '../document/logo.pdf', '', NULL, 0),
(2, 'approved', 'Eklavya School', '', 'Patel Jay Ajaybhai', 'Ajay bhai Patel', 'Riya ben', 'Consultant', 'House Wife', 'Male', 'General', 'pj4107@gmail.com', '2003-03-26', 'A+', 2147483647, 2147483647, 2147483647, 'Nursery', 'A', '2006-06-15', 'Good', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/PATEL JAY-0494.JPG', '../document/tricolor-brush.jpg', '', '../document/WhatsApp Image 2022-10-06 at 6.03.56 PM (1).jpeg', '', '../document/WhatsApp Image 2022-10-06 at 6.03.56 PM.jpeg', '', NULL, 0),
(3, 'rejected', 'Eklavya School', '', 'Adreja Om Deepbhai', 'Deepbhai Adreja', 'Ramaben', 'Businessman', 'House Wife', 'Male', 'BC', 'omadreja@gmail.com', '2003-05-15', 'B+', 2147483647, 2147483647, 2147483647, 'Nursery', 'B', '2006-06-15', 'Bad', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/ADREJA OM NILESHBHAI-0535.JPG', '../document/file.png', '', '../document/', '', '../document/', '', 'sdfghj', 0),
(4, 'approved', 'Eklavya School', '', 'Rathod Jignesh Abhaibhai', 'Abhaibhai Rathod', 'Sheelaben', 'Farmar', 'House Wife', 'Male', 'OBC', 'jigneshrathod@gmail.com', '2003-04-15', 'AB+', 2147483647, 2147483647, 2147483647, 'Nursery', 'C', '2006-06-15', 'Very Good', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/RATHOD JIGNESH-0527.JPG', '../document/istockphoto-1079725292-612x612.jpg', '', '../document/20221005_191020.png', '', '../document/White and Red Modern Education Logo.png', '', NULL, 0),
(5, 'approved', 'Calorx Olive International School', '', 'Rachchh Bhavya Hareshbhai', 'Hareshbhai Rachchh', 'Mayaben Rachchh', 'Businessman', 'Teacher', 'Male', 'General', 'bhavyarachchh@gmail.com', '2003-10-02', 'A+', 2147483647, 2147483647, 2147483647, 'Nursery', 'B', '2006-06-15', 'Excellent', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/RACHCHH BHAVYA-0505.JPG', '../document/925.jpg', '', '../document/dark.png', '', '../document/light-removebg-preview.png', '', NULL, 0),
(6, 'approved', 'Dayanand Arya Vedic Public School', '', 'Dudhiya Darshit Manojbhai', 'Manojbhai Dudhaiya', 'Sobhnaben Dudhaiya', 'Teacher', 'House Wife', 'Male', 'OBC', 'dudhaiyadarshit@gmail.com', '2003-10-09', 'A+', 2147483647, 2147483647, 2147483647, 'Nursery', 'D', '2006-06-15', 'Good', 'Gujarat', 'Gandhinagar', 'CBSE', '../upload/DUDHAIYA DARSHIT-0440.JPG', '../document/Satyacopy1.jpg', '', '../document/tricolor-brush.jpeg', '', '../document/light.png', '', NULL, 0),
(7, 'approved', 'Kendriya Vidyalaya INS', '', 'Baghwani Yash Ashokbhai', 'Bagwani Ashokbhai', 'Bagwani Mansiben', 'Consultant', 'House Wife', 'Male', 'BC', 'pjay41907@gmail.com', '2003-10-10', 'A', 2147483647, 2147483647, 2147483647, 'Nursery', 'E', '2006-06-15', 'Good', 'Gujarat', 'Jamnagar', 'CBSE', '../upload/college-student-3500990__340.webp', '../document/istockphoto-1079725292-612x612.jpg', '', '../document/IMG_20210605_172815-removebg-preview.png', '', '../document/Satyacopy1.jpg', '', NULL, 0),
(8, 'rejected', 'Dayanand Arya Vedic Public School', '', 'shah ved nirmalbhai', 'shah nirmalbhai', 'shah mamtaben', 'employee', 'House Wife', 'Male', 'OBC', 'pjay41907@gmail.com', '2003-04-10', 'B', 2147483647, 2147483647, 2147483647, 'Nursery', 'D', '2006-06-15', 'Good', 'Gujarat', 'Gandhinagar', 'CBSE', '../upload/download.jpg', '../document/tricolor-brush.jpeg', '', '../document/Satyacopy1.jpg', '', '../document/download (1).jpg', '', NULL, 0),
(9, 'approved', 'The Riverside School', '', 'jay', 'jay', 'jay', 'efer', 'gerge', 'Male', 'General', 'pjay41907@gmail.com', '2022-09-29', 'o+', 564457, 56757, 56757, '10', 'B', '2022-10-26', '456546', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/hacking.jfif', '../document/204593.jpg', '', '../document/wp2707538.jpg', '', '../document/wp2601100.jpg', '', NULL, 0),
(10, 'approved', 'The Riverside School', '', 'jay', 'jay', 'jay', 'efer', 'gerge', 'Male', 'OBC', 'pjay41907@gmail.com', '2022-10-19', 'o+', 45435, 45456, 534535, '12', 'A', '2022-10-14', '6564', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/wp2601100.jpg', '../document/wp2707538.jpg', '', '../document/hacking.jfif', '', '../document/204593.jpg', '', NULL, 0),
(11, 'rejected', 'The Riverside School', '', 'jay', 'jay', 'jay', 'efer', 'gerge', 'Male', 'OBC', 'pjay41907@gmail.com', '2022-11-04', 'o+', 345435, 34535, 76868, '9', 'A', '2022-10-05', '5465', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/wp2601100.jpg', '../document/204593.jpg', '', '../document/hacking.jfif', '', '../document/wp2707538.jpg', '', NULL, 0),
(12, 'rejected', 'The Riverside School', '', 'jay', 'jay', 'jay', 'efer', 'gerge', 'Male', 'OBC', 'pjay41907@gmail.com', '2022-10-11', 'o+', 546, 54646, 456456, 'Nursery', 'A', '2022-10-13', '6456', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/204593.jpg', '../document/hacking.jfif', '', '../document/wp2601100.jpg', '', '../document/wp2707538.jpg', '', NULL, 0),
(13, 'approved', 'The Riverside School', '', 'jay', 'jay', 'jay', 'efer', 'gerge', 'Male', 'OBC', 'pjay41907@gmail.com', '2022-10-14', 'd', 546, 6456, 7687, '11', 'A', '2022-11-03', '546', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/204593.jpg', '../document/hacking.jfif', '', '../document/wp2601100.jpg', '', '../document/wp2707538.jpg', '', NULL, 0),
(14, 'rejected', 'The Riverside School', '', 'jay', 'jay', 'jay', 'efer', 'gerge', 'Male', 'OBC', 'pjay41907@gmail.com', '2022-10-08', 'o+', 545654, 53454354, 5465456, 'Nursery', 'A', '2022-11-03', '5354', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/204593.jpg', '../document/hacking.jfif', '', '../document/wp2601100.jpg', '', '../document/wp2707538.jpg', '', NULL, 0),
(15, 'rejected', 'The Riverside School', '', 'jay', 'jay', 'jay', 'efer', 'gerge', 'Male', 'OBC', 'pjay41907@gmail.com', '2022-10-08', 'o', 54646, 76575, 46465, 'Nursery', 'A', '2022-10-28', '4646', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/204593.jpg', '../document/hacking.jfif', '', '../document/wp2601100.jpg', '', '../document/wp2707538.jpg', '', NULL, 0),
(16, 'rejected', 'The Riverside School', '', 'jay', 'jay', 'jay', 'efer', '2343234', 'Male', 'OBC', 'pjay41907@gmail.com', '2022-10-08', 'g', 56546, 646, 456546, '9', 'A', '2022-10-08', '45656', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/hacking.jfif', '../document/204593.jpg', '', '../document/wp2707538.jpg', '', '../document/wp2601100.jpg', '', NULL, 0),
(17, 'approved', 'The Riverside School', '', 'jay', 'jay', 'jay', 'efer', 'gerge', 'Male', 'OBC', 'pjay41907@gmail.com', '2022-10-08', 'o', 5646, 56464, 5646, '3', 'B', '2022-10-08', '6546', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/204593.jpg', '../document/hacking.jfif', '', '../document/wp2601100.jpg', '', '../document/wp2707538.jpg', '', NULL, 0),
(18, 'rejected', 'The Riverside School', '', 'bhavya', 'bhavya', 'bhavya', '4566', '456546', 'Male', 'OBC', 'pjay41907@gmail.com', '2022-10-07', 'u', 65465, 56546, 45646, '5', 'A', '2022-10-08', '6546', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/204593.jpg', '../document/Oracle Viva.pdf', '', '../document/Oracle Viva.pdf', '', '../document/file.png', 'on', 'two fields  are not proper', 0),
(19, 'approved', 'The Riverside School', '', 'shah ved nirmalbhai', 'Shah Nirmalbhai Prakash', 'Shah Mira Nirmal Bhai', 'Business', 'House Wife', 'Male', 'General', 'jhaverij16@gmail.com', '2022-10-05', 'o+', 2147483647, 2147483647, 2147483647, 'Nursery', 'A', '2006-10-06', 'Good', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/ADREJA OM NILESHBHAI-0535.JPG', '../document/download (6).jpg', '', '../document/download (5).jpg', '', '../document/download (4).jpg', '', NULL, 0),
(20, 'approved', 'The Riverside School', '', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'Male', 'OBC', 'asdf@gmail.com', '2022-10-21', 'asdf', 745, 7453, 45, 'Nursery', 'E', '2022-10-19', 'adfsdgfg', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/download (5).jpg', '../document/download (5).jpg', '', '../document/download (6).jpg', '', '../document/download (3).jpg', '', NULL, 0),
(21, 'approved', 'Eklavya School', '', 'Patel Harit Anilbhai', 'Patel Anilbhai Hasekaik', 'Patel Miraben Anilbhai', 'Business', 'House Wife', 'Male', 'OBC', 'ritu14jpatel@gmail.com', '2022-10-27', 'B+', 1234567894, 1234567894, 2147483647, 'Nursery', 'B', '2006-05-14', 'Bad', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/DUDHAIYA DARSHIT-0440.JPG', '../document/2.png', '', '../document/unknown.png', '', '../document/WhatsApp Image 2022-10-08 at 1.01.11 PM.jpeg', '', NULL, 0),
(22, 'approved', 'The Riverside School', '', 'asdfgh', 'sdfgh', 'wertyui', 'erty', 'wertyu', 'Male', 'OBC', 'sdfg@gmail.com', '2022-10-26', 'A+', 123, 123, 123, 'Nursery', 'A', '2022-10-19', 'asdfg', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/unknown.png', '../document/WhatsApp Image 2022-10-08 at 1.01.11 PM.jpeg', '', '../document/WhatsApp Image 2022-10-08 at 1.00.36 PM.jpeg', '', '../document/WhatsApp Image 2022-10-08 at 1.00.52 PM.jpeg', '', NULL, 0),
(23, 'approved', 'The Riverside School', '', 'Bhavya Rachchh', 'Rachchh Bhavyabhai', 'Rachchh lkjsdlkj', 'Business', 'House Wife', 'Male', 'OBC', 'jhaverij16@gmail.com', '2022-10-18', 'A+', 1234567987, 1234567894, 2147483647, 'Nursery', 'C', '2022-10-12', 'Good Student', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/RACHCHH BHAVYA-0505.JPG', '../document/S.A.D..pdf', '', '../document/Oracle Viva.pdf', '', '../document/S.A.D..pdf', '', 'dcvbnm', 0),
(24, 'approved', 'The Riverside School', '', 'Patel Jay', 'Ajay bhai', 'Priya ben', 'gujarati', 'gujarati', 'Male', 'General', 'pjay41907@gmail.com', '2004-03-17', 'O+', 2147483647, 2147483647, 2147483647, '12', 'A', '2022-10-10', 'very very good and honest student', 'Gujarat', 'ja', 'Gujarat Board', '../upload/jay.jpg', '../document/port7.jpg', '', '../document/port5.jpg', '', '../document/port6.jpg', '', NULL, 0),
(25, 'remarked', 'The Riverside School', '', 'Raj Shah', 'Rajkumar Shah', 'Rajvi Shah', 'Business', 'House Wife', 'Male', 'OBC', 'jhaverij16@gmail.com', '2022-10-21', 'A+', 2147483647, 2147483647, 2147483647, 'Nursery', 'A', '2022-10-21', 'Good Student', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/JHAVERI JEET-0443 (1).JPG', '../document/Oracle Viva.pdf', '', '../document/', '', '../document/', '', 'CGH', 0),
(26, 'pending', 'The Riverside School', '', 'asdfgh', 'sdfgh', 'sdfgh', 'sdfghj', 'dfghj', 'Male', 'OBC', 'jhaverij16@gmail.com', '2022-11-04', 'A+', 123, 123, 123, 'Nursery', 'A', '2022-10-06', 'asdfg', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/Oracle Viva.pdf', '../document/Screenshot 2023-03-24 225451.png', '', '../document/Oracle Viva.pdf', 'on', '../document/S.A.D..pdf', 'on', 'submited birth certificate is not valid', 0),
(27, 'remarked', 'Eklavya School', '', 'Vivek Jhaveri', 'Vivekam Jhaveri', 'Vivikiki Jhaveri', 'Businessman', 'House Wife', 'Male', 'OBC', 'jhaverij16@gmail.com', '2022-10-23', 'A+', 123456797, 123456797, 1234579777, 'Nursery', 'B', '2022-10-23', 'Good Student', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/ADREJA OM NILESHBHAI-0535.JPG', '../document/file.png', 'on', '../document/Oracle Viva.pdf', '', '../document/2.png', '', 'HI', 0),
(28, 'approved', 'Calorx Olive International School', '', 'Rohit', 'ram', 'shah', 'Business', 'House Wife', 'Male', 'OBC', 'rohitshah@gamil.com', '2022-10-17', 'O-', 2147483647, 1236547895, 2147483647, '1', 'C', '2022-10-25', 'good', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/file.png', '../document/file.png', 'off', '../document/file.png', 'off', '../document/file.png', 'off', NULL, 0),
(29, 'approved', 'Dayanand Arya Vedic Public School', '', 'changu lal', 'lalbahadur', 'mohini', 'doctor', 'doctor', 'Male', 'General', 'changulal@gmail.com', '2022-10-04', 'B+', 1254789632, 1236458954, 2147483647, 'Nursery', 'E', '2022-10-24', 'bad', 'Gujarat', 'Gandhinagar', 'CBSE', '../upload/file.png', '../document/file.png', 'off', '../document/file.png', 'off', '../document/file.png', 'off', NULL, 0),
(30, 'remarked', 'Dayanand Arya Vedic Public School', '', 'mangu pandey', 'vasu', 'vasundhara', 'actor', 'dancer', 'Male', 'EWS', 'mangup@gamil.com', '2022-10-21', 'O+', 1236547895, 2147483647, 2147483647, '11', 'F', '2022-10-13', 'hehe very bad', 'Gujarat', 'Gandhinagar', 'CBSE', '../upload/file.png', '../document/file.png', '', '../document/file.png', '', '../document/file.png', 'on', 'abc', 0),
(31, 'remarked', 'The Riverside School', '', 'darshit', 'manojbhai`', 'madhubern', 'jmg', 'mjh', 'Male', 'OBC', 'darshitdudhaiya201@gmail.com', '2023-03-08', 'A+', 2147483647, 2147483647, 2147483647, 'Nursery', 'B', '2023-03-02', 'kjgjyrf', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/IMG-20230313-WA0007.jpg', '../document/', '', '../document/7-tynes-foldable-cultivator-500x500.jpg', '', '../document/SAVE_20230313_214747.jpg', 'on', 'plase', 0),
(32, 'approved', 'The Riverside School', '', 'srr', 'wr', 'wr', 'wr', 'wr', 'Male', 'OBC', 'darshitdudhaiya201@gmail.com', '2023-02-27', 'A+', 2147483647, 1313131313, 2147483647, 'Nursery', 'B', '2023-03-13', 'afeawef', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/IMG-20230313-WA0008.jpg', '../document/IMG-20230313-WA0008.jpg', 'off', '../document/IMG-20230313-WA0008.jpg', 'off', '../document/IMG-20230313-WA0008.jpg', 'off', NULL, 0),
(33, 'approved', 'The Riverside School', '', 'harsh', 'aaa', 'fgfg', 'gf', 'gf', 'Male', 'OBC', 'ajudiaharsh9@gmail.com', '2023-03-22', 'A+', 2147483647, 2147483647, 2147483647, 'Nursery', 'A', '2023-03-13', ',mnjdsh', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/IMG-20230301-WA0008.jpg', '../document/profile-photo-adorable-satisfied-young-260nw-2087507068.jpg', 'off', '../document/IMG-20230301-WA0009.jpg', 'off', '../document/download.jfif', 'off', NULL, 0),
(34, 'approved', 'The Riverside School', '', 'jalak', 'sureshbhai', 'radhaben', 'Brasspart', 'housewife ', 'Fe-male', 'General', 'jalakchavada@gmail.com', '2002-11-14', 'B+', 2147483647, 2147483647, 2147483647, 'LKG', 'A', '2023-03-20', 'Excellent Student', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/profile-photo-adorable-satisfied-young-260nw-2087507068.jpg', '../document/20221124_115631.jpg', 'off', '../document/20230228_221928 (1).jpg', 'off', '../document/20230228_221928 (1).jpg', 'off', NULL, 99),
(35, 'approved', 'The Riverside School', '', 'monali', 'ravindrabhai', 'meetaba', 'transport', 'housewife ', 'Fe-male', 'General', 'monalijadeja@gmail.com', '2004-11-24', 'B+', 822498892, 2147483647, 45548787, 'LKG', 'A', '2023-03-20', 'Good Student', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/thumbnail.webp', '../document/IMG-20230301-WA0008.jpg', 'off', '../document/IMG-20230301-WA0009.jpg', 'off', '../document/IMG-20230301-WA0015.jpg', 'off', NULL, 88),
(36, 'remarked', 'The Riverside School', '', 'jay', 'manojbhai', 'varshanben', 'brasspart', 'housewife ', 'Male', 'OBC', 'pteljay@gmail.com', '2023-03-22', 'A+', 2147483647, 2147483647, 2147483647, '1', 'A', '2023-03-24', 'good', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/Screenshot 2023-03-08 111726.png', '../document/Screenshot 2023-03-22 153629.png', '', '../document/Screenshot 2023-03-07 152127.png', '', '../document/Screenshot 2023-03-07 152127.png', '', 'abc', 88),
(37, 'approved', '', 'CZMG B.C.A college', 'darshitdudhaiya201@gmail.com', 'darshitdudhaiya201@gmail.com', 'darshitdudhaiya201@gmail.com', 'darshitdudhaiya201@gmail.com', 'darshitdudhaiya201@gmail.com', 'Male', 'OBC', 'darshitdudhaiya201@gmail.com', '2022-03-03', 'B+', 2147483647, 2147483647, 2147483647, 'Bachelor of Computer Application', 'Sem-1', '2023-04-03', 'gppd', 'Gujarat', 'Jamnagar', 'Saurashtra University', '../upload/Screenshot 2023-03-22 153629.png', '../document/Screenshot 2023-03-24 225451.png', 'off', '../document/Screenshot 2023-03-08 111726.png', 'off', '../document/Screenshot 2023-03-08 111726.png', 'off', NULL, 89);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `index_no` int(11) NOT NULL,
  `s_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `number` int(11) NOT NULL,
  `a_number` int(11) NOT NULL,
  `website` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `district` varchar(250) NOT NULL,
  `board` varchar(250) NOT NULL,
  `s_image` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `index_no`, `s_name`, `password`, `date`, `number`, `a_number`, `website`, `email`, `address`, `state`, `district`, `board`, `s_image`, `description`) VALUES
(1, 1001, 'The Riverside School', '1001', '2022-10-08', 2147483647, 21474706, 'https://schoolriverside.com/', 'inquiry@schoolriverside.com', '307, Behind C.S.D Depot, Off Airport Road, Cantonment, Ahmedabad, Gujarat – 380004, India', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/Screenshot 2023-03-24 225451.png', 'SINCE 2001, RIVERSIDE HAS DESIGNED, IMPLEMENTED AND SHARED A UNIQUE USER CENTERED CURRICULUM THAT IS PROVIDING SCHOOLS WITH AN ALTERNATIVE MODEL WHICH FOCUSES ON QUALITY OF LEARNING AND STUDENT WELL BEING'),
(2, 1000, 'Eklavya School', '1002', '2022-09-27', 2147483647, 2147483647, 'http://www.eklavya.org/', 'eklavya@eklavya.org', 'Eklavya Education Foundation, Core House, Near Sanathal, Off. C.G. Road, Ellisbridge, Ahmedabad – 380006', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/download (2).jpg', 'Libraries with books, encyclopaedia, dictionaries, picture books and comics Science Park, Science laboratories, Sports Facilities 12000 sq. metres indoor gymnasium for badminton, table-tennis and gymnastics Playgrounds spread across 8 acres Free play'),
(3, 1003, 'Calorx Olive International School', '1003', '2022-09-28', 2147483647, 2147483647, 'http://cois.edu.in/', 'info@cois.edu.in', 'Plot No. 126, 127, Ranchhodpura Bhadaj Road, Beside Ahmedabad Dental College, Ahmedabad – 380058', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/download (3).jpg', 'Calorx Olive International School (COIS) covers 10 acres and follows the Gurukul School learning mode. The campus consists of four separate buildings – the Admin block, Primary block, Secondary block & Jnr. College block, which are well designed & te'),
(4, 1004, 'Dayanand Arya Vedic Public School', '1004', '2022-09-28', 2147483647, 2147483647, 'https://www.davpsgandhidham.com/', 'davgan2009@gmail.com', 'Plot No.1, Ward 6/A, Behind, Rambaug Rd, Adipur, Gandhidham, Gujarat 370205', 'Gujarat', 'Gandhinagar', 'CBSE', '../upload/download (4).jpg', 'With a view to provide better quality education to the children of this area, Arya Samaj Gandhidham Charitable Trust started “Dayanand Arya Vedic Public School” CBSE Affiliated from 14th June 2009. At present the school runs from Nursery to XI. We ma'),
(5, 1005, 'The Aditya Birla Public School', '1005', '2022-10-04', 2147483647, 2147483647, 'https://www.adityabirlaschools.com/KESROL/', 'aditya@info.com', 'Village Kesrol, Eksal, Dahej Road, District Bharuch – 392130 Gujarat', 'Gujarat', 'Bharuch', 'CBSE', '../upload/download (5).jpg', 'The Aditya Birla Schools offer co-educational Primary Education, CBSE Board and State Board affiliated Higher Secondary Education in 11 states across India. What started out as an Employee Wellness exercise is now building surrounding communities in '),
(6, 1006, 'Kendriya Vidyalaya INS', '1006', '2022-10-05', 2147483647, 2147483647, 'www.kvinsvalsura.org', 'kvinsvalsura@yahoo.com', 'INS VALSURA , - JAMNAGAR, Jamnagar - Gujarat, India - 361150', 'Gujarat', 'Jamnagar', 'CBSE', '../upload/download (6).jpg', 'KendriyaVidyalaya INS Mandovi is located just 6 KM away from Panaji. The school resides inside the Indian Naval Academy, Defense Sector. The nearest bus stop is VEREM. The school opened on 22nd September 1982. The school is working only on one shift.'),
(7, 1007, 'Sunrise Global School', '1007', '1998-06-15', 2147483647, 953513543, 'www.sunriseglobal-school.com', 'info@sunriseglobal-school.com', 'Maheshwari Nagar, Kutch-Gujarat', 'Gujarat', 'Kutch', 'CBSE', '../upload/index.jpg', 'Sunrise Global School is an endeavor by Sunrise Education Trust led by Shri Manoj Methwani to prepare leaders of the 21 st century through its education.'),
(8, 1008, 'Air Force School', '1008', '1997-02-15', 2147483647, 948975963, 'http://www.airforceschooljamnagar.edu.in/', 'afschooljam@yahoo.com', 'Airforce Station 1, Govardhanpur', 'Gujarat', 'Jamnagar', 'CBSE', '../upload/air.jpg', 'At our school, education is looked upon as a holistic learning experience to help children develop those attributes and qualities which will make them self-reliant. Conscious effort is made to foster pride in and love for the country and its great he'),
(9, 1009, 'St. Kabir School', '1009', '1985-02-15', 2147483647, 2147483647, 'http://stkabir.com/', 'info@stkabir.com', 'Drive In Road, Near Goyal Intercity Surdhara, Circle', 'Gujarat', 'Ahmedabad', 'CBSE', '../upload/kabir.jpg', 'St. Kabir School was established in 1985 under the aegis of Janak Madan Charitable Educational  Trust. Since then, the school has grown with rapid strides and today under its educational canopy there are approximately 7000 student and 325 teachers. S'),
(10, 1010, 'DPS', '1010', '1997-08-19', 2147483647, 2147483647, 'https://www.dpssurat.net/', 'info@dpssurat.net', 'Dumas Road Near Airport, Gaviyer', 'Gujarat', 'Surat', 'CBSE', '../upload/dps.jpg', 'The green and sprawling campus of DPS is spread across 25 acres. The school hosts facilities like digital teaching-learning methods, first-aid clinic, well-equipped laboratories, activity rooms, Scout & guide etc. It is home to 930 students and 46 te'),
(11, 1231, 'darshitdudhaiya201@gmail.com', 'darshitdudhaiya201@gmail.com', '2023-03-31', 2147483647, 35135435, 'lkmdlknm/.com', 'darshitdudhaiya201@gmail.com', 'ukgjhfgyjfjy', 'Select One', 'Ahmedabad', 'CBSE', '../upload/Screenshot 2023-03-22 153629.png', 'sfvxfvfvdfv');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `sc_name` varchar(250) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `slms_no` int(11) NOT NULL,
  `slms_password` varchar(250) NOT NULL,
  `stud_name` varchar(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `m_name` varchar(250) NOT NULL,
  `f_occupation` varchar(250) NOT NULL,
  `m_occupation` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `caste` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `blood` varchar(4) NOT NULL,
  `number` int(11) NOT NULL,
  `a_number` int(11) NOT NULL,
  `adhar` int(11) NOT NULL,
  `class` varchar(250) NOT NULL,
  `ds` varchar(250) NOT NULL,
  `ad_date` date DEFAULT NULL,
  `remarks` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `district` varchar(250) NOT NULL,
  `board` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `birth_certificate` mediumtext NOT NULL,
  `f_adhar` mediumtext NOT NULL,
  `m_adhar` mediumtext NOT NULL,
  `marks` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `sc_name`, `c_name`, `slms_no`, `slms_password`, `stud_name`, `f_name`, `m_name`, `f_occupation`, `m_occupation`, `gender`, `caste`, `email`, `dob`, `blood`, `number`, `a_number`, `adhar`, `class`, `ds`, `ad_date`, `remarks`, `state`, `district`, `board`, `image`, `birth_certificate`, `f_adhar`, `m_adhar`, `marks`) VALUES
(2, 'Calorx Olive International School', '', 101, '101', 'Jhaveri Jeet Asheetbhai', 'Jhaveri Asheetbhai Mahendrabhai', 'Jhaveri Kavitaben Asheetbhai ', 'Business', 'House Wife', 'Male', 'ST', 'jhaverij16@gmail.com', '2009-10-06', 'o+', 2147483647, 2147483647, 1234567897, '10', 'D', '2017-10-06', 'Good Student', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/JHAVERI JEET-0443 (1).JPG', '../document/Python-Cheat-Sheet.pdf', '../document/WhatsApp Image 2022-10-06 at 6.03.56 PM (2).pdf', '../document/logo.pdf', 0),
(3, 'Eklavya School', '', 102, '102', 'Rathod Jignesh Abhaibhai', 'Abhaibhai Rathod', 'Sheelaben', 'Farmar', 'House Wife', 'Male', 'OBC', 'jigneshrathod@gmail.com', '2003-04-15', 'AB+', 2147483647, 2147483647, 2147483647, 'Nursery', 'C', '2006-06-15', 'Very Good', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/RATHOD JIGNESH-0527.JPG', '../document/istockphoto-1079725292-612x612.jpg', '../document/20221005_191020.png', '../document/White and Red Modern Education Logo.png', 0),
(4, 'Eklavya School', '', 103, '103', 'Patel Jay Ajaybhai', 'Ajay bhai Patel', 'Riya ben', 'Consultant', 'House Wife', 'Male', 'General', 'pj4107@gmail.com', '2003-03-26', 'A+', 2147483647, 2147483647, 2147483647, 'Nursery', 'A', '2006-06-15', 'Good', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/PATEL JAY-0494.JPG', '../document/tricolor-brush.jpg', '../document/WhatsApp Image 2022-10-06 at 6.03.56 PM (1).jpeg', '../document/WhatsApp Image 2022-10-06 at 6.03.56 PM.jpeg', 0),
(5, 'Calorx Olive International School', '', 104, '104', 'Rachchh Bhavya Hareshbhai', 'Hareshbhai Rachchh', 'Mayaben Rachchh', 'Businessman', 'Teacher', 'Male', 'General', 'bhavyarachchh@gmail.com', '2003-10-02', 'A+', 2147483647, 2147483647, 2147483647, 'Nursery', 'B', '2006-06-15', 'Excellent', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/RACHCHH BHAVYA-0505.JPG', '../document/925.jpg', '../document/dark.png', '../document/light-removebg-preview.png', 0),
(6, 'Dayanand Arya Vedic Public School', '', 105, '105', 'Dudhiya Darshit Manojbhai', 'Manojbhai Dudhaiya', 'Sobhnaben Dudhaiya', 'Teacher', 'House Wife', 'Male', 'OBC', 'dudhaiyadarshit@gmail.com', '2003-10-09', 'A+', 2147483647, 2147483647, 2147483647, 'Nursery', 'D', '2006-06-15', 'Good', 'Gujarat', 'Gandhinagar', 'CBSE', '../upload/DUDHAIYA DARSHIT-0440.JPG', '../document/Satyacopy1.jpg', '../document/tricolor-brush.jpeg', '../document/light.png', 0),
(7, 'Kendriya Vidyalaya INS', '', 106, '106', 'Baghwani Yash Ashokbhai', 'Bagwani Ashokbhai', 'Bagwani Mansiben', 'Consultant', 'House Wife', 'Male', 'BC', 'pjay41907@gmail.com', '2003-10-10', 'A', 2147483647, 2147483647, 2147483647, 'Nursery', 'E', '2006-06-15', 'Good', 'Gujarat', 'Jamnagar', 'CBSE', '../upload/college-student-3500990__340.webp', '../document/istockphoto-1079725292-612x612.jpg', '../document/IMG_20210605_172815-removebg-preview.png', '../document/Satyacopy1.jpg', 0),
(12, 'Eklavya School', '', 107, '107', 'shah ved nirmalbhai', 'Shah Nirmalbhai Prakash', 'Shah Mira Nirmal Bhai', 'Business', 'House Wife', 'Male', 'General', 'jhaverij16@gmail.com', '2022-10-05', 'o+', 2147483647, 2147483647, 2147483647, 'LKG', 'C', '2007-10-06', 'Good', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/ADREJA OM NILESHBHAI-0535.JPG', '../document/download (6).jpg', '../document/download (5).jpg', '../document/download (4).jpg', 0),
(14, 'Eklavya School', '', 109, '109', 'Patel Harit Anilbhai', 'Patel Anilbhai Hasekaik', 'Patel Miraben Anilbhai', 'Business', 'House Wife', 'Male', 'OBC', 'ritu14jpatel@gmail.com', '2022-10-27', 'B+', 1234567894, 1234567894, 2147483647, 'Nursery', 'B', '2006-05-14', 'Bad', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/DUDHAIYA DARSHIT-0440.JPG', '../document/2.png', '../document/unknown.png', '../document/WhatsApp Image 2022-10-08 at 1.01.11 PM.jpeg', 0),
(15, 'The Riverside School', '', 110, '110', 'Patel Jay', 'Ajay bhai', 'Priya ben', 'gujarati', 'gujarati', 'Male', 'General', 'pjay41907@gmail.com', '2004-03-17', 'O+', 2147483647, 2147483647, 2147483647, '12', 'A', '2022-10-10', 'very very good and honest student', 'Gujarat', 'ja', 'Gujarat Board', '../upload/jay.jpg', '../document/port7.jpg', '../document/port5.jpg', '../document/port6.jpg', 0),
(17, 'The Riverside School', '', 112, '112', 'harsh', 'sdfgh', 'wertyui', 'erty', 'wertyu', 'Male', 'OBC', 'sdfg@gmail.com', '2022-10-26', 'A+', 123, 123, 123, 'LKG', 'C', '2023-03-07', 'asdfg', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/20230228_221953.jpg', '../document/WhatsApp Image 2022-10-08 at 1.01.11 PM.jpeg', '../document/WhatsApp Image 2022-10-08 at 1.00.36 PM.jpeg', '../document/WhatsApp Image 2022-10-08 at 1.00.52 PM.jpeg', 0),
(18, 'The Riverside School', '', 113, '113', 'srr', 'wr', 'wr', 'wr', 'wr', 'Male', 'OBC', 'darshitdudhaiya201@gmail.com', '2023-02-27', 'A+', 2147483647, 1313131313, 2147483647, 'Nursery', 'B', '2023-03-13', 'afeawef', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/IMG-20230313-WA0008.jpg', '../document/IMG-20230313-WA0008.jpg', '../document/IMG-20230313-WA0008.jpg', '../document/IMG-20230313-WA0008.jpg', 0),
(19, 'Calorx Olive International School', '', 114, '114', 'Rohit', 'ram', 'shah', 'Business', 'House Wife', 'Male', 'OBC', 'rohitshah@gamil.com', '2022-10-17', 'O-', 2147483647, 1236547895, 2147483647, '1', 'C', '2022-10-25', 'good', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/file.png', '../document/file.png', '../document/file.png', '../document/file.png', 0),
(20, 'Dayanand Arya Vedic Public School', '', 115, '115', 'changu lal', 'lalbahadur', 'mohini', 'doctor', 'doctor', 'Male', 'General', 'changulal@gmail.com', '2022-10-04', 'B+', 1254789632, 1236458954, 2147483647, 'Nursery', 'E', '2022-10-24', 'bad', 'Gujarat', 'Gandhinagar', 'CBSE', '../upload/file.png', '../document/file.png', '../document/file.png', '../document/file.png', 0),
(21, 'The Riverside School', '', 116, '116', 'Bhavya Rachchh', 'Rachchh Bhavyabhai', 'Rachchh lkjsdlkj', 'Business', 'House Wife', 'Male', 'OBC', 'jhaverij16@gmail.com', '2022-10-18', 'A+', 1234567987, 1234567894, 2147483647, 'Nursery', 'C', '2022-10-12', 'Good Student', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/RACHCHH BHAVYA-0505.JPG', '../document/S.A.D..pdf', '../document/Oracle Viva.pdf', '../document/S.A.D..pdf', 0),
(22, 'The Riverside School', '', 117, '117', 'harsh', 'aaa', 'fgfg', 'gf', 'gf', 'Male', 'OBC', 'ajudiaharsh9@gmail.com', '2023-03-22', 'A+', 2147483647, 2147483647, 2147483647, 'Nursery', 'A', '2023-03-13', ',mnjdsh', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/IMG-20230301-WA0008.jpg', '../document/profile-photo-adorable-satisfied-young-260nw-2087507068.jpg', '../document/IMG-20230301-WA0009.jpg', '../document/download.jfif', 0),
(23, 'The Riverside School', '', 118, '118', 'jalak', 'sureshbhai', 'radhaben', 'Brasspart', 'housewife ', 'Fe-male', 'General', 'jalakchavada@gmail.com', '2002-11-14', 'B+', 2147483647, 2147483647, 2147483647, 'LKG', 'A', '2023-03-20', 'Excellent Student', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/profile-photo-adorable-satisfied-young-260nw-2087507068.jpg', '../document/20221124_115631.jpg', '../document/20230228_221928 (1).jpg', '../document/20230228_221928 (1).jpg', 0),
(24, 'The Riverside School', '', 119, '119', 'monali', 'ravindrabhai', 'meetaba', 'transport', 'housewife ', 'Fe-male', 'General', 'monalijadeja@gmail.com', '2004-11-24', 'A+', 822498892, 2147483647, 45548787, 'UKG', 'C', '2023-03-20', 'Good Student', 'Gujarat', 'Ahmedabad', 'ICSE', '../upload/675f409cfcbea9281f6649ca096caf25--corporate-photography-headshot-photography.jpg', '../document/IMG-20230301-WA0008.jpg', '../document/IMG-20230301-WA0009.jpg', '../document/IMG-20230301-WA0015.jpg', 99),
(25, '', 'CZMG B.C.A college', 120, '120', 'darshitdudhaiya201@gmail.com', 'darshitdudhaiya201@gmail.com', 'darshitdudhaiya201@gmail.com', 'darshitdudhaiya201@gmail.com', 'darshitdudhaiya201@gmail.com', 'Male', 'OBC', 'darshitdudhaiya201@gmail.com', '2022-03-03', 'B+', 2147483647, 2147483647, 2147483647, 'Bachelor of Computer Application', 'Sem-1', '2023-04-03', 'gppd', 'Gujarat', 'Jamnagar', 'Saurashtra University', '../upload/Screenshot 2023-03-22 153629.png', '../document/Screenshot 2023-03-24 225451.png', '../document/Screenshot 2023-03-08 111726.png', '../document/Screenshot 2023-03-08 111726.png', 89);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Government of Gujarat', '123'),
(2, 'SHRI L.G. HARIA SCHOOL', '1234'),
(3, 'Shree Satya Sai Vidyalaya', 'sai'),
(4, 'Smt C.Z.M. Gosrani BCA College', 'czmg'),
(5, 'Christ College', 'christ'),
(6, 'Education Department of Gujarat', '123'),
(7, 'CZMG B.C.A college', '1011'),
(8, 'The Riverside School', '1001'),
(9, 'Eklavya School', '1002'),
(10, 'Calorx Olive International School', '1003'),
(11, 'Dayanand Arya Vedic Public School', '1004'),
(12, 'The Aditya Birla Public School', '1005'),
(13, 'Kendriya Vidyalaya INS', '1006'),
(14, 'PD PATEL INSTITUTE OF SCIENCES ', '1022'),
(15, 'NATIONAL INSTITUTE OF FASHION TECHNOLOGY ', '1033'),
(16, 'Marwadi College', '1044'),
(17, 'Sunrise Global School', 'sunrise@global'),
(18, 'Dr subhash technical  college', '1055'),
(19, 'Air Force School', 'air@force'),
(20, 'St. Kabir School', 'kabir@school'),
(21, 'DPS', 'dps@school'),
(22, '102', '102'),
(23, '103', '103'),
(24, '104', '104'),
(25, '105', '105'),
(26, '106', '106'),
(27, '107', '107'),
(28, '108', '108'),
(29, '109', '109'),
(30, '110', '110'),
(31, '107', '107'),
(32, '108', '108'),
(33, '109', '109'),
(34, '110', '110'),
(35, '111', '111'),
(36, '112', '112'),
(37, '113', '113'),
(38, '114', '114'),
(39, '115', '115'),
(40, '116', '116'),
(41, '117', '117'),
(42, '118', '118'),
(43, '119', '119'),
(44, 'darshitdudhaiya201@gmail.com', 'darshitdudhaiya201@gmail.com'),
(45, '120', '120');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_req`
--
ALTER TABLE `emp_req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `life_cycle`
--
ALTER TABLE `life_cycle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pstudr`
--
ALTER TABLE `pstudr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emp_req`
--
ALTER TABLE `emp_req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `life_cycle`
--
ALTER TABLE `life_cycle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pstudr`
--
ALTER TABLE `pstudr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
