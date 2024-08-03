DROP database conuntos_reservas;

CREATE SCHEMA IF NOT EXISTS `conjuntos_reservas` DEFAULT CHARACTER SET utf8 ;
USE `conjuntos_reservas` ;

-- -----------------------------------------------------
-- Table `conjuntos_reservas`.`ROLES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `conjuntos_reservas`.`ROLES` (
  `cod_rol` INT NOT NULL AUTO_INCREMENT,
  `rol_name` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`cod_rol`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conjuntos_reservas`.`HOUSE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `conjuntos_reservas`.`HOUSE` (
  `cod_house` INT NOT NULL AUTO_INCREMENT,
  `house_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cod_house`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conjuntos_reservas`.`USERS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `conjuntos_reservas`.`USERS` (
  `cod_rol` INT NOT NULL,
  `cod_user` INT NOT NULL AUTO_INCREMENT,
  `cod_house` INT NOT NULL,
  `user_name` VARCHAR(45) NOT NULL,
  `user_lastname` VARCHAR(45) NOT NULL,
  `user_birthday` DATE NOT NULL,
  `user_id` VARCHAR(45) NOT NULL,
  `user_email` VARCHAR(45) NOT NULL,
  `user_pass` VARCHAR(45) NOT NULL,
  `user_phone` VARCHAR(80) NOT NULL,
  `user_state` TINYINT NOT NULL,
  PRIMARY KEY (`cod_user`),
  INDEX `FK_house_cod_idx` (`cod_house` ASC) ,
  CONSTRAINT `FK_user_rol`
    FOREIGN KEY (`cod_rol`)
    REFERENCES `conjuntos_reservas`.`ROLES` (`cod_rol`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `FK_house_cod`
    FOREIGN KEY (`cod_house`)
    REFERENCES `conjuntos_reservas`.`HOUSE` (`cod_house`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conjuntos_reservas`.`BOOKING`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `conjuntos_reservas`.`BOOKING` (
  `booking_date` DATE NOT NULL,
  `cod_booking` INT NOT NULL AUTO_INCREMENT,
  `cod_user` INT NOT NULL,
  PRIMARY KEY (`cod_booking`),
  INDEX `cod_user_idx` (`cod_user` ASC) ,
  CONSTRAINT `cod_user`
    FOREIGN KEY (`cod_user`)
    REFERENCES `conjuntos_reservas`.`USERS` (`cod_user`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conjuntos_reservas`.`CATEGORY_PLACE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `conjuntos_reservas`.`CATEGORY_PLACE` (
  `cod_category` INT NOT NULL AUTO_INCREMENT,
  `category_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cod_category`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conjuntos_reservas`.`PLACES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `conjuntos_reservas`.`PLACES` (
  `cod_place` INT NOT NULL AUTO_INCREMENT,
  `cod_category` INT NOT NULL,
  `place_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cod_place`),
  INDEX `FK_category_idx` (`cod_category` ASC) ,
  CONSTRAINT `FK_category`
    FOREIGN KEY (`cod_category`)
    REFERENCES `conjuntos_reservas`.`CATEGORY_PLACE` (`cod_category`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conjuntos_reservas`.`LIST_PLACES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `conjuntos_reservas`.`LIST_PLACES` (
  `cod_booking` INT NOT NULL,
  `cod_place` INT NOT NULL,
  `quantity_places` INT NOT NULL,
  INDEX `FK_places_idx` (`cod_booking` ASC) ,
  INDEX `FK_places_idx1` (`cod_place` ASC) ,
  CONSTRAINT `FK_list`
    FOREIGN KEY (`cod_booking`)
    REFERENCES `conjuntos_reservas`.`BOOKING` (`cod_booking`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_places`
    FOREIGN KEY (`cod_place`)
    REFERENCES `conjuntos_reservas`.`PLACES` (`cod_place`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conjuntos_reservas`.`TIPO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `conjuntos_reservas`.`TIPO` (
  `cod_type` INT NOT NULL AUTO_INCREMENT,
  `vehicle_type` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cod_type`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conjuntos_reservas`.`VEHICLE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `conjuntos_reservas`.`VEHICLE` (
  `cod_vehicle` INT NOT NULL AUTO_INCREMENT,
  `vehicle_plate` VARCHAR(45) NOT NULL,
  `vehicle_brand` VARCHAR(45) NOT NULL,
  `vehicle_color` VARCHAR(45) NOT NULL,
  `cod_type` INT NOT NULL,
  PRIMARY KEY (`cod_vehicle`),
  INDEX `FK_vehicle_type_idx` (`cod_type` ASC) ,
  CONSTRAINT `FK_vehicle_type`
    FOREIGN KEY (`cod_type`)
    REFERENCES `conjuntos_reservas`.`TIPO` (`cod_type`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conjuntos_reservas`.`PARKING`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `conjuntos_reservas`.`PARKING` (
  `cod_parking` INT NOT NULL AUTO_INCREMENT,
  `parking_name` VARCHAR(45) NOT NULL,
  `user_id` VARCHAR(45) NOT NULL,
  `parking_date` DATE NOT NULL,
  `cod_vehicle` INT NOT NULL,
  PRIMARY KEY (`cod_parking`, `parking_date`),
  INDEX `FK_vehicle_idx` (`cod_vehicle` ASC) ,
  CONSTRAINT `FK_parking`
    FOREIGN KEY (`cod_parking`)
    REFERENCES `conjuntos_reservas`.`BOOKING` (`cod_booking`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_vehicle`
    FOREIGN KEY (`cod_vehicle`)
    REFERENCES `conjuntos_reservas`.`VEHICLE` (`cod_vehicle`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conjuntos_reservas`.`booking`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `conjuntos_reservas`.`booking` (
  `booking_date` DATE NOT NULL,
  `cod_booking` INT(11) NOT NULL,
  `cod_user` INT(11) NOT NULL,
  PRIMARY KEY (`cod_booking`, `booking_date`),
  CONSTRAINT `FK_booking`
    FOREIGN KEY (`cod_booking`)
    REFERENCES `conjuntos_reservas`.`house` (`cod_house`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `conjuntos_reservas`.`category_place`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `conjuntos_reservas`.`category_place` (
  `cod_category` INT(11) NOT NULL,
  `category_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cod_category`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `conjuntos_reservas`.`places`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `conjuntos_reservas`.`places` (
  `cod_place` INT(11) NOT NULL,
  `cod_category` INT(11) NOT NULL,
  `place_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cod_place`),
  INDEX `FK_category_idx` (`cod_category` ASC) ,
  CONSTRAINT `FK_category`
    FOREIGN KEY (`cod_category`)
    REFERENCES `conjuntos_reservas`.`category_place` (`cod_category`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `conjuntos_reservas`.`list_places`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `conjuntos_reservas`.`list_places` (
  `cod_booking` INT(11) NOT NULL,
  `cod_place` INT(11) NOT NULL,
  `quantity_places` INT(11) NOT NULL,
  INDEX `FK_places_idx` (`cod_booking` ASC) ,
  INDEX `FK_places_idx1` (`cod_place` ASC) ,
  CONSTRAINT `FK_list`
    FOREIGN KEY (`cod_booking`)
    REFERENCES `conjuntos_reservas`.`booking` (`cod_booking`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_places`
    FOREIGN KEY (`cod_place`)
    REFERENCES `conjuntos_reservas`.`places` (`cod_place`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `conjuntos_reservas`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `conjuntos_reservas`.`roles` (
  `cod_rol` INT(11) NOT NULL,
  `rol_name` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`cod_rol`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `conjuntos_reservas`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `conjuntos_reservas`.`users` (
  `cod_rol` INT(11) NOT NULL,
  `cod_user` INT(11) NOT NULL,
  `cod_house` INT(11) NOT NULL,
  `user_name` VARCHAR(45) NOT NULL,
  `user_lastname` VARCHAR(45) NOT NULL,
  `user_birthday` DATE NOT NULL,
  `user_id` INT(11) NOT NULL,
  `user_email` VARCHAR(45) NOT NULL,
  `user_pass` VARCHAR(45) NOT NULL,
  `user_phone` VARCHAR(80) NOT NULL,
  `user_state` TINYINT(4) NOT NULL,
  PRIMARY KEY (`cod_user`),
  INDEX `ind_user_house` (`cod_house` ASC) ,
  INDEX `FK_user_rol` (`cod_rol` ASC) ,
  CONSTRAINT `FK_user_rol`
    FOREIGN KEY (`cod_rol`)
    REFERENCES `conjuntos_reservas`.`roles` (`cod_rol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_house`
    FOREIGN KEY (`cod_house`)
    REFERENCES `conjuntos_reservas`.`house` (`cod_house`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;