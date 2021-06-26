CREATE DATABASE Olym;
USE Olym;

CREATE TABLE `Olym`.`usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `data_cadastro` DATETIME NOT NULL,
  PRIMARY KEY (`usuario_id`));

CREATE TABLE `Olym`.`sales` (
  `purchase_id` INT NOT NULL AUTO_INCREMENT,
  `product` VARCHAR(200) NOT NULL,
  `ip` VARCHAR(32) NOT NULL,
  `license_key` VARCHAR(32) NOT NULL,
  `buyer_id` VARCHAR(32) NOT NULL,
  `data_cadastro` DATETIME NOT NULL,
  PRIMARY KEY (`purchase_id`));


INSERT INTO `usuario` (`usuario_id`,`email`,`senha`, `data_cadastro`) VALUES (1,'noisier@eu.com','a47e5ee04ff2dde77bcc45e65fda8115', '2021-06-26 14:18:32');
INSERT INTO `sales` (`purchase_id`,`product`,`ip`,`license_key`,`buyer_id`, `data_cadastro`) VALUES (1,'nReports','PUBLIC','59baa0195a997a2f6156cafe254977a9','a47e5ee04ff2dde77bcc45e65fda8115', '2021-06-26 14:18:32');