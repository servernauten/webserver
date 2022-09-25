-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 25. Sep 2022 um 07:29
-- Server-Version: 5.7.39-0ubuntu0.18.04.2
-- PHP-Version: 7.2.24-0ubuntu0.18.04.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `db320218x3351125`
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
  `password` varchar(255) NOT NULL,
  `language_code` int(2) NOT NULL,
  `licencekey` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `admins`
--

INSERT INTO `admins` (`id`, `firstname`, `surname`, `email`, `password`, `language_code`, `licencekey`) VALUES
(1, 'Sebastian', 'Wulf', 'sebastian2@wulf.email', '$2y$10$.MhC3z2IAtmMN8z42yV61uSQqs1T5uwb/.c8bgxHBSkN8Qg3Ep4hm', 1, 'E)H@McQfThWmZq4t7w!z%C*F-JaNdRgU');

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
-- Tabellenstruktur für Tabelle `countries`
--

CREATE TABLE `countries` (
  `code` char(2) CHARACTER SET utf8 NOT NULL,
  `en` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `DE` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `es` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fr` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `it` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ru` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `countries`
--

INSERT INTO `countries` (`code`, `en`, `DE`, `es`, `fr`, `it`, `ru`) VALUES
('AD', 'Andorra', 'Andorra', 'Andorra', 'ANDORRE', 'Andorra ', 'Андорра'),
('AE', 'United Arab Emirates', 'Vereinigte Arabische Emirate', 'Emiratos Árabes Unidos', 'ÉMIRATS ARABES UNIS', 'Emirati Arabi Uniti ', 'ОАЭ'),
('AF', 'Afghanistan', 'Afghanistan', 'Afganistán', 'AFGHANISTAN', 'Afghanistan', 'Афганистан'),
('AG', 'Antigua and Barbuda', 'Antigua und Barbuda', 'Antigua y Barbuda', 'ANTIGUA-ET-BARBUDA', 'Antigua e Barbuda', 'Антигуа и Барбуда'),
('AI', 'Anguilla', 'Anguilla', 'Anguila', 'ANGUILLA', 'Anguilla', 'Ангилья'),
('AL', 'Albania', 'Albanien', 'Albania', 'ALBANIE', 'Albania ', 'Албания'),
('AM', 'Armenia', 'Armenien', 'Armenia', 'ARMÉNIE', 'Armenia ', 'Армения'),
('AN', 'Netherlands Antilles', 'Niederländische Antillen', 'Antillas Neerlandesas', '', '', ''),
('AO', 'Angola', 'Angola', 'Angola', 'ANGOLA', 'Angola ', 'Ангола'),
('AQ', 'Antarctica', 'Antarktis', 'Antártida', 'ANTARCTIQUE', 'Antartide ', 'Антарктида'),
('AR', 'Argentina', 'Argentinien', 'Argentina', 'ARGENTINE', 'Argentina ', 'Аргентина'),
('AS', 'American Samoa', 'Amerikanisch-Samoa', 'Samoa Americana', 'SAMOA AMÉRICAINES', 'Samoa Americane', 'Американское Самоа'),
('AT', 'Austria', 'Österreich', 'Austria', 'AUTRICHE', 'Austria', 'Австрия'),
('AU', 'Australia', 'Australien', 'Australia', 'AUSTRALIE', 'Australia', 'Австралия'),
('AW', 'Aruba', 'Aruba', 'Aruba', 'ARUBA', 'Aruba', 'Аруба'),
('AX', 'Aland Islands', 'Åland', 'Islas Áland', 'ÅLAND, ÎLES', 'Isole Åland', 'Аландские острова'),
('AZ', 'Azerbaijan', 'Aserbaidschan', 'Azerbaiyán', 'AZERBAÏDJAN', 'Azerbaigian', 'Азербайджан'),
('BA', 'Bosnia and Herzegovina', 'Bosnien und Herzegowina', 'Bosnia y Herzegovina', 'BOSNIE-HERZÉGOVINE', 'Bosnia ed Erzegovina', 'Босния и Герцеговина'),
('BB', 'Barbados', 'Barbados', 'Barbados', 'BARBADE', 'Barbados', 'Барбадос'),
('BD', 'Bangladesh', 'Bangladesch', 'Bangladesh', 'BANGLADESH', 'Bangladesh', 'Бангладеш'),
('BE', 'Belgium', 'Belgien', 'Bélgica', 'BELGIQUE', 'Belgio', 'Бельгия'),
('BF', 'Burkina Faso', 'Burkina Faso', 'Burkina Faso', 'BURKINA FASO', 'Burkina Faso', 'Буркина-Фасо'),
('BG', 'Bulgaria', 'Bulgarien', 'Bulgaria', 'BULGARIE', 'Bulgaria', 'Болгария'),
('BH', 'Bahrain', 'Bahrain', 'Bahréin', 'BAHREÏN', 'Bahrein', 'Бахрейн'),
('BI', 'Burundi', 'Burundi', 'Burundi', 'BURUNDI', 'Burundi', 'Бурунди'),
('BJ', 'Benin', 'Benin', 'Benin', 'BÉNIN', 'Benin', 'Бенин'),
('BM', 'Bermuda', 'Bermuda', 'Bermudas', 'BERMUDES', 'Bermuda', 'Бермуды'),
('BN', 'Brunei', 'Brunei Darussalam', 'Brunéi', 'BRUNÉI DARUSSALAM', 'Brunei', 'Бруней'),
('BO', 'Bolivia', 'Bolivien', 'Bolivia', 'BOLIVIE, ÉTAT PLURINATIONAL DE', 'Bolivia', 'Боливия'),
('BR', 'Brazil', 'Brasilien', 'Brasil', 'BRÉSIL', 'Brasile', 'Бразилия'),
('BS', 'Bahamas', 'Bahamas', 'Bahamas', 'BAHAMAS', 'Bahamas', 'Багамы'),
('BT', 'Bhutan', 'Bhutan', 'Bhután', 'BHOUTAN', 'Bhutan', 'Бутан'),
('BV', 'Bouvet Island', 'Bouvetinsel', 'Isla Bouvet', 'BOUVET, ÎLE', 'Isola Bouvet', 'Остров Буве'),
('BW', 'Botswana', 'Botswana', 'Botsuana', 'BOTSWANA', 'Botswana', 'Ботсвана'),
('BY', 'Belarus', 'Belarus (Weißrussland)', 'Belarús', 'BÉLARUS', 'Bielorussia', 'Белоруссия'),
('BZ', 'Belize', 'Belize', 'Belice', 'BELIZE', 'Belize', 'Белиз'),
('CA', 'Canada', 'Kanada', 'Canadá', 'CANADA', 'Canada', 'Канада'),
('CC', 'Cocos (Keeling) Islands', 'Kokosinseln (Keelinginseln)', 'Islas Cocos', 'COCOS (KEELING), ÎLES', 'Isole Cocos (Keeling)', 'Кокосовые острова'),
('CD', 'Congo (Kinshasa)', 'Kongo', 'Congo', 'CONGO, LA RÉPUBLIQUE DÉMOCRATIQUE DU', 'RD del Congo', 'Демократическая Республика Конго'),
('CF', 'Central African Republic', 'Zentralafrikanische Republik', 'República Centro-Africana', 'CENTRAFRICAINE, RÉPUBLIQUE', 'Rep. Centrafricana', 'ЦАР'),
('CG', 'Congo (Brazzaville)', 'Republik Kongo', 'Congo', 'CONGO', 'Rep. del Congo', 'Республика Конго'),
('CH', 'Switzerland', 'Schweiz', 'Suiza', 'SUISSE', 'Svizzera', 'Швейцария'),
('CI', 'Ivory Coast', 'Elfenbeinküste', 'Costa de Marfil', 'CÔTE D’IVOIRE', 'Costa d\'Avorio', 'Кот-д’Ивуар'),
('CK', 'Cook Islands', 'Cookinseln', 'Islas Cook', 'COOK, ÎLES', 'Isole Cook', 'Острова Кука'),
('CL', 'Chile', 'Chile', 'Chile', 'CHILI', 'Cile', 'Чили'),
('CM', 'Cameroon', 'Kamerun', 'Camerún', 'CAMEROUN', 'Camerun', 'Камерун'),
('CN', 'China', 'China, Volksrepublik', 'China', 'CHINE', 'Cina', 'КНР (Китайская Народная Республика)'),
('CO', 'Colombia', 'Kolumbien', 'Colombia', 'COLOMBIE', 'Colombia', 'Колумбия'),
('CR', 'Costa Rica', 'Costa Rica', 'Costa Rica', 'COSTA RICA', 'Costa Rica', 'Коста-Рика'),
('CU', 'Cuba', 'Kuba', 'Cuba', 'CUBA', 'Cuba', 'Куба'),
('CV', 'Cape Verde', 'Kap Verde', 'Cabo Verde', 'CABO VERDE', 'Capo Verde', 'Кабо-Верде'),
('CX', 'Christmas Island', 'Weihnachtsinsel', 'Islas Christmas', 'CHRISTMAS, ÎLE', 'Isola di Natale', 'Остров Рождества'),
('CY', 'Cyprus', 'Zypern', 'Chipre', 'CHYPRE', 'Cipro', 'Кипр'),
('CZ', 'Czech Republic', 'Tschechische Republik', 'República Checa', 'TCHÈQUE, RÉPUBLIQUE', 'Rep. Ceca', 'Чехия'),
('DE', 'Germany', 'Deutschland', 'Alemania', 'ALLEMAGNE', 'Germania', 'Германия'),
('DJ', 'Djibouti', 'Dschibuti', 'Yibuti', 'DJIBOUTI', 'Gibuti', 'Джибути'),
('DK', 'Denmark', 'Dänemark', 'Dinamarca', 'DANEMARK', 'Danimarca', 'Дания'),
('DM', 'Dominica', 'Dominica', 'Domínica', 'DOMINIQUE', 'Dominica', 'Доминика'),
('DO', 'Dominican Republic', 'Dominikanische Republik', 'República Dominicana', 'DOMINICAINE, RÉPUBLIQUE', 'Rep. Dominicana', 'Доминиканская Республика'),
('DZ', 'Algeria', 'Algerien', 'Argelia', 'ALGÉRIE', 'Algeria', 'Алжир'),
('EC', 'Ecuador', 'Ecuador', 'Ecuador', 'ÉQUATEUR', 'Ecuador', 'Эквадор'),
('EE', 'Estonia', 'Estland (Reval)', 'Estonia', 'ESTONIE', 'Estonia', 'Эстония'),
('EG', 'Egypt', 'Ägypten', 'Egipto', 'ÉGYPTE', 'Egitto', 'Египет'),
('EH', 'Western Sahara', 'Westsahara', 'Sahara Occidental', 'SAHARA OCCIDENTAL', 'Sahara Occidentale', 'САДР'),
('ER', 'Eritrea', 'Eritrea', 'Eritrea', 'ÉRYTHRÉE', 'Eritrea', 'Эритрея'),
('ES', 'Spain', 'Spanien', 'España', 'ESPAGNE', 'Spagna', 'Испания'),
('ET', 'Ethiopia', 'Äthiopien', 'Etiopía', 'ÉTHIOPIE', 'Etiopia', 'Эфиопия'),
('FI', 'Finland', 'Finnland', 'Finlandia', 'FINLANDE', 'Finlandia', 'Финляндия'),
('FJ', 'Fiji', 'Fidschi', 'Fiji', 'FIDJI', 'Figi', 'Фиджи'),
('FK', 'Falkland Islands', 'Falklandinseln (Malwinen)', 'Islas Malvinas', 'FALKLAND, ÎLES (MALVINAS)', 'Isole Falkland', 'Фолклендские острова'),
('FM', 'Micronesia', 'Mikronesien', 'Micronesia', 'MICRONÉSIE, ÉTATS FÉDÉRÉS DE', 'Micronesia', 'Микронезия'),
('FO', 'Faroe Islands', 'Färöer', 'Islas Faroe', 'FÉROÉ, ÎLES', 'Fær Øer', 'Фареры'),
('FR', 'France', 'Frankreich', 'Francia', 'FRANCE', 'Francia', 'Франция'),
('GA', 'Gabon', 'Gabun', 'Gabón', 'GABON', 'Gabon', 'Габон'),
('GB', 'United Kingdom', 'Großbritannien und Nordirland', 'Reino Unido', 'ROYAUME-UNI', 'Regno Unito', 'Великобритания'),
('GD', 'Grenada', 'Grenada', 'Granada', 'GRENADE', 'Grenada', 'Гренада'),
('GE', 'Georgia', 'Georgien', 'Georgia', 'GÉORGIE', 'Georgia', 'Грузия'),
('GF', 'French Guiana', 'Französisch-Guayana', 'Guayana Francesa', 'GUYANE FRANÇAISE', 'Guyana francese', 'Гвиана'),
('GG', 'Guernsey', 'Guernsey (Kanalinsel)', 'Guernsey', 'GUERNESEY', 'Guernsey', 'Гернси'),
('GH', 'Ghana', 'Ghana', 'Ghana', 'GHANA', 'Ghana', 'Гана'),
('GI', 'Gibraltar', 'Gibraltar', 'Gibraltar', 'GIBRALTAR', 'Gibilterra', 'Гибралтар'),
('GL', 'Greenland', 'Grönland', 'Groenlandia', 'GROENLAND', 'Groenlandia', 'Гренландия'),
('GM', 'Gambia', 'Gambia', 'Gambia', 'GAMBIE', 'Gambia', 'Гамбия'),
('GN', 'Guinea', 'Guinea', 'Guinea', 'GUINÉE', 'Guinea', 'Гвинея'),
('GP', 'Guadeloupe', 'Guadeloupe', 'Guadalupe', 'GUADELOUPE', 'Guadalupa', 'Гваделупа'),
('GQ', 'Equatorial Guinea', 'Äquatorialguinea', 'Guinea Ecuatorial', 'GUINÉE ÉQUATORIALE', 'Guinea Equatoriale', 'Экваториальная Гвинея'),
('GR', 'Greece', 'Griechenland', 'Grecia', 'GRÈCE', 'Grecia ', 'Греция'),
('GS', 'South Georgia and the South Sandwich Islands', 'Südgeorgien und die Südl. Sandwichinseln', 'Georgia del Sur e Islas Sandwich del Sur', 'GÉORGIE DU SUD ET LES ÎLES SANDWICH DU SUD', 'Georgia del Sud e isole Sandwich meridionali', 'Южная Георгия и Южные Сандвичевы Острова'),
('GT', 'Guatemala', 'Guatemala', 'Guatemala', 'GUATEMALA', 'Guatemala', 'Гватемала'),
('GU', 'Guam', 'Guam', 'Guam', 'GUAM', 'Guam', 'Гуам'),
('GW', 'Guinea-Bissau', 'Guinea-Bissau', 'Guinea-Bissau', 'GUINÉE-BISSAU', 'Guinea-Bissau', 'Гвинея-Бисау'),
('GY', 'Guyana', 'Guyana', 'Guayana', 'GUYANA', 'Guyana', 'Гайана'),
('HK', 'Hong Kong S.A.R., China', 'Hongkong', 'Hong Kong', 'HONG KONG', 'Hong Kong', 'Гонконг'),
('HM', 'Heard Island and McDonald Islands', 'Heard- und McDonald-Inseln', 'Islas Heard y McDonald', 'HEARD ET MACDONALD, ÎLES', 'Isole Heard e McDonald', 'Херд и Макдональд'),
('HN', 'Honduras', 'Honduras', 'Honduras', 'HONDURAS', 'Honduras', 'Гондурас'),
('HR', 'Croatia', 'Kroatien', 'Croacia', 'CROATIE', 'Croazia', 'Хорватия'),
('HT', 'Haiti', 'Haiti', 'Haití', 'HAÏTI', 'Haiti ', 'Гаити'),
('HU', 'Hungary', 'Ungarn', 'Hungría', 'HONGRIE', 'Ungheria', 'Венгрия'),
('ID', 'Indonesia', 'Indonesien', 'Indonesia', 'INDONÉSIE', 'Indonesia', 'Индонезия'),
('IE', 'Ireland', 'Irland', 'Irlanda', 'IRLANDE', 'Irlanda ', 'Флаг Ирландии Ирландия'),
('IL', 'Israel', 'Israel', 'Israel', 'ISRAËL', 'Israele ', 'Израиль'),
('IM', 'Isle of Man', 'Insel Man', 'Isla de Man', 'ÎLE DE MAN', 'Isola di Man', 'Остров Мэн'),
('IN', 'India', 'Indien', 'India', 'INDE', 'India ', 'Индия Индия'),
('IO', 'British Indian Ocean Territory', 'Britisches Territorium im Indischen Ozean', 'Territorio Británico del Océano Índico', 'OCÉAN INDIEN, TERRITOIRE BRITANNIQUE DE L\'', 'Territorio britannico dell\'oceano', 'Британская территория в Индийском океане'),
('IQ', 'Iraq', 'Irak', 'Irak', 'IRAQ', 'Iraq ', 'Ирак'),
('IR', 'Iran', 'Iran', 'Irán', 'IRAN, RÉPUBLIQUE ISLAMIQUE D\'', 'Iran ', 'Иран'),
('IS', 'Iceland', 'Island', 'Islandia', 'ISLANDE', 'Islanda ', 'Исландия'),
('IT', 'Italy', 'Italien', 'Italia', 'ITALIE', 'Italia ', 'Италия'),
('JE', 'Jersey', 'Jersey (Kanalinsel)', 'Jersey', 'JERSEY', 'Jersey ', 'Джерси'),
('JM', 'Jamaica', 'Jamaika', 'Jamaica', 'JAMAÏQUE', 'Giamaica', 'Ямайка'),
('JO', 'Jordan', 'Jordanien', 'Jordania', 'JORDANIE', 'Giordania ', 'Иордания'),
('JP', 'Japan', 'Japan', 'Japón', 'JAPON', 'Giappone ', 'Япония'),
('KE', 'Kenya', 'Kenia', 'Kenia', 'KENYA', 'Kenya ', 'Кения'),
('KG', 'Kyrgyzstan', 'Kirgisistan', 'Kirguistán', 'KIRGHIZISTAN', 'Kirghizistan', 'Киргизия'),
('KH', 'Cambodia', 'Kambodscha', 'Camboya', 'CAMBODGE', 'Cambogia ', 'Камбоджа'),
('KI', 'Kiribati', 'Kiribati', 'Kiribati', 'KIRIBATI', 'Kiribati ', 'Кирибати'),
('KM', 'Comoros', 'Komoren', 'Comoros', 'COMORES', 'Comore ', 'Коморы'),
('KN', 'Saint Kitts and Nevis', 'St. Kitts und Nevis', 'San Cristóbal y Nieves', 'SAINT-KITTS-ET-NEVIS', 'Saint Kitts e Nevis', 'Сент-Китс и Невис'),
('KP', 'North Korea', 'Nordkorea', 'Corea del Norte', 'CORÉE, RÉPUBLIQUE POPULAIRE DÉMOCRATIQUE DE', 'Corea del Nord ', 'КНДР (Корейская Народно-Демократическая Республика)'),
('KR', 'South Korea', 'Südkorea', 'Corea del Sur', 'CORÉE, RÉPUBLIQUE DE', 'Corea del Sud ', 'Республика Корея'),
('KW', 'Kuwait', 'Kuwait', 'Kuwait', 'KOWEÏT', 'Kuwait ', 'Кувейт'),
('KY', 'Cayman Islands', 'Kaimaninseln', 'Islas Caimán', 'CAÏMANES, ÎLES', 'Isole Cayman', 'Острова Кайман'),
('KZ', 'Kazakhstan', 'Kasachstan', 'Kazajstán', 'KAZAKHSTAN', 'Kazakistan ', 'Казахстан'),
('LA', 'Laos', 'Laos', 'Laos', 'LAO, RÉPUBLIQUE DÉMOCRATIQUE POPULAIRE', 'Laos ', 'Лаос'),
('LB', 'Lebanon', 'Libanon', 'Líbano', 'LIBAN', 'Libano', 'Ливан'),
('LC', 'Saint Lucia', 'St. Lucia', 'Santa Lucía', 'SAINTE-LUCIE', 'Santa Lucia', 'Сент-Люсия'),
('LI', 'Liechtenstein', 'Liechtenstein', 'Liechtenstein', 'LIECHTENSTEIN', 'Liechtenstein', 'Лихтенштейн'),
('LK', 'Sri Lanka', 'Sri Lanka', 'Sri Lanka', 'SRI LANKA', 'Sri Lanka ', 'Шри-Ланка'),
('LR', 'Liberia', 'Liberia', 'Liberia', 'LIBÉRIA', 'Liberia ', 'Либерия'),
('LS', 'Lesotho', 'Lesotho', 'Lesotho', 'LESOTHO', 'Lesotho ', 'Лесото'),
('LT', 'Lithuania', 'Litauen', 'Lituania', 'LITUANIE', 'Lituania', 'Литва'),
('LU', 'Luxembourg', 'Luxemburg', 'Luxemburgo', 'LUXEMBOURG', 'Lussemburgo', 'Люксембург'),
('LV', 'Latvia', 'Lettland', 'Letonia', 'LETTONIE', 'Lettonia ', 'Латвия'),
('LY', 'Libya', 'Libyen', 'Libia', 'LIBYE', 'Libia ', 'Ливия'),
('MA', 'Morocco', 'Marokko', 'Marruecos', 'MAROC', 'Marocco', 'Марокко'),
('MC', 'Monaco', 'Monaco', 'Mónaco', 'MONACO', 'Monaco ', 'Монако'),
('MD', 'Moldova', 'Moldawien', 'Moldova', 'MOLDOVA', 'Moldavia', 'Молдавия'),
('MG', 'Madagascar', 'Madagaskar', 'Madagascar', 'MADAGASCAR', 'Madagascar ', 'Мадагаскар'),
('MH', 'Marshall Islands', 'Marshallinseln', 'Islas Marshall', 'MARSHALL, ÎLES', 'Isole Marshall', 'Маршалловы Острова'),
('MK', 'Macedonia', 'Mazedonien', 'Macedonia', 'MACÉDOINE, L\'EX-RÉPUBLIQUE YOUGOSLAVE DE', 'Macedonia ', 'Македония'),
('ML', 'Mali', 'Mali', 'Mali', 'MALI', 'Mali ', 'Мали'),
('MM', 'Myanmar', 'Myanmar (Burma)', 'Myanmar', 'MYANMAR', 'Birmania', 'Мьянма'),
('MN', 'Mongolia', 'Mongolei', 'Mongolia', 'MONGOLIE', 'Mongolia', 'Монголия'),
('MO', 'Macao S.A.R., China', 'Macau', 'Macao', 'MACAO', 'Macao ', 'Макао'),
('MP', 'Northern Mariana Islands', 'Nördliche Marianen', 'Islas Marianas del Norte', 'MARIANNES DU NORD, ÎLES', 'Isole Marianne Settentrionali', 'Северные Марианские острова'),
('MQ', 'Martinique', 'Martinique', 'Martinica', 'MARTINIQUE', 'Martinica', 'Мартиника'),
('MR', 'Mauritania', 'Mauretanien', 'Mauritania', 'MAURITANIE', 'Mauritania', 'Мавритания'),
('MS', 'Montserrat', 'Montserrat', 'Montserrat', 'MONTSERRAT', 'Montserrat', 'Монтсеррат'),
('MT', 'Malta', 'Malta', 'Malta', 'MALTE', 'Malta ', 'Мальта'),
('MU', 'Mauritius', 'Mauritius', 'Mauricio', 'MAURICE', 'Mauritius', 'Маврикий'),
('MV', 'Maldives', 'Malediven', 'Maldivas', 'MALDIVES', 'Maldive ', 'Мальдивы'),
('MW', 'Malawi', 'Malawi', 'Malawi', 'MALAWI', 'Malawi ', 'Малави'),
('MX', 'Mexico', 'Mexiko', 'México', 'MEXIQUE', 'Messico ', 'Мексика'),
('MY', 'Malaysia', 'Malaysia', 'Malasia', 'MALAISIE', 'Malesia ', 'Малайзия'),
('MZ', 'Mozambique', 'Mosambik', 'Mozambique', 'MOZAMBIQUE', 'Mozambico', 'Мозамбик'),
('NA', 'Namibia', 'Namibia', 'Namibia', 'NAMIBIE', 'Namibia ', 'Намибия'),
('NC', 'New Caledonia', 'Neukaledonien', 'Nueva Caledonia', 'NOUVELLE-CALÉDONIE', 'Nuova Caledonia', 'Новая Каледония'),
('NE', 'Niger', 'Niger', 'Níger', 'NIGER', 'Niger ', 'Нигер'),
('NF', 'Norfolk Island', 'Norfolkinsel', 'Islas Norkfolk', 'NORFOLK, ÎLE', 'Isola Norfolk', 'Остров Норфолк'),
('NG', 'Nigeria', 'Nigeria', 'Nigeria', 'NIGÉRIA', 'Nigeria ', 'Нигерия'),
('NI', 'Nicaragua', 'Nicaragua', 'Nicaragua', 'NICARAGUA', 'Nicaragua', 'Никарагуа'),
('NL', 'Netherlands', 'Niederlande', 'Países Bajos', 'PAYS-BAS', 'Paesi Bassi', 'Нидерланды'),
('NO', 'Norway', 'Norwegen', 'Noruega', 'NORVÈGE', 'Norvegia ', 'Норвегия'),
('NP', 'Nepal', 'Nepal', 'Nepal', 'NÉPAL', 'Nepal ', 'Непал'),
('NR', 'Nauru', 'Nauru', 'Nauru', 'NAURU', 'Nauru ', 'Науру'),
('NU', 'Niue', 'Niue', 'Niue', 'NIUÉ', 'Niue ', 'Ниуэ'),
('NZ', 'New Zealand', 'Neuseeland', 'Nueva Zelanda', 'NOUVELLE-ZÉLANDE', 'Nuova Zelanda', 'Новая Зеландия'),
('OM', 'Oman', 'Oman', 'Omán', 'OMAN', 'Oman ', 'Оман'),
('PA', 'Panama', 'Panama', 'Panamá', 'PANAMA', 'Panamá', 'Панама'),
('PE', 'Peru', 'Peru', 'Perú', 'PÉROU', 'Perù ', 'Перу'),
('PF', 'French Polynesia', 'Französisch-Polynesien', 'Polinesia Francesa', 'POLYNÉSIE FRANÇAISE', 'Polinesia Francese ', 'Французская Полинезия'),
('PG', 'Papua New Guinea', 'Papua-Neuguinea', 'Papúa Nueva Guinea', 'PAPOUASIE-NOUVELLE-GUINÉE', 'Papua Nuova Guinea ', 'Папуа — Новая Гвинея'),
('PH', 'Philippines', 'Philippinen', 'Filipinas', 'PHILIPPINES', 'Filippine ', 'Филиппины'),
('PK', 'Pakistan', 'Pakistan', 'Pakistán', 'PAKISTAN', 'Pakistan ', 'Пакистан'),
('PL', 'Poland', 'Polen', 'Polonia', 'POLOGNE', 'Polonia ', 'Польша'),
('PM', 'Saint Pierre and Miquelon', 'St. Pierre und Miquelon', 'San Pedro y Miquelón', 'SAINT-PIERRE-ET-MIQUELON', 'Saint-Pierre e Miquelon', 'Сен-Пьер и Микелон'),
('PN', 'Pitcairn', 'Pitcairninseln', 'Islas Pitcairn', 'PITCAIRN', 'Isole Pitcairn ', 'Острова Питкэрн'),
('PR', 'Puerto Rico', 'Puerto Rico', 'Puerto Rico', 'PORTO RICO', 'Porto Rico ', 'Пуэрто-Рико'),
('PS', 'Palestine', 'Palästina', 'Palestina', 'ÉTAT DE PALESTINE', 'Palestina ', 'Государство Палестина'),
('PT', 'Portugal', 'Portugal', 'Portugal', 'PORTUGAL', 'Portogallo ', 'Португалия'),
('PW', 'Palau', 'Palau', 'Islas Palaos', 'PALAOS', 'Palau ', 'Палау'),
('PY', 'Paraguay', 'Paraguay', 'Paraguay', 'PARAGUAY', 'Paraguay ', 'Парагвай'),
('QA', 'Qatar', 'Katar', 'Qatar', 'QATAR', 'Qatar ', 'Катар'),
('RE', 'Reunion', 'Réunion', 'Reunión', 'RÉUNION', 'Riunione ', 'Реюньон'),
('RO', 'Romania', 'Rumänien', 'Rumanía', 'ROUMANIE', 'Romania ', 'Румыния'),
('RU', 'Russia', 'Russische Föderation', 'Rusia', 'RUSSIE, FÉDÉRATION DE', 'Russia ', 'Россия'),
('RW', 'Rwanda', 'Ruanda', 'Ruanda', 'RWANDA', 'Ruanda ', 'Руанда'),
('SA', 'Saudi Arabia', 'Saudi-Arabien', 'Arabia Saudita', 'ARABIE SAOUDITE', 'Arabia Saudita', 'Саудовская Аравия'),
('SB', 'Solomon Islands', 'Salomonen', 'Islas Solomón', 'SALOMON, ÎLES', 'Isole Salomone', 'Соломоновы Острова'),
('SC', 'Seychelles', 'Seychellen', 'Seychelles', 'SEYCHELLES', 'Seychelles', 'Сейшельские Острова'),
('SD', 'Sudan', 'Sudan', 'Sudán', 'SOUDAN', 'Sudan ', 'Судан'),
('SE', 'Sweden', 'Schweden', 'Suecia', 'SUÈDE', 'Svezia', 'Швеция'),
('SG', 'Singapore', 'Singapur', 'Singapur', 'SINGAPOUR', 'Singapore', 'Сингапур'),
('SH', 'Saint Helena', 'St. Helena', 'Santa Elena', 'SAINTE-HÉLÈNE, ASCENSION ET TRISTAN DA CUNHA', 'Sant\'Elena, Ascensione e Tristan da Cunha', 'Острова Святой Елены, Вознесения и Тристан-да-Кунья'),
('SI', 'Slovenia', 'Slowenien', 'Eslovenia', 'SLOVÉNIE', 'Slovenia Slovenia', 'Словения'),
('SJ', 'Svalbard and Jan Mayen', 'Svalbard und Jan Mayen', 'Islas Svalbard y Jan Mayen', 'SVALBARD ET ÎLE JAN MAYEN', 'Svalbard e Jan Mayen', 'Флаг Шпицбергена и Ян-Майена Шпицберген и Ян-Майен'),
('SK', 'Slovakia', 'Slowakei', 'Eslovaquia', 'SLOVAQUIE', 'Slovacchia ', 'Словакия'),
('SL', 'Sierra Leone', 'Sierra Leone', 'Sierra Leona', 'SIERRA LEONE', 'Sierra Leone', 'Сьерра-Леоне'),
('SM', 'San Marino', 'San Marino', 'San Marino', 'SAINT-MARIN', 'San Marino ', 'Сан-Марино'),
('SN', 'Senegal', 'Senegal', 'Senegal', 'SÉNÉGAL', 'Senegal ', 'Сенегал'),
('SO', 'Somalia', 'Somalia', 'Somalia', 'SOMALIE', 'Somalia ', 'Сомали'),
('SR', 'Suriname', 'Suriname', 'Surinam', 'SURINAME', 'Suriname', 'Суринам'),
('ST', 'Sao Tome and Principe', 'São Tomé und Príncipe', 'Santo Tomé y Príncipe', 'SAO TOMÉ-ET-PRINCIPE', 'São Tomé e Príncipe', 'Сан-Томе и Принсипи'),
('SV', 'El Salvador', 'El Salvador', 'El Salvador', 'EL SALVADOR', 'El Salvador ', 'Сальвадор'),
('SY', 'Syria', 'Syrien', 'Siria', 'SYRIENNE, RÉPUBLIQUE ARABE', 'Siria ', 'Сирия'),
('SZ', 'Swaziland', 'Swasiland', 'Suazilandia', 'SWAZILAND', 'Swaziland', 'Свазиленд'),
('TC', 'Turks and Caicos Islands', 'Turks- und Caicosinseln', 'Islas Turcas y Caicos', 'TURKS ET CAÏQUES, ÎLES', 'Turks e Caicos ', 'Тёркс и Кайкос'),
('TD', 'Chad', 'Tschad', 'Chad', 'TCHAD', 'Ciad ', 'Чад'),
('TF', 'French Southern Territories', 'Französische Süd- und Antarktisgebiete', 'Territorios Australes Franceses', 'TERRES AUSTRALES FRANÇAISES', 'Terre australi e antartiche francesi', 'Французские Южные и Антарктические Территории'),
('TG', 'Togo', 'Togo', 'Togo', 'TOGO', 'Togo ', 'Того'),
('TH', 'Thailand', 'Thailand', 'Tailandia', 'THAÏLANDE', 'Thailandia', 'Таиланд'),
('TJ', 'Tajikistan', 'Tadschikistan', 'Tayikistán', 'TADJIKISTAN', 'Tagikistan', 'Таджикистан'),
('TK', 'Tokelau', 'Tokelau', 'Tokelau', 'TOKELAU', 'Tokelau ', 'Токелау'),
('TL', 'East Timor', 'Timor-Leste', 'Timor-Leste', 'TIMOR-LESTE', 'Timor Est', 'Восточный Тимор'),
('TM', 'Turkmenistan', 'Turkmenistan', 'Turkmenistán', 'TURKMÉNISTAN', 'Turkmenistan', 'Туркмения'),
('TN', 'Tunisia', 'Tunesien', 'Túnez', 'TUNISIE', 'Tunisia ', 'Тунис'),
('TO', 'Tonga', 'Tonga', 'Tonga', 'TONGA', 'Tonga ', 'Тонга'),
('TR', 'Turkey', 'Türkei', 'Turquía', 'TURQUIE', 'Turchia', 'Турция'),
('TT', 'Trinidad and Tobago', 'Trinidad und Tobago', 'Trinidad y Tobago', 'TRINITÉ-ET-TOBAGO', 'Trinidad e Tobago', 'Тринидад и Тобаго'),
('TV', 'Tuvalu', 'Tuvalu', 'Tuvalu', 'TUVALU', 'Tuvalu ', 'Тувалу'),
('TW', 'Taiwan', 'Taiwan', 'Taiwán', 'TAÏWAN, PROVINCE DE CHINE', 'Taiwan ', 'Китайская Республика'),
('TZ', 'Tanzania', 'Tansania', 'Tanzania', 'TANZANIE, RÉPUBLIQUE UNIE DE', 'Tanzania ', 'Танзания'),
('UA', 'Ukraine', 'Ukraine', 'Ucrania', 'UKRAINE', 'Ucraina ', 'Украина'),
('UG', 'Uganda', 'Uganda', 'Uganda', 'OUGANDA', 'Uganda ', 'Уганда'),
('UM', 'United States Minor Outlying Islands', 'Amerikanisch-Ozeanien', 'Islas menores periféricas de los Estados Unidos', 'ÎLES MINEURES ÉLOIGNÉES DES ÉTATS-UNIS', 'Isole minori esterne degli Stati Uniti', 'Внешние малые острова (США)'),
('US', 'United States', 'Vereinigte Staaten von Amerika', 'Estados Unidos de América', 'ÉTATS-UNIS', 'Stati Uniti', 'США'),
('UY', 'Uruguay', 'Uruguay', 'Uruguay', 'URUGUAY', 'Uruguay ', 'Уругвай'),
('UZ', 'Uzbekistan', 'Usbekistan', 'Uzbekistán', 'OUZBÉKISTAN', 'Uzbekistan', 'Узбекистан'),
('VA', 'Vatican', 'Vatikanstadt', 'Ciudad del Vaticano', 'SAINT-SIÈGE (ÉTAT DE LA CITÉ DU VATICAN)', 'Città del Vaticano', 'Ватикан'),
('VC', 'Saint Vincent and the Grenadines', 'St. Vincent und die Grenadinen', 'San Vicente y las Granadinas', 'SAINT-VINCENT-ET-LES-GRENADINES', 'Saint Vincent e Grenadine', 'Сент-Винсент и Гренадины'),
('VE', 'Venezuela', 'Venezuela', 'Venezuela', 'VENEZUELA, RÉPUBLIQUE BOLIVARIENNE DU', 'Venezuela ', 'Венесуэла'),
('VG', 'British Virgin Islands', 'Britische Jungferninseln', 'Islas Vírgenes Británicas', 'ÎLES VIERGES BRITANNIQUES', 'Isole Vergini britanniche ', 'Британские Виргинские острова'),
('VI', 'U.S. Virgin Islands', 'Amerikanische Jungferninseln', 'Islas Vírgenes de los Estados Unidos de América', 'ÎLES VIERGES DES ÉTATS-UNIS', 'Isole Vergini americane ', 'Виргинские Острова (США)'),
('VN', 'Vietnam', 'Vietnam', 'Vietnam', 'VIET NAM', 'Vietnam', 'Вьетнам'),
('VU', 'Vanuatu', 'Vanuatu', 'Vanuatu', 'VANUATU', 'Vanuatu', 'Вануату'),
('WF', 'Wallis and Futuna', 'Wallis und Futuna', 'Wallis y Futuna', 'WALLIS-ET-FUTUNA', 'Wallis e Futuna', 'Уоллис и Футуна'),
('WS', 'Samoa', 'Samoa', 'Samoa', 'SAMOA', 'Samoa ', 'Самоа'),
('YE', 'Yemen', 'Jemen', 'Yemen', 'YÉMEN', 'Yemen ', 'Йемен'),
('YT', 'Mayotte', 'Mayotte', 'Mayotte', 'MAYOTTE', 'Mayotte ', 'Майотта'),
('ZA', 'South Africa', 'Südafrika', 'Sudáfrica', 'AFRIQUE DU SUD', 'Sudafrica ', 'ЮАР'),
('ZM', 'Zambia', 'Sambia', 'Zambia', 'ZAMBIE', 'Zambia ', 'Замбия'),
('ZW', 'Zimbabwe', 'Simbabwe', 'Zimbabue', 'ZIMBABWE', 'Zimbabwe', 'Зимбабве'),
('RS', 'Serbia', 'Serbien', 'Serbia', 'SERBIE', 'Serbia ', 'Сербия'),
('ME', 'Montenegro', 'Montenegro', 'Montenegro', 'MONTÉNÉGRO', 'Montenegro', 'Черногория'),
('BL', 'Saint Barthelemy !Saint Barthélemy', 'Saint-Barthélemy', 'Saint Barthélemy', 'SAINT-BARTHÉLEMY', 'Saint-Barthélemy', 'Сен-Бартелеми'),
('BQ', 'Bonaire, Sint Eustatius and Saba', 'Bonaire, Sint Eustatius und Saba', 'Bonaire, San Eustaquio y Saba', 'BONAIRE, SAINT-EUSTACHE ET SABA', 'Isole BES', 'Синт-Эстатиус и Саба'),
('CW', 'Curacao !Curaçao', 'Curaçao', 'Curaçao', 'CURAÇAO', 'Curaçao', 'Кюрасао'),
('MF', 'Saint Martin (French part)', 'Saint-Martin (franz. Teil)', 'Saint Martin (parte francesa)', 'SAINT-MARTIN (PARTIE FRANÇAISE)', 'Saint-Martin', 'Сен-Мартен'),
('SX', 'Sint Maarten (Dutch part)', 'Sint Maarten (niederl. Teil)', 'Sint Maarten (parte neerlandesa)', 'SAINT-MARTIN (PARTIE NÉERLANDAISE)', 'Sint Maarten ', 'Синт-Мартен'),
('SS', 'South Sudan', 'Sudsudan!Südsudan', 'Sudán del Sur', 'SOUDAN DU SUD', 'Sudan del Sud', 'Южный Судан');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `salutation_id` int(1) NOT NULL,
  `customerType_id` int(1) NOT NULL,
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
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `homepage` varchar(150) NOT NULL,
  `loginActive` int(1) NOT NULL,
  `newsletter` int(1) NOT NULL,
  `customerToken` varchar(256) NOT NULL,
  `hash` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `customers`
--

INSERT INTO `customers` (`id`, `salutation_id`, `customerType_id`, `company`, `address`, `zip`, `location`, `country_code`, `firstname`, `surname`, `mobile`, `phone`, `fax`, `email`, `password`, `homepage`, `loginActive`, `newsletter`, `customerToken`, `hash`) VALUES
(1, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq'),
(2, 1, 1, 'simplysoftware', 'Kernerstraße 4', '97980', 'Bad Mergentheim', 'DE', 'Sebastian', 'Wulf', '0151562562626', '191918728', '', 'sebastian@wulf.email', '$2y$10$.MhC3z2IAtmMN8z42yV61uSQqs1T5uwb/.c8bgxHBSkN8Qg3Ep4hm', 'https://www.simplysoftware.de', 1, 1, '', NULL),
(3, 1, 1, '{$company}', '{$address}', '{$zip}', '{$location}', 'DE', '{$firstname}', '{$surname}', '{$mobile}', '{$phone}', '{$fax}', '{$mail}', '', '{$homepage}', 1, 1, '{$customerToken}', NULL),
(4, 1, 1, '{$company}', '{$address}', '{$zip}', '{$location}', 'DE', '{$firstname}', '{$surname}', '{$mobile}', '{$phone}', '{$fax}', '{$mail}', '', '{$homepage}', 1, 1, '{$customerToken}', NULL),
(5, 1, 1, '$company', '{$address}', '{$zip}', '{$location}', 'DE', '{$firstname}', '{$surname}', '{$mobile}', '{$phone}', '{$fax}', '{$mail}', '', '{$homepage}', 1, 1, '{$customerToken}', NULL),
(6, 1, 1, 'test', '{$address}', '{$zip}', '{$location}', 'DE', '{$firstname}', '{$surname}', '{$mobile}', '{$phone}', '{$fax}', '{$mail}', '', '{$homepage}', 1, 1, '{$customerToken}', NULL),
(7, 1, 1, 'sfdfsdg', '', '123', '', '', '', '', '', '', '', '', '', '', 0, 0, '751c4c635031e813d464df5a49367be5d6f0c977f66f604a79eafb5e76d2cbb23abd68f979701a25633aa59b73ce3351b0ede58c8ef2d013933b9a303bdea4c98c5a62814f006bd6c6064ec238d25ba528ca2a52c98779e06b1537d92888bf6ca1bd11760695ebf39714f7e269bf7406e6adcae234af8033973ec50d514ad7ca', NULL),
(8, 1, 1, 'sfdfsdg', '', '123', '', '', '', '', '', '', '', '', '', '', 0, 0, '39a11cc40342a04cd65274430c316eba57bc136623ef0f0dbf9135d7b082470b36d2cfa705e3349ea48c93f010f31f907eedcb4848e1a339acaa16c317641f57c61a149497a2d92927b92502ad77f6b451baa8929609a8bc92a9348ec990efdea69ee15cbe9ac3542c9c733c0ff7e247967b1413a7e224b690c9ac1e83889b6c', NULL),
(9, 1, 1, 'sfdfsdg', '', '123', '', '', '', '', '', '', '', '', '', '', 0, 0, '8708127dba5749e5f42353debc51c6ca87940585685e27e99fcba0af40174ce277ea098f14eb51ddb6559691e7a6b11bb89754a0fe76e300e720c09927a5058ea7a7ffebc19bbe5b2a407da3a526790cd3d9b7bf29ec7833391ffeab57f6100f084b3f84fc08988c8768180ce7ba62089472511616cf3d007d78ca2bcae2a431', NULL),
(10, 1, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '8c0dd875fbd9715eae867adb99f683e5f4abe2d9e7c0efff2e52658ea34038b15b00a2722f81dfd4552945ba67dcc8f52c68428d5ca492ced9e102e9a501c59f9ad2d653ae2df32504a22913835a91fe544f8067da5d7533a5a5366d0d6e81e7226040681745afb13061bc78664dda439f5bd46e565136d15b37881b258d73d0', NULL),
(11, 1, 1, '', '', '', 'dd', '', '', '', '', '', '', '', '', '', 0, 0, '9cbc0c3594c8154b2cb643451625c37173da686355d33eef548eed4906f7253e44074d40cc12753772c0f68a5d0dc1f2a5ee7471a7179ae934cf3e9d6ee7e6598e3cb55909ad5f11febc840aa579ca7ae84781a991c82094669d542a5a57be36e57b9281f2d4d9517054e1deff1247d19b50545faa5252e6a6c94d744a3afdc7', NULL),
(12, 1, 1, '', '', '', 'dd', '', '', '', '', '', '', '', '', '', 0, 0, '93e4d979b58f1b701f0d9b858cad4551c4e339ddcfa37b9dca30aab248d09295876ca3aa4467ed9cf97f2bc4568ea0afe2fb8f1cd112f083c731c8ed8ee80c0096222ff0de4884d396fc4d52281c3e6d0bdb7e2d4372b6b625ce2d033259571aadcb1b31fcd434983c1259f16af0890e691e1a6ed3d3119b67330777e83597e8', NULL),
(13, 1, 1, 'ddd', '', '', '', 'DE', '', '', '', '', '', '', '', '', 0, 0, 'e94f0a38e0eaee5c750f87cdc7b2e5560f8111356f5260bce3dafaeb4d21d0cb1421b9c53a4534306f653b2d00c9ed5d1d90375f9d7f97a1cb1203c1dafb3c99a147276fbeea5dffaf57195e0315dfdf47d577e3af5761ca94584b6d97055c001a36acea291d7e8f28a5a075de50664700e572d9e33d83439e1ee1448a2af281', NULL),
(14, 1, 1, '', '', '', '', 'DE', '', '', '', '', '', '', '', '', 0, 0, 'b1f52090cd1892fa4cb653f5dcee6db70f2c17741b2b2946b05ebba622212c954c49fb520eda24a115de12400774264253e60b44b8dc5bb2bfad9a5879ff8634437475f4036912ceea816d583a0baa1821dc4d9a6315f476c639d145ff519fc3eb9e0a5a059f4b8fd34042d643bd7560dbe80803991187b0633680827f1bc856', NULL),
(15, 1, 1, '', '', '', '', 'DE', 'dd', 'dd', '', '', '', '', '', '', 0, 0, '175f7947b624163d1d0463d903cd74dc08fd1bd9949c966e0395420ef198bd0c7c17baa5d51fdff2b1c572c3031a4f7b0ff53e53c51990dbd8550b63afe91cc6dc5c8848394a6df13e70db9bbfa8566f8ed7ad0f63f2b7a35faa48fb7f703d5ceb5a437d2b56ad39a19aae8e07aae8c9bc46db8ff676fe3140a6f26a5e784d96', NULL),
(16, 1, 1, '', '', '', '', 'DE', 'ee', 'ee', '', '', '', '', '', '', 0, 0, '9da2fe6500b10c29a48fbb3085bf3994f95e5ddbeb58e4b3a5f100c2c4c1b3043f7f27a0b3c74e943a7a81d425c45d669be34ca15790b7e9038ab7e0a149853d31e71b71f5ef873bfd31b2a303052158b4e0f08a83e1e760e250cc2e127b85d0429526fab038297bdb5f28f92bc8a2b2294b9f44db1bf8743caec52a8ad94b59', NULL),
(17, 1, 1, '', '', '', '', 'DE', 'ee', 'ee', '', '', '', '', '', '', 0, 0, 'e0a35280c8ccbe10e191943b4e9d66c409fad01b19b20425b43c1f6066da36ede561ddbfa2f45446a4572d6d2884ccbbffef6f44838b486e88d822a826ec13a4fa732ae571ba0f8620c6e92d8fed54c6cf8d8e1888c200be1d60290a36e2faf47fc36e4fb5a4902b919678fc7ab50f2eabebb21ebc944e825f7174f9e09a15ed', NULL),
(18, 1, 1, '', '', '', '', 'DE', 'ee', 'ee', '', '', '', '', '', '', 0, 0, 'eff672ef1ec8ca22f4e7c2a1eef0e98f0b05e4e5bbdf36074dce1988ecad2d17160e643f9d6e42d5d5f197a863be44e37910f9c6315b075079e0c29155ce2302ca052533cd61c156e7495e1a7ecb60a239ace72d9849cf069c779d0fecac01b6742bcdd94adbd3a6f56a00dbc2cd9fa5aeb3925e72b942b53a43177f02a8a4f1', NULL),
(19, 1, 1, '', '', '', '', 'DE', 'ee', 'ee', '', '', '', '', '', '', 0, 0, '91041674db8db037b3979ca16cf72d0c539e3597016ddf0651acb243038df7a300a4e64d62ef8d8f496a287093d13ed29009cb6fdfa72fecd2f6158d1e5e32cb59b62d518294c582438619fad6f8d24761435c61e70701d73d9689ff963e0bbca379ac47a6295499938274f5a5d39bcf9f1faa8a7e8c11736958b70577594060', NULL),
(20, 1, 1, '', '', '', '', 'DE', 'cc', 'cc', '', '', '', '', '', '', 1, 0, 'ec39b40ef7812df1200b6bcaa41339648a4873136e52318702abdb6371291044ace6c6f6fa03d9182bff69eea9c9137a858694768de85cc0fe4f8c9435380a164b775e168a4da1231a6121b427eb17f2bd37aca782cb306b1f63f1e932e3a81eefa3a67d372f0548f4c3eb1bbe7a6c5e844ed61e36e9e14c8318cc7f595bb6f2', NULL),
(21, 1, 1, '', '', '', '', 'DE', 'ss', 'ss', '', '', '', '', '', '', 1, 1, 'b72da610a96a673b4708dc41d37d0ff30576e5ea832869e1559525b129c5e663635b9a2396becc262b042624df172bdbc9b7e2a0a9c1b19dc300cb1dc2ee4a2a1e4d99dd6fd9fd158ac2278d2b48c2e9d65c53b81c383b2b0db6349833c1fb1c2b487499a3548838366839b5e154c382e992aa9cac1491e9583360aff6ca551d', NULL),
(22, 1, 1, '', '', '', '', 'DE', 'dd', 'dd', '', '', '', '', '', '', 0, 0, '861416530fe8723f6bdc96873a0f6155fd77bec10397267b7b265e6a73be6d05c99a7c084c4dd2265edef152a6cb535ae4d228414e780d7904795773dc5abe0a2674e2a400d5e419102032f2ac83352562979ae49e9440a59b3992fe7bb9b23d44177ee1d97ab98bbc8c059bcb305e77c4b26325fd4a7260c6ab65c14a14cb2b', NULL),
(23, 1, 1, '', '', '', '', 'DE', 'ewrr', 'verehr', '', '', '', '', '', '', 0, 0, 'f76628fbf9e56526964d7e22863d8964dcebde9373a431e20a7fd878a0d25bbd9b0f357ef26508a4d78ad9d749d15593dc0316902a71bb00921ea13346ed00f3b42f407684f0c05495a9c023f0d4b913d5b61f78ad7a197e6f137d0695013f48ead241e1cc1f92a13a8df5d36f2d7e3fa088e8227a3e52562299befef2bfc0c4', NULL),
(24, 1, 1, '', '', '', '', 'DE', 'dd', 'dd', '', '', '', '', '', '', 0, 0, 'f21e8539b550c57c818c8e3e3236ced63ffc7baf5b505913d8a22aef6517b991bdbd554f3e5f1857e98e6937e4ea3f5645c67c531e4f5a0412fa8c13596e3b32b4d73348410419681c88a31694d9d52b423fd652b54dbed3a121628ca00749c564733fd7151ff91d295dc0ce6f4977803732d862c7630e58cf30829715aa20a4', NULL),
(25, 1, 1, '', '', '', '', 'DE', 'rer', 'erer', '', '', '', '', '', '', 0, 0, '4727091ce55c3058d4d135f36903a457ab86dc6eac0e786fff2b43f3ee12a6a1546910fd0f2a3894f7fef0b31641250300996ed0114b134e6526f69462558b9cdb85a10d4855fb67443e5e34c0142384d9601119b0636a511820862b7e538a1419adb5385daf52b1c691c5b172b2c3ea04318729aeadbbca269e44500166c64b', NULL),
(26, 1, 1, '', '', '', '', 'DE', 'rer', 'erer', '', '', '', '', '', '', 0, 0, 'e13193aca55b1ec96522df8866abb6a2fd22227b1663e076780adf9789ebcb0c20ecf53af6e46ec1cd7c5ee5fbcab6354a86c405b242b0a72f35777c551ad924b41bd6dda124ba9518163156220eb547a7ee430e5771e92f48286107c913d68ca8011f821650b8ffed4f986760a0133d13ceb82593830d6e5243e2cac062ae39', NULL),
(27, 1, 1, 'simplysoftware.de', 'Kernerstraße 4', '97980', 'Bad Mergentheim', 'DE', 'Sebastian', 'Wulf', '0151', '01111', '15151', 'seb.wulf@wulf.de', '', 'www.page.de', 1, 1, '1f1bf5c9443d85c2cd6c3c1fe50cc0c2b7aa4343a71a2f7e4d77a440c2c32377e7766fc1a4d180fd0c6a931eb9dadd71093d615cb52f389dae7c3dd75e3bef7d930cdf7d4450d31c0573b49526d3b447e3ed88de1a7c547c99ac4b6ca7ddbdb0d2cf7f86adf2a1defb7f9e1352664bbb1454bef674c0d59465c81fe1e83a9ae3', NULL),
(28, 1, 1, '', '', '', '', 'DE', 'sdfdsf', 'sdfsdf', '', '', '', '', '', '', 0, 0, '7432ef880199cc56c62ef6b02347f9e10457b3368308c2e1ddf43e06e71b9c372a4a0cd57a23e5211a6f01a08a5c7b2e4beda7751c395ba462a1249b5762bc6a259f4285ba33ed01585381e4aab9cf30f8bfa5d474e407e21a081cbb60d6864a7be7a6281b8087491dbbe596cf4e00e6c523d07a7b9552e658c58a4901bdecd3', NULL),
(29, 1, 1, 'Sebastian Wulf AG', 'Kernerstraße 4', '97980', 'Bad Mergentheim', 'DE', 'Sebastian', 'Wulf', '', '', '', '', '', '', 1, 1, '7908155976a9bf60a9646bc5f9a91c1663174211712c87b67ad1cab4db6d427c75e36e890bca879f9c95cee98cf051c4a9198ce6ae347d68a858f27b032bf3699c348188d3d2759a21e0b9434ec457f40de2f7e527409bc06d35105e56937d241c14b69049bf8bfb5f7e38df386e32c75abb098ba33dd4e00f215eeeb2f3507d', NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customerSalutation`
--

CREATE TABLE `customerSalutation` (
  `salutation_id` int(1) NOT NULL,
  `salutation_DE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `customerSalutation`
--

INSERT INTO `customerSalutation` (`salutation_id`, `salutation_DE`) VALUES
(1, 'Herr'),
(2, 'Frau');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customerType`
--

CREATE TABLE `customerType` (
  `customerType_id` int(1) NOT NULL,
  `customerType_DE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `customerType`
--

INSERT INTO `customerType` (`customerType_id`, `customerType_DE`) VALUES
(1, 'Firmenkunde'),
(2, 'Privatkunde');

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
-- Tabellenstruktur für Tabelle `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) NOT NULL,
  `dateCreated` date NOT NULL,
  `invoiceNumber` varchar(50) NOT NULL,
  `status` int(1) NOT NULL COMMENT '0 = open\r\n1 = paid\r\n2 = canceled ',
  `paymentTarget` date NOT NULL,
  `id_customers` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `invoice`
--

INSERT INTO `invoice` (`id`, `dateCreated`, `invoiceNumber`, `status`, `paymentTarget`, `id_customers`) VALUES
(1, '2022-04-30', '1234', 0, '2022-05-10', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `item`
--

CREATE TABLE `item` (
  `id` int(10) NOT NULL,
  `itemNumber` varchar(30) NOT NULL,
  `ean` varchar(50) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `itemText` text NOT NULL,
  `priceNet` varchar(10) NOT NULL,
  `priceGross` varchar(10) NOT NULL,
  `id_unit` int(2) NOT NULL,
  `id_tax` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `item`
--

INSERT INTO `item` (`id`, `itemNumber`, `ean`, `itemName`, `itemText`, `priceNet`, `priceGross`, `id_unit`, `id_tax`) VALUES
(1, '12345', '', 'Fahrrad', 'Ein blaues Fahrrad\r\nohne Helm', '10', '5', 1, 1),
(2, '1233', '', 'Skateboard', 'ohne Holz', '10', '5', 2, 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `itemSold`
--

CREATE TABLE `itemSold` (
  `id` int(10) NOT NULL,
  `id_invoice` int(10) NOT NULL,
  `id_item` int(10) NOT NULL,
  `quantity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `itemSold`
--

INSERT INTO `itemSold` (`id`, `id_invoice`, `id_item`, `quantity`) VALUES
(1, 1, 1, '1'),
(2, 1, 2, '3');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `language`
--

CREATE TABLE `language` (
  `language_id` int(2) NOT NULL,
  `language_code` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `language`
--

INSERT INTO `language` (`language_id`, `language_code`) VALUES
(1, 'DE');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `server_MasterServer`
--

CREATE TABLE `server_MasterServer` (
  `id` int(5) NOT NULL,
  `anyIdentifier` varchar(15) NOT NULL,
  `reseller` int(1) NOT NULL,
  `serverActive` int(1) NOT NULL,
  `ssh2IP` varchar(16) NOT NULL,
  `ftpPort` int(5) DEFAULT NULL,
  `ssh2Port` int(5) NOT NULL,
  `ssh2Username` varchar(50) NOT NULL,
  `ssh2Password` varchar(256) NOT NULL,
  `operatingSystem` int(1) NOT NULL,
  `core` int(3) NOT NULL,
  `ram` int(6) NOT NULL,
  `description` mediumtext NOT NULL,
  `maximumSlots` int(6) NOT NULL,
  `maximumServer` int(6) NOT NULL,
  `MasterServerToken` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `server_MasterServer`
--

INSERT INTO `server_MasterServer` (`id`, `anyIdentifier`, `reseller`, `serverActive`, `ssh2IP`, `ftpPort`, `ssh2Port`, `ssh2Username`, `ssh2Password`, `operatingSystem`, `core`, `ram`, `description`, `maximumSlots`, `maximumServer`, `MasterServerToken`) VALUES
(4, '', 0, 1, '8.8.8.8', 21, 22, '', 'm3Djbqdl', 1, 4, 4096, '', 512, 10, '03eb67debc3b80b327e8533ac3b0a80050e546d5b7b03aeedf7eeb84266a816b6bf8dbd5b4d0e395c64c81337b41a45e078d754053c8ea64d9a102cdb60bb452380859a8c66e32000e96539c78a6ef57cfa93bf7f5861d8648bf656f6b10609f677076193111c8f94a8cd02bcac99a20706b6a2c3181e524432149fceba01155'),
(5, '', 0, 1, '193.164.134.160', 21, 22, '', '', 1, 4, 4096, '', 512, 10, '0dfe510eedeb96271effac41adca57cde3e6ed66bcb5b5189208ca03592ad5104627f3544cd0b2a16a9d6feb32eee317ed71f0cf4270c6f8eed0c491492dceff9b9aa44062d9161ab3577f2de14aa68ea44ace04c1e57696d4eb18465e845fedcfe52ddd8b05998eb63d4fa461290c3b3cadf2f794f1a93d36fe51c44e8b4bd2'),
(7, 'Test', 0, 1, '8.8.8.8', 21, 22, '', 'Bucl33fMMu4B', 1, 4, 4096, '', 512, 10, '94af93e02ec3922679660a6c0bce6802f8562e8584d876bff601431314a9ab8725dfa350515e676624a4d42c5628f3f70f9c0ce722dfe396260bb81be5acc2cd91f939e1ba06015b16d8123012a99c6577b3f727789337a85ff61b7a736f04838d3531927f628bea5f8137b551012ea124393020bb840a46886218d3cc465001'),
(8, '', 0, 1, '10.211.55.14', 21, 22, 'sebastian', 'anFDTHE5YmE4RCtxTmhrbVVWVkdOdz09', 1, 4, 4096, '', 512, 10, 'cf71f07789a3816a0304714ab0d796b91c2b0140ffaecbf3e0572c2a6f1fccf045630a3ed208635ac114d2a6f3facf216fc6bc7d283422868f9f7a3c6ee79877f196216f033900cb6d0e59b723ed7e568754858a087116e18acd386bb0ef89fe1f2340e44368474bc301223ae6d08e976d2d66fb769b3add026393b0f81fb24d'),
(9, '', 0, 1, '192.168.2.153', 21, 22, 'servernauten', 'RUF0Z2RUZXE2K1BINVdmMU9DbW93ajRuTTFBNHpmbk9GVUNJRzBWUlUyaz0=', 1, 4, 4096, '', 512, 10, 'b60b58683c22350679ae89bde85d8cca7f07e9cbc53717369d07e45531f4abdb53edf625c2dbeb372c35fd08d2e74c3e58d03f3e0293422bec4b7f903afff1924bc81b8efd2d312e05c7fe134754c04528ee167beeb65adb30acc95a68650e758e69e8f3571248bc5cb3aad09f5457663b0d2cc32a4740457ffc9e2129e0bcf0');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `setting`
--

CREATE TABLE `setting` (
  `id` int(1) NOT NULL,
  `company` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `setting`
--

INSERT INTO `setting` (`id`, `company`, `address`, `zip`) VALUES
(1, 'servernauten', 'Kernerstraße 4', '97980');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tax`
--

CREATE TABLE `tax` (
  `id` int(2) NOT NULL,
  `tax` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `tax`
--

INSERT INTO `tax` (`id`, `tax`) VALUES
(1, '7'),
(2, '16');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `unit`
--

CREATE TABLE `unit` (
  `id` int(2) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `unit`
--

INSERT INTO `unit` (`id`, `name`) VALUES
(1, 'Stück'),
(2, 'kg');

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
-- Indizes für die Tabelle `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`code`),
  ADD KEY `de` (`DE`),
  ADD KEY `en` (`en`);

--
-- Indizes für die Tabelle `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `customerSalutation`
--
ALTER TABLE `customerSalutation`
  ADD PRIMARY KEY (`salutation_id`);

--
-- Indizes für die Tabelle `customerType`
--
ALTER TABLE `customerType`
  ADD PRIMARY KEY (`customerType_id`);

--
-- Indizes für die Tabelle `datacenter`
--
ALTER TABLE `datacenter`
  ADD PRIMARY KEY (`ip`);

--
-- Indizes für die Tabelle `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `itemSold`
--
ALTER TABLE `itemSold`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`language_id`);

--
-- Indizes für die Tabelle `server_MasterServer`
--
ALTER TABLE `server_MasterServer`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `unit`
--
ALTER TABLE `unit`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT für Tabelle `customerSalutation`
--
ALTER TABLE `customerSalutation`
  MODIFY `salutation_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `customerType`
--
ALTER TABLE `customerType`
  MODIFY `customerType_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `datacenter`
--
ALTER TABLE `datacenter`
  MODIFY `ip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `item`
--
ALTER TABLE `item`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `itemSold`
--
ALTER TABLE `itemSold`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `language`
--
ALTER TABLE `language`
  MODIFY `language_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `server_MasterServer`
--
ALTER TABLE `server_MasterServer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT für Tabelle `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `tax`
--
ALTER TABLE `tax`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
