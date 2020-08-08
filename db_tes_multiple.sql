/*
 Navicat Premium Data Transfer

 Source Server         : lokal
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : db_tes_multiple

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 09/08/2020 00:14:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for siswa
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa`  (
  `nis` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telp` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`nis`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO `siswa` VALUES ('', '', '', '');
INSERT INTO `siswa` VALUES ('dfgdfg', 'ddfgdfg', 'dfgdfgdfg', 'dfgdfg');

-- ----------------------------
-- Table structure for tb_filter
-- ----------------------------
DROP TABLE IF EXISTS `tb_filter`;
CREATE TABLE `tb_filter`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_input` date NULL DEFAULT NULL,
  `barang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_filter
-- ----------------------------
INSERT INTO `tb_filter` VALUES (1, '2020-08-05', 'kasur');
INSERT INTO `tb_filter` VALUES (2, '2020-08-19', 'sabun');
INSERT INTO `tb_filter` VALUES (3, '2020-08-26', 'tikar');
INSERT INTO `tb_filter` VALUES (4, '2020-08-20', 'sapu');

SET FOREIGN_KEY_CHECKS = 1;
