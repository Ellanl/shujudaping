CREATE DATABASE IF NOT EXISTS `hosts` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE `hosts`;

CREATE TABLE `users` (
  `ip` VARCHAR(50) NOT NULL,
  `username` VARCHAR(50) NOT NULL,
  `computerstatus` VARCHAR(100) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `ports` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`ip`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



