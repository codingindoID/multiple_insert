/*
 Navicat Premium Data Transfer

 Source Server         : lokal
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : db_tes_multiple

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 06/08/2020 15:08:36
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
INSERT INTO `siswa` VALUES ('12355fghfgh', 'sdffg', 'sfgfdgsdfg', 'sfgsf');
INSERT INTO `siswa` VALUES ('1246124', 'fsdf', 'fssdfsd', 'fsdfsdf');
INSERT INTO `siswa` VALUES ('234234', 'dgsfg', 'sfgf', 'gsfgsdfg');
INSERT INTO `siswa` VALUES ('a12345', 'agus', '098765632', 'lebuawu');
INSERT INTO `siswa` VALUES ('as', 'sdf', 'sdfsdf', 'sdfsdf');
INSERT INTO `siswa` VALUES ('dasda', 'asdas', 'asdasd', 'asdasd');
INSERT INTO `siswa` VALUES ('dfgdfg3354', 'dasfsdf', 'asdfsdf', 'sdfsdf');
INSERT INTO `siswa` VALUES ('dgdfg', 'dfgdf', 'dfgd', 'dfgdfgf');
INSERT INTO `siswa` VALUES ('e', 'dsd', 'sd', 'sdsd');
INSERT INTO `siswa` VALUES ('sdfsdf', 'sdfsd', 'sdfsdf', 'sdfsdfsd');
INSERT INTO `siswa` VALUES ('sdfsdfs', 'sdfsdf', 'sdfsdf', 'ssdfsdf');
INSERT INTO `siswa` VALUES ('sdg', 'dfgdfg', 'dhdfg', 'hdfghgh');
INSERT INTO `siswa` VALUES ('sfsfs', 'sfsdf', 'sdfs', 'sdfsdfs');

SET FOREIGN_KEY_CHECKS = 1;
