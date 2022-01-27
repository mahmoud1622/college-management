-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 09:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `role`) VALUES
(1, 'mahmoud', '123', 0),
(5, 'hassen', '123', 1),
(6, 'karem', '123', 2),
(7, 'ahmed', '1622', 2),
(8, 'abdo', '119000720', 1),
(9, 'ali', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `coursedr`
--

CREATE TABLE `coursedr` (
  `id` int(11) NOT NULL,
  `doctorID` int(11) DEFAULT NULL,
  `CourseID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursedr`
--

INSERT INTO `coursedr` (`id`, `doctorID`, `CourseID`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 2, 4),
(5, 3, 5),
(6, 3, 6),
(7, 4, 2),
(8, 4, 5),
(9, 5, 1),
(10, 5, 4),
(11, 6, 7),
(12, 2, 8),
(13, 3, 9),
(15, 9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`) VALUES
(1, 'Web Full Stack'),
(2, 'English'),
(3, 'Database'),
(4, 'Math'),
(5, 'JavaScript'),
(6, 'PHP'),
(7, 'SQL'),
(8, 'C++'),
(9, 'c'),
(12, 'java 1');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`) VALUES
(1, 'Hassen'),
(2, 'Mostafa'),
(3, 'Mahmoud'),
(4, 'ali'),
(5, 'Bassem'),
(6, 'karem'),
(7, 'mathet'),
(9, 'ali2'),
(14, 'Mahmoud adel');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `year` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `year`) VALUES
(1, 'Level One'),
(2, 'Level Two'),
(3, 'Level Three'),
(4, 'Level Four');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `question`, `answer`) VALUES
(1, 'please answer it immediately 01', 'We are at service 01'),
(2, 'please answer it immediately 02', 'We are at service 02'),
(4, 'please answer it immediately 03', 'We are at service 03'),
(5, 'please answer it immediately 04', 'We are at service 04'),
(6, 'please answer it immediately 05', 'We are at service 05'),
(7, 'please answer it immediately 06', 'We are at service 06'),
(8, 'please answer it immediately 07', 'We are at service 07'),
(9, 'please answer it immediately010', 'We are at service 22'),
(13, 'please answer it immediately 2020', 'We are at service 2020'),
(14, 'please answer it immediately2021', 'We are at service 2021'),
(15, 'please answer it immediately', 'We are at service 22'),
(16, 'please answer it immediately', 'We are at service'),
(17, 'please answer it immediately', 'We are at service 22'),
(18, 'please answer it immediately', 'We are at service'),
(20, 'please answer it immediately 2020', ''),
(21, 'please answer it immediately', 'We are at service 4'),
(23, 'please answer it immediately', '');

-- --------------------------------------------------------

--
-- Table structure for table `registcourse`
--

CREATE TABLE `registcourse` (
  `id` int(11) NOT NULL,
  `StudentID` int(11) DEFAULT NULL,
  `CourseID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registcourse`
--

INSERT INTO `registcourse` (`id`, `StudentID`, `CourseID`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 2),
(7, 1, 4),
(8, 2, 5),
(9, 3, 1),
(10, 3, 2),
(11, 3, 4),
(12, 3, 5),
(13, 3, 6),
(14, 4, 1),
(15, 4, 4),
(16, 4, 6),
(17, 5, 2),
(18, 6, 2),
(19, 6, 3),
(20, 7, 1),
(21, 7, 3),
(22, 7, 6),
(23, 8, 1),
(24, 8, 2),
(25, 8, 4),
(26, 8, 6),
(27, 9, 7),
(28, 10, 8),
(29, 10, 5),
(31, 14, 12);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `img` varchar(250) NOT NULL,
  `levelID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `img`, `levelID`) VALUES
(1, 'mahmoud', 'messi.jpeg', 1),
(2, 'Adel', 'img22.jpg', 1),
(3, 'karem', 'img.jpg', 2),
(4, 'Yasser', 'salah.jpeg', 3),
(5, 'Tarek', 'img17.jpg', 3),
(6, 'Aya', 'img12.jpeg', 4),
(7, 'Eslam', 'img9.jpeg', 3),
(8, 'Zidan', 'img16.jpeg', 2),
(9, 'mokhtar', 'f4.jpg', 2),
(10, 'fathy', 'img23.png', 3),
(11, 'Ali', 'iconperson.png', 3),
(13, 'mahmoud2020', 'mahmoud.jpeg', 2),
(14, 'Mahmoud adel', 'img2.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `coursedr`
--
ALTER TABLE `coursedr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctorID` (`doctorID`),
  ADD KEY `CourseID` (`CourseID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registcourse`
--
ALTER TABLE `registcourse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `StudentID` (`StudentID`),
  ADD KEY `CourseID` (`CourseID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `levelID` (`levelID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `coursedr`
--
ALTER TABLE `coursedr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `registcourse`
--
ALTER TABLE `registcourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coursedr`
--
ALTER TABLE `coursedr`
  ADD CONSTRAINT `coursedr_ibfk_1` FOREIGN KEY (`doctorID`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `coursedr_ibfk_2` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`id`);

--
-- Constraints for table `registcourse`
--
ALTER TABLE `registcourse`
  ADD CONSTRAINT `registcourse_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `registcourse_ibfk_2` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`levelID`) REFERENCES `levels` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
