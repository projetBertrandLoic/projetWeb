-- MySQL Script generated by MySQL Workbench
-- 02/19/15 22:21:26
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema projetweb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `projetweb` ;

-- -----------------------------------------------------
-- Schema projetweb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `projetweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `projetweb` ;

-- -----------------------------------------------------
-- Table `projetweb`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `projetweb`.`user` ;

CREATE TABLE IF NOT EXISTS `projetweb`.`user` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `is_admin` TINYINT(1) NOT NULL DEFAULT 0,
  `nom` VARCHAR(200) NOT NULL,
  `prenom` VARCHAR(200) NOT NULL,
  `mail` VARCHAR(300) NOT NULL,
  `adresse` VARCHAR(300) NOT NULL,
  PRIMARY KEY (`id_user`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projetweb`.`avis_client`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `projetweb`.`avis_client` ;

CREATE TABLE IF NOT EXISTS `projetweb`.`avis_client` (
  `id_avis_client` INT NOT NULL AUTO_INCREMENT,
  `id_user` INT NOT NULL,
  `date` DATETIME NOT NULL,
  `texte` VARCHAR(500) NOT NULL,
  PRIMARY KEY (`id_avis_client`, `id_user`),
  INDEX `fk_avis_client_user_idx` (`id_user` ASC),
  CONSTRAINT `fk_avis_client_user`
    FOREIGN KEY (`id_user`)
    REFERENCES `projetweb`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projetweb`.`article`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `projetweb`.`article` ;

CREATE TABLE IF NOT EXISTS `projetweb`.`article` (
  `id_article` INT NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(150) NOT NULL,
  `description` VARCHAR(300) NOT NULL,
  `prix` FLOAT NOT NULL,
  `date_ajout` DATETIME NOT NULL,
  `coup_de_coeur` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_article`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projetweb`.`image`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `projetweb`.`image` ;

CREATE TABLE IF NOT EXISTS `projetweb`.`image` (
  `id_image` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(150) NOT NULL,
  `taille` VARCHAR(50) NOT NULL,
  `type` VARCHAR(45) NOT NULL,
  `blob` BLOB NOT NULL,
  `date` DATETIME NOT NULL,
  PRIMARY KEY (`id_image`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projetweb`.`image_article`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `projetweb`.`image_article` ;

CREATE TABLE IF NOT EXISTS `projetweb`.`image_article` (
  `id_article` INT NOT NULL,
  `id_image` INT NOT NULL,
  PRIMARY KEY (`id_article`, `id_image`),
  INDEX `fk_image_article_image1_idx` (`id_image` ASC),
  CONSTRAINT `fk_image_article_article1`
    FOREIGN KEY (`id_article`)
    REFERENCES `projetweb`.`article` (`id_article`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_image_article_image1`
    FOREIGN KEY (`id_image`)
    REFERENCES `projetweb`.`image` (`id_image`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projetweb`.`ligne_panier`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `projetweb`.`ligne_panier` ;

CREATE TABLE IF NOT EXISTS `projetweb`.`ligne_panier` (
  `id_article` INT NOT NULL,
  `id_user` INT NOT NULL,
  `quantite` INT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_article`, `id_user`),
  INDEX `fk_ligne_panier_user_idx` (`id_user` ASC),
  CONSTRAINT `fk_ligne_panier_article1`
    FOREIGN KEY (`id_article`)
    REFERENCES `projetweb`.`article` (`id_article`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ligne_panier_user`
    FOREIGN KEY (`id_user`)
    REFERENCES `projetweb`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
