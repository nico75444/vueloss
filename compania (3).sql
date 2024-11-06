-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2024 a las 22:43:33
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `compania`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compania`
--

CREATE TABLE `compania` (
  `nombre` varchar(75) DEFAULT NULL,
  `Edad` int(100) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `VIP` text DEFAULT NULL,
  `Provincia` varchar(20) DEFAULT NULL,
  `direccion` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compania`
--

INSERT INTO `compania` (`nombre`, `Edad`, `Fecha`, `VIP`, `Provincia`, `direccion`) VALUES
('marlen2', 23, '2017-10-17', 'si', 'Bilbao', NULL),
('alejo', 23, '2017-10-22', 'no', 'Madrid', NULL),
('dani', 22, '1995-04-20', 'no', 'Madrid', NULL),
('Hugo', 22, '1995-10-20', 'no', 'Madrid', NULL),
('miller', 50, '1971-08-20', 'si', 'Barcelona', NULL),
('', 21, '1996-10-13', 'no', 'Sevilla', NULL),
('nata', 17, '2024-10-18', 'no', 'Madrid', 'cll14'),
('nicol', 77, '2024-10-23', 'si', 'Bilbao', 'crr9'),
('dm', 13, '2024-10-03', 'no', 'Sevilla', 'cll144'),
('dm', 6, '2024-10-07', 'si', 'Sevilla', 'cll144'),
('Kevin', 6, '2024-10-25', 'si', 'Madrid', 'cll144');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'nico', '$2y$10$wmQ4NF/95E/oRFBJahXsyOW6WgSG4OXHVMy1Wj5GJGAQzFZULPme2'),
(2, 'damian', '$2y$10$7RBUo3n2tU1TNVXpTKMnvenNIuPPxuWIU83gXw8BWwcQ7vQf4CJ7i'),
(3, 'ctyhcdr', '$2y$10$h91z53QbHOA8PFd5UgBruu5Ly1Qz//XDif0jvIQZHHPcDX8gagT.y'),
(4, 'Kevin', '$2y$10$5Vx7i7jJ5KFE6ttOkfpTzODJvSm1.t1HJ34dfpZm06.oQLJC5SuHS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
