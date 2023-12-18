-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2023 a las 18:08:57
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `integrador_cac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oradores`
--

CREATE TABLE `oradores` (
  `id_orador` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tema` text NOT NULL,
  `fecha_alta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `oradores`
--

INSERT INTO `oradores` (`id_orador`, `nombre`, `apellido`, `email`, `tema`, `fecha_alta`) VALUES
(1, 'Juan', 'Pérez', 'juan.perez@example.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2023-11-05'),
(2, 'María', 'Rodríguez', 'maria.rodriguez@example.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2023-11-05'),
(3, 'Carlos', 'García', 'carlos.garcia@example.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2023-11-05'),
(4, 'Laura', 'Martínez', 'laura.martinez@example.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2023-11-05'),
(5, 'Luis', 'González', 'luis.gonzalez@example.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2023-11-05'),
(6, 'Ana', 'López', 'ana.lopez@example.com', '', '2023-11-05'),
(7, 'David', 'Fernández', 'david.fernandez@example.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2023-11-05'),
(8, 'Sara', 'Ramírez', 'sara.ramirez@example.com', '', '2023-11-05'),
(9, 'Manuel', 'Sánchez', 'manuel.sanchez@example.com', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2023-11-05'),
(10, 'Christian', 'Anaya', 'christiananaya2099@gmail.com', 'Lorem klsdamsid 0123asdtest', '2023-08-12'),
(17, 'Christian2', 'Anaya2', 'arlethanayaavila@gmail.com', 'test13123321 ', '2023-12-12'),
(18, 'Christian2', 'Anaya2', 'arlethanayaavila2@gmail.com', '1123 ', '2023-12-12'),
(19, '', '', '', ' ', '0000-00-00');


--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets` (
  `id_ticket` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` tinyint(4) NOT NULL,
  `categoria` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tickets`
--

INSERT INTO `tickets` (`id_ticket`, `nombre`, `apellido`, `email`, `cantidad`, `categoria`, `total`) VALUES
(1, 'Maximiliano', 'Betancourt', ' betan@gmail.com', 3, 'Junior', '510.00'),
(2, 'Belen', 'Gomez', ' belenchu@hotmail.com', 1, 'Estudiante', '40.00'),
(3, 'Pancracio', 'Klinfurthmal', ' Paklin@outlook.com', 10, 'Trainee', '1000.00');




--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oradores`
--
ALTER TABLE `oradores`
  ADD PRIMARY KEY (`id_orador`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id_ticket`);


--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oradores`
--
ALTER TABLE `oradores`
  MODIFY `id_orador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

--
-- AUTO_INCREMENT de la tabla `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
