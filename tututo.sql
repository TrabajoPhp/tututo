-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2013 a las 21:22:37
-- Versión del servidor: 5.6.11
-- Versión de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tututo`
--
CREATE DATABASE IF NOT EXISTS `tututo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tututo`;

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `selecttutorial`(in id integer)
BEGIN
select id_tutorial, autor, titulo, tutorial.imagen, contenido, DATE_FORMAT(fecha, '%d/%m/%Y %h:%i %p') as fecha, 
tipotut, categoriatut, usuario.email from tutorial INNER JOIN usuario ON(tutorial.autor=usuario.nickname) 
where id_tutorial=id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `selecttutoriales`(in mautor varchar(50), in mcategoria integer, in mpalabra varchar(75) )
BEGIN
select * from tutorial INNER JOIN usuario ON(tutorial.autor=usuario.nickname) INNER JOIN categoria ON 
(tutorial.categoriatut=categoria.id_categoria) where (autor=mautor or mautor="") and 
(tutorial.categoriatut=mcategoria or mcategoria=0) and (tutorial.titulo like concat ('%',mpalabra,'%') or mpalabra='')
order by fecha desc;

select count(*) as items from tutorial NNER JOIN usuario ON(tutorial.autor=usuario.nickname) INNER JOIN categoria ON 
(tutorial.categoriatut=categoria.id_categoria) where (autor=mautor or mautor="") and 
(tutorial.categoriatut=mcategoria or mcategoria=0) and (tutorial.titulo like concat ('%',mpalabra,'%') or mpalabra='')
order by fecha desc;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(1, 'Arte'),
(2, 'Automotores'),
(3, 'Cocina'),
(4, 'Deportes'),
(5, 'Fotografia'),
(6, 'Games'),
(7, 'Hagalo Usted Mismo'),
(8, 'Informatica'),
(9, 'Movil'),
(10, 'Musica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pai_pais`
--

