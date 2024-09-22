-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2023 a las 17:32:35
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
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `p_code` int(5) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_collection` varchar(50) DEFAULT NULL,
  `p_category` varchar(20) NOT NULL,
  `p_price` int(8) DEFAULT NULL,
  `p_img` varchar(120) NOT NULL,
  `p_availability` varchar(20) DEFAULT NULL,
  `p_color` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`p_code`, `p_name`, `p_collection`, `p_category`, `p_price`, `p_img`, `p_availability`, `p_color`) VALUES
(1, 'April Biker Shorts', 'Retro Rendezvous', 'Bottoms', 50000, 'rr-april-biker-1.png', 'Pre-order', 'Negro'),
(2, 'Erika Thong', 'Retro Rendezvous', 'Sostenes', 25000, 'rr-erica-thong-1.png', 'Pre-order', 'Negro'),
(3, 'Kelly Wrap Flores', 'Retro Rendezvous', 'Sostenes', 44000, 'rr-kelly-wrap-bra-1.png', 'Pre-order', 'Negro'),
(5, 'Nicole Bra Top', 'Retro Rendezvous', 'Sostenes', 50000, 'rr-nicole-bra-1.png', 'Pre-order', 'Negro'),
(6, 'Panties Tyler Corazón', 'Retro Rendezvous', 'Panties', 38000, 'rr-panties-tyler-1.png', 'Pre-order', 'Negro'),
(7, 'Whitney Nightie', 'Retro Rendezvous', 'Pijamas', 7200, 'rr-whitney-nightie-1.jpg', 'Pre-order', 'Negro'),
(8, 'Bustier Lola', 'Elements', 'Tops', 58000, 'bustier-lola.jpg', '', 'Negro'),
(9, 'Bralette Bowie', 'Elements', 'Sostenes', 32000, 'bralette-bowie-1.png', '', 'Negro'),
(10, 'Crop Top Andy', 'Elements', 'Tops', 38000, 'andy-crop-top-1.png', '', 'Negro'),
(11, 'Bralette Libi', 'Heart to heart', 'Sostenes', 34000, 'bralette-libi-hth.png', '', 'Negro'),
(12, 'Garden Bralette', 'Garden dreams', 'Sostenes', 31998, 'bralette-verde-gd.png', '', 'Verde'),
(13, 'Sostén Fleur', 'After Dark', 'Sostenes', 39000, 'sosten-fleur-af.png', '', 'Negro'),
(14, 'Sostén Willow', '', 'Sostenes', 54000, 'willow-bra-blue.png', '', 'Azul'),
(15, 'Willow Thong', '', 'Panties', 0, 'willow-thong-blue.png', '', 'Azul'),
(16, 'Panties Garden Dreams', 'Garden dreams', 'Panties', 27000, 'gd-panties-1.png', '', 'Verde'),
(17, 'Bralette Ivy', 'Garden dreams', 'Sostenes', 53999, 'gd-ivy-bra.png', '', 'Verde'),
(18, 'Vestido Lencero Gia', '', 'Vestidos', 65000, 'gia-dress-beige.png', '', 'Beige'),
(19, 'Vestido Lencero Gia', '', 'Vestidos', 64999, 'gia-dress-green.png', '', 'Verde'),
(20, 'Bralette Bowie', 'Elements', 'Sostenes', 38100, 'bowie-bralette-blue.png', '', 'Azul'),
(21, 'Panties Kate', 'Elements', 'Panties', 23200, 'kate-pantie-blue.png', '', 'Azul'),
(22, 'Vestido Lencero Gia', '', 'Vestidos', 65000, 'gia-dress-black.png', '', 'Negro'),
(23, 'Top Andy - Modal', 'Elements', 'Tops', 38000, 'andy-top-modal.png', '', 'Negro'),
(24, 'Top Julia ', 'Elements', 'Tops', 54000, 'julia-top-black.png', '', 'Negro'),
(25, 'Pantalón Midnight', '', 'Bottoms', 49000, 'midnight-pant-black.png', '', 'Negro'),
(26, 'Tanga Floral Malva', '', 'Panties', 19000, 'malva-thong-flora.png', '', 'Beige'),
(27, 'Panties Blossom', 'After Dark', 'Panties', 22999, 'blossom-pantie-ad.png', '', 'Negro'),
(28, 'Bralette Clover', 'After Dark', 'Sostenes', 29000, 'clover-bralette-ad.png', '', 'Negro'),
(29, 'Pijama Lara ', '', 'Pijamas', 48998, 'lara-pijama-blue.png', '', 'Azul'),
(30, 'Pijama Lara ', '', 'Pijamas', 49000, 'lara-pijama-pink.png', '', 'Rosa'),
(31, 'Panties Val', 'New Basics', 'Panties', 23000, 'val-panties-white.png', '', 'Blanco'),
(32, 'Tanga Lexi', 'New Basics', 'Panties', 18000, 'lexi-thong-basics.png', '', 'Gris'),
(33, 'Bralette Isa', 'New Basics', 'Tops', 29000, 'isa-bralette-white.png', '', 'Blanco'),
(34, 'Bralette Isa', 'New Basics', 'Sostenes', 29000, 'isa-bralette-grey.png', '', 'Gris');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_code`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `p_code` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
