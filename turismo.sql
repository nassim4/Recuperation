-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2015 a las 12:10:46
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `turismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidades`
--

CREATE TABLE IF NOT EXISTS `comunidades` (
  `comunidad` varchar(40) NOT NULL,
  `Total` int(20) NOT NULL,
  `porcen` float NOT NULL,
  `Tasa de Variación` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comunidades`
--

INSERT INTO `comunidades` (`comunidad`, `Total`, `porcen`, `Tasa de Variación`) VALUES
('Andalucia', 7880090, 13, 4),
('Aragon', 259615, 0, -4),
('Asturias (Pr de)', 232745, 0, 0),
('Balears (Illes)', 11111328, 18, 7),
('C Valenciana', 5971523, 9, 11),
('Canarias', 10632679, 17, 4),
('Cantabria', 310699, 0, 7),
('Castilla - La Mancha', 157015, 0, -8),
('Castilla y Le?n', 905942, 1, -1),
('Catalu?a', 15588203, 25, 8),
('comunidad', 0, 0, 0),
('Extremadura', 162710, 0, 1),
('Galicia', 853225, 1, 0),
('Madrid (C de)', 4224986, 7, -5),
('Murcia (Regi?n de)', 620920, 1, 6),
('Navarra (C Foral de)', 228338, 0, -8),
('Pa?s Vasco', 1466382, 2, 8),
('Rioja (La)', 54673, 0, -25),
('Total', 60661073, 100, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `pais` varchar(20) NOT NULL,
  `total` int(20) NOT NULL,
  `porcentaje` float NOT NULL,
  `Tasa de Variación` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`pais`, `total`, `porcentaje`, `Tasa de Variación`) VALUES
('Alemania', 0, 0, 0),
('Argentina', 363630, 0, 4),
('Austria', 568311, 0, 0),
('Belgica', 1873221, 0, 10),
('Brasil', 394366, 0, -3),
('Canada', 245816, 0, -5),
('Chile', 0, 0, 0),
('Dinamarca', 984707, 50, 6),
('EEUU', 0, 0, 0),
('Finlandia', 656897, 1, 12),
('Francia', 9525432, 5, 6),
('Irlanda ', 1270038, 2, 6),
('Italia', 3251019, 5, -8),
('Japon', 374175, 0, 4),
('maruecos', 1000000, 0, 0),
('Mexico', 265863, 0, -1),
('Noruega', 1517668, 2, 21),
('Otros America', 401236, 0, 5),
('Paises Bajos', 2617460, 4, 2),
('Portugal', 1670545, 2, -8),
('Reino Unido', 14327277, 23, 5),
('Resto Europa ', 2362760, 3, 7),
('Resto Mundo ', 1949111, 3, 12),
('Rusia', 1581785, 2, 31),
('Suecia', 0, 0, 0),
('Suiza', 14872560, 2, 3),
('Total', 0, 0, 0),
('Venezuela', 10000000, 0, -13);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comunidades`
--
ALTER TABLE `comunidades`
 ADD PRIMARY KEY (`comunidad`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
 ADD PRIMARY KEY (`pais`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
