/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 50714
 Source Host           : localhost:3306
 Source Schema         : book

 Target Server Type    : MySQL
 Target Server Version : 50714
 File Encoding         : 65001

 Date: 27/08/2018 10:29:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for classify
-- ----------------------------
DROP TABLE IF EXISTS `classify`;
CREATE TABLE `classify`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tree` int(11) NULL DEFAULT NULL,
  `lft` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 53 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of classify
-- ----------------------------
INSERT INTO `classify` VALUES (1, NULL, 1, 104, 0, '顶级分类', 0);
INSERT INTO `classify` VALUES (18, NULL, 35, 38, 2, '游戏手机', 13);
INSERT INTO `classify` VALUES (17, NULL, 25, 34, 2, '手机', 13);
INSERT INTO `classify` VALUES (16, NULL, 82, 103, 1, '房产/汽车/汽车用品', 1);
INSERT INTO `classify` VALUES (15, NULL, 72, 81, 1, '家居/家具/家装/厨具', 1);
INSERT INTO `classify` VALUES (14, NULL, 52, 71, 1, '电脑/办公', 1);
INSERT INTO `classify` VALUES (13, NULL, 24, 51, 1, '手机/运营商/数码', 1);
INSERT INTO `classify` VALUES (19, NULL, 39, 48, 2, '老人机', 13);
INSERT INTO `classify` VALUES (20, NULL, 49, 50, 2, '对讲机', 13);
INSERT INTO `classify` VALUES (21, NULL, 26, 27, 3, '小米8 全面屏游戏智能手机', 17);
INSERT INTO `classify` VALUES (22, NULL, 28, 29, 3, 'Apple iPhone X (A1865) 64GB 深空灰色', 17);
INSERT INTO `classify` VALUES (23, NULL, 30, 31, 3, 'Apple iPhone 6s Plus (A1699) 128G', 17);
INSERT INTO `classify` VALUES (24, NULL, 32, 33, 3, '华为 HUAWEI P20 AI智慧徕卡双摄全面屏游戏手机', 17);
INSERT INTO `classify` VALUES (25, NULL, 40, 41, 3, '诺基亚 NOKIA 8110 移动联通4G手机 ', 19);
INSERT INTO `classify` VALUES (26, NULL, 42, 43, 3, '飞利浦（PHILIPS） E316 深宝蓝', 19);
INSERT INTO `classify` VALUES (27, NULL, 44, 45, 3, '诺基亚 NOKIA 8110', 19);
INSERT INTO `classify` VALUES (29, NULL, 36, 37, 3, '一加手机6 8GB+128GB 琥珀红', 18);
INSERT INTO `classify` VALUES (30, NULL, 53, 58, 2, '笔记本', 14);
INSERT INTO `classify` VALUES (31, NULL, 59, 64, 2, '游戏本', 14);
INSERT INTO `classify` VALUES (32, NULL, 65, 70, 2, '平板电脑', 14);
INSERT INTO `classify` VALUES (33, NULL, 54, 55, 3, 'Apple MacBook Pro 13.3英寸笔记本电脑 银色', 30);
INSERT INTO `classify` VALUES (34, NULL, 56, 57, 3, 'Apple MacBook Pro 13.3英寸笔记本电脑 深空灰色', 30);
INSERT INTO `classify` VALUES (35, NULL, 60, 61, 3, '联想(Lenovo)拯救者Y7000英特尔八代酷睿', 31);
INSERT INTO `classify` VALUES (36, NULL, 62, 63, 3, '戴尔DELL游匣G3烈焰版 15.6英寸游戏笔记本电脑', 31);
INSERT INTO `classify` VALUES (37, NULL, 66, 67, 3, 'Apple iPad 平板电脑 9.7英寸', 32);
INSERT INTO `classify` VALUES (38, NULL, 68, 69, 3, 'Apple iPad 平板电脑 2018年新款9.7英寸', 32);
INSERT INTO `classify` VALUES (39, NULL, 73, 74, 2, '家居', 15);
INSERT INTO `classify` VALUES (40, NULL, 75, 76, 2, '家具', 15);
INSERT INTO `classify` VALUES (41, NULL, 77, 78, 2, '家装', 15);
INSERT INTO `classify` VALUES (42, NULL, 79, 80, 2, '厨具', 15);
INSERT INTO `classify` VALUES (43, NULL, 83, 90, 2, '微型车', 16);
INSERT INTO `classify` VALUES (44, NULL, 91, 92, 2, '小型车', 16);
INSERT INTO `classify` VALUES (45, NULL, 93, 94, 2, '紧凑型车', 16);
INSERT INTO `classify` VALUES (46, NULL, 84, 85, 3, '众泰（ZOTYE）大迈 X7', 43);
INSERT INTO `classify` VALUES (47, NULL, 86, 87, 3, '福特 Mustang 2018款', 43);
INSERT INTO `classify` VALUES (48, NULL, 88, 89, 3, '【易车惠】 广汽三菱劲炫', 43);
INSERT INTO `classify` VALUES (49, NULL, 95, 102, 2, '跑车', 16);
INSERT INTO `classify` VALUES (50, NULL, 96, 97, 3, '兰博基尼毒药', 49);
INSERT INTO `classify` VALUES (51, NULL, 98, 99, 3, '柯尼塞格 One', 49);
INSERT INTO `classify` VALUES (52, NULL, 100, 101, 3, '布加迪威龙', 49);

SET FOREIGN_KEY_CHECKS = 1;
