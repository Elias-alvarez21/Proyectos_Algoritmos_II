CREATE DATABASE real_estate;

USE real_estate;

CREATE TABLE cities (
    id_city INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    postal_code VARCHAR(10) NOT NULL
);

CREATE TABLE users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);

CREATE TABLE properties (
    id_property INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    operation_type ENUM('Rent', 'Sale') NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    currency VARCHAR(10) NOT NULL,
    bedrooms INT,
    square_meters DECIMAL(10, 2),
    address VARCHAR(255),
    id_city INT,
    id_user INT,
    FOREIGN KEY (id_city) REFERENCES cities(id_city),
    FOREIGN KEY (id_user) REFERENCES users(id_user)
);

INSERT INTO cities (name, postal_code) VALUES
('La Plata', '1900'),
('Mar del Plata', '7600'),
('Bahía Blanca', '8000'),
('Tandil', '7000'),
('San Nicolás de los Arroyos', '2900'),
('Junín', '6000'),
('Pergamino', '2700'),
('Necochea', '7630'),
('Tres Arroyos', '7500'),
('Olavarría', '7400'),
('Azul', '7300'),
('Miramar', '7607'),
('Balcarce', '7620'),
('Villa Gesell', '7165'),
('Luján', '6700'),
('Chascomús', '7130'),
('San Antonio de Areco', '2760'),
('Mercedes', '6600'),
('San Pedro', '2930'),
('Campana', '2804');

INSERT INTO users (username, email, password) VALUES
('usuario1', 'usuario1@example.com', 'contraseña1'),
('usuario2', 'usuario2@example.com', 'contraseña2'),
('usuario3', 'usuario3@example.com', 'contraseña3'),
('usuario4', 'usuario4@example.com', 'contraseña4'),
('usuario5', 'usuario5@example.com', 'contraseña5');

INSERT INTO properties (title, description, operation_type, price, currency, bedrooms, square_meters, address, id_city, id_user) VALUES
('Casa céntrica', 'Bonita casa en el centro de la ciudad.', 'Sale', 250000, 'USD', 3, 200, 'Calle Principal 123', 1, 1),
('Departamento con vista al mar', 'Departamento de lujo con vistas panorámicas al mar.', 'Rent', 1500, 'USD', 2, 100, 'Av. Costanera 456', 2, 2),
('Casa quinta con pileta', 'Amplia casa quinta con piscina y parque.', 'Sale', 350000, 'USD', 4, 300, 'Ruta 226 km 10', 3, 3),
('Oficina en zona céntrica', 'Oficina con excelente ubicación en el centro.', 'Rent', 2000, 'ARS', NULL, 150, 'Calle Mitre 789', 4, 4),
('Departamento céntrico', 'Departamento luminoso en el corazón de la ciudad.', 'Sale', 180000, 'USD', 1, 80, 'Av. San Martín 234', 5, 5);

SELECT * FROM cities;
SELECT * FROM users;
SELECT * FROM properties;