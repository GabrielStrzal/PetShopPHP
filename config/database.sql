create database petshop;

use petshop;


DROP TABLE IF EXISTS `pets`;

CREATE TABLE pets (
id INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20) NOT NULL,
descricao TEXT,
datanasc DATE,
tipo TEXT,
dono INTEGER
);


DROP TABLE IF EXISTS `donos`;

CREATE TABLE donos (
id INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20) NOT NULL,
endereco TEXT,
telefone TEXT
);




DROP TABLE IF EXISTS `admin`
CREATE TABLE admin
(
id INT PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(30) UNIQUE,
passcode VARCHAR(30),
tipo VARCHAR(30)
);

insect 