/*
Navicat MySQL Data Transfer

Source Server         : Myconection
Source Server Version : 50724
Source Host           : localhost:3306
Source Database       : cursophp

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2020-03-21 09:11:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES ('1', 'Lacteos', 'Leche, yogourt y mas');
INSERT INTO `categorias` VALUES ('2', 'Embutidos', 'Quesos, mortadela y mas');
INSERT INTO `categorias` VALUES ('6', 'Bebidas', 'Gaseosas, aguas, cervezas');

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('2', 'Pera', 'Las peras');
INSERT INTO `productos` VALUES ('3', 'Uvas', 'Las uvas');
INSERT INTO `productos` VALUES ('5', 'Melocoton', 'Los melocotones');
INSERT INTO `productos` VALUES ('6', 'Berenjena', 'Las berenjenas');
INSERT INTO `productos` VALUES ('9', 'Limon', 'Los limones');
INSERT INTO `productos` VALUES ('10', 'Sandias', 'Las sandias');
INSERT INTO `productos` VALUES ('11', 'Guaba', 'Las guabas');
INSERT INTO `productos` VALUES ('12', 'Naranjas', 'Las naranjas');
INSERT INTO `productos` VALUES ('13', 'Platano', 'Los platanos');
INSERT INTO `productos` VALUES ('14', 'Vainilla', 'Las vainillas');
INSERT INTO `productos` VALUES ('15', 'Cereza', 'Las cerezas');
