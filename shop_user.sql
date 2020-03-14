/*
 Navicat Premium Data Transfer

 Source Server         : edgar
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : shop_user

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 14/03/2020 18:10:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `count` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `product_id`(`product_id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 39 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES (35, 21, 1, 1);
INSERT INTO `cart` VALUES (37, 27, 1, 1);
INSERT INTO `cart` VALUES (38, 19, 1, 1);

-- ----------------------------
-- Table structure for feedback
-- ----------------------------
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback`  (
  `id` int(11) NOT NULL,
  `product_id` int(11) NULL DEFAULT NULL,
  `order_id` int(11) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `feedback` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `time` timestamp(0) NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `product_id`(`product_id`) USING BTREE,
  INDEX `order_id`(`order_id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `feedback_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of feedback
-- ----------------------------

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `sum` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `datetime` datetime(0) NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES (1, 1, '545646', '2020-03-07 13:02:52');
INSERT INTO `order` VALUES (2, 1, '545646', '2020-03-07 13:16:04');
INSERT INTO `order` VALUES (3, 1, '545646', '2020-03-07 13:18:46');
INSERT INTO `order` VALUES (4, 1, '545646', '2020-03-07 13:19:37');
INSERT INTO `order` VALUES (5, 1, '545646', '2020-03-07 13:24:32');
INSERT INTO `order` VALUES (6, 1, '545646', '2020-03-07 13:26:25');
INSERT INTO `order` VALUES (7, 1, '545646', '2020-03-07 13:27:55');
INSERT INTO `order` VALUES (8, 1, '545646', '2020-03-12 18:13:34');
INSERT INTO `order` VALUES (9, 1, '545646', '2020-03-12 18:33:13');
INSERT INTO `order` VALUES (10, 1, '545646', '2020-03-12 18:34:15');

-- ----------------------------
-- Table structure for order_details
-- ----------------------------
DROP TABLE IF EXISTS `order_details`;
CREATE TABLE `order_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NULL DEFAULT NULL,
  `product_id` int(11) NULL DEFAULT NULL,
  `count` int(11) NULL DEFAULT NULL,
  `price` decimal(10, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `order_id`(`order_id`) USING BTREE,
  INDEX `product_id`(`product_id`) USING BTREE,
  CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of order_details
-- ----------------------------

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `sum` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `datetime` datetime(0) NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of orders
-- ----------------------------

-- ----------------------------
-- Table structure for photo
-- ----------------------------
DROP TABLE IF EXISTS `photo`;
CREATE TABLE `photo`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `product_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `product_id`(`product_id`) USING BTREE,
  CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 62 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of photo
-- ----------------------------
INSERT INTO `photo` VALUES (18, '15827316644_strokes_of_fun_900x400.jpg', 19);
INSERT INTO `photo` VALUES (19, '15827316644_strokes_of_fun_900x500.jpg', 19);
INSERT INTO `photo` VALUES (20, '1582731664a_turn_800x600.jpg', 19);
INSERT INTO `photo` VALUES (21, '1582731664afro_50x50.jpg', 19);
INSERT INTO `photo` VALUES (23, '15827316644_strokes_of_fun_900x400.jpg', 21);
INSERT INTO `photo` VALUES (24, '15827318734_strokes_of_fun_70x70.jpg', 22);
INSERT INTO `photo` VALUES (25, '15827318734_strokes_of_fun_800x600.jpg', 22);
INSERT INTO `photo` VALUES (26, '15827318734_strokes_of_fun_1200x480.jpg', 22);
INSERT INTO `photo` VALUES (27, '1582731873a_dreamy_jump_1024x747.jpg', 22);
INSERT INTO `photo` VALUES (28, '1582731873afro_800x600.jpg', 22);
INSERT INTO `photo` VALUES (29, '1582731873amaze_50x50.jpg', 22);
INSERT INTO `photo` VALUES (30, '1582731873ana_29_50x50.jpg', 22);
INSERT INTO `photo` VALUES (31, '1582731873ana_29_800x600.jpg', 22);
INSERT INTO `photo` VALUES (34, '15827316644_strokes_of_fun_900x400.jpg', 23);
INSERT INTO `photo` VALUES (35, '15827316644_strokes_of_fun_900x400.jpg', 24);
INSERT INTO `photo` VALUES (36, '1583155016figura_rendering_linii_izgiby_shary_fon_97240_1280x720.jpg', 25);
INSERT INTO `photo` VALUES (37, '1583155044planeta_meteorit_asteroid_kometa_vzryv_kosmos_101967_1280x720.jpg', 26);
INSERT INTO `photo` VALUES (38, '1583155061planeta_kosmos_more_gorizont_103567_1280x720.jpg', 27);
INSERT INTO `photo` VALUES (39, '1583935656znaki_voprosa_figurki_3d_112755_1280x720.jpg', 28);

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `count` int(11) NULL DEFAULT NULL,
  `price` decimal(10, 2) NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `time` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (19, 'dsfsd', 546456, 140.00, 'dfgfdgfd', 4, '2020-03-01 05:31:58');
INSERT INTO `products` VALUES (21, 'aaaaa', 4, 54545.00, 'sdfklsd;fksdf d fdsdfsdlkfsdjfklsdjflksjdfsdfsdfsdfsdfsdfdfs', 4, '2020-03-02 08:21:23');
INSERT INTO `products` VALUES (22, 'gfhgfhgf', 65, 455.00, 'sdafsdf sdjfsdlkjflds kjkfd jfkldfl sdfkjsdlfjsdfjsdkjfldks lfj sldk jfds lksdj flsjfdjfsdjlf;sdfwerweriewhrwelr;j  ', 2, '2020-03-03 00:48:46');
INSERT INTO `products` VALUES (23, 'tyutyuty', 5645, 54654.00, 'sfdsfsdfsd f dsfdsfsdf sd fsdfsdfsdfdfd', 2, '2020-03-02 05:18:18');
INSERT INTO `products` VALUES (24, 'dgfdg', 6, 45654.00, 'dfsdfdsfsdfdsfd', 2, '2020-03-02 08:20:55');
INSERT INTO `products` VALUES (25, 'yrtyrty', 54654, 54654.00, 'dfdgd fgdfgdfgdfgdfgdfgfdgdfgdf', 4, '2020-03-02 05:18:32');
INSERT INTO `products` VALUES (26, 'tyrtyrt', 200, 200.00, 'rtyrtyr', 1, '2020-03-11 19:37:42');
INSERT INTO `products` VALUES (27, 'tyuty', 455, 54654.00, 'sadsdsd bev dfsddsfhgsdjgfjgdjhg djf g fgdsgfsdh gjds hf jsdgfhfjh', 4, '2020-03-02 05:18:23');
INSERT INTO `products` VALUES (28, 'dsfsd', 454, 56.00, 'erwerwer erwer werwer er ewrwerwerwe  rerwe rr werwerfe', 1, '2020-03-11 18:07:36');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `surname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `age` int(11) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `active` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'ani', 'sargsyan', 'a@mail.ru', 22, '$2y$10$jAeNHzET4JTro8G/TdNvkuIAWiBS6TM.BtkpjhrFX./OeGlW31fXe', '1', '0');
INSERT INTO `users` VALUES (2, 'ann', 'sargsyan', 's@mail.ru', 20, '$2y$10$N91Nv69akG7WjEdpmF7.WecVcEFpQNudbzo84FoWiZFRqEiDbTdtG', '0', '0');
INSERT INTO `users` VALUES (4, 'armen', 'dfgdfgdfgdfgdf', 'z@mail.ru', 25, '$2y$10$c5EPoRWRP6O55Mb6QKoOdeW5t6kHOLZuP3pIlGnFAaxlN564of.ry', '0', '0');
INSERT INTO `users` VALUES (26, 'ani', 'sargsyan', 'ed.arm.2000@gmail.com', 18, '$2y$10$kxLtNp3VLIEYWiXA5jUmbeUN4p8f4UmOyknyc9o.vYHZKJPoqsMo2', '1', 'R3z98');

-- ----------------------------
-- Table structure for wishlist
-- ----------------------------
DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE `wishlist`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `product_id`(`product_id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of wishlist
-- ----------------------------
INSERT INTO `wishlist` VALUES (13, 23, 2);
INSERT INTO `wishlist` VALUES (15, 24, 1);
INSERT INTO `wishlist` VALUES (16, 21, 1);
INSERT INTO `wishlist` VALUES (17, 22, 1);

SET FOREIGN_KEY_CHECKS = 1;
