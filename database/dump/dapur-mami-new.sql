-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.4.24-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win64
-- HeidiSQL Versi:               11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Membuang data untuk tabel dapur_mami.discounts: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `discounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `discounts` ENABLE KEYS */;

-- Membuang data untuk tabel dapur_mami.discount_menus: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `discount_menus` DISABLE KEYS */;
/*!40000 ALTER TABLE `discount_menus` ENABLE KEYS */;

-- Membuang data untuk tabel dapur_mami.failed_jobs: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Membuang data untuk tabel dapur_mami.material_transactions: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `material_transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `material_transactions` ENABLE KEYS */;

-- Membuang data untuk tabel dapur_mami.material_transaction_details: ~5 rows (lebih kurang)
/*!40000 ALTER TABLE `material_transaction_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `material_transaction_details` ENABLE KEYS */;

-- Membuang data untuk tabel dapur_mami.menus: ~9 rows (lebih kurang)
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT IGNORE INTO `menus` (`id`, `name`, `price`, `category`, `description`, `weight`, `discounts_id`, `active`, `created_at`, `updated_at`, `image`) VALUES
	(1, 'Nasi Goreng', 10000, 1, 'Nasi goreng dengan bumbu khas Indonesia', 100, NULL, 1, NULL, NULL, NULL),
	(2, 'Nasi Goreng Spesial', 15000, 1, 'Nasi goreng dengan bumbu khas Indonesia', 100, NULL, 1, NULL, NULL, NULL),
	(3, 'Soto Ayam', 10000, 1, 'Soto ayam dengan bumbu khas Indonesia', 100, NULL, 1, NULL, NULL, NULL),
	(4, 'Es Teh', 5000, 2, 'Es teh dengan bumbu khas Indonesia', 100, NULL, 1, NULL, NULL, NULL),
	(5, 'Es Jeruk', 5000, 2, 'Es jeruk dengan bumbu khas Indonesia', 100, NULL, 1, NULL, NULL, NULL),
	(6, 'Es Campur', 10000, 2, 'Es campur dengan bumbu khas Indonesia', 100, NULL, 1, NULL, NULL, NULL),
	(7, 'Keripik', 5000, 3, 'Keripik dengan bumbu khas Indonesia', 100, NULL, 1, NULL, NULL, NULL),
	(8, 'Keripik Kacang', 5000, 3, 'Keripik kacang dengan bumbu khas Indonesia', 100, NULL, 1, NULL, NULL, NULL),
	(9, 'Keripik Tempe', 5000, 3, 'Keripik tempe dengan bumbu khas Indonesia', 100, NULL, 1, NULL, NULL, NULL);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Membuang data untuk tabel dapur_mami.migrations: ~11 rows (lebih kurang)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(23, '2014_10_12_000000_create_users_table', 1),
	(24, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(25, '2019_08_19_000000_create_failed_jobs_table', 1),
	(26, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(27, '2023_02_22_160644_create_discounts_table', 1),
	(28, '2023_02_22_160850_create_menus_table', 1),
	(29, '2023_02_22_221553_create_discount_menus_table', 1),
	(30, '2023_02_22_221935_create_transactions_table', 1),
	(31, '2023_02_26_141357_add_image_menu', 1),
	(32, '2023_03_01_103145_create_transaction_details_table', 1),
	(33, '2023_03_01_110657_add_relation_transactions_transaction_details', 1),
	(34, '2023_03_02_222145_delete_column_transaction_details', 1),
	(35, '2023_03_02_223859_remove_amount_item_transaction_details', 1),
	(36, '2023_03_03_095714_remove_total_price_transaction_details', 1),
	(37, '2023_03_04_114056_add_sub_total_transactions', 1),
	(38, '2023_03_05_044002_add_some_columns_transactions', 1),
	(39, '2023_03_05_044915_update_customer_name_transactions', 1),
	(40, '2023_04_03_034506_material_transactions_table', 1),
	(41, '2023_04_03_034841_material_transaction_details_table', 1),
	(42, '2023_04_06_070133_update_unit_type_column_material_transaction_details', 1),
	(43, '2023_04_06_075824_update_some_columns_material_transaction', 1),
	(44, '2023_04_29_232355_add_purchase_note_and_puchase_proof_material_transaction_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Membuang data untuk tabel dapur_mami.password_reset_tokens: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

-- Membuang data untuk tabel dapur_mami.personal_access_tokens: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Membuang data untuk tabel dapur_mami.transactions: ~4 rows (lebih kurang)
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;

-- Membuang data untuk tabel dapur_mami.transaction_details: ~13 rows (lebih kurang)
/*!40000 ALTER TABLE `transaction_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaction_details` ENABLE KEYS */;

-- Membuang data untuk tabel dapur_mami.users: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `first_name`, `last_name`, `fullname`, `email`, `email_verified_at`, `password`, `phone`, `sex`, `address`, `birth_date`, `profile_picture`, `role`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Ibnu', 'Sutio', 'Ibnu Sutio', 'admin@mail.com', NULL, '$2y$10$PCieVmaNv9909RiWSEUyNu6n9c016s9FnEbIGeeEaDW.IAtj1wdai', NULL, NULL, NULL, NULL, NULL, 2, 1, NULL, '2023-04-30 03:27:48', '2023-04-30 03:27:48');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
