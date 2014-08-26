/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : vdate

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2014-08-26 14:11:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin_actions`
-- ----------------------------
DROP TABLE IF EXISTS `admin_actions`;
CREATE TABLE `admin_actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `controler_id` int(11) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_actions
-- ----------------------------

-- ----------------------------
-- Table structure for `admin_cotrollers`
-- ----------------------------
DROP TABLE IF EXISTS `admin_cotrollers`;
CREATE TABLE `admin_cotrollers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_cotrollers
-- ----------------------------

-- ----------------------------
-- Table structure for `agency`
-- ----------------------------
DROP TABLE IF EXISTS `agency`;
CREATE TABLE `agency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `director` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `working_time` varchar(255) DEFAULT NULL,
  `signed_contract` varchar(255) DEFAULT NULL,
  `certificate` varchar(255) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `beneficiary_name` varchar(255) DEFAULT NULL,
  `beneficiary_account` varchar(255) DEFAULT NULL,
  `beneficiary_address` varchar(255) DEFAULT NULL,
  `beneficiary_phone` varchar(255) DEFAULT NULL,
  `beneficiary_bank_name` varchar(255) DEFAULT NULL,
  `aba_swift_national_id` varchar(255) DEFAULT NULL,
  `beneficiary_bank_address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `bank_address` varchar(255) DEFAULT NULL,
  `bank_city` varchar(255) DEFAULT NULL,
  `bank_country` varchar(255) DEFAULT NULL,
  `bank_swift_code` varchar(255) DEFAULT NULL,
  `comments` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of agency
-- ----------------------------
INSERT INTO `agency` VALUES ('4', 'Agency name 1', 'agency director 1', 'agency contact person 1', 'address 1', 'agency contact phone 1', 'agency skype 1', 'email@email.com', 'agency working time 1', 'laguanya4hwxnmnkji5ok3902irc4gzn.jpg', 'penwv5bvi7b9jwxrisiaqy4qccccee9x.jpg', 'gojfzsaanr37a57lliqrbs7fkyis7lox.jpg', 'bemeficiary name 1', 'beneficiary account 1', 'beneficiary address 1', 'beneficiary phone 1', 'beneficiary bank name 1', 'aba or swift or national id 1', 'beneficiary bank address 1', 'country 1', 'beneficiary Correspondent Bank Name 1', 'beneficiary correspondent bank address 1', 'beneficiary correspondent bank city 1', 'benneficiary correspondent bank country 1', 'benneficiary correspondent bank swift code 1', 'comments', '1407742177', '1408605478', '3');
INSERT INTO `agency` VALUES ('5', 'Agency name 2', 'agency director 2', 'agency contact person 2', 'adress 2', 'agency contact phone 2', 'agency skype 2', 'mail@mail.com', 'agency working time 2', null, null, null, 'bemeficiary name 2', 'beneficiary account or IBAN 2', 'beneficiary address 2', 'beneficiary phone 2', 'beneficiary bank name 2', 'aba or swift or national id 2', 'beneficiary bank address 2', 'country 2', 'beneficiary Correspondent Bank Name 2', 'beneficiary correspondent bank address 2', 'beneficiary correspondent bank city 2', 'benneficiary correspondent bank country 2', 'benneficiary correspondent bank swift code 2', 'comments 2', '1407751961', '1407753650', '4');

-- ----------------------------
-- Table structure for `config`
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `group_name` varchar(128) NOT NULL DEFAULT 'site',
  `config_key` varchar(128) NOT NULL,
  `config_value` text NOT NULL,
  PRIMARY KEY (`group_name`,`config_key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('site', 'admin_email', 's:12:\"test@test.ru\";');
INSERT INTO `config` VALUES ('site', 'site_name', 's:5:\"vdate\";');
INSERT INTO `config` VALUES ('site', 'facebook', 's:0:\"\";');
INSERT INTO `config` VALUES ('site', 'twitter', 's:0:\"\";');

-- ----------------------------
-- Table structure for `favorits`
-- ----------------------------
DROP TABLE IF EXISTS `favorits`;
CREATE TABLE `favorits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_who` int(11) DEFAULT NULL,
  `id_favorit` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of favorits
-- ----------------------------
INSERT INTO `favorits` VALUES ('3', '8', '6', '1408798125', '1');
INSERT INTO `favorits` VALUES ('8', '6', '8', '1408955688', '0');
INSERT INTO `favorits` VALUES ('10', '11', '6', '1408960440', '1');
INSERT INTO `favorits` VALUES ('11', '11', '19', '1408960625', '0');
INSERT INTO `favorits` VALUES ('12', '13', '6', '1408960681', '1');
INSERT INTO `favorits` VALUES ('17', '8', '5', '1408971057', '0');
INSERT INTO `favorits` VALUES ('18', '8', '15', '1408971066', '0');
INSERT INTO `favorits` VALUES ('19', '6', '11', '1409029709', '0');
INSERT INTO `favorits` VALUES ('20', '6', '14', '1409029721', '0');

-- ----------------------------
-- Table structure for `flirts`
-- ----------------------------
DROP TABLE IF EXISTS `flirts`;
CREATE TABLE `flirts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_who` int(11) DEFAULT NULL,
  `id_to` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of flirts
-- ----------------------------

-- ----------------------------
-- Table structure for `gifts`
-- ----------------------------
DROP TABLE IF EXISTS `gifts`;
CREATE TABLE `gifts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gifts
-- ----------------------------
INSERT INTO `gifts` VALUES ('1', '2', '100', '1', '1', '1407405024', '1408618589', 'ot8r2qqdbh9jqczfkkfk53gotf06rpzn.jpg', null);
INSERT INTO `gifts` VALUES ('2', '2', '150', '1', '2', '1407405125', '1408618610', 'wivzml5dboxpxaagdv26waesxs2u8fkz.jpg', null);
INSERT INTO `gifts` VALUES ('3', '3', '400', '1', '10', '1407405486', '1408618726', 'qhvrv0efdeqkzydztlp14pmystyqjck4.jpg', null);
INSERT INTO `gifts` VALUES ('4', '10', '300', '1', '7', '1407405561', '1408618675', 'fx7x43ve3gayna778ag2ldwp290mvmpc.jpg', null);
INSERT INTO `gifts` VALUES ('5', '10', '600', '1', '8', '1407405620', '1408618686', '45lmps2scssukc6iusadh6m6jeewmowh.jpg', null);
INSERT INTO `gifts` VALUES ('6', '10', '900', '1', '9', '1407405656', '1408618698', 'idmua6iwyzgkj5ax6zcuhovkueq2zltn.jpg', null);
INSERT INTO `gifts` VALUES ('7', '2', '250', '1', '3', '1407405764', '1408618624', 'k158pqizhcccntuw5ojslmvenhbeuhw1.jpg', null);
INSERT INTO `gifts` VALUES ('8', '2', '300', '1', '4', '1407405801', '1408618636', 'x9ydzl2upe5tnzbhjvtf80hgoagdsl0z.jpg', null);
INSERT INTO `gifts` VALUES ('9', '2', '500', '1', '5', '1407405830', '1408618649', 'xbjz8zrkfv4mjaw8g47t8hvgco8dw5ww.jpg', null);
INSERT INTO `gifts` VALUES ('10', '2', '600', '1', '6', '1407405865', '1408618661', 'm6bcieaessgx8eyoaopxxgn8hnjfs5n3.jpg', null);
INSERT INTO `gifts` VALUES ('11', '11', '50', '1', '10', '1407486061', '1408618712', '5mq2t6yzteva56yqxkuvlqr9kfy9tmww.jpg', null);

-- ----------------------------
-- Table structure for `gifts_languages`
-- ----------------------------
DROP TABLE IF EXISTS `gifts_languages`;
CREATE TABLE `gifts_languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gift_id` int(11) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gifts_languages
-- ----------------------------
INSERT INTO `gifts_languages` VALUES ('1', '1', 'en', '3 roses set');
INSERT INTO `gifts_languages` VALUES ('2', '1', 'ru', 'Букет из 3 роз');
INSERT INTO `gifts_languages` VALUES ('3', '2', 'en', '5 roses set');
INSERT INTO `gifts_languages` VALUES ('4', '2', 'ru', 'Букет из 5 роз');
INSERT INTO `gifts_languages` VALUES ('5', '3', 'en', 'Basket of orchids');
INSERT INTO `gifts_languages` VALUES ('6', '3', 'ru', 'Корзина с орхидеями');
INSERT INTO `gifts_languages` VALUES ('7', '4', 'en', 'Small bouquet');
INSERT INTO `gifts_languages` VALUES ('8', '4', 'ru', 'Небольшой букет');
INSERT INTO `gifts_languages` VALUES ('9', '5', 'en', 'Medium bouquet');
INSERT INTO `gifts_languages` VALUES ('10', '5', 'ru', 'Средний букет');
INSERT INTO `gifts_languages` VALUES ('11', '6', 'en', 'Big bouquet');
INSERT INTO `gifts_languages` VALUES ('12', '6', 'ru', 'Большой букет');
INSERT INTO `gifts_languages` VALUES ('13', '7', 'en', '7 roeses set');
INSERT INTO `gifts_languages` VALUES ('14', '7', 'ru', 'Букет из 7 роз');
INSERT INTO `gifts_languages` VALUES ('15', '8', 'en', '9 roses set');
INSERT INTO `gifts_languages` VALUES ('16', '8', 'ru', 'Букет из 9 роз');
INSERT INTO `gifts_languages` VALUES ('17', '9', 'en', '11 roses set');
INSERT INTO `gifts_languages` VALUES ('18', '9', 'ru', 'Букет из 11 роз');
INSERT INTO `gifts_languages` VALUES ('19', '10', 'en', '25 roses set');
INSERT INTO `gifts_languages` VALUES ('20', '10', 'ru', 'Букет из 25 роз');
INSERT INTO `gifts_languages` VALUES ('21', '11', 'en', 'Small Choclate Box');
INSERT INTO `gifts_languages` VALUES ('22', '11', 'ru', 'Маленькая коробочка шоколода');

-- ----------------------------
-- Table structure for `gift_groups`
-- ----------------------------
DROP TABLE IF EXISTS `gift_groups`;
CREATE TABLE `gift_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  `sort` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gift_groups
-- ----------------------------
INSERT INTO `gift_groups` VALUES ('1', '0', '1', '1', null, '1407324548', '1407332896');
INSERT INTO `gift_groups` VALUES ('2', '1', '1', null, null, '1407325477', '1407332808');
INSERT INTO `gift_groups` VALUES ('3', '1', '1', null, null, '1407325661', '1407937522');
INSERT INTO `gift_groups` VALUES ('6', '0', '1', '3', null, '1407326323', '1407326327');
INSERT INTO `gift_groups` VALUES ('7', '0', '1', '4', null, '1407326428', null);
INSERT INTO `gift_groups` VALUES ('8', '0', '1', '5', null, '1407326471', null);
INSERT INTO `gift_groups` VALUES ('9', '0', '1', '6', null, '1407326501', null);
INSERT INTO `gift_groups` VALUES ('10', '1', '1', null, null, '1407332422', null);
INSERT INTO `gift_groups` VALUES ('11', '0', '1', '2', null, '1407488357', null);

-- ----------------------------
-- Table structure for `gift_groups_languages`
-- ----------------------------
DROP TABLE IF EXISTS `gift_groups_languages`;
CREATE TABLE `gift_groups_languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gift_groups_language` (`group_id`),
  CONSTRAINT `gift_groups_language` FOREIGN KEY (`group_id`) REFERENCES `gift_groups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gift_groups_languages
-- ----------------------------
INSERT INTO `gift_groups_languages` VALUES ('1', '1', 'en', 'Flowers');
INSERT INTO `gift_groups_languages` VALUES ('2', '1', 'ru', 'Цветы');
INSERT INTO `gift_groups_languages` VALUES ('3', '2', 'en', 'Roses');
INSERT INTO `gift_groups_languages` VALUES ('4', '2', 'ru', 'Розы');
INSERT INTO `gift_groups_languages` VALUES ('5', '3', 'en', 'Orhids (in a pot)');
INSERT INTO `gift_groups_languages` VALUES ('6', '3', 'ru', 'Орхидеи');
INSERT INTO `gift_groups_languages` VALUES ('11', '6', 'en', 'Toys');
INSERT INTO `gift_groups_languages` VALUES ('12', '6', 'ru', 'Игрушки');
INSERT INTO `gift_groups_languages` VALUES ('13', '7', 'en', 'Perfumes');
INSERT INTO `gift_groups_languages` VALUES ('14', '7', 'ru', 'Парфюмерия');
INSERT INTO `gift_groups_languages` VALUES ('15', '8', 'en', 'Digital stuff');
INSERT INTO `gift_groups_languages` VALUES ('16', '8', 'ru', 'Цифровая техника');
INSERT INTO `gift_groups_languages` VALUES ('17', '9', 'en', 'Other');
INSERT INTO `gift_groups_languages` VALUES ('18', '9', 'ru', 'Другое');
INSERT INTO `gift_groups_languages` VALUES ('19', '10', 'en', 'Herberas');
INSERT INTO `gift_groups_languages` VALUES ('20', '10', 'ru', 'Герберы');
INSERT INTO `gift_groups_languages` VALUES ('21', '11', 'en', 'Food');
INSERT INTO `gift_groups_languages` VALUES ('22', '11', 'ru', 'Еда');

-- ----------------------------
-- Table structure for `girls`
-- ----------------------------
DROP TABLE IF EXISTS `girls`;
CREATE TABLE `girls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `serie_passport` varchar(10) DEFAULT NULL,
  `number_passport` varchar(20) DEFAULT NULL,
  `passport_photo` varchar(255) DEFAULT NULL,
  `girl_with_passport` varchar(255) DEFAULT NULL,
  `birthday` int(11) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `eyes` int(11) DEFAULT NULL,
  `hair` int(11) DEFAULT NULL,
  `place_work` varchar(255) DEFAULT NULL,
  `education` int(11) DEFAULT NULL,
  `religion` int(11) DEFAULT NULL,
  `marital_status` int(11) DEFAULT NULL,
  `smoking` int(11) DEFAULT NULL,
  `drinking` int(11) DEFAULT NULL,
  `children` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `hobbies` text,
  `about` text,
  `relationships` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `agency_id` int(11) DEFAULT NULL,
  `video` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of girls
-- ----------------------------
INSERT INTO `girls` VALUES ('1', '5', 'Anna', 'lastname1', 'email1@email.com', 'FL', '654235', 'bqh9nc95gsdq5p7eytmox2ytosqanibo.jpg', 'k2y8xfqjg1jefung7qey7snmauk6lc2f.jpg', '813362400', '', '', 'city1', 'address 1', '3', '3', '2', '7', 'place of work1', '27', '22', '19', '11', '8', '2', '6545646456', '<p>hobbies1</p>', '<p>about me1</p>', '<p>perfect relationships</p>', '1407762858', '1408537132', '4', '');
INSERT INTO `girls` VALUES ('2', '6', 'Victoria', 'last name 2', 'email2@email.com', 'LP', '987657', 'bsvks8rhpvkvg8221ubkrfub3mr78stx.jpg', 'sh2xee4ajdovs3gabwdqhnmvd8wod2x5.jpg', '650412000', '', '', 'city 2', 'home address 2', '3', '2', '2', '6', 'place of work 2', '27', '22', '20', '11', '8', 'none', '987654', '<p>hobbies 2</p>', '<p>about me 2</p>', '<p>perfect relationships 2</p>', '1407820104', '1408601859', '5', 'video 2');
INSERT INTO `girls` VALUES ('3', '15', 'Antonina', 'last name girl 3', 'emailgirl3@email.com', '', '', null, null, '1408537261', '', '', 'city3', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '', '', '', '', '', '1408537261', null, '4', '');
INSERT INTO `girls` VALUES ('4', '16', 'Zlata', 'last name girl 4', 'emailgirl4@email.com', '', '', null, null, '1408482000', '', '', 'city4', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '', '', '', '', '', '1408537305', '1408537473', '5', '');
INSERT INTO `girls` VALUES ('5', '17', 'Kateryna', 'last name girl 5', 'emailgirl5@email.com', '', '', null, null, '1408482000', '', '', 'city5', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '', '', '', '', '', '1408537380', '1408539007', '5', '');
INSERT INTO `girls` VALUES ('6', '18', 'Nataly', 'last name girl 6', 'emailgirl6@email.com', '', '', null, null, '1408482000', '', '', 'city6', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '', '', '', '', '', '1408537439', '1408537446', '4', '');
INSERT INTO `girls` VALUES ('7', '19', 'Angela', 'last name girl 7', 'emailgirl7@email.com', '', '', null, null, '1408482000', '', '', 'city7', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '', '', '', '', '', '1408538486', '1408605242', '5', '');

