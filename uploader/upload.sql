-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Dec 17, 2012 at 02:48 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `upload`
-- 
CREATE DATABASE `upload` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `upload`;

-- --------------------------------------------------------

-- 
-- Table structure for table `up_files`
-- 

CREATE TABLE `up_files` (
  `id` int(11) NOT NULL auto_increment,
  `floc` text NOT NULL,
  `fdatein` varchar(200) NOT NULL,
  `fdesc` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `up_files`
-- 

INSERT INTO `up_files` (`id`, `floc`, `fdatein`, `fdesc`) VALUES 
(1, 'uploads/8306_File_New Text Document.txt', '2012-12-17 14:45:40', 'text document'),
(2, 'uploads/4753_File_bethel 5 LOGO.png', '2012-12-17 14:46:04', 'picture');
