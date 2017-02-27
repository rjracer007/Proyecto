-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2017 a las 02:02:52
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ramspebit`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarEmpleado` (IN `$idEmpleado` INT(11), IN `$nombres` VARCHAR(45), IN `$apellidos` VARCHAR(45), IN `$rh` VARCHAR(45), IN `$celular` INT(11), IN `$fecha_nacimiento` DATE, IN `$correo_electronico` VARCHAR(100), IN `$fecha_ingreso` DATE, IN `$numero_hijos` INT(11), IN `$telefono_fijo` INT(11), IN `$Pension_idPension` INT(11), IN `$Caja_compensacion_idCaja_compensacion` INT(11), IN `$Tipo_contrato_idTipo_contrato` INT(11), IN `$direccion` VARCHAR(45), IN `$barrio` VARCHAR(45), IN `$municipio` VARCHAR(45), IN `$Tipo_documento_idTipo_documento` INT(11), IN `$Genero_idGenero` INT(11), IN `$Cuenta_idCuenta` INT(11), IN `$cesantias` VARCHAR(45), IN `$procesos` VARCHAR(45), IN `$cargo` VARCHAR(45))  NO SQL
INSERT INTO empleado (idEmpleado, nombres, apellidos, rh, celular, fecha_nacimiento, correo_electronico, fecha_ingreso, numero_hijos, telefono_fijo, Pension_idPension, Caja_compensacion_idCaja_compensacion, Tipo_contrato_idTipo_contrato, direccion, barrio, municipio, Tipo_documento_idTipo_documento, Genero_idGenero, Cuenta_idCuenta, cesantias, procesos, cargo) VALUES ($idEmpleado,$nombres,$apellidos,$rh,$celular,$fecha_nacimiento,
     $correo_electronico,
     $fecha_ingreso,
     $numero_hijos,
     $telefono_fijo,
     $Pension_idPension,
     $Caja_compensacion_idCaja_compensacion,
     $Tipo_contrato_idTipo_contrato,
     $direccion,
     $barrio,
     $municipio,
     $Tipo_documento_idTipo_documento,
     $Genero_idGenero,
     $Cuenta_idCuenta,
     $cesantias,
     $procesos,
     $cargo)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarEmpleadoEps` (IN `$Empleado_idEmpleado` INT(11), IN `$EPS_idEPS` INT(11))  NO SQL
insert into empleado_has_eps values ($Empleado_idEmpleado, $EPS_idEPS)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarEmpleadoNivelestudio` (IN `$Nivel_estudio_idNivel_estudio` INT(11), IN `$Empleado_idEmpleado` INT(11))  NO SQL
INSERT INTO nivel_estudio_has_empleado VALUES ($Nivel_estudio_idNivel_estudio, $Empleado_idEmpleado)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsertarEmpleadoProfesion` (IN `$Profesion_idProfesion` INT(11), IN `$Empleado_idEmpleado` INT(11))  NO SQL
INSERT INTO profesion_has_empleado VALUES ($Profesion_idProfesion, $Empleado_idEmpleado)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarEmpleado` ()  NO SQL
select idEmpleado,	    
nombres,	    
apellidos,	    
rh,	    
celular,	    
fecha_nacimiento,	    
correo_electronico,	    
fecha_ingreso,	    
numero_hijos,	    
telefono_fijo,	    
estado,	    
Pension_idPension,	    
Caja_compensacion_idCaja_compensacion,	    
Tipo_contrato_idTipo_contrato,	    
direccion,	    
barrio,	    
municipio,	    
Tipo_documento_idTipo_documento,	    
Genero_idGenero,	    
Cuenta_idCuenta,	    
cesantias,	    
procesos,	    
cargo from empleado order by idEmpleado DESC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEmpleado` (IN `$idEmpleado` INT(11), IN `$nombres` VARCHAR(45), IN `$apellidos` VARCHAR(45), IN `$rh` VARCHAR(45), IN `$celular` INT(11), IN `$fecha_nacimiento` DATE, IN `$correo_electronico` VARCHAR(100), IN `$fecha_ingreso` DATE, IN `$numero_hijos` INT(11), IN `$telefono_fijo` INT(11), IN `$Pension_idPension` INT(11), IN `$Caja_compensacion_idCaja_compensacion` INT(11), IN `$Tipo_contrato_idTipo_contrato` INT(11), IN `$direccion` VARCHAR(45), IN `$barrio` VARCHAR(45), IN `$municipio` VARCHAR(45), IN `$Tipo_documento_idTipo_documento` INT(11), IN `$Genero_idGener` INT(11), IN `$Cuenta_idCuenta` INT(11), IN `$cesantias` VARCHAR(45), IN ` $procesos` VARCHAR(45), IN `$cargo` VARCHAR(20))  NO SQL
UPDATE empleado set    
nombres = $nombres,	    
apellidos = $apellidos,	    
rh = $rh,	    
celular = $celular,	    
fecha_nacimiento = $fecha_nacimiento,	    
correo_electronico = $correo_electronico,	    
fecha_ingreso = $fecha_ingreso,	    
numero_hijos = $numero_hijos,	    
telefono_fijo = $telefono_fijo,	    	    
Pension_idPension = $Pension_idPension,	    
Caja_compensacion_idCaja_compensacion = $Caja_compensacion_idCaja_compensacion,	    
Tipo_contrato_idTipo_contrato = $Tipo_contrato_idTipo_contrato,	    
direccion = $direccion,	    
barrio = $barrio,	    
municipio = $municipio,	    
Tipo_documento_idTipo_documento = $Tipo_documento_idTipo_documento,	    
Genero_idGenero = $Genero_idGenero,	    
Cuenta_idCuenta= $Cuenta_idCuenta,	    
cesantias = $cesantias,	    
procesos = $procesos,	    
cargo = $cargo WHERE idEmpleado = $idEmpleado$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ModificarEstadoEmpleado` (IN `$idEmpleado` INT(11), IN `$estado` BOOLEAN)  NO SQL
UPDATE empleado set estado = $estado WHERE idEmpleado = $idEmpleado$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja_compensacion`
--

CREATE TABLE `caja_compensacion` (
  `idCaja_compensacion` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_retiro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `codCategoria` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `Apellidos` varchar(45) DEFAULT NULL,
  `nit` varchar(45) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `idCuenta` int(11) NOT NULL,
  `nombre_usuario` varchar(45) NOT NULL,
  `contraseña` varchar(45) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  `Rol_idrol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_producto_pedido`
--

CREATE TABLE `detalle_producto_pedido` (
  `idDetalle_Producto_Pedido` int(11) NOT NULL,
  `Cantidad` varchar(45) NOT NULL,
  `Cod_Pedido` int(11) NOT NULL,
  `Producto_has_Lote_Producto_has_Lotecol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `rh` varchar(45) NOT NULL,
  `celular` int(11) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `numero_hijos` int(11) NOT NULL,
  `telefono_fijo` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  `Pension_idPension` int(11) NOT NULL,
  `Caja_compensacion_idCaja_compensacion` int(11) NOT NULL,
  `Tipo_contrato_idTipo_contrato` int(11) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `barrio` varchar(45) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `Tipo_documento_idTipo_documento` int(11) NOT NULL,
  `Genero_idGenero` int(11) NOT NULL,
  `Cuenta_idCuenta` int(11) NOT NULL,
  `cesantias` varchar(45) NOT NULL,
  `procesos` varchar(45) NOT NULL,
  `cargo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_has_eps`
