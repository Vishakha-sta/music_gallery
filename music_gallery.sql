-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 11:14 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `albumid` int(8) NOT NULL,
  `albumname` varchar(255) NOT NULL,
  `album_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`albumid`, `albumname`, `album_img`) VALUES
(1, 'Chill', 'image/album_img/chill.jpeg'),
(2, 'Dark', 'image/album_img/dark.jpg'),
(3, 'Free', 'image/album_img/free.jpg'),
(4, 'Funcky', 'image/album_img/funcky.png');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `artistid` int(8) NOT NULL,
  `artistname` varchar(255) NOT NULL,
  `artist_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`artistid`, `artistname`, `artist_img`) VALUES
(1, 'Jubin Nautiyal', 'image/artist_img/jubin.jpg'),
(2, 'Justin Drew Bieber', 'image/artist_img/justin.jpg'),
(3, 'Neha Kakkar', 'image/artist_img/neha.jpg'),
(4, 'Selena Marie Gomez', 'image/artist_img/selena.jpg'),
(5, 'Taylor Alison Swift', 'image/artist_img/tylor.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `songid` int(8) NOT NULL,
  `songname` varchar(255) NOT NULL,
  `albumid` int(8) NOT NULL,
  `artistid` int(8) NOT NULL,
  `artistname` varchar(255) NOT NULL,
  `songimg` varchar(255) NOT NULL,
  `songpath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`songid`, `songname`, `albumid`, `artistid`, `artistname`, `songimg`, `songpath`) VALUES
(1, 'Senorita', 1, 1, 'Shawn Mendes', 'image/song_img/senorita.jpg', 'music/Senorita.mp3'),
(2, 'Zara Zara', 2, 2, 'Tulsi Kumar', 'image/song_img/zara zara.jpg', 'music/Zara Zara.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(8) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `fname`, `lname`, `email`, `password`, `photo`) VALUES
(1, 'vishakha', 'Vishakha', 'Gandhii', 'vishakha@gandhi.com', 'vishakha', 'image/profile_photo/profile-5-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`albumid`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`artistid`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`songid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `albumid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `artistid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `songid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
