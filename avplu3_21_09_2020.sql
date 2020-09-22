-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2020 a las 00:09:50
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
(37, 'C-37', 'P-01', 'Carlos Andres Vazquez Choto', 'Contado', 'Contado', '8', '20-09-2020 14:57:15', 'Factura', '25888', 'oscar', '160.00', '1', 'Metrocentro'),
(38, 'C-38', 'P-01', 'Carlos Andres Vazquez Choto', 'Contado', 'Contado', '12', '22-09-2020 14:25:54', 'Factura', '25888', 'oscar', '573.00', '2', 'Metrocentro');

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
(27, '', '', 73, 1, '2020-09-20 20:52:33', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'usa lentes desde hace 10 años ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '60', '30 mm', '30 mm', '15', '16', '21', '22', '20-09-2020 14:49:42', 'OSCAR VASQUEZ HUEZO', '', '7845-4545');

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
(1, 'Credito', '100.00', '3', '100.00', 'Descuento en Planilla', 'AVME-10', 5, 1, '20200920'),
(8, 'Contado', '173.00', '0', '173.00', 'Contado', 'AVME-2', 73, 1, '22-09-2020 11:32:48'),
(9, 'Contado', '164.00', '0', '164.00', 'Contado', 'AVME-3', 73, 1, '22-09-2020 11:55:30'),
(10, 'Contado', '348.00', '', '348.00', 'Efectivo', 'AVME-4', 72, 1, '22-09-2020 11:58:39'),
(11, 'Credito', '85.00', '2', '85.00', 'Descuento en Planilla', 'AVME-5', 73, 1, '22-09-2020 12:06:42'),
(12, 'Contado', '160.00', '', '160.00', 'Efectivo', 'AVME-6', 73, 1, '22-09-2020 12:10:43'),
(13, 'Contado', '150.00', '', '150.00', 'Efectivo', 'AVME-7', 72, 1, '22-09-2020 12:39:48'),
(14, 'Contado', '150.00', '0', '150.00', 'Contado', 'AVME-1', 73, 1, '22-09-2020 12:42:19'),
(15, 'Contado', '60.00', '', '60.00', 'Efectivo', 'AVME-2', 73, 1, '22-09-2020 12:43:43'),
(16, 'Contado', '60.00', '', '60.00', 'Efectivo', 'AVME-3', 73, 1, '22-09-2020 12:47:52'),
(17, 'Contado', '60.00', '', '60.00', 'Efectivo', 'AVME-4', 72, 1, '22-09-2020 12:50:04'),
(18, 'Contado', '60.00', '', '60.00', 'Efectivo', 'AVME-1', 73, 1, '22-09-2020 12:57:58'),
(19, 'Contado', '150.00', '2', '150.00', 'Contado', 'AVME-2', 73, 1, '22-09-2020 12:59:19'),
(20, 'Contado', '150.00', '0', '150.00', 'Contado', 'AVME-3', 73, 1, '22-09-2020 13:01:42'),
(21, 'Contado', '60.00', '0', '60.00', 'Contado', 'AVME-4', 73, 1, '22-09-2020 13:03:55'),
(22, 'Contado', '60.00', '', '60.00', 'Efectivo', 'AVME-5', 73, 1, '22-09-2020 13:07:51'),
(23, 'Contado', '150.00', '0', '150.00', 'Contado', 'AVME-6', 73, 1, '22-09-2020 13:32:37'),
(24, 'Contado', '60.00', '0', '60.00', 'Contado', 'AVME-7', 73, 1, '22-09-2020 13:34:19'),
(25, 'Contado', '60.00', '0', '60.00', 'Contado', 'AVME-8', 73, 1, '22-09-2020 13:36:56'),
(26, 'Contado', '60.00', '0', '60.00', 'Contado', 'AVME-9', 72, 1, '22-09-2020 13:38:30'),
(27, 'Contado', '60.00', '', '60.00', 'Efectivo', 'AVME-9', 73, 1, '22-09-2020 13:40:30'),
(28, 'Contado', '60.00', '', '60.00', 'Efectivo', 'AVME-10', 73, 1, '22-09-2020 13:42:25'),
(29, 'Contado', '60.00', '', '60.00', 'Efectivo', 'AVME-11', 73, 1, '22-09-2020 13:45:05'),
(30, 'Contado', '60.00', '', '60.00', 'Efectivo', 'AVME-12', 73, 1, '22-09-2020 13:48:55'),
(31, 'Contado', '60.00', '', '60.00', 'Efectivo', 'AVME-13', 73, 1, '22-09-2020 13:49:48'),
(32, 'Contado', '60.00', '', '60.00', 'Efectivo', 'AVME-14', 73, 1, '22-09-2020 13:52:52'),
(33, 'Contado', '245.00', '0', '245.00', 'Contado', 'AVME-15', 72, 1, '22-09-2020 14:10:10'),
(34, 'Contado', '160.00', '', '160.00', 'Efectivo', 'AVME-15', 72, 1, '22-09-2020 14:11:36'),
(35, 'Contado', '260.00', '', '260.00', 'Efectivo', 'AVME-16', 73, 1, '22-09-2020 14:20:51'),
(36, 'Contado', '222.00', '', '222.00', 'Efectivo', 'AVME-17', 73, 1, '22-09-2020 14:47:15'),
(37, 'Contado', '347.00', '0', '347.00', 'Contado', 'AVME-18', 73, 1, '22-09-2020 14:52:58'),
(38, 'Contado', '297.00', '', '297.00', 'Efectivo', 'AVME-19', 73, 1, '22-09-2020 15:16:59'),
(39, 'Contado', '50.00', '', '50.00', 'Efectivo', 'AVME-20', 73, 1, '22-09-2020 15:24:45'),
(40, 'Contado', '100.00', '', '100.00', 'Efectivo', 'AVME-21', 73, 1, '22-09-2020 15:33:25'),
(41, 'Contado', '12.00', '', '12.00', 'Efectivo', 'AVME-22', 72, 1, '22-09-2020 15:36:21'),
(42, 'Contado', '150.00', '0', '150.00', 'Contado', 'AVME-22', 72, 1, '22-09-2020 15:38:38'),
(43, 'Contado', '312.00', '0', '312.00', 'Contado', 'AVME-23', 73, 1, '22-09-2020 16:01:20'),
(44, 'Contado', '172.00', '', '172.00', 'Efectivo', 'AVME-25', 72, 1, '22-09-2020 16:03:44');

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
(216, 'C-37', 'RAY BAN FRA 1 FRANELA RAYBAN  ', '10', '8', '14', '80', '0', 'oscar', 48, '20-09-2020 14:57:15', '5'),
(217, 'C-37', 'RAY BAN 2584 ESTUCHE RAYBAN COLOR CAFÉ  ', '8', '10', '17', '80', '0', 'oscar', 47, '20-09-2020 14:57:15', '3'),
(218, 'C-38', 'TORY BURCH T455 C7 12-48-555', '15', '10', '12', '150', '0', 'oscar', 57, '22-09-2020 14:25:54', '0'),
(219, 'C-38', 'RAY BAN RB0055 C3 23-44-44', '12', '11', '12', '132', '0', 'oscar', 35, '22-09-2020 14:25:54', '0'),
(220, 'C-38', 'RAY -BAN 58169 C2 15-15-154', '12', '9', '10', '108', '0', 'oscar', 37, '22-09-2020 14:25:54', '0'),
(221, 'C-38', 'RAY BAN FRA 1 FRANELA RAYBAN  ', '14', '6', '9', '84', '0', 'oscar', 48, '22-09-2020 14:25:54', '0'),
(222, 'C-38', 'RAY BAN 2584 ESTUCHE RAYBAN COLOR CAFÉ  ', '11', '9', '13', '99', '0', 'oscar', 47, '22-09-2020 14:25:54', '0');

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
(124, 'RAY BAN RB0055 C3 23-44-44', '12', 'Metrocentro', 'GAVETA 2', 'oscar', '22-09-2020 14:46:21', 'C-38', '12', 'I-53');

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
(44, 'AVME-1', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '22-09-2020 12:57:58', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(45, 'AVME-2', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '22-09-2020 12:59:19', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(46, 'AVME-3', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '22-09-2020 13:01:42', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(47, 'AVME-4', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '22-09-2020 13:03:55', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(48, 'AVME-5', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '22-09-2020 13:07:51', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(49, 'AVME-6', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '22-09-2020 13:32:37', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(50, 'AVME-7', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '22-09-2020 13:34:19', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(51, 'AVME-8', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '22-09-2020 13:36:56', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(52, 'AVME-9', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '22-09-2020 13:38:30', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(53, 'AVME-9', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '22-09-2020 13:40:30', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(54, 'AVME-10', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '22-09-2020 13:42:25', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(55, 'AVME-11', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '22-09-2020 13:45:05', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(56, 'AVME-12', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '22-09-2020 13:48:55', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(57, 'AVME-13', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '22-09-2020 13:49:48', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(58, 'AVME-14', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '22-09-2020 13:52:52', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(59, 'AVME-15', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '22-09-2020 14:10:10', 1, 72, 'LIZBETH ESFANY GARCIA SOSA '),
(60, 'AVME-15', 49, 'ar 1', '100', '1', '0', '100', '22-09-2020 14:10:10', 1, 72, 'LIZBETH ESFANY GARCIA SOSA '),
(61, 'AVME-15', 51, 'ANTIRREFLEJANTE 1', '85', '1', '0', '85', '22-09-2020 14:10:10', 1, 72, 'LIZBETH ESFANY GARCIA SOSA '),
(62, 'AVME-15', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '22-09-2020 14:11:36', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(63, 'AVME-15', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '22-09-2020 14:11:36', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(64, 'AVME-15', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '22-09-2020 14:11:36', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(65, 'AVME-16', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '22-09-2020 14:20:51', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(66, 'AVME-16', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '22-09-2020 14:20:51', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(67, 'AVME-16', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '22-09-2020 14:20:51', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(68, 'AVME-17', 57, 'TORY BURCH mod.T455 12-48-555 C7', '12.00', '1', '0', '12', '22-09-2020 14:47:15', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(69, 'AVME-17', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '22-09-2020 14:47:15', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(70, 'AVME-17', 49, 'ar 1', '100', '1', '0', '100', '22-09-2020 14:47:15', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(71, 'AVME-17', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '22-09-2020 14:47:15', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(72, 'AVME-17', 48, 'FRANELA RAYBAN', '0', '1', '0', '0', '22-09-2020 14:47:15', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(73, 'AVME-18', 57, 'TORY BURCH mod.T455 12-48-555 C7', '12.00', '1', '0', '12', '22-09-2020 14:52:58', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(74, 'AVME-18', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '22-09-2020 14:52:58', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(75, 'AVME-18', 49, 'ar 1', '100', '1', '0', '100', '22-09-2020 14:52:58', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(76, 'AVME-18', 51, 'ANTIRREFLEJANTE 1', '85', '1', '0', '85', '22-09-2020 14:52:58', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(77, 'AVME-18', 47, 'ESTUCHE RAYBAN COLOR CAFÉ', '0', '1', '0', '0', '22-09-2020 14:52:58', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(78, 'AVME-19', 35, 'RAY BAN mod.RB0055 23-44-44 C3', '12.00', '1', '0', '12', '22-09-2020 15:16:59', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(79, 'AVME-19', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '22-09-2020 15:16:59', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(80, 'AVME-19', 50, 'antirreflejante 2', '85', '1', '0', '85', '22-09-2020 15:16:59', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(81, 'AVME-19', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '22-09-2020 15:16:59', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(82, 'AVME-19', 47, 'ESTUCHE RAYBAN COLOR CAFÉ', '0', '1', '0', '0', '22-09-2020 15:16:59', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(83, 'AVME-20', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '22-09-2020 15:24:45', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(84, 'AVME-21', 49, 'ar 1', '100', '1', '0', '100', '22-09-2020 15:33:25', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(85, 'AVME-22', 57, 'TORY BURCH mod.T455 12-48-555 C7', '12.00', '1', '0', '12', '22-09-2020 15:36:21', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(86, 'AVME-22', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '22-09-2020 15:38:38', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(87, 'AVME-23', 35, 'RAY BAN mod.RB0055 23-44-44 C3', '12.00', '1', '0', '12', '22-09-2020 16:01:20', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(88, 'AVME-23', 36, 'VISION SENCILLA', '100', '1', '0', '100', '22-09-2020 16:01:20', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(89, 'AVME-23', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '22-09-2020 16:01:20', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(90, 'AVME-23', 56, 'VISION SENCILLA CR39 PHOTOCROMATICO AR', '150', '1', '0', '150', '22-09-2020 16:01:20', 1, 73, 'OSCAR VASQUEZ HUEZO'),
(91, 'AVME-25', 53, 'VISIÓN SENCILLA BLANCO CR39', '60', '1', '0', '60', '22-09-2020 16:03:44', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(92, 'AVME-25', 35, 'RAY BAN mod.RB0055 23-44-44 C3', '12.00', '1', '0', '12', '22-09-2020 16:03:44', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(93, 'AVME-25', 54, 'AR SUPERHIDROFOBICO ADD PROMO', '50', '1', '0', '50', '22-09-2020 16:03:44', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(94, 'AVME-25', 55, 'TRANSITIONS GEN 8 CAFE', '50', '1', '0', '50', '22-09-2020 16:03:44', 1, 72, 'OSCAR ANTONIO GONZALEZ'),
(95, 'AVME-25', 48, 'FRANELA RAYBAN', '0', '1', '0', '0', '22-09-2020 16:03:44', 1, 72, 'OSCAR ANTONIO GONZALEZ');

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
(117, 57, '12', 'Metrocentro', 'GAVETA 2', '22-09-2020 14:46:21', 'oscar', 'C-38', '12'),
(118, 48, '12', 'Metrocentro', 'GAVETA 2', '22-09-2020 14:46:21', 'oscar', 'C-38', '9'),
(119, 47, '9', 'Metrocentro', 'GAVETA 2', '22-09-2020 14:46:21', 'oscar', 'C-38', '13'),
(120, 37, '12', 'Metrocentro', 'GAVETA 2', '22-09-2020 14:46:21', 'oscar', 'C-38', '10'),
(121, 35, '9', 'Metrocentro', 'GAVETA 2', '22-09-2020 14:46:21', 'oscar', 'C-38', '12');

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
(53, 'I-53', 'oscar', '22-09-2020 14:46:21', 'Metrocentro');

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
(75, 'AVME-16', 'SONIA DAYSI MENA DURAN', '6312-4784', '10', '', 'Metrocentro', '00027223-3', 'eyter@gmail.com', '22-09-2020 09:42:21', 'avplus', 'EXCEL AUTOMOTRIZ', '', '2265-5555', '', 'Desc_planilla');

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
  `estado` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `telefono`, `correo`, `direccion`, `usuario`, `password`, `fecha_ingreso`, `categoria`, `estado`) VALUES
(1, 'Oscar Antonio Gonzalez', '222888', 'oscar@gmail.com', 'San Salavdor', 'oscar', '12345', '0000', 'administrador', '1'),
(2, 'Jackeline Molina', '0000', '000', 'ss', 'jacky', 'jack963', '0000', 'administrador', '1');

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
(16, '22-09-2020 12:57:58', 'AVME-1', 'OSCAR VASQUEZ HUEZO', '1', '60.00', 'Efectivo', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(17, '22-09-2020 12:59:19', 'AVME-2', 'OSCAR VASQUEZ HUEZO', '1', '150.00', 'Contado', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(18, '22-09-2020 13:01:42', 'AVME-3', 'OSCAR VASQUEZ HUEZO', '1', '150.00', 'Contado', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(19, '22-09-2020 13:03:55', 'AVME-4', 'OSCAR VASQUEZ HUEZO', '1', '60.00', 'Contado', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(20, '22-09-2020 13:07:51', 'AVME-5', 'OSCAR VASQUEZ HUEZO', '1', '60.00', 'Efectivo', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(21, '22-09-2020 13:32:37', 'AVME-6', 'OSCAR VASQUEZ HUEZO', '1', '150.00', 'Contado', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(22, '22-09-2020 13:34:19', 'AVME-7', 'OSCAR VASQUEZ HUEZO', '1', '60.00', 'Contado', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(23, '22-09-2020 13:36:56', 'AVME-8', 'OSCAR VASQUEZ HUEZO', '1', '60.00', 'Contado', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(24, '22-09-2020 13:38:30', 'AVME-9', 'LIZBETH ESFANY GARCIA SOSA ', '1', '60.00', 'Contado', 'Contado', 1, 72, 'Metrocentro', 'OSCAR ANTONIO GONZALEZ', '5'),
(25, '22-09-2020 13:40:30', 'AVME-9', 'OSCAR VASQUEZ HUEZO', '1', '60.00', 'Efectivo', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(26, '22-09-2020 13:42:25', 'AVME-10', 'OSCAR VASQUEZ HUEZO', '1', '60.00', 'Efectivo', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(27, '22-09-2020 13:45:05', 'AVME-11', 'OSCAR VASQUEZ HUEZO', '1', '60.00', 'Efectivo', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(28, '22-09-2020 13:48:55', 'AVME-12', 'OSCAR VASQUEZ HUEZO', '1', '60.00', 'Efectivo', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(29, '22-09-2020 13:49:48', 'AVME-13', 'OSCAR VASQUEZ HUEZO', '1', '60.00', 'Efectivo', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(30, '22-09-2020 13:52:52', 'AVME-14', 'OSCAR VASQUEZ HUEZO', '1', '60.00', 'Efectivo', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(31, '22-09-2020 14:10:10', 'AVME-15', 'LIZBETH ESFANY GARCIA SOSA ', '1', '245.00', 'Contado', 'Contado', 1, 72, 'Metrocentro', 'LIZBETH ESFANY GARCIA SOSA ', '5'),
(32, '22-09-2020 14:11:36', 'AVME-15', 'LIZBETH ESFANY GARCIA SOSA ', '1', '160.00', 'Efectivo', 'Contado', 1, 72, 'Metrocentro', 'OSCAR ANTONIO GONZALEZ', '5'),
(33, '22-09-2020 14:20:51', 'AVME-16', 'OSCAR VASQUEZ HUEZO', '1', '260.00', 'Efectivo', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(34, '22-09-2020 14:47:15', 'AVME-17', 'OSCAR VASQUEZ HUEZO', '1', '222.00', 'Efectivo', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(35, '22-09-2020 14:52:58', 'AVME-18', 'OSCAR VASQUEZ HUEZO', '1', '347.00', 'Contado', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(36, '22-09-2020 15:16:59', 'AVME-19', 'OSCAR VASQUEZ HUEZO', '1', '297.00', 'Efectivo', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(37, '22-09-2020 15:24:45', 'AVME-20', 'OSCAR VASQUEZ HUEZO', '1', '50.00', 'Efectivo', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(38, '22-09-2020 15:33:25', 'AVME-21', 'OSCAR VASQUEZ HUEZO', '1', '100.00', 'Efectivo', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(39, '22-09-2020 15:36:21', 'AVME-22', 'LIZBETH ESFANY GARCIA SOSA ', '1', '12.00', 'Efectivo', 'Contado', 1, 72, 'Metrocentro', 'OSCAR ANTONIO GONZALEZ', '5'),
(40, '22-09-2020 15:38:38', 'AVME-22', 'LIZBETH ESFANY GARCIA SOSA ', '1', '150.00', 'Contado', 'Contado', 1, 72, 'Metrocentro', 'OSCAR ANTONIO GONZALEZ', '5'),
(41, '22-09-2020 16:01:20', 'AVME-23', 'OSCAR VASQUEZ HUEZO', '1', '312.00', 'Contado', 'Contado', 1, 73, 'Metrocentro', 'OSCAR VASQUEZ HUEZO', '1'),
(42, '22-09-2020 16:03:44', 'AVME-25', 'LIZBETH ESFANY GARCIA SOSA ', '1', '172.00', 'Efectivo', 'Contado', 1, 72, 'Metrocentro', 'OSCAR ANTONIO GONZALEZ', '5');

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `creditos`
--
ALTER TABLE `creditos`
  MODIFY `id_credito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `detalle_compras`
--
ALTER TABLE `detalle_compras`
  MODIFY `id_detalle_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT de la tabla `detalle_ingresos`
--
ALTER TABLE `detalle_ingresos`
  MODIFY `id_detalle_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  MODIFY `id_detalle_ventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `existencias`
--
ALTER TABLE `existencias`
  MODIFY `id_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id_ingresos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

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
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_ventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Restricciones para tablas volcadas
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
