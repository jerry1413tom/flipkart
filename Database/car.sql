-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 05:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `pincode` int(20) NOT NULL,
  `profil_img` varchar(200) NOT NULL,
  `country` varchar(100) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`user_id`, `name`, `Email`, `Mobile`, `Password`, `pincode`, `profil_img`, `country`, `Status`, `CreatedDate`) VALUES
(60, 'deepika', 'deepka@gmail.com', 9389727616, '', 245412, '22-03-08-16-26-49photo.jpg', 'USA', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `ID` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `Price` int(50) NOT NULL,
  `color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`ID`, `user_id`, `name`, `Price`, `color`) VALUES
(2, '1', 'BMW', 120000000, 'blue'),
(3, '', 'mahandra', 10000000, 'black'),
(4, '', 'thar', 150000000, 'black'),
(5, '3', 'shift', 5000000, 'gray'),
(6, '2', 'ford', 15000000, 'black');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `cate_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `profil_img` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`cate_id`, `Name`, `profil_img`, `status`, `createdate`) VALUES
(42, 'Top Offer', '2022-05-13-17-47-47photo.jpg', 1, '0000-00-00 00:00:00'),
(43, 'Grocery', '2022-05-13-17-50-43photo.jpg', 1, '0000-00-00 00:00:00'),
(44, 'Mobile', '2022-05-13-17-51-11photo.jpg', 1, '0000-00-00 00:00:00'),
(45, 'Fashion', '2022-05-13-17-51-54photo.jpg', 1, '0000-00-00 00:00:00'),
(46, 'Electronics', '2022-05-13-17-52-59photo.jpg', 1, '0000-00-00 00:00:00'),
(47, 'Home', '2022-05-13-17-53-17photo.jpg', 1, '0000-00-00 00:00:00'),
(48, 'Appliances', '2022-05-13-17-54-51photo.jpg', 1, '0000-00-00 00:00:00'),
(49, 'Beauty,Toy&more', '2022-05-13-17-55-31photo.jpg', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `orderId` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `ID` int(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Total` int(10) NOT NULL,
  `Status` int(1) NOT NULL,
  `CreateDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`orderId`, `user_id`, `ID`, `Address`, `price`, `Quantity`, `Total`, `Status`, `CreateDate`) VALUES
(1, 4, 76, 'shiv bhair', 300, 3, 300, 1, '2022-06-01 21:09:26'),
(2, 3, 76, 'Loni', 400, 5, 500, 1, '2022-06-01 21:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`) VALUES
(1),
(2);

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE `shopping` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `feaucher` varchar(300) NOT NULL,
  `size` varchar(50) NOT NULL,
  `profileImg` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `price` varchar(100) NOT NULL,
  `cate_id` varchar(100) NOT NULL,
  `orderId` int(10) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `createdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`ID`, `name`, `feaucher`, `size`, `profileImg`, `Description`, `price`, `cate_id`, `orderId`, `Status`, `createdate`) VALUES
(51, '5 SPORTS', 'AUTOMATIC WATCH - SRPD61K1', 'xxl', '2022-04-09-17-38-59photo.jpg', '<p>Dummy Content<strong>&nbsp;Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry</p>\r\n', '600', '42', 1, 0, '0000-00-00 00:00:00'),
(52, 'Rolex', ' AUTOMATIC WATCH - SRPD61K1', 'xl', '2022-04-09-17-44-26photo.jpg', '<p>Dummy Content<strong>&nbsp;Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry</p>\r\n', '900', '42', 1, 1, '0000-00-00 00:00:00'),
(53, 'Analog', ' AUTOMATIC WATCH - SRPD61K1', 'xxl', '2022-04-09-17-46-23photo.jpg', '<p>Dummy Content<strong>&nbsp;Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry</p>\r\n', '1000', '42', 1, 1, '0000-00-00 00:00:00'),
(54, '1267Blue', ' AUTOMATIC WATCH - SRPD61K1', 'M', '2022-04-09-17-47-28photo.jpg', '<p>Dummy Content<strong>&nbsp;Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry</p>\r\n', '800', '42', 0, 1, '0000-00-00 00:00:00'),
(55, '11660-AIN', ' AUTOMATIC WATCH - SRPD61K1', 'S', '2022-04-09-17-48-18photo.jpg', '<p>Dummy Content<strong>&nbsp;Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry</p>\r\n', '600', '42', 0, 1, '0000-00-00 00:00:00'),
(56, 'Rolex-sen', ' AUTOMATIC WATCH - SRPD61K1', 'xxl', '2022-04-09-17-49-03photo.jpg', '<p>Dummy Content<strong>&nbsp;Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry</p>\r\n', '1200', '42', 0, 1, '2022-06-01 21:09:26'),
(58, 'vivo-S7e-Blue', '5G MOBILE PHONES', '6.44″ AMOLED', '2022-04-11-11-25-30photo.jpg', '<p>Vivo S7e Also Known as Vivo S7e 5G or with Model Number V2031A</p>\r\n', '16000', '44', 0, 1, '0000-00-00 00:00:00'),
(59, 'OPPO A74', 'OPPO A74 5G (Fluid Black, 6GB RAM, 128GB Storage)', '6GB RAM|128GB Storage', '2022-04-11-11-39-28photo.jpg', '<p>We don&#39;t know when or if this item will be back in stock.</p>\r\n', '17000', '44', 0, 1, '0000-00-00 00:00:00'),
(60, 'Apple 12pro', 'full hd', '6.7inc', '2022-04-11-12-19-31photo.jpg', '<p>ghfhgnfhmggfhggvhmvmhcfkuyfg</p>\r\n', '50000', '44', 0, 1, '0000-00-00 00:00:00'),
(61, 'Realme c pro', 'hghj,gg', '6.6 inc', '2022-04-11-12-22-47photo.jpg', '<p>ghfhgnfhmggfhggvhmvmhcfkuyfg</p>\r\n', '10000', '44', 0, 1, '0000-00-00 00:00:00'),
(63, 'Samsung j2', ' nbm', '5.9', '2022-04-11-12-26-02photo.jpg', '<p>ghfhgnfhmggfhggvhmvmhcfkuyfg</p>\r\n', '8000', '44', 0, 1, '0000-00-00 00:00:00'),
(64, 'oppo A9', 'oppo A9pro', '6.7', '2022-04-13-13-11-27photo.jpg', '<p>dvcsjasbKNKL;&#39;LKDJBHJV</p>\r\n', '15000', '44', 0, 1, '0000-00-00 00:00:00'),
(66, 'Gaoun', 'good', 'xll', '2022-04-13-13-32-04photo.jpg', '<p>Dummy Content (DC)<strong>&nbsp;provides an API (hooks) for other modules to generate (&amp; manage) dummy nodes</strong>.</p>\r\n', '3000', '45', 0, 1, '0000-00-00 00:00:00'),
(67, 'T-Shirt', ' full-stachible', 'xl', '2022-04-13-13-35-59photo.jpg', '<p>Dummy Content (DC)<strong>&nbsp;provides an API (hooks) for other modules to generate (&amp; manage) dummy nodes</strong>.</p>\r\n', '300', '45', 0, 1, '0000-00-00 00:00:00'),
(68, 'Black Plain Saree', 'Providing you the best range of Black Plain Saree', '', '2022-04-13-13-46-50photo.jpg', '<p>Providing you the best range of Black Plain Saree, Pink Color Plain Saree, Red Color Plain Saree, Orange Color Saree, Red Color Saree and Blue Color Saree with effective &amp; timely delivery.</p>\r\n', '500', '45', 0, 1, '0000-00-00 00:00:00'),
(70, 'BRIDAL ANTIQUE TRIBAL AFGHANI', 'BRIDAL ANTIQUE TRIBAL AFGHANI BOHEMIAN OXIDISED GERMAN SILVER HEAVY CHOKER NECKLACE GIRLS WOMEN', '', '2022-04-13-14-04-14photo.jpg', '<h1><small><em>BRIDAL ANTIQUE TRIBAL AFGHANI BOHEMIAN OXIDISED GERMAN SILVER HEAVY CHOKER NECKLACE GIRLS WOMEN</em></small></h1>\r\n', '750', '45', 0, 1, '0000-00-00 00:00:00'),
(71, 'Padmaja Store', 'Padmaja Store Women Comfortable Casual Flats Sandal for Women and Girls', '7uk', '2022-04-13-14-10-35photo.jpg', '<h1>Padmaja Store Women Comfortable Casual Flats Sandal for Women and Girls</h1>\r\n', '800', '45', 0, 1, '0000-00-00 00:00:00'),
(72, 'Black Lehenga', 'BY Lehanga shilk work', 'full ', '2022-04-13-14-26-44photo.jpg', '<h1>Lehenga Store Women Comfortable Casual Flats Sandal for Women and Girls</h1>\r\n', '2500', '45', 0, 1, '0000-00-00 00:00:00'),
(73, 'Earing golden', 'scds', '', '2022-04-13-16-58-23photo.jpg', '<p>earing golden and white mote work and fenising</p>', '444', '45', 0, 1, '0000-00-00 00:00:00'),
(74, 'Samsung Galaxy A12', 'Samsung Galaxy A12 Prices in India', 'Screen size (in inches): 6.5', '2022-04-13-17-16-33photo.jpg', '<p>ghcdfydwyt1wfeyhtrutw<a href=\"https://www.googleadservices.com/pagead/aclk?sa=L&amp;ai=CIjPVluhWYt7iGYa2vwTB96GYDt_E8sNpspegn6oPzvejz_8MEAEgld_iX2DlgoCApA6gAaSemaEDyAEGqQKngIsIQzNMPuACAKgDAaoEogJP0LmwIFknTwSm2iIA7PXqTquOJqmB4XDBwjdFn7eAj1XMPB_RQsP4f4eRtOafsgkJYr3BFHonf0BT30MkC98sSNZlN1vWpITmO5flwZh-zLkq6mMP8Km9uEfbG51--amYkaeWWnps9pg6L8KseP145TLu19kJEGut6fLzzIxdaJhjwok8dHiLJNEEpTrogNFmhoq0hMPPR_UJivJVWWAL4aooxMdFCKs5YI72sbfhDjfiPvozHTugoiG17HNZt1ngAQPoRRHfi5iT2IApdy_zQ9koO-FHXWBw9B5PMRyLxEvAo', '11,000', '44', 0, 1, '0000-00-00 00:00:00'),
(75, 'Redmi Note 11T', 'Redmi Note 11T 5G', '6.60-inch (1080x2400)', '2022-04-13-17-24-37photo.jpg', '<p>The Redmi Note 11T 5G is the latest affordable smartphone in India to boast of 5G connectivity. This new model is the successor to the&nbsp;<a href=\"https://gadgets360.com/redmi-note-10t-price-in-india-103120\" target=\"_self\">Redmi Note 10T 5G</a>, which was launched less than six months ago.</p>\r\n', '16000', '44', 0, 1, '0000-00-00 00:00:00'),
(76, 'Xiaomi-Redmi Note-7', 'Xiaomi Redmi Note 7 official images', '6.3\" 1080x2340 pixels', '2022-04-13-17-29-06photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>186g, 8.1mm thickness<br />\r\nAndroid 9.0, planned upgrade to 10, MIUI 12<br />\r\n32GB/64GB/128GB storage, microSDXC</p>\r\n', '10000', '44', 0, 1, '0000-00-00 00:00:00'),
(80, 'WOODLAND ', 'Canvas Shoes For Men  (Grey)', '7', '2022-04-13-18-10-28photo.jpg', '<p>Special PriceGet extra 40% off (price inclusive of discount)</p>\r\n\r\n<p>T&amp;C</p>\r\n', '1,277', '45', 0, 1, '0000-00-00 00:00:00'),
(81, 'KENT ACE Plus 8 L RO + UV + UF + TDS ', 'Bank Offer10% off on SBI Credit Card, up to ₹1250. On orders of and aboveT&C', '', '2022-05-05-17-47-14photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>Bajaj GX 75 Mixer Grinder is designed with World Class features. It has a powerful 2000 RPM motor with 750 watts. It comes with 4 Stainless steel jars - 1.5L Liquidizing jar, 1.0L dry / wet grinding jar, 0.4L chutney jar, 1.5L polycarbonate blending jar with fruit filter.</p>\r\n', '3,099', '46', 0, 1, '0000-00-00 00:00:00'),
(82, 'Medellin MED-BLK-C Acoustic Guitar Linden Wood Ros', 'Body Material: Linden Wood | Fretboard Material: Rosewood |', '', '2022-05-05-17-52-35photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>Really an excellent quality of guitar, 100 cm long, excellent in looking beautiful, sweet sound, with a carry bag, 6 extra wire, beautiful packaging by flipkart.</p>\r\n', '2,439', '46', 0, 1, '0000-00-00 00:00:00'),
(83, 'Lifelong LLCMB13 1400 W Induction Cooktop', 'Lifelong LLCMB13 1400 W Induction Cooktop with IB 3 Ltr Outer Lid Pressure Cooker  (Black, Grey, Push Button)', '', '2022-05-05-17-55-34photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>Offering high performance with ease of use, the combo of the Lifelong Induction Cooktop and the Lifelong Pressure Cooker is a must-have. The induction cooktop not only has a stylish design but also has versatile preset menus and timers that significantly reduce cooking time</p>\r\n', '1,799', '46', 0, 1, '0000-00-00 00:00:00'),
(84, 'WONDERCHEF Nutri-Blend, 400W, 22000 RPM Mixer-Grin', 'WONDERCHEF Nutri-Blend, 400W, 22000 RPM Mixer-Grinder, Blender, SS Blades, 3 Unbreakable Jars, 2 Years Warranty, Black 3 Jar 400 W Juicer Mixer Grinder (3 Jars, Black)', '', '2022-05-05-17-58-22photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Grind the ingredients that you need to cook your recipes by bringing home this juicer mixer grinder from WonderChef. Its 400-watt motor, along with its interchangeable jars that boast anti-rust stainless-steel blades, facilitates effortless grinding so that you have delicious chutneys, paste, spices, and much more to go with your dishes.</p>\r\n', '2,999', '46', 0, 1, '0000-00-00 00:00:00'),
(85, 'SAMSUNG 198', 'SAMSUNG 198 L Direct Cool Single Door 4 Star Refrigerator with Base Drawer  (Camellia Blue, RR21T2H2XCU/HL)', '', '2022-05-05-18-01-18photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>This 198 L aesthetic Samsung Refrigerator comes packed with innovative features to give you the best of both worlds. It can run on Solar Energy, enabling you to do your bit to save the environment. It offers Stabiliser-free Operation, which enables it to operate steadily and reliably during voltage fluctuations. This helps protect the appliance from damage.</p>\r\n', '16,650', '46', 0, 1, '0000-00-00 00:00:00'),
(86, 'MSI Modern 14 Ryzen 5 Hexa', 'MSI Modern 14 Ryzen 5 Hexa Core 4500U - (8 GB/512 GB SSD/Windows 10 Home) Modern 14 B4MW-423IN Thin and Light Laptop  (14 inch, Carbon Grey, 1.3 Kg)', '', '2022-05-05-18-05-07photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Stylish &amp; Portable Thin and Light Laptop</li>\r\n	<li>14 inch Full HD 60Hz 45%NTSC IPS-Level Display</li>\r\n	<li>Light Laptop without Optical Disk Drive</li>\r\n</ul>\r\n', '39,990', '46', 0, 1, '0000-00-00 00:00:00'),
(87, 'LG M39 19.5 inch HD LED', 'LG M39 19.5 inch HD LED Backlit TN Panel Monitor (20M39H)  (Response Time: 5 ms, 60 Hz Refresh Rate)', '', '2022-05-05-18-09-41photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ring home this LG monitor and experience every single detail in crystal-clear clarity. The Flicker-safe feature of this monitor minimizes screen flickering so you can read digital novels, watch movies, play games, and more for long hours without straining your eyes.</p>\r\n', '6,999', '46', 0, 1, '0000-00-00 00:00:00'),
(88, 'Whirlpool 4 in 1 Convertible Cooling ', 'Whirlpool 4 in 1 Convertible Cooling 1.5 Ton 3 Star Split Inverter AC - White  (1.5T MAGICOOL CONVERT 3S COPR INV, Copper Condenser)', '', '2022-05-05-18-13-38photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>You can keep yourself relaxed and refreshed with the Whirlpool 1.5 Ton Magicool Convert Pro 5s INV Air Conditioner. With its four-in-one convertible option, you can choose from four different capacities, including 0.9 T, 1.1 T, 1.3 T, and 1.5 T, depending on your cooling demands</p>\r\n', '32,990', '46', 0, 1, '0000-00-00 00:00:00'),
(89, 'Flipkart Perfect Homes Sirena Engineered', 'Flipkart Perfect Homes Sirena Engineered Wood TV Entertainment Unit  (Finish Color - Espresso, Knock Down)', '', '2022-05-05-18-18-13photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Number of Drawers: 2, Number of Open Shelves: 6, Number of Closed Shelves: 0</li>\r\n	<li>Delivery Condition: Knock Down - Delivered in non-assembled pieces, installation by service partner</li>\r\n	<li>No cost EMI starting from ₹1,065/month</li>\r\n	<li>Net banking &amp; Credit/ Debit/ ATM card</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '6,390', '46', 0, 1, '0000-00-00 00:00:00'),
(91, 'Ayaan Toys Letz Ride Rocky SUV ATV Rechargeable Ba', 'Ayaan Toys Letz Ride Rocky SUV ATV Rechargeable Battery Operated Ride-On with Remote for Kids (2 to 7 Yrs), Red Jeep Battery Operated Ride On  (Red)', '', '2022-05-07-17-55-50photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>Letz Ride makes Ride-On cars &amp; bikes that are entertaining and safe. All products are EN71 certified defined by stringent European standards and also BIS certified which is defined by Indian standards.</p>\r\n', '12,440', '47', 0, 1, '0000-00-00 00:00:00'),
(92, 'IWS Polyester Adults Double Net Mosquito Net  (Red', 'These nets are sized to fit an adult bed if your baby sleeps with you.', '', '2022-05-07-17-58-45photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>Protect yourself from Privine mosquito and harmful insect bites with the Bedspun Tasheeda mosquito net. these are known for high quality and durability. BBS Choice mosquito net price is very reasonable and it is worth buying to keep serious ailments at bay.&nbsp;</p>\r\n', '519', '47', 0, 1, '0000-00-00 00:00:00'),
(94, 'Achintya 153 cm (5 ft) Polyester Window Curtain (P', 'his Fashionable Polyester Curtain Lasts For Long Time Owing To Its Strong Fabric', '', '2022-05-07-18-05-03photo.jpg', '<p>Achintya give Your Home a Bright and Modernistic Appeal with These Designs. The Surreal Attention Is Sure To Steal Hearts. These Contemporary Eyelet Curtain Slide Smoothly So When You Draw Them Apart First Thing In</p>\r\n', '239', '47', 0, 1, '0000-00-00 00:00:00'),
(95, 'Flipkart SmartBuy Cotton 480 GSM Bath Towel', 'Comfortable. Colour did not fade after washing. This towel is soft and size is correct as written in product description. ', 'L', '2022-05-09-12-18-23photo.jpg', '<p>Comfortable. Colour did not fade after washing. This towel is soft and size is correct as written in product description. When delivered, it had a smell of air freshener spray which went away after washing</p>\r\n', '309', '47', 0, 1, '0000-00-00 00:00:00'),
(98, 'EJ BY NISHA GUPTA Abstract Cushions Cover ', 'SEJ BY NISHA GUPTA Abstract Cushions Cover  (Pack of 5, 40.64 cm*40.64 cm, Red, Green, Blue, Yellow)', '', '2022-05-09-12-31-25photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>These cushion covers with vibrant designs are made of fine quality silk with HD Digital Printing. The colors are bright , rich and sharp. Good quality zip back closure.</p>\r\n', '456', '47', 0, 1, '0000-00-00 00:00:00'),
(99, 'METRO LIVING 104 TC Cotton Double Printed Bedsheet', 'METRO LIVING 104 TC Cotton Double Printed Bedsheet  (Pack of 1, Orange)', '', '2022-05-09-12-35-02photo.jpg', '<p>The print of this bedsheet is pretty fine. If we talk about the size then its perfect for queen size bed. Only the sides of bedsheet is a bit smaller for king size bed. I think this size is perfect for queen size bed. Fabric quality is nice and its good quality cotton at this price.</p>\r\n', '279', '47', 0, 1, '0000-00-00 00:00:00'),
(100, 'Sh.Huda 12 pc set Liquid matte lipstick  (Multicol', 'Sh.Huda 12 pc set Liquid matte lipstick  (Multicolor, 60 ml)', '', '2022-05-09-12-43-57photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>12 pc lipstick</p>\r\n', '314', '26', 0, 1, '0000-00-00 00:00:00'),
(101, 'SANGANIENTERPRICE Jumbo Size Extremely', 'SANGANIENTERPRICE Jumbo Size Extremely Light Weight , Water Proof Kitchen Kids Play Tent House for 10 Year Old Girls and Boys  (Multicolor)', '', '2022-05-09-12-46-57photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>BEST GIFT Excellent gift for the children&#39;s birthdays, Christmas, or just as a surprise.The kids tents are routinely safety tested to pass strict ASTM and EN71. Your child will have hours of fun with this colorful play tent. Set it up in the backyard, and kids got a secret hiding place.</p>\r\n', '1,125', '49', 0, 1, '0000-00-00 00:00:00'),
(102, 'TRESemme Keratin Smooth Shampoo  (340 ml)', 'It works very well in my hair this shampoo', '', '2022-05-09-12-52-47photo.jpg', '<p>Flaunt your fabulous, shiny, smooth, and luscious hair every single day by using the TRESemme Keratin Smooth Shampoo. This hair care essential helps restore keratin and gives you well-nourished, gorgeous, and manageable hair with every single wash.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '258', '49', 0, 1, '0000-00-00 00:00:00'),
(103, 'BAJAJ Almond Drops Hair Oil ', 'BAJAJ Almond Drops Hair Oil enriched with 6X Vitamin E, Reduces Hair Fall, 650 ml Hair Oil  (650 ml)', '', '2022-05-09-12-54-53photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>Now style your hair any way you want without the fear of hair fall, as Bajaj Almond Drops hair oil has got your back! Bajaj Almond Oil can reduce hair fall by up to 79%*, strengthen hair, and make them up to 50% more shiny! The new and improved Bajaj Almond Drops Hair Oil is enriched with 6x Vitamin E^ &amp; Almond Oil to help you get the shiny, strong hair you&#39;ve always wanted.&nbsp;</p>\r\n', '255', '49', 0, 1, '0000-00-00 00:00:00'),
(104, 'FOGG 1 Royal and 1 Napoleon Deodorant Combo', 'FOGG 1 Royal and 1 Napoleon Deodorant Combo Pack of 2 Deodorant Spray - For Men  (300 ml, Pack of 2)', '', '2022-05-09-12-56-47photo.jpg', '<p>Apply 4-6 swipes of roll-on per underarm every day after shower and before applying a fragrance body spray. Best regime to stay Odour free all day: Step 1: Bathe Step 2: Apply Roll On on your underarms Step 3: Apply Fragrance or Deo Sprays on your clothes</p>\r\n', '250', '49', 0, 1, '0000-00-00 00:00:00'),
(105, 'Lakmé Absolute Perfect Radiance Skin Brightening D', 'Lakmé Absolute Perfect Radiance Skin Brightening Day Creme  (50 g)', '', '2022-05-09-12-59-36photo.jpg', '<p>perfect package,cream just blends and absorbs quick to the skin.just a small dot is more than enough.one of the best moister for the skin.doesnt makes the skin oily and non greasy.beautiful aroma and texture.</p>\r\n', '209', '49', 0, 1, '0000-00-00 00:00:00'),
(106, 'Dettol Bathing Soap Bar, Original  (4 x 125 g)', 'Dettol Bathing Soap Bar, Original  (4 x 125 g)', '', '2022-05-09-13-01-21photo.jpg', '<p>Be 100% sure to protect your skin from 100 illness-causing germs and bacteria. The trusted germ-protection formula of Dettol soap acts like a barrier between your skin and a wide range of unseen germs. The anti-bacterial properties of Dettol Original soap makes sure to provide a shield against unhealthy environment outside.</p>\r\n', '259', '49', 0, 1, '0000-00-00 00:00:00'),
(107, 'ZANDU Balm (25 ml) Pack Of 3 Balm  (3 x 25 ml)', 'ZANDU Balm (25 ml) Pack Of 3 Balm  (3 x 25 ml)', '', '2022-05-11-16-08-53photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>Zandu Balm is India&#39;s No 1 pain relieving balm. It is an iconic brand of Zandu portfolio and become a generic name for balms for most of the consumers. It is a trusted balm for over a hundred years. Zandu Balm is synonymous for headache, body ache and cold remedy and considered as the best in the category.</p>\r\n', '128', '43', 0, 1, '0000-00-00 00:00:00'),
(108, 'MOOV Instant Pain Relief Spray Spray  (50 g)', 'MOOV Instant Pain Relief Spray Spray  (50 g)', '', '2022-05-11-16-12-19photo.jpg', '<p>Modern lifestyles can cause both men and women to suffer from innumerable pains, for several reasons, on various body parts. Pain always comes in uninvited and can occur even while doing everyday tasks such as lifting heavy objects or wrong posture at work or home.</p>\r\n', '133', '43', 0, 1, '0000-00-00 00:00:00'),
(109, 'Cadbury Bournvita', 'Cadbury Bournvita 5 Star Magic  (500 g)', '', '2022-05-11-16-15-08photo.jpg', '<p>Cadbury Bournvita is a nutrition brand with a 70 year legacy in India. Cadbury Bournvita is a health food drink with inner strength formula which has nutrients that support - Immune system(8 immunity nutrients), Strong bones (Vitamin D, Phosphorous), Strong muscles (Protein, Vitamin D) and Active Brain(Iron, Iodine, Vitamin B2, Vitamin B12). Recommended 2 serves per day as part of a balanced diet and a healthy lifestyle.</p>\r\n', '162', '43', 0, 1, '0000-00-00 00:00:00'),
(110, 'Lipton GREEN TEA ALL NATURAL FLAVOUR PURE ', 'Lipton GREEN TEA ALL NATURAL FLAVOUR PURE LIGHT 25 TEA BAGS PACK OF 1 Green Tea Box  (25)', '', '2022-05-11-16-23-37photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>It&rsquo;s not just a cup of tea, its therapy - One Sip at a Time. Lipton Green Tea is not just a regular cup of chai, we believe it&rsquo;s therapy for your body. Wake up to a morning cup of hot Lipton green tea and feel how it leaves you feeling light and active. Awaken your senses - one sip at a time. Lipton Green Tea Bags in Honey Lemon Flavor have this goodness.</p>\r\n', '139', '43', 0, 1, '0000-00-00 00:00:00'),
(111, 'Saffola Total Refined Cooking oil', 'Saffola Total Refined Cooking oil, Blended Rice Bran & Safflower oil, Helps Manage Cholesterol Safflower Oil Pouch  (4 x 1 L)', '', '2022-05-11-16-25-55photo.jpg', '<p>&nbsp;</p>\r\n\r\n<p>When your family&#39;s heart health is your priority, we know that you go the extra mile to make them follow a heart-healthy lifestyle, to keep them away from heart related signs like cholesterol. Making the right choices can go a long way in taking care of heart health &amp; an important choice is the oil you use.</p>\r\n', '786', '43', 0, 1, '0000-00-00 00:00:00'),
(112, 'Tata Tea Gold with 15% Long Leaves Black Tea Pouch', 'Tata Tea Gold with 15% Long Leaves Black Tea Pouch  (750 g)', '', '2022-05-11-16-27-39photo.jpg', '<p>An exquisite combination of richness and irresistible aroma, the Tata Gold Tea Pouch is filled with selected valley grown long tea leaves from Assam. This expert blend from Tata Tea is crafted keeping the consumers&#39; choice in mind who long for a rich and flavorful cup of tea at every sip.</p>\r\n', '316', '43', 0, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `user id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` bigint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `user id`, `name`, `email`, `mobile`) VALUES
(1, '1', 'om', 'om @gmail.com', 127),
(2, '2', 'anuj', 'ab @gmail.com', 127),
(3, '3', 'prince', 'bc @gmail.com', 127);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `addreash` varchar(100) NOT NULL,
  `cate_id` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `name`, `Email`, `password`, `Mobile`, `addreash`, `cate_id`, `status`, `createdate`) VALUES
(2, '', 'undefined', 'd41d8cd98f00b204e9800998ecf8427e', 0, '', '', 0, '0000-00-00 00:00:00'),
(3, 'sd', 'undefined', '6226f7cbe59e99a90b5cef6f94f966fd', 0, 'sd', '', 0, '0000-00-00 00:00:00'),
(8, 'deepa', 'deepa@gmail.com', '123', 0, '', '', 0, '0000-00-00 00:00:00'),
(9, 'vikas', 'vikas@gmail.com', '202cb962ac59075b964b07152d234b70', 9876543210, 'karothi', '', 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shopping`
--
ALTER TABLE `shopping`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shopping`
--
ALTER TABLE `shopping`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
