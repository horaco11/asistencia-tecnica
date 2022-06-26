-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 25-06-2022 a las 22:18:19
-- Versión del servidor: 5.7.34
-- Versión de PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asistencia_tecnica_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajos`
--

CREATE TABLE `trabajos` (
  `id` int(11) NOT NULL,
  `nombreCompleto` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_bin NOT NULL,
  `fechaIngreso` date NOT NULL,
  `descProblema` varchar(1000) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `trabajos`
--

INSERT INTO `trabajos` (`id`, `nombreCompleto`, `telefono`, `fechaIngreso`, `descProblema`, `estado`) VALUES
(1, 'Horacio Ansaldi', '3515506608', '2022-06-20', '                        Blue screen of death                        ', 1),
(2, 'Juan Gomez', '3512539876', '2022-06-07', '                        Monitor no enciende                        ', 1),
(3, 'Hernan Cataneo', '3512343222', '2022-06-15', 'Sin audio de manera permanente.', 1),
(6, 'Elio Erbes', '3512244957', '2022-05-11', '                                                Error validacion Windows.\r\n                                                                        ', 1),
(7, 'Delfina Turello', '2351830371', '2022-02-09', 'No inicia CPU.\r\n                        ', 1),
(8, 'Gaston Ansaldi', '3521543781', '2022-06-07', 'Monitor no enciente.\r\n                        ', 1),
(9, 'Lucia Ansaldi', '3521938485', '2022-06-09', 'Falla en memoria RAM.\r\n                        ', 1),
(10, 'Esteban Klees', '3512364832', '2022-06-22', '                        Falla de la ram.                        \r\n                                                                        ', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
