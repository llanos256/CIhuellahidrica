-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 04:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `huellahidrica`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `publicaciones_id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`id`, `descripcion`, `created`, `modified`, `publicaciones_id`, `persona_id`) VALUES
(1, 'mkhjkg', '2021-05-31 14:43:04', '2021-05-31 14:43:04', 1, 2),
(2, 'mkhkg', '2021-05-31 14:43:18', '2021-05-31 14:43:18', 1, 2),
(3, 'fngkj', '2021-05-31 15:14:01', '2021-05-31 15:14:01', 1, 2),
(4, 'hola', '2021-05-31 22:33:18', '2021-05-31 22:33:18', 1, 2),
(5, 'hola2', '2021-05-31 22:35:13', '2021-05-31 22:35:13', 1, 2),
(6, 'hola3', '2021-05-31 22:40:38', '2021-05-31 22:40:38', 1, 2),
(8, 'primer comentario ', '2021-05-31 22:43:04', '2021-05-31 22:43:04', 2, 2),
(9, 'segundo comentario ', '2021-05-31 22:43:11', '2021-05-31 22:43:11', 2, 2),
(10, 'ajajaj', '2021-05-31 22:44:47', '2021-05-31 22:44:47', 2, 1),
(11, ':)x2', '2021-06-01 21:34:50', '2021-06-01 21:34:50', 3, 2),
(12, 'hola', '2021-06-02 15:05:58', '2021-06-02 15:05:58', 3, 2),
(13, 'hey', '2021-06-03 22:26:09', '2021-06-03 22:26:09', 5, 2),
(14, 'siiii', '2021-06-03 22:40:36', '2021-06-03 22:40:36', 5, 2),
(15, 'muy Bueno :)', '2021-06-05 09:41:27', '2021-06-05 09:41:27', 10, 19);

-- --------------------------------------------------------

--
-- Table structure for table `encuesta`
--

CREATE TABLE `encuesta` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `fecha` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `persona_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `encuesta`
--