-- ----------------------------
-- Table structure for `height`
-- ----------------------------
DROP TABLE IF EXISTS `height`;
CREATE TABLE `height` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zna` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of height
-- ----------------------------
INSERT INTO `height` VALUES ('3', '170', '1', null, '1407480277', null);
INSERT INTO `height` VALUES ('4', '180', '1', null, '1407480326', null);
INSERT INTO `height` VALUES ('5', '160', '0', null, '1407481052', null);
INSERT INTO `height` VALUES ('6', '150', '0', null, '1407481057', null);

-- ----------------------------
-- Table structure for `infos`
-- ----------------------------
DROP TABLE IF EXISTS `infos`;
CREATE TABLE `infos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(32) NOT NULL,
  `time` double(7,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `created_at` int(14) DEFAULT NULL,
  `updated_at` int(14) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of infos
-- ----------------------------
INSERT INTO `infos` VALUES ('1', 'message_add_contact', 'Message after contact form', 'alert', '2.50', '1', '0', '1407828430', '1407829908');
INSERT INTO `infos` VALUES ('2', 'after_register', 'Message after registration man at site', 'alert', '2.50', '1', '0', '1408350398', null);
INSERT INTO `infos` VALUES ('3', 'sign_in_error', 'Authorization error', 'error', '2.50', '1', '0', '1408602852', null);
INSERT INTO `infos` VALUES ('4', 'sign_in_success', 'Message after authorization', 'success', '2.50', '1', '0', '1408603050', null);
INSERT INTO `infos` VALUES ('5', 'blocked_account', 'Message if accoutn is blocked', 'warning', '2.50', '1', '0', '1408603258', null);
INSERT INTO `infos` VALUES ('6', 'logout', 'After log out', 'alert', '2.50', '1', '0', '1408606376', '1408606381');
INSERT INTO `infos` VALUES ('7', 'success_password_change', 'Password is changed', 'success', '2.50', '1', '0', '1408626939', null);
INSERT INTO `infos` VALUES ('8', 'old_password_error', 'Old password is wrong', 'error', '2.50', '1', '0', '1408627020', null);
INSERT INTO `infos` VALUES ('9', 'new_password_error', 'New password is wrong', 'error', '2.50', '1', '0', '1408627716', '1408629521');
INSERT INTO `infos` VALUES ('10', 'user_in_favorites', 'User is already in your favorites', 'warning', '2.50', '1', '0', '1408797028', null);
INSERT INTO `infos` VALUES ('11', 'delete_girl_from_favorites', 'Delete girl from favorites', 'success', '2.50', '1', '0', '1408952991', null);
INSERT INTO `infos` VALUES ('12', 'delete_man_from_favorites', 'Dlete man from favorites', 'success', '2.50', '1', '0', '1408970074', null);
INSERT INTO `infos` VALUES ('13', 'data_saved', 'Message after saving data', 'success', '2.50', '1', '0', '1408978118', null);
INSERT INTO `infos` VALUES ('14', 'order_gifts_flowers', 'Message aftre order gifts and flowers', 'success', '2.50', '1', '0', '1409034958', null);
INSERT INTO `infos` VALUES ('15', 'error_order_gifts_and_flowers', 'Message if man have not enough money (order gifts)', 'alert', '2.50', '1', '0', '1409050729', null);

-- ----------------------------
-- Table structure for `infos_languages`
-- ----------------------------
DROP TABLE IF EXISTS `infos_languages`;
CREATE TABLE `infos_languages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `info_id` int(11) unsigned NOT NULL,
  `language` varchar(32) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `info_id` (`info_id`),
  CONSTRAINT `infos_languages_ibfk_1` FOREIGN KEY (`info_id`) REFERENCES `infos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of infos_languages
-- ----------------------------
INSERT INTO `infos_languages` VALUES ('1', '1', 'en', 'Thanks for message!');
INSERT INTO `infos_languages` VALUES ('2', '1', 'ru', 'Благодарим за сообщение!');
INSERT INTO `infos_languages` VALUES ('3', '2', 'en', 'Thank you for registration at site');
INSERT INTO `infos_languages` VALUES ('4', '2', 'ru', 'Благодарим Вас за регистрацию на нашем сайте');
INSERT INTO `infos_languages` VALUES ('5', '3', 'en', 'This lodin or password does not exist!');
INSERT INTO `infos_languages` VALUES ('6', '3', 'ru', 'Такого логина или пароля не существует!');
INSERT INTO `infos_languages` VALUES ('7', '4', 'en', 'You have successfully logged in!');
INSERT INTO `infos_languages` VALUES ('8', '4', 'ru', 'Вы успешно вошли на сайт!');
INSERT INTO `infos_languages` VALUES ('9', '5', 'en', 'Your account is blocked!');
INSERT INTO `infos_languages` VALUES ('10', '5', 'ru', 'Ваш аккаунт заблокирован!');
INSERT INTO `infos_languages` VALUES ('11', '6', 'en', 'Come back!');
INSERT INTO `infos_languages` VALUES ('12', '6', 'ru', 'Возвращайтесь еще!');
INSERT INTO `infos_languages` VALUES ('13', '7', 'en', 'Password is changed!');
INSERT INTO `infos_languages` VALUES ('14', '7', 'ru', 'Пароль изменен!');
INSERT INTO `infos_languages` VALUES ('15', '8', 'en', 'Old password is wrong!');
INSERT INTO `infos_languages` VALUES ('16', '8', 'ru', 'Старый пароль введен неверно!');
INSERT INTO `infos_languages` VALUES ('17', '9', 'en', 'New password is wrong!');
INSERT INTO `infos_languages` VALUES ('18', '9', 'ru', 'Новый пароль введен неверно!');
INSERT INTO `infos_languages` VALUES ('19', '10', 'en', 'User is already in your favorites!');
INSERT INTO `infos_languages` VALUES ('20', '10', 'ru', '');
INSERT INTO `infos_languages` VALUES ('21', '11', 'en', 'Girl is deleted from favorites!');
INSERT INTO `infos_languages` VALUES ('22', '11', 'ru', '');
INSERT INTO `infos_languages` VALUES ('23', '12', 'en', 'Man was deleted from favorites!');
INSERT INTO `infos_languages` VALUES ('24', '12', 'ru', '');
INSERT INTO `infos_languages` VALUES ('25', '13', 'en', 'Data saved sucessfully!');
INSERT INTO `infos_languages` VALUES ('26', '13', 'ru', '');
INSERT INTO `infos_languages` VALUES ('27', '14', 'en', 'Your order is accepted!');
INSERT INTO `infos_languages` VALUES ('28', '14', 'ru', '');
INSERT INTO `infos_languages` VALUES ('29', '15', 'en', 'You have not enough money!');
INSERT INTO `infos_languages` VALUES ('30', '15', 'ru', '');

-- ----------------------------
-- Table structure for `item_order_gifts`
-- ----------------------------
DROP TABLE IF EXISTS `item_order_gifts`;
CREATE TABLE `item_order_gifts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `gift_id` int(11) DEFAULT NULL,
  `cost` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of item_order_gifts
-- ----------------------------
INSERT INTO `item_order_gifts` VALUES ('1', '1', '6', '900');
INSERT INTO `item_order_gifts` VALUES ('2', '1', '11', '50');
INSERT INTO `item_order_gifts` VALUES ('4', '3', '3', '400');

-- ----------------------------
-- Table structure for `languages`
-- ----------------------------
DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `created_at` int(14) DEFAULT NULL,
  `updated_at` int(14) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of languages
-- ----------------------------
INSERT INTO `languages` VALUES ('1', 'en', 'English', '1', '1', '1', null, '1407414209');
INSERT INTO `languages` VALUES ('2', 'ru', 'Русский', '0', '1', '2', null, '1407412730');

-- ----------------------------
-- Table structure for `letters`
-- ----------------------------
DROP TABLE IF EXISTS `letters`;
CREATE TABLE `letters` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `fields_list` text NOT NULL,
  `key` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `created_at` int(14) DEFAULT NULL,
  `updated_at` int(14) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of letters
-- ----------------------------
INSERT INTO `letters` VALUES ('1', 'Letter to admin from contact form', '{{site}} - Site name\n{{name}} - First name, Last name or Login\n{{email}} - contact E-mail\n{{phone}} - contact phone\n{{message}} - message', 'contact_admin_mail', '1', '0', '1407826349', '1407851962');
INSERT INTO `letters` VALUES ('2', 'Letter to admin after agency registration', '{{site}} - Site name\n{{agency}} - Agency name\r\n{{username}} - Login of agency\n', 'mail_admin_agency_registration', '1', '0', '1407848139', '1407850511');
INSERT INTO `letters` VALUES ('3', 'Letter to agency after agency registration', '{{site}} - Site name\n{{agency}} - Agency name\n{{username}} - Login', 'mail_agency_registration', '1', '0', '1407850350', null);
INSERT INTO `letters` VALUES ('4', 'Letter to admin after registration of girl', '{{site}} - Site name\n{{girl}} - Girl name\n{{agency}} - Agency name', 'mail_admin_registration_girl', '1', '0', '1407851695', null);
INSERT INTO `letters` VALUES ('5', 'Letter to agency after registration of girl', '{{site}} - Site name\n{{girl}} - Girl name\n{{agency}} - Agency name', 'mail_agency_registration_girl', '1', '0', '1407851822', null);
INSERT INTO `letters` VALUES ('6', 'Letter to girl after registration', '{{site}} - Site name\n{{girl}} - Girl name\n{{agency}} - Agency name', 'mail_girl_registration_girl', '1', '0', '1407851947', null);
INSERT INTO `letters` VALUES ('7', 'Letter to admin after registration of man', '{{site}} - Site name\n{{man}} - Man name', 'mail_admin_registration_man', '1', '0', '1408014153', null);
INSERT INTO `letters` VALUES ('8', 'Letter to man after registration at site', '{{site}} - Site name\n{{man}} - Man name', 'mail_man_registration_man', '1', '0', '1408014248', null);
INSERT INTO `letters` VALUES ('9', 'letter to user from admin', '{{site}} - Site name\n{{subject}} - Subject of letter\n{{text}} - text of letter', 'mail_man_letter_from_admin', '1', '0', '1408370159', null);
INSERT INTO `letters` VALUES ('10', 'Letter after adding to favorite', '{{site}} - Site name\n{{favorite_name}} - Name of favorite\n{{sender_name}} - Name of user who add to favorite', 'mail_adding_to_favorite', '1', '0', '1408783060', '1408794004');
INSERT INTO `letters` VALUES ('11', 'Letter to man after order gifts and flowers', '{{site}} - Site name\n{{girl}} - Girl\n{{order_number}} - Number of order\n{{order_content}} - List of gifts\n{{close_link}} - Link for closing the order', 'mail_man_order_gifts', '1', '0', '1409037155', null);
INSERT INTO `letters` VALUES ('12', 'Letter to admin after order a gifts', '{{site}} - Site name\n{{man}} - Man\n{{girl}} - Girl\n{{order_number}} - Number of order\n{{order_content}} - ordered gifts and flowers', 'mail_admin_order_gifts', '1', '0', '1409037530', null);

-- ----------------------------
-- Table structure for `letters_languages`
-- ----------------------------
DROP TABLE IF EXISTS `letters_languages`;
CREATE TABLE `letters_languages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `letter_id` int(11) unsigned NOT NULL,
  `language` varchar(32) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `letters_languages` (`letter_id`),
  CONSTRAINT `letters_languages_ibfk_1` FOREIGN KEY (`letter_id`) REFERENCES `letters` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of letters_languages
-- ----------------------------
INSERT INTO `letters_languages` VALUES ('1', '1', 'en', 'Contact form {{site}}', '<p>Message from contact form of the site {{site}} :</p>\n<p><strong>Name or Login</strong>: {{name}};</p>\n<p><strong>E-mail</strong>: {{email}};</p>\n<p><strong>Phone</strong>: {{phone}};</p>\n<p><strong>Message</strong>: {{message}}</p>');
INSERT INTO `letters_languages` VALUES ('2', '1', 'ru', 'Письмо с контактной формы сайта {{site}}', '<p>С контактной формы сайта {{site}} было получено следующее сообщение:</p>\n<p><strong>Имя или Логин</strong>: {{name}};</p>\n<p><strong>E-mail</strong>: {{email}};</p>\n<p><strong>Телефон</strong>: {{phone}};</p>\n<p><strong>Сообщение</strong>: {{message}}</p>');
INSERT INTO `letters_languages` VALUES ('3', '2', 'en', 'Registration agency at site {{site}}', '<p>Registration agency {{agency}} at site {{site}}</p>\n<p>&nbsp;</p>\n<p>Data for enter:</p>\n<p>Login: {{username}}</p>');
INSERT INTO `letters_languages` VALUES ('4', '2', 'ru', '', '');
INSERT INTO `letters_languages` VALUES ('5', '3', 'en', 'Registration agency at {{site}}', '<p>Registration agency {{agency}} at site {{site}}</p>');
INSERT INTO `letters_languages` VALUES ('6', '3', 'ru', '', '');
INSERT INTO `letters_languages` VALUES ('7', '4', 'en', 'Registraton girl at site {{site}}', '<p>Registration girl {{girl}} of agency {{agency}} at site {{site}}</p>');
INSERT INTO `letters_languages` VALUES ('8', '4', 'ru', '', '');
INSERT INTO `letters_languages` VALUES ('9', '5', 'en', 'Registration girl at site {{site}}', '<p>Registration girl {{girl}} of agency {{agency}} at site {{site}}</p>');
INSERT INTO `letters_languages` VALUES ('10', '5', 'ru', '', '');
INSERT INTO `letters_languages` VALUES ('11', '6', 'en', 'Registration girl at site {{site}}', '<p>Registration girl {{girl}} of agency {{agency}} at site {{site}}</p>');
INSERT INTO `letters_languages` VALUES ('12', '6', 'ru', '', '');
INSERT INTO `letters_languages` VALUES ('13', '7', 'en', 'Registration man at site {{site}}', '<p>Registration man {{man}} at site {{site}}</p>');
INSERT INTO `letters_languages` VALUES ('14', '7', 'ru', '', '');
INSERT INTO `letters_languages` VALUES ('15', '8', 'en', 'Registration at site {{site}}', '<p>Registration {{man}} at site {{site}}</p>');
INSERT INTO `letters_languages` VALUES ('16', '8', 'ru', '', '');
INSERT INTO `letters_languages` VALUES ('17', '9', 'en', '{{site}} - {{subject}}', '<p>{{text}}</p>');
INSERT INTO `letters_languages` VALUES ('18', '9', 'ru', '', '');
INSERT INTO `letters_languages` VALUES ('19', '10', 'en', '{{site}} - add to favorite', '<p>Dear {{favorite_name}}!</p>\n<p>User {{sender_name}} add you to favorites.</p>');
INSERT INTO `letters_languages` VALUES ('20', '10', 'ru', '', '');
INSERT INTO `letters_languages` VALUES ('21', '11', 'en', '{{site}} - Order gifts and flowers', '<p>You order gifts an flowers for girl {{girl}}</p>\n<p>Number of your order is {{order_number}}</p>\n<p>You have order next gifts and flowers</p>\n<p>{{order_content}}</p>\n<p>If it is not your ordet folow the next link <a href=\"{{close_link}}\">Close order</a>.</p>');
INSERT INTO `letters_languages` VALUES ('22', '11', 'ru', '', '');
INSERT INTO `letters_languages` VALUES ('23', '12', 'en', '{{site}} - Order gifts and flowers', '<p>User {{man}} order gifts and flowers to girl {{girl}}</p>\n<p>Number of order - {{order_number}}</p>\n<p>{{man}} order next gifts and flowers</p>\n<p>{{order_content}}</p>');
INSERT INTO `letters_languages` VALUES ('24', '12', 'ru', '', '');

-- ----------------------------
-- Table structure for `men`
-- ----------------------------
DROP TABLE IF EXISTS `men`;
CREATE TABLE `men` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `bank_card` varchar(10) DEFAULT NULL,
  `birthday` int(11) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `eyes` int(11) DEFAULT NULL,
  `hair` int(11) DEFAULT NULL,
  `place_work` varchar(255) DEFAULT NULL,
  `education` int(11) DEFAULT NULL,
  `religion` int(11) DEFAULT NULL,
  `marital_status` int(11) DEFAULT NULL,
  `smoking` int(11) DEFAULT NULL,
  `drinking` int(11) DEFAULT NULL,
  `children` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `hobbies` text,
  `about` text,
  `relationships` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `balance` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of men
-- ----------------------------
INSERT INTO `men` VALUES ('1', '8', 'first name man 1', 'last name man 1', 'emailman1@email.com', null, '335048400', '', '', 'city man 1', '4', '6', '2', '6', 'place of work man 1', '27', '22', '19', '13', '8', 'none', '12354646', '<p>hobbies man 1</p>', '<p>about me  man 1</p>', '<p>perfect relationships man 1</p>', '1408014370', '1408978715', '2000.00');
INSERT INTO `men` VALUES ('2', '11', 'first name man 2', 'last name man 2', 'email2man@email.com', null, '1408309200', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '', '', '', '', '', '1408346572', '1408346805', null);
INSERT INTO `men` VALUES ('4', '13', 'first name man 3', 'last name man 3', 'email3man@email.com', null, '1408309200', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '', '', '', '', '', '1408346763', '1408346814', null);
INSERT INTO `men` VALUES ('5', '14', 'first name man 4', 'last name man 4', 'emailman4@email.com', null, '1408395600', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '', '', '', '', '', '1408435348', '1408436978', null);

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `date_news` int(14) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `popular` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', 'news-1', '1407313716', 'vuarhgcwejf3dz7dmttkvifogy7jtgcc.jpg', '1407312699', '1407313716', '1', '0');
INSERT INTO `news` VALUES ('3', 'news-2', '1407330446', '67adgkddxhdxzu2kiwoagetnan6zmjid.jpg', '1407313848', '1407330446', '1', '0');

-- ----------------------------
-- Table structure for `news_languages`
-- ----------------------------
DROP TABLE IF EXISTS `news_languages`;
CREATE TABLE `news_languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `announcement` text,
  `text` text,
  `page_title` varchar(255) DEFAULT NULL,
  `page_h1` varchar(255) DEFAULT NULL,
  `page_description` text,
  `page_keywords` text,
  PRIMARY KEY (`id`),
  KEY `news_languages` (`news_id`),
  CONSTRAINT `news_languages` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news_languages
-- ----------------------------
INSERT INTO `news_languages` VALUES ('1', '1', 'en', 'News 1', 'News 1 announcement', '<p>News 1 text</p>', 'news 1 title', 'news 1 h1', 'news 1 description', 'news 1 keywords');
INSERT INTO `news_languages` VALUES ('2', '1', 'ru', 'Новость 1', 'Новость 1 краткое описание', '<p>Новость 1 полное описание</p>', '', '', '', '');
INSERT INTO `news_languages` VALUES ('5', '3', 'en', 'News 2', 'News 2text-short', '<p>News 2 text</p>', 'new 2 title', 'news 2 h1', 'news 2 description', 'news 2 keywords');
INSERT INTO `news_languages` VALUES ('6', '3', 'ru', 'Новость 2', 'Новость 2 краткое описание', '<p>Новость 2 полное описание</p>', 'новость 2 titlle', 'новость 2 h1', 'новость 2 description', 'новость 2 keywords');

-- ----------------------------
-- Table structure for `news_reviews`
-- ----------------------------
DROP TABLE IF EXISTS `news_reviews`;
CREATE TABLE `news_reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` text,
  `status` tinyint(1) DEFAULT '0',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news_reviews
-- ----------------------------
INSERT INTO `news_reviews` VALUES ('2', '1', 'name', 'Email@email.com', null, 'comment', '1', '1408002554', '1408006208');
INSERT INTO `news_reviews` VALUES ('3', '3', 'name', 'email@email.com', null, 'comment', '1', '1408364172', '1408364191');

-- ----------------------------
-- Table structure for `order_gifts`
-- ----------------------------
DROP TABLE IF EXISTS `order_gifts`;
CREATE TABLE `order_gifts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_from` int(11) DEFAULT NULL,
  `id_to` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `photo_with_girl` varchar(255) DEFAULT NULL,
  `text` text,
  `delivery` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_gifts
-- ----------------------------
INSERT INTO `order_gifts` VALUES ('1', '8', '6', '1409038163', '0', null, 'text of message', '30');
INSERT INTO `order_gifts` VALUES ('3', '8', '5', '1409051334', '0', null, '', '30');

-- ----------------------------
-- Table structure for `pages`
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `menu` tinyint(4) NOT NULL DEFAULT '0',
  `link_only` tinyint(1) NOT NULL DEFAULT '0',
  `seo_only` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` int(14) DEFAULT NULL,
  `updated_at` int(14) DEFAULT NULL,
  `show_footer` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES ('2', '1', 'terms-conditions', '4', '0', '0', '0', '1407309583', '1407315556', '1');
INSERT INTO `pages` VALUES ('3', '1', 'privacy', '5', '0', '0', '0', '1407310154', '1407315568', '1');
INSERT INTO `pages` VALUES ('4', '1', 'contact', '3', '0', '0', '0', '1407310262', '1407315578', '1');
INSERT INTO `pages` VALUES ('5', '1', 'main', '1', '0', '0', '0', '1407311209', null, '0');
INSERT INTO `pages` VALUES ('6', '1', 'about-us', '2', '0', '0', '0', '1407311502', '1407315586', '1');
INSERT INTO `pages` VALUES ('7', '1', 'registration', '0', '0', '0', '0', '1408338654', '1408341240', '0');
INSERT INTO `pages` VALUES ('8', '1', 'attention-for-girl-account', '0', '0', '0', '0', '1408691639', '1408692634', '0');
INSERT INTO `pages` VALUES ('9', '1', 'information', '0', '0', '0', '0', '1408980662', null, '0');
INSERT INTO `pages` VALUES ('10', '1', 'how-to-use-a-chat', '0', '0', '0', '0', '1408980718', null, '0');

-- ----------------------------
-- Table structure for `pages_languages`
-- ----------------------------
DROP TABLE IF EXISTS `pages_languages`;
CREATE TABLE `pages_languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `language` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `page_h1` varchar(255) DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_description` text,
  `page_keywords` text,
  PRIMARY KEY (`id`),
  KEY `pages_langages` (`page_id`),
  CONSTRAINT `pages_languages_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pages_languages
-- ----------------------------
INSERT INTO `pages_languages` VALUES ('3', '2', 'en', 'Terms & Conditions', '<p>Terms &amp; Conditions text en</p>', 'Terms & Conditions h1', 'Terms & Conditions title', 'Terms & Conditions description', 'Terms & Conditions keywords');
INSERT INTO `pages_languages` VALUES ('4', '2', 'ru', 'Правила и условия', '<p>Правила и условия текст</p>', 'Правила и условия h1', 'Правила и условия title', 'Правила и условия description', 'Правила и условия keywords');
INSERT INTO `pages_languages` VALUES ('5', '3', 'en', 'Privacy', '<p>Privacy text</p>', 'Privacy h1', 'Privacy title', 'Privacy description', 'Privacy keywords');
INSERT INTO `pages_languages` VALUES ('6', '3', 'ru', 'Конфиденциальность', '<p>Конфиденциальность текст</p>', 'Конфиденциальность h1', 'Конфиденциальность title', 'Конфиденциальность description', 'Конфиденциальность keywords');
INSERT INTO `pages_languages` VALUES ('7', '4', 'en', 'Contact us', '<p>Contact us text</p>', 'Contact us H1', 'Contact us title', 'Contact us description', 'Contact us keywords');
INSERT INTO `pages_languages` VALUES ('8', '4', 'ru', 'Контакты', '<p>Контакты</p>', 'Контакты', 'Контакты', 'Контакты', 'Контакты');
INSERT INTO `pages_languages` VALUES ('9', '5', 'en', 'Main', '<p>Main</p>', 'Main', 'Main', 'Main', 'Main');
INSERT INTO `pages_languages` VALUES ('10', '5', 'ru', 'Главная страница', '<p>Главная страница</p>', 'Главная страница', 'Главная страница', 'Главная страница', 'Главная страница');
INSERT INTO `pages_languages` VALUES ('11', '6', 'en', 'About us', '<p>About us text</p>', 'About us H1', 'About us title', 'About us description', 'About us keywords');
INSERT INTO `pages_languages` VALUES ('12', '6', 'ru', 'О нас', '<p>О нас</p>', 'О нас', 'О нас', 'О нас', 'О нас');
INSERT INTO `pages_languages` VALUES ('13', '7', 'en', 'Registration', '<p><strong>Fill in registration form</strong>, if you do not have personal ID, and get free membership on VictoriaDate.</p>', 'Registration h1', 'Registration title', 'Registration description', 'Registration keywords');
INSERT INTO `pages_languages` VALUES ('14', '7', 'ru', 'Регистрация', '<p>Заполните форму регистрации, есои&nbsp; у Вас нет персонального ID, и общайтесь бесплатно на VictoriaDate.</p>', 'Регистрация', 'Регистрация', 'Регистрация', 'Регистрация');
INSERT INTO `pages_languages` VALUES ('15', '8', 'en', 'Attention for girl account', '<p>Veronikalve.com glad to welcome you on a site of international dating - VictoriaDate.com. Want to find your soulmate? Searching for a decent companion? Want to meet a man from foreign countries? Do not lose your chance! Registration on VictoriaDate.com - it already halfway to achieving its goal!</p>\n<p>Participants in our site are already men from the U.S., Australia, Canada, Germany and many other countries around the world. Each of them has its own interests, hobbies, passions. Maybe they are the same as yours? Maybe that you\'re missing in their lives?</p>\n<p>So, it\'s time to know them. We allow you to prospect for new acquaintances, new interesting dialogue and new experiences! Tired of being alone? Then welcome to the world of exciting adventures on VictoriaDate.com!</p>', 'Attention!', '', '', '');
INSERT INTO `pages_languages` VALUES ('16', '8', 'ru', '', '', '', '', '', '');
INSERT INTO `pages_languages` VALUES ('17', '9', 'en', 'Information', '<p>Information</p>', 'Information', 'Information', 'Information', 'Information');
INSERT INTO `pages_languages` VALUES ('18', '9', 'ru', '', '', '', '', '', '');
INSERT INTO `pages_languages` VALUES ('19', '10', 'en', 'how to use a Chat', '<p>how to use a Chathow to use a Chat</p>', 'how to use a Chat', 'how to use a Chat', 'how to use a Chat', 'how to use a Chat');
INSERT INTO `pages_languages` VALUES ('20', '10', 'ru', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for `photo_likes`
-- ----------------------------
DROP TABLE IF EXISTS `photo_likes`;
CREATE TABLE `photo_likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_photo` int(11) DEFAULT NULL,
  `id_who` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of photo_likes
-- ----------------------------

-- ----------------------------
-- Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  `role_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'login', 'Login privileges, granted after account confirmation', null);
INSERT INTO `roles` VALUES ('2', 'admin', 'Administrative user, has access to everything.', 'SuperAdmin');
INSERT INTO `roles` VALUES ('3', 'agency', 'Agency', 'Agency ');
INSERT INTO `roles` VALUES ('4', 'girls', 'Girls', 'Girl');
INSERT INTO `roles` VALUES ('5', 'man', 'Man account', 'Man');

