create database petshop;

use petshop;

CREATE TABLE pets (
id INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20) NOT NULL,
descricao TEXT,
datanasc DATE,
tipo TEXT
);