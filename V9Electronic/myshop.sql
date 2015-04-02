-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2015 at 02:56 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myshop`
--

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
(4, 'iPads'),
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
  `ip_add` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(6, 0, 2);

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
  `customer_contact` int(10) NOT NULL,
  `customer_address` int(200) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `brand_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keywords`, `status`) VALUES
(4, 1, 2, '2015-02-08 01:10:29', 'Dell Laptop', 'blue_dell_laptop.jpg', 'Dell_laptop.jpg', 'Red-Dell-Laptop.jpg', 500, '<p><strong>Specification: </strong>1 TB, 8 GB RAM, 2.4 GHz, Windows 8.1, Core i5 Prcoessor</p>', 'dell, laptops', 'on'),
(5, 1, 1, '2015-02-08 01:10:48', 'HP Laptops', 'hp-laptops-pavilion-dv7.jpg', '', '', 450, '<p>This is a very good laptop for all kinds of use</p>', 'HP, hp, laptops', 'on'),
(6, 2, 5, '2015-02-08 01:11:27', 'Samsung Desktop', 'samsung-all-in-one-lead.jpg', '', '', 850, '<p>All-in-one Samsung computer. High-end graphics</p>', 'samsung, desktops, pcs, computer', 'on'),
(7, 4, 6, '2015-02-08 01:23:11', 'Sony Video Camera', 'sony_videocamera.jpg', '', '', 1050, '<p>Brand New high definition video camera</p>', 'video camera, sony, cameras', 'on'),
(8, 7, 5, '2015-02-08 01:12:59', 'Samsung TV', 'samsung_SmartTV.jpg', '', '', 1400, '<p>Samsung smart TV. Maic remote control</p>', 'tv, smart tv, samsung', 'on'),
(9, 3, 3, '2015-02-08 01:13:32', 'Nokia Phone', '1020_Nokia.jpg', '', '', 720, '<p>Brand new Nokia Lumnia 1020. High definition.</p>', 'mobile phones, nokia, lumnia', 'on'),
(10, 6, 7, '2015-02-08 01:13:57', 'E-Reader', 'apple-ebooks_.jpg', '', '', 89, '<p>Apple E-Reader. Stores approximaely 1000 e-books.</p>', 'e-books, e-reader, apple', 'on'),
(11, 5, 1, '2015-02-08 02:27:46', 'Windows Tablet', 'windows_tablet.png', 'microsoft_surface_tablet.jpg', 'Asus-2.jpg', 639, '<p>Microsoft Surface 2 | 64GB.&nbsp;The price includes a brand new keyboard.&nbsp;Product Features:10.8" Touch Screen, 1080p Full HD Screen, 64GB Storage, 2GB RAM, 16:9 Aspect Ratio, 3.5MP &amp; 5MP Cameras.</p>', 'tablets, windows tablets', 'on');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
