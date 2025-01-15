-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-01-2025 a las 00:26:21
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
-- Base de datos: `readycarpark`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensualidades`
--

CREATE TABLE `mensualidades` (
  `MenId` int(10) NOT NULL,
  `MenPlaca` varchar(6) NOT NULL,
  `MenVehiculo` enum('Automovil','Moto','Bicicleta') NOT NULL,
  `MenValor` int(6) NOT NULL,
  `MenFecha_Ini` date NOT NULL,
  `MenFecha_Fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `mensualidades`
--

INSERT INTO `mensualidades` (`MenId`, `MenPlaca`, `MenVehiculo`, `MenValor`, `MenFecha_Ini`, `MenFecha_Fin`) VALUES
(3, 'HGP589', 'Automovil', 500000, '2023-04-21', '1970-01-01'),
(8, 'PRU382', 'Automovil', 500000, '2023-04-04', '2023-05-04'),
(9, 'POU383', 'Moto', 250000, '2023-04-21', '2023-07-20'),
(10, 'SDA985', 'Bicicleta', 75000, '2023-04-21', '2023-05-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `PagId` int(11) NOT NULL,
  `PagPlaca` varchar(6) NOT NULL,
  `PagHoraEnt` datetime NOT NULL,
  `PagHoraSalir` datetime NOT NULL,
  `PagTipoVeh` enum('Automivil','Moto','Bicicleta') NOT NULL,
  `PagTarifa` enum('Minuto','Dia') NOT NULL,
  `PagValor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`PagId`, `PagPlaca`, `PagHoraEnt`, `PagHoraSalir`, `PagTipoVeh`, `PagTarifa`, `PagValor`) VALUES
(1, 'IMP103', '2023-04-27 21:41:19', '2023-04-28 13:53:51', 'Moto', 'Minuto', 74885),
(2, 'LKO874', '2023-04-26 15:13:35', '2023-05-03 16:58:27', 'Bicicleta', 'Dia', 3200),
(3, 'CCX567', '2023-04-26 15:14:34', '2023-05-08 18:12:46', 'Bicicleta', 'Dia', 3200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `RolId` int(11) NOT NULL,
  `RolRol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`RolId`, `RolRol`) VALUES
(1, 'Administrador'),
(2, 'Supervisor'),
(3, 'Operario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE `tarifas` (
  `TarId` int(11) NOT NULL,
  `TarVehiculo` enum('Automovil','Moto','Bicicleta') CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `TarTarifa` enum('Minuto','Dia','Mensualidad') CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `TarValor` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tarifas`
--

INSERT INTO `tarifas` (`TarId`, `TarVehiculo`, `TarTarifa`, `TarValor`) VALUES
(1, 'Automovil', 'Minuto', 100),
(2, 'Automovil', 'Dia', 18000),
(3, 'Automovil', 'Mensualidad', 500000),
(4, 'Moto', 'Minuto', 77),
(5, 'Moto', 'Dia', 9600),
(6, 'Moto', 'Mensualidad', 250000),
(7, 'Bicicleta', 'Minuto', 10),
(8, 'Bicicleta', 'Dia', 3200),
(9, 'Bicicleta', 'Mensualidad', 75000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `UsuId` int(11) NOT NULL,
  `UsuUsuario` varchar(30) NOT NULL,
  `UsuClave` varchar(16) NOT NULL,
  `UsuRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`UsuId`, `UsuUsuario`, `UsuClave`, `UsuRol`) VALUES
(1, 'Admin', '1', 1),
(2, 'supervisor', '2', 2),
(413, 'operario', '3', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `VehPlaca` varchar(6) NOT NULL,
  `VehTipo` enum('Automovil','Moto','Bicicleta') NOT NULL,
  `VehModelo` varchar(30) NOT NULL,
  `VehColor` text NOT NULL,
  `VehHoraEntrada` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`VehPlaca`, `VehTipo`, `VehModelo`, `VehColor`, `VehHoraEntrada`) VALUES
('ASD845', 'Automovil', '2016', 'Blanco', '2023-04-26 14:54:54'),
('ASD885', 'Automovil', '2016', 'Blanco', '2023-04-26 14:56:01'),
('OKI564', 'Automovil', '2016', 'Blanco', '2023-04-26 14:42:21'),
('OKI56E', 'Moto', '2016', 'BLanco', '2023-04-26 14:46:18'),
('OKI56P', 'Moto', '2016', 'BLanco', '2023-04-26 14:53:59');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensualidades`
--
ALTER TABLE `mensualidades`
  ADD PRIMARY KEY (`MenId`),
  ADD UNIQUE KEY `MenPlaca` (`MenPlaca`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`PagId`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`RolId`);

--
-- Indices de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`TarId`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UsuId`),
  ADD KEY `usuario_ibfk_1` (`UsuRol`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD UNIQUE KEY `VehPlaca` (`VehPlaca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
