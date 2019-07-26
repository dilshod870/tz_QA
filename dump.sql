-- --------------------------------------------------------
-- Хост:                         localhost
-- Версия сервера:               5.7.19-log - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных studyQA
CREATE DATABASE IF NOT EXISTS `studyQA` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `studyQA`;


-- Дамп структуры для таблица studyQA.eventa
CREATE TABLE IF NOT EXISTS `eventa` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` tinyint(3) unsigned NOT NULL,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utm` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы studyQA.eventa: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `eventa` DISABLE KEYS */;
INSERT INTO `eventa` (`id`, `name`, `surname`, `email`, `address`, `education`, `ip`, `utm`, `created_at`, `updated_at`) VALUES
	(36, 'Иванов', 'Сергей', 'dilshod61870@gmail.com', 'г.Москва ул.Гагарина дом 28 кв 10', 2, '127.0.0.1', NULL, '2019-07-26 10:49:27', '2019-07-26 10:49:27'),
	(37, 'Иванов', 'Сергей', 'dilshod61870@gmail.com', 'г.Москва ул.Гагарина дом 28 кв 10', 2, '127.0.0.1', NULL, '2019-07-26 11:12:45', '2019-07-26 11:12:45'),
	(38, 'Иванов', 'Сергей', 'dilshod61870@gmail.com', 'г.Москва ул.Гагарина дом 28 кв 10', 2, '127.0.0.1', NULL, '2019-07-26 11:13:18', '2019-07-26 11:13:18'),
	(39, 'Иванов', 'Сергей', 'dilshod61870@gmail.com', 'г.Москва ул.Гагарина дом 28 кв 10', 2, '127.0.0.1', NULL, '2019-07-26 11:24:37', '2019-07-26 11:24:37'),
	(40, 'Иванов', 'Сергей', 'dilshod61870@gmail.com', 'г.Москва ул.Гагарина дом 28 кв 10', 2, '127.0.0.1', NULL, '2019-07-26 11:25:12', '2019-07-26 11:25:12'),
	(41, 'Иванов', 'Сергей', 'dilshod61870@gmail.com', 'г.Москва ул.Гагарина дом 28 кв 10', 2, '127.0.0.1', NULL, '2019-07-26 11:25:23', '2019-07-26 11:25:23'),
	(42, 'Иванов', 'Сергей', 'dilshod61870@gmail.com', 'г.Москва ул.Гагарина дом 28 кв 10', 2, '127.0.0.1', NULL, '2019-07-26 11:28:15', '2019-07-26 11:28:15'),
	(43, 'Иванов', 'Сергей', 'dilshod61870@gmail.com', 'г.Москва ул.Гагарина дом 28 кв 10', 2, '127.0.0.1', NULL, '2019-07-26 11:29:39', '2019-07-26 11:29:39'),
	(44, 'Иванов', 'Сергей', 'dilshod61870@gmail.com', 'г.Москва ул.Гагарина дом 28 кв 10', 2, '127.0.0.1', NULL, '2019-07-26 11:31:12', '2019-07-26 11:31:12');
/*!40000 ALTER TABLE `eventa` ENABLE KEYS */;


-- Дамп структуры для таблица studyQA.eventb
CREATE TABLE IF NOT EXISTS `eventb` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` tinyint(3) unsigned NOT NULL,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utm` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы studyQA.eventb: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `eventb` DISABLE KEYS */;
INSERT INTO `eventb` (`id`, `name`, `surname`, `email`, `address`, `education`, `ip`, `utm`, `created_at`, `updated_at`) VALUES
	(5, 'Иванов', 'Сергей', 'dodikhudoev@babilon-t.com', 'г.Москва ул.Гагарина дом 28 кв 10', 3, '127.0.0.1', NULL, '2019-07-26 05:38:00', '2019-07-26 05:38:00'),
	(6, 'Иванов', 'Сергей', 'dilshod61870@gmail.com', 'г.Москва ул.Гагарина дом 28 кв 10', 2, '127.0.0.1', NULL, '2019-07-26 10:02:40', '2019-07-26 10:02:40'),
	(7, 'Иванов', 'Сергей', 'dilshod61870@gmail.com', 'г.Москва ул.Гагарина дом 28 кв 10', 2, '127.0.0.1', NULL, '2019-07-26 10:03:15', '2019-07-26 10:03:15'),
	(8, 'Иванов', 'Сергей', 'dilshod61870@gmail.com', 'г.Москва ул.Гагарина дом 28 кв 10', 2, '127.0.0.1', NULL, '2019-07-26 10:04:57', '2019-07-26 10:04:57');
