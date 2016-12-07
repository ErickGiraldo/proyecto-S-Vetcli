CREATE SCHEMA IF NOT EXISTS `veterinaria` DEFAULT CHARACTER SET utf8 ;
USE `veterinaria` ;

-- Table `veterinaria`.`cliente`

CREATE TABLE IF NOT EXISTS `veterinaria`.`cliente` (
  `n_cedula` INT(11) NOT NULL,
  `nombres` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `celular` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`n_cedula`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- Table `veterinaria`.`especie`

CREATE TABLE IF NOT EXISTS `veterinaria`.`especie` (
  `idespecie` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idespecie`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- Table `veterinaria`.`raza`

CREATE TABLE IF NOT EXISTS `veterinaria`.`raza` (
  `idraza` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idraza`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- Table `veterinaria`.`paciente`

CREATE TABLE IF NOT EXISTS `veterinaria`.`paciente` (
  `idpaciente` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `sexo` VARCHAR(45) NOT NULL,
  `edad` VARCHAR(45) NOT NULL,
  `color` VARCHAR(45) NOT NULL,
  `cliente_n_cedula` INT(11) NOT NULL,
  `especie_idespecie` INT(11) NOT NULL,
  `raza_idraza` INT(11) NOT NULL,
  PRIMARY KEY (`idpaciente`),
  CONSTRAINT `fk_paciente_cliente`
    FOREIGN KEY (`cliente_n_cedula`)
    REFERENCES `veterinaria`.`cliente` (`n_cedula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_paciente_especie1`
    FOREIGN KEY (`especie_idespecie`)
    REFERENCES `veterinaria`.`especie` (`idespecie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_paciente_raza1`
    FOREIGN KEY (`raza_idraza`)
    REFERENCES `veterinaria`.`raza` (`idraza`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- Table `veterinaria`.`chequeo`

CREATE TABLE IF NOT EXISTS `veterinaria`.`chequeo` (
  `idchequeo` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha` DATE NOT NULL,
  `frecuencia_cardiaca` VARCHAR(10) NOT NULL,
  `fr` VARCHAR(10) NOT NULL,
  `tiempo_llenado_capilar` VARCHAR(45) NOT NULL,
  `temperatura` VARCHAR(45) NOT NULL,
  `peso` VARCHAR(45) NOT NULL,
  `Entero` VARCHAR(10) NULL DEFAULT NULL,
  `castrado` VARCHAR(10) NULL DEFAULT NULL,
  `vacunas` VARCHAR(45) NOT NULL,
  `alimentacion` VARCHAR(45) NOT NULL,
  `desparcitacion` VARCHAR(45) NOT NULL,
  `anamnesicos` TEXT NOT NULL,
  `paciente_idpaciente` INT(11) NOT NULL,
  PRIMARY KEY (`idchequeo`, `paciente_idpaciente`),
  INDEX `fk_chequeo_paciente1_idx` (`paciente_idpaciente` ASC),
  CONSTRAINT `fk_chequeo_paciente1`
    FOREIGN KEY (`paciente_idpaciente`)
    REFERENCES `veterinaria`.`paciente` (`idpaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- Table `veterinaria`.`diagnostico`

CREATE TABLE IF NOT EXISTS `veterinaria`.`diagnostico` (
  `iddiagnostico` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NOT NULL,
  `paciente_idpaciente` INT(11) NOT NULL,
  PRIMARY KEY (`iddiagnostico`),
  CONSTRAINT `fk_diagnostico_paciente1`
    FOREIGN KEY (`paciente_idpaciente`)
    REFERENCES `veterinaria`.`paciente` (`idpaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- Table `veterinaria`.`historial_medico`
CREATE TABLE IF NOT EXISTS `veterinaria`.`historial_medico` (
  `idhistorial_medico` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha` DATE NOT NULL,
  `tipo_procedimiento` VARCHAR(45) NOT NULL,
  `nombre_vacuna` VARCHAR(45) NOT NULL,
  `fecha_vacunacion` VARCHAR(45) NOT NULL,
  `notas` LONGTEXT NOT NULL,
  `paciente_idpaciente` INT(11) NOT NULL,
  PRIMARY KEY (`idhistorial_medico`),
  CONSTRAINT `fk_historial_medico_paciente1`
    FOREIGN KEY (`paciente_idpaciente`)
    REFERENCES `veterinaria`.`paciente` (`idpaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- Table `veterinaria`.`usuario`
CREATE TABLE IF NOT EXISTS `veterinaria`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(45) NOT NULL,
  `usuario` VARCHAR(45) NOT NULL,
  `clave` VARCHAR(15) NOT NULL,
  `correo` VARCHAR(20) NULL DEFAULT NULL,
  `telefono` VARCHAR(7) NULL DEFAULT NULL,
  `celular` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;




/*insercion de especie*/
INSERT INTO `veterinaria`.`especie` (`idespecie`, `nombre`) 
VALUES (NULL, 'canina'), (NULL, 'felina'), (NULL, 'reptiles'), (NULL, 'aves');