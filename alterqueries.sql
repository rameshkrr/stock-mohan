ALTER TABLE `products` ADD `barcode` TEXT NULL AFTER `image`;
ALTER TABLE `orders` ADD `sales_rep` INT(11) NULL AFTER `customer_phone`;
ALTER TABLE `products` ADD `barcode_text` TEXT NULL AFTER `barcode`;

ALTER TABLE `orders` ADD `created_date` DATETIME NULL AFTER `date_time`;

ALTER TABLE `orders` ADD `balance_amount` VARCHAR(255) NOT NULL DEFAULT '0' AFTER `net_amount`, ADD `due_amount` VARCHAR(255) NOT NULL DEFAULT '0' AFTER `balance_amount`;

ALTER TABLE `company` ADD `gstin` VARCHAR(255) NULL AFTER `vat_charge_value`;

ALTER TABLE `orders` ADD `order_number` VARCHAR(11) NULL AFTER `id`;
ALTER TABLE `orders` ADD `order_sequence` VARCHAR(11) NULL AFTER `order_number`;

ALTER TABLE `orders` ADD `total_gst_amout` DECIMAL(20,2) NOT NULL AFTER `vat_charge`;