-- ----------------------------
-- Table structure for `roles_users`
-- ----------------------------
DROP TABLE IF EXISTS `roles_users`;
CREATE TABLE `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`),
  CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of roles_users
-- ----------------------------
INSERT INTO `roles_users` VALUES ('3', '1');
INSERT INTO `roles_users` VALUES ('4', '1');
INSERT INTO `roles_users` VALUES ('5', '1');
INSERT INTO `roles_users` VALUES ('6', '1');
INSERT INTO `roles_users` VALUES ('7', '1');
INSERT INTO `roles_users` VALUES ('8', '1');
INSERT INTO `roles_users` VALUES ('11', '1');
INSERT INTO `roles_users` VALUES ('13', '1');
INSERT INTO `roles_users` VALUES ('14', '1');
INSERT INTO `roles_users` VALUES ('15', '1');
INSERT INTO `roles_users` VALUES ('16', '1');
INSERT INTO `roles_users` VALUES ('17', '1');
INSERT INTO `roles_users` VALUES ('18', '1');
INSERT INTO `roles_users` VALUES ('19', '1');
INSERT INTO `roles_users` VALUES ('7', '2');
INSERT INTO `roles_users` VALUES ('3', '3');
INSERT INTO `roles_users` VALUES ('4', '3');
INSERT INTO `roles_users` VALUES ('5', '4');
INSERT INTO `roles_users` VALUES ('6', '4');
INSERT INTO `roles_users` VALUES ('15', '4');
INSERT INTO `roles_users` VALUES ('16', '4');
INSERT INTO `roles_users` VALUES ('17', '4');
INSERT INTO `roles_users` VALUES ('18', '4');
INSERT INTO `roles_users` VALUES ('19', '4');
INSERT INTO `roles_users` VALUES ('8', '5');
INSERT INTO `roles_users` VALUES ('11', '5');
INSERT INTO `roles_users` VALUES ('13', '5');
INSERT INTO `roles_users` VALUES ('14', '5');

