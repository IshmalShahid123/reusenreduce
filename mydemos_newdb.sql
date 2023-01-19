-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2023 at 01:05 PM
-- Server version: 5.7.39-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydemos_newdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_ac`
--

CREATE TABLE `admin_ac` (
  `aid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `account_type` varchar(5) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_ac`
--

INSERT INTO `admin_ac` (`aid`, `username`, `email`, `password`, `account_type`, `status`) VALUES
(1, 'admin', '', '81dc9bdb52d04dc20036dbd8313ed055', 'ADMIN', 1),
(2, 'test', '', '81dc9bdb52d04dc20036dbd8313ed055', 'USER', 1),
(3, 'test2', '', '81dc9bdb52d04dc20036dbd8313ed055', 'USER', 1),
(4, 'testqw', '', '202cb962ac59075b964b07152d234b70', 'USER', 1),
(5, 'testwe', '', '202cb962ac59075b964b07152d234b70', 'USER', 1),
(6, 'testuser', '', '81dc9bdb52d04dc20036dbd8313ed055', 'USER', 1),
(7, 'Tooba', '', '81dc9bdb52d04dc20036dbd8313ed055', 'USER', 1),
(8, 'zeeshan', 'zeeshan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'USER', 1),
(9, 'Ishmal Shahid ', '', '827ccb0eea8a706c4c34a16891f84e7b', 'USER', 1),
(10, 'jamalzahid0@gmail.com', '', 'd10578a421302c4c05f75a9faffb8527', 'USER', 1),
(12, 'faisal', 'faisal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'USER', 1),
(13, 'testtooba', 'abc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'USER', 1);

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE `advertise` (
  `adid` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`adid`, `image`, `url`) VALUES
(9, 'http://mydemos.cf/images/ads/05-01-2023-1672956759.jpg', 'http://mydemos.cf/');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `cid` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`cid`, `nid`, `c_name`, `create_date`, `status`) VALUES
(1, 1, 'Agricultural Waste', '2023-01-05 20:25:07', 1),
(2, 1, 'Chemical Waste', '2023-01-05 20:25:25', 1),
(3, 1, 'Hospital Waste', '2023-01-05 20:25:46', 1),
(4, 1, 'Industrial Waste', '2023-01-05 20:26:02', 1),
(5, 2, 'Cardboard Waste', '2023-01-05 20:26:27', 1),
(6, 2, 'Paper Waste', '2023-01-05 20:26:40', 1),
(7, 2, 'Plastic Waste', '2023-01-05 20:26:52', 1),
(8, 2, 'Solid Waste', '2023-01-05 20:27:05', 1),
(9, 2, 'Wood Waste', '2023-01-05 20:27:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `C_ID` int(11) NOT NULL,
  `C_NAME` varchar(500) NOT NULL,
  `C_PHOTO` varchar(1000) NOT NULL,
  `C_LINK` varchar(1000) NOT NULL,
  `C_TYPE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `colours`
--

