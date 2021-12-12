/*
 Navicat Premium Data Transfer

 Source Server         : MYSQL Local
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : sevima

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 12/12/2021 15:20:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for follower
-- ----------------------------
DROP TABLE IF EXISTS `follower`;
CREATE TABLE `follower`  (
  `follower_id` int NOT NULL AUTO_INCREMENT,
  `following_id_user` int NULL DEFAULT NULL,
  `follower_id_user` int NULL DEFAULT NULL,
  `follower_create_by` int NULL DEFAULT NULL,
  `follower_create_at` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`follower_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of follower
-- ----------------------------
INSERT INTO `follower` VALUES (3, 2, 3, 3, '2021-12-12 13:23:22.000000');
INSERT INTO `follower` VALUES (4, 1, 4, 4, '2021-12-12 14:51:19.000000');

-- ----------------------------
-- Table structure for nilai
-- ----------------------------
DROP TABLE IF EXISTS `nilai`;
CREATE TABLE `nilai`  (
  `nilai_id` int NOT NULL AUTO_INCREMENT,
  `nilai_nim` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_kd_mk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_nama_mk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_sks` int NULL DEFAULT NULL,
  `nilai_angka` int NULL DEFAULT NULL,
  `nilai_huruf` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`nilai_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nilai
-- ----------------------------
INSERT INTO `nilai` VALUES (1, '10001', 'MKA', 'Matematika', 2, 89, 'A');
INSERT INTO `nilai` VALUES (2, '10001', 'MKB', 'Biologi', 3, 75, 'B');
INSERT INTO `nilai` VALUES (3, '10001', 'MKC', 'Fisika', 2, 82, 'A');
INSERT INTO `nilai` VALUES (4, '10002', 'MKB', 'Biologi', 3, 75, 'B');
INSERT INTO `nilai` VALUES (5, '10002', 'MKA', 'Matematika', 2, 66, 'D');

-- ----------------------------
-- Table structure for post
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post`  (
  `post_id` int NOT NULL AUTO_INCREMENT,
  `post_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `post_file_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `post_file_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `post_file_size` int NULL DEFAULT NULL,
  `post_file_created_by` int NULL DEFAULT NULL,
  `post_file_created_at` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`post_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES (1, 'Testing upload', 'assets/img/img_post/oxford_21.jpg', 'image/jpeg', 161, 1, '2021-12-12 11:00:48.000000');
INSERT INTO `post` VALUES (2, 'ini adalah logo kabupaten Mojokerto', 'assets/img/img_post/Mojokerto.PNG', 'image/png', 622, 1, '2021-12-12 11:10:40.000000');
INSERT INTO `post` VALUES (3, 'kereeen', 'assets/img/img_post/44499_145263325505093_6541230_n.jpg', 'image/jpeg', 20, 1, '2021-12-12 11:15:57.000000');
INSERT INTO `post` VALUES (4, 'ini adalah fotoku', 'assets/img/img_post/foto.jpg', 'image/jpeg', 5, 2, '2021-12-12 13:25:08.000000');
INSERT INTO `post` VALUES (5, 'ini adalah gambar saya', 'assets/img/img_post/oxford_22.jpg', 'image/jpeg', 161, 4, '2021-12-12 14:50:49.000000');

-- ----------------------------
-- Table structure for post_like
-- ----------------------------
DROP TABLE IF EXISTS `post_like`;
CREATE TABLE `post_like`  (
  `post_like_id` int NOT NULL AUTO_INCREMENT,
  `post_like_id_post` int NULL DEFAULT NULL,
  `post_like_id_user` int NULL DEFAULT NULL,
  `post_like_created_by` int NULL DEFAULT NULL,
  `post_like_created_at` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`post_like_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of post_like
-- ----------------------------
INSERT INTO `post_like` VALUES (1, 4, 3, 3, '2021-12-12 14:43:14.000000');
INSERT INTO `post_like` VALUES (2, 1, 4, 4, '2021-12-12 14:51:28.000000');

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student`  (
  `std_id` int NOT NULL AUTO_INCREMENT,
  `std_nim` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `std_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `std_alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `std_jk` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `std_umur` int NULL DEFAULT NULL,
  `std_no_telp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`std_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES (1, '10001', 'John', 'Medokan', 'L', 20, '0987654321');
INSERT INTO `student` VALUES (2, '10002', 'Agnes', 'Tandes', 'P', 21, '0987654322');
INSERT INTO `student` VALUES (3, '10003', 'Monica', 'Rungkut', 'P', 20, '0987654323');
INSERT INTO `student` VALUES (4, '10004', 'Sherlock', 'Lontar', 'L', 22, '0987654324');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_fullname` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `user_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `user_pass` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Admin Sistem', 'admin', '$2y$10$1wj8ODyL8GD4k00SyNUeaesWL3geuGc/ajz9obRvdWCjqxRehXquO');
INSERT INTO `user` VALUES (2, 'Farid', 'farid', '$2y$10$rxpKPNBG/6IKzhlbdq2rv.KjbR7OLuLsrQtHp3si4mFtwBswCiW3W');
INSERT INTO `user` VALUES (3, 'Rizka Fauziah', 'rizka', '$2y$10$g.Z/3xos2g1RFUmHsTxvlemC7rPkyRjK3MMz6lrA/DzQpPLN/rxUe');
INSERT INTO `user` VALUES (4, 'Dani', 'dani', '$2y$10$9nN/yk5X2.COiOST83GOBeOlzJ7OuoCVlTgmo8glHCMMV0bNQ9c9i');

SET FOREIGN_KEY_CHECKS = 1;
