-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2015 at 01:18 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `proyecto`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `snippet_id` int(10) unsigned NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `snippet_id` (`snippet_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `snippets`
--

CREATE TABLE IF NOT EXISTS `snippets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `likes` int(11) DEFAULT '0',
  `dislikes` int(11) DEFAULT '0',
  `language` varchar(30) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `content` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `snippets`
--

INSERT INTO `snippets` (`id`, `user_id`, `likes`, `dislikes`, `language`, `description`, `content`) VALUES
(2, 3, 1, 2, 'java', 'This is a snippet', 'System.out.println("Hello World!");'),
(3, 3, 0, 1, 'Python', 'Hello world in Python', 'print "Hello World"'),
(18, 5, 0, 0, 'Python', 'Program with comments', '''''''Hello world''''''\r\ndef hi():\r\n    return "Hello World!"'),
(19, 5, 0, 0, 'Python', 'Program with comments', '''''''Hello world''''''\r\ndef hi():\r\n    return "Hello World!"'),
(20, 5, 0, 0, 'asd', 'asd', 'zxc');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `snippet_id` int(10) unsigned NOT NULL,
  `tag` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `snippet_id` (`snippet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `biography` varchar(250) DEFAULT NULL,
  `languages` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `username`, `password`, `email`, `image`, `role`, `biography`, `languages`) VALUES
(3, 'Admin', 'Lastname', 'admin', '$2a$10$LfRsOuvcCvES8RGE4jQDOOlr.4uAZY5ve0ZTjdDByjZBEET9vjR2.', 'admin@cake.com', '1447863699-Admin.jpg', 'admin', '', NULL),
(4, 'Mau', 'RodrÃ­guez Morales', 'mau', '$2a$10$TzzlTcrvyCFoPutBtm8Is.daSJCv5AIxE4yJ9JUd60FATl3OLuPEu', 'maUCRodriguez@gmail.com', 'placeholder.png', 'admin', '', NULL),
(5, 'Dead', 'Pool', 'deadpool', '$2a$10$U9ykFuLr/9zP7nU80yTsP.ic7sb5FYW6NtDU4KAUOuxVJzd0l.ESq', 'deadpool@marvel.com', 'placeholder.png', 'admin', '', NULL),
(6, 'Carolina', 'Valerio', 'caro', '$2a$10$0wCIcXp1OKJ5du/i0J6eQOHj0gMWQkjkq4qLg3q8HbhY0ZzmgQTb2', 'caro@caro.com', 'placeholder.png', 'admin', '', NULL);

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
