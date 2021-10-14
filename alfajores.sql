CREATE DATABASE alfajores;
USE alfajores;

CREATE TABLE `alfajores`.`product_type` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(200) NOT NULL,
  `price1` DECIMAL(14,2) NOT NULL,
  `price6` DECIMAL(14,2) NOT NULL,
  `price12` DECIMAL(14,2) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `alfajores`.`product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(200) NOT NULL,
  `image` VARCHAR(45) NOT NULL,
  `product_type_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_idx` (`product_type_id` ASC) VISIBLE,
  CONSTRAINT `fk_product_product_type_id`
    FOREIGN KEY (`product_type_id`)
    REFERENCES `alfajores`.`product_type` (`id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT);

CREATE TABLE `alfajores`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(320) NOT NULL,
  `password` VARCHAR(320) NOT NULL,
  `role` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE);

INSERT INTO `alfajores`.`product_type` (`id`, `name`, `description`, `price1`, `price6`, `price12`) VALUES ('1', 'Alfajores Clásicos', 'Alfajores de dos tapas rellenos de dulce y bañados en chocolate.', '85', '450', '850');
INSERT INTO `alfajores`.`product_type` (`id`, `name`, `description`, `price1`, `price6`, `price12`) VALUES ('2', 'Alfajores Especiales', 'Alfajores de dos tapas con rellenos o coberturas especiales.', '100', '550', '1000');
INSERT INTO `alfajores`.`product_type` (`id`, `name`, `description`, `price1`, `price6`, `price12`) VALUES ('3', 'Conitos', 'Conitos de chocolate rellenos de dulce de leche.', '65', '350', '700');

INSERT INTO `alfajores`.`product` (`id`, `name`, `description`, `image`, `product_type_id`) VALUES ('1', 'Manto Negro', 'Alfajor relleno de dulce de leche bañado en chocolate negro.', 'manto_negro.jpg', '1');
INSERT INTO `alfajores`.`product` (`id`, `name`, `description`, `image`, `product_type_id`) VALUES ('2', 'Manto Blanco', 'Alfajor relleno de dulce de leche bañado en chocolate blanco.', 'manto_blanco.jpg', '1');
INSERT INTO `alfajores`.`product` (`id`, `name`, `description`, `image`, `product_type_id`) VALUES ('3', 'Manto Fruta', 'Alfajor relleno de mermelada de frutilla bañado en chocolate negro.', 'manto_fruta.jpg', '1');
INSERT INTO `alfajores`.`product` (`id`, `name`, `description`, `image`, `product_type_id`) VALUES ('4', 'Manto Premium', 'Alfajor relleno de dulce de leche bañado en chocolate negro 70% cacao.', 'manto_premium.jpg', '2');
INSERT INTO `alfajores`.`product` (`id`, `name`, `description`, `image`, `product_type_id`) VALUES ('5', 'Manto Almendras', 'Alfajor relleno de dulce de leche y almendras bañado en chocolate negro.', 'manto_almendras.jpg', '2');
INSERT INTO `alfajores`.`product` (`id`, `name`, `description`, `image`, `product_type_id`) VALUES ('6', 'Manto Nueces', 'Alfajor relleno de dulce de leche y nueces bañado en chocolate blanco.', 'manto_nueces.jpg', '2');
INSERT INTO `alfajores`.`product` (`id`, `name`, `description`, `image`, `product_type_id`) VALUES ('7', 'Cono Manto', 'Conito relleno de dulce de leche bañado en chocolate.', 'manto_conito.jpg', '3');

INSERT INTO `alfajores`.`user` (`id`, `email`, `password`, `role`) VALUES ('1', 'marisavidal24@hotmail.com.ar', '$2y$10$dQQmT0.mxpo0J6HBDLAze.LaYGF50HKr5FQMq20/gbEJUv8nDCReS', 'ADMIN');