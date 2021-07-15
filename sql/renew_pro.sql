-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-07-15 09:45
-- 서버 버전: 10.4.19-MariaDB
-- PHP 버전: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `renew_pro`
--

CREATE TABLE `renew_pro` (
  `renew_idx` int(11) NOT NULL COMMENT '상품 고유번호',
  `renew_cate` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '상품 분류 카테고리',
  `renew_name` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '상품 이름',
  `renew_desc` text CHARACTER SET utf8 NOT NULL COMMENT '상품 요약설명',
  `renew_pri` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '상품 가격',
  `renew_img` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '상품 이미지',
  `renew_reg` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '상품 등록일'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `renew_pro`
--
ALTER TABLE `renew_pro`
  ADD PRIMARY KEY (`renew_idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `renew_pro`
--
ALTER TABLE `renew_pro`
  MODIFY `renew_idx` int(11) NOT NULL AUTO_INCREMENT COMMENT '상품 고유번호';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
