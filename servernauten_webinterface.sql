-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 20. Jan 2021 um 18:08
-- Server-Version: 10.4.17-MariaDB
-- PHP-Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `admins`
--

INSERT INTO `admins` (`id`, `firstname`, `surname`, `email`, `password`) VALUES
(1, 'Sebastian', 'Wulf', 'sebastian2@wulf.email', '$2y$10$.MhC3z2IAtmMN8z42yV61uSQqs1T5uwb/.c8bgxHBSkN8Qg3Ep4hm');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cms_settings`
--

CREATE TABLE `cms_settings` (
  `id` int(2) NOT NULL,
  `website_name` varchar(50) NOT NULL,
  `website_url` varchar(50) NOT NULL,
  `website_ssl` int(1) NOT NULL,
  `seo_keywords` varchar(200) NOT NULL,
  `seo_description` varchar(400) NOT NULL,
  `licence_key` varchar(256) NOT NULL,
  `image_server_1` varchar(150) NOT NULL,
  `image_server_2` varchar(150) NOT NULL,
  `logo_image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `cms_settings`
--

INSERT INTO `cms_settings` (`id`, `website_name`, `website_url`, `website_ssl`, `seo_keywords`, `seo_description`, `licence_key`, `image_server_1`, `image_server_2`, `logo_image`) VALUES
(1, 'servernauten.de', 'servernauten.de', 1, 'servernauten, Webinterface, Gameserver, Voiceserver, Streamserver, Domains', 'Ihr Smartes Webinterface für Gameserver, Voiceserver, Streamserver uvm. finden Sie unter servernauten.de', '', 'ftp://ep:WKQafN3n2UAY5deF@imageserver.icu', 'ftp://ep:WKQafN3n2UAY5deF@imageserver.icu', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `salutation_id` int(1) NOT NULL,
  `customerType_id` int(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `location` varchar(50) NOT NULL,
  `country_code` varchar(3) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `homepage` varchar(150) NOT NULL,
  `loginActive` int(1) NOT NULL,
  `newsletter` int(1) NOT NULL,
  `customerToken` varchar(256) NOT NULL,
  `hash` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `customers`
--

INSERT INTO `customers` (`id`, `salutation_id`, `customerType_id`, `email`, `company`, `address`, `zip`, `location`, `country_code`, `firstname`, `surname`, `mobile`, `phone`, `fax`, `mail`, `homepage`, `loginActive`, `newsletter`, `customerToken`, `hash`) VALUES
(1, 0, 0, 'sebastian@wulf.email', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq'),
(2, 1, 1, '{$mail}', '{$company}', '{$address}', '{$zip}', '{$location}', 'DE', '{$firstname}', '{$surname}', '{$mobile}', '{$phone}', '{$fax}', '{$mail}', '{$homepage}', 1, 1, '{$customerToken}', NULL),
(3, 1, 1, '{$mail}', '{$company}', '{$address}', '{$zip}', '{$location}', 'DE', '{$firstname}', '{$surname}', '{$mobile}', '{$phone}', '{$fax}', '{$mail}', '{$homepage}', 1, 1, '{$customerToken}', NULL),
(4, 1, 1, '{$mail}', '{$company}', '{$address}', '{$zip}', '{$location}', 'DE', '{$firstname}', '{$surname}', '{$mobile}', '{$phone}', '{$fax}', '{$mail}', '{$homepage}', 1, 1, '{$customerToken}', NULL),
(5, 1, 1, '{$mail}', '$company', '{$address}', '{$zip}', '{$location}', 'DE', '{$firstname}', '{$surname}', '{$mobile}', '{$phone}', '{$fax}', '{$mail}', '{$homepage}', 1, 1, '{$customerToken}', NULL),
(6, 1, 1, '{$mail}', 'test', '{$address}', '{$zip}', '{$location}', 'DE', '{$firstname}', '{$surname}', '{$mobile}', '{$phone}', '{$fax}', '{$mail}', '{$homepage}', 1, 1, '{$customerToken}', NULL),
(7, 1, 1, '', 'sfdfsdg', '', '123', '', '', '', '', '', '', '', '', '', 0, 0, '751c4c635031e813d464df5a49367be5d6f0c977f66f604a79eafb5e76d2cbb23abd68f979701a25633aa59b73ce3351b0ede58c8ef2d013933b9a303bdea4c98c5a62814f006bd6c6064ec238d25ba528ca2a52c98779e06b1537d92888bf6ca1bd11760695ebf39714f7e269bf7406e6adcae234af8033973ec50d514ad7ca', NULL),
(8, 1, 1, '', 'sfdfsdg', '', '123', '', '', '', '', '', '', '', '', '', 0, 0, '39a11cc40342a04cd65274430c316eba57bc136623ef0f0dbf9135d7b082470b36d2cfa705e3349ea48c93f010f31f907eedcb4848e1a339acaa16c317641f57c61a149497a2d92927b92502ad77f6b451baa8929609a8bc92a9348ec990efdea69ee15cbe9ac3542c9c733c0ff7e247967b1413a7e224b690c9ac1e83889b6c', NULL),
(9, 1, 1, '', 'sfdfsdg', '', '123', '', '', '', '', '', '', '', '', '', 0, 0, '8708127dba5749e5f42353debc51c6ca87940585685e27e99fcba0af40174ce277ea098f14eb51ddb6559691e7a6b11bb89754a0fe76e300e720c09927a5058ea7a7ffebc19bbe5b2a407da3a526790cd3d9b7bf29ec7833391ffeab57f6100f084b3f84fc08988c8768180ce7ba62089472511616cf3d007d78ca2bcae2a431', NULL),
(10, 1, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '8c0dd875fbd9715eae867adb99f683e5f4abe2d9e7c0efff2e52658ea34038b15b00a2722f81dfd4552945ba67dcc8f52c68428d5ca492ced9e102e9a501c59f9ad2d653ae2df32504a22913835a91fe544f8067da5d7533a5a5366d0d6e81e7226040681745afb13061bc78664dda439f5bd46e565136d15b37881b258d73d0', NULL),
(11, 1, 1, '', '', '', '', 'dd', '', '', '', '', '', '', '', '', 0, 0, '9cbc0c3594c8154b2cb643451625c37173da686355d33eef548eed4906f7253e44074d40cc12753772c0f68a5d0dc1f2a5ee7471a7179ae934cf3e9d6ee7e6598e3cb55909ad5f11febc840aa579ca7ae84781a991c82094669d542a5a57be36e57b9281f2d4d9517054e1deff1247d19b50545faa5252e6a6c94d744a3afdc7', NULL),
(12, 1, 1, '', '', '', '', 'dd', '', '', '', '', '', '', '', '', 0, 0, '93e4d979b58f1b701f0d9b858cad4551c4e339ddcfa37b9dca30aab248d09295876ca3aa4467ed9cf97f2bc4568ea0afe2fb8f1cd112f083c731c8ed8ee80c0096222ff0de4884d396fc4d52281c3e6d0bdb7e2d4372b6b625ce2d033259571aadcb1b31fcd434983c1259f16af0890e691e1a6ed3d3119b67330777e83597e8', NULL);

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
-- Indizes für die Tabelle `cms_settings`
--
ALTER TABLE `cms_settings`
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
-- AUTO_INCREMENT für Tabelle `cms_settings`
--
ALTER TABLE `cms_settings`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
