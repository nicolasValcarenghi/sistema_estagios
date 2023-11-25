-- MySQL Script generated by MySQL Workbench
-- Sat Nov 25 19:58:08 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema sistema_estagios
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sistema_estagios
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sistema_estagios` DEFAULT CHARACTER SET utf8 ;
USE `sistema_estagios` ;

-- -----------------------------------------------------
-- Table `sistema_estagios`.`cidades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_estagios`.`cidades` (
  `id` INT NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `uf` CHAR(2) NOT NULL,
  `cep` CHAR(8) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_estagios`.`representantes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_estagios`.`representantes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cpf` VARCHAR(255) NOT NULL,
  `rg` VARCHAR(255) NOT NULL,
  `funcao` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_estagios`.`empresas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_estagios`.`empresas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `endereco` VARCHAR(255) NOT NULL,
  `telefone` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `cnpj` CHAR(14) NOT NULL,
  `cidades_id` INT NOT NULL,
  `representantes_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_empresas_cidades1_idx` (`cidades_id` ASC) ,
  INDEX `fk_empresas_representantes1_idx` (`representantes_id` ASC) ,
  CONSTRAINT `fk_empresas_cidades1`
    FOREIGN KEY (`cidades_id`)
    REFERENCES `sistema_estagios`.`cidades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_empresas_representantes1`
    FOREIGN KEY (`representantes_id`)
    REFERENCES `sistema_estagios`.`representantes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_estagios`.`supervisores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_estagios`.`supervisores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `formacao` VARCHAR(255) NOT NULL,
  `telefone` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `empresas_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_supervisores_empresas1_idx` (`empresas_id` ASC) ,
  CONSTRAINT `fk_supervisores_empresas1`
    FOREIGN KEY (`empresas_id`)
    REFERENCES `sistema_estagios`.`empresas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_estagios`.`cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_estagios`.`cursos` (
  `id` INT NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_estagios`.`estudantes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_estagios`.`estudantes` (
  `matricula` INT UNSIGNED NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `cpf` CHAR(11) NOT NULL,
  `rg` CHAR(10) NOT NULL,
  `endereco` VARCHAR(255) NOT NULL,
  `telefone` VARCHAR(255) NOT NULL,
  `cidades_id` INT NOT NULL,
  `cursos_id` INT NOT NULL,
  `num_turma` INT NOT NULL,
  PRIMARY KEY (`matricula`),
  INDEX `fk_estudantes_cidades1_idx` (`cidades_id` ASC) ,
  INDEX `fk_estudantes_cursos1_idx` (`cursos_id` ASC) ,
  CONSTRAINT `fk_estudantes_cidades1`
    FOREIGN KEY (`cidades_id`)
    REFERENCES `sistema_estagios`.`cidades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estudantes_cursos1`
    FOREIGN KEY (`cursos_id`)
    REFERENCES `sistema_estagios`.`cursos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_estagios`.`area`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_estagios`.`area` (
  `id` INT NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_estagios`.`professores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_estagios`.`professores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `area_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_professores_area1_idx` (`area_id` ASC) ,
  CONSTRAINT `fk_professores_area1`
    FOREIGN KEY (`area_id`)
    REFERENCES `sistema_estagios`.`area` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_estagios`.`estagios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_estagios`.`estagios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `carga_horaria` FLOAT NOT NULL,
  `empresas_id` INT NOT NULL,
  `estudantes_matricula` INT UNSIGNED NOT NULL,
  `orientadores_id` INT NOT NULL,
  `area_id` INT NOT NULL,
  `supervisores_id` INT NOT NULL,
  `data_inicio` DATE NOT NULL,
  `previsao_fim` DATE NOT NULL,
  `data_fim` DATE NOT NULL,
  `coorientadores_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_estagios_empresas1_idx` (`empresas_id` ASC) ,
  INDEX `fk_estagios_estudantes1_idx` (`estudantes_matricula` ASC) ,
  INDEX `fk_estagios_orientadores1_idx` (`orientadores_id` ASC) ,
  INDEX `fk_estagios_area1_idx` (`area_id` ASC) ,
  INDEX `fk_estagios_supervisores1_idx` (`supervisores_id` ASC) ,
  INDEX `fk_estagios_professores1_idx` (`coorientadores_id` ASC) ,
  CONSTRAINT `fk_estagios_empresas1`
    FOREIGN KEY (`empresas_id`)
    REFERENCES `sistema_estagios`.`empresas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estagios_estudantes1`
    FOREIGN KEY (`estudantes_matricula`)
    REFERENCES `sistema_estagios`.`estudantes` (`matricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estagios_orientadores1`
    FOREIGN KEY (`orientadores_id`)
    REFERENCES `sistema_estagios`.`professores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estagios_area1`
    FOREIGN KEY (`area_id`)
    REFERENCES `sistema_estagios`.`area` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estagios_supervisores1`
    FOREIGN KEY (`supervisores_id`)
    REFERENCES `sistema_estagios`.`supervisores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estagios_professores1`
    FOREIGN KEY (`coorientadores_id`)
    REFERENCES `sistema_estagios`.`professores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_estagios`.`documentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_estagios`.`documentos` (
  `id` INT NOT NULL,
  `estagios_id` INT NOT NULL,
  `termo_de_compromisso` VARCHAR(255) NOT NULL,
  `plano_de_atividade` VARCHAR(255) NOT NULL,
  `ficha_autoavaliacao` VARCHAR(255) NOT NULL,
  `ficha_avaliacao_empresa` VARCHAR(255) NOT NULL,
  `relatorio_final` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_documentos_estagios1_idx` (`estagios_id` ASC) ,
  CONSTRAINT `fk_documentos_estagios1`
    FOREIGN KEY (`estagios_id`)
    REFERENCES `sistema_estagios`.`estagios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_estagios`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_estagios`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `login` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `tipo` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;