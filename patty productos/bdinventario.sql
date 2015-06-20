-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2014 a las 16:01:33
-- Versión del servidor: 5.6.15-log
-- Versión de PHP: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdinventario`
--
CREATE DATABASE IF NOT EXISTS `bdinventario` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdinventario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abmin`
--

CREATE TABLE IF NOT EXISTS `abmin` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `abmin`
--

INSERT INTO `abmin` (`id`, `nombre`, `contrasena`) VALUES
(1, 'Administrador', 'admin2014');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `codigo` int(6) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `codigo`, `nombre`) VALUES
(3, 1, 'manuel'),
(4, 2, 'Ropa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefacturacompra`
--

CREATE TABLE IF NOT EXISTS `detallefacturacompra` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `numerofactura` int(6) NOT NULL,
  `codigoproducto` int(6) NOT NULL,
  `cantidad` int(8) NOT NULL,
  `descuento` varchar(8) COLLATE utf8_spanish_ci DEFAULT NULL,
  `importe` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `detallefacturacompra`
--

INSERT INTO `detallefacturacompra` (`id`, `numerofactura`, `codigoproducto`, `cantidad`, `descuento`, `importe`) VALUES
(20, 800, 3, 10, '1', '9.9'),
(17, 2222, 1, 20, '', '20'),
(18, 333, 2, 20, '1', '19.8'),
(19, 777, 1, 10, '1', '9.9'),
(21, 800, 1, 10, '', '10'),
(22, 1, 1, 2, '', '112'),
(23, 443434, 2, 1, '', '9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefacturaventa`
--

CREATE TABLE IF NOT EXISTS `detallefacturaventa` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `numerofactura` int(6) NOT NULL,
  `codigoproducto` int(6) NOT NULL,
  `cantidad` int(6) NOT NULL,
  `descuento` int(6) DEFAULT NULL,
  `importe` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `detallefacturaventa`
--

INSERT INTO `detallefacturaventa` (`id`, `numerofactura`, `codigoproducto`, `cantidad`, `descuento`, `importe`) VALUES
(16, 100, 1, 20, 1, '22.37'),
(17, 200, 2, 20, 1, '22.37'),
(18, 300, 2, 10, 0, '11.29'),
(19, 400, 1, 1, 1, '1.12'),
(20, 500, 2, 2, 1, '2.24'),
(21, 600, 3, 100, 1, '111.76'),
(22, 600, 2, 10, 1, '11.19'),
(23, 700, 3, 200, 1, '223.74'),
(24, 700, 2, 10, 0, '11.3'),
(25, 12, 1, 1, 0, '1.13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturacompra`
--

CREATE TABLE IF NOT EXISTS `facturacompra` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `numerofactura` int(6) NOT NULL,
  `codigoproveedor` int(6) NOT NULL,
  `fechacompra` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `numerofactura` (`numerofactura`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `facturacompra`
--

INSERT INTO `facturacompra` (`id`, `numerofactura`, `codigoproveedor`, `fechacompra`) VALUES
(17, 800, 5, '2014-06-06'),
(14, 2222, 3, '2014-06-01'),
(15, 333, 3, '2014-06-27'),
(16, 777, 3, '2014-06-11'),
(18, 1, 3, '2014-06-04'),
(19, 443434, 3, '2014-06-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturaventa`
--

CREATE TABLE IF NOT EXISTS `facturaventa` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `numerofactura` int(6) NOT NULL,
  `fechaventa` date NOT NULL,
  `carnetusuario` int(6) NOT NULL,
  `idusuario` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `facturaventa`
--

INSERT INTO `facturaventa` (`id`, `numerofactura`, `fechaventa`, `carnetusuario`, `idusuario`) VALUES
(18, 100, '2014-06-04', 1, 9),
(19, 200, '2014-06-04', 1, 9),
(20, 300, '2014-06-05', 2, 10),
(21, 400, '2014-06-05', 2, 10),
(22, 500, '2014-06-05', 1, 9),
(23, 600, '2014-06-06', 1, 9),
(24, 700, '2014-06-06', 2, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `codigo` int(6) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `codigo`, `nombre`) VALUES
(3, 1, 'facela'),
(4, 2, 'Bic'),
(5, 3, 'Caribe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `codigo` int(6) NOT NULL,
  `nombre` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `codigomarca` int(6) NOT NULL,
  `codigocategoria` int(6) NOT NULL,
  `codigoproveedor` int(6) NOT NULL,
  `preciocompra` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precioventa` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(8) NOT NULL,
  `fechacompra` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `codigo`, `nombre`, `codigomarca`, `codigocategoria`, `codigoproveedor`, `preciocompra`, `precioventa`, `cantidad`, `fechacompra`) VALUES
(5, 1, 'borrador', 3, 3, 3, '56.00', '1.00', 122, '0000-00-00'),
(6, 2, 'cuaderno', 3, 3, 3, '9.00', '1.00', 169, '0000-00-00'),
(7, 3, 'boligrafo', 4, 3, 5, '2.00', '1.00', 277, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `codigo` int(6) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `codigo`, `nombre`, `email`, `telefono`, `direccion`) VALUES
(3, 33333, 'javier francisco', 'javifran58@hotmail.com', 74066572, 'fdfdf'),
(4, 1, 'Facela', 'esaialaexandergomezquintanilla@yahoo.com', 74066572, 'zacatecoluca'),
(5, 2, 'jorge', 'esaialaexandergomezquintanilla@yahoo.com', 12345678, 'zacatecoluca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `carnet` int(6) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` int(8) NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(14) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `carnet` (`carnet`),
  UNIQUE KEY `contrasena` (`contrasena`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `carnet`, `nombre`, `apellido`, `sexo`, `fecha_nacimiento`, `telefono`, `direccion`, `usuario`, `contrasena`) VALUES
(9, 1, 'Esau Alexander', 'Gomez Quintanilla', 'M', '2014-06-04', 12334455, 'san pedor martir callejon al rio', 'esau', '12'),
(10, 2, 'Esai Isaac', 'Gamez Garcia', 'M', '2014-06-04', 12345678, 'san pedor martir callejon al rio', 'esai', 'esai');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
