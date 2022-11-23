-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2022 a las 22:57:15
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cetistech`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productosenventa`
--

CREATE TABLE `productosenventa` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(200) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `carrito` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productosenventa`
--

INSERT INTO `productosenventa` (`id`, `nombre_producto`, `precio`, `descripcion`, `imagen`, `categoria`, `carrito`) VALUES
(1, 'LG 24GQ50F-B', 3853, 'Pantalla 24” Full HD (1920 x 1080).\r\n165Hz Refresh Rate, movimiento fluido para video juegos.', 'imagenesVenta/pantalla1.jpg', 'perifericos', 0),
(2, 'SAMSUNG LS24R350FZLXZX', 3199, 'La avanzada tecnología de confort ocular reduce la fatiga visual, permitiéndole utilizar el monitor por un mayor periodo de tiempo. Además, la tecnología Flicker Free elimina continuamente el agotador', 'imagenesVenta/pantalla2.jpg', 'perifericos', 0),
(3, 'SAMSUNG LC24F396FHLXZX ', 3875, 'Comodidad visual más natural\r\nFabricados en materiales de alta calidad\r\nCalidad a un precio asequible\r\nExplora nuestra gama de productos', 'imagenesVenta/pantalla3.jpg', 'perifericos', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `correo`, `usuario`, `password`) VALUES
(1, 'ary@gmail.com', 'ary', 'ary');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productosenventa`
--
ALTER TABLE `productosenventa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productosenventa`
--
ALTER TABLE `productosenventa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
