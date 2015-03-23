/*
Navicat MySQL Data Transfer

Source Server         : yii2
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : yii2advanced

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2015-03-22 23:24:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `column_id` int(11) NOT NULL DEFAULT '0',
  `model_id` smallint(3) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `comments_count` int(11) NOT NULL DEFAULT '0',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `miaoshu` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `article_title_unique` (`title`),
  UNIQUE KEY `article_slug_unique` (`slug`),
  KEY `article_category_id_index` (`column_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('11', '1', '0', '1', '技术1', null, '<p>334</p>', '0', '', '', '', '2015-03-20 22:40:17', '2015-03-20 22:40:17', '/uploads/images/746E8324F73A.jpg', null);

-- ----------------------------
-- Table structure for `column`
-- ----------------------------
DROP TABLE IF EXISTS `column`;
CREATE TABLE `column` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parentid` int(11) NOT NULL,
  `model_id` smallint(2) NOT NULL,
  `cname` varchar(32) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `sort` smallint(4) DEFAULT NULL,
  `isArticle` smallint(5) NOT NULL,
  `isShow` smallint(5) NOT NULL,
  `content` text NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `model_f` (`model_id`),
  CONSTRAINT `model_f` FOREIGN KEY (`model_id`) REFERENCES `models` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of column
-- ----------------------------
INSERT INTO `column` VALUES ('1', '0', '1', '技术', null, '1', '1', '1', '<p>12</p>', '10', '1426860398', '1426860398');
INSERT INTO `column` VALUES ('2', '0', '1', '作品', null, '2', '2', '1', '<p>22</p>', '10', '1426860646', '1426860646');
INSERT INTO `column` VALUES ('3', '0', '2', '模板', null, '3', '2', '1', '<p>222</p>', '10', '1426860665', '1426860665');
INSERT INTO `column` VALUES ('8', '1', '1', 'php', null, '1', '2', '1', '<p>aaa</p>', '10', '1426898856', '1426898856');
INSERT INTO `column` VALUES ('9', '1', '1', 'mysql', null, '3', '2', '1', '', '10', '1426898887', '1426898887');
INSERT INTO `column` VALUES ('10', '1', '1', '前端', null, '2', '1', '1', '<p>11</p>', '10', '1426898960', '1426898960');

-- ----------------------------
-- Table structure for `column_photo`
-- ----------------------------
DROP TABLE IF EXISTS `column_photo`;
CREATE TABLE `column_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `column_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `crate_by` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `column_photo_f` (`column_id`),
  CONSTRAINT `column_photo_f` FOREIGN KEY (`column_id`) REFERENCES `column` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of column_photo
-- ----------------------------

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1426859759');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1426859762');
INSERT INTO `migration` VALUES ('m150216_075514_create_news_table', '1426859762');
INSERT INTO `migration` VALUES ('m150307_084149_create_category_table', '1426859763');

-- ----------------------------
-- Table structure for `models`
-- ----------------------------
DROP TABLE IF EXISTS `models`;
CREATE TABLE `models` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL COMMENT '模型名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of models
-- ----------------------------
INSERT INTO `models` VALUES ('1', '文章');
INSERT INTO `models` VALUES ('2', '图片');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news
-- ----------------------------

-- ----------------------------
-- Table structure for `template`
-- ----------------------------
DROP TABLE IF EXISTS `template`;
CREATE TABLE `template` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `ename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of template
-- ----------------------------
INSERT INTO `template` VALUES ('1', '模板1', 'muban1');
INSERT INTO `template` VALUES ('2', '模板2', 'muban2');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '_XlvIAqRwx7SXcfQ4oiMpGQj-u3835-N', '$2y$13$AGVL.yQRJZajqtTaeuHP/.sWsRzfiGbUiwnjh8w8BUwuaC.7frRju', null, 'admin@qq.com', '10', '1426062672', '1426062672');
