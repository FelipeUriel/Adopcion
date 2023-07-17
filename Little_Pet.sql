CREATE SCHEMA LittlePet;

Use LittlePet;

CREATE TABLE Adoptante (
  id_adoptante INT PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(50) NOT NULL,
  apellido1 VARCHAR(50) NOT NULL,
  apellido2 VARCHAR(50) NOT NULL,
  correo varchar(100) NOT NULL,
  pass varbinary(100) NOT NULL,
  num_celular numeric(12) NOT NULL,
  fecha_nacimiento DATE,
  genero VARCHAR(20),
  descripcion TEXT,
  fecha_alta DATE,
  fecha_modificacion DATE
);

CREATE TABLE Fotos_adoptante (
  id_adoptante INT,
  foto VARCHAR(100),
  FOREIGN KEY (id_adoptante) REFERENCES Adoptante(id_adoptante)
);

CREATE TABLE Especie (
  id_especie INT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL
);

CREATE TABLE Raza (
  id_raza INT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL
);

CREATE TABLE Mascota (
  id_mascota INT PRIMARY KEY AUTO_INCREMENT,
  id_especie INT,
  id_raza INT,
  nombre VARCHAR(50) NOT NULL,
  apellido1 VARCHAR(50) NOT NULL,
  apellido2 VARCHAR(50) NOT NULL,
  nombre_mascota VARCHAR(20),
  correo varchar(100) NOT NULL,
  pass varbinary(100) NOT NULL,
  num_celular numeric(12) NOT NULL,
  fecha_nacimiento DATE,
  genero VARCHAR(20),
  descripcion TEXT,
  fecha_alta DATE,
  fecha_modificacion DATE,
  FOREIGN KEY (id_especie) REFERENCES Especie(id_especie),
  FOREIGN KEY (id_raza) REFERENCES Raza(id_raza)
);

CREATE TABLE Fotos_mascota (
  id_mascota INT,
  foto VARCHAR(100),
  FOREIGN KEY (id_mascota) REFERENCES Mascota(id_mascota)
);

CREATE TABLE Match_adoptante_mascota (
  id_match_adoptante_mascota INT PRIMARY KEY AUTO_INCREMENT,
  id_mascota INT,
  id_adoptante INT,
  fecha_match DATE,
  estado_match ENUM('Activo', 'Parcial', 'Inactivo'),
  FOREIGN KEY (id_mascota) REFERENCES Mascota(id_mascota),
  FOREIGN KEY (id_adoptante) REFERENCES Adoptante(id_adoptante)
);

CREATE TABLE Mensajes (
  id_match_adoptante_mascota INT,
  mensaje TEXT,
  fecha_mensaje DATE,
  FOREIGN KEY (id_match_adoptante_mascota) REFERENCES Match_adoptante_mascota(id_match_adoptante_mascota)
);

drop schema LittlePet;