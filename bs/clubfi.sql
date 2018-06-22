-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-06-2018 a las 01:43:11
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clubfi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atletas`
--

CREATE TABLE `atletas` (
  `id` int(11) NOT NULL,
  `nombres` varchar(20) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(20) COLLATE utf8_bin NOT NULL,
  `f_nacimiento` date NOT NULL,
  `telefono` varchar(20) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(40) COLLATE utf8_bin NOT NULL,
  `representante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `atletas`
--

INSERT INTO `atletas` (`id`, `nombres`, `apellidos`, `f_nacimiento`, `telefono`, `direccion`, `representante`) VALUES
(2323, 'anderson', 'vi', '2018-01-01', '2132', '123123', 823232),
(3343432, 'asdas', 'sadasd', '2018-01-01', '2222', 'asdasd', 3432434),
(5901429, 'verga', 'pero', '2018-01-01', '324324', '234324', 5901429),
(7878787, 'brandom', 'bermudez', '2018-06-05', '3323233', 'nose', 5688602),
(7878788, 'otro', 'nmas', '2018-01-01', 'sdsd', 'sdsd', 77777),
(18989898, 'cristiano', 'ronaldo', '2018-01-31', '18989898', '18989898', 18989898),
(2147483647, 'dsdad', 'asdasd', '2018-12-31', '324324', '234324234', 4332324);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenadores`
--

CREATE TABLE `entrenadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(20) COLLATE utf8_bin NOT NULL,
  `labor` varchar(20) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(20) COLLATE utf8_bin NOT NULL,
  `dieccion` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenados`
--

CREATE TABLE `entrenados` (
  `entrenador` int(11) NOT NULL,
  `jugador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representados`
--

CREATE TABLE `representados` (
  `representante` int(11) NOT NULL,
  `jugador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representantes`
--

CREATE TABLE `representantes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(20) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(20) COLLATE utf8_bin NOT NULL,
  `parentezco` varchar(10) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(20) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `representantes`
--

INSERT INTO `representantes` (`id`, `nombres`, `apellidos`, `parentezco`, `telefono`, `direccion`) VALUES
(77777, 'verga', 'hasta cuando', '77777', '77777', '77777'),
(123123, 'mierda', '23213', '12312', '12312312', '213123'),
(823232, 'mejia', 'nose', 'nada', '23232', '2323'),
(3432434, 'sdasd', 'asdasd', 'ssd', 'sd', 'asdsad'),
(4332324, 'sasdsadsadda', 'ssaddsa', 'sdadsad', '32234343', '324234'),
(5688602, 'junior', 'jota', '5688602', '5688602', '5688602'),
(5901429, 'ni', 'dsdsd', 'sadasd', '34234', 'sadasd'),
(18989898, 'dsdsdss', 'sdadasd', 'sadasd', 'sadasd', 'asdas'),
(26066130, 'juan', 'felipe', 'nose', '26066130', '26066130'),
(26425577, 'nose', 'medina', '26425577', '26425577', '26425577');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atletas`
--
ALTER TABLE `atletas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `representante` (`representante`);

--
-- Indices de la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entrenados`
--
ALTER TABLE `entrenados`
  ADD KEY `entrenador` (`entrenador`),
  ADD KEY `jugador` (`jugador`);

--
-- Indices de la tabla `representados`
--
ALTER TABLE `representados`
  ADD KEY `representante` (`representante`),
  ADD KEY `jugador` (`jugador`);

--
-- Indices de la tabla `representantes`
--
ALTER TABLE `representantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atletas`
--
ALTER TABLE `atletas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
--
-- AUTO_INCREMENT de la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `representantes`
--
ALTER TABLE `representantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26425578;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `atletas`
--
ALTER TABLE `atletas`
  ADD CONSTRAINT `atletas_ibfk_1` FOREIGN KEY (`representante`) REFERENCES `representantes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `entrenados`
--
ALTER TABLE `entrenados`
  ADD CONSTRAINT `entrenados_ibfk_1` FOREIGN KEY (`entrenador`) REFERENCES `entrenadores` (`id`),
  ADD CONSTRAINT `entrenados_ibfk_2` FOREIGN KEY (`jugador`) REFERENCES `atletas` (`id`);

--
-- Filtros para la tabla `representados`
--
ALTER TABLE `representados`
  ADD CONSTRAINT `representados_ibfk_1` FOREIGN KEY (`representante`) REFERENCES `representantes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
