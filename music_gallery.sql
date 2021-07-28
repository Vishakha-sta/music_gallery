-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 07:56 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(8) NOT NULL,
  `adminname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Admin06', 'Admin', 'Team', 'admin_team@gmail.com', 'admin06');

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
(1, 'Bollywood Cover', 'image/album_img/bollywood.jpg'),
(2, 'Chill', 'image/album_img/chill.jpeg'),
(3, 'Dark', 'image/album_img/dark.jpg'),
(4, 'Free', 'image/album_img/free.jpg'),
(5, 'Funcky', 'image/album_img/funcky.png');

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
(1, 'Taylor Swift', 'image/artist_img/taylor.jpg'),
(2, 'Selena Marie Gomez', 'image/artist_img/selena.jpg'),
(3, 'Neha Kakkar', 'image/artist_img/neha.jpg'),
(4, 'Dhvani Bhanushali', 'image/artist_img/dwani.jpg'),
(5, 'Shreya Ghoshal', 'image/artist_img/shreya.jpg'),
(6, 'Justin Bieber', 'image/artist_img/justin.jpg'),
(7, 'Darshan Raval', 'image/artist_img/darshan.jpg'),
(8, 'Ellie Goulding', 'image/artist_img/Ellie.jpg'),
(9, 'Ariana Grande', 'image/artist_img/ariana.jpg'),
(10, 'Palak Muchhal', 'image/artist_img/palak.jpg'),
(11, 'Tulsi Kumar', 'image/artist_img/tulsi.png'),
(12, 'Camila Cabello', 'image/artist_img/camila.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `playlistid` int(8) NOT NULL,
  `playlistname` varchar(255) NOT NULL,
  `userid` int(8) NOT NULL,
  `playlist_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`playlistid`, `playlistname`, `userid`, `playlist_img`) VALUES
(1, 'My Fav', 1, 'image/playlist_img/music-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `playlist_songs`
--

CREATE TABLE `playlist_songs` (
  `id` int(8) NOT NULL,
  `playlistid` varchar(255) NOT NULL,
  `songid` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlist_songs`
--

INSERT INTO `playlist_songs` (`id`, `playlistid`, `songid`) VALUES
(1, '1', 11),
(2, '1', 1);

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
(1, 'Blank Space', 3, 1, 'Taylor Swift', 'image/song_img/taylor_album.jpg', 'music/Taylor Swift - Blank Space.mp3'),
(2, 'Love Story', 4, 1, 'Taylor Swift', 'image/song_img/love_story.jpg', 'music/Taylor Swift - Love Story.mp3'),
(3, 'Who Says', 5, 2, 'Selena Marie Gomez', 'image/song_img/who says.jpg', 'music/Selena Gomez - Who Says.mp3'),
(4, 'Gal Ban Gayi', 5, 3, 'Neha Kakkar', 'image/song_img/gal ban gayi.jpg', 'music/Gal Ban Gayi.mp3'),
(5, 'Leja Re', 1, 4, 'Dhvani Bhanushali', 'image/song_img/leja re.jpg', 'music/Leja Re _ Dhvani Bhanushali.mp3'),
(6, 'Raabta - Kehte Hain Khuda Ne', 4, 5, 'Shreya Ghoshal', 'image/song_img/raabta.jpg', 'music/Raabta-Kehte Hain Khuda Ne.mp3'),
(7, 'Baby ', 5, 6, 'Justin Bieber', 'image/song_img/baby.jpg', 'music/Justin Bieber-Baby.mp3'),
(8, 'Tu Mileya', 3, 7, 'Darshan Raval', 'image/song_img/tu_mileya.jpg', 'music/Tu Mileya.mp3'),
(9, 'Love Me Like You Do', 2, 8, 'Ellli Goulding', 'image/song_img/love me like you do.jpg', 'music/Love Me Like You Do.mp3'),
(10, 'Break Free', 5, 9, 'Ariana Grande', 'image/song_img/break free.jpg', 'music/Ariana Grande - Break Free.mp3'),
(11, 'Hua Hain Aaj Pehli Baar', 1, 10, 'Palak Muchhal', 'image/song_img/hua hain Aaj Pehli Baar.jpg', 'music/Hua Hain Aaj Pehli Baar.mp3'),
(12, 'Zara Zara', 1, 11, 'Tulsi Kumar', 'image/song_img/zara zara.jpg', 'music/Zara Zara.mp3'),
(13, 'Senorita', 4, 12, 'Camila Cabello', 'image/song_img/senorita.jpg', 'music/Senorita.mp3');

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
(1, 'VishakhaGandhi', 'Vishakha', 'Gandhi', 'vishakha@gandhi', 'vishakha', 'image/profile_photo/profile-5-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

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
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`playlistid`);

--
-- Indexes for table `playlist_songs`
--
ALTER TABLE `playlist_songs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `albumid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `artistid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `playlistid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `playlist_songs`
--
ALTER TABLE `playlist_songs`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `songid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
