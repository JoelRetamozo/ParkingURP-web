-- MySQL Script generated by MySQL Workbench
-- 05/12/18 23:48:15
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema BD_ParkingURP
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema BD_ParkingURP
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `BD_ParkingURP` DEFAULT CHARACTER SET utf8 ;
USE `BD_ParkingURP` ;

-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Area`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Area` ;

CREATE TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Area` (
  `id_area` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `espacio` INT NOT NULL,
  `total` INT NOT NULL,
  `estado` CHAR(1) NOT NULL,
  `fecha_registro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_area`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Seccion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Seccion` ;

CREATE TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Seccion` (
  `id_seccion` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `estado` CHAR(1) NOT NULL,
  `id_area` INT NOT NULL,
  PRIMARY KEY (`id_seccion`, `id_area`),
  INDEX `fk_T_Seccion_T_Area1_idx` (`id_area` ASC),
  CONSTRAINT `fk_T_Seccion_T_Area1`
    FOREIGN KEY (`id_area`)
    REFERENCES `BD_ParkingURP`.`T_Area` (`id_area`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Persona`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Persona` ;

CREATE TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Persona` (
  `id_persona` INT NOT NULL AUTO_INCREMENT,
  `codigo` CHAR(9) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `ape_paterno` VARCHAR(45) NOT NULL,
  `ape_materno` VARCHAR(45) NOT NULL,
  `celular` CHAR(9) NULL,
  `correo` VARCHAR(255) NULL,
  `carrera` VARCHAR(150) NULL,
  `tipo_persona` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_persona`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Control`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Control` ;

CREATE TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Control` (
  `id_control` INT NOT NULL AUTO_INCREMENT,
  `entrada` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `salida` DATETIME NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `flag_quedarse` CHAR(1) NOT NULL,
  `motivo` VARCHAR(45) NULL,
  `id_persona` INT NOT NULL,
  PRIMARY KEY (`id_control`, `id_persona`),
  INDEX `fk_T_Control_T_Persona1_idx` (`id_persona` ASC),
  CONSTRAINT `fk_T_Control_T_Persona1`
    FOREIGN KEY (`id_persona`)
    REFERENCES `BD_ParkingURP`.`T_Persona` (`id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Usuario` ;

CREATE TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Usuario` (
  `codigo` CHAR(9) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `estado` CHAR(1) NOT NULL,
  `fecha_registro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `perfil` VARCHAR(45) NOT NULL,
  `id_persona` INT NOT NULL,
  PRIMARY KEY (`id_persona`, `codigo`),
  INDEX `fk_T_Usuario_T_Persona1_idx` (`id_persona` ASC),
  CONSTRAINT `fk_T_Usuario_T_Persona1`
    FOREIGN KEY (`id_persona`)
    REFERENCES `BD_ParkingURP`.`T_Persona` (`id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Vehiculo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Vehiculo` ;

CREATE TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Vehiculo` (
  `id_vehiculo` INT NOT NULL AUTO_INCREMENT,
  `placa` CHAR(15) NOT NULL,
  `descripcion` VARCHAR(150) NULL,
  `estado` CHAR(1) NOT NULL,
  `tipo_vehiculo` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_vehiculo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Persona_has_T_Vehiculo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Persona_has_T_Vehiculo` ;

CREATE TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Persona_has_T_Vehiculo` (
  `id_persona` INT NOT NULL,
  `id_vehiculo` INT NOT NULL,
  PRIMARY KEY (`id_persona`, `id_vehiculo`),
  INDEX `fk_T_Persona_has_T_Vehiculo_T_Vehiculo1_idx` (`id_vehiculo` ASC),
  INDEX `fk_T_Persona_has_T_Vehiculo_T_Persona1_idx` (`id_persona` ASC),
  CONSTRAINT `fk_T_Persona_has_T_Vehiculo_T_Persona1`
    FOREIGN KEY (`id_persona`)
    REFERENCES `BD_ParkingURP`.`T_Persona` (`id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_T_Persona_has_T_Vehiculo_T_Vehiculo1`
    FOREIGN KEY (`id_vehiculo`)
    REFERENCES `BD_ParkingURP`.`T_Vehiculo` (`id_vehiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Evento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Evento` ;

CREATE TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Evento` (
  `id_evento` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `decripcion` VARCHAR(255) NOT NULL,
  `fecha_inicio` DATE NOT NULL,
  `fecha_fin` DATE NOT NULL,
  `estado` CHAR(1) NOT NULL,
  PRIMARY KEY (`id_evento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Estacionamiento_Cercano`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Estacionamiento_Cercano` ;

CREATE TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Estacionamiento_Cercano` (
  `id_estacionamiento_cercano` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NOT NULL,
  `latitud` VARCHAR(255) NOT NULL,
  `longitud` VARCHAR(255) NOT NULL,
  `fecha_registro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_estacionamiento_cercano`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Area_has_T_Evento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Area_has_T_Evento` ;

CREATE TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Area_has_T_Evento` (
  `id_area` INT NOT NULL,
  `id_evento` INT NOT NULL,
  PRIMARY KEY (`id_area`, `id_evento`),
  INDEX `fk_T_Area_has_T_Evento_T_Evento1_idx` (`id_evento` ASC),
  INDEX `fk_T_Area_has_T_Evento_T_Area1_idx` (`id_area` ASC),
  CONSTRAINT `fk_T_Area_has_T_Evento_T_Area1`
    FOREIGN KEY (`id_area`)
    REFERENCES `BD_ParkingURP`.`T_Area` (`id_area`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_T_Area_has_T_Evento_T_Evento1`
    FOREIGN KEY (`id_evento`)
    REFERENCES `BD_ParkingURP`.`T_Evento` (`id_evento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Invitado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Invitado` ;

CREATE TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Invitado` (
  `id_invitado` INT NOT NULL AUTO_INCREMENT,
  `DNI` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_invitado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Invitado_has_T_Control`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Invitado_has_T_Control` ;

CREATE TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Invitado_has_T_Control` (
  `id_invitado` INT NOT NULL,
  `id_control` INT NOT NULL,
  PRIMARY KEY (`id_invitado`, `id_control`),
  INDEX `fk_T_Invitado_has_T_Control_T_Control1_idx` (`id_control` ASC),
  INDEX `fk_T_Invitado_has_T_Control_T_Invitado1_idx` (`id_invitado` ASC),
  CONSTRAINT `fk_T_Invitado_has_T_Control_T_Invitado1`
    FOREIGN KEY (`id_invitado`)
    REFERENCES `BD_ParkingURP`.`T_Invitado` (`id_invitado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_T_Invitado_has_T_Control_T_Control1`
    FOREIGN KEY (`id_control`)
    REFERENCES `BD_ParkingURP`.`T_Control` (`id_control`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`WS_Vehiculo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`WS_Vehiculo` ;

CREATE TABLE IF NOT EXISTS `BD_ParkingURP`.`WS_Vehiculo` (
  `id_vehiculo` INT NOT NULL AUTO_INCREMENT,
  `placa` CHAR(6) NOT NULL,
  `marca` VARCHAR(80) NOT NULL,
  `modelo` VARCHAR(80) NOT NULL,
  `color` VARCHAR(80) NOT NULL,
  `tipo_vehiculo` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`id_vehiculo`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `BD_ParkingURP`.`WS_Vehiculo`
-- -----------------------------------------------------
START TRANSACTION;
USE `BD_ParkingURP`;
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`id_vehiculo`, `placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES (1, 'COB673', 'Hyundai', 'Tucson', 'Negro', 'Auto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`id_vehiculo`, `placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES (2, 'FSR893', 'Toyota', 'Hilux', 'Rojo', 'Auto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`id_vehiculo`, `placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES (3, 'GTR753', 'Nissan', 'GTR 8', 'Azul', 'Auto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`id_vehiculo`, `placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES (4, 'HSB285', 'Nissan', 'Skyline', 'Azul', 'Auto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`id_vehiculo`, `placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES (5, 'THS946', 'Toyota', 'Supra', 'Anaranjado', 'Auto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`id_vehiculo`, `placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES (6, 'JKL845', 'Hyundai', 'Elantra', 'Negro', 'Auto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`id_vehiculo`, `placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES (7, 'KCL812', 'Honda', 'Civic', 'Marron', 'Auto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`id_vehiculo`, `placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES (8, 'MZC175', 'Suzuki', 'RG500', 'Azul', 'Moto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`id_vehiculo`, `placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES (9, 'MCV345', 'Suzuki', 'T500', 'Negro', 'Moto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`id_vehiculo`, `placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES (10, 'NGE937', 'Ducati', 'Scrambler', 'Rojo', 'Moto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`id_vehiculo`, `placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES (11, 'NMD695', 'Kawasaki', 'H2 750', 'Blanco y Azul', 'Moto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`id_vehiculo`, `placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES (12, 'NGD893', 'Yamaha', 'YZ 125', 'Verde y Amarillo', 'Moto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`id_vehiculo`, `placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES (13, 'MJD957', 'KTM', 'MC5', 'Rojo y Blanco', 'Moto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`id_vehiculo`, `placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES (14, 'NLD045', 'Garelli', '50 Sport', 'Blanco', 'Moto');

COMMIT;

