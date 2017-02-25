-- MySQL Script generated by MySQL Workbench
-- 02/24/17 17:53:49
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Ramspebit
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Ramspebit
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Ramspebit` DEFAULT CHARACTER SET utf8 ;
USE `Ramspebit` ;

-- -----------------------------------------------------
-- Table `Ramspebit`.`Cargo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Cargo` (
  `idCargo` INT NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCargo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Cesantias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Cesantias` (
  `idCesantias` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `abreviatura` VARCHAR(45) NULL,
  PRIMARY KEY (`idCesantias`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Pension`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Pension` (
  `idPension` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `abreviatura` VARCHAR(45) NULL,
  `fecha_ingreso` DATE NULL,
  `fecha_retiro` DATE NULL,
  PRIMARY KEY (`idPension`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Caja_compensacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Caja_compensacion` (
  `idCaja_compensacion` INT NOT NULL,
  `descripcion` VARCHAR(45) NULL,
  `fecha_ingreso` DATE NULL,
  `fecha_retiro` DATE NULL,
  PRIMARY KEY (`idCaja_compensacion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Tipo_contrato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Tipo_contrato` (
  `idTipo_contrato` INT NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTipo_contrato`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Proceso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Proceso` (
  `idProceso` INT NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idProceso`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Tipo_documento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Tipo_documento` (
  `idTipo_documento` INT NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTipo_documento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Genero`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Genero` (
  `idGenero` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idGenero`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Rol` (
  `idrol` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  `estado` TINYINT(1) NOT NULL,
  PRIMARY KEY (`idrol`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Cuenta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Cuenta` (
  `idCuenta` INT NOT NULL AUTO_INCREMENT,
  `nombre_usuario` VARCHAR(45) NOT NULL,
  `contraseña` VARCHAR(45) NOT NULL,
  `correo_electronico` VARCHAR(100) NOT NULL,
  `estado` TINYINT(1) NOT NULL,
  `Rol_idrol` INT NOT NULL,
  PRIMARY KEY (`idCuenta`, `Rol_idrol`),
  INDEX `fk_Cuenta_Rol1_idx` (`Rol_idrol` ASC),
  CONSTRAINT `fk_Cuenta_Rol1`
    FOREIGN KEY (`Rol_idrol`)
    REFERENCES `Ramspebit`.`Rol` (`idrol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Empleado` (
  `idEmpleado` INT NOT NULL,
  `nombres` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `rh` VARCHAR(45) NOT NULL,
  `celular` INT NOT NULL,
  `fecha_nacimiento` DATE NOT NULL,
  `correo_electronico` VARCHAR(100) NOT NULL,
  `fecha_ingreso` DATE NOT NULL,
  `numero_hijos` INT NOT NULL,
  `telefono_fijo` INT NOT NULL,
  `estado` TINYINT(1) NOT NULL,
  `Cargo_idCargo` INT NOT NULL,
  `Cesantias_idCesantias` INT NOT NULL,
  `Pension_idPension` INT NOT NULL,
  `Caja_compensacion_idCaja_compensacion` INT NOT NULL,
  `Tipo_contrato_idTipo_contrato` INT NOT NULL,
  `Proceso_idProceso` INT NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `barrio` VARCHAR(45) NOT NULL,
  `municipio` VARCHAR(45) NOT NULL,
  `Tipo_documento_idTipo_documento` INT NOT NULL,
  `Genero_idGenero` INT NOT NULL,
  `Cuenta_idCuenta` INT NOT NULL,
  PRIMARY KEY (`idEmpleado`, `Cargo_idCargo`, `Cesantias_idCesantias`, `Pension_idPension`, `Caja_compensacion_idCaja_compensacion`, `Tipo_contrato_idTipo_contrato`, `Proceso_idProceso`, `Tipo_documento_idTipo_documento`, `Genero_idGenero`, `Cuenta_idCuenta`),
  INDEX `fk_Empleado_Cargo1_idx` (`Cargo_idCargo` ASC),
  INDEX `fk_Empleado_Cesantias1_idx` (`Cesantias_idCesantias` ASC),
  INDEX `fk_Empleado_Pension1_idx` (`Pension_idPension` ASC),
  INDEX `fk_Empleado_Caja_compensacion1_idx` (`Caja_compensacion_idCaja_compensacion` ASC),
  INDEX `fk_Empleado_Tipo_contrato1_idx` (`Tipo_contrato_idTipo_contrato` ASC),
  INDEX `fk_Empleado_Proceso1_idx` (`Proceso_idProceso` ASC),
  INDEX `fk_Empleado_Tipo_documento1_idx` (`Tipo_documento_idTipo_documento` ASC),
  INDEX `fk_Empleado_Genero1_idx` (`Genero_idGenero` ASC),
  INDEX `fk_Empleado_Cuenta1_idx` (`Cuenta_idCuenta` ASC),
  CONSTRAINT `fk_Empleado_Cargo1`
    FOREIGN KEY (`Cargo_idCargo`)
    REFERENCES `Ramspebit`.`Cargo` (`idCargo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empleado_Cesantias1`
    FOREIGN KEY (`Cesantias_idCesantias`)
    REFERENCES `Ramspebit`.`Cesantias` (`idCesantias`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empleado_Pension1`
    FOREIGN KEY (`Pension_idPension`)
    REFERENCES `Ramspebit`.`Pension` (`idPension`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empleado_Caja_compensacion1`
    FOREIGN KEY (`Caja_compensacion_idCaja_compensacion`)
    REFERENCES `Ramspebit`.`Caja_compensacion` (`idCaja_compensacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empleado_Tipo_contrato1`
    FOREIGN KEY (`Tipo_contrato_idTipo_contrato`)
    REFERENCES `Ramspebit`.`Tipo_contrato` (`idTipo_contrato`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empleado_Proceso1`
    FOREIGN KEY (`Proceso_idProceso`)
    REFERENCES `Ramspebit`.`Proceso` (`idProceso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empleado_Tipo_documento1`
    FOREIGN KEY (`Tipo_documento_idTipo_documento`)
    REFERENCES `Ramspebit`.`Tipo_documento` (`idTipo_documento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empleado_Genero1`
    FOREIGN KEY (`Genero_idGenero`)
    REFERENCES `Ramspebit`.`Genero` (`idGenero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empleado_Cuenta1`
    FOREIGN KEY (`Cuenta_idCuenta`)
    REFERENCES `Ramspebit`.`Cuenta` (`idCuenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Nivel_estudio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Nivel_estudio` (
  `idNivel_estudio` INT NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idNivel_estudio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Profesion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Profesion` (
  `idProfesion` INT NOT NULL,
  `Profesioncol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idProfesion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`EPS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`EPS` (
  `idEPS` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `abreviatura` VARCHAR(45) NULL,
  `fecha_ingreso` DATE NULL,
  `fecha_retiro` DATE NULL,
  PRIMARY KEY (`idEPS`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Hijos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Hijos` (
  `idHijos` INT NOT NULL,
  `fecha_nacimiento` DATE NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `Empleado_idEmpleado` INT NOT NULL,
  PRIMARY KEY (`idHijos`, `Empleado_idEmpleado`),
  INDEX `fk_Hijos_Empleado_idx` (`Empleado_idEmpleado` ASC),
  CONSTRAINT `fk_Hijos_Empleado`
    FOREIGN KEY (`Empleado_idEmpleado`)
    REFERENCES `Ramspebit`.`Empleado` (`idEmpleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Categoria` (
  `codCategoria` INT NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`codCategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Unidad_medida`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Unidad_medida` (
  `codUnidad_medida` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `abreviatura` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`codUnidad_medida`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Presentacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Presentacion` (
  `codPresentacion` INT NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`codPresentacion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Producto` (
  `codProducto` INT NOT NULL,
  `existencias` INT NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  `Categoria_idCategoria` INT NOT NULL,
  `Unidad_medida_codUnidad_medida` INT NOT NULL,
  `Presentacion_codPresentacion` INT NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`codProducto`, `Categoria_idCategoria`, `Unidad_medida_codUnidad_medida`, `Presentacion_codPresentacion`),
  INDEX `fk_Producto_Categoria1_idx` (`Categoria_idCategoria` ASC),
  INDEX `fk_Producto_Unidad_medida1_idx` (`Unidad_medida_codUnidad_medida` ASC),
  INDEX `fk_Producto_Presentacion1_idx` (`Presentacion_codPresentacion` ASC),
  CONSTRAINT `fk_Producto_Categoria1`
    FOREIGN KEY (`Categoria_idCategoria`)
    REFERENCES `Ramspebit`.`Categoria` (`codCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Producto_Unidad_medida1`
    FOREIGN KEY (`Unidad_medida_codUnidad_medida`)
    REFERENCES `Ramspebit`.`Unidad_medida` (`codUnidad_medida`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Producto_Presentacion1`
    FOREIGN KEY (`Presentacion_codPresentacion`)
    REFERENCES `Ramspebit`.`Presentacion` (`codPresentacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Lote`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Lote` (
  `codLote` VARCHAR(30) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  `cantidad` INT NOT NULL,
  `estado` TINYINT(1) NOT NULL,
  PRIMARY KEY (`codLote`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Cliente` (
  `idCliente` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `Apellidos` VARCHAR(45) NULL,
  `nit` VARCHAR(45) NULL,
  `telefono` VARCHAR(15) NULL,
  `direccion` VARCHAR(45) NULL,
  PRIMARY KEY (`idCliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Producto_has_Lote`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Producto_has_Lote` (
  `Producto_has_Lotecol` VARCHAR(45) NOT NULL,
  `Lote_idLote` INT NOT NULL,
  `CantidadxLote` INT NOT NULL,
  `Cantidad_Disponible` INT NOT NULL,
  `fecha_vencimiento` DATE NOT NULL,
  `fecha_lote` DATE NOT NULL,
  `cantidad_presentacion` VARCHAR(45) NOT NULL,
  `Lote_codLote` VARCHAR(30) NOT NULL,
  `Producto_idProducto` INT NOT NULL,
  PRIMARY KEY (`Producto_has_Lotecol`),
  INDEX `fk_Producto_has_Lote_Producto1_idx` (`Producto_idProducto` ASC),
  INDEX `fk_Producto_has_Lote_Lote1_idx` (`Lote_codLote` ASC),
  CONSTRAINT `fk_Producto_has_Lote_Producto1`
    FOREIGN KEY (`Producto_idProducto`)
    REFERENCES `Ramspebit`.`Producto` (`codProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Producto_has_Lote_Lote1`
    FOREIGN KEY (`Lote_codLote`)
    REFERENCES `Ramspebit`.`Lote` (`codLote`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Entradas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Entradas` (
  `codEntradas` INT NOT NULL,
  `fecha` DATE NOT NULL,
  `estado` TINYINT(1) NOT NULL,
  `total_cantidad` INT NOT NULL,
  `Empleado_idEmpleado` INT NOT NULL,
  PRIMARY KEY (`codEntradas`, `Empleado_idEmpleado`),
  INDEX `fk_Entradas_Empleado1_idx` (`Empleado_idEmpleado` ASC),
  CONSTRAINT `fk_Entradas_Empleado1`
    FOREIGN KEY (`Empleado_idEmpleado`)
    REFERENCES `Ramspebit`.`Empleado` (`idEmpleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Salidas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Salidas` (
  `codSalidas` INT NOT NULL,
  `fecha` DATE NOT NULL,
  `estado` TINYINT(1) NOT NULL,
  `Empleado_idEmpleado` INT NOT NULL,
  `total_cantidad` INT NOT NULL,
  PRIMARY KEY (`codSalidas`, `Empleado_idEmpleado`),
  INDEX `fk_Salidas_Empleado1_idx` (`Empleado_idEmpleado` ASC),
  CONSTRAINT `fk_Salidas_Empleado1`
    FOREIGN KEY (`Empleado_idEmpleado`)
    REFERENCES `Ramspebit`.`Empleado` (`idEmpleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Ruta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Ruta` (
  `idruta` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `ruta` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idruta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Materia_prima`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Materia_prima` (
  `codMateria_prima` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `precio` INT NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  `presentacion` VARCHAR(45) NOT NULL,
  `estado` TINYINT(1) NOT NULL,
  `Unidad_medida_codUnidad_medida` INT NOT NULL,
  PRIMARY KEY (`codMateria_prima`, `Unidad_medida_codUnidad_medida`),
  INDEX `fk_Materia_prima_Unidad_medida1_idx` (`Unidad_medida_codUnidad_medida` ASC),
  CONSTRAINT `fk_Materia_prima_Unidad_medida1`
    FOREIGN KEY (`Unidad_medida_codUnidad_medida`)
    REFERENCES `Ramspebit`.`Unidad_medida` (`codUnidad_medida`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Rol_has_Ruta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Rol_has_Ruta` (
  `Rol_idrol` INT NOT NULL,
  `Ruta_idruta` INT NOT NULL,
  PRIMARY KEY (`Rol_idrol`, `Ruta_idruta`),
  INDEX `fk_Rol_has_Ruta_Ruta1_idx` (`Ruta_idruta` ASC),
  INDEX `fk_Rol_has_Ruta_Rol1_idx` (`Rol_idrol` ASC),
  CONSTRAINT `fk_Rol_has_Ruta_Rol1`
    FOREIGN KEY (`Rol_idrol`)
    REFERENCES `Ramspebit`.`Rol` (`idrol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Rol_has_Ruta_Ruta1`
    FOREIGN KEY (`Ruta_idruta`)
    REFERENCES `Ramspebit`.`Ruta` (`idruta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Entradas_has_Materia_prima`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Entradas_has_Materia_prima` (
  `Entradas_codEntradas` INT NOT NULL,
  `Materia_prima_codMateria_prima` INT NOT NULL,
  `cantidad` INT NOT NULL,
  `fecha_vencimiento` DATE NOT NULL,
  PRIMARY KEY (`Entradas_codEntradas`, `Materia_prima_codMateria_prima`),
  INDEX `fk_Entradas_has_Materia_prima_Materia_prima1_idx` (`Materia_prima_codMateria_prima` ASC),
  INDEX `fk_Entradas_has_Materia_prima_Entradas1_idx` (`Entradas_codEntradas` ASC),
  CONSTRAINT `fk_Entradas_has_Materia_prima_Entradas1`
    FOREIGN KEY (`Entradas_codEntradas`)
    REFERENCES `Ramspebit`.`Entradas` (`codEntradas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Entradas_has_Materia_prima_Materia_prima1`
    FOREIGN KEY (`Materia_prima_codMateria_prima`)
    REFERENCES `Ramspebit`.`Materia_prima` (`codMateria_prima`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Salidas_has_Materia_prima`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Salidas_has_Materia_prima` (
  `Salidas_codSalidas` INT NOT NULL,
  `Materia_prima_codMateria_prima` INT NOT NULL,
  `cantidad` INT NOT NULL,
  PRIMARY KEY (`Salidas_codSalidas`, `Materia_prima_codMateria_prima`),
  INDEX `fk_Salidas_has_Materia_prima_Materia_prima1_idx` (`Materia_prima_codMateria_prima` ASC),
  INDEX `fk_Salidas_has_Materia_prima_Salidas1_idx` (`Salidas_codSalidas` ASC),
  CONSTRAINT `fk_Salidas_has_Materia_prima_Salidas1`
    FOREIGN KEY (`Salidas_codSalidas`)
    REFERENCES `Ramspebit`.`Salidas` (`codSalidas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Salidas_has_Materia_prima_Materia_prima1`
    FOREIGN KEY (`Materia_prima_codMateria_prima`)
    REFERENCES `Ramspebit`.`Materia_prima` (`codMateria_prima`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Producto_has_Materia_prima`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Producto_has_Materia_prima` (
  `Producto_codProducto` INT NOT NULL,
  `Materia_prima_codMateria_prima` INT NOT NULL,
  `Cantidad` INT NOT NULL,
  PRIMARY KEY (`Producto_codProducto`, `Materia_prima_codMateria_prima`),
  INDEX `fk_Producto_has_Materia_prima_Materia_prima1_idx` (`Materia_prima_codMateria_prima` ASC),
  INDEX `fk_Producto_has_Materia_prima_Producto1_idx` (`Producto_codProducto` ASC),
  CONSTRAINT `fk_Producto_has_Materia_prima_Producto1`
    FOREIGN KEY (`Producto_codProducto`)
    REFERENCES `Ramspebit`.`Producto` (`codProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Producto_has_Materia_prima_Materia_prima1`
    FOREIGN KEY (`Materia_prima_codMateria_prima`)
    REFERENCES `Ramspebit`.`Materia_prima` (`codMateria_prima`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Pedido` (
  `codPedido` INT NOT NULL,
  `fecha` DATE NOT NULL,
  `Cliente_idCliente` INT NOT NULL,
  PRIMARY KEY (`codPedido`, `Cliente_idCliente`),
  INDEX `fk_Pedido_Cliente1_idx` (`Cliente_idCliente` ASC),
  CONSTRAINT `fk_Pedido_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `Ramspebit`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Profesion_has_Empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Profesion_has_Empleado` (
  `Profesion_idProfesion` INT NOT NULL,
  `Empleado_idEmpleado` INT NOT NULL,
  PRIMARY KEY (`Profesion_idProfesion`, `Empleado_idEmpleado`),
  INDEX `fk_Profesion_has_Empleado_Empleado1_idx` (`Empleado_idEmpleado` ASC),
  INDEX `fk_Profesion_has_Empleado_Profesion1_idx` (`Profesion_idProfesion` ASC),
  CONSTRAINT `fk_Profesion_has_Empleado_Profesion1`
    FOREIGN KEY (`Profesion_idProfesion`)
    REFERENCES `Ramspebit`.`Profesion` (`idProfesion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Profesion_has_Empleado_Empleado1`
    FOREIGN KEY (`Empleado_idEmpleado`)
    REFERENCES `Ramspebit`.`Empleado` (`idEmpleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Nivel_estudio_has_Empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Nivel_estudio_has_Empleado` (
  `Nivel_estudio_idNivel_estudio` INT NOT NULL,
  `Empleado_idEmpleado` INT NOT NULL,
  PRIMARY KEY (`Nivel_estudio_idNivel_estudio`, `Empleado_idEmpleado`),
  INDEX `fk_Nivel_estudio_has_Empleado_Empleado1_idx` (`Empleado_idEmpleado` ASC),
  INDEX `fk_Nivel_estudio_has_Empleado_Nivel_estudio1_idx` (`Nivel_estudio_idNivel_estudio` ASC),
  CONSTRAINT `fk_Nivel_estudio_has_Empleado_Nivel_estudio1`
    FOREIGN KEY (`Nivel_estudio_idNivel_estudio`)
    REFERENCES `Ramspebit`.`Nivel_estudio` (`idNivel_estudio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Nivel_estudio_has_Empleado_Empleado1`
    FOREIGN KEY (`Empleado_idEmpleado`)
    REFERENCES `Ramspebit`.`Empleado` (`idEmpleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Detalle_Producto_Pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Detalle_Producto_Pedido` (
  `idDetalle_Producto_Pedido` INT NOT NULL,
  `Cantidad` VARCHAR(45) NOT NULL,
  `Cod_Pedido` INT NOT NULL,
  `Producto_has_Lote_Producto_has_Lotecol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idDetalle_Producto_Pedido`),
  INDEX `fk_Detalle_Producto_Pedido_Pedido1_idx` (`Cod_Pedido` ASC),
  INDEX `fk_Detalle_Producto_Pedido_Producto_has_Lote1_idx` (`Producto_has_Lote_Producto_has_Lotecol` ASC),
  CONSTRAINT `fk_Detalle_Producto_Pedido_Pedido1`
    FOREIGN KEY (`Cod_Pedido`)
    REFERENCES `Ramspebit`.`Pedido` (`Cliente_idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Detalle_Producto_Pedido_Producto_has_Lote1`
    FOREIGN KEY (`Producto_has_Lote_Producto_has_Lotecol`)
    REFERENCES `Ramspebit`.`Producto_has_Lote` (`Producto_has_Lotecol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Empleado_has_EPS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Empleado_has_EPS` (
  `Empleado_idEmpleado` INT NOT NULL,
  `EPS_idEPS` INT NOT NULL,
  PRIMARY KEY (`Empleado_idEmpleado`, `EPS_idEPS`),
  INDEX `fk_Empleado_has_EPS_EPS1_idx` (`EPS_idEPS` ASC),
  INDEX `fk_Empleado_has_EPS_Empleado1_idx` (`Empleado_idEmpleado` ASC),
  CONSTRAINT `fk_Empleado_has_EPS_Empleado1`
    FOREIGN KEY (`Empleado_idEmpleado`)
    REFERENCES `Ramspebit`.`Empleado` (`idEmpleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empleado_has_EPS_EPS1`
    FOREIGN KEY (`EPS_idEPS`)
    REFERENCES `Ramspebit`.`EPS` (`idEPS`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Salidas_has_Producto_has_Lote`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Salidas_has_Producto_has_Lote` (
  `Salidas_codSalidas` INT NOT NULL,
  `Producto_has_Lote_Producto_has_Lotecol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Salidas_codSalidas`, `Producto_has_Lote_Producto_has_Lotecol`),
  INDEX `fk_Salidas_has_Producto_has_Lote_Producto_has_Lote1_idx` (`Producto_has_Lote_Producto_has_Lotecol` ASC),
  INDEX `fk_Salidas_has_Producto_has_Lote_Salidas1_idx` (`Salidas_codSalidas` ASC),
  CONSTRAINT `fk_Salidas_has_Producto_has_Lote_Salidas1`
    FOREIGN KEY (`Salidas_codSalidas`)
    REFERENCES `Ramspebit`.`Salidas` (`codSalidas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Salidas_has_Producto_has_Lote_Producto_has_Lote1`
    FOREIGN KEY (`Producto_has_Lote_Producto_has_Lotecol`)
    REFERENCES `Ramspebit`.`Producto_has_Lote` (`Producto_has_Lotecol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Produccion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Produccion` (
  `codProduccion` INT NOT NULL,
  `fecha_inicio` DATE NOT NULL,
  `fecha_finalizacion` DATE NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `Empleado_idEmpleado` INT NOT NULL,
  PRIMARY KEY (`codProduccion`, `Empleado_idEmpleado`),
  INDEX `fk_Produccion_Empleado1_idx` (`Empleado_idEmpleado` ASC),
  CONSTRAINT `fk_Produccion_Empleado1`
    FOREIGN KEY (`Empleado_idEmpleado`)
    REFERENCES `Ramspebit`.`Empleado` (`idEmpleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ramspebit`.`Produccion_has_Producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ramspebit`.`Produccion_has_Producto` (
  `Produccion_codProduccion` INT NOT NULL,
  `Producto_codProducto` INT NOT NULL,
  `cantidad` INT NOT NULL,
  PRIMARY KEY (`Produccion_codProduccion`, `Producto_codProducto`),
  INDEX `fk_Produccion_has_Producto_Producto1_idx` (`Producto_codProducto` ASC),
  INDEX `fk_Produccion_has_Producto_Produccion1_idx` (`Produccion_codProduccion` ASC),
  CONSTRAINT `fk_Produccion_has_Producto_Produccion1`
    FOREIGN KEY (`Produccion_codProduccion`)
    REFERENCES `Ramspebit`.`Produccion` (`codProduccion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Produccion_has_Producto_Producto1`
    FOREIGN KEY (`Producto_codProducto`)
    REFERENCES `Ramspebit`.`Producto` (`codProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
