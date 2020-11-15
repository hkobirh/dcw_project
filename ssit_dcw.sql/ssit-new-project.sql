-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 10, 2020 at 04:06 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssit-new-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titel` varchar(300) NOT NULL,
  `subtitel` varchar(500) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `starttime` time DEFAULT NULL,
  `endtime` time DEFAULT NULL,
  `url_1` varchar(300) NOT NULL,
  `url_2` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `image` varchar(250) NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `user_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `titel`, `subtitel`, `startdate`, `enddate`, `starttime`, `endtime`, `url_1`, `url_2`, `image`, `status`, `user_id`, `created_at`) VALUES
(5, 'Learn Git and GitHub without any code!', 'Learn Git and GitHub without any code!', '2020-11-09', '2020-11-25', NULL, NULL, 'http://localhost/ssit-new-project/admin/addslider.php', NULL, '5fa85fcd9faa5608656.png', 1, 6, '2020-11-08 21:14:53'),
(4, 'Learn Git and GitHub without any code!', 'Learn Git and GitHub without any code!', '2020-11-09', '2020-11-25', NULL, NULL, 'http://localhost/ssit-new-project/admin/addslider.php', NULL, '5fa85fa0986ea439349.png', 1, 6, '2020-11-08 21:14:08'),
(3, 'Learn Git and GitHub without any code!', 'Learn Git and GitHub without any code!', '2020-11-09', '2020-11-24', NULL, NULL, 'http://localhost/ssit-new-project/admin/addslider.php', NULL, '5fa85df67cb30518102.jpg', 1, 6, '2020-11-08 21:07:02'),
(6, 'Learn Git and GitHub without any code!', 'Learn Git and GitHub without any code!', '2020-11-10', '2020-11-18', NULL, NULL, 'http://localhost/ssit-new-project/admin/addslider.php', NULL, '5fa85fe40873a909922.png', 1, 6, '2020-11-08 21:15:16'),
(7, 'Learn Git and GitHub without any code!', 'Learn Git and GitHub without any code!', '2020-11-10', '2020-11-18', NULL, NULL, 'http://localhost/ssit-new-project/admin/addslider.php', NULL, '5fa86031a5243310384.png', 1, 6, '2020-11-08 21:16:33'),
(8, 'Learn Git and GitHub without any code!', 'Learn Git and GitHub without any code!', '2020-11-10', '2020-11-18', NULL, NULL, 'http://localhost/ssit-new-project/admin/addslider.php', NULL, '5fa860d5bac07881588.png', 1, 6, '2020-11-08 21:19:17'),
(9, 'Learn Git and GitHub without any code!', 'Learn Git and GitHub without any code!', '2020-11-09', '2020-11-26', NULL, NULL, 'http://localhost/ssit-new-project/admin/addslider.php', NULL, '5fa863a59ed05896984.png', 0, 6, '2020-11-08 21:31:17'),
(10, 'Learn Git and GitHub without any code!', 'Learn Git and GitHub without any code!', '2020-11-09', '2020-11-09', NULL, NULL, 'http://localhost/ssit-new-project/admin/addslider.php', NULL, '5fa864a8eb152474789.png', 0, 6, '2020-11-08 21:35:36'),
(11, 'php', 'Learn Git and GitHub without any code!', '2020-11-09', '2020-11-19', NULL, NULL, 'http://localhost/ssit-new-project/admin/addslider.php', NULL, '5fa8652e126ed767582.png', 0, 6, '2020-11-08 21:37:50'),
(12, 'laravel', 'Learn Git and GitHub without any code!', '2020-11-08', '2020-11-10', NULL, NULL, 'http://localhost/ssit-new-project/admin/addslider.php', NULL, '5fa865a8e6249708538.png', 0, 6, '2020-11-08 21:39:52'),
(13, 'laravel', 'Learn Git and GitHub without any code!', '2020-11-09', '2020-11-09', NULL, NULL, 'http://localhost/ssit-new-project/admin/addslider.php', NULL, '5fa86642db9c6829335.png', 1, 6, '2020-11-08 21:42:26'),
(14, 'php', 'Learn Git and GitHub without any code!', '2020-11-09', '2020-12-02', NULL, NULL, 'http://localhost/ssit-new-project/admin/addslider.php', NULL, '5fa866a172ba3712806.png', 0, 6, '2020-11-08 21:44:01'),
(15, 'toastr is a Javascript library for Gnome / Growl type non-blocking notifications.', 'toastr is a Javascript library for Gnome / Growl type non-blocking notifications.', '2020-11-09', '2020-11-10', NULL, NULL, 'http://localhost/ssit-new-project/admin/addslider.php', NULL, '5fa8696e98119426529.png', 1, 6, '2020-11-08 21:55:58'),
(16, 'Learn Git and GitHub without any code!', 'toastr is a Javascript library for Gnome / Growl type non-blocking notifications.', '2020-11-09', '2020-11-24', NULL, NULL, 'http://localhost/ssit-new-project/admin/addslider.php', NULL, '5fa86a9b3a69d413920.png', 0, 6, '2020-11-08 22:00:59'),
(17, 'Learn Git and GitHub without any code!', 'Learn Git and GitHub without any code!', '2020-11-09', '2020-11-09', NULL, NULL, 'http://localhost/ssit-new-project/admin/addslider.php', NULL, '5fa86b4f05708359030.png', 1, 6, '2020-11-08 22:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_varified_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `token` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pssword` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_varified_at`, `photo`, `status`, `token`, `pssword`, `created_at`, `updated_at`) VALUES
(7, 'MD SOFIUL', 'sfnirov', 'mdsofiul@gmail.com', NULL, NULL, 0, NULL, '$2y$10$/WRG.arPQIQYjO1p7ovcq.U/T1nL0selAIBQLEV6buL/i/96/XaUK', '2020-11-08 20:17:50', '2020-11-08 20:17:50'),
(6, 'MD SOFIUL', 'admin', 'adminsofiul@gmail.com', NULL, NULL, 1, '79159', '$2y$10$mafLVWmwvakB8FVBlfyvGeEdWlX55.Pc6uFQDODEw39Q8BW.P25Yq', '2020-11-06 14:15:22', '2020-11-06 14:15:22'),
(5, 'MD SOFIUL BASHAR', 'mdsofiulbashar', 'mdsofiul1997@gmail.com', NULL, NULL, 1, '25946', '$2y$10$3XLDmqJB4.2GIF/0nIntaOO5GjnwRm8vzP9e5cD8qolt3.HLTFU8i', '2020-11-04 20:28:34', '2020-11-04 20:28:34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
