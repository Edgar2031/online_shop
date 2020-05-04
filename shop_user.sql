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

 Date: 05/05/2020 02:58:00
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
) ENGINE = InnoDB AUTO_INCREMENT = 94 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cart
-- ----------------------------

-- ----------------------------
-- Table structure for feedback
-- ----------------------------
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES (25, 1, '545646', '2020-03-14 19:23:35');
INSERT INTO `order` VALUES (26, 1, '545646', '2020-03-14 19:29:14');
INSERT INTO `order` VALUES (29, 1, '9128.00', '2020-05-05 01:45:29');

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
  CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `order_details_ibfk_3` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of order_details
-- ----------------------------
INSERT INTO `order_details` VALUES (16, 25, 25, 1, 54654.00);
INSERT INTO `order_details` VALUES (17, 26, 25, 54644, 54654.00);
INSERT INTO `order_details` VALUES (21, 29, 30, 2, 4564.00);

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
) ENGINE = InnoDB AUTO_INCREMENT = 91 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of photo
-- ----------------------------
INSERT INTO `photo` VALUES (36, '1583155016figura_rendering_linii_izgiby_shary_fon_97240_1280x720.jpg', 25);
INSERT INTO `photo` VALUES (38, '1583155061planeta_kosmos_more_gorizont_103567_1280x720.jpg', 27);
INSERT INTO `photo` VALUES (71, '15881760281582612111a_dreamy_jump_1024x747.jpg', 30);
INSERT INTO `photo` VALUES (72, '15881760281582612111flare_lens_flare_800x600.jpg', 30);
INSERT INTO `photo` VALUES (73, '15881760281582726595a_dreamy_jump_1024x747.jpg', 30);
INSERT INTO `photo` VALUES (74, '15881760281582727651footer-logo.png', 30);
INSERT INTO `photo` VALUES (75, '1588596568fe3b252a4c0d1ead4ad620a1d7906cd9.jpg', 29);
INSERT INTO `photo` VALUES (85, '1588610329forma_zelenyy_ten_temnyy_85047_1280x720.jpg', 29);
INSERT INTO `photo` VALUES (87, '1588625355164573723-neon-wallpapers.jpg', 29);
INSERT INTO `photo` VALUES (88, '1588625355babochka_listia_krylia_134436_1280x720.jpg', 29);
INSERT INTO `photo` VALUES (89, '1588625355Balls-of-light-in-the-dark-creative-design_2560x1440.jpg', 29);

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
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status` int(255) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (25, 'yrtyrty', 1, 554.00, 'dfdgd fgdfgdfgdfgdfgdfgfdgdfgdf', 4, '2020-04-18 19:52:30', 'grocery', 0);
INSERT INTO `products` VALUES (27, 'tyuty', 453, 544.00, 'sadsdsd bev dfsddsfhgsdjgfjgdjhg djf g fgdsgfsdh gjds hf jsdgfhfjh', 4, '2020-04-18 19:52:31', 'electronics', 0);
INSERT INTO `products` VALUES (29, 'fgfgfdgdfgdf', 155, 2000.00, 'dfjdglkfjgfldkjgfdkglkdf gfjdg dfkg  dfnjg ndfjg njfdgnjd fjfd njdfkgd fjgndfjkgdjf gnkjd fngjdfkgfdgjfd jfdgn fdngjf gjdf gdfjfdglkdf', 1, '2020-05-05 00:49:14', 'another', 0);
INSERT INTO `products` VALUES (30, 'gdfgdfgdf', 643, 4564.00, 'dfgdfgfdgdfg', 2, '2020-05-05 01:45:29', 'another', 1);

-- ----------------------------
-- Table structure for review
-- ----------------------------
DROP TABLE IF EXISTS `review`;
CREATE TABLE `review`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `product_id` int(11) NULL DEFAULT NULL,
  `review` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `time` timestamp(0) NULL DEFAULT current_timestamp(0),
  `star` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  INDEX `product_id`(`product_id`) USING BTREE,
  CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `review_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 40 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of review
-- ----------------------------
INSERT INTO `review` VALUES (26, 1, 30, 'sdfsdfsdfsdfsdf dfsdfbhsdfhds', '2020-05-01 15:12:12', '5');
INSERT INTO `review` VALUES (29, 1, 30, 'rterterv xcrfgerterv xcgfreterter', '2020-05-01 18:44:18', '3');
INSERT INTO `review` VALUES (30, 1, 30, 'dfgdfgfdgdfgdfgdfgdfg', '2020-05-01 18:49:01', '4');
INSERT INTO `review` VALUES (31, 1, 30, 'dfgdfgfdgdfgdfgdfgdfg', '2020-05-01 18:50:18', '2');
INSERT INTO `review` VALUES (32, 1, 30, 'dfgdfgfdgdfgdfgdfgdfg', '2020-05-01 18:50:29', '1');
INSERT INTO `review` VALUES (33, 1, 30, 'dfgdfgfdgdfgdfgdfgdfg', '2020-05-01 18:51:46', '1');
INSERT INTO `review` VALUES (34, 1, 30, 'dfgdfgfdgdfgdfgdfgdfg', '2020-05-01 18:53:49', '1');
INSERT INTO `review` VALUES (36, 1, 27, 'hjhgjhjghr vrtryr yht tgy gtyh g  vhyt', '2020-05-01 22:29:25', '3');
INSERT INTO `review` VALUES (39, 1, 30, 'fdgdfgdfgdf dfdfdsfsdfsd', '2020-05-05 01:35:36', '4');

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
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  `online_offline` int(11) NULL DEFAULT 0,
  `block` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'ani', 'sargsyan', 'a@mail.ru', 22, '$2y$10$jAeNHzET4JTro8G/TdNvkuIAWiBS6TM.BtkpjhrFX./OeGlW31fXe', '1', '0', '0', 0, '0');
INSERT INTO `users` VALUES (2, 'ann', 'sargsyan', 's@mail.ru', 20, '$2y$10$N91Nv69akG7WjEdpmF7.WecVcEFpQNudbzo84FoWiZFRqEiDbTdtG', '0', '0', '0', 0, '0');
INSERT INTO `users` VALUES (4, 'armen', 'dfgdfgdfgdfgdf', 'z@mail.ru', 25, '$2y$10$c5EPoRWRP6O55Mb6QKoOdeW5t6kHOLZuP3pIlGnFAaxlN564of.ry', '0', '0', '0', 0, '0');
INSERT INTO `users` VALUES (26, 'ani', 'sargsyan', 'ed.arm.2000@gmail.com', 18, '$2y$10$kxLtNp3VLIEYWiXA5jUmbeUN4p8f4UmOyknyc9o.vYHZKJPoqsMo2', '1', 'R3z98', '1', 0, '0');

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
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of wishlist
-- ----------------------------
INSERT INTO `wishlist` VALUES (21, 30, 1);

SET FOREIGN_KEY_CHECKS = 1;
