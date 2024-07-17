-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2024 a las 07:46:00
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
-- Estructura de tabla para la tabla `accesos`
--

CREATE TABLE `accesos` (
  `id_acceso` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `id_modulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `accesos`
--

INSERT INTO `accesos` (`id_acceso`, `id_perfil`, `id_modulo`) VALUES
(10, 3, 1),
(11, 3, 2),
(12, 3, 3),
(14, 3, 5),
(15, 3, 6),
(16, 1, 1),
(17, 1, 5),
(18, 3, 7),
(19, 1, 7);

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
(16, 4),
(17, 14),
(18, 15),
(19, 16),
(20, 17),
(21, 18),
(22, 14),
(23, 15),
(24, 16),
(25, 17),
(26, 14),
(27, 15),
(28, 16),
(29, 14),
(30, 15),
(31, 16),
(32, 14),
(33, 15),
(34, 16),
(35, 14),
(36, 15),
(37, 14),
(38, 15),
(39, 14),
(40, 15),
(41, 14),
(42, 15),
(43, 14),
(44, 15),
(45, 13),
(46, 14),
(47, 15),
(48, 13),
(49, 14),
(50, 15),
(51, 13),
(52, 14),
(53, 15),
(54, 13),
(55, 14),
(56, 15),
(57, 13),
(58, 14),
(59, 15),
(60, 13),
(61, 14),
(62, 15),
(63, 13),
(64, 14),
(65, 15),
(66, 13),
(67, 14),
(68, 15),
(69, 13),
(70, 14),
(71, 15),
(72, 13),
(73, 14),
(74, 15),
(75, 13),
(76, 14),
(77, 15),
(78, 13),
(79, 14),
(80, 15),
(81, 13),
(82, 14),
(83, 15),
(84, 13),
(85, 14),
(86, 15),
(87, 13),
(88, 14),
(89, 15),
(90, 13),
(91, 14),
(92, 15),
(93, 13),
(94, 14),
(95, 15),
(96, 13),
(97, 14),
(98, 15),
(99, 13),
(100, 14),
(101, 15),
(102, 13),
(103, 14),
(104, 15),
(105, 13),
(106, 14),
(107, 15),
(108, 13),
(109, 14),
(110, 15),
(111, 13),
(112, 14),
(113, 15),
(114, 13),
(115, 14),
(116, 15),
(117, 13),
(118, 14),
(119, 15),
(120, 13),
(121, 14),
(122, 15),
(123, 13),
(124, 14),
(125, 15),
(126, 13),
(127, 14),
(128, 15),
(129, 13),
(130, 14),
(131, 15),
(132, 13),
(133, 14),
(134, 15),
(135, 13),
(136, 14),
(137, 15),
(138, 13),
(139, 14),
(140, 15),
(141, 14),
(142, 15),
(143, 14),
(144, 15),
(145, 14),
(146, 15),
(147, 14),
(148, 15),
(149, 14),
(150, 15),
(151, 14),
(152, 14),
(153, 14),
(154, 14),
(155, 14),
(156, 14),
(157, 14),
(158, 14),
(159, 14),
(160, 14),
(161, 14),
(162, 14),
(163, 14),
(164, 14),
(165, 14),
(166, 14),
(167, 14),
(168, 14),
(169, 14),
(170, 14),
(171, 14),
(172, 14),
(173, 14),
(174, 14),
(175, 14),
(176, 15),
(177, 14),
(178, 14),
(179, 14),
(180, 14),
(181, 14),
(182, 14),
(183, 14),
(184, 14),
(185, 14),
(186, 14),
(187, 14),
(188, 14),
(189, 14),
(190, 14),
(191, 14),
(192, 14),
(193, 14),
(194, 14),
(195, 14),
(196, 14),
(197, 14),
(198, 14),
(199, 14),
(200, 14),
(201, 14),
(202, 14),
(203, 14),
(204, 14),
(205, 14),
(206, 14),
(207, 14),
(208, 14),
(209, 14),
(210, 14),
(211, 14),
(212, 14),
(213, 14),
(214, 14),
(215, 14),
(216, 14),
(217, 14),
(218, 14),
(219, 14),
(220, 14),
(221, 14),
(222, 14),
(223, 14),
(224, 14),
(225, 14),
(226, 14),
(227, 14),
(228, 14),
(229, 14),
(230, 14),
(231, 14),
(232, 14),
(233, 14),
(234, 14),
(235, 14);

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
(56, 14, 'Modificó', 1, 'Incidencias', '2024-07-10 13:38:08'),
(57, 14, 'Modificó', 1, 'Incidencias', '2024-07-10 13:42:40'),
(58, 14, 'Finalizó', 1, 'Incidencias', '2024-07-10 13:42:47'),
(59, 14, 'Modificó', 2, 'Incidencias', '2024-07-10 13:43:20'),
(60, 14, 'Finalizó', 2, 'Incidencias', '2024-07-10 13:43:25'),
(61, 14, 'Modificó', 3, 'Incidencias', '2024-07-10 13:49:10'),
(62, 14, 'Finalizó', 3, 'Incidencias', '2024-07-10 13:49:15'),
(63, 14, 'Modificó', 4, 'Incidencias', '2024-07-10 13:55:55'),
(64, 14, 'Finalizó', 4, 'Incidencias', '2024-07-10 13:56:03'),
(65, 14, 'Modificó', 5, 'Incidencias', '2024-07-14 09:45:33'),
(66, 14, 'Modificó', 5, 'Incidencias', '2024-07-14 09:47:31'),
(67, 14, 'Modificó', 4, 'Incidencias', '2024-07-14 09:48:18'),
(68, 14, 'Modificó', 4, 'Incidencias', '2024-07-14 10:08:38'),
(69, 14, 'Modificó', 4, 'Incidencias', '2024-07-14 10:09:27'),
(70, 14, 'Modificó', 4, 'Incidencias', '2024-07-14 10:14:10'),
(71, 14, 'Modificó', 4, 'Incidencias', '2024-07-14 10:14:36'),
(72, 14, 'Modificó', 4, 'Incidencias', '2024-07-14 10:15:29'),
(73, 14, 'Modificó', 4, 'Incidencias', '2024-07-14 10:16:31'),
(74, 14, 'Modificó', 4, 'Incidencias', '2024-07-14 10:21:06'),
(75, 13, 'Modificó', 5, 'Incidencias', '2024-07-16 23:42:33'),
(76, 14, 'Finalizó', 9, 'Incidencias', '2024-07-16 23:53:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Mantenimiento correctivo'),
(2, 'Instalación de red'),
(3, 'Reemplazo de equipo'),
(4, 'Instalación de impresora'),
(5, 'Instalación de software'),
(6, 'Configuración de red');

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
(2, 'En cola'),
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
  `id_categoria` int(11) DEFAULT NULL,
  `detalle` text DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `id_tecnico` int(11) DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT current_timestamp(),
  `fecha_fin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`id_incidencia`, `id_oficina`, `telefono`, `problema`, `id_categoria`, `detalle`, `id_estado`, `id_tecnico`, `fecha_inicio`, `fecha_fin`) VALUES
