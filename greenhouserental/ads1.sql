-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2018 at 09:44 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ads`
--

-- --------------------------------------------------------

--
-- Table structure for table `classified_ads`
--

CREATE TABLE IF NOT EXISTS `classified_ads` (
  `id` int(50) NOT NULL auto_increment,
  `web_url` varchar(5000) NOT NULL,
  `ad_address` varchar(5000) NOT NULL,
  `ad_image` varchar(60) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `classified_ads`
--

INSERT INTO `classified_ads` (`id`, `web_url`, `ad_address`, `ad_image`) VALUES
(2, 'http://e-soft.in', 'No: 33, wireless road, airport trichy - 620007', '15571.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `client_msg`
--

CREATE TABLE IF NOT EXISTS `client_msg` (
  `id` int(50) NOT NULL auto_increment,
  `user_id` varchar(50) NOT NULL,
  `ads_id` varchar(50) NOT NULL,
  `adspost_id` varchar(50) NOT NULL,
  `user_msg` varchar(1000) NOT NULL,
  `msg_date` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `client_msg`
--


-- --------------------------------------------------------

--
-- Table structure for table `dashboard_ads`
--

CREATE TABLE IF NOT EXISTS `dashboard_ads` (
  `id` int(50) NOT NULL auto_increment,
  `cust_name` varchar(50) NOT NULL,
  `ban_ads` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dashboard_ads`
--

INSERT INTO `dashboard_ads` (`id`, `cust_name`, `ban_ads`) VALUES
(1, 'raja1', '19143.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `footer_ads`
--

CREATE TABLE IF NOT EXISTS `footer_ads` (
  `id` int(20) NOT NULL auto_increment,
  `cust_name` varchar(50) NOT NULL,
  `ban_ads` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `footer_ads`
--

INSERT INTO `footer_ads` (`id`, `cust_name`, `ban_ads`) VALUES
(1, 'raja1', '20193.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(20) NOT NULL auto_increment,
  `member_name` varchar(100) NOT NULL,
  `member_email` varchar(100) NOT NULL,
  `oauth_user_id` varchar(100) NOT NULL,
  `oauth_user_page` varchar(100) NOT NULL,
  `oauth_user_photo` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `members`
--


-- --------------------------------------------------------

--
-- Table structure for table `post_ads`
--

CREATE TABLE IF NOT EXISTS `post_ads` (
  `id` int(20) NOT NULL auto_increment,
  `user_name` varchar(200) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `ad_title` varchar(200) NOT NULL,
  `ad_type` varchar(100) NOT NULL,
  `item_type` varchar(100) NOT NULL,
  `property_type` varchar(100) NOT NULL,
  `main_catgory` varchar(50) NOT NULL,
  `sub_catgory` varchar(50) NOT NULL,
  `ad_price` varchar(50) NOT NULL,
  `ad_location` varchar(50) NOT NULL,
  `ad_city` varchar(50) NOT NULL,
  `ad_des` text NOT NULL,
  `cover_image` varchar(100) NOT NULL,
  `sub_img1` varchar(100) NOT NULL,
  `sub_img2` varchar(100) NOT NULL,
  `sub_img3` varchar(100) NOT NULL,
  `ad_status` varchar(10) NOT NULL,
  `post_date` datetime NOT NULL,
  `featured` varchar(20) NOT NULL,
  `ads_count` int(20) NOT NULL,
  `price_duration` varchar(60) NOT NULL,
  `ad_address` varchar(2000) NOT NULL,
  `ads_delete` int(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `post_ads`
--

INSERT INTO `post_ads` (`id`, `user_name`, `user_id`, `ad_title`, `ad_type`, `item_type`, `property_type`, `main_catgory`, `sub_catgory`, `ad_price`, `ad_location`, `ad_city`, `ad_des`, `cover_image`, `sub_img1`, `sub_img2`, `sub_img3`, `ad_status`, `post_date`, `featured`, `ads_count`, `price_duration`, `ad_address`, `ads_delete`) VALUES
(21, 'raja', '1', 'sale my car', 'Sell', 'Used', 'Buy used car/Vehicle', 'Vehicle', 'Vehicle', '15900', 'Adyar', 'Chennai', 'hello sir,', '237168031d88451c78fd8d6d6378c0b2.jpg', 'ad-img2.jpg', 'ad-img2.jpg', 'ad-img2.jpg', '2', '2018-02-21 15:45:14', '2', 3, 'per Year', '16-120 raja colony, adyar, chennai-620019 ', 2),
(22, 'raja', '1', 'test ads', 'Sell', 'New', 'Room for Apartment', 'Vehicle', 'Car', '50,000', 'Adyar', 'Chennai', 'test ads......', 'a11b84b38879d751f48fa321120f0c55.jpg', 'ad-img2.jpg', 'ad-img2.jpg', 'ad-img2.jpg', '1', '2018-04-04 13:03:27', '1', 0, '', 'chennai - 620001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `type`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(20) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `social_id` varchar(100) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `created` datetime NOT NULL,
  `tearms` varchar(20) NOT NULL,
  `user_status` int(10) NOT NULL,
  `hash_code` varchar(50) NOT NULL,
  `otpcode` varchar(20) NOT NULL,
  `acc_activate` int(50) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `mobile`, `email`, `password`, `social_id`, `picture`, `created`, `tearms`, `user_status`, `hash_code`, `otpcode`, `acc_activate`) VALUES
(1, 'raja', '8825723635', 'rajasekarigce@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '2017-12-20 12:17:49', '', 1, '913e83d534a2308', '', 2),
(2, 'A.Arun', '7766554433', 'abc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '2017-12-20 14:04:53', '', 1, '', '', 2),
(5, 'raja', '9999555514', 'raja@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', '2017-12-29 12:55:16', '', 1, '', '', 2),
(11, 'raja47', '8870799170', 'raja123@gmail.com', 'a80c74f0888bf39de8f25f8e2cc798b2', '', '', '2018-01-02 11:48:18', '1', 1, '', '', 2),
(13, 'john', '8877665544', 'john@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', '2018-01-19 04:17:37', '1', 1, '', '', 2),
(14, 'kumar', '8877665533', 'kumar@gmail.com', '79cfac6387e0d582f83a29a04d0bcdc4', '', '', '2018-01-19 04:21:52', '1', 2, '', '', 2),
(32, 'raja', '8825723630', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '2018-04-04 14:56:45', '1', 1, '', '5e91', 1);
