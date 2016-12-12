 CREATE DATABASE `minicursolaravel`CHARACTER SET utf8 COLLATE utf8_general_ci;
 CREATE TABLE `minicursolaravel`.`aluno`(  
  `idAluno` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255),
  `matricula` INT UNSIGNED,
  `email` VARCHAR(45),
  PRIMARY KEY (`idAluno`)
) ENGINE=INNODB CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `minicursolaravel`.`aluno`(`idAluno`,`nome`,`matricula`,`email`) 
VALUES ( NULL,'Dayane','100','dayane@pucminas.com.br'); 
INSERT INTO `minicursolaravel`.`aluno`(`idAluno`,`nome`,`matricula`,`email`) 
VALUES ( NULL,'Maria','200','maria@pucminas.com.br'); 
INSERT INTO `minicursolaravel`.`aluno`(`idAluno`,`nome`,`matricula`,`email`) 
VALUES ( NULL,'João','300','joao@pucminas.com.br'); 