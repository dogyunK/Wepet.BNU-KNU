-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 20-06-06 17:57
-- 서버 버전: 8.0.20
-- PHP 버전: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `userinfo`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `돌보미`
--

CREATE TABLE `돌보미` (
  `name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` int DEFAULT NULL,
  `phone` int DEFAULT NULL,
  `date1` date DEFAULT NULL,
  `date2` date DEFAULT NULL,
  `addr` text COLLATE utf8mb4_unicode_ci,
  `addrex` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='돌보미 기본정보';

--
-- 테이블의 덤프 데이터 `돌보미`
--

INSERT INTO `돌보미` (`name`, `password`, `phone`, `date1`, `date2`, `addr`, `addrex`) VALUES
('asdf', 1234, NULL, NULL, NULL, NULL, NULL),
('asdf', 123, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 테이블 구조 `맡기미`
--

CREATE TABLE `맡기미` (
  `name` int NOT NULL,
  `password` int DEFAULT NULL,
  `number` int DEFAULT NULL,
  `date1` date DEFAULT NULL,
  `date2` date DEFAULT NULL,
  `pet1` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pet2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `petnumber1` int DEFAULT NULL,
  `petnumber2` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
