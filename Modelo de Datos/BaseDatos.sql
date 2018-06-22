-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2018 a las 00:01:23
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_garras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `cod_pedido` int(3) NOT NULL,
  `cod_producto` int(3) NOT NULL,
  `talla` varchar(2) NOT NULL,
  `cod_material` int(3) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `fecha_requerida` date NOT NULL,
  `DNI_cliente` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detallepedido`
--

INSERT INTO `detallepedido` (`cod_pedido`, `cod_producto`, `talla`, `cod_material`, `cantidad`, `fecha_requerida`, `DNI_cliente`) VALUES
(1, 5, 'XL', 2, 12, '0000-00-00', '1234'),
(1, 5, 'XL', 2, 12, '0000-00-00', '1234'),
(1, 5, 'XL', 2, 12, '0000-00-00', '1234'),
(1, 5, 'XL', 2, 12, '0000-00-00', '1234'),
(1, 4, 'S', 2, 2, '0000-00-00', '1234'),
(1, 4, 'S', 2, 2, '0000-00-00', '1234'),
(1, 6, 'S', 1, 2, '2018-05-25', '1234'),
(1, 6, 'S', 1, 2, '2018-05-25', '1234'),
(1, 6, 'S', 1, 2, '2018-05-25', '1234'),
(1, 6, 'S', 1, 2, '2018-05-25', '1234'),
(100, 4, 'S', 3, 1, '2018-06-29', '73353800'),
(100, 3, 'XL', 3, 1, '2018-06-28', '73353800'),
(100, 4, 'S', 5, 2, '2018-06-30', '73353800'),
(126, 4, 's', 2, 44, '0000-00-00', '1234'),
(127, 4, 'LL', 4, 132, '0000-00-00', '1234'),
(128, 2, 'l', 4, 99, '0000-00-00', '1234'),
(129, 3, 'L', 5, 500, '2018-06-16', '73353800'),
(130, 4, 'S', 4, 122, '2018-08-23', '73353800'),
(131, 4, 'S', 5, 78, '2018-06-30', '73353800'),
(132, 4, 'S', 5, 78, '2018-07-03', '73353800'),
(133, 4, 'S', 5, 78, '2018-07-03', '73353800'),
(134, 6, 'XL', 3, 20, '2018-07-11', '73353800');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `cod_material` int(3) NOT NULL,
  `descripcion_mat` varchar(20) NOT NULL,
  `precio_mat` decimal(4,2) NOT NULL,
  `estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`cod_material`, `descripcion_mat`, `precio_mat`, `estado`) VALUES