--

CREATE TABLE `empleado_has_eps` (
  `Empleado_idEmpleado` int(11) NOT NULL,
  `EPS_idEPS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `codEntradas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `total_cantidad` int(11) NOT NULL,
  `Empleado_idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas_has_materia_prima`
--

CREATE TABLE `entradas_has_materia_prima` (
  `Entradas_codEntradas` int(11) NOT NULL,
  `Materia_prima_codMateria_prima` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_vencimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

CREATE TABLE `eps` (
  `idEPS` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `abreviatura` varchar(45) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_retiro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `idGenero` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hijos`
--

CREATE TABLE `hijos` (
  `idHijos` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `Empleado_idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lote`
--

CREATE TABLE `lote` (
  `codLote` varchar(30) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_prima`
--

CREATE TABLE `materia_prima` (
  `codMateria_prima` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `presentacion` varchar(45) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `Unidad_medida_codUnidad_medida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_estudio`
--

CREATE TABLE `nivel_estudio` (
  `idNivel_estudio` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_estudio_has_empleado`
--

CREATE TABLE `nivel_estudio_has_empleado` (
  `Nivel_estudio_idNivel_estudio` int(11) NOT NULL,
  `Empleado_idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `codPedido` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `Cliente_idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pension`
--

CREATE TABLE `pension` (
  `idPension` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `abreviatura` varchar(45) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_retiro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacion`
--

CREATE TABLE `presentacion` (
  `codPresentacion` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

CREATE TABLE `produccion` (
  `codProduccion` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_finalizacion` date NOT NULL,
  `estado` varchar(45) NOT NULL,
  `Empleado_idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion_has_producto`
--

CREATE TABLE `produccion_has_producto` (
  `Produccion_codProduccion` int(11) NOT NULL,
  `Producto_codProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codProducto` int(11) NOT NULL,
  `existencias` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `Categoria_idCategoria` int(11) NOT NULL,
  `Unidad_medida_codUnidad_medida` int(11) NOT NULL,
  `Presentacion_codPresentacion` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_has_lote`
--

CREATE TABLE `producto_has_lote` (
  `Producto_has_Lotecol` varchar(45) NOT NULL,
  `Lote_idLote` int(11) NOT NULL,
  `CantidadxLote` int(11) NOT NULL,
  `Cantidad_Disponible` int(11) NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `fecha_lote` date NOT NULL,
  `cantidad_presentacion` varchar(45) NOT NULL,
  `Lote_codLote` varchar(30) NOT NULL,
  `Producto_idProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_has_materia_prima`
--

CREATE TABLE `producto_has_materia_prima` (
  `Producto_codProducto` int(11) NOT NULL,
  `Materia_prima_codMateria_prima` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesion`
--

CREATE TABLE `profesion` (
  `idProfesion` int(11) NOT NULL,
  `Profesioncol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesion_has_empleado`
--

CREATE TABLE `profesion_has_empleado` (
  `Profesion_idProfesion` int(11) NOT NULL,
  `Empleado_idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_has_ruta`
--

CREATE TABLE `rol_has_ruta` (
  `Rol_idrol` int(11) NOT NULL,
  `Ruta_idruta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta`
--

CREATE TABLE `ruta` (
  `idruta` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `ruta` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `codSalidas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `Empleado_idEmpleado` int(11) NOT NULL,
  `total_cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas_has_materia_prima`
--

CREATE TABLE `salidas_has_materia_prima` (
  `Salidas_codSalidas` int(11) NOT NULL,
  `Materia_prima_codMateria_prima` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas_has_producto_has_lote`
--

CREATE TABLE `salidas_has_producto_has_lote` (
  `Salidas_codSalidas` int(11) NOT NULL,
  `Producto_has_Lote_Producto_has_Lotecol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_contrato`
--

CREATE TABLE `tipo_contrato` (
  `idTipo_contrato` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `idTipo_documento` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_medida`
--

CREATE TABLE `unidad_medida` (
  `codUnidad_medida` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `abreviatura` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caja_compensacion`
--
ALTER TABLE `caja_compensacion`
  ADD PRIMARY KEY (`idCaja_compensacion`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codCategoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`idCuenta`,`Rol_idrol`),
  ADD KEY `fk_Cuenta_Rol1_idx` (`Rol_idrol`);

--
-- Indices de la tabla `detalle_producto_pedido`
--
ALTER TABLE `detalle_producto_pedido`
  ADD PRIMARY KEY (`idDetalle_Producto_Pedido`),
  ADD KEY `fk_Detalle_Producto_Pedido_Pedido1_idx` (`Cod_Pedido`),
  ADD KEY `fk_Detalle_Producto_Pedido_Producto_has_Lote1_idx` (`Producto_has_Lote_Producto_has_Lotecol`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`,`Pension_idPension`,`Caja_compensacion_idCaja_compensacion`,`Tipo_contrato_idTipo_contrato`,`Tipo_documento_idTipo_documento`,`Genero_idGenero`,`Cuenta_idCuenta`),
  ADD KEY `fk_Empleado_Pension1_idx` (`Pension_idPension`),
  ADD KEY `fk_Empleado_Caja_compensacion1_idx` (`Caja_compensacion_idCaja_compensacion`),
  ADD KEY `fk_Empleado_Tipo_contrato1_idx` (`Tipo_contrato_idTipo_contrato`),
  ADD KEY `fk_Empleado_Tipo_documento1_idx` (`Tipo_documento_idTipo_documento`),
  ADD KEY `fk_Empleado_Genero1_idx` (`Genero_idGenero`),
  ADD KEY `fk_Empleado_Cuenta1_idx` (`Cuenta_idCuenta`);

--
-- Indices de la tabla `empleado_has_eps`
--
ALTER TABLE `empleado_has_eps`
  ADD PRIMARY KEY (`Empleado_idEmpleado`,`EPS_idEPS`),
  ADD KEY `fk_Empleado_has_EPS_EPS1_idx` (`EPS_idEPS`),
  ADD KEY `fk_Empleado_has_EPS_Empleado1_idx` (`Empleado_idEmpleado`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`codEntradas`,`Empleado_idEmpleado`),
  ADD KEY `fk_Entradas_Empleado1_idx` (`Empleado_idEmpleado`);

--
-- Indices de la tabla `entradas_has_materia_prima`
--
ALTER TABLE `entradas_has_materia_prima`
  ADD PRIMARY KEY (`Entradas_codEntradas`,`Materia_prima_codMateria_prima`),
  ADD KEY `fk_Entradas_has_Materia_prima_Materia_prima1_idx` (`Materia_prima_codMateria_prima`),
  ADD KEY `fk_Entradas_has_Materia_prima_Entradas1_idx` (`Entradas_codEntradas`);

--
-- Indices de la tabla `eps`
--
ALTER TABLE `eps`
  ADD PRIMARY KEY (`idEPS`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`idGenero`);

--
-- Indices de la tabla `hijos`
--
ALTER TABLE `hijos`
  ADD PRIMARY KEY (`idHijos`,`Empleado_idEmpleado`),
  ADD KEY `fk_Hijos_Empleado_idx` (`Empleado_idEmpleado`);

--
-- Indices de la tabla `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`codLote`);

--
-- Indices de la tabla `materia_prima`
--
ALTER TABLE `materia_prima`
  ADD PRIMARY KEY (`codMateria_prima`,`Unidad_medida_codUnidad_medida`),
  ADD KEY `fk_Materia_prima_Unidad_medida1_idx` (`Unidad_medida_codUnidad_medida`);

--
-- Indices de la tabla `nivel_estudio`
--
ALTER TABLE `nivel_estudio`
  ADD PRIMARY KEY (`idNivel_estudio`);

--
-- Indices de la tabla `nivel_estudio_has_empleado`
--
ALTER TABLE `nivel_estudio_has_empleado`
  ADD PRIMARY KEY (`Nivel_estudio_idNivel_estudio`,`Empleado_idEmpleado`),
  ADD KEY `fk_Nivel_estudio_has_Empleado_Empleado1_idx` (`Empleado_idEmpleado`),
  ADD KEY `fk_Nivel_estudio_has_Empleado_Nivel_estudio1_idx` (`Nivel_estudio_idNivel_estudio`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`codPedido`,`Cliente_idCliente`),
  ADD KEY `fk_Pedido_Cliente1_idx` (`Cliente_idCliente`);

--
-- Indices de la tabla `pension`
--
ALTER TABLE `pension`
  ADD PRIMARY KEY (`idPension`);

--
-- Indices de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  ADD PRIMARY KEY (`codPresentacion`);

--
-- Indices de la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD PRIMARY KEY (`codProduccion`,`Empleado_idEmpleado`),
  ADD KEY `fk_Produccion_Empleado1_idx` (`Empleado_idEmpleado`);

--
-- Indices de la tabla `produccion_has_producto`
--
ALTER TABLE `produccion_has_producto`
  ADD PRIMARY KEY (`Produccion_codProduccion`,`Producto_codProducto`),
  ADD KEY `fk_Produccion_has_Producto_Producto1_idx` (`Producto_codProducto`),
  ADD KEY `fk_Produccion_has_Producto_Produccion1_idx` (`Produccion_codProduccion`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codProducto`,`Categoria_idCategoria`,`Unidad_medida_codUnidad_medida`,`Presentacion_codPresentacion`),
  ADD KEY `fk_Producto_Categoria1_idx` (`Categoria_idCategoria`),
  ADD KEY `fk_Producto_Unidad_medida1_idx` (`Unidad_medida_codUnidad_medida`),
  ADD KEY `fk_Producto_Presentacion1_idx` (`Presentacion_codPresentacion`);

--
-- Indices de la tabla `producto_has_lote`
--
ALTER TABLE `producto_has_lote`
  ADD PRIMARY KEY (`Producto_has_Lotecol`),
  ADD KEY `fk_Producto_has_Lote_Producto1_idx` (`Producto_idProducto`),
  ADD KEY `fk_Producto_has_Lote_Lote1_idx` (`Lote_codLote`);

--
-- Indices de la tabla `producto_has_materia_prima`
--
ALTER TABLE `producto_has_materia_prima`
  ADD PRIMARY KEY (`Producto_codProducto`,`Materia_prima_codMateria_prima`),
  ADD KEY `fk_Producto_has_Materia_prima_Materia_prima1_idx` (`Materia_prima_codMateria_prima`),
  ADD KEY `fk_Producto_has_Materia_prima_Producto1_idx` (`Producto_codProducto`);

--
-- Indices de la tabla `profesion`
--
ALTER TABLE `profesion`
  ADD PRIMARY KEY (`idProfesion`);

--
-- Indices de la tabla `profesion_has_empleado`
--
ALTER TABLE `profesion_has_empleado`
  ADD PRIMARY KEY (`Profesion_idProfesion`,`Empleado_idEmpleado`),
  ADD KEY `fk_Profesion_has_Empleado_Empleado1_idx` (`Empleado_idEmpleado`),
  ADD KEY `fk_Profesion_has_Empleado_Profesion1_idx` (`Profesion_idProfesion`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `rol_has_ruta`
--
ALTER TABLE `rol_has_ruta`
  ADD PRIMARY KEY (`Rol_idrol`,`Ruta_idruta`),
  ADD KEY `fk_Rol_has_Ruta_Ruta1_idx` (`Ruta_idruta`),
  ADD KEY `fk_Rol_has_Ruta_Rol1_idx` (`Rol_idrol`);

--
-- Indices de la tabla `ruta`
--
ALTER TABLE `ruta`
  ADD PRIMARY KEY (`idruta`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`codSalidas`,`Empleado_idEmpleado`),
  ADD KEY `fk_Salidas_Empleado1_idx` (`Empleado_idEmpleado`);

--
-- Indices de la tabla `salidas_has_materia_prima`
--
ALTER TABLE `salidas_has_materia_prima`
  ADD PRIMARY KEY (`Salidas_codSalidas`,`Materia_prima_codMateria_prima`),
  ADD KEY `fk_Salidas_has_Materia_prima_Materia_prima1_idx` (`Materia_prima_codMateria_prima`),
  ADD KEY `fk_Salidas_has_Materia_prima_Salidas1_idx` (`Salidas_codSalidas`);

--
-- Indices de la tabla `salidas_has_producto_has_lote`
--
ALTER TABLE `salidas_has_producto_has_lote`
  ADD PRIMARY KEY (`Salidas_codSalidas`,`Producto_has_Lote_Producto_has_Lotecol`),
  ADD KEY `fk_Salidas_has_Producto_has_Lote_Producto_has_Lote1_idx` (`Producto_has_Lote_Producto_has_Lotecol`),
  ADD KEY `fk_Salidas_has_Producto_has_Lote_Salidas1_idx` (`Salidas_codSalidas`);

--
-- Indices de la tabla `tipo_contrato`
--
ALTER TABLE `tipo_contrato`
  ADD PRIMARY KEY (`idTipo_contrato`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`idTipo_documento`);

--
-- Indices de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  ADD PRIMARY KEY (`codUnidad_medida`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `idCuenta` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD CONSTRAINT `fk_Cuenta_Rol1` FOREIGN KEY (`Rol_idrol`) REFERENCES `rol` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_producto_pedido`
--
ALTER TABLE `detalle_producto_pedido`
  ADD CONSTRAINT `fk_Detalle_Producto_Pedido_Pedido1` FOREIGN KEY (`Cod_Pedido`) REFERENCES `pedido` (`Cliente_idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Detalle_Producto_Pedido_Producto_has_Lote1` FOREIGN KEY (`Producto_has_Lote_Producto_has_Lotecol`) REFERENCES `producto_has_lote` (`Producto_has_Lotecol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `fk_Empleado_Caja_compensacion1` FOREIGN KEY (`Caja_compensacion_idCaja_compensacion`) REFERENCES `caja_compensacion` (`idCaja_compensacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Empleado_Cuenta1` FOREIGN KEY (`Cuenta_idCuenta`) REFERENCES `cuenta` (`idCuenta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Empleado_Genero1` FOREIGN KEY (`Genero_idGenero`) REFERENCES `genero` (`idGenero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Empleado_Pension1` FOREIGN KEY (`Pension_idPension`) REFERENCES `pension` (`idPension`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Empleado_Tipo_contrato1` FOREIGN KEY (`Tipo_contrato_idTipo_contrato`) REFERENCES `tipo_contrato` (`idTipo_contrato`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Empleado_Tipo_documento1` FOREIGN KEY (`Tipo_documento_idTipo_documento`) REFERENCES `tipo_documento` (`idTipo_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado_has_eps`
--
ALTER TABLE `empleado_has_eps`
  ADD CONSTRAINT `fk_Empleado_has_EPS_EPS1` FOREIGN KEY (`EPS_idEPS`) REFERENCES `eps` (`idEPS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Empleado_has_EPS_Empleado1` FOREIGN KEY (`Empleado_idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `fk_Entradas_Empleado1` FOREIGN KEY (`Empleado_idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `entradas_has_materia_prima`
--
ALTER TABLE `entradas_has_materia_prima`
  ADD CONSTRAINT `fk_Entradas_has_Materia_prima_Entradas1` FOREIGN KEY (`Entradas_codEntradas`) REFERENCES `entradas` (`codEntradas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Entradas_has_Materia_prima_Materia_prima1` FOREIGN KEY (`Materia_prima_codMateria_prima`) REFERENCES `materia_prima` (`codMateria_prima`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `hijos`
--
ALTER TABLE `hijos`
  ADD CONSTRAINT `fk_Hijos_Empleado` FOREIGN KEY (`Empleado_idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `materia_prima`
--
ALTER TABLE `materia_prima`
  ADD CONSTRAINT `fk_Materia_prima_Unidad_medida1` FOREIGN KEY (`Unidad_medida_codUnidad_medida`) REFERENCES `unidad_medida` (`codUnidad_medida`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `nivel_estudio_has_empleado`
--
ALTER TABLE `nivel_estudio_has_empleado`
  ADD CONSTRAINT `fk_Nivel_estudio_has_Empleado_Empleado1` FOREIGN KEY (`Empleado_idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Nivel_estudio_has_Empleado_Nivel_estudio1` FOREIGN KEY (`Nivel_estudio_idNivel_estudio`) REFERENCES `nivel_estudio` (`idNivel_estudio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_Pedido_Cliente1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD CONSTRAINT `fk_Produccion_Empleado1` FOREIGN KEY (`Empleado_idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `produccion_has_producto`
--
ALTER TABLE `produccion_has_producto`
  ADD CONSTRAINT `fk_Produccion_has_Producto_Produccion1` FOREIGN KEY (`Produccion_codProduccion`) REFERENCES `produccion` (`codProduccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Produccion_has_Producto_Producto1` FOREIGN KEY (`Producto_codProducto`) REFERENCES `producto` (`codProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_Producto_Categoria1` FOREIGN KEY (`Categoria_idCategoria`) REFERENCES `categoria` (`codCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Producto_Presentacion1` FOREIGN KEY (`Presentacion_codPresentacion`) REFERENCES `presentacion` (`codPresentacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Producto_Unidad_medida1` FOREIGN KEY (`Unidad_medida_codUnidad_medida`) REFERENCES `unidad_medida` (`codUnidad_medida`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto_has_lote`
--
ALTER TABLE `producto_has_lote`
  ADD CONSTRAINT `fk_Producto_has_Lote_Lote1` FOREIGN KEY (`Lote_codLote`) REFERENCES `lote` (`codLote`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Producto_has_Lote_Producto1` FOREIGN KEY (`Producto_idProducto`) REFERENCES `producto` (`codProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto_has_materia_prima`
--
ALTER TABLE `producto_has_materia_prima`
  ADD CONSTRAINT `fk_Producto_has_Materia_prima_Materia_prima1` FOREIGN KEY (`Materia_prima_codMateria_prima`) REFERENCES `materia_prima` (`codMateria_prima`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Producto_has_Materia_prima_Producto1` FOREIGN KEY (`Producto_codProducto`) REFERENCES `producto` (`codProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `profesion_has_empleado`
--
ALTER TABLE `profesion_has_empleado`
  ADD CONSTRAINT `fk_Profesion_has_Empleado_Empleado1` FOREIGN KEY (`Empleado_idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Profesion_has_Empleado_Profesion1` FOREIGN KEY (`Profesion_idProfesion`) REFERENCES `profesion` (`idProfesion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rol_has_ruta`
--
ALTER TABLE `rol_has_ruta`
  ADD CONSTRAINT `fk_Rol_has_Ruta_Rol1` FOREIGN KEY (`Rol_idrol`) REFERENCES `rol` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Rol_has_Ruta_Ruta1` FOREIGN KEY (`Ruta_idruta`) REFERENCES `ruta` (`idruta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD CONSTRAINT `fk_Salidas_Empleado1` FOREIGN KEY (`Empleado_idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `salidas_has_materia_prima`
--
ALTER TABLE `salidas_has_materia_prima`
  ADD CONSTRAINT `fk_Salidas_has_Materia_prima_Materia_prima1` FOREIGN KEY (`Materia_prima_codMateria_prima`) REFERENCES `materia_prima` (`codMateria_prima`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Salidas_has_Materia_prima_Salidas1` FOREIGN KEY (`Salidas_codSalidas`) REFERENCES `salidas` (`codSalidas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `salidas_has_producto_has_lote`
--
ALTER TABLE `salidas_has_producto_has_lote`
  ADD CONSTRAINT `fk_Salidas_has_Producto_has_Lote_Producto_has_Lote1` FOREIGN KEY (`Producto_has_Lote_Producto_has_Lotecol`) REFERENCES `producto_has_lote` (`Producto_has_Lotecol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Salidas_has_Producto_has_Lote_Salidas1` FOREIGN KEY (`Salidas_codSalidas`) REFERENCES `salidas` (`codSalidas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
