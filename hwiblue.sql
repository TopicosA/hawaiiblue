-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2016 a las 18:36:50
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hwiblue`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabania`
--

CREATE TABLE `cabania` (
  `idcabania` int(20) NOT NULL,
  `idtipoc` int(20) NOT NULL,
  `serial` int(20) NOT NULL,
  `sector_c` varchar(20) NOT NULL,
  `estadoc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabania_r`
--

CREATE TABLE `cabania_r` (
  `idcabania_r` int(20) NOT NULL,
  `idreserva_c` int(20) NOT NULL,
  `idcabania` int(20) NOT NULL,
  `fechaentrada` date NOT NULL,
  `fechasalida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `cedula` int(20) NOT NULL,
  `id_tipoclte` int(20) NOT NULL,
  `nombre_clte` varchar(50) NOT NULL,
  `apellido_clte` varchar(50) NOT NULL,
  `telefono` int(20) NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuento`
--

CREATE TABLE `descuento` (
  `id_descto` int(11) NOT NULL,
  `nombred` varchar(50) NOT NULL,
  `tipod` varchar(40) NOT NULL,
  `porcentaje` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(20) NOT NULL,
  `idreserva_c` int(20) NOT NULL,
  `idreserva_s` int(20) NOT NULL,
  `id_descto` int(20) NOT NULL,
  `fecha_fact` date NOT NULL,
  `preciototal` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionalidad`
--

CREATE TABLE `funcionalidad` (
  `id_func` int(20) NOT NULL,
  `nom_func` varchar(50) NOT NULL,
  `desc_func` varchar(50) NOT NULL,
  `link_func` varchar(50) NOT NULL,
  `icon_func` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionalidad_rol`
--

CREATE TABLE `funcionalidad_rol` (
  `id_funcrol` int(20) NOT NULL,
  `id_rol` int(20) NOT NULL,
  `id_func` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_c`
--

CREATE TABLE `reserva_c` (
  `idreserva_c` int(20) NOT NULL,
  `cod_reservac` varchar(50) NOT NULL,
  `id_cliente` int(20) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_s`
--

CREATE TABLE `reserva_s` (
  `idreserva_s` int(50) NOT NULL,
  `cod_reservas` varchar(20) NOT NULL,
  `id_cliente` int(20) NOT NULL,
  `estados` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_usuario`
--

CREATE TABLE `rol_usuario` (
  `id_rol` int(20) NOT NULL,
  `nombre_rol` varchar(20) NOT NULL,
  `desc_rol` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(50) NOT NULL,
  `sector_s` varchar(50) NOT NULL,
  `nombre_s` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precios` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_r`
--

CREATE TABLE `servicios_r` (
  `idservicios_r` int(20) NOT NULL,
  `idreserva_s` int(20) NOT NULL,
  `id_servicio` int(20) NOT NULL,
  `fechas` date NOT NULL,
  `cantidads` int(20) NOT NULL,
  `preciost` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporada`
--

CREATE TABLE `temporada` (
  `id_temp` int(20) NOT NULL,
  `tipo_temp` varchar(20) NOT NULL,
  `fechainicio` longtext NOT NULL,
  `fechafin` longtext NOT NULL,
  `id_descto` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cabania`
--

CREATE TABLE `tipo_cabania` (
  `idtipoc` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cliente`
--

CREATE TABLE `tipo_cliente` (
  `id_tipoclte` int(20) NOT NULL,
  `nombre_tipo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(20) NOT NULL,
  `id_rol` int(20) NOT NULL,
  `contraseña` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cabania`
--
ALTER TABLE `cabania`
  ADD PRIMARY KEY (`idcabania`);

--
-- Indices de la tabla `cabania_r`
--
ALTER TABLE `cabania_r`
  ADD PRIMARY KEY (`idcabania_r`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `descuento`
--
ALTER TABLE `descuento`
  ADD PRIMARY KEY (`id_descto`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`);

--
-- Indices de la tabla `funcionalidad`
--
ALTER TABLE `funcionalidad`
  ADD PRIMARY KEY (`id_func`);

--
-- Indices de la tabla `funcionalidad_rol`
--
ALTER TABLE `funcionalidad_rol`
  ADD PRIMARY KEY (`id_funcrol`);

--
-- Indices de la tabla `reserva_c`
--
ALTER TABLE `reserva_c`
  ADD PRIMARY KEY (`idreserva_c`);

--
-- Indices de la tabla `reserva_s`
--
ALTER TABLE `reserva_s`
  ADD PRIMARY KEY (`idreserva_s`);

--
-- Indices de la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `servicios_r`
--
ALTER TABLE `servicios_r`
  ADD PRIMARY KEY (`idservicios_r`);

--
-- Indices de la tabla `temporada`
--
ALTER TABLE `temporada`
  ADD PRIMARY KEY (`id_temp`);

--
-- Indices de la tabla `tipo_cabania`
--
ALTER TABLE `tipo_cabania`
  ADD PRIMARY KEY (`idtipoc`);

--
-- Indices de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  ADD PRIMARY KEY (`id_tipoclte`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cabania`
--
ALTER TABLE `cabania`
  MODIFY `idcabania` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cabania_r`
--
ALTER TABLE `cabania_r`
  MODIFY `idcabania_r` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `descuento`
--
ALTER TABLE `descuento`
  MODIFY `id_descto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `funcionalidad`
--
ALTER TABLE `funcionalidad`
  MODIFY `id_func` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `funcionalidad_rol`
--
ALTER TABLE `funcionalidad_rol`
  MODIFY `id_funcrol` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reserva_c`
--
ALTER TABLE `reserva_c`
  MODIFY `idreserva_c` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reserva_s`
--
ALTER TABLE `reserva_s`
  MODIFY `idreserva_s` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  MODIFY `id_rol` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `servicios_r`
--
ALTER TABLE `servicios_r`
  MODIFY `idservicios_r` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `temporada`
--
ALTER TABLE `temporada`
  MODIFY `id_temp` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_cabania`
--
ALTER TABLE `tipo_cabania`
  MODIFY `idtipoc` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  MODIFY `id_tipoclte` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
