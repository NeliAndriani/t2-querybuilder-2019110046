-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for t2-querybuilder-2019110046
CREATE DATABASE IF NOT EXISTS `t2-querybuilder-2019110046` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `t2-querybuilder-2019110046`;

-- Dumping structure for table t2-querybuilder-2019110046.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `nip` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table t2-querybuilder-2019110046.employees: ~36 rows (approximately)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`nip`, `nama_pegawai`, `tanggal_lahir`, `jabatan`, `tanggal_masuk`, `status`, `created_at`, `updated_at`) VALUES
	('IT001', 'Neli Andriani', '2001-08-06', 'Manajer', '2020-10-10', '1', NULL, NULL),
	('IT002', 'Merry', '1995-03-01', 'Asisten Manajer', '2020-10-10', '1', NULL, NULL),
	('IT003', 'Saka', '1989-01-19', 'Kepala', '2010-07-15', '1', NULL, NULL),
	('IT004', 'Noah', '1990-12-10', 'Manajer', '2010-07-19', '3', NULL, NULL),
	('IT005', 'David', '2003-05-06', 'Staff', '2022-02-01', '1', NULL, NULL),
	('GU001', 'Steve', '1995-09-12', 'Supervisor', '2018-06-23', '1', NULL, NULL),
	('GU002', 'Luna', '1997-05-12', 'Staff', '2021-04-20', '0', NULL, NULL),
	('GU003', 'Ridho', '1998-11-28', 'Asisten Manajer', '2018-07-09', '1', NULL, NULL),
	('GU004', 'Rahmat', '1977-06-22', 'Kepala', '2012-08-05', '1', NULL, NULL),
	('GU005', 'Fajar', '1995-04-12', 'Staff', '2019-01-11', '3', NULL, NULL),
	('KU001', 'Carmen', '2001-10-19', 'Staff', '2020-02-20', '1', NULL, NULL),
	('KU002', 'Cindy', '1999-07-15', 'Manajer', '2018-05-20', '1', NULL, NULL),
	('KU003', 'Agnes', '2001-03-16', 'Staff', '2020-02-10', '0', NULL, NULL),
	('KU004', 'Alena', '2001-04-19', 'Staff', '2020-02-20', '3', NULL, NULL),
	('KU005', 'Nita', '2001-12-22', 'Asisten Manajer', '2019-06-29', '1', NULL, NULL),
	('MK001', 'Raymond', '1988-03-09', 'Kepala', '2015-03-03', '1', NULL, NULL),
	('MK002', 'Timothy', '1985-11-29', 'Manajer', '2015-08-07', '0', NULL, NULL),
	('MK003', 'Felicia', '1994-07-05', 'Asisten Manajer', '2017-06-23', '1', NULL, NULL),
	('MK004', 'Chintya', '1999-10-22', 'Staf', '2018-11-03', '3', NULL, NULL),
	('MK006', 'Jhon', '1997-01-09', 'Staf', '2019-04-03', '2', NULL, NULL),
	('PR005', 'Raka', '1995-05-17', 'Staf', '2020-06-25', '0', NULL, NULL),
	('PR002', 'Ujang', '1974-02-17', 'Staf', '2020-06-25', '1', NULL, NULL),
	('PR003', 'Asep', '1983-05-11', 'Staf', '2016-03-06', '3', NULL, NULL),
	('PR004', 'Odang', '1970-10-09', 'Staf', '2014-11-04', '2', NULL, NULL),
	('PR006', 'Karya', '1981-01-19', 'Staf', '2017-08-27', '1', NULL, NULL),
	('PR007', 'Lukman', '1986-05-14', 'Staf', '2013-07-27', '1', NULL, NULL),
	('PR008', 'Hifdzi', '1990-12-01', 'Staf', '2018-03-26', '1', NULL, NULL),
	('PR009', 'Yulianti', '1987-06-12', 'Staf', '2018-03-07', '0', NULL, NULL),
	('PR001', 'Putra', '1990-08-16', 'Staf', '2018-05-03', '0', NULL, NULL),
	('DV001', 'Ahmad', '1980-02-26', 'Staf', '2015-11-10', '3', NULL, NULL),
	('DV002', 'Anto', '1977-09-23', 'Manajer', '2015-07-04', '1', NULL, NULL),
	('DV003', 'Andi', '1979-05-24', 'Asisten Manajer', '2015-11-10', '0', NULL, NULL),
	('DV004', 'Siti', '1992-10-07', 'Staf', '2019-04-16', '3', NULL, NULL),
	('DV005', 'Rani', '1980-12-26', 'Staf', '2017-01-14', '1', NULL, NULL),
	('DV006', 'Soleh', '1972-08-22', 'Staf', '2013-09-10', '1', NULL, NULL),
	('DV007', 'Yana', '1981-03-09', 'Manajer', '2012-04-19', '1', NULL, NULL);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

-- Dumping structure for table t2-querybuilder-2019110046.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table t2-querybuilder-2019110046.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table t2-querybuilder-2019110046.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table t2-querybuilder-2019110046.migrations: ~5 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(6, '2014_10_12_000000_create_users_table', 1),
	(7, '2014_10_12_100000_create_password_resets_table', 1),
	(8, '2019_08_19_000000_create_failed_jobs_table', 1),
	(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(10, '2022_11_02_004557_create_employees_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table t2-querybuilder-2019110046.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table t2-querybuilder-2019110046.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table t2-querybuilder-2019110046.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table t2-querybuilder-2019110046.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table t2-querybuilder-2019110046.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table t2-querybuilder-2019110046.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
