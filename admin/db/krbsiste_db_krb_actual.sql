-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-01-2022 a las 19:07:15
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_krb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina`
--

CREATE TABLE `pagina` (
  `id_pagina` int(11) NOT NULL,
  `nombre_web` text NOT NULL,
  `titulo` text NOT NULL,
  `correo_recibo` text NOT NULL,
  `numero_wsp` text NOT NULL,
  `telf_secundario` text DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `descripcion` text NOT NULL,
  `palabras_claves` text NOT NULL,
  `logo_pestana` text NOT NULL,
  `logo_pagina` text NOT NULL,
  `redes_sociales` text NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_actualizacion` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagina`
--

INSERT INTO `pagina` (`id_pagina`, `nombre_web`, `titulo`, `correo_recibo`, `numero_wsp`, `telf_secundario`, `direccion`, `descripcion`, `palabras_claves`, `logo_pestana`, `logo_pagina`, `redes_sociales`, `fecha_creacion`, `fecha_actualizacion`, `id_usuario`) VALUES
(1, 'KRBSistemas E.I.R.L.', 'KRBSistemas E.I.R.L. | Informatica', 'krbsistemas@gmail.com', '+51957236792', '01 425-2241', 'Jirón Juan Crespo Y Castillo 2025, Cercado de Lima 15081', 'Empresa KRBSistemas ofrece productos Tecnológicos de informática, Sistema  informático para Negocios, Punto de Venta para boticas y farmacias, Bazares, Tienda Repuestos, Mini market, Distribuidoras.', 'ventas,krbsistemas,computadoras,KRBSISTEMAS,Monitores,soporte,computacion,venta de computadoras,computadoras en venta,articulos de computacion,tienda de computacion,sistema de botica,krb sistemas', 'icon-logo.ico', 'logoWeb.png', '{\"facebook\":\"https:\\/\\/www.facebook.com\\/Servicio-T%C3%A9cnico-y-Soporte-Asesor%C3%ADa-Sistemas-Inform%C3%A1ticos-589741008388448\",\"twitter\":\"\",\"youtube\":\"\",\"whatsapp\":\"https:\\/\\/wa.link\\/6vkacc\",\"instagram\":\"\",\"telegram\":\"\"}', '2022-01-12 02:19:59', '2021-12-12 13:05:09', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` text NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_producto` decimal(7,2) NOT NULL,
  `foto_producto` text NOT NULL,
  `producto_creacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_usuario` int(11) NOT NULL,
  `producto_actualizacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre_producto`, `stock`, `precio_producto`, `foto_producto`, `producto_creacion`, `id_usuario`, `producto_actualizacion`) VALUES
(1, 'Impresora Multifuncional Epson Ecotank L3160\r\n', 2, '1199.00', '18033735_1.jfif', '2021-12-13 17:46:11', 1, '2021-12-13 12:39:54'),
(2, 'Monitor Led LG 18.5\" 19M38 VGA', 2, '489.00', '21qH5LHUzvFBts4lDVUAlpQv29esjq3aNb1JZCOT.jpg', '2021-12-13 17:46:15', 1, '2021-12-13 12:39:54'),
(3, 'Tenda F3 N300 Router inalámbrico WiFi (3 antenas de 5 dBI, 300 Mbps a 2.4 GHz)', 2, '85.00', '538-large_default.jpg', '2021-12-13 17:46:25', 1, '2021-12-13 12:41:59'),
(4, 'Pistola Argox', 1, '89.00', 'AI-6821-.jpg', '2022-01-09 01:01:02', 1, '2021-12-13 12:41:59'),
(5, 'KIT LOGITECH TECLADO + MOUSE MK 120 USB ESPAÑOL NEGRO', 4, '75.00', 'D_NQ_NP_632561-MLA43178808845_082020-O.jpg', '2021-12-13 17:46:31', 1, '2021-12-13 12:43:28'),
(6, 'IMPRESORA DE TICKET TERMICA 3NSTAR RPT006 C/PORT USB/RED , NEGRO', 3, '619.00', 'D_NQ_NP_692309-MLA42928645458_072020-V.jpg', '2021-12-13 17:46:36', 1, '2021-12-13 12:43:51'),
(7, 'Monitor Led Viewsonic 18.5\"', 2, '489.00', 'D_NQ_NP_875880-MPE44809379138_022021-O.jpg', '2021-12-13 17:46:39', 1, '2021-12-13 12:44:13'),
(8, 'KIT LOGITECH MK235 TECLADO + MOUSE INALAMBRICO NEGRO', 5, '125.00', 'kit-logitech-mk235-wireless-teclado-multimedia-mouse-optico-usb.jpg', '2021-12-13 17:46:43', 1, '2021-12-13 12:44:37'),
(9, 'Impresora ticket termica 3nStar rpt008 red/usb/serial', 3, '649.00', 'impresora-ticketera-termica-3nstar-rpt008.jpg', '2022-01-05 20:27:55', 1, '2021-12-13 12:44:59'),
(10, 'Adaptador USB Tp-Link TL-WN823N Inalámbrico 300Mbps', 4, '55.00', 'Tl-WN823N_0.png', '2021-12-13 17:46:48', 1, '2021-12-13 12:45:18'),
(13, 'PC COMPLETA CORE I5 3RA GEN. + SISTEMA DE VENTAS (FARMACIA / BOTICA / BAZAR) GARANTÍA 12 MESES CAPACITACIÓN PERMANENTE.', 1, '1990.00', 'core-i5-monitor-teclado.jpeg', '2022-01-08 02:20:02', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistema_farmacia`
--

