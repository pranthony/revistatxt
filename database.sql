-- create database 

CREATE DATABASE RevistaDB;

use Revistas;

CREATE TABLE Revista(
    id_revista INT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    imagen VARCHAR(30) NOT NULL,
    ArticuloID INT,
    FOREIGN KEY (ArticuloID) REFERENCES Articulo(id_articulo),
);
CREATE TABLE Articulo(
    id_articulo INT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    pdf VARCHAR(100) NOT NULL,
    palabras_clave VARCHAR(300) NOT NULL,
    resumen VARCHAR(5000) NOT NULL,
    AutorID INT,
    FOREIGN KEY (AutorID) REFERENCES Autor(id_autores)
)
CREATE TABLE Autor(
    id_autores INT PRIMARY KEY,
    nombres VARCHAR(80) NOT NULL,
    resumen VARCHAR(5000) NOT NULL,
)