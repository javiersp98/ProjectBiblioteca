DROP DATABASE IF exists library;

CREATE DATABASE library;
USE LIBRARY;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
	usuario VARCHAR(20),
    contrasena VARCHAR(20)
);
INSERT INTO users VALUES("admin", "admin");

DROP TABLE IF EXISTS libro;
CREATE TABLE libro (
	id INT PRIMARY KEY,
    isbn VARCHAR(13),
	titulo VARCHAR(100),
    autor VARCHAR(50),
    editorial VARCHAR(50),
    tema VARCHAR(50),
    ano INT    
);

DROP TABLE IF EXISTS vinilo;
CREATE TABLE vinilo (
	titulo VARCHAR(100) PRIMARY KEY,
    autor VARCHAR(50),
    discografica VARCHAR(50),
    estilo VARCHAR(50),
    ano INT,
    ndiscos DECIMAL
);