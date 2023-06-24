/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80030
 Source Host           : localhost:3306
 Source Schema         : auth

 Target Server Type    : MySQL
 Target Server Version : 80030
 File Encoding         : 65001

 Date: 24/06/2023 12:43:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `version` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `class` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `group` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `namespace` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2023-06-24-050419', 'App\\Database\\Migrations\\Users', 'default', 'App', 1687585221, 1);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `photo` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'jamil@test.test', '$2y$10$18DwSXYOJdzJMTACOnjfzOU3r4hJXD0Pv5Q2PEg1g1KK1/HiK3eJe', 'Muhamad Jamil Firdaus', '69537165_1329513683871355_5807213289372909568_n.jpg', '2023-06-24 12:41:15');

SET FOREIGN_KEY_CHECKS = 1;