(1, 16, '', 'No puedo escanear', 4, 'Escáner desconfigurado. Se volvió a instalar el driver.', 5, 14, '2024-07-08 14:49:06', '2024-07-08 15:10:47'),
(2, 17, '', 'Necesito un cable de red', 2, 'El cable de red no funciona correctamente. Se instaló nuevo cable', 5, 14, '2024-07-09 17:21:21', '2024-07-09 17:30:25'),
(3, 25, '', 'Que instalen Autocad', 5, 'Se instaló AutoCad correctamente', 5, 14, '2024-07-08 12:04:20', '2024-07-08 13:00:15'),
(4, 35, '', 'La impresora no funciona', 4, 'El ingeniero Ángel arregló el problema. No realicé ninguna acción.', 5, 14, '2024-07-10 10:44:48', '2024-07-10 11:00:03'),
(5, 9, '', 'La impresora no conecta', 4, 'No estaba conectada a la corriente. Además, no estaba conectada a internet', 5, 14, '2024-07-12 10:05:37', '2024-07-12 10:27:40'),
(6, 9, NULL, 'No tengo internet', 6, 'Se actualizó la dirección IP', 5, 14, '2024-07-15 08:19:26', '2024-07-15 08:30:26'),
(7, 13, NULL, 'Necesito un puerto de red', 2, 'Se instaló un puerto de red para el auditor', 5, 14, '2024-07-15 12:24:53', '2024-07-15 13:04:53'),
(8, 35, NULL, 'Monitor se ve mal', 3, 'En Coactiva el monitor no se ve. La imagen es imposible de ver. Se reemplazó por un monitor que tenían en el área.', 5, 14, '2024-07-16 10:00:07', '2024-07-16 10:31:04'),
(9, 16, '', 'No tengo internet', NULL, NULL, 5, 14, '2024-07-16 23:51:24', '2024-07-16 23:53:14'),
(10, 16, '', 'no tengo internet', NULL, NULL, 3, 13, '2024-07-16 23:59:48', NULL),
(11, 16, '', 'asd', NULL, NULL, 3, 13, '2024-07-17 00:00:06', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `id_modulo` int(11) NOT NULL,
  `nombre_modulo` varchar(255) NOT NULL,
  `ruta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id_modulo`, `nombre_modulo`, `ruta`) VALUES