-- ----------------------------
-- Table structure for `role_admin_actions`
-- ----------------------------
DROP TABLE IF EXISTS `role_admin_actions`;
CREATE TABLE `role_admin_actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_role` int(11) DEFAULT NULL,
  `id_controller` int(11) DEFAULT NULL,
  `id_action` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role_admin_actions
-- ----------------------------

-- ----------------------------
-- Table structure for `seo`
-- ----------------------------
DROP TABLE IF EXISTS `seo`;
CREATE TABLE `seo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` int(14) DEFAULT NULL,
  `updated_at` int(14) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seo
-- ----------------------------
INSERT INTO `seo` VALUES ('1', 'News list', 'news', 'index', '1', '1407824285', '1407824298');
INSERT INTO `seo` VALUES ('2', 'News archive', 'news', 'archive', '1', '1407824447', null);
INSERT INTO `seo` VALUES ('3', 'Gifts', 'gifts', 'index', '1', '1407909310', '1407909322');
INSERT INTO `seo` VALUES ('4', 'Virtual gifts', 'virtualgifts', 'index', '1', '1408341553', '1408341591');
INSERT INTO `seo` VALUES ('6', 'Girls Account Settings', 'girlaccount', 'settings', '1', '1408624923', '1408695272');
INSERT INTO `seo` VALUES ('7', 'Ladies profile', 'profile', 'girl', '1', '1408684907', null);
INSERT INTO `seo` VALUES ('8', 'man account settings', 'manaccount', 'settings', '1', '1408686947', '1408695292');
INSERT INTO `seo` VALUES ('9', 'Girl account', 'girlaccount', 'index', '1', '1408691521', '1408695256');
INSERT INTO `seo` VALUES ('10', 'Men online', 'girlaccount', 'menonline', '1', '1408695668', '1408711380');
INSERT INTO `seo` VALUES ('11', 'Man profile', 'profile', 'man', '1', '1408710620', null);
INSERT INTO `seo` VALUES ('12', 'Women online', 'manaccount', 'womenonline', '1', '1408713734', null);
INSERT INTO `seo` VALUES ('13', 'Man account -My favorites', 'manaccount', 'myfavorites', '1', '1408799893', '1408799898');
INSERT INTO `seo` VALUES ('14', 'Girl Account- My favorites', 'girlaccount', 'myfavorites', '1', '1408956521', null);
INSERT INTO `seo` VALUES ('15', 'Girl Account - My admires', 'girlaccount', 'myadmires', '1', '1408962654', null);
INSERT INTO `seo` VALUES ('16', 'Girl account - My matches', 'girlaccount', 'mymatches', '1', '1408962727', null);
INSERT INTO `seo` VALUES ('17', 'man account', 'manaccount', 'index', '1', '1409041812', null);

