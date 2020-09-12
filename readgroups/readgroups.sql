-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2018 at 06:09 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `readgroups`
--

-- --------------------------------------------------------

--
-- Table structure for table `crc_training`
--

CREATE TABLE IF NOT EXISTS `crc_training` (
  `Id` int(10) NOT NULL auto_increment,
  `StudentName` varchar(20) NOT NULL,
  `FatherName` varchar(20) NOT NULL,
  `Sex` varchar(20) NOT NULL,
  `Mothername` varchar(20) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `Community` varchar(100) NOT NULL,
  `Qualification` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `ProfilePhoto` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `AadhaarNo` int(16) NOT NULL,
  `PanNo` int(20) NOT NULL,
  `BankAc` int(20) NOT NULL,
  `ContactNo` varchar(10) NOT NULL,
  `TrainingName` varchar(100) NOT NULL,
  `Month` varchar(20) NOT NULL,
  `TrainingFees` varchar(100) NOT NULL,
  `TrainingJoining` date NOT NULL,
  `Notebook` varchar(20) NOT NULL,
  `CertificateDate` date NOT NULL,
  `FamilyMemberDetails` varchar(100) NOT NULL,
  `BloodGroup` varchar(20) NOT NULL,
  `Status` int(10) NOT NULL default '0',
  `DateTime` datetime NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `crc_training`
--

INSERT INTO `crc_training` (`Id`, `StudentName`, `FatherName`, `Sex`, `Mothername`, `Religion`, `Community`, `Qualification`, `DOB`, `ProfilePhoto`, `Address`, `AadhaarNo`, `PanNo`, `BankAc`, `ContactNo`, `TrainingName`, `Month`, `TrainingFees`, `TrainingJoining`, `Notebook`, `CertificateDate`, `FamilyMemberDetails`, `BloodGroup`, `Status`, `DateTime`) VALUES
(1, 'Elayaraja', 'Durai', 'Male', 'Sarasu', 'Hindu', 'MBC', 'MCA', '1980-07-23', '', '1926, Sakthivinayagar Street, Andimadam', 0, 0, 0, '9150443183', 'Computer', '6', '50000', '2018-08-09', '5', '2018-08-31', '4', 'A1+', 0, '2018-08-09 11:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE IF NOT EXISTS `employee_details` (
  `Id` int(10) NOT NULL auto_increment,
  `EmployeeId` int(10) NOT NULL,
  `EmployeeName` varchar(20) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Age` int(20) NOT NULL,
  `EmailId` varchar(30) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Education` varchar(30) NOT NULL,
  `JoiningDate` date NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `MobileNo` int(10) NOT NULL,
  `AadhaarNo` int(16) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `Caste` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Salary` int(20) NOT NULL,
  `Status` int(10) NOT NULL default '0',
  `DateTime` datetime NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `employee_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `hiv_positive_programme`
--

CREATE TABLE IF NOT EXISTS `hiv_positive_programme` (
  `Id` int(10) NOT NULL auto_increment,
  `Name` varchar(20) NOT NULL,
  `Age` int(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `JoinYear` date NOT NULL,
  `AppliedOn` date NOT NULL,
  `Occupation` varchar(30) NOT NULL,
  `Income` int(20) NOT NULL,
  `ARTTreatment` varchar(20) NOT NULL,
  `KnowRead` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Family` varchar(100) NOT NULL,
  `Status` int(10) NOT NULL default '0',
  `DateTime` datetime NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hiv_positive_programme`
--


-- --------------------------------------------------------

--
-- Table structure for table `network_programme`
--

CREATE TABLE IF NOT EXISTS `network_programme` (
  `Id` int(10) NOT NULL auto_increment,
  `Name` varchar(20) NOT NULL,
  `Age` int(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Education` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `MobileNo` int(10) NOT NULL,
  `AadhaarNo` int(16) NOT NULL,
  `BankDetails` int(20) NOT NULL,
  `JoinNP` date NOT NULL,
  `MaritialStatus` varchar(20) NOT NULL,
  `Occupation` varchar(100) NOT NULL,
  `MonthlyIncome` int(20) NOT NULL,
  `HIV/AIDSDate` date NOT NULL,
  `Place` varchar(50) NOT NULL,
  `ARTTreatment` varchar(100) NOT NULL,
  `FamilyDetails` varchar(100) NOT NULL,
  `Reason` varchar(100) NOT NULL,
  `ChildrensStatus` varchar(20) NOT NULL,
  `MentinedName` varchar(20) NOT NULL,
  `Status` int(10) NOT NULL default '0',
  `DateTime` datetime NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `network_programme`
--


-- --------------------------------------------------------

--
-- Table structure for table `sponsership_programme`
--

CREATE TABLE IF NOT EXISTS `sponsership_programme` (
  `Id` int(10) NOT NULL,
  `SponsersNo` int(10) NOT NULL,
  `SponsersName` varchar(50) NOT NULL,
  `CountryName` varchar(20) NOT NULL,
  `ChildName` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `YearSP` date NOT NULL,
  `Education` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `MobileNo` int(20) NOT NULL,
  `AadhaarNo` int(16) NOT NULL,
  `EducationalStatus` varchar(50) NOT NULL,
  `BankName` varchar(20) NOT NULL,
  `AccountNo` int(20) NOT NULL,
  `BranchName` varchar(20) NOT NULL,
  `IFSCCode` varchar(20) NOT NULL,
  `FamilyDetails` varchar(100) NOT NULL,
  `FeesDetails` varchar(50) NOT NULL,
  `SiblingsStatus` varchar(20) NOT NULL,
  `SiblingsName` varchar(20) NOT NULL,
  `SiblingsNo` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL default '0',
  `DateTime` datetime NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsership_programme`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(20) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL,
  `password` varchar(80) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');
