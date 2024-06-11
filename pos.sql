-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2024 a las 12:03:26
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
-- Base de datos: `pos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text NOT NULL,
  `id_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `id_prod`) VALUES
(1, 'Dispositivos moviles', 0),
(2, 'Smartwaches y Accesorios', 0),
(3, 'Audio', 0),
(4, 'Accesorios de PC', 0),
(5, 'Dispositivos de Streaming', 0),
(6, 'Gaming', 0),
(7, 'Cables y Adaptadores', 0),
(10, 'Hogar y Oficina', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` text NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_compra` float NOT NULL,
  `precio_venta` float NOT NULL,
  `ventas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_categoria`, `codigo`, `descripcion`, `imagen`, `stock`, `precio_compra`, `precio_venta`, `ventas`, `fecha`) VALUES
(1, 1, '101', 'Celular Redmi A3\r\n', '', 8, 100, 110000, 0, '2024-06-11 07:10:41'),
(2, 1, '102', 'Tablet Samsung Galaxy Tab A\r\n', '', 5, 95000, 105000, 0, '2024-06-11 07:10:50'),
(3, 1, '103', 'iPhone 13 Pro Max\r\n', '', 4, 500000, 650000, 0, '2024-06-11 07:11:00'),
(4, 1, '104', 'Samsung Galaxi A54\r\n', '', 6, 400000, 510000, 0, '2024-06-11 07:11:07'),
(5, 1, '105', 'Iphone 14 \r\n', '', 2, 560000, 750000, 0, '2024-06-11 07:11:16'),
(6, 2, '201', 'Reloj Inteligente SmartFit 5\r\n', '', 4, 24000, 34000, 0, '2024-06-11 07:11:27'),
(7, 2, '202', 'Malla para Reloj FitBand\r\n\r\n', '', 10, 5000, 6000, 0, '2024-06-11 07:11:37'),
(8, 2, '203', 'Apple Watch Series 6\r\n', '', 5, 200000, 300000, 0, '2024-06-11 07:11:46'),
(9, 2, '204', 'Samsung Galaxy Watch 4\r\n', '', 3, 200000, 250000, 0, '2024-06-11 07:11:55'),
(10, 2, '205', 'Xiaomi Mi Band 6\r\n', '', 8, 40000, 550000, 0, '2024-06-11 07:12:11'),
(11, 3, '301', 'Auriculares In Ear SoundPlus\r\n', '', 7, 2500, 4000, 0, '2024-06-11 07:12:18'),
(12, 3, '302', 'Auriculares de Vincha BassMax\r\n', '', 6, 4000, 7000, 0, '2024-06-11 07:12:33'),
(13, 3, '303', 'Auriculares Comunes BasicEar\r\n', '', 15, 1000, 2000, 0, '2024-06-11 07:12:47'),
(14, 3, '304', 'Parlante Bluetooth MegaSound\r\n', '', 5, 8000, 8500, 0, '2024-06-11 07:12:57'),
(15, 3, '305', 'Sony WH-1000XM4\r\n', '', 4, 25000, 35000, 0, '2024-06-11 07:13:06'),
(16, 4, '401', 'Teclado noga\r\n\r\n', '', 5, 8000, 9000, 0, '2024-06-11 07:13:19'),
(17, 4, '402', 'Mouse noga\r\n', '', 10, 15000, 16000, 0, '2024-06-11 07:13:28'),
(18, 4, '403', 'Combo Teclado+Mouse+Auri\r\n', '', 8, 9000, 10000, 0, '2024-06-11 07:13:39'),
(19, 4, '404', 'Base para Notebook CoolStand\r\n', '', 4, 3000, 4000, 0, '2024-06-11 07:13:51'),
(20, 4, '405', 'Logitech MX Master 3\r\n', '', 3, 10000, 11000, 0, '2024-06-11 07:14:00'),
(21, 5, '501', 'Chromecast Ultra\r\n', '', 6, 10000, 15000, 0, '2024-06-11 07:14:09'),
(22, 5, '502', 'Mi TV Stick 4K\r\n', '', 5, 8000, 12000, 0, '2024-06-11 07:14:19'),
(23, 5, '503', 'Roku Premiere Plus\r\n', '', 4, 10000, 16000, 0, '2024-06-11 07:14:28'),
(24, 5, '504', 'Roku Express Lite\r\n', '', 7, 5000, 8000, 0, '2024-06-11 07:14:38'),
(25, 5, '505', 'Amazon Fire TV Stick\r\n', '', 6, 7000, 10000, 0, '2024-06-11 07:14:47'),
(26, 6, '601', 'Silla Gamer ProChair X\r\n', '', 3, 25000, 35000, 0, '2024-06-11 07:15:08'),
(27, 6, '602', 'Joystick GameMaster 3\r\n', '', 8, 4000, 7000, 0, '2024-06-11 07:15:14'),
(28, 6, '603', 'Teclado Gamer RGB HyperX\r\n', '', 5, 6000, 10000, 0, '2024-06-11 07:15:25'),
(29, 6, '604', 'Mouse Gamer Razer DeathAdder\r\n', '', 5, 3000, 5000, 0, '2024-06-11 07:15:32'),
(30, 6, '605', 'Auriculares Gamer SteelSeries Arctis 7\r\n', '', 4, 7000, 12000, 0, '2024-06-11 07:15:41'),
(31, 7, '701', 'Cable USB-C RapidCharge\r\n', '', 20, 1000, 2000, 0, '2024-06-11 07:15:50'),
(32, 7, '702', 'Cable HDMI UltraHD\r\n', '', 15, 1500, 2500, 0, '2024-06-11 07:16:05'),
(33, 7, '703', 'Adaptador USB-C a HDMI\r\n', '', 10, 2000, 4000, 0, '2024-06-11 07:16:15'),
(34, 7, '704', 'Cable Lightning 2m\r\n', '', 10, 2200, 3250, 0, '2024-06-11 07:16:24'),
(35, 7, '705', 'Cable de Red Cat 6\r\n', '', 12, 2300, 4000, 0, '2024-06-11 07:16:34'),
(36, 10, '801', 'Humidificador AirFresh 2\r\n', '', 3, 10000, 15000, 0, '2024-06-11 07:16:44'),
(37, 10, '802', 'Purificador de Aire Philips 3000\r\n', '', 2, 12000, 18000, 0, '2024-06-11 07:16:53'),
(38, 10, '803', 'Silla de Oficina Ergonómica\r\n', '', 4, 8000, 12000, 0, '2024-06-11 07:17:01'),
(39, 10, '804', 'Escritorio de Oficina XL\r\n', '', 5, 15000, 20000, 0, '2024-06-11 07:17:11'),
(40, 10, '805', 'Lámpara LED de Escritorio\r\n', '', 5, 3000, 4500, 0, '2024-06-11 07:17:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `usuario`, `password`, `rol`) VALUES
(1, 'Usuario Administrador', 'admin', 'admin123', 'Administrador'),
(5, 'Juan Diego', 'djuan', 'juan123', 'Empleado Especial'),
(7, 'Maria Jose', 'majog', 'majo123', 'Empleado Especial'),
(9, 'maria', 'mariad', 'mari123', 'Vendedor'),
(17, 'Federico', 'fedef', '$2a$07$asxx54ahjppf4', 'Vendedor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
