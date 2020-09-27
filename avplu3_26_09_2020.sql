-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2020 a las 17:36:57
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `avplu3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abonos`
--

CREATE TABLE `abonos` (
  `id_abono` int(11) NOT NULL,
  `monto_abono` varchar(10) DEFAULT NULL,
  `forma_pago` varchar(45) DEFAULT NULL,
  `fecha_abono` varchar(25) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `n_recibo` varchar(45) DEFAULT NULL,
  `numero_venta` varchar(100) DEFAULT NULL,
  `sucursal` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `abonos`
--

INSERT INTO `abonos` (`id_abono`, `monto_abono`, `forma_pago`, `fecha_abono`, `id_paciente`, `id_usuario`, `n_recibo`, `numero_venta`, `sucursal`) VALUES
(10, '25', 'Efectivo', '24-09-2020 08:00:41', 73, 1, 'RME-14', 'AVME-4', 'Metrocentro'),
(11, '25.25', '', '24-09-2020 08:11:08', 73, 1, 'RME-15', 'AVME-5', 'Metrocentro'),
(12, '25', 'Efectivo', '24-09-2020 08:49:43', 72, 1, 'RME-16', 'AVME-6', 'Metrocentro'),
(13, '58', '', '24-09-2020 09:18:34', 73, 1, 'RME-17', 'AVME-7', 'Metrocentro'),
(32, '12', '', '24-09-2020 11:26:10', 73, 1, 'RME-19', 'AVME-20', 'Metrocentro'),
(34, '25', '', '24-09-2020 11:30:52', 73, 1, 'RME-20', 'AVME-22', 'Metrocentro'),
(35, '13.25', '', '24-09-2020 11:34:55', 73, 1, 'RME-21', 'AVME-23', 'Metrocentro'),
(36, '25.17', '', '24-09-2020 11:36:35', 73, 1, 'RME-22', 'AVME-24', 'Metrocentro'),
(37, '25', '', '24-09-2020 11:38:52', 72, 1, 'RME-23', 'AVME-25', 'Metrocentro'),
(38, '25', '', '24-09-2020 11:51:06', 72, 1, 'RME-24', 'AVME-26', 'Metrocentro'),
(39, '45', 'Efectivo', '24-09-2020 12:32:12', 72, 1, 'RME-25', 'AVME-27', 'Metrocentro'),
(40, '3.75', 'Efectivo', '24-09-2020 13:30:30', 76, 1, 'RME-26', 'AVME-28', 'Metrocentro'),
(41, '78', 'Efectivo', '24-09-2020 14:06:59', 73, 1, 'RME-27', 'AVME-29', 'Metrocentro'),
(42, '25', 'Efectivo', '24-09-2020 14:41:59', 77, 1, 'RME-28', 'AVME-30', 'Metrocentro'),
(43, '45', 'Efectivo', '24-09-2020 14:44:01', 77, 1, 'RME-29', 'AVME-31', 'Metrocentro'),
(44, '55', 'Efectivo', '24-09-2020 14:58:49', 72, 1, 'RME-30', 'AVME-32', 'Metrocentro'),
(45, '25', 'Tarjeta de Credito', '24-09-2020 15:03:34', 77, 1, 'RME-31', 'AVME-33', 'Metrocentro'),
(46, '25', 'Efectivo', '24-09-2020 15:04:37', 72, 1, 'RME-32', 'AVME-34', 'Metrocentro'),
(47, '25', '', '24-09-2020 15:53:34', 77, 1, 'RME-33', 'AVME-35', 'Metrocentro'),
(48, '25', '', '24-09-2020 15:56:37', 77, 1, 'RME-34', 'AVME-36', 'Metrocentro'),
(49, '25', '', '24-09-2020 15:58:02', 77, 1, 'RME-35', 'AVME-37', 'Metrocentro'),
(50, '25', '', '24-09-2020 16:00:02', 73, 1, 'RME-36', 'AVME-38', 'Metrocentro'),
(51, '25', '', '24-09-2020 16:02:59', 77, 1, 'RME-37', 'AVME-39', 'Metrocentro'),
(52, '1', 'Efectivo', '24-09-2020 16:13:21', 77, 1, 'RME-38', 'AVME-41', 'Metrocentro'),
(53, '3', 'Efectivo', '25-09-2020 08:31:18', 77, 1, 'RME-39', 'AVME-42', 'Metrocentro'),
(54, '23', 'Efectivo', '25-09-2020 08:33:06', 77, 1, 'RME-40', 'AVME-43', 'Metrocentro'),
(55, '23', 'Efectivo', '25-09-2020 08:33:55', 77, 1, 'RME-41', 'AVME-44', 'Metrocentro'),
(56, '5', 'Efectivo', '25-09-2020 08:38:45', 77, 1, 'RME-42', 'AVME-45', 'Metrocentro'),
(64, '25', 'Efectivo', '25-09-2020 11:21:50', 77, 1, 'RME-43', 'AVME-47', 'Metrocentro'),
(65, '10', 'Efectivo', '25-09-2020 12:11:24', 77, 1, 'RME-44', 'AVME-48', 'Metrocentro'),
(66, '25', 'Efectivo', '25-09-2020 15:30:20', 77, 1, 'RME-45', 'AVME-49', 'Metrocentro'),
(67, '34', 'Efectivo', '25-09-2020 15:57:30', 77, 1, 'RME-46', 'AVME-50', 'Metrocentro'),
(68, '5', 'Efectivo', '25-09-2020 16:35:56', 73, 1, 'RME-47', 'AVME-51', 'Metrocentro'),
(69, '50', 'Efectivo', '25-09-2020 16:49:36', 73, 1, 'RME-48', 'AVME-52', 'Metrocentro'),
(70, '25', 'Efectivo', '26-09-2020 07:52:14', 77, 1, 'RME-49', 'AVME-53', 'Metrocentro'),
(71, '25', 'Efectivo', '26-09-2020 08:13:44', 72, 1, 'RME-50', 'AVME-54', 'Metrocentro'),
(72, '75', 'Efectivo', '26-09-2020 08:43:59', 77, 1, 'RME-51', 'AVME-55', 'Metrocentro'),
(73, '25', 'Efectivo', '26-09-2020 11:07:04', 77, 1, 'RME-52', 'AVME-56', 'Metrocentro'),
(74, '25', 'Efectivo', '26-09-2020 12:11:42', 77, 1, 'RME-53', 'AVME-81', 'Metrocentro'),
(75, '25', 'Efectivo', '26-09-2020 12:23:37', 77, 1, 'RME-54', 'AVME-82', 'Metrocentro'),
(76, '25', 'Efectivo', '26-09-2020 12:25:29', 77, 1, 'RME-55', 'AVME-83', 'Metrocentro'),
(77, '25', 'Efectivo', '26-09-2020 12:28:37', 77, 1, 'RME-56', 'AVME-84', 'Metrocentro'),
(78, '25', 'Efectivo', '26-09-2020 13:01:10', 77, 1, 'RME-57', 'AVME-85', 'Metrocentro'),
(79, '18', 'Efectivo', '26-09-2020 13:03:17', 77, 1, 'RME-58', 'AVME-87', 'Metrocentro'),
(80, '25', 'Efectivo', '26-09-2020 13:05:50', 77, 1, 'RME-59', 'AVME-88', 'Metrocentro'),
(81, '60', 'Efectivo', '26-09-2020 14:09:04', 77, 1, 'RME-60', 'AVME-90', 'Metrocentro'),
(82, '12', 'Efectivo', '26-09-2020 14:09:46', 77, 1, 'RME-61', 'AVME-91', 'Metrocentro'),
(83, '25', 'Efectivo', '26-09-2020 14:12:53', 77, 1, 'RME-62', 'AVME-92', 'Metrocentro'),
(84, '60', 'Efectivo', '26-09-2020 14:13:30', 77, 1, 'RME-63', 'AVME-93', 'Metrocentro'),
(85, '25', 'Efectivo', '26-09-2020 14:25:00', 77, 1, 'RME-64', 'AVME-97', 'Metrocentro'),
(86, '60', 'Efectivo', '26-09-2020 14:36:10', 77, 1, 'RME-65', 'AVME-98', 'Metrocentro'),
(87, '10.36', 'Efectivo', '26-09-2020 16:57:26', 73, 1, 'RME-66', 'AVME-5', 'Metrocentro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `tipo_categoria` varchar(50) DEFAULT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `sucursal` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `tipo_categoria`, `nombre`, `sucursal`, `descripcion`) VALUES
(11, 'Gaveta', 'GAVETA1 ', 'Metrocentro', 'ANDVAS NIÑOS'),
(12, 'Gaveta', 'GAVETA 2', 'Metrocentro', 'NINGUNA'),
(13, 'Gaveta', 'GAVETA3', 'Santa Ana', 'NINGUNA'),
(14, 'Accesorios', 'GAVETA 4', 'Santa Ana', 'NINGUNA'),
(15, 'Gaveta', 'GAVETA 7', 'Santa Ana', 'GAVETA ANDVAS MUJER'),
(16, 'Gaveta', 'EXHIBICION 8', 'San Miguel', 'AROS DE MUJER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `numero_compra` varchar(20) DEFAULT NULL,
  `codigo_proveedor` varchar(10) DEFAULT NULL,
  `nombre_proveedor` varchar(100) DEFAULT NULL,
  `tipo_compra` varchar(45) DEFAULT NULL,
  `tipo_pago` varchar(45) DEFAULT NULL,
  `plazo_meses` varchar(5) DEFAULT NULL,
  `fecha_compra` varchar(45) DEFAULT NULL,
  `tipo_doc` varchar(45) DEFAULT NULL,
  `numero_doc` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `total_compra` varchar(8) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `sucursal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compra`, `numero_compra`, `codigo_proveedor`, `nombre_proveedor`, `tipo_compra`, `tipo_pago`, `plazo_meses`, `fecha_compra`, `tipo_doc`, `numero_doc`, `usuario`, `total_compra`, `estado`, `sucursal`) VALUES
(29, 'C-', 'P-01', 'Carlos Andres Vazquez Choto', 'Contado', 'Contado', '10', '15-09-2020 15:48:55', 'Factura', '25888', 'oscar', '11.00', '2', 'Metrocentro'),
(30, 'C-30', 'P-01', 'Carlos Andres Vazquez Choto', 'Credito', 'Contado', '12', '15-09-2020 16:49:13', 'Factura', '25888', 'oscar', '27.00', '2', 'Metrocentro'),
(31, 'C-31', 'P-01', 'Carlos Andres Vazquez Choto', 'Contado', 'Contado', '12', '15-09-2020 17:05:37', 'Factura', '00000000', 'oscar', '4.00', '0', 'Metrocentro'),
(32, 'C-32', 'P-01', 'Carlos Andres Vazquez Choto', 'Contado', 'Contado', '12', '18-09-2020 10:51:18', 'Factura', '25888', 'oscar', '18.00', '2', 'Metrocentro'),
(33, 'C-33', 'P-01', 'Carlos Andres Vazquez Choto', 'Contado', 'Contado', '11', '18-09-2020 13:59:20', 'Factura', '25888', 'oscar', '187.00', '1', 'Metrocentro'),
(34, 'C-34', 'P-01', 'Carlos Andres Vazquez Choto', 'Contado', 'Contado', '2', '19-09-2020 09:35:01', 'Factura', '25888', 'oscar', '29.00', '2', 'Metrocentro'),
(35, 'C-35', 'P-01', 'Carlos Andres Vazquez Choto', 'Credito', 'Contado', '11', '19-09-2020 10:12:46', 'Factura', '25888', 'oscar', '20.00', '2', 'Metrocentro'),
(36, 'C-36', 'P-01', 'Carlos Andres Vazquez Choto', 'Contado', 'Contado', '10', '19-09-2020 14:03:19', 'Factura', '25888', 'oscar', '535.00', '2', 'Metrocentro'),
(37, 'C-37', 'P-01', 'Carlos Andres Vazquez Choto', 'Contado', 'Contado', '8', '20-09-2020 14:57:15', 'Factura', '25888', 'oscar', '160.00', '2', 'Metrocentro'),
(38, 'C-38', 'P-01', 'Carlos Andres Vazquez Choto', 'Contado', 'Contado', '12', '22-09-2020 14:25:54', 'Factura', '25888', 'oscar', '573.00', '2', 'Metrocentro'),
(39, 'C-39', 'P-01', 'Carlos Andres Vazquez Choto', 'Contado', 'Contado', '12', '24-09-2020 12:29:24', 'Factura', '25888', 'oscar', '374.00', '2', 'Metrocentro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `id_consulta` int(11) NOT NULL,
  `motivo` text DEFAULT NULL,
  `patologias` text DEFAULT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `oiesfreasl` varchar(10) DEFAULT NULL,
  `oicilindrosl` varchar(10) DEFAULT NULL,
  `oiejesl` varchar(10) DEFAULT NULL,
  `oiprismal` varchar(10) DEFAULT NULL,
  `oiadicionl` varchar(10) DEFAULT NULL,
  `odesferasl` varchar(10) DEFAULT NULL,
  `odcilndrosl` varchar(10) DEFAULT NULL,
  `odejesl` varchar(10) DEFAULT NULL,
  `odprismal` varchar(10) DEFAULT NULL,
  `odadicionl` varchar(10) DEFAULT NULL,
  `oiesferasa` varchar(10) DEFAULT NULL,
  `oicolindrosa` varchar(10) DEFAULT NULL,
  `oiejesa` varchar(10) DEFAULT NULL,
  `oiprismaa` varchar(10) DEFAULT NULL,
  `oiadiciona` varchar(10) DEFAULT NULL,
  `odesferasa` varchar(10) DEFAULT NULL,
  `odcilindrosa` varchar(10) DEFAULT NULL,
  `odejesa` varchar(10) DEFAULT NULL,
  `dprismaa` varchar(10) DEFAULT NULL,
  `oddiciona` varchar(10) DEFAULT NULL,
  `sugeridos` varchar(200) DEFAULT NULL,
  `diagnostico` text DEFAULT NULL,
  `medicamento` varchar(100) DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  `oiesferasf` varchar(10) DEFAULT NULL,
  `oicolindrosf` varchar(10) DEFAULT NULL,
  `oiejesf` varchar(10) DEFAULT NULL,
  `oiprismaf` varchar(10) DEFAULT NULL,
  `oiadicionf` varchar(10) DEFAULT NULL,
  `odesferasf` varchar(10) DEFAULT NULL,
  `odcilindrosf` varchar(10) DEFAULT NULL,
  `odejesf` varchar(10) DEFAULT NULL,
  `dprismaf` varchar(10) DEFAULT NULL,
  `oddicionf` varchar(10) DEFAULT NULL,
  `odavsclejos` varchar(20) DEFAULT NULL,
  `odavphlejos` varchar(20) DEFAULT NULL,
  `odavcclejos` varchar(20) DEFAULT NULL,
  `odavsccerca` varchar(20) DEFAULT NULL,
  `odavcccerca` varchar(20) DEFAULT NULL,
  `oiavesferasf` varchar(20) DEFAULT NULL,
  `oiavcolindrosf` varchar(20) DEFAULT NULL,
  `oiavejesf` varchar(20) DEFAULT NULL,
  `oiavprismaf` varchar(20) DEFAULT NULL,
  `oiavadicionf` varchar(20) DEFAULT NULL,
  `prisoicorrige` varchar(20) DEFAULT NULL,
  `addodcorrige` varchar(20) DEFAULT NULL,
  `prisodcorrige` varchar(20) DEFAULT NULL,
  `addoicorrige` varchar(20) DEFAULT NULL,
  `ishihara` varchar(200) DEFAULT NULL,
  `amsler` varchar(200) DEFAULT NULL,
  `anexos` varchar(200) DEFAULT NULL,
  `dip` varchar(20) DEFAULT NULL,
  `oddip` varchar(20) DEFAULT NULL,
  `oidip` varchar(20) DEFAULT NULL,
  `aood` varchar(20) DEFAULT NULL,
  `aooi` varchar(20) DEFAULT NULL,
  `apod` varchar(20) DEFAULT NULL,
  `opoi` varchar(20) DEFAULT NULL,
  `fecha_consulta` varchar(25) DEFAULT NULL,
  `p_evaluado` varchar(100) DEFAULT NULL,
  `parentesco_beneficiario` varchar(100) DEFAULT NULL,
  `telefono_beneficiario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id_consulta`, `motivo`, `patologias`, `id_paciente`, `id_usuario`, `fecha_reg`, `oiesfreasl`, `oicilindrosl`, `oiejesl`, `oiprismal`, `oiadicionl`, `odesferasl`, `odcilndrosl`, `odejesl`, `odprismal`, `odadicionl`, `oiesferasa`, `oicolindrosa`, `oiejesa`, `oiprismaa`, `oiadiciona`, `odesferasa`, `odcilindrosa`, `odejesa`, `dprismaa`, `oddiciona`, `sugeridos`, `diagnostico`, `medicamento`, `observaciones`, `oiesferasf`, `oicolindrosf`, `oiejesf`, `oiprismaf`, `oiadicionf`, `odesferasf`, `odcilindrosf`, `odejesf`, `dprismaf`, `oddicionf`, `odavsclejos`, `odavphlejos`, `odavcclejos`, `odavsccerca`, `odavcccerca`, `oiavesferasf`, `oiavcolindrosf`, `oiavejesf`, `oiavprismaf`, `oiavadicionf`, `prisoicorrige`, `addodcorrige`, `prisodcorrige`, `addoicorrige`, `ishihara`, `amsler`, `anexos`, `dip`, `oddip`, `oidip`, `aood`, `aooi`, `apod`, `opoi`, `fecha_consulta`, `p_evaluado`, `parentesco_beneficiario`, `telefono_beneficiario`) VALUES
(20, 'pbñppppp', '', 63, 1, '2020-09-10 21:43:58', 'www', '', '', '', '', 'w', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'paloooo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '10-09-2020 15:43:39', '', '', ''),
(21, '', '', 66, 1, '2020-09-11 19:00:34', '', '', '', 'sdfff', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'cc', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '11-09-2020 12:57:50', '', '', ''),
(22, 'Cefalea ', 'Migraña ', 72, 1, '2020-09-12 21:46:58', '-50', '', '', '', '', '-0.50', '', '', '', '', '-1.00', '-0.25', '25', '', '', '-1.25', '', '', '', '', 'Lente V/S Poly con AR SH/Aro Andvas', 'Dificultad en la visión lejana ', 'Propanolol, migracil', 'Ninguna ', '-0.50', '', '', '', '', '-0.50', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '60', '30 mm', '30 mm', '', '', '', '', '12-09-2020 15:32:29', '', '', '7140-3670'),
(23, 'ARDOR DE OJOS', '', 72, 5, '2020-09-14 20:22:09', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'NINGUNA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '14-09-2020 14:21:08', NULL, '', '7140-3670'),
(24, '', '', 72, 5, '2020-09-14 20:26:59', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'NINGUNA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '14-09-2020 14:26:34', 'LIZBETH ESFANY GARCIA SOSA ', '', '7140-3670'),
(25, '', '', 72, 5, '2020-09-14 20:27:41', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'NINGUNA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '14-09-2020 14:26:59', 'OSCAR ANTONIO GONZALEZ', '', '7140-3670'),
(26, '', '', 66, 5, '2020-09-14 20:46:47', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'NINGUNA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '14-09-2020 14:46:33', 'PABLO ESCOBAR', '', '7857-EDIT'),
(27, '', '', 73, 1, '2020-09-20 20:52:33', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'usa lentes desde hace 10 años ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '60', '30 mm', '30 mm', '15', '16', '21', '22', '20-09-2020 14:49:42', 'OSCAR VASQUEZ HUEZO', '', '7845-4545'),
(28, '', '', 77, 1, '2020-09-24 20:41:55', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '258', '', '', '', '', '', '', '', 'NINGUNA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '24-09-2020 14:41:40', 'SONIA GONZALEZ ', '', '7555-5511');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creditos`
--

CREATE TABLE `creditos` (
  `id_credito` int(11) NOT NULL,
  `tipo_credito` varchar(100) DEFAULT NULL,
  `monto` varchar(45) NOT NULL,
  `plazo` varchar(45) DEFAULT NULL,
  `saldo` varchar(45) DEFAULT NULL,
  `forma_pago` varchar(100) NOT NULL,
  `numero_venta` varchar(100) DEFAULT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_adquirido` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `creditos`
--

INSERT INTO `creditos` (`id_credito`, `tipo_credito`, `monto`, `plazo`, `saldo`, `forma_pago`, `numero_venta`, `id_paciente`, `id_usuario`, `fecha_adquirido`) VALUES
(221, 'Contado', '60.00', '0', '60.00', 'Contado', 'AVME-4', 73, 1, '26-09-2020 16:53:15'),
(222, 'Contado', '50.00', '0', '39.64', 'Contado', 'AVME-5', 73, 1, '26-09-2020 16:57:26'),
(223, 'Credito', '50.00', '7', '50.00', 'Cargo Automatico', 'AVME-6', 72, 1, '27-09-2020 09:27:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compras`
--

CREATE TABLE `detalle_compras` (
  `id_detalle_compra` int(11) NOT NULL,
  `numero_compra` varchar(25) DEFAULT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  `cantidad` varchar(5) DEFAULT NULL,
  `precio_compra` varchar(5) DEFAULT NULL,
  `precio_venta` varchar(5) DEFAULT NULL,
  `subtotal` varchar(5) DEFAULT NULL,
  `estado_producto` varchar(25) DEFAULT NULL,
  `usuario` varchar(25) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `fecha_compra` varchar(25) DEFAULT NULL,
  `cant_ingreso` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_compras`
--

INSERT INTO `detalle_compras` (`id_detalle_compra`, `numero_compra`, `descripcion`, `cantidad`, `precio_compra`, `precio_venta`, `subtotal`, `estado_producto`, `usuario`, `id_producto`, `fecha_compra`, `cant_ingreso`) VALUES
(197, 'C-', 'RAY BAN RB0055 C3 23-44-44', '1', '11', '15', '11', '0', 'oscar', 35, '15-09-2020 15:48:55', '0'),
(198, 'C-30', 'RAY BAN RB0055 C3 23-44-44', '1', '12', '23', '12', '0', 'oscar', 35, '15-09-2020 16:49:13', '0'),
(199, 'C-30', 'RAY -BAN 58169 C2 15-15-154', '1', '15', '23', '15', '0', 'oscar', 37, '15-09-2020 16:49:13', '0'),
(200, 'C-31', 'RAY BAN RB0055 C3 23-44-44', '1', '4', '10', '4', '0', 'oscar', 35, '15-09-2020 17:05:37', '1'),
(201, 'C-32', 'RAY BAN RB0055 C3 23-44-44', '1', '7', '9', '7', '0', 'oscar', 35, '18-09-2020 10:51:18', '0'),
(202, 'C-32', 'RAY -BAN 58169 C2 15-15-154', '1', '11', '15', '11', '0', 'oscar', 37, '18-09-2020 10:51:18', '0'),
(203, 'C-33', 'RAY -BAN 58169 C2 15-15-154', '7', '10', '13', '70', '0', 'oscar', 37, '18-09-2020 13:59:20', '0'),
(204, 'C-33', 'RAY BAN RB0055 C3 23-44-44', '9', '13', '19', '117', '0', 'oscar', 35, '18-09-2020 13:59:20', '1'),
(205, 'C-34', 'RAY BAN RB0055 C3 23-44-44', '1', '9', '10', '9', '0', 'oscar', 35, '19-09-2020 09:35:01', '0'),
(206, 'C-34', 'RAY -BAN 58169 C2 15-15-154', '1', '10', '13', '10', '0', 'oscar', 37, '19-09-2020 09:35:01', '0'),
(207, 'C-34', 'RAY BAN 025533 ESTUCHE RAY BAN COLOR VERDE  ', '1', '10', '13', '10', '0', 'oscar', 46, '19-09-2020 09:35:01', '0'),
(208, 'C-35', 'RAY BAN RB0055 C3 23-44-44', '1', '9', '12', '9', '0', 'oscar', 35, '19-09-2020 10:12:46', '0'),
(209, 'C-35', 'RAY BAN 2584 ESTUCHE RAYBAN COLOR CAFÉ  ', '1', '11', '12', '11', '0', 'oscar', 47, '19-09-2020 10:12:46', '0'),
(210, 'C-36', 'RAY BAN RB0055 C3 23-44-44', '12', '10', '14', '120', '0', 'oscar', 35, '19-09-2020 14:03:19', '0'),
(211, 'C-36', 'RAY BAN RB0055 C3 23-44-44', '10', '11', '12', '110', '0', 'oscar', 35, '19-09-2020 14:03:19', '0'),
(212, 'C-36', 'RAY -BAN 58169 C2 15-15-154', '8', '10', '12', '80', '0', 'oscar', 37, '19-09-2020 14:03:19', '-3'),
(213, 'C-36', 'RAY BAN FRA 1 FRANELA RAYBAN  ', '10', '9', '11', '90', '0', 'oscar', 48, '19-09-2020 14:03:19', '-3'),
(214, 'C-36', 'RAY BAN 2584 ESTUCHE RAYBAN COLOR CAFÉ  ', '8', '9', '12', '72', '0', 'oscar', 47, '19-09-2020 14:03:19', '0'),
(215, 'C-36', 'RAY BAN FRA 1 FRANELA RAYBAN  ', '7', '9', '11', '63', '0', 'oscar', 48, '19-09-2020 14:03:19', '-3'),
(216, 'C-37', 'RAY BAN FRA 1 FRANELA RAYBAN  ', '10', '8', '14', '80', '0', 'oscar', 48, '20-09-2020 14:57:15', '0'),
(217, 'C-37', 'RAY BAN 2584 ESTUCHE RAYBAN COLOR CAFÉ  ', '8', '10', '17', '80', '0', 'oscar', 47, '20-09-2020 14:57:15', '0'),
(218, 'C-38', 'TORY BURCH T455 C7 12-48-555', '15', '10', '12', '150', '0', 'oscar', 57, '22-09-2020 14:25:54', '0'),
(219, 'C-38', 'RAY BAN RB0055 C3 23-44-44', '12', '11', '12', '132', '0', 'oscar', 35, '22-09-2020 14:25:54', '0'),
(220, 'C-38', 'RAY -BAN 58169 C2 15-15-154', '12', '9', '10', '108', '0', 'oscar', 37, '22-09-2020 14:25:54', '0'),
(221, 'C-38', 'RAY BAN FRA 1 FRANELA RAYBAN  ', '14', '6', '9', '84', '0', 'oscar', 48, '22-09-2020 14:25:54', '0'),
(222, 'C-38', 'RAY BAN 2584 ESTUCHE RAYBAN COLOR CAFÉ  ', '11', '9', '13', '99', '0', 'oscar', 47, '22-09-2020 14:25:54', '0'),
(223, 'C-39', 'TORY BURCH T455 C7 12-48-555', '13', '7', '10', '91', '0', 'oscar', 57, '24-09-2020 12:29:24', '0'),
(224, 'C-39', 'RAY BAN 2584 ESTUCHE RAYBAN COLOR CAFÉ  ', '13', '7', '10', '91', '0', 'oscar', 47, '24-09-2020 12:29:24', '0'),
(225, 'C-39', 'RAY BAN RB0055 C3 23-44-44', '12', '8', '10', '96', '0', 'oscar', 35, '24-09-2020 12:29:24', '0'),
(226, 'C-39', 'RAY BAN 2584 ESTUCHE RAYBAN COLOR CAFÉ  ', '12', '8', '10', '96', '0', 'oscar', 47, '24-09-2020 12:29:24', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ingresos`
--

CREATE TABLE `detalle_ingresos` (
  `id_detalle_ingreso` int(11) NOT NULL,
  `producto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `sucursal` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `destino` varchar(75) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `n_compra` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `precio_venta` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `numero_ingreso` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalle_ingresos`
--

INSERT INTO `detalle_ingresos` (`id_detalle_ingreso`, `producto`, `cantidad`, `sucursal`, `destino`, `usuario`, `fecha`, `n_compra`, `precio_venta`, `numero_ingreso`) VALUES
(90, 'RAYBAN RB5050 C1 15-55-552', '1', 'Metrocentro', 'EXHIBICION 8', 'oscar', '08-09-2020 17:23:35', 'C-27', '180', 'I-39'),
(91, 'RAYBAN RB5050 C1 15-55-552', '1', 'Metrocentro', 'GAVETA 4', 'oscar', '08-09-2020 17:24:02', 'C-27', '180', 'I-40'),
(92, 'RAYBAN RB5050 C1 15-55-552', '1', 'Metrocentro', 'GAVETA 7', 'oscar', '08-09-2020 17:24:34', 'C-27', '180', 'I-41'),
(93, 'RAYBAN RB5050 C1 15-55-552', '1', 'Metrocentro', 'GAVETA 7', 'oscar', '08-09-2020 17:24:34', 'C-27', '180', 'I-41'),
(94, 'CANDIES CA0127 083 49-18-135', '1', 'Metrocentro', 'GAVETA 7', 'oscar', '08-09-2020 17:24:34', 'C-27', '100', 'I-41'),
(95, 'TORY BURCH TOR01 C3 14-55-522', '1', 'Metrocentro', 'GAVETA1 ', 'oscar', '13-09-2020 13:16:22', 'C-28', '8', 'I-42'),
(96, 'RAY BAN RB0055 C3 23-44-44', '1', 'Metrocentro', 'GAVETA1 ', 'oscar', '15-09-2020 15:49:50', 'C-', '15', 'I-43'),
(97, 'RAY -BAN 58169 C2 15-15-154', '1', 'Metrocentro', 'GAVETA1 ', 'oscar', '15-09-2020 16:52:17', 'C-30', '23', 'I-44'),
(98, 'RAY BAN RB0055 C3 23-44-44', '1', 'Metrocentro', 'GAVETA1 ', 'oscar', '15-09-2020 16:52:17', 'C-30', '23', 'I-44'),
(99, 'RAY -BAN 58169 C2 15-15-154', '1', 'Metrocentro', 'GAVETA1 ', 'oscar', '18-09-2020 10:52:53', 'C-32', '15', 'I-45'),
(100, 'RAY BAN RB0055 C3 23-44-44', '1', 'Metrocentro', 'GAVETA1 ', 'oscar', '18-09-2020 10:52:53', 'C-32', '9', 'I-45'),
(101, 'RAY -BAN 58169 C2 15-15-154', '2', 'Metrocentro', 'GAVETA1 ', 'avplus', '18-09-2020 14:00:09', 'C-33', '13', 'I-46'),
(102, 'RAY BAN RB0055 C3 23-44-44', '3', 'Metrocentro', 'GAVETA1 ', 'avplus', '18-09-2020 14:00:09', 'C-33', '19', 'I-46'),
(103, 'RAY BAN 025533 ESTUCHE RAY BAN COLOR VERDE  ', '1', 'Metrocentro', 'GAVETA 4', 'oscar', '19-09-2020 09:44:09', 'C-34', '13', 'I-47'),
(104, 'RAY -BAN 58169 C2 15-15-154', '1', 'Metrocentro', 'GAVETA 4', 'oscar', '19-09-2020 09:44:09', 'C-34', '13', 'I-47'),
(105, 'RAY BAN RB0055 C3 23-44-44', '1', 'Metrocentro', 'GAVETA 4', 'oscar', '19-09-2020 09:44:09', 'C-34', '10', 'I-47'),
(106, 'RAY BAN 2584 ESTUCHE RAYBAN COLOR CAFÉ  ', '1', 'Metrocentro', 'GAVETA 2', 'oscar', '19-09-2020 10:36:25', 'C-35', '12', 'I-48'),
(107, 'RAY BAN RB0055 C3 23-44-44', '1', 'Metrocentro', 'GAVETA 2', 'oscar', '19-09-2020 10:36:25', 'C-35', '12', 'I-48'),
(108, 'RAY BAN FRA 1 FRANELA RAYBAN  ', '5', 'Metrocentro', 'GAVETA 2', 'oscar', '19-09-2020 14:05:36', 'C-36', '11', 'I-49'),
(109, 'RAY BAN FRA 1 FRANELA RAYBAN  ', '5', 'Metrocentro', 'GAVETA 2', 'oscar', '19-09-2020 14:05:36', 'C-36', '11', 'I-49'),
(110, 'RAY -BAN 58169 C2 15-15-154', '5', 'Metrocentro', 'GAVETA 2', 'oscar', '19-09-2020 14:05:36', 'C-36', '12', 'I-49'),
(111, 'RAY BAN RB0055 C3 23-44-44', '5', 'Metrocentro', 'GAVETA 2', 'oscar', '19-09-2020 14:05:36', 'C-36', '12', 'I-49'),
(112, 'RAY BAN RB0055 C3 23-44-44', '5', 'Metrocentro', 'GAVETA 2', 'oscar', '19-09-2020 14:05:36', 'C-36', '12', 'I-49'),
(113, 'RAY -BAN 58169 C2 15-15-154', '3', 'Metrocentro', 'GAVETA 2', 'oscar', '19-09-2020 16:24:00', 'C-36', '12', 'I-50'),
(114, 'RAY -BAN 58169 C2 15-15-154', '3', 'Metrocentro', 'GAVETA 2', 'oscar', '19-09-2020 16:24:00', 'C-36', '12', 'I-50'),
(115, 'RAY BAN 2584 ESTUCHE RAYBAN COLOR CAFÉ  ', '8', 'Metrocentro', 'GAVETA 2', 'oscar', '19-09-2020 16:24:00', 'C-36', '12', 'I-50'),
(116, 'RAY -BAN 58169 C2 15-15-154', '5', 'Metrocentro', 'GAVETA 2', 'oscar', '20-09-2020 14:56:46', 'C-33', '13', 'I-51'),
(117, 'RAY BAN RB0055 C3 23-44-44', '5', 'Metrocentro', 'GAVETA 2', 'oscar', '20-09-2020 14:56:46', 'C-33', '19', 'I-51'),
(118, 'RAY BAN FRA 1 FRANELA RAYBAN  ', '5', 'Metrocentro', 'GAVETA 2', 'oscar', '20-09-2020 14:59:49', 'C-37', '14', 'I-52'),
(119, 'RAY BAN 2584 ESTUCHE RAYBAN COLOR CAFÉ  ', '5', 'Metrocentro', 'GAVETA 2', 'oscar', '20-09-2020 14:59:49', 'C-37', '17', 'I-52'),
(120, 'TORY BURCH T455 C7 12-48-555', '15', 'Metrocentro', 'GAVETA 2', 'oscar', '22-09-2020 14:46:21', 'C-38', '12', 'I-53'),
(121, 'RAY BAN FRA 1 FRANELA RAYBAN  ', '14', 'Metrocentro', 'GAVETA 2', 'oscar', '22-09-2020 14:46:21', 'C-38', '9', 'I-53'),
(122, 'RAY BAN 2584 ESTUCHE RAYBAN COLOR CAFÉ  ', '11', 'Metrocentro', 'GAVETA 2', 'oscar', '22-09-2020 14:46:21', 'C-38', '13', 'I-53'),
(123, 'RAY -BAN 58169 C2 15-15-154', '12', 'Metrocentro', 'GAVETA 2', 'oscar', '22-09-2020 14:46:21', 'C-38', '10', 'I-53'),
(124, 'RAY BAN RB0055 C3 23-44-44', '12', 'Metrocentro', 'GAVETA 2', 'oscar', '22-09-2020 14:46:21', 'C-38', '12', 'I-53'),
(125, 'RAY BAN FRA 1 FRANELA RAYBAN  ', '5', 'Metrocentro', 'GAVETA1 ', 'oscar', '24-09-2020 07:54:43', 'C-37', '14', 'I-54'),
(126, 'RAY BAN 2584 ESTUCHE RAYBAN COLOR CAFÉ  ', '3', 'Metrocentro', 'GAVETA1 ', 'oscar', '24-09-2020 07:54:43', 'C-37', '17', 'I-54'),
(127, 'TORY BURCH T455 C7 12-48-555', '13', 'Metrocentro', 'GAVETA1 ', 'oscar', '24-09-2020 12:31:06', 'C-39', '10', 'I-55'),
(128, 'RAY BAN 2584 ESTUCHE RAYBAN COLOR CAFÉ  ', '12', 'Metrocentro', 'GAVETA1 ', 'oscar', '24-09-2020 12:31:06', 'C-39', '10', 'I-55'),
(129, 'RAY BAN RB0055 C3 23-44-44', '12', 'Metrocentro', 'GAVETA1 ', 'oscar', '24-09-2020 12:31:06', 'C-39', '10', 'I-55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ventas`
--

CREATE TABLE `detalle_ventas` (
  `id_detalle_ventas` int(11) NOT NULL,
  `numero_venta` varchar(100) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `precio_venta` varchar(100) NOT NULL,
  `cantidad_venta` varchar(100) NOT NULL,
  `descuento` varchar(100) NOT NULL,
  `precio_final` varchar(100) DEFAULT NULL,
  `fecha_venta` varchar(25) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `beneficiario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_ventas`
--

INSERT INTO `detalle_ventas` (`id_detalle_ventas`, `numero_venta`, `id_producto`, `producto`, `precio_venta`, `cantidad_venta`, `descuento`, `precio_final`, `fecha_venta`, `id_usuario`, `id_paciente`, `beneficiario`) VALUES
(243, 'AVME-1', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 07:47:22', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(244, 'AVME-2', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 07:52:01', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(245, 'AVME-3', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 07:55:08', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(246, 'AVME-3', 47, 'ESTUCHE RAYBAN COLOR CAFÉ', '0', '1', '0', '0', '24-09-2020 07:55:08', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(247, 'AVME-4', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 08:00:41', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(248, 'AVME-4', 51, 'ANTIRREFLEJANTE 1', '85', '1', '0', '85', '24-09-2020 08:00:41', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(249, 'AVME-5', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '24-09-2020 08:11:08', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(250, 'AVME-6', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '24-09-2020 08:49:43', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(251, 'AVME-7', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '24-09-2020 09:18:34', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(252, 'AVME-8', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 10:11:56', 5, 73, 'OSCAR VASQUEZ HUEZO'),
(253, 'AVME-9', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '24-09-2020 10:30:05', 5, 73, 'OSCAR VASQUEZ HUEZO'),
(254, 'AVME-10', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '24-09-2020 10:43:22', 5, 73, 'OSCAR VASQUEZ HUEZO'),
(255, 'AVME-11', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 10:51:18', 5, 72, 'LIZBETH ESFANY GARCIA SOSA '),
(256, 'AVME-11', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '24-09-2020 10:51:18', 5, 72, 'LIZBETH ESFANY GARCIA SOSA '),
(257, 'AVME-12', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '24-09-2020 10:56:00', 5, 73, 'OSCAR VASQUEZ HUEZO'),
(258, 'AVME-13', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '24-09-2020 10:58:47', 5, 72, 'OSCAR ANTONIO GONZALEZ'),
(259, 'AVME-14', 51, 'ANTIRREFLEJANTE 1', '85', '1', '0', '85', '24-09-2020 11:01:07', 5, 73, 'OSCAR VASQUEZ HUEZO'),
(260, 'AVME-15', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 11:10:38', 5, 72, 'OSCAR ANTONIO GONZALEZ'),
(261, 'AVME-16', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '24-09-2020 11:19:15', 5, 72, 'OSCAR ANTONIO GONZALEZ'),
(262, 'AVME-17', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '24-09-2020 11:20:35', 5, 73, 'OSCAR VASQUEZ HUEZO'),
(263, 'AVME-18', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 11:22:46', 5, 73, 'OSCAR VASQUEZ HUEZO'),
(264, 'AVME-18', 49, 'ar 1', '100', '1', '0', '100', '24-09-2020 11:22:46', 5, 73, 'OSCAR VASQUEZ HUEZO'),
(265, 'AVME-19', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '24-09-2020 11:25:04', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(266, 'AVME-20', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '24-09-2020 11:26:10', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(267, 'AVME-21', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 11:27:15', 5, 73, 'OSCAR VASQUEZ HUEZO'),
(268, 'AVME-22', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 11:30:52', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(269, 'AVME-23', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 11:34:55', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(270, 'AVME-24', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '24-09-2020 11:36:35', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(271, 'AVME-25', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 11:38:52', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(272, 'AVME-26', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 11:51:06', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(273, 'AVME-27', 57, 'TORY BURCH mod.T455 12-48-555 C7', '10.00', '1', '0', '10', '24-09-2020 12:32:12', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(274, 'AVME-27', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '24-09-2020 12:32:12', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(275, 'AVME-27', 47, 'ESTUCHE RAYBAN COLOR CAFÉ', '0', '1', '0', '0', '24-09-2020 12:32:12', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(276, 'AVME-28', 57, 'TORY BURCH mod.T455 12-48-555 C7', '10.00', '1', '0', '10', '24-09-2020 13:30:30', 1, 76, ''),
(277, 'AVME-28', 48, 'FRANELA RAYBAN', '0', '1', '0', '0', '24-09-2020 13:30:30', 1, 76, ''),
(278, 'AVME-29', 57, 'TORY BURCH mod.T455 12-48-555 C7', '10.00', '1', '0', '10', '24-09-2020 14:06:59', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(279, 'AVME-29', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 14:06:59', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(280, 'AVME-29', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '24-09-2020 14:06:59', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(281, 'AVME-29', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '24-09-2020 14:06:59', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(282, 'AVME-29', 47, 'ESTUCHE RAYBAN COLOR CAFÉ', '0', '1', '0', '0', '24-09-2020 14:06:59', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(283, 'AVME-30', 57, 'TORY BURCH mod.T455 12-48-555 C7', '10.00', '1', '0', '10', '24-09-2020 14:41:59', 1, 77, 'SONIA GONZALEZ '),
(284, 'AVME-30', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '24-09-2020 14:41:59', 1, 77, 'SONIA GONZALEZ '),
(285, 'AVME-30', 48, 'FRANELA RAYBAN', '0', '1', '0', '0', '24-09-2020 14:41:59', 1, 77, 'SONIA GONZALEZ '),
(286, 'AVME-31', 57, 'TORY BURCH mod.T455 12-48-555 C7', '10.00', '1', '0', '10', '24-09-2020 14:44:01', 1, 77, 'SONIA GONZALEZ '),
(287, 'AVME-31', 47, 'ESTUCHE RAYBAN COLOR CAFÉ', '0', '1', '0', '0', '24-09-2020 14:44:01', 1, 77, 'SONIA GONZALEZ '),
(288, 'AVME-31', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '24-09-2020 14:44:01', 1, 77, 'SONIA GONZALEZ '),
(289, 'AVME-32', 57, 'TORY BURCH mod.T455 12-48-555 C7', '10.00', '1', '0', '10', '24-09-2020 14:58:49', 1, 72, 'LIZBETH ESFANY GARCIA SOSA '),
(290, 'AVME-32', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 14:58:49', 1, 72, 'LIZBETH ESFANY GARCIA SOSA '),
(291, 'AVME-32', 49, 'ar 1', '100', '1', '0', '100', '24-09-2020 14:58:49', 1, 72, 'LIZBETH ESFANY GARCIA SOSA '),
(292, 'AVME-32', 51, 'ANTIRREFLEJANTE 1', '85', '1', '0', '85', '24-09-2020 14:58:49', 1, 72, 'LIZBETH ESFANY GARCIA SOSA '),
(293, 'AVME-32', 47, 'ESTUCHE RAYBAN COLOR CAFÉ', '0', '1', '0', '0', '24-09-2020 14:58:49', 1, 72, 'LIZBETH ESFANY GARCIA SOSA '),
(294, 'AVME-33', 57, 'TORY BURCH mod.T455 12-48-555 C7', '10.00', '1', '0', '10', '24-09-2020 15:03:34', 1, 77, 'SONIA GONZALEZ '),
(295, 'AVME-33', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '24-09-2020 15:03:34', 1, 77, 'SONIA GONZALEZ '),
(296, 'AVME-33', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '24-09-2020 15:03:34', 1, 77, 'SONIA GONZALEZ '),
(297, 'AVME-33', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '24-09-2020 15:03:34', 1, 77, 'SONIA GONZALEZ '),
(298, 'AVME-33', 48, 'FRANELA RAYBAN', '0', '1', '0', '0', '24-09-2020 15:03:34', 1, 77, 'SONIA GONZALEZ '),
(299, 'AVME-34', 57, 'TORY BURCH mod.T455 12-48-555 C7', '10.00', '1', '0', '10', '24-09-2020 15:04:37', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(300, 'AVME-34', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '24-09-2020 15:04:37', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(301, 'AVME-34', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '24-09-2020 15:04:37', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(302, 'AVME-34', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '24-09-2020 15:04:37', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(303, 'AVME-34', 48, 'FRANELA RAYBAN', '0', '1', '0', '0', '24-09-2020 15:04:37', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(304, 'AVME-35', 57, 'TORY BURCH mod.T455 12-48-555 C7', '10.00', '1', '0', '10', '24-09-2020 15:53:34', 1, 77, 'SONIA GONZALEZ '),
(305, 'AVME-35', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 15:53:34', 1, 77, 'SONIA GONZALEZ '),
(306, 'AVME-35', 48, 'FRANELA RAYBAN', '0', '1', '0', '0', '24-09-2020 15:53:34', 1, 77, 'SONIA GONZALEZ '),
(307, 'AVME-36', 57, 'TORY BURCH mod.T455 12-48-555 C7', '10.00', '1', '0', '10', '24-09-2020 15:56:37', 1, 77, 'SONIA GONZALEZ '),
(308, 'AVME-36', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 15:56:37', 1, 77, 'SONIA GONZALEZ '),
(309, 'AVME-37', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 15:58:02', 1, 77, 'SONIA GONZALEZ '),
(310, 'AVME-38', 35, 'RAY BAN mod.RB0055 23-44-44 C3', '10.00', '1', '0', '10', '24-09-2020 16:00:02', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(311, 'AVME-38', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 16:00:02', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(312, 'AVME-39', 57, 'TORY BURCH mod.T455 12-48-555 C7', '10.00', '1', '0', '10', '24-09-2020 16:02:59', 1, 77, 'SONIA GONZALEZ '),
(313, 'AVME-39', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 16:02:59', 1, 77, 'SONIA GONZALEZ '),
(314, 'AVME-40', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '24-09-2020 16:04:48', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(315, 'AVME-41', 57, 'TORY BURCH mod.T455 12-48-555 C7', '10.00', '1', '0', '10', '24-09-2020 16:13:21', 1, 77, 'SONIA GONZALEZ '),
(316, 'AVME-42', 57, 'TORY BURCH mod.T455 12-48-555 C7', '10.00', '1', '0', '10', '25-09-2020 08:31:18', 1, 77, 'SONIA GONZALEZ '),
(317, 'AVME-43', 51, 'ANTIRREFLEJANTE 1', '85', '1', '0', '85', '25-09-2020 08:33:06', 1, 77, 'SONIA GONZALEZ '),
(318, 'AVME-44', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '25-09-2020 08:33:55', 1, 77, 'SONIA GONZALEZ '),
(319, 'AVME-45', 35, 'RAY BAN mod.RB0055 23-44-44 C3', '10.00', '1', '0', '10', '25-09-2020 08:38:45', 1, 77, 'SONIA GONZALEZ '),
(320, 'AVME-46', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '25-09-2020 10:09:19', 5, 73, 'OSCAR VASQUEZ HUEZO'),
(321, 'AVME-47', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '25-09-2020 11:21:50', 1, 77, 'SONIA GONZALEZ '),
(322, 'AVME-47', 35, 'RAY BAN mod.RB0055 23-44-44 C3', '10.00', '1', '0', '10', '25-09-2020 11:21:50', 1, 77, 'SONIA GONZALEZ '),
(323, 'AVME-47', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '25-09-2020 11:21:50', 1, 77, 'SONIA GONZALEZ '),
(324, 'AVME-47', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '25-09-2020 11:21:50', 1, 77, 'SONIA GONZALEZ '),
(325, 'AVME-47', 47, 'ESTUCHE RAYBAN COLOR CAFÉ', '0', '1', '0', '0', '25-09-2020 11:21:50', 1, 77, 'SONIA GONZALEZ '),
(326, 'AVME-48', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '25-09-2020 12:11:24', 1, 77, 'SONIA GONZALEZ '),
(327, 'AVME-48', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '25-09-2020 12:11:24', 1, 77, 'SONIA GONZALEZ '),
(328, 'AVME-49', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '25-09-2020 15:30:20', 1, 77, 'SONIA GONZALEZ '),
(329, 'AVME-49', 35, 'RAY BAN mod.RB0055 23-44-44 C3', '10.00', '1', '0', '10', '25-09-2020 15:30:20', 1, 77, 'SONIA GONZALEZ '),
(330, 'AVME-49', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '25-09-2020 15:30:20', 1, 77, 'SONIA GONZALEZ '),
(331, 'AVME-49', 47, 'ESTUCHE RAYBAN COLOR CAFÉ', '0', '1', '0', '0', '25-09-2020 15:30:20', 1, 77, 'SONIA GONZALEZ '),
(332, 'AVME-50', 35, 'RAY BAN mod.RB0055 23-44-44 C3', '10.00', '1', '0', '10', '25-09-2020 15:57:30', 1, 77, 'SONIA GONZALEZ '),
(333, 'AVME-50', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '25-09-2020 15:57:30', 1, 77, 'SONIA GONZALEZ '),
(334, 'AVME-51', 35, 'RAY BAN mod.RB0055 23-44-44 C3', '10.00', '1', '0', '10', '25-09-2020 16:35:56', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(335, 'AVME-52', 35, 'RAY BAN mod.RB0055 23-44-44 C3', '10.00', '1', '0', '10', '25-09-2020 16:49:36', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(336, 'AVME-52', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '25-09-2020 16:49:36', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(337, 'AVME-52', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '25-09-2020 16:49:36', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(338, 'AVME-52', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '25-09-2020 16:49:36', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(339, 'AVME-52', 47, 'ESTUCHE RAYBAN COLOR CAFÉ', '0', '1', '0', '0', '25-09-2020 16:49:36', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(340, 'AVME-52', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '25-09-2020 16:49:36', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(341, 'AVME-53', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 07:52:14', 1, 77, 'SONIA GONZALEZ '),
(342, 'AVME-54', 35, 'RAY BAN mod.RB0055 23-44-44 C3', '10.00', '1', '0', '10', '26-09-2020 08:13:44', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(343, 'AVME-54', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '26-09-2020 08:13:44', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(344, 'AVME-54', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '26-09-2020 08:13:44', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(345, 'AVME-55', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 08:43:59', 1, 77, 'SONIA GONZALEZ '),
(346, 'AVME-55', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 08:43:59', 1, 77, 'SONIA GONZALEZ '),
(347, 'AVME-55', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '26-09-2020 08:43:59', 1, 77, 'SONIA GONZALEZ '),
(348, 'AVME-55', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '26-09-2020 08:43:59', 1, 77, 'SONIA GONZALEZ '),
(349, 'AVME-55', 47, 'ESTUCHE RAYBAN COLOR CAFÉ', '0', '1', '0', '0', '26-09-2020 08:43:59', 1, 77, 'SONIA GONZALEZ '),
(350, 'AVME-55', 47, 'ESTUCHE RAYBAN COLOR CAFÉ', '0', '1', '0', '0', '26-09-2020 08:43:59', 1, 77, 'SONIA GONZALEZ '),
(351, 'AVME-56', 35, 'RAY BAN mod.RB0055 23-44-44 C3', '10.00', '1', '0', '10', '26-09-2020 11:07:04', 1, 77, 'SONIA GONZALEZ '),
(352, 'AVME-56', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 11:07:04', 1, 77, 'SONIA GONZALEZ '),
(353, 'AVME-57', 35, 'RAY BAN mod.RB0055 23-44-44 C3', '10.00', '1', '0', '10', '26-09-2020 11:09:41', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(354, 'AVME-58', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 11:23:58', 1, 77, 'SONIA GONZALEZ '),
(355, 'AVME-59', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 11:26:25', 1, 77, 'SONIA GONZALEZ '),
(356, 'AVME-59', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '26-09-2020 11:26:25', 1, 77, 'SONIA GONZALEZ '),
(357, 'AVME-60', 49, 'ar 1', '100', '1', '0', '100', '26-09-2020 11:27:02', 1, 77, 'SONIA GONZALEZ '),
(358, 'AVME-61', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 11:28:17', 1, 77, 'SONIA GONZALEZ '),
(359, 'AVME-62', 51, 'ANTIRREFLEJANTE 1', '85', '1', '0', '85', '26-09-2020 11:29:40', 1, 77, 'SONIA GONZALEZ '),
(360, 'AVME-63', 51, 'ANTIRREFLEJANTE 1', '85', '1', '0', '85', '26-09-2020 11:30:17', 1, 77, 'SONIA GONZALEZ '),
(361, 'AVME-64', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '26-09-2020 11:31:39', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(362, 'AVME-65', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '26-09-2020 11:34:04', 1, 77, 'SONIA GONZALEZ '),
(363, 'AVME-68', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '26-09-2020 11:34:04', 1, 77, 'SONIA GONZALEZ '),
(364, 'AVME-69', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 11:37:38', 1, 72, 'LIZBETH ESFANY GARCIA SOSA '),
(365, 'AVME-70', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 11:39:35', 1, 77, 'SONIA GONZALEZ '),
(366, 'AVME-71', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '26-09-2020 11:41:44', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(367, 'AVME-72', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '26-09-2020 11:45:02', 1, 77, 'SONIA GONZALEZ '),
(368, 'AVME-73', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 11:46:44', 1, 77, 'SONIA GONZALEZ '),
(369, 'AVME-74', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '26-09-2020 11:48:13', 1, 77, 'SONIA GONZALEZ '),
(370, 'AVME-75', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 11:49:51', 1, 77, 'SONIA GONZALEZ '),
(371, 'AVME-76', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '26-09-2020 11:52:31', 1, 77, 'SONIA GONZALEZ '),
(372, 'AVME-77', 35, 'RAY BAN mod.RB0055 23-44-44 C3', '10.00', '1', '0', '10', '26-09-2020 11:53:24', 1, 77, 'SONIA GONZALEZ '),
(373, 'AVME-78', 35, 'RAY BAN mod.RB0055 23-44-44 C3', '10.00', '1', '0', '10', '26-09-2020 11:56:57', 1, 77, 'SONIA GONZALEZ '),
(374, 'AVME-78', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 11:56:57', 1, 77, 'SONIA GONZALEZ '),
(375, 'AVME-79', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 12:03:22', 1, 77, 'SONIA GONZALEZ '),
(376, 'AVME-79', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '26-09-2020 12:03:22', 1, 77, 'SONIA GONZALEZ '),
(377, 'AVME-80', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 12:07:30', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(378, 'AVME-80', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '26-09-2020 12:07:30', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(379, 'AVME-81', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 12:11:42', 1, 77, 'SONIA GONZALEZ '),
(380, 'AVME-82', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 12:23:37', 1, 77, 'SONIA GONZALEZ '),
(381, 'AVME-83', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 12:25:29', 1, 77, 'SONIA GONZALEZ '),
(382, 'AVME-83', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '26-09-2020 12:25:29', 1, 77, 'SONIA GONZALEZ '),
(383, 'AVME-84', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 12:28:37', 1, 77, 'SONIA GONZALEZ '),
(384, 'AVME-85', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 13:01:10', 1, 77, 'SONIA GONZALEZ '),
(385, 'AVME-86', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 13:02:49', 1, 77, 'SONIA GONZALEZ '),
(386, 'AVME-87', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 13:03:17', 1, 77, 'SONIA GONZALEZ '),
(387, 'AVME-88', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 13:05:50', 1, 77, 'SONIA GONZALEZ '),
(388, 'AVME-89', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 14:04:56', 1, 77, 'SONIA GONZALEZ '),
(389, 'AVME-90', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 14:09:04', 1, 77, 'SONIA GONZALEZ '),
(390, 'AVME-91', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 14:09:46', 1, 77, 'SONIA GONZALEZ '),
(391, 'AVME-92', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 14:12:53', 1, 77, 'SONIA GONZALEZ '),
(392, 'AVME-93', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 14:13:30', 1, 77, 'SONIA GONZALEZ '),
(393, 'AVME-94', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 14:21:43', 1, 77, 'SONIA GONZALEZ '),
(394, 'AVME-95', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 14:22:05', 1, 77, 'SONIA GONZALEZ '),
(395, 'AVME-96', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 14:23:02', 1, 77, 'SONIA GONZALEZ '),
(396, 'AVME-97', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '26-09-2020 14:25:00', 1, 77, 'SONIA GONZALEZ '),
(397, 'AVME-98', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 14:36:10', 1, 77, 'SONIA GONZALEZ '),
(398, 'AVME-99', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '26-09-2020 14:50:45', 1, 77, 'SONIA GONZALEZ '),
(399, 'AVME-100', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '26-09-2020 15:03:58', 5, 77, 'SONIA GONZALEZ '),
(400, 'AVME-101', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 15:07:28', 5, 77, 'SONIA GONZALEZ '),
(401, 'AVME-102', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 15:11:34', 5, 73, 'OSCAR VASQUEZ HUEZO'),
(402, 'AVME-103', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '26-09-2020 15:14:13', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(403, 'AVME-1', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 15:26:46', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(404, 'AVME-2', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '26-09-2020 15:27:44', 1, 77, 'SONIA GONZALEZ '),
(405, 'AVME-3', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '26-09-2020 16:51:45', 5, 72, 'LIZBETH ESFANY GARCIA SOSA '),
(406, 'AVME-4', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '26-09-2020 16:53:15', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(407, 'AVME-5', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '26-09-2020 16:57:26', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(408, 'AVME-6', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '27-09-2020 09:27:53', 1, 72, 'OSCAR ANTONIO GONZALEZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id_empresa` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `ubicacion` varchar(150) DEFAULT NULL,
  `nit` varchar(30) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `responsable` varchar(75) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `encargado_optica` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id_empresa`, `nombre`, `ubicacion`, `nit`, `telefono`, `responsable`, `correo`, `encargado_optica`) VALUES
(1, 'BAC', 'bbbbbbbbb', 'hhh', 'hhhh', NULL, 'vvv', 'bbb'),
(2, 'EXCEL AUTOMOTRIZ', 'SAN SALVADOR', '5778-157-2', '2654-5844', NULL, 'balmore@gmail.com', 'JOSUÉ'),
(3, 'HUGGIES', 'SAN SALVADOR', '7815-142-2154-1', '2354-1244', 'ROSAURA', 'higgies@gmail.com', 'LOREN'),
(4, 'OPTICA AVPLUS', 'METROCENTRO', '000000', '25066522555', 'KHSKEJF', 'avplus@gmaik.com', 'ARELY FLORES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `existencias`
--

CREATE TABLE `existencias` (
  `id_ingreso` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `stock` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `bodega` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `categoria_ub` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_ingreso` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `num_compra` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `precio_venta` varchar(8) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `existencias`
--

INSERT INTO `existencias` (`id_ingreso`, `id_producto`, `stock`, `bodega`, `categoria_ub`, `fecha_ingreso`, `usuario`, `num_compra`, `precio_venta`) VALUES
(100, 37, '0', 'Metrocentro', 'GAVETA1 ', '18-09-2020 10:52:53', 'oscar', 'C-32', '15'),
(101, 35, '0', 'Metrocentro', 'GAVETA1 ', '18-09-2020 10:52:53', 'oscar', 'C-32', '9'),
(102, 37, '0', 'Metrocentro', 'GAVETA1 ', '18-09-2020 14:00:09', 'avplus', 'C-33', '13'),
(103, 35, '0', 'Metrocentro', 'GAVETA1 ', '18-09-2020 14:00:09', 'avplus', 'C-33', '19'),
(104, 46, '1', 'Metrocentro', 'GAVETA 4', '19-09-2020 09:44:09', 'oscar', 'C-34', '13'),
(105, 37, '0', 'Metrocentro', 'GAVETA 4', '19-09-2020 09:44:09', 'oscar', 'C-34', '13'),
(106, 35, '0', 'Metrocentro', 'GAVETA 4', '19-09-2020 09:44:09', 'oscar', 'C-34', '10'),
(107, 47, '0', 'Metrocentro', 'GAVETA 2', '19-09-2020 10:36:25', 'oscar', 'C-35', '12'),
(108, 35, '0', 'Metrocentro', 'GAVETA 2', '19-09-2020 10:36:25', 'oscar', 'C-35', '12'),
(109, 48, '0', 'Metrocentro', 'GAVETA 2', '19-09-2020 14:05:36', 'oscar', 'C-36', '11'),
(110, 37, '0', 'Metrocentro', 'GAVETA 2', '19-09-2020 14:05:36', 'oscar', 'C-36', '12'),
(111, 35, '0', 'Metrocentro', 'GAVETA 2', '19-09-2020 14:05:36', 'oscar', 'C-36', '12'),
(112, 47, '0', 'Metrocentro', 'GAVETA 2', '19-09-2020 16:24:00', 'oscar', 'C-36', '12'),
(113, 37, '0', 'Metrocentro', 'GAVETA 2', '20-09-2020 14:56:46', 'oscar', 'C-33', '13'),
(114, 35, '0', 'Metrocentro', 'GAVETA 2', '20-09-2020 14:56:46', 'oscar', 'C-33', '19'),
(115, 48, '0', 'Metrocentro', 'GAVETA 2', '20-09-2020 14:59:49', 'oscar', 'C-37', '14'),
(116, 47, '0', 'Metrocentro', 'GAVETA 2', '20-09-2020 14:59:49', 'oscar', 'C-37', '17'),
(117, 57, '0', 'Metrocentro', 'GAVETA 2', '22-09-2020 14:46:21', 'oscar', 'C-38', '12'),
(118, 48, '0', 'Metrocentro', 'GAVETA 2', '22-09-2020 14:46:21', 'oscar', 'C-38', '9'),
(119, 47, '0', 'Metrocentro', 'GAVETA 2', '22-09-2020 14:46:21', 'oscar', 'C-38', '13'),
(120, 37, '0', 'Metrocentro', 'GAVETA 2', '22-09-2020 14:46:21', 'oscar', 'C-38', '10'),
(121, 35, '0', 'Metrocentro', 'GAVETA 2', '22-09-2020 14:46:21', 'oscar', 'C-38', '12'),
(122, 48, '0', 'Metrocentro', 'GAVETA1 ', '24-09-2020 07:54:43', 'oscar', 'C-37', '14'),
(123, 47, '0', 'Metrocentro', 'GAVETA1 ', '24-09-2020 07:54:43', 'oscar', 'C-37', '17'),
(124, 57, '0', 'Metrocentro', 'GAVETA1 ', '24-09-2020 12:31:06', 'oscar', 'C-39', '10'),
(125, 47, '5', 'Metrocentro', 'GAVETA1 ', '24-09-2020 12:31:06', 'oscar', 'C-39', '10'),
(126, 35, '0', 'Metrocentro', 'GAVETA1 ', '24-09-2020 12:31:06', 'oscar', 'C-39', '10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `id_ingresos` int(11) NOT NULL,
  `numero_ingreso` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `sucursal` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`id_ingresos`, `numero_ingreso`, `usuario`, `fecha`, `sucursal`) VALUES
(11, 'I-0', 'jacky', '03-09-2020 12:03:40', 'Metrocentro'),
(35, 'I-12', 'oscar', '05-09-2020 09:16:33', 'Metrocentro'),
(36, 'I-36', 'oscar', '05-09-2020 09:18:38', 'Metrocentro'),
(37, 'I-37', 'oscar', '05-09-2020 09:20:44', 'Metrocentro'),
(38, 'I-38', 'oscar', '05-09-2020 15:03:20', 'Metrocentro'),
(39, 'I-39', 'oscar', '08-09-2020 17:23:35', 'Metrocentro'),
(40, 'I-40', 'oscar', '08-09-2020 17:24:02', 'Metrocentro'),
(41, 'I-41', 'oscar', '08-09-2020 17:24:34', 'Metrocentro'),
(42, 'I-42', 'oscar', '13-09-2020 13:16:22', 'Metrocentro'),
(43, 'I-43', 'oscar', '15-09-2020 15:49:50', 'Metrocentro'),
(44, 'I-44', 'oscar', '15-09-2020 16:52:17', 'Metrocentro'),
(45, 'I-45', 'oscar', '18-09-2020 10:52:53', 'Metrocentro'),
(46, 'I-46', 'avplus', '18-09-2020 14:00:09', 'Metrocentro'),
(47, 'I-47', 'oscar', '19-09-2020 09:44:09', 'Metrocentro'),
(48, 'I-48', 'oscar', '19-09-2020 10:36:25', 'Metrocentro'),
(49, 'I-49', 'oscar', '19-09-2020 14:05:36', 'Metrocentro'),
(50, 'I-50', 'oscar', '19-09-2020 16:24:00', 'Metrocentro'),
(51, 'I-51', 'oscar', '20-09-2020 14:56:46', 'Metrocentro'),
(52, 'I-52', 'oscar', '20-09-2020 14:59:49', 'Metrocentro'),
(53, 'I-53', 'oscar', '22-09-2020 14:46:21', 'Metrocentro'),
(54, 'I-54', 'oscar', '24-09-2020 07:54:43', 'Metrocentro'),
(55, 'I-55', 'oscar', '24-09-2020 12:31:06', 'Metrocentro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `marca` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `marca`) VALUES
(11, 'RAY BAN'),
(12, 'RAY -BAN'),
(13, 'TORY BURCH');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_paciente` int(11) NOT NULL,
  `codigo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombres` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edad` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ocupacion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sucursal` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dui` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_reg` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `empresas` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nit` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono_oficina` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_paciente` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `codigo`, `nombres`, `telefono`, `edad`, `ocupacion`, `sucursal`, `dui`, `correo`, `fecha_reg`, `usuario`, `empresas`, `nit`, `telefono_oficina`, `direccion`, `tipo_paciente`) VALUES
(66, 'AVME-8', 'PABLO ESCOBAR', '7857-EDIT', '', 'OPTOMETRA S', 'Santa Ana', '22555258-8', 'pablo@gmail.com', '11-09-2020 11:38:40', 'oscar', '', '', '', '', 'Sucursal'),
(70, 'AVME-11', 'ANDREA VASQUEZ ', '0000-00', '32', 'ESTUDIANTE ', 'Metrocentro', '999999', '', '11-09-2020 16:16:45', 'oscar', '', '', '', '', 'Sucursal'),
(71, 'AVME-12', 'DAVID REYES', '6312-4784', '80', '', 'Metrocentro', '01027223-3', 'iandvas.opto@gmail.com', '12-09-2020 14:43:08', 'oscar', '', '', '', '', 'Sucursal'),
(72, 'AVME-13', 'LIZBETH ESFANY GARCIA SOSA ', '7140-3670', '26', 'ASESOR DE VENTAS', 'Metrocentro', '04856923-4', '', '12-09-2020 15:30:27', 'oscar', '', '', '', '', 'Sucursal'),
(73, 'AVME-14', 'OSCAR VASQUEZ HUEZO', '7845-4545', '40', 'EMPLEADO', 'Metrocentro', '00000000-0', '', '20-09-2020 14:44:48', 'oscar', '', '', '', '', 'Sucursal'),
(74, 'AVME-15', 'JOSE MANUEL RODRIGUEZ', '1516-5653', '40', 'EMPLEADO', 'Metrocentro', '24563266-5', 'jhgfghfhfdfdhgfddhgjdhg', '21-09-2020 19:21:30', 'oscar', '', '', '', '', 'Sucursal'),
(75, 'AVME-16', 'SONIA DAYSI MENA DURAN', '6312-4784', '10', '', 'Metrocentro', '00027223-3', 'eyter@gmail.com', '22-09-2020 09:42:21', 'avplus', 'EXCEL AUTOMOTRIZ', '', '2265-5555', '', 'Desc_planilla'),
(76, 'AVME-17', 'ANTONIA MEJIA ROMO', '7445-4415', '35', 'MAESTRA', 'Metrocentro', '11452480-4', 'tona@gmail.com', '24-09-2020 13:23:50', 'oscar', '', '', '', '', 'Sucursal'),
(77, 'AVME-18', 'SONIA GONZALEZ', '7555-5511', '39', 'ABOGADA', 'Metrocentro', '45854845-4', 'sonia@gmail.com', '24-09-2020 13:34:56', 'oscar', 'OPTICA AVPLUS', '8464-984611-681-6', '2515-5466', 'SAN SALVADOR', 'C_personal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `marca` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medidas` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `diseno` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `materiales` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `categoria_producto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `desc_producto` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `marca`, `modelo`, `color`, `medidas`, `diseno`, `materiales`, `categoria`, `categoria_producto`, `desc_producto`) VALUES
(35, 'RAY BAN', 'RB0055', 'C3', '23-44-44', 'Completo', 'Metal', 'Básico', 'aros', 'RAY BAN mod.RB0055 23-44-44 C3'),
(36, '0', '0', '0', '0', '0', '0', '100', 'lentes', 'VISION SENCILLA'),
(37, 'RAY -BAN', '58169', 'C2', '15-15-154', 'Completo', 'Acetato', 'Premium', 'aros', 'RAY -BAN mod.58169 15-15-154 C2'),
(47, 'RAY BAN', '2584', '0', '0', '0', '0', 'Estuche', 'accesorios', 'ESTUCHE RAYBAN COLOR CAFÉ'),
(48, 'RAY BAN', 'FRA 1', '0', '0', '0', '0', 'Estuche', 'accesorios', 'FRANELA RAYBAN'),
(49, '0', '0', '0', '0', '0', '0', '100', 'antireflejante', 'ar 1'),
(50, '0', '0', '0', '0', '0', '0', '85', 'antireflejante', 'antirreflejante 2'),
(51, '0', '0', '0', '0', '0', '0', '85', 'photosensible', 'ANTIRREFLEJANTE 1'),
(53, '0', '0', '0', '0', '0', '0', '60', 'lentes', 'VISIÓN SENCILLA BLANCO CR39'),
(54, '0', '0', '0', '0', '0', '0', '50', 'antireflejante', 'AR SUPERHIDROFOBICO ADD PROMO'),
(55, '0', '0', '0', '0', '0', '0', '50', 'photosensible', 'TRANSITIONS GEN 8 CAFE'),
(56, '0', '0', '0', '0', '0', '0', '150', 'lentes', 'VISION SENCILLA CR39 PHOTOCROMATICO AR'),
(57, 'TORY BURCH', 'T455', 'C7', '12-48-555', 'Completo', 'Metal', 'Básico', 'aros', 'TORY BURCH mod.T455 12-48-555 C7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `codigo_proveedor` varchar(25) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `codigo_proveedor`, `nombre`) VALUES
(1, 'P-01', 'Carlos Andres Vazquez Choto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibos`
--

CREATE TABLE `recibos` (
  `id_recibo` int(11) NOT NULL,
  `numero_recibo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_venta` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monto` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sucursal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `telefono` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recibi_de` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cant_letras` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_anteriores` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abono_act` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saldo` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forma_pago` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marca_aro` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modelo_aro` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_aro` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lente` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anti_r` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observaciones` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prox_abono` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `servicio_para` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `recibos`
--

INSERT INTO `recibos` (`id_recibo`, `numero_recibo`, `numero_venta`, `monto`, `fecha`, `sucursal`, `id_paciente`, `id_usuario`, `telefono`, `recibi_de`, `empresa`, `cant_letras`, `a_anteriores`, `abono_act`, `saldo`, `forma_pago`, `marca_aro`, `modelo_aro`, `color_aro`, `lente`, `anti_r`, `photo`, `observaciones`, `prox_abono`, `servicio_para`) VALUES
(10, 'RME-1', 'AVME-19', '12.00', '23-09-2020 13:50:55', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'CINCO DOLARES ', '', '5', '7.00', '', 'RAY BAN', 'RB0055', 'C3', '', '', '', '', '', 'OSCAR VASQUEZ HUEZO'),
(11, 'RME-2', 'AVME-20', '70.00', '23-09-2020 13:51:45', 'Metrocentro', 72, 1, '7140-3670', 'LIZBETH ESFANY GARCIA SOSA ', '', 'VEINTICINCO DOLARES ', '', '25', '45.00', 'Efectivo', 'RAY -BAN', '58169', 'C2', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '2020-09-25', 'LIZBETH ESFANY GARCIA SOSA '),
(12, 'RME-3', 'AVME-21', '60.00', '23-09-2020 13:59:55', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'VEINTICINCO DOLARES ', '', '25', '35.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '2020-09-09', 'OSCAR VASQUEZ HUEZO'),
(13, 'RME-4', 'AVME-23', '110.00', '23-09-2020 14:30:17', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'TREINTA Y CUATRO DOLARES ', '', '34', '76.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', 'TRANSITIONS GEN 8 CAFE', '', '2020-09-25', 'OSCAR VASQUEZ HUEZO'),
(14, 'RME-5', 'AVME-24', '60.00', '23-09-2020 14:38:18', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'VEINTICINCO DOLARES ', '', '25', '35.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '2020-09-24', 'OSCAR VASQUEZ HUEZO'),
(15, 'RME-6', 'AVME-2', '120.00', '23-09-2020 15:12:35', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'VEINTE DOLARES ', '', '20', '100.00', 'Efectivo', 'RAY -BAN', '58169', 'C2', 'VISIÓN SENCILLA BLANCO CR', '', 'TRANSITIONS GEN 8 CAFE', '', '2020-09-10', 'OSCAR VASQUEZ HUEZO'),
(16, 'RME-7', 'AVME-3', '60.00', '23-09-2020 15:14:43', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'VEINTICINCO DOLARES ', '', '25', '35.00', '', 'RAY -BAN', '58169', 'C2', '', 'AR SUPERHIDROFOBICO ADD PROMO', '', '', '', 'OSCAR VASQUEZ HUEZO'),
(17, 'RME-8', 'AVME-4', '160.00', '23-09-2020 15:18:27', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'TREINTA DOLARES ', '', '30', '130.00', '', 'RAY -BAN', '58169', 'C2', 'VISION SENCILLA CR39 PHOT', '', '', '', '', 'OSCAR VASQUEZ HUEZO'),
(18, 'RME-9', 'AVME-5', '110.00', '23-09-2020 15:20:27', 'Metrocentro', 72, 1, '7140-3670', 'LIZBETH ESFANY GARCIA SOSA ', '', 'TREINTA DOLARES ', '', '30', '80.00', '', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', 'TRANSITIONS GEN 8 CAFE', '', '', 'LIZBETH ESFANY GARCIA SOSA '),
(19, 'RME-10', 'AVME-6', '145.00', '23-09-2020 15:29:47', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'VEINTICINCO DOLARES ', '', '25', '120.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', 'ANTIRREFLEJANTE 1', '', '2020-09-04', 'OSCAR VASQUEZ HUEZO'),
(20, 'RME-11', 'AVME-7', '10.00', '23-09-2020 15:32:16', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'OCHO DOLARES ', '', '8', '2.00', '', 'RAY -BAN', '58169', 'C2', '', '', '', '', '', 'OSCAR VASQUEZ HUEZO'),
(21, 'RME-12', 'AVME-8', '60.00', '23-09-2020 15:35:53', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'VEINTICINCO DOLARES ', '', '25', '35.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '2020-09-10', 'OSCAR VASQUEZ HUEZO'),
(22, 'RME-13', 'AVME-9', '10.00', '23-09-2020 15:37:48', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'CINCO DOLARES ', '', '5', '5.00', '', 'RAY -BAN', '58169', 'C2', '', '', '', '', '', 'OSCAR VASQUEZ HUEZO'),
(23, 'RME-14', 'AVME-4', '145.00', '24-09-2020 08:00:41', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'VEINTICINCO DOLARES ', '', '25', '120.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', 'ANTIRREFLEJANTE 1', '', '2020-09-25', 'OSCAR VASQUEZ HUEZO'),
(24, 'RME-15', 'AVME-5', '150.00', '24-09-2020 08:11:08', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'VEINTICINCO DOLARES CON VEINTICINCO CENTAVOS ', '', '25.25', '124.75', '', '', '', '', 'VISION SENCILLA CR39 PHOT', '', '', '', '', 'OSCAR VASQUEZ HUEZO'),
(25, 'RME-16', 'AVME-6', '150.00', '24-09-2020 08:49:43', 'Metrocentro', 72, 1, '7140-3670', 'LIZBETH ESFANY GARCIA SOSA ', '', 'VEINTICINCO DOLARES ', '', '25', '125.00', 'Efectivo', '', '', '', 'VISION SENCILLA CR39 PHOT', '', '', '', '', 'OSCAR ANTONIO GONZALEZ'),
(26, 'RME-17', 'AVME-7', '150.00', '24-09-2020 09:18:34', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'CINCUENTA Y OCHO DOLARES ', '', '58', '92.00', '', '', '', '', 'VISION SENCILLA CR39 PHOT', '', '', '', '', 'OSCAR VASQUEZ HUEZO'),
(46, 'RME-18', 'AVME-19', '150.00', '24-09-2020 11:25:04', 'Metrocentro', 72, 1, '7140-3670', 'LIZBETH ESFANY GARCIA SOSA ', '', 'VEINTICINCO DOLARES ', '', '25', '125.00', '', '', '', '', 'VISION SENCILLA CR39 PHOT', '', '', '', '', 'OSCAR ANTONIO GONZALEZ'),
(47, 'RME-19', 'AVME-20', '50.00', '24-09-2020 11:26:10', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'DOCE DOLARES ', '', '12', '38.00', '', '', '', '', '', 'AR SUPERHIDROFOBICO ADD PROMO', '', '', '', 'OSCAR VASQUEZ HUEZO'),
(49, 'RME-20', 'AVME-22', '60.00', '24-09-2020 11:30:52', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'VEINTICINCO DOLARES ', '', '25', '35.00', '', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '', 'OSCAR VASQUEZ HUEZO'),
(50, 'RME-21', 'AVME-23', '60.00', '24-09-2020 11:34:55', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'TRECE DOLARES CON VEINTICINCO CENTAVOS ', '', '13.25', '46.75', '', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '', 'OSCAR VASQUEZ HUEZO'),
(51, 'RME-22', 'AVME-24', '50.00', '24-09-2020 11:36:35', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'VEINTICINCO DOLARES CON DIECISIETE CENTAVOS ', '', '25.17', '24.83', '', '', '', '', '', '', 'TRANSITIONS GEN 8 CAFE', '', '', 'OSCAR VASQUEZ HUEZO'),
(52, 'RME-23', 'AVME-25', '60.00', '24-09-2020 11:38:52', 'Metrocentro', 72, 1, '7140-3670', 'LIZBETH ESFANY GARCIA SOSA ', '', 'VEINTICINCO DOLARES ', '', '25', '35.00', '', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '', 'OSCAR ANTONIO GONZALEZ'),
(53, 'RME-24', 'AVME-26', '60.00', '24-09-2020 11:51:06', 'Metrocentro', 72, 1, '7140-3670', 'LIZBETH ESFANY GARCIA SOSA ', '', 'VEINTICINCO DOLARES ', '', '25', '35.00', '', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '2020-09-25', 'OSCAR ANTONIO GONZALEZ'),
(54, 'RME-25', 'AVME-27', '160.00', '24-09-2020 12:32:12', 'Metrocentro', 72, 1, '7140-3670', 'LIZBETH ESFANY GARCIA SOSA ', '', 'CUARENTA Y CINCO DOLARES ', '', '45', '115.00', 'Efectivo', 'TORY BURCH', 'T455', 'C7', 'VISION SENCILLA CR39 PHOT', '', '', '', '2020-09-29', 'OSCAR ANTONIO GONZALEZ'),
(55, 'RME-26', 'AVME-28', '10.00', '24-09-2020 13:30:30', 'Metrocentro', 76, 1, '7445-4415', 'ANTONIA MEJIA ROMO', '', 'TRES DOLARES CON SETENTA Y CINCO CENTAVOS ', '', '3.75', '6.25', 'Efectivo', 'TORY BURCH', 'T455', 'C7', '', '', '', '', '2020-09-30', ''),
(56, 'RME-27', 'AVME-29', '170.00', '24-09-2020 14:06:59', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'SETENTA Y OCHO DOLARES ', '', '78', '92.00', 'Efectivo', 'TORY BURCH', 'T455', 'C7', 'VISIÓN SENCILLA BLANCO CR', 'AR SUPERHIDROFOBICO ADD PROMO', 'TRANSITIONS GEN 8 CAFE', '', '2020-09-29', 'OSCAR VASQUEZ HUEZO'),
(57, 'RME-28', 'AVME-30', '160.00', '24-09-2020 14:41:59', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTICINCO DOLARES ', '', '25', '135.00', 'Efectivo', 'TORY BURCH', 'T455', 'C7', 'VISION SENCILLA CR39 PHOT', '', '', '', '2020-09-25', 'SONIA GONZALEZ '),
(58, 'RME-29', 'AVME-31', '60.00', '24-09-2020 14:44:01', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'CUARENTA Y CINCO DOLARES ', '', '45', '15.00', 'Efectivo', 'TORY BURCH', 'T455', 'C7', '', '', 'TRANSITIONS GEN 8 CAFE', 'PAGA LA  MITAD EN EFECTIVO', '2020-09-09', 'SONIA GONZALEZ '),
(59, 'RME-30', 'AVME-32', '255.00', '24-09-2020 14:58:49', 'Metrocentro', 72, 1, '7140-3670', 'LIZBETH ESFANY GARCIA SOSA ', '', 'CINCUENTA Y CINCO DOLARES ', '', '55', '200.00', 'Efectivo', 'TORY BURCH', 'T455', 'C7', 'VISIÓN SENCILLA BLANCO CR', 'ar 1', 'ANTIRREFLEJANTE 1', 'Paga la mitad en efectivo y la otra mitad en tarjeta de credito', '2020-09-23', 'LIZBETH ESFANY GARCIA SOSA '),
(60, 'RME-31', 'AVME-33', '260.00', '24-09-2020 15:03:34', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTICINCO DOLARES ', '', '25', '235.00', 'Tarjeta de Credito', 'TORY BURCH', 'T455', 'C7', 'VISION SENCILLA CR39 PHOT', 'AR SUPERHIDROFOBICO ADD PROMO', 'TRANSITIONS GEN 8 CAFE', 'Paga la mitad en efectivo y la otra mitad en tarjeta de credito', '2020-09-23', 'SONIA GONZALEZ '),
(61, 'RME-32', 'AVME-34', '260.00', '24-09-2020 15:04:37', 'Metrocentro', 72, 1, '7140-3670', 'LIZBETH ESFANY GARCIA SOSA ', '', 'VEINTICINCO DOLARES ', '', '25', '235.00', 'Efectivo', 'TORY BURCH', 'T455', 'C7', 'VISION SENCILLA CR39 PHOT', 'AR SUPERHIDROFOBICO ADD PROMO', 'TRANSITIONS GEN 8 CAFE', '', '2020-09-22', 'OSCAR ANTONIO GONZALEZ'),
(62, 'RME-33', 'AVME-35', '70.00', '24-09-2020 15:53:34', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTICINCO DOLARES ', '', '25', '45.00', '', 'TORY BURCH', 'T455', 'C7', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '', 'SONIA GONZALEZ '),
(63, 'RME-34', 'AVME-36', '70.00', '24-09-2020 15:56:37', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTICINCO DOLARES ', '', '25', '45.00', '', 'TORY BURCH', 'T455', 'C7', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '', 'SONIA GONZALEZ '),
(64, 'RME-35', 'AVME-37', '60.00', '24-09-2020 15:58:02', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTICINCO DOLARES ', '', '25', '35.00', '', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '', 'SONIA GONZALEZ '),
(65, 'RME-36', 'AVME-38', '70.00', '24-09-2020 16:00:02', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'VEINTICINCO DOLARES ', '', '25', '45.00', '', 'RAY BAN', 'RB0055', 'C3', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '', 'OSCAR VASQUEZ HUEZO'),
(66, 'RME-37', 'AVME-39', '70.00', '24-09-2020 16:02:59', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTICINCO DOLARES ', '', '25', '45.00', '', 'TORY BURCH', 'T455', 'C7', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '', 'SONIA GONZALEZ '),
(67, 'RME-38', 'AVME-41', '10.00', '24-09-2020 16:13:21', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'UN DOLAR ', '', '1', '9.00', 'Efectivo', 'TORY BURCH', 'T455', 'C7', '', '', '', '', '', 'SONIA GONZALEZ '),
(68, 'RME-39', 'AVME-42', '10.00', '25-09-2020 08:31:18', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'TRES DOLARES ', '', '3', '7.00', 'Efectivo', 'TORY BURCH', 'T455', 'C7', '', '', '', '', '', 'SONIA GONZALEZ '),
(69, 'RME-40', 'AVME-43', '85.00', '25-09-2020 08:33:06', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTITRES DOLARES ', '', '23', '62.00', 'Efectivo', '', '', '', '', '', 'ANTIRREFLEJANTE 1', '', '', 'SONIA GONZALEZ '),
(70, 'RME-41', 'AVME-44', '60.00', '25-09-2020 08:33:55', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', '', '', '23', '', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '', 'SONIA GONZALEZ '),
(71, 'RME-42', 'AVME-45', '10.00', '25-09-2020 08:38:45', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'CINCO DOLARES ', '', '5', '5.00', 'Efectivo', 'RAY BAN', 'RB0055', 'C3', '', '', '', '', '', 'SONIA GONZALEZ '),
(79, 'RME-43', 'AVME-47', '260.00', '25-09-2020 11:21:50', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTICINCO DOLARES ', '', '25', '235.00', 'Efectivo', 'RAY BAN', 'RB0055', 'C3', 'VISION SENCILLA CR39 PHOT', 'AR SUPERHIDROFOBICO ADD PROMO', 'TRANSITIONS GEN 8 CAFE', '', '', 'SONIA GONZALEZ '),
(80, 'RME-44', 'AVME-48', '110.00', '25-09-2020 12:11:24', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'DIEZ DOLARES ', '', '10', '100.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', 'TRANSITIONS GEN 8 CAFE', '', '2020-09-24', 'SONIA GONZALEZ '),
(81, 'RME-45', 'AVME-49', '120.00', '25-09-2020 15:30:20', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTICINCO DOLARES ', '', '25', '95.00', 'Efectivo', 'RAY BAN', 'RB0055', 'C3', 'VISIÓN SENCILLA BLANCO CR', 'AR SUPERHIDROFOBICO ADD PROMO', '', '', '2020-09-03', 'SONIA GONZALEZ '),
(82, 'RME-46', 'AVME-50', '70.00', '25-09-2020 15:57:30', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'TREINTA Y CUATRO DOLARES ', '', '34', '36.00', 'Efectivo', 'RAY BAN', 'RB0055', 'C3', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '2020-09-30', 'SONIA GONZALEZ '),
(83, 'RME-47', 'AVME-51', '10.00', '25-09-2020 16:35:56', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'CINCO DOLARES ', '', '5', '5.00', 'Efectivo', 'RAY BAN', 'RB0055', 'C3', '', '', '', '', '2020-09-22', 'OSCAR VASQUEZ HUEZO'),
(84, 'RME-48', 'AVME-52', '170.00', '25-09-2020 16:49:36', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'CINCUENTA DOLARES ', '', '50', '120.00', 'Efectivo', 'RAY BAN', 'RB0055', 'C3', 'VISIÓN SENCILLA BLANCO CR', 'AR SUPERHIDROFOBICO ADD PROMO', 'TRANSITIONS GEN 8 CAFE', '', '', 'OSCAR VASQUEZ HUEZO'),
(85, 'RME-49', 'AVME-53', '60.00', '26-09-2020 07:52:14', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTICINCO DOLARES ', '', '25', '35.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '2020-09-17', 'SONIA GONZALEZ '),
(86, 'RME-50', 'AVME-54', '210.00', '26-09-2020 08:13:44', 'Metrocentro', 72, 1, '7140-3670', 'LIZBETH ESFANY GARCIA SOSA ', '', 'VEINTICINCO DOLARES ', '', '25', '185.00', 'Efectivo', 'RAY BAN', 'RB0055', 'C3', 'VISION SENCILLA CR39 PHOT', '', 'TRANSITIONS GEN 8 CAFE', '', '2020-09-08', 'OSCAR ANTONIO GONZALEZ'),
(87, 'RME-51', 'AVME-55', '220.00', '26-09-2020 08:43:59', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'SETENTA Y CINCO DOLARES ', '', '75', '145.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', 'AR SUPERHIDROFOBICO ADD PROMO', 'TRANSITIONS GEN 8 CAFE', '', '2020-09-22', 'SONIA GONZALEZ '),
(88, 'RME-52', 'AVME-56', '70.00', '26-09-2020 11:07:04', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTICINCO DOLARES ', '', '25', '45.00', 'Efectivo', 'RAY BAN', 'RB0055', 'C3', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '2020-09-24', 'SONIA GONZALEZ '),
(89, 'RME-53', 'AVME-81', '60.00', '26-09-2020 12:11:42', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTICINCO DOLARES ', '', '25', '35.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '2020-09-23', 'SONIA GONZALEZ '),
(90, 'RME-54', 'AVME-82', '60.00', '26-09-2020 12:23:37', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTICINCO DOLARES ', '', '25', '35.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '2020-09-24', 'SONIA GONZALEZ '),
(91, 'RME-55', 'AVME-83', '110.00', '26-09-2020 12:25:29', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTICINCO DOLARES ', '', '25', '85.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', 'TRANSITIONS GEN 8 CAFE', '', '2020-09-24', 'SONIA GONZALEZ '),
(92, 'RME-56', 'AVME-84', '60.00', '26-09-2020 12:28:37', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTICINCO DOLARES ', '', '25', '35.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '2020-09-29', 'SONIA GONZALEZ '),
(93, 'RME-57', 'AVME-85', '60.00', '26-09-2020 13:01:10', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTICINCO DOLARES ', '', '25', '35.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '2020-09-23', 'SONIA GONZALEZ '),
(94, 'RME-58', 'AVME-87', '60.00', '26-09-2020 13:03:17', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'DIECIOCHO DOLARES ', '', '18', '42.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '2020-09-22', 'SONIA GONZALEZ '),
(95, 'RME-59', 'AVME-88', '60.00', '26-09-2020 13:05:50', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTICINCO DOLARES ', '', '25', '35.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '2020-09-24', 'SONIA GONZALEZ '),
(96, 'RME-60', 'AVME-90', '60.00', '26-09-2020 14:09:04', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'SESENTA DOLARES ', '', '60', '0.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '', 'SONIA GONZALEZ '),
(97, 'RME-61', 'AVME-91', '60.00', '26-09-2020 14:09:46', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'DOCE DOLARES ', '', '12', '48.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '2020-09-24', 'SONIA GONZALEZ '),
(98, 'RME-62', 'AVME-92', '60.00', '26-09-2020 14:12:53', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTICINCO DOLARES ', '', '25', '35.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '2020-09-23', 'SONIA GONZALEZ '),
(99, 'RME-63', 'AVME-93', '60.00', '26-09-2020 14:13:30', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'SESENTA DOLARES ', '', '60', '0.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '', 'SONIA GONZALEZ '),
(100, 'RME-64', 'AVME-97', '50.00', '26-09-2020 14:25:00', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'VEINTICINCO DOLARES ', '', '25', '25.00', 'Efectivo', '', '', '', '', 'AR SUPERHIDROFOBICO ADD PROMO', '', '', '2020-09-02', 'SONIA GONZALEZ '),
(101, 'RME-65', 'AVME-98', '60.00', '26-09-2020 14:36:10', 'Metrocentro', 77, 1, '7555-5511', 'SONIA GONZALEZ', '', 'SESENTA DOLARES ', '', '60', '0.00', 'Efectivo', '', '', '', 'VISIÓN SENCILLA BLANCO CR', '', '', '', '', 'SONIA GONZALEZ '),
(102, 'RME-66', 'AVME-5', '50.00', '26-09-2020 16:57:26', 'Metrocentro', 73, 1, '7845-4545', 'OSCAR VASQUEZ HUEZO', '', 'DIEZ DOLARES CON TREINTA Y SEIS CENTAVOS ', '', '10.36', '39.64', 'Efectivo', '', '', '', 'VISION SENCILLA CR39 PHOT', '', 'TRANSITIONS GEN 8 CAFE', '', '2020-09-22', 'OSCAR VASQUEZ HUEZO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_ingreso` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sucursal` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `telefono`, `correo`, `direccion`, `usuario`, `password`, `fecha_ingreso`, `categoria`, `estado`, `sucursal`) VALUES
(1, 'Oscar Antonio Gonzalez', '222888', 'oscar@gmail.com', 'San Salavdor', 'oscar', '12345', '0000', 'administrador', '1', ''),
(2, 'Jackeline Molina', '0000', '000', 'ss', 'jacky', 'jack963', '0000', 'administrador', '1', ''),
(3, 'CARLOS ANDRES VASQUEZ', '00000000000', NULL, 'San Salvador', 'andvas', 'and20vas08', NULL, 'Administrador', '1', 'Metrocentro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_ventas` int(11) NOT NULL,
  `fecha_venta` varchar(25) NOT NULL,
  `numero_venta` varchar(100) NOT NULL,
  `paciente` varchar(100) NOT NULL,
  `vendedor` varchar(100) NOT NULL,
  `monto_total` varchar(10) DEFAULT NULL,
  `tipo_pago` varchar(100) NOT NULL,
  `tipo_venta` varchar(100) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `sucursal` varchar(100) NOT NULL,
  `evaluado` varchar(200) DEFAULT NULL,
  `optometra` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_ventas`, `fecha_venta`, `numero_venta`, `paciente`, `vendedor`, `monto_total`, `tipo_pago`, `tipo_venta`, `id_usuario`, `id_paciente`, `sucursal`, `evaluado`, `optometra`) VALUES
(216, '26-09-2020 15:26:46', 'AVME-1', 'LIZBETH ESFANY GARCIA SOSA ', '1', '60.00', 'Cargo Automatico', 'Credito', 1, 72, 'Metrocentro', 'OSCAR ANTONIO GONZALEZ', '5'),
(217, '26-09-2020 15:27:44', 'AVME-2', 'SONIA GONZALEZ', '1', '150.00', 'Descuento en Planilla', 'Credito', 1, 77, 'Metrocentro', 'SONIA GONZALEZ ', '1'),
(218, '26-09-2020 16:51:45', 'AVME-3', 'LIZBETH ESFANY GARCIA SOSA ', '5', '150.00', 'Contado', 'Contado', 5, 72, 'Metrocentro', 'LIZBETH ESFANY GARCIA SOSA ', '5'),
(219, '26-09-2020 16:53:15', 'AVME-4', 'OSCAR VASQUEZ HUEZO', '1', '60.00', 'Contado', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(220, '26-09-2020 16:57:26', 'AVME-5', 'OSCAR VASQUEZ HUEZO', '1', '50.00', 'Contado', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(221, '27-09-2020 09:27:53', 'AVME-6', 'LIZBETH ESFANY GARCIA SOSA ', '1', '50.00', 'Cargo Automatico', 'Credito', 1, 72, 'Metrocentro', 'OSCAR ANTONIO GONZALEZ', '5');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abonos`
--
ALTER TABLE `abonos`
  ADD PRIMARY KEY (`id_abono`),
  ADD KEY `fk_abonos_pacientes_idx` (`id_paciente`),
  ADD KEY `fk_abonos_usuarios_idx` (`id_usuario`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_consulta`);

--
-- Indices de la tabla `creditos`
--
ALTER TABLE `creditos`
  ADD PRIMARY KEY (`id_credito`),
  ADD KEY `fk_creditos_pacientes` (`id_paciente`),
  ADD KEY `fk_creditos_usuarios` (`id_usuario`);

--
-- Indices de la tabla `detalle_compras`
--
ALTER TABLE `detalle_compras`
  ADD PRIMARY KEY (`id_detalle_compra`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `detalle_ingresos`
--
ALTER TABLE `detalle_ingresos`
  ADD PRIMARY KEY (`id_detalle_ingreso`);

--
-- Indices de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD PRIMARY KEY (`id_detalle_ventas`),
  ADD KEY `fk_detalle_ventas_producto_idx` (`id_producto`),
  ADD KEY `fk_detalle_ventas_usuario_idx` (`id_usuario`),
  ADD KEY `fk_detalle_ventas_clientes_idx` (`id_paciente`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `existencias`
--
ALTER TABLE `existencias`
  ADD PRIMARY KEY (`id_ingreso`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`id_ingresos`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `recibos`
--
ALTER TABLE `recibos`
  ADD PRIMARY KEY (`id_recibo`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_ventas`),
  ADD KEY `fk_ventas_usuarios_idx` (`id_usuario`),
  ADD KEY `fk_ventas_pacientes_idx` (`id_paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abonos`
--
ALTER TABLE `abonos`
  MODIFY `id_abono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `creditos`
--
ALTER TABLE `creditos`
  MODIFY `id_credito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT de la tabla `detalle_compras`
--
ALTER TABLE `detalle_compras`
  MODIFY `id_detalle_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT de la tabla `detalle_ingresos`
--
ALTER TABLE `detalle_ingresos`
  MODIFY `id_detalle_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  MODIFY `id_detalle_ventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=409;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `existencias`
--
ALTER TABLE `existencias`
  MODIFY `id_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id_ingresos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `recibos`
--
ALTER TABLE `recibos`
  MODIFY `id_recibo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_ventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abonos`
--
ALTER TABLE `abonos`
  ADD CONSTRAINT `fk_abonos_pacientes` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_abonos_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `creditos`
--
ALTER TABLE `creditos`
  ADD CONSTRAINT `fk_creditos_pacientes` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_creditos_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_compras`
--
ALTER TABLE `detalle_compras`
  ADD CONSTRAINT `detalle_compras_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `existencias`
--
ALTER TABLE `existencias`
  ADD CONSTRAINT `existencias_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `recibos`
--
ALTER TABLE `recibos`
  ADD CONSTRAINT `recibos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `recibos_ibfk_2` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
