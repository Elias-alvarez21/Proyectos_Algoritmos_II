CREATE DATABASE stock;

USE stock;

CREATE TABLE classifications (
  classification_code INT(11) NOT NULL AUTO_INCREMENT,
  classification_name VARCHAR(50) NOT NULL,
  PRIMARY KEY (classification_code)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE products (
  product_id INT(11) NOT NULL AUTO_INCREMENT,
  product_name VARCHAR(100) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  classification_code INT(11) NOT NULL,
  PRIMARY KEY (product_id),
  KEY classification_code (classification_code),
  CONSTRAINT products_rl FOREIGN KEY (classification_code) REFERENCES classifications (classification_code) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE users (
  id INT(11) NOT NULL AUTO_INCREMENT,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY email (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO classifications (classification_name) VALUES ('Celulares y Tablets'), ('Computadoras y Notebooks');