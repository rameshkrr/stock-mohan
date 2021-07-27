-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 24, 2021 at 10:19 PM
-- Server version: 5.7.33
-- PHP Version: 7.2.34-18+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `active`) VALUES
(1, 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `attribute_value`
--

CREATE TABLE `attribute_value` (
  `id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `attribute_parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attribute_value`
--

INSERT INTO `attribute_value` (`id`, `value`, `attribute_parent_id`) VALUES
(5, 'Blue', 2),
(6, 'White', 2),
(7, 'M', 3),
(8, 'L', 3),
(9, 'Green', 2),
(10, 'Black', 2),
(12, 'Grey', 2),
(13, 'S', 3),
(14, 'test', 1),
(15, 'test2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `active`) VALUES
(6, 'test', 1),
(7, '33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `active`) VALUES
(1, 'Test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `service_charge_value` varchar(255) NOT NULL,
  `vat_charge_value` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `service_charge_value`, `vat_charge_value`, `address`, `phone`, `country`, `message`, `currency`) VALUES
(1, 'Infosys private', '13', '10', 'Madrid', '758676851', 'Spain', 'hello everyone one', 'USD');

-- --------------------------------------------------------

--
-- Table structure for table `credit_note`
--

CREATE TABLE `credit_note` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_no` varchar(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `total_amt` decimal(20,4) NOT NULL,
  `due_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `balance_due` decimal(20,4) NOT NULL,
  `payment_date_1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_1` decimal(20,4) NOT NULL,
  `payment_date_2` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_2` decimal(20,4) NOT NULL,
  `payment_date_3` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_3` decimal(20,4) NOT NULL,
  `claims` decimal(20,4) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gstin` varchar(255) NOT NULL,
  `acc_no` varchar(255) NOT NULL,
  `acc_name` varchar(255) NOT NULL,
  `ifsc` varchar(255) NOT NULL,
  `acc_type` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `store_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `contact_person`, `address`, `phone`, `email`, `gstin`, `acc_no`, `acc_name`, `ifsc`, `acc_type`, `branch`, `store_id`) VALUES
(8, 'ramesh kr', 'ramesh kr', 'Mariamman Temple, Rangi St, Gugai', '09944123652', 'rameshkrr652@gmail.com', '23112', '2313123', 'ramesh kr', '132331', 'Savings', 'Savings', 'wewe');

-- --------------------------------------------------------

--
-- Table structure for table `debit_note`
--

CREATE TABLE `debit_note` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_no` varchar(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `total_amt` decimal(20,4) NOT NULL,
  `due_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `balance_due` decimal(20,4) NOT NULL,
  `payment_date_1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_1` decimal(20,4) NOT NULL,
  `payment_date_2` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_2` decimal(20,4) NOT NULL,
  `payment_date_3` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_3` decimal(20,4) NOT NULL,
  `claims` decimal(20,4) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `permission` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `permission`) VALUES
(1, 'Administrator', 'a:44:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:10:\"deleteUser\";i:4;s:11:\"createGroup\";i:5;s:11:\"updateGroup\";i:6;s:9:\"viewGroup\";i:7;s:11:\"deleteGroup\";i:8;s:14:\"createSupplier\";i:9;s:14:\"updateSupplier\";i:10;s:12:\"viewSupplier\";i:11;s:14:\"deleteSupplier\";i:12;s:11:\"createBrand\";i:13;s:11:\"updateBrand\";i:14;s:9:\"viewBrand\";i:15;s:11:\"deleteBrand\";i:16;s:14:\"createCategory\";i:17;s:14:\"updateCategory\";i:18;s:12:\"viewCategory\";i:19;s:14:\"deleteCategory\";i:20;s:11:\"createStore\";i:21;s:11:\"updateStore\";i:22;s:9:\"viewStore\";i:23;s:11:\"deleteStore\";i:24;s:15:\"createAttribute\";i:25;s:15:\"updateAttribute\";i:26;s:13:\"viewAttribute\";i:27;s:15:\"deleteAttribute\";i:28;s:13:\"createProduct\";i:29;s:13:\"updateProduct\";i:30;s:11:\"viewProduct\";i:31;s:13:\"deleteProduct\";i:32;s:11:\"createOrder\";i:33;s:11:\"updateOrder\";i:34;s:9:\"viewOrder\";i:35;s:11:\"deleteOrder\";i:36;s:13:\"createAccount\";i:37;s:13:\"updateAccount\";i:38;s:11:\"viewAccount\";i:39;s:13:\"deleteAccount\";i:40;s:11:\"viewReports\";i:41;s:13:\"updateCompany\";i:42;s:11:\"viewProfile\";i:43;s:13:\"updateSetting\";}'),
(4, 'admin', 'a:44:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:10:\"deleteUser\";i:4;s:11:\"createGroup\";i:5;s:11:\"updateGroup\";i:6;s:9:\"viewGroup\";i:7;s:11:\"deleteGroup\";i:8;s:14:\"createSupplier\";i:9;s:14:\"updateSupplier\";i:10;s:12:\"viewSupplier\";i:11;s:14:\"deleteSupplier\";i:12;s:11:\"createBrand\";i:13;s:11:\"updateBrand\";i:14;s:9:\"viewBrand\";i:15;s:11:\"deleteBrand\";i:16;s:14:\"createCategory\";i:17;s:14:\"updateCategory\";i:18;s:12:\"viewCategory\";i:19;s:14:\"deleteCategory\";i:20;s:11:\"createStore\";i:21;s:11:\"updateStore\";i:22;s:9:\"viewStore\";i:23;s:11:\"deleteStore\";i:24;s:15:\"createAttribute\";i:25;s:15:\"updateAttribute\";i:26;s:13:\"viewAttribute\";i:27;s:15:\"deleteAttribute\";i:28;s:13:\"createProduct\";i:29;s:13:\"updateProduct\";i:30;s:11:\"viewProduct\";i:31;s:13:\"deleteProduct\";i:32;s:11:\"createOrder\";i:33;s:11:\"updateOrder\";i:34;s:9:\"viewOrder\";i:35;s:11:\"deleteOrder\";i:36;s:13:\"createAccount\";i:37;s:13:\"updateAccount\";i:38;s:11:\"viewAccount\";i:39;s:13:\"deleteAccount\";i:40;s:11:\"viewReports\";i:41;s:13:\"updateCompany\";i:42;s:11:\"viewProfile\";i:43;s:13:\"updateSetting\";}'),
(5, 'SalesRep', 'a:5:{i:0;s:11:\"createOrder\";i:1;s:11:\"updateOrder\";i:2;s:9:\"viewOrder\";i:3;s:11:\"deleteOrder\";i:4;s:11:\"viewReports\";}');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `sales_rep` int(11) DEFAULT NULL,
  `date_time` varchar(255) NOT NULL,
  `gross_amount` varchar(255) NOT NULL,
  `service_charge_rate` varchar(255) NOT NULL,
  `service_charge` varchar(255) NOT NULL,
  `vat_charge_rate` varchar(255) NOT NULL,
  `vat_charge` varchar(255) NOT NULL,
  `net_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `paid_status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `bill_no`, `customer_name`, `customer_address`, `customer_phone`, `sales_rep`, `date_time`, `gross_amount`, `service_charge_rate`, `service_charge`, `vat_charge_rate`, `vat_charge`, `net_amount`, `discount`, `paid_status`, `user_id`) VALUES
(1, 'BILPR-BAF1', 'ramesh kr', 'Mariamman Temple, Rangi St, Gugai', '09944123652', NULL, '1626710378', '3000.00', '13', '390.00', '10', '300.00', '3670.00', '20', 2, 1),
(2, 'BILPR-6A74', 'ramesh kr', 'Mariamman Temple, Rangi St, Gugai', '09944123652', NULL, '1626711183', '30000.00', '13', '3900.00', '10', '3000.00', '36900.00', '', 2, 1),
(3, 'BILPR-4608', 'ramesh kr', 'Mariamman Temple, Rangi St, Gugai', '09944123652', NULL, '1626955866', '3000.00', '13', '390.00', '10', '300.00', '3690.00', '', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders_item`
--

CREATE TABLE `orders_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_item`
--

INSERT INTO `orders_item` (`id`, `order_id`, `product_id`, `qty`, `rate`, `amount`) VALUES
(1, 1, 1, '1', '3000', '3000.00'),
(2, 2, 1, '10', '3000', '30000.00'),
(3, 3, 1, '1', '3000', '3000.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `barcode` text,
  `barcode_text` text,
  `description` text NOT NULL,
  `attribute_value_id` text,
  `brand_id` text NOT NULL,
  `category_id` text NOT NULL,
  `store_id` int(11) NOT NULL,
  `availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `sku`, `price`, `qty`, `image`, `barcode`, `barcode_text`, `description`, `attribute_value_id`, `brand_id`, `category_id`, `store_id`, `availability`) VALUES
(1, 'test', 'test', '3000', '8', 'assets/images/product_image/60f5a15ae6be7.png', NULL, NULL, '<p></p><div><div>Test</div></div><p></p>', 'null', '[\"6\",\"7\"]', '[\"1\"]', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `active`) VALUES
(1, 'test', 1),
(2, 'wewe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_basic`
--

CREATE TABLE `supplier_basic` (
  `id` int(11) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `supplier_address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gstin` varchar(255) NOT NULL,
  `acc_num` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ifsc` varchar(255) NOT NULL,
  `acc_type` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_basic`
--

INSERT INTO `supplier_basic` (`id`, `supplier_name`, `contact_person`, `supplier_address`, `phone`, `email`, `gstin`, `acc_num`, `name`, `ifsc`, `acc_type`, `branch`) VALUES
(19, 'Ramesh', 'kr', '132 shevapet', '9944123652', 'rameshkrr652@gmail.com', '88787', '7888898', '7899898797', '67471JJJJ', 'saving', 'Shevapet'),
(20, '443324', '32342234', '2342344', '234234432', 'rameshkrr652@gmail.com', '324432', '234242', '234423', '243243', 'Current', '342234');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `phone`, `gender`) VALUES
(1, 'adminknst', '$2y$10$yfi5nUQGXUZtMdl27dWAyOd/jMOmATBpiUvJDmUu9hJ5Ro6BE5wsK', 'admin@admin.com', 'john', 'doe', '80789998', 1),
(6, 'ramesh', '$2y$10$50RYf9TFy/az5pLO2auk6OoZ5WyEN7IIdpHbm2rvi2YoMmAaGioSW', 'ramesh@gmail.com', 'ramesh', 'kr', '09944123652', 1),
(7, 'rameshkrr', '$2y$10$MYaY9c0/lhN66uNmn0mqL.X7ty2/K4uFbBZZ3l5nv3qczw/zCMt/K', 'ramesh@gmal.com', 'ramesh', 'kr', '09944123652', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(7, 6, 4),
(8, 7, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_value`
--
ALTER TABLE `attribute_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debit_note`
--
ALTER TABLE `debit_note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_item`
--
ALTER TABLE `orders_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_basic`
--
ALTER TABLE `supplier_basic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attribute_value`
--
ALTER TABLE `attribute_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `debit_note`
--
ALTER TABLE `debit_note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders_item`
--
ALTER TABLE `orders_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier_basic`
--
ALTER TABLE `supplier_basic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
