use `vstech`;

CREATE TABLE IF NOT EXISTS `products` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `manufacturer` VARCHAR(255) NOT NULL,
    `price` double NOT NULL,
    `quantity` int(11) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=INNODB CHARACTER SET=utf8;
CREATE UNIQUE INDEX `product_idx` ON products(`name`, `manufacturer`);

INSERT INTO products (`name`, `manufacturer`, `price`, `quantity`) VALUES
('Seringa 1ml Para Insulina C/ Agulha 8x0,30mm 30g - Solidor cx c\100un','Labor Import',16.90, 100),
('Riohex 0,5% (100ml)', 'Rioquímica', 3.50, 77);