-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-03-2024 a las 11:59:55
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
-- Base de datos: `componentes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componente`
--

CREATE TABLE `componente` (
  `Id` int(11) NOT NULL,
  `Modelo` varchar(255) NOT NULL,
  `Fabricante` varchar(255) NOT NULL,
  `Caracteristicas` varchar(255) NOT NULL,
  `Precio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `componente`
--

INSERT INTO `componente` (`Id`, `Modelo`, `Fabricante`, `Caracteristicas`, `Precio`) VALUES
(1, 'GTX 3000 RX', 'Intel', '16GB / 2,3 GHz', '2,2'),
(2, 'RTX 4000', 'NVIDIA', '20GB / 2,5 GHz', '3,5'),
(3, 'RX 7000', 'AMD', '24GB / 2,7 GHz', '4,0'),
(4, 'GeForce GTX 5000', 'NVIDIA', '22GB / 2,8 GHz', '3,8'),
(5, 'Radeon VII', 'AMD', '16GB / 2,2 GHz', '2,7'),
(6, 'Intel XE', 'Intel', '14GB / 2,0 GHz', '2,0'),
(7, 'GTX 3200', 'Inteliggentia', '20GB / 2,5 GHz', '3,0'),
(8, 'RX 6000 XT', 'AMD', '18GB / 2,4 GHz', '3,2'),
(9, 'GeForce RTX 6000', 'NVIDIA', '24GB / 2,9 GHz', '4,2'),
(10, 'Radeon RX 6700', 'AMD', '16GB / 2,2 GHz', '2,5'),
(11, 'Intel Iris X', 'Intel', '12GB / 1,8 GHz', '1,8');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(1, 'joseca@gmail.com', '[\"ROLE_ADMIN\"]', '1234'),
(2, 'dani@gmail.com', '[\"ROLE_ADMIN\"]', '5678'),
(4, 'peri3@gmail.com', '[\"ROLE_USER\"]', '1234'),
(6, 'melli@gmail.com', '[\"ROLE_USER\"]', '1234'),
(8, 'admin@gmail.com', '[\"ROLE_ADMIN\"]', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `componente`
--
ALTER TABLE `componente`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `componente`
--
ALTER TABLE `componente`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
