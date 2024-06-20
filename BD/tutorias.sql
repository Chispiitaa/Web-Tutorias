-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2024 a las 22:06:38
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
  `id_cargo` int(11) DEFAULT NULL,
  `id_tutor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `boleta`, `nombre`, `apePa`, `apeMa`, `telefono`, `semestre`, `carrera`, `tutor_genero`, `email`, `password`, `id_cargo`, `id_tutor`) VALUES
(8, '2023630788', 'Admin', 'Ad', 'min', '666', 666, 'Jerarquia', 'hombre', 'admin@admin.com', 'root', 1, NULL),
(12, '2023630788', 'Luiiiiiiis', 'Velasco', 'oppo', '5567785651', 1, 'IIA', 'hombre', 'savalosramirez@gmail.com', '123', 2, NULL),
(13, '1234567890', 'ELFOLLADOR', 'cigarroa', 'avila', '1234567890', 2, 'IIA', 'hombre', 'alguien@alguien.com', '123', 2, NULL),
(14, '2024567876', 'Chispa velarde', 'Figueroa', 'Rios', '5578988765', 7, 'ISC', 'hombre', 'vel@alumno.ipn.mx', 'Chispa1234#', 2, NULL),
(15, '0987654321', 'Peddro', 'perez', 'mendez', '0987654321', 2, 'ISC', 'mujer', 'pedro@alumno.ipn.mx', 'Pedro56789#', 2, NULL),
(16, '2023630788', 'Josué Ángel', 'Figueroa', 'Ríos', '1029384756', 2, 'IIA', 'hombre', 'velaj@alumno.ipn.mx', 'Vela123456789#', 2, NULL),
(17, '2023630788', 'josué', 'Figueroa', 'Ríos', '5500998877', 5, 'IIA', 'hombre', 'velaj@alumno.ipn.mx', 'Josue12345#', 2, NULL),
(18, '2023099876', 'Emerson', 'Dávila Her', 'Hernández', '5566443322', 3, 'IIA', 'hombre', 'emerson@alumno.ipn.mx', 'Emerson1234#', 2, NULL),
(19, '2023445566', 'Emerson Ángel', 'Figueroa', 'Dávila', '5544332211', 2, 'ISC', 'hombre', 'lopez@alumno.ipn.mx', 'Lola12345#', 2, 3),
(21, '2023086522', 'Emerson Hiram', 'Dávila', 'Hernández', '5544332211', 3, 'IIA', 'mujer', 'emerson@alumno.ipn.mx', 'Emerson12345#', 2, 13),
(23, '2023009988', 'Emir', 'Pedroza ', 'Hernámdez', '4433556622', 2, 'LCD', 'mujer', 'emir@alumno.ipn.mx', 'Emir12345\"', 2, 8),
(24, '2023098765', 'Luis ángel', 'Velasco', 'PÓÓÓ', '5544332211', 2, 'ISC', 'mujer', 'luis@alumno.ipn.mx', 'Luis1234#', 2, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE `tutores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `genero` enum('hombre','mujer') NOT NULL,
  `num_alum` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tutores`
--

INSERT INTO `tutores` (`id`, `nombre`, `apellido`, `genero`, `num_alum`) VALUES
(1, 'Carlos', 'Hernandez', 'hombre', 0),
(2, 'Juan', 'Martinez', 'hombre', 0),
(3, 'Miguel', 'Lopez', 'hombre', 1),
(4, 'Pedro', 'Gonzalez', 'hombre', 0),
(5, 'Luis', 'Rodriguez', 'hombre', 0),
(6, 'Jorge', 'Perez', 'hombre', 0),
(7, 'Andres', 'Sanchez', 'hombre', 0),
(8, 'Ana', 'Garcia', 'mujer', 14),
(9, 'Maria', 'Fernandez', 'mujer', 15),
(10, 'Laura', 'Gomez', 'mujer', 15),
(11, 'Carmen', 'Ruiz', 'mujer', 15),
(12, 'Elena', 'Diaz', 'mujer', 15),
(13, 'Sofia', 'Morales', 'mujer', 15),
(14, 'Lucia', 'Vargas', 'mujer', 15);

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
  ADD KEY `id_cargo` (`id_cargo`),
  ADD KEY `registro_ibfk_2` (`id_tutor`);

--
-- Indices de la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tutores`
--
ALTER TABLE `tutores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`id_tutor`) REFERENCES `tutores` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

ALTER TABLE `registro`
ADD `tipo_tutoria` ENUM('Tutoría Individual', 'Tutoría Grupal', 'Tutoría de Recuperación Académica', 'Tutoría de Regularización', 'Tutoría entre Pares') NOT NULL;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
