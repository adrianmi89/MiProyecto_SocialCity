-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2021 a las 22:01:47
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

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
  `Nombre` varchar(100) NOT NULL,
  `Fecha` varchar(10) NOT NULL,
  `Hora` varchar(5) NOT NULL,
  `Descripción` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bar`
--

CREATE TABLE `bar` (
  `Nombre` varchar(50) NOT NULL,
  `Capacidad` int(11) NOT NULL,
  `Puntuacion` float(2,1) NOT NULL,
  `Horario` varchar(1000) NOT NULL,
  `CLIENTES_HABITUALES_ID` int(11) NOT NULL,
  `Eventos` varchar(5000) DEFAULT NULL,
  `JuegosDeMesa` varchar(100) DEFAULT NULL,
  `DIRECCION_NombreLocal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bar`
--

INSERT INTO `bar` (`Nombre`, `Capacidad`, `Puntuacion`, `Horario`, `CLIENTES_HABITUALES_ID`, `Eventos`, `JuegosDeMesa`, `DIRECCION_NombreLocal`) VALUES
('Café Bar Andén Playa Club', 200, 3.9, 'De Jueves a Domingo: 23:00-4:30', 0, '- Jueves 6 de Marzo: Aniversario del Gim Tonic con el DJ Marco Carola. Todas nuestras Ginebras a un precio especial. Entrada: 5€ con opción de reserva en esta web. Requisitos: Ser mayor de edad y estar registrado en Socialcity.', NULL, 'Café Bar Andén Playa Club'),
('Café Bar Cervecería Yates', 100, 4.3, 'De Lunes a Viernes: 9:00-3:00\r\nSábado: 18:00-1:00\r\nDomingo: 10:00-3:30', 0, NULL, 'Cartas, Dominó', 'Cafe Bar Cervecería Yates'),
('Café Bar Chocaletería Doré', 40, 4.4, 'De Lunes a Viernes: 8:00-22:30\r\nJueves: 8:00-14:00 y de 18:00-1:00 \r\nSábado y Domingo: 9:30-15:00\r\n', 0, NULL, 'Cartas', 'Café Bar Chocolateria Doré'),
('Café-Bar A Cova Céltica', 100, 4.5, 'De Lunes a Miércoles: 19:30-2:30\r\nDe Jueves a Sábado: 19:30-3:30\r\nDomingo: 19:30-2:30', 0, '- Viernes 5 de Marzo a partir de las 21:00 - Foliada del Grupo Covagueira\r\n- Viernes 12 de Marzo a partir de las 21:00 - Foliada del Grupo Reventafoles', 'Cartas, dardos, ajedrez', 'Café Bar A Cova Celtica'),
('Café-Bar A Dorna', 50, 4.0, 'De Lunes a Viernes: 8:00-23:30\r\nSábado: 9:30-1:00\r\nDomingo: 11:00-23:30', 0, 'Sin Eventos', 'Cartas, parchís, bingo, dardos', 'Cafe Bar A Dorna'),
('Café-Bar Ancora', 30, 4.2, 'De Lunes a Jueves: 10:30-17:00 y de 19:30-23:00\r\nViernes y Sábado: 10:30-1:00\r\nDomingo: 10:30-23:00\r\nDía de cierre: Martes', 0, '- V Torneo de Poker: Máximo 20 personas, Sábado 13 de Marzo a las 20:00. Requisitos: Ser mayor de edad y estar registrado en Socialcity.', 'Cartas, Poker(1 consumición gratis para el ganador), Dardos, parchís', 'Café Bar Áncora'),
('Café-Bar Aquitania', 80, 4.2, 'De Lunes a Jueves: 8:00-24:00\r\nViernes: 8:00-2:00\r\nSábado: 9:00-2:00\r\nDomingo: 11:00-24:00', 0, 'Sin eventos', 'Cartas, Dardos, Parchís, Ajedrez, otros.', 'Café Bar Aquitania'),
('Café-Bar Bora', 50, 4.7, 'De Lunes a Viernes: 7:30-24:00\r\nDías de cierre: Sábado y Domingo', 0, NULL, 'Cartas, Parchís, Dominó, Ajedrez', 'Cafe Bar Bora'),
('Café-Bar Boulevard', 100, 4.1, 'De Lunes a Miércoles: 8:00-14:00 y de 17:00-23:00\r\nJueves: 8:00-14:00 y de 18:00-1:00\r\nViernes: 8:00-14:00 y de 17:00-1:00\r\nSábado: 18:00-1:00\r\nDomingo: 17:00-23:00\r\n', 0, '- Viernes 15 de Marzo, II Fiesta del orgullo gay, con la actuación de Miguel Boxe.', 'Cartas, Ajedrez, Parchís, Dardos, Villar', 'Café Bar Bulevard'),
('Café-Bar Burdeos', 50, 4.2, 'De Lunes a Viernes: 6:00-22:00\r\nSábado: 7:00-22:00\r\nDomingo: 8:00-22:00', 0, NULL, 'Cartas, dominó', 'Café Bar Burdeos'),
('Café-Bar Camelias', 30, 3.8, 'De Martes a Domingo: 10:00-22:00 \r\nDía de cierre: Lunes', 0, '', 'Cartas, Ajedrez', 'Café Bar Camelias'),
('Café-Bar Cantante', 20, 4.2, 'De Martes a Jueves: 7:30-23:30\r\nViernes: 7:30-1:00\r\nSábado: 11:00-1:00\r\nDomingo: 11:00-23:00', 0, NULL, 'Cartas, Bingo, Dominó, Parchís, Ajedrez', 'Café Bar El Cantante'),
('Café-Bar Casual', 80, 4.8, 'De Lunes a Jueves: 8:00-23:30 \r\nViernes: 8:00-24:00\r\nSábado: 8:00-24:00\r\nDía de cierre: Domingo', 0, NULL, 'Cartas, parchís, Ajedrez', 'Café Bar Casual'),
('Café-Bar Coctelería Bordello', 20, 4.7, 'De Martes a Jueves: 16:00-24:00\r\nViernes y Sábado: 16:00-1:30\r\nDomingo: 18:00-24:00', 0, NULL, 'Cartas', 'Café Bar Coctelería Bordello'),
('Café-Bar Distrito', 50, 4.1, 'De Lunes a Viernes: 7:00-23:00\r\nSábado y Domingo: 8:00-23:00\r\n', 0, NULL, 'Cartas', 'Café Bar Districto'),
('Café-Bar El Conde', 50, 3.9, 'De Lunes a Domingo: 8:00-2:00', 0, NULL, 'Cartas, Villar', 'Café Bar El Conde'),
('Café-Bar Elíptico', 100, 4.4, 'De Lunes a Domingo: 9:00-18:00', 0, NULL, 'Cartas, Ajedrez, Dardos', 'Cafe Bar Elíptico'),
('Café-Bar Élite', 50, 4.3, 'De Lunes a Viernes: 7:00-24:00\r\nSábado: 7:00-17:00\r\nDía de cierre: Domingo', 0, NULL, 'Cartas, Ajedrez, Dominó', 'Café Bar Élite'),
('Café-Bar La Churré', 30, 4.5, 'De Martes a Domingo: 11:00-23:00\r\nDía de cierre: Lunes', 0, NULL, 'Cartas', 'Café Bar La Churré'),
('Café-Bar La Compe', 100, 4.0, 'De Lunes a Sábado: 8:00-23:00\r\nDomingo: 9:00-23:00', 0, NULL, 'Cartas, Dominó', 'Café Bar La Compe'),
('Café-Bar La Garimbota', 50, 4.3, 'De Lunes a Viernes: 8:00-24:00\r\nSábados y Domingos: 9:00-24:00', 0, NULL, 'Cartas, Dardos', 'Café Bar La Garimbota'),
('Café-Bar La Urbana', 50, 4.3, 'De Lunes a Domingo: 12:00-1:00', 0, NULL, 'Cartas, Dardos', 'Café Bar La Urbana'),
('Café-Bar Las Cadenas', 30, 4.3, 'De Lunes a Jueves: 8:00-22:00\r\nViernes: 8:00-23:00\r\nSábado: 8:00-15:30\r\nDía de cierre: Domingo', 0, NULL, 'Cartas, Poker, Ajedrez, Parchís, Dardos', 'Café Bar Las Cadenas'),
('Café-Bar Las Dos Terrazas', 100, 4.0, 'De Lunes a Sábado: 9:00-22:00\r\nDomingo: 10:00-22:00\r\nDía de cierre: Jueves', 0, 'Cartas, Ajedrez', NULL, 'Cafe Bar Las Dos Terrazas'),
('Café-Bar Manhattan', 200, 3.9, 'De Lunes a Jueves: 7:00-1:30\r\nViernes y Sábado: 7:00-2:00\r\nDomingo: 8:00-1:30', 0, NULL, 'Cartas, Dominó', 'Café Bar Manhattan'),
('Café-Bar Meson Paris', 30, 4.4, 'De Lunes a Jueves: 8:00-23:30\r\nViernes: 8:00-24:00\r\nSábado: 8:00-15:30\r\nDía de cierre: Domingo', 0, NULL, 'Cartas, Dardos, Dominó, Ajedrez', 'Café Bar Mesón París'),
('Café-Bar Mis Maruja', 30, 4.4, 'Martes y Jueves: 8:30-21:30\r\nMiércoles: 8:30-21:00\r\nViernes: 8:30-22:00\r\nSábado: 10:00-22:00\r\nDomingo: 10:00-21:00\r\nDía de cierre: Lunes', 0, NULL, 'Cartas, Parchís', 'Café Bar Mis Maruja '),
('Café-Bar Os Trasnos', 50, 4.5, 'De Lunes a Domingo: 8:30-23:30\r\nDía de cierre: Sábado', 0, NULL, 'Cartas, Ajedrez, Dardos', 'Café Bar Os Trasnos'),
('Café-Bar Par 28', 50, 4.3, 'De Martes a Viernes: 8:00-23:00\r\nSábado: 9:30-24:00\r\nDomingo: 10:30-24:00\r\nDía de cierre: Lunes', 0, NULL, 'Cartas, Ajedrez', 'Café Bar Par 28'),
('Café-Bar Picnic', 80, 4.1, 'De Lunes a Viernes: 8:30-24:00\r\nSábado y Domingo: 10:00-24:00', 0, NULL, 'Cartas', 'Café Bar Picnic'),
('Café-Bar Prisma', 50, 4.5, 'De Martes a Viernes: 8:00-24:00\r\nSábado y Domingo: 10:00-24:00', 0, NULL, 'Cartas', 'Café Bar Prisma'),
('Café-Bar Rialto Terraza', 100, 4.1, 'Miércoles y Jueves: 20:00-2:00\r\nViernes y Sábado: 17:00-4:30\r\nDomingo: 16:00-21:00\r\nDías de cierre: Lunes y Martes', 0, NULL, 'Cartas, Dominó', 'Café Bar Rialto Terraza'),
('Café-Bar Sheraton', 50, 3.3, 'De Lunes a Sábado: 9:00-23:00\r\nDomingo: 11:00-23:00', 0, NULL, 'Cartas', 'Café Bar Sheraton'),
('Café-Bar Tela Marinera', 100, 4.5, 'Lunes: 18:00-1:00\r\nDe Martes a Viernes: 18:00-2:30\r\nSábado y Domingo: 12:00-2:30', 0, '- I Campeonato de Dardos Individual de Cricket 501. Sábado 11 y Domingo 12 de Diciembre', 'Cartas, Dardos', 'Café Bar Tela Marinera'),
('Café-Bar The Breen´s Tavern', 50, 4.3, 'De Lunes a Viernes: 8:30-1:00\r\nSábado y Domingo: 12:00-1:00', 0, NULL, 'Cartas, Dardos, Villar', 'Café Bar The Breen\'s Tavern'),
('Café-Bar UNI', 50, 4.3, 'De Lunes y Miércoles: 8:00-24:00\r\nJueves: 8:00-2:00\r\nViernes: 8:00-4:00\r\nSábado: 9:00-4:00\r\nDomingo: 16:00-24:00', 0, NULL, 'Cartas, Dardos, Villar', 'Café Bar UNI'),
('Café-Bar Vanesa', 30, 4.0, 'De Lunes a Viernes: 7:00-23:00\r\nSábado y Domingo: 9:00-23:00', 0, NULL, 'Cartas', 'Cafe Bar Vanessa'),
('Café-Bar Zurich', 50, 4.0, 'De Lunes a Domingo: Abierto las 24 horas', 0, NULL, 'Cartas, Poker(dinero ficticio) Dominó, Ajedrez, Dardos', 'Cafe Bar Zurich');

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
  `Nombre` varchar(30) NOT NULL,
  `HoraAproximada` varchar(5) NOT NULL,
  `Edad` varchar(2) NOT NULL,
  `NombreLocal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `ID` int(11) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL,
  `RESTAURANTE_Nombre` varchar(50) NOT NULL,
  `BAR_Nombre` varchar(50) NOT NULL,
  `ME_GUSTA_ID` int(11) NOT NULL
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
('Café Bar La Compe', 'Monte Alto', 'Rua La Torre, 75', 'A Coruña'),
('Café Bar La Garimbota', 'Monte Alto', 'Avd. Hércules, 94', 'A Coruña'),
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
('Restaurante Pulperia A Coruña', 'Os Castros', 'A, Rúa Monte das Moas, 5', 'A Coruña'),
('Restaurante Raxaría As Neves', 'Ronda de Outeiro', 'Ronda de Outeiro Marisquería Cancelo, 300', 'A Coruña'),
('Restaurante Rubia y Gallega', 'Matogrande', 'Rua Enrique Mariñas Romero, 3', 'A Coruña'),
('Restaurante Tapería Ancar', 'Los Rosales', 'Rúa Emilio González López, 4', 'A Coruña'),
('Restaurante The Breen\'s Tavern', 'María Pita', 'Plaza María Pita, 24', 'A Coruña'),
('Restaurate Indú Malasaña', 'Monelos', 'Av. da Concordia, 199', 'A Coruña');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Puntuacion` decimal(1,1) NOT NULL,
  `Telefono` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_ocupacion`
