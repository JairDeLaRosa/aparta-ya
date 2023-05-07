-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2023 a las 05:43:59
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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contrasena` varchar(40) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `barrio` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `contrasena`, `direccion`, `barrio`) VALUES
(1, 'Jair', 'De la rosa villalba', 'yairdlrv@gmail.com', '1234', 'malvinas', 'eq31'),
(2, 'jaime', 'rogriguez', 'jairrosav@unimagdalena.edu.co', '1234', '15-09', 'malvinas'),
(3, 'julio', 'gonzales', 'orellanoalfredo3@gmail.com', '12345', '24-32', 'fewef'),
(4, 'Aldo', 'Morales', 'AldoMorale@gmail.com', '12345', '2f2f2', 'ekjnjdae'),
(5, 'andres', 'De la rosa', 'supremexstore+030@protonmail.com', '89989', '24-32', 'fewef'),
(6, 'jaime', 'rogriguez', 'jaimer@gmail.com', '1234', '15-09', 'laureles'),
(7, 'julian', 'Morales', 'julian@gmail.com', '1234', '12134', 'villa bella'),
(8, 'jorge', 'andres', 'Jorge@gmail.com', 'lpad', '12134', 'malvinas'),
(9, 'jose', 'miguel', 'jose@gmail.com', '342134', '15-09', 'fewef'),
(10, 'julian', 'Morales', 'djjas@gmail.com', '13945', '12134', 'villa bella'),
(11, 'julian', 'gonzales', 'julianJose@gmail.com', '3131', '12134', 'malvinas'),
(12, 'andres', 'jesus', 'Ajesus@gmail.com', '12345', '12134', 'malvinas'),
(13, 'Sophia', 'Guzman', 'sophia@gmail.com', 'jairdlrv', '2f2f2', 'villa bella');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
