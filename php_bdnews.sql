-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 09:21 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_bdnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catagory`
--

CREATE TABLE `tbl_catagory` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_catagory`
--

INSERT INTO `tbl_catagory` (`id`, `name`) VALUES
(1, 'JAVA'),
(2, 'PHP'),
(3, 'HTML'),
(5, 'Education'),
(11, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `firstname`, `lastname`, `email`, `body`, `date`, `status`) VALUES
(1, 'Golam', 'Rabbi', 'rabbi@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc', '2017-12-29 16:19:41', 1),
(4, 'Ariful', 'Islam', 'arif@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc.....', '2017-12-29 16:19:41', 1),
(6, 'Tajul', 'Islam', 'tajul@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc..... ', '2017-12-29 16:19:41', 1),
(7, 'Rezuanul', 'Islam', 'rezuanul@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet,', '2017-12-29 17:49:26', 1),
(9, 'Zakir', 'Hossain', 'zakir@gmail.con', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet,', '2017-12-30 07:08:48', 1),
(10, 'Mehedi', 'Hasan', 'mehedi@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet,', '2018-01-03 06:52:04', 1),
(11, 'golam', 'rabbi', 'golamrabbi@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet', '2019-11-04 20:18:14', 0),
(12, 'mehedi', 'hasan', 'mehdi@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, ', '2019-11-04 20:19:59', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer`
--

CREATE TABLE `tbl_footer` (
  `id` int(11) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_footer`
--

INSERT INTO `tbl_footer` (`id`, `note`) VALUES
(1, 'Copyright By Golam Rabbi.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `name`, `body`) VALUES
(4, 'About Us', '<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>\r\n<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>\r\n<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>'),
(5, 'Privacy', '<p><span>Privacy Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>\r\n<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>\r\n<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>'),
(6, 'DMCA', '<p><span>Lorem ipsums dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>\r\n<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>\r\n<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `cat`, `title`, `body`, `image`, `author`, `tags`, `date`, `userid`) VALUES
(15, 1, 'Java Title goes here', '<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>\r\n<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>\r\n<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>', 'uploads/3abfdfe6e3.png', 'rabbi', 'java', '2017-12-25 04:07:42', 0),
(16, 2, 'PHP Title goes here', '<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>\r\n<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>\r\n<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>', 'uploads/2175b8a49d.jpg', 'Fazly Rabbi', 'php', '2017-12-25 04:11:05', 1),
(17, 3, 'HTML Title goes here', '<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>\r\n<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>\r\n<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>', 'uploads/8bef2eb397.jpg', 'Golam Rabbani', 'html', '2017-12-25 04:14:19', 2),
(18, 4, 'CSS Title goes here', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</p>', 'uploads/1015a146f3.png', 'Kashem', 'css', '2017-12-25 04:17:33', 0),
(19, 5, 'Education title goes here', '<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>\r\n<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>\r\n<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>', 'uploads/666a3a1699.png', 'Fazly Rabbi', 'education', '2017-12-25 04:19:22', 1),
(21, 1, 'Java Title goes here', '<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></p>\r\n<p><span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></span></p>\r\n<p><span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</span></span></p>', 'uploads/474fa31b9a.jpg', 'Golam Rabbani', 'java', '2017-12-25 04:29:42', 2),
(25, 11, 'Sprots title goes here', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</p>', 'uploads/1d22c28eb8.jpg', 'Fazly Rabbi', 'Sports', '2017-12-26 06:02:43', 1),
(26, 3, 'HTML tilte goes here', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eu iaculis imperdiet, turpis nunc aliquam augue, eget condimentum lectus velit vitae urna. Curabitur eu feugiat erat. Nam et arcu sit amet magna facilisis accumsan vel nec mauris. Vivamus interdum adipiscing molestie. Vestibulum sollicitudin massa eget turpis cursus eget ullamcorper odio pharetra. Sed dictum lacus sed erat molestie id aliquet enim vestibulum. Nullam malesuada, massa feugiat feugiat blandit, quam metus tincidunt risus, in condimentum nisi eros a metus. Cras sapien mi, porttitor eu semper sit amet, cursus eget lacus.</p>', 'uploads/fef4f8eda9.jpg', 'Fazly Rabbi', 'html,css', '2018-01-09 05:32:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `image`) VALUES
(1, 'First slider Title will be go here', 'uploads/5beb396c49.jpg'),
(2, 'Second slider title will be go here', 'uploads/cee6b0a31d.jpg'),
(3, 'Third slider image go here', 'uploads/slider/56fc3c9add.jpg'),
(5, 'Four slider image go here', 'uploads/slider/9c160c9ba8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `id` int(11) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `ln` varchar(255) NOT NULL,
  `gp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`id`, `fb`, `tw`, `ln`, `gp`) VALUES
(1, 'http://facebooks.com/rabbi', 'http://twitters.com/rabbi', 'http://linkins.com/rabbi', 'http://googles.com/rabbi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `password`, `email`, `details`, `role`) VALUES
(1, 'Admin', 'Golam Rabbi', '12345', 'golamrabbi@gmail.com', '<p>Bogra</p>', 0),
(2, 'Admin', 'Ariful Islam', '12345', 'arif@gmail.com', '<p>Kahaloo,bogra</p>', 0),
(5, 'admin', 'rabbi', '12345', 'rabbi@gmail.com', 'Bogra', 0),
(6, 'author', 'Robel', '12345', '', '', 0),
(7, 'Editor', 'Samim', '12345', 'samim@gmail.com', '<p>Sirajgonj</p>', 2),
(8, 'admin', 'Rotan', '12345', '', '', 1),
(9, 'Editor', 'zakir', '12345', '', '', 2),
(10, 'Author', 'Fazly Rabbi', '12345', 'fazly@gmail.com', '<p>Hey,I am Fazly Rabbi.I come from Bogra.</p>', 1),
(11, 'Editor', 'Golam Rabbani', '12345', 'rabbani@gmail.com', '<p>Hey,I am Golam Rabbani.I come from Bogra</p>', 2);

-- --------------------------------------------------------

--
-- Table structure for table `title_slogan`
--

CREATE TABLE `title_slogan` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `title_slogan`
--

INSERT INTO `title_slogan` (`id`, `title`, `slogan`, `logo`) VALUES
(1, 'Programming Websites', 'Bangla All Pogramming Tutotials ', 'uploads/logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_catagory`
--
ALTER TABLE `tbl_catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title_slogan`
--
ALTER TABLE `title_slogan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_catagory`
--
ALTER TABLE `tbl_catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `title_slogan`
--
ALTER TABLE `title_slogan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
