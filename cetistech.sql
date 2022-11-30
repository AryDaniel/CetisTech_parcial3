-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2022 a las 07:44:08
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
  `descripcion` text NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `carrito` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productosenventa`
--

INSERT INTO `productosenventa` (`id`, `nombre_producto`, `precio`, `descripcion`, `imagen`, `categoria`, `carrito`) VALUES
(1, 'pantalla LG 24GQ50F-B', 3853, 'Pantalla 24” Full HD (1920 x 1080).\r\n165Hz Refresh Rate, movimiento fluido para video juegos.', 'imagenesVenta/pantalla1.jpg', 'perifericos', 0),
(2, 'pantalla SAMSUNG LS24R350FZLXZX', 3199, 'La avanzada tecnología de confort ocular reduce la fatiga visual, permitiéndole utilizar el monitor por un mayor periodo de tiempo. Además, la tecnología Flicker Free elimina continuamente el agotador', 'imagenesVenta/pantalla2.jpg', 'perifericos', 0),
(3, 'pantalla SAMSUNG LC24F396FHLXZX ', 3875, 'Comodidad visual más natural\r\nFabricados en materiales de alta calidad\r\nCalidad a un precio asequible\r\nExplora nuestra gama de productos', 'imagenesVenta/pantalla3.jpg', 'perifericos', 0),
(4, 'Mouse Ocelot Gaming OGEM01\r\n', 570, 'Sensor más preciso: Cuenta con sensor óptico de alta precisión, que permite detectar los movimientos más precisamente al hacer movimientos rápidos.\r\n', 'imagenesVenta/mouse1.jpg', 'Componentes', 0),
(5, 'Mouse Free Wolf M6', 640, 'El nuevo mouse profesional personalizado para juegos 2022, apariencia simple y elegante, diseño ergonómico y aerodinámico, liviano y delgado lo hace ideal para viajar, puede caber fácilmente en un bol', 'imagenesVenta/mouse2.jpg', 'Componentes', 0),
(6, 'Mouse Logitech G502\r\n', 400, 'Además de las características principales de desempeño y personalización, hay muchos detalles meticulosamente diseñados.', 'imagenesVenta/mouse3.jpg', 'Componentes', 0),
(10, 'Auriculares Motorola Pulse XT120\r\n', 800, 'Escuchá música ininterrumpidamente con el Motorola Pulse 120. Calidad de sonido impresionante y bajos mejorados. Cable con plug de 3.5 mm que también cuenta con un micrófono.', 'imagenesVenta/auriculares1.png', 'Perifericos', 0),
(11, 'Auricular Gamer Kotion PC Azul', 1200, 'Retroiluminacion Led en auriculares y micrófono para PC, PS4, Xbox One y Switch.', 'imagenesVenta/auriculares2.jpg', 'Perifericos', 0),
(12, 'Auriculares para juegos de alta fidelidad', 980, 'Los CORSAIR VIRTUOSO RGB Wireless ofrecen una experiencia de sonido de alta fidelidad y una comodidad continua gracias a las orejeras de espuma.', 'imagenesVenta/auriculares3.png', 'Perifericos', 0),
(13, 'Telcel Apple iPhone 11 Black\r\n', 11800, 'iPhone 11 es el nuevo favorito entre los gadgets del momento.\r\ntamaño de 6.1\" con pantalla con tecnología LCD Liquit Retina, True Tone', 'imagenesVenta/Apple11Black.jpg', 'Telefono', 0),
(14, 'IPhone 9 - SE ', 7200, '+Body Dimensions 138.4 x 67.3 x 7.3 mm (5.45 x 2.65 x 0.29 in)\r\n+Sreen Glass Gorilla Glass, Screen 5.5 inches, 83.4 cm2\r\n+Aluminum back, aluminum frame\r\n+Nano-SIM\r\n+Resolution 750 x 1334 pixels\r\n+3D Touch display & home button\r\n+Operating System: iOS 13', 'imagenesVenta/iphone-9-back.jpg', 'Telefono', 0),
(15, 'Apple iPhone 8', 4890, 'This Apple iPhone 8 64GB Factory Unlocked Smartphone has been determined fully functional by our industry leading functionality inspection.', 'imagenesVenta/iphone8black.jpg', 'Telefono', 0),
(16, 'IP68 Impermeable Relojes Inteligentes con Monitor de Ritmo Cardíaco', 479, '- Monitor de Ritmo Cardíaco y de Sueño\r\n- Seguimiento de Actividades en Tiempo Real\r\n- Multifunción y Notificación Mensaje\r\n- Pantalla OLED y IP68 Resistente al Agua', 'imagenesVenta/RelojesInteligentes1.jpg', 'relog', 0),
(17, 'Q8 stylish Relojes sports smartwatch', 1200, 'Reloj inteligente deportivo para hombre y mujer, pulsera con control del ritmo cardíaco, resistente al agua, para Android e iOS, 2020\r\n', 'imagenesVenta/RelojesInteligentes2.jpg', 'reloj', 0),
(18, 'soundpeats smartwatch Relojes ipx68', 699, 'Color - Purpúreo + Rosa\r\nTamaño de la pantalla - 1.69 Pulgadas\r\nForma - Fectangular\r\nRango de edad - Adulto', 'imagenesVenta/RelojesInteligentes3.jpg', 'reloj', 0);

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
(1, 'admin@gmail.com', 'admin', 'admin'),
(2, 'cetis107.escolares@dgeti.sems.gob.mx\r\n', 'cetis107', 'cetis107'),
(3, 'joan.ochoa@cetis107.edu.mx\r\n', 'joan', 'joan'),
(4, 'cetis0107@hotmail.com', 'Jiq', '12345678'),
(6, 'fernando@cetis107.edu.mx', 'FERNANDO', 'FERNANDO'),
(7, 'contacto@bancoazteca.mx', 'bancoazteca', 'abc123');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
