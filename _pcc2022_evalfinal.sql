-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2022 a las 07:11:53
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: ` pcc2022_evalfinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `nomensaje` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `telefono` int(8) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `mensaje` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`nomensaje`, `nombre`, `telefono`, `correo`, `mensaje`) VALUES
(12, 'pedro sosa', 12345678, 'pedrososa@gmail.com', 'solo para preguntar si aun tiene disponible el minicomponente sony de codigo 43843'),
(13, 'julio herrera', 12345678, 'julioherrera@gmail.com', 'buenos dias queria mas informacion a cerca de los huawei free buds 2 '),
(14, 'julian camo', 12345678, 'juliancamo@gmail.com', 'Buenas noches queria saber si ya tienen en estock la TV samsung de 60 pulgadas ya que llegue la semana pasada y no habian'),
(16, 'carlos vicente', 12345678, 'carlosreynoso@gmail.com', 'buenas tardes queria mas informacion acerca de los huawei buds');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `usuario`, `contrasena`) VALUES
(16, 'carlos', 'reynoso', 'cr', '123'),
(18, 'julio', 'herrera', 'jh', 'julio'),
(19, 'pedro', 'soza', 'ps', 'pedro'),
(20, 'julian', 'camo', 'jc', 'julian'),
(23, 'liceo canadiense', 'petapa', 'LCP', '123'),
(31, 'carlos', 'reynoso', 'admin', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`nomensaje`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `nomensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
