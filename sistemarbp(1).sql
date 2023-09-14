-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2023 a las 15:21:28
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemarbp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `id` int(11) NOT NULL,
  `hora_inicio` varchar(20) NOT NULL,
  `hora_final` varchar(20) NOT NULL,
  `estado` varchar(10) NOT NULL DEFAULT 'A',
  `id_usuario` int(11) NOT NULL,
  `id_zona` int(11) NOT NULL,
  `id_camion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id`, `hora_inicio`, `hora_final`, `estado`, `id_usuario`, `id_zona`, `id_camion`) VALUES
(87, '1', '6', 'A', 14, 2, 12),
(90, '8', '6', 'A', 4, 2, 12),
(91, '', '', 'I', 13, 1, 11),
(92, '10', '1', 'A', 9, 1, 11),
(93, '8', '10', 'A', 13, 1, 11),
(94, '4', '6', 'A', 6, 15, 12),
(95, '10', '11', 'A', 4, 2, 12),
(96, '7', '10', 'A', 6, 11, 12),
(97, '1', '6', 'I', 6, 15, 12),
(98, '10', '11', 'A', 6, 15, 12),
(99, '1', '2', 'A', 13, 15, 12),
(100, '1', '2', 'I', 8, 2, 11),
(101, '10', '12', 'I', 8, 18, 12),
(102, '4', '5', 'A', 8, 19, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camion`
--

CREATE TABLE `camion` (
  `id` int(11) NOT NULL,
  `placa` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `estado` varchar(10) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `camion`
--

INSERT INTO `camion` (`id`, `placa`, `marca`, `estado`) VALUES
(11, 'DDOS', 'JEEP', 'I'),
(12, 'D78DS', 'TOYOTA', 'A'),
(13, 'DDOS', 'JEEP', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_zona` int(11) NOT NULL,
  `motivo` varchar(300) NOT NULL,
  `archivo` varchar(200) NOT NULL DEFAULT 'archivo_default.png',
  `estado` varchar(10) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id`, `id_usuario`, `id_zona`, `motivo`, `archivo`, `estado`) VALUES
(70, 5, 15, 'nuevo reclamo', '647abc532fe3b-', 'A'),
(72, 5, 2, 'dsfsd', '647abc7249463-', 'A'),
(73, 5, 10, 'fghf', '647abd7673af0-', 'I'),
(74, 5, 2, 'colores', '647abdd3f1d66-', 'I'),
(83, 5, 11, 'gh', '647ac586eba97-', 'I'),
(84, 5, 11, 'gh', '647ac587450b7-', 'I'),
(85, 5, 11, 'gh', '647ac58788cbe-', 'A'),
(86, 5, 12, 'rte', '647ac58f3fb82-', 'A'),
(133, 5, 17, 'jhjhjhohoihiohio', 'C:\\fakepath\\carbon (2).png', 'A'),
(134, 5, 11, 'bg', 'C:\\fakepath\\carbon.png', 'A'),
(135, 16, 16, 'hay mucha basura X en la zonax', 'C:\\fakepath\\45454hd.jpg', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `estado` varchar(10) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo`, `estado`) VALUES
(1, 'Administrador', 'A'),
(2, 'Trabajador', 'A'),
(3, 'Usuario', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `dni` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `avatar` varchar(100) NOT NULL DEFAULT 'trabajador_default.png',
  `estado` varchar(5) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`id`, `user`, `pass`, `nombres`, `apellidos`, `dni`, `email`, `telefono`, `avatar`, `estado`) VALUES
(14, 'Jose', '51521', 'Joselito', 'Garcia', '132132', 'kos@gmail', '5445645', 'trabajador_default.png', 'A'),
(16, 'Mario', '', 'Marione', 'Serron', '446545', 'a@fdl', '45654465', 'trabajador_default.png', 'A'),
(17, 'trabajadorx', '', 'cesar', 'pachecho', '453355', 'cesar@gmail', '65665', 'trabajador_default.png', 'I'),
(18, 'bles', '', 'Diego', 'Perez', '465465', 'dieg6@gmail.com', '454545411', 'trabajador_default.png', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `referencia` varchar(100) DEFAULT NULL,
  `dni` int(12) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefono` int(12) DEFAULT NULL,
  `avatar` varchar(200) NOT NULL DEFAULT 'user_default.png',
  `estado` varchar(10) NOT NULL DEFAULT 'A',
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `pass`, `nombres`, `apellidos`, `direccion`, `referencia`, `dni`, `email`, `telefono`, `avatar`, `estado`, `id_tipo`) VALUES
(3, 'nuevousuario', '12345678', 'Walter Nick', 'Suel', NULL, NULL, 12345678, 'walter123@gmail.com', 123456777, '644624b4c054b-Captura.PNG', 'A', 1),
(4, 'usuarioprueba', '', 'carlitos', 'polol', NULL, NULL, 12345678, 'koko@gmail.com', 123456789, 'user_default.png', 'A', 2),
(5, 'probandoaqui', 'AU5QedcgUGV2TnksnkAmbw==', 'walteer', 'suelele', NULL, NULL, 12345678, 'walter@gmail.com', 123456789, 'user_default.png', 'A', 1),
(6, 'leonidas', '22A4SF/3fjDVZiSUDKZi4g==', 'leo', 'chavez', NULL, NULL, 54688795, 'leo@asd.com', 995789646, 'user_default.png', 'A', 2),
(7, 'leonidasAD', '22A4SF/3fjDVZiSUDKZi4g==', 'leo', 'chavez', NULL, NULL, 76499469, 'qepg001@gmail.com', 945654864, 'user_default.png', 'A', 1),
(8, 'trabajador', '22A4SF/3fjDVZiSUDKZi4g==', 'juancito', 'lopez', NULL, NULL, 76466498, 'juan@gmail.com', 920721494, 'user_default.png', 'A', 2),
(9, 'Jose', '123456', 'Jose', 'obrador', NULL, NULL, 76466498, 'jose@123', 954877654, 'user_default.png', 'A', 2),
(10, 'leonidas2', '123456', 'leo', 'chavez', NULL, NULL, 76499468, 'sdfsdf', 945654864, 'user_default.png', 'A', 2),
(11, 'leonidas3', 'qweqwe', 'leonardo david', 'khjkjh', NULL, NULL, 76499468, 'sdfsdf', 995789646, 'user_default.png', 'A', 2),
(12, 'administrador', '321654', 'leonardo', 'chavez calderon de la barca', NULL, NULL, 76499468, 'qepg456@gmail.com', 995789646, 'user_default.png', 'A', 2),
(13, 'trabajador', '654', 'leonardo', 'khjkjh', NULL, NULL, 76499468, 'qepg456@gmail.com', 926498462, 'user_default.png', 'A', 2),
(14, 'leonidasAD2', '98764321', 'leonardo', 'chavez calderon de la barca', NULL, NULL, 76499468, 'sdfsdf', 997501734, 'user_default.png', 'A', 2),
(15, 'pedro', '654', 'pedro', 'perez', NULL, NULL, 649, 'qwe', 954877654, 'user_default.png', 'A', 2),
(16, 'usuario', '22A4SF/3fjDVZiSUDKZi4g==', 'usuarioA', 'A', NULL, NULL, 64649946, 'asdasd@asdasdas', 123456789, 'user_default.png', 'A', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `dias_recojo` varchar(10) NOT NULL,
  `horario_recojo` date NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `estado` varchar(10) NOT NULL DEFAULT 'A',
  `mapa` varchar(500) NOT NULL,
  `imagen` varchar(50) NOT NULL DEFAULT 'zona_default.png',
  `descripcion` varchar(500) NOT NULL,
  `comentarios` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`id`, `nombre`, `tipo`, `dias_recojo`, `horario_recojo`, `responsable`, `estado`, `mapa`, `imagen`, `descripcion`, `comentarios`) VALUES
(1, 'Panamericana', 'Residencial', 'lunes', '2023-05-10', 'josessss', '0', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.2177909377465!2d-77.07845952396318!3d-11.959417640282531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce23d0bbec13%3A0x7eb42a2b18aa3fcf!2sAv.%20Central%20%26%20Av.%20Pr%C3%B3ceres%2C%20Los%20Olivos%2015306!5e0!3m2!1ses!2spe!4v1683489530820!5m2!1ses!2spe', 'zona_default.png', 'hola peru', ''),
(2, 'Huandoy', 'Asentamiento', 'martes', '2023-05-30', 'pedro', '0', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1951.6978664338592!2d-77.07446252891228!3d-11.947079791993314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d1d97716ffc3%3A0x1ab61e9b09448975!2sACADEMIAS%20DECANA!5e0!3m2!1ses!2spe!4v1683492454404!5m2!1ses!2spe\"  style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'zona_default.png', 'hola chile', ''),
(10, 'nico', 'asad', 'dsd', '2023-05-17', 'dfsdfd', '1', 'fsdfsd', 'zona_default.png', 'dfsdf', 'sdfsd'),
(11, 'colos', 'sfsc', '', '0000-00-00', 'scscs', '1', '', 'zona_default.png', '', ''),
(12, 'Huandoy', 'Comercial', '', '0000-00-00', 'Juliana', 'A', '', 'zona_default.png', '', ''),
(13, 'Naranjal', 'Asentamiento', '', '0000-00-00', 'Suarez', 'A', '', 'zona_default.png', '', ''),
(14, 'central', 'asenta', '', '0000-00-00', 'jorge', 'I', '', 'zona_default.png', '', ''),
(15, 'olivos', 'pliov', '', '0000-00-00', 'plvdld', 'I', '', 'zona_default.png', '', ''),
(16, 'zonax', 'resid', '', '0000-00-00', 'julio', 'A', '', 'zona_default.png', '', ''),
(17, 'Villasol', 'Residencial', '', '0000-00-00', 'Martinez', 'A', '', 'zona_default.png', '', ''),
(18, 'Covida', 'Asentamiento', '', '0000-00-00', 'Hector', 'I', '', 'zona_default.png', '', ''),
(19, 'eliminar', 'eliminar', '', '0000-00-00', 'eliminar', 'I', '', 'zona_default.png', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`,`id_zona`,`id_camion`),
  ADD KEY `id_camion` (`id_camion`),
  ADD KEY `id_zona` (`id_zona`);

--
-- Indices de la tabla `camion`
--
ALTER TABLE `camion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`,`id_zona`),
  ADD KEY `id_zona` (`id_zona`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo` (`id_tipo`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT de la tabla `camion`
--
ALTER TABLE `camion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `actividad_ibfk_2` FOREIGN KEY (`id_camion`) REFERENCES `camion` (`id`),
  ADD CONSTRAINT `actividad_ibfk_3` FOREIGN KEY (`id_zona`) REFERENCES `zona` (`id`);

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `solicitud_ibfk_2` FOREIGN KEY (`id_zona`) REFERENCES `zona` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
