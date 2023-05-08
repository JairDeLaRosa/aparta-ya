-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2023 a las 04:02:37
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `apartaya`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `idpropiedades` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `precio` float NOT NULL,
  `habitaciones` int(11) NOT NULL,
  `baños` int(11) NOT NULL,
  `barrio` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `idServicios` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`idpropiedades`, `tipo`, `precio`, `habitaciones`, `baños`, `barrio`, `direccion`, `idServicios`, `idUsuario`) VALUES
(1, 'Apartamento', 300, 2, 0, 'malvinas', 'eq31', 1, 1),
(2, 'Aparta Estudio', 400, 3, 0, 'fewef', '12134', 2, 1),
(3, 'Casa', 1200, 4, 0, 'laureles', '24-32', 3, 2),
(4, 'casa', 600, 3, 0, 'laureles', '15-09', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `idservicios` int(11) NOT NULL,
  `wifi` varchar(45) NOT NULL,
  `aireAC` varchar(45) NOT NULL,
  `gas` varchar(45) NOT NULL,
  `agua` varchar(45) NOT NULL,
  `luz` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`idservicios`, `wifi`, `aireAC`, `gas`, `agua`, `luz`) VALUES
(1, 'si', 'si', 'si', 'si', 'si'),
(2, 'no', 'no', 'si', 'si', 'si'),
(3, 'si', 'si en todos los cuartos', 'si', 'si', 'si'),
(4, 'si', 'si', 'si', 'si', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `barrio` varchar(45) NOT NULL,
  `fotoPerfil` varchar(45) DEFAULT 'null.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellidos`, `email`, `contrasena`, `direccion`, `barrio`, `fotoPerfil`) VALUES
(1, 'Jair', 'De la rosa', 'yairdlrv@gmail.com', '1234', 'eq31', 'villa bella', 'null.jpg'),
(2, 'Jaime', 'rogriguez', 'jairrosav@unimagdalena.edu.co', '1234', '23245', 'ekjnjdae', 'null.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`idpropiedades`),
  ADD UNIQUE KEY `idpropiedades_UNIQUE` (`idpropiedades`),
  ADD KEY `idUsuario_idx` (`idUsuario`),
  ADD KEY `idPropiedades-idServicios_idx` (`idServicios`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`idservicios`),
  ADD UNIQUE KEY `idservicios_UNIQUE` (`idservicios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `idtable1_UNIQUE` (`idUsuario`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `idpropiedades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `idservicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD CONSTRAINT `idPropiedades-idServicios` FOREIGN KEY (`idServicios`) REFERENCES `servicios` (`idservicios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idPropiedades-idUsuarios` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
