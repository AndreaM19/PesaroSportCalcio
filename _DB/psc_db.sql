-- phpMyAdmin SQL Dump
-- version 4.3.3
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Giu 04, 2015 alle 10:00
-- Versione del server: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `psc_db`
--
CREATE DATABASE IF NOT EXISTS `psc_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `psc_db`;

-- --------------------------------------------------------

--
-- Struttura della tabella `circolo`
--

CREATE TABLE IF NOT EXISTS `circolo` (
  `id_circolo` int(11) NOT NULL,
  `circolo_name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `phone` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(11) NOT NULL,
  `event_title` varchar(100) NOT NULL,
  `event_date` date DEFAULT NULL,
  `event_short_description` tinytext NOT NULL,
  `event_flyer` varchar(100) DEFAULT NULL,
  `event_infos` text,
  `event_type` int(11) NOT NULL,
  `sport` int(11) NOT NULL,
  `event_gallery` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `event`
--

INSERT INTO `event` (`id_event`, `event_title`, `event_date`, `event_short_description`, `event_flyer`, `event_infos`, `event_type`, `sport`, `event_gallery`) VALUES
(2, 'Modal test', '2015-07-18', 'kjhgfdhjgf jghfgfhdg', 'Schermata 2015-05-11 alle 13.34.51.png', 'kjuhgf ikujyhtgr ujyhtgr ukjyhtgrf', 2, 5, 16),
(3, 'How to make a Raspberry Pi media SERVER', '2015-07-28', 'k,mjhnbgfvdkjhgfd uyhtgref', 'tubular-tutorial.zip', 'ujyhtgrfe ikuytre uiytre iuytre iuytre', 2, 3, NULL),
(4, 'How to install PhpMyAdmin on Linux Ubuntu Server', '2015-07-28', 'ytrtewnbv', 'ikea.txt', 'thgrfe jyhtgrfedw jyhtrgfe jthrgef ytgref ', 3, 4, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `event_gallery`
--

CREATE TABLE IF NOT EXISTS `event_gallery` (
  `id_event_gallery` int(11) NOT NULL,
  `gallery_name` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `event_gallery`
--

INSERT INTO `event_gallery` (`id_event_gallery`, `gallery_name`) VALUES
(16, 'Gal test');

-- --------------------------------------------------------

--
-- Struttura della tabella `event_image`
--

CREATE TABLE IF NOT EXISTS `event_image` (
  `id_event_image` int(11) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `event_gallery` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `event_type`
--

CREATE TABLE IF NOT EXISTS `event_type` (
  `id_event_type` int(11) NOT NULL,
  `event_type_name` varchar(45) NOT NULL,
  `event_type_acr` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `event_type`
--

INSERT INTO `event_type` (`id_event_type`, `event_type_name`, `event_type_acr`) VALUES
(1, 'Manifestazione sportiva', 'manifestazione'),
(2, 'Torneo', 'torneo'),
(3, 'Campionato', 'campionato'),
(4, 'Corso di formazione', 'formazione'),
(5, 'Evento culturale', 'cultura');

-- --------------------------------------------------------

--
-- Struttura della tabella `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`, `salt`, `name`, `surname`) VALUES
(3, '19andrea.m@gmail.com', '19andrea.m@gmail.com', '9a1ee0de8ec9f1852d8ee097cb946b736f27be556c8876573b68a3f18b5158adcf17bf295a48022ef29256b3f2757c4fa7a3da2a202147e95538367ccf244dd3', 'ead2f32eac9858224bfa74469a9e4b65f53101364116c400cd8cf7fd614d89c4b0fd1675dcf045ff23275e04de64aef8a79b703bc5ee59df882d2c375a88df3a', 'Andrea', 'Marchetti');

-- --------------------------------------------------------

--
-- Struttura della tabella `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `id_module` int(11) NOT NULL,
  `module_name` varchar(45) NOT NULL,
  `file_path` varchar(100) NOT NULL,
  `module_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `partner`
--

CREATE TABLE IF NOT EXISTS `partner` (
  `id_partner` int(11) NOT NULL,
  `logo_img_path` varchar(150) NOT NULL,
  `partner_name` varchar(45) NOT NULL,
  `partner_website` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `sponsor`
--

CREATE TABLE IF NOT EXISTS `sponsor` (
  `id_sponsor` int(11) NOT NULL,
  `sponsor_name` varchar(200) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `sponsor`
--

INSERT INTO `sponsor` (`id_sponsor`, `sponsor_name`, `event_id`) VALUES
(2, 'Andrea', 2),
(3, 'Mio sponsor', 3),
(5, 'Mio sponsor', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `sport`
--

CREATE TABLE IF NOT EXISTS `sport` (
  `id_sport` int(11) NOT NULL,
  `sport_name` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `sport`
--

INSERT INTO `sport` (`id_sport`, `sport_name`) VALUES
(1, 'Basket'),
(6, 'Beach Soccer'),
(7, 'Beach Tennis'),
(8, 'Beach Volley'),
(4, 'Calcio a 11'),
(2, 'Calcio a 5'),
(3, 'Calcio a 8'),
(11, 'Calciobalilla'),
(9, 'Danza'),
(5, 'Pallavolo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `circolo`
--
ALTER TABLE `circolo`
  ADD PRIMARY KEY (`id_circolo`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`), ADD KEY `fk_event_sport1_idx` (`sport`), ADD KEY `fk_event_event_type1_idx` (`event_type`), ADD KEY `fk_event_event_gallery1_idx` (`event_gallery`);

--
-- Indexes for table `event_gallery`
--
ALTER TABLE `event_gallery`
  ADD PRIMARY KEY (`id_event_gallery`);

--
-- Indexes for table `event_image`
--
ALTER TABLE `event_image`
  ADD PRIMARY KEY (`id_event_image`), ADD KEY `fk_event_image_event_gallery1_idx` (`event_gallery`);

--
-- Indexes for table `event_type`
--
ALTER TABLE `event_type`
  ADD PRIMARY KEY (`id_event_type`), ADD UNIQUE KEY `event_type_name_UNIQUE` (`event_type_name`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id_module`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id_partner`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id_sponsor`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id_sport`), ADD UNIQUE KEY `sport_name_UNIQUE` (`sport_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `circolo`
--
ALTER TABLE `circolo`
  MODIFY `id_circolo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `event_gallery`
--
ALTER TABLE `event_gallery`
  MODIFY `id_event_gallery` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `event_image`
--
ALTER TABLE `event_image`
  MODIFY `id_event_image` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event_type`
--
ALTER TABLE `event_type`
  MODIFY `id_event_type` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id_module` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id_sponsor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `id_sport` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `event`
--
ALTER TABLE `event`
ADD CONSTRAINT `fk_event_event_gallery1` FOREIGN KEY (`event_gallery`) REFERENCES `event_gallery` (`id_event_gallery`) ON DELETE SET NULL ON UPDATE SET NULL,
ADD CONSTRAINT `fk_event_event_type1` FOREIGN KEY (`event_type`) REFERENCES `event_type` (`id_event_type`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_event_sport1` FOREIGN KEY (`sport`) REFERENCES `sport` (`id_sport`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `event_image`
--
ALTER TABLE `event_image`
ADD CONSTRAINT `fk_event_image_event_gallery1` FOREIGN KEY (`event_gallery`) REFERENCES `event_gallery` (`id_event_gallery`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
