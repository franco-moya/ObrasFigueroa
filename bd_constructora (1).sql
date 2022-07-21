-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2022 a las 23:34:51
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_constructora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprador`
--

CREATE TABLE `comprador` (
  `ID_Comprador` int(11) NOT NULL,
  `Nombre_Comprador` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comprador`
--

INSERT INTO `comprador` (`ID_Comprador`, `Nombre_Comprador`) VALUES
(1, 'Miguel Gonzalez'),
(2, 'Andres Aravena'),
(3, 'Jorge Muñoz'),
(4, 'Marcelo Nuñez'),
(5, 'Jose Sepulveda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `N°_Factura` int(11) NOT NULL,
  `Fecha_Factura` date NOT NULL,
  `IMG` varchar(50) NOT NULL,
  `Monto` int(11) NOT NULL,
  `FK_Obras` int(11) NOT NULL,
  `FK_Proveedor` int(11) NOT NULL,
  `FK_Comprador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`N°_Factura`, `Fecha_Factura`, `IMG`, `Monto`, `FK_Obras`, `FK_Proveedor`, `FK_Comprador`) VALUES
(47090, '2022-06-30', '', 586980, 2, 3, 4),
(54214, '2022-06-30', '', 658485, 3, 5, 1),
(56381, '2022-06-30', '', 674795, 4, 5, 4),
(60930, '2022-06-10', '', 532051, 2, 1, 2),
(62386, '2022-06-30', '', 379917, 1, 3, 5),
(64555, '2022-06-10', '', 290768, 4, 1, 2),
(68891, '2022-06-26', '', 118792, 1, 5, 1),
(79951, '2022-06-30', '', 730736, 2, 3, 2),
(80628, '2022-06-10', '', 203435, 3, 1, 5),
(91500, '2022-06-30', '', 521237, 1, 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras`
--

CREATE TABLE `obras` (
  `ID_Obra` int(11) NOT NULL,
  `Nombre_Obra` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Estado_Obra` tinyint(2) NOT NULL,
  `Estado_Presupuesto` tinyint(2) NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Termino` date NOT NULL,
  `Estado_Pago` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `obras`
--

INSERT INTO `obras` (`ID_Obra`, `Nombre_Obra`, `Direccion`, `Estado_Obra`, `Estado_Presupuesto`, `Fecha_Inicio`, `Fecha_Termino`, `Estado_Pago`) VALUES
(1, 'Piscina Marco Mena', 'Calle Arlegui, 1180', 0, 1, '2022-06-15', '2022-06-30', 1),
(2, 'Quincho Elisa Ribes', 'Calle 1 Poniente, 123', 1, 1, '2022-06-24', '2022-06-30', 2),
(3, 'Radier Karen Zambrano', 'Calle León Xiii, 1339', 1, 2, '2022-06-16', '2022-06-30', 1),
(4, 'Casa Adrian Morillo', 'San Martin 538', 1, 2, '2022-06-18', '2022-06-30', 2),
(12, 'LOS MANZANOS', 'LOS MANZANOS', 0, 1, '2022-07-03', '2022-07-28', 1),
(13, 'LOS MANZANOS', 'LOS MANZANOS', 0, 1, '2022-07-09', '2022-07-25', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `ID_Proveedor` int(11) NOT NULL,
  `Nombre_Proveedor` varchar(50) NOT NULL,
  `RUT` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`ID_Proveedor`, `Nombre_Proveedor`, `RUT`) VALUES
(1, 'Colun', 303260323),
(2, 'ChileMAT', 628921210),
(3, 'Sodimac', 575909336),
(4, 'Maderas Garcia', 777148215),
(5, 'Ferreteria \"Don Agustin\"', 241506420),
(9, 'soy el queso', 1234);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `rut` int(9) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `rut`, `password`) VALUES
(5, 'claudio figueroa', 928304998, '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'cristian', 389501849, 'c37bf859faf392800d739a41fe5af151');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comprador`
--
ALTER TABLE `comprador`
  ADD PRIMARY KEY (`ID_Comprador`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`N°_Factura`),
  ADD KEY `fk_factura_comprador` (`FK_Comprador`),
  ADD KEY `fk_factura_obras` (`FK_Obras`),
  ADD KEY `fk_factura_proveedor` (`FK_Proveedor`);

--
-- Indices de la tabla `obras`
--
ALTER TABLE `obras`
  ADD PRIMARY KEY (`ID_Obra`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`ID_Proveedor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comprador`
--
ALTER TABLE `comprador`
  MODIFY `ID_Comprador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `obras`
--
ALTER TABLE `obras`
  MODIFY `ID_Obra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `ID_Proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `fk_factura_comprador` FOREIGN KEY (`FK_Comprador`) REFERENCES `comprador` (`ID_Comprador`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_factura_obras` FOREIGN KEY (`FK_Obras`) REFERENCES `obras` (`ID_Obra`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_factura_proveedor` FOREIGN KEY (`FK_Proveedor`) REFERENCES `proveedor` (`ID_Proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