(1, 'Incidencias', 'incidencias/listar'),
(2, 'Oficinas', 'oficinas/listar'),
(3, 'Técnicos', 'tecnicos/listar'),
(5, 'Historial', 'historial/listar'),
(6, 'Bitácora', 'bitacora'),
(7, 'Categorías', 'categorias/listar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficinas`
--

CREATE TABLE `oficinas` (
  `id_oficina` int(11) NOT NULL,
  `nombre_oficina` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `oficinas`
--

INSERT INTO `oficinas` (`id_oficina`, `nombre_oficina`) VALUES
(4, 'Registros civiles'),
(5, 'Administración'),
(6, 'Tecnologías de la información'),
(9, 'Tesorería'),
(10, 'Gerencia municipal'),
(13, 'Recursos humanos'),
(14, 'Salón de actos'),
(15, 'Alcaldía'),
(16, 'Abastecimiento'),
(17, 'Turismo'),
(18, 'Asesoría jurídica'),
(19, 'Catastro'),
(20, 'Contabilidad'),
(21, 'Desarrollo social'),
(22, 'Imagen'),
(23, 'Informática'),
(24, 'Infraestructura'),
(25, 'Obras'),
(26, 'OCI - 3° piso'),
(27, 'OCI - 4° piso'),
(28, 'Sala de regidores'),
(29, 'Secretaria ATM'),
(32, 'Secretaría general'),
(33, 'Planeamiento'),
(34, 'Procuraduría'),
(35, 'Rentas');

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
  `id_perfil` int(11) NOT NULL,
  `logueado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `usuario`, `contrasenia`, `id_perfil`, `logueado`) VALUES
(13, 'admin', 'admin', 'admin', 'admin', 3, 1),
(14, 'Aldo', 'Pereda', 'apereda', '123', 1, 0),
(15, 'Frank', 'Sandoval', 'fsandoval', 'fsandoval', 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesos`
--
ALTER TABLE `accesos`
  ADD PRIMARY KEY (`id_acceso`),
  ADD KEY `id_perfil` (`id_perfil`),
  ADD KEY `id_modulo` (`id_modulo`);

--
-- Indices de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD PRIMARY KEY (`id_asignacion`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_modificacion`),
  ADD KEY `id_usuario_2` (`id_usuario`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

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
  ADD KEY `id_tecnico` (`id_tecnico`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id_modulo`);

--
-- Indices de la tabla `oficinas`
--
ALTER TABLE `oficinas`
  ADD PRIMARY KEY (`id_oficina`);

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
  ADD KEY `id_perfil` (`id_perfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesos`
--
ALTER TABLE `accesos`
  MODIFY `id_acceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  MODIFY `id_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_modificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  MODIFY `id_incidencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id_modulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `oficinas`
--
ALTER TABLE `oficinas`
  MODIFY `id_oficina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accesos`
--
ALTER TABLE `accesos`
  ADD CONSTRAINT `accesos_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `perfiles` (`id_perfil`),
  ADD CONSTRAINT `accesos_ibfk_2` FOREIGN KEY (`id_modulo`) REFERENCES `modulos` (`id_modulo`);

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `bitacora_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD CONSTRAINT `incidencias_ibfk_1` FOREIGN KEY (`id_oficina`) REFERENCES `oficinas` (`id_oficina`),
  ADD CONSTRAINT `incidencias_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`),
  ADD CONSTRAINT `incidencias_ibfk_3` FOREIGN KEY (`id_tecnico`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `incidencias_ibfk_4` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `perfiles` (`id_perfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
