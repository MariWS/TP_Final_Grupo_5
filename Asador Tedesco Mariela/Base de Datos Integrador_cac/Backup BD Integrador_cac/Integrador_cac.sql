-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2023 a las 22:42:30
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
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Teléfono` int(11) NOT NULL,
  `Dirección` varchar(30) NOT NULL,
  `Fecha_ pedidos` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `Nombre`, `Apellido`, `Correo`, `Teléfono`, `Dirección`, `Fecha_ pedidos`) VALUES
(1, 'María', 'Gonzalez', 'mariagonzalez@gmail.com', 1124956512, 'Serrano 12', '2023-11-10 19:21:36'),
(2, 'Julio ', 'Ramirez', 'julioramirez@gmailc.com', 1154982375, 'Ayala 20', '2023-11-10 19:24:47'),
(3, 'Álvaro', 'Sánchez', 'alvarosanchez86@outlook.com', 89524536, 'Claudio Coello 112', '2023-11-10 20:31:57'),
(4, 'Alba ', 'Martínez', 'martinezalbi@gmail.com', 87364658, 'Vélazquez 23', '2023-11-10 20:21:53'),
(5, 'Mateo', 'Rodríguez', 'rodrihmateo@gmail.com', 94568712, 'Goya 14', '2023-11-10 20:26:13'),
(6, 'Manuel ', 'Garcia', 'manugarcia@outlook.com', 94952312, 'Gral. Pardiñas 50', '2023-11-10 20:22:51'),
(7, 'Martina', 'Diaz', 'martinadiaz96@gmail.com', 87586491, 'Claudio Coello 112', '2023-11-10 19:15:40'),
(8, 'Daniel', 'Moreno', 'danimoreno@outlook.com', 97896524, 'Villalar 5', '2023-11-10 19:20:37'),
(9, 'Alejandro ', 'Muñoz', 'alemu78@gmail.com', 99542871, 'Gral. Diaz Porlier 51', '2023-11-10 19:20:56'),
(10, 'Adrián', 'Ruíz', 'adrianruiz@yahoo.com', 88562587, 'Antonio Acuña 10', '2023-11-10 19:21:14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `Fecha_pedidos` (`Fecha_ pedidos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
