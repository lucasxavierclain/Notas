CREATE SCHEMA `notas` ;
use  `notas`;
CREATE TABLE `notas`.`nota` (
  `idnota` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(55) NULL,
  `autor` VARCHAR(45) NULL,
  `mensagem` VARCHAR(300) NULL,
  PRIMARY KEY (`idnota`));

CREATE VIEW vw_selectnotas AS SELECT * FROM nota;
