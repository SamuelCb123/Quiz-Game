create database quizgame;
use quizgame;
CREATE TABLE Usuario (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    contraseña VARCHAR(255),
    email VARCHAR(255) 
);

CREATE TABLE Tematica (
    id_tematica INT AUTO_INCREMENT PRIMARY KEY,
    nombre_tematica VARCHAR(255)
);

CREATE TABLE Pregunta (
    id_pregunta INT AUTO_INCREMENT PRIMARY KEY,
    dificultad INT,
    texto_pregunta TEXT,
    respuesta_correcta VARCHAR(255),
    id_tematica INT,
    FOREIGN KEY (id_tematica) REFERENCES Tematica(id_tematica)
);

CREATE TABLE Partida (
    id_partida INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    fecha DATETIME,
    puntos INT,
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);

CREATE TABLE PreguntaPartida (
    IDpreguntapartida INT AUTO_INCREMENT PRIMARY KEY,
    id_partida INT,
    id_pregunta INT,
    acertado BOOLEAN,
    FOREIGN KEY (id_partida) REFERENCES Partida(id_partida),
    FOREIGN KEY (id_pregunta) REFERENCES Pregunta(id_pregunta)
);
