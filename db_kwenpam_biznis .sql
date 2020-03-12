-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 06:56 AM
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
-- Database: `db_kwenpam_biznis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladministration`
--

CREATE TABLE `tbladministration` (
  `id_admin` varchar(200) NOT NULL,
  `id_uti` varchar(200) NOT NULL,
  `pin` varchar(200) NOT NULL,
  `etat` int(1) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladministration`
--

INSERT INTO `tbladministration` (`id_admin`, `id_uti`, `pin`, `etat`, `date_ajout`, `date_update`) VALUES
('158330981813', '8', '158330981894', 1, '2020-03-04 00:16:58', '0000-00-00 00:00:00'),
('158330982627', '22', '158330982696', 0, '2020-03-04 00:17:06', '0000-00-00 00:00:00'),
('158331002933', '2', '158331002951', 1, '2020-03-04 00:20:29', '0000-00-00 00:00:00'),
('158331238871', '6', '158331238813', 1, '2020-03-04 00:59:48', '0000-00-00 00:00:00'),
('158331322452', '80', '158331322496', 1, '2020-03-04 01:13:44', '0000-00-00 00:00:00'),
('158331344966', '81', '158331344985', 1, '2020-03-04 01:17:29', '0000-00-00 00:00:00'),
('158331380163', '90', '158331380116', 1, '2020-03-04 01:23:21', '0000-00-00 00:00:00'),
('158331475294', '1', '158331475253', 1, '2020-03-04 01:39:12', '0000-00-00 00:00:00'),
('158333997278', '4', '158333997215', 1, '2020-03-04 08:39:32', '0000-00-00 00:00:00'),
('158338325491', '9', '158338325472', 1, '2020-03-04 20:40:54', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblbourse`
--

CREATE TABLE `tblbourse` (
  `id_bourse` varchar(200) NOT NULL,
  `id_type_bourse` int(1) NOT NULL,
  `id_uti` varchar(200) NOT NULL,
  `solde` float NOT NULL,
  `etat` int(1) NOT NULL,
  `date_ajout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblbourse`
--

INSERT INTO `tblbourse` (`id_bourse`, `id_type_bourse`, `id_uti`, `solde`, `etat`, `date_ajout`, `date_update`) VALUES
('1580459475304', 1, '1', 1900, 1, '2020-03-11 14:05:24', '2020-01-31 01:20:00'),
('158239957215', 66, '2', 1000, 1, '2020-02-23 15:53:29', '0000-00-00 00:00:00'),
('158240129034', 66, '3', 5000, 1, '2020-02-24 16:13:13', '0000-00-00 00:00:00'),
('158240140094', 66, '4', 4000, 1, '2020-02-24 16:13:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcommande`
--

CREATE TABLE `tblcommande` (
  `id_commande` varchar(200) NOT NULL,
  `id_an` varchar(200) NOT NULL,
  `id_type_com` int(11) NOT NULL,
  `id_liv_reserv` varchar(200) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblconditionmatrimonial`
--

CREATE TABLE `tblconditionmatrimonial` (
  `id_condition_mat` int(11) NOT NULL,
  `condition_mat` varchar(15) NOT NULL,
  `date_ajout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblconditionmatrimonial`
--

INSERT INTO `tblconditionmatrimonial` (`id_condition_mat`, `condition_mat`, `date_ajout`) VALUES
(1, 'marye', '2020-02-06 00:00:00'),
(2, 'selibat&egrave;', '2020-02-06 00:00:00'),
(3, 'lib', '2020-02-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblconnexion`
--

CREATE TABLE `tblconnexion` (
  `id_con` varchar(200) NOT NULL,
  `id_admin` varchar(200) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `localisation` varchar(200) NOT NULL,
  `date_ajout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbldetaillivraison`
--

CREATE TABLE `tbldetaillivraison` (
  `id_detail_liv` varchar(200) NOT NULL,
  `id_liv` varchar(200) NOT NULL,
  `id_ville` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblemploye`
--

CREATE TABLE `tblemploye` (
  `id_emp` varchar(200) NOT NULL,
  `nom_complet` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `id_type_condition_mat` int(1) NOT NULL,
  `id_type_groupe_san` int(1) NOT NULL,
  `id_type_niveau_et` int(2) NOT NULL,
  `id_ville` int(11) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `id_poste_actuel` int(2) NOT NULL,
  `id_poste_ancien` int(2) NOT NULL,
  `salaire` int(11) NOT NULL,
  `etat` int(1) NOT NULL,
  `date_ajout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemploye`
--

INSERT INTO `tblemploye` (`id_emp`, `nom_complet`, `email`, `telephone`, `sexe`, `id_type_condition_mat`, `id_type_groupe_san`, `id_type_niveau_et`, `id_ville`, `adresse`, `id_poste_actuel`, `id_poste_ancien`, `salaire`, `etat`, `date_ajout`, `date_update`) VALUES
('emp-158198974423', 'Junior  Larosiliere', 'junior9@gmail.com', '43567876', 'Masculin', 1, 2, 1, 1, 'Delmas60', 1, 1, 6000, 1, '2020-03-02 17:45:45', '2020-03-02 17:45:45'),
('emp-158199004381', 'Regine Fleurine', 'fleurgeen32@gmail.com', '46780967', 'Masculin', 1, 2, 1, 1, 'Delmas60', 1, 1, 30000, 1, '2020-03-02 00:56:40', '2020-03-02 00:56:40'),
('emp-158203529532', 'Francois Nicolas', 'nicolas32@gmail.com', '23567822', 'Masculin', 1, 2, 1, 1, 'Carrefour Feuilles,Route de Dalles', 1, 1, 50000, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('emp-158203542428', 'Billy Napoleon', 'joachinwidy@yahoo.fr', '44098743', 'Masculin', 1, 2, 1, 1, 'delmas 45', 1, 1, 12000, 1, '2020-02-20 18:25:32', '0000-00-00 00:00:00'),
('emp-158204575761', 'Marcel jude', 'Marcel@gmail.com', '343234', 'masculin', 1, 3, 2, 4, 'Petion ville', 2, 5, 56499, 1, '2020-02-21 14:21:21', '0000-00-00 00:00:00'),
('emp-158207390956', 'Jacques Allain', 'Jacques92@gmail.com', '33225648', 'Masculin', 1, 3, 2, 4, 'Delmas 56', 2, 5, 30000, 1, '2020-03-02 23:11:20', '2020-03-02 23:11:20'),
('emp-158207400442', 'Judeline amazan Pierre ', 'Judeline08@gmail.com', '23567821', 'Feminin', 1, 3, 2, 4, 'Petion ville,Rue Lamarre', 2, 5, 25000, 1, '2020-02-21 14:54:32', '0000-00-00 00:00:00'),
('emp-158207413042', 'Ricardo Nelly', 'ricardo@gmail.com', '33447789', 'Masculin', 1, 3, 2, 4, 'Bizoton,78', 2, 5, 30000, 1, '2020-02-20 00:56:13', '0000-00-00 00:00:00'),
('emp-158213341826', 'Fleurine Kenley', 'fleurinekenley@gmail.com', '47663774', 'Masculin', 1, 3, 2, 4, 'Tabarre.24', 2, 5, 50000, 1, '2020-02-20 00:56:29', '0000-00-00 00:00:00'),
('emp-158223027070', 'Ricardo Nazaire', 'ricardo@gmail.com', '33447789', '0', 1, 3, 2, 4, 'Tabarre', 2, 5, 30000, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('emp-158230429465', 'Julien Mondesir', 'Mondesir@gmail.com', '32098976', '0', 1, 3, 2, 4, 'Tabarre', 2, 5, 60000, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('emp-158302174834', 'jojo Pierre', 'jojo@gmail.com', '3443244', '0', 1, 3, 2, 4, 'Tabarre', 2, 5, 6000, 1, '2020-03-02 17:33:03', '2020-03-02 17:33:03'),
('emp-158310686020', 'Maudelin', 'Maudelin@gmail.com', '43456093', '0', 1, 3, 2, 4, 'Tabarre', 2, 5, 6000, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('emp-158318869460', 'toto', 'toto@gmail.com', '45454545', '0', 1, 3, 2, 4, 'Tabarre', 2, 5, 6000, 1, '2020-03-02 22:38:14', '2020-03-02 22:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `tblespacepublicite`
--

CREATE TABLE `tblespacepublicite` (
  `id_espace_pub` int(11) NOT NULL,
  `espace_pub` varchar(50) NOT NULL,
  `date_ajout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblespacepublicite`
--

INSERT INTO `tblespacepublicite` (`id_espace_pub`, `espace_pub`, `date_ajout`) VALUES
(1, 'Ayiti', '2020-02-06 00:00:00'),
(2, 'Ayiti ak l&ograve;t peyi', '2020-02-06 00:00:00'),
(3, 'L&ograve;t peyi', '2020-02-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbletat`
--

CREATE TABLE `tbletat` (
  `id_etat` int(11) NOT NULL,
  `id_pays` int(11) DEFAULT NULL,
  `nom_etat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbletat`
--

INSERT INTO `tbletat` (`id_etat`, `id_pays`, `nom_etat`) VALUES
(1, 1, 'Nord'),
(2, 1, 'Sud'),
(3, 1, 'Centre'),
(4, 1, 'Ouest'),
(5, 1, 'Sud-Est'),
(6, 1, 'Artibonite'),
(7, 1, 'Nord-Est'),
(8, 1, 'Nord-Ouest'),
(9, 1, 'Nippes'),
(10, 1, 'Grand-Anse');

-- --------------------------------------------------------

--
-- Table structure for table `tbletattransaction`
--

CREATE TABLE `tbletattransaction` (
  `id_etat_transaction` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbletattransaction`
--

INSERT INTO `tbletattransaction` (`id_etat_transaction`, `type`, `date_ajout`, `date_update`) VALUES
(1, 'atant', '2020-02-22 00:00:00', '2020-02-22 00:00:00'),
(2, 'valide', '2020-02-22 00:00:00', '2020-02-22 00:00:00'),
(3, 'elimine', '2020-02-22 00:00:00', '2020-02-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblgroupesanguin`
--

CREATE TABLE `tblgroupesanguin` (
  `id_groupe_san` int(11) NOT NULL,
  `groupe` varchar(5) NOT NULL,
  `date_ajout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgroupesanguin`
--

INSERT INTO `tblgroupesanguin` (`id_groupe_san`, `groupe`, `date_ajout`) VALUES
(1, 'A', '2020-02-06 00:00:00'),
(2, 'AB-', '2020-02-06 00:00:00'),
(3, 'O+', '2020-02-06 00:00:00'),
(4, 'A-', '2020-02-06 00:00:00'),
(5, 'B-', '2020-02-06 00:00:00'),
(6, 'B+', '0000-00-00 00:00:00'),
(7, 'AB+', '2020-02-06 00:00:00'),
(8, 'O-', '2020-02-06 00:00:00'),
(9, 'A', '2020-02-06 00:00:00'),
(10, 'AB-', '2020-02-06 00:00:00'),
(11, 'O+', '2020-02-06 00:00:00'),
(12, 'A-', '2020-02-06 00:00:00'),
(13, 'B-', '2020-02-06 00:00:00'),
(14, 'B+', '2020-02-06 00:00:00'),
(15, 'AB+', '2020-02-06 00:00:00'),
(16, 'O-', '2020-02-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbllivraison`
--

CREATE TABLE `tbllivraison` (
  `id_liv` varchar(200) NOT NULL,
  `id_an` varchar(200) NOT NULL,
  `id_detail_liv` varchar(200) NOT NULL,
  `etat` int(1) NOT NULL,
  `description` text NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblmoyentransaction`
--

CREATE TABLE `tblmoyentransaction` (
  `id_moyen_tran` int(11) NOT NULL,
  `moyen` varchar(100) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmoyentransaction`
--

INSERT INTO `tblmoyentransaction` (`id_moyen_tran`, `moyen`, `date_ajout`, `date_update`) VALUES
(1, 'Bous kwenpam', '2020-02-06 00:00:00', '2020-02-06 00:00:00'),
(2, 'Moncash', '2020-02-06 00:00:00', '2020-02-06 00:00:00'),
(3, 'Mannit&ograve;ks', '2020-02-06 00:00:00', '2020-02-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblniveauetude`
--

CREATE TABLE `tblniveauetude` (
  `id_niveau_et` int(11) NOT NULL,
  `niveau` varchar(100) NOT NULL,
  `date_ajout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblposte`
--

CREATE TABLE `tblposte` (
  `id_poste` int(11) NOT NULL,
  `poste` varchar(40) NOT NULL,
  `etat` int(1) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposte`
--

INSERT INTO `tblposte` (`id_poste`, `poste`, `etat`, `date_ajout`, `date_update`) VALUES
(1, 'administrat&egrave;', 1, '2020-02-06 00:00:00', '2020-02-06 00:00:00'),
(2, 'sekret&egrave;', 1, '2020-02-06 00:00:00', '2020-02-06 00:00:00'),
(3, 'enf&ograve;matisyen', 1, '2020-02-06 00:00:00', '2020-02-06 00:00:00'),
(4, 'sekirite', 1, '2020-02-06 00:00:00', '2020-02-06 00:00:00'),
(5, 'kontab', 1, '2020-02-06 00:00:00', '2020-02-06 00:00:00'),
(6, 'jesyon&egrave;', 1, '2020-02-06 00:00:00', '2020-02-06 00:00:00'),
(7, 'kesye', 1, '2020-02-06 00:00:00', '2020-02-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblpublicite`
--

CREATE TABLE `tblpublicite` (
  `id_pub` varchar(200) NOT NULL,
  `id_uti` varchar(200) NOT NULL,
  `id_type_pub` int(11) NOT NULL,
  `budget` int(11) NOT NULL,
  `id_espace_pub` int(11) NOT NULL,
  `id_type_budget` int(11) NOT NULL,
  `id_parametre_pub` int(11) NOT NULL,
  `id_an` int(200) NOT NULL,
  `etat` int(1) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblreservation`
--

CREATE TABLE `tblreservation` (
  `id_reserv` varchar(200) NOT NULL,
  `id_an` varchar(200) NOT NULL,
  `delai` datetime NOT NULL,
  `prix` int(11) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblstatistiqueutilisateurpublicite`
--

CREATE TABLE `tblstatistiqueutilisateurpublicite` (
  `id_stat_uti_pub` varchar(200) NOT NULL,
  `id_uti_pub` varchar(200) NOT NULL,
  `nb_click` int(11) NOT NULL,
  `id_vis` varchar(200) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaction`
--

CREATE TABLE `tbltransaction` (
  `id_transaction` varchar(200) NOT NULL,
  `id_bourse` varchar(200) NOT NULL,
  `montant` float NOT NULL,
  `id_etat_transaction` int(11) NOT NULL,
  `id_type_transaction` int(11) NOT NULL,
  `id_moyen_tran` int(11) NOT NULL,
  `order_id` varchar(200) NOT NULL,
  `transaction_id` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `date_ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbltransaction`
--

INSERT INTO `tbltransaction` (`id_transaction`, `id_bourse`, `montant`, `id_etat_transaction`, `id_type_transaction`, `id_moyen_tran`, `order_id`, `transaction_id`, `description`, `date_ajout`, `date_update`) VALUES
('1580462068683', '1580459475304', 200, 2, 3, 2, 'order-034', '158381860032', 'liv revey vesyon pdf', '2020-03-10 23:36:03', '2020-01-31 01:14:28'),
('1580462221768', '1580459475304', 50, 2, 3, 2, 'order-401', '158381860147', 'liv revey vesyon pdf', '2020-03-10 23:35:55', '2020-01-31 01:17:01'),
('1580462223434', '1580459475304', 100, 2, 3, 2, 'order-0901', '158381860116', 'liv revey vesyon pdf', '2020-03-10 23:35:43', '2020-01-31 01:17:03'),
('1580462400504', '1580459475304', 150, 2, 3, 2, 'erttretr', '35534553535535', 'liv revey vesyon pdf', '2020-03-11 06:19:20', '2020-01-31 01:20:00'),
('158301035050', '158239957215', 300, 2, 3, 2, 'order-001', '158376240621', 'description de cette transaction', '2020-03-09 07:27:03', '0000-00-00 00:00:00'),
('2343456567876', '1580459475304', 200, 2, 3, 2, 'gdfgdgdgfd', '34534553453453', 'dgdfgdgg', '2020-03-11 07:05:24', '0000-00-00 00:00:00'),
('898239957220', '158239957215', 200, 2, 3, 2, 'dgdgfgf', '54353453455', 'sfsfsfsdbfdfdgdfgdg', '2020-03-10 23:48:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbltypebourse`
--

CREATE TABLE `tbltypebourse` (
  `id_type_bourse` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbltypebourse`
--

INSERT INTO `tbltypebourse` (`id_type_bourse`, `type`, `date_ajout`, `date_update`) VALUES
(1, 'Bwonz', '2020-01-30 00:00:00', '2020-01-30 00:00:00'),
(2, 'Ajan', '2020-01-30 00:00:00', '2020-01-30 00:00:00'),
(3, 'L&ograve;', '2020-01-30 00:00:00', '2020-01-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbltypebudget`
--

CREATE TABLE `tbltypebudget` (
  `id_type_budget` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `date_ajout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltypebudget`
--

INSERT INTO `tbltypebudget` (`id_type_budget`, `type`, `date_ajout`) VALUES
(1, 'bwonz', '2020-02-06 00:00:00'),
(2, 'ajan', '2020-02-06 00:00:00'),
(3, 'l&ograve;', '2020-02-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbltypecommande`
--

CREATE TABLE `tbltypecommande` (
  `id_type_com` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltypecommande`
--

INSERT INTO `tbltypecommande` (`id_type_com`, `type`, `date_ajout`, `date_update`) VALUES
(1, 'livrezon', '2020-02-11 00:00:00', '2020-02-11 00:00:00'),
(2, 'rez&egrave;vasyon', '2020-02-11 00:00:00', '2020-02-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbltypeemploye`
--

CREATE TABLE `tbltypeemploye` (
  `id_type_emp` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `etat` int(1) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbltypepublicite`
--

CREATE TABLE `tbltypepublicite` (
  `id_type_pub` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date_ajout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltypepublicite`
--

INSERT INTO `tbltypepublicite` (`id_type_pub`, `type`, `date_ajout`) VALUES
(1, 'bouste', '2020-02-06 00:00:00'),
(2, 'piblisite', '2020-02-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbltypetransaction`
--

CREATE TABLE `tbltypetransaction` (
  `id_type_transaction` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbltypetransaction`
--

INSERT INTO `tbltypetransaction` (`id_type_transaction`, `type`, `date_ajout`, `date_update`) VALUES
(1, 'Achte', '2020-01-30 00:00:00', '2020-01-30 00:00:00'),
(2, 'Tranzaksyon', '2020-01-30 00:00:00', '2020-01-30 00:00:00'),
(3, 'Retr&egrave;', '2020-01-30 00:00:00', '2020-01-30 00:00:00'),
(4, 'Depo', '2020-01-30 00:00:00', '2020-01-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblutilisateurpublicite`
--

CREATE TABLE `tblutilisateurpublicite` (
  `id_uti_pub` varchar(200) NOT NULL,
  `id_uti` varchar(200) NOT NULL,
  `id_pub` varchar(200) NOT NULL,
  `url_pub` varchar(20) NOT NULL,
  `etat` int(1) NOT NULL,
  `date_ajout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblville`
--

CREATE TABLE `tblville` (
  `id_ville` int(11) NOT NULL,
  `id_etat` int(11) NOT NULL,
  `nom_ville` varchar(50) NOT NULL,
  `date_ajout` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblville`
--

INSERT INTO `tblville` (`id_ville`, `id_etat`, `nom_ville`, `date_ajout`) VALUES
(1, 1, 'Acul-du-Nord', '2019-09-08'),
(2, 1, 'Plaine-du-Nord', '2019-09-08'),
(3, 1, 'Milot', '2019-09-08'),
(4, 1, 'Borgne', '2019-09-08'),
(5, 1, 'Port-Margot', '2019-09-08'),
(6, 1, 'Cap-Haitien', '2019-09-08'),
(7, 1, 'Limonade', '2019-09-08'),
(8, 1, 'Quartier-Morin', '2019-09-08'),
(9, 1, 'Grande-Riviere-du-Nord', '2019-09-08'),
(10, 1, 'Bahon', '2019-09-08'),
(11, 1, 'Limbe', '2019-09-08'),
(12, 1, 'Bas-Limbe', '2019-09-08'),
(13, 1, 'Plaisance', '2019-09-08'),
(14, 1, 'Pilate', '2019-09-08'),
(15, 1, 'Saint-Raphael', '2019-09-08'),
(16, 1, 'Dondon', '2019-09-08'),
(17, 1, 'Ranquitte', '2019-09-08'),
(18, 1, 'Pignon', '2019-09-08'),
(19, 1, 'La Victoire', '2019-09-08'),
(20, 2, 'Aquin', '2019-09-08'),
(21, 2, 'Cavaillon', '2019-09-08'),
(22, 2, 'Saint-Louis-du-Sud', '2019-09-08'),
(23, 2, 'Cayes', '2019-09-08'),
(24, 2, 'Camp-Perrin', '2019-09-08'),
(25, 2, 'Cornillon', '2019-09-08'),
(26, 2, 'Chantal', '2019-09-08'),
(27, 2, 'Maniche', '2019-09-08'),
(28, 2, 'Ile-a-Vache', '2019-09-08'),
(29, 2, 'Torbeck', '2019-09-08'),
(30, 2, 'Chardonnieres', '2019-09-08'),
(31, 2, 'Les Anglais', '2019-09-08'),
(32, 2, 'Tiburon', '2019-09-08'),
(33, 2, 'Port-a-Piment', '2019-09-08'),
(34, 2, 'Roche-a-Bateau', '2019-09-08'),
(35, 2, 'Port-Salut', '2019-09-08'),
(36, 2, 'Arniquet', '2019-09-08'),
(37, 2, 'Saint-Jean-du-Sud', '2019-09-08'),
(38, 3, 'Cerca-la-Source', '2019-09-08'),
(39, 3, 'Thomassique', '2019-09-08'),
(40, 3, 'Hinche', '2019-09-08'),
(41, 3, 'Cerca-Carvajal', '2019-09-08'),
(42, 3, 'Maissade', '2019-09-08'),
(43, 3, 'Thomonde', '2019-09-08'),
(44, 3, 'Lascahobas', '2019-09-08'),
(45, 3, 'Belladere', '2019-09-08'),
(46, 3, 'Anse-Rouge', '2019-09-08'),
(47, 3, 'Savanette', '2019-09-08'),
(48, 3, 'Mirebalais', '2019-09-08'),
(49, 3, 'Saut-d-eau', '2019-09-08'),
(50, 3, 'Boucan-Carre', '2019-09-08'),
(51, 4, 'Arcahaie', '2019-09-08'),
(52, 4, 'Cabaret', '2019-09-08'),
(53, 4, 'Croix-des-Bouquets', '2019-09-08'),
(54, 4, 'Ganthier', '2019-09-08'),
(55, 4, 'Thomazeau', '2019-09-08'),
(56, 4, 'Cornillon', '2019-09-08'),
(57, 4, 'Fonds-Verrettes', '2019-09-08'),
(58, 4, 'Anse-a-Galets', '2019-09-08'),
(59, 4, 'Pointe-a-Raquette', '2019-09-08'),
(60, 4, 'Leogane', '2019-09-08'),
(61, 4, 'Petit-Goave', '2019-09-08'),
(62, 4, 'Grand-Goave', '2019-09-08'),
(63, 4, 'Port-au-Prince', '2019-09-08'),
(64, 4, 'Carrefour', '2019-09-08'),
(65, 4, 'Delmas', '2019-09-08'),
(66, 4, 'Petion-ville', '2019-09-08'),
(67, 4, 'Kenscoff', '2019-09-08'),
(68, 4, 'Cite-Soleil', '2019-09-08'),
(69, 4, 'Gressier', '2019-09-08'),
(70, 4, 'Tabarre', '2019-09-08'),
(71, 5, 'Bainet', '2019-09-08'),
(72, 5, 'Thiotte', '2019-09-08'),
(73, 5, 'Grand-Gossier', '2019-09-08'),
(74, 5, 'Jacmel', '2019-09-08'),
(75, 5, 'Cotes-de-Fer', '2019-09-08'),
(76, 5, 'Vallee-de-Jacmel', '2019-09-08'),
(77, 5, 'Belle-Anse', '2019-09-08'),
(78, 5, 'Anse-a-Pittes', '2019-09-08'),
(79, 5, 'Cayes-Jacmel', '2019-09-08'),
(80, 5, 'Marigot', '2019-09-08'),
(81, 6, 'Dessalines', '2019-09-08'),
(82, 6, 'Desdunes', '2019-09-08'),
(83, 6, 'Grande-Saline', '2019-09-08'),
(84, 6, 'Petite-Riviere-de-l-Artibonite', '2019-09-08'),
(85, 6, 'Gonaives', '2019-09-08'),
(86, 6, 'Ennery', '2019-09-08'),
(87, 6, 'Estere', '2019-09-08'),
(88, 6, 'Gros-Morne', '2019-09-08'),
(89, 6, 'Anse-Rouge', '2019-09-08'),
(90, 6, 'Terre-Neuve', '2019-09-08'),
(91, 6, 'Marmelade', '2019-09-08'),
(92, 6, 'Saint-Michel-de-lAttalaye', '2019-09-08'),
(93, 6, 'Saint-marc', '2019-09-08'),
(94, 6, 'Verrettes', '2019-09-08'),
(95, 6, 'La Chapelle', '2019-09-08'),
(96, 7, 'Fort-Liberte', '2019-09-08'),
(97, 7, 'Perches', '2019-09-08'),
(98, 7, 'Ferrier', '2019-09-08'),
(99, 7, 'Ouanaminthe', '2019-09-08'),
(100, 7, 'Capotille', '2019-09-08'),
(101, 7, 'Mont-Organise', '2019-09-08'),
(102, 7, 'Trou-du-Nord', '2019-09-08'),
(103, 7, 'Caracol', '2019-09-08'),
(104, 7, 'Sainte-Suzanne', '2019-09-08'),
(105, 7, 'Terrier-Rouge', '2019-09-08'),
(106, 7, 'Vallieres', '2019-09-08'),
(107, 7, 'Carice', '2019-09-08'),
(108, 7, 'Mombin-Crochu', '2019-09-08'),
(109, 8, 'Mole-Saint-Nicolas', '2019-09-08'),
(110, 8, 'Baie-de-Henne', '2019-09-08'),
(111, 8, 'Bombardopolis', '2019-09-08'),
(112, 8, 'Jean-Rabel', '2019-09-08'),
(113, 8, 'Port-de-Paix', '2019-09-08'),
(114, 8, 'Bassin-Bleu', '2019-09-08'),
(115, 8, 'Chansolme', '2019-09-08'),
(116, 8, 'La Tortue', '2019-09-08'),
(117, 8, 'Saint-Louis-du-Nord', '2019-09-08'),
(118, 8, 'Anse-a-Foleur', '2019-09-08'),
(119, 9, 'Miragoane', '2019-09-08'),
(120, 9, 'Petite-Riviere-de-Nippes', '2019-09-08'),
(121, 9, 'Fonds-des-Negres', '2019-09-08'),
(122, 9, 'Paillant', '2019-09-08'),
(123, 9, 'Anse-a-Veau', '2019-09-08'),
(124, 9, 'lAsile', '2019-09-08'),
(125, 9, 'Petit-Trou-de-Nippes', '2019-09-08'),
(126, 9, 'Plaisance-de-Sud', '2019-09-08'),
(127, 9, 'Arnaud', '2019-09-08'),
(128, 9, 'Barraderes', '2019-09-08'),
(129, 9, 'Grand-Boucan', '2019-09-08'),
(130, 10, 'Anse-dAinault', '2019-09-08'),
(131, 10, 'Dame-Marie', '2019-09-08'),
(132, 10, 'Les Irois', '2019-09-08'),
(133, 10, 'Corail', '2019-09-08'),
(134, 10, 'Roseaux', '2019-09-08'),
(135, 10, 'Beaumont', '2019-09-08'),
(136, 10, 'Pestel', '2019-09-08'),
(137, 10, 'Belladere', '2019-09-08'),
(138, 10, 'Jeremie', '2019-09-08'),
(139, 10, 'Abricots', '2019-09-08'),
(140, 10, 'Trou-Bonbon', '2019-09-08'),
(141, 10, 'Moron', '2019-09-08'),
(142, 10, 'Chambellan', '2019-09-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladministration`
--
ALTER TABLE `tbladministration`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tblbourse`
--
ALTER TABLE `tblbourse`
  ADD PRIMARY KEY (`id_bourse`);

--
-- Indexes for table `tblcommande`
--
ALTER TABLE `tblcommande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Indexes for table `tblconditionmatrimonial`
--
ALTER TABLE `tblconditionmatrimonial`
  ADD PRIMARY KEY (`id_condition_mat`);

--
-- Indexes for table `tblconnexion`
--
ALTER TABLE `tblconnexion`
  ADD PRIMARY KEY (`id_con`);

--
-- Indexes for table `tbldetaillivraison`
--
ALTER TABLE `tbldetaillivraison`
  ADD PRIMARY KEY (`id_detail_liv`);

--
-- Indexes for table `tblemploye`
--
ALTER TABLE `tblemploye`
  ADD PRIMARY KEY (`id_emp`);

--
-- Indexes for table `tblespacepublicite`
--
ALTER TABLE `tblespacepublicite`
  ADD PRIMARY KEY (`id_espace_pub`);

--
-- Indexes for table `tbletat`
--
ALTER TABLE `tbletat`
  ADD PRIMARY KEY (`id_etat`);

--
-- Indexes for table `tbletattransaction`
--
ALTER TABLE `tbletattransaction`
  ADD PRIMARY KEY (`id_etat_transaction`);

--
-- Indexes for table `tblgroupesanguin`
--
ALTER TABLE `tblgroupesanguin`
  ADD PRIMARY KEY (`id_groupe_san`);

--
-- Indexes for table `tbllivraison`
--
ALTER TABLE `tbllivraison`
  ADD PRIMARY KEY (`id_liv`);

--
-- Indexes for table `tblmoyentransaction`
--
ALTER TABLE `tblmoyentransaction`
  ADD PRIMARY KEY (`id_moyen_tran`);

--
-- Indexes for table `tblniveauetude`
--
ALTER TABLE `tblniveauetude`
  ADD PRIMARY KEY (`id_niveau_et`);

--
-- Indexes for table `tblposte`
--
ALTER TABLE `tblposte`
  ADD PRIMARY KEY (`id_poste`);

--
-- Indexes for table `tblpublicite`
--
ALTER TABLE `tblpublicite`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indexes for table `tblreservation`
--
ALTER TABLE `tblreservation`
  ADD PRIMARY KEY (`id_reserv`);

--
-- Indexes for table `tblstatistiqueutilisateurpublicite`
--
ALTER TABLE `tblstatistiqueutilisateurpublicite`
  ADD PRIMARY KEY (`id_stat_uti_pub`);

--
-- Indexes for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  ADD PRIMARY KEY (`id_transaction`);

--
-- Indexes for table `tbltypebourse`
--
ALTER TABLE `tbltypebourse`
  ADD PRIMARY KEY (`id_type_bourse`);

--
-- Indexes for table `tbltypebudget`
--
ALTER TABLE `tbltypebudget`
  ADD PRIMARY KEY (`id_type_budget`);

--
-- Indexes for table `tbltypecommande`
--
ALTER TABLE `tbltypecommande`
  ADD PRIMARY KEY (`id_type_com`);

--
-- Indexes for table `tbltypeemploye`
--
ALTER TABLE `tbltypeemploye`
  ADD PRIMARY KEY (`id_type_emp`);

--
-- Indexes for table `tbltypepublicite`
--
ALTER TABLE `tbltypepublicite`
  ADD PRIMARY KEY (`id_type_pub`);

--
-- Indexes for table `tbltypetransaction`
--
ALTER TABLE `tbltypetransaction`
  ADD PRIMARY KEY (`id_type_transaction`);

--
-- Indexes for table `tblutilisateurpublicite`
--
ALTER TABLE `tblutilisateurpublicite`
  ADD PRIMARY KEY (`id_uti_pub`);

--
-- Indexes for table `tblville`
--
ALTER TABLE `tblville`
  ADD PRIMARY KEY (`id_ville`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblconditionmatrimonial`
--
ALTER TABLE `tblconditionmatrimonial`
  MODIFY `id_condition_mat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbletat`
--
ALTER TABLE `tbletat`
  MODIFY `id_etat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbletattransaction`
--
ALTER TABLE `tbletattransaction`
  MODIFY `id_etat_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblgroupesanguin`
--
ALTER TABLE `tblgroupesanguin`
  MODIFY `id_groupe_san` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblmoyentransaction`
--
ALTER TABLE `tblmoyentransaction`
  MODIFY `id_moyen_tran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblniveauetude`
--
ALTER TABLE `tblniveauetude`
  MODIFY `id_niveau_et` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblposte`
--
ALTER TABLE `tblposte`
  MODIFY `id_poste` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbltypebourse`
--
ALTER TABLE `tbltypebourse`
  MODIFY `id_type_bourse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbltypeemploye`
--
ALTER TABLE `tbltypeemploye`
  MODIFY `id_type_emp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbltypetransaction`
--
ALTER TABLE `tbltypetransaction`
  MODIFY `id_type_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblville`
--
ALTER TABLE `tblville`
  MODIFY `id_ville` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
