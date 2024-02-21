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
    texto_pregunta TEXT,
    respuesta_correcta VARCHAR(255),
    opcion_incorrecta1 VARCHAR(255),
    opcion_incorrecta2 VARCHAR(255),
    opcion_incorrecta3 VARCHAR(255),
    id_tematica INT,
    FOREIGN KEY (id_tematica) REFERENCES Tematica(id_tematica)
);

CREATE TABLE Comentario (
    id_comentario INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    comentario TEXT,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);






INSERT INTO Tematica (nombre_tematica) VALUES ('Biología');

-- Preguntas de Biología
INSERT INTO Pregunta (texto_pregunta, respuesta_correcta, opcion_incorrecta1, opcion_incorrecta2, opcion_incorrecta3, id_tematica)
VALUES 
    ('¿Cuál es el gas esencial para la respiración de los seres vivos?', 'b) Oxígeno (O2)', 'a) Dióxido de carbono (CO2)', 'c) Nitrógeno (N2)', 'd) Hidrógeno (H2)', 1),
    ('¿Qué función tiene el sistema circulatorio en el cuerpo humano?', 'a) Transportar nutrientes y oxígeno', 'b) Filtrar la sangre', 'c) Almacenar energía', 'd) Controlar la temperatura corporal', 1),
    ('¿Cuál es el órgano principal del sistema digestivo?', 'b) Estómago', 'a) Hígado', 'c) Riñones', 'd) Intestino delgado', 1),
    ('¿Cuál es la función principal de los pulmones en el sistema respiratorio?', 'c) Intercambio de gases', 'a) Producción de oxígeno', 'b) Filtrar el aire', 'd) Almacenar dióxido de carbono', 1);

-- Geometría
INSERT INTO Tematica (nombre_tematica) VALUES ('Geometría');


INSERT INTO Pregunta (texto_pregunta, respuesta_correcta, opcion_incorrecta1, opcion_incorrecta2, opcion_incorrecta3, id_tematica)
VALUES
    ('Si un triángulo tiene un ángulo de 90 grados, ¿cómo se llama ese tipo de triángulo?', 'd) Rectángulo', 'a) Equilátero', 'b) Isósceles', 'c) Escaleno', 2),
    ('¿Cuál es la fórmula para el área de un rectángulo?', 'a)A=base*altura;', 'b)A=base+altura', 'c)A= base - altura', 'd)A= base/altura', 2),
    ('¿Cuál es el número pi?', 'a)3.1415', 'b)212', 'c)1', 'd)12', 2),
    ('¿Cuál es la fórmula para calcular el área de una circunferencia?', 'a)A=π×rxr', 'b)A=rxr', 'c)=r+r', 'd)a=r-r+π', 2);

INSERT INTO Tematica (nombre_tematica) VALUES ('Física');

-- Preguntas de Física
INSERT INTO Pregunta (texto_pregunta, respuesta_correcta, opcion_incorrecta1, opcion_incorrecta2, opcion_incorrecta3, id_tematica)
VALUES
    ('¿Cuál de las siguientes unidades se utiliza para medir la intensidad de corriente eléctrica?', 'c) Amperio (A)', 'a) Voltio (V)', 'b) Ohmio (Ω)', 'd) Culombio (C)', 3),
    ('¿En qué unidad se mide la fuerza en el sistema internacional?', 'a) Newton (N)', 'b) Julios (J)', 'c) Vatios (W)', 'd) Pascal (Pa)', 3),
    ('¿Cuál es la fórmula para calcular la fuerza de la gravedad?', 'd) F = Gm1m2/r2', 'a) n=r*q', 'b) n=r*r', 'c) n=q*q', 3),
    ('¿Cuál es la fórmula para calcular la energía cinética de un objeto en movimiento?', 'b) E = 1/2mv^2', 'a) E = mgh', 'c) E = m/c^2', 'd) E = Fd', 3);
    
    
    