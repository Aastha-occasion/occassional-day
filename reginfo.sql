-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 26, 2020 at 04:38 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10473776_infoprojects`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('gargsajal', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `contributorprofiledata`
--

CREATE TABLE `contributorprofiledata` (
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `officeno` varchar(100) NOT NULL,
  `estd` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `picname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contributorprofiledata`
--

INSERT INTO `contributorprofiledata` (`name`, `dob`, `address`, `occupation`, `mobile`, `address2`, `email`, `officeno`, `estd`, `city`, `state`, `zip`, `picname`) VALUES
('chaman@gmail.com', '3333-03-31', '', 'Buisness', '34567890', 'ertyu,', 'chaman', '123456', '', 'patiala', 'Punjab', '23456789', 'backgroundsDefault.jpg'),
('murali', '2000-03-04', '', 'Buisness', '2345', 'sty', 'm@gmail.com', '', '', 'dehradun', 'Andhra Pradesh', '123789', 'Capturen.PNG'),
('no@no.com', '2020-08-19', '', 'Job', '8999998866', 'Jskd', 'Fsgjs', 'Wu', '197', 'Bathinda', 'Bihar', '142521', 'IMG_20200728_081556_089.jpg'),
('sanjeevkumargarg689@gmail.com', '1980-01-02', '', 'Buisness', '9876543212', 'vsgwhjdsmh', 'whjdbwd', '', '', 'bathinda', 'Punjab', '151001', 'IMG_-oaocry.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `email1` varchar(100) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email1`, `message`) VALUES
('rohit@gmail.com', 'hello'),
('sajal@gmail.com', 'great site'),
('goonsg28@gmail.com', 'Great');

-- --------------------------------------------------------

--
-- Table structure for table `planner`
--

