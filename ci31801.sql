-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?04 ??16 ??13:08
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ci31801`
--

-- --------------------------------------------------------

--
-- 表的结构 `ci_documentcate`
--

CREATE TABLE IF NOT EXISTS `ci_documentcate` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `pid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '父類ID',
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '分類名稱',
  `sort` smallint(5) unsigned NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `ci_documentcate`
--

INSERT INTO `ci_documentcate` (`id`, `pid`, `name`, `sort`) VALUES
(1, 0, '分類一', 1),
(2, 0, '分類二', 2);

-- --------------------------------------------------------

--
-- 表的结构 `ci_user`
--

CREATE TABLE IF NOT EXISTS `ci_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '用戶名',
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '密碼',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '狀態',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `ci_user`
--

INSERT INTO `ci_user` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '8e36e8014ee6e6fb07f500ffd19c3bd0', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
