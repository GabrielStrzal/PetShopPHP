create database petshop;

use petshop;


DROP TABLE IF EXISTS `pets`;

CREATE TABLE pets (
id INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20) NOT NULL,
descricao TEXT,
datanasc DATE,
tipo TEXT,
dono INTEGER,
sexo TEXT
);


DROP TABLE IF EXISTS `donos`;

CREATE TABLE donos (
id INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20) NOT NULL,
endereco TEXT,
telefone TEXT
);




DROP TABLE IF EXISTS `admin`;
CREATE TABLE admin
(
id INT PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(30) UNIQUE,
passcode VARCHAR(30),
tipo VARCHAR(30)
);



DROP TABLE IF EXISTS `servicos`;

CREATE TABLE servicos (
id INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20) NOT NULL,
descricao TEXT,
tipo TEXT,
preco TEXT
);


DROP TABLE IF EXISTS `atendimentos`;

CREATE TABLE atendimentos (
id INTEGER AUTO_INCREMENT PRIMARY KEY,
pet INTEGER,
tipo INTEGER,
observacoes TEXT,
parecer TEXT,
situacao TEXT
);

 