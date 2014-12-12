/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : meetingman

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2014-12-12 13:56:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for meetings
-- ----------------------------
DROP TABLE IF EXISTS `meetings`;
CREATE TABLE `meetings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `meeting_room_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `gidai` varchar(1024) DEFAULT '',
  `gijiroku` varchar(10240) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of meetings
-- ----------------------------

-- ----------------------------
-- Table structure for meetings_members
-- ----------------------------
DROP TABLE IF EXISTS `meetings_members`;
CREATE TABLE `meetings_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meeting_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of meetings_members
-- ----------------------------

-- ----------------------------
-- Table structure for meeting_rooms
-- ----------------------------
DROP TABLE IF EXISTS `meeting_rooms`;
CREATE TABLE `meeting_rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of meeting_rooms
-- ----------------------------

-- ----------------------------
-- Table structure for members
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `delete_flg` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of members
-- ----------------------------
