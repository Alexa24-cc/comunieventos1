-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-07-2025 a las 05:39:25
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comunieventos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `nombre` text DEFAULT NULL,
  `correo` varchar(40) DEFAULT NULL,
  `contraseña` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`nombre`, `correo`, `contraseña`) VALUES
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('ALEXA', 'alexa.cortes.cruz.19@gmail.com', 'alecorte'),
('ALEXA', 'alexa.cortes.cruz.19@gmail.com', 'alecorte'),
('mn ', 'alexa.cortes.cruz.19@gmail.com', 'alecorte'),
('Ale', 'alexa.cortes.cruz.19@gmail.com', 'alecorte'),
('Leticia', 'lia@gmail.com', '123456'),
('Ale', 'hjbjhb@hbj', 'jbjhh'),
('Ale', 'hjbhnn@hjj', 'jbkj6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `nombre` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` int(12) DEFAULT NULL,
  `fecha` int(8) DEFAULT NULL,
  `hora` varchar(12) DEFAULT NULL,
  `personas` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`nombre`, `email`, `telefono`, `fecha`, `hora`, `personas`) VALUES
('Ale', 'alexa.cortes.cruz.19@gmail.com', 2147483647, 2025, '22:11', 2),
('Ale', 'alexa.cortes.cruz.19@gmail.com', 2147483647, 2025, '22:11', 2),
('lia', 'lia@gmail.com', 2147483647, 2025, '15:30', 150);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
