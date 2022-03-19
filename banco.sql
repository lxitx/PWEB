CREATE DATABASE `rf`;
USE `rf`;

CREATE TABLE `usuario`(
    `id` INT,
	`name` VARCHAR(100),
    `username` VARCHAR(100),
    `email` VARCHAR(300),
    `password` VARCHAR(50), 
    CONSTRAINT PRIMARY KEY(id)
);