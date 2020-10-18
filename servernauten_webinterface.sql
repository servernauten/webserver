-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 18. Okt 2020 um 17:21
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `servernauten_webinterface`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `admins`
--

INSERT INTO `admins` (`id`, `email`, `hash`) VALUES
(1, 'sebastian2@wulf.email', '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `customers`
--

INSERT INTO `customers` (`id`, `email`, `hash`) VALUES
(1, 'sebastian@wulf.email', '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `datacenter`
--

CREATE TABLE `datacenter` (
  `ip` int(11) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `datacenter`
--

INSERT INTO `datacenter` (`ip`, `location`) VALUES
(1, 'Falkenstein/Vogtland');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `server_master`
--

CREATE TABLE `server_master` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ssh2_ip` varchar(32) NOT NULL,
  `ssh2_port` int(5) NOT NULL,
  `ftp_port` int(5) NOT NULL,
  `ssh2_username` varchar(50) NOT NULL,
  `ssh2_password` varchar(20) NOT NULL,
  `location` int(2) NOT NULL,
  `server_os` varchar(50) NOT NULL,
  `bit_version` int(2) NOT NULL,
  `cores` int(2) NOT NULL,
  `ram` int(6) NOT NULL,
  `description` mediumtext NOT NULL,
  `max_slots` int(5) NOT NULL,
  `max_server` int(5) NOT NULL,
  `port_start` int(6) NOT NULL,
  `port_jump` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `datacenter`
--
ALTER TABLE `datacenter`
  ADD PRIMARY KEY (`ip`);

--
-- Indizes für die Tabelle `server_master`
--
ALTER TABLE `server_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `datacenter`
--
ALTER TABLE `datacenter`
  MODIFY `ip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `server_master`
--
ALTER TABLE `server_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
