-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2024 a las 16:00:00
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
(5, 10, 'Modificó el registro', 26, 'incidencias', '2024-06-16 13:50:47'),
(7, 10, 'Modificó el registro', 27, 'incidencias', '2024-06-16 13:51:47'),
(8, 10, 'Modificó el registro', 27, 'incidencias', '2024-06-21 16:04:36'),
(9, 10, 'Modificó el registro', 43, 'incidencias', '2024-06-21 16:05:34');

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
(26, 10, 'asdf', 'asdf', 'vsdfgsd', 5, NULL, 2, '2024-06-15 17:32:03', '2024-06-21 16:05:43'),
(27, 10, 'asdfasdf', 'asdasdfasdfsdf', 'adfasdf', 3, NULL, 2, '2024-06-15 17:32:53', NULL),
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
(39, 5, 'asdf', 'asdf', NULL, 3, NULL, 8, '2024-06-15 17:54:43', NULL),
(40, 5, '1234', '1234', NULL, 3, NULL, 11, '2024-06-20 12:55:11', NULL),
(41, 5, '1234', '1234', NULL, 5, NULL, 8, '2024-06-20 12:55:46', '2024-06-20 12:56:56'),
(42, 5, '123', '123', NULL, 3, NULL, 5, '2024-06-21 16:01:47', NULL),
(43, 10, 'asdfas', 'asdfasdf', 'fasdfasd', 3, NULL, 8, '2024-06-21 16:03:05', NULL),
(44, 10, 'asdf', 'asdf', NULL, 3, NULL, 5, '2024-06-21 16:08:51', NULL),
(45, 10, 'asdfsaf', 'asdfas', NULL, 3, NULL, 6, '2024-06-21 16:09:19', NULL),
(46, 6, 'lkjl', 'jlkjl', NULL, 3, NULL, 5, '2024-06-21 16:31:14', NULL),
(47, 10, 'n,mn', 'kljk', NULL, 3, NULL, 11, '2024-06-21 16:31:41', NULL),
(51, 10, 'dadfa', 'adf', NULL, 3, NULL, 8, '2024-06-23 16:30:10', NULL),
(52, 5, '912433386', 'asdf', NULL, 3, NULL, 5, '2024-06-23 16:34:26', NULL),
(53, 11, '912433386', 'No tengo internet', NULL, 3, NULL, 6, '2024-06-23 17:16:48', NULL),
(54, NULL, NULL, NULL, NULL, 3, NULL, 6, '2024-06-23 17:45:13', NULL),
(55, NULL, NULL, NULL, NULL, 3, NULL, 7, '2024-06-23 17:45:43', NULL),
(56, 11, '912433386', 'No tengo internet', NULL, 3, NULL, 6, '2024-06-23 18:41:56', NULL),
(57, 11, '912433386', 'No tengo internet', NULL, 3, NULL, 6, '2024-06-24 00:50:17', NULL),
(58, 11, '912433386', 'No tengo internet', NULL, 3, NULL, 5, '2024-06-24 00:52:05', NULL),
(59, 11, '912433386', 'No tengo internet', NULL, 3, NULL, 6, '2024-06-24 00:52:20', NULL),
(60, 7, '123', '123', NULL, 3, NULL, 11, '2024-06-24 00:57:20', NULL),
(61, 7, '123', '123', NULL, 3, NULL, 6, '2024-06-24 01:00:22', NULL),
(62, 7, '123', '123', NULL, 3, NULL, 11, '2024-06-24 01:00:35', NULL),
(63, 11, '912433386', 'No tengo internet', NULL, 3, NULL, 7, '2024-06-24 01:01:44', NULL),
(64, 5, '987654321', 'qwerty', NULL, 3, NULL, 11, '2024-06-24 01:02:56', NULL),
(65, 11, '912433386', 'No puedo imprimir', NULL, 3, NULL, 6, '2024-06-24 14:04:29', NULL),
(66, 11, '912433386', 'No puedo imprimir', NULL, 3, NULL, 4, '2024-06-24 14:07:31', NULL),
(67, 11, '912433386', 'No puedo imprimir\r\n', NULL, 3, NULL, 4, '2024-06-24 14:07:48', NULL),
(68, 11, '912433386', 'No puedo imprimir', NULL, 3, NULL, 5, '2024-06-24 14:16:16', NULL),
(69, 11, '912433386', 'No puedo imprimir', NULL, 3, NULL, 11, '2024-06-24 14:23:09', NULL),
(72, 11, '912433386', 'No puedo imprimir', NULL, 3, NULL, 7, '2024-06-24 14:25:50', NULL),
(74, 11, '912433386', 'No puedo imprimir', NULL, 3, NULL, 5, '2024-06-24 14:26:48', NULL),
(77, 11, '912433386', 'ljhljlkjl', NULL, 3, NULL, 5, '2024-06-24 14:39:56', NULL),
(79, 11, '912433386', 'No tengo internet', NULL, 3, NULL, 2, '2024-06-24 14:45:56', NULL),
(80, 11, '912433386', 'No puedo imprimir', NULL, 3, NULL, 2, '2024-06-24 14:47:25', NULL),
(81, 11, '912433386', 'No tengo internet', NULL, 3, NULL, 8, '2024-06-24 14:50:17', NULL),
(82, 11, '912433386', 'No puedo imrpimir', NULL, 3, NULL, 5, '2024-06-24 14:54:19', NULL),
(83, 11, '987654321', 'safgasfgas', NULL, 3, NULL, 8, '2024-06-24 14:55:41', NULL),
(84, 11, '912433386', 'No puedo imprimir', NULL, 3, NULL, 4, '2024-06-24 14:56:50', NULL),
(85, 11, '912433386', 'dfadfasdf', NULL, 3, NULL, 8, '2024-06-24 14:57:31', NULL),
(86, 11, '912433386', 'adfasdf', NULL, 3, NULL, 2, '2024-06-24 14:59:35', NULL),
(87, 5, '912433386', 'asdfasdf', NULL, 3, NULL, 8, '2024-06-24 15:00:54', NULL),
(88, NULL, NULL, NULL, NULL, 3, NULL, 6, '2024-06-24 15:02:46', NULL),
(89, NULL, NULL, NULL, NULL, 3, NULL, 4, '2024-06-24 15:02:50', NULL),
(91, 11, '912433386', 'No tengo internet', NULL, 3, NULL, 8, '2024-06-24 17:39:23', NULL),
(92, NULL, NULL, NULL, NULL, 3, NULL, 4, '2024-06-24 17:40:01', NULL),
(93, 11, '987654321', 'kljalskdf', NULL, 3, NULL, 7, '2024-06-24 17:46:12', NULL),
(94, 5, '987654321', 'jlkjl', NULL, 3, NULL, 8, '2024-06-24 17:48:47', NULL);

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
  `nombres` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) NOT NULL,
  `contrasenia` varchar(255) NOT NULL,
  `pregunta_seguridad` varchar(255) DEFAULT NULL,
  `respuesta_seguridad` varchar(255) DEFAULT NULL,
  `id_perfil` int(11) NOT NULL,
  `id_oficina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `usuario`, `contrasenia`, `pregunta_seguridad`, `respuesta_seguridad`, `id_perfil`, `id_oficina`) VALUES
(2, NULL, NULL, 'aldito@gmail.com', '12345', NULL, NULL, 1, 6),
(3, NULL, NULL, 'alditosupremo@gmail.com', '123', NULL, NULL, 2, 3),
(4, NULL, NULL, 'frank@gmail.com', '123', NULL, NULL, 1, 6),
(5, NULL, NULL, 'Test', 'Test', NULL, NULL, 1, 6),
(6, NULL, NULL, 'Test', 'Test', NULL, NULL, 1, 6),
(7, NULL, NULL, '345', '345', NULL, NULL, 1, 6),
(8, NULL, NULL, '678', '987', NULL, NULL, 1, 6),
(10, NULL, NULL, 'admin@admin.com', 'admin', NULL, NULL, 3, 6),
(11, NULL, NULL, 'tecnico@gmail.com2', 'tecnico2', NULL, NULL, 1, 6),
(12, NULL, NULL, 'admin', 'admin', NULL, NULL, 3, 7);

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
  ADD KEY `id_usuario_2` (`id_usuario`);

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
  ADD KEY `id_perfil` (`id_perfil`);

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
  MODIFY `id_modificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  MODIFY `id_incidencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

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
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_oficina`) REFERENCES `oficinas` (`id_oficina`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
