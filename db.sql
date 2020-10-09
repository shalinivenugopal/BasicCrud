-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `datas`;
CREATE TABLE `datas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `datas` (`id`, `username`, `email`, `password`) VALUES
(4, 'admin',  'admin@admin.com',  'e10adc3949ba59abbe56e057f20f883e');

DROP TABLE IF EXISTS `form`;
CREATE TABLE `form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `dob` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `profile_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;


-- 2020-10-09 11:02:08