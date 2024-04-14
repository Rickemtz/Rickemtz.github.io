CREATE TABLE registro_guia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    correo VARCHAR(255) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    ubicacion VARCHAR(255) NOT NULL,
    formacion_academica TEXT,
    capacitacion_habilidades TEXT
);

CREATE TABLE registroCliente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    correo VARCHAR(255) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    destino VARCHAR(255) NOT NULL,
    fecha_viaje DATE NOT NULL
);