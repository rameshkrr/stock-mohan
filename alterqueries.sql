ALTER TABLE `products` ADD `barcode` TEXT NULL AFTER `image`;
ALTER TABLE `orders` ADD `sales_rep` INT(11) NULL AFTER `customer_phone`;
ALTER TABLE `products` ADD `barcode_text` TEXT NULL AFTER `barcode`;
