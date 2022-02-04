-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 2 月 04 日 17:39
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db_02`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `bookname` text NOT NULL,
  `bookurl` text NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `bookname`, `bookurl`, `comment`, `date`, `author`) VALUES
(68, '青い絨毯', 'https://www.aozora.gr.jp/cards/001095/files/56797_56917.html', '', '2022-02-05 01:17:53', '坂口安吾'),
(70, '五重塔', 'https://www.aozora.gr.jp/cards/000051/files/50351_36759.html', '', '2022-01-30 13:22:18', '幸田露伴'),
(71, '山月記', 'https://www.aozora.gr.jp/cards/000119/files/624_14544.html', '', '2022-01-30 13:22:23', '中島敦'),
(72, '父', 'https://www.aozora.gr.jp/cards/000879/files/30_15215.html', '', '2022-01-30 13:22:26', '芥川龍之介'),
(74, '木々の精、谷の精', 'https://www.aozora.gr.jp/cards/001095/files/45844_60119.html', '', '2022-01-30 13:22:14', '坂口安吾'),
(75, '銀の匙', 'https://www.aozora.gr.jp/cards/001799/files/56638_61335.html', '', '2022-01-30 14:19:22', '中勘助');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
