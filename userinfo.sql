-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 20-06-21 11:24
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
  `dolID` int NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `phonenumber` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `date1` text COLLATE utf8mb4_unicode_ci,
  `date2` text COLLATE utf8mb4_unicode_ci,
  `area1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `area2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr` text COLLATE utf8mb4_unicode_ci,
  `addrex` text COLLATE utf8mb4_unicode_ci,
  `dolCondition` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `requierment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='돌보미 기본정보';

--
-- 테이블의 덤프 데이터 `돌보미`
--

INSERT INTO `돌보미` (`dolID`, `name`, `phonenumber`, `date1`, `date2`, `area1`, `area2`, `addr`, `addrex`, `dolCondition`, `requierment`) VALUES
(20, '김철수', '01043284238', '06/03/2020', '06/13/2020', '서울', '성동구', 'ㅁㄴㅇㄹ', 'ㅁㄴㅇㄹ', 'ㅁㄴㅇㄹ', 'ㅁㄴㅇㄹ'),
(21, 'asdf', 'asdf', '06/04/2020', '06/10/2020', '부산', '영도구', 'asdf', 'asdf', 'asdf', 'asdf'),
(22, 'asdfasdf', 'asdfasdf', '06/11/2020', '06/25/2020', '부산', '영도구', NULL, 'asdf', 'asdf', 'asdf'),
(23, '김아무개', '01058564246', '06/03/2020', '06/16/2020', '인천', '부평구', NULL, '아니동', 'ㅇㅇ', 'ㅇㅇ');

-- --------------------------------------------------------

--
-- 테이블 구조 `맡기미`
--

CREATE TABLE `맡기미` (
  `matID` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `date1` text COLLATE utf8mb4_unicode_ci,
  `date2` text COLLATE utf8mb4_unicode_ci,
  `area1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `area2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `addrex` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `matCondition` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `requierment` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `맡기미`
--

INSERT INTO `맡기미` (`matID`, `name`, `phonenumber`, `date1`, `date2`, `area1`, `area2`, `addrex`, `matCondition`, `requierment`) VALUES
(1, 'asdfasdf', '123', '123', '123', '', '', '', '', ''),
(2, 'ㅁㄴㅇㄹ', '1234', '1234', '1234', '', '', '', '', ''),
(3, '', '', '06/02/2020', '06/09/2020', '', '', '', '', ''),
(4, 'sadf', 'asdf', '06/01/2020', '06/02/2020', '', '', '', '', ''),
(5, 'sadf', 'asdf', '06/01/2020', '06/02/2020', '', '', '', '', ''),
(6, 'asdf', 'asdf', '06/04/2020', '06/10/2020', '부산', '영도구', 'asdf', 'asdf', 'asdf');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `돌보미`
--
ALTER TABLE `돌보미`
  ADD PRIMARY KEY (`dolID`);

--
-- 테이블의 인덱스 `맡기미`
--
ALTER TABLE `맡기미`
  ADD PRIMARY KEY (`matID`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `돌보미`
--
ALTER TABLE `돌보미`
  MODIFY `dolID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 테이블의 AUTO_INCREMENT `맡기미`
--
ALTER TABLE `맡기미`
  MODIFY `matID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
