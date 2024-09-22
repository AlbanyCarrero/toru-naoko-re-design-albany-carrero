-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2023 a las 15:32:47
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
-- Base de datos: `contenidos_creatividad_3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_sign_in_up`
--

CREATE TABLE `user_sign_in_up` (
  `user_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `country` enum('Argentina','Chile','Uruguay','USA') NOT NULL,
  `region` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `zip` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `country_2` enum('Argentina','Chile','Uruguay','USA') DEFAULT NULL,
  `region_2` varchar(100) DEFAULT NULL,
  `province_2` varchar(100) DEFAULT NULL,
  `zip_2` int(10) DEFAULT NULL,
  `address_2` varchar(200) DEFAULT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user_sign_in_up`
--

INSERT INTO `user_sign_in_up` (`user_name`, `last_name`, `email`, `phone`, `birth_date`, `country`, `region`, `province`, `zip`, `address`, `country_2`, `region_2`, `province_2`, `zip_2`, `address_2`, `password`) VALUES
('Albany', 'Carrero', 'albanycape@gmail.com', '+56930285294', '1998-10-31', 'Chile', 'Santiago', 'San Miguel', 8900000, 'Alcalde Pedro Alarcon 887, San Miguel', 'Chile', '', '', 0, '', 'concomillasint'),
('Albany', 'Carrero', 'albanycape@hotmail.com', '+56930285294', '1998-10-31', 'Chile', 'Santiago', 'San Miguel', 8900000, 'Alcalde Pedro Alarcon 887, San Miguel', 'Chile', '', '', 0, '', 'prueba2concomillas'),
('Albany', 'Carrero', 'albanycape@outlook.com', '+56930285294', '1998-10-31', 'Chile', 'Santiago', 'San Miguel', 8900000, 'Alcalde Pedro Alarcon 887, San Miguel', 'Chile', '', '', 0, '', 'prueba3concomillas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user_sign_in_up`
--
ALTER TABLE `user_sign_in_up`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
