# PetShopPHP
Projeto para a cadeira de Desenvolvimento de Software 3



Sistema de gerenciamento de PetShop


Pré-requisitos
```
PHP (XAMPP)
MySQL server
```

Setup 
```
1-
```

MySQL 
```
port: 3306
database: petshop
Username: root
Password: root
```

MySQL table
```
mysql -u root -p
create database petshop;

use petshop;

CREATE TABLE pets (
id INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20) NOT NULL,
descricao TEXT,
datanasc DATE,
tipo TEXT
);
```
