-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-03-2022 a las 20:01:50
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `socialcity`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alarma`
--

CREATE TABLE `alarma` (
  `N.Alarma` int(11) NOT NULL,
  `Alias` varchar(50) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Fecha` varchar(10) NOT NULL,
  `Hora` varchar(5) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alarma`
--

INSERT INTO `alarma` (`N.Alarma`, `Alias`, `Nombre`, `Fecha`, `Hora`, `Descripcion`) VALUES
(2, 'Pablomi', 'Cafe-Bar Boulevar', '02-07-2021', '21:00', 'Ir a Recoger el paraguas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bar`
--

CREATE TABLE `bar` (
  `Nombre` varchar(50) NOT NULL,
  `Capacidad` varchar(30) NOT NULL,
  `Puntuacion` decimal(2,1) NOT NULL,
  `Horario` varchar(1000) NOT NULL,
  `CLIENTES_HABITUALES_ID` int(11) NOT NULL,
  `Eventos` varchar(5000) DEFAULT NULL,
  `JuegosDeMesa` varchar(100) DEFAULT NULL,
  `DIRECCION_NombreLocal` varchar(50) NOT NULL,
  `Foto` varchar(1000) DEFAULT NULL,
  `Jefe` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bar`
--

INSERT INTO `bar` (`Nombre`, `Capacidad`, `Puntuacion`, `Horario`, `CLIENTES_HABITUALES_ID`, `Eventos`, `JuegosDeMesa`, `DIRECCION_NombreLocal`, `Foto`, `Jefe`) VALUES
('Café Bar Andén Playa Club', '200', '3.9', 'De Jueves a Domingo: 23:00-4:30', 0, '- Jueves 6 de Marzo: Aniversario del Gim Tonic con el DJ Marco Carola. Todas nuestras Ginebras a un precio especial. Entrada: 5€ con opción de reserva en esta web. Requisitos: Ser mayor de edad y estar registrado en Socialcity.', 'Cartas, Dominó, Ajedrez', 'Café Bar Andén Playa Club', 'https://media-cdn.tripadvisor.com/media/photo-p/1a/27/94/35/getlstd-property-photo.jpg', 'Jefe_AndénPlayaClub'),
('Café Bar Cervecería Yates', '100', '4.3', 'De Lunes a Viernes: 9:00-3:00\r\nSábado: 18:00-1:00\r\nDomingo: 10:00-3:30', 0, NULL, 'Cartas, Dominó', 'Cafe Bar Cervecería Yates', 'https://metodoconstruccion.com/wp-content/uploads/2020/08/K1600_IMG_5600b.jpg', 'Jefe_CerveceríaYates'),
('Café Bar Chocaletería Doré', '50', '4.4', 'De Lunes a Viernes: 8:00-22:30\r\nJueves: 8:00-14:00 y de 18:00-1:00 \r\nSábado y Domingo: 9:30-15:00\r\n', 0, NULL, 'Cartas', 'Café Bar Chocolateria Doré', 'https://fastly.4sqi.net/img/general/600x600/2YOZ13H4E1HGHPAPHUPBUXMBXK3ZDUE055YKU0OGN2E1ATVH.jpg', 'Jefe_ChocolateríaDoré'),
('Café-Bar A Cova Céltica', '100', '4.5', 'De Lunes a Miércoles: 19:30-2:30\r\nDe Jueves a Sábado: 19:30-3:30\r\nDomingo: 19:30-2:30', 0, '- Actuación de Covagueira. Sábado 12 de Junio a partir de las 22:00', 'Cartas, dardos, ajedrez', 'Café Bar A Cova Celtica', 'https://www.e-distrito.com/archivos/1496924553-1.jpg', 'Jefe_ACovaCeltica'),
('Café-Bar A Dorna', '50', '4.0', 'De Lunes a Viernes: 8:00-23:30\r\nSábado: 9:30-1:00\r\nDomingo: 11:00-23:30', 0, 'Sin Eventos', 'Cartas, parchís, bingo, dardos', 'Cafe Bar A Dorna', 'https://10619-2.s.cdn12.com/rests/original/316_326503691.jpg', 'Jefe_ADorna'),
('Café-Bar Ancora', '30', '4.2', 'De Lunes a Jueves: 10:30-17:00 y de 19:30-23:00\r\nViernes y Sábado: 10:30-1:00\r\nDomingo: 10:30-23:00\r\nDía de cierre: Martes', 0, '- V Torneo de Poker: Máximo 20 personas, Sábado 13 de Marzo a las 20:00. Requisitos: Ser mayor de edad y estar registrado en Socialcity.', 'Cartas, Poker(1 consumición gratis para el ganador), Dardos, parchís', 'Café Bar Áncora', 'https://media-cdn.tripadvisor.com/media/photo-s/0f/d9/90/b6/cafeteria.jpg', 'Jefe_Ancora'),
('Café-Bar Aquitania', '80', '4.2', 'De Lunes a Jueves: 8:00-24:00\r\nViernes: 8:00-2:00\r\nSábado: 9:00-2:00\r\nDomingo: 11:00-24:00', 0, 'Sin eventos', 'Cartas, Dardos, Parchís, Ajedrez, otros.', 'Café Bar Aquitania', 'https://10619-2.s.cdn12.com/rests/original/106_507170839.jpg', 'Jefe_Aquitania'),
('Café-Bar Bora', '50', '4.7', 'De Lunes a Viernes: 7:30-24:00\r\nDías de cierre: Sábado y Domingo', 0, NULL, 'Cartas, Parchís, Dominó, Ajedrez', 'Cafe Bar Bora', 'https://lh3.googleusercontent.com/p/AF1QipOqn2u4MCBYktQD31BGsRgV_e0c5cWqSTLlrgWe=s1600-w467', 'Jefe_Bora'),
('Café-Bar Boulevard', '100', '4.1', 'De Lunes a Miércoles: 8:00-14:00 y de 17:00-23:00\r\nJueves: 8:00-14:00 y de 18:00-1:00\r\nViernes: 8:00-14:00 y de 17:00-1:00\r\nSábado: 18:00-1:00\r\nDomingo: 17:00-23:00\r\n', 0, '- Viernes 15 de Marzo, II Fiesta del orgullo gay, con la actuación de Miguel Boxe.', 'Cartas, Ajedrez, Parchís, Dardos, Villar', 'Café Bar Bulevard', 'https://10619-2.s.cdn12.com/rests/small/w550/h367/105_506865026.jpg', 'Jefe_Boulevard'),
('Café-Bar Burdeos', '50', '4.2', 'De Lunes a Viernes: 6:00-22:00\r\nSábado: 7:00-22:00\r\nDomingo: 8:00-22:00', 0, NULL, 'Cartas, dominó', 'Café Bar Burdeos', 'https://10619-2.s.cdn12.com/rests/original/108_509262214.jpg', 'Jefe_Burdeos'),
('Café-Bar Camelias', '30', '3.8', 'De Martes a Domingo: 10:00-22:00 \r\nDía de cierre: Lunes', 0, '', 'Cartas, Ajedrez', 'Café Bar Camelias', 'https://10619-2.s.cdn12.com/rests/original/305_500860171.jpg', 'Jefe_Camelias'),
('Café-Bar Cantante', '30', '4.2', 'De Martes a Jueves: 7:30-23:30\r\nViernes: 7:30-1:00\r\nSábado: 11:00-1:00\r\nDomingo: 11:00-23:00', 0, NULL, 'Cartas, Bingo, Dominó, Parchís, Ajedrez', 'Café Bar El Cantante', 'https://i0.wp.com/www.solco.es/wp-content/uploads/2020/08/IMG-20200825-WA0010.jpg?fit=800%2C600&ssl=1', 'Jefe_Cantante'),
('Café-Bar Casual', '80', '4.8', 'De Lunes a Jueves: 8:00-23:30 \r\nViernes: 8:00-24:00\r\nSábado: 8:00-24:00\r\nDía de cierre: Domingo', 0, NULL, 'Cartas, parchís, Ajedrez', 'Café Bar Casual', 'https://10619-2.s.cdn12.com/rests/original/325_477160726.jpg', 'Jefe_Casual'),
('Café-Bar Coctelería Bordello', '30', '4.7', 'De Martes a Jueves: 16:00-24:00\r\nViernes y Sábado: 16:00-1:30\r\nDomingo: 18:00-24:00', 0, NULL, 'Cartas', 'Café Bar Coctelería Bordello', 'https://media.traveler.es/photos/61376aabccdecaa3de670e96/master/w_1600%2Cc_limit/144347.jpg', 'Jefe_CocteleriaBordello'),
('Café-Bar Distrito', '50', '4.1', 'De Lunes a Viernes: 7:00-23:00\r\nSábado y Domingo: 8:00-23:00\r\n', 0, NULL, 'Cartas', 'Café Bar Districto', 'https://www.e-distrito.com/archivos/1496152098-1.jpg', 'Jefe_Districto'),
('Café-Bar El Conde', '50', '3.9', 'De Lunes a Domingo: 8:00-2:00', 0, NULL, 'Cartas, Villar', 'Café Bar El Conde', 'https://10619-2.s.cdn12.com/rests/original/102_506859253.jpg', 'Jefe_ElConde'),
('Café-Bar Elíptico', '100', '4.4', 'De Lunes a Domingo: 9:00-18:00', 0, NULL, 'Cartas, Ajedrez, Dardos', 'Cafe Bar Elíptico', 'https://10619-2.s.cdn12.com/rests/original/110_506813928.jpg', 'Jefe_Eliptico'),
('Café-Bar Élite', '50', '4.3', 'De Lunes a Viernes: 7:00-24:00\r\nSábado: 7:00-17:00\r\nDía de cierre: Domingo', 0, NULL, 'Cartas, Ajedrez, Dominó', 'Café Bar Élite', 'https://www.e-distrito.com/archivos/1525877218-1.jpg', 'Jefe_Elite'),
('Café-Bar La Churré', '30', '4.5', 'De Martes a Domingo: 11:00-23:00\r\nDía de cierre: Lunes', 0, NULL, 'Cartas', 'Café Bar La Churré', 'https://10619-2.s.cdn12.com/rests/original/109_510754998.jpg', 'Jefe_LaChurre'),
('Café-Bar La Compe', '100', '4.0', 'De Lunes a Sábado: 8:00-23:00\r\nDomingo: 9:00-23:00', 0, NULL, 'Cartas, Dominó', 'Café Bar La Compe', 'https://www.lacompe.es/imagenes/85/empresas/Img-715291-4_amp.jpg', 'Jefe_LaCompe'),
('Café-Bar La Garimbota', '50', '4.3', 'De Lunes a Viernes: 8:00-24:00\r\nSábados y Domingos: 9:00-24:00', 0, NULL, 'Cartas, Dardos', 'Café Bar La Garimbota', 'https://www.dxestion.com/wp-content/uploads/2016/12/tpv-coruna-icg-cashdro_5069.jpg', 'Jefe_LaGarimbota'),
('Café-Bar La Urbana', '50', '4.3', 'De Lunes a Domingo: 12:00-1:00', 0, NULL, 'Cartas, Dardos', 'Café Bar La Urbana', 'https://media-cdn.tripadvisor.com/media/photo-s/0d/b0/34/e4/la-urbana-vista-desde.jpg', 'Jefe_LaUrbana'),
('Café-Bar Las Cadenas', '30', '4.3', 'De Lunes a Jueves: 8:00-22:00\r\nViernes: 8:00-23:00\r\nSábado: 8:00-15:30\r\nDía de cierre: Domingo', 0, NULL, 'Cartas, Poker, Ajedrez, Parchís, Dardos', 'Café Bar Las Cadenas', 'https://static1-sevilla.abc.es/media/gurme/2022/01/23/s/bar-cardenas-U07275748347lUs-940x529@abc.jpg', 'Jefe_LasCadenas'),
('Café-Bar Las Dos Terrazas', '100', '4.0', 'De Lunes a Sábado: 9:00-22:00\r\nDomingo: 10:00-22:00\r\nDía de cierre: Jueves', 0, 'Cartas, Ajedrez', NULL, 'Cafe Bar Las Dos Terrazas', 'https://www.paxinasgalegas.es/imagenes/las-2-terrazas_img623729t0m0w1600h800.jpg', 'Jefe_LasDosTerrazas'),
('Café-Bar Manhattan', '200', '3.9', 'De Lunes a Jueves: 7:00-1:30\r\nViernes y Sábado: 7:00-2:00\r\nDomingo: 8:00-1:30', 0, NULL, 'Cartas, Dominó', 'Café Bar Manhattan', 'https://cflvdg.avoz.es/sc/480x/default/2016/11/17/00121479386883385679749/Foto/H04S5022.jpg', 'Jefe_Manhattan'),
('Café-Bar Meson Paris', '30', '4.4', 'De Lunes a Jueves: 8:00-23:30\r\nViernes: 8:00-24:00\r\nSábado: 8:00-15:30\r\nDía de cierre: Domingo', 0, NULL, 'Cartas, Dardos, Dominó, Ajedrez', 'Café Bar Mesón París', 'https://www.paxinasgalegas.es/imagenes/paris_img60672t0m0w1600h800.jpg', 'Jefe_MesonParis'),
('Café-Bar Mis Maruja', '30', '4.4', 'Martes y Jueves: 8:30-21:30\r\nMiércoles: 8:30-21:00\r\nViernes: 8:30-22:00\r\nSábado: 10:00-22:00\r\nDomingo: 10:00-21:00\r\nDía de cierre: Lunes', 0, NULL, 'Cartas, Parchís', 'Café Bar Mis Maruja ', 'https://imgs-akamai.mnstatic.com/42/13/42130f36490869ade9df9cc94edb6a07.jpg', 'Jefe_MisMaruja'),
('Café-Bar Os Trasnos', '50', '4.5', 'De Lunes a Domingo: 8:30-23:30\r\nDía de cierre: Sábado', 0, NULL, 'Cartas, Ajedrez, Dardos', 'Café Bar Os Trasnos', 'https://10619-2.s.cdn12.com/rests/original/345_326394305.jpg\r\n', 'Jefe_OsTrasnos'),
('Café-Bar Par 28', '50', '4.3', 'De Martes a Viernes: 8:00-23:00\r\nSábado: 9:30-24:00\r\nDomingo: 10:30-24:00\r\nDía de cierre: Lunes', 0, NULL, 'Cartas, Ajedrez', 'Café Bar Par 28', 'https://10619-2.s.cdn12.com/rests/original/108_506162307.jpg', 'Jefe_Par28'),
('Café-Bar Picnic', '80', '4.1', 'De Lunes a Viernes: 8:30-24:00\r\nSábado y Domingo: 10:00-24:00', 0, NULL, 'Cartas', 'Café Bar Picnic', 'https://www.lavozdegalicia.es/default/2022/01/14/00121642167361105788732/Foto/H13E2103.jpg', 'Jefe_Picnic'),
('Café-Bar Prisma', '50', '4.5', 'De Martes a Viernes: 8:00-24:00\r\nSábado y Domingo: 10:00-24:00', 0, NULL, 'Cartas', 'Café Bar Prisma', 'https://cygtecnicos.com/wp-content/uploads/2017/05/bar-prisma-1024x678.jpg', 'Jefe_Prisma'),
('Café-Bar Rialto Terraza', '100', '4.1', 'Miércoles y Jueves: 20:00-2:00\r\nViernes y Sábado: 17:00-4:30\r\nDomingo: 16:00-21:00\r\nDías de cierre: Lunes y Martes', 0, NULL, 'Cartas, Dominó', 'Café Bar Rialto Terraza', 'https://media-cdn.tripadvisor.com/media/photo-s/0b/e3/34/cf/rialto-coruna.jpg', 'Jefe_RialtoTerraza'),
('Café-Bar Sheraton', '50', '3.3', 'De Lunes a Sábado: 9:00-23:00\r\nDomingo: 11:00-23:00', 0, NULL, 'Cartas', 'Café Bar Sheraton', 'https://cflvdg.avoz.es/sc/O7El1z4M3T8S2sjY0w-SgjGO5js=/1280x/2017/10/09/00121507565761244934147/Foto/HO10C2F4_181445.jpg', 'Jefe_Sheraton'),
('Café-Bar Tela Marinera', '100', '4.5', 'Lunes: 18:00-1:00\r\nDe Martes a Viernes: 18:00-2:30\r\nSábado y Domingo: 12:00-2:30', 0, '- I Campeonato de Dardos Individual de Cricket 501. Sábado 11 y Domingo 12 de Diciembre', 'Cartas, Dardos', 'Café Bar Tela Marinera', 'https://10619-2.s.cdn12.com/rests/original/105_397567102.jpg', 'Jefe_TelaMarinera'),
('Café-Bar The Breen´s Tavern', '50', '4.3', 'De Lunes a Viernes: 8:30-1:00\r\nSábado y Domingo: 12:00-1:00', 0, NULL, 'Cartas, Dardos, Villar', 'Café Bar The Breen\'s Tavern', 'https://media.quincemil.com/imagenes/2019/11/13195349/IMG_8482-1024x683.jpg', 'Jefe_TheBreen´sTavern'),
('Café-Bar UNI', '50', '4.3', 'De Lunes y Miércoles: 8:00-24:00\r\nJueves: 8:00-2:00\r\nViernes: 8:00-4:00\r\nSábado: 9:00-4:00\r\nDomingo: 16:00-24:00', 0, NULL, 'Cartas, Dardos, Villar', 'Café Bar UNI', 'https://media-cdn.tripadvisor.com/media/photo-s/1a/71/2b/19/entrada-al-uni.jpg', 'Jefe_UNI'),
('Café-Bar Vanesa', '30', '4.0', 'De Lunes a Viernes: 7:00-23:00\r\nSábado y Domingo: 9:00-23:00', 0, NULL, 'Cartas', 'Cafe Bar Vanessa', 'https://www.paxinasgalegas.es/imagenes/vanessa_img84880t0m0w1600h800.jpg', 'Jefe_Vanesa'),
('Café-Bar Zurich', '50', '4.0', 'De Lunes a Domingo: Abierto las 24 horas', 0, NULL, 'Cartas, Poker(dinero ficticio) Dominó, Ajedrez, Dardos', 'Cafe Bar Zurich', 'https://img.restaurantguru.com/rc98-design-Zurich-2021-09-4.jpg', 'Jefe_Zurich');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bar_tiene_clientes_habituales`
--

CREATE TABLE `bar_tiene_clientes_habituales` (
  `BAR_Nombre` varchar(50) NOT NULL,
  `BAR_DIRECCION_ID` int(11) NOT NULL,
  `BAR_CLIENTES_HABITUALES_ID` int(11) NOT NULL,
  `CLIENTES_HABITUALES_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bar_tiene_historial_ocupacion`
--

CREATE TABLE `bar_tiene_historial_ocupacion` (
  `BAR_Nombre` varchar(50) NOT NULL,
  `BAR_DIRECCION_ID` int(11) NOT NULL,
  `BAR_CLIENTES_HABITUALES_ID` int(11) NOT NULL,
  `HISTORIAL_OCUPACION_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_habituales`
--

CREATE TABLE `clientes_habituales` (
  `ID` int(11) NOT NULL,
  `Edad` varchar(2) NOT NULL,
  `NombreLocal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes_habituales`
--

INSERT INTO `clientes_habituales` (`ID`, `Edad`, `NombreLocal`) VALUES
(1, '20', 'Café-Bar Boulevard'),
(2, '40', 'Restaurante La Sartén'),
(3, '40', 'Café-Bar A Cova Céltica'),
(4, '30', 'Café-Bar A Cova Céltica'),
(5, '30', 'Restaurante A Pulperia de Melide'),
(6, '40', 'Restaurante Asador El Atlantico'),
(7, '50', 'Restaurante Casa Canosa'),
(8, '30', 'Restaurante Chino Work Two'),
(9, '30', 'Restaurante Gloria Bendita'),
(10, '40', 'Restaurante Hünico'),
(11, '40', 'Restaurante Indú Masala'),
(12, '30', 'Restaurante Italiano Enzo´s'),
(13, '30', 'Restaurante Japonés Tempura'),
(14, '25', 'Restaurante Kairos Shisha'),
(15, '40', 'Restaurante La Penela'),
(16, '30', 'Restaurante La Sartén'),
(17, '30', 'Restaurante La Tagliatella'),
(18, '40', 'Restaurante Marisquería La Uva Dorada'),
(19, '30', 'Restaurante Mejicano Los Farolitos'),
(20, '25', 'Restaurante Mejicano Nana Pancha'),
(21, '30', 'Restaurante Mesón Os Castros'),
(22, '40', 'Restaurante Nova Lua Chea'),
(23, '30', 'Restaurante O Fado'),
(24, '30', 'Restaurante O Pendello'),
(25, '30', 'Restaurante O Pracer'),
(26, '30', 'Restaurante O Sampaio'),
(27, '40', 'Restaurante O Tellado'),
(28, '30', 'Restaurante Parrilla Buenos Aires'),
(29, '30', 'Restaurante Parrillada El Roble'),
(30, '30', 'Restaurante Peruano Margarita'),
(31, '40', 'Restaurante Petite Bretagne'),
(32, '25', 'Restaurante Pizzería Fito'),
(33, '40', 'Restaurante Pulpería Coruña'),
(34, '30', 'Restaurante Raxaría As Neves'),
(35, '30', 'Restaurante Rubia y Gallega'),
(36, '30', 'Restaurante Sampaio2'),
(37, '30', 'Restaurante The Breen\'s Tavern'),
(38, '30', 'Restautante Tapería Ancar'),
(39, '25', 'Café Bar Andén Playa Club'),
(40, '30', 'Café Bar Cervecería Yates'),
(41, '40', 'Café Bar Chocaletería Doré'),
(42, '30', 'Café-Bar A Cova Céltica'),
(43, '40', 'Café-Bar A Dorna'),
(44, '40', 'Café-Bar Ancora'),
(45, '30', 'Café-Bar Aquitania'),
(46, '40', 'Café-Bar Bora'),
(47, '25', 'Café-Bar Boulevard'),
(48, '40', 'Café-Bar Burdeos'),
(49, '30', 'Café-Bar Camelias'),
(50, '40', 'Café-Bar Cantante'),
(51, '30', 'Café-Bar Casual'),
(52, '30', 'Café-Bar Coctelería Bordello'),
(53, '40', 'Café-Bar Distrito'),
(54, '30', 'Café-Bar El Conde'),
(55, '30', 'Café-Bar Elíptico'),
(56, '30', 'Café-Bar Élite'),
(57, '40', 'Café-Bar La Churré'),
(58, '40', 'Café-Bar La Compe'),
(59, '30', 'Café-Bar La Garimbota'),
(60, '30', 'Café-Bar La Urbana'),
(61, '30', 'Café-Bar Las Cadenas'),
(62, '25', 'Café-Bar Las Dos Terrazas'),
(63, '50', 'Café-Bar Manhattan'),
(64, '40', 'Café-Bar Meson Paris'),
(65, '50', 'Café-Bar Mis Maruja'),
(66, '30', 'Café-Bar Os Trasnos'),
(67, '25', 'Café-Bar Par 28'),
(68, '25', 'Café-Bar Picnic'),
(69, '30', 'Café-Bar Prisma'),
(70, '30', 'Café-Bar Rialto Terraza'),
(71, '40', 'Café-Bar Sheraton'),
(72, '30', 'Café-Bar Tela Marinera'),
(73, '30', 'Café-Bar The Breen´s Tavern'),
(74, '30', 'Café-Bar UNI'),
(75, '30', 'Café-Bar Vanesa'),
(76, '40', 'Café-Bar Zurich');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `ID` int(11) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL,
  `RESTAURANTE_Nombre` varchar(50) NOT NULL,
  `BAR_Nombre` varchar(50) NOT NULL,
  `ME_GUSTA_ID` int(11) NOT NULL,
  `PERFIL_Alias` varchar(50) NOT NULL,
  `USUARIO_PERFIL_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `NombreLocal` varchar(50) NOT NULL,
  `Zona` varchar(20) NOT NULL,
  `Calle` varchar(50) NOT NULL,
  `Ciudad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`NombreLocal`, `Zona`, `Calle`, `Ciudad`) VALUES
('Café Bar A Cova Celtica', 'Orzán', 'Rua Orzán, 82', 'A Coruña'),
('Cafe Bar A Dorna', 'Plaza de Pontevedra', 'Plaza de Pontevedra, 5', 'A Coruña'),
('Café Bar Áncora', 'Paseo Marítimo', 'Avd. Navarra, 47', 'A Coruña'),
('Café Bar Andén Playa Club', 'Riazor', 'Complejo Playa Club, S/N', 'A Coruña'),
('Café Bar Aquitania', 'Matogrande', 'Rúa Juan Díaz Porlier, 1', 'A Coruña'),
('Cafe Bar Bora', 'Elviña', 'Braña de Someso, 7, Bajo', 'A Coruña'),
('Café Bar Bulevard', 'Riazor', 'Avd. Rubine, 14', 'A Coruña'),
('Café Bar Burdeos', 'Os Castros', 'Av. da Concordia, 14', 'A Coruña'),
('Café Bar Camelias', 'Barrio de las Florez', 'Rúa Camelias, S/N', 'A Coruña'),
('Café Bar Casual', 'Elviña', 'Birloque, 1', 'A Coruña'),
('Cafe Bar Cervecería Yates', 'Matogrande', 'Rúa Juan Díaz Porlier, 6', 'A Coruña'),
('Café Bar Chocolateria Doré', 'Ronda de Nelle', 'Rua Alcalde Gonzalez Soto, 26 ', 'A Coruña'),
('Café Bar Coctelería Bordello', 'Plaza de España', 'Rua Varela Silbari, 2 Bajo', 'A Coruña'),
('Café Bar Districto', 'Ronda de Outeiro', 'Ronda de Outeiro, 210', 'A Coruña'),
('Café Bar El Cantante', 'La Marina', 'Avd. Marina, 15 Bajo ', 'A Coruña'),
('Café Bar El Conde', 'Ventorrillo', 'Rúa Alcalde Salorio Suárez, 1', 'A Coruña'),
('Cafe Bar Elíptico', 'Los Rosales', 'Rúa Alcalde Suárez Ferrín, S/N', 'A Coruña'),
('Café Bar Élite', 'Zalaeta', 'Rua Zalaeta, 8', 'A Coruña'),
('Café Bar La Churré', 'Ronda de Outeiro', 'Rúa Manuel Deschamps,18', 'A Coruña'),
('Café Bar La Compe', 'MonteAlto', 'Rua La Torre, 75', 'A Coruña'),
('Café Bar La Garimbota', 'MonteAlto', 'Avd. Hércules, 94', 'A Coruña'),
('Café Bar La Urbana', 'Orzán', 'Rua Pastoriza, 10', 'A Coruña'),
('Café Bar Las Cadenas', 'Monelos', 'Av. de Monelos, 215 Bajo', 'A Coruña'),
('Cafe Bar Las Dos Terrazas', 'Barrio de las Florez', 'Rúa Violetas, 33', 'A Coruña'),
('Café Bar Manhattan', 'Plaza de Pontevedra', 'Plaza de Pontevedra, S/N', 'A Coruña'),
('Café Bar Mesón París', 'Os Castros', 'Av. Ejército, 21', 'A Coruña'),
('Café Bar Mis Maruja ', 'Zalaeta', 'Rua Zalaeta, 4', 'A Coruña'),
('Café Bar Os Trasnos', 'Ronda de Nelle', 'Travesía San Mateo, 10', 'A Coruña'),
('Café Bar Par 28', 'Plaza de España', 'Plaza de España, 28', 'A Coruña'),
('Café Bar Picnic', 'Monelos', 'Av. de Monelos, 57-61', 'A Coruña'),
('Café Bar Prisma', 'Los Rosales', 'Rúa Emilio González López, 38', 'A Coruña'),
('Café Bar Rialto Terraza', 'María Pita', 'Praza María Pita, 2', 'A Coruña'),
('Café Bar Sheraton', 'La Marina', 'Avd. Marina, 13', 'A Coruña'),
('Café Bar Tela Marinera', 'Ventorrillo', 'Rúa Monasterio de Caaveiro, 28', 'A Coruña'),
('Café Bar The Breen\'s Tavern', 'María Pita', 'Plaza María Pita, 24', 'A Coruña'),
('Café Bar UNI', 'Paseo Marítimo', 'Rua Vila de Carral', 'A Coruña'),
('Cafe Bar Vanessa', 'Los Mallos', 'Av. Los Mallos, 23', 'A Coruña'),
('Cafe Bar Zurich', 'Los Mallos', 'Rúa Ángel Senra, 1', 'A Coruña'),
('Restaurante A Pulpería de Melide', 'Plaza de España', 'Plaza de España, 6', 'A Coruña'),
('Restaurante Asador El Atlantico', 'Monte Alto', 'Rua Ángel Rebollo', 'A Coruña'),
('Restaurante Canosa', 'Elviña', 'Lugar Someso, 2', 'A Coruña'),
('Restaurante Chino Work Two', 'Plaza de Pontevedra', 'Plaza de Pontevedra, 1', 'A Coruña'),
('Restaurante Gloria Bendita', 'Riazor', 'Rua Riazor, 2', 'A Coruña'),
('Restaurante Hünico', 'Zalaeta', 'Calle Zalaeta, 12', 'A Coruña'),
('Restaurante Italiano Enzo´s', 'La Marina', 'Ruela Agar, 2', 'A Coruña'),
('Restaurante Italiano La Tagliatella', 'Riazor', 'Rua Alfredo Vicenti, 12', 'A Coruña'),
('Restaurante Japonés Tempura', 'Orzán', 'Avd. de Pedro Barrié de la Maza', 'A Coruña'),
('Restaurante Kairos Shisha', 'Orzán', 'Avd. de Pedro Barrié de la Maza', 'A Coruña'),
('Restaurante Krone', 'Ronda de Outeiro', 'Rda. de Outeiro, 212', 'A Coruña'),
('Restaurante La Penela', 'María Pita', 'Plaza María Pita, 12', 'A Coruña'),
('Restaurante La Sartén De Coruña', 'Plaza de España', 'Plaza de España, 11', 'A Coruña'),
('Restaurante Marisquería La Uva Dorada', 'Monte Alto', 'Rua Ramón del Cueto, 37', 'A Coruña'),
('Restaurante Mejicano Los Farolitos', 'Ronda de Outeiro', 'Ronda de Outeiro, 249', 'A Coruña'),
('Restaurante Mejicano Nana Pancha', 'Plaza de Pontevedra', 'Rua Alameda, 44 Bajo', 'A Coruña'),
('Restaurante Mesón Os Castros', 'Os Castros', 'Rúa Monte das Moas, 1', 'A Coruña'),
('Restaurante Nova Lua Chea', 'Paseo Marítimo', 'Calle Paseo Marítimo, 4', 'A Coruña'),
('Restaurante O Fado', 'Paseo Marítimo', 'Estrada Circunvalación, 13', 'A Coruña'),
('Restaurante O Pendello', 'Elviña', 'Cabana, 26, 15008 A Coruña', 'A Coruña'),
('Restaurante O Pracer', 'Zalaeta', 'Rua Salgado Somoza, 13', 'A Coruña'),
('Restaurante O Sampaio', 'María Pita', 'Rua da Fama, 1', 'A Coruña'),
('Restaurante O Sampaio2', 'Matogrande', 'Rua Enrique Mariñas Romero, 2', 'A Coruña'),
('Restaurante O Tellado', 'Monelos', 'Rúa Rafael Dieste, 4', 'A Coruña'),
('Restaurante Parrida El Roble', 'Los Mallos', 'Av. dos Mallos, 14', 'A Coruña'),
('Restaurante Parrillada Buenos Aires', 'Ronda de Nelle', 'Rua San Leandro, 5', 'A Coruña'),
('Restaurante Peruano Margarita', 'Ronda de Nelle', 'Calle Ronda de Nelle, 126', 'A Coruña'),
('Restaurante Petite Bretagne', 'La Marina', 'Avd. Marina, 4', 'A Coruña'),
('Restaurante Pizzería Fito', 'Los Mallos', 'Av. Los Mallos, 13', 'A Coruña'),
('Restaurante Pulperia Coruña', 'Os Castros', 'A, Rúa Monte das Moas, 5', 'A Coruña'),
('Restaurante Raxaría As Neves', 'Ronda de Outeiro', 'Ronda de Outeiro Marisquería Cancelo, 300', 'A Coruña'),
('Restaurante Rubia y Gallega', 'Matogrande', 'Rua Enrique Mariñas Romero, 3', 'A Coruña'),
('Restaurante Tapería Ancar', 'Los Rosales', 'Rúa Emilio González López, 4', 'A Coruña'),
('Restaurante The Breen\'s Tavern', 'María Pita', 'Plaza María Pita, 24', 'A Coruña'),
('Restaurate Indú Masala', 'Monelos', 'Av. da Concordia, 199', 'A Coruña');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `ID` int(11) NOT NULL,
  `Alias` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`ID`, `Alias`, `Nombre`) VALUES
(15, 'Pablomi', 'Restaurante A Pulperia de Melide'),
(16, 'Pablomi', 'Restaurante Hünico'),
(17, 'Pablomi', 'Café Bar Cervecería Yates'),
(24, 'Adrianmi', 'Café-Bar A Cova Céltica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_ocupacion`
--

CREATE TABLE `historial_ocupacion` (
  `ID` int(11) NOT NULL,
  `Lunes` int(11) NOT NULL,
  `Martes` int(11) NOT NULL,
  `Miercoles` int(11) NOT NULL,
  `Jueves` int(11) NOT NULL,
  `Viernes` int(11) NOT NULL,
  `Sabado` int(11) NOT NULL,
  `Domingo` int(11) NOT NULL,
  `NombreLocal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial_ocupacion`
--

INSERT INTO `historial_ocupacion` (`ID`, `Lunes`, `Martes`, `Miercoles`, `Jueves`, `Viernes`, `Sabado`, `Domingo`, `NombreLocal`) VALUES
(1, 30, 30, 30, 30, 90, 90, 50, 'Café-Bar Boulevard'),
(2, 60, 60, 60, 60, 100, 100, 40, 'Restaurante La Sartén'),
(10, 10, 20, 60, 60, 60, 60, 80, 'Restaurante Chino Work Two'),
(20, 20, 20, 20, 30, 90, 90, 50, 'Café-Bar A Cova Céltica'),
(21, 40, 40, 50, 50, 60, 80, 100, 'Restaurante A Pulperia de Melide'),
(22, 20, 30, 30, 30, 30, 70, 70, 'Restaurante Asador El Atlantico'),
(40, 40, 30, 70, 80, 90, 90, 50, 'Restaurante Casa Canosa'),
(41, 70, 70, 80, 90, 90, 90, 50, 'Restaurante Hünico'),
(42, 40, 30, 60, 80, 90, 90, 80, 'Restaurante Indú Masala'),
(43, 10, 20, 60, 60, 60, 60, 50, 'Restaurante Italiano Enzo´s'),
(44, 40, 30, 70, 80, 60, 60, 80, 'Restaurante Japonés Tempura'),
(45, 40, 30, 60, 80, 90, 90, 80, 'Restaurante Kairos Shisha'),
(46, 10, 20, 70, 60, 90, 90, 80, 'Restaurante La Penela'),
(47, 40, 20, 60, 80, 90, 90, 50, 'Restaurante La Sartén'),
(48, 40, 30, 80, 80, 90, 90, 80, 'Restaurante La Tagliatella'),
(49, 40, 30, 60, 60, 60, 90, 50, 'Restaurante Marisquería La Uva Dorada'),
(50, 40, 30, 80, 80, 90, 90, 80, 'Restaurante Mejicano Los Farolitos'),
(51, 40, 30, 60, 60, 60, 90, 80, 'Restaurante Mejicano Nana Pancha'),
(52, 70, 30, 60, 60, 60, 90, 80, 'Restaurante Mesón Os Castros'),
(53, 40, 70, 70, 60, 60, 60, 80, 'Restaurante Nova Lua Chea'),
(54, 40, 30, 60, 60, 60, 60, 50, 'Restaurante O Fado'),
(55, 70, 70, 80, 90, 90, 90, 50, 'Restaurante O Pendello'),
(56, 40, 30, 60, 80, 90, 60, 80, 'Restaurante O Pracer'),
(57, 70, 70, 70, 60, 60, 60, 50, 'Restaurante O Sampaio'),
(58, 40, 30, 70, 60, 60, 60, 50, 'Restaurante O Tellado'),
(59, 40, 30, 60, 60, 90, 90, 80, 'Restaurante Parrilla Buenos Aires'),
(60, 70, 30, 60, 60, 60, 90, 80, 'Restaurante Parrillada El Roble'),
(61, 70, 30, 70, 60, 90, 90, 50, 'Restaurante Peruano Margarita'),
(62, 40, 30, 60, 60, 90, 90, 80, 'Restaurante Petite Bretagne'),
(63, 40, 30, 60, 80, 60, 60, 80, 'Restaurante Pizzería Fito'),
(64, 70, 70, 70, 60, 90, 60, 80, 'Restaurante Pulpería Coruña'),
(65, 40, 30, 60, 60, 90, 90, 50, 'Restaurante Raxaría As Neves'),
(66, 70, 70, 80, 90, 90, 90, 80, 'Restaurante Rubia y Gallega'),
(67, 70, 30, 70, 60, 60, 60, 50, 'Restaurante Sampaio2'),
(68, 70, 70, 70, 60, 60, 90, 80, 'Restaurante The Breen\'s Tavern'),
(69, 70, 30, 60, 60, 60, 90, 80, 'Restautante Tapería Ancar'),
(70, 40, 70, 80, 90, 90, 60, 50, 'Café Bar Andén Playa Club'),
(71, 70, 70, 70, 60, 60, 60, 50, 'Café Bar Cervecería Yates'),
(72, 40, 30, 60, 60, 90, 90, 80, 'Café Bar Chocaletería Doré'),
(73, 70, 30, 60, 60, 90, 90, 80, 'Café-Bar A Cova Céltica 100'),
(74, 40, 70, 60, 60, 90, 60, 50, 'Café-Bar A Dorna'),
(75, 40, 70, 60, 80, 60, 90, 80, 'Café-Bar Ancora'),
(76, 70, 30, 60, 80, 60, 90, 50, 'Café-Bar Aquitania'),
(77, 40, 30, 60, 80, 90, 90, 80, 'Café-Bar Bora'),
(78, 70, 30, 70, 80, 60, 90, 80, 'Café-Bar Boulevard'),
(79, 40, 70, 80, 80, 90, 90, 80, 'Café-Bar Burdeos'),
(80, 40, 30, 60, 80, 90, 90, 80, 'Café-Bar Camelias'),
(81, 70, 70, 60, 60, 60, 60, 80, 'Café-Bar Cantante'),
(82, 70, 30, 60, 60, 90, 90, 80, 'Café-Bar Casual'),
(83, 70, 70, 70, 60, 60, 60, 80, 'Café-Bar Coctelería Bordello'),
(84, 70, 70, 70, 60, 60, 90, 50, 'Café-Bar Distrito'),
(85, 70, 30, 70, 60, 90, 90, 80, 'Café-Bar El Conde'),
(86, 40, 70, 60, 80, 90, 90, 50, 'Café-Bar Elíptico'),
(87, 40, 30, 60, 60, 90, 90, 50, 'Café-Bar Élite'),
(88, 70, 70, 60, 60, 90, 90, 50, 'Café-Bar La Churré'),
(89, 40, 70, 70, 80, 90, 60, 80, 'Café-Bar La Compe'),
(90, 70, 70, 80, 60, 60, 60, 80, 'Café-Bar La Garimbota'),
(91, 40, 70, 60, 60, 60, 90, 80, 'Café-Bar La Urbana'),
(92, 40, 70, 60, 80, 90, 90, 80, 'Café-Bar Las Cadenas'),
(93, 70, 20, 60, 80, 90, 90, 50, 'Café-Bar Las Dos Terrazas'),
(94, 70, 30, 60, 60, 60, 60, 50, 'Café-Bar Manhattan'),
(95, 70, 70, 60, 60, 90, 60, 80, 'Café-Bar Meson Paris'),
(96, 40, 30, 60, 60, 90, 90, 50, 'Café-Bar Mis Maruja 30'),
(97, 40, 30, 60, 80, 90, 90, 50, 'Café-Bar Os Trasnos'),
(98, 40, 30, 60, 60, 90, 90, 80, 'Café-Bar Par 28'),
(99, 70, 70, 60, 80, 90, 90, 80, 'Café-Bar Picnic'),
(100, 40, 70, 60, 80, 90, 60, 80, 'Café-Bar Prisma'),
(101, 70, 70, 80, 80, 60, 60, 50, 'Café-Bar Rialto Terraza'),
(102, 70, 70, 70, 60, 60, 60, 50, 'Café-Bar Sheraton'),
(103, 70, 70, 70, 60, 60, 90, 80, 'Café-Bar Tela Marinera'),
(104, 40, 30, 70, 80, 90, 90, 80, 'Café-Bar The Breen´s Tavern'),
(105, 40, 30, 60, 80, 60, 90, 80, 'Café-Bar UNI'),
(106, 40, 30, 60, 60, 90, 90, 50, 'Café-Bar Vanesa'),
(107, 70, 70, 70, 80, 90, 90, 80, 'Café-Bar Zurich');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `me_gusta`
--

CREATE TABLE `me_gusta` (
  `ID` int(11) NOT NULL,
  `Alias_USUARIO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `Alias` varchar(50) NOT NULL,
  `Clave` varchar(50) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Sexo` varchar(6) DEFAULT NULL,
  `Edad` varchar(2) DEFAULT NULL,
  `EstadoCivil` varchar(20) DEFAULT NULL,
  `RamaProfesional` varchar(45) DEFAULT NULL,
  `Intereses` varchar(100) DEFAULT NULL,
  `FAVORITOS_ID` int(11) DEFAULT NULL,
  `ALARMA_N.Alarma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`Alias`, `Clave`, `Nombre`, `Sexo`, `Edad`, `EstadoCivil`, `RamaProfesional`, `Intereses`, `FAVORITOS_ID`, `ALARMA_N.Alarma`) VALUES
('Adrianmi', 'UnaCualquiera', 'Adrian Martínez Insua', 'Hombre', '32', NULL, NULL, NULL, NULL, NULL),
('Jefe_ACovaCeltica', 'MaestrosCerveceros', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_ADorna', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Ancora', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_AndénPlayaClub', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_APulperiaDeMelide', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Aquitania', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_AsadorElAtlantico', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Bora', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Boulevard', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Burdeos', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Camelias', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Cantante', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_CasaCanosa', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Casual', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_CerveceríaYates', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_ChinoWorkTwo', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_ChocolateríaDoré', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_CocteleriaBordello', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Districto', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_ElConde', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Eliptico', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Elite', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_GloriaBendita', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Hünico', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_IndúMalasaña', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_ItalianoEnzo´s', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_JaponésTempura', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_KairosShisha', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_LaChurre', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_LaCompe', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_LaGarimbota', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_LaPenela', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_LaSartén', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_LasCadenas', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_LasDosTerrazas', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_LaTagliatella', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_LaUrbana', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_MarisqueríaLaUvaDorada', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_MejicanoLosFarolitos', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_MejicanoNanaPancha', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_MesónOsCastros', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_MesonParis', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_MisMaruja', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_NovaLuaChea', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_OFado', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_OPendello', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_OPracer', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_OSampaio', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_OsTrasnos', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_OTellado', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Par28', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_ParrillaBuenosAires', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_ParrilladaElRoble', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_PeruanoMargarita', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_PetiteBretagne', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Picnic', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_PizzeríaFito', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Prisma', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_PulperíaCoruña', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_RaxaríaAsNeves', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_RialtoTerraza', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_RubiaYGallega', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Sampaio2', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Sheraton', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_TaperíaAncar', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_TelaMarinera', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_The Breen\'sTavern', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_TheBreen´sTavern', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_UNI', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Vanesa', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Jefe_Zurich', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Pablomi', 'HOLAMUNDO', 'Pablo Martínez Insua', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Pepe', 'pepe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurante`
--

CREATE TABLE `restaurante` (
  `Nombre` varchar(50) NOT NULL,
  `Capacidad` varchar(30) NOT NULL,
  `Puntuacion` decimal(2,1) NOT NULL,
  `Carta` varchar(5000) DEFAULT NULL,
  `Horario` varchar(1000) NOT NULL,
  `CLIENTES_HABITUALES_ID1` int(11) NOT NULL,
  `DIRECCION_NombreLocal` varchar(50) NOT NULL,
  `Foto` varchar(1000) DEFAULT NULL,
  `Jefe` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `restaurante`
--

INSERT INTO `restaurante` (`Nombre`, `Capacidad`, `Puntuacion`, `Carta`, `Horario`, `CLIENTES_HABITUALES_ID1`, `DIRECCION_NombreLocal`, `Foto`, `Jefe`) VALUES
('Restaurante A Pulperia de Melide', '100', '4.2', 'https://pulpeirademelide.com/', 'De Martes a Domingo: 13:00-16:00 y de 20:00 a 23:30\r\nDía de cierre: Lunes', 0, 'Restaurante A Pulpería de Melide', 'https://media-cdn.tripadvisor.com/media/photo-s/0c/67/fb/3a/pulpeira-de-melide.jpg', 'Jefe_APulperiaDeMelide'),
('Restaurante Asador El Atlantico', '150', '4.4', 'http://www.restaurantelatlantico.es/menu/', 'Martes: 9:00-23:30 \r\nMiércoles, Jueves y Sábado: De 13:00-16:00 y de 21:00 a 23:30\r\nViernes: De 13:00-16:00 y de 20:00 a 23:30\r\nDomingo: 13:00-16:00\r\nDía de cierre: Lunes', 0, 'Restaurante Asador El Atlantico', 'https://media-cdn.tripadvisor.com/media/photo-s/11/55/85/0c/nuevo-asador-el-atlantico.jpg', 'Jefe_AsadorElAtlantico'),
('Restaurante Casa Canosa', '100', '4.2', NULL, 'De Lunes a Jueves: 8:30-23:00\r\nViernes: 8:30-23:30\r\nSábado: 11:00-23:30\r\nDía de cierre: Domingo', 0, 'Restaurante Canosa', 'https://media-cdn.tripadvisor.com/media/photo-s/0e/2c/01/4d/comedor-da-horta.jpg', 'Jefe_CasaCanosa'),
('Restaurante Chino Work Two', '20', '4.4', NULL, 'De Lunes a Domingo: 12:00-16:30 y de 19:00-23:45\r\nDía de cierre: Martes', 0, 'Restaurante Chino Work Two', 'https://media-cdn.tripadvisor.com/media/photo-s/09/1b/8e/94/wok-two.jpg', 'Jefe_ChinoWorkTwo'),
('Restaurante Gloria Bendita', '100', '4.4', 'https://gloriabenditarestaurante.com/', 'De Lunes a Sábado: 13:00-15:30 y de 21:00-23:30\r\nDomingo: 13:00-15:30', 0, 'Restaurante Gloria Bendita', 'https://t2.salir.ltmcdn.com/es/places/3/5/2/restaurante-gloria-bendita_129253_0_600.jpg', 'Jefe_GloriaBendita'),
('Restaurante Hünico', '120', '4.1', 'https://restaurantehunico.com/la-carta#carta', 'De Lunes a Domingo: 7:00-1:00', 0, 'Restaurante Hünico', 'https://res.cloudinary.com/tf-lab/image/upload/w_600,h_337,c_fill,g_auto:subject,q_auto,f_auto/restaurant/125f8954-c524-4a11-bd96-5fc1b9568ec8/f3dd9da4-f1dc-4ff1-a1f4-fcd0ba829ae0.jpg', 'Jefe_Hünico'),
('Restaurante Indú Masala', '100', '4.3', 'https://www.ronyfood-login.com/ordering/restaurant/menu?restaurant_uid=f984cf8a-0469-4b20-88e6-083ae9895f8a&client_is_mobile=true', 'De Lunes a Domingo: 13:00-16:30 y de 20:00-24:30', 0, 'Restaurate Indú Masala', 'https://media-cdn.tripadvisor.com/media/photo-s/14/c5/1c/16/20180815-153001-largejpg.jpg', 'Jefe_IndúMalasaña'),
('Restaurante Italiano Enzo´s', '120', '4.2', 'https://www.enzos.es/order?l=es#/restaurant/5237/collection/4254', 'De Martes a Domingo: 12:30-15:50 y de 20:00-23:30\r\nDía de cierre: Lunes', 0, 'Restaurante Italiano Enzo´s', 'https://x5f8v9i5.rocketcdn.me/wp-content/uploads/2020/02/Enzo%E2%80%99s-A-Coru%C3%B1a8.jpg', 'Jefe_ItalianoEnzo´s'),
('Restaurante Japonés Tempura', '150', '4.2', 'https://restaurantetempura.es/carta-tempura', 'De Lunes a Domingo: 13:00-16:00 y de 20:30-23:30\r\nDía de cierre: Lunes\r\n', 0, 'Restaurante Japonés Tempura', 'https://www.paxinasgalegas.es/imagenes/tempura_img86517n2t2.jpg', 'Jefe_JaponésTempura'),
('Restaurante Kairos Shisha', '100', '4.4', 'https://www.instagram.com/kairos_shisha_coruna', 'De Lunes a Miércoles: 19:00-1:00\r\nJueves y Domingo: 19:00-2:00\r\nViernes y Sábado: 19:00-2:30', 0, 'Restaurante Kairos Shisha', 'https://imgs-akamai.mnstatic.com/f0/f9/f0f9b3c2110708d395cf52344bd24f7a.jpg', 'Jefe_KairosShisha'),
('Restaurante La Penela', '100', '4.2', 'http://www.lapenela.com/restaurantes/maria_pita', 'De Lunes a Sábado: 13:30-16:30 y de 21:00-24:00\r\nDomingo: 13:30-16:30\r\nDía de cierre: Martes', 0, 'Restaurante La Penela', 'https://www.lapenela.com/_img/home/01-MARIA-PITA.jpg', 'Jefe_LaPenela'),
('Restaurante La Sartén', '150', '4.4', 'https://www.restaurantelasarten.com/es/carta', 'De Lunes a Sábado: 12:30-24:00\r\nDomingo: 12:00-17:00', 0, 'Restaurante La Sartén De Coruña', 'https://media-cdn.tripadvisor.com/media/photo-s/05/e2/76/5b/restaurante-la-sarten.jpg', 'Jefe_LaSartén'),
('Restaurante La Tagliatella', '150', '4.1', 'https://www.latagliatella.es/carta', 'De Lunes a Jueves: 13:00-16:00 y de 20:00-24:00\r\nViernes: 13:00-16:00 y de 20:00-24:30\r\nSábado: 13:00-16:30 y de 20:00-24:30\r\nDomingo: 13:00-16:30 y de 20:00-24:00', 0, 'Restaurante Italiano La Tagliatella', 'https://www.latagliatella.es/sites/default/files/styles/facebook/public/restaurantes/49_Riazor-buscador.jpg?itok=qURQ4dw8', 'Jefe_LaTagliatella'),
('Restaurante Marisquería La Uva Dorada', '150', '4.5', 'https://www.facebook.com/La-Uva-Dorada-121434634633680/', 'De Lunes a Sábado: 9:00-23:30\r\nDomingo: 9:00-18:00', 0, 'Restaurante Marisquería La Uva Dorada', 'https://media-cdn.tripadvisor.com/media/photo-s/06/82/79/6d/la-uva-dorada.jpg', 'Jefe_MarisqueríaLaUvaDorada'),
('Restaurante Mejicano Los Farolitos', '100', '4.5', 'https://www.facebook.com/Los-Farolitos-La-Coru%C3%B1a-1011481402295299', 'Lunes: 13:30-16:00\r\nDe Martes a Jueves: 13:30-16:00 y de 20:30-23:00\r\nViernes y Sábado: 13:30-16:00 y de 20:30-23:30\r\nDomingo: 13:30-16:00 y de 20:30-23:00\r\n\r\n ', 0, 'Restaurante Mejicano Los Farolitos', 'https://media-cdn.tripadvisor.com/media/photo-s/22/09/7b/a8/premios.jpg', 'Jefe_MejicanoLosFarolitos'),
('Restaurante Mejicano Nana Pancha', '100', '4.4', 'https://nanapancha.es/carta', 'Viernes y Sábado: 13:30-15:45 y de 20:30-24:00\r\nDe Domingo a Jueves: 13:30-15:30 y de 20:30-22:45\r\n\r\n', 0, 'Restaurante Mejicano Nana Pancha', 'https://i.pinimg.com/736x/8a/fe/7d/8afe7df5d058a790e5e6568cfef05ad6.jpg', 'Jefe_MejicanoNanaPancha'),
('Restaurante Mesón Os Castros', '100', '4.3', 'https://www.tripadvisor.es/Restaurant_Review-g187507-d9829630-Reviews-Meson_Os_Castros-La_Coruna_Province_of_A_Coruna_Galicia.html', 'De Lunes a Sábado: 9:00-16:00 y de 20:00-24:00\r\nDomingo: 9:00-18:00', 0, 'Restaurante Mesón Os Castros', 'https://www.rutasyrestaurantes.com/wp-content/uploads/2016/04/IMG_20160422_222757.jpg', 'Jefe_MesónOsCastros'),
('Restaurante Nova Lua Chea', '100', '4.2', 'https://www.novaluacheagastrobar.es/es/productos', 'De Martes a Viernes: 9:00-24:00\r\nSábado y Domingo: 10:00-24:00\r\nDía de Cierre: Lunes', 0, 'Restaurante Nova Lua Chea', 'https://res.cloudinary.com/tf-lab/image/upload/restaurant/bac3facb-23b9-45ca-9171-11a65ce49c5a/73c010e6-0e7b-4d50-8a01-5b8024e7a4b5.jpg', 'Jefe_NovaLuaChea'),
('Restaurante O Fado', '100', '4.4', 'https://restaurante-o-fado.negocio.site/#menu', 'De Domingo a Jueves: 12:30-16:30\r\nViernes y Sábados: 12:30-16:30 y de 21:00 a 23:45\r\nDía de cierre: Lunes', 0, 'Restaurante O Fado', 'https://lh3.googleusercontent.com/p/AF1QipNzPMBziOb3OJdP2pUS8tmdZxx9A9jr5e0WqQZU=w768-h768-n-o-v1', 'Jefe_OFado'),
('Restaurante O Pendello', '100', '4.3', 'https://www.facebook.com/pages/O-Pendello/176474242372255', 'De Lunes a Sábado: 13:00-16:00 y de 20:30-24:00\r\nDía de cierre: Domingo', 0, 'Restaurante O Pendello', 'https://media-cdn.tripadvisor.com/media/photo-s/07/90/63/84/o-pendello.jpg', 'Jefe_OPendello'),
('Restaurante O Pracer', '150', '4.6', 'https://www.instagram.com/pracerzalaeta/?utm_source=ig_profile_share&igshid=1vpndwby6vjg2', 'Martes: 20:45-23:00\r\nDe Miércoles a Sábado: 13:30-15:30 y de 20:45 a 23:00', 0, 'Restaurante O Pracer', 'https://ivancotado.es/wp-content/uploads/2019/02/dise%C3%B1o-de-restaurante-pracer-ivan-cotado-00.jpg', 'Jefe_OPracer'),
('Restaurante O Sampaio', '120', '3.7', 'https://osampaio.es/carta-a-coruna/', 'De Lunes a Viernes: 9:00-1:00\r\nSábado y Domingo: 10:00-2:00', 0, 'Restaurante O Sampaio', 'https://media-cdn.tripadvisor.com/media/photo-s/15/13/af/93/o-sampaio.jpg', 'Jefe_OSampaio'),
('Restaurante O Tellado', '120', '4.3', 'https://www.sluurpy.es/a-coru%C3%B1a/restaurante/1835899/o-tellado', 'De Martes a Domingo: 8:30-24:00\r\nDía de cierre: Lunes', 0, 'Restaurante O Tellado', 'https://10619-2.s.cdn12.com/rests/original/110_506815210.jpg', 'Jefe_OTellado'),
('Restaurante Parrilla Buenos Aires', '120', '4.5', 'https://www.parrillada-buenosaires.com/es/productos/carta-y-menu', 'Martes: 11:30-17:30\r\nDe Jueves a Lunes: 11:30-17:30 y de 20:00-24:45\r\nDía de cierre: Miércoles', 0, 'Restaurante Parrillada Buenos Aires', 'https://estaticos.qdq.com/swdata/home_photos/669/669720718/82d316e0bb724d9389fa4623a776ec99.jpg', 'Jefe_ParrillaBuenosAires'),
('Restaurante Parrillada El Roble', '150', '4.7', 'https://www.facebook.com/pages/category/Restaurant/Parrillada-el-Roble-107302834917269', 'De Martes a Sábado: 11:00-17:00 y de 19:00-24:00\r\nDomingo: 11:00-17:00\r\nDía de cierre: Lunes', 0, 'Restaurante Parrida El Roble', 'https://www.e-distrito.com/archivos/1624891670-1.jpg', 'Jefe_ParrilladaElRoble'),
('Restaurante Peruano Margarita', '100', '4.1', NULL, 'De Lunes a Domingo: 13:00-24:00\r\nDía de cierre: Martes', 0, 'Restaurante Peruano Margarita', 'https://10619-2.s.cdn12.com/rests/original/343_467366502.jpg', 'Jefe_PeruanoMargarita'),
('Restaurante Petite Bretagne', '100', '4.2', 'http://www.petitebretagne.es/lacarta/lacarta.html', 'De Lunes a Domingo: 10:00-24:00', 0, 'Restaurante Petite Bretagne', 'https://lh5.googleusercontent.com/p/AF1QipN-RTKcVb6DSpiVTwpDWURbPz7QDdPxJRM-cvs2=w408-h515-k-no', 'Jefe_PetiteBretagne'),
('Restaurante Pizzería Fito', '100', '4.7', 'https://www.facebook.com/PizzeriaFito2017', 'De Martes a Viernes: 12:30-16:00 y de 20:00-23:00\r\nSábado: 13:00-16:30 y de 20:00-24:00\r\nDomingo: 12:30-16:00 y de 20:00-23:00\r\nDía de cierre: Lunes', 0, 'Restaurante Pizzería Fito', 'https://res.cloudinary.com/locations/image/upload/portadas/pizzeria-fito.jpg', 'Jefe_PizzeríaFito'),
('Restaurante Pulpería Coruña', '100', '4.2', 'https://pulpeira-coruna.metro.bar/?lang=es#menu', 'De Martes a Sábado: 12:00-16:00 y de 20:00-24:00\r\nDomingo y Lunes: 12:00-16:00', 0, 'Restaurante Pulperia Coruña', 'https://acoruna.portaldetuciudad.com/imagenes/85/empresas/Img-713171-11_amp.jpg', 'Jefe_PulperíaCoruña'),
('Restaurante Raxaría As Neves', '100', '4.3', 'https://raxariaasneves.es/menus', 'De Lunes a Domingo: 12:00-16:00 y de 20:00-24:00\r\n', 0, 'Restaurante Raxaría As Neves', 'https://raxariaasneves.es/wp-content/uploads/2020/07/raxaria-as-neves-share.jpg', 'Jefe_RaxaríaAsNeves'),
('Restaurante Rubia y Gallega', '100', '4.1', 'https://www.facebook.com/rubiaygallegacoruna?__nodl&refsrc=deprecated&ref=external%3Awww.google.com', 'Miércoles: 12:00-16:30 y de 18:00-23:00\r\nDe Lunes a Domingo: 12:00-23:00\r\n', 0, 'Restaurante Rubia y Gallega', 'https://www.desarrolla.es/wp-content/uploads/proyectos/4ac57f5eecf3048ec6f44b0824e9ce04/reforma-restaurante-rubia-gallega-desarrolla-9_95369.jpg', 'Jefe_RubiaYGallega'),
('Restaurante Sampaio2', '120', '4.0', 'https://osampaio.es/carta-a-coruna/', 'De Lunes a Jueves: 9:00-1:00\r\nViernes: 9:00-2:00\r\nSábado: 11:00-2:00\r\nDomingo: 11:00-1:00', 0, 'Restaurante O Sampaio2', 'https://media-cdn.tripadvisor.com/media/photo-s/15/13/af/93/o-sampaio.jpg', 'Jefe_Sampaio2'),
('Restaurante The Breen\'s Tavern', '100', '4.3', 'https://www.facebook.com/TheBreensTavern/?locale2=es_ES&__nodl&refsrc=deprecated&ref=external%3Awww.google.com', 'De Lunes a Viernes: 8:30-1:00\r\nSábado y Domingo: 12:00-1:00', 0, 'Restaurante The Breen\'s Tavern', 'https://media.quincemil.com/imagenes/2019/11/13195349/IMG_8482-1024x683.jpg', 'Jefe_The Breen\'sTavern'),
('Restautante Tapería Ancar', '100', '3.8', 'https://www.facebook.com/AncaRosales', 'De Lunes a Jueves: 8:00-24:00\r\nViernes: 8:00-1:00\r\nSábado y Domingo: 10:00-13:00\r\n', 0, 'Restaurante Tapería Ancar', 'https://media-cdn.tripadvisor.com/media/photo-s/14/57/9f/f1/una-taperia-acogedora.jpg', 'Jefe_TaperíaAncar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurante_tiene_clientes_habituales`
--

CREATE TABLE `restaurante_tiene_clientes_habituales` (
  `RESTAURANTE_Nombre` varchar(50) NOT NULL,
  `RESTAURANTE_CLIENTES_HABITUALES_ID1` int(11) NOT NULL,
  `RESTAURANTE_DIRECCION_ID` int(11) NOT NULL,
  `CLIENTES_HABITUALES_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurante_tiene_historial_ocupacion`
--

CREATE TABLE `restaurante_tiene_historial_ocupacion` (
  `RESTAURANTE_Nombre` varchar(50) NOT NULL,
  `RESTAURANTE_CLIENTES_HABITUALES_ID1` int(11) NOT NULL,
  `RESTAURANTE_DIRECCION_ID` int(11) NOT NULL,
  `HISTORIAL_OCUPACION_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alarma`
--
ALTER TABLE `alarma`
  ADD PRIMARY KEY (`N.Alarma`);

--
-- Indices de la tabla `bar`
--
ALTER TABLE `bar`
  ADD PRIMARY KEY (`Nombre`,`CLIENTES_HABITUALES_ID`,`DIRECCION_NombreLocal`),
  ADD KEY `fk_BAR_DIRECCION1_idx` (`DIRECCION_NombreLocal`);

--
-- Indices de la tabla `bar_tiene_clientes_habituales`
--
ALTER TABLE `bar_tiene_clientes_habituales`
  ADD PRIMARY KEY (`BAR_Nombre`,`BAR_DIRECCION_ID`,`BAR_CLIENTES_HABITUALES_ID`,`CLIENTES_HABITUALES_ID`),
  ADD KEY `fk_BAR_has_CLIENTES_HABITUALES_CLIENTES_HABITUALES1_idx` (`CLIENTES_HABITUALES_ID`),
  ADD KEY `fk_BAR_has_CLIENTES_HABITUALES_BAR1_idx` (`BAR_Nombre`,`BAR_DIRECCION_ID`,`BAR_CLIENTES_HABITUALES_ID`),
  ADD KEY `fk_BAR_has_CLIENTES_HABITUALES_BAR1` (`BAR_Nombre`,`BAR_CLIENTES_HABITUALES_ID`);

--
-- Indices de la tabla `bar_tiene_historial_ocupacion`
--
ALTER TABLE `bar_tiene_historial_ocupacion`
  ADD PRIMARY KEY (`BAR_Nombre`,`BAR_DIRECCION_ID`,`BAR_CLIENTES_HABITUALES_ID`,`HISTORIAL_OCUPACION_ID`),
  ADD KEY `fk_BAR_has_HISTORIAL_OCUPACION_HISTORIAL_OCUPACION1_idx` (`HISTORIAL_OCUPACION_ID`),
  ADD KEY `fk_BAR_has_HISTORIAL_OCUPACION_BAR1_idx` (`BAR_Nombre`,`BAR_DIRECCION_ID`,`BAR_CLIENTES_HABITUALES_ID`),
  ADD KEY `fk_BAR_has_HISTORIAL_OCUPACION_BAR1` (`BAR_Nombre`,`BAR_CLIENTES_HABITUALES_ID`);

--
-- Indices de la tabla `clientes_habituales`
--
ALTER TABLE `clientes_habituales`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`ID`) USING BTREE,
  ADD KEY `fk_COMENTARIO_RESTAURANTE1_idx` (`RESTAURANTE_Nombre`),
  ADD KEY `fk_COMENTARIO_BAR1_idx` (`BAR_Nombre`),
  ADD KEY `fk_COMENTARIO_ME_GUSTA1_idx` (`ME_GUSTA_ID`),
  ADD KEY `fk_COMENTARIO_PERFIL_idx` (`PERFIL_Alias`) USING BTREE;

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`NombreLocal`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `historial_ocupacion`
--
ALTER TABLE `historial_ocupacion`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `me_gusta`
--
ALTER TABLE `me_gusta`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`Alias`) USING BTREE,
  ADD KEY `fk_PERFIL_FAVORITOS1_idx` (`FAVORITOS_ID`),
  ADD KEY `fk_PERFIL_ALARMA1_idx` (`ALARMA_N.Alarma`);

--
-- Indices de la tabla `restaurante`
--
ALTER TABLE `restaurante`
  ADD PRIMARY KEY (`Nombre`,`CLIENTES_HABITUALES_ID1`,`DIRECCION_NombreLocal`),
  ADD KEY `fk_RESTAURANTE_DIRECCION1_idx` (`DIRECCION_NombreLocal`);

--
-- Indices de la tabla `restaurante_tiene_clientes_habituales`
--
ALTER TABLE `restaurante_tiene_clientes_habituales`
  ADD PRIMARY KEY (`RESTAURANTE_Nombre`,`RESTAURANTE_CLIENTES_HABITUALES_ID1`,`RESTAURANTE_DIRECCION_ID`,`CLIENTES_HABITUALES_ID`),
  ADD KEY `fk_RESTAURANTE_has_CLIENTES_HABITUALES_CLIENTES_HABITUALES1_idx` (`CLIENTES_HABITUALES_ID`),
  ADD KEY `fk_RESTAURANTE_has_CLIENTES_HABITUALES_RESTAURANTE1_idx` (`RESTAURANTE_Nombre`,`RESTAURANTE_CLIENTES_HABITUALES_ID1`,`RESTAURANTE_DIRECCION_ID`);

--
-- Indices de la tabla `restaurante_tiene_historial_ocupacion`
--
ALTER TABLE `restaurante_tiene_historial_ocupacion`
  ADD PRIMARY KEY (`RESTAURANTE_Nombre`,`RESTAURANTE_CLIENTES_HABITUALES_ID1`,`RESTAURANTE_DIRECCION_ID`,`HISTORIAL_OCUPACION_ID`),
  ADD KEY `fk_RESTAURANTE_has_HISTORIAL_OCUPACION_HISTORIAL_OCUPACION1_idx` (`HISTORIAL_OCUPACION_ID`),
  ADD KEY `fk_RESTAURANTE_has_HISTORIAL_OCUPACION_RESTAURANTE1_idx` (`RESTAURANTE_Nombre`,`RESTAURANTE_CLIENTES_HABITUALES_ID1`,`RESTAURANTE_DIRECCION_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alarma`
--
ALTER TABLE `alarma`
  MODIFY `N.Alarma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clientes_habituales`
--
ALTER TABLE `clientes_habituales`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `historial_ocupacion`
--
ALTER TABLE `historial_ocupacion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT de la tabla `me_gusta`
--
ALTER TABLE `me_gusta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bar`
--
ALTER TABLE `bar`
  ADD CONSTRAINT `fk_BAR_DIRECCION1` FOREIGN KEY (`DIRECCION_NombreLocal`) REFERENCES `direccion` (`NombreLocal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `bar_tiene_clientes_habituales`
--
ALTER TABLE `bar_tiene_clientes_habituales`
  ADD CONSTRAINT `fk_BAR_has_CLIENTES_HABITUALES_BAR1` FOREIGN KEY (`BAR_Nombre`,`BAR_CLIENTES_HABITUALES_ID`) REFERENCES `bar` (`Nombre`, `CLIENTES_HABITUALES_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_BAR_has_CLIENTES_HABITUALES_CLIENTES_HABITUALES1` FOREIGN KEY (`CLIENTES_HABITUALES_ID`) REFERENCES `clientes_habituales` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `bar_tiene_historial_ocupacion`
--
ALTER TABLE `bar_tiene_historial_ocupacion`
  ADD CONSTRAINT `fk_BAR_has_HISTORIAL_OCUPACION_BAR1` FOREIGN KEY (`BAR_Nombre`,`BAR_CLIENTES_HABITUALES_ID`) REFERENCES `bar` (`Nombre`, `CLIENTES_HABITUALES_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_BAR_has_HISTORIAL_OCUPACION_HISTORIAL_OCUPACION1` FOREIGN KEY (`HISTORIAL_OCUPACION_ID`) REFERENCES `historial_ocupacion` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `fk_COMENTARIO_BAR1` FOREIGN KEY (`BAR_Nombre`) REFERENCES `bar` (`Nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_COMENTARIO_ME_GUSTA1` FOREIGN KEY (`ME_GUSTA_ID`) REFERENCES `me_gusta` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_COMENTARIO_PERFIL` FOREIGN KEY (`PERFIL_Alias`) REFERENCES `perfil` (`Alias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_COMENTARIO_RESTAURANTE1` FOREIGN KEY (`RESTAURANTE_Nombre`) REFERENCES `restaurante` (`Nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `fk_PERFIL_ALARMA1` FOREIGN KEY (`ALARMA_N.Alarma`) REFERENCES `alarma` (`N.Alarma`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PERFIL_FAVORITOS1` FOREIGN KEY (`FAVORITOS_ID`) REFERENCES `favoritos` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `restaurante`
--
ALTER TABLE `restaurante`
  ADD CONSTRAINT `fk_RESTAURANTE_DIRECCION1` FOREIGN KEY (`DIRECCION_NombreLocal`) REFERENCES `direccion` (`NombreLocal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `restaurante_tiene_clientes_habituales`
--
ALTER TABLE `restaurante_tiene_clientes_habituales`
  ADD CONSTRAINT `fk_RESTAURANTE_has_CLIENTES_HABITUALES_CLIENTES_HABITUALES1` FOREIGN KEY (`CLIENTES_HABITUALES_ID`) REFERENCES `clientes_habituales` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_RESTAURANTE_has_CLIENTES_HABITUALES_RESTAURANTE1` FOREIGN KEY (`RESTAURANTE_Nombre`,`RESTAURANTE_CLIENTES_HABITUALES_ID1`) REFERENCES `restaurante` (`Nombre`, `CLIENTES_HABITUALES_ID1`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `restaurante_tiene_historial_ocupacion`
--
ALTER TABLE `restaurante_tiene_historial_ocupacion`
  ADD CONSTRAINT `fk_RESTAURANTE_has_HISTORIAL_OCUPACION_HISTORIAL_OCUPACION1` FOREIGN KEY (`HISTORIAL_OCUPACION_ID`) REFERENCES `historial_ocupacion` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_RESTAURANTE_has_HISTORIAL_OCUPACION_RESTAURANTE1` FOREIGN KEY (`RESTAURANTE_Nombre`,`RESTAURANTE_CLIENTES_HABITUALES_ID1`) REFERENCES `restaurante` (`Nombre`, `CLIENTES_HABITUALES_ID1`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
