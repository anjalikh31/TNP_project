-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 01:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tnp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `enum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `time`, `email`, `password`, `enum`) VALUES
(16, '2021-12-02 17:51:17', 'a12@a.com', '$2y$10$rmvF.XPC0NTOieO12eNI/e.QEbR14oLd5KHn/QoNBUl', 2147483647),
(17, '2021-12-02 17:51:27', 'a12a@a.com', '$2y$10$sVM4q.unYU43fMClbMO.HuvExzO3sOdV58ByTebLrA/', 2147483647),
(18, '2021-12-02 17:59:20', 'aa@a.com', '$2y$10$My64At85fC5bbacihxoO4eJt.ObG6hH1kaNcVAHTcvL', 0),
(19, '2021-12-02 18:00:22', 'aa@aaa.com', '$2y$10$zogJLnj75UzTUoLqirDd3OtnImT78YysiAr2qU4q/Hg', 5),
(20, '2021-12-02 20:03:51', 'a@a.com', '$2y$10$Xnjhmg8/PGM0DNR2z.9UweidcD1FqO0aA13CNY81vu0', 10),
(21, '2021-12-02 20:09:49', 'b@b.com', '$2y$10$zogJLnj75UzTUoLqirDd3OtnImT78YysiAr2qU4q/Hg', 11),
(22, '2021-12-03 09:10:14', 'a5@a.com', 'a', 50),
(23, '2021-12-03 09:34:00', 'rockjack9696@gmail.com', '$2y$10$8PHo5F08wL1qjfkSsGx76ukdh9WkNji9sMSvMy65As6', 4);

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(150) NOT NULL,
  `description` varchar(200) NOT NULL,
  `package` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`id`, `title`, `image`, `description`, `package`, `role`) VALUES
(340, 'amazon', 'img\\a.jpg', 'MNC', '12LPA', 'software Engineer'),
(341, 'Facebook', 'img\\b.jpg', 'MNC', '12LPA', 'SDE'),
(342, 'Facebook', 'img\\b.jpg', 'MNC', '12LPA', 'SDE'),
(343, 'amazon', 'img\\a.jpg', 'MNC', '12LPA', 'software Engineer'),
(344, 'Facebook', 'img\\b.jpg', 'MNC', '12LPA', 'SDE'),
(345, 'amazon', 'img\\a.jpg', 'MNC', '12LPA', 'software Engineer'),
(346, 'Facebook', 'img\\b.jpg', 'MNC', '12LPA', 'SDE'),
(347, 'amazon', 'img\\a.jpg', 'MNC', '12LPA', 'software Engineer'),
(348, 'Facebook', 'img\\b.jpg', 'MNC', '12LPA', 'SDE'),
(349, 'amazon', 'img\\a.jpg', 'MNC', '12LPA', 'software Engineer'),
(350, 'Facebook', 'img\\b.jpg', 'MNC', '12LPA', 'SDE'),
(351, 'amazon', 'img\\a.jpg', 'MNC', '12LPA', 'software Engineer'),
(352, 'Facebook', 'img\\b.jpg', 'MNC', '12LPA', 'SDE'),
(353, 'amazon', 'img\\a.jpg', 'MNC', '12LPA', 'software Engineer'),
(354, 'Facebook', 'img\\b.jpg', 'MNC', '12LPA', 'SDE'),
(355, 'amazon', 'img\\a.jpg', 'MNC', '12LPA', 'software Engineer'),
(356, 'Facebook', 'img\\b.jpg', 'MNC', '12LPA', 'SDE'),
(357, 'amazon', 'img\\a.jpg', 'MNC', '12LPA', 'software Engineer'),
(358, 'Facebook', 'img\\b.jpg', 'MNC', '12LPA', 'SDE'),
(359, 'amazon', 'img\\a.jpg', 'MNC', '12LPA', 'software Engineer'),
(360, 'Facebook', 'img\\b.jpg', 'MNC', '12LPA', 'SDE'),
(361, 'amazon', 'img\\a.jpg', 'MNC', '12LPA', 'software Engineer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