INSERT INTO `encuesta` (`id`, `titulo`, `fecha`, `created`, `modified`, `persona_id`) VALUES
(1, 'consumo del agua', '2021-06-01', '2021-06-01 14:25:53', '2021-06-01 14:25:53', 2);

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `potable` tinyint(1) DEFAULT NULL,
  `tipo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `apellido`, `nickname`, `email`, `contrasena`, `created`, `modified`, `potable`, `tipo_id`) VALUES
(1, 'David', 'Llanos', 'rorke256', 'david@hotmail.com', '123', '2021-05-24 21:57:44', '2021-05-24 21:57:44', 0, 1),
(2, 'Carlos', 'Aramendiz', 'idelcoco', 'carlos@gmail.com', '123', '2021-05-24 22:03:31', '2021-05-24 22:03:31', 0, 1),
(3, 'diego', 'de avila', 'sierra', 'sierra@idelcoco.com', '123', '2021-06-01 21:17:03', '2021-06-01 21:17:03', 1, 2),
(4, 'María', 'Helena', 'María95', 'María95@idelcoco.com', '123', '2021-06-01 21:22:15', '2021-06-01 21:22:15', 1, 2),
(5, 'jhoandri', 'peña', 'jhoandri', 'jhoandri@idelcoco.com', '123', '2021-06-01 21:26:25', '2021-06-01 21:26:25', 0, 2),
(6, 'Karla', 'Lopez', 'Karla95', 'Karla95@idelcoco.com', '123', '2021-06-01 21:48:46', '2021-06-01 21:48:46', 0, 2),
(7, 'Romero', 'Jesus', 'Romero', 'Romero@idelcoco.com', '123', '2021-06-01 21:50:00', '2021-06-01 21:50:00', 0, 2),
(8, 'Carlos', 'Triana', 'trianin', 'trianin@idelcoco.com', '123', '2021-06-01 21:52:13', '2021-06-01 21:52:13', 1, 2),
(9, 'Eder', 'Aramendiz', 'Eder12', 'Eder12@idelcoco', '123', '2021-06-01 21:59:45', '2021-06-01 21:59:45', 1, 2),
(10, 'David', 'Escorcia', 'Davidelpapu', 'David@idelcoco.com', '123', '2021-06-01 22:00:48', '2021-06-01 22:00:48', 0, 2),
(11, 'pepe', 'coco', 'idelpepe', 'idelpepe@idelcoco.com', '123', '2021-06-01 22:14:41', '2021-06-01 22:14:41', 0, 2),
(12, 'Barry', 'Ali', 'BarryAll', 'BarryAll@idelcoco.com', '123', '2021-06-01 22:16:28', '2021-06-01 22:16:28', 1, 2),
(14, 'Diego', 'De Avila', 'DiegoAdmin', 'DiegoAdmin@idelcoco.com', '123', '2021-06-03 15:21:32', '2021-06-03 15:21:32', NULL, 1),
(15, 'Triana', 'Carlos', 'TrianaAdmin', 'TrianaAdmin@idelcoco.com', '123', '2021-06-03 15:24:58', '2021-06-03 15:24:58', NULL, 1),
(18, 'Sergio', 'Jimenez', 'SergioAdmin', 'SergioAdmin@idelcoco.com', '123', '2021-06-05 09:38:11', '2021-06-05 09:38:11', NULL, 1),
(19, 'Sergio', 'Jimenez', 'Sergio', 'SergioJimenez@idelcoco.com', '123', '2021-06-05 09:40:44', '2021-06-05 09:40:44', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `encuesta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preguntas`
--

INSERT INTO `preguntas` (`id`, `descripcion`, `created`, `modified`, `encuesta_id`) VALUES
(1, '¿Cuántas veces te duchas a la semana?', '2021-06-01 14:36:25', '2021-06-01 14:36:25', 1),
(2, '¿Cuántas personas viven en tu casa?', '2021-06-01 14:38:43', '2021-06-01 14:38:43', 1),
(3, '¿Cuántas baldes de agua te gasta a la semana para limpiar tu casa? ', '2021-06-01 14:46:15', '2021-06-01 14:46:15', 1),
(4, '¿Cuántas veces usas el inodoro a la semana?', '2021-06-01 14:48:36', '2021-06-01 14:48:36', 1),
(5, '¿Cuántas veces usa la lavadora a la semana?', '2021-06-01 14:56:28', '2021-06-01 14:56:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descripcion` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `persona_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `titulo`, `descripcion`, `created`, `modified`, `persona_id`) VALUES
(1, 'agua', 'yoykity', '2021-05-31 14:39:41', '2021-05-31 14:39:41', 1),
(2, 'hola', 'buenas noches ', '2021-05-31 21:32:10', '2021-05-31 21:32:10', 2),
(3, 'Bienvenido', 'llevamos unas semanas activos :)', '2021-06-01 21:34:20', '2021-06-01 21:34:20', 2),
(4, 'excelente', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto ut quos fuga voluptas unde, modi non maxime obcaecati excepturi deleniti inventore, voluptates adipisci illum magni quasi. Ex quam error ducimus.', '2021-06-02 16:08:35', '2021-06-02 16:08:35', 2),
(5, 'hola', 'como estan', '2021-06-03 22:05:58', '2021-06-03 22:05:58', 2),
(6, 'Consejo #1 ????', 'No dejes el grifo abierto al lavarte los dientes o afeitarte. Con esta práctica tan habitual se derrochan hasta 30 litros por persona cada día.', '2021-06-04 17:44:23', '2021-06-04 17:44:23', 2),
(7, 'Consejo #2', 'Reutiliza el agua. Intenta volver a utilizar el agua que no esté sucia para otras acciones, como por ejemplo, el agua del baño de tus hijos te puede servir para fregar el suelo.', '2021-06-04 17:45:10', '2021-06-04 17:45:10', 2),
(8, 'Consejo #3', 'Ten cuidado con las fugas en el baño y la cocina. Hay que revisar cada cierto tiempo la grifería y los elementos urinarios porque con el uso pueden aparecer pequeñas fugas que generan importantes pérdidas de agua y dinero al cabo del tiempo.', '2021-06-04 17:46:22', '2021-06-04 17:46:22', 2),
(9, 'Consejo #4', 'Instala grifería termostática o electrónica en la cocina y el baño. Estos sistemas hace que el uso del agua se racionalice al poderse regular el consumo.', '2021-06-04 17:46:51', '2021-06-04 17:46:51', 2),
(10, 'Cuidado del agua', 'El agua es vida!', '2021-06-05 09:36:58', '2021-06-05 09:36:58', 2);

-- --------------------------------------------------------

--
-- Table structure for table `respuesta`
--

CREATE TABLE `respuesta` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `preguntas_id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `rol` varchar(25) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipo`
--

INSERT INTO `tipo` (`id`, `rol`, `created`, `modified`) VALUES
(1, 'admin', '2021-05-24 21:51:14', '2021-05-24 21:51:14'),
(2, 'usuario', '2021-05-24 21:54:03', '2021-05-24 21:54:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comentarios_publicaciones1_idx` (`publicaciones_id`),
  ADD KEY `fk_comentarios_persona1_idx` (`persona_id`);

--
-- Indexes for table `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_formulario_persona1_idx` (`persona_id`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_persona_tipo1_idx` (`tipo_id`);

--
-- Indexes for table `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_preguntas_encuesta1_idx` (`encuesta_id`);

--
-- Indexes for table `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_publicaciones_persona1_idx` (`persona_id`);

--
-- Indexes for table `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_respuesta_preguntas1_idx` (`preguntas_id`),
  ADD KEY `fk_respuesta_persona1_idx` (`persona_id`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_comentarios_persona1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comentarios_publicaciones1` FOREIGN KEY (`publicaciones_id`) REFERENCES `publicaciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `encuesta`
--
ALTER TABLE `encuesta`
  ADD CONSTRAINT `fk_formulario_persona1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_persona_tipo1` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `fk_preguntas_encuesta1` FOREIGN KEY (`encuesta_id`) REFERENCES `encuesta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `fk_publicaciones_persona1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `fk_respuesta_persona1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_respuesta_preguntas1` FOREIGN KEY (`preguntas_id`) REFERENCES `preguntas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
