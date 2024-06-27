-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2024 a las 02:18:19
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
  `id_tutor` int(11) DEFAULT NULL,
  `tipo_tutoria` enum('Tutoría Individual','Tutoría Grupal','Tutoría de Recuperación Académica','Tutoría de Regularización','Tutoría entre Pares') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `boleta`, `nombre`, `apePa`, `apeMa`, `telefono`, `semestre`, `carrera`, `tutor_genero`, `email`, `password`, `id_cargo`, `id_tutor`, `tipo_tutoria`) VALUES
(8, '2023630788', 'Admin', 'Ad', 'min', '666', 666, 'Jerarquia', 'hombre', 'admin@admin.com', 'root', 1, NULL, 'Tutoría Individual'),
(12, '2023630788', 'Luiiiiiiis', 'Velasco', 'oppo', '5567785651', 1, 'IIA', 'hombre', 'savalosramirez@gmail.com', '123', 2, NULL, 'Tutoría Individual'),
(13, '1234567890', 'ELFOLLADOR', 'cigarroa', 'avila', '1234567890', 2, 'IIA', 'hombre', 'alguien@alguien.com', '123', 2, NULL, 'Tutoría Individual'),
(14, '2024567876', 'Chispa velarde', 'Figueroa', 'Rios', '5578988765', 7, 'ISC', 'hombre', 'vel@alumno.ipn.mx', 'Chispa1234#', 2, NULL, 'Tutoría Individual'),
(15, '0987654321', 'Peddro', 'perez', 'mendez', '0987654321', 2, 'ISC', 'mujer', 'pedro@alumno.ipn.mx', 'Pedro56789#', 2, NULL, 'Tutoría Individual'),
(16, '2023630788', 'Josué Ángel', 'Figueroa', 'Ríos', '1029384756', 2, 'IIA', 'hombre', 'velaj@alumno.ipn.mx', 'Vela123456789#', 2, NULL, 'Tutoría Individual'),
(17, '2023630788', 'josué', 'Figueroa', 'Ríos', '5500998877', 5, 'IIA', 'hombre', 'velaj@alumno.ipn.mx', 'Josue12345#', 2, NULL, 'Tutoría Individual'),
(18, '2023099876', 'Emerson', 'Dávila Her', 'Hernández', '5566443322', 3, 'IIA', 'hombre', 'emerson@alumno.ipn.mx', 'Emerson1234#', 2, NULL, 'Tutoría Individual'),
(19, '2023445566', 'Emerson Ángel', 'Figueroa', 'Dávila', '5544332211', 2, 'ISC', 'hombre', 'lopez@alumno.ipn.mx', 'Lola12345#', 2, 3, 'Tutoría Individual'),
(21, '2023086522', 'Emerson Hiram', 'Dávila', 'Hernández', '5544332211', 3, 'IIA', 'mujer', 'emerson@alumno.ipn.mx', 'Emerson12345#', 2, 13, 'Tutoría Individual'),
(23, '2023009988', 'Emir', 'Pedroza ', 'Hernámdez', '4433556622', 2, 'LCD', 'mujer', 'emir@alumno.ipn.mx', 'Emir12345\"', 2, 8, 'Tutoría Individual'),
(24, '2023098765', 'Luis ángel', 'Velasco', 'PÓÓÓ', '5544332211', 2, 'ISC', 'mujer', 'luis@alumno.ipn.mx', 'Luis1234#', 2, 9, 'Tutoría Individual'),
(25, '2022123456', 'demooo', 'demooo', 'demoooo', '1122332211', 1, 'ISC', 'hombre', 'v@alumno.ipn.mx', 'Vela12345#', 2, 1, 'Tutoría de Recuperación Académica'),
(26, '2023098761', 'ddamiasd', 'asdasd', 'asdasd', '1122334433', 2, 'LCD', 'hombre', 'demomoq@alumno.ipn.mx', 'Lola1234#', 2, 3, 'Tutoría entre Pares'),
(27, '2023445561', 'adasda', 'asdadad', 'asdassdasd', '1122334433', 5, 'LCD', 'hombre', 'a@alumno.ipn.mx', 'Alumno1234#', 2, 3, 'Tutoría entre Pares'),
(28, '2022222222', 'adfasdfasdf', 'adfasdf', 'asdadasd', '4455444334', 3, 'IIA', 'hombre', 'ooo@alumno.ipn.mx', 'Vela1234#', 2, 6, 'Tutoría de Regularización');

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
(1, 'José Asunción', 'Enríquez Zárate', 'hombre', 0),
(2, 'Alberto Jesús', 'Alcántara Méndez', 'hombre', 0),
(3, 'Felipe de Jesús', 'Figueroa del Prado', 'hombre', 0),
(4, 'Erick', 'Linares Vallejo', 'hombre', 0),
(5, 'Edgar Armando', 'Catalán', 'hombre', 0),
(6, 'Jorge', 'Cortés Galicia', 'hombre', 0),
(7, 'Edgardo', 'Franco Martínez', 'hombre', 0),
(8, 'Vicente', 'García Sales', 'hombre', 0),
(9, 'Iván', 'Mosso García', 'hombre', 0),
(10, 'Miguel Ángel', 'Rodríguez', 'hombre', 0),
(11, 'Martha Patricia', 'Jiménez Villanueva', 'mujer', 0),
(12, 'Patricia', 'Escamilla Miranda', 'mujer', 0),
(13, 'Laura', 'Méndez Segundo', 'mujer', 0),
(14, 'Laura', 'Muñoz Salazar', 'mujer', 0),
(15, 'Judith Margarita', 'Tirado Lule', 'mujer', 0),
(16, 'Karina', 'Viveros Vela', 'mujer', 0),
(17, 'Rocio', 'Palacios Solano', 'mujer', 0),
(18, 'Claudia', 'Díaz Huerta', 'mujer', 0),
(19, 'Elia', 'Ramírez Martínez', 'mujer', 0),
(20, 'Gabriela', 'López Ruiz', 'mujer', 0);


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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
