-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2015 at 07:34 PM
-- Server version: 5.5.41-cll-lve
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `theco560_myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_email`, `admin_pass`) VALUES
(1, 'arjun@v9.com', 'urravige00977$'),
(2, 'james@v9.com', 'urravige00977$');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(10) NOT NULL AUTO_INCREMENT,
  `brand_title` text NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Dell'),
(3, 'Nokia'),
(5, 'Samsung'),
(6, 'Sony'),
(7, 'Apple'),
(8, 'Lenovo');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(11, '193.1.57.4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_title` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Laptops'),
(2, 'Computers'),
(3, 'Mobiles'),
(4, 'Cameras'),
(5, 'Tablets'),
(6, 'E-Books'),
(7, 'TVs');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(25) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` int(30) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(17, 'James Ngondo', 'jay@gmail.com', '1234', 'Ireland', 'Galway', 0, 'Newcastle', '42z556.jpg', '79.97.223.49'),
(20, 'James Ngondo', 'jaymengondo2011@gmail.com', 'test', 'Ireland', 'Galway', 831311321, '41 Renmore, Galway', 'Penguins.jpg', '193.1.57.1'),
(22, 'Hari Kharel', 'kharelhari34@gmail.com', '   ', 'Ireland', 'Glasgow ', 2147483647, 'fkdk', 'AWLogo.png', '79.97.223.49'),
(23, 'Arjun Kharel', 'adgn353@gmail.com', '1234', 'Ireland', 'Galway', 2147483647, '66 Newcastle Road', 'IMG_20150321_144348.jpg', '79.97.223.49');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE IF NOT EXISTS `customer_orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `total_products` int(100) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` text NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `total_products`, `order_date`, `order_status`) VALUES
(68, 23, 2000, 969228141, 2, '2015-04-22 22:21:02', 'completed'),
(69, 23, 4150, 1893651699, 6, '2015-04-22 23:23:53', 'completed'),
(70, 23, 3750, 294795033, 4, '2015-04-22 23:24:57', 'Pending'),
(71, 23, 850, 2105935466, 2, '2015-04-22 23:26:57', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int(10) NOT NULL AUTO_INCREMENT,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `payment_date` text NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `payment_date`) VALUES
(4, 33399371, 1500, 'Paypal', 1524, '19/04/2015'),
(5, 133443901, 2500, 'Paypal', 2500, '000'),
(6, 54654, 0, 'Select Payment', 43, '43'),
(7, 670505132, 2500, 'Paypal', 1450, '09042015'),
(8, 1078745022, 2000, 'Paypal', 2588, '20/04/2015'),
(9, 843811679, 2889, 'Bank Transfer', 101020, '20/04/2015'),
(10, 2004643434, 2220, 'Bank Transfer', 12345, '21/04/2015'),
(11, 1929597582, 3550, 'Bank Transfer', 2147483647, '10/14/1255'),
(12, 969228141, 5000, 'Western Uniton', 1542, '22/04/2015'),
(13, 1893651699, 4150, 'Western Uniton', 1258, '23/04/2015');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE IF NOT EXISTS `pending_orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `order_status` text NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=159 ;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `order_status`) VALUES
(145, 23, 969228141, 8, 1, 'completed'),
(146, 23, 969228141, 13, 1, 'completed'),
(147, 23, 1893651699, 5, 3, 'completed'),
(148, 23, 1893651699, 7, 1, 'completed'),
(149, 23, 1893651699, 8, 1, 'completed'),
(150, 23, 1893651699, 12, 1, 'completed'),
(151, 23, 1893651699, 13, 1, 'completed'),
(152, 23, 1893651699, 14, 1, 'completed'),
(153, 23, 294795033, 5, 2, 'Pending'),
(154, 23, 294795033, 6, 1, 'Pending'),
(155, 23, 294795033, 7, 1, 'Pending'),
(156, 23, 294795033, 8, 1, 'Pending'),
(157, 23, 2105935466, 13, 1, 'Pending'),
(158, 23, 2105935466, 14, 1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `brand_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keywords`, `status`) VALUES
(5, 1, 1, '2015-02-08 01:10:48', 'HP Laptops', 'hp-laptops-pavilion-dv7.jpg', '', '', 450, '<p>This is a very good laptop for all kinds of use</p>', 'HP, hp, laptops', 'on'),
(6, 2, 5, '2015-02-08 01:11:27', 'Samsung Desktop', 'samsung-all-in-one-lead.jpg', '', '', 850, '<p>All-in-one Samsung computer. High-end graphics</p>', 'samsung, desktops, pcs, computer', 'on'),
(7, 4, 6, '2015-02-08 01:23:11', 'Sony Video Camera', 'sony_videocamera.jpg', '', '', 1050, '<p>Brand New high definition video camera</p>', 'video camera, sony, cameras', 'on'),
(8, 7, 5, '2015-02-08 01:12:59', 'Samsung TV', 'samsung_SmartTV.jpg', '', '', 1400, '<p>Samsung smart TV. Maic remote control</p>', 'tv, smart tv, samsung', 'on'),
(9, 3, 3, '2015-02-08 01:13:32', 'Nokia Phone', '1020_Nokia.jpg', '', '', 720, '<p>Brand new Nokia Lumnia 1020. High definition.</p>', 'mobile phones, nokia, lumnia', 'on'),
(12, 1, 8, '2015-04-22 14:46:56', 'Lenovo', 'lenovo.jpg', 'Lenovo 2.jpg', 'Lenovo 3.jpg', 400, '<p><strong style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;">-</strong><span style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;">&nbsp;Great value laptop for all your daily activities</span><br style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;" /><br style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;" /><span style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;">- Compact dimensions make it ideal for computing on the go - great for lectures</span><br style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;" /><br style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;" /><span style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;">- AccuType keyboard provides comfortable and precise computing</span><br style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;" /><br style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;" /><span style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;">- VeriFace Pro face recognition makes unlocking your PC safe and simple</span></p>', '', 'on'),
(13, 1, 10, '0000-00-00 00:00:00', ' Alienware', 'AlienWare 3.jpg', 'alienware 2.jpg', 'Alienware.jpg', 600, '<p><span style="color: #252525; font-family: sans-serif; font-size: 14px; line-height: 22.3999996185303px;">The Graphics Amplifier enables an Alienware laptop to run a full secondary desktop GPU</span></p>', 'Alienware, alien, ware', 'on'),
(14, 1, 11, '0000-00-00 00:00:00', ' ASUS', 'ASUS 3.jpg', 'Asus.png', 'ASUS 2.jpg', 250, '<p><span style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;">- Great all-round laptop for working on the go</span><br style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;" /><br style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;" /><span style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;">- 14&rdquo; screen gives you the ideal combination of portability and visibility</span><br style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;" /><br style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;" /><span style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;">- Intel Celeron &nbsp;processor gives you all the speed you need for browsing the web and typing documents</span><br style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;" /><br style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;" /><span style="color: #333333; font-family: Arial, Helvetica, sans-serif; line-height: 18px;">- Instant On resumes from sleep in just 2 seconds, so you can get to work much faster</span></p>', 'Asus, sus, Asus, X453MA 14', 'on');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
