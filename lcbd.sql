-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2020 a las 04:56:42
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lcbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vip`
--

CREATE TABLE `vip` (
  `ID` int(4) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Contraseña` varchar(20) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Edad` int(3) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vip`
--

INSERT INTO `vip` (`ID`, `Usuario`, `Contraseña`, `Nombre`, `Apellido`, `Edad`, `Correo`, `Telefono`, `Ciudad`) VALUES
(1, 'Baron', '85264957', 'Carlos', 'Tapia', 25, 'carlosxaces@hotmail.com', '85264957', 'Talca');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vip`
--
ALTER TABLE `vip`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `vip`
--
ALTER TABLE `vip`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
