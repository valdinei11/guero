DROP DATABASE IF EXISTS `guero`;

CREATE DATABASE `guero`;

USE `guero`;

CREATE TABLE `faq` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `question` VARCHAR(255) NOT NULL,
    `content` TEXT NOT NULL,
    PRIMARY KEY (id)
);