(1, 'Algodon', '5.00', b'1'),
(2, 'Sintético', '5.00', b'1'),
(3, 'Dryfit', '5.00', b'1'),
(4, 'Suplex', '5.00', b'1'),
(5, 'Polyster', '5.00', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `cod_pedido` int(3) NOT NULL,
  `fecha_emision` datetime NOT NULL,
  `estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`cod_pedido`, `fecha_emision`, `estado`) VALUES
(1, '2018-05-11 19:54:51', b'1'),
(2, '2018-05-11 19:55:37', b'1'),
(3, '2018-05-11 19:56:05', b'1'),
(4, '2018-05-11 19:56:13', b'1'),
(5, '2018-05-11 19:56:59', b'1'),
(6, '2018-05-14 17:06:54', b'1'),
(7, '2018-05-14 18:25:55', b'1'),
(8, '2018-05-14 18:26:27', b'1'),
(9, '2018-05-14 18:27:35', b'1'),
(10, '2018-05-15 21:53:20', b'1'),
(11, '2018-05-15 22:01:20', b'1'),
(12, '2018-05-15 22:02:06', b'1'),
(13, '2018-05-15 22:39:20', b'1'),
(14, '2018-05-15 23:11:48', b'1'),
(15, '2018-05-15 23:17:40', b'1'),
(16, '2018-05-16 00:27:35', b'1'),
(17, '2018-05-16 00:27:46', b'1'),
(18, '2018-05-16 00:28:18', b'1'),
(19, '2018-05-16 00:28:27', b'1'),
(20, '2018-05-16 00:33:01', b'1'),
(21, '2018-05-16 00:33:38', b'1'),
(22, '2018-05-16 00:36:36', b'1'),
(23, '2018-05-16 00:38:56', b'1'),
(24, '2018-05-16 00:39:02', b'1'),
(25, '2018-05-16 00:40:45', b'1'),
(26, '2018-05-16 00:47:12', b'1'),
(27, '2018-05-16 00:47:26', b'1'),
(28, '2018-05-16 00:48:02', b'1'),
(29, '2018-05-16 00:51:58', b'1'),
(30, '2018-05-16 00:52:15', b'1'),
(31, '2018-05-16 16:40:23', b'1'),
(32, '2018-05-16 16:44:35', b'1'),
(33, '2018-05-16 16:44:46', b'1'),
(34, '2018-05-16 16:45:14', b'1'),
(35, '2018-05-16 16:47:12', b'1'),
(36, '2018-05-16 16:47:50', b'1'),
(37, '2018-05-16 16:47:57', b'1'),
(38, '2018-05-16 16:48:10', b'1'),
(39, '2018-05-16 16:48:19', b'1'),
(40, '2018-05-16 16:48:33', b'1'),
(41, '2018-05-16 16:49:02', b'1'),
(42, '2018-05-16 16:49:19', b'1'),
(43, '2018-05-16 16:49:37', b'1'),
(44, '2018-05-16 16:50:02', b'1'),
(45, '2018-05-16 16:50:22', b'1'),
(46, '2018-05-16 16:50:48', b'1'),
(47, '2018-05-16 16:51:02', b'1'),
(48, '2018-05-16 16:51:45', b'1'),
(49, '2018-05-16 16:52:34', b'1'),
(50, '2018-05-16 16:53:26', b'1'),
(51, '2018-05-16 23:00:53', b'1'),
(52, '2018-05-16 23:02:10', b'1'),
(53, '2018-05-16 23:03:39', b'1'),
(54, '2018-05-16 23:04:12', b'1'),
(55, '2018-05-16 23:04:38', b'1'),
(56, '2018-05-16 23:07:34', b'1'),
(57, '2018-05-16 23:07:52', b'1'),
(58, '2018-05-16 23:08:24', b'1'),
(59, '2018-05-16 23:08:50', b'1'),
(60, '2018-05-16 23:19:14', b'1'),
(61, '2018-05-16 23:19:34', b'1'),
(62, '2018-05-16 23:24:53', b'1'),
(63, '2018-05-16 23:25:05', b'1'),
(64, '2018-05-17 16:25:36', b'1'),
(65, '2018-05-17 16:31:02', b'1'),
(66, '2018-05-17 16:35:53', b'1'),
(67, '2018-05-17 16:36:13', b'1'),
(68, '2018-05-17 16:37:25', b'1'),
(69, '2018-05-17 16:37:43', b'1'),
(70, '2018-05-17 16:53:50', b'1'),
(71, '2018-05-17 16:56:31', b'1'),
(72, '2018-05-17 16:57:44', b'1'),
(73, '2018-05-17 16:57:53', b'1'),
(74, '2018-05-17 16:59:35', b'1'),
(75, '2018-05-17 17:01:06', b'1'),
(76, '2018-05-17 17:01:40', b'1'),
(77, '2018-05-17 17:01:53', b'1'),
(78, '2018-05-17 17:08:34', b'1'),
(79, '2018-05-17 17:17:56', b'1'),
(80, '2018-05-17 17:20:34', b'1'),
(81, '2018-05-17 17:20:48', b'1'),
(82, '2018-05-17 17:21:36', b'1'),
(83, '2018-05-17 17:21:54', b'1'),
(84, '2018-05-17 17:22:31', b'1'),
(85, '2018-05-17 18:13:11', b'1'),
(86, '2018-05-17 18:15:13', b'1'),
(87, '2018-05-17 18:30:51', b'1'),
(88, '2018-05-17 18:30:51', b'1'),
(89, '2018-05-17 18:32:48', b'1'),
(90, '2018-05-17 18:32:48', b'1'),
(91, '2018-05-17 18:32:48', b'1'),
(92, '2018-05-17 18:33:24', b'1'),
(93, '2018-05-17 18:34:38', b'1'),
(94, '2018-05-17 18:36:24', b'1'),
(95, '2018-05-17 18:36:28', b'1'),
(96, '2018-05-17 18:37:07', b'1'),
(97, '2018-05-17 18:45:12', b'1'),
(98, '2018-05-17 18:46:01', b'1'),
(99, '2018-05-17 18:46:01', b'1'),
(100, '2018-06-01 16:24:55', b'1'),
(101, '2018-06-01 16:24:55', b'1'),
(102, '2018-06-01 16:25:32', b'1'),
(103, '2018-06-01 16:25:32', b'1'),
(104, '2018-06-01 16:27:07', b'1'),
(105, '2018-06-01 16:27:07', b'1'),
(106, '2018-06-01 16:27:15', b'1'),
(107, '2018-06-01 16:27:15', b'1'),
(108, '2018-06-06 23:44:54', b'1'),
(109, '2018-06-06 23:44:55', b'1'),
(110, '2018-06-07 02:56:29', b'1'),
(111, '2018-06-07 02:58:02', b'1'),
(112, '2018-06-07 03:13:30', b'1'),
(113, '2018-06-07 03:14:05', b'1'),
(114, '2018-06-07 15:41:54', b'1'),
(115, '2018-06-07 15:58:38', b'1'),
(116, '2018-06-07 16:10:32', b'1'),
(117, '2018-06-07 16:13:04', b'1'),
(118, '2018-06-07 16:13:44', b'1'),
(119, '2018-06-07 17:26:07', b'1'),
(120, '2018-06-07 18:36:27', b'1'),
(121, '2018-06-07 18:50:10', b'1'),
(122, '2018-06-07 18:50:36', b'1'),
(123, '2018-06-07 18:50:56', b'1'),
(124, '2018-06-07 18:59:34', b'1'),
(125, '2018-06-07 19:04:11', b'1'),
(126, '2018-06-07 19:04:25', b'1'),
(127, '2018-06-07 19:06:56', b'1'),
(128, '2018-06-07 19:13:09', b'1'),
(129, '2018-06-07 19:14:43', b'1'),
(130, '2018-06-22 04:06:37', b'1'),
(131, '2018-06-22 15:03:50', b'1'),
(132, '2018-06-22 15:04:23', b'1'),
(133, '2018-06-22 15:04:43', b'1'),
(134, '2018-06-22 15:34:40', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `DNI` varchar(10) NOT NULL,
  `ap_paterno` varchar(20) NOT NULL,
  `ap_materno` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`DNI`, `ap_paterno`, `ap_materno`, `nombre`, `direccion`, `email`, `telefono`, `estado`) VALUES
('00998765', 'thi', 'that', 'you', 'Calle las Gaviotas', 'adad@hotmail.com', '123456', b'1'),
('1234', '', '', '', '', '', '', b'0'),
('12345678', 'Galarza', 'viveros', 'Gino', 'Av. hkhkhnkh', '73353800@continental.edu.pe', '123456', b'1'),
('23456789', 'this', 'that', 'you', 'Av. hkhkhnkh', 'you@hotmail.com', '123456', b'1'),
('29857610', 'Taipe', 'Miranda', 'Gino', 'Jr. Flores', 'gino@hotmail.com', '965783540', b'1'),
('30020023', 'Galarza', 'viveros', 'Gino', '', '', '', b'1'),
('73353800', 'Rafael', 'Rafael', 'Janice', '', '', '', b'1'),
('73947476', 'Meza', 'Garcia', 'Robert', 'Calle las Gaviotas', 'romega_2011@hotmail.com', '935993138', b'1'),
('75757880', 'this', 'that', 'you', 'Calle las Gaviotas', 'adad@hotmail.com', '935993138', b'1'),
('87654321', 'Taipe', 'Miranda', 'Gino', 'Av. hkhkhnkh', 'janice_rafael@outlook.com', '', b'1'),
('98865438', 'thi', 'viveros', 'you', 'Av. hkhkhnkh', 'adad@hotmail.com', '123456', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuesto`
--

CREATE TABLE `presupuesto` (
  `cod_presupuesto` varchar(10) NOT NULL,
  `precio_total` decimal(6,2) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `precio_parcial` decimal(6,2) NOT NULL,
  `fecha_pago_parcial` date NOT NULL,
  `cod_pedido` int(3) NOT NULL,
  `estado` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `presupuesto`
--

INSERT INTO `presupuesto` (`cod_presupuesto`, `precio_total`, `fecha_entrega`, `precio_parcial`, `fecha_pago_parcial`, `cod_pedido`, `estado`) VALUES
('12222', '3.00', '2018-05-26', '1.20', '2018-05-26', 12, 'activo'),
('123', '12.00', '2018-05-18', '4.80', '2018-05-26', 12, 'activo'),
('678', '1.00', '2018-05-24', '0.40', '2018-05-25', 12, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `cod_producto` int(3) NOT NULL,
  `descripcion_prod` varchar(25) NOT NULL,
  `imagen` text NOT NULL,
  `estado` bit(1) NOT NULL,
  `precio_prod` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod_producto`, `descripcion_prod`, `imagen`, `estado`, `precio_prod`) VALUES
(1, 'Buzos', '', b'1', '0.00'),
(2, 'Casacas', '', b'1', '0.00'),
(3, 'Polos', '', b'1', '0.00'),
(4, 'Shorts', '', b'1', '0.00'),
(5, 'CD1: Buzos-Casacas', '', b'1', '0.00'),
(6, 'CD2: Polos-Shorts', '', b'1', '0.00'),
(7, 'CD3: Conjunto Completo', '', b'1', '0.00'),
(8, 'CD3: Conjunto Comple', '', b'0', '0.00'),
(9, 'blblabla 2', 'modelo.JPG', b'1', '0.00'),
(10, 'esto', 'img_bg_1.jpg', b'1', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `DNI` varchar(8) NOT NULL,
  `contrasenia` varchar(10) NOT NULL,
  `tipo_acceso` bit(1) NOT NULL,
  `estado` bit(1) NOT NULL,
  `cod_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`DNI`, `contrasenia`, `tipo_acceso`, `estado`, `cod_usuario`) VALUES
('73947476', '123456', b'1', b'1', 1),
('30020023', '123456', b'0', b'1', 2),
('73353800', '123456', b'0', b'1', 3),
('87654321', '123456', b'0', b'1', 4),
('12345678', '123456', b'0', b'1', 5),
('23456789', '123456', b'0', b'1', 6),
('75757880', '123456', b'0', b'1', 7),
('98865438', '123456', b'0', b'1', 8),
('00998765', '123456', b'0', b'1', 9),
('29857610', '123456', b'0', b'1', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD KEY `cod_producto` (`cod_producto`),
  ADD KEY `cod_pedido` (`cod_pedido`) USING BTREE,
  ADD KEY `DNI_cliente` (`DNI_cliente`) USING BTREE,
  ADD KEY `cod_material` (`cod_material`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`cod_material`),
  ADD KEY `precio` (`precio_mat`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`cod_pedido`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  ADD PRIMARY KEY (`cod_presupuesto`),
  ADD KEY `cod_pedido` (`cod_pedido`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`cod_producto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`),
  ADD KEY `DNI` (`DNI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `cod_material` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `cod_pedido` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `cod_producto` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD CONSTRAINT `detallepedido_ibfk_1` FOREIGN KEY (`DNI_cliente`) REFERENCES `persona` (`DNI`),
  ADD CONSTRAINT `detallepedido_ibfk_5` FOREIGN KEY (`cod_material`) REFERENCES `material` (`cod_material`),
  ADD CONSTRAINT `detallepedido_ibfk_6` FOREIGN KEY (`cod_producto`) REFERENCES `producto` (`cod_producto`),
  ADD CONSTRAINT `detallepedido_ibfk_7` FOREIGN KEY (`cod_pedido`) REFERENCES `pedido` (`cod_pedido`);

--
-- Filtros para la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  ADD CONSTRAINT `presupuesto_ibfk_1` FOREIGN KEY (`cod_pedido`) REFERENCES `pedido` (`cod_pedido`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `persona` (`DNI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