CREATE TABLE IF NOT EXISTS `pai_pais` (
  `PAI_PK` int(11) NOT NULL AUTO_INCREMENT,
  `PAI_ISONUM` smallint(6) DEFAULT NULL,
  `PAI_ISO2` char(2) DEFAULT NULL,
  `PAI_ISO3` char(3) DEFAULT NULL,
  `PAI_NOMBRE` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`PAI_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=241 ;

--
-- Volcado de datos para la tabla `pai_pais`
--

INSERT INTO `pai_pais` (`PAI_PK`, `PAI_ISONUM`, `PAI_ISO2`, `PAI_ISO3`, `PAI_NOMBRE`) VALUES
(1, 4, 'AF', 'AFG', 'Afganist'),
(2, 248, 'AX', 'ALA', 'Islas Gland'),
(3, 8, 'AL', 'ALB', 'Albania'),
(4, 276, 'DE', 'DEU', 'Alemania'),
(5, 20, 'AD', 'AND', 'Andorra'),
(6, 24, 'AO', 'AGO', 'Angola'),
(7, 660, 'AI', 'AIA', 'Anguilla'),
(8, 10, 'AQ', 'ATA', 'Ant?rtida'),
(9, 28, 'AG', 'ATG', 'Antigua y Barbuda'),
(10, 530, 'AN', 'ANT', 'Antillas Holandesas'),
(11, 682, 'SA', 'SAU', 'Arabia Saud'),
(12, 12, 'DZ', 'DZA', 'Argelia'),
(13, 32, 'AR', 'ARG', 'Argentina'),
(14, 51, 'AM', 'ARM', 'Armenia'),
(15, 533, 'AW', 'ABW', 'Aruba'),
(16, 36, 'AU', 'AUS', 'Australia'),
(17, 40, 'AT', 'AUT', 'Austria'),
(18, 31, 'AZ', 'AZE', 'Azerbaiy'),
(19, 44, 'BS', 'BHS', 'Bahamas'),
(20, 48, 'BH', 'BHR', 'Bahr?in'),
(21, 50, 'BD', 'BGD', 'Bangladesh'),
(22, 52, 'BB', 'BRB', 'Barbados'),
(23, 112, 'BY', 'BLR', 'Bielorrusia'),
(24, 56, 'BE', 'BEL', 'B?lgica'),
(25, 84, 'BZ', 'BLZ', 'Belice'),
(26, 204, 'BJ', 'BEN', 'Benin'),
(27, 60, 'BM', 'BMU', 'Bermudas'),
(28, 64, 'BT', 'BTN', 'Bhut'),
(29, 68, 'BO', 'BOL', 'Bolivia'),
(30, 70, 'BA', 'BIH', 'Bosnia y Herzegovina'),
(31, 72, 'BW', 'BWA', 'Botsuana'),
(32, 74, 'BV', 'BVT', 'Isla Bouvet'),
(33, 76, 'BR', 'BRA', 'Brasil'),
(34, 96, 'BN', 'BRN', 'Brun'),
(35, 100, 'BG', 'BGR', 'Bulgaria'),
(36, 854, 'BF', 'BFA', 'Burkina Faso'),
(37, 108, 'BI', 'BDI', 'Burundi'),
(38, 132, 'CV', 'CPV', 'Cabo Verde'),
(39, 136, 'KY', 'CYM', 'Islas Caim'),
(40, 116, 'KH', 'KHM', 'Camboya'),
(41, 120, 'CM', 'CMR', 'Camer?n'),
(42, 124, 'CA', 'CAN', 'Canad'),
(43, 140, 'CF', 'CAF', 'Rep?blica Centroafricana'),
(44, 148, 'TD', 'TCD', 'Chad'),
(45, 203, 'CZ', 'CZE', 'Rep?blica Checa'),
(46, 152, 'CL', 'CHL', 'Chile'),
(47, 156, 'CN', 'CHN', 'China'),
(48, 196, 'CY', 'CYP', 'Chipre'),
(49, 162, 'CX', 'CXR', 'Isla de Navidad'),
(50, 336, 'VA', 'VAT', 'Ciudad del Vaticano'),
(51, 166, 'CC', 'CCK', 'Islas Cocos'),
(52, 170, 'CO', 'COL', 'Colombia'),
(53, 174, 'KM', 'COM', 'Comoras'),
(54, 180, 'CD', 'COD', 'Rep?blica Democr?tica del Congo'),
(55, 178, 'CG', 'COG', 'Congo'),
(56, 184, 'CK', 'COK', 'Islas Cook'),
(57, 408, 'KP', 'PRK', 'Corea del Norte'),
(58, 410, 'KR', 'KOR', 'Corea del Sur'),
(59, 384, 'CI', 'CIV', 'Costa de Marfil'),
(60, 188, 'CR', 'CRI', 'Costa Rica'),
(61, 191, 'HR', 'HRV', 'Croacia'),
(62, 192, 'CU', 'CUB', 'Cuba'),
(63, 208, 'DK', 'DNK', 'Dinamarca'),
(64, 212, 'DM', 'DMA', 'Dominica'),
(65, 214, 'DO', 'DOM', 'Rep?blica Dominicana'),
(66, 218, 'EC', 'ECU', 'Ecuador'),
(67, 818, 'EG', 'EGY', 'Egipto'),
(68, 222, 'SV', 'SLV', 'El Salvador'),
(69, 784, 'AE', 'ARE', 'Emiratos ?rabes Unidos'),
(70, 232, 'ER', 'ERI', 'Eritrea'),
(71, 703, 'SK', 'SVK', 'Eslovaquia'),
(72, 705, 'SI', 'SVN', 'Eslovenia'),
(73, 724, 'ES', 'ESP', 'Espa?a'),
(74, 581, 'UM', 'UMI', 'Islas ultramarinas de Estados Unidos'),
(75, 840, 'US', 'USA', 'Estados Unidos'),
(76, 233, 'EE', 'EST', 'Estonia'),
(77, 231, 'ET', 'ETH', 'Etiop'),
(78, 234, 'FO', 'FRO', 'Islas Feroe'),
(79, 608, 'PH', 'PHL', 'Filipinas'),
(80, 246, 'FI', 'FIN', 'Finlandia'),
(81, 242, 'FJ', 'FJI', 'Fiyi'),
(82, 250, 'FR', 'FRA', 'Francia'),
(83, 266, 'GA', 'GAB', 'Gab?n'),
(84, 270, 'GM', 'GMB', 'Gambia'),
(85, 268, 'GE', 'GEO', 'Georgia'),
(86, 239, 'GS', 'SGS', 'Islas Georgias del Sur y Sandwich del Sur'),
(87, 288, 'GH', 'GHA', 'Ghana'),
(88, 292, 'GI', 'GIB', 'Gibraltar'),
(89, 308, 'GD', 'GRD', 'Granada'),
(90, 300, 'GR', 'GRC', 'Grecia'),
(91, 304, 'GL', 'GRL', 'Groenlandia'),
(92, 312, 'GP', 'GLP', 'Guadalupe'),
(93, 316, 'GU', 'GUM', 'Guam'),
(94, 320, 'GT', 'GTM', 'Guatemala'),
(95, 254, 'GF', 'GUF', 'Guayana Francesa'),
(96, 324, 'GN', 'GIN', 'Guinea'),
(97, 226, 'GQ', 'GNQ', 'Guinea Ecuatorial'),
(98, 624, 'GW', 'GNB', 'Guinea-Bissau'),
(99, 328, 'GY', 'GUY', 'Guyana'),
(100, 332, 'HT', 'HTI', 'Hait'),
(101, 334, 'HM', 'HMD', 'Islas Heard y McDonald'),
(102, 340, 'HN', 'HND', 'Honduras'),
(103, 344, 'HK', 'HKG', 'Hong Kong'),
(104, 348, 'HU', 'HUN', 'Hungr'),
(105, 356, 'IN', 'IND', 'India'),
(106, 360, 'ID', 'IDN', 'Indonesia'),
(107, 364, 'IR', 'IRN', 'Ir'),
(108, 368, 'IQ', 'IRQ', 'Iraq'),
(109, 372, 'IE', 'IRL', 'Irlanda'),
(110, 352, 'IS', 'ISL', 'Islandia'),
(111, 376, 'IL', 'ISR', 'Israel'),
(112, 380, 'IT', 'ITA', 'Italia'),
(113, 388, 'JM', 'JAM', 'Jamaica'),
(114, 392, 'JP', 'JPN', 'Jap?n'),
(115, 400, 'JO', 'JOR', 'Jordania'),
(116, 398, 'KZ', 'KAZ', 'Kazajst'),
(117, 404, 'KE', 'KEN', 'Kenia'),
(118, 417, 'KG', 'KGZ', 'Kirguist'),
(119, 296, 'KI', 'KIR', 'Kiribati'),
(120, 414, 'KW', 'KWT', 'Kuwait'),
(121, 418, 'LA', 'LAO', 'Laos'),
(122, 426, 'LS', 'LSO', 'Lesotho'),
(123, 428, 'LV', 'LVA', 'Letonia'),
(124, 422, 'LB', 'LBN', 'L?bano'),
(125, 430, 'LR', 'LBR', 'Liberia'),
(126, 434, 'LY', 'LBY', 'Libia'),
(127, 438, 'LI', 'LIE', 'Liechtenstein'),
(128, 440, 'LT', 'LTU', 'Lituania'),
(129, 442, 'LU', 'LUX', 'Luxemburgo'),
(130, 446, 'MO', 'MAC', 'Macao'),
(131, 807, 'MK', 'MKD', 'ARY Macedonia'),
(132, 450, 'MG', 'MDG', 'Madagascar'),
(133, 458, 'MY', 'MYS', 'Malasia'),
(134, 454, 'MW', 'MWI', 'Malawi'),
(135, 462, 'MV', 'MDV', 'Maldivas'),
(136, 466, 'ML', 'MLI', 'Mal'),
(137, 470, 'MT', 'MLT', 'Malta'),
(138, 238, 'FK', 'FLK', 'Islas Malvinas'),
(139, 580, 'MP', 'MNP', 'Islas Marianas del Norte'),
(140, 504, 'MA', 'MAR', 'Marruecos'),
(141, 584, 'MH', 'MHL', 'Islas Marshall'),
(142, 474, 'MQ', 'MTQ', 'Martinica'),
(143, 480, 'MU', 'MUS', 'Mauricio'),
(144, 478, 'MR', 'MRT', 'Mauritania'),
(145, 175, 'YT', 'MYT', 'Mayotte'),
(146, 484, 'MX', 'MEX', 'M?xico'),
(147, 583, 'FM', 'FSM', 'Micronesia'),
(148, 498, 'MD', 'MDA', 'Moldavia'),
(149, 492, 'MC', 'MCO', 'M?naco'),
(150, 496, 'MN', 'MNG', 'Mongolia'),
(151, 500, 'MS', 'MSR', 'Montserrat'),
(152, 508, 'MZ', 'MOZ', 'Mozambique'),
(153, 104, 'MM', 'MMR', 'Myanmar'),
(154, 516, 'NA', 'NAM', 'Namibia'),
(155, 520, 'NR', 'NRU', 'Nauru'),
(156, 524, 'NP', 'NPL', 'Nepal'),
(157, 558, 'NI', 'NIC', 'Nicaragua'),
(158, 562, 'NE', 'NER', 'N?ger'),
(159, 566, 'NG', 'NGA', 'Nigeria'),
(160, 570, 'NU', 'NIU', 'Niue'),
(161, 574, 'NF', 'NFK', 'Isla Norfolk'),
(162, 578, 'NO', 'NOR', 'Noruega'),
(163, 540, 'NC', 'NCL', 'Nueva Caledonia'),
(164, 554, 'NZ', 'NZL', 'Nueva Zelanda'),
(165, 512, 'OM', 'OMN', 'Om'),
(166, 528, 'NL', 'NLD', 'Pa?ses Bajos'),
(167, 586, 'PK', 'PAK', 'Pakist'),
(168, 585, 'PW', 'PLW', 'Palau'),
(169, 275, 'PS', 'PSE', 'Palestina'),
(170, 591, 'PA', 'PAN', 'Panam'),
(171, 598, 'PG', 'PNG', 'Pap?a Nueva Guinea'),
(172, 600, 'PY', 'PRY', 'Paraguay'),
(173, 604, 'PE', 'PER', 'Per?'),
(174, 612, 'PN', 'PCN', 'Islas Pitcairn'),
(175, 258, 'PF', 'PYF', 'Polinesia Francesa'),
(176, 616, 'PL', 'POL', 'Polonia'),
(177, 620, 'PT', 'PRT', 'Portugal'),
(178, 630, 'PR', 'PRI', 'Puerto Rico'),
(179, 634, 'QA', 'QAT', 'Qatar'),
(180, 826, 'GB', 'GBR', 'Reino Unido'),
(181, 638, 'RE', 'REU', 'Reuni?n'),
(182, 646, 'RW', 'RWA', 'Ruanda'),
(183, 642, 'RO', 'ROU', 'Rumania'),
(184, 643, 'RU', 'RUS', 'Rusia'),
(185, 732, 'EH', 'ESH', 'Sahara Occidental'),
(186, 90, 'SB', 'SLB', 'Islas Salom?n'),
(187, 882, 'WS', 'WSM', 'Samoa'),
(188, 16, 'AS', 'ASM', 'Samoa Americana'),
(189, 659, 'KN', 'KNA', 'San Crist?bal y Nevis'),
(190, 674, 'SM', 'SMR', 'San Marino'),
(191, 666, 'PM', 'SPM', 'San Pedro y Miquel?n'),
(192, 670, 'VC', 'VCT', 'San Vicente y las Granadinas'),
(193, 654, 'SH', 'SHN', 'Santa Helena'),
(194, 662, 'LC', 'LCA', 'Santa Luc'),
(195, 678, 'ST', 'STP', 'Santo Tom? y Pr?ncipe'),
(196, 686, 'SN', 'SEN', 'Senegal'),
(197, 891, 'CS', 'SCG', 'Serbia y Montenegro'),
(198, 690, 'SC', 'SYC', 'Seychelles'),
(199, 694, 'SL', 'SLE', 'Sierra Leona'),
(200, 702, 'SG', 'SGP', 'Singapur'),
(201, 760, 'SY', 'SYR', 'Siria'),
(202, 706, 'SO', 'SOM', 'Somalia'),
(203, 144, 'LK', 'LKA', 'Sri Lanka'),
(204, 748, 'SZ', 'SWZ', 'Suazilandia'),
(205, 710, 'ZA', 'ZAF', 'Sud?frica'),
(206, 736, 'SD', 'SDN', 'Sud'),
(207, 752, 'SE', 'SWE', 'Suecia'),
(208, 756, 'CH', 'CHE', 'Suiza'),
(209, 740, 'SR', 'SUR', 'Surinam'),
(210, 744, 'SJ', 'SJM', 'Svalbard y Jan Mayen'),
(211, 764, 'TH', 'THA', 'Tailandia'),
(212, 158, 'TW', 'TWN', 'Taiw'),
(213, 834, 'TZ', 'TZA', 'Tanzania'),
(214, 762, 'TJ', 'TJK', 'Tayikist'),
(215, 86, 'IO', 'IOT', 'Territorio Brit?nico del Oc?ano ?ndico'),
(216, 260, 'TF', 'ATF', 'Territorios Australes Franceses'),
(217, 626, 'TL', 'TLS', 'Timor Oriental'),
(218, 768, 'TG', 'TGO', 'Togo'),
(219, 772, 'TK', 'TKL', 'Tokelau'),
(220, 776, 'TO', 'TON', 'Tonga'),
(221, 780, 'TT', 'TTO', 'Trinidad y Tobago'),
(222, 788, 'TN', 'TUN', 'T?nez'),
(223, 796, 'TC', 'TCA', 'Islas Turcas y Caicos'),
(224, 795, 'TM', 'TKM', 'Turkmenist'),
(225, 792, 'TR', 'TUR', 'Turqu'),
(226, 798, 'TV', 'TUV', 'Tuvalu'),
(227, 804, 'UA', 'UKR', 'Ucrania'),
(228, 800, 'UG', 'UGA', 'Uganda'),
(229, 858, 'UY', 'URY', 'Uruguay'),
(230, 860, 'UZ', 'UZB', 'Uzbekist'),
(231, 548, 'VU', 'VUT', 'Vanuatu'),
(232, 862, 'VE', 'VEN', 'Venezuela'),
(233, 704, 'VN', 'VNM', 'Vietnam'),
(234, 92, 'VG', 'VGB', 'Islas V?rgenes Brit?nicas'),
(235, 850, 'VI', 'VIR', 'Islas V?rgenes de los Estados Unidos'),
(236, 876, 'WF', 'WLF', 'Wallis y Futuna'),
(237, 887, 'YE', 'YEM', 'Yemen'),
(238, 262, 'DJ', 'DJI', 'Yibuti'),
(239, 894, 'ZM', 'ZMB', 'Zambia'),
(240, 716, 'ZW', 'ZWE', 'Zimbabue');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `tipo`) VALUES
(1, 'publico'),
(2, 'privado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutorial`
--

CREATE TABLE IF NOT EXISTS `tutorial` (
  `id_tutorial` int(11) NOT NULL AUTO_INCREMENT,
  `autor` varchar(50) DEFAULT NULL,
  `titulo` varchar(75) DEFAULT NULL,
  `imagen` binary(1) DEFAULT NULL,
  `contenido` longblob,
  `fecha` datetime NOT NULL,
  `valoracion` int(11) DEFAULT NULL,
  `tipotut` int(11) DEFAULT NULL,
  `categoriatut` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tutorial`),
  KEY `autor` (`autor`),
  KEY `tipotut` (`tipotut`),
  KEY `categoriatut` (`categoriatut`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `tutorial`
--

INSERT INTO `tutorial` (`id_tutorial`, `autor`, `titulo`, `imagen`, `contenido`, `fecha`, `valoracion`, `tipotut`, `categoriatut`) VALUES
(1, 'aliciaR', 'Probando Registros', NULL, 0x6173646173646173642e2e2e2e2e, '0000-00-00 00:00:00', 5, 1, 2),
(2, 'ezequielA', 'Tutorial 02', NULL, 0x436f6e74656e69646f207475746f7269616c203032, '0000-00-00 00:00:00', 5, 2, 3),
(3, 'AlanK', 'Tutorial 03', NULL, 0x6573746520657320656c20636f6e74656e69646f206465206f74726f207475746f7269616c, '0000-00-00 00:00:00', 2, 1, 1),
(4, 'aliciaR', 'Tutorial 4', NULL, 0x636f6e74656e69646f2064656c207475746f7269616c2034, '0000-00-00 00:00:00', 3, 1, 1),
(10, 'ezequielA', 'ertert', NULL, 0x6572747265746572746574, '2013-11-04 15:30:39', NULL, 2, NULL),
(11, 'AlanK', 'werwerwer', NULL, 0x776572776572776572, '2013-11-04 15:32:09', NULL, 2, 1),
(12, 'aliciaR', 'Probando', NULL, 0x707275656261, '2013-11-05 04:30:17', NULL, 2, 2),
(13, 'aliciaR', 'Obra de Arte', NULL, 0x6577727765727765727765720d0a736f6e206c61732031353a30383a33372064656c20323031332d31312d30380d0a0d0a5b, '2013-11-08 19:09:19', NULL, 1, 1),
(14, 'aliciaR', 'eqwew', NULL, 0x5b73697a653d375d5b625d657277727765725b2f625d5b2f73697a655d, '2013-11-08 19:17:36', NULL, 1, 2),
(15, 'aliciaR', 'Probando blob', NULL, 0x657277727765727765727765720d0a0d0a0d0a5b796f75747562655d49783251394542794c44595b2f796f75747562655d0d0a0d0a323031332d31312d31310d0a30393a30323a34320d0a5b625d50727565626120646520746578746f20656e206e6567726974615b2f625d0d0a0d0a5b68725d0d0a5b756c5d0d0a5b6c695d5b625d7365667465726572745b2f625d5b2f6c695d0d0a5b6c695d5b625d65727465725b2f625d5b2f6c695d0d0a5b6c695d5b625d65727465725b2f625d5b2f6c695d0d0a5b6c695d5b625d657274655b2f625d5b2f6c695d0d0a5b6c695d5b625d745b2f625d5b2f6c695d0d0a5b6c695d5b625d657274655b2f625d5b2f6c695d0d0a5b6c695d5b625d72746572745b2f625d5b2f6c695d0d0a5b6c695d5b625d65727465745b2f625d5b2f6c695d0d0a5b2f756c5d0d0a0d0a5b7461626c655d5b74725d5b74645d72746572746572746572745b2f74645d0d0a5b74645d6572746572746572745b2f74645d0d0a5b2f74725d0d0a5b74725d5b74645d6572746572745b2f74645d0d0a5b74645d65727465727465745b2f74645d0d0a5b2f74725d0d0a5b2f7461626c655d0d0a0d0a0d0a5b636f64655d3c68746d6c3e0d0a3c2f68746d6c3e5b2f636f64655d0d0a5b71756f74655d7465727465727465727465720d0a657272797274795b2f71756f74655d0d0a5b75726c3d687474703a2f2f7777772e74757475746f2e636f6d2e61725d456c206c75676172206465207475746f7269616c65735b2f75726c5d, '2013-11-11 13:04:26', NULL, 1, 2),
(16, 'aliciaR', 'dgdg', NULL, 0x7367646764666764670d0a5b625d6667736764676466675b2f625d0d0a5b756c5d0d0a5b6c695d5b625d6466675b2f625d5b2f6c695d0d0a5b6c695d5b625d64675b2f625d5b2f6c695d0d0a5b6c695d5b625d64676466675b2f625d5b2f6c695d0d0a5b6c695d5b625d64675b2f625d5b2f6c695d0d0a5b6c695d5b625d646667645b2f625d5b2f6c695d0d0a5b2f756c5d0d0a5b625d676466676466670d0a323031332d31312d31310d0a30393a33343a32330d0a5b2f625d6466670d0a5b636f64655d3c68746d6c3e0d0a3c2f68746d6c3e5b2f636f64655d0d0a0d0a0d0a5b796f75747562655d694d4230546f75426b54305b2f796f75747562655d0d0a, '2013-11-11 13:35:32', NULL, 2, 2),
(17, 'aliciaR', 'Prueba Conexion Nueva', NULL, 0x5b625d7367646764666764675b2f625d, '2013-11-17 20:57:47', NULL, 2, 2),
(18, 'aliciaR', 'Prueba sdfsf', NULL, 0x3c703e666473667364667364663c2f703e3c703e3c62723e3c2f703e3c703e3c693e7364667364667366733c2f693e3c2f703e3c703e3c693e6664667364663c2f693e3c2f703e3c6f6c3e3c6c693e3c693e676466673c2f693e3c2f6c693e3c6c693e3c693e6466673c2f693e3c2f6c693e3c6c693e3c693e64673c2f693e3c2f6c693e3c6c693e3c693e6466676466673c7370616e20636c6173733d227363656469746f722d73656c656374696f6e207363656469746f722d69676e6f726522207374796c653d226c696e652d6865696768743a20303b20646973706c61793a206e6f6e653b222069643d227363656469746f722d656e642d6d61726b6572223e203c2f7370616e3e3c7370616e20636c6173733d227363656469746f722d73656c656374696f6e207363656469746f722d69676e6f726522207374796c653d226c696e652d6865696768743a20303b20646973706c61793a206e6f6e653b222069643d227363656469746f722d73746172742d6d61726b6572223e203c2f7370616e3e3c62723e3c2f693e3c2f6c693e3c2f6f6c3e, '2013-11-17 21:29:37', NULL, 1, 2),
(19, 'aliciaR', 'Probando', NULL, 0x3c703e3c696d67207372633d22656d6f7469636f6e732f616e67656c2e706e672220646174612d7363656469746f722d656d6f7469636f6e3d223a616e67656c3a2220616c743d223a616e67656c3a22207469746c653d223a616e67656c3a223e3c2f703e3c703e3c696d67207372633d22656d6f7469636f6e732f736d696c652e706e672220646174612d7363656469746f722d656d6f7469636f6e3d223a292220616c743d223a2922207469746c653d223a29223e3c696d67207372633d22656d6f7469636f6e732f736d696c652e706e672220646174612d7363656469746f722d656d6f7469636f6e3d223a292220616c743d223a2922207469746c653d223a29223e2061736466667364667364663c2f703e3c703e3c62723e3c696672616d65207372633d22687474703a2f2f7777772e796f75747562652e636f6d2f656d6265642f4347353063505875775a303f776d6f64653d6f70617175652220646174612d796f75747562652d69643d224347353063505875775a302220616c6c6f7766756c6c73637265656e3d2222206672616d65626f726465723d223022206865696768743d22333135222077696474683d22353630223e3c2f696672616d653e3c2f703e3c68723e3c6120687265663d226d61696c746f3a707275656261407072756562612e636f6d2e6172223e707275656261407072756562612e636f6d2e61723c2f613e3c62723e3c62723e323031332d31312d31373c62723e31373a33363a32373c62723e3c7461626c653e3c74626f64793e3c74723e3c74643e657277727765723c62723e3c2f74643e3c74643e6565777265723c62723e3c2f74643e3c2f74723e3c74723e3c74643e7765726577723c62723e3c2f74643e3c74643e7765727765727765723c62723e3c2f74643e3c2f74723e3c2f74626f64793e3c2f7461626c653e3c62723e3c636f64653e266c743b3f7068703c62723e0909246264203d206e6577206d7973716c6928226c6f63616c686f7374222c22726f6f74222c22222c2274757475746f22293b3c62723e090924726573203d20246264202d2667743b717565727920282273656c656374202a2066726f6d207475746f7269616c22293b3c62723e09097768696c65282466696c613d247265732d2667743b66657463685f6f626a6563742829293c62723e09097b3c62723e0909096563686f202466696c612d2667743b69645f7475746f7269616c2e22266c743b62722667743b223b3c62723e0909096563686f202466696c612d2667743b746974756c6f2e22266c743b62722667743b223b3c62723e09097d3c62723e3f2667743b3c62723e3c2f636f64653e3c62723e3c703e3c666f6e7420636f6c6f723d22236666393939392220666163653d22436f6d69632053616e73204d53222073697a653d2237223e7364667364667364663c2f666f6e743e3c2f703e3c703e3c666f6e7420636f6c6f723d22236666393939392220666163653d22436f6d69632053616e73204d53222073697a653d2237223e3c696d67207372633d22687474703a2f2f687474703a2f2f7777772e6d616e6167656d656e746a6f75726e616c2e6e65742f696d616765732f73746f726965732f436f6e74656e69646f732f4c6964657265735f795f6f70696e696f6e2f41637475616c696461642f3031676f6f676c652e6a706722206865696768743d22333030222077696474683d22333030223e3c7370616e20636c6173733d227363656469746f722d73656c656374696f6e207363656469746f722d69676e6f726522207374796c653d226c696e652d6865696768743a20303b20646973706c61793a206e6f6e653b222069643d227363656469746f722d656e642d6d61726b6572223e203c2f7370616e3e3c7370616e20636c6173733d227363656469746f722d73656c656374696f6e207363656469746f722d69676e6f726522207374796c653d226c696e652d6865696768743a20303b20646973706c61793a206e6f6e653b222069643d227363656469746f722d73746172742d6d61726b6572223e203c2f7370616e3e3c62723e3c2f666f6e743e3c2f703e3c703e3c62723e3c2f703e, '2013-11-17 21:38:34', NULL, 2, 3),
(21, 'ezequielA', 'g', NULL, 0x3c703e676767676767676767676767676767676767623c7370616e2069643d227363656469746f722d656e642d6d61726b65722220636c6173733d227363656469746f722d73656c656374696f6e207363656469746f722d69676e6f726522207374796c653d226c696e652d6865696768743a20303b20646973706c61793a206e6f6e653b223e203c2f7370616e3e3c7370616e2069643d227363656469746f722d73746172742d6d61726b65722220636c6173733d227363656469746f722d73656c656374696f6e207363656469746f722d69676e6f726522207374796c653d226c696e652d6865696768743a20303b20646973706c61793a206e6f6e653b223e203c2f7370616e3e3c2f703e, '2013-11-21 23:47:12', NULL, 1, 1),
(22, 'carlos', 'd', NULL, 0x3c703e6666666666666666666666666666663c7370616e2069643d227363656469746f722d656e642d6d61726b65722220636c6173733d227363656469746f722d73656c656374696f6e207363656469746f722d69676e6f726522207374796c653d226c696e652d6865696768743a20303b20646973706c61793a206e6f6e653b223e203c2f7370616e3e3c7370616e2069643d227363656469746f722d73746172742d6d61726b65722220636c6173733d227363656469746f722d73656c656374696f6e207363656469746f722d69676e6f726522207374796c653d226c696e652d6865696768743a20303b20646973706c61793a206e6f6e653b223e203c2f7370616e3e3c2f703e, '2013-11-21 23:47:32', NULL, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nickname` varchar(50) NOT NULL DEFAULT '',
  `nombre` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `imagen` binary(1) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  PRIMARY KEY (`nickname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nickname`, `nombre`, `password`, `email`, `direccion`, `imagen`, `fecha_nac`) VALUES
('AlanK', 'Alan Kraemer', '123456', 'alankraemermira@gmail.com', 'tablada', NULL, '1990-10-12'),
('aliciaR', 'Alicia Rosenthal', '123456', 'aliciarosenthal@gmail.com', 'defensa 1862', NULL, '1977-05-12'),
('carlos', 'carlos', '1', 'carlos@hotmaoli.cin', 'dfdf', 'a', '0000-00-00'),
('ezequielA', 'Ezequiel Aramburu', '123456', 'ezequi8620@gmail.com', 'san martin 550', NULL, '1990-10-12'),
('manuel.', 'manuel', '1', 'manolo@lala.com', 'AfganistÃ¡n', 'a', '0000-00-00');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tutorial`
--
ALTER TABLE `tutorial`
  ADD CONSTRAINT `tutorial_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `usuario` (`nickname`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tutorial_ibfk_2` FOREIGN KEY (`tipotut`) REFERENCES `tipo` (`id_tipo`),
  ADD CONSTRAINT `tutorial_ibfk_3` FOREIGN KEY (`categoriatut`) REFERENCES `categoria` (`id_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
