-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2011 at 02:32 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `winsor`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE IF NOT EXISTS `administrators` (
  `AdminID` int(11) NOT NULL auto_increment,
  `SurName` varchar(25) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY  (`AdminID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`AdminID`, `SurName`, `FirstName`, `UserName`, `Email`, `Password`) VALUES
(1, 'Birir', 'Lee', 'LBirir', 'leebirir@gmail.com', '0ab0eeabebf750446296b1a7bac26ce2'),
(2, 'Birir ', 'Brian', '', 'bk@yahoo.com', 'cbd44f8b5b48a51f7dab98abcdf45d4e'),
(3, 'Admin', 'Winsor', '', 'admin@winsor.com', '658e2c4b713aeec4cc24bad72b94e052');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE IF NOT EXISTS `bills` (
  `Bill_ID` int(11) NOT NULL auto_increment,
  `OrderID` int(11) NOT NULL,
  `TotalAmount` float(10,2) NOT NULL,
  `AmountPaid` float(10,2) NOT NULL,
  `Balance` float(10,2) NOT NULL,
  PRIMARY KEY  (`Bill_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`Bill_ID`, `OrderID`, `TotalAmount`, `AmountPaid`, `Balance`) VALUES
(13, 30, 340.00, 1000.00, -660.00),
(12, 29, 1310.00, 2000.00, -690.00),
(11, 28, 950.00, 500.00, 450.00),
(10, 27, 750.00, 1000.00, -250.00),
(14, 31, 400.00, 1000.00, -600.00),
(15, 32, 340.00, 1000.00, -660.00),
(16, 33, 1810.00, 0.00, 0.00),
(17, 34, 1690.00, 2000.00, -310.00),
(18, 35, 980.00, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `CatID` int(11) NOT NULL auto_increment,
  `CatName` varchar(25) NOT NULL,
  `CatDescription` varchar(100) NOT NULL,
  PRIMARY KEY  (`CatID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CatID`, `CatName`, `CatDescription`) VALUES
(1, 'Chicken', 'Chicken products'),
(15, 'Beef', 'Beef'),
(3, 'Pork', 'Pork products'),
(6, 'Sausages', 'Sausages'),
(9, 'Bacon', 'Bacon'),
(10, 'Lamb', 'Lamb products'),
(11, 'Mutton', 'Mutton'),
(12, 'Burgers', 'Burgers'),
(16, 'Eggs', 'Eggs');

-- --------------------------------------------------------

--
-- Table structure for table `comments_data`
--

CREATE TABLE IF NOT EXISTS `comments_data` (
  `ID` bigint(3) NOT NULL auto_increment,
  `time` datetime NOT NULL default '0000-00-00 00:00:00',
  `href` varchar(255) NOT NULL default '',
  `text` text NOT NULL,
  `author` varchar(255) NOT NULL default '',
  `email` varchar(255) default NULL,
  `dont_show_email` int(11) default '0',
  `ip` varchar(15) default NULL,
  PRIMARY KEY  (`ID`),
  KEY `time` (`time`,`href`),
  KEY `href` (`href`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `comments_data`
--

INSERT INTO `comments_data` (`ID`, `time`, `href`, `text`, `author`, `email`, `dont_show_email`, `ip`) VALUES
(1, '2011-01-23 23:37:00', '/winsor/view_product.php?id=3&productname=Chicken%20Burgers%20100mm', 'very tasty chicken burger', 'Lee', '', 0, '127.0.0.1'),
(2, '2011-01-23 23:40:29', '/winsor/view_product.php?id=1&productname=Capons%20Whole', 'nyummy kuku', 'kolo', '', 1, '127.0.0.1'),
(3, '2011-02-25 16:42:58', '/winsor/view_product.php?id=5&productname=Chicken%20Thighs%20on%20Bone', 'tasty', 'lee', '', 1, '127.0.0.1'),
(4, '2011-02-25 16:55:02', '/winsor/view_product.php?id=5&productname=Chicken%20Thighs%20on%20Bone', 'well flavoured', 'coby', '', 1, '127.0.0.1'),
(5, '2011-03-07 14:14:04', '/winsor/view_product.php?id=2&productname=Chicken%20Burgers%20130mm', 'Vert tasty burgers', 'Brian', '', 0, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `CustID` int(11) NOT NULL auto_increment,
  `CustType` varchar(25) NOT NULL,
  `CustSurname` varchar(25) NOT NULL,
  `CustOtherNames` varchar(50) NOT NULL,
  `CustMobileNo` int(15) NOT NULL,
  `CustStreetAddress` varchar(80) NOT NULL,
  `CustTown` varchar(50) NOT NULL,
  `CustEmail` varchar(50) NOT NULL,
  `CustPassword` varchar(200) NOT NULL,
  `CustGender` varchar(10) NOT NULL,
  `CustStatus` varchar(25) NOT NULL,
  `CustRegCode` varchar(50) NOT NULL,
  PRIMARY KEY  (`CustID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustID`, `CustType`, `CustSurname`, `CustOtherNames`, `CustMobileNo`, `CustStreetAddress`, `CustTown`, `CustEmail`, `CustPassword`, `CustGender`, `CustStatus`, `CustRegCode`) VALUES
(26, 'Individual', 'Black', 'Junior', 724567088, 'SiwakaHseNo10', 'Nairobi', 'jblack@gmail.com', 'db30538f0057deec85a98f7676f39665', 'Male', 'Pending', '19653881058857417401518777891163343931164344222'),
(12, 'Individual', 'cop', 'robo', 676354368, 'strathmore', 'n', 'robo@cop.com', '93b9f9e761f6aabbdc2f50a60c374880', 'Male', 'activated', ''),
(21, 'Individual', 'jok', 'jej', 676354368, 'hurlingham', 'Nairobi', 'jej@jok.com', '4ac1dd9204946a33d4c2ae9f3ab6e90d', 'Male', 'Pending', '71270733714994139756935649911354725403782309364'),
(20, 'choose', 'rhrhr', 'hrhrhr', 6768333, '35654', 'hihihi', 'rigobert@song.com', '699a474e923b8da5d7aefbfc54a8a2bd', 'Male', 'Pending', '189435326013340128691028533775402608371202242482'),
(24, 'Individual', 'Red', 'Lk', 2147483647, 'jokim', 'Nairobi', 'leebirir@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Male', 'Pending', '83033419313883723362510132983016000641855368509'),
(25, 'Individual', 'Muriithi', 'Brian', 6556675, 'strathmore14', 'Nairobi', 'jsdj@yahoo.com', 'cbd44f8b5b48a51f7dab98abcdf45d4e', 'Male', 'activated', '16640176181699412333152425162914169817071191728096');

-- --------------------------------------------------------

--
-- Table structure for table `mpesapayment`
--

CREATE TABLE IF NOT EXISTS `mpesapayment` (
  `MpesaCode` varchar(15) NOT NULL,
  `PhoneNo` varchar(25) NOT NULL,
  `Value` float(10,2) NOT NULL,
  PRIMARY KEY  (`MpesaCode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mpesapayment`
--

INSERT INTO `mpesapayment` (`MpesaCode`, `PhoneNo`, `Value`) VALUES
('LA760J757', 'MPESA', 2000.00),
('BD760J347', 'MPESA', 980.00),
('AS760J757', 'MPESA', 500.00);

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE IF NOT EXISTS `orderitems` (
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `OrderItemQty` int(10) NOT NULL,
  `OrderItemPrice` float(10,2) NOT NULL,
  `OrderDate` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`OrderID`, `ProductID`, `ProductName`, `OrderItemQty`, `OrderItemPrice`, `OrderDate`) VALUES
(29, 47, 'Mutton Minced', 1, 450.00, '2011/03/07'),
(28, 33, 'Pork Loin', 1, 450.00, '2011/03/07'),
(28, 54, 'Cocktail Beef Sausages', 1, 500.00, '2011/03/07'),
(27, 2, 'Chicken Burgers 130mm', 1, 400.00, '2011/03/07'),
(27, 4, 'Mutton Ribs', 1, 350.00, '2011/03/07'),
(29, 6, 'Chicken Wings', 2, 430.00, '2011/03/07'),
(30, 3, 'Chicken Burgers 100mm', 1, 340.00, '2011/03/07'),
(31, 1, 'Capons Whole', 1, 400.00, '2011/03/07'),
(32, 3, 'Chicken Burgers 100mm', 1, 340.00, '2011/03/07'),
(33, 48, 'Beef Burgers 100mm', 1, 360.00, '2011/03/07'),
(33, 33, 'Pork Loin', 1, 450.00, '2011/03/07'),
(33, 54, 'Cocktail Beef Sausages', 2, 500.00, '2011/03/07'),
(34, 38, 'Lamb Shoulder Chops', 1, 400.00, '2011/03/07'),
(34, 6, 'Chicken Wings', 3, 430.00, '2011/03/07'),
(35, 58, 'Cocktail Pork Sausages', 1, 500.00, '2011/03/17'),
(35, 7, 'Chicken Thighs Boneless', 1, 480.00, '2011/03/17');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderID` int(11) NOT NULL auto_increment,
  `CustID` int(11) NOT NULL,
  `OrderDate` varchar(10) NOT NULL,
  `TotalAmount` float(10,2) NOT NULL,
  `Status` varchar(10) NOT NULL default '0',
  PRIMARY KEY  (`OrderID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `CustID`, `OrderDate`, `TotalAmount`, `Status`) VALUES
(34, 12, '2011/03/07', 1690.00, 'Paid'),
(33, 25, '2011/03/07', 1810.00, 'Pending'),
(32, 12, '2011/03/07', 340.00, 'Paid'),
(31, 12, '2011/03/07', 400.00, 'Paid'),
(29, 12, '2011/03/07', 1310.00, 'Paid'),
(27, 12, '2011/03/07', 750.00, 'Paid'),
(28, 12, '2011/03/07', 950.00, 'Paid'),
(30, 12, '2011/03/07', 340.00, 'Paid'),
(35, 12, '2011/03/17', 980.00, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `Payment_ID` int(11) NOT NULL auto_increment,
  `Bill_ID` int(11) NOT NULL,
  `MpesaCode` varchar(15) NOT NULL,
  `Payment_Value` float(10,2) NOT NULL,
  PRIMARY KEY  (`Payment_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Payment_ID`, `Bill_ID`, `MpesaCode`, `Payment_Value`) VALUES
(11, 11, 'BD7608392', 500.00),
(10, 10, 'BD760A268', 1000.00),
(12, 12, 'BD760D435', 2000.00),
(13, 13, 'BD760N745', 1000.00),
(14, 14, 'AD760J757', 1000.00),
(15, 15, 'JK760J757', 1000.00),
(16, 17, 'JL760J757', 2000.00);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ProductID` int(11) NOT NULL auto_increment,
  `ProdName` varchar(50) NOT NULL,
  `CatID` int(11) NOT NULL,
  `ProdPrice` float(10,2) default NULL,
  `ProdDescription` text,
  `ProdPhoto` varchar(50) default NULL,
  `ProdThumb` varchar(50) default NULL,
  `ProdSize` varchar(25) default NULL,
  `ProdQty` int(11) default NULL,
  `ProdAvailable` bit(1) NOT NULL,
  PRIMARY KEY  (`ProductID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProdName`, `CatID`, `ProdPrice`, `ProdDescription`, `ProdPhoto`, `ProdThumb`, `ProdSize`, `ProdQty`, `ProdAvailable`) VALUES
(1, 'Capons Whole', 1, 400.00, 'capon chicken', '1.jpg', NULL, '', 0, '\0'),
(2, 'Chicken Burgers 130mm', 12, 400.00, 'chicken burger 130mm', '2.jpg', NULL, '130mm', 0, '\0'),
(3, 'Chicken Burgers 100mm', 12, 340.00, 'chicken burger 100mm', '3.jpg', NULL, '100mm', 0, '\0'),
(4, 'Mutton Ribs', 11, 350.00, 'mutton ribs', NULL, NULL, '', 5, '\0'),
(5, 'Chicken Thighs on Bone', 1, 400.00, 'Chicken Thighs on Bone', '5.jpg', NULL, '', 0, '\0'),
(6, 'Chicken Wings', 1, 430.00, 'Chicken wings', '6.jpg', NULL, '', 0, '\0'),
(7, 'Chicken Thighs Boneless', 1, 480.00, 'chicken thighs boneless', '7.jpg', NULL, '', 0, '\0'),
(8, 'Chicken Breast Boneless', 1, 550.00, 'chicken breast boneless', '8.jpg', NULL, '', 0, '\0'),
(9, 'Barbeque', 1, 550.00, 'chicken barbeque', NULL, NULL, '', 0, '\0'),
(10, 'Chicken Sausages', 6, 360.00, 'chicken sausages', '10.jpg', NULL, '1 kg', 0, '\0'),
(11, 'Spicy chicken sausages', 6, 500.00, 'spicy chicken sausages', '11.jpg', NULL, '', 0, '\0'),
(12, 'Cocktail chicken sausages', 6, 500.00, 'cocktail chicken sausages', '12.jpg', NULL, '', 0, '\0'),
(13, 'Chicken Boerwors Spicy', 6, 500.00, 'chicken boerwors spicy', '13.jpg', NULL, '', 0, '\0'),
(14, 'Cocktail chicken balls', 1, 380.00, 'cocktail chicken balls', NULL, NULL, '25 gms', 0, '\0'),
(15, 'Cocktail spicy chicken ba', 1, 380.00, 'coctail spicy chicken balls', NULL, NULL, '', 0, '\0'),
(16, 'Beef Fillet Trimmed', 15, 680.00, 'Beef fillet trimmed', NULL, NULL, '', 0, '\0'),
(17, 'Beef Fillet Untrimmed', 15, 550.00, 'Beef fillet untrimmed', NULL, NULL, '', 0, '\0'),
(18, 'Silver-side', 15, 550.00, 'silver-side', NULL, NULL, '', 0, '\0'),
(19, 'Rumpsteak', 15, 530.00, 'rumpsteak', NULL, NULL, '', 0, '\0'),
(20, 'Top side', 15, 400.00, 'top side', NULL, NULL, '', 0, '\0'),
(21, 'Beef T Bone', 15, 450.00, 'Beef T bone', NULL, NULL, '', 0, '\0'),
(22, 'Ox-Tail', 15, 290.00, 'ox-tail', '22.jpg', NULL, '', 0, '\0'),
(23, 'Ox-Liver', 15, 400.00, 'ox-liver', '23.jpg', NULL, '', 0, '\0'),
(24, 'Ox-Kidney', 15, 290.00, 'ox-kidney', NULL, NULL, '', 0, '\0'),
(25, 'Beef Mince High Grade', 15, 325.00, 'Beef mince high grade', '25.jpg', NULL, '', 0, '\0'),
(26, 'Beef Boneless Cubed', 15, 325.00, 'Beef boneless cubed', '26.jpg', NULL, '', 0, '\0'),
(27, 'Beef on Bone', 15, 300.00, 'Beef on bone', NULL, NULL, '', 0, '\0'),
(28, 'Beef Ossubucco', 15, 290.00, 'Beef ossubucco', NULL, NULL, '', 0, '\0'),
(29, 'Pork Leg', 3, 400.00, 'pork leg', '29.jpg', NULL, '', 0, '\0'),
(30, 'Pork Minced', 3, 500.00, 'pork minced', NULL, NULL, '', 0, '\0'),
(31, 'Pork Leg Boneless', 3, 520.00, 'pork leg boneless', NULL, NULL, '', 0, '\0'),
(32, 'Belly Spare Ribs', 3, 500.00, 'belly spare ribs', NULL, NULL, '', 0, '\0'),
(33, 'Pork Loin', 3, 450.00, 'pork loin', '33.jpg', NULL, '', 0, '\0'),
(34, 'Pork Fillet', 3, 650.00, 'pork fillet', NULL, NULL, '', 0, '\0'),
(35, 'Whole Lamb', 10, 370.00, 'whole lamb', NULL, NULL, '', 0, '\0'),
(36, 'Lamb Leg', 10, 535.00, 'lamb leg', NULL, NULL, '', 0, '\0'),
(37, 'Lamb Boneless Steaks', 10, 600.00, 'lamb boneless steaks', NULL, NULL, '', 0, '\0'),
(38, 'Lamb Shoulder Chops', 10, 400.00, 'lamb shoulder chops', '38.jpg', NULL, '', 0, '\0'),
(39, 'Lamb Loins Chops', 10, 750.00, 'lamb loins chops', NULL, NULL, '', 0, '\0'),
(40, 'Lamb Ribs', 10, 320.00, 'lamb ribs', NULL, NULL, '', 0, '\0'),
(41, 'Lamb Shoulder ', 10, 380.00, 'lamb shoulder', '41.jpg', NULL, '', 0, '\0'),
(42, 'Lamb Minced', 10, 550.00, 'lamb minced', NULL, NULL, '', 0, '\0'),
(43, 'Mutton Ribs', 11, 350.00, 'mutton ribs', NULL, NULL, '', 0, '\0'),
(44, 'Mutton Leg', 11, 535.00, 'mutton leg', NULL, NULL, '', 0, '\0'),
(45, 'Mutton Boneless Steak', 11, 420.00, 'mutton boneless steak', NULL, NULL, '', 0, '\0'),
(46, 'Mutton Shoulder', 11, 380.00, 'mutton shoulder', NULL, NULL, '', 0, '\0'),
(47, 'Mutton Minced', 11, 450.00, 'mutton minced', NULL, NULL, '', 0, '\0'),
(48, 'Beef Burgers 100mm', 12, 360.00, 'beef burgers 100mm', '48.jpg', NULL, '100 gms', 0, '\0'),
(49, 'Beef Spicy Burgers 130mm', 12, 360.00, 'beef spicy burgers 130mm', '49.jpg', NULL, '100 gms', 0, '\0'),
(50, 'Beef Barbeque Spicy Sausa', 6, 360.00, 'beef barbeque spicy sausages', '50.jpg', NULL, '', 0, '\0'),
(51, 'Cocktail Meat Balls', 2, 340.00, 'cocktail meat balls', NULL, NULL, '25 gms', 0, '\0'),
(52, 'Beef Sausages', 6, 360.00, 'beef sausages', '52.jpg', NULL, '1 kg', 0, '\0'),
(53, 'Spicy Beef Sausages', 6, 500.00, 'spicy beef sausages', NULL, NULL, '', 0, '\0'),
(54, 'Cocktail Beef Sausages', 6, 500.00, 'cocktail beef sausages', '54.jpg', NULL, '', 0, '\0'),
(55, 'Beef Boerwors Spicy', 6, 500.00, 'beef boerwors spicy', '55.jpg', NULL, '', 0, '\0'),
(56, 'Pork Sausages', 6, 360.00, 'pork sausages', NULL, NULL, '1 kg', 0, '\0'),
(57, 'Spicy Pork Sausages', 6, 500.00, 'spicy pork sausages', NULL, NULL, '', 0, '\0'),
(58, 'Cocktail Pork Sausages', 6, 500.00, 'cocktail pork sausages', '58.jpg', NULL, '', 0, '\0'),
(59, 'Pork Boerwors Spicy', 6, 500.00, 'pork boerwors spicy', NULL, NULL, '', 0, '\0'),
(60, 'Collar Bacon', 9, 800.00, 'collar bacon', '60.jpg', NULL, '1 kg', 0, '\0'),
(61, 'Rindless Bacon', 9, 800.00, 'rindless bacon', '61.jpg', NULL, '', 0, '\0'),
(62, 'Cooked Ham', 3, 1200.00, 'cooked ham', NULL, NULL, '', 0, '\0');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `id` bigint(20) NOT NULL auto_increment,
  `ip` varchar(25) default NULL,
  `url` varchar(250) default NULL,
  `dat` date default NULL,
  `rateval` int(11) default NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `ip`, `url`, `dat`, `rateval`) VALUES
(2, '127.0.0.1', 'http://localhost/winsor/view_product.php?id=1&productname=Capons%20Whole', '2011-01-03', 2),
(3, '127.0.0.1', 'http://localhost/winsor/view_product.php?id=2&productname=Chicken%20Burgers%20130mm', '2011-01-03', 3),
(9, '127.0.0.1', 'http://localhost/winsor/view_product.php?id=6&productname=Chicken%20Wings', '2011-02-25', 5);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE IF NOT EXISTS `recipes` (
  `Recipe_id` int(11) NOT NULL auto_increment,
  `Recipe_name` varchar(50) NOT NULL,
  `Recipe_desc` text NOT NULL,
  `Cat_ID` int(11) NOT NULL,
  `Ingredients` text NOT NULL,
  `Instructions` text NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Add_date` date NOT NULL,
  `ip_Address` text NOT NULL,
  PRIMARY KEY  (`Recipe_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`Recipe_id`, `Recipe_name`, `Recipe_desc`, `Cat_ID`, `Ingredients`, `Instructions`, `Image`, `Add_date`, `ip_Address`) VALUES
(1, 'BBQ beef brisket', 'This BBQ beef brisket recipe has a great taste', 15, '1 - 10 lb. whole brisket\r\n<br>3 T. your favourite Beef Shake</br> \r\n<br>1/4 c. salt</br> \r\n<br>2 T. fresh black pepper</br>\r\n<br>1 T. cumin</br> \r\n<br>1 T. allspice</br> \r\n<br>2 T. paprika</br> \r\n<br>1 T. garlic powder</br>', '1. Combine dry ingredients in glass bowl. \r\n\r\n<br>2. Trim fat cap to 1/8 inch thick, and trim out any fat pockets.</br>\r\n\r\n<br>3. Lightly coat entire brisket with rub mixture </br>\r\n\r\n<br>4. Start your grill and increase the temperature to a medium  heat allowing around 10 minutes or so for it to obtain the correct temperature.</br>\r\n\r\n<br>5. Place brisket on grid, fat side up.</br> \r\n<br>6. Cook 3 hours "medium", then smoke for 4 hours.</br>\r\n\r\n<br>7. Take brisket off grill and wrap in heavy-duty foil.</br> \r\n\r\n<br>8. Continue to cook on "medium" 2-3 more hours. </br>\r\n\r\n<br>9. After the 10th hour, carefully open up foil surrounding brisket. Be careful not to let juices run out. Continue to cook on "medium" for 3 more hours to finish. </br>\r\n\r\n<br>10. Remove brisket from grill, gently remove from foil. </br>\r\n\r\n<br>11. Allow it to "rest" for 15 minutes, then slice AGAINST the grain into 1/4" slices.</br>\r\n\r\n<br>Servings: 20</br>\r\n', '1.jpg', '0000-00-00', ''),
(2, 'Peppered Steaks with Barbecue Sauce', 'Peppered steaks with BBQ sauce', 15, '4 rump steaks \r\n<br />12 Schwartz Black Peppercorns , crushed \r\n<br />150 ml (1/4 pint) tomato ketchup \r\n<br />2 tbs soft brown sugar \r\n<br />2 tbs soy sauce \r\n<br />1 tbs vinegar \r\n<br />25 g (1 oz) butter \r\n<br />1 tbs oil \r\n<br />1 tsp Schwartz Parsley', '1.Sprinkle each steak on both sides with crushed Peppercorns according to taste. Press the pieces of Pepper well into the meat.\r\n\r\n<br />2.Combine ketchup, sugar, soy sauce and vinegar in a measuring jug and make up to 300ml (1/2 pint) with cold water.\r\n\r\n<br />3.Grill the steaks as required. Transfer the steaks to a serving dish and keep warm whilst making the sauce.\r\n\r\n<br />4.Add the sauce to a frying pan. Bring to the boil, stirring. Pour a little of the sauce over the steaks and garnish with a sprinkling of Parsley.\r\n\r\n<br />5.Serve remaining sauce seperately.\r\n\r\n<br />Makes 4 servings.', '', '0000-00-00', ''),
(3, 'Chinese Style BBQ Chicken', 'chinese style with sauce', 1, '8 pieces chicken, trimmed of excess fat\r\n<br />1 teaspoon kosher salt\r\n<br />1/2 teaspoon fresh ground pepper\r\n<br />1 tablespoon hoisin sauce\r\n<br />1 tablespoon cider vinegar\r\n<br />1 teaspoon soy sauce \r\n<br />\r\n<br />For the sauce:\r\n\r\n<br />2 tablespoons hoisin sauce\r\n<br />2 tablespoons cider vinegar\r\n<br />1 tablespoon Dijon mustard\r\n<br />1 teaspoon Dijon mustard\r\n<br />2 teaspoons soy sauce\r\n<br />2 teaspoons peanut oil\r\n<br />1/4 teaspoon fresh ground black pepper', '1.Season the chicken on both sides with the salt and pepper. Place in a ziplock bag with 1 Tbsp hoisin, 1 Tbsp vinegar, and 1 tsp soy sauce. Rub to distribute the ingredients and marinate in refrigerator for 2 hours. \r\n\r\n<br />2.Remove from fridge and let sit for 20 minutes before grilling.\r\n\r\n<br />3.In a small bowl mix together the sauce ingredients with a whisk or fork until smooth.\r\n\r\n<br />4.Clean the grill and preheat to medium high indirect, or medium direct. Grill the chicken skin side down with the lid closed as much as possible for about 10 minutes Then turn and cook skin side up for about 10 minutes, still with lid down as much as possible. \r\n\r\n<br />5.Brush both sides with sauce and move positions as needed to even out the cooking for about 5 minutes. If sauce remains, brush both sides again using all the sauce, turn over, and continue to cook for a final 5 minutes. \r\n\r\n<br />6.Remove when chicken is golden brown and juices run clear.', '', '0000-00-00', ''),
(4, 'Cranberry Burst BBQ Chicken', 'chicken BBQ with cranberry sauce', 1, '1 (2 to 3 pound) whole chicken, cut into pieces\r\n<br />2 tablespoons butter\r\n<br />1/2 teaspoon salt\r\n<br />1/4 teaspoon ground black pepper\r\n<br />1/2 cup chopped celery\r\n<br />1 onion, chopped\r\n<br />1 (16 ounce) can whole cranberry sauce\r\n<br />1 cup barbecue sauce\r\n', '1. Preheat oven to 350 degrees F (175 degrees C).\r\n\r\n<br />2. In a large skillet brown the chicken in butter/margarine. \r\nSeason with salt and pepper. Remove from skillet and place in a lightly greased 9x13 inch baking dish.\r\n\r\n<br />3. In the drippings (in the skillet), saute onion and celery until tender. Add cranberry sauce and barbecue sauce. Mix well.\r\n\r\n<br />4. Pour cranberry mixture over chicken and bake in the preheated oven for 90 minutes, basting every 15 minutes.', '', '0000-00-00', ''),
(5, 'Marinated BBQ Lamb Chops', 'Lamb chops in marinade ', 10, '4 lamb chops\r\n\r\n<br />Wet Rub\r\n<br />2 tablespoons mint jelly\r\n<br />1/4 cup olive oil\r\n<br />1 tablespoon balsamic vinegar\r\n<br />juice of 1/2 lemon\r\n<br />juice of 1/2 lime\r\n<br />2 tablespoons Dijon mustard\r\n<br />6 cloves minced garlic\r\n<br />1 tablespoon dried crushed oregano\r\n<br />2 tablespoons chopped fresh rosemary remove from sprigs\r\n<br />1 teaspoon salt\r\n<br />1/2 teaspoon black pepper', '1. Place the wet rub ingredients in a blender or food processor and blend until smooth.\r\n\r\n<br />2. Place the lamb chops in a plastic container and cover with the wet rub. Cover the container and place the lamb in the refrigerator for a minimum of 3 hours.\r\n\r\n<br />3. Remove the lamb chops from the container and discard the wet rub.\r\n\r\n<br />4. Preheat your barbecue grill to medium and then place the lamb chops on the grill and cook on both sides until they reach your desired level of doneness. \r\n<br />\r\n<br />TIP: you can check with a meat thermometer. The temperature will be approximately 160 to 165 degrees for medium. You can always make a slit with a small knife to check for doneness.\r\n\r\n<br />Don''t overcook the chops!\r\n\r\n<br />5. Remove from the grill and enjoy.', '', '0000-00-00', ''),
(6, 'Honey Lamb Chops', 'Honey glazed BBQ''d lamb chops ', 10, '2 tbs clear honey \r\n<br />3 tbs Worcestershire sauce \r\n<br />2 tbs soft brown sugar \r\n<br />2 tbs cornflour \r\n<br />Zest of 1 orange, plus 2 tbs juice \r\n<br />2 tbs Schwartz Lamb Seasoning <br />Simply Shake Seasoning \r\n<br />8 lamb chops', '1. Mix together the ingredients for basting sauce. Paint the sauce onto both sides of the chops.\r\n\r\n<br />2. Grill or barbecue, basting and turning frequently for about 15-20 minutes, or until cooked.\r\n\r\n<br />Makes 4 servings.', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE IF NOT EXISTS `shoppingcart` (
  `CustID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Status` int(2) NOT NULL,
  `OrderID` int(10) NOT NULL,
  `CartQty` int(10) NOT NULL,
  `CartDate` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoppingcart`
--