--

CREATE TABLE `historial_ocupacion` (
  `ID` int(11) NOT NULL,
  `Lunes` varchar(50) NOT NULL,
  `Martes` varchar(50) NOT NULL,
  `Miércoles` varchar(50) NOT NULL,
  `Jueves` varchar(50) NOT NULL,
  `Viernes` varchar(50) NOT NULL,
  `Sábado` varchar(50) NOT NULL,
  `Domingo` varchar(50) NOT NULL,
  `NombreLocal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `ID` int(11) NOT NULL,
  `Sexo` varchar(6) DEFAULT NULL,
  `Edad` varchar(2) DEFAULT NULL,
  `EstadoCivil` varchar(20) DEFAULT NULL,
  `RamaProfesional` varchar(45) DEFAULT NULL,
  `Intereses` varchar(100) DEFAULT NULL,
  `FAVORITOS_ID` int(11) NOT NULL,
  `ALARMA_N.Alarma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurante`
--

CREATE TABLE `restaurante` (
  `Nombre` varchar(50) NOT NULL,
  `Capacidad` int(11) NOT NULL,
  `Puntuacion` float(2,1) NOT NULL,
  `Carta` varchar(5000) DEFAULT NULL,
  `Horario` varchar(1000) NOT NULL,
  `CLIENTES_HABITUALES_ID1` int(11) NOT NULL,
  `DIRECCION_NombreLocal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `restaurante`
--

INSERT INTO `restaurante` (`Nombre`, `Capacidad`, `Puntuacion`, `Carta`, `Horario`, `CLIENTES_HABITUALES_ID1`, `DIRECCION_NombreLocal`) VALUES
('Restaurante A Pulperia de Melide', 100, 4.2, 'https://pulpeirademelide.com/', 'De Martes a Domingo: 13:00-16:00 y de 20:00 a 23:30\r\nDía de cierre: Lunes', 0, 'Restaurante A Pulpería de Melide'),
('Restaurante Asador El Atlantico', 150, 4.4, 'http://www.restaurantelatlantico.es/menu/', 'Martes: 9:00-23:30 \r\nMiércoles, Jueves y Sábado: De 13:00-16:00 y de 21:00 a 23:30\r\nViernes: De 13:00-16:00 y de 20:00 a 23:30\r\nDomingo: 13:00-16:00\r\nDía de cierre: Lunes', 0, 'Restaurante Asador El Atlantico'),
('Restaurante Casa Canosa', 100, 4.2, NULL, 'De Lunes a Jueves: 8:30-23:00\r\nViernes: 8:30-23:30\r\nSábado: 11:00-23:30\r\nDía de cierre: Domingo', 0, 'Restaurante Canosa'),
('Restaurante Chino Work Two', 20, 4.4, NULL, 'De Lunes a Domingo: 12:00-16:30 y de 19:00-23:45\r\nDía de cierre: Martes', 0, 'Restaurante Chino Work Two'),
('Restaurante Gloria Bendita', 100, 4.4, 'https://gloriabenditarestaurante.com/', 'De Lunes a Sábado: 13:00-15:30 y de 21:00-23:30\r\nDomingo: 13:00-15:30', 0, 'Restaurante Gloria Bendita'),
('Restaurante Hünico', 120, 4.1, 'https://restaurantehunico.com/la-carta#carta', 'De Lunes a Domingo: 7:00-1:00', 0, 'Restaurante Hünico'),
('Restaurante Italiano Enzo´s', 120, 4.2, 'https://www.enzos.es/order?l=es#/restaurant/5237/collection/4254', 'De Martes a Domingo: 12:30-15:50 y de 20:00-23:30\r\nDía de cierre: Lunes', 0, 'Restaurante Italiano Enzo´s'),
('Restaurante Japonés Tempura', 150, 4.2, 'https://restaurantetempura.es/carta-tempura', 'De Lunes a Domingo: 13:00-16:00 y de 20:30-23:30\r\nDía de cierre: Lunes\r\n', 0, 'Restaurante Japonés Tempura'),
('Restaurante Kaigos Shisha', 100, 4.4, 'https://www.instagram.com/kairos_shisha_coruna', 'De Lunes a Miércoles: 19:00-1:00\r\nJueves y Domingo: 19:00-2:00\r\nViernes y Sábado: 19:00-2:30', 0, 'Restaurante Kairos Shisha'),
('Restaurante La Penela', 100, 4.2, 'http://www.lapenela.com/restaurantes/maria_pita', 'De Lunes a Sábado: 13:30-16:30 y de 21:00-24:00\r\nDomingo: 13:30-16:30\r\nDía de cierre: Martes', 0, 'Restaurante La Penela'),
('Restaurante La Sartén', 150, 4.4, 'https://www.restaurantelasarten.com/es/carta', 'De Lunes a Sábado: 12:30-24:00\r\nDomingo: 12:00-17:00', 0, 'Restaurante La Sartén De Coruña'),
('Restaurante La Tagliatella', 150, 4.1, 'https://www.latagliatella.es/carta', 'De Lunes a Jueves: 13:00-16:00 y de 20:00-24:00\r\nViernes: 13:00-16:00 y de 20:00-24:30\r\nSábado: 13:00-16:30 y de 20:00-24:30\r\nDomingo: 13:00-16:30 y de 20:00-24:00', 0, 'Restaurante Italiano La Tagliatella'),
('Restaurante Marisquería La Uva Dorada', 150, 4.5, 'https://www.facebook.com/La-Uva-Dorada-121434634633680/', 'De Lunes a Sábado: 9:00-23:30\r\nDomingo: 9:00-18:00', 0, 'Restaurante Marisquería La Uva Dorada'),
('Restaurante Mejicano Los Farolitos', 100, 4.5, 'https://www.facebook.com/Los-Farolitos-La-Coru%C3%B1a-1011481402295299', 'Lunes: 13:30-16:00\r\nDe Martes a Jueves: 13:30-16:00 y de 20:30-23:00\r\nViernes y Sábado: 13:30-16:00 y de 20:30-23:30\r\nDomingo: 13:30-16:00 y de 20:30-23:00\r\n\r\n ', 0, 'Restaurante Mejicano Los Farolitos'),
('Restaurante Mejicano Nana Pancha', 100, 4.4, 'https://nanapancha.es/carta', 'Viernes y Sábado: 13:30-15:45 y de 20:30-24:00\r\nDe Domingo a Jueves: 13:30-15:30 y de 20:30-22:45\r\n\r\n', 0, 'Restaurante Mejicano Nana Pancha'),
('Restaurante Mesón Os Castros', 100, 4.3, 'https://www.tripadvisor.es/Restaurant_Review-g187507-d9829630-Reviews-Meson_Os_Castros-La_Coruna_Province_of_A_Coruna_Galicia.html', 'De Lunes a Sábado: 9:00-16:00 y de 20:00-24:00\r\nDomingo: 9:00-18:00', 0, 'Restaurante Mesón Os Castros'),
('Restaurante Nova Lua Chea', 100, 4.2, 'https://www.novaluacheagastrobar.es/es/productos', 'De Martes a Viernes: 9:00-24:00\r\nSábado y Domingo: 10:00-24:00\r\nDía de Cierre: Lunes', 0, 'Restaurante Nova Lua Chea'),
('Restaurante O Fado', 100, 4.4, 'https://restaurante-o-fado.negocio.site/#menu', 'De Domingo a Jueves: 12:30-16:30\r\nViernes y Sábados: 12:30-16:30 y de 21:00 a 23:45\r\nDía de cierre: Lunes', 0, 'Restaurante O Fado'),
('Restaurante O Pendello', 100, 4.3, 'https://www.facebook.com/pages/O-Pendello/176474242372255', 'De Lunes a Sábado: 13:00-16:00 y de 20:30-24:00\r\nDía de cierre: Domingo', 0, 'Restaurante O Pendello');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Alias` varchar(50) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Clave` varchar(30) NOT NULL,
  `PERFIL_ID` int(11) NOT NULL,
  `RESTAURANTE_Nombre` varchar(50) NOT NULL,
  `COMENTARIO_ID` int(11) NOT NULL,
  `COMENTARIO_RESTAURANTE_Nombre` varchar(50) NOT NULL,
  `COMENTARIO_BAR_Nombre` varchar(50) NOT NULL,
  `COMENTARIO_ME_GUSTA_ID` int(11) NOT NULL
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
  ADD PRIMARY KEY (`ID`,`RESTAURANTE_Nombre`,`BAR_Nombre`,`ME_GUSTA_ID`),
  ADD KEY `fk_COMENTARIO_RESTAURANTE1_idx` (`RESTAURANTE_Nombre`),
  ADD KEY `fk_COMENTARIO_BAR1_idx` (`BAR_Nombre`),
  ADD KEY `fk_COMENTARIO_ME_GUSTA1_idx` (`ME_GUSTA_ID`);

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
  ADD PRIMARY KEY (`ID`,`FAVORITOS_ID`,`ALARMA_N.Alarma`),
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
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Alias`,`PERFIL_ID`,`RESTAURANTE_Nombre`,`COMENTARIO_ID`,`COMENTARIO_RESTAURANTE_Nombre`,`COMENTARIO_BAR_Nombre`,`COMENTARIO_ME_GUSTA_ID`),
  ADD KEY `fk_USUARIO_PERFIL_idx` (`PERFIL_ID`),
  ADD KEY `fk_USUARIO_RESTAURANTE1_idx` (`RESTAURANTE_Nombre`),
  ADD KEY `fk_USUARIO_COMENTARIO1_idx` (`COMENTARIO_ID`,`COMENTARIO_RESTAURANTE_Nombre`,`COMENTARIO_BAR_Nombre`,`COMENTARIO_ME_GUSTA_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alarma`
--
ALTER TABLE `alarma`
  MODIFY `N.Alarma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes_habituales`
--
ALTER TABLE `clientes_habituales`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historial_ocupacion`
--
ALTER TABLE `historial_ocupacion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `me_gusta`
--
ALTER TABLE `me_gusta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
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

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_USUARIO_COMENTARIO1` FOREIGN KEY (`COMENTARIO_ID`,`COMENTARIO_RESTAURANTE_Nombre`,`COMENTARIO_BAR_Nombre`,`COMENTARIO_ME_GUSTA_ID`) REFERENCES `comentario` (`ID`, `RESTAURANTE_Nombre`, `BAR_Nombre`, `ME_GUSTA_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_USUARIO_PERFIL` FOREIGN KEY (`PERFIL_ID`) REFERENCES `perfil` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_USUARIO_RESTAURANTE1` FOREIGN KEY (`RESTAURANTE_Nombre`) REFERENCES `restaurante` (`Nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
