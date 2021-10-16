-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 05:17 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(30) NOT NULL,
  `room_id` varchar(255) NOT NULL,
  `incoming_msg_id` varchar(255) NOT NULL,
  `outgoing_msg_id` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `room_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 'r', 'i', 'o', 'm'),
(2, '1128068187', '1633985826', '1633985826', 'hello '),
(3, '1128068187', '1633985826', '1633985826', 'This is send by me'),
(4, '1128068187', '1439275944', '1439275944', 'Now this is send by tony ...'),
(5, '1128068187', '1248675010', '1248675010', 'HEllo Guys , Batman is here'),
(6, '1128068187', '1633985826', '1633985826', 'okay we will now add logout functionality'),
(7, '1128068187', '1633985826', '1633985826', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_id`, `name`, `password`) VALUES
(9, '1128068187', 'myroom', '1bf419b9ecd4130730321e6309cecf65'),
(10, '1', 'n', 'p'),
(11, '1412318444', 'djroom', '1bf419b9ecd4130730321e6309cecf65'),
(12, '479433662', 'thisroom', '1bf419b9ecd4130730321e6309cecf65');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_Id` int(30) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_Id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`) VALUES
(7, 1633985826, 'Dayanand ', 'Jagtap', 'dayanandjagtap@icloud.com', '1bf419b9ecd4130730321e6309cecf65', '1634231488IMG20200527115105.jpg'),
(8, 1439275944, 'Tony ', 'Stark', 'tonystark@gmail.com', '1bf419b9ecd4130730321e6309cecf65', '1634321180InkedTime Table_LI.jpg'),
(9, 1248675010, 'Bruce', 'Wayne', 'brucewayne@gmail.com', '1bf419b9ecd4130730321e6309cecf65', '1634321987IMG20200527115057.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
