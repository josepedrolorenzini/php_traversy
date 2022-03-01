CREATE TABLE `products_crud`.`products` ( `id` INT NOT NULL AUTO_INCREMENT ,  
`title` VARCHAR(512) NOT NULL ,  `description` LONGTEXT NULL ,  `image` VARCHAR(248) NULL ,  
`price` DECIMAL(10) NOT NULL ,  `create_date` DATETIME NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB;


-- insert data into products
INSERT INTO `products` (`id`, `title`, `description`, `image`, `price`, `create_date`) 
VALUES (NULL, 'iphone 11', 'description', NULL, '2000', '2022-02-25 01:50:07.000000'), 
(NULL, 'galaxy z20', NULL, NULL, '1800', '2022-02-25 01:50:07.000000');