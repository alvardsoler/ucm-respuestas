-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-05-2016 a las 11:41:15
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mibd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `answers`
--

CREATE TABLE `answers` (
  `questionID` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `text` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id`, `username`, `title`, `text`) VALUES
(1, 'pepito', 'Un título', 'Un Texto guay');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `show_email` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `show_email`) VALUES
('', '', '', 1),
('cserra@ucm.es', 'aigam666@gmail.com', '12345', 1),
('otro', 'a@e.e', 'abcde', 1),
('pepito', 'aaab@e.e', '12345', 1),
('userr', 'a@ee.e', '12345', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
  ADD KEY `questionID` (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
