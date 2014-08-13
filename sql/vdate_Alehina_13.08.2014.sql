/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : vdate

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2014-08-13 14:28:20
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
  `status` tinyint(1) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of agency
-- ----------------------------
INSERT INTO `agency` VALUES ('4', 'Agency name 1', 'agency director 1', 'agency contact person 1', 'address 1', 'agency contact phone 1', 'agency skype 1', 'email@email.com', 'agency working time 1', 'laguanya4hwxnmnkji5ok3902irc4gzn.jpg', 'penwv5bvi7b9jwxrisiaqy4qccccee9x.jpg', 'gojfzsaanr37a57lliqrbs7fkyis7lox.jpg', 'bemeficiary name 1', 'beneficiary account 1', 'beneficiary address 1', 'beneficiary phone 1', 'beneficiary bank name 1', 'aba or swift or national id 1', 'beneficiary bank address 1', 'country 1', 'beneficiary Correspondent Bank Name 1', 'beneficiary correspondent bank address 1', 'beneficiary correspondent bank city 1', 'benneficiary correspondent bank country 1', 'benneficiary correspondent bank swift code 1', 'comments', '1', '1407742177', '1407851227', '3');
INSERT INTO `agency` VALUES ('5', 'Agency name 2', 'agency director 2', 'agency contact person 2', 'adress 2', 'agency contact phone 2', 'agency skype 2', 'mail@mail.com', 'agency working time 2', null, null, null, 'bemeficiary name 2', 'beneficiary account or IBAN 2', 'beneficiary address 2', 'beneficiary phone 2', 'beneficiary bank name 2', 'aba or swift or national id 2', 'beneficiary bank address 2', 'country 2', 'beneficiary Correspondent Bank Name 2', 'beneficiary correspondent bank address 2', 'beneficiary correspondent bank city 2', 'benneficiary correspondent bank country 2', 'benneficiary correspondent bank swift code 2', 'comments 2', '1', '1407751961', '1407753650', '4');

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
INSERT INTO `config` VALUES ('site', 'pinterest', 's:0:\"\";');

-- ----------------------------
-- Table structure for `favorits`
-- ----------------------------
DROP TABLE IF EXISTS `favorits`;
CREATE TABLE `favorits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_who` int(11) DEFAULT NULL,
  `id_to` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of favorits
-- ----------------------------

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
INSERT INTO `gifts` VALUES ('1', '2', '100', '1', '1', '1407405024', '1407484737', 'wudp2x14hjvvwvdquv0h8pjgebwnoqrl.jpg', null);
INSERT INTO `gifts` VALUES ('2', '2', '150', '1', '2', '1407405125', '1407405402', '353tvycwsvvu9ogdqp96ramijfs5fag5.jpg', '1');
INSERT INTO `gifts` VALUES ('3', '3', '400', '1', '10', '1407405486', '1407406134', 'rbb6ovtl5kasomcvkptwzuz6nu9ox9pr.jpg', '1');
INSERT INTO `gifts` VALUES ('4', '10', '300', '1', '7', '1407405561', null, 'hbxbuhfw5yeh7np76lrvetfljezztko6.jpg', '1');
INSERT INTO `gifts` VALUES ('5', '10', '600', '1', '8', '1407405620', null, 'ib9dfxwobvxro8s07qfanixmvjswpwfz.jpg', '1');
INSERT INTO `gifts` VALUES ('6', '10', '900', '1', '9', '1407405656', null, '4vckicddnbaawgaonetlo1ab4dzn7hi3.jpg', '1');
INSERT INTO `gifts` VALUES ('7', '2', '250', '1', '3', '1407405764', null, 'pakztbbpue7de5pfsfpoqr3sxq8fadsl.jpg', '1');
INSERT INTO `gifts` VALUES ('8', '2', '300', '1', '4', '1407405801', null, 'tjx1dckvqdcux9yvbcgg1iptvj7zsr3y.jpg', '1');
INSERT INTO `gifts` VALUES ('9', '2', '500', '1', '5', '1407405830', null, 'kpkfr1qzqf4q4bqimgcmzzjxpewovlr8.jpg', '1');
INSERT INTO `gifts` VALUES ('10', '2', '600', '1', '6', '1407405865', null, 'arecpdd9qwdeqbnpum8zx9rtp1mkduqb.jpg', '1');
INSERT INTO `gifts` VALUES ('11', '11', '50', '1', '10', '1407486061', null, 'm4vjbpcrqzsmkf7zcbzw6pqrduu2hugn.jpg', null);

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
INSERT INTO `gift_groups` VALUES ('3', '1', '1', null, null, '1407325661', null);
INSERT INTO `gift_groups` VALUES ('6', '0', '1', '3', null, '1407326323', '1407326327');
INSERT INTO `gift_groups` VALUES ('7', '0', '1', '4', null, '1407326428', null);
INSERT INTO `gift_groups` VALUES ('8', '0', '1', '5', null, '1407326471', null);
INSERT INTO `gift_groups` VALUES ('9', '0', '1', '6', null, '1407326501', null);
INSERT INTO `gift_groups` VALUES ('10', '1', '0', null, null, '1407332422', null);
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
INSERT INTO `gift_groups_languages` VALUES ('5', '3', 'en', 'Orhids');
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
  `status` tinyint(1) DEFAULT '0',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `agency_id` int(11) DEFAULT NULL,
  `video` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of girls
