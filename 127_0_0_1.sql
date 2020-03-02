-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 01:02 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

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
CREATE DATABASE IF NOT EXISTS `db_kwenpam_biznis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_kwenpam_biznis`;

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
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblbourse`
--

INSERT INTO `tblbourse` (`id_bourse`, `id_type_bourse`, `id_uti`, `solde`, `etat`, `date_ajout`, `date_update`) VALUES
('1580459475304', 1, '1507584121', 70, 1, '2020-01-31 00:31:15', '2020-01-31 01:20:00');

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
  `ville` int(11) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `id_poste_actuel` int(2) NOT NULL,
  `id_poste_ancien` int(2) NOT NULL,
  `salaire` int(11) NOT NULL,
  `etat` int(1) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `tbletattransaction`
--

CREATE TABLE `tbletattransaction` (
  `id_etat_transaction` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `id_etat_transation` int(11) NOT NULL,
  `id_type_transaction` int(11) NOT NULL,
  `description` text NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbltransaction`
--

INSERT INTO `tbltransaction` (`id_transaction`, `id_bourse`, `montant`, `id_etat_transation`, `id_type_transaction`, `description`, `date_ajout`, `date_update`) VALUES
('1580462068683', '1580459475304', 10, 1, 1, 'liv revey vesyon pdf', '2020-01-31 01:14:28', '2020-01-31 01:14:28'),
('1580462221768', '1580459475304', 10, 1, 1, 'liv revey vesyon pdf', '2020-01-31 01:17:01', '2020-01-31 01:17:01'),
('1580462223434', '1580459475304', 10, 1, 1, 'liv revey vesyon pdf', '2020-01-31 01:17:03', '2020-01-31 01:17:03'),
('1580462400504', '1580459475304', 10, 1, 1, 'liv revey vesyon pdf', '2020-01-31 01:20:00', '2020-01-31 01:20:00');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblconditionmatrimonial`
--
ALTER TABLE `tblconditionmatrimonial`
  MODIFY `id_condition_mat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbletattransaction`
--
ALTER TABLE `tbletattransaction`
  MODIFY `id_etat_transaction` int(11) NOT NULL AUTO_INCREMENT;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
