-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2025 a las 18:18:56
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
-- Base de datos: `merpgrandprix`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llx_tcamiones`
--

CREATE TABLE `llx_tcamiones` (
  `id_camion` int(100) NOT NULL,
  `camion` varchar(50) NOT NULL,
  `placa` varchar(50) NOT NULL,
  `largo` int(10) NOT NULL,
  `ancho` int(10) NOT NULL,
  `profundidad` int(10) NOT NULL,
  `volumen` int(10) NOT NULL,
  `capacidad_carga` int(10) NOT NULL,
  `estatus` varchar(20) NOT NULL,
  `uni_negocio` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
INSERT INTO `llx_tcamiones` (`id_camion`, `camion`, `placa`, `largo`, `ancho`, `profundidad`, `volumen`, `capacidad_carga`, `estatus`, `uni_negocio`, `marca`, `modelo`, `color`, `year`, `tipo`) VALUES
(1, '06', 'A41AG51', 0, 0, 0, 0, 0, 'Inactivo', 'SAN JUAN GROUP VALERA', 'MITSUBISHI ', 'CANTER FE85 TD /N /A ', 'BLANCO ', '2012', 'FURGON'),
(2, '132', 'A64BB5E', 0, 0, 0, 0, 0, 'Activo', 'SAN JUAN GROUP VALERA', 'MITSUBSHI', 'CANTER FE 659-T ', 'BLANCO ', '2008', 'FURGON'),
(3, '10', 'A24AI1I', 0, 0, 0, 0, 0, 'Activo', 'SAN JUAN GROUP VALERA', 'MITSUBISHI', 'CANTER FE85 TD / N / A ', 'BLANCO', '2012', 'FURGON '),
(4, '29', 'A05AE0A', 0, 0, 0, 0, 0, 'Activo', 'SAN JUAN GROUP VALERA', 'JAC', 'HFC1061K / LARGO ', 'BLANCO', '2012', 'FURGON '),
(5, '23', 'A01CU8A', 0, 0, 0, 0, 4, 'Activo', 'ELITE DISTRIBUCIONES MERIDA', 'HYUNDAI', 'HD 65', 'BLANCO ', '2012', 'FURGON'),
(6, '41', 'A19AR5V', 0, 0, 0, 0, 5, 'Activo', 'ELITE DISTRIBUCIONES MERIDA', 'CHEVROLET', 'NPR / NPR CHASIS CAB ', 'BLANCO ', '2008', 'FURGON'),
(7, '28', 'A04AE9A', 0, 0, 0, 0, 900, 'Activo', 'ELITE DISTRIBUCIONES MERIDA', 'JAC ', 'HFC1061J/ LARGO ', 'BLANCO', '2012', 'FURGON'),
(8, '110', 'A33BC1V', 0, 0, 0, 0, 0, 'Activo', 'ELITE DISTRIBUCIONES MERIDA', 'MITSUBISHI ', 'PANEL 2.01 S4 M ', 'BLANCO ', '2006', 'PANEL '),
(9, '118', 'A13AE4M', 0, 0, 0, 0, 0, 'Activo', 'ELITE DISTRIBUCIONES MERIDA', 'CHEVROLET ', 'NPR / NPR CHASIS CAB ', 'BLANCO ', '2009', 'FURGON '),
(10, '03', 'A01CU94 ', 0, 0, 0, 0, 0, 'Activo', 'ELITE DISTRIBUCIONES MERIDA', 'HYUNDAI ', 'HD 65 ', 'BLANCO ', '2012', 'FURGON'),
(11, '97', 'A71AW4A', 0, 0, 0, 0, 0, 'Activo', 'ELITE DISTRIBUCIONES MERIDA', 'CHEVROLET ', 'NHR / T/M S/A D/H F/H ', 'BLANCO ', '2009', 'FURGON '),
(12, '08', 'A66AC1D ', 0, 0, 0, 0, 0, 'Activo', 'ELITE DISTRIBUCIONES MERIDA', 'MITSUBISHI ', 'FK617 N/ A ', 'BLANCO ', '2008', 'FURGON '),
(13, '40', 'A64AE81', 0, 0, 0, 0, 0, 'Activo', 'ELITE DISTRIBUCIONES MERIDA', 'MITSUBISHI ', 'CANTER  659TD / N /A ', 'BLANCO ', '2009', 'FURGON'),
(14, '117', 'A71AE2A', 0, 0, 0, 0, 0, 'Activo', 'SAN JUAN GROUP MARACAIBO', 'FORD', 'CARGO ', 'GRIS ', '2009', 'FURGON'),
(15, '02', 'A25BF4V ', 0, 0, 0, 0, 0, 'Activo', 'SAN JUAN GROUP MARACAIBO', 'MITSUBISHI ', 'CANTER FE85 TD / N / A', 'BLANCO ', '2011', 'FURGON '),
(16, '17', 'A07AH7A', 0, 0, 0, 0, 0, 'Activo', 'SAN JUAN GROUP MARACAIBO', 'CHEVROLET ', 'FVR 33K / T/M S/A F/A ', 'BLANCO ', '2010', 'FURGON '),
(17, '120', 'A78BY0V', 0, 0, 0, 0, 0, 'Activo', 'SAN JUAN GROUP MARACAIBO', 'MITSUBISHI ', 'CANTER FE84 / N / A', 'BLANCO ', '2014', 'FURGON '),
(18, '20', 'A99BK7V ', 0, 0, 0, 0, 0, 'Activo', 'SAN JUAN GROUP MARACAIBO', 'MITSUBISHI ', 'CANTER FE84D / N / A', 'BLANCO ', '2011', 'FURGON '),
(19, '95', 'A26BC1V ', 0, 0, 0, 0, 0, 'Activo', 'SAN JUAN GROUP MARACAIBO', 'FORD ', 'CARGO ', 'PLATA ', '2008', 'FURGON '),
(20, '143', 'A03DC5A', 0, 0, 0, 0, 0, 'Activo', 'SAN JUAN GROUP MARACAIBO', 'MITSUBISHI ', 'CANTER FE85 TD / N / A', 'BLANCO ', '2015', 'FURGON '),
(21, '81', 'A33BC2V', 0, 0, 0, 0, 0, 'Activo', 'MERCANTIL XXI', 'VOLKSWAGEN ', 'CARFTER PANEL V ', 'AZUL ', '2008', 'PANEL '),
(22, '45', 'A65AE01', 0, 0, 0, 0, 0, 'Activo', 'MERCANTIL XXI', 'MITSUBISHI ', 'CANTER 659TD / N / A ', 'BLANCO ', '2009', 'FURGON '),
(23, '113', 'A59AZ6V', 0, 0, 0, 0, 0, 'Activo', 'MERCANTIL XXI', 'MITSUBISHI ', 'FM657 / N / A', 'BLANCO ', '2008', 'FURGON '),
(24, '04', 'A32AJ8A', 0, 0, 0, 0, 0, 'Activo', 'MERCANTIL XXI', 'CHEVROLET ', 'NPR CAB / T/M S/A D/H F/A', 'BLANCO ', '2010', 'FURGON '),
(25, '33', 'A30CA8A ', 0, 0, 0, 0, 0, 'Activo', 'MERCANTIL XXI', 'CHEVROLET ', 'CARGO VAN ', 'ROJO ', '2007', 'PANEL '),
(26, '133', 'A99AV6G', 0, 0, 0, 0, 0, 'Activo', 'MERCANTIL XXI', 'JAC ', 'HFC 1061K / LARGO ', 'ROJO ', '2012', 'FURGON '),
(27, '15', 'A74BY4V', 0, 0, 0, 0, 0, 'Activo', 'MERCANTIL XXI', 'MITSUBISHI ', 'CANTER FE84D N/ A ', 'BLANCO', '2013', 'FURGON '),
(28, '144', 'A71AZ2V ', 0, 0, 0, 0, 0, 'Activo', 'ELITE ZULIA', 'MITSUBISHI ', 'CANTER 659TD N / A ', 'BLANCO ', '2009', 'FURGON '),
(29, '39', 'A79CA9G', 0, 0, 0, 0, 0, 'Activo', 'ELITE ZULIA', 'FORD ', 'CARGO ', 'BLANCO ', '2012', 'FURGON '),
(30, '21', 'A02CU0A', 0, 0, 0, 0, 0, 'Activo', 'ELITE ZULIA', 'HYUNDAI ', 'HD 65', 'BLANCO ', '2012', 'FURGON '),
(31, '09', 'A20AS2G', 0, 0, 0, 0, 0, 'Activo', 'ELITE ZULIA', 'MITSUBISHI ', 'FK617 / N / A', 'BLANCO ', '2009', 'FURGON '),
(32, '16', 'A13AL5A', 0, 0, 0, 0, 0, 'Activo', 'ELITE ZULIA', 'CHEVROLET ', 'NPR CAB / T/M S/A D/H F/A', 'BLANCO ', '2009', 'FURGON '),
(33, '77', 'A24AJ4C', 0, 0, 0, 0, 0, 'Activo', 'SAN JUAN PARAGUANA', 'MITSUBISHI ', 'PANEL 2.0L ', 'BLANCO ', '2007', 'PANEL'),
(34, '05', 'A29AE6F', 0, 0, 0, 0, 0, 'Activo', 'SAN JUAN PARAGUANA', 'MITSUBISHI ', 'FM657 / N / A', 'BLANCO ', '2009', 'FURGON '),
(35, '07', 'A25BF3V ', 0, 0, 0, 0, 0, 'Activo', 'SAN JUAN PARAGUANA', 'MITSUBICHI ', 'CANTER FE85 TD / N / A', 'BLANCO ', '2011', 'FURGON '),
(36, '123', 'A79BY4V ', 0, 0, 0, 0, 0, 'Activo', 'SAN JUAN PARAGUANA', 'MITSUBISHI ', 'CANTE FE84D / N / A', 'BLANCO ', '2014', 'FURGON '),
(37, '107', 'A39AJ8I', 0, 0, 0, 0, 0, 'Activo', 'SAN JUAN PARAGUANA', 'MITSUBISHI ', 'CANTER FE84D / N / A', 'BLANCO ', '2013', 'FURGON '),
(38, '104', 'A40AJ01', 0, 0, 0, 0, 0, 'Activo', 'SAN JUAN PARAGUANA', 'MITSUBISHI ', 'CANTER FE85TD / N /A ', 'BLANCO ', '2013', 'FURGON '),
(39, '14', 'A24BF9V', 0, 0, 0, 0, 0, 'Activo', 'SAN JUAN PARAGUANA', 'MITSUBISHI ', 'CATER FE84D / N / A', 'BLANCO ', '2011', 'FURGON '),
(40, '116', 'A19BM7V', 0, 0, 0, 0, 0, 'Activo', 'ELITE ZULIA', 'MITSUBISHI ', 'CANTER FE85 TD / N/ A', 'BLANCO ', '2011', 'FURGON '),
(41, '103', 'A40DF5K', 0, 0, 0, 0, 0, 'Activo', 'ELITE DISTRIBUCIONES II', 'FORD ', 'DRW SUPER DUTY ', 'BLANCO ', '1999', 'FURGON '),
(42, '60', 'A62AZ7V', 0, 0, 0, 0, 0, 'Activo', 'ELITE DISTRIBUCIONES II', 'MITSUBISHI ', 'CANTER 649D / N / A', 'BLANCO ', '2008', 'FURGON '),
(43, '139', '79YMBH ', 0, 0, 0, 0, 0, 'Activo', 'ELITE DISTRIBUCIONES II', 'MITSUBISHI ', 'CANTER 649-D', 'BLANCO Y MULTICOLOR ', '2007', 'FURGON '),
(44, '109', 'A75BY6V', 0, 0, 0, 0, 0, 'Activo', 'ELITE DISTRIBUCIONES II', 'MITSUBISHI ', 'CANTER FE85 TD / N / A', 'BLANCO ', '2014', 'FURGON '),
(45, '01', 'A01CG1G', 0, 0, 0, 0, 0, 'Activo', 'ELITE DISTRIBUCIONES II', 'MITSUBISHI ', 'CANTER FE85 TD / N / A ', 'BLANCO ', '2013', 'FURGON '),
(46, '65', 'A77BU4V', 0, 0, 0, 0, 0, 'Activo', 'ELITE DISTRIBUCIONES II', 'CHEVROLET ', 'NPR', 'BLANCO ', '2007', 'FURGON '),
(47, '122', 'A93CC3M', 0, 0, 0, 0, 0, 'Activo', 'ELITE DISTRIBUCIONES II', 'FORD ', 'CARGO ', 'GRIS ', '2011', 'FURGON '),
(48, '51', 'A32AJ6A', 0, 0, 0, 0, 0, 'Activo', 'ELITE DISTRIBUCIONES II', 'CHEVROLET ', 'NPR CAB / T/M S/A D/H F/A ', 'BLANCO ', '2010', 'FURGON '),
(49, '48', 'A03AS9H', 0, 0, 0, 0, 0, 'Activo', 'ELITE CAPITAL', 'MITSUBISHI ', 'PANEL 2.0L M/T ', 'BLANCO ', '2007', 'PANEL'),
(50, '27', 'A76AH1K', 0, 0, 0, 0, 0, 'Activo', 'ELITE CAPITAL', 'CHEVROLET ', 'C3500', 'BLANCO ', '2010', 'FURGON '),
(51, '124', 'A24BU7V', 0, 0, 0, 0, 0, 'Activo', 'ELITE CAPITAL', 'FORD', 'CARGO 1721 ', 'BLANCO ', '2012', 'FURGON '),
(52, '13', 'A72BY3V', 0, 0, 0, 0, 0, 'Activo', 'ELITE CAPITAL', 'MITSUBISHI ', 'CANTER FE84D / N / A', 'BLANCO ', '2013', 'FURGON '),
(53, '136', 'A36CD8V', 0, 0, 0, 0, 0, 'Activo', 'ELITE CAPITAL', 'MITSUBISHI ', 'CANTER FE85 TD / N / A', 'BLANCO ', '2015', 'FURGON '),
(54, '34', 'A27BC4V', 0, 0, 0, 0, 0, 'Activo', 'ELITE CAPITAL', 'FORD ', 'F-350 4X2', 'FORD ', '2008', 'FURGON '),
(55, '22', 'A02CU7A', 0, 0, 0, 0, 0, 'Activo', 'ELITE CAPITAL', 'HYUNDAI ', 'HD 45', 'BLANCO ', '2012', 'FURGON '),
(56, '106', 'A41AJ81', 0, 0, 0, 0, 0, 'Activo', 'ELITE CAPITAL', 'MITSUBISHI ', 'CANTER FE84D / N / A', 'BLANCO ', '2014', 'FURGON '),
(57, '150', 'A74CD1M', 0, 0, 0, 0, 0, 'Activo', 'ELITE CAPITAL', 'FORD', 'CARGO 818', 'BLANCO ', '2014', 'PLATABARANDA '),
(58, '30', 'A97AJ2V', 0, 0, 0, 0, 0, 'Activo', 'SAN JUAN GROUP MARACAIBO', 'CHEVROLET ', 'C3500 / 4X2 T/A C/A', 'BLANCO ', '2011', 'FURGON '),
(59, '101', 'A97AR8J', 0, 0, 0, 0, 0, 'Activo', 'LOGISTICA GRAND PRIX', 'FORD ', 'CARGO', 'BLANCO ', '2008', 'FURGON '),
(60, '121', 'A97ASSJ', 0, 0, 0, 0, 0, 'Activo', 'LOGISTICA GRAND PRIX', 'FORD ', 'CARGO ', 'BLANCO ', '2007', 'FURGON '),
(61, '19', 'A00AG5L', 0, 0, 0, 0, 0, 'Activo', 'LOGISTICA GRAND PRIX', 'FORD ', 'CARGO ', 'GRIS ', '2011', 'FURGON '),
(62, '100', 'A09BC3D', 0, 0, 0, 0, 0, 'Activo', 'LOGISTICA GRAND PRIX', 'MACK', 'CXU613 LTD VISI ', 'BLANCO ', '2011', 'CHUTO'),
(63, '131', 'A58AS2U', 0, 0, 0, 0, 0, 'Activo', 'LOGISTICA GRAND PRIX', 'MACK ', 'CH613', 'ROJO', '1999', 'CHUTO '),
(64, '12', 'A25BF9V', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'MITSUBISHI', 'CANTER FE84D / N / A', 'BLANCO ', '2011', 'FURGON '),
(65, '52', 'A40AJ5A', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'CHEVROLET ', 'NRH / T/M S/A D/H F/H ', 'BLANCO ', '2010', 'FURGON '),
(66, '138', 'AB4CI9D', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'CHERY ', 'H5', 'PLATA', '2011', 'PANEL'),
(67, '11', 'A81AE2E', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'FORD', 'CARGO', 'BLANCO ', '2008', 'FURGON '),
(68, '49', 'A02BZ6D', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'FORD', 'CARGO', 'BLANCO ', '2006', 'FURGON '),
(69, '62', 'A32BC8V', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'MERCEDES BENZ ', 'CAMION UTILITAR ', 'BLANCO ', '2007', 'FURGON '),
(70, '96', 'A24DB6K', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'FORD ', 'CARGO', 'ROJO ', '2006', 'CASILLERO'),
(71, '112', 'A84CW5A', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'MITSUBISHI', 'PANEL 2.0L M/T', 'BLANCO ', '2007', 'PANEL'),
(72, '68', 'A17AP1G', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'DONGFENG', 'DUOLIKA 5.0 / 9A111212', 'ROJO', '2009', 'FURGON '),
(73, '25', 'A02CU8A', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'HYUNDAI ', 'HD 45', 'BLANCO ', '2012', 'FURGON'),
(74, '58', 'A86AF0J', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'FORD ', 'CARGO ', 'BLANCO ', '2008', 'FURGON '),
(75, '89', 'A24BF8V', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'MITSUBISHI ', 'CANTER FE84D / N / A', 'BLANCO ', '2011', 'FURGON '),
(76, '38', 'A23AJ8C', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'MITSUBISHI', 'PANEL 2.0 L ', 'BLANCO ', '2007', 'PANEL '),
(77, '24', 'A02CU6A', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'HYUNDAI ', 'HD 45', 'BLANCO ', '2012', 'FURGON '),
(78, '119', 'A78BY2V', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'MITSUBISHI', 'CANTER FE85 TD N / A', 'BLANCO ', '2014', 'FURGON '),
(79, '152', 'A4BW2S', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'MITSUBISHI ', 'CANTER FE85 659-T', 'BLANCO ', '2006', 'CAVA '),
(80, '63', 'A17BC0V', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'FORD', 'CARGO', 'BLANCO ', '2006', 'FURGON '),
(81, '87', 'A64BBJE', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'MITSUBISHI ', 'CANTER FE 659-T', 'BLANCO ', '2004', 'FURGON '),
(82, '94', 'A67AJ5A', 0, 0, 0, 0, 0, 'Activo', 'HIPERMERCADO FIORELLA', 'CHEVROLET ', 'NKR / T/M S/A D/H F/H', 'BLANCO ', '2010', 'FURGON '),
(83, 'Pruebas', 'ABZ321', 3, 3, 7, 63, 950, 'En Reparacion', 'ELITE FALCON', 'Chevrolet', 'Chevy', 'Negro', '1997', 'Furgoneta'),
(84, 'Prueba 2', 'PLca', 0, 0, 0, 0, 0, 'Inactivo', 'LICORWAY LOS ANDES', 'Mark', 'II', 'Azul', '2003', 'Camion'),
(85, 'Prueba 3', 'PLaca', 3, 3, 8, 62, 810, 'Activo', 'ELITE CAPITAL', 'RK', 'III', 'Verde', '2000', 'Furgoneta'),
(86, 'Sistema', 'Sis234', 0, 0, 0, 0, 957, 'En Reparacion', 'ELITE DISTRIBUCIONES II', 'Chevrolet', 'Chevy', 'Rojo', '1998', 'Furgoneta'),
(87, 'Siste 2', 'AHGS21', 0, 0, 0, 0, 0, 'En Reparacion', 'CORPORATIVO GSJ', 'HYUNDAI', 'GX300', 'GRIS', '2002', 'L');

--
-- Estructura de tabla para la tabla `llx_tcamiones_img`
--

CREATE TABLE `llx_tcamiones_img` (
  `id_camion` int(11) DEFAULT NULL,
  `ruta` varchar(500) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--

--
-- Estructura de tabla para la tabla `ma_sucursales`
--

CREATE TABLE `ma_sucursales` (
  `c_descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ma_sucursales`
--

INSERT INTO `ma_sucursales` (`c_descripcion`) VALUES
('BOGA COSMETIC'),
('CORPORATIVO GSJ'),
('DISTRIBUTION DOYSPACKS, C.A.'),
('ELITE CAPITAL'),
('ELITE DISTRIBUCIONES II'),
('ELITE DISTRIBUCIONES MERIDA'),
('ELITE FALCON'),
('ELITE ZULIA'),
('LICORWAY LOS ANDES'),
('MERCANTIL XXI'),
('SAN JUAN GROUP MARACAIBO'),
('SAN JUAN GROUP TACHIRA'),
('SAN JUAN GROUP VALERA'),
('SAN JUAN PARAGUANA'),
('HIPERMERCADO FIORELLA'),
('LOGISTICA GRAND PRIX');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `llx_tcamiones`
--
ALTER TABLE `llx_tcamiones`
  ADD PRIMARY KEY (`id_camion`);

--
-- Indices de la tabla `llx_tcamiones_img`
--
ALTER TABLE `llx_tcamiones_img`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `llx_tcamiones`
--
ALTER TABLE `llx_tcamiones`
  MODIFY `id_camion` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `llx_tcamiones_img`
--
ALTER TABLE `llx_tcamiones_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