-- ----------------------------
INSERT INTO `girls` VALUES ('1', '5', 'firstname1', 'lastname1', 'email1@email.com', 'FL', '654235', 'bqh9nc95gsdq5p7eytmox2ytosqanibo.jpg', 'k2y8xfqjg1jefung7qey7snmauk6lc2f.jpg', '813362400', '', '', 'city1', 'address 1', '3', '3', '2', '7', 'place of work1', '27', '22', '19', '11', '8', '2', '6545646456', '<p>hobbies1</p>', '<p>about me1</p>', '<p>perfect relationships</p>', '1', '1407762858', '1407819909', '4', '');
INSERT INTO `girls` VALUES ('2', '6', 'first name 2', 'last name 2', 'email2@email.com', 'LP', '987657', 'bsvks8rhpvkvg8221ubkrfub3mr78stx.jpg', 'sh2xee4ajdovs3gabwdqhnmvd8wod2x5.jpg', '650412000', '', '', 'city 2', 'home address 2', '3', '2', '2', '6', 'place of work 2', '27', '22', '20', '12', '9', 'none', '987654', '<p>hobbies 2</p>', '<p>about me 2</p>', '<p>perfect relationships 2</p>', '1', '1407820104', '1407907758', '5', 'video 2');

-- ----------------------------
-- Table structure for `height`
-- ----------------------------
DROP TABLE IF EXISTS `height`;
CREATE TABLE `height` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zna` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of infos
-- ----------------------------
INSERT INTO `infos` VALUES ('1', 'message_add_contact', 'Message after contact form', 'alert', '2.50', '1', '0', '1407828430', '1407829908');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of infos_languages
-- ----------------------------
INSERT INTO `infos_languages` VALUES ('1', '1', 'en', 'Thanks for message!');
INSERT INTO `infos_languages` VALUES ('2', '1', 'ru', 'Благодарим за сообщение!');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of letters
-- ----------------------------
INSERT INTO `letters` VALUES ('1', 'Letter to admin from contact form', '{{site}} - Site name\n{{name}} - First name, Last name or Login\n{{email}} - contact E-mail\n{{phone}} - contact phone\n{{message}} - message', 'contact_admin_mail', '1', '0', '1407826349', '1407851962');
INSERT INTO `letters` VALUES ('2', 'Letter to admin after agency registration', '{{site}} - Site name\n{{agency}} - Agency name\r\n{{username}} - Login of agency\n', 'mail_admin_agency_registration', '1', '0', '1407848139', '1407850511');
INSERT INTO `letters` VALUES ('3', 'Letter to agency after agency registration', '{{site}} - Site name\n{{agency}} - Agency name\n{{username}} - Login', 'mail_agency_registration', '1', '0', '1407850350', null);
INSERT INTO `letters` VALUES ('4', 'Letter to admin after registration of girl', '{{site}} - Site name\n{{girl}} - Girl name\n{{agency}} - Agency name', 'mail_admin_registration_girl', '1', '0', '1407851695', null);
INSERT INTO `letters` VALUES ('5', 'Letter to agency after registration of girl', '{{site}} - Site name\n{{girl}} - Girl name\n{{agency}} - Agency name', 'mail_agency_registration_girl', '1', '0', '1407851822', null);
INSERT INTO `letters` VALUES ('6', 'Letter to girl after registration', '{{site}} - Site name\n{{girl}} - Girl name\n{{agency}} - Agency name', 'mail_girl_registration_girl', '1', '0', '1407851947', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

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
  `status` tinyint(1) DEFAULT '0',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `balance` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of men
-- ----------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news_reviews
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES ('2', '1', 'terms-conditions', '4', '0', '0', '0', '1407309583', '1407315556', '1');
INSERT INTO `pages` VALUES ('3', '0', 'privacy', '5', '0', '0', '0', '1407310154', '1407315568', '1');
INSERT INTO `pages` VALUES ('4', '0', 'contact-us', '3', '0', '0', '0', '1407310262', '1407315578', '1');
INSERT INTO `pages` VALUES ('5', '0', 'main', '1', '0', '0', '0', '1407311209', null, '0');
INSERT INTO `pages` VALUES ('6', '0', 'about-us', '2', '0', '0', '0', '1407311502', '1407315586', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'login', 'Login privileges, granted after account confirmation', null);
INSERT INTO `roles` VALUES ('2', 'admin', 'Administrative user, has access to everything.', 'SuperAdmin');
INSERT INTO `roles` VALUES ('3', 'agency', 'Agency', 'Agency ');
INSERT INTO `roles` VALUES ('4', 'girls', 'Girls', 'Girl');

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
INSERT INTO `roles_users` VALUES ('7', '2');
INSERT INTO `roles_users` VALUES ('3', '3');
INSERT INTO `roles_users` VALUES ('4', '3');
INSERT INTO `roles_users` VALUES ('5', '4');
INSERT INTO `roles_users` VALUES ('6', '4');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seo
-- ----------------------------
INSERT INTO `seo` VALUES ('1', 'News list', 'news', 'index', '1', '1407824285', '1407824298');
INSERT INTO `seo` VALUES ('2', 'News archive', 'news', 'archive', '1', '1407824447', null);
INSERT INTO `seo` VALUES ('3', 'Gifts', 'gifts', 'index', '1', '1407909310', '1407909322');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seo_languages
-- ----------------------------
INSERT INTO `seo_languages` VALUES ('1', '1', 'en', 'News title', 'News H1', 'news keywords', 'news description');
INSERT INTO `seo_languages` VALUES ('2', '1', 'ru', 'Новости title', 'Новости H1', 'Новости description', 'Новости keywords');
INSERT INTO `seo_languages` VALUES ('3', '2', 'en', 'News archive titlle', 'News archive H1', 'News archive description', 'News archive keywords');
INSERT INTO `seo_languages` VALUES ('4', '2', 'ru', 'Архив новостей title', 'Архив новостей H1', 'Архив новостей description', 'Архив новостей keywords');
INSERT INTO `seo_languages` VALUES ('5', '3', 'en', 'Gifts and flowers  title', 'Gifts and flowers H1', 'Gifts and flowers description', 'Gifts and flowers keywords');
INSERT INTO `seo_languages` VALUES ('6', '3', 'ru', 'Подарки и цветы Title', 'Подарки и цветы H1', 'Подарки и цветы description', 'Подарки и цветы keywords');

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('3', 'email@email.com', 'login1', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '0', null, null);
INSERT INTO `users` VALUES ('4', 'mail@mail.com', 'login2', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '0', null, null);
INSERT INTO `users` VALUES ('5', 'email1@email.com', 'girl1', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '0', null, null);
INSERT INTO `users` VALUES ('6', 'email2@email.com', 'girl22', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '0', null, null);
INSERT INTO `users` VALUES ('7', 'emailadmin@emal.com', 'loginadmin1', '7bdcd76f83c6297370d3b3ed057f66b1fba7377f2a0c83300e478bdc2c40363a', '0', null, '1');

-- ----------------------------
-- Table structure for `user_gifts`
-- ----------------------------
DROP TABLE IF EXISTS `user_gifts`;
CREATE TABLE `user_gifts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_who` int(11) DEFAULT NULL,
  `id_to` int(11) DEFAULT NULL,
  `id_gift` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `cost` double(10,2) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `photo_with_girl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_gifts
-- ----------------------------

-- ----------------------------
-- Table structure for `user_letters`
-- ----------------------------
DROP TABLE IF EXISTS `user_letters`;
CREATE TABLE `user_letters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_who` int(11) DEFAULT NULL,
  `id_to` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `cost` double(10,2) DEFAULT NULL,
  `letter_title` varchar(255) DEFAULT NULL,
  `letter_text` text,
  `letter_status` tinyint(1) DEFAULT NULL,
  `del_status` tinyint(1) DEFAULT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_photos
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

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
  `zna` int(11) DEFAULT NULL,
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
