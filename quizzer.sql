-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2018 at 10:44 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `qno` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `qno`, `is_correct`, `text`) VALUES
(1, 1, 1, 'Singleton class'),
(2, 1, 0, 'Virtual class'),
(3, 1, 0, 'Abstract class'),
(4, 1, 0, 'Friend class'),
(5, 2, 1, 'Friend constructor'),
(6, 2, 0, 'Copy constructor\r\n'),
(7, 2, 0, 'Default constructor\r\n'),
(8, 2, 0, 'Parameterized constructor'),
(9, 3, 1, 'Derived class pointer cannot point to base class.'),
(10, 3, 0, 'Base class pointer cannot point to derived class.'),
(11, 3, 0, 'Pointer to derived class cannot be created.'),
(12, 3, 0, 'Pointer to base class cannot be created.'),
(13, 4, 1, 'Friend function'),
(14, 4, 0, 'Static function\r\n'),
(15, 4, 0, 'Const function'),
(16, 4, 0, 'Virtual function'),
(17, 5, 1, 'Dynamic binding'),
(18, 5, 0, 'Data hiding\r\n'),
(19, 5, 0, 'Dynamic Typing\r\n'),
(20, 5, 0, 'Dynamic loading'),
(21, 6, 0, 'Member Variable'),
(22, 6, 1, 'Member function'),
(23, 6, 0, 'Class Function');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qno` int(11) NOT NULL,
  `qsn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qno`, `qsn`) VALUES
(1, 'Which of the following type of class allows only one object of it to be created?'),
(2, 'Which of the following is not a type of constructor?'),
(3, 'Which of the following statements is correct?'),
(4, 'Which of the following is not the member of class?'),
(5, 'Which of the following concepts means determining at runtime what method to invoke?'),
(6, 'Which of the following term is used for a function defined inside a class?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
