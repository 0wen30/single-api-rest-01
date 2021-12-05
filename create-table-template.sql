CREATE TABLE personas(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50),
    edad INT,
    ciudad VARCHAR(50)
) DEFAULT CHARSET UTF8;
INSERT INTO personas(nombre,edad,ciudad) VALUES('jose',27,'oaxaca');
INSERT INTO personas(nombre,edad,ciudad) VALUES('ana',25,'fortin');
INSERT INTO personas(nombre,edad,ciudad) VALUES('ale',4,'cosco');
INSERT INTO personas(nombre,edad,ciudad) VALUES('lindsey',6,'orizaba');