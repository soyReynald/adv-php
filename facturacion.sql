-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2020 a las 17:08:44
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `facturacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `codCliente` int(11) NOT NULL,
  `nit` varchar(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`codCliente`, `nit`, `nombre`, `telefono`, `direccion`) VALUES
(22123, '113388543', 'Reynald Rodriguez', '+1809-235-5666', 'Residencial Madrigal, Apto. B-1, Arroyo Hondo 2do, Santo Domingo, República Dominicana'),
(22125, '40225355516', 'Manuel Rodriguez', '8092355666', 'Higuey, República Dominicana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefactura`
--

CREATE TABLE `detallefactura` (
  `id` int(11) NOT NULL,
  `noFactura` int(11) NOT NULL,
  `codProducto` int(11) NOT NULL,
  `cantidadPedida` int(11) NOT NULL,
  `precioTotal` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detallefactura`
--

INSERT INTO `detallefactura` (`id`, `noFactura`, `codProducto`, `cantidadPedida`, `precioTotal`) VALUES
(1, 1, 2321, 3, '7200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `noFactura` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `codCliente` int(11) NOT NULL,
  `totalFactura` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`noFactura`, `fecha`, `codCliente`, `totalFactura`) VALUES
(1, '2020-09-03 19:02:24', 22123, '7250');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codProducto` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `proveedor` int(11) NOT NULL,
  `precioCosto` decimal(10,0) NOT NULL,
  `precioVenta` decimal(10,0) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codProducto`, `descripcion`, `proveedor`, `precioCosto`, `precioVenta`, `foto`) VALUES
(2321, 'Claro TV', 20, '2000', '2200', 'img/claroTV.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `codProveedor` int(11) NOT NULL,
  `proveedor` varchar(30) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`codProveedor`, `proveedor`, `telefono`, `direccion`) VALUES
(20, 'Claro', '8092201111', 'Autopista Las Americas #68, esquina Argentina., Santo Domingo 15700');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codCliente`);

--
-- Indices de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `noFactura` (`noFactura`),
  ADD UNIQUE KEY `codProducto` (`codProducto`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`noFactura`),
  ADD UNIQUE KEY `codCliente` (`codCliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codProducto`),
  ADD UNIQUE KEY `proveedor` (`proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`codProveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `noFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD CONSTRAINT `detalle-factura` FOREIGN KEY (`noFactura`) REFERENCES `factura` (`noFactura`),
  ADD CONSTRAINT `detalle-producto` FOREIGN KEY (`codProducto`) REFERENCES `producto` (`codProducto`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura-cliente` FOREIGN KEY (`codCliente`) REFERENCES `cliente` (`codCliente`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `proveedor-producto` FOREIGN KEY (`proveedor`) REFERENCES `proveedor` (`codProveedor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
