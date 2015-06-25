-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 15 apr 2015 om 11:14
-- Serverversie: 5.6.13
-- PHP-versie: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `loginsysteem`
--
CREATE DATABASE IF NOT EXISTS `loginsysteem` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loginsysteem`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fanswer`
--

CREATE TABLE IF NOT EXISTS `fanswer` (
  `question_id` int(4) NOT NULL DEFAULT '0',
  `a_id` int(4) NOT NULL DEFAULT '0',
  `a_name` varchar(65) NOT NULL DEFAULT '',
  `a_email` varchar(65) NOT NULL DEFAULT '',
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(25) NOT NULL DEFAULT '',
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `fanswer`
--

INSERT INTO `fanswer` (`question_id`, `a_id`, `a_name`, `a_email`, `a_answer`, `a_datetime`) VALUES
(2, 1, 'joost', 'joostvherwaarden@hotmail.com', 'Ha die jeroen, ik zie dat het erg grillig was in het park. Morgen op vossenjacht confermed? :3', '14/04/15 11:40:39'),
(2, 2, 'joost', 'joostvherwaarden@hotmail.com', 'Ha die jeroen, ik zie dat het erg grillig was in het park. Morgen op vossenjacht confermed? :3', '14/04/15 11:40:50'),
(2, 3, 'kevin', 'kevin@hot', '', '1');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fquestions`
--

CREATE TABLE IF NOT EXISTS `fquestions` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `datetime` varchar(25) NOT NULL DEFAULT '',
  `view` int(4) NOT NULL DEFAULT '0',
  `reply` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `fquestions`
--

INSERT INTO `fquestions` (`id`, `topic`, `detail`, `name`, `email`, `datetime`, `view`, `reply`) VALUES
(2, 'Wasberen in het park', 'Er zijn sinds zondag avond super veel wasberen gespot. 1 heeft al een kind op zijn weg naar huis aangevallen! Wat te doen?', 'Jeroen de Bruijne', 'jeroentjezzz@hotmail.com', '14/04/15 11:33:43', 13, 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `userpassword` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `groep_id` int(11) NOT NULL,
  `persoon_id` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`userid`, `username`, `userpassword`, `status`, `groep_id`, `persoon_id`) VALUES
(5, 'peter', 'e8636ea013e682faf61f56ce1cb1ab5c', 0, 0, 0),
(6, 'stevie', '10cf1fdf6ad958eeffa9853f6885cec9', 0, 0, 0),
(7, 'jeroen', 'shrek', 0, 0, 0),
(8, 'Goonomel', 'jer97oen', 0, 0, 0),
(9, 'Goonomel', 'jer97oen', 0, 0, 0),
(10, 'jeroen', 'jemoeder', 0, 0, 0),
(11, 'jeroen', 'jemoeder', 0, 0, 0),
(12, 'jeroen', 'jemoeder', 0, 0, 0),
(13, 'jeroen', 'jemoeder', 0, 0, 0),
(14, 'beeren', 'beer', 0, 0, 0),
(15, 'joost', 'joostbanaan', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
