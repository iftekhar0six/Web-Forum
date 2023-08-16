-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 03:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(8) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(8) NOT NULL,
  `comment_by` int(8) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(1, 'This is a comment', 1, 0, '2023-05-07 22:02:13'),
(2, 'this is python comment', 1, 0, '2023-05-07 22:10:50'),
(3, 'Somebuddy please fix this', 1, 0, '2023-05-07 22:24:06'),
(4, 'goto chatGPT', 1, 0, '2023-05-07 22:25:03'),
(5, 'do practical work more', 3, 0, '2023-05-07 22:27:09'),
(6, 'this is sample comment', 1, 0, '2023-05-08 00:20:19'),
(7, 'this is sample comment', 1, 0, '2023-05-08 00:21:21'),
(8, 'this is sample comment', 1, 0, '2023-05-08 00:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(500) NOT NULL,
  `category_description` varchar(500) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`category_id`, `category_name`, `category_description`, `created`) VALUES
(7, 'Hollywood', 'A larger-than-life symbol of the entertainment business, Hollywood beckons tourists with landmarks like TCL Chinese Theatre and star-studded Walk of Fame. Highlights include Paramount Pictures, historic music venues like the Hollywood Bowl, and Dolby Theatre, home of the Oscars. Scenesters can choose from improv comedy clubs, retro-cool bars and velvet-roped nightclubs. Locals frequent eateries in nearby Thai Town.', '2022-11-20 17:59:52'),
(8, 'Tollywood', 'Telugu cinema, also known as Tollywood, is the segment of Indian cinema dedicated to the production of motion pictures in the Telugu language, widely spoken in the states of Andhra Pradesh and Telangana. Telugu cinema is based in Film Nagar, Hyderabad, India.', '2022-11-20 18:01:02'),
(9, 'Bollywood', 'Hindi cinema, popularly known as Bollywood and formerly as Bombay cinema, refers to the film industry based in Mumbai, engaged in production of motion pictures in Hindi language. The popular term Bollywood, is a portmanteau of \"Bombay\" and \"Hollywood\".', '2022-11-20 18:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `programming`
--

CREATE TABLE `programming` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(500) NOT NULL,
  `category_description` varchar(500) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programming`
--

INSERT INTO `programming` (`category_id`, `category_name`, `category_description`, `created`) VALUES
(1, 'Python', 'Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Python is dynamically-typed and garbage-collected. It supports multiple programming paradigms, including structured, object-oriented and functional programming.2', '2022-11-20 18:04:14'),
(2, 'Web Development', 'Web development is the work involved in developing a website for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex web applications, electronic businesses, and social network services.', '2022-11-20 18:05:08'),
(3, 'Java', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.', '2022-11-20 18:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(500) NOT NULL,
  `category_description` varchar(500) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`category_id`, `category_name`, `category_description`, `created`) VALUES
(4, 'Football', 'Association football, more commonly known as football or soccer, is a team sport played between two teams of 11 players who primarily use their feet to propel the ball around a rectangular field called a pitch. ', '2022-11-20 18:07:27'),
(5, 'Cricket', 'Cricket is a bat-and-ball game played between two teams of eleven players on a field at the centre of which is a 22-yard pitch with a wicket at each end, each comprising two bails balanced on three stumps.', '2022-11-20 18:08:11'),
(6, 'Rugby', 'Rugby union, commonly known simply as rugby, is a close-contact team sport that originated at Rugby School in the first half of the 19th century. One of the two codes of rugby football, it is based on running with the ball in hand.', '2022-11-20 18:08:52');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(7) NOT NULL,
  `thread_title` varchar(256) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(7) NOT NULL,
  `thread_user_id` int(7) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES
(1, 'unable to install pyaudio', 'I am not able to install pyaudio on windows', 1, 0, '2023-05-07 11:10:07'),
(2, 'Not able to use python', 'please help me', 1, 0, '2023-05-07 12:11:04'),
(3, 'Java is hard language', 'I am tired from Java can anyone help me to learn ', 3, 0, '2023-05-07 12:49:17'),
(4, 'fdgabdf', 'dfgdsf', 1, 0, '2023-05-07 15:11:05'),
(5, 'New Title', 'New Description', 2, 0, '2023-05-07 15:14:26'),
(6, 'bhdffcsgjbh', 'dsfdhfhsbjcbh', 4, 0, '2023-05-07 15:18:05'),
(12, 'this is title', 'this is decription', 1, 0, '2023-05-07 15:27:19'),
(13, 'download latest movies ', 'How can I download latest movies', 7, 0, '2023-05-08 00:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sr_no` int(8) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_pass` varchar(256) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sr_no`, `user_email`, `user_pass`, `timestamp`) VALUES
(1, 'abc@gmail.com', '$2y$10$dkyUtd2E0OtXs1okdGWLpOLBaYAM5BtUI750zZwGxWHAAutOCtQI.', '2023-05-08 00:30:28'),
(2, 'israr@yahoo.com', '$2y$10$CKpvCL7sWEGU3LT452DAm..zNoRT5BBYWEz25ejc0KLQRxcmYkpCS', '2023-05-08 00:36:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sr_no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
