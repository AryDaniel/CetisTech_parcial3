-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2022 a las 20:21:00
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
  `carrito` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productosenventa`
--

INSERT INTO `productosenventa` (`id`, `nombre_producto`, `precio`, `descripcion`, `imagen`, `categoria`, `carrito`) VALUES
(1, 'Monitor 24” UltraGear™ Full HD Gaming - LG', 3853, 'Pantalla 24” Full HD (1920 x 1080).\r\n165Hz Refresh Rate, movimiento fluido para video juegos.', 'imagenesVenta/pantalla1.jpg', 'Pantalla ', '0'),
(2, 'pantalla SAMSUNG LS24R350FZLXZX', 3199, 'La avanzada tecnología de confort ocular reduce la fatiga visual, permitiéndole utilizar el monitor por un mayor periodo de tiempo. Además, la tecnología Flicker Free elimina continuamente el agotador', 'imagenesVenta/pantalla2.jpg', 'Pantalla ', '0'),
(3, 'pantalla SAMSUNG LC24F396FHLXZX ', 3875, 'Comodidad visual más natural\r\nFabricados en materiales de alta calidad\r\nCalidad a un precio asequible\r\nExplora nuestra gama de productos', 'imagenesVenta/pantalla3.jpg', 'Pantalla ', '0'),
(4, 'Mouse Ocelot Gaming OGEM01\r\n', 570, 'Sensor más preciso: Cuenta con sensor óptico de alta precisión, que permite detectar los movimientos más precisamente al hacer movimientos rápidos.\r\n', 'imagenesVenta/mouse1.jpg', 'Mouse', '0'),
(5, 'Mouse Free Wolf M6', 640, 'El nuevo mouse profesional personalizado para juegos 2022, apariencia simple y elegante, diseño ergonómico y aerodinámico, liviano y delgado lo hace ideal para viajar, puede caber fácilmente en un bol', 'imagenesVenta/mouse2.jpg', 'Mouse', '0'),
(6, 'Mouse Logitech G502\r\n', 400, 'Además de las características principales de desempeño y personalización, hay muchos detalles meticulosamente diseñados.', 'imagenesVenta/mouse3.jpg', 'Mouse', '0'),
(10, 'Auriculares Motorola Pulse XT120\r\n', 800, 'Escuchá música ininterrumpidamente con el Motorola Pulse 120. Calidad de sonido impresionante y bajos mejorados. Cable con plug de 3.5 mm que también cuenta con un micrófono.', 'imagenesVenta/auriculares1.png', 'Auriculares ', '0'),
(11, 'Auricular Gamer Kotion PC Azul', 1200, 'Retroiluminacion Led en auriculares y micrófono para PC, PS4, Xbox One y Switch.', 'imagenesVenta/auriculares2.jpg', 'Auriculares ', '0'),
(12, 'Auriculares para juegos de alta fidelidad', 980, 'Los CORSAIR VIRTUOSO RGB Wireless ofrecen una experiencia de sonido de alta fidelidad y una comodidad continua gracias a las orejeras de espuma.', 'imagenesVenta/auriculares3.png', 'Auriculares ', '0'),
(13, 'Telcel Apple iPhone 11 Black\r\n', 11800, 'iPhone 11 es el nuevo favorito entre los gadgets del momento.\r\ntamaño de 6.1\" con pantalla con tecnología LCD Liquit Retina, True Tone', 'imagenesVenta/Apple11Black.jpg', 'Telefonos', '0'),
(14, 'Apple iPhone 9 ', 7200, '+Body Dimensions 138.4 x 67.3 x 7.3 mm (5.45 x 2.65 x 0.29 in)\r\n+Sreen Glass Gorilla Glass, Screen 5.5 inches, 83.4 cm2\r\n+Aluminum back, aluminum frame\r\n+Nano-SIM\r\n+Resolution 750 x 1334 pixels\r\n+3D Touch display & home button\r\n+Operating System: iOS 13', 'imagenesVenta/iphone-9-back.jpg', 'Telefonos', '1'),
(15, 'Apple iPhone 8', 4890, 'This Apple iPhone 8 64GB Factory Unlocked Smartphone has been determined fully functional by our industry leading functionality inspection.', 'imagenesVenta/iphone8black.jpg', 'Telefonos', '0'),
(16, 'IP68 Impermeable Relojes Inteligentes con Monitor de Ritmo Cardíaco', 479, '- Monitor de Ritmo Cardíaco y de Sueño\r\n- Seguimiento de Actividades en Tiempo Real\r\n- Multifunción y Notificación Mensaje\r\n- Pantalla OLED y IP68 Resistente al Agua', 'imagenesVenta/RelojesInteligentes1.jpg', 'reloj', '1'),
(17, 'Q8 stylish Relojes sports smartwatch', 1200, 'Reloj inteligente deportivo para hombre y mujer, pulsera con control del ritmo cardíaco, resistente al agua, para Android e iOS, 2020\r\n', 'imagenesVenta/RelojesInteligentes2.jpg', 'reloj', '0'),
(18, 'soundpeats smartwatch Relojes ipx68', 699, 'Color - Purpúreo + Rosa\r\nTamaño de la pantalla - 1.69 Pulgadas\r\nForma - Fectangular\r\nRango de edad - Adulto', 'imagenesVenta/RelojesInteligentes3.jpg', 'reloj', '0'),
(19, 'Alcatel 71A ', 2069, 'Se trata de un equipo con sistema operativo Android 10 con tecnología 4G y conexión wi-fi, cuenta con cámara trasera de 8 mp con flash y cámara frontal de 5 mp. La pantalla es de 5.5\", memoria interna 32 GB expandible a 128 GB y memoria RAM de 2GB. Funciona con procesador quad core de 1.2 GHz y con batería de 3000 mAh.', 'imagenesVenta/celular4.jpg', 'Telefonos', '1'),
(20, 'Samsung Galaxy S10+, 128GB, Prisma Negro - Totalmente desbloqueado Android', 5500, 'Este Galaxy S10 Plus está reacondicionado certificado. Es 100% funcional y en perfectas condiciones cosméticas con la posibilidad de unas pocas marcas de cabello claras. No viene en su embalaje original,  Este Galaxy S10 Plus es totalmente funcional con T-Mobile, AT&T y todas las demás redes GSM. ', 'imagenesVenta/celular5.png', 'Telefonos', '0'),
(21, 'Samsung Note 10 Desbloqueado, 256, negro, (Aura Black) Android', 6700, 'La carga rápida, la potencia inteligente de larga duración y el procesamiento de alta velocidad duran más que lo que lanzas en la Note 10.\r\nLa nueva evolución de S Pen te da la potencia de los gestos de aire, un disparador remoto y botón de lista de reproducción y escritura a mano, todo en una varita mágica.', 'imagenesVenta/celular6.jpg', 'Telefonos', '0'),
(22, 'Pantalla Samsung / FHD / 24 Pulg. / HDMI / 75 Hz / 5 ms / gris oscuro', 2550, '\"La descripción de los productos es una creación propia de Office Depot de México S.A. de C.V., por lo que su reproducción no autorizada, es sancionada en términos de la Ley de la Propiedad Industrial y de la Ley Federal del Derecho de Autor\".', 'imagenesVenta/pantalla4.jpg', 'Pantalla ', '0'),
(23, 'Pantalla 4K UHD de 27\", que admite la reproducción de contenido HDR para una increíble experiencia de entretenimiento.', 7890, 'Entretenimiento superior\n\nUna vista sorprendente:el diseño de bisel ultrafino de tres lados con resolución 4K UHD (3840 x 2160) le permite disfrutar de una visualización envolvente con una claridad increíble y detalles cuatro veces más precisos que los de la resolución Full HD. Admite la reproducción de contenido HDR para ofrecer una experiencia visual más realista.\n\nBrillante desde todos los ángulos: la tecnología de conmutación en el mismo plano (IPS) \n\n', 'imagenesVenta/pantalla5.jpg', 'Pantalla ', '0'),
(24, 'Pantalla Gamer ASUS 34\" / Radeon Freesync Premium / HDR10 / 1MS / HDMIx2 / DPx2 / UWQHD - 165Hz / TUF GAMING VG34VQL1B', 11690, 'Monitor Gamer ASUS 34\" / Radeon Freesync Premium / HDR10 / 1MS / HDMIx2 / DPx2 / UWQHD - 165Hz / TUF GAMING VG34VQL1B', 'imagenesVenta/pantalla6.jpg', 'Pantalla ', '0'),
(25, 'Mouse Gamer Logitech G203 / RGB / Alámbrico / USB / 8000dpi / Negro', 400, 'Mouse Alámbrico Gamer / Sensor óptico avanzado / Cable con conector USB / Velocidad de respuesta USB 1000 Hz (1 ms) / Microprocesador ARM de 32 bits / Programable en hasta 5 preajustes con el software Logitech G HUB / Tecnología RGB LIGHTSYNC con hasta 16.8 millones de colores disponibles', 'imagenesVenta/mouse4.jpg', 'Mouse', '0'),
(26, 'Mouse Gamer Óptico Spectra NM608 / 6400dpi / Negro', 200, 'Modelo NM608 Color Negro Medidas No disponibles Peso 100 gr\r\n\r\n', 'imagenesVenta/mouse5.jpg', 'Mouse', '0'),
(27, 'Mouse Gamer Alámbrico HyperX Pulsefire Core / Negro / USB', 800, 'Tipo óptico / Diseño ergonómico simétrico / Sensor Pixart PAW3327/ Velocidad 220 IPS / Aceleración 30G / Hasta 6.200 DPI / Ajustes 800, 1600, 2400, 3200 DPI / Interruptores Omron / Hasta 20 millones de pulsaciones / Iluminación RGB (1 zona y 4 niveles de brillo)\n', 'imagenesVenta/mouse6.jpg', 'Mouse', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email`, `usuario`, `password`, `imagen`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 'imgUsuario/DALLE.png'),
(3, 'joan.ochoa@cetis107.edu.mx\r\n', 'joan', 'joan', 'imgUsuario/login.png'),
(4, 'cetis0107@hotmail.com', 'Jiq', '12345678', 'imgUsuario/login.png'),
(6, 'fernando@cetis107.edu.mx', 'FERNANDO', 'FERNANDO', 'imgUsuario/login.png'),
(7, 'contacto@bancoazteca.mx', 'bancoazteca', 'abc123', 'imgUsuario/login.png'),

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
