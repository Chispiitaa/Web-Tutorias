-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2024 a las 09:22:02
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
-- Base de datos: `tutorias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `boleta` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apePa` varchar(50) NOT NULL,
  `apeMa` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `semestre` int(11) NOT NULL,
  `carrera` varchar(100) NOT NULL,
  `tutor_genero` enum('hombre','mujer') NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_cargo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `boleta`, `nombre`, `apePa`, `apeMa`, `telefono`, `semestre`, `carrera`, `tutor_genero`, `email`, `password`, `id_cargo`) VALUES
(1, '666', 'Admin', 'admin', 'admin', '566', 10, 'ISC', 'hombre', 'admin@admin.com', 'root', 1),
(2, 'demo', 'demo', 'demo', 'demo', '777', 6, 'LCD', 'hombre', 'demo@demo.com', 'demo', 2),
(4, '0989898212', 'josue', 'figueroa', 'rios', '55677856567', 3, 'ISC', 'hombre', 'jfigueroar1900@alumno.ipn.mx', '$2y$10$fY/5faLPenPV8ngY0KsE6O/p3yiF6eo3C/T9JkTtvlAcN657Q72ym', 2),
(5, '0989898212', 'pedro', 'ramirez', 'toto', '09876542', 10, 'LCD', 'mujer', 'figueroariosjosue@hotmail.com', '$2y$10$iGU8PbWqH61wcpYnQDpfauvDSIkpMo4Eh1JnHvUGAkpH8eh8w6LXy', 2),
(6, '2023630788', 'Luis', 'Velasco', 'Jimenez', '5630722911', 4, 'ISC', 'mujer', 'A01799843@tec.mx', '$2y$10$z2t7vvv0BO377IzOq5aRDuqaQMWxjuGrvWplLaRG3anMEvNoEKupq', 2),
(7, '2023630788', 'jeffrey', 'popo', 'toto', '55677856567', 1, 'IIA', 'hombre', 'savalosramirez@gmail.com', '123', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