CREATE TABLE `sistema_farmacia` (
  `id_sistema` int(11) NOT NULL,
  `titulo_sistema` text NOT NULL,
  `descripcion_sistema` text DEFAULT NULL,
  `precio_sistema` decimal(7,2) DEFAULT NULL,
  `foto_sistema` text NOT NULL,
  `sistema_creacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_usuario` int(11) NOT NULL,
  `sistema_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sistema_farmacia`
--

INSERT INTO `sistema_farmacia` (`id_sistema`, `titulo_sistema`, `descripcion_sistema`, `precio_sistema`, `foto_sistema`, `sistema_creacion`, `id_usuario`, `sistema_actualizacion`) VALUES
(4, 'SISTEMA INFORMÁTICO PARA NEGOCIOS FARMACIAS, BOTICAS, BAZAR.', 'SISTEMA GESTIÓN CONTROL INVENTARIO Y VENTAS (PUNTO DE VENTA) <a href=\"https://www.youtube.com/watch?v=v0AmcDuB_5w&t=21s\">https://www.youtube.com/watch?v=v0AmcDuB_5w&t=21s</a>', '699.00', 'sistemagestion.png', '2022-01-09 21:42:05', 1, '2021-12-13 13:04:54'),
(5, 'SISTEMA GESTION VENTAS(FACFARMA) + INTEGRACION FACTURACION ELECTRONICA + TICKETERA TERMICA + LECTOR CODIGO BARRAS + 10 CONTOMETROS 80MM.', 'SISTEMA INFORMATICO PARA NEGOCIOS DE PUNTO DE VENTAS.\r\n<a href=\"https://www.youtube.com/watch?v=ZjtkJQlT0Gg\">https://www.youtube.com/watch?v=ZjtkJQlT0Gg</a>', NULL, 'sistemagestion.png', '2022-01-04 20:12:47', 1, '2021-12-13 13:04:54'),
(6, 'PACK SISTEMA INFORMÁTICO PUNTO VENTA PARA BOTICA Y OTROS NEG.+ INTEGRACIÓN FACTURACIÓN ELECTRÓNICA.(EMITE BOLETAS Y FACTURAS).', NULL, NULL, 'sistemagestion.png', '2022-01-09 21:43:14', 1, '2021-12-13 13:04:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `usuario` text NOT NULL,
  `password` text NOT NULL,
  `foto_perfil` text NOT NULL,
  `fecha_usuario` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `usuario`, `password`, `foto_perfil`, `fecha_usuario`) VALUES
(1, 'Kevin Blas', 'admin', '0192023a7bbd73250516f069df18b500', 'img/administrador/no-foto.png', '2022-01-07 03:21:08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`id_pagina`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `sistema_farmacia`
--
ALTER TABLE `sistema_farmacia`
  ADD PRIMARY KEY (`id_sistema`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pagina`
--
ALTER TABLE `pagina`
  MODIFY `id_pagina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `sistema_farmacia`
--
ALTER TABLE `sistema_farmacia`
  MODIFY `id_sistema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pagina`
--
ALTER TABLE `pagina`
  ADD CONSTRAINT `update_delete_user` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `update_delete_user_producto` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sistema_farmacia`
--
ALTER TABLE `sistema_farmacia`
  ADD CONSTRAINT `update_delete_user_sistema` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
