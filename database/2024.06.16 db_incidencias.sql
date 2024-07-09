-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2024 a las 20:02:05
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
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id_modificacion` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `accion` varchar(255) DEFAULT NULL,
  `registro_afectado` int(11) DEFAULT NULL,
  `tabla` varchar(255) DEFAULT NULL,
  `fecha` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id_modificacion`, `id_usuario`, `accion`, `registro_afectado`, `tabla`, `fecha`) VALUES
(1, 10, 'Modificó el registro', 22, '', '2024-06-13 22:47:36');

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
  `detalle` text DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_tecnico` int(11) DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT current_timestamp(),
  `fecha_fin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`id_incidencia`, `id_oficina`, `telefono`, `problema`, `detalle`, `id_estado`, `id_usuario`, `id_tecnico`, `fecha_inicio`, `fecha_fin`) VALUES
(20, 5, 'zxcvzxc', 'fasdf', 'alsjdflkasjd', 5, NULL, 8, '2024-06-10 23:57:27', '2024-06-10 23:57:42'),
(21, 4, '123', '123', '123', 5, NULL, 6, '2024-06-13 18:28:53', '2024-06-13 18:29:36'),
(22, 10, '2024.06.13', 'Modificando problema', '2024.06.13', 5, NULL, 5, '2024-06-13 18:46:59', '2024-06-15 16:26:58'),
(23, 11, 'asdfsadf', 'asfasdf', NULL, 3, NULL, 11, '2024-06-15 17:25:32', NULL),
(24, 11, 'asdfasdf', 'afasdf', NULL, 3, NULL, 5, '2024-06-15 17:31:19', NULL),
(25, 5, 'asdf', 'asdf', NULL, 3, NULL, 6, '2024-06-15 17:31:59', NULL),
(26, 10, 'asdf', 'asdf', 'vsdfgsd', 3, NULL, 2, '2024-06-15 17:32:03', NULL),
(27, 10, 'asdfasdf', 'asdfasdf', NULL, 3, NULL, 2, '2024-06-15 17:32:53', NULL),
(28, 10, 'asdfsadf', 'asdfas', NULL, 3, NULL, 7, '2024-06-15 17:32:56', NULL),
(29, 5, 'asdf', 'sadf', NULL, 3, NULL, 7, '2024-06-15 17:37:09', NULL),
(30, 5, 'asdfa', 'asdf', NULL, 3, NULL, 5, '2024-06-15 17:37:13', NULL),
(31, 10, 'adsf', 'asdf', NULL, 3, NULL, 11, '2024-06-15 17:37:17', NULL),
(32, 5, 'asdf', 'asdf', NULL, 3, NULL, 5, '2024-06-15 17:37:23', NULL),
(33, 5, 'jkljkl', 'ljolij', NULL, 3, NULL, 7, '2024-06-15 17:51:33', NULL),
(34, 11, '12341243', '12341234', NULL, 3, NULL, 4, '2024-06-15 17:53:45', NULL),
(35, 5, 'asdfas', 'asdf', NULL, 3, NULL, 2, '2024-06-15 17:54:20', NULL),
(36, 11, 'asdf', 'asdf', NULL, 3, NULL, 6, '2024-06-15 17:54:25', NULL),
(37, 5, 'asdf', 'asdf', NULL, 3, NULL, 8, '2024-06-15 17:54:30', NULL),
(38, 10, 'asdf', 'asdf', NULL, 3, NULL, 7, '2024-06-15 17:54:38', NULL),
(39, 5, 'asdf', 'asdf', NULL, 3, NULL, 8, '2024-06-15 17:54:43', NULL);

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
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_modificacion`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

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
  ADD KEY `fk_usuario` (`id_usuario`),
  ADD KEY `id_tecnico` (`id_tecnico`);

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
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_modificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  MODIFY `id_incidencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `bitacora_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `incidencias_ibfk_1` FOREIGN KEY (`id_oficina`) REFERENCES `oficinas` (`id_oficina`),
  ADD CONSTRAINT `incidencias_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`),
  ADD CONSTRAINT `incidencias_ibfk_3` FOREIGN KEY (`id_tecnico`) REFERENCES `usuarios` (`id_usuario`);

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
