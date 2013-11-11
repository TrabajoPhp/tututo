-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2013 a las 14:21:24
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(1, 'Arte'),
(2, 'Historia'),
(3, 'Economia');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

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
(16, 'aliciaR', 'dgdg', NULL, 0x7367646764666764670d0a5b625d6667736764676466675b2f625d0d0a5b756c5d0d0a5b6c695d5b625d6466675b2f625d5b2f6c695d0d0a5b6c695d5b625d64675b2f625d5b2f6c695d0d0a5b6c695d5b625d64676466675b2f625d5b2f6c695d0d0a5b6c695d5b625d64675b2f625d5b2f6c695d0d0a5b6c695d5b625d646667645b2f625d5b2f6c695d0d0a5b2f756c5d0d0a5b625d676466676466670d0a323031332d31312d31310d0a30393a33343a32330d0a5b2f625d6466670d0a5b636f64655d3c68746d6c3e0d0a3c2f68746d6c3e5b2f636f64655d0d0a0d0a0d0a5b796f75747562655d694d4230546f75426b54305b2f796f75747562655d0d0a, '2013-11-11 13:35:32', NULL, 2, 2);

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
('ezequielA', 'Ezequiel Aramburu', '123456', 'ezequi8620@gmail.com', 'san martin 550', NULL, '1990-10-12');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tutorial`
--
ALTER TABLE `tutorial`
  ADD CONSTRAINT `tutorial_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `usuario` (`nickname`),
  ADD CONSTRAINT `tutorial_ibfk_2` FOREIGN KEY (`tipotut`) REFERENCES `tipo` (`id_tipo`),
  ADD CONSTRAINT `tutorial_ibfk_3` FOREIGN KEY (`categoriatut`) REFERENCES `categoria` (`id_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
