-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-03-2024 a las 18:12:52
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carrizalm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `mensaje` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombre`, `apellido`, `mensaje`) VALUES
(1, 'Itzel', 'Hernandez Rodriguez', 'Portar EPP en áreas operativas.'),
(2, 'Dulce', 'Perez Bravo', 'Portar el EPP correctamente.'),
(3, 'Michell', 'Rodriguez', 'Infraestructura'),
(4, 'Abigail', 'Martinez', 'Perforación'),
(5, 'Itzel', 'Hernandez', 'Horarios flexibles.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacantes`
--

CREATE TABLE `vacantes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `puesto` varchar(100) DEFAULT NULL,
  `otro` varchar(100) DEFAULT NULL,
  `cv` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vacantes`
--

INSERT INTO `vacantes` (`id`, `nombre`, `apellido`, `email`, `telefono`, `puesto`, `otro`, `cv`) VALUES
(1, 'hhh', 'asa', 'dul@gmail.com', '-51234567890', 'puesto10', 'dgfgfs', 0x50726567756e746173207920726573707565737461732e706466),
(2, 'Dulce Maria ', 'Perez', 'dulcepmartin@gmail.com', '7721519156', 'puesto6', 'Espero me tomen en cuenta :(', 0x53697374656d61204f706572617469766f205562756e7475202e706466),
(3, 'Luz ', 'Hernandez', 'luzitzel@gmail.com', '7721546789', 'Geologo Jr.', 'Nopi', 0xc3937264656e65732064656c204d532e706466),
(4, 'Gaby', 'Ramirez', 'ramirez@gmail.com', '7721519156', 'Sistemas', '....', 0x45766964656e6369617320706c616e74616e646f20756e206172626f6c2e706466);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vacantes`
--
ALTER TABLE `vacantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `vacantes`
--
ALTER TABLE `vacantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
