-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 20-06-21 17:37
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
  `id` int NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `phonenumber` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `date1` text COLLATE utf8mb4_unicode_ci,
  `date2` text COLLATE utf8mb4_unicode_ci,
  `area1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `area2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `addr` text COLLATE utf8mb4_unicode_ci,
  `addrex` text COLLATE utf8mb4_unicode_ci,
  `userCondition` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `requierment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='돌보미 기본정보';

--
-- 테이블의 덤프 데이터 `돌보미`
--

INSERT INTO `돌보미` (`id`, `name`, `phonenumber`, `date1`, `date2`, `area1`, `area2`, `addr`, `addrex`, `userCondition`, `requierment`, `code`) VALUES
(20, '김철수', '01043284238', '06/03/2020', '06/13/2020', '서울', '성동구', 'ㅁㄴㅇㄹ', 'ㅁㄴㅇㄹ', 'ㅁㄴㅇㄹ', 'ㅁㄴㅇㄹ', '1234'),
(21, 'asdf', 'asdf', '06/04/2020', '06/10/2020', '부산', '영도구', 'asdf', 'asdf', 'asdf', 'asdf', '0'),
(22, 'asdfasdf', 'asdfasdf', '06/11/2020', '06/25/2020', '부산', '영도구', NULL, 'asdf', 'asdf', 'asdf', '0'),
(23, '김아무개', '01058564246', '06/03/2020', '06/16/2020', '인천', '부평구', NULL, '아니동', 'ㅇㅇ', 'ㅇㅇ', '0'),
(24, '김씨', '01059574834', '06/04/2020', '06/17/2020', '부산', '동래구', NULL, 'ㅁㄴㅇㄹ', 'ㅁㄴㅇㄹ', 'ㅁㄴㅇㄹ', '0');

-- --------------------------------------------------------

--
-- 테이블 구조 `맡기미`
--

CREATE TABLE `맡기미` (
  `id` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `phonenumber` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `date1` text COLLATE utf8mb4_unicode_ci,
  `date2` text COLLATE utf8mb4_unicode_ci,
  `area1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `area2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `addrex` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `userCondition` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `requierment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `맡기미`
--

INSERT INTO `맡기미` (`id`, `name`, `phonenumber`, `date1`, `date2`, `area1`, `area2`, `addrex`, `userCondition`, `requierment`, `code`) VALUES
(6, 'asdf', 'asdf', '06/04/2020', '06/10/2020', '부산', '영도구', 'asdf', 'asdf', 'asdf', '5678'),
(7, '김맡기미씨', '01012345678', '06/03/2020', '06/16/2020', '인천', '계양구', '시발', '씨발', '개씨발', '01048467949');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `돌보미`
--
ALTER TABLE `돌보미`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `맡기미`
--
ALTER TABLE `맡기미`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `돌보미`
--
ALTER TABLE `돌보미`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 테이블의 AUTO_INCREMENT `맡기미`
--
ALTER TABLE `맡기미`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
