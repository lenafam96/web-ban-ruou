DROP DATABASE IF EXISTS `lecongminh`;

CREATE DATABASE `lecongminh`;

DROP TABLE IF EXISTS `lecongminh`.`categories`;

CREATE TABLE `lecongminh`.`categories` (
  `category_id` INT(5) NOT NULL AUTO_INCREMENT,
  `category_name` VARCHAR(50) NULL COLLATE 'utf8mb4_unicode_ci',
  PRIMARY KEY (`category_id`))
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;

INSERT INTO `lecongminh`.`categories` (`category_name`)
VALUES 
    ('Rượu Cognac'),
    ('Blended Scotch Whisky'),
    ('Rượu Single Malt'),
    ('Rượu Vodka'),
    ('Rượu Vang'),
    ('Bia');


DROP TABLE IF EXISTS `lecongminh`.`products`;

CREATE TABLE `lecongminh`.`products` (
  `product_id` INT(5) NOT NULL AUTO_INCREMENT,
  `product_name` VARCHAR(50) NULL COLLATE 'utf8mb4_unicode_ci',
  `image` VARCHAR(200) NULL,
  `category_id` INT(5) NOT NULL,
  `brand` VARCHAR(30) NULL COLLATE 'utf8mb4_unicode_ci',
  `origin` VARCHAR(30) NULL COLLATE 'utf8mb4_unicode_ci',
  `concentration` INT(3),
  `volume` INT(5),
  `price` INT(11) NULL,
  PRIMARY KEY (`product_id`))
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;

INSERT INTO `lecongminh`.`products` (`product_name`,`image`,`category_id`,`brand`,`origin`,`concentration`,`volume`,`price`)
VALUES 
    ('Beluga Transatlantic bao da','',4,'Beluga','Nga','40','700',1250000),
    ('MEUKOW XO Cognac','',1,'XO','Pháp','40','700',3500000),
    ('Rượu Royal salute 30YO','',2,'Chivas','Scotland','40','500',13000000);


DROP TABLE IF EXISTS `lecongminh`.`user`;

CREATE TABLE `lecongminh`.`user` (
  `email` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`email`))
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;

INSERT INTO `lecongminh`.`user` (`email`,`password`)
VALUES 
    ('admin@gmail.com','123');