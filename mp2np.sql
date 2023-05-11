/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.17-MariaDB : Database - miniproject2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`miniproject2` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `miniproject2`;

/*Table structure for table `daily` */

DROP TABLE IF EXISTS `daily`;

CREATE TABLE `daily` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `nip` int(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kode_jobdesk` varchar(100) DEFAULT NULL,
  `kode_jabatan` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `daily` */

insert  into `daily`(`id`,`tanggal`,`nip`,`nama`,`kode_jobdesk`,`kode_jabatan`,`deskripsi`) values 
(1,'2021-03-26',12345,'Fitri Shafira','M12','S11','membereskan buku'),
(2,'2021-03-26',22222,'Nurul','M23','S12','memcuci piring'),
(5,'2021-03-01',12345,'Puput','M31','S13','gfgfgfgf'),
(6,'2021-04-26',133457,'Nina','MP4','S14','Input Nilai'),
(7,'2021-05-28',234157,'Rahmawati','S34','S13','Sidang MP'),
(8,'2021-05-12',133457,'Marina','M21','S13','Membantu Pembimbing'),
(9,'2021-05-20',234157,'Versa','MP4','S13','Pengecekan Berkas');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `jabatan` */

DROP TABLE IF EXISTS `jabatan`;

CREATE TABLE `jabatan` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `kode_jabatan` varchar(123) DEFAULT NULL,
  `nama_jabatan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jabatan` */

insert  into `jabatan`(`id`,`kode_jabatan`,`nama_jabatan`) values 
(1,'S11','surio'),
(3,'S13','Prodi'),
(4,'S14','SPM1');

/*Table structure for table `jobdesk` */

DROP TABLE IF EXISTS `jobdesk`;

CREATE TABLE `jobdesk` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `kode_jobdesk` varchar(123) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `kode_jabatan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jobdesk` */

insert  into `jobdesk`(`id`,`kode_jobdesk`,`keterangan`,`kode_jabatan`) values 
(8,'MP4','Seleksi Penerimaan','4567'),
(10,'S34','skripsi','S11'),
(12,'M21','Mengajar','S11');

/*Table structure for table `karyawan` */

DROP TABLE IF EXISTS `karyawan`;

CREATE TABLE `karyawan` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nip` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kode_jabatan` varchar(123) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `karyawan` */

insert  into `karyawan`(`id`,`nip`,`nama`,`kode_jabatan`,`foto`) values 
(1,133446,'Fitri Shafira Anjani','S11','Fitri Shafira Anjani.jpg'),
(2,133457,'Nurul','S12','Nurul.jpg'),
(6,234157,'Raihan','S12','Raihan.jpg');

/*Table structure for table `lbl_user` */

DROP TABLE IF EXISTS `lbl_user`;

CREATE TABLE `lbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `lbl_user` */

insert  into `lbl_user`(`id`,`user_id`,`username`,`password`,`level`,`foto`) values 
(1,NULL,'nurulhd','65467','Admin','nurulhd.jpg'),
(3,NULL,'puputfat','321907','Admin','puputfat.jpg'),
(4,NULL,'Dahlia','12345','Operator','Dahlia.jpg'),
(5,NULL,'sarah','56789','Operator','sarah.jpg');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`level`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'nurulhd','Admin',NULL,NULL,'$2y$10$kijnXGT/D4VJ5STXa96kAunPRE1Mi/F32O5arr2QqBMgeRlLXGC9C','7iOr4HZgte1ILJaW7kJCJY2ZptNF2dTHyp6CQIFNEgoTNKnluVMeUEQiUOw4','2021-04-13 20:57:08','2021-04-13 20:57:08'),
(2,'nugraha','Operator',NULL,NULL,'$2y$10$.8juDBumqNXK.qHDfsp0q.WMFgYp08nBqLaoiJaJdSiTDHyaC4iGO','FsubpWbezKamsQsEzcji8d4n1DY5pHLtlTiCUuWVxv4xzUYA7zrCruoWz8SB','2021-04-13 21:25:22','2021-04-13 21:25:22'),
(3,'puputfat','Admin',NULL,NULL,'$2y$10$60rK25DspjAA9PS13gTPIu.0rcPKEHeJ7emFGJ9b.19KCfDB5N6Hm','H6K6nrVkSqBVp4mX9g1SKOrfvPD0GcP2OkR8G6ziTtgjPKGdoV7p8ikStQfC','2021-04-16 18:26:37','2021-04-16 18:26:37'),
(4,'Dahlia','Operator',NULL,NULL,'$2y$10$WMUgnE4Rz6Rw9lk7T9Oeq.8Cjo55jlTlKiYKaHWxlNe5heG.jEbfS','aqlKL1gDWlFBcipWvIxx1iMSL6ZdlJDNPEnAD6hYw7q13xF4uuYXNwyDMaqD','2021-04-19 18:54:38','2021-04-19 18:54:38'),
(5,'sarah','Operator',NULL,NULL,'$2y$10$Cl1lt7dQnv5oZW57ih1ueuTsic2fY4XlAHgP7IBVeHf8QsoVXFKBm','5eeMC3rext0AXcilzGmFqWAOuiInWpBsAmh36alR8CXSdsnv9Iejir6bsgru','2021-04-29 21:40:12','2021-04-29 21:40:12'),
(6,'nurulhi','Admin',NULL,NULL,'$2y$10$yIJCIC6BmfwTLvhX1U/dxefXqnXuziDwFTOC2imSNSo20gP/o2PJG','W16SmMxmEJg5PyE7gsWy0JPzTrMsALk1TFGHQGOfky3JQ8MTAsOKgvmQZs30','2021-05-04 20:22:59','2021-05-04 20:22:59');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