CREATE TABLE `colours` (
  `coid` int(11) NOT NULL,
  `colorname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colours`
--

INSERT INTO `colours` (`coid`, `colorname`) VALUES
(1, 'Blue'),
(2, 'Red'),
(3, 'Green'),
(4, 'Yellow'),
(5, 'Pink');

-- --------------------------------------------------------

--
-- Table structure for table `nature`
--

CREATE TABLE `nature` (
  `nid` int(11) NOT NULL,
  `n_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nature`
--

INSERT INTO `nature` (`nid`, `n_name`, `status`) VALUES
(1, 'Hazardous Waste', 0),
(2, 'Non-Hazardous Waste', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orderchild`
--

CREATE TABLE `orderchild` (
  `ocid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `quantity` varchar(15) NOT NULL,
  `unit_price` varchar(100) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `opid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderchild`
--

INSERT INTO `orderchild` (`ocid`, `pid`, `color`, `size`, `quantity`, `unit_price`, `total_price`, `opid`) VALUES
(1, 7, '', '', '60', '300', '18000', 1),
(2, 2, '', '', '10', '500', '5000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orderparent`
--

CREATE TABLE `orderparent` (
  `opid` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `city` varchar(50) NOT NULL,
  `grand_total` varchar(100) NOT NULL,
  `note` varchar(1000) NOT NULL,
  `payment_method` varchar(100) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'PENDING',
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderparent`
--

INSERT INTO `orderparent` (`opid`, `c_name`, `email`, `address`, `phone`, `city`, `grand_total`, `note`, `payment_method`, `status`, `order_time`) VALUES
(1, 'faisal', 'faisal@gmail.com', 'test order', '03333333333', 'Karachi', '18000', ' ', 'COD', 'PENDING', '2023-01-12 20:25:17'),
(2, 'Ishmalshahid', 'ishmalshahid500@gmail.com', 'North Khi', '03113219585', 'KarachI', '5000', ' ', 'JazzCash', 'PENDING', '2023-01-12 22:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `scid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `old_price` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `imageone` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL,
  `return_policy` varchar(100) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `discount` varchar(10) NOT NULL,
  `purchasing_price` varchar(100) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `added_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `sid`, `nid`, `cid`, `scid`, `tid`, `name`, `brand_name`, `price`, `old_price`, `description`, `image`, `imageone`, `note`, `return_policy`, `weight`, `discount`, `purchasing_price`, `added_on`, `added_by`, `status`) VALUES
(1, 1, 2, 7, 1, 2, 'Food Wrapper Mix', 'Mix', '250', '265', 'Plastic wrapper Mix', 'http://mydemos.cf/images/products/05-01-2023-1672952195-imageone.jpg', 'http://mydemos.cf/images/products/05-01-2023-1672952195-imagetwo.jpg', 'No', 'No Return Policy', '5', '10', '230', '2023-01-11 18:59:00', NULL, 1),
(2, 2, 1, 1, 6, 1, 'test product', 'test', '500', '550', 'test product', 'http://mydemos.cf/images/products/06-01-2023-1673016670-imageone.jpg', '', 'No', 'No Return Policy', '10', '10', '450', '2023-01-11 18:59:06', 2, 1),
(4, 3, 2, 7, 3, 1, 'test product', 'testing', '62', '99', 'test product', 'http://mydemos.cf/images/products/06-01-2023-1673038371-imageone.jpg', '', 'abc', 'available', '50', '10', '50', '2023-01-11 18:59:16', 3, 1),
(7, 1, 2, 7, 1, 2, 'Food Wrapper Mixxxx', 'Mix', '300', '320', 'Test Product', 'http://mydemos.cf/images/products/11-01-2023-1673465825-imageone.jpg', '', 'No Any Note', 'No Return Policy', '60', '10', '290', '2023-01-11 19:37:05', 1, 1),
(8, 4, 1, 2, 6, 1, 'chemical', 'testing', '62', '99', 'well used ', 'http://mydemos.cf/images/products/13-01-2023-1673608374-imageone.jpg', '', 'abc', 'available', '1', '10', '50', '2023-01-13 11:12:54', 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `p_banner`
--

CREATE TABLE `p_banner` (
  `p_bid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `p_colour`
--

CREATE TABLE `p_colour` (
  `pcid` int(11) NOT NULL,
  `coid` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_colour`
--

INSERT INTO `p_colour` (`pcid`, `coid`, `pid`) VALUES
(1, 1, 5),
(2, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `p_size`
--

CREATE TABLE `p_size` (
  `psid` int(11) NOT NULL,
  `sizid` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `p_type`
--

CREATE TABLE `p_type` (
  `tid` int(11) NOT NULL,
  `t_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_type`
--

INSERT INTO `p_type` (`tid`, `t_name`) VALUES
(1, 'Hazardous Waste'),
(2, 'Non-Hazardous Waste');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `sid` int(11) NOT NULL,
  `shop_name` varchar(100) NOT NULL,
  `shop_address` varchar(200) NOT NULL,
  `shop_phone` varchar(15) NOT NULL,
  `shop_city` varchar(50) NOT NULL,
  `shop_email` varchar(100) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `whatsapp_number` varchar(15) NOT NULL,
  `reciver_number` varchar(15) NOT NULL,
  `bank_acc_title` varchar(200) NOT NULL,
  `bank_acc_number` varchar(30) NOT NULL,
  `branch_code` varchar(50) NOT NULL,
  `bank_name` varchar(200) NOT NULL,
  `branch_address` varchar(200) NOT NULL,
  `bank_branch_city` varchar(100) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `added_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`sid`, `shop_name`, `shop_address`, `shop_phone`, `shop_city`, `shop_email`, `person_name`, `whatsapp_number`, `reciver_number`, `bank_acc_title`, `bank_acc_number`, `branch_code`, `bank_name`, `branch_address`, `bank_branch_city`, `create_date`, `added_by`, `status`) VALUES
(1, 'Plastic Waste Material Store', 'Karachi', '03333333333', 'Karachi', 'mail@gmail.com', 'Test', '0333333333', '0333333333', '02254846465', 'MCB', '1002', 'MCB Bank', 'Nazmabad', 'Karachi', '2023-01-05 20:39:01', NULL, 1),
(2, 'Chemical Store', 'Lahore, Pakistan', '03333333333', 'Lahore', 'mail@gmail.com', 'Faisal', '0333333333', 'Faisal', 'M FAISAL', '4454545454545565656', '5689', 'MCB Bank', 'MCB LAHORE', 'LAHORE', '2023-01-06 14:44:26', 2, 1),
(3, 'Waste', '1/678 block c johar', '03400200541', 'karachi', 'waste@gmail.com', 'tooba', '0340020054', 'tooba', 'tooba', '34567788889989', '1234', 'hbl', 'nazimabad', 'karachi', '2023-01-06 20:46:45', 3, 1),
(4, 'Waste', '1/678 block c johar', '03400264702', 'karachi', 'waste@gmail.com', 'tooba', '03400264702', 'tooba', 'tooba', '34567788889989', '1234', 'hbl', 'nazimabad', 'karachi', '2023-01-13 11:10:59', 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `sizid` int(11) NOT NULL,
  `size_n` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`sizid`, `size_n`) VALUES
(1, 'Xl');

-- --------------------------------------------------------

--
-- Table structure for table `Slider`
--

CREATE TABLE `Slider` (
  `S_ID` int(11) NOT NULL,
  `SLIDER_IMG` mediumtext NOT NULL,
  `URL` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Slider`
--

INSERT INTO `Slider` (`S_ID`, `SLIDER_IMG`, `URL`) VALUES
(10, 'http://mydemos.cf/slider/slide1.png', '#'),
(11, 'http://mydemos.cf/slider/slide2.png', '#'),
(12, 'http://mydemos.cf/slider/slide3.png', '#');

-- --------------------------------------------------------

--
-- Table structure for table `subcatagory`
--

CREATE TABLE `subcatagory` (
  `scid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `sc_name` varchar(50) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcatagory`
--

INSERT INTO `subcatagory` (`scid`, `cid`, `nid`, `sc_name`, `create_date`, `status`) VALUES
(1, 7, 2, 'Food wrappers', '2023-01-05 20:29:47', 1),
(2, 7, 2, 'plastic bottles', '2023-01-05 20:30:05', 1),
(3, 7, 2, 'plastic bottle caps', '2023-01-05 20:30:22', 1),
(4, 7, 2, 'plastic grocery bags', '2023-01-05 20:30:37', 1),
(5, 7, 2, 'plastic straws', '2023-01-05 20:30:56', 1),
(6, 1, 1, 'agriculture', '2023-01-06 11:05:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ticker`
--

CREATE TABLE `ticker` (
  `T_ID` int(11) NOT NULL,
  `T_DESC` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticker`
--

INSERT INTO `ticker` (`T_ID`, `T_DESC`) VALUES
(1, 'Test Slider');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_ac`
--
ALTER TABLE `admin_ac`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `advertise`
--
ALTER TABLE `advertise`
  ADD PRIMARY KEY (`adid`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `colours`
--
ALTER TABLE `colours`
  ADD PRIMARY KEY (`coid`);

--
-- Indexes for table `nature`
--
ALTER TABLE `nature`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `orderchild`
--
ALTER TABLE `orderchild`
  ADD PRIMARY KEY (`ocid`);

--
-- Indexes for table `orderparent`
--
ALTER TABLE `orderparent`
  ADD PRIMARY KEY (`opid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `p_banner`
--
ALTER TABLE `p_banner`
  ADD PRIMARY KEY (`p_bid`);

--
-- Indexes for table `p_colour`
--
ALTER TABLE `p_colour`
  ADD PRIMARY KEY (`pcid`);

--
-- Indexes for table `p_size`
--
ALTER TABLE `p_size`
  ADD PRIMARY KEY (`psid`);

--
-- Indexes for table `p_type`
--
ALTER TABLE `p_type`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`sizid`);

--
-- Indexes for table `Slider`
--
ALTER TABLE `Slider`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `subcatagory`
--
ALTER TABLE `subcatagory`
  ADD PRIMARY KEY (`scid`);

--
-- Indexes for table `ticker`
--
ALTER TABLE `ticker`
  ADD PRIMARY KEY (`T_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_ac`
--
ALTER TABLE `admin_ac`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `advertise`
--
ALTER TABLE `advertise`
  MODIFY `adid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colours`
--
ALTER TABLE `colours`
  MODIFY `coid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nature`
--
ALTER TABLE `nature`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderchild`
--
ALTER TABLE `orderchild`
  MODIFY `ocid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderparent`
--
ALTER TABLE `orderparent`
  MODIFY `opid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `p_banner`
--
ALTER TABLE `p_banner`
  MODIFY `p_bid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p_colour`
--
ALTER TABLE `p_colour`
  MODIFY `pcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_size`
--
ALTER TABLE `p_size`
  MODIFY `psid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p_type`
--
ALTER TABLE `p_type`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `sizid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Slider`
--
ALTER TABLE `Slider`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subcatagory`
--
ALTER TABLE `subcatagory`
  MODIFY `scid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ticker`
--
ALTER TABLE `ticker`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