-- ----------------------------
-- Table structure for `seo_languages`
-- ----------------------------
DROP TABLE IF EXISTS `seo_languages`;
CREATE TABLE `seo_languages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `seo_id` int(11) unsigned NOT NULL,
  `language` varchar(32) NOT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_h1` varchar(255) DEFAULT NULL,
  `page_description` text,
  `page_keywords` text,
  PRIMARY KEY (`id`),
  KEY `seo_languages` (`seo_id`),
  CONSTRAINT `seo_languages_ibfk_1` FOREIGN KEY (`seo_id`) REFERENCES `seo` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seo_languages
-- ----------------------------
INSERT INTO `seo_languages` VALUES ('1', '1', 'en', 'News title', 'News H1', 'news keywords', 'news description');
INSERT INTO `seo_languages` VALUES ('2', '1', 'ru', 'Новости title', 'Новости H1', 'Новости description', 'Новости keywords');
INSERT INTO `seo_languages` VALUES ('3', '2', 'en', 'News archive titlle', 'News archive H1', 'News archive description', 'News archive keywords');
INSERT INTO `seo_languages` VALUES ('4', '2', 'ru', 'Архив новостей title', 'Архив новостей H1', 'Архив новостей description', 'Архив новостей keywords');
INSERT INTO `seo_languages` VALUES ('5', '3', 'en', 'Gifts and flowers  title', 'Gifts and flowers H1', 'Gifts and flowers description', 'Gifts and flowers keywords');
INSERT INTO `seo_languages` VALUES ('6', '3', 'ru', 'Подарки и цветы Title', 'Подарки и цветы H1', 'Подарки и цветы description', 'Подарки и цветы keywords');
INSERT INTO `seo_languages` VALUES ('7', '4', 'en', 'Virtual Gifts title', 'Virtual Gifts H1', 'Virtual Gifts Description', 'Virtual Gifts Keywords');
INSERT INTO `seo_languages` VALUES ('8', '4', 'ru', 'Виртуальные подарки  Title', 'Виртуальные подарки H1', 'Виртуальные подарки Description', 'Виртуальные подарки keywords');
INSERT INTO `seo_languages` VALUES ('11', '6', 'en', 'My settings', 'My settings & Password', 'Settings', 'Settings');
INSERT INTO `seo_languages` VALUES ('12', '6', 'ru', 'Настройки', 'Настройки', 'Настройки', 'Настройки');
INSERT INTO `seo_languages` VALUES ('13', '7', 'en', 'Ladies profile', 'Ladies profile', 'Ladies profile', 'Ladies profile');
INSERT INTO `seo_languages` VALUES ('14', '7', 'ru', '', '', '', '');
INSERT INTO `seo_languages` VALUES ('15', '8', 'en', 'My settings', 'My settings & Password', 'My settings', 'My settings');
INSERT INTO `seo_languages` VALUES ('16', '8', 'ru', 'Настройки', 'Настройки', 'Настройки', 'Настройки');
INSERT INTO `seo_languages` VALUES ('17', '9', 'en', 'My account', 'My account', 'My account', 'My account');
INSERT INTO `seo_languages` VALUES ('18', '9', 'ru', 'Мой аккаунт', 'Мой аккаунт', 'Мой аккаунт', 'Мой аккаунт');
INSERT INTO `seo_languages` VALUES ('19', '10', 'en', 'Men Online', 'Men Online', 'Men Online', 'Men Online');
INSERT INTO `seo_languages` VALUES ('20', '10', 'ru', 'Мужчины онлайн', 'Мужчины онлайн', 'Мужчины онлайн', 'Мужчины онлайн');
INSERT INTO `seo_languages` VALUES ('21', '11', 'en', 'Man profile', 'Man profile', 'Man profile', 'Man profile');
INSERT INTO `seo_languages` VALUES ('22', '11', 'ru', '', '', '', '');
INSERT INTO `seo_languages` VALUES ('23', '12', 'en', 'Women online', 'Women online', 'Women online', 'Women online');
INSERT INTO `seo_languages` VALUES ('24', '12', 'ru', '', '', '', '');
INSERT INTO `seo_languages` VALUES ('25', '13', 'en', 'My favorites', 'My favorites', 'My favorites', 'My favorites');
INSERT INTO `seo_languages` VALUES ('26', '13', 'ru', '', '', '', '');
INSERT INTO `seo_languages` VALUES ('27', '14', 'en', 'My favorites', 'My favorites', 'My favorites', 'My favorites');
INSERT INTO `seo_languages` VALUES ('28', '14', 'ru', '', '', '', '');
INSERT INTO `seo_languages` VALUES ('29', '15', 'en', 'My admires', 'My admires', 'My admires', 'My admires');
INSERT INTO `seo_languages` VALUES ('30', '15', 'ru', '', '', '', '');
INSERT INTO `seo_languages` VALUES ('31', '16', 'en', 'My matches', 'My matches', 'My matches', 'My matches');
INSERT INTO `seo_languages` VALUES ('32', '16', 'ru', '', '', '', '');
INSERT INTO `seo_languages` VALUES ('33', '17', 'en', 'My account', 'My account', 'My account', 'My account');
INSERT INTO `seo_languages` VALUES ('34', '17', 'ru', '', '', '', '');

-- ----------------------------
-- Table structure for `slideshow`
-- ----------------------------
DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE `slideshow` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `created_at` int(14) DEFAULT NULL,
  `updated_at` int(14) DEFAULT NULL,
  `lang` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slideshow
-- ----------------------------
INSERT INTO `slideshow` VALUES ('1', 'slide 1', '1', 'raq9zfkkgcor0bvn9nfz3fsifdxqpd1n.jpg', '2', '1408514340', '1408517865', null);
INSERT INTO `slideshow` VALUES ('2', 'slide 2', '1', '2r1f5ox3w4plknwwbl2pelvbhoccba1k.jpg', '1', '1408514527', '1408518113', null);

-- ----------------------------
-- Table structure for `slideshow_languages`
-- ----------------------------
DROP TABLE IF EXISTS `slideshow_languages`;
CREATE TABLE `slideshow_languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slide_id` int(11) DEFAULT NULL,
  `text` text,
  `language` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slideshow_languages
-- ----------------------------
INSERT INTO `slideshow_languages` VALUES ('1', '1', '<div class=\"sliderText01\">1,000\'s</div>\n<div class=\"sliderText02\">of Real Girls</div>\n<div class=\"sliderText03\">Online Now</div>', 'en');
INSERT INTO `slideshow_languages` VALUES ('2', '1', '<div class=\"sliderText01\">1,000\'s</div>\n<div class=\"sliderText02\">of Real Girls</div>\n<div class=\"sliderText03\">Online Now</div>', 'ru');
INSERT INTO `slideshow_languages` VALUES ('3', '2', '<div class=\"sliderText01\">1,000\'s</div>\n<div class=\"sliderText02\">of Real Girls</div>\n<div class=\"sliderText03\">Online Now</div>', 'en');
INSERT INTO `slideshow_languages` VALUES ('4', '2', '<div class=\"sliderText01\">1,000\'s</div>\n<div class=\"sliderText02\">of Real Girls</div>\n<div class=\"sliderText03\">Online Now</div>', 'ru');
INSERT INTO `slideshow_languages` VALUES ('5', '4', 'text 3', 'en');
INSERT INTO `slideshow_languages` VALUES ('6', '4', 'text 3 ru', 'ru');

