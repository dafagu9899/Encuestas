-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2020 a las 09:31:22
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `encuestas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lenguajes`
--

CREATE TABLE `lenguajes` (
  `id` int(100) NOT NULL,
  `opcion` varchar(100) NOT NULL,
  `votos` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lenguajes`
--

INSERT INTO `lenguajes` (`id`, `opcion`, `votos`) VALUES
(1, 'siempre', 1),
(2, 'aveces', 1),
(3, 'nunca', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lenguajes2`
--

CREATE TABLE `lenguajes2` (
  `id` int(100) NOT NULL,
  `opcion` varchar(100) NOT NULL,
  `votos` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lenguajes2`
--

INSERT INTO `lenguajes2` (`id`, `opcion`, `votos`) VALUES
(1, 'hijos', 1),
(2, 'familiares', 1),
(3, 'conocidos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lenguajes3`
--

CREATE TABLE `lenguajes3` (
  `id` int(100) NOT NULL,
  `opcion` varchar(100) NOT NULL,
  `votos` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lenguajes3`
--

INSERT INTO `lenguajes3` (`id`, `opcion`, `votos`) VALUES
(1, 'nada', 1),
(2, '100a3,000', 1),
(3, '3,000omas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lenguajes4`
--

CREATE TABLE `lenguajes4` (
  `id` int(100) NOT NULL,
  `opcion` varchar(100) NOT NULL,
  `votos` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lenguajes4`
--

INSERT INTO `lenguajes4` (`id`, `opcion`, `votos`) VALUES
(1, 'siempre', 1),
(2, 'algunasveces', 1),
(3, 'nunca', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lenguajes5`
--

CREATE TABLE `lenguajes5` (
  `id` int(100) NOT NULL,
  `opcion` varchar(100) NOT NULL,
  `votos` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lenguajes5`
--

INSERT INTO `lenguajes5` (`id`, `opcion`, `votos`) VALUES
(1, 'todos', 1),
(2, 'algunos', 1),
(3, 'ninguno', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lenguajes6`
--

CREATE TABLE `lenguajes6` (
  `id` int(100) NOT NULL,
  `opcion` varchar(100) NOT NULL,
  `votos` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lenguajes6`
--

INSERT INTO `lenguajes6` (`id`, `opcion`, `votos`) VALUES
(1, 'todos', 1),
(2, 'algunos', 1),
(3, 'ninguno', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios2`
--

CREATE TABLE `usuarios2` (
  `id` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
