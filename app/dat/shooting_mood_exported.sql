-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-01-2026 a las 09:16:40
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shooting_mood`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `category` enum('day','night','home') NOT NULL,
  `commentary` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `gallery`
--

INSERT INTO `gallery` (`id`, `file`, `alt`, `category`, `commentary`) VALUES
(1, 'web/img/budapest_tram.jpg', 'Girl in the tram', 'day', NULL),
(2, 'web/img/luci_cesped_2.jpg', 'Girl in the grass', 'day', NULL),
(3, 'web/img/graffiti.jpg', 'Graffiti in Berlin', 'day', NULL),
(4, 'web/img/leer_playa.jpg', 'Reading on the beach', 'day', NULL),
(5, 'web/img/bluelamp.jpg', 'Boy with a blue lamp light', 'day', NULL),
(6, 'web/img/terraza.jpeg', 'Boy on a bar terrace', 'day', NULL),
(7, 'web/img/axel_nat_sol_2.jpg', 'Friends in the sun', 'day', NULL),
(8, 'web/img/glitter_wall.jpg', 'Girl in a glitter wall', 'day', NULL),
(9, 'web/img/jav_nat_fiordos_noruega.jpg', 'Norwegian fjords', 'day', NULL),
(10, 'web/img/papeles_lampara.jpg', 'Lamp with papers', 'day', NULL),
(11, 'web/img/sudoku.jpg', 'Sudoku', 'day', NULL),
(12, 'web/img/luci_makeup_2.JPG', 'Girl doing her make-up', 'day', NULL),
(13, 'web/img/nieve_dav_mat_cel.jpg', 'Friends in the snow', 'day', NULL),
(14, 'web/img/budapestcafe.jpg', 'Girl in a cafe-bar', 'day', NULL),
(15, 'web/img/alert_tacones_2.jpg', 'Heels signal', 'day', NULL),
(16, 'web/img/mar_toalla.jpg', 'Friends hugging at beach', 'day', NULL),
(17, 'web/img/vintage_shop_norway.jpg', 'Vintage shop', 'day', NULL),
(18, 'web/img/nat_bar.jpg', 'Girl in the mirror', 'day', NULL),
(19, 'web/img/david_moto.jpg', 'Boy sunbathing', 'day', NULL),
(20, 'web/img/lamparas.jpg', 'Lamp shop', 'day', NULL),
(21, 'web/img/lavanderia.jpg', 'Girl in the laundry lights', 'night', NULL),
(22, 'web/img/morrinsons.jpg', 'Friends at a party', 'night', NULL),
(23, 'web/img/circus.jpg', 'Circus photo', 'night', NULL),
(24, 'web/img/girldrinking.jpg', 'Girl drinking at a party', 'night', NULL),
(25, 'web/img/floor_nightclub_praga.jpeg', 'Dance floor lights', 'night', NULL),
(26, 'web/img/kiss.jpg', 'Friends kissing', 'night', NULL),
(27, 'web/img/party_in_praga.jpeg', 'Girl at the party', 'night', NULL),
(28, 'web/img/nat_cuenca.jpg', 'Girl on the bar wall', 'night', NULL),
(29, 'web/img/beso_noria.jpg', 'Kiss with the ferris wheel', 'night', NULL),
(30, 'web/img/rascacielos.jpg', 'Rooftop', 'night', NULL),
(31, 'web/img/nightclub.jpg', 'Girl at the party', 'night', NULL),
(32, 'web/img/miraflores_lights.jpg', 'Friends with party lights', 'night', NULL),
(33, 'web/img/window_praga.jpeg', 'Girl looking at the window', 'home', NULL),
(34, 'web/img/lamp.jpg', 'Lamp', 'home', NULL),
(35, 'web/img/cooking.jpg', 'Friends cooking', 'home', NULL),
(36, 'web/img/boy_window.jpeg', 'Boy in the window', 'home', NULL),
(37, 'web/img/luz.jpg', 'Girl doing her make-up', 'home', NULL),
(38, 'web/img/rest.jpg', 'Girl resting in bed', 'home', NULL),
(39, 'web/img/cofees.jpg', 'Friends drinking coffee', 'home', NULL),
(40, 'web/img/couple_embracing_terrace.jpg', 'Couple embracing on a terrace', 'home', NULL),
(41, 'web/img/chamo.jpg', 'Guy smoking at the window', 'home', NULL),
(42, 'web/img/david_cocinando_2.jpg', 'Boy cooking', 'home', NULL),
(43, 'web/img/nat_axel_rosas.jpg', 'Friends talking', 'home', NULL),
(44, 'web/img/fotos_tienda_noruega.jpg', 'Photo wall', 'home', NULL),
(45, 'web/img/sarita_paez.jpg', 'Friends laughing and hugging', 'home', NULL),
(46, 'web/img/wurli2.jpg', 'Friends talking', 'night', NULL),
(47, 'web/img/portal_pintado.jpg', 'Painted portal', 'home', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userapp`
--

CREATE TABLE `userapp` (
  `login` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `userapp`
--

INSERT INTO `userapp` (`login`, `name`, `password`, `email`) VALUES
('Agmbd', 'Adrián Guerra', '$2y$10$aGv.kSujKrTZ1CIIPeCxHuMwzeYEQe/z9M9h5vnPPJW/e9YvzDXAq', 'adriangmbd@gmail.com'),
('Mam37', 'Mateo Álvaro', '$2y$10$.K5GQIU1MxRDhwHiPMcAzeK8FdYwTQzz37vLcfOL4woKuBkPh.oGa', 'mateoam37@gmail.com'),
('Nmm679', 'Nuria Moreno', '$2y$10$FdEoNgprU1L.F9aix9umEOXdL4dwjuJ3h3jv4MYXU2CjgjfPNkgXy', 'nuriamm679@gmail.com'),
('Smmcl', 'Silvia Moreno', '$2y$10$.tAiMbfXIpwg3ZYuAHJJLu3ANDgKGOgjQTohg29UxQjYtYMV5Az3C', 'silviammcl@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `userapp`
--
ALTER TABLE `userapp`
  ADD PRIMARY KEY (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;