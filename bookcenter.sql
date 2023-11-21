-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2023 a las 13:30:11
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
-- Base de datos: `bookcenter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `Nombre` varchar(45) NOT NULL,
  `Creacion` date NOT NULL,
  `Registro` date NOT NULL,
  `Genero` varchar(45) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `Escritor` varchar(45) NOT NULL,
  `Foto` varchar(45) NOT NULL,
  `Precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`Nombre`, `Creacion`, `Registro`, `Genero`, `Descripcion`, `ISBN`, `Escritor`, `Foto`, `Precio`) VALUES
('', '0000-00-00', '0000-00-00', 'Deporte', 'wegttthyereeqrr', 1111, 'Takehiko Inoue', 'Slam Dunk.jpg', 7777),
('fgdfsdfdsdf', '2024-03-06', '2023-10-10', 'asdasd', 'asdasd', 0, 'dfgfdg', 'Julieta.jpg', 7),
('', '0000-00-00', '0000-00-00', '', '', 0, '', '', 0),
('', '0000-00-00', '0000-00-00', 'Deporte', 'wegttthyereeqrr', 1111, 'Takehiko Inoue', 'Slam Dunk.jpg', 7777),
('', '0000-00-00', '0000-00-00', '', '', 0, '', '', 0),
('', '0000-00-00', '0000-00-00', '', '', 0, '', '', 0),
('', '0000-00-00', '0000-00-00', '', '', 0, '', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
