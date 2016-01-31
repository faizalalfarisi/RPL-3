/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.21 : Database - db_broto_azhari
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_broto_azhari` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_broto_azhari`;

/*Table structure for table `t_bahanbaku` */

DROP TABLE IF EXISTS `t_bahanbaku`;

CREATE TABLE `t_bahanbaku` (
  `id_bahan` varchar(4) NOT NULL,
  `nama_bahan` varchar(20) DEFAULT NULL,
  `stok` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_bahan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_bahanbaku` */

/*Table structure for table `t_detail_kuisioner` */

DROP TABLE IF EXISTS `t_detail_kuisioner`;

CREATE TABLE `t_detail_kuisioner` (
  `id_pertanyaan` varchar(20) NOT NULL,
  `id_kuisioner` varchar(20) DEFAULT NULL,
  `jawaban` varchar(20) DEFAULT NULL,
  KEY `id_pertanyaan` (`id_pertanyaan`),
  KEY `id_kuisioner` (`id_kuisioner`),
  CONSTRAINT `t_detail_kuisioner_ibfk_1` FOREIGN KEY (`id_pertanyaan`) REFERENCES `t_pertanyaan` (`id_pertanyaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_detail_kuisioner_ibfk_2` FOREIGN KEY (`id_kuisioner`) REFERENCES `t_kuisioner` (`id_kuisioner`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_detail_kuisioner` */

/*Table structure for table `t_detail_meja` */

DROP TABLE IF EXISTS `t_detail_meja`;

CREATE TABLE `t_detail_meja` (
  `id_pelanggan` varchar(20) DEFAULT NULL,
  `no_meja` varchar(20) DEFAULT NULL,
  KEY `id_pelanggan` (`id_pelanggan`),
  CONSTRAINT `t_detail_meja_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `t_pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_detail_meja` */

/*Table structure for table `t_detail_pesanan` */

DROP TABLE IF EXISTS `t_detail_pesanan`;

CREATE TABLE `t_detail_pesanan` (
  `id_menu` varchar(20) DEFAULT NULL,
  `no_pesanan` varchar(20) DEFAULT NULL,
  KEY `id_menu` (`id_menu`),
  CONSTRAINT `t_detail_pesanan_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `t_menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_detail_pesanan` */

/*Table structure for table `t_kuisioner` */

DROP TABLE IF EXISTS `t_kuisioner`;

CREATE TABLE `t_kuisioner` (
  `id_kuisioner` varchar(20) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `waktusubmit` time DEFAULT NULL,
  PRIMARY KEY (`id_kuisioner`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_kuisioner` */

/*Table structure for table `t_login` */

DROP TABLE IF EXISTS `t_login`;

CREATE TABLE `t_login` (
  `id_user` varchar(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_login` */

/*Table structure for table `t_meja` */

DROP TABLE IF EXISTS `t_meja`;

CREATE TABLE `t_meja` (
  `no_meja` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `max_org` int(11) DEFAULT NULL,
  PRIMARY KEY (`no_meja`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_meja` */

/*Table structure for table `t_menu` */

DROP TABLE IF EXISTS `t_menu`;

CREATE TABLE `t_menu` (
  `id_menu` varchar(20) NOT NULL,
  `nama_menu` varchar(20) DEFAULT NULL,
  `harga_menu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_menu` */

/*Table structure for table `t_pegawai` */

DROP TABLE IF EXISTS `t_pegawai`;

CREATE TABLE `t_pegawai` (
  `id_pegawai` int(10) unsigned zerofill NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL,
  `no_telp` decimal(10,0) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_pegawai` */

/*Table structure for table `t_pelanggan` */

DROP TABLE IF EXISTS `t_pelanggan`;

CREATE TABLE `t_pelanggan` (
  `id_pelanggan` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(15) DEFAULT NULL,
  `jml_org` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_pelanggan` */

/*Table structure for table `t_pembayaran` */

DROP TABLE IF EXISTS `t_pembayaran`;

CREATE TABLE `t_pembayaran` (
  `id_pembayaran` varchar(20) NOT NULL,
  `diskon` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_pembayaran` */

/*Table structure for table `t_pertanyaan` */

DROP TABLE IF EXISTS `t_pertanyaan`;

CREATE TABLE `t_pertanyaan` (
  `id_pertanyaan` varchar(20) NOT NULL,
  `pertanyaan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_pertanyaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_pertanyaan` */

/*Table structure for table `t_pesanan` */

DROP TABLE IF EXISTS `t_pesanan`;

CREATE TABLE `t_pesanan` (
  `no_pesanan` varchar(20) NOT NULL,
  `waktu_submit` time DEFAULT NULL,
  PRIMARY KEY (`no_pesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_pesanan` */

/*Table structure for table `t_resep` */

DROP TABLE IF EXISTS `t_resep`;

CREATE TABLE `t_resep` (
  `id_bahan` varchar(4) DEFAULT NULL,
  `id_menu` varchar(20) DEFAULT NULL,
  KEY `id_bahan` (`id_bahan`),
  KEY `id_menu` (`id_menu`),
  CONSTRAINT `t_resep_ibfk_1` FOREIGN KEY (`id_bahan`) REFERENCES `t_bahanbaku` (`id_bahan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_resep_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `t_menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_resep` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
