-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`owner`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`owner` ;

CREATE TABLE IF NOT EXISTS `mydb`.`owner` (
  `ownerID` INT NOT NULL AUTO_INCREMENT,
  `ownerFirst` VARCHAR(45) NULL,
  `ownerLast` VARCHAR(95) NULL,
  `ownerCell` VARCHAR(20) NULL,
  `ownerEmail` VARCHAR(95) NULL,
  PRIMARY KEY (`ownerID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`petProfile`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`petProfile` ;

CREATE TABLE IF NOT EXISTS `mydb`.`petProfile` (
  `petID` INT NOT NULL AUTO_INCREMENT,
  `petName` VARCHAR(45) NULL,
  `petSpecies` VARCHAR(45) NULL,
  `petBirthday` VARCHAR(45) NULL,
  `petBreed` VARCHAR(45) NULL,
  `petColor` VARCHAR(45) NULL,
  `petFur` VARCHAR(45) NULL,
  `petPersonality` VARCHAR(125) NULL,
  `petChip` VARCHAR(15) NULL,
  `petWarning` VARCHAR(125) NULL,
  `petPic` BLOB NULL,
  `ownerID` INT NULL,
  PRIMARY KEY (`petID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`lostPet`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`lostPet` ;

CREATE TABLE IF NOT EXISTS `mydb`.`lostPet` (
  `lostPetID` INT NOT NULL AUTO_INCREMENT,
  `lostPetName` VARCHAR(45) NULL,
  `lostPetLastname` VARCHAR(125) NULL,
  `missingDate` VARCHAR(25) NULL,
  `lastSeen` VARCHAR(65) NULL,
  `lostPic` BLOB NULL,
  PRIMARY KEY (`lostPetID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`foundPet`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`foundPet` ;

CREATE TABLE IF NOT EXISTS `mydb`.`foundPet` (
  `foundPetID` INT NOT NULL AUTO_INCREMENT,
  `foundPetName` VARCHAR(45) NULL,
  `foundPetDescription` VARCHAR(125) NULL,
  `foundDate` VARCHAR(25) NULL,
  `locationFound` VARCHAR(65) NULL,
  `foundPic` BLOB NULL,
  PRIMARY KEY (`foundPetID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Audience`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Audience` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Audience` (
  `audienceID` INT NOT NULL AUTO_INCREMENT,
  `Students` VARCHAR(45) NULL,
  `Faculty` VARCHAR(45) NULL,
  `Etown Community` VARCHAR(45) NULL,
  `petID` INT NULL,
  PRIMARY KEY (`audienceID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Pet Status`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Pet Status` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Pet Status` (
  `statusID` INT NOT NULL AUTO_INCREMENT,
  `Status` VARCHAR(45) NULL,
  `Emotional Support Animal` VARCHAR(45) NULL,
  `Service Animal` VARCHAR(45) NULL,
  `Assistance Animal` VARCHAR(45) NULL,
  `ownerID` INT NULL,
  PRIMARY KEY (`statusID`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