/*!40000 ALTER TABLE `eventb` ENABLE KEYS */;


-- Дамп структуры для таблица studyQA.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB AUTO_INCREMENT=452 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы studyQA.jobs: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;


-- Дамп структуры для таблица studyQA.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы studyQA.migrations: ~7 rows (приблизительно)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_07_24_082006_create_posts_table', 2),
	(6, '2019_07_25_082425_create_eventa_table', 3),
	(7, '2019_07_25_082502_create_eventb_table', 3),
	(8, '2019_07_25_100710_create_jobs_table', 4),
	(9, '2019_07_26_060410_create_permission_tables', 5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Дамп структуры для таблица studyQA.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы studyQA.model_has_permissions: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;


-- Дамп структуры для таблица studyQA.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы studyQA.model_has_roles: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(2, 'App\\User', 1),
	(3, 'App\\User', 5);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;


-- Дамп структуры для таблица studyQA.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы studyQA.password_resets: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Дамп структуры для таблица studyQA.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы studyQA.permissions: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;


-- Дамп структуры для таблица studyQA.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы studyQA.posts: ~11 rows (приблизительно)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `post`, `image`, `created_at`, `updated_at`) VALUES
	(5, 'Таким образом начало повседневной работы по формированию позиции позволяет оценить значение систем массового участия. Идейные соображения высшего порядка, а также рамки и место обучения кадров в значительной степени обуславливает создание направлений прогрессивного развития. Товарищи! дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации систем массового участия. С другой стороны укрепление и развитие структуры позволяет выполнять важные задания по разр', '1563966663.jpg', '2019-07-24 11:09:42', '2019-07-25 05:33:08'),
	(6, 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.', '1563969005.jpg', '2019-07-24 11:50:05', '2019-07-25 05:07:27'),
	(7, 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.', '1563969005.jpg', '2019-07-24 11:50:05', '2019-07-25 05:07:27'),
	(8, 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.', '1563969005.jpg', '2019-07-24 11:50:05', '2019-07-25 05:07:27'),
	(9, 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.', '1564033342.jpg', '2019-07-24 11:50:05', '2019-07-25 05:42:22'),
	(10, 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.', '1563969005.jpg', '2019-07-24 11:50:05', '2019-07-25 05:07:27'),
	(11, 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.', '1563969005.jpg', '2019-07-24 11:50:05', '2019-07-25 05:07:27'),
	(12, 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.', '1563969005.jpg', '2019-07-24 11:50:05', '2019-07-25 05:07:27'),
	(13, 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.', '1563969005.jpg', '2019-07-24 11:50:05', '2019-07-25 05:07:27'),
	(14, 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.', '1563969005.jpg', '2019-07-24 11:50:05', '2019-07-25 05:07:27'),
	(15, 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступл', '1563969005.jpg', '2019-07-24 11:50:05', '2019-07-25 05:46:38');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;


-- Дамп структуры для таблица studyQA.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы studyQA.roles: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(2, 'admin', 'web', '2019-07-26 06:24:19', '2019-07-26 06:24:19'),
	(3, 'admin_event_a', 'web', '2019-07-26 06:29:46', '2019-07-26 06:29:46'),
	(4, 'admin_event_b', 'web', '2019-07-26 06:29:51', '2019-07-26 06:29:51');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;


-- Дамп структуры для таблица studyQA.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы studyQA.role_has_permissions: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;


-- Дамп структуры для таблица studyQA.users
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы studyQA.users: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Administrator', 'mail@gmail.com', NULL, '$2y$10$0qUdi8kkXvQiCO7cWPFru.L9by.gEQWD/gzdmWSRNyvj7FpKiaD3W', NULL, '2019-07-24 08:10:45', '2019-07-26 11:33:16'),
	(5, 'Admin Event A', 'mail@mail.ru', NULL, '$2y$10$SX.oJhbC7EJrWN0.mNbKweRArmGi.CBkLTxC6iP8/iB5OtcytuhJi', NULL, '2019-07-26 09:49:35', '2019-07-26 11:32:58');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
