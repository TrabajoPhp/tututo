-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2013 a las 18:17:05
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
  `contenido` varchar(50) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `valoracion` int(11) DEFAULT NULL,
  `tipotut` int(11) DEFAULT NULL,
  `categoriatut` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tutorial`),
  KEY `autor` (`autor`),
  KEY `tipotut` (`tipotut`),
  KEY `categoriatut` (`categoriatut`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `tutorial`
--

INSERT INTO `tutorial` (`id_tutorial`, `autor`, `titulo`, `imagen`, `contenido`, `fecha`, `valoracion`, `tipotut`, `categoriatut`) VALUES
(1, 'aliciaR', 'Probando Registros', NULL, 'asdasdasd.....', '0000-00-00 00:00:00', 5, 1, 2),
(2, 'ezequielA', 'Tutorial 02', NULL, 'Contenido tutorial 02', '0000-00-00 00:00:00', 5, 2, 3),
(3, 'AlanK', 'Tutorial 03', NULL, 'este es el contenido de otro tutorial', '0000-00-00 00:00:00', 2, 1, 1),
(4, 'aliciaR', 'Tutorial 4', NULL, 'contenido del tutorial 4', '0000-00-00 00:00:00', 3, 1, 1),
(10, 'ezequielA', 'ertert', NULL, 'ertretertet', '2013-11-04 15:30:39', NULL, 2, NULL),
(11, 'AlanK', 'werwerwer', NULL, 'werwerwer', '2013-11-04 15:32:09', NULL, 2, 1);

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
