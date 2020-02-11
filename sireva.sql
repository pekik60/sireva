-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sireva
CREATE DATABASE IF NOT EXISTS `sireva` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sireva`;

-- Dumping structure for table sireva.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sireva.migrations: ~0 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table sireva.m_component
CREATE TABLE IF NOT EXISTS `m_component` (
  `mc_id` int(11) NOT NULL AUTO_INCREMENT,
  `mc_unit` int(11) DEFAULT NULL,
  `mc_department` int(11) DEFAULT NULL,
  `mc_program` int(11) DEFAULT NULL,
  `mc_kegiatan` int(11) DEFAULT NULL,
  `mc_output` int(11) DEFAULT NULL,
  `mc_sub_output` int(11) DEFAULT NULL,
  `mc_name` varchar(50) DEFAULT NULL,
  `mc_yearly_budget` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`mc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sireva.m_component: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_component` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_component` ENABLE KEYS */;

-- Dumping structure for table sireva.m_department
CREATE TABLE IF NOT EXISTS `m_department` (
  `md_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`md_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table sireva.m_department: ~3 rows (approximately)
/*!40000 ALTER TABLE `m_department` DISABLE KEYS */;
REPLACE INTO `m_department` (`md_id`, `md_name`) VALUES
	(1, 'UMUM DAN HRD'),
	(2, 'IT'),
	(3, 'yutub');
/*!40000 ALTER TABLE `m_department` ENABLE KEYS */;

-- Dumping structure for table sireva.m_kegiatan
CREATE TABLE IF NOT EXISTS `m_kegiatan` (
  `mk_id` int(11) NOT NULL AUTO_INCREMENT,
  `mk_unit` int(11) DEFAULT NULL,
  `mk_department` int(11) DEFAULT NULL,
  `mk_program` int(11) DEFAULT NULL,
  `mk_name` varchar(50) DEFAULT NULL,
  `mk_yearly_budget` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`mk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table sireva.m_kegiatan: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_kegiatan` DISABLE KEYS */;
REPLACE INTO `m_kegiatan` (`mk_id`, `mk_unit`, `mk_department`, `mk_program`, `mk_name`, `mk_yearly_budget`) VALUES
	(1, 1, 2, 1, 'WEEKLY MEET UP', NULL);
/*!40000 ALTER TABLE `m_kegiatan` ENABLE KEYS */;

-- Dumping structure for table sireva.m_mem
CREATE TABLE IF NOT EXISTS `m_mem` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(255) DEFAULT NULL,
  `m_username` varchar(255) DEFAULT NULL,
  `m_password` varchar(255) DEFAULT NULL,
  `m_email` varchar(255) DEFAULT NULL,
  `m_phone` varchar(255) DEFAULT NULL,
  `m_desc` varchar(255) DEFAULT NULL,
  `m_image` varchar(100) DEFAULT NULL,
  `m_address` varchar(100) DEFAULT NULL,
  `m_city` varchar(100) DEFAULT NULL,
  `m_token` varchar(50) DEFAULT NULL,
  `m_web` varchar(50) DEFAULT NULL,
  `m_lastlogin` timestamp NULL DEFAULT NULL,
  `m_lastlogout` timestamp NULL DEFAULT NULL,
  `m_created_at` timestamp NULL DEFAULT NULL,
  `m_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table sireva.m_mem: ~3 rows (approximately)
/*!40000 ALTER TABLE `m_mem` DISABLE KEYS */;
REPLACE INTO `m_mem` (`m_id`, `m_name`, `m_username`, `m_password`, `m_email`, `m_phone`, `m_desc`, `m_image`, `m_address`, `m_city`, `m_token`, `m_web`, `m_lastlogin`, `m_lastlogout`, `m_created_at`, `m_updated_at`) VALUES
	(1, 'deny pras', 'admin', '4ef7877f01e6ab681f4756ca6f05b90da0e2f1f8', 'azriel@gmail.com', '082140644679', 'Duis tincidunt turpis sodales, tincidunt nisi et, auctor nisi. Curabitur vulputate sapien eu metus ultricies fermentum nec vel augue. Maecenas eget lacinia est', 'user/image_1.jpg', 'Jl Wonorejo indah timur 3a no 66b', 'MALANG KOTA', NULL, 'www.denypras.co.vu', '2019-09-08 09:58:33', '2019-09-08 09:58:34', '2019-09-06 16:06:07', '2019-09-06 16:06:08'),
	(7, 'Azriel pusaka', 'azriel41', '4ef7877f01e6ab681f4756ca6f05b90da0e2f1f8', 'denyprasetyo41@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(8, 'Wara Wara', 'wara_wara', '4ef7877f01e6ab681f4756ca6f05b90da0e2f1f8', 'wara_wara@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `m_mem` ENABLE KEYS */;

-- Dumping structure for table sireva.m_output
CREATE TABLE IF NOT EXISTS `m_output` (
  `mo_id` int(11) NOT NULL AUTO_INCREMENT,
  `mo_unit` int(11) DEFAULT NULL,
  `mo_department` int(11) DEFAULT NULL,
  `mo_program` int(11) DEFAULT NULL,
  `mo_kegiatan` int(11) DEFAULT NULL,
  `mo_name` varchar(50) DEFAULT NULL,
  `mo_yearly_budget` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`mo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table sireva.m_output: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_output` DISABLE KEYS */;
REPLACE INTO `m_output` (`mo_id`, `mo_unit`, `mo_department`, `mo_program`, `mo_kegiatan`, `mo_name`, `mo_yearly_budget`) VALUES
	(1, 1, 1, 1, 1, 'Aplikasi', NULL);
/*!40000 ALTER TABLE `m_output` ENABLE KEYS */;

-- Dumping structure for table sireva.m_program
CREATE TABLE IF NOT EXISTS `m_program` (
  `mp_id` int(11) NOT NULL AUTO_INCREMENT,
  `mp_unit` int(11) DEFAULT NULL,
  `mp_department` int(11) DEFAULT NULL,
  `mp_name` varchar(50) DEFAULT NULL,
  `mp_yearly_budget` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`mp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table sireva.m_program: ~1 rows (approximately)
/*!40000 ALTER TABLE `m_program` DISABLE KEYS */;
REPLACE INTO `m_program` (`mp_id`, `mp_unit`, `mp_department`, `mp_name`, `mp_yearly_budget`) VALUES
	(1, 1, 2, 'PENGAJUAN WEBSITE', NULL);
/*!40000 ALTER TABLE `m_program` ENABLE KEYS */;

-- Dumping structure for table sireva.m_sub_output
CREATE TABLE IF NOT EXISTS `m_sub_output` (
  `ms_id` int(11) NOT NULL AUTO_INCREMENT,
  `ms_unit` int(11) DEFAULT NULL,
  `ms_department` int(11) DEFAULT NULL,
  `ms_program` int(11) DEFAULT NULL,
  `ms_kegiatan` int(11) DEFAULT NULL,
  `ms_output` int(11) DEFAULT NULL,
  `ms_name` varchar(50) DEFAULT NULL,
  `ms_yearly_budget` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ms_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table sireva.m_sub_output: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_sub_output` DISABLE KEYS */;
REPLACE INTO `m_sub_output` (`ms_id`, `ms_unit`, `ms_department`, `ms_program`, `ms_kegiatan`, `ms_output`, `ms_name`, `ms_yearly_budget`) VALUES
	(1, 1, 1, 1, 1, 1, 'hosting', NULL);
/*!40000 ALTER TABLE `m_sub_output` ENABLE KEYS */;

-- Dumping structure for table sireva.m_unit
CREATE TABLE IF NOT EXISTS `m_unit` (
  `mu_id` int(11) NOT NULL AUTO_INCREMENT,
  `mu_name` varchar(255) DEFAULT NULL,
  `mu_department` int(11) DEFAULT NULL,
  PRIMARY KEY (`mu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table sireva.m_unit: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_unit` DISABLE KEYS */;
REPLACE INTO `m_unit` (`mu_id`, `mu_name`, `mu_department`) VALUES
	(1, 'PROGAMMER', 2);
/*!40000 ALTER TABLE `m_unit` ENABLE KEYS */;

-- Dumping structure for table sireva.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sireva.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', '$2y$10$qj0fl3ERUghNkW.jEigWXOM/i/MYB/lthJQmjULpGFM7Q1.t/oXri', 'tiOhkMciZHy5MniFlSv1bVGEXmvRaI8ubZUUASAsAh3QUOpbbl80RIzhP1h7', '2019-10-21 05:29:28', '2019-10-21 05:29:28'),
	(2, '123', '1@gmail.com', '$2y$10$Rh7m/wwRJC.Gx60X74Xi3Ou5Go5tGWZ7/BwM4CBfkF1umWDjgbUeC', 'XrWNkAn6PTePgMLWbVXiZAtehGkiln6y4RtrlsQ8iQGQEkrrnEUQdjPAYU5d', '2019-10-21 05:30:25', '2019-10-21 05:30:25');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
