-- Example SQL init file for MySQL

CREATE DATABASE dbname;
use dbname;

CREATE TABLE users (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	pass VARCHAR(128) NOT NULL
);


CREATE TABLE products (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	productname VARCHAR(50) NOT NULL,
    price DECIMAL(5,2) NOT NULL
);

INSERT INTO users (firstname, lastname, email, pass) VALUES ("Alice", "Crane", "alice@email.com", "abcd1234");
INSERT INTO users (firstname, lastname, email, pass) VALUES ("Bob", "Johnson", "bob@email.com", "password");
INSERT INTO users (firstname, lastname, email, pass) VALUES ("Eva", "Gomez", "eva@email.com", "pass1234");
INSERT INTO users (firstname, lastname, email, pass) VALUES ("Dave", "Sheen", "dave@email.com", "abcd1234");

INSERT INTO products (productname, price) VALUES ("Computer desk", 199.95);
INSERT INTO products (productname, price) VALUES ("Desk chair", 249.00);
INSERT INTO products (productname, price) VALUES ("Desk lamp", 44.99);
INSERT INTO products (productname, price) VALUES ("Shelving", 50.95);