-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 08:43 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `idbooking` varchar(20) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idmovie` int(11) NOT NULL,
  `date` date NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`idbooking`, `iduser`, `idmovie`, `date`, `qty`, `price`, `totalprice`) VALUES
('111', 19, 108, '2021-01-06', 2, 50000, 100000),
('2133', 19, 121, '2021-01-06', 3, 55000, 165000),
('2160', 20, 112, '2021-01-08', 2, 50000, 100000),
('2287', 20, 120, '2021-01-04', 5, 43000, 215000),
('3288', 21, 119, '2021-01-04', 4, 55000, 220000),
('3698', 23, 107, '2021-01-01', 1, 60000, 60000),
('3743', 21, 126, '2021-01-01', 4, 35000, 140000),
('4094', 18, 110, '2021-01-03', 2, 45000, 90000),
('4151', 27, 117, '2020-12-30', 3, 35000, 105000),
('4518', 23, 115, '2021-01-05', 2, 50000, 100000),
('4604', 18, 126, '2020-12-30', 2, 35000, 70000),
('5368', 24, 125, '2021-01-01', 1, 30000, 30000),
('5739', 18, 122, '2021-01-05', 2, 30000, 60000),
('6675', 19, 113, '2021-01-01', 5, 60000, 300000),
('7698', 18, 114, '2020-12-28', 1, 60000, 60000),
('8062', 24, 124, '2021-01-04', 3, 58000, 174000),
('8761', 18, 113, '2021-01-05', 3, 60000, 180000),
('9085', 25, 124, '2021-01-02', 2, 58000, 116000),
('9615', 26, 112, '2021-01-05', 4, 50000, 200000),
('9676', 27, 121, '2021-01-03', 2, 55000, 110000);

-- --------------------------------------------------------

--
-- Table structure for table `confirmed`
--

CREATE TABLE `confirmed` (
  `idconfirm` int(20) NOT NULL,
  `idbooking` varchar(20) NOT NULL,
  `idmovie` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `date_confirmed` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirmed`
--

INSERT INTO `confirmed` (`idconfirm`, `idbooking`, `idmovie`, `iduser`, `totalprice`, `date_confirmed`) VALUES
(997, '5864', 111, 18, 250000, '2020-12-27'),
(998, '4323', 119, 18, 55000, '2020-12-27'),
(999, '1942', 112, 19, 150000, '2020-12-27'),
(1000, '2604', 122, 21, 30000, '2020-12-27'),
(1001, '3616', 123, 22, 128000, '2020-12-27'),
(1002, '347', 120, 21, 172000, '2020-12-27'),
(1003, '3652', 112, 22, 100000, '2020-12-27'),
(1004, '3719', 116, 25, 100000, '2020-12-27'),
(1005, '4724', 114, 18, 240000, '2020-12-27'),
(1006, '6273', 125, 26, 60000, '2020-12-27'),
(1007, '5565', 109, 18, 135000, '2020-12-27'),
(1008, '5299', 116, 18, 50000, '2020-12-27'),
(1009, '7303', 108, 23, 100000, '2020-12-27'),
(1010, '8507', 110, 24, 135000, '2020-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `idmovie` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `cover` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`idmovie`, `title`, `year`, `genre`, `price`, `cover`) VALUES
(107, '#Alive', 2020, 'Drama/Horror', 60000, '21122020142219alive.jpg'),
(108, 'Along with The Gods 2', 2019, 'Fantasy', 50000, '635-AWTG.jpg'),
(109, 'Enola Holmes', 2020, 'Fantasy', 45000, '929-Enola_Holmes_poster.jpeg'),
(110, 'EXIT', 2020, 'Action', 45000, '568-exit.jpg'),
(111, 'Extreme Job', 2019, 'Action', 50000, '835-Extreme_Job_poster.jpg'),
(112, 'Holidate', 2020, 'Romance', 50000, '521-holidate.jpg'),
(113, 'Sightless', 2020, 'Drama/Horror', 60000, '191-Sightless_film_poster.png'),
(114, 'Raya', 2020, 'Fantasy', 60000, '906-raya.jpg'),
(115, 'The Invisible Man', 2020, 'Drama/Horror', 50000, '682-The_Invisible_Man_(2020_film)_-_release_poster.jpg'),
(116, 'Train To Busan 2(Peninsula)', 2020, 'Sci-fi/Action', 50000, '199-Peninsula_poster.jpg'),
(117, 'Little Woman', 2019, 'Romance', 35000, '283-little woman.jpg'),
(118, 'Rumah Kentang', 2020, 'Drama/Horor', 40000, '509-rumah kentang.jpg'),
(119, 'Secret Garden', 2020, 'Fantasy', 55000, '131-secret garden.jpg'),
(120, 'Lavender', 2016, 'Drama/Thriller', 43000, '467-lavender.jpg'),
(121, 'Gretel & Hansel', 2020, 'Fantasy/Horor', 55000, '626-gretel & hansel.jpg'),
(122, 'School Of Life', 2019, 'Drama/Comedy', 30000, '782-school of life.jpg'),
(123, 'Summer Camp', 2018, 'Horor', 32000, '440-summer camp.jpg'),
(124, 'Parasite', 2020, 'Drama/Thriller', 58000, '859-parasite.jpg'),
(125, 'Miss Minoes', 2019, 'Comedy', 30000, '271-minoes.jpg'),
(126, 'Marriage Story', 2019, 'Drama', 35000, '890-marriage story.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `pass`, `username`, `phone`, `email`, `level_user`) VALUES
(1, '123', 'reta', '08544999567', 'reta@gmail.com', 1),
(2, '123', 'admin', '087765543213', 'admin@gmail.com', 1),
(3, '293', 'hanum', '08656917638', 'haisyaah@gmail.com', 1),
(18, '234', 'arvino', '086546896448', 'vino@gmail.com', 2),
(19, '2354', 'rendi', '081223226492', 'rendii@gmail.com', 2),
(20, '0123', 'ali', '089776554513', 'ali@ymail.com', 2),
(21, '0401', 'dio', '08112537290', 'dio@tech.com', 2),
(22, '1289', 'desty', '087656418330', 'desty@gmail.com', 2),
(23, '5609', 'rizky', '089876500431', 'rizky@sunshine.com', 2),
(24, '2512', 'rima', '081233420809', 'rimadhani@yahoo.com', 2),
(25, '1999', 'aisya', '085556451230', 'aisyachal@gmail.com', 2),
(26, '9990', 'putri', '098765789077', 'putri@yahoo.com', 2),
(27, '8769', 'ivan', '098765654321', 'ivan@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`idbooking`),
  ADD KEY `idmovie` (`idmovie`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `confirmed`
--
ALTER TABLE `confirmed`
  ADD PRIMARY KEY (`idconfirm`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`idmovie`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirmed`
--
ALTER TABLE `confirmed`
  MODIFY `idconfirm` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`idmovie`) REFERENCES `movie` (`idmovie`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