-- ----------------------------
-- Table structure for `sprav`
-- ----------------------------
DROP TABLE IF EXISTS `sprav`;
CREATE TABLE `sprav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sprav
-- ----------------------------
INSERT INTO `sprav` VALUES ('1', '1', '1', '1', '1407419777', '1407484026', null);
INSERT INTO `sprav` VALUES ('2', '1', '1', '2', '1407419936', null, '0');
INSERT INTO `sprav` VALUES ('3', '1', '1', '3', '1407420048', null, '0');
INSERT INTO `sprav` VALUES ('4', '1', '1', '4', '1407473847', null, '0');
INSERT INTO `sprav` VALUES ('6', '2', '1', null, '1407476122', null, '0');
INSERT INTO `sprav` VALUES ('7', '2', '1', null, '1407476148', null, '0');
INSERT INTO `sprav` VALUES ('8', '3', '1', '1', '1407476464', null, '0');
INSERT INTO `sprav` VALUES ('9', '3', '1', '2', '1407476492', null, '0');
INSERT INTO `sprav` VALUES ('10', '3', '0', '3', '1407476506', null, '0');
INSERT INTO `sprav` VALUES ('11', '4', '1', null, '1407476636', null, '0');
INSERT INTO `sprav` VALUES ('12', '4', '1', null, '1407476652', null, '0');
INSERT INTO `sprav` VALUES ('13', '4', '1', null, '1407476665', null, '0');
INSERT INTO `sprav` VALUES ('19', '5', '1', null, '1407477670', '1407477786', '0');
INSERT INTO `sprav` VALUES ('20', '5', '1', null, '1407477814', null, '2');
INSERT INTO `sprav` VALUES ('21', '5', '1', null, '1407477841', null, '1');
INSERT INTO `sprav` VALUES ('22', '6', '1', '1', '1407478135', null, '0');
INSERT INTO `sprav` VALUES ('23', '6', '1', '2', '1407478157', null, '0');
INSERT INTO `sprav` VALUES ('24', '6', '0', '3', '1407478179', null, '0');
INSERT INTO `sprav` VALUES ('25', '6', '1', '4', '1407478240', null, '0');
INSERT INTO `sprav` VALUES ('26', '7', '1', null, '1407478464', null, '0');
INSERT INTO `sprav` VALUES ('27', '7', '1', null, '1407478525', null, '0');

-- ----------------------------
-- Table structure for `sprav_categories`
-- ----------------------------
DROP TABLE IF EXISTS `sprav_categories`;
CREATE TABLE `sprav_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sprav_categories
-- ----------------------------
INSERT INTO `sprav_categories` VALUES ('1', 'eyes');
INSERT INTO `sprav_categories` VALUES ('2', 'hair');
INSERT INTO `sprav_categories` VALUES ('3', 'drinking');
INSERT INTO `sprav_categories` VALUES ('4', 'smoking');
INSERT INTO `sprav_categories` VALUES ('5', 'marital');
INSERT INTO `sprav_categories` VALUES ('6', 'religion');
INSERT INTO `sprav_categories` VALUES ('7', 'education');

-- ----------------------------
-- Table structure for `sprav_languages`
-- ----------------------------
DROP TABLE IF EXISTS `sprav_languages`;
CREATE TABLE `sprav_languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sprav_id` int(11) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sprav_languages` (`sprav_id`),
  CONSTRAINT `sprav_languages` FOREIGN KEY (`sprav_id`) REFERENCES `sprav` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sprav_languages
-- ----------------------------
INSERT INTO `sprav_languages` VALUES ('1', '1', 'Blue', 'en');
INSERT INTO `sprav_languages` VALUES ('2', '1', 'Голубой', 'ru');
INSERT INTO `sprav_languages` VALUES ('3', '2', 'Green', 'en');
INSERT INTO `sprav_languages` VALUES ('4', '2', 'Зеленый', 'ru');
INSERT INTO `sprav_languages` VALUES ('5', '3', 'Grey', 'en');
INSERT INTO `sprav_languages` VALUES ('6', '3', 'Серый', 'ru');
INSERT INTO `sprav_languages` VALUES ('7', '4', 'Brown', 'en');
INSERT INTO `sprav_languages` VALUES ('8', '4', 'Карие', 'ru');
INSERT INTO `sprav_languages` VALUES ('11', '6', 'Black', 'en');
INSERT INTO `sprav_languages` VALUES ('12', '6', 'Черный', 'ru');
INSERT INTO `sprav_languages` VALUES ('13', '7', 'Brown', 'en');
INSERT INTO `sprav_languages` VALUES ('14', '7', 'Коричневый', 'ru');
INSERT INTO `sprav_languages` VALUES ('15', '8', 'No', 'en');
INSERT INTO `sprav_languages` VALUES ('16', '8', 'Нет', 'ru');
INSERT INTO `sprav_languages` VALUES ('17', '9', 'Yes', 'en');
INSERT INTO `sprav_languages` VALUES ('18', '9', 'Да', 'ru');
INSERT INTO `sprav_languages` VALUES ('19', '10', 'Sometimes', 'en');
INSERT INTO `sprav_languages` VALUES ('20', '10', 'Иногда', 'ru');
INSERT INTO `sprav_languages` VALUES ('21', '11', 'No', 'en');
INSERT INTO `sprav_languages` VALUES ('22', '11', 'Нет', 'ru');
INSERT INTO `sprav_languages` VALUES ('23', '12', 'Yes', 'en');
INSERT INTO `sprav_languages` VALUES ('24', '12', 'Да', 'ru');
INSERT INTO `sprav_languages` VALUES ('25', '13', 'Sometimes', 'en');
INSERT INTO `sprav_languages` VALUES ('26', '13', 'Иногда', 'ru');
INSERT INTO `sprav_languages` VALUES ('37', '19', 'Single', 'en');
INSERT INTO `sprav_languages` VALUES ('38', '19', 'Свободен', 'ru');
INSERT INTO `sprav_languages` VALUES ('39', '20', 'Married', 'en');
INSERT INTO `sprav_languages` VALUES ('40', '20', 'Замужем', 'ru');
INSERT INTO `sprav_languages` VALUES ('41', '21', 'Married', 'en');
INSERT INTO `sprav_languages` VALUES ('42', '21', 'женат', 'ru');
INSERT INTO `sprav_languages` VALUES ('43', '22', 'Christianity', 'en');
INSERT INTO `sprav_languages` VALUES ('44', '22', 'Христианство', 'ru');
INSERT INTO `sprav_languages` VALUES ('45', '23', 'Islam', 'en');
INSERT INTO `sprav_languages` VALUES ('46', '23', 'Ислам', 'ru');
INSERT INTO `sprav_languages` VALUES ('47', '24', 'Hinduism', 'en');
INSERT INTO `sprav_languages` VALUES ('48', '24', 'Индуизм', 'ru');
INSERT INTO `sprav_languages` VALUES ('49', '25', 'Atheist', 'en');
INSERT INTO `sprav_languages` VALUES ('50', '25', 'Атеист', 'ru');
INSERT INTO `sprav_languages` VALUES ('51', '26', 'School', 'en');
INSERT INTO `sprav_languages` VALUES ('52', '26', 'Школа', 'ru');
INSERT INTO `sprav_languages` VALUES ('53', '27', 'Higher', 'en');
INSERT INTO `sprav_languages` VALUES ('54', '27', 'Высшее', 'ru');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  `admin` tinyint(1) DEFAULT '0',
  `last_activity` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `user_language` varchar(255) DEFAULT 'en',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('3', 'email@email.com', 'login1', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '0', null, '0', null, '1', 'en');
INSERT INTO `users` VALUES ('4', 'mail@mail.com', 'login2', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '0', null, '0', null, '1', 'en');
INSERT INTO `users` VALUES ('5', 'email1@email.com', 'girl1', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '0', null, '0', null, '1', 'en');
INSERT INTO `users` VALUES ('6', 'email2@email.com', 'girl2', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '16', '1409051045', '0', null, '1', 'en');
INSERT INTO `users` VALUES ('7', 'emailadmin@emal.com', 'loginadmin1', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '0', null, '1', null, '1', 'en');
INSERT INTO `users` VALUES ('8', 'emailman1@email.com', 'man1', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '14', '1409031004', '0', null, '1', 'en');
INSERT INTO `users` VALUES ('11', 'email2man@email.com', 'loginman2', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '2', '1408960592', '0', null, '1', 'en');
INSERT INTO `users` VALUES ('13', 'email3man@email.com', 'loginman3', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '1', '1408960651', '0', null, '1', 'en');
INSERT INTO `users` VALUES ('14', 'emailman4@email.com', 'loginman4', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '0', null, '0', null, '1', 'en');
INSERT INTO `users` VALUES ('15', 'emailgirl3@email.com', 'logingirl3', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '0', null, '0', null, '1', 'en');
INSERT INTO `users` VALUES ('16', 'emailgirl4@email.com', 'logingilr4', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '0', null, '0', null, '1', 'en');
INSERT INTO `users` VALUES ('17', 'emailgirl5@email.com', 'logingirl5', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '0', null, '0', null, '1', 'en');
INSERT INTO `users` VALUES ('18', 'emailgirl6@email.com', 'logingirl6', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '0', null, '0', null, '1', 'en');
INSERT INTO `users` VALUES ('19', 'emailgirl7@email.com', 'logingirl7', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '0', null, '0', null, '1', 'en');

-- ----------------------------
-- Table structure for `user_admin_letters`
-- ----------------------------
DROP TABLE IF EXISTS `user_admin_letters`;
CREATE TABLE `user_admin_letters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `text` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `type` tinyint(1) DEFAULT NULL,
  `status_del_user` tinyint(1) DEFAULT '0',
  `status_del_admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_admin_letters
-- ----------------------------
INSERT INTO `user_admin_letters` VALUES ('2', '11', 'subject2', 'text', '1408371092', null, '1', '2', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('3', '11', 'subject2', 'text2', '1408428379', null, '1', '1', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('4', '8', 'letter1', 'text1', '1408428505', null, '0', '1', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('5', '5', 'vdate - add to favorite', '<p>Dear Anna!</p>\n<p>User first name man 1 add you to favorites.</p>', '1408798013', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('6', '18', 'vdate - add to favorite', '<p>Dear Nataly!</p>\n<p>User first name man 1 add you to favorites.</p>', '1408798114', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('7', '6', 'vdate - add to favorite', '<p>Dear Victoria!</p>\n<p>User first name man 1 add you to favorites.</p>', '1408798125', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('8', '18', 'vdate - add to favorite', '<p>Dear Nataly!</p>\n<p>User first name man 1 add you to favorites.</p>', '1408953082', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('9', '5', 'vdate - add to favorite', '<p>Dear Anna!</p>\n<p>User first name man 1 add you to favorites.</p>', '1408953452', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('10', '19', 'vdate - add to favorite', '<p>Dear Angela!</p>\n<p>User first name man 1 add you to favorites.</p>', '1408953486', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('11', '15', 'vdate - add to favorite', '<p>Dear Antonina!</p>\n<p>User first name man 1 add you to favorites.</p>', '1408953492', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('12', '8', 'vdate - add to favorite', '<p>Dear first name man 1!</p>\n<p>User Victoria add you to favorites.</p>', '1408955688', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('13', '11', 'vdate - add to favorite', '<p>Dear first name man 2!</p>\n<p>User Victoria add you to favorites.</p>', '1408956739', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('14', '6', 'vdate - add to favorite', '<p>Dear Victoria!</p>\n<p>User first name man 2 add you to favorites.</p>', '1408960440', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('15', '19', 'vdate - add to favorite', '<p>Dear Angela!</p>\n<p>User first name man 2 add you to favorites.</p>', '1408960625', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('16', '6', 'vdate - add to favorite', '<p>Dear Victoria!</p>\n<p>User first name man 3 add you to favorites.</p>', '1408960681', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('17', '11', 'vdate - add to favorite', '<p>Dear first name man 2!</p>\n<p>User Victoria add you to favorites.</p>', '1408969929', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('18', '13', 'vdate - add to favorite', '<p>Dear first name man 3!</p>\n<p>User Victoria add you to favorites.</p>', '1408969934', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('19', '14', 'vdate - add to favorite', '<p>Dear first name man 4!</p>\n<p>User Victoria add you to favorites.</p>', '1408969940', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('20', '18', 'vdate - add to favorite', '<p>Dear Nataly!</p>\n<p>User first name man 1 add you to favorites.</p>', '1408970707', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('21', '5', 'vdate - add to favorite', '<p>Dear Anna!</p>\n<p>User first name man 1 add you to favorites.</p>', '1408971057', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('22', '15', 'vdate - add to favorite', '<p>Dear Antonina!</p>\n<p>User first name man 1 add you to favorites.</p>', '1408971066', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('23', '11', 'vdate - add to favorite', '<p>Dear first name man 2!</p>\n<p>User Victoria add you to favorites.</p>', '1409029709', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('24', '14', 'vdate - add to favorite', '<p>Dear first name man 4!</p>\n<p>User Victoria add you to favorites.</p>', '1409029721', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('25', '8', 'vdate - Order gifts and flowers', '<p>You order gifts an flowers for girl Victoria(ID-6)</p>\n<p>Number of your order is 1</p>\n<p>You have order next gifts and flowers</p>\n<p><table>\r\n    <tr>\r\n        <td>Name of gift</td>\r\n        <td>Cost</td>\r\n    </tr>\r\n        <tr>\r\n        <td>Big bouquet</td>\r\n        <td>900</td>\r\n    </tr>\r\n        <tr>\r\n        <td>Small Choclate Box</td>\r\n        <td>50</td>\r\n    </tr>\r\n    </table></p>\n<p>If it is not your ordet folow the next link <a href=\"/en/manaccount/orders/1\">Close order</a>.</p>', '1409038163', null, '0', '3', '0', '0');
INSERT INTO `user_admin_letters` VALUES ('26', '8', 'vdate - Order gifts and flowers', '<p>User first name man 1(ID-8) order gifts and flowers to girl Victoria(ID-6)</p>\n<p>Number of order - 1</p>\n<p>first name man 1(ID-8) order next gifts and flowers</p>\n<p><table>\r\n    <tr>\r\n        <td>Name of gift</td>\r\n        <td>Cost</td>\r\n    </tr>\r\n        <tr>\r\n        <td>Big bouquet</td>\r\n        <td>900</td>\r\n    </tr>\r\n        <tr>\r\n        <td>Small Choclate Box</td>\r\n        <td>50</td>\r\n    </tr>\r\n    </table></p>', '1409038163', null, '1', '2', '0', '0');

-- ----------------------------
-- Table structure for `user_letters`
-- ----------------------------
DROP TABLE IF EXISTS `user_letters`;
CREATE TABLE `user_letters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_from` int(11) DEFAULT NULL,
  `id_to` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `cost` double(10,2) DEFAULT NULL,
  `letter_title` varchar(255) DEFAULT NULL,
  `letter_text` text,
  `letter_status` tinyint(1) DEFAULT '0',
  `del_status_from` tinyint(1) DEFAULT '0',
  `del_status_to` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_letters
-- ----------------------------

-- ----------------------------
-- Table structure for `user_photos`
-- ----------------------------
DROP TABLE IF EXISTS `user_photos`;
CREATE TABLE `user_photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `default_image` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_photos
-- ----------------------------
INSERT INTO `user_photos` VALUES ('23', '6', 'g8zhohoncbdg0jkwx9fzacm9ilw2qn2s.jpg', '1408543075', null, null);
INSERT INTO `user_photos` VALUES ('24', '6', 'qp6jywduwgmwktwxaykwgtmodax4chjf.jpg', '1408543075', null, null);
INSERT INTO `user_photos` VALUES ('26', '6', 'zmfbonqthxzrl0vkzmbxkyhzon6mr4bd.jpg', '1408543076', null, null);
INSERT INTO `user_photos` VALUES ('27', '6', 'hb5zk0k5njscx9ogscftauvyzbpbdxdr.jpg', '1408543076', null, null);
INSERT INTO `user_photos` VALUES ('28', '6', 'qttbfecqxxfbbufj3vv94r1ohd42khyy.jpg', '1408543076', null, null);
INSERT INTO `user_photos` VALUES ('29', '6', '0i3nfi1xv5g6bnperwy33qdbxdk4m84n.jpg', '1408543076', null, null);
INSERT INTO `user_photos` VALUES ('30', '6', 'rpc43gzp57enya7hjoad75bqv3uvyedk.jpg', '1408543076', null, null);
INSERT INTO `user_photos` VALUES ('31', '6', 'nn2r1sy5ngpko0ljznubdrqqlzltfvrv.jpg', '1408543077', null, null);
INSERT INTO `user_photos` VALUES ('32', '6', 'tg6pekqgyhgvlz4ic392hx6xvfydtwge.jpg', '1408543077', null, null);
INSERT INTO `user_photos` VALUES ('33', '19', 'ivypc8spnp7uhyywy4eqrt3aujfjl6um.jpg', '1408543191', null, '1');
INSERT INTO `user_photos` VALUES ('34', '5', 'rjiyyerch1ekqoviqyzmpb8mr9ofclmh.jpg', '1408543208', null, '1');
INSERT INTO `user_photos` VALUES ('35', '15', 'lwj4enyrt8ddvxdz7crgrgrwe0bh5xjw.jpg', '1408543228', null, '1');
INSERT INTO `user_photos` VALUES ('37', '18', 'lki6fsovso3caoffisx8aoy17rqbsaft.jpg', '1408543372', null, '1');
INSERT INTO `user_photos` VALUES ('38', '16', '38rgreaqx0krjoogul4g2whp4q4ezr9o.jpg', '1408543465', null, '1');
INSERT INTO `user_photos` VALUES ('41', '6', '5q2lvjrnjgqya1ev6c8uhvqbeqdazci8.jpg', '1408609862', null, '1');

