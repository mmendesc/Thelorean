SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE TABLE IF NOT EXISTS `Person` (
  `idPerson` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `city` VARCHAR(45) NULL,
  `description` TEXT NULL,
  PRIMARY KEY (`idPerson`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Category` (
  `idCategory` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`idCategory`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `History` (
  `idHistory` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `prologue` TEXT NOT NULL,
  PRIMARY KEY (`idHistory`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Topic` (
  `idTopic` INT NOT NULL AUTO_INCREMENT,
  `idHistory` INT NOT NULL,
  `title` VARCHAR(45) NOT NULL,
  `content` TEXT NOT NULL,
  PRIMARY KEY (`idTopic`),
  INDEX `FK_idHistory_idx` (`idHistory` ASC),
  CONSTRAINT `FK_idHistory`
    FOREIGN KEY (`idHistory`)
    REFERENCES `History` (`idHistory`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `CategoryHistory` (
  `idCategoryHistory` INT NOT NULL,
  `idCategory` INT NOT NULL,
  `idHistory` INT NOT NULL,
  PRIMARY KEY (`idCategoryHistory`),
  INDEX `FK_idCategory_idx` (`idCategory` ASC),
  INDEX `FK_idHistory_idx` (`idHistory` ASC),
  CONSTRAINT `FK_CH_idCategory`
    FOREIGN KEY (`idCategory`)
    REFERENCES `Category` (`idCategory`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_CH_idHistory`
    FOREIGN KEY (`idHistory`)
    REFERENCES `History` (`idHistory`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `PersonHistory` (
  `idPersonHistory` INT NOT NULL,
  `idPerson` INT NOT NULL,
  `idHistory` INT NOT NULL,
  PRIMARY KEY (`idPersonHistory`),
  INDEX `FK_idUser_idx` (`idPerson` ASC),
  INDEX `FK_idHistory_idx` (`idHistory` ASC),
  CONSTRAINT `FK_PH_idPerson`
    FOREIGN KEY (`idPerson`)
    REFERENCES `Person` (`idPerson`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_PH_idHistory`
    FOREIGN KEY (`idHistory`)
    REFERENCES `History` (`idHistory`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;