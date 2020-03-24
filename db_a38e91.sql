-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2020 at 11:25 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_a38e91`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblannonce`
--

CREATE TABLE `tblannonce` (
  `Id_An` bigint(20) NOT NULL,
  `Id_Uti` bigint(20) NOT NULL,
  `Id_Cat_An` int(11) NOT NULL,
  `Id_Mon` int(11) NOT NULL,
  `Id_Img` int(11) NOT NULL,
  `Prix` decimal(10,0) NOT NULL,
  `Quantite_En_Stock` float NOT NULL,
  `Preciser` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Description` text CHARACTER SET utf8 NOT NULL,
  `Negociable` int(1) NOT NULL,
  `Etat` int(1) NOT NULL,
  `Activated` int(1) NOT NULL,
  `Date_Ajout` datetime NOT NULL,
  `Date_Update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblannonce`
--

INSERT INTO `tblannonce` (`Id_An`, `Id_Uti`, `Id_Cat_An`, `Id_Mon`, `Id_Img`, `Prix`, `Quantite_En_Stock`, `Preciser`, `Description`, `Negociable`, `Etat`, `Activated`, `Date_Ajout`, `Date_Update`) VALUES
(1507656634, 1507655075, 31, 1, 1507656832, '75', 0, 'Tablet Pistach', 'tablet peyi.m se yon prodwi ayisyen\nkontakte.n sou 3139-1605', 1, 0, 1, '2017-10-10 10:27:44', '2017-10-10 10:27:44'),
(1507656957, 1507655075, 31, 1, 1507657139, '75', 0, '\0tablet peyi.m', '\0se yon ti bwat byen chelbe\n31391605', 1, 0, 1, '2017-10-10 10:31:00', '2017-10-10 10:31:00'),
(1507923610, 1507919928, 26, 1, 1507923862, '30', 0, '\0Cola Couronne', 'pa gen pi glase pasenn', 2, 0, 0, '2017-10-13 12:36:52', '2019-03-27 16:21:40'),
(1507923949, 1507920435, 6, 1, 1507924669, '15', 0, '\0enveloppe', 'anvlop tou nef, an gwo e an detay, vin bwote', 2, 0, 1, '2017-10-13 12:42:22', '2017-10-13 12:42:22'),
(1507924293, 1507920435, 6, 1, 1507923692, '15', 0, '\0Enveloppe', 'Gwo anvlop, tou nef, an gwo e an detay', 2, 0, 1, '2017-10-13 12:36:03', '2017-10-13 12:36:03'),
(1507924528, 1507920435, 10, 1, 1507925363, '1000', 0, '\0cle usb 8GB', 'bon jump, yo tou nef, nou gen sa 16 gb... ', 1, 0, 1, '2017-10-13 12:51:10', '2017-10-13 12:51:10'),
(1507924602, 1507920435, 6, 1, 1507924432, '5', 0, '\0bristol', '\0Tout koule, nou vann an gwo e an detay. ge tout koule, wouj, ble, nwa, jaune, nwa etc..', 2, 0, 1, '2017-10-13 12:44:49', '2017-10-13 12:44:49'),
(1507924916, 1507919928, 26, 1, 1507924329, '30', 0, '\0Cola Couronne', 'Byen Glase', 2, 0, 0, '2017-10-13 12:44:43', '2019-03-27 16:21:34'),
(1507929286, 1507920435, 10, 1, 1507929484, '500', 0, '\0cle usb 4GB', '\0jump tou nef, bon kalite, mak ki ap mennen yo', 2, 0, 1, '2017-10-13 14:14:28', '2017-10-13 14:14:28'),
(1508014957, 1507919928, 26, 1, 1508015335, '40', 0, '\0Coca Cola', 'Nou vann byen glase e nou vann cho tou', 1, 0, 0, '2017-10-14 14:01:43', '2019-03-27 16:21:32'),
(1508015639, 1507919928, 26, 1, 1508015957, '30', 0, '\07up', 'Byen Glase e nou vann cho, en gros et en detay', 1, 0, 0, '2017-10-14 14:10:21', '2019-03-27 16:21:29'),
(1508015677, 1507919928, 26, 1, 1508015177, '40', 0, '\0Coca cola', 'nou vann byen glase e nou vann cho tou', 1, 0, 0, '2017-10-14 13:59:00', '2019-03-27 16:21:38'),
(1508016144, 1507919928, 26, 1, 1508015674, '30', 0, 'Fiesta', '\0Nou vann byen glase e nou vann cho, en gro e en detay', 1, 0, 0, '2017-10-14 14:06:12', '2019-03-27 16:21:31'),
(1508016502, 1507919928, 26, 1, 1508016065, '25', 0, '\0Tampico', '\0Byen glase e nou vann cho tou, en gros e en detay', 1, 0, 0, '2017-10-14 14:18:13', '2019-03-27 16:21:28'),
(1508095314, 1512800826, 6, 2, 0, '40', 0, 'Router 4G internet', '\0Pye kout pran devan\r\nLi pran nenpot sim e li kenbe charj anpil.', 1, 0, 0, '2017-10-15 12:19:02', '2017-10-15 12:19:02'),
(1508095629, 1512800826, 6, 2, 0, '40', 0, 'Router 4G internet', '\0Pye kout pran devan, yo kenbe charj anpil e yo pran nenpot sim.', 1, 0, 0, '2017-10-15 12:21:23', '2017-10-15 12:21:23'),
(1508095651, 1512800826, 6, 2, 0, '40', 0, 'Router 4G internet', '\0Pye kout pran devan, yo kenbe charj anpil e yo pran nenpot sim.', 1, 0, 0, '2017-10-15 12:21:49', '2017-10-15 12:21:49'),
(1508095791, 1512800826, 6, 2, 0, '40', 0, 'Router 4G internet', '\0Pye kout pran devan, yo kenbe charj anpil e yo pran nenpot sim.', 1, 0, 0, '2017-10-15 12:22:17', '2017-10-15 12:22:17'),
(1508095928, 1512800826, 6, 2, 0, '40', 0, 'Router 4G internet', '\0Pye kout pran devan, yo kenbe charj anpil e yo pran nenpot sim.', 1, 0, 0, '2017-10-15 12:21:39', '2017-10-15 12:21:39'),
(1508116119, 1507584121, 11, 2, 0, '150', 36, 'Ordinateur Dell', '  Kouri reze ordi paw la !!yo pa che!', 0, 0, 0, '2017-10-15 17:53:27', '2017-10-15 17:53:27'),
(1508595905, 1507919928, 26, 1, 1508596272, '30', 0, '\0jugoo', '\0nou vann cho e nou vann glase', 2, 0, 0, '2017-10-21 07:21:38', '2019-03-27 16:21:27'),
(1508945163, 1576266288, 10, 1, 1508945512, '400', 0, 'Anpoul rechajab ', 'Ti soley rechajab 400gd\r\nEkotek rechajan 500gd', 1, 0, 1, '2017-10-25 08:20:09', '2017-10-25 08:20:09'),
(1508945786, 1576266288, 34, 2, 0, '70', 0, 'Souris/routeur', '\0Souris $12\r\nSouris $15\r\nsouris $20\r\nRouteur wifi 4G a jump $50\r\nRouteur wifi 4G a sim $70', 1, 0, 0, '2017-10-25 08:30:37', '2017-10-25 08:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategorie`
--

CREATE TABLE `tblcategorie` (
  `Id_Cat_An` int(11) NOT NULL,
  `Type_Cat` varchar(100) NOT NULL,
  `Date_Ajout` datetime NOT NULL,
  `Date_Update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategorie`
--

INSERT INTO `tblcategorie` (`Id_Cat_An`, `Type_Cat`, `Date_Ajout`, `Date_Update`) VALUES
(1, 'Vetement pour homme ', '2017-07-21 00:00:00', '2017-07-21 00:00:00'),
(2, 'Telephone', '2017-07-21 00:00:00', '2017-07-21 00:00:00'),
(3, 'Cosmetique', '2017-07-21 00:00:00', '2017-07-21 00:00:00'),
(4, 'Medicament', '2017-07-21 00:00:00', '2017-07-21 00:00:00'),
(5, 'Automobile', '2017-07-21 00:00:00', '2017-07-21 00:00:00'),
(6, 'Accessoire', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(7, 'Fleur', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(8, 'Sac a main', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(9, 'Sac a dos', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(10, 'Electronique', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(11, 'Ordinateur', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(12, 'Terrain', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(14, 'Vetement pour femme', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(15, 'Maison', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(17, 'Television', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(18, 'Casque', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(19, 'Livre', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(20, 'Soulier', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(21, 'Tennis', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(22, 'Sandale', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(24, 'Batterie', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(25, 'Appareil electomenager', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(26, 'Boisson', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(27, 'Lunette', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(28, 'Eau', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(29, 'Piece automobile', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(30, 'Animal', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(31, 'Produit alimentaire', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(32, 'Oiseau', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(33, 'Article de maison', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(34, 'Article de bureau', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(35, 'Bijou', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(37, 'Camera', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(38, 'Autre', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(39, 'Service', '2017-10-04 00:00:00', '2017-10-04 00:00:00'),
(1202300, 'Evenement', '2017-07-21 00:00:00', '2017-07-21 00:00:00'),
(1209344, 'Offre emploi', '2018-01-08 00:00:00', '2018-01-08 00:00:00'),
(1210233, 'Loisir', '2017-07-21 00:00:00', '2017-07-21 00:00:00'),
(12002032, 'Hotel', '2017-07-21 00:00:00', '2017-07-21 00:00:00'),
(12002033, 'Location', '2017-07-21 00:00:00', '2017-07-21 00:00:00'),
(12002034, 'Multimedia', '2017-07-21 00:00:00', '2017-07-21 00:00:00'),
(12002035, 'Jouet', '2017-07-21 00:00:00', '2017-07-21 00:00:00'),
(12002037, 'Huile', '2017-08-03 00:00:00', '2017-08-03 00:00:00'),
(12002038, 'equipement sportif', '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(12133433, 'Recrutement', '2018-08-20 00:00:00', '2018-08-20 00:00:00'),
(12220004, 'Jardinage', '2018-03-23 12:21:00', '2018-03-23 12:21:00'),
(12220005, 'CD/musique', '2018-03-23 12:21:00', '2018-03-23 12:21:00'),
(12220006, 'fourniture de bureaux', '2018-03-23 12:21:00', '2018-03-23 12:21:00'),
(12220008, 'Collection', '2018-03-23 12:21:00', '2018-03-23 12:21:00'),
(12220009, 'Bricolage', '2018-03-23 12:21:00', '2018-03-23 12:21:00'),
(12220010, 'materiel agricole', '2018-03-23 12:21:00', '2018-03-23 12:21:00'),
(12220011, 'DVD/films', '2018-03-23 12:21:00', '2018-03-23 12:21:00'),
(12220012, 'Jeux videos', '2018-03-23 12:21:00', '2018-03-23 12:21:00'),
(12220013, 'Equipement auto', '2018-03-23 12:21:01', '2018-03-23 12:21:01'),
(120212012, 'Energie', '2018-04-07 00:00:00', '2018-04-07 00:00:00'),
(121002303, 'Equipement enfant', '2018-04-30 00:00:00', '2018-04-30 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
