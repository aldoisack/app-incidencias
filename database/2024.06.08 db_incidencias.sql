-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-06-2024 a las 01:10:33
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
-- Base de datos: `db_incidencias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaciones`
--

CREATE TABLE `asignaciones` (
  `id_asignacion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignaciones`
--

INSERT INTO `asignaciones` (`id_asignacion`, `id_usuario`) VALUES
(1, 2),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(16, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `nombre_estado`) VALUES
(1, 'Habilitado'),
(2, 'Inhabilitado'),
(3, 'Nuevo'),
(4, 'En proceso'),
(5, 'Finalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE `incidencias` (
  `id_incidencia` int(11) NOT NULL,
  `id_oficina` int(11) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `problema` text DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT current_timestamp(),
  `fecha_fin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`id_incidencia`, `id_oficina`, `telefono`, `problema`, `id_estado`, `id_usuario`, `fecha_inicio`, `fecha_fin`) VALUES
(1, 5, '123 456 789', 'No tengo internet', 3, NULL, '2024-06-03 20:52:12', NULL),
(2, 5, '123', '456', 3, NULL, '2024-06-03 20:52:12', NULL),
(3, 4, '78678', '678678', 3, NULL, '2024-06-03 20:52:12', NULL),
(4, 5, '123', '123', 3, NULL, '2024-06-03 21:53:34', NULL),
(5, 5, '123456', '123456', 3, NULL, '2024-06-03 21:58:40', NULL),
(6, 5, '123456', '123456', 3, NULL, '2024-06-03 21:59:12', NULL),
(7, 5, '123456', '123456', 3, NULL, '2024-06-03 22:00:27', NULL),
(8, 4, 'asdfasdfas', 'asdfasdfasdf', 3, NULL, '2024-06-03 22:00:57', NULL),
(9, 4, '5465', '464654', 3, 4, '2024-06-03 22:01:51', NULL),
(10, 4, 'asdfasdf', 'asdfasdf', 3, NULL, '2024-06-03 22:02:59', NULL),
(11, 3, 'asfasf', 'asfasdf', 3, 2, '2024-06-03 22:04:28', NULL),
(12, 5, 'adfadf', 'asfsadf', 3, 2, '2024-06-03 23:04:08', NULL),
(13, 4, 'asfasdf', 'asdfasdf', 3, 2, '2024-06-04 00:11:32', NULL),
(14, 9, 'asfasdf', 'asdfasf', 3, 2, '2024-06-04 00:11:38', NULL),
(15, 4, 'afasf', 'asfasf', 3, 2, '2024-06-04 00:11:43', NULL),
(16, 5, 'asdfasdf', 'sadfasfd', 3, 2, '2024-06-04 00:11:47', NULL),
(17, 4, 'asdf', 'asdf', 3, 2, '2024-06-04 23:39:42', NULL),
(18, 4, 'asdfasdf', 'asfasdf', 3, 2, '2024-06-04 23:42:59', NULL),
(19, 9, 'asdfasdf', 'asdfasdf', 3, 3, '2024-06-04 23:44:30', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficinas`
--

CREATE TABLE `oficinas` (
  `id_oficina` int(11) NOT NULL,
  `nombre_oficina` varchar(255) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `oficinas`
--

INSERT INTO `oficinas` (`id_oficina`, `nombre_oficina`, `id_estado`) VALUES
(3, 'Test 30', 1),
(4, 'Recursos dfasfdasfd', 1),
(5, 'Administración', 1),
(6, 'Tecnologías de la información', 1),
(7, 'Test', 1),
(8, 'Test 2', 1),
(9, 'safsf', 1),
(10, 'Oficina 2', 1),
(11, ' Tesorería 2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfil` int(11) NOT NULL,
  `nombre_perfil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfil`, `nombre_perfil`) VALUES
(1, 'Técnico'),
(2, 'Empleado'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contrasenia` varchar(255) NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `id_oficina` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `correo`, `contrasenia`, `id_perfil`, `id_oficina`, `id_estado`) VALUES
(2, 'Aldo', 'Pereda Loayza', 'aldito@gmail.com', '12345', 1, 6, 1),
(3, 'aldito', 'supremo', 'alditosupremo@gmail.com', '123', 2, 3, 1),
(4, 'Frank', 'Salazar', 'frank@gmail.com', '123', 1, 6, 1),
(5, 'Test', 'Test', 'Test', 'Test', 1, 6, 1),
(6, 'Aldo', 'Test', 'Test', 'Test', 1, 6, 1),
(7, '345', '345', '345', '345', 1, 6, 1),
(8, '7867', '6786', '678', '987', 1, 6, 1),
(10, 'admin', 'admin', 'admin@admin.com', 'admin', 3, 6, 1),
(11, 'Tecnico 2', 'Tecnico 2', 'tecnico@gmail.com2', 'tecnico2', 1, 6, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD PRIMARY KEY (`id_asignacion`),
  ADD KEY `id_tecnico` (`id_usuario`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD PRIMARY KEY (`id_incidencia`),
  ADD KEY `id_oficina` (`id_oficina`),
  ADD KEY `id_estado` (`id_estado`),
  ADD KEY `fk_usuario` (`id_usuario`);

--
-- Indices de la tabla `oficinas`
--
ALTER TABLE `oficinas`
  ADD PRIMARY KEY (`id_oficina`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_oficina` (`id_oficina`),
  ADD KEY `id_perfil` (`id_perfil`),
  ADD KEY `id_estado` (`id_estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  MODIFY `id_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  MODIFY `id_incidencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `oficinas`
--
ALTER TABLE `oficinas`
  MODIFY `id_oficina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD CONSTRAINT `asignaciones_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `incidencias_ibfk_1` FOREIGN KEY (`id_oficina`) REFERENCES `oficinas` (`id_oficina`),
  ADD CONSTRAINT `incidencias_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`);

--
-- Filtros para la tabla `oficinas`
--
ALTER TABLE `oficinas`
  ADD CONSTRAINT `oficinas_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `perfiles` (`id_perfil`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_oficina`) REFERENCES `oficinas` (`id_oficina`),
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