CREATE TABLE `planner` (
  `function` varchar(300) NOT NULL,
  `services` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planner`
--

INSERT INTO `planner` (`function`, `services`) VALUES
('birthday', 'photo;video;cake'),
('marriage', 'cattering;decoration;drinks;music');

-- --------------------------------------------------------

--
-- Table structure for table `profiledata`
--

CREATE TABLE `profiledata` (
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` int(11) NOT NULL,
  `picname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiledata`
--

INSERT INTO `profiledata` (`name`, `dob`, `address`, `occupation`, `mobile`, `address2`, `city`, `state`, `zip`, `picname`) VALUES
('112@gmail.com', '2020-08-02', 'Ysjs, Jskd', 'Job', '8999998866', 'Jskd', 'Bathinda', 'Bihar', 142521, 'Screenshot_20200806-080435.png'),
('abc1@gmail.com', '2000-01-02', 'smds', 'Job', '9876543212', 'smds', 'bathinda', 'Punjab', 151001, 'MRI2qHODeQywhYetvL3O_14_7b6976e44e16514964ff65e2f33c0350_image.jpg'),
('garg', '1980-01-01', 'ajit road bathinda', 'Job', '2147483647', 'st no 13 ajit road bathinda', 'bathinda', 'Punjab', 151001, 'backgroundDefault (9).jpg'),
('sajalgarg2628@gmail.com', '2000-03-03', '', 'Buisness', '235678', '', 'amritsar', 'Punjab', 0, 'backgroundDefault (11).jpg'),
('sg', '0009-08-06', 'asdfghjk', 'Job', '0', 'dgfhn,khdvhbn,', 'patiala', 'Punjab', 1345678, 'backgroundDefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `selectedservice`
--

CREATE TABLE `selectedservice` (
  `email` varchar(200) NOT NULL,
  `functions` varchar(200) NOT NULL,
  `selservice` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selectedservice`
--

INSERT INTO `selectedservice` (`email`, `functions`, `selservice`) VALUES
('a@gmail.com', 'birthday', 'photo'),
('ad@gmail.com', 'marriage', 'music'),
('chaman@gmail.com', 'birthday', 'photo'),
('dsgk@gmail.com', 'birthday', 'photo,video,cake'),
('happy@gmail.com', 'birthday', 'photo'),
('hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'video,cattering'),
('m@gmail.com', 'marriage', 'cattering,decoration'),
('no@no.com', 'select', ''),
('ritesh@gmail.com', 'birthday', 'photo,video,cake'),
('sajalgarg222@gmail.com', 'birthday', 'photo'),
('sajalgarg2628@gmail.com', 'birthday', 'photo'),
('sajalgarg2628@gmail.com/function=marriage/selservice=drinks', 'd41d8cd98f00b204e9800998ecf8427e', ''),
('sajalgarg2628@gmail.com?function=marriage?selservice=drinks', 'd41d8cd98f00b204e9800998ecf8427e', ''),
('sanjeevkumargarg689@gmail.com', 'birthday', 'photo');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `password`, `mobile`, `category`) VALUES
('', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
('000@gmail.com', '698d51a19d8a121ce581499d7b701668', '768869599', 'client'),
('111@111.com', '698d51a19d8a121ce581499d7b701668', '988888888', 'client'),
('111@gmal.com', '202cb962ac59075b964b07152d234b70', '67476784878', 'client'),
('112@gmail.com', '7f6ffaa6bb0b408017b62254211691b5', '8999998866', 'client'),
('123@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '346677889', 'client'),
('1@gmail.com', '202cb962ac59075b964b07152d234b70', '9876543211', 'client'),
('321@gmail.com', '698d51a19d8a121ce581499d7b701668', '9123456789', 'client'),
('a@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '122345677', 'contributor'),
('Aaa', '47bce5c74f589f4867dbd57e9ca9f808', '', 'contributor'),
('ab1@gmail.com', '68b6a776378decbb4a79cda89087c4ce', '9876543212', 'contributor'),
('ab@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', '9876543212', 'client'),
('abc1@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '9876543212', 'client'),
('abc2@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '346677889', 'client'),
('Abc@abc.com', '900150983cd24fb0d6963f7d28e17f72', '9876543210', 'client'),
('abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '346677889', 'client'),
('aman@gmail.com', '2bf2e089898743beb3aa3a88f0a08a82', '2347902345', 'client'),
('bcebti@gmail.com', 'ca762676c74f1b27011e944093b7e929', '9872246056', 'client'),
('bcebtii@gmail.com', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', '9872246056', 'client'),
('chaman@gmail.com', '89aa6fe3c7aecbed18914c7974250f39', '654376554', 'contributor'),
('dsgk@gmail.com', 'bd18d15f32411e3bbc229840c888c2f4', '765432', 'contributor'),
('Gargsajal689@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', '9876543212', 'client'),
('goonsg28@gmail.com', '202cb962ac59075b964b07152d234b70', '9876543212', 'client'),
('jaskirat@gmail.com', '64e329ce13d20afe7ca8742cb0a2b747', '7814936321', 'client'),
('No@no.com', '7fa3b767c460b54a2be4d49030b349c7', '8999998866', 'contributor'),
('Pavitar@gmail.com', '202cb962ac59075b964b07152d234b70', '1233455555', 'client'),
('qwer@gmail.com', '76d80224611fc919a5d54f0ff9fba446', '9147483647', 'client'),
('qwerty@gmail.com', '202cb962ac59075b964b07152d234b70', '9876543211', 'client'),
('s@gmail.com', '202cb962ac59075b964b07152d234b70', '912345678', 'client'),
('Sajalgarg222@gmail.com', 'bcbe3365e6ac95ea2c0343a2395834dd', '9417696746', 'contributor'),
('Sajalgarg2628@gmail.com', '0d4244338aa8eca70ac50caefd92a905', '9876543212', 'client'),
('sanjeevkumargarg689@gmail.com', '3042c5e85752ec688acf999fbfc3568d', '9876543212', 'contributor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contributorprofiledata`
--
ALTER TABLE `contributorprofiledata`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `planner`
--
ALTER TABLE `planner`
  ADD PRIMARY KEY (`function`);

--
-- Indexes for table `profiledata`
--
ALTER TABLE `profiledata`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `selectedservice`
--
ALTER TABLE `selectedservice`
  ADD PRIMARY KEY (`email`,`functions`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
