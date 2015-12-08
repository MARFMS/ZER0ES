-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2015 at 06:46 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyecto`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `snippet_id` int(10) UNSIGNED NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `snippets`
--

CREATE TABLE `snippets` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `likes` int(11) DEFAULT '0',
  `dislikes` int(11) DEFAULT '0',
  `language` varchar(30) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `content` varchar(512) DEFAULT NULL,
  `is_public` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snippets`
--

INSERT INTO `snippets` (`id`, `user_id`, `likes`, `dislikes`, `language`, `description`, `content`, `is_public`) VALUES
(2, 6, 1, 2, 'java', 'This is a snippet', 'System.out.println("Hello World!");', 1),
(3, 3, 0, 1, 'python', 'Hello world in Python', 'print "Hello World"', 1),
(18, 5, 0, 0, 'python', 'Program with comments', '''''''Hello world''''''\ndef hi():\n    return "Hello World!"', 1),
(22, 3, 2, 1, 'python', 'test desc', 'test cont', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `snippet_id` int(10) UNSIGNED NOT NULL,
  `tag` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `snippet_id`, `tag`) VALUES
(1, 2, 'hello'),
(2, 3, 'hello'),
(3, 2, 'world');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `biography` varchar(250) DEFAULT NULL,
  `languages` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `username`, `password`, `email`, `image`, `role`, `biography`, `languages`) VALUES
(3, 'Admin', 'Lastname', 'admin', '$2a$10$LfRsOuvcCvES8RGE4jQDOOlr.4uAZY5ve0ZTjdDByjZBEET9vjR2.', 'admin@cake.com', '1447863699-Admin.jpg', 'admin', '', NULL),
(4, 'Mau', 'RodrÃ­guez Morales', 'mau', '$2a$10$TzzlTcrvyCFoPutBtm8Is.daSJCv5AIxE4yJ9JUd60FATl3OLuPEu', 'maUCRodriguez@gmail.com', 'placeholder.png', 'admin', '', NULL),
(5, 'Dead', 'Pool', 'deadpool', '$2a$10$U9ykFuLr/9zP7nU80yTsP.ic7sb5FYW6NtDU4KAUOuxVJzd0l.ESq', 'deadpool@marvel.com', 'placeholder.png', 'admin', '', NULL),
(6, 'Carolina', 'Valerio', 'caro', '$2a$10$0wCIcXp1OKJ5du/i0J6eQOHj0gMWQkjkq4qLg3q8HbhY0ZzmgQTb2', 'caro@caro.com', 'placeholder.png', 'admin', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `snippet_id` (`snippet_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `snippets`
--
ALTER TABLE `snippets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `snippet_id` (`snippet_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `snippets`
--
ALTER TABLE `snippets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `snippets`
--
ALTER TABLE `snippets`
  ADD CONSTRAINT `snippets_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `tags_ibfk_1` FOREIGN KEY (`snippet_id`) REFERENCES `snippets` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
