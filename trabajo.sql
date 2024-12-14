-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2024 a las 00:32:50
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trabajo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `course`
--

CREATE TABLE `course` (
  `idcur` int(11) NOT NULL,
  `nomcur` varchar(150) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `course`
--

INSERT INTO `course` (`idcur`, `nomcur`, `fere`) VALUES
(1, 'Computación e Informática', '2024-12-13 02:31:16'),
(2, 'Hostelería y Turismo', '2024-12-13 02:45:14'),
(3, 'Textil y Confección', '2024-12-13 02:46:13'),
(4, 'Estética Personal', '2024-12-13 02:46:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_notas`
--

CREATE TABLE `detalle_notas` (
  `id` int(11) NOT NULL,
  `notas_id` int(11) NOT NULL,
  `students_idstu` int(11) NOT NULL,
  `prof_period_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_notas`
--

INSERT INTO `detalle_notas` (`id`, `notas_id`, `students_idstu`, `prof_period_id`) VALUES
(2, 1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `nota1` varchar(45) NOT NULL,
  `nota2` varchar(45) NOT NULL,
  `nota3` varchar(45) NOT NULL,
  `nota4` varchar(45) NOT NULL,
  `nota5` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `nota1`, `nota2`, `nota3`, `nota4`, `nota5`) VALUES
(1, '11', '12', '13', '14', '15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `period`
--

CREATE TABLE `period` (
  `idper` int(11) NOT NULL,
  `numperi` char(15) NOT NULL,
  `starperi` date NOT NULL,
  `endperi` date NOT NULL,
  `nomperi` varchar(150) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `period`
--

INSERT INTO `period` (`idper`, `numperi`, `starperi`, `endperi`, `nomperi`, `fere`) VALUES
(1, '2024-1', '2024-03-06', '2024-07-02', 'Marzo-Julio', '2024-12-13 02:27:26'),
(2, '2024-2', '2024-07-08', '2024-12-30', 'Julio-Diciembre', '2024-12-13 02:29:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prof_period`
--

CREATE TABLE `prof_period` (
  `id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `period_idper` int(11) NOT NULL,
  `course_idcur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prof_period`
--

INSERT INTO `prof_period` (`id`, `usuarios_id`, `period_idper`, `course_idcur`) VALUES
(1, 2, 1, 1),
(2, 3, 1, 2),
(3, 2, 1, 3),
(4, 3, 2, 3),
(5, 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `idstu` int(11) NOT NULL,
  `dnist` char(8) NOT NULL,
  `nomstu` varchar(45) NOT NULL,
  `edast` varchar(20) NOT NULL,
  `direce` varchar(150) NOT NULL,
  `correo` varchar(35) NOT NULL,
  `sexes` varchar(15) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuarios_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`idstu`, `dnist`, `nomstu`, `edast`, `direce`, `correo`, `sexes`, `foto`, `fere`, `usuarios_id`) VALUES
(1, '71441477', 'Alfonso Ugarte', '18', 'SJL', 'alfonso@gmail.com', 'Masculino', '140701.png', '2024-12-13 03:14:06', 1),
(2, '71441477', 'Gianfranco Vizcarra', '32', 'Comas', 'gianfranco@gmail.com', 'Masculino', '732175.jpg', '2024-12-13 05:15:40', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `rol` varchar(45) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `apellidos`, `correo`, `clave`, `rol`, `celular`, `fere`) VALUES
(1, 'jjrokker', 'JORDAN ROKE', 'Bonilla Pacsi', 'admin@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '1', '934420299', '2022-07-04 23:20:07'),
(2, 'carlos555', 'Carlos', 'Espinoza', 'carlos@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1', '924581255', '2024-12-13 02:16:55'),
(3, 'andree555', 'Andreé', 'Bonilla Pacsi', 'andree@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2', '934420288', '2024-12-13 02:18:22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`idcur`);

--
-- Indices de la tabla `detalle_notas`
--
ALTER TABLE `detalle_notas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detalle_notas_notas1_idx` (`notas_id`),
  ADD KEY `fk_detalle_notas_students1_idx` (`students_idstu`),
  ADD KEY `fk_detalle_notas_prof_period1_idx` (`prof_period_id`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `period`
--
ALTER TABLE `period`
  ADD PRIMARY KEY (`idper`);

--
-- Indices de la tabla `prof_period`
--
ALTER TABLE `prof_period`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_prof_period_usuarios1_idx` (`usuarios_id`),
  ADD KEY `fk_prof_period_period1_idx` (`period_idper`),
  ADD KEY `fk_prof_period_course1_idx` (`course_idcur`);

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`idstu`),
  ADD KEY `fk_students_usuarios_idx` (`usuarios_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `course`
--
ALTER TABLE `course`
  MODIFY `idcur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `detalle_notas`
--
ALTER TABLE `detalle_notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `period`
--
ALTER TABLE `period`
  MODIFY `idper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `prof_period`
--
ALTER TABLE `prof_period`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `idstu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_notas`
--
ALTER TABLE `detalle_notas`
  ADD CONSTRAINT `fk_detalle_notas_notas1` FOREIGN KEY (`notas_id`) REFERENCES `notas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalle_notas_prof_period1` FOREIGN KEY (`prof_period_id`) REFERENCES `prof_period` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalle_notas_students1` FOREIGN KEY (`students_idstu`) REFERENCES `students` (`idstu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prof_period`
--
ALTER TABLE `prof_period`
  ADD CONSTRAINT `fk_prof_period_course1` FOREIGN KEY (`course_idcur`) REFERENCES `course` (`idcur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prof_period_period1` FOREIGN KEY (`period_idper`) REFERENCES `period` (`idper`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prof_period_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_students_usuarios` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
