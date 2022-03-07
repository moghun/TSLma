-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Oca 2022, 19:10:19
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tslma_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `password`, `role`) VALUES
(0, 'admin', 'admin', 1),
(1, 'user', 'user', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fang_supp`
--

CREATE TABLE `fang_supp` (
  `f_name` char(30) NOT NULL,
  `number_of_people` int(11) DEFAULT NULL,
  `team_id` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `fang_supp`
--

INSERT INTO `fang_supp` (`f_name`, `number_of_people`, `team_id`) VALUES
('Afrika Spor', 343696, 'AS'),
('Carsi', 883597, 'BJK'),
('Genc Fenerbahceliler', 1092394, 'FB'),
('Kpop yildizlari', 166, 'Kpo'),
('Seahawks', 10394, 'SU'),
('Trabzonlu Gencler', 343696, 'TS'),
('ultrAslan', 1186866, 'GS'),
('Yigidolar', 77597, 'SVS'),
('Yigidolar2', 7797, 'OG'),
('Zebralar', 85893, 'Z');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `man_dir`
--

CREATE TABLE `man_dir` (
  `man_id` char(6) NOT NULL,
  `m_name_first` char(30) DEFAULT NULL,
  `m_name_sur` char(30) DEFAULT NULL,
  `m_nationality` char(30) DEFAULT NULL,
  `team_id` char(3) DEFAULT NULL,
  `m_duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `man_dir`
--

INSERT INTO `man_dir` (`man_id`, `m_name_first`, `m_name_sur`, `m_nationality`, `team_id`, `m_duration`) VALUES
('1', 'Fatih', 'Terim', 'Turkish', 'GS', 4),
('2', 'Vitor', 'Pereira', 'Portuguese', 'FB', 1),
('3', 'Sergen', 'Yalcin', 'Turkish', 'BJK', 3),
('4', 'Abdullah', 'Avci', 'Turkish', 'TS', 2),
('5', 'Emre', 'Belozoglu', 'Turkish', 'BFK', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `matches`
--

CREATE TABLE `matches` (
  `match_id` char(10) NOT NULL,
  `stadium` char(30) DEFAULT NULL,
  `num_cards` int(11) DEFAULT NULL,
  `home_goal` int(11) DEFAULT NULL,
  `away_goal` int(11) DEFAULT NULL,
  `opponent_id` char(3) DEFAULT NULL,
  `match_date` int(11) DEFAULT NULL,
  `result` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `matches`
--

INSERT INTO `matches` (`match_id`, `stadium`, `num_cards`, `home_goal`, `away_goal`, `opponent_id`, `match_date`, `result`) VALUES
('1', 'Sukru Saracoglu', 10, 1, 1, 'GS', 2019, 'Draw'),
('2', 'Sukru Saracoglu', 7, 3, 1, 'BJK', 2019, 'Win'),
('3', 'Sukru Saracoglu', 6, 2, 1, 'TS', 2019, 'Win'),
('4', 'Arena', 12, 3, 1, 'TS', 2019, 'Win'),
('5', 'Arena', 5, 1, 1, 'BJK', 2019, 'Draw');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `player_stats`
--

CREATE TABLE `player_stats` (
  `player_id` char(6) NOT NULL,
  `match_id` char(10) NOT NULL,
  `num_goals` int(11) DEFAULT NULL,
  `num_assists` int(11) DEFAULT NULL,
  `num_cards` int(11) DEFAULT NULL,
  `p_duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `player_stats`
--

INSERT INTO `player_stats` (`player_id`, `match_id`, `num_goals`, `num_assists`, `num_cards`, `p_duration`) VALUES
('2', '1', 0, 0, 0, 90),
('2', '2', 0, 0, 0, 90),
('2', '3', 0, 0, 0, 90),
('4', '5', 0, 0, 1, 20),
('5', '4', 0, 0, 0, 90),
('6', '1', 0, 0, 0, 90);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `plays`
--

CREATE TABLE `plays` (
  `team_id` char(3) NOT NULL,
  `match_id` char(10) NOT NULL,
  `host` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `plays`
--

INSERT INTO `plays` (`team_id`, `match_id`, `host`) VALUES
('FB', '1', 'yes'),
('FB', '2', 'yes'),
('FB', '3', 'yes'),
('GS', '2', 'yes'),
('TS', '2', 'no');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `plyr_cont`
--

CREATE TABLE `plyr_cont` (
  `player_id` char(6) NOT NULL,
  `p_name_first` char(30) DEFAULT NULL,
  `p_name_sur` char(30) DEFAULT NULL,
  `p_nationality` char(30) DEFAULT NULL,
  `position` char(3) DEFAULT NULL,
  `total_goal` int(11) DEFAULT NULL,
  `team_id` char(3) DEFAULT NULL,
  `start_date` int(11) DEFAULT NULL,
  `end_date` int(11) DEFAULT NULL,
  `wage` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `plyr_cont`
--

INSERT INTO `plyr_cont` (`player_id`, `p_name_first`, `p_name_sur`, `p_nationality`, `position`, `total_goal`, `team_id`, `start_date`, `end_date`, `wage`) VALUES
('1', 'Mesut', 'Ozil', 'German', 'amf', 4, 'FB', 2021, 2024, 3900000),
('10', 'Arda', 'Gale', 'Turkish', 'amf', 0, 'GS', 2020, 2022, 466000),
('15', 'Ersin', 'Gursoy', 'Turkish', 'gk', 0, 'BJK', 2018, 2023, 137291),
('2', 'Altay', 'Bayindir', 'Turkish', 'gk', 0, 'FB', 2019, 2023, 500000),
('3', 'Attila', ' Szalai', 'Hungarian', 'cb', 0, 'FB', 2021, 2025, 800000),
('4', 'Arda', 'Turan', 'Turkish', 'amf', 0, 'GS', 2020, 2022, 466000),
('5', 'Ersin', 'Destanoglu', 'Turkish', 'gk', 0, 'BJK', 2018, 2023, 137291),
('6', 'Mesut1', 'Ozil1', 'German', 'amf', 4, 'FB', 2021, 2024, 3900020),
('7', 'Orhun', 'Gale', 'German', 'gk', 4, 'FB', 2021, 2024, 39023000),
('8', 'Furkan', 'Bayindir', 'Turkish', 'gk', 0, 'GS', 2019, 2023, 500000),
('9', 'Attila', ' Akgun', 'Hungarian', 'cb', 0, 'FB', 2021, 2025, 800000);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seasons`
--

CREATE TABLE `seasons` (
  `s_year` int(11) NOT NULL,
  `s_name` char(30) DEFAULT NULL,
  `champion_team` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `seasons`
--

INSERT INTO `seasons` (`s_year`, `s_name`, `champion_team`) VALUES
(2015, 'Suleyman Seba', 'Galatasaray'),
(2016, 'Hasan Dogan', 'Besiktas'),
(2017, 'Turgay Seren', 'Besiktas'),
(2018, 'Ilhan Cavcav', 'Galatasaray'),
(2019, 'Lefter Kucukandonyadis', 'Galatasaray'),
(2020, 'Cemil Usta', 'Basaksehir'),
(2021, 'Cemil Tascioglu', 'Besiktas');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teams`
--

CREATE TABLE `teams` (
  `team_id` char(3) NOT NULL,
  `t_name` char(30) DEFAULT NULL,
  `foundation_year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `teams`
--

INSERT INTO `teams` (`team_id`, `t_name`, `foundation_year`) VALUES
('AS', 'Afrika Spor', 2014),
('BFK', 'Basaksehir', 2014),
('BJK', 'Besiktas', 1903),
('FB', 'Fenerbahce', 1907),
('GS', 'Galatasaray', 1905),
('Kpo', 'Kpop Yildizlari', 1905),
('OG', 'Orhun Gucu', 1967),
('SU', 'Seahawks', 1999),
('SVS', 'Sivasspor', 1967),
('TS', 'Trabzonspor', 1967),
('Z', 'Zebralar', 1907);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `team_stats`
--

CREATE TABLE `team_stats` (
  `s_year` int(11) NOT NULL,
  `team_id` char(3) NOT NULL,
  `points` int(11) DEFAULT NULL,
  `goals_scored` int(11) DEFAULT NULL,
  `goals_conceded` int(11) DEFAULT NULL,
  `win_number` int(11) DEFAULT NULL,
  `lose_number` int(11) DEFAULT NULL,
  `draw_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `team_stats`
--

INSERT INTO `team_stats` (`s_year`, `team_id`, `points`, `goals_scored`, `goals_conceded`, `win_number`, `lose_number`, `draw_number`) VALUES
(2016, 'BJK', 79, 75, 35, 25, 5, 4),
(2016, 'FB', 74, 60, 27, 22, 4, 8),
(2017, 'BFK', 73, 63, 28, 21, 3, 10),
(2017, 'BJK', 77, 73, 30, 23, 3, 8),
(2018, 'FB', 72, 78, 36, 21, 4, 9),
(2018, 'GS', 75, 75, 33, 24, 7, 3),
(2019, 'BFK', 67, 49, 22, 19, 5, 10),
(2019, 'GS', 69, 72, 36, 20, 5, 9),
(2020, 'BFK', 69, 65, 34, 20, 5, 9),
(2021, 'BJK', 84, 89, 44, 26, 8, 6);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `fang_supp`
--
ALTER TABLE `fang_supp`
  ADD PRIMARY KEY (`f_name`,`team_id`),
  ADD KEY `team_id` (`team_id`);

--
-- Tablo için indeksler `man_dir`
--
ALTER TABLE `man_dir`
  ADD PRIMARY KEY (`man_id`),
  ADD KEY `team_id` (`team_id`);

--
-- Tablo için indeksler `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`match_id`);

--
-- Tablo için indeksler `player_stats`
--
ALTER TABLE `player_stats`
  ADD PRIMARY KEY (`player_id`,`match_id`),
  ADD KEY `match_id` (`match_id`);

--
-- Tablo için indeksler `plays`
--
ALTER TABLE `plays`
  ADD PRIMARY KEY (`team_id`,`match_id`),
  ADD KEY `match_id` (`match_id`);

--
-- Tablo için indeksler `plyr_cont`
--
ALTER TABLE `plyr_cont`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `team_id` (`team_id`);

--
-- Tablo için indeksler `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`s_year`);

--
-- Tablo için indeksler `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);

--
-- Tablo için indeksler `team_stats`
--
ALTER TABLE `team_stats`
  ADD PRIMARY KEY (`s_year`,`team_id`),
  ADD KEY `team_id` (`team_id`);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `fang_supp`
--
ALTER TABLE `fang_supp`
  ADD CONSTRAINT `fang_supp_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`team_id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `man_dir`
--
ALTER TABLE `man_dir`
  ADD CONSTRAINT `man_dir_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`team_id`);

--
-- Tablo kısıtlamaları `player_stats`
--
ALTER TABLE `player_stats`
  ADD CONSTRAINT `player_stats_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `plyr_cont` (`player_id`),
  ADD CONSTRAINT `player_stats_ibfk_2` FOREIGN KEY (`match_id`) REFERENCES `matches` (`match_id`);

--
-- Tablo kısıtlamaları `plays`
--
ALTER TABLE `plays`
  ADD CONSTRAINT `plays_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`team_id`),
  ADD CONSTRAINT `plays_ibfk_2` FOREIGN KEY (`match_id`) REFERENCES `matches` (`match_id`);

--
-- Tablo kısıtlamaları `plyr_cont`
--
ALTER TABLE `plyr_cont`
  ADD CONSTRAINT `plyr_cont_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`team_id`);

--
-- Tablo kısıtlamaları `team_stats`
--
ALTER TABLE `team_stats`
  ADD CONSTRAINT `team_stats_ibfk_1` FOREIGN KEY (`s_year`) REFERENCES `seasons` (`s_year`),
  ADD CONSTRAINT `team_stats_ibfk_2` FOREIGN KEY (`team_id`) REFERENCES `teams` (`team_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
