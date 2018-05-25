SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `BD_ParkingURP` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `BD_ParkingURP` ;

-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Area`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Area` ;

CREATE  TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Area` (
  `id_area` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `espacio` INT NOT NULL ,
  `total` INT NOT NULL ,
  `estado` CHAR(1) NOT NULL ,
  `fecha_registro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  PRIMARY KEY (`id_area`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Seccion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Seccion` ;

CREATE  TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Seccion` (
  `id_seccion` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `estado` CHAR(1) NOT NULL ,
  `id_area` INT NOT NULL ,
  PRIMARY KEY (`id_seccion`, `id_area`) ,
  INDEX `fk_T_Seccion_T_Area1_idx` (`id_area` ASC) ,
  CONSTRAINT `fk_T_Seccion_T_Area1`
    FOREIGN KEY (`id_area` )
    REFERENCES `BD_ParkingURP`.`T_Area` (`id_area` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Persona`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Persona` ;

CREATE  TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Persona` (
  `codigo` CHAR(9) NOT NULL ,
  `nombre` VARCHAR(45) NOT NULL ,
  `ape_paterno` VARCHAR(45) NOT NULL ,
  `ape_materno` VARCHAR(45) NOT NULL ,
  `celular` CHAR(9) NULL ,
  `correo` VARCHAR(255) NULL ,
  `carrera` VARCHAR(150) NULL ,
  `tipo_persona` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`codigo`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Control`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Control` ;

CREATE  TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Control` (
  `id_control` INT NOT NULL AUTO_INCREMENT ,
  `entrada` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `salida` DATETIME NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP ,
  `flag_quedarse` CHAR(1) NOT NULL ,
  `motivo` VARCHAR(45) NULL ,
  `codigo` CHAR(9) NOT NULL ,
  PRIMARY KEY (`id_control`, `codigo`) ,
  INDEX `fk_T_Control_T_Persona1_idx` (`codigo` ASC) ,
  CONSTRAINT `fk_T_Control_T_Persona1`
    FOREIGN KEY (`codigo` )
    REFERENCES `BD_ParkingURP`.`T_Persona` (`codigo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Usuario` ;

CREATE  TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Usuario` (
  `codigo` CHAR(9) NOT NULL ,
  `password` VARCHAR(45) NOT NULL ,
  `estado` CHAR(1) NOT NULL ,
  `fecha_registro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `perfil` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`codigo`) ,
  INDEX `fk_T_Usuario_T_Persona1_idx` (`codigo` ASC) ,
  CONSTRAINT `fk_T_Usuario_T_Persona1`
    FOREIGN KEY (`codigo` )
    REFERENCES `BD_ParkingURP`.`T_Persona` (`codigo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Vehiculo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Vehiculo` ;

CREATE  TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Vehiculo` (
  `placa` CHAR(15) NOT NULL ,
  `descripcion` VARCHAR(150) NULL ,
  `estado` CHAR(1) NOT NULL ,
  `tipo_vehiculo` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`placa`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Persona_has_T_Vehiculo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Persona_has_T_Vehiculo` ;

CREATE  TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Persona_has_T_Vehiculo` (
  `codigo` CHAR(9) NOT NULL ,
  `placa` CHAR(15) NOT NULL ,
  PRIMARY KEY (`codigo`, `placa`) ,
  INDEX `fk_T_Persona_has_T_Vehiculo_T_Persona1_idx` (`codigo` ASC) ,
  INDEX `fk_T_Persona_has_T_Vehiculo_T_Vehiculo1_idx` (`placa` ASC) ,
  CONSTRAINT `fk_T_Persona_has_T_Vehiculo_T_Persona1`
    FOREIGN KEY (`codigo` )
    REFERENCES `BD_ParkingURP`.`T_Persona` (`codigo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_T_Persona_has_T_Vehiculo_T_Vehiculo1`
    FOREIGN KEY (`placa` )
    REFERENCES `BD_ParkingURP`.`T_Vehiculo` (`placa` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Evento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Evento` ;

CREATE  TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Evento` (
  `id_evento` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `decripcion` VARCHAR(255) NOT NULL ,
  `fecha_inicio` DATE NOT NULL ,
  `fecha_fin` DATE NOT NULL ,
  `estado` CHAR(1) NOT NULL ,
  PRIMARY KEY (`id_evento`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Estacionamiento_Cercano`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Estacionamiento_Cercano` ;

CREATE  TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Estacionamiento_Cercano` (
  `id_estacionamiento_cercano` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(255) NOT NULL ,
  `latitud` VARCHAR(255) NOT NULL ,
  `longitud` VARCHAR(255) NOT NULL ,
  `fecha_registro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  PRIMARY KEY (`id_estacionamiento_cercano`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Area_has_T_Evento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Area_has_T_Evento` ;

CREATE  TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Area_has_T_Evento` (
  `id_area` INT NOT NULL ,
  `id_evento` INT NOT NULL ,
  PRIMARY KEY (`id_area`, `id_evento`) ,
  INDEX `fk_T_Area_has_T_Evento_T_Evento1_idx` (`id_evento` ASC) ,
  INDEX `fk_T_Area_has_T_Evento_T_Area1_idx` (`id_area` ASC) ,
  CONSTRAINT `fk_T_Area_has_T_Evento_T_Area1`
    FOREIGN KEY (`id_area` )
    REFERENCES `BD_ParkingURP`.`T_Area` (`id_area` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_T_Area_has_T_Evento_T_Evento1`
    FOREIGN KEY (`id_evento` )
    REFERENCES `BD_ParkingURP`.`T_Evento` (`id_evento` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Invitado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Invitado` ;

CREATE  TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Invitado` (
  `DNI` CHAR(8) NOT NULL ,
  PRIMARY KEY (`DNI`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Invitado_has_T_Control`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Invitado_has_T_Control` ;

CREATE  TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Invitado_has_T_Control` (
  `id_control` INT NOT NULL ,
  `DNI` CHAR(8) NOT NULL ,
  PRIMARY KEY (`id_control`, `DNI`) ,
  INDEX `fk_T_Invitado_has_T_Control_T_Control1_idx` (`id_control` ASC) ,
  INDEX `fk_T_Invitado_has_T_Control_T_Invitado1_idx` (`DNI` ASC) ,
  CONSTRAINT `fk_T_Invitado_has_T_Control_T_Control1`
    FOREIGN KEY (`id_control` )
    REFERENCES `BD_ParkingURP`.`T_Control` (`id_control` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_T_Invitado_has_T_Control_T_Invitado1`
    FOREIGN KEY (`DNI` )
    REFERENCES `BD_ParkingURP`.`T_Invitado` (`DNI` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`WS_Vehiculo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`WS_Vehiculo` ;

CREATE  TABLE IF NOT EXISTS `BD_ParkingURP`.`WS_Vehiculo` (
  `placa` CHAR(6) NOT NULL ,
  `marca` VARCHAR(80) NOT NULL ,
  `modelo` VARCHAR(80) NOT NULL ,
  `color` VARCHAR(80) NOT NULL ,
  `tipo_vehiculo` VARCHAR(80) NOT NULL ,
  PRIMARY KEY (`placa`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_ParkingURP`.`T_Sugerencia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_ParkingURP`.`T_Sugerencia` ;

CREATE  TABLE IF NOT EXISTS `BD_ParkingURP`.`T_Sugerencia` (
  `id_sugerencia` INT NOT NULL AUTO_INCREMENT ,
  `detalle` VARCHAR(255) NOT NULL ,
  `imagen` BLOB NULL ,
  `estado` INT NOT NULL ,
  `codigo` CHAR(9) NOT NULL ,
  PRIMARY KEY (`id_sugerencia`, `codigo`) ,
  INDEX `fk_T_Sugerencia_T_Usuario1_idx` (`codigo` ASC) ,
  CONSTRAINT `fk_T_Sugerencia_T_Usuario1`
    FOREIGN KEY (`codigo` )
    REFERENCES `BD_ParkingURP`.`T_Usuario` (`codigo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `BD_ParkingURP` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `BD_ParkingURP`.`T_Persona`
-- -----------------------------------------------------
START TRANSACTION;
USE `BD_ParkingURP`;
INSERT INTO `BD_ParkingURP`.`T_Persona` (`codigo`, `nombre`, `ape_paterno`, `ape_materno`, `celular`, `correo`, `carrera`, `tipo_persona`) VALUES ('74840159', 'Abel', 'Tarazona', 'Reyes', '970080498', 'abel@gmail.com', NULL, 'Trabajador');
INSERT INTO `BD_ParkingURP`.`T_Persona` (`codigo`, `nombre`, `ape_paterno`, `ape_materno`, `celular`, `correo`, `carrera`, `tipo_persona`) VALUES ('77050095', 'Joel', 'Retamozo', 'Santi', '945161575', 'joel@gmail.com', NULL, 'Trabajador');
INSERT INTO `BD_ParkingURP`.`T_Persona` (`codigo`, `nombre`, `ape_paterno`, `ape_materno`, `celular`, `correo`, `carrera`, `tipo_persona`) VALUES ('74125055', 'Nataly', 'Huanuco', 'Gutierrez', '935462153', 'naty@gmail.com', NULL, 'Trabajador');
INSERT INTO `BD_ParkingURP`.`T_Persona` (`codigo`, `nombre`, `ape_paterno`, `ape_materno`, `celular`, `correo`, `carrera`, `tipo_persona`) VALUES ('201411534', 'Ricardo', 'Bajalque', 'Santi', '924563254', 'richi@gmail.com', NULL, 'Alumno');

COMMIT;

-- -----------------------------------------------------
-- Data for table `BD_ParkingURP`.`T_Usuario`
-- -----------------------------------------------------
START TRANSACTION;
USE `BD_ParkingURP`;
INSERT INTO `BD_ParkingURP`.`T_Usuario` (`codigo`, `password`, `estado`, `fecha_registro`, `perfil`) VALUES ('74840159', 'abel123', '1', NULL, 'Vigilante');
INSERT INTO `BD_ParkingURP`.`T_Usuario` (`codigo`, `password`, `estado`, `fecha_registro`, `perfil`) VALUES ('77050095', 'joel123', '1', NULL, 'Supervisor');
INSERT INTO `BD_ParkingURP`.`T_Usuario` (`codigo`, `password`, `estado`, `fecha_registro`, `perfil`) VALUES ('74125055', 'naty123', '1', NULL, 'Administrador');
INSERT INTO `BD_ParkingURP`.`T_Usuario` (`codigo`, `password`, `estado`, `fecha_registro`, `perfil`) VALUES ('201411534', 'richi123', '1', NULL, 'Conductor');

COMMIT;

-- -----------------------------------------------------
-- Data for table `BD_ParkingURP`.`WS_Vehiculo`
-- -----------------------------------------------------
START TRANSACTION;
USE `BD_ParkingURP`;
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES ('COB673', 'Hyundai', 'Tucson', 'Negro', 'Auto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES ('FSR893', 'Toyota', 'Hilux', 'Rojo', 'Auto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES ('GTR753', 'Nissan', 'GTR 8', 'Azul', 'Auto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES ('HSB285', 'Nissan', 'Skyline', 'Azul', 'Auto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES ('THS946', 'Toyota', 'Supra', 'Anaranjado', 'Auto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES ('JKL845', 'Hyundai', 'Elantra', 'Negro', 'Auto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES ('KCL812', 'Honda', 'Civic', 'Marron', 'Auto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES ('MZC175', 'Suzuki', 'RG500', 'Azul', 'Moto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES ('MCV345', 'Suzuki', 'T500', 'Negro', 'Moto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES ('NGE937', 'Ducati', 'Scrambler', 'Rojo', 'Moto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES ('NMD695', 'Kawasaki', 'H2 750', 'Blanco y Azul', 'Moto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES ('NGD893', 'Yamaha', 'YZ 125', 'Verde y Amarillo', 'Moto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES ('MJD957', 'KTM', 'MC5', 'Rojo y Blanco', 'Moto');
INSERT INTO `BD_ParkingURP`.`WS_Vehiculo` (`placa`, `marca`, `modelo`, `color`, `tipo_vehiculo`) VALUES ('NLD045', 'Garelli', '50 Sport', 'Blanco', 'Moto');

COMMIT;
