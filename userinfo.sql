-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 20-06-07 10:19
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
  `password` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `date1` text COLLATE utf8mb4_unicode_ci,
  `date2` text COLLATE utf8mb4_unicode_ci,
  `addr` text COLLATE utf8mb4_unicode_ci,
  `addrex` text COLLATE utf8mb4_unicode_ci,
  `dolCondition` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `requierment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='돌보미 기본정보';

--
-- 테이블의 덤프 데이터 `돌보미`
--

INSERT INTO `돌보미` (`dolID`, `name`, `password`, `phone`, `date1`, `date2`, `addr`, `addrex`, `dolCondition`, `requierment`) VALUES
(8, '김철수', '1234', '01012345678', '06/01/2020', '06/07/2020', '서울 송파구 풍성로 4-3', '행복아파트', '얌전했으면 좋겠어요', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `맡기미`
--

CREATE TABLE `맡기미` (
  `matID` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `date1` text COLLATE utf8mb4_unicode_ci,
  `date2` text COLLATE utf8mb4_unicode_ci,
  `pet1` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `pet2` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `petnumber1` text COLLATE utf8mb4_unicode_ci,
  `petnumber2` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `맡기미`
--

INSERT INTO `맡기미` (`matID`, `name`, `password`, `phone`, `date1`, `date2`, `pet1`, `pet2`, `petnumber1`, `petnumber2`) VALUES
(1, 'asdfasdf', 'asdf', '123', '123', '123', '중형견', '중형견', '2', '2');

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
  MODIFY `dolID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 테이블의 AUTO_INCREMENT `맡기미`
--
ALTER TABLE `맡기미`
  MODIFY `matID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
