-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2017 at 05:34 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `description`, `price`) VALUES
(1, 'iPhone 6S', '/cart/img/iphone6.jpg', 'With a beautiful finish and a light weight, the Apple iPhone 6 is stylish and comfortable to carry. The phone has a multitouch display screen with IPS technology, letting you use it easily and making pictures and videos bright and clear. The iSight camera of the phone has an autofocus, True Tone flash and other features like face detection and panorama to help you take good pictures.', 38499),
(2, 'Macbook Pro', '/cart/img/macbook.jpg', 'If you are looking for a high-end laptop with plenty of features and high-performance, then what you need to be doing is investing in this Apple MacBook Pro. Stylish and powerful, this laptop delivers seamless multitasking and lag-free computing for maximum efficiency and productivity.', 50990),
(3, 'Apple iPhone 5S', '/cart/img/iphone5s.jpeg', 'Put away that basic phone and be an iPhone user with the Apple 5S, available at a price of just Rs. 22,265. You can now browse with better speed, protect your data with the fingerprint scanner, and look stylish as this phone comes with the Apple signature design, lightweight and very comfortable to hold.', 21999),
(4, 'Adidas Trekking Shoes', '/cart/img/Adidas-trekking-shoes.jpg', 'Material: Synthetic\r\nLifestyle: Casual\r\nClosure Type: Speed laces\r\nWarranty Type: Manufacturer\r\nProduct warranty against manufacturing defects: 90 days\r\nCare Instructions: Allow your pair of shoes to air and de-odorize at a regular basis, this also helps them retain their natural shape; use shoe bags to prevent any stains or mildew; dust any dry dirt from the surface using a clean cloth, do not use polish or shiner', 12999),
(5, 'Apple iPad Pro Tablet', '/cart/img/ipad-pro9.jpg', '8MP primary camera with auto focus and 1.2MP front facing camera\r\n12.9-inch (32.76 centimeters) LED-backlit multi-touch capacitive touchscreen with 2732 x 2048 pixels resolution and 264 ppi pixel density\r\niOS v9 operating system with A9X chip 64-bit architecture processor, M9 motion coprocessor and 128GB internal memory\r\nLithium-polymer battery\r\n1 year manufacturer warranty for device and in-box accessories including batteries from the date of purchase', 86315),
(6, 'Apple iPhone 6', '/cart/img/iphone6.jpg', '4.7-inch (diagonal) Retina HD display with 1334-by-750 resolution\r\nA8 chip with M8 motion coprocessor\r\n8-megapixel iSight camera with Focus Pixels and True Tone flash\r\n1080p HD video recording at 60 fps and slo-mo video recording at 240 fps\r\nFaceTime HD camera, Built-in rechargeable lithium-ion battery', 34500),
(7, 'Dell Inspiron 15R', '/cart/img/dell inspiron 15r.jpg', '2.1GHz Intel 5th Gen Core i3 processor\r\n4GB DDR3L RAM\r\n1TB hard drive\r\n15.6-inch screen, GeForce 920M 2GB DDR3 Graphics\r\nUbuntu Linux operating system\r\nHD (720p) capable webcam, microphone', 30990);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
