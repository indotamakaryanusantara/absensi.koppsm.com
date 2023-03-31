/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MariaDB
 Source Server Version : 100513 (10.5.13-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : kopkpsm_absensi

 Target Server Type    : MariaDB
 Target Server Version : 100513 (10.5.13-MariaDB)
 File Encoding         : 65001

 Date: 31/03/2023 05:03:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cabangs
-- ----------------------------
DROP TABLE IF EXISTS `cabangs`;
CREATE TABLE `cabangs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_cabang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_cabang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cabangs
-- ----------------------------
INSERT INTO `cabangs` VALUES (1, 'Mojokerto', 'Jalan Mojokerto No 11', 'mojokerto', 1, NULL, '2023-03-21 13:32:04');
INSERT INTO `cabangs` VALUES (2, 'Malang Selatan', 'Joyo Tumenggung Suryo No.24', 'malang-selatan', 1, '2023-03-14 14:02:18', '2023-03-21 13:31:00');
INSERT INTO `cabangs` VALUES (3, 'Surabaya', 'Jalan Pahlawan Trip No 12', 'surabaya', 1, '2023-03-15 09:39:14', '2023-03-21 13:37:37');
INSERT INTO `cabangs` VALUES (4, 'Jakarta', 'Jalan Jakarta No.12', 'jakarta', 0, '2023-03-15 10:05:33', '2023-03-21 13:37:41');
INSERT INTO `cabangs` VALUES (5, 'Jombag', 'Jombang', 'jombag', 0, '2023-03-15 10:26:51', '2023-03-15 12:21:34');
INSERT INTO `cabangs` VALUES (6, 'Testing', 'testing', 'testing', 0, '2023-03-15 11:06:32', '2023-03-21 12:09:15');
INSERT INTO `cabangs` VALUES (7, 'Sidoarjo', 'Sidoarjo', 'sidoarjo', 0, '2023-03-15 11:07:25', '2023-03-15 13:06:48');
INSERT INTO `cabangs` VALUES (8, 'Jombang', 'Jalan Diponegoro', 'jombang', 0, '2023-03-15 11:22:39', '2023-03-15 13:06:44');
INSERT INTO `cabangs` VALUES (9, 'Surakarta', 'Surakarta Raya No.12', 'surakarta', 0, '2023-03-18 16:15:54', '2023-03-21 12:09:31');

-- ----------------------------
-- Table structure for divisis
-- ----------------------------
DROP TABLE IF EXISTS `divisis`;
CREATE TABLE `divisis`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_divisi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of divisis
-- ----------------------------
INSERT INTO `divisis` VALUES (1, 'Informasi Teknologi', 'informasi-teknologi', 1, NULL, '2023-03-22 01:17:46');
INSERT INTO `divisis` VALUES (2, 'Digital Marketing', 'digital-marketing', 1, '2023-03-16 01:48:41', '2023-03-18 16:16:49');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for jabatans
-- ----------------------------
DROP TABLE IF EXISTS `jabatans`;
CREATE TABLE `jabatans`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jabatans
-- ----------------------------
INSERT INTO `jabatans` VALUES (1, 'Project Manager', '', 0, '2023-03-16 02:25:34', '2023-03-22 01:14:52');
INSERT INTO `jabatans` VALUES (2, 'Project Directur', 'project-directur', 1, '2023-03-16 02:25:55', '2023-03-16 02:33:56');
INSERT INTO `jabatans` VALUES (3, 'HRDGA', 'hrga', 1, '2023-03-16 02:33:04', '2023-03-16 02:33:42');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (6, '2023_03_12_232228_add_roles_field_to_users_table', 2);
INSERT INTO `migrations` VALUES (7, '2023_03_14_051928_add__field_to_users_table', 3);
INSERT INTO `migrations` VALUES (8, '2023_03_14_051928_add__field_update_to_users_table', 4);
INSERT INTO `migrations` VALUES (9, '2023_03_14_054253_create_cabangs_table', 5);
INSERT INTO `migrations` VALUES (10, '2023_03_14_064734_add_alamat_field_to_users_table', 6);
INSERT INTO `migrations` VALUES (11, '2023_03_15_005820_create_roles_table', 7);
INSERT INTO `migrations` VALUES (12, '2023_03_16_150819_create_divisis_table', 8);
INSERT INTO `migrations` VALUES (13, '2023_03_16_161342_create_jabatans_table', 9);
INSERT INTO `migrations` VALUES (14, '2023_03_25_072928_update_field_at_users_table', 10);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `roles_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'pusat', 1, NULL, NULL);
INSERT INTO `roles` VALUES (2, 'hrd', 1, NULL, NULL);
INSERT INTO `roles` VALUES (3, 'admincabang', 1, NULL, NULL);
INSERT INTO `roles` VALUES (4, 'USER', 1, NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cabang` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `negara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pernikahan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_karyawan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `referensi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_asal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_saat_ini` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_rumah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_roles` int(100) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 2, 1, 1, '', '', '', '', '', '', '', '', '', 'Zahidan Ghifari Azmi', '', '', '', '', '', '', '2000000', 'ZAHIDAN', 'zahidanazmi7@gmail.com', NULL, '$2y$10$kE9v2DigbHXJS2M7fnf8BO2/JGYN9wFwx.Ohf0bdRr4D09i4e/wDi', 'qvBKZikLanKueoBeZOwpqrynayiPmnSbgHV1tQjjEBx0sAMQzEZS2fwInDO0', '2023-03-11 09:57:10', '2023-03-22 00:58:44', 2, 1);
INSERT INTO `users` VALUES (2, 1, 3, 1, '357030403444440', '', '', '', '', '', '', '', '', 'Jamila Riris Permata', '', '', '', '', '', '', '1000000', 'Riris', 'riris@gmail.com', NULL, '$2y$10$hwwrLsTAI.uW2ubpYJ7mHOWYaEdUSW6XKUJJk1NXPqqIeYZ0bvyOu', NULL, '2023-03-18 15:38:22', '2023-03-22 01:16:40', 2, 1);
INSERT INTO `users` VALUES (3, 9, 1, 1, '357030403444477', '', '', '', '', '', '', '', '', 'Hari S.', '', '', '', '', '', '', '1000000', 'hari', 'hari@gmail.com', NULL, '$2y$10$o4WRBEJpdZDBXWlGebZHIu7kGOuJe/ZFHix7IgdDvICT7jDdbIYoO', NULL, '2023-03-18 23:09:03', '2023-03-25 13:34:41', 4, 0);
INSERT INTO `users` VALUES (5, 3, 2, 1, '357030403444989', '', '', '', '', '', '', '', '', 'Wahyu Dirga', '', '', '', '', '', '', '1000000', 'dirga', 'dirga@gmail.com', NULL, '$2y$10$mY5NGE9SQMzm1UrSCXhbKODHfyP6Pt5XjMIbzKqmfu2Ta8IpR8yRK', NULL, '2023-03-18 23:11:05', '2023-03-22 00:32:56', 4, 0);
INSERT INTO `users` VALUES (6, 2, 2, 2, '345904590', 'Malang', '2023-03-26', 'Laki-Laki', 'Islam', 'Indonesia', 'Belum Menikah', 'Tetap', 'Game', 'Dhimas Febri', '2023-03-26', '2023-03-26', '<p>Malang</p>', '<p>Malang</p>', '90989999', '08128998', 'Rp. 2.000.000', 'febri', 'febri@gmail.com', NULL, '$2y$10$WWFkAYVW6WOcgYSNpXQGlu5bKphUUnsOwLmMkn8N3BDFz6LNNJPly', NULL, '2023-03-25 14:10:34', '2023-03-25 22:39:16', 4, 0);
INSERT INTO `users` VALUES (7, 1, 3, 1, '123123', 'malang', '1985-08-02', 'Laki-Laki', 'Islam', 'Indonesia', 'Belum Menikah', 'Training', 'camping', 'TRI WAHYU DIRGANTORO', '2021-08-02', '2021-08-02', '<p>nganjuk</p>', '<p>malang</p>', '081913337141', '081913337141', 'Rp. 20.000', 'triwahyudirga', 'triwahyudirga@gmail.com', NULL, '$2y$10$VciXDVGzNghzcQUoCBzm3.Upvia0zZGSaBDfILIjvDjdX2z7uO6wW', NULL, '2023-03-29 09:06:29', '2023-03-29 09:06:29', 3, 1);

SET FOREIGN_KEY_CHECKS = 1;
