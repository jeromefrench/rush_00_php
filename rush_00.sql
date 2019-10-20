-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 20, 2019 at 10:29 AM
-- Server version: 5.6.43
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rush_00`
--
CREATE DATABASE IF NOT EXISTS `rush_00` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `rush_00`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'Biologique'),
(3, 'Prepare');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `description` text NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `categorie`, `price`, `statut`, `stock`, `description`, `photo`) VALUES
(3, 'Boulghour', 'Biologique', 42, '', 45, 'Redécouvrez le plaisir naturel du blé brut et le bienfait des céréales avec ce boulghour à la texture à la fois ferme et fondante.', 'https://www.cereal.fr/sites/default/files/8936-3D-DOY%20BOULGHOUR-HD.png'),
(4, 'Tofu a lindienne', 'Prepare', 34, '', 23, 'Retrouvez la subtile association du curry et de la noix de coco dans notre tofu à l’indienne. Naturellement riche en protéines végétales', 'https://www.cereal.fr/sites/default/files/tofu-curry-coco.png'),
(5, 'Galettes Cereales', 'Prepare', 43, '', 33, 'Les galettes de céréales Céréal Bio associent les bienfaits des céréales à des saveurs gourmandes et originales', 'https://www.cereal.fr/sites/default/files/3175681028098.png'),
(6, 'Tofu mediterraneen', 'Prepare', 45, '', 56, 'Il vous permet de diversifier vos sources de protéines tout en apportant une touche d’exotisme', 'https://www.cereal.fr/sites/default/files/tofu-tomate-olive.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `mail` text NOT NULL,
  `passwd` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `fname`, `lname`, `mail`, `passwd`) VALUES
(1, 'my login', 'my fname', 'my lname', 'my mail', 'my passwd'),
(2, 'my login', 'my fname', 'my lname', 'my mail', 'my passwd'),
(3, 'ccc', 'dsfaf', 'sadfdsf', 'asdfdsa', 'sdaf'),
(4, 'ccc', 'ef', 'dsaf', 'sadf', 'sdafads'),
(5, 'ccc', 'sdafsdaf', 'sdafsdaf', 'dsaf', 'dsfa'),
(6, 'ccc', 'sadfsd', 'dsafadsf', 'sadfsdf', 'sadfsdf'),
(7, 'ccc', 'sadfsdf', 'sadfsd', 'asfddfs', 'sadfs'),
(8, 'ccc', 'sadfsdf', 'sadfsd', 'asfddfs', 'sadfs'),
(9, 'ccc', 'sdaf', 'sdafsd', 'sdaf', 'sadf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
