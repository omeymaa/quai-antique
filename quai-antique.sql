-- Active: 1684396235938@@127.0.0.1@8889@quai_antique

CREATE DATABASE quai_antique DEFAULT CHARACTER SET = 'utf8mb4';

CREATE TABLE
    IF NOT EXISTS user (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        email VARCHAR(100) NOT NULL,
        password VARCHAR(255) NOT NULL,
        firstname VARCHAR(50) NOT NULL,
        lastname VARCHAR(50) NOT NULL,
        guest INT,
        allergens VARCHAR(255)
    );

