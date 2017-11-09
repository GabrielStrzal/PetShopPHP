create database petshop;

use petshop;


DROP TABLE IF EXISTS `pets`;

CREATE TABLE pets (
id INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20) NOT NULL,
descricao TEXT,
datanasc DATE,
tipo TEXT
);


DROP TABLE IF EXISTS `donos`;

CREATE TABLE donos (
id INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20) NOT NULL,
endereco TEXT,
telefone TEXT
);


DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID do Usuário',
  `user` varchar(255) NOT NULL COMMENT 'Usuário',
  `user_name` varchar(255) NOT NULL COMMENT 'Nome do usuário',
  `user_password` varchar(255) NOT NULL COMMENT 'Senha',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


