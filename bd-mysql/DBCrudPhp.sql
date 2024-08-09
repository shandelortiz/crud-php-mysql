DROP DATABASE IF EXISTS crudPhp;

CREATE DATABASE crudPhp;
USE crudPhp;

CREATE TABLE Usuarios(
	idUsuario INT NOT NULL AUTO_INCREMENT,
    nombres VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    telefono INT NOT NULL,
    PRIMARY KEY PK_idUsuario (idUsuario)
);

INSERT INTO Usuarios(nombres, apellidos, correo, telefono) VALUES ("Shandel Noe", "Ortiz Morales", "shandel@gmail.com", 12345678);
INSERT INTO Usuarios(nombres, apellidos, correo, telefono) VALUES ("Satira Manuela", "Lopez Cordon", "satira@gmail.com", 87654321);
INSERT INTO Usuarios(nombres, apellidos, correo, telefono) VALUES ("Fabiola Andrea", "Lopez Cux", "fabiola@gmail.com", 12387645);
INSERT INTO Usuarios(nombres, apellidos, correo, telefono) VALUES ("Josue David", "Reyes Lopez", "josue@gmail.com", 12348765);
INSERT INTO Usuarios(nombres, apellidos, correo, telefono) VALUES ("Erwin Antonio", "Caal Martinez", "antonio@gmail.com", 87654109);

SELECT * FROM Usuarios;