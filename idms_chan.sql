-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 05:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idms_chan`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `customer_fname` char(50) NOT NULL,
  `customer_lname` char(50) NOT NULL,
  `customer_contact` double NOT NULL,
  `customer_address` varchar(150) NOT NULL,
  `customer_email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `username`, `password`, `customer_fname`, `customer_lname`, `customer_contact`, `customer_address`, `customer_email`) VALUES
(1, 'charles', 'charles', 'Charles', 'Chan', 9451021456, 'Lahug Cebu City', 'charles01@gmail.com'),
(2, 'jaime', 'jaime', 'Jaime', 'Jayme', 9221234567, 'cebu city', 'jaime@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `delivery_initiated` date NOT NULL,
  `delivery_received` date NOT NULL,
  `delivery_remarks` char(10) NOT NULL,
  `delivery_fee` float NOT NULL,
  `sales_id` int(11) NOT NULL,
  `delivery_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(11) NOT NULL,
  `inventory_rawgoods_id` int(11) NOT NULL,
  `inventory_rawgoods` varchar(150) NOT NULL,
  `inventory_stockqty` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `date_received` date NOT NULL,
  `inventory_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `inventory_rawgoods_id`, `inventory_rawgoods`, `inventory_stockqty`, `supplier_id`, `date_received`, `inventory_status`) VALUES
(16, 20, 'Spicy Hotdog', 0, 1, '2021-05-12', 1),
(17, 21, 'Spicy Hotdog', 0, 1, '2021-05-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `stocks_qty` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `raw_goods_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `stocks_qty`, `product_price`, `raw_goods_id`) VALUES
(14, 'Spicy Hotdog On Bun', 30, 10, 0),
(16, 'Spicy Hotdog On Stick', 80, 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `raw_goods`
--

CREATE TABLE `raw_goods` (
  `rawgoods_id` int(11) NOT NULL,
  `rawgoods_name` char(150) NOT NULL,
  `stock_qty` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raw_goods`
--

INSERT INTO `raw_goods` (`rawgoods_id`, `rawgoods_name`, `stock_qty`, `supplier_id`) VALUES
(1, 'Hotdog', 100, 1),
(2, 'Hungarian', 50, 1),
(3, 'Cheese Dog', 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty_sold` int(11) NOT NULL,
  `profit` float NOT NULL,
  `sales_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `customer_id`, `product_id`, `qty_sold`, `profit`, `sales_status`) VALUES
(15, 1, 13, 1, 173, 2),
(16, 2, 16, 20, 350, 0),
(17, 1, 14, 20, 250, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_attendant`
--

CREATE TABLE `shop_attendant` (
  `shop_attendant_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `shop_attendant_name` char(50) NOT NULL,
  `shop_attendant_address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_attendant`
--

INSERT INTO `shop_attendant` (`shop_attendant_id`, `username`, `password`, `shop_attendant_name`, `shop_attendant_address`) VALUES
(1, 'shop', 'shop', 'Jeff Montano - Hotdog On The Go', 'Talamban, Cebu City');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `supplier_name` char(50) NOT NULL,
  `supplier_address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `username`, `password`, `supplier_name`, `supplier_address`) VALUES
(1, 'supplier', 'supplier', 'The Pork Shop', '490-2 Cor. V. Rama Ave, J Labra St');

-- --------------------------------------------------------

--
-- Table structure for table `supply_history`
--

CREATE TABLE `supply_history` (
  `supply_history_id` int(11) NOT NULL,
  `shop_attendant_id` int(11) NOT NULL,
  `raw_goods_id` int(11) NOT NULL,
  `date_sent` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supply_history`
--

INSERT INTO `supply_history` (`supply_history_id`, `shop_attendant_id`, `raw_goods_id`, `date_sent`) VALUES
(17, 1, 17, '2021-05-12'),
(18, 1, 18, '2021-05-12'),
(19, 1, 19, '2021-05-12'),
(20, 1, 20, '2021-05-12'),
(21, 1, 21, '2021-05-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `raw_goods`
--
ALTER TABLE `raw_goods`
  ADD PRIMARY KEY (`rawgoods_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `shop_attendant`
--
ALTER TABLE `shop_attendant`
  ADD PRIMARY KEY (`shop_attendant_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `supply_history`
--
ALTER TABLE `supply_history`
  ADD PRIMARY KEY (`supply_history_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `raw_goods`
--
ALTER TABLE `raw_goods`
  MODIFY `rawgoods_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `shop_attendant`
--
ALTER TABLE `shop_attendant`
  MODIFY `shop_attendant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supply_history`
--
ALTER TABLE `supply_history`
  MODIFY `supply_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
