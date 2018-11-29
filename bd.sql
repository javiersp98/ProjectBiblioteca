DROP DATABASE IF exists library;

CREATE DATABASE library;
USE LIBRARY;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
	usuario VARCHAR(20),
    contrasena VARCHAR(20)
);
INSERT INTO users VALUES("admin", "admin");
INSERT INTO users VALUES("javier", "javier");
INSERT INTO users VALUES("juancarlos", "juancarlos");

DROP TABLE IF EXISTS libro;
CREATE TABLE libro (
	id INT PRIMARY KEY AUTO_INCREMENT,
    isbn VARCHAR(13),
	titulo VARCHAR(100),
    autor VARCHAR(50),
    editorial VARCHAR(50),
    tema VARCHAR(50),
    ano INT
);
INSERT INTO libro VALUES(1, "isbn1", "La Caida de los Gigantes", "Ken Follet", "Editorial1", "Historia", 2010);
INSERT INTO libro VALUES(2, "isbn2", "Una Breve Historia de Casi Todo", "Bill Bryson", "Editorial2", "Ciencia", 2004);
INSERT INTO libro VALUES(3, "isbn3", "Las Hijas del Capitan", "Maria Duenas", "Editorial2", "Novela", 2018);
INSERT INTO libro VALUES(4, "isbn4", "Sentinel of Eternity", "Arthur Clarke", "Editorial3", "Ciencia Ficcion", 1951);

DROP TABLE IF EXISTS vinilo;
CREATE TABLE vinilo (
	id INT PRIMARY KEY AUTO_INCREMENT,
	titulo VARCHAR(100),
    autor VARCHAR(50),
    discografica VARCHAR(50),
    estilo VARCHAR(50),
    ano INT
);
INSERT INTO vinilo VALUES(1, "The Rise and Fall of Ziggy Stardust", "David Bowie", "Virgin", "Glam Rock", 1972);
INSERT INTO vinilo VALUES(2, "Piano Man", "Billy Joel", "Columbia", "Piano Rock", 1973);
INSERT INTO vinilo VALUES(3, "Made in Japan", "Deep Purple", "Purple Records", "Hard Rock", 1972);
INSERT INTO vinilo VALUES(4, "Distant Light", "The Hollies", "Parlophone", "Pop Rock", 1971);
