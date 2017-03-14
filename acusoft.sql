-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2015 a las 03:59:58
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `acusoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE IF NOT EXISTS `actividades` (
  `codigo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`codigo`, `descripcion`) VALUES
('AGRUPAR DESIGUALES', 'AGRUPAR DESIGUALES'),
('AGRUPAR IGUALES', 'AGRUPAR IGUALES'),
('ARMAR PALABRAS', 'ARMAR PALABRAS'),
('ARMAR ROMPECABEZAS', 'ARMAR ROMPECABEZAS'),
('ASOCIACION DE COLORES CON', 'ASOCIACION DE COLORES CON'),
('ASOCIAR COLOR VERDE CON L', 'ASOCIAR COLOR VERDE CON L'),
('CLASIFICACION ANIMALES DO', 'CLASIFICACION ANIMALES DO'),
('CLASIFICAR OBJETOS', 'CLASIFICAR OBJETOS'),
('DECORACION CON CASCARA DE', 'DECORACION CON CASCARA DE'),
('DECORACION DE OBJETOS CON', 'DECORACION DE OBJETOS CON'),
('DECORAR CON TEMPERA ', 'DECORAR CON TEMPERA '),
('DELINEADO DE FIGURAS', 'DELINEADO DE FIGURAS'),
('DEPORTIVAS EN EL AULA', 'DEPORTIVAS EN EL AULA'),
('DEPORTIVAS EN LAS ZONAS V', 'DEPORTIVAS EN LAS ZONAS V'),
('DESARROLLO DE TRAZADO CON', 'DESARROLLO DE TRAZADO CON'),
('DIBUJAR EN FOAMY ', 'DIBUJAR EN FOAMY '),
('DIBUJAR EN PAPEL CRAFT ', 'DIBUJAR EN PAPEL CRAFT '),
('DIFERENCIAR FIGURAS', 'DIFERENCIAR FIGURAS'),
('DIFERENCIAR TAMANOS ', 'DIFERENCIAR TAMANOS '),
('ELABORACION DE ELEMENTOS ', 'ELABORACION DE ELEMENTOS '),
('ELABORACION DE MUNECOS', 'ELABORACION DE MUNECOS'),
('ELABORAR CARTELES ', 'ELABORAR CARTELES '),
('ELEMENTOS RECICLABLES', 'ELEMENTOS RECICLABLES'),
('ESCRIBIR NOTAS', 'ESCRIBIR NOTAS'),
('HACER LISTADOS', 'HACER LISTADOS'),
('LEER IMAGENES DE CUENTOS', 'LEER IMAGENES DE CUENTOS'),
('MANIPULACION DE LODO', 'MANIPULACION DE LODO'),
('MANIPULACION PLASTILINA', 'MANIPULACION PLASTILINA'),
('MOVIMIENTOS DEL CUERPO ', 'MOVIMIENTOS DEL CUERPO '),
('OBSERVACION DE SI MISMO E', 'OBSERVACION DE SI MISMO E'),
('OBSERVAR IMAGENES', 'OBSERVAR IMAGENES'),
('PEGAR FIGURAS DE PAPEL', 'PEGAR FIGURAS DE PAPEL'),
('PINTAR MANOS Y PIES', 'PINTAR MANOS Y PIES'),
('RASGADO DE PAPEL', 'RASGADO DE PAPEL'),
('RECONOCIEMIENTO DE LA NAT', 'RECONOCIEMIENTO DE LA NAT'),
('RECONOCIMIENTO DE PERSONA', 'RECONOCIMIENTO DE PERSONA'),
('RECONOCIMIENTO DE TRANSPO', 'RECONOCIMIENTO DE COLOR'),
('RECONOCIMIENTO DE VOCALES', 'RECONOCIMIENTO DE VOCALES'),
('RECORTAR IMAGENES', 'RECORTAR IMAGENES'),
('RECORTAR NOMBRES', 'RECORTAR NOMBRES'),
('RECORTAR PEDAZOS DE TELA ', 'RECORTAR PEDAZOS DE TELA '),
('RECORTAR SILUETAS', 'RECORTAR SILUETAS'),
('REPRESENTACION DE OBRAS ', 'REPRESENTACION DE OBRAS '),
('SALTOS', 'SALTOS'),
('SEPARACION DE BASURA DETE', 'SEPARACION DE BASURA DETE'),
('SIMULACROS DE EMERGENCIAS', 'SIMULACROS DE EMERGENCIAS'),
('SOCIALIZACION DE APRENDIZ', 'SOCIALIZACION DE APRENDIZ'),
('TEATRO', 'TEATRO'),
('TRABAJAR CON CARTELES', 'TRABAJAR CON CARTELES'),
('VISTAS DE VIDEOS VARIOS', 'VISTAS DE VIDEOS VARIOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acudientes`
--

CREATE TABLE IF NOT EXISTS `acudientes` (
  `codigo_estudiante` int(25) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `acudientes`
--

INSERT INTO `acudientes` (`codigo_estudiante`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`) VALUES
(123, 'yolanda', 'piraquive', '2234435', 'calle 87 numero 102 60', 'yoli@gmail.com'),
(1122, 'daniel', 'reyes', '54654651', 'calle 43 cra 56|', 'daniel@gmail.com'),
(1234, 'maria', 'quintero', '626566', 'calle 187 numero 12', 'maria@gmail.com'),
(2222, 'jose', 'perez', '234355', 'calle 98 cra 23', 'jose@yahoo.es'),
(3333, 'fernando', 'casallas', '2355453', 'calle 54 cra 23', 'fernando@porvenir.com'),
(4444, 'jonathan', 'molano', '65644', 'calle 55 cra 23', 'johathan@gmail.com'),
(5555, 'leonardo', 'delgado', '535342', 'cra 5 calle 78', 'leo@gmail.com'),
(6666, 'johan', 'rodriguez', '654776', 'calle 54 cra 14', 'johan@gmail.com'),
(7777, 'liliana', 'mendez', '439495', 'calle 3 cra 54', 'liliana@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `estatura` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `grupo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_acudiente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`codigo`, `nombre`, `apellido`, `edad`, `estatura`, `peso`, `grupo`, `codigo_acudiente`) VALUES
(1122, 'andres', 'romero', 32, 34, 6, 'Parvulos A', 1122),
(3333, 'alex', 'solano', 45, 23, 43, 'Caminador B', 3333),
(4444, 'david', 'serrano', 23, 14, 6, 'Jardin A', 4444),
(7777, 'nestor', 'nieto', 43, 45, 12, 'Prejardin A', 7777),
(8888, 'natalia', 'rozo', 23, 42, 12, 'Salacuna A', 8888),
(12345, 'Julian ', 'Delgado', 23, 3, 6, 'PreJardin B', 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
  `codigo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`codigo`, `descripcion`) VALUES
('Caminador A', 'Caminador A'),
('Caminador B', 'Caminador B'),
('Jardin A', 'Jardin A'),
('Jardin B', 'Jardin B'),
('Parvulos A', 'Parvulos A'),
('Parvulos B', 'Parvulos B'),
('Prejardin A', 'Prejardin A'),
('PreJardin B', 'PreJardin B'),
('Salacuna A', 'Salacuna A'),
('Salacuna B', 'Salacuna B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE IF NOT EXISTS `novedades` (
  `codigo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`codigo`, `descripcion`) VALUES
('Alimentacion', 'Alimentacion'),
('Comportamiento', 'Comportamiento'),
('Control Esfinteres', 'Control Esfinteres'),
('Golpe o Rasguno', 'Golpe o Rasguno'),
('Seguimiento Psicolgico', 'Seguimiento Psicolgico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `ID` int(11) NOT NULL,
  `DESCRIPCION` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`ID`, `DESCRIPCION`) VALUES
(1, 'admin'),
(2, 'operador'),
(3, 'customer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_actividades`
--

CREATE TABLE IF NOT EXISTS `reporte_actividades` (
`ID` int(11) NOT NULL,
  `actividad` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `grupo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `comentario` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reporte_actividades`
--

INSERT INTO `reporte_actividades` (`ID`, `actividad`, `grupo`, `comentario`, `fecha`) VALUES
(1, ' AGRUPAR DESIGUALES ', 'Caminador B', 'se realiza a las 3PM', '2015-05-12'),
(2, ' ASOCIACION DE COLORES CO', 'Caminador A', 'se realiza unicamente por 30 min', '2015-05-12'),
(5, ' CLASIFICAR OBJETOS ', 'Salacuna B', 'se realiza por poco tiempo', '2015-05-13'),
(6, ' RECORTAR NOMBRES ', 'Prejardin A', '', '2015-05-12'),
(7, ' RECORTAR NOMBRES ', 'PreJardin B', '', '2015-05-12'),
(8, ' DECORACION CON CASCARA D', 'Caminador B', 'se realizara de 3 - 6pm', '2015-05-12'),
(9, ' AGRUPAR DESIGUALES ', 'Salacuna A', 'prueba de registro', '2015-05-15'),
(10, ' DESARROLLO DE TRAZADO CO', 'Parvulos A', 'Se realiza trabajo de campo', '2015-05-16'),
(15, ' DEPORTIVAS EN EL AULA ', ' Parvulos A ', 'Se realizara con juguetes', '2015-05-04'),
(16, ' ASOCIACION DE COLORES CO', ' Jardin A ', 'Se requieren elementos', '2015-05-21'),
(19, ' ASOCIACION DE COLORES CO', ' Jardin B ', 'test', '2015-05-18'),
(20, ' ARMAR ROMPECABEZAS ', ' Jardin A ', 'TEST', '2015-05-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_novedades`
--

CREATE TABLE IF NOT EXISTS `reporte_novedades` (
`ID` int(11) NOT NULL,
  `novedad` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `grupo` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estudiante` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `comentario` mediumtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `reporte_novedades`
--

INSERT INTO `reporte_novedades` (`ID`, `novedad`, `grupo`, `estudiante`, `comentario`, `fecha`) VALUES
(1, 'Alimentacion', 'Parvulos B', '1122', 'El niño no come verduras', '2015-05-12'),
(2, 'Alimentacion', 'Caminador B', '1234', 'El niño no come verduras', '2015-05-12'),
(3, 'Comportamiento', 'Jardin A', '2222', 'El niño se comporta mal', '2015-05-12'),
(4, 'Control Esfinteres', 'Jardin B', '3333', 'El niño al parecer presenta inconvenientes de salud', '2015-05-12'),
(5, 'Golpe o Rasguno', 'Parvulos A', '4444', 'el niño se cae y se golpea en una pierna', '2015-05-11'),
(6, 'Golpe o Rasguno', 'PreJardin B', '5555', 'la niña se cae y se golpea en un brazo', '2015-05-11'),
(7, 'Alimentacion', 'Prejardin A', '6666', 'El niño no come verduras', '2015-05-11'),
(8, 'Golpe o Rasguno', 'Caminador B', '7777', 'El niño no come carne', '2015-05-11'),
(9, 'Control Esfinteres', 'Parvulos B', '8888', 'Presenta problemas de salud', '2015-05-11'),
(10, 'Golpe o Rasguno', 'Salacuna B', '12345', 'El niño se golpea en la cabeza con la mesa', '2015-05-12'),
(12, ' Alimentacion ', 'Jardin A', ' 4444 ', 'test', '2015-05-13'),
(13, ' Comportamiento ', ' Jardin B ', ' 4444 ', 'se cayo', '2015-05-17'),
(14, ' Control Esfinteres ', ' Jardin A ', ' 4444 ', 'test', '2015-05-20'),
(15, ' Alimentacion ', ' Jardin A ', ' 4444 ', 'test', '2015-05-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_usuario` int(4) NOT NULL,
  `user` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_user` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_usuario`, `user`, `nombre_user`, `correo`, `clave`, `perfil`) VALUES
(1, 'julian', 'julian', 'julian@gmail.com', 'julian', 2),
(2, 'jose', 'jose', 'jose@gmail.com', 'jose', 2),
(3, 'admin', 'admin', 'admin@gmail.com', 'admin', 1),
(4, 'padre1', 'padre1', 'padre1', 'padre1', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
 ADD PRIMARY KEY (`codigo`), ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indices de la tabla `acudientes`
--
ALTER TABLE `acudientes`
 ADD PRIMARY KEY (`codigo_estudiante`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
 ADD PRIMARY KEY (`codigo`), ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
 ADD PRIMARY KEY (`codigo`), ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indices de la tabla `novedades`
--
ALTER TABLE `novedades`
 ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
 ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `reporte_actividades`
--
ALTER TABLE `reporte_actividades`
 ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `reporte_novedades`
--
ALTER TABLE `reporte_novedades`
 ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_usuario`), ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reporte_actividades`
--
ALTER TABLE `reporte_actividades`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `reporte_novedades`
--
ALTER TABLE `reporte_novedades`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