-- ----------------------------
-- Table structure for `user_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `user_tokens`;
CREATE TABLE `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`),
  CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `virtualgifts`
-- ----------------------------
DROP TABLE IF EXISTS `virtualgifts`;
CREATE TABLE `virtualgifts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cost` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of virtualgifts
-- ----------------------------
INSERT INTO `virtualgifts` VALUES ('1', '150', '1', '1', '1407492746', '1407492767', 'vzp2giyoikuobzuz2izf91clzfljrjoj.jpg', null);
INSERT INTO `virtualgifts` VALUES ('2', '200', '1', '2', '1407492819', null, 'splxg78bu0uit7z8uhtnmrpqmpdvag23.jpg', null);

-- ----------------------------
-- Table structure for `virtualgifts_languages`
-- ----------------------------
DROP TABLE IF EXISTS `virtualgifts_languages`;
CREATE TABLE `virtualgifts_languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gift_id` int(11) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gift_lang` (`gift_id`),
  CONSTRAINT `gift_lang` FOREIGN KEY (`gift_id`) REFERENCES `virtualgifts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of virtualgifts_languages
-- ----------------------------
INSERT INTO `virtualgifts_languages` VALUES ('21', '1', 'en', 'gift1');
INSERT INTO `virtualgifts_languages` VALUES ('22', '1', 'ru', 'Подарок 1');
INSERT INTO `virtualgifts_languages` VALUES ('23', '2', 'en', 'gift 2');
INSERT INTO `virtualgifts_languages` VALUES ('24', '2', 'ru', 'Подарок 2');

-- ----------------------------
-- Table structure for `weight`
-- ----------------------------
DROP TABLE IF EXISTS `weight`;
CREATE TABLE `weight` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zna` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of weight
-- ----------------------------
INSERT INTO `weight` VALUES ('1', '45', '1', '1', '1407481464', null);
INSERT INTO `weight` VALUES ('2', '50', '1', '2', '1407481472', null);
INSERT INTO `weight` VALUES ('3', '55', '1', '3', '1407481480', null);
INSERT INTO `weight` VALUES ('4', '60', '1', '4', '1407481487', '1407481488');
INSERT INTO `weight` VALUES ('5', '65', '1', '5', '1407481495', null);
INSERT INTO `weight` VALUES ('6', '70', '1', '6', '1407481500', null);
