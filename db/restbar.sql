-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2017 a las 07:32:13
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `restbar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nombre`) VALUES
(2, 'Aseador'),
(3, 'Mercaderista'),
(4, 'Mesero'),
(5, 'Asistente de cocina'),
(6, 'jefe de cocina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
  `id_carrito` int(11) NOT NULL AUTO_INCREMENT,
  `id_clientes` int(11) NOT NULL,
  `id_productos` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id_carrito`),
  KEY `id_clientes` (`id_clientes`,`id_productos`),
  KEY `id_productos` (`id_productos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id_carrito`, `id_clientes`, `id_productos`, `cantidad`) VALUES
(1, 1, 24, 3),
(2, 1, 23, 2),
(3, 2, 24, 2),
(4, 2, 21, 22),
(5, 1, 23, 3),
(6, 1, 23, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id_clientes` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `documento` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `correo` varchar(80) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `puntos_disponibles` tinyint(4) DEFAULT NULL,
  `puntos_consumidos` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_clientes`),
  KEY `documento` (`documento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_clientes`, `nombres`, `apellidos`, `documento`, `celular`, `correo`, `puntos_disponibles`, `puntos_consumidos`) VALUES
(1, 'Deymar', 'Romero', '1049656464', '3222551430', 'des@a', NULL, NULL),
(2, 'Camilo', 'Sanabria', '1010014965', '3222153550', 'casan96@hotmail.com', NULL, NULL),
(3, 'camio', 'Sanabria', '111111111111111', '392929292', '', NULL, NULL),
(4, 'aaa', 'aaaa', '122133', 'aaaa', 'aaaaqaa@aa', NULL, NULL),
(5, 'aaaa', 'aaaa', '1029283873', 'aaaaa', 'a@a', NULL, NULL),
(6, 'sa', 'sa', '101010010100101', '2323232', 'a@a', NULL, NULL),
(7, 'Claudia', 'Patricia', '40038665', '3133208039', 'Patico77@hotmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `id_personal` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasena` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_creacion` date NOT NULL,
  `cargo` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `rol` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_personal`),
  KEY `rol` (`rol`),
  KEY `cargo` (`cargo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_personal`, `nombres`, `apellidos`, `usuario`, `contrasena`, `fecha_creacion`, `cargo`, `rol`) VALUES
(1, 'Camilo', 'Sanabria', 'casan', '123456', '2017-05-14', NULL, '1'),
(3, 'Deymar', 'Romero', 'dromero', 'catalina', '2017-06-16', NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id_pruductos` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_producto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `valor_producto` int(20) NOT NULL,
  `descripcion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion1` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion2` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion3` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ruta_imagen` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_pruductos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=29 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_pruductos`, `tipo_producto`, `nombre`, `valor_producto`, `descripcion`, `descripcion1`, `descripcion2`, `descripcion3`, `ruta_imagen`) VALUES
(21, 'Postres', 'Gaseosa', 3000, 'Litros', '3.5 litros', 'Todas las presentaciones', 'Regalamos vacitos', 'gasePostobon.jpg'),
(22, 'Bebidas', 'Cerveza ', 3500, 'Cerveza fria y al clima', 'Bien Fria', 'Por 350ml', 'De cebada', 'Cerveza.jpg'),
(23, 'Platos', 'carne en salsa', 24000, 'Carne en salsa BBQ, acompañada de una  porcion de:', 'Arroz', 'Papa o Yuca ', 'Ensalada verde', 'plato5.jpg'),
(24, 'Postres', 'gaggagga', 0, 'gagaggag', 'gagaggag', 'gagaggagga', 'gagaggag', 'descarga.jpg'),
(26, 'Platos', 'Ajiaco', 4500, 'Ajiaco criollo', 'Dos presas de pollo criollo', 'Toda clase de productos de la tierra', 'Con crema de leche', 'Ajiaco.jpg'),
(27, 'Bebidas', 'Coctel', 7000, 'De todos los sabores', '', '', '', 'coptel.jpg'),
(28, 'Platos', 'Tamales', 5000, 'Tamal tolimense', 'Con Granos', 'Con Pollo, Carne', 'Envuelto en hojas puras', 'tamales.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_clientes`) REFERENCES `clientes` (`id_clientes`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id_pruductos`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
