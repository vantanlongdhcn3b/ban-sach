/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : datn_book

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-19 09:44:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for author
-- ----------------------------
DROP TABLE IF EXISTS `author`;
CREATE TABLE `author` (
  `author_id` int(11) NOT NULL AUTO_INCREMENT,
  `author_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(1) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `descript_long` text COLLATE utf8_unicode_ci,
  `metakeyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `metadescription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`author_id`),
  FULLTEXT KEY `FullText` (`author_name`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of author
-- ----------------------------
INSERT INTO `author` VALUES ('1', ' Xuân Nguyễn tuyển chọn ', '', '1', '', null, '', '', '1492502088', '1494438918');
INSERT INTO `author` VALUES ('2', 'Văn Minh', 'http://localhost/hocphp/datn/source/clien-say1.jpg', '1', '<p>Chỉ trong v&ograve;ng hơn 6 th&aacute;ng xuất hiện, Hạ Vũ đ&atilde; x&acirc;y dựng th&agrave;nh c&ocirc;ng một trang facebook c&aacute; nh&acirc;n cập nhật đều đặn c&aacute;c tản văn tự viết, thu về h&agrave;ng trăm lượt chia sẻ, b&igrave;nh luận mỗi ng&agrave;y.Ngo&agrave;i ra, Hạ Vũ c&ograve;n được biết đến l&agrave; admin của chuỗi c&aacute;c fanpage t&acirc;m l&yacute; &ndash; t&igrave;nh cảm ...</p>', null, '', '', '1492503507', '1494129621');
INSERT INTO `author` VALUES ('3', 'Trần Đăng Khoa', null, '1', '', null, '', '', '1492672297', '1492672297');
INSERT INTO `author` VALUES ('4', 'Phạm Thị Dung', null, '1', null, null, null, null, '1493543513', '1493543513');
INSERT INTO `author` VALUES ('12', 'Hạ Vũ', null, '1', '<p>Chỉ trong v&ograve;ng hơn 6 th&aacute;ng xuất hiện, Hạ Vũ đ&atilde; x&acirc;y dựng th&agrave;nh c&ocirc;ng một trang facebook c&aacute; nh&acirc;n cập nhật đều đặn c&aacute;c tản văn tự viết, thu về h&agrave;ng trăm lượt chia sẻ, b&igrave;nh luận mỗi ng&agrave;y.Ngo&agrave;i ra, Hạ Vũ c&ograve;n được biết đến l&agrave; admin của chuỗi c&aacute;c fanpage t&acirc;m l&yacute; &ndash; t&igrave;nh cảm ...</p>', null, '', '', '1493546796', '1494106819');
INSERT INTO `author` VALUES ('13', 'Gào', 'http://localhost/hocphp/datn/source/gao.jpg', '1', '<p>G&agrave;o (Vũ Phương Thanh) sinh năm 1988, thuộc thế hệ những nh&agrave; văn cuối thời 8X. Trong v&agrave;i ba năm trở lại đ&acirc;y, c&aacute;i t&ecirc;n G&agrave;o đ&atilde; g&acirc;y được sự ch&uacute; &yacute; tr&ecirc;n văn đ&agrave;n, đặc biệt đối với giới trẻ tuổi teen y&ecirc;u văn học. C&ocirc; l&agrave; một blogger đ&iacute;nh đ&aacute;m v&agrave; được cộng đồng mạng phong danh ...</p>', null, '', '', '1494129580', '1494129580');
INSERT INTO `author` VALUES ('14', 'Napoleon Hill', 'http://localhost/hocphp/datn/source/132172_napoleonhill.jpg', '1', '<p>Napoleon Hill (Sinh ng&agrave;y 26 th&aacute;ng 10 năm 1883 - mất ng&agrave;y 8 th&aacute;ng 11 năm 1970) l&agrave; một t&aacute;c gia người Mỹ, một trong những người s&aacute;ng lập n&ecirc;n một thể loại văn học hiện đại đ&oacute; l&agrave; m&ocirc;n \"th&agrave;nh c&ocirc;ng học\" (l&agrave; khoa học về sự th&agrave;nh c&ocirc;ng của c&aacute; nh&acirc;n). T&aacute;c phẩm được cho l&agrave; nổi tiếng ...</p>', null, '', '', '1494312000', '1494312961');
INSERT INTO `author` VALUES ('15', 'Napoleon Hill', 'http://localhost/hocphp/datn/source/132172_napoleonhill.jpg', '1', '<p>J.K Rowling l&agrave; b&uacute;t danh của Joanne \"Jo\" Rowling, sinh ng&agrave;y 31/7/1965, cư ngụ tại thủ đ&ocirc; Edinburgh,Scotland l&agrave; tiểu thuyết gia người Anh, t&aacute;c giả bộ truyện giả tưởng nổi tiếng Harry Potter với b&uacute;t danh J. K. Rowling.Bộ s&aacute;ch n&agrave;y được h&agrave;ng triệu độc giả gi&agrave; trẻ tr&ecirc;n thế giới y&ecirc;u ...</p>', null, '', '', '1494312071', '1494313047');
INSERT INTO `author` VALUES ('16', 'J. K. Rowling ', 'http://localhost/hocphp/datn/source/133281_jk-rowling-sum2348620b.jpg', '1', '<p><strong>J.K Rowling</strong> l&agrave; b&uacute;t danh của <strong>J</strong><span style=\"line-height: 1.45em;\"><strong>oanne \"Jo\" Rowling</strong>, sinh ng&agrave;y 31/7/1965, cư ngụ tại thủ đ&ocirc; Edinburgh,Scotland l&agrave; tiểu thuyết gia người Anh, t&aacute;c giả bộ truyện giả tưởng nổi tiếng <a href=\"http://www.vinabook.com/?q=Harry+Potter\">Harry Potter</a> với b&uacute;t danh J. K. Rowling.</span></p>\r\n<p>Bộ s&aacute;ch n&agrave;y được h&agrave;ng triệu độc giả gi&agrave; trẻ tr&ecirc;n thế giới y&ecirc;u th&iacute;ch, nhận được nhiều giải thưởng li&ecirc;n tiếp v&agrave; đến năm 2005 b&aacute;n được 300 triệu bản tr&ecirc;n to&agrave;n thế giới....</p>', '<p><strong>J.K Rowling</strong> l&agrave; b&uacute;t danh của <strong>J</strong><span style=\"line-height: 1.45em;\"><strong>oanne \"Jo\" Rowling</strong>, sinh ng&agrave;y 31/7/1965, cư ngụ tại thủ đ&ocirc; Edinburgh,Scotland l&agrave; tiểu thuyết gia người Anh, t&aacute;c giả bộ truyện giả tưởng nổi tiếng <a href=\"http://www.vinabook.com/?q=Harry+Potter\">Harry Potter</a> với b&uacute;t danh J. K. Rowling.</span></p>\r\n<p>Bộ s&aacute;ch n&agrave;y được h&agrave;ng triệu độc giả gi&agrave; trẻ tr&ecirc;n thế giới y&ecirc;u th&iacute;ch, nhận được nhiều giải thưởng li&ecirc;n tiếp v&agrave; đến năm 2005 b&aacute;n được 300 triệu bản tr&ecirc;n to&agrave;n thế giới. V&agrave;o năm 2006, tạp ch&iacute; <a href=\"http://www.vinabook.com/?q=Forbes\">Forbes</a>&nbsp;xem b&agrave; l&agrave; người phụ nữ gi&agrave;u thứ hai trong lĩnh vực nghệ thuật giải tr&iacute; chỉ sau Oprah Winfrey. Năm 2007, sau th&agrave;nh c&ocirc;ng vang dội của truyện <a href=\"http://www.vinabook.com/harry-potter-va-bao-boi-tu-than-tap-7-m11i53574.html\">Harry Potter 7</a> v&agrave; phim <a href=\"http://www.vinabook.com/harry-potter-va-hoi-phuong-hoang-tap-5-m11i53550.html\">Harry Potter 5</a>, b&agrave; được tạp ch&iacute; US Entertainment Weekly l&agrave; 1 trong 25 nghệ sĩ của năm 2007. B&agrave; đ&atilde; được trao hu&acirc;n chương Bắc Đẩu Bội tinh v&agrave;o ng&agrave;y 3 th&aacute;ng 2 năm 2009 v&igrave; t&agrave;i năng xuất ch&uacute;ng về văn học thiếu nhi. Năm 2010 b&agrave; được trao Giải Văn học Hans Christian Andersen.</p>', 'J. K. Rowling , Harry Potter, phép thuật, thiếu nhi,', 'J. K. Rowling , Harry Potter, phép thuật, thiếu nhi,', '1494312489', '1494604903');
INSERT INTO `author` VALUES ('17', ' Nguyễn Đình Đầu ', '', '1', '', null, '', '', '1494313570', '1494313570');
INSERT INTO `author` VALUES ('18', 'ádfsdf', null, '1', null, null, null, null, '1494401609', '1494401609');
INSERT INTO `author` VALUES ('19', 'Tony Beshara ', '', '1', '', null, '', '', '1494439371', '1494439371');
INSERT INTO `author` VALUES ('20', 'Nguyễn Xuân Huy ', '', '1', '', null, '', '', '1494439795', '1494439795');
INSERT INTO `author` VALUES ('21', 'Richard N. Bolles ', '', '1', '', null, '', '', '1494440204', '1494440204');
INSERT INTO `author` VALUES ('22', ' Nguyễn Văn Hiếu', '', '1', '', null, '', '', '1494440590', '1494440590');
INSERT INTO `author` VALUES ('23', ' Đỗ Cao Bảo ', 'http://localhost/hocphp/datn/source/docaobao.png', '1', '<p>&Ocirc;ng Đỗ Cao Bảo l&agrave; nh&agrave; đồng s&aacute;ng lập, ph&oacute; tổng gi&aacute;m đốc phụ tr&aacute;ch kinh doanh tập đo&agrave;n FPT, tập đo&agrave;n c&ocirc;ng nghệ th&ocirc;ng tin số 1 Việt Nam với tr&ecirc;n 30.000 nh&acirc;n vi&ecirc;n. Gần 30 năm gắn b&oacute; với FPT, từ chuy&ecirc;n gia phần mềm chuyển sang kinh doanh v&agrave; quản l&yacute;, l&agrave; tổng gi&aacute;m đốc, chủ tịch c&ocirc;ng ty FPT IS, &ocirc;ng đ&atilde; dẫn dắt FPT IS trở th&agrave;nh quả đấm th&eacute;p của tập đo&agrave;n FPT...</p>', '<div class=\"title\">\r\n<div class=\"title\">ĐỖ CAO BẢO</div>\r\n<p>&Ocirc;ng Đỗ Cao Bảo l&agrave; nh&agrave; đồng s&aacute;ng lập, ph&oacute; tổng gi&aacute;m đốc phụ tr&aacute;ch kinh doanh tập đo&agrave;n FPT, tập đo&agrave;n c&ocirc;ng nghệ th&ocirc;ng tin số 1 Việt Nam với tr&ecirc;n 30.000 nh&acirc;n vi&ecirc;n. Gần 30 năm gắn b&oacute; với FPT, từ chuy&ecirc;n gia phần mềm chuyển sang kinh doanh v&agrave; quản l&yacute;, l&agrave; tổng gi&aacute;m đốc, chủ tịch c&ocirc;ng ty FPT IS, &ocirc;ng đ&atilde; dẫn dắt FPT IS trở th&agrave;nh quả đấm th&eacute;p của tập đo&agrave;n FPT, l&agrave; tổ chức x&acirc;y dựng v&agrave; triển khai hầu hết của hệ thống c&ocirc;ng nghệ th&ocirc;ng tin lớn cấp ng&agrave;nh, cấp quốc gia kh&ocirc;ng chỉ của Việt Nam m&agrave; của Laos, Cambodia, Philippines, Myanmar, Bangladesh. Với kh&aacute;t vọng mang tr&iacute; tuệ Việt Nam đi chinh phục thế giới, mang lại sự gi&agrave;u mạnh cho đất nước &ocirc;ng c&oacute; đam m&ecirc; v&agrave; kh&aacute;t vọng lớn l&agrave; FPT v&agrave; Việt Nam c&oacute; những giải ph&aacute;p c&ocirc;ng nghệ th&ocirc;ng tin lớn đủ sức cạnh tranh với c&aacute;c tập đo&agrave;n c&ocirc;ng nghệ th&ocirc;ng tin lớn của &Acirc;u, Mỹ, Nhật tr&ecirc;n thị trường to&agrave;n cầu. &Ocirc;ng đ&atilde; v&agrave; đang l&agrave;m hết sức m&igrave;nh để thực hiện kh&aacute;t vọng ấy.</p>\r\n</div>', 'đỗ cao bảo, tác giả đỗ cao bảo, FPT,', 'đỗ cao bảo, tác giả đỗ cao bảo, FPT,', '1494602793', '1494605009');
INSERT INTO `author` VALUES ('24', 'Hồng Hải ', 'http://localhost/hocphp/datn/source/tac_gia/228996_005.jpg', '1', '<p>B&uacute;t danh: Chris Le</p>\r\n<p>Nghề nghiệp: Doanh nh&acirc;n v&agrave; Họa sĩ</p>\r\n<p>Sinh năm 1979 tại Long An</p>\r\n<p>Hiện đang sinh sống v&agrave; l&agrave;m việc ở cả California v&agrave; S&agrave;i G&ograve;n</p>', '<p>B&uacute;t danh: Chris Le</p>\r\n<p>Nghề nghiệp: Doanh nh&acirc;n v&agrave; Họa sĩ</p>\r\n<p>Sinh năm 1979 tại Long An</p>\r\n<p>Hiện đang sinh sống v&agrave; l&agrave;m việc ở cả California v&agrave; S&agrave;i G&ograve;n</p>', 'Hồng Hải, Sách của tác giả Hồng Hải, thương được cứ thương đi,..', 'Hồng Hải, Sách của tác giả Hồng Hải, thương được cứ thương đi,..', '1494858792', '1494858792');
INSERT INTO `author` VALUES ('25', 'Nhiều tác giả ', '', '1', '', '', '', '', '1494861560', '1494861560');
INSERT INTO `author` VALUES ('26', 'HOÀNG THỊ THIÊM', '', '1', '', '', '', '', '1494865091', '1494865091');
INSERT INTO `author` VALUES ('27', 'Dan Brown ', 'http://localhost/hocphp/datn/source/tac_gia/137315_2.jpg', '1', '<p>Dan Brown sinh ng&agrave;y 22 th&aacute;ng 6 năm 1964 v&agrave; gia đ&igrave;nh ở Exeter, New Hampshire, &ocirc;ng l&agrave; con trưởng trong một gia đ&igrave;nh c&oacute; 3 anh em. Mẹ &ocirc;ng, Constance (Connie) l&agrave; một nhạc sĩ chuy&ecirc;n nghiệp, chơi đ&agrave;n organ trong nh&agrave; thờ. Cha &ocirc;ng, Richard G. Brown l&agrave; một thầy gi&aacute;o dạy to&aacute;n kh&aacute; nổi tiếng, từng ..</p>', '<p><em><strong>Dan Brown</strong></em> sinh ng&agrave;y 22 th&aacute;ng 6 năm 1964 v&agrave; gia đ&igrave;nh ở Exeter, New Hampshire, &ocirc;ng l&agrave; con trưởng trong một gia đ&igrave;nh c&oacute; 3 anh em. Mẹ &ocirc;ng, Constance (Connie) l&agrave; một nhạc sĩ chuy&ecirc;n nghiệp, chơi đ&agrave;n organ trong nh&agrave; thờ. Cha &ocirc;ng, Richard G. Brown l&agrave; một thầy gi&aacute;o dạy to&aacute;n kh&aacute; nổi tiếng, từng viết s&aacute;ch gi&aacute;o khoa v&agrave; dạy to&aacute;n tại trường Trung học tư thục Phillips Exeter từ năm 1962 v&agrave; nghỉ hưu năm 1997. </p>\r\n<p>Trường Trung học tư thục Phillips Exeter l&agrave; một trường nội tr&uacute; độc nhất với y&ecirc;u cầu c&aacute;c gi&aacute;o vi&ecirc;n cũng phải sống nội tr&uacute; trong nhiều năm, v&igrave; vậy anh em nh&agrave; Dan Brown đ&atilde; được nu&ocirc;i dạy dưới m&aacute;i trường n&agrave;y. M&ocirc;i trường x&atilde; hội tại Exeter thời đ&oacute; hầu như l&agrave; m&ocirc;i trường Cơ đốc gi&aacute;o. </p>\r\n<p>Brown h&aacute;t th&aacute;nh ca trong nh&agrave; thờ, tham gia v&agrave;o trường đạo v&agrave; d&agrave;nh cả m&ugrave;a h&egrave; để tham dự c&aacute;c cuộc cắm trại của nh&agrave; thờ. Tới năm lớp 9, Dan Brown bắt đầu ghi danh học tại trường c&ocirc;ng lập Phillips Exeter (kh&oacute;a 1982), sau n&agrave;y, v&agrave;o c&aacute;c năm 1985 v&agrave; 1993, em g&aacute;i Valerie v&agrave; em trai Gregory của Dan cũng ghi danh học tại đ&acirc;y.</p>', 'Dan Brown , pháo đàu số, ...', 'Dan Brown , pháo đàu số, ...', '1494866111', '1494866111');
INSERT INTO `author` VALUES ('28', 'KAI HOÀNG', '', '1', '<p>Kai Ho&agrave;ng &ldquo;Từng c&acirc;u chuyện t&ocirc;i viết dựa tr&ecirc;n những chi&ecirc;m nghiệm v&agrave; trải nghiệm của tuổi trẻ. Ở đ&oacute;, người ta c&oacute; thể lưu dấu những cột mốc quan trọng bằng ng&ocirc;n ngữ&rdquo;.S&aacute;ch đ&atilde; xuất bản:- Tuổi trẻ n&agrave;o rồi cũng sẽ qua (2015)- Gặp t&ocirc;i ng&agrave;y m&ecirc; sảng (2016)- Ng&agrave;y mai l&agrave; một ...</p>', '<p>Kai Ho&agrave;ng &ldquo;Từng c&acirc;u chuyện t&ocirc;i viết dựa tr&ecirc;n những chi&ecirc;m nghiệm v&agrave; trải nghiệm của tuổi trẻ. Ở đ&oacute;, người ta c&oacute; thể lưu dấu những cột mốc quan trọng bằng ng&ocirc;n ngữ&rdquo;.</p>\r\n<p><strong>S&aacute;ch đ&atilde; xuất bản:</strong></p>\r\n<p>- Tuổi trẻ n&agrave;o rồi cũng sẽ qua (2015)</p>\r\n<p>- Gặp t&ocirc;i ng&agrave;y m&ecirc; sảng (2016)</p>\r\n<p>- Ng&agrave;y mai l&agrave; một ng&agrave;y kh&aacute;c (2016)</p>\r\n<p>- Th&aacute;ng năm xanh lam (2017)</p>\r\n<p><strong>Giải thưởng:</strong></p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Giải nhất cuộc thi viết Những chuyến đi, B&aacute;o Mực T&iacute;m</li>\r\n<li>Gải nhất cuộc thi viết Mối t&igrave;nh đầu của t&ocirc;i, B&aacute;o Lao Động</li>\r\n<li>Giải ba thơ M&ugrave;a xu&acirc;n ở lại, Hội thơ Đồng Vọng</li>\r\n<li>Giải khuyến kh&iacute;ch truyện ngắn YoloBooks</li>\r\n<li>Giải truyện ngắn được y&ecirc;u th&iacute;ch Waka m&ugrave;a 2</li>\r\n</ul>', 'KAI HOÀNG, chiếc ô che mưa, hahaBook', 'KAI HOÀNG, chiếc ô che mưa, hahaBook', '1495132461', '1495132461');
INSERT INTO `author` VALUES ('29', 'Hạc Xanh ', '', '1', '', '', 'Hạc Xanh , truyện ngắn tản văn, hahaBook', 'Hạc Xanh , truyện ngắn tản văn, hahaBook', '1495133724', '1495133724');

-- ----------------------------
-- Table structure for auth_assignment
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('dung', '21', null);

-- ----------------------------
-- Table structure for auth_item
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('dung', '1', null, null, null, null, null);

-- ----------------------------
-- Table structure for auth_item_child
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------

-- ----------------------------
-- Table structure for auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT '1',
  `cat_id` int(11) DEFAULT NULL,
  `banner_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`banner_id`),
  KEY `product_id` (`product_id`),
  KEY `cat_id` (`cat_id`),
  CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `banner_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('1', '24', '1', null, 'http://localhost/hocphp/datn/source/banner/253166_desktop.jpg');
INSERT INTO `banner` VALUES ('2', '25', '1', null, 'http://localhost/hocphp/datn/source/banner/255584_desktopey1e-h8.jpg');
INSERT INTO `banner` VALUES ('3', '26', '1', null, 'http://localhost/hocphp/datn/source/banner/255582_desktop.jpg');
INSERT INTO `banner` VALUES ('4', '27', '1', null, 'http://localhost/hocphp/datn/source/banner/254843_desktopiask-fh.jpg');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `cat_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(1) NOT NULL DEFAULT '1',
  `metakeyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `metadescription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`),
  FULLTEXT KEY `FullText` (`cat_name`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('14', 'Sách ngoại văn', '0', 'http://localhost/hocphp/datn/source/category/ngoai_van.png', '1', 'sách ngoại văn', '', '1492600917', '1494672482');
INSERT INTO `category` VALUES ('15', 'Sách Kinh Tế', '0', 'http://localhost/hocphp/datn/source/category/kinh_te.png', '1', 'Sách kinh tế', 'Sách kinh tế, hahabook, sách kinh tế mới phát hành', '1492600986', '1494703551');
INSERT INTO `category` VALUES ('16', 'Sách Văn Học Trong Nước', '0', 'http://localhost/hocphp/datn/source/category/van_hoc_trong_nuoc___drop.png', '1', 'sách văn học trong nước', '', '1492601019', '1494672533');
INSERT INTO `category` VALUES ('17', 'Sách Văn Học Nước Ngoài', '0', 'http://localhost/hocphp/datn/source/category/van_hoc_nuoc_ngoai___crop.png', '1', 'Sách Văn Học Nước Ngoài', '', '1492601052', '1494672549');
INSERT INTO `category` VALUES ('18', 'Sách Thường Thức - Đời Sống', '0', 'http://localhost/hocphp/datn/source/category/thuong_thuc_doi_song.png', '1', 'Sách Thường Thức - Đời Sống', '', '1492601093', '1494672570');
INSERT INTO `category` VALUES ('19', 'Sách Thiếu Nhi', '0', 'http://localhost/hocphp/datn/source/category/sach_thieu_nhi___crop.png', '1', 'Sách Thiếu Nhi', '', '1492601154', '1494672584');
INSERT INTO `category` VALUES ('20', 'Sách Phát Triển Bản Thân', '0', 'http://localhost/hocphp/datn/source/category/phat_trien_ban_than.png', '1', 'Sách Phát Triển Bản Thân', '', '1492601187', '1494672605');
INSERT INTO `category` VALUES ('21', 'Sách Tin Học - Ngoại Ngữ', '0', 'http://localhost/hocphp/datn/source/category/tin_hoc_ngoai_ngu.png', '1', 'Sách Tin Học - Ngoại Ngữ', '', '1492601246', '1494672622');
INSERT INTO `category` VALUES ('22', 'Sách Chuyên Ngành', '0', 'http://localhost/hocphp/datn/source/category/sach_chuyen_nganh___crop.png', '1', 'Sách Chuyên Ngành', '', '1492601280', '1494675001');
INSERT INTO `category` VALUES ('23', 'Sách Giáo Khoa', '0', 'http://localhost/hocphp/datn/source/category/giao_khoa.png', '1', 'Sách Giáo Khoa', '', '1492601311', '1494675042');
INSERT INTO `category` VALUES ('24', 'Tạp Chí - Văn Phòng Phẩm', '0', 'http://localhost/hocphp/datn/source/category/tap_chi_2odt-sc.png', '1', 'Tạp Chí - Văn Phòng Phẩm', '', '1492601343', '1494673518');
INSERT INTO `category` VALUES ('25', 'Nhân Sự & Việc Làm', '15', null, '1', 'Nhân Sự & Việc Làm', '', '1492604546', '1492604546');
INSERT INTO `category` VALUES ('26', 'Marketing - Bán Hàng', '15', null, '1', 'Marketing - Bán Hàng', '', '1492605182', '1492605182');
INSERT INTO `category` VALUES ('28', 'Ngoại Thương', '15', null, '1', 'sách ngoại thương', '', '1492605716', '1492605716');
INSERT INTO `category` VALUES ('29', 'Nhân Vật Và Bài Học Kinh Doanh', '15', null, '1', 'Nhân Vật & Bài Học Kinh Doanh', '', '1492605934', '1492605934');
INSERT INTO `category` VALUES ('30', 'Phân Tích & Môi trường Kinh Tế', '15', null, '1', 'Phân Tích & Môi trường Kinh Tế', '', '1492605987', '1492605987');
INSERT INTO `category` VALUES ('31', 'Quản Trị & Lãnh Đạo', '15', null, '1', '', '', '1492606024', '1492606024');
INSERT INTO `category` VALUES ('32', 'Tài Chính & Tiền Tệ', '15', null, '1', 'Tài Chính & Tiền Tệ', '', '1492606067', '1492606067');
INSERT INTO `category` VALUES ('33', 'Tài Chính - Kế Toán', '15', null, '1', 'Tài Chính - Kế Toán', '', '1492606094', '1492606094');
INSERT INTO `category` VALUES ('34', 'Văn Bản Luật', '15', null, '1', 'Văn Bản Luật', '', '1492606145', '1492606145');
INSERT INTO `category` VALUES ('35', 'Đầu Tư & Chứng Khoán', '15', null, '1', 'Đầu Tư & Chứng Khoán', '', '1492606173', '1492606173');
INSERT INTO `category` VALUES ('36', 'Romance', '14', null, '1', 'sách ngoại văn lãng mạn - Romance', '', '1492630146', '1492630146');
INSERT INTO `category` VALUES ('37', 'Action & Adventure', '14', null, '1', 'Sách ngoại văn Action & Adventure', '', '1492630226', '1492630226');
INSERT INTO `category` VALUES ('38', 'Classics', '14', null, '1', 'Classics sách ngoại văn', '', '1492630278', '1492630278');
INSERT INTO `category` VALUES ('39', 'Business & Money', '14', null, '1', '', '', '1494311904', '1494311904');
INSERT INTO `category` VALUES ('40', 'Literature & Fiction', '14', null, '1', '', '', '1494312433', '1494312433');
INSERT INTO `category` VALUES ('41', 'Nhân vật văn học/Nhân vật lịch sử', '16', null, '1', '', '', '1494313150', '1494313150');
INSERT INTO `category` VALUES ('42', 'Phóng sự, ký sự', '16', null, '1', '', '', '1494313177', '1494313177');
INSERT INTO `category` VALUES ('43', 'Thơ ca', '16', null, '1', '', '', '1494313199', '1494313199');
INSERT INTO `category` VALUES ('44', 'Tiểu thuyết', '16', null, '1', '', '', '1494313222', '1494313222');
INSERT INTO `category` VALUES ('45', 'Tiểu thuyết lịch sử', '16', null, '1', '', '', '1494313241', '1494313241');
INSERT INTO `category` VALUES ('46', 'Truyện & thơ ca dân gian', '16', null, '1', '', '', '1494313264', '1494313264');
INSERT INTO `category` VALUES ('47', 'Truyện Dài', '16', null, '1', '', '', '1494313291', '1494313291');
INSERT INTO `category` VALUES ('48', 'Truyện giả tưởng – thần bí ', '16', null, '1', '', '', '1494313311', '1494313311');
INSERT INTO `category` VALUES ('49', 'Truyện kiếm hiệp', '16', null, '1', '', '', '1494313335', '1494313335');
INSERT INTO `category` VALUES ('50', 'Truyện ngắn – Tản văn', '16', null, '1', '', '', '1494313359', '1494313359');
INSERT INTO `category` VALUES ('51', 'Truyện Thiếu Nhi', '16', null, '1', '', '', '1494313385', '1494313385');
INSERT INTO `category` VALUES ('52', 'Truyện trinh thám, vụ án', '16', null, '1', '', '', '1494313406', '1494313406');
INSERT INTO `category` VALUES ('53', 'Tự truyện - Hồi Ký', '16', null, '1', '', '', '1494313430', '1494313430');
INSERT INTO `category` VALUES ('54', 'Tiểu thuyết', '17', '', '1', 'Sách văn học nước ngoài, Tiểu thuyết', 'Sách văn học nước ngoài, Tiểu thuyết', '1494866259', '1494866259');

-- ----------------------------
-- Table structure for communication
-- ----------------------------
DROP TABLE IF EXISTS `communication`;
CREATE TABLE `communication` (
  `communicate_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0' COMMENT '0 - chua doc, 1 da doc',
  `url` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `icon` text,
  `id` int(255) DEFAULT NULL,
  PRIMARY KEY (`communicate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of communication
-- ----------------------------
INSERT INTO `communication` VALUES ('35', '<span class=\"content\">Có đơn hàng mới</span>', '0', 'order', '1495130480', '<i class=\"fa fa-shopping-cart\"></i>', '73');
INSERT INTO `communication` VALUES ('36', '<span class=\"content\">Có đơn hàng mới</span>', '0', 'order', '1495134836', '<i class=\"fa fa-shopping-cart\"></i>', '74');
INSERT INTO `communication` VALUES ('37', '<span class=\"content\">Có đơn hàng mới</span>', '0', 'order', '1495135026', '<i class=\"fa fa-shopping-cart\"></i>', '75');
INSERT INTO `communication` VALUES ('38', '<span class=\"content\">Có đơn hàng mới</span>', '0', 'order', '1495135082', '<i class=\"fa fa-shopping-cart\"></i>', '76');
INSERT INTO `communication` VALUES ('39', '<span class=\"content\">Có đơn hàng mới</span>', '0', 'order', '1495135243', '<i class=\"fa fa-shopping-cart\"></i>', '77');
INSERT INTO `communication` VALUES ('40', 'Sản phẩm <span style=\"color:#F4786E\">Pháo Đài Số</span> sắp hết hàng - Còn 1 cuốn ', '0', 'product', '1495135243', 'product', '27');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `logo_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of contact
-- ----------------------------

-- ----------------------------
-- Table structure for feedback
-- ----------------------------
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0',
  `parent_cmt` int(11) DEFAULT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `FK_User_FD` (`user_id`),
  KEY `FK_Pd_FD` (`product_id`),
  CONSTRAINT `FK_Pd_FD` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_User_FD` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of feedback
-- ----------------------------
INSERT INTO `feedback` VALUES ('3', '15', '10', '', 'ádsd', null, '1494191110', '1', '1');
INSERT INTO `feedback` VALUES ('4', '16', '10', 'hahahha', 'hahahahahhaha', '4', '1494212172', '1', '0');
INSERT INTO `feedback` VALUES ('6', '19', '10', 'hay', 'rất hay!!!!!', '5', '1494225756', '1', '0');
INSERT INTO `feedback` VALUES ('7', '19', '5', 'mong đợi đã lâu', 'đọc để cảm nhận', '5', '1494229984', '1', '0');
INSERT INTO `feedback` VALUES ('8', '16', '14', 'max hay !!!!!', 'đỉnh của đỉnh', '5', '1494395143', '1', '0');
INSERT INTO `feedback` VALUES ('9', '5', '14', 'Hay!', 'Mong có thể sưu tập được cả bộ truyện về làm kỉ niêm.', '5', '1494667477', '0', '0');
INSERT INTO `feedback` VALUES ('10', '14', '14', 'Quá hay luôn!!!', 'Mình đã đọc bộ truyện này trên mạng và giờ mới có đủ điều kiện để mua cả bộ về ngắm, há há', '5', '1494701036', '0', '0');
INSERT INTO `feedback` VALUES ('11', '20', '14', 'cuốn sách hay nhất mình từng đọc', '<p>cảm ơn hahaBook, m&igrave;nh thấy rất h&agrave;i l&ograve;ng với c&aacute;ch l&agrave;m việc chuy&ecirc;n nghiệp của c&aacute;c bạn</p>', '5', '1494882824', '1', '0');

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `img_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(1) DEFAULT '1',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`img_id`),
  KEY `FK_PRO_IMG` (`product_id`),
  CONSTRAINT `FK_PRO_IMG` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES ('1', '14', '../../source/247708_p73664eimg644.jpg', '1', null, null);
INSERT INTO `images` VALUES ('2', '14', '../../source/247709_p73664e1.jpg', '1', null, null);
INSERT INTO `images` VALUES ('3', '14', '../../source/247710_p73664e2.jpg', '1', null, null);
INSERT INTO `images` VALUES ('4', '14', '../../source/247711_p73664e3.jpg', '1', null, null);
INSERT INTO `images` VALUES ('5', '14', '../../source/247712_p73664e4.jpg', '1', null, null);
INSERT INTO `images` VALUES ('6', '14', '../../source/247713_p73664e5.jpg', '1', null, null);
INSERT INTO `images` VALUES ('7', '16', '../../source/155887_p59348etd1.jpg', '1', null, null);
INSERT INTO `images` VALUES ('8', '16', '../../source/155888_p59348etd2.jpg', '1', null, null);
INSERT INTO `images` VALUES ('9', '16', '../../source/155891_p59348etd3.jpg', '1', null, null);
INSERT INTO `images` VALUES ('10', '16', '../../source/155892_p59348etd4.jpg', '1', null, null);
INSERT INTO `images` VALUES ('11', '16', '../../source/155893_p59348etd5.jpg', '1', null, null);
INSERT INTO `images` VALUES ('12', '16', '../../source/240618_p72755eimg219_0.jpg', '1', null, null);
INSERT INTO `images` VALUES ('13', '17', '../../source/249370_p73878eimg464_0.jpg', '1', null, null);
INSERT INTO `images` VALUES ('14', '17', '../../source/249371_p73878e1_0.jpg', '1', null, null);
INSERT INTO `images` VALUES ('15', '17', '../../source/249372_p73878e2_0.jpg', '1', null, null);
INSERT INTO `images` VALUES ('16', '17', '../../source/249373_p73878e3_0.jpg', '1', null, null);
INSERT INTO `images` VALUES ('17', '17', '../../source/249374_p73878e4_0.jpg', '1', null, null);
INSERT INTO `images` VALUES ('18', '17', '../../source/249375_p73878e5_0.jpg', '1', null, null);
INSERT INTO `images` VALUES ('19', '17', '../../source/249376_p73878eimg463_0.jpg', '1', null, null);
INSERT INTO `images` VALUES ('20', '18', '../../source/210560_p68311eml.jpg', '1', null, null);
INSERT INTO `images` VALUES ('21', '18', '../../source/210561_p68311e1.jpg', '1', null, null);
INSERT INTO `images` VALUES ('22', '18', '../../source/210562_p68311e2.jpg', '1', null, null);
INSERT INTO `images` VALUES ('23', '18', '../../source/210563_p68311e3.jpg', '1', null, null);
INSERT INTO `images` VALUES ('24', '18', '../../source/210564_p68311e4.jpg', '1', null, null);
INSERT INTO `images` VALUES ('25', '18', '../../source/210565_p68311e5.jpg', '1', null, null);
INSERT INTO `images` VALUES ('26', '19', '../../source/192921_p65543eml.jpg', '1', null, null);
INSERT INTO `images` VALUES ('27', '19', '../../source/192922_p65543e1.jpg', '1', null, null);
INSERT INTO `images` VALUES ('28', '19', '../../source/192923_p65543e2.jpg', '1', null, null);
INSERT INTO `images` VALUES ('29', '19', '../../source/192924_p65543e3.jpg', '1', null, null);
INSERT INTO `images` VALUES ('30', '19', '../../source/192925_p65543e4.jpg', '1', null, null);
INSERT INTO `images` VALUES ('31', '19', '../../source/192926_p65543e5.jpg', '1', null, null);
INSERT INTO `images` VALUES ('32', '21', '../../source/253697_p74232eimg799.jpg', '1', null, null);
INSERT INTO `images` VALUES ('33', '21', '../../source/253698_p74232e1.jpg', '1', null, null);
INSERT INTO `images` VALUES ('34', '21', '../../source/253699_p74232e2.jpg', '1', null, null);
INSERT INTO `images` VALUES ('35', '21', '../../source/253700_p74232e3.jpg', '1', null, null);
INSERT INTO `images` VALUES ('36', '21', '../../source/253701_p74232e4.jpg', '1', null, null);
INSERT INTO `images` VALUES ('37', '21', '../../source/253702_p74232e5.jpg', '1', null, null);
INSERT INTO `images` VALUES ('38', '24', '../../source/252349_p74221eimg918.jpg', '1', null, null);
INSERT INTO `images` VALUES ('39', '24', '../../source/252350_p74221e1.jpg', '1', null, null);
INSERT INTO `images` VALUES ('40', '24', '../../source/252351_p74221e2.jpg', '1', null, null);
INSERT INTO `images` VALUES ('41', '24', '../../source/252352_p74221e3.jpg', '1', null, null);
INSERT INTO `images` VALUES ('42', '24', '../../source/252353_p74221e4.jpg', '1', null, null);
INSERT INTO `images` VALUES ('43', '24', '../../source/252354_p74221e5.jpg', '1', null, null);
INSERT INTO `images` VALUES ('44', '25', '../../source/256089_p75398eimg799.jpg', '1', null, null);
INSERT INTO `images` VALUES ('45', '25', '../../source/256090_p75398eimg800.jpg', '1', null, null);
INSERT INTO `images` VALUES ('46', '25', '../../source/256091_p75398eimg801.jpg', '1', null, null);
INSERT INTO `images` VALUES ('47', '25', '../../source/256092_p75398eimg802.jpg', '1', null, null);
INSERT INTO `images` VALUES ('48', '25', '../../source/256093_p75398eimg803.jpg', '1', null, null);
INSERT INTO `images` VALUES ('49', '25', '../../source/256094_p75398eimg805.jpg', '1', null, null);
INSERT INTO `images` VALUES ('50', '26', '../../source/254465_p75386emucluc.jpg', '1', null, null);
INSERT INTO `images` VALUES ('51', '26', '../../source/254466_p75386e001.jpg', '1', null, null);
INSERT INTO `images` VALUES ('52', '26', '../../source/254467_p75386e002.jpg', '1', null, null);
INSERT INTO `images` VALUES ('53', '26', '../../source/254468_p75386e003.jpg', '1', null, null);
INSERT INTO `images` VALUES ('54', '26', '../../source/254469_p75386e004.jpg', '1', null, null);
INSERT INTO `images` VALUES ('55', '27', '../../source/256630_p75383escan0001.jpg', '1', null, null);
INSERT INTO `images` VALUES ('56', '27', '../../source/256631_p75383escan0002.jpg', '1', null, null);
INSERT INTO `images` VALUES ('57', '27', '../../source/256632_p75383escan0003.jpg', '1', null, null);
INSERT INTO `images` VALUES ('58', '27', '../../source/256633_p75383escan0004.jpg', '1', null, null);
INSERT INTO `images` VALUES ('59', '27', '../../source/256634_p75383escan0005.jpg', '1', null, null);
INSERT INTO `images` VALUES ('60', '28', '../../source/247249_p73614eimg330.jpg', '1', null, null);
INSERT INTO `images` VALUES ('61', '28', '../../source/247250_p73614e1.jpg', '1', null, null);
INSERT INTO `images` VALUES ('62', '28', '../../source/247251_p73614e2.jpg', '1', null, null);
INSERT INTO `images` VALUES ('63', '28', '../../source/247252_p73614e3.jpg', '1', null, null);
INSERT INTO `images` VALUES ('64', '28', '../../source/247253_p73614e4.jpg', '1', null, null);
INSERT INTO `images` VALUES ('65', '28', '../../source/247254_p73614e5.jpg', '1', null, null);

-- ----------------------------
-- Table structure for migration
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
INSERT INTO `migration` VALUES ('m000000_000000_base', '1490469626');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1490469630');
INSERT INTO `migration` VALUES ('m140506_102106_rbac_init', '1492478807');
INSERT INTO `migration` VALUES ('m170325_204154_province', '1490474692');
INSERT INTO `migration` VALUES ('m170325_204654_category', '1490475891');
INSERT INTO `migration` VALUES ('m170325_212650_publisher', '1490477800');
INSERT INTO `migration` VALUES ('m170325_212827_supplier', '1490477801');
INSERT INTO `migration` VALUES ('m170325_213730_category', '1490477903');
INSERT INTO `migration` VALUES ('m170325_214304_category1', '1490478258');
INSERT INTO `migration` VALUES ('m170325_214839_category', '1490478554');
INSERT INTO `migration` VALUES ('m170325_220543_author', '1490483798');
INSERT INTO `migration` VALUES ('m170325_220624_translator', '1490483798');
INSERT INTO `migration` VALUES ('m170325_232152_translator', '1490484152');
INSERT INTO `migration` VALUES ('m170325_232702_payment', '1490484773');
INSERT INTO `migration` VALUES ('m170325_232743_transport', '1490484773');
INSERT INTO `migration` VALUES ('m170325_233323_contact', '1490485947');
INSERT INTO `migration` VALUES ('m170325_235535_product', '1490543245');
INSERT INTO `migration` VALUES ('m170326_155233_images', '1490544423');
INSERT INTO `migration` VALUES ('m170326_160620_contact', '1490544576');
INSERT INTO `migration` VALUES ('m170326_161105_images', '1490544886');
INSERT INTO `migration` VALUES ('m170326_161537_order', '1490546746');
INSERT INTO `migration` VALUES ('m170326_164611_order_detail', '1490547194');

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `request` text COLLATE utf8_unicode_ci,
  `user_check` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `status` smallint(6) DEFAULT '1' COMMENT '1 mới đtặ hàng, 2 đang giao hàng, 3 đã thanh toán, 4 hủy đơn hàng',
  `payment_id` int(11) DEFAULT NULL,
  `transport_id` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `FK_PAY` (`payment_id`),
  KEY `FK_TRANS` (`transport_id`),
  KEY `FK_USER` (`user_id`),
  CONSTRAINT `FK_PAY` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_TRANS` FOREIGN KEY (`transport_id`) REFERENCES `transport` (`transport_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_USER` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES ('26', '16', 'linh123456', 'linh123@gmail.com', '0975738903', 'đội cấn', 'k có gì', null, '315634', '1', null, null, null, '2017-05-04 04:01:16', '1493863276');
INSERT INTO `order` VALUES ('27', '17', 'Phạm Thị Dung', 'mama@gmail.com', '8574658967', 'đội cấn', '', null, '499200', '4', null, null, null, '2017-05-04 08:33:35', '1493879615');
INSERT INTO `order` VALUES ('28', '5', 'phamgiang', 'phamgiang@gmail.com', '0975738903', '33/37/194 đội cấn ba đình hà nội', '', null, '224000', '1', '1', null, null, '2017-05-14 09:41:28', '1494747688');
INSERT INTO `order` VALUES ('29', '5', 'phamgiang', 'phamgiang@gmail.com', '09632782763', 'giao thủy, nam định', '', null, '160000', '1', '1', null, null, '2017-05-14 09:43:38', '1494747818');
INSERT INTO `order` VALUES ('30', '2', 'dungpham', 'dungpt@gmail.com', '0986988345', 'mai động cầu giấy', '', null, '913750', '1', '1', null, null, '2017-05-14 09:54:57', '1494748497');
INSERT INTO `order` VALUES ('31', '2', 'dungpham', 'dungpt@gmail.com', '023434343', 'lạc long quân', '', null, '850000', '1', '1', null, null, '2017-05-14 09:57:24', '1494748644');
INSERT INTO `order` VALUES ('36', '2', 'dungpham', 'dungpt@gmail.com', '0964758473', 'nhà b, ngõ a, xom c Hà Nội', 'có thể giao trước 3 ngày được k bạn', null, '240000', '1', '1', null, null, '2017-05-14 14:33:57', '1494765237');
INSERT INTO `order` VALUES ('40', '2', 'Phạm Thị Dung', 'dungpt@gmail.com', '003598485', 'đội cấn ba đình hà nội', '', null, '240000', '1', '1', null, null, '2017-05-14 17:38:17', '1494776297');
INSERT INTO `order` VALUES ('41', '2', 'dungpham', 'dungpt@gmail.com', '0986431457', '0967546733', '', null, '400000', '1', '1', null, null, '2017-05-14 17:46:53', '1494776813');
INSERT INTO `order` VALUES ('42', '2', 'dungpham', 'dungpt@gmail.com', '0986431457', '0967546733', '', null, '400000', '1', '1', null, null, '2017-05-14 17:47:33', '1494776853');
INSERT INTO `order` VALUES ('43', '2', 'dungpham', 'dungpt@gmail.com', '0986431457', '0967546733', '', null, '400000', '1', '1', null, null, '2017-05-14 17:47:50', '1494776870');
INSERT INTO `order` VALUES ('44', '5', 'phamgiang', 'phamgiang@gmail.com', '0987657478', 'ba đình hà nội', '', null, '320000', '1', '1', null, null, '2017-05-14 18:01:24', '1494777684');
INSERT INTO `order` VALUES ('45', '16', 'linh123456', 'linh123@gmail.com', 'jsdhfhjs', 'skdfbjhf', '', null, '1725600', '1', '1', null, null, '2017-05-14 18:18:44', '1494778724');
INSERT INTO `order` VALUES ('46', '20', 'Phạm Văn Long', 'long@gmail.com', '0987656555', 'Dak Lak', '', null, '1080000', '1', '1', null, null, '2017-05-14 18:24:02', '1494779042');
INSERT INTO `order` VALUES ('48', '21', 'Dung Phạm', 'phamdung282@gmail.com', '0965748474', 'lạc long quân', 'đến thì gọi', null, '80000', '3', '1', null, null, '2017-05-15 21:03:27', '1494875007');
INSERT INTO `order` VALUES ('50', '21', 'Dung Phạm', 'phamdung282@gmail.com', '095984758', 'đội cấn', '', null, '118400', '2', '1', null, null, '2017-05-15 21:16:30', '1494875790');
INSERT INTO `order` VALUES ('51', '21', 'Dung Phạm', 'phamdung282@gmail.com', '09757566484', 'nam định', '', null, '85400', '1', '1', null, null, '2017-05-15 21:19:33', '1494875973');
INSERT INTO `order` VALUES ('52', '20', 'Phạm Văn Long', 'phamdung282@gmail.com', '0975738903', 'bạch long', '', null, '80000', '1', '1', null, null, '2017-05-15 21:22:42', '1494876162');
INSERT INTO `order` VALUES ('53', '20', 'Phạm Văn Long', 'phamdung282@gmail.com', '05096052', 'abc', '', null, '51200', '1', '1', null, null, '2017-05-15 21:31:01', '1494876661');
INSERT INTO `order` VALUES ('54', '20', 'Phạm Văn Long', 'phamdung282@gmail.com', '03450458979', 'khffm', '', null, '65600', '1', '1', null, null, '2017-05-15 21:32:37', '1494876757');
INSERT INTO `order` VALUES ('55', '20', 'Phạm Văn Long', 'phamdung282@gmail.com', '09632782763', 'hà nội 36 phố phường', '', null, '300000', '1', '1', null, null, '2017-05-15 21:34:00', '1494876840');
INSERT INTO `order` VALUES ('56', '20', 'Phạm Văn Long', 'phamdung282@gmail.com', '0966775675', 'đội cấn', '', null, '65600', '1', '1', null, null, '2017-05-15 21:37:43', '1494877063');
INSERT INTO `order` VALUES ('57', '20', 'Phạm Văn Long', 'phamdung282@gmail.com', '0966775675', 'đội cấn', '', null, '65600', '1', '1', null, null, '2017-05-15 21:40:29', '1494877229');
INSERT INTO `order` VALUES ('58', '20', 'Phạm Văn Long', 'long@gmail.com', '0646383833', 'ngõ 3 đường khương trung thành phố hà nội', '', null, '500000', '1', '1', null, null, '2017-05-15 23:49:52', '1494884992');
INSERT INTO `order` VALUES ('59', '5', 'phamgiang', 'phamgiang@gmail.com', '01668641830', 'ngõ 4/5 đội cấn ba đình hà nội', '', null, '1000000', '1', '1', null, null, '2017-05-15 23:53:17', '1494885197');
INSERT INTO `order` VALUES ('60', '5', 'phamgiang', 'phamgiang@gmail.com', '01668641830', 'ngõ 4/5 đội cấn ba đình hà nội', '', null, '1000000', '1', '1', null, null, '2017-05-15 23:57:37', '1494885457');
INSERT INTO `order` VALUES ('61', '5', 'phamgiang', 'phamgiang@gmail.com', '01668641830', 'ngõ 4/5 đội cấn ba đình hà nội', '', null, '1000000', '1', '1', null, null, '2017-05-15 23:59:04', '1494885544');
INSERT INTO `order` VALUES ('62', '5', 'phamgiang', 'phamgiang@gmail.com', '01668641830', 'ngõ 4/5 đội cấn ba đình hà nội', '', null, '1000000', '1', '1', null, null, '2017-05-16 00:01:11', '1494885671');
INSERT INTO `order` VALUES ('63', '5', 'phamgiang', 'phamgiang@gmail.com', '01668641830', 'ngõ 4/5 đội cấn ba đình hà nội', '', null, '1000000', '1', '1', null, null, '2017-05-16 00:01:48', '1494885708');
INSERT INTO `order` VALUES ('64', '5', 'phamgiang', 'phamgiang@gmail.com', '01668641830', 'ngõ 4/5 đội cấn ba đình hà nội', '', null, '1000000', '1', '1', null, null, '2017-05-16 00:03:01', '1494885781');
INSERT INTO `order` VALUES ('65', '5', 'phamgiang', 'phamgiang@gmail.com', '01668641830', 'ngõ 4/5 đội cấn ba đình hà nội', '', null, '1000000', '1', '1', null, null, '2017-05-16 00:03:20', '1494885800');
INSERT INTO `order` VALUES ('66', '5', 'phamgiang', 'phamgiang@gmail.com', '01668641830', 'ngõ 4/5 đội cấn ba đình hà nội', '', null, '1000000', '1', '1', null, null, '2017-05-16 00:03:48', '1494885828');
INSERT INTO `order` VALUES ('67', '5', 'phamgiang', 'phamgiang@gmail.com', '01686165225', 'Đội cấn ba đình hà nội', 'giao hàng sau 5h chiều hoặc trước 9 giờ sáng', null, '160000', '1', '1', null, null, '2017-05-17 09:48:23', '1495007303');
INSERT INTO `order` VALUES ('68', '5', 'phamgiang', 'phamgiang@gmail.com', '34565767', 'sdfdg', '', null, '160000', '1', '1', null, null, '2017-05-17 11:14:38', '1495012478');
INSERT INTO `order` VALUES ('69', '5', 'phamgiang', 'phamgiang@gmail.com', '34565767', 'sdfdg', '', null, '160000', '1', '1', null, null, '2017-05-17 11:14:38', '1495012478');
INSERT INTO `order` VALUES ('70', '5', 'phamgiang', 'phamgiang@gmail.com', '09632782763', 'dffhgj', '', null, '160000', '1', '1', null, null, '2017-05-17 11:16:05', '1495012565');
INSERT INTO `order` VALUES ('71', '5', 'phamgiang', 'phamgiang@gmail.com', '0975738903', 'nghệ an', '', null, '65600', '1', '1', null, null, '2017-05-17 16:31:06', '1495013466');
INSERT INTO `order` VALUES ('72', '21', 'Dung Phạm', 'phamdung282@gmail.com', '0978675667', 'hhgjjghjk', '', null, '85400', '1', '1', null, null, '2017-05-17 16:42:51', '1495014171');
INSERT INTO `order` VALUES ('73', '21', 'Dung Phạm', 'phamdung282@gmail.com', '0975738903', 'xóm 8 Bạch Long, Giao Thủy Nam Định', 'giao cho mình trước ngày 30/5 được không', null, '120000', '1', '1', null, null, '2017-05-19 01:01:19', '1495130479');
INSERT INTO `order` VALUES ('74', '21', 'Dung Phạm', 'phamdung282@gmail.com', '0975738903', 'hà nội', '', null, '75000', '1', '1', null, null, '2017-05-19 02:13:56', '1495134836');
INSERT INTO `order` VALUES ('75', '21', 'Dung Phạm', 'phamdung282@gmail.com', 'dfgfg', 'ba đình hà nội', '', null, '37500', '1', '1', null, null, '2017-05-19 02:17:06', '1495135026');
INSERT INTO `order` VALUES ('76', '21', 'Dung Phạm', 'phamdung282@gmail.com', 'dfgfg', 'ba đình hà nội', '', null, '37500', '1', '1', null, null, '2017-05-19 02:18:01', '1495135081');
INSERT INTO `order` VALUES ('77', '21', 'Dung Phạm', 'phamdung282@gmail.com', '0975738903', 'hà nội', '', null, '85400', '1', '1', null, null, '2017-05-19 02:20:43', '1495135243');

-- ----------------------------
-- Table structure for order_detail
-- ----------------------------
DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail` (
  `detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` smallint(6) DEFAULT NULL COMMENT '1 mới đặt hàng, 2 đang giao hàng, 3 đã thanh toán, 4 hủy đơn hàng',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `user_check` int(11) DEFAULT NULL,
  PRIMARY KEY (`detail_id`),
  KEY `FK_ORDER` (`order_id`),
  KEY `FK_PRO` (`product_id`),
  CONSTRAINT `FK_ORDER` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `FK_PRO` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of order_detail
-- ----------------------------
INSERT INTO `order_detail` VALUES ('3', '26', '9', '74100', '2', '1', '1493863276', '1493863276', null);
INSERT INTO `order_detail` VALUES ('5', '26', '10', '44000', '2', '1', '1493863276', '1493863276', null);
INSERT INTO `order_detail` VALUES ('6', '26', '5', '79200', '1', '1', '1493863276', '1493863276', null);
INSERT INTO `order_detail` VALUES ('7', '27', '5', '79200', '3', '1', '1493879615', '1493879615', null);
INSERT INTO `order_detail` VALUES ('8', '27', '8', '87200', '3', '1', '1493879615', '1493879615', null);
INSERT INTO `order_detail` VALUES ('9', '28', '10', '44000', '4', '1', '1494747688', '1494747688', null);
INSERT INTO `order_detail` VALUES ('10', '29', '21', '160000', '1', '1', '1494747818', '1494747818', null);
INSERT INTO `order_detail` VALUES ('11', '30', '14', '850000', '1', '1', '1494748497', '1494748497', null);
INSERT INTO `order_detail` VALUES ('12', '31', '14', '850000', '1', '1', '1494748644', '1494748644', null);
INSERT INTO `order_detail` VALUES ('21', '42', '19', '80000', '3', '1', '1494776853', '1494776853', null);
INSERT INTO `order_detail` VALUES ('22', '43', '19', '80000', '3', '1', '1494776870', '1494776870', null);
INSERT INTO `order_detail` VALUES ('23', '44', '21', '80000', '4', '1', '1494777684', '1494777684', null);
INSERT INTO `order_detail` VALUES ('24', '45', '14', '500000', '1', '1', '1494778724', '1494778724', null);
INSERT INTO `order_detail` VALUES ('25', '46', '21', '80000', '1', '1', '1494779042', '1494779042', null);
INSERT INTO `order_detail` VALUES ('26', '48', '21', '80000', '1', '1', '1494875007', '1494875007', null);
INSERT INTO `order_detail` VALUES ('28', '50', '26', '118400', '1', '1', '1494875790', '1494875790', null);
INSERT INTO `order_detail` VALUES ('29', '51', '27', '85400', '1', '1', '1494875973', '1494875973', null);
INSERT INTO `order_detail` VALUES ('30', '52', '15', '80000', '1', '1', '1494876162', '1494876162', null);
INSERT INTO `order_detail` VALUES ('31', '53', '18', '25600', '2', '1', '1494876661', '1494876661', null);
INSERT INTO `order_detail` VALUES ('32', '54', '24', '65600', '1', '1', '1494876757', '1494876757', null);
INSERT INTO `order_detail` VALUES ('33', '55', '13', '300000', '1', '1', '1494876840', '1494876840', null);
INSERT INTO `order_detail` VALUES ('34', '56', '24', '65600', '1', '1', '1494877063', '1494877063', null);
INSERT INTO `order_detail` VALUES ('35', '57', '24', '65600', '1', '1', '1494877229', '1494877229', null);
INSERT INTO `order_detail` VALUES ('36', '58', '14', '500000', '1', '1', '1494884992', '1494884992', null);
INSERT INTO `order_detail` VALUES ('37', '59', '14', '500000', '2', '1', '1494885197', '1494885197', null);
INSERT INTO `order_detail` VALUES ('38', '60', '14', '500000', '2', '1', '1494885457', '1494885457', null);
INSERT INTO `order_detail` VALUES ('39', '61', '14', '500000', '2', '1', '1494885544', '1494885544', null);
INSERT INTO `order_detail` VALUES ('40', '62', '14', '500000', '2', '1', '1494885671', '1494885671', null);
INSERT INTO `order_detail` VALUES ('41', '63', '14', '500000', '2', '1', '1494885708', '1494885708', null);
INSERT INTO `order_detail` VALUES ('42', '64', '14', '500000', '2', '1', '1494885781', '1494885781', null);
INSERT INTO `order_detail` VALUES ('43', '65', '14', '500000', '2', '1', '1494885800', '1494885800', null);
INSERT INTO `order_detail` VALUES ('44', '66', '14', '500000', '2', '1', '1494885828', '1494885828', null);
INSERT INTO `order_detail` VALUES ('45', '67', '21', '80000', '2', '1', '1495007303', '1495007303', null);
INSERT INTO `order_detail` VALUES ('46', '68', '21', '80000', '2', '1', '1495012478', '1495012478', null);
INSERT INTO `order_detail` VALUES ('47', '69', '21', '80000', '2', '1', '1495012478', '1495012478', null);
INSERT INTO `order_detail` VALUES ('48', '70', '21', '80000', '2', '1', '1495012565', '1495012565', null);
INSERT INTO `order_detail` VALUES ('49', '71', '24', '65600', '1', '1', '1495013466', '1495013466', null);
INSERT INTO `order_detail` VALUES ('50', '72', '27', '85400', '1', '1', '1495014171', '1495014171', null);
INSERT INTO `order_detail` VALUES ('51', '73', '28', '120000', '1', '1', '1495130479', '1495130479', null);
INSERT INTO `order_detail` VALUES ('52', '74', '22', '37500', '2', '1', '1495134836', '1495134836', null);
INSERT INTO `order_detail` VALUES ('53', '75', '22', '37500', '1', '1', '1495135026', '1495135026', null);
INSERT INTO `order_detail` VALUES ('54', '76', '22', '37500', '1', '1', '1495135081', '1495135081', null);
INSERT INTO `order_detail` VALUES ('55', '77', '27', '85400', '1', '1', '1495135243', '1495135243', null);

-- ----------------------------
-- Table structure for order_in
-- ----------------------------
DROP TABLE IF EXISTS `order_in`;
CREATE TABLE `order_in` (
  `order_in_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price_in` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `user_create` varchar(255) NOT NULL,
  PRIMARY KEY (`order_in_id`),
  KEY `product_id` (`product_id`),
  KEY `user_id` (`user_create`),
  CONSTRAINT `order_in_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_in
-- ----------------------------
INSERT INTO `order_in` VALUES ('27', '14', '100', '600000', '1494758827', '1', '16');
INSERT INTO `order_in` VALUES ('28', '14', '150000', '500000', '1494758958', '1', '16');
INSERT INTO `order_in` VALUES ('29', '22', '50', '150000', '1494762398', '1', 'linh123456');
INSERT INTO `order_in` VALUES ('30', '14', '20', '300000', '1494771595', '1', 'linh123456');

-- ----------------------------
-- Table structure for payment
-- ----------------------------
DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of payment
-- ----------------------------
INSERT INTO `payment` VALUES ('1', 'Thanh toán tiền mặt khi nhận hàng', '', '1493402168', '1493402168');
INSERT INTO `payment` VALUES ('2', 'Thẻ ATM đăng ký Internet Banking (Miễn phí thanh toán) ', '', '1493402214', '1493402214');
INSERT INTO `payment` VALUES ('3', 'Thanh toán bằng thẻ quốc tế Visa, MasterCard, JCB ', '', '1493402249', '1493402249');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `translator_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL,
  `price_out` int(11) NOT NULL,
  `sale` float NOT NULL,
  `sale_startdate` datetime DEFAULT NULL,
  `sale_enddate` datetime DEFAULT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `status` smallint(1) NOT NULL,
  `republish` int(11) DEFAULT NULL,
  `qty_page` int(11) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `barcode` bigint(20) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_after` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `made_in` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `descript_short` text COLLATE utf8_unicode_ci,
  `published` date DEFAULT NULL,
  `date_release` date DEFAULT NULL,
  `metakeyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `metadescription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_create` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `FK_AUTHOR` (`author_id`),
  KEY `FK_CAT` (`cat_id`),
  KEY `FK_PUB` (`publisher_id`),
  KEY `FK_SUPPLIER` (`supplier_id`),
  KEY `FK_TRANSLATOR` (`translator_id`),
  FULLTEXT KEY `FullText` (`product_name`,`metakeyword`),
  CONSTRAINT `FK_AUTHOR` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_CAT` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_PUB` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`publisher_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_SUPPLIER` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_TRANSLATOR` FOREIGN KEY (`translator_id`) REFERENCES `translator` (`translator_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('5', 'Bí Mật Về Tiền: Những Điều Trường Học Không Bao Giờ Dạy Bạn', '32', null, null, null, null, '79000', '20', null, null, '200', '1', null, null, null, '', null, 'http://localhost/hocphp/datn/source/203616_p67313mbt.jpg', null, '', '', '<p>Đ&atilde; bao giờ bạn tự hỏi ch&iacute;nh m&igrave;nh: \"Nếu t&ocirc;i d&aacute;m mạo hiểm, cuộc sống của t&ocirc;i c&oacute; tốt đẹp hơn kh&ocirc;ng?\". Với kiến thức s&acirc;u rộng m&agrave; bạn c&oacute;, v&ocirc; v&agrave;n điều sẽ tốt l&ecirc;n trong cuộc sống của bạn. Tuy vậy, ch&uacute;ng ta lại đang sống trong một thế giới m&agrave; \"sai một li đi một dặm\".</p>\r\n<p>Thật đ&aacute;ng tiếc khi bạn được đầu tư cho gi&aacute;o dục một c&aacute;ch kỹ lưỡng, c&oacute; bằng cấp, c&oacute; một mức lương kh&aacute;, c&oacute; thể hỗ trợ gia đ&igrave;nh v&agrave; nắm chắc tất cả những th&ocirc;ng tin, kiến thức về tiền bạc ở một kỉ nguy&ecirc;n kĩ thuật số v.v&hellip; vậy m&agrave; vẫn kh&ocirc;ng thể t&igrave;m ra c&aacute;ch quản l&iacute;, đầu tư v&agrave; tận dụng tiền bạc một c&aacute;ch th&agrave;nh c&ocirc;ng.&nbsp;</p>\r\n<p>Trong cuốn s&aacute;ch n&agrave;y, Dennis đ&atilde; đưa ra những thuật ngữ đơn giản nhất về nghệ thuật đầu tư - những điều ch&uacute;ng ta kh&ocirc;ng bao giờ được dạy khi ngồi tr&ecirc;n ghế nh&agrave; trường v&agrave; đặc biệt, Dennis trả lời cho ch&uacute;ng ta những c&acirc;u hỏi ta chưa từng nghĩ tới.</p>\r\n<p>Ch&uacute;c bạn may mắn v&agrave; tận hưởng những gi&aacute; trị m&agrave; cuốn s&aacute;ch n&agrave;y mang lại!</p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>', '<p>Đ&atilde; bao giờ bạn tự hỏi ch&iacute;nh m&igrave;nh: \"Nếu t&ocirc;i d&aacute;m mạo hiểm, cuộc sống của t&ocirc;i c&oacute; tốt đẹp hơn kh&ocirc;ng?\". Với kiến thức s&acirc;u rộng m&agrave; bạn c&oacute;, v&ocirc; v&agrave;n điều sẽ tốt l&ecirc;n trong cuộc sống của bạn. Tuy vậy, ch&uacute;ng ta lại đang sống trong một thế giới m&agrave; ...</p>', null, null, '', '', 'adminDung', '0', '1493147918');
INSERT INTO `product` VALUES ('7', 'Quy Luật Đồng Tiền', '31', null, null, null, null, '30000', '6', null, null, '150', '1', null, null, null, '', null, 'http://localhost/hocphp/datn/source/153065_p59016mquyluatdongtien.jpg', null, '', '', '<p><span style=\"font-weight: normal;\">TIỀN BẠC RẤT ĐƠN GIẢN</span></p>\r\n<p><span style=\"font-weight: normal;\">CON NGƯỜI KHIẾN N&Oacute; TRỞ N&Ecirc;N PHỨC TẠP</span></p>\r\n<p><span style=\"font-weight: normal;\">C&Aacute;C QUY LUẬT ĐỒNG TIỀN SẼ GI&Uacute;P TIỀN BẠC ĐƠN GIẢN TRỞ LẠI</span></p>\r\n<p><span style=\"font-weight: normal;\">Trong thời đại kinh tế bất ổn, sự căng thẳng về tiền&nbsp;bạc sẽ &ldquo;leo thang&rdquo;: T&ocirc;i c&oacute; việc l&agrave;m kh&ocirc;ng? T&ocirc;i n&ecirc;n l&agrave;m g&igrave; với số tiền kiếm được? L&agrave;m sao t&ocirc;i đảm bảo cho tương lai của m&igrave;nh?</span></p>\r\n<p><span style=\"font-weight: normal;\">Trong hơn 20 năm, c&aacute;c cuốn s&aacute;ch best-seller của Jean Chatzky đ&atilde; gi&uacute;p mọi người trả lời những c&acirc;u hỏi li&ecirc;n quan đến tiền bạc.</span></p>\r\n<p><span style=\"font-weight: normal;\">Giờ đ&acirc;y, b&agrave; đ&atilde; đ&uacute;c kết những tri thức đ&oacute; v&agrave;o </span><em>Quy luật đồng tiền</em><span style=\"font-weight: normal;\"> để gi&uacute;p thay đổi đời sống t&agrave;i ch&iacute;nh của bạn.</span></p>\r\n<p><span style=\"font-weight: normal;\">Tại sao cuốn s&aacute;ch n&agrave;y lại thiết yếu đến vậy?</span></p>\r\n<p><span style=\"font-weight: normal;\">Rất đơn giản: Những người sống theo c&aacute;c quy luật n&agrave;y đều kh&ocirc;ng gặp vấn đề g&igrave; về tiền bạc.</span></p>\r\n<p><span style=\"font-weight: normal;\">H&atilde;y khiến tiền bạc đơn giản trở lại.</span></p>\r\n<p><span style=\"font-weight: normal;\">H&atilde;y l&agrave;m theo những quy luật n&agrave;y, h&atilde;y giải tỏa căng thẳng v&agrave; tận hưởng sự đảm bảo t&agrave;i ch&iacute;nh suốt đời.</span></p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>', '<p>TIỀN BẠC RẤT ĐƠN GIẢNCON NGƯỜI KHIẾN N&Oacute; TRỞ N&Ecirc;N PHỨC TẠPC&Aacute;C QUY LUẬT ĐỒNG TIỀN SẼ GI&Uacute;P TIỀN BẠC ĐƠN GIẢN TRỞ LẠITrong thời đại kinh tế bất ổn, sự căng thẳng về tiền&nbsp;bạc sẽ &ldquo;leo thang&rdquo;: T&ocirc;i c&oacute; việc l&agrave;m kh&ocirc;ng? T&ocirc;i n&ecirc;n l&agrave;m g&igrave; với số ...</p>', null, null, '', '', 'adminDung', '0', '1493148079');
INSERT INTO `product` VALUES ('8', 'Tiền - Không Phải Là Vấn Đề (Tái Bản 2016)', '32', null, null, null, null, '90000', '20', null, null, '190', '1', null, null, null, '', null, 'http://localhost/hocphp/datn/source/217035_p69175mbt.jpg', null, '', '', '<p><em>&ldquo;Đến khi n&agrave;o bạn kh&ocirc;ng xem tiền bạc l&agrave; mục ti&ecirc;u cao nhất của cuộc đời, đ&oacute; l&agrave; khi bạn sẽ bắt đầu một h&agrave;nh tr&igrave;nh mới với rất nhiều tiền.&rdquo;</em></p>\r\n<p><em>&ldquo;Tại sao người gi&agrave;u, sau khi bị mất tiền, họ lu&ocirc;n sớm trở lại v&agrave; gi&agrave;u c&oacute; hơn trước?&rdquo;</em></p>\r\n<p><em>&ldquo;Tại sao hầu hết người tr&uacute;ng số, sau khi bị mất tiền họ hiếm khi lấy lại được tiền?&rdquo;</em></p>\r\n<p>C&acirc;u trả lời kh&ocirc;ng phải bởi bạn b&egrave;, gia đ&igrave;nh hoặc m&ocirc;i trường của họ - m&agrave; đ&oacute; l&agrave; do t&acirc;m tr&iacute; của họ. Hầu hết ch&uacute;ng ta đ&atilde; được giảng dạy trong suốt thời thơ ấu rằng to&agrave;n bộ tiền bạc n&ecirc;n để d&agrave;nh, để dự trữ ph&ograve;ng trừ bất trắc. Tuy nhi&ecirc;n, t&ocirc;i sẽ chỉ cho bạn rằng sự gi&agrave;u c&oacute; kh&ocirc;ng phải l&agrave; t&iacute;ch lũy; n&oacute; l&agrave; một h&agrave;nh tr&igrave;nh của sự ph&aacute;t triển v&agrave; lưu th&ocirc;ng. Với nhận thức; n&oacute; ch&iacute;nh l&agrave; sự ph&aacute;t triển một hệ tư duy thịnh vượng.</p>\r\n<p>Ngay b&acirc;y giờ bạn đang giữ trong tay c&acirc;u trả lời để đạt được sự gi&agrave;u c&oacute; v&agrave; một cuộc sống theo &yacute; m&igrave;nh thay v&igrave; chấp nhận cuộc sống m&agrave; bạn đang c&oacute;. C&oacute; vẻ như rất nhiều trở ngại tr&ecirc;n h&agrave;nh tr&igrave;nh của bạn đến sự gi&agrave;u c&oacute;, nhưng trở ngại thực sự chỉ l&agrave; những g&igrave; bạn tin, suy nghĩ v&agrave; cảm nhận của bạn về tiền bạc.</p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>', '<p>&ldquo;Đến khi n&agrave;o bạn kh&ocirc;ng xem tiền bạc l&agrave; mục ti&ecirc;u cao nhất của cuộc đời, đ&oacute; l&agrave; khi bạn sẽ bắt đầu một h&agrave;nh tr&igrave;nh mới với rất nhiều tiền.&rdquo;&ldquo;Tại sao người gi&agrave;u, sau khi bị mất tiền, họ lu&ocirc;n sớm trở lại v&agrave; gi&agrave;u c&oacute; hơn trước?&rdquo;&ldquo;Tại sao ...</p>', null, null, '', '', 'adminDung', '0', '1493148230');
INSERT INTO `product` VALUES ('9', 'Cứ Đi - Để Lối Thành Đường', '25', '3', null, null, null, '70000', '5', '2017-04-02 00:00:00', '2017-04-29 00:00:00', '201', '1', '3', '256', '286', '14.5 x 20.5 cm', '8935086839157', 'http://localhost/hocphp/datn/source/217212_p69281mbiatruoc.jpg', null, 'Việt Nam', 'Việt Nam', '<p><strong>C&acirc;u chuyện hướng nghiệp cho người trẻ Việt Nam</strong></p>\r\n<p><strong><em>Cứ đi - để lối th&agrave;nh đường</em></strong>&nbsp;l&agrave; những thao thức, những trải nghiệm sống động, những chia sẻ ch&acirc;n t&igrave;nh, t&acirc;m huyết của một người chọn nghề tư vấn hướng nghiệp l&agrave;m t&igrave;nh y&ecirc;u v&agrave; lẽ sống của m&igrave;nh. Điều quan trọng nhất kh&ocirc;ng phải l&agrave; cố gắng kh&ocirc;ng thay đổi m&agrave; ch&iacute;nh l&agrave; t&igrave;m ra điểm bất biến trong thế giới mau thay đổi n&agrave;y: đ&oacute; l&agrave; hiểu r&otilde; bản th&acirc;n.</p>\r\n<p>D&ugrave; ở bất cứ thời điểm n&agrave;o, chỉ cần một người hiểu r&otilde; điểm mạnh của m&igrave;nh, biết được điều g&igrave; quan trọng nhất với bản th&acirc;n, hiểu r&otilde; những ảnh hưởng t&iacute;ch cực quanh m&igrave;nh, t&igrave;m hiểu kỹ đặc điểm của thị trường lao động rồi l&ecirc;n kế hoạch ph&aacute;t triển cho nghề nghiệp ph&ugrave; hợp với m&igrave;nh nhất l&agrave; được. V&agrave; khi đ&atilde; ra quyết định, th&igrave; phải sẵn s&agrave;ng chịu tr&aacute;ch nhiệm với tất cả kết quả, kể cả thất bại. Để rồi nh&igrave;n nhận lại bản th&acirc;n, một lần nữa bắt đầu quy tr&igrave;nh hướng nghiệp mới v&igrave; qu&aacute; tr&igrave;nh thật sự quan trọng m&agrave; bạn cần l&agrave;m. Kết quả cuối c&ugrave;ng của quyết định nghề nghiệp tốt ch&iacute;nh l&agrave; sự b&igrave;nh an trong t&acirc;m hồn.</p>\r\n<p>Việc x&atilde; hội ng&agrave;y c&agrave;ng khắt khe với mọi c&ocirc;ng việc, ng&agrave;nh nghề đ&atilde; trở th&agrave;nh vấn đề nan giải m&agrave; hầu hết c&aacute;c bạn trẻ đang v&ocirc; c&ugrave;ng băn khoăn v&agrave; lo lắng. Ch&iacute;nh v&igrave; điều đ&oacute;, c&aacute;c bạn mơ hồ trong định hướng tương lai cũng như chọn cho m&igrave;nh một ng&agrave;nh học ph&ugrave; hợp.</p>\r\n<p>Nhưng c&aacute;c bạn trẻ th&acirc;n mến, ch&uacute;ng ta kh&ocirc;ng n&ecirc;n qu&aacute; lo lắng trong định hướng nghề nghiệp, bởi lẽ cuộc sống lu&ocirc;n cho bạn cơ hội để lựa chọn v&agrave; thể hiện năng lực&nbsp;của m&igrave;nh. Qua cuốn s&aacute;ch&nbsp;<strong><em>Cứ đi - để lối th&agrave;nh đường,</em></strong>&nbsp;bạn sẽ học hỏi được rất nhiều điều về con đường huớng nghiệp, cũng như những c&acirc;u chuyện rất thực tế v&agrave; đời thường m&agrave; ch&iacute;nh Phoenix Ho đ&atilde; trải qua. Từ đ&oacute;, ch&uacute;ng ta c&oacute; thể cảm nhận được những kh&oacute; khăn, trắc trở hay niềm vui v&agrave; hạnh ph&uacute;c m&agrave; chị đ&atilde; trải nghiệm. Đ&oacute; cũng ch&iacute;nh l&agrave; con đường sẽ dẫn bạn đi đ&uacute;ng hướng đến những chặng tiếp theo m&agrave; bạn chuẩn bị bước tới.</p>\r\n<p>Vậy kh&oacute; khăn nhất l&agrave; chặng đường từ khi bắt đầu đến l&uacute;c ch&uacute;ng ta t&igrave;m ra lối rẽ của ri&ecirc;ng m&igrave;nh. Trước khi được l&agrave; ch&iacute;nh m&igrave;nh, bạn phải h&ograve;a m&igrave;nh v&agrave;o m&ocirc;i trường, học hỏi từ xung quanh v&agrave; lớn mạnh từ từ. Khi đ&atilde; quen, đ&atilde; hiểu, đ&atilde; vững v&agrave;ng, l&uacute;c ấy chẳng ai c&oacute; thể cản trở bạn tỏa s&aacute;ng, thể hiện sức mạnh trong khả năng của m&igrave;nh. Vậy th&igrave; h&atilde;y d&ugrave;ng thời gian v&agrave; sự ki&ecirc;n tr&igrave; để chứng minh m&igrave;nh l&agrave; ai, bạn nh&eacute;!</p>\r\n<p>Cuốn s&aacute;ch gồm bốn phần ch&iacute;nh: (1) Hướng nghiệp l&agrave; một h&agrave;nh tr&igrave;nh; (2) Nối liền hai thế hệ; (3) Hướng nghiệp v&agrave; t&acirc;m an; (4) Những nghĩ suy. Ngo&agrave;i ra, c&ograve;n c&oacute; phần phụ lục ph&acirc;n t&iacute;ch về t&aacute;c dụng hai mặt của phương ph&aacute;p trắc nghiệm, được minh họa bằng những ca tư vấn cụ thể trong thực tiễn; những chỉ dẫn cần thiết về c&aacute;c bước chọn ng&agrave;nh, chọn trường v&agrave; mục ti&ecirc;u nghề nghiệp.</p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>', '<p><strong><em>Cứ đi - để lối th&agrave;nh đường</em></strong>&nbsp;l&agrave; những thao thức, những trải nghiệm sống động, những chia sẻ ch&acirc;n t&igrave;nh, t&acirc;m huyết của một người chọn nghề tư vấn hướng nghiệp l&agrave;m t&igrave;nh y&ecirc;u v&agrave; lẽ sống của m&igrave;nh</p>', '2017-04-19', '2011-12-07', '', '', 'adminDung', '1492672616', '1493146949');
INSERT INTO `product` VALUES ('10', 'Nghệ Thuật Quản Lý Nhân Sự (Tái Bản 2016)', '25', '2', null, null, null, '50000', '20', '2017-04-02 00:00:00', '2017-04-27 00:00:00', '151', '1', '1', '342', '220', '123 x 23', '8935074105639', 'http://localhost/hocphp/datn/source/219673_p69544mbt.jpg', null, 'Việt Nam', 'Tiếng Việt', '<p>L&agrave; người l&atilde;nh đạo, muốn quản l&yacute; th&agrave;nh c&ocirc;ng v&agrave; hiệu quả, phải c&oacute; niềm tin ki&ecirc;n định v&agrave; phương ph&aacute;p r&otilde; r&agrave;ng trong nguy&ecirc;n tắc quản l&yacute;. Chỉ c&oacute; nắm bắt được vấn đề cốt l&otilde;i của việc quản l&yacute;, biết ph&aacute;t hiện t&agrave;i năng v&agrave; c&aacute;ch d&ugrave;ng người, bồi dưỡng t&iacute;nh tự gi&aacute;c v&agrave; t&iacute;nh độc lập cho nh&acirc;n vi&ecirc;n, dẫn dắt họ t&iacute;ch cực, trưởng th&agrave;nh, tạo điều kiện để họ ph&aacute;t triển sở trường th&igrave; mới ph&aacute;t huy hết hiệu quả trong c&ocirc;ng việc.</p>\r\n<p>Cuốn s&aacute;ch tr&igrave;nh b&agrave;y dễ hiểu những điểm quan yếu nhất trong phương ph&aacute;p quản l&yacute; nh&acirc;n sự: biết c&aacute;ch ra lệnh, chọn giải ph&aacute;p, chỉ đạo, giải quyết trở ngại, đề xuất thưởng phạt, kh&iacute;ch lệ nh&acirc;n vi&ecirc;n&hellip; k&egrave;m theo những v&iacute; dụ cụ thể thường xảy ra hằng ng&agrave;y trong thực tế. Vận dụng tinh tế, đ&uacute;ng l&uacute;c những phương ph&aacute;p n&agrave;y, xem như bạn đ&atilde; nắm được b&iacute; quyết quản l&yacute;, sẽ dễ d&agrave;ng tạo n&ecirc;n sự th&agrave;nh c&ocirc;ng cho c&aacute; nh&acirc;n lẫn doanh nghiệp.</p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>', '<p>L&agrave; người l&atilde;nh đạo, muốn quản l&yacute; th&agrave;nh c&ocirc;ng v&agrave; hiệu quả, phải c&oacute; niềm tin ki&ecirc;n định v&agrave; phương ph&aacute;p r&otilde; r&agrave;ng trong nguy&ecirc;n tắc quản l&yacute;. Chỉ c&oacute; nắm bắt được vấn đề cốt l&otilde;i của việc quản l&yacute;</p>', '2009-02-17', '2017-04-25', '', '', 'adminDung', '1492682646', '1493104670');
INSERT INTO `product` VALUES ('12', 'Đừng Nhảy Việc', '25', '3', null, null, null, '50000', '19', null, null, '1000', '1', null, null, null, '', null, 'http://localhost/hocphp/datn/source/216234_p69138mbt.jpg', null, '', '', '<p>Bạn kh&ocirc;ng h&agrave;i l&ograve;ng với c&ocirc;ng việc của m&igrave;nh ư? Trước khi bỏ việc, h&atilde;y lắng nghe những lời khuy&ecirc;n của c&aacute;c chuy&ecirc;n gia Beverly Kaye v&agrave; Sharon Jordan-Evans trong cuốn<strong> \"Đừng nhảy việc: 26 c&aacute;ch để đạt được những g&igrave; bạn muốn tại nơi l&agrave;m việc\"</strong> v&agrave; học c&aacute;ch y&ecirc;u c&ocirc;ng việc của m&igrave;nh. - Dựa tr&ecirc;n nghi&ecirc;n cứu với 15.000 người c&oacute; th&acirc;m ni&ecirc;n l&agrave;m việc, Kaye v&agrave; Sharon Jordan-Evans x&aacute;c định c&aacute;c yếu tố h&agrave;ng đầu khiến nh&acirc;n vi&ecirc;n kh&ocirc;ng nhảy việc bao gồm: cơ hội thăng tiến, mức lương c&ocirc;ng bằng v&agrave; thỏa đ&aacute;ng. Từ những yếu tố n&agrave;y, hai t&aacute;c giả đ&atilde; vẽ l&ecirc;n c&aacute;c c&aacute;ch để kh&ocirc;i phục con đường sự nghiệp bao gồm cảm h&oacute;a những nh&agrave; l&atilde;nh đạo kh&oacute; ưa, t&igrave;m kiếm thật nhiều cố vấn, bảo vệ thời gian d&agrave;nh cho gia đ&igrave;nh, mang lại niềm vui trong c&ocirc;ng việc, vượt l&ecirc;n tr&ecirc;n khả năng của bạn v&agrave; giải quyết c&aacute;c vấn đề kh&oacute; khăn.</p>\r\n<p>Bằng c&aacute;c v&iacute; dụ phong ph&uacute; v&agrave; c&aacute;c chiến lược r&otilde; r&agrave;ng, cuốn s&aacute;ch n&agrave;y thực sự l&agrave; một người bạn dồng h&agrave;nh c&oacute; gi&aacute; trị với lượng lớn độc giả. Bạn h&atilde;y lắng nghe sự m&aacute;ch bảo từ tr&aacute;i tim trước khi quyết định thay đổi c&ocirc;ng việc trong một nền kinh tế kh&ocirc;ng chắc chắn như hiện nay.</p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>', '<p>Bạn kh&ocirc;ng h&agrave;i l&ograve;ng với c&ocirc;ng việc của m&igrave;nh ư? Trước khi bỏ việc, h&atilde;y lắng nghe những lời khuy&ecirc;n của c&aacute;c chuy&ecirc;n gia Beverly Kaye v&agrave; Sharon Jordan-Evans trong cuốn \"Đừng nhảy việc: 26 c&aacute;ch để đạt được những g&igrave; bạn muốn tại nơi l&agrave;m việc\" v&agrave; học c&aacute;ch</p>', null, null, '', '', 'adminDung', '1492683415', '1493147456');
INSERT INTO `product` VALUES ('13', 'Napoleon Hill\'s Keys to Success', '39', '14', null, null, null, '300000', '0', '2017-05-01 00:00:00', '2017-05-31 00:00:00', '98', '1', '2', '1213', '123', ' 13.5 x 20.4 x 1.8 cm', '9780452272811', 'http://localhost/hocphp/datn/source/171679_p61550m71iwsfu0oul.jpg', 'http://localhost/hocphp/datn/source/171679_p61550m71iwsfu0oul.jpg', '', ' Tiếng Anh ', '<p>Napoleon Hill summed up his philosophy of success in Think and Grow Rich, one of the bestselling inspirational business books ever. A recent USA Today survey of business leaders named it one of the five most influential books in its field, more than 40 years after it was first published. Now, in Napoleon Hill\'s Keys to Success, his broadly outlined principles are expanded in detail for the first time, with concrete advice on their use and implementation. Compiled from Hill\'s teaching materials, lectures, and articles, Napoleon Hill\'s Keys to Success provides mental exercises, self-analysis techniques, powerful encouragement, and straightforward advice to anyone seeking personal and financial improvement. In addition to Hill\'s many personal true-life examples of the principles in action, there are also contemporary illustrations featuring dynamos like Bill Gates, Peter Lynch, and Donna Karan. No other Napoleon Hill book has addressed these 17 principles so completely and in such precise detail. For the millions of loyal Napoleon Hill fans and for those who discover him each year, Napoleon Hill\'s Keys to Success promises to be a valuable and important guide on the road to riches.</p>', '<p>Napoleon Hill summed up his philosophy of success in Think and Grow Rich, one of the bestselling inspirational business books ever. A recent USA Today survey of business leaders named it one of the five most influential books in its field, more than 40 years after it was first published. Now, in Napoleon Hill\'s Keys ...</p>', null, null, '', '', 'linh123456', '1494312362', '1494312362');
INSERT INTO `product` VALUES ('14', 'Harry Potter Và Hòn Đá Phù Thủy - Tập 1 (Tái Bản 2017)', '40', '16', '3', '7', '6', '500000', '0', null, null, '202', '1', '2', '600', '200', '200 x 300', '8934974145608', 'http://localhost/hocphp/datn/source/247435_p73664mharrypottervahon.jpg', 'http://localhost/hocphp/datn/source/247714_p73664eimg642.jpg', 'Anh', 'Tiếng Việt', '<p>Khi một l&aacute; thư được gởi đến cho cậu b&eacute; Harry Potter b&igrave;nh thường v&agrave; bất hạnh, cậu kh&aacute;m ph&aacute; ra một b&iacute; mật đ&atilde; được che giấu suốt cả một thập kỉ. Cha mẹ cậu ch&iacute;nh l&agrave; ph&ugrave; thủy v&agrave; cả hai đ&atilde; bị lời nguyền của Ch&uacute;a tể Hắc &aacute;m giết hại khi Harry mới chỉ l&agrave; một đứa trẻ, v&agrave; bằng c&aacute;ch n&agrave;o đ&oacute;, cậu đ&atilde; giữ được mạng sống của m&igrave;nh. Tho&aacute;t khỏi những người gi&aacute;m hộ Muggle kh&ocirc;ng thể chịu đựng nổi để nhập học v&agrave;o trường Hogwarts, một trường đ&agrave;o tạo ph&ugrave; thủy với những b&oacute;ng ma v&agrave; ph&eacute;p thuật, Harry t&igrave;nh cờ dấn th&acirc;n v&agrave;o một cuộc phi&ecirc;u lưu đầy gai g&oacute;c khi cậu ph&aacute;t hiện ra một con ch&oacute; ba đầu đang canh giữ một căn ph&ograve;ng tr&ecirc;n tầng ba. Rồi Harry nghe n&oacute;i đến một vi&ecirc;n đ&aacute; bị mất t&iacute;ch sở hữu những sức mạnh lạ k&igrave;, rất qu&iacute; gi&aacute;, v&ocirc; c&ugrave;ng nguy hiểm, m&agrave; cũng c&oacute; thể l&agrave; mang cả hai đặc điểm tr&ecirc;n.</p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>', '<p>Khi một l&aacute; thư được gởi đến cho cậu b&eacute; Harry Potter b&igrave;nh thường v&agrave; bất hạnh, cậu kh&aacute;m ph&aacute; ra một b&iacute; mật đ&atilde; được che giấu suốt cả một thập kỉ. Cha mẹ cậu ch&iacute;nh l&agrave; ph&ugrave; thủy v&agrave; cả hai đ&atilde; bị lời nguyền của Ch&uacute;a tể Hắc &aacute;m giết hại khi Harry ...</p>', null, '2017-03-06', 'Harry Potter Và Hòn Đá Phù Thủy, j.k.rowling', 'Harry Potter Và Hòn Đá Phù Thủy, j.k.rowling', 'Phạm Thị Huyền', '1494312845', '1494882678');
INSERT INTO `product` VALUES ('15', 'Petrus Ký - Nỗi Oan Thế Kỷ', '41', '17', null, null, null, '100000', '20', '2017-05-22 00:00:00', '2017-06-03 00:00:00', '99', '1', null, null, null, '', null, 'http://localhost/hocphp/datn/source/240615_p72755mimg216.jpg', 'http://localhost/hocphp/datn/source/240623_p72755eimg217.jpg', '', '', '<p>\"...Trải qua hơn một trăm năm với nhiều thăng trầm của lịch sử, l&uacute;c n&agrave;o Trương Vĩnh K&yacute; được t&ocirc;n vinh v&agrave; l&uacute;c n&agrave;o bị ph&ecirc; ph&aacute;n. Trong lịch sử Việt Nam, việc b&igrave;nh luận, đ&aacute;nh gi&aacute; kh&ocirc;ng &iacute;t nh&acirc;n vật lịch sử thường bị chi phối bởi bối cảnh lịch sử như vậy. Nhưng xu hướng chung vẫn l&agrave; sự thắng thế của kết quả nghi&ecirc;n cứu khoa học nghi&ecirc;m t&uacute;c, kh&aacute;ch quan v&agrave; th&aacute;i độ c&ocirc;ng minh trước lịch sử. Petrus K&yacute; cũng trải qua nhiều s&oacute;ng gi&oacute; của Khen - ch&ecirc;, t&ocirc;n vinh - ph&ecirc; ph&aacute;n, nhưng cuối c&ugrave;ng xu thế kh&aacute;ch quan, trung thực vẫn chi phối.</p>\r\n<p>Cuốn s&aacute;ch của học giả Nguyễn Đ&igrave;nh Đầu l&agrave; một c&ocirc;ng tr&igrave;nh tổng hợp bao gồm c&aacute;c trước t&aacute;c tuyển chọn của Trương Vĩnh K&yacute; v&agrave; hệ thống theo thời gian c&aacute;c s&aacute;ch, b&aacute;o nghi&ecirc;n cứu, ph&ecirc; b&igrave;nh Trương Vĩnh K&yacute; kể cả khen v&agrave; ch&ecirc;.</p>\r\n<p>Trong s&aacute;ch, t&aacute;c giả c&ograve;n sưu tập v&agrave; c&ocirc;ng bố một số tư liệu mới về Trương Vĩnh K&yacute;, đ&oacute;ng g&oacute;p th&ecirc;m cơ sở dữ liệu về nh&acirc;n vật lịch sử n&agrave;y.\"</p>\r\n<p><strong>- Gi&aacute;o sư Sử học Phan Huy L&ecirc; -&nbsp;</strong></p>\r\n<p>\"Petrus K&yacute; l&agrave; th&ocirc;ng ng&ocirc;n sứ đo&agrave;n An Nam sang thăm Ph&aacute;p cuối năm 1863. &Ocirc;ng c&ograve;n trẻ nhưng kiến thức s&acirc;u sắc v&agrave; biết nhiều ng&ocirc;n ngữ &Aacute;-&Acirc;u. Qua b&agrave;i \'Vương quốc Khmer hay Căm Bốt\' trong tạp ch&iacute; n&agrave;y, &ocirc;ng chứng tỏ rất th&ocirc;ng thạo Ph&aacute;p văn như tiếng mẹ đẻ vậy.\"</p>\r\n<p><strong>- Tạp ch&iacute; Hội Địa l&yacute; Paris, 1863 -&nbsp;</strong></p>\r\n<p>\"Petrus K&yacute; l&agrave; nh&agrave; ngữ học nổi tiếng của Nam Kỳ, hiện l&agrave;m gi&aacute;m đốc trường Th&ocirc;ng ng&ocirc;n v&agrave; gi&aacute;o sư trường Hậu bổ, th&ocirc;ng thạo 18 ng&ocirc;n ngữ &Aacute;-&Acirc;u. Petrus K&yacute; được t&ocirc;n vinh l&agrave; một trong 18 văn h&agrave;o thế giới.\"</p>\r\n<p><strong>- Tạp ch&iacute; Le Biographe, 1873 - 1874 -</strong></p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>', '<p>\"...Trải qua hơn một trăm năm với nhiều thăng trầm của lịch sử, l&uacute;c n&agrave;o Trương Vĩnh K&yacute; được t&ocirc;n vinh v&agrave; l&uacute;c n&agrave;o bị ph&ecirc; ph&aacute;n. Trong lịch sử Việt Nam, việc b&igrave;nh luận, đ&aacute;nh gi&aacute; kh&ocirc;ng &iacute;t nh&acirc;n vật lịch sử thường bị chi phối bởi bối cảnh lịch sử ...</p>', null, null, '', '', 'linh123456', '1494313916', '1494755438');
INSERT INTO `product` VALUES ('16', 'Hài Lòng Trong Công Việc Bắt Đầu Từ Chính Mình', '25', '1', '1', null, '1', '60000', '20', '2017-05-07 00:00:00', '2017-05-26 00:00:00', '21', '1', '13', '123', '123', '14.5 x 20.5 cm', null, 'http://localhost/hocphp/datn/source/156315_p59348mbatrc.jpg', 'http://localhost/hocphp/datn/source/155882_p59348ebasau.jpg', 'Việt Nam', 'Tiếng Anh', '<p>Mọi người đều muốn được h&agrave;i l&ograve;ng trong c&ocirc;ng việc đang l&agrave;m, hoặc trong mục ti&ecirc;u sự nghiệp hướng tới. Tuy nhi&ecirc;n, trong nền kinh tế nhiều biến động thăng trầm v&agrave; cạnh tranh gay gắt tr&ecirc;n thị trường lao động hiện nay, phải chăng c&oacute; việc l&agrave;m th&igrave; quan trọng hơn l&agrave; c&oacute; c&ocirc;ng việc mang lại sự h&agrave;i l&ograve;ng? Liệu người ta c&oacute; thể l&agrave;m một c&ocirc;ng việc m&igrave;nh gh&eacute;t chỉ để kiếm sống được bao l&acirc;u? V&agrave; c&oacute; đ&aacute;ng đ&aacute;nh đổi sự chịu đựng đ&oacute; kh&ocirc;ng hay l&agrave; c&oacute; những chiến lược n&agrave;o để xử l&yacute; trước mắt lẫn l&acirc;u d&agrave;i?</p>\r\n<p>Với năm mục ch&iacute;nh:</p>\r\n<p>- H&agrave;i l&ograve;ng trong c&ocirc;ng việc? L&agrave;m g&igrave; c&oacute; chuyện đ&oacute;!</p>\r\n<p>- Ma trận chốn c&ocirc;ng sở</p>\r\n<p>- T&igrave;m giải ph&aacute;p trong sự chuy&ecirc;n nghiệp</p>\r\n<p>- Người lao động chuy&ecirc;n nghiệp trong thời buổi kh&oacute; khăn n&ecirc;n l&agrave;m g&igrave;?</p>\r\n<p>- Chung cuộc: H&agrave;i l&ograve;ng ư? Điều đ&oacute; trong tay bạn!</p>\r\n<p>S&aacute;ch gi&uacute;p người đọc một số định hướng tư duy để tự giải quyết những c&acirc;u hỏi ai cũng sẽ gặp trong cuộc đời đi l&agrave;m.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>', '<p>Mọi người đều muốn được h&agrave;i l&ograve;ng trong c&ocirc;ng việc đang l&agrave;m, hoặc trong mục ti&ecirc;u sự nghiệp hướng tới. Tuy nhi&ecirc;n, trong nền kinh tế nhiều biến động thăng trầm v&agrave; cạnh tranh gay gắt tr&ecirc;n thị trường lao động hiện nay, phải chăng c&oacute; việc l&agrave;m th&igrave; quan ...</p>', null, '2017-03-14', '', '', 'linh123456', '1494439299', '1494439299');
INSERT INTO `product` VALUES ('17', 'Những Câu Nói Thuyết Phục Để Phỏng Vấn Thành Công', '25', '19', null, null, null, '40000', '20', '2017-05-07 00:00:00', '2017-05-31 00:00:00', '50', '1', '1', '123', '286', '13.5 x 20.4 x 1.8 cm', null, 'http://localhost/hocphp/datn/source/155892_p59348etd4_1.jpg', 'http://localhost/hocphp/datn/source/249376_p73878eimg463_1.jpg', '', 'Việt Nam', '<p><strong>Những c&acirc;u n&oacute;i của Tony Beshara trong cuốn s&aacute;ch n&agrave;y sẽ gi&uacute;p bạn:</strong></p>\r\n<ul>\r\n<li>Nhấn mạnh kĩ năng, thế mạnh v&agrave; c&aacute;c kinh nghiệm l&agrave;m việc của bạn;</li>\r\n<li>Tạo ấn tượng s&acirc;u sắc trong buổi phỏng vấn đầu ti&ecirc;n v&agrave; cuối c&ugrave;ng;</li>\r\n<li>Được người phỏng vấn v&agrave; nh&agrave; tuyển dụng ưa th&iacute;ch;</li>\r\n<li>X&oacute;a bỏ mọi nghi ngại về lịch sử l&agrave;m việc của bạn;</li>\r\n<li>Gi&uacute;p bạn đ&agrave;m ph&aacute;n về lương, thưởng th&agrave;nh c&ocirc;ng.</li>\r\n</ul>\r\n<p>Khi người phỏng vấn v&agrave; nh&agrave; tuyển dụng lựa chọn giữa một ứng vi&ecirc;n ho&agrave;n hảo tr&ecirc;n giấy tờ v&agrave; một ứng vi&ecirc;n đầy thuyết phục trong v&ograve;ng phỏng vấn trực tiếp, kết quả đ&atilde; qu&aacute; r&otilde; r&agrave;ng. \"<strong>Những C&acirc;u N&oacute;i Thuyết Phục Để Phỏng Vấn Th&agrave;nh C&ocirc;ng\"</strong>&nbsp;gi&uacute;p bạn vượt qua c&aacute;c v&ograve;ng phỏng vấn v&agrave; gi&agrave;nh lấy c&ocirc;ng việc m&igrave;nh mong muốn.</p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>\r\n<p>&nbsp;</p>', '<p>Những c&acirc;u n&oacute;i của Tony Beshara trong cuốn s&aacute;ch n&agrave;y sẽ gi&uacute;p bạn:Nhấn mạnh kĩ năng, thế mạnh v&agrave; c&aacute;c kinh nghiệm l&agrave;m việc của bạn;Tạo ấn tượng s&acirc;u sắc trong buổi phỏng vấn đầu ti&ecirc;n v&agrave; cuối c&ugrave;ng;Được người phỏng vấn v&agrave; nh&agrave; tuyển dụng ưa ...</p>', null, null, '', '', 'linh123456', '1494439731', '1494439731');
INSERT INTO `product` VALUES ('18', 'Xin Việc Hay Tìm Việc?', '25', '20', null, null, null, '32000', '20', '2017-05-14 00:00:00', '2017-05-31 00:00:00', '4', '1', '0', '123', '12', '14.5 x 20.5 cm', null, 'http://localhost/hocphp/datn/source/249376_p73878eimg463_2.jpg', 'http://localhost/hocphp/datn/source/210566_p68311ebs.jpg', 'Việt Nam', 'Tiếng Việt', '<p>Khi một t&acirc;n cử nh&acirc;n cầm hồ sơ đi t&igrave;m việc l&agrave; l&uacute;c người ấy đang c&oacute; th&aacute;i độ tốt v&agrave; sẵn s&agrave;ng trải nghiệm, sẵn s&agrave;ng học hỏi nhanh, thăng tiến trong con đường nghề nghiệp. Tuy nhi&ecirc;n, c&oacute; bạn gửi đơn khắp nơi m&agrave; chưa một lần được phỏng vấn. C&oacute; bạn đ&atilde; được gọi phỏng vấn nhiều lần nhưng vẫn thất nghiệp. C&oacute; bạn được nhận v&agrave;o l&agrave;m m&agrave; kh&ocirc;ng thể trụ lại sau thời gian thử việc&hellip;</p>\r\n<p>Một nghịch l&yacute; l&agrave; tỉ lệ cử nh&acirc;n thất nghiệp cao nhưng c&aacute;c chủ doanh nghiệp muốn tuyển dụng cũng kh&ocirc;ng dễ t&igrave;m được lao động ph&ugrave; hợp.</p>\r\n<p>C&acirc;u chuyện thất nghiệp của cử nh&acirc;n, thạc sĩ&hellip; kh&ocirc;ng hẳn xuất ph&aacute;t từ thị trường lao động hay kinh tế kh&oacute; khăn, vậy c&ograve;n nguy&ecirc;n nh&acirc;n n&agrave;o kh&aacute;c? V&agrave; th&ecirc;m nhiều thắc mắc nữa được đặt ra, chung quy l&agrave; một c&acirc;u hỏi lớn m&agrave; h&agrave;ng vạn sinh vi&ecirc;n đều lo &acirc;u, ngơ ng&aacute;c:</p>\r\n<p>L&agrave;m g&igrave; v&agrave; l&agrave;m thế n&agrave;o để c&oacute; việc sau khi ra trường?</p>\r\n<p>Vấn đề của lao động trẻ được n&ecirc;u ra c&ugrave;ng c&aacute;c giải ph&aacute;p gợi &yacute; như một cuốn cẩm nang d&agrave;nh cho c&aacute;c bạn sinh vi&ecirc;n v&agrave; t&acirc;n cử nh&acirc;n. Để bạn biết m&igrave;nh đang ở đ&acirc;u, cần g&igrave;, v&agrave; tự định ra phương thức ph&ugrave; hợp nhằm c&oacute; được việc l&agrave;m, tạo dựng sự nghiệp.</p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>', '<p>Khi một t&acirc;n cử nh&acirc;n cầm hồ sơ đi t&igrave;m việc l&agrave; l&uacute;c người ấy đang c&oacute; th&aacute;i độ tốt v&agrave; sẵn s&agrave;ng trải nghiệm, sẵn s&agrave;ng học hỏi nhanh, thăng tiến trong con đường nghề nghiệp. Tuy nhi&ecirc;n, c&oacute; bạn gửi đơn khắp nơi m&agrave; chưa một lần được phỏng vấn. C&oacute; ...</p>', null, '2017-05-19', '', '', 'linh123456', '1494440093', '1494440093');
INSERT INTO `product` VALUES ('19', 'Dù Của Bạn Màu Gì?', '25', '21', '1', null, '1', '100000', '20', '2017-05-14 00:00:00', '2017-05-24 00:00:00', '55', '1', '6', '12', '220', '234x767', '9780452272811', 'http://localhost/hocphp/datn/source/249376_p73878eimg463_3.jpg', 'http://localhost/hocphp/datn/source/192927_p65543ebs.jpg', '', 'Tiếng Anh', '<p>Nếu ch&uacute;ng ta c&oacute; một thứ giống như miếng đề-can d&aacute;n xe to&agrave;n quốc, th&igrave; miếng đề-can của năm sẽ l&agrave;: &ldquo;T&ocirc;i thất nghiệp, t&ocirc;i kh&ocirc;ng t&igrave;m được việc l&agrave;m, v&agrave; t&ocirc;i đ&atilde; thử mọi c&aacute;ch.&rdquo;</p>\r\n<p>Tất nhi&ecirc;n kh&ocirc;ng phải ai cũng trưng n&oacute; ra; d&ugrave; sao cũng c&oacute; khoảng 139.000.000 người ở Mỹ c&oacute; việc l&agrave;m. Nhưng khoảng 15.000.000 người kh&aacute;c th&igrave; kh&ocirc;ng. V&agrave; 6.000.000 người trong số đ&oacute; sẽ trưng miếng đề-can đ&oacute; suốt hơn 27 th&aacute;ng. Đ&oacute; l&agrave; số lượng người thất nghiệp trong khoảng thời gian d&agrave;i đến vậy. Chỉ trong phạm vi nước Mỹ. Ra khỏi bi&ecirc;n giới nước n&agrave;y th&igrave;, bi kịch thay, thất nghiệp l&agrave; một vấn đề to&agrave;n cầu, như ch&uacute;ng ta đ&atilde; thấy ở khắp Trung Đ&ocirc;ng năm nay, cũng như ở c&aacute;c quốc gia lu&ocirc;n vận động kh&ocirc;ng ngừng kh&aacute;c tr&ecirc;n thế giới.</p>\r\n<p>Trong những ng&agrave;y n&agrave;y, đi đ&acirc;u ta cũng nghe lời than v&atilde;n như: &ldquo;T&ocirc;i thất nghiệp m&atilde;i th&ocirc;i, t&ocirc;i kh&ocirc;ng t&igrave;m được việc, d&ugrave; t&ocirc;i đ&atilde; cố gắng lắm rồi.&rdquo; V&agrave; ch&uacute;ng ta thật sự rất cố gắng. Thường l&agrave; trong v&ocirc; vọng. Ch&uacute;ng ta bị đ&aacute; khỏi c&ocirc;ng việc, ch&uacute;ng ta đi t&igrave;m việc theo c&aacute;ch trước nay vẫn l&agrave;m, nhưng lần n&agrave;y ch&uacute;ng ta về tay kh&ocirc;ng. Đ&acirc;y l&agrave; một trải nghiệm ho&agrave;n to&agrave;n mới đối với nhiều người trong ch&uacute;ng ta. V&agrave; l&agrave; một kinh nghiệm ta kh&ocirc;ng lường trước được. Mọi c&aacute;ch đều v&ocirc; &iacute;ch. V&agrave; thất nghiệp cứ thế k&eacute;o d&agrave;i.</p>\r\n<p>Điều n&agrave;y l&agrave;m ta nao n&uacute;ng, v&agrave; thường khiến l&ograve;ng tự trọng trong ta suy giảm. Cặp song sinh &ldquo;ch&aacute;n nản v&agrave; v&ocirc; vọng&rdquo; thường xuy&ecirc;n theo s&aacute;t nhau. Cuộc sống như thể sẽ kh&ocirc;ng bao giờ kh&aacute; hơn được. Điều n&agrave;y dường như k&eacute;o d&agrave;i m&atilde;i m&atilde;i.</p>\r\n<p>Ch&uacute;ng ta cần g&igrave;?</p>\r\n<p>Ừm, ch&uacute;ng ta cực kỳ cần một c&ocirc;ng việc. Dĩ nhi&ecirc;n.</p>\r\n<p>Nhưng hơn thế, khi thất nghiệp, ch&uacute;ng ta v&ocirc; c&ugrave;ng, v&ocirc; c&ugrave;ng cần đến Hy Vọng.</p>\r\n<p>V&igrave; thế, trong những năm qua, t&aacute;c giả đ&atilde; thu thập v&ocirc; số t&agrave;i liệu về tất cả những thứ t&aacute;c động đến c&ocirc;ng việc của ch&uacute;ng ta cũng như khả năng ch&uacute;ng ta nu&ocirc;i sống bản th&acirc;n v&agrave; gia đ&igrave;nh: ba thảm họa khủng khiếp ở Nhật Bản; l&agrave;n s&oacute;ng biểu t&igrave;nh của những qu&acirc;n đo&agrave;n người trẻ tuổi thất nghiệp v&agrave; c&aacute;c đối tượng kh&aacute;c tr&ecirc;n khắp Trung Đ&ocirc;ng; động đất t&agrave;n ph&aacute; ở Haiti, New Zealand, v&agrave; những nơi kh&aacute;c; vụ tr&agrave;n dầu BP ở Vịnh Mexico; BRIC (c&aacute;c nền kinh tế đang l&ecirc;n của Brazil, Nga, Ấn Độ v&agrave; Trung Quốc v&agrave; sự th&egrave;m kh&aacute;t của họ đối với nhi&ecirc;n liệu c&ugrave;ng mọi thứ kh&aacute;c); tỷ lệ thất nghiệp kh&ocirc;ng suy giảm tr&ecirc;n khắp thế giới; c&aacute;c m&oacute;n nợ quốc gia tăng vọt tr&ecirc;n to&agrave;n cầu; &aacute;p dụng ch&iacute;nh s&aacute;ch thắt chặt ng&acirc;n s&aacute;ch, tr&ecirc;n khắp thế giới; những con số thảm hại về tịch thu nh&agrave; cửa để g&aacute;n nợ; nh&agrave; cửa mất gi&aacute;; mất việc l&agrave;m ở những ng&agrave;nh nghề cụ thể; thu hẹp t&iacute;n dụng; xăng dầu tăng gi&aacute;; thực phẩm tăng gi&aacute; v&agrave; thiếu hụt; tuổi l&agrave;m việc cao hơn; thương mại tự do; thu&ecirc; ngo&agrave;i; điện thoại iPhone, m&aacute;y t&iacute;nh bảng iPad, hệ điều h&agrave;nh Android, Web 2.0, truyền th&ocirc;ng x&atilde; hội, Facebook, Twitter, blog, nhắn tin, chức năng iCloud, LinkedIn, LinkUp, Checkster, Workblast (hồ sơ c&aacute; nh&acirc;n bằng video), v&agrave; c&aacute;c c&ocirc;ng cụ t&igrave;m kiếm bao tr&ugrave;m đặc biệt c&aacute;ch thức t&igrave;m việc; c&aacute;c kỹ năng mềm; c&aacute;c danh mục đầu tư; phỏng vấn h&agrave;nh vi; hiệp hội c&aacute;c nh&agrave; tư vấn; v&agrave; c&aacute;c c&acirc;u chuyện t&igrave;m việc của từng c&aacute; nh&acirc;n. Chưa kể, mỗi năm 4 lần, mỗi lần khoảng 5 ng&agrave;y, t&aacute;c giả kh&ocirc;ng l&agrave;m g&igrave; kh&aacute;c ngo&agrave;i việc tương t&aacute;c với những người t&igrave;m việc hoặc thay đổi c&ocirc;ng việc. Th&ocirc;ng qua những tương t&aacute;c c&aacute; nh&acirc;n đ&oacute;, t&aacute;c giả được cập nhật về những vấn đề hiện tại m&agrave; nam giới v&agrave; nữ giới đang vấp phải, trong Giới Thất Nghiệp.</p>\r\n<p>Giờ đ&acirc;y c&ocirc;ng việc của t&aacute;c giả l&agrave; viết c&ocirc; đọng, chắt lọc n&uacute;i th&ocirc;ng tin th&agrave;nh những điều căn bản, t&igrave;m ra những &yacute; tưởng mang lại hy vọng cho người đọc. Bởi v&igrave; suy cho c&ugrave;ng, đ&acirc;y l&agrave; một Quyển S&aacute;ch Hy Vọng, được ẩn đằng sau vỏ bọc của một quyển cẩm nang t&igrave;m việc.</p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>', '<p>Nếu ch&uacute;ng ta c&oacute; một thứ giống như miếng đề-can d&aacute;n xe to&agrave;n quốc, th&igrave; miếng đề-can của năm sẽ l&agrave;: &ldquo;T&ocirc;i thất nghiệp, t&ocirc;i kh&ocirc;ng t&igrave;m được việc l&agrave;m, v&agrave; t&ocirc;i đ&atilde; thử mọi c&aacute;ch.&rdquo;Tất nhi&ecirc;n kh&ocirc;ng phải ai cũng trưng n&oacute; ra; d&ugrave; sao cũng c&oacute; khoảng 139.000.000 ...</p>', '2017-02-07', '2017-05-08', '', '', 'linh123456', '1494440533', '1494440533');
INSERT INTO `product` VALUES ('20', 'Bí Quyết Tìm Việc Thành Công', '25', '22', null, null, null, '35000', '0', '2017-05-15 00:00:00', '2017-05-27 00:00:00', '42', '1', '1', '256', '34', '234x767', '8935074105639', 'http://localhost/hocphp/datn/source/46028_52571.jpg', 'http://localhost/hocphp/datn/source/46028_52571.jpg', 'Việt Nam', 'Việt Nam', '<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Bạn bi&ecirc;́t kh&ocirc;ng? Đã năm r&ocirc;̀i t&ocirc;i kh&ocirc;ng có nhi&ecirc;̀u cảm giác tuy&ecirc;̣t vời và m&ocirc;̣t t&acirc;m trạng nhẹ nhàng như ngày h&ocirc;m nay. Bởi vì m&ocirc;̣t lẽ, năm năm qua t&ocirc;i đã dành h&ecirc;́t thời gin rảnh r&ocirc;̃i và sức lực của mình đ&ecirc;̉ nghi&ecirc;n cứu và vi&ecirc;́t lách. Chắc có lẽ bạn sẽ tò mò lý do vì sao t&ocirc;i lại vi&ecirc;́t quy&ecirc;̉n sách này? M&ocirc;̣t lý do đơn giản th&ocirc;i: T&ocirc;i mu&ocirc;́n chia sẻ những bí quy&ecirc;́t, những tuy&ecirc;̣t chi&ecirc;u với các bạn sinh vi&ecirc;n và những người đã, đang và sẽ th&acirc;́t bại khi tìm ki&ecirc;́m m&ocirc;̣t c&ocirc;ng vi&ecirc;̣c như ý mu&ocirc;́n. Với nhi&ecirc;̀u năm kinh nghi&ecirc;̣m trong ngh&ecirc;̀ h&acirc;n sự, tuy&ecirc;̉n dụng, đào tạo trong nhi&ecirc;̀u ngành và lĩnh vực khác nhau, t&ocirc;i mu&ocirc;́n mang lại cho các bạn - những người thực sự có khát khao cháy bỏng và mong mu&ocirc;́n mãnh li&ecirc;̣t, cách đ&ecirc;̉ thực hi&ecirc;̣n những ước mơ của mình.</span></p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Sau khi đọc và nghi&ecirc;̀n ng&acirc;̃m những gì t&ocirc;i vi&ecirc;́t trong đ&acirc;y, bạn sẽ mạnh mẽ hơn từ s&acirc;u thẳm b&ecirc;n trong con người bạn. Bạn sẽ có th&ecirc;m sức mạnh, sự tự tin, những kỹ năng, ph&acirc;̉m ch&acirc;́t c&acirc;̀n thi&ecirc;́t và cách xử lý các tình hu&ocirc;́ng khó trong bu&ocirc;̉i phỏng v&acirc;́n đ&ecirc;̉ chinh phục được nhà tuy&ecirc;̉n dụng. Đi&ecirc;̀u đặc bi&ecirc;̣t quan trọng là bạn sẽ mạnh dạn, có đủ dũng cảm và ni&ecirc;̀m tin đ&ecirc;̉ dám thay đ&ocirc;̉i mạnh nẽ chính con người, tư duy cũ rích b&acirc;́y l&acirc;u nay đã và đang t&ocirc;̀n tại b&ecirc;n trong bạn.</span></p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Với <em><strong>Bí Quy&ecirc;́t Tìm Vi&ecirc;̣c Thành C&ocirc;ng</strong></em>, n&ecirc;́u bạn đọc th&acirc;̣t kỹ và chăm chú vào những gì t&ocirc;i hướng d&acirc;̃n, bạn sẽ có được đi&ecirc;̀u mình mong mu&ocirc;́n. Đó là m&ocirc;̣t c&ocirc;ng vi&ecirc;̣c, m&ocirc;̣t vị trí bạn đã &acirc;́p ủ b&acirc;́y l&acirc;u nay.</span></p>\r\n<p><strong><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Mời bạn đón đọc.</span></strong></p>', '<p>Bí Quy&ecirc;́t Tìm Vi&ecirc;̣c Thành C&ocirc;ng Bạn bi&ecirc;́t kh&ocirc;ng? Đã năm r&ocirc;̀i t&ocirc;i kh&ocirc;ng có nhi&ecirc;̀u cảm giác tuy&ecirc;̣t vời và m&ocirc;̣t t&acirc;m trạng nhẹ nhàng như ngày h&ocirc;m nay. Bởi vì m&ocirc;̣t lẽ, năm năm qua t&ocirc;i đã dành h&ecirc;́t thời gin rảnh r&ocirc;̃i và sức lực của mình ...</p>', '2009-11-25', '2016-10-20', '', '', 'linh123456', '1494440902', '1494440902');
INSERT INTO `product` VALUES ('21', 'EM LÀ NHÀ ', '44', null, null, null, null, '100000', '20', '2017-05-14 00:00:00', '2017-05-31 00:00:00', '86', '1', null, null, null, '', null, 'http://localhost/hocphp/datn/source/251343_p74232mbiatruoc.jpg', 'http://localhost/hocphp/datn/source/253703_p74232eimg793.jpg', '', '', '<p><em><strong>EM L&Agrave; NH&Agrave; - &ldquo;Em chẳng sợ cuộc đời nhiều biến cố, chỉ sợ kh&ocirc;ng c&oacute; anh siết chặt tay em.&rdquo;</strong></em></p>\r\n<p>- D&agrave;nh cho những ai trải qua bao nhi&ecirc;u vụn vỡ, vẫn muốn một lần nữa tin v&agrave;o t&igrave;nh y&ecirc;u.</p>\r\n<p>- Cuốn tiểu thuyết đạt tới 4,2 triệu view của t&aacute;c giả Lan R&ugrave;a.</p>\r\n<p>- Ngoại truyện chưa từng được c&ocirc;ng bố của <em><strong>&ldquo;Em l&agrave; nh&agrave;&rdquo;.</strong></em></p>\r\n<p>Đằng sau một cuộc t&igrave;nh tan vỡ l&agrave; điều g&igrave;?</p>\r\n<p>Lời xin lỗi liệu c&oacute; l&agrave; đủ để l&agrave;m ngu&ocirc;i ngoai nỗi đau của người bị bỏ lại? T&igrave;nh y&ecirc;u thời nay, chỉ y&ecirc;u th&ocirc;i chưa bao giờ l&agrave; đủ?</p>\r\n<p>Nếu bạn c&ograve;n chưa thể chắc chắn khi đưa ra c&acirc;u trả lời của m&igrave;nh, vậy th&igrave; h&atilde;y c&ugrave;ng đi t&igrave;m đ&aacute;p &aacute;n cho những c&acirc;u hỏi tr&ecirc;n trong <strong><em>&ldquo;Em l&agrave; nh&agrave;&rdquo;</em></strong> &ndash; Cuốn tiểu thuyết viết về những mối t&igrave;nh đan xen, l&agrave; m&oacute;n qu&agrave;, l&agrave; lời nhắn nhủ của một người trẻ, gửi đến nhiều người trẻ.</p>\r\n<p>Xoay quanh những đổ vỡ t&igrave;nh cảm, những th&aacute;ch thức, những sự lừa dối m&agrave; c&ocirc; g&aacute;i trẻ Như Nguyệt phải chịu đựng, chuyện t&igrave;nh y&ecirc;u trong <strong><em>&ldquo;Em l&agrave; nh&agrave;&rdquo;</em></strong> sẽ đưa bạn qua những cung bậc cảm x&uacute;c từ ngọt ng&agrave;o đến cao tr&agrave;o uất hận, từ b&igrave;nh y&ecirc;n &ecirc;m ấm đến những nỗi đau chỉ c&oacute; thể &acirc;m thầm chịu đựng.</p>\r\n<p>T&igrave;nh y&ecirc;u l&agrave; điều duy nhất tr&ecirc;n đời n&agrave;y kh&ocirc;ng thể l&ecirc;n kế hoạch, kh&ocirc;ng thể lường trước. Thời gian của một cuộc t&igrave;nh dường như chẳng thể đảm bảo về một c&aacute;i kết hạnh ph&uacute;c, giống như mối t&igrave;nh k&eacute;o d&agrave;i suốt 7 năm của Như Nguyệt v&agrave; Việt An. Hai con người đ&atilde; d&agrave;nh cả thanh xu&acirc;n ở b&ecirc;n nhau, sau c&ugrave;ng đ&atilde; trở th&agrave;nh những người xa lạ. Ch&agrave;ng trai quay lưng, kết h&ocirc;n với người bạn th&acirc;n nhất của người con g&aacute;i m&igrave;nh từng y&ecirc;u. Đ&oacute; l&agrave; H&agrave; Vi &ndash; c&ocirc; g&aacute;i xinh đẹp v&agrave; ph&iacute;a sau l&agrave; cả một gia đ&igrave;nh bề thế. S&oacute;ng gi&oacute; từ đ&oacute; cứ đổ ập v&agrave;o đời Như Nguyệt. B&igrave;nh y&ecirc;n hết lần n&agrave;y đến lần kh&aacute;c rời bỏ c&ocirc; m&agrave; đi.</p>\r\n<p><strong><em>&ldquo;Em l&agrave; nh&agrave;&rdquo;</em></strong> l&agrave; c&acirc;u chuyện t&igrave;nh với nhiều nước mắt, nhiều th&ugrave; hận, nhưng cũng kh&ocirc;ng thiếu những điều ngọt ng&agrave;o v&agrave; những hạnh ph&uacute;c b&igrave;nh dị. Mỗi trang s&aacute;ch bạn lật mở, mỗi nỗi đau bạn cảm nhận c&ugrave;ng những nh&acirc;n vật ch&iacute;nh l&agrave; mỗi lần bạn x&oacute;a đi lớp sương m&ugrave; đang giăng trong m&igrave;nh về t&igrave;nh y&ecirc;u. V&agrave; những c&acirc;u hỏi ở tr&ecirc;n sẽ trở n&ecirc;n dễ d&agrave;ng trả lời hơn bao giờ hết.</p>\r\n<p>Chẳng phải tự nhi&ecirc;n m&agrave; Việt An bỏ Như Nguyệt để đến với H&agrave; Vi.</p>\r\n<p>Chẳng phải tự nhi&ecirc;n m&agrave; Mai v&agrave; Như Nguyệt trở th&agrave;nh đối thủ v&agrave; nh&igrave;n nhau bằng &aacute;nh mắt h&igrave;nh vi&ecirc;n đạn, d&ugrave; trước đ&oacute; họ từng rất th&acirc;n.</p>\r\n<p>Cũng chẳng phải tự nhi&ecirc;n m&agrave; Như Nguyệt c&oacute; thể dễ d&agrave;ng bước qua những đổ vỡ của đời m&igrave;nh.</p>\r\n<p>Vậy đ&oacute;. Chuyện t&igrave;nh y&ecirc;u trong <strong><em>&ldquo;Em l&agrave; nh&agrave;&rdquo;</em></strong> kh&ocirc;ng chỉ đơn thuần l&agrave; những lần y&ecirc;u &ndash; chia tay, cũng kh&ocirc;ng hẳn l&agrave; những th&ugrave; hằn hay những mưu kế trả th&ugrave;. Đ&oacute; l&agrave; cuộc sống của những người trẻ ch&ocirc;ng ch&ecirc;nh, mỏng manh v&agrave; đơn độc giữa những th&aacute;ng ng&agrave;y b&atilde;o tố. Tuổi trẻ của họ được y&ecirc;u, được n&ocirc;ng nổi, được khờ dại, được nếm trải những nỗi đau để rồi nhận ra rằng: T&igrave;nh y&ecirc;u th&ocirc;i l&agrave; kh&ocirc;ng đủ để l&agrave;m n&ecirc;n một cuộc đời hạnh ph&uacute;c. <strong><em>&ldquo;Em l&agrave; nh&agrave;&rdquo;</em></strong> nhẹ nh&agrave;ng như vị t&igrave;nh y&ecirc;u đầu đời, đắng ch&aacute;t như m&ugrave;i th&ugrave; hận v&agrave; bất ngờ với những b&iacute; mật thẳm s&acirc;u.</p>\r\n<p>H&atilde;y đọc, cảm nhận để tự t&igrave;m đ&aacute;p &aacute;n cho những c&acirc;u hỏi vẫn c&ograve;n đang bỏ ngỏ trong tr&aacute;i tim bạn.</p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>', '<p>EM L&Agrave; NH&Agrave; - &ldquo;Em chẳng sợ cuộc đời nhiều biến cố, chỉ sợ kh&ocirc;ng c&oacute; anh siết chặt tay em.&rdquo;- D&agrave;nh cho những ai trải qua bao nhi&ecirc;u vụn vỡ, vẫn muốn một lần nữa tin v&agrave;o t&igrave;nh y&ecirc;u.- Cuốn tiểu thuyết đạt tới 4,2 triệu view của t&aacute;c giả Lan R&ugrave;a.- Ngoại ...</p>', null, '2017-04-11', '', '', 'linh123456', '1494527049', '1494527352');
INSERT INTO `product` VALUES ('22', 'Khát Vọng Việt - Vì Sao Đất Nước Ta Còn Nghèo? ', '30', '23', null, null, null, '50000', '25', '2017-05-07 00:00:00', '2017-06-10 00:00:00', '247', '1', null, null, null, '', null, 'http://localhost/hocphp/datn/source/255804_p75518mbiatruoc.jpg', 'http://localhost/hocphp/datn/source/255804_p75518mbiatruoc.jpg', 'Việt Nam', 'Tiếng Việt', '<p><em><strong>Kh&aacute;t vọng Việt: V&igrave; sao đất nước ta c&ograve;n ngh&egrave;o?</strong></em> l&agrave; tập hợp những b&agrave;i viết của Đỗ Cao Bảo, nh&agrave; đồng s&aacute;ng lập, ph&oacute; tổng gi&aacute;m đốc phụ tr&aacute;ch kinh doanh tập đo&agrave;n FPT. Sinh ra v&agrave; lớn l&ecirc;n trong những năm th&aacute;ng chiến tranh gian khổ, &ocirc;ng mang trong m&igrave;nh &ldquo;kh&aacute;t vọng Việt: kh&aacute;t vọng mang tr&iacute; tuệ Việt Nam đi chinh phục thế giới, kh&aacute;t vọng rửa nỗi nhục ngh&egrave;o n&agrave;n, lạc hậu, kh&aacute;t vọng vươn tới x&acirc;y dựng một nước Việt Nam gi&agrave;u mạnh v&agrave; h&ugrave;ng cường, s&aacute;nh vai bạn b&egrave; quốc tế, được bạn b&egrave; quốc tế nể trọng. Kh&aacute;t vọng Việt từ anh Trương Gia B&igrave;nh, chủ tịch FPT, c&aacute;c th&agrave;nh vi&ecirc;n s&aacute;ng lập FPT, c&aacute;c cộng sự, đồng nghiệp, bạn h&agrave;ng, đối t&aacute;c kinh doanh, gia đ&igrave;nh v&agrave; bạn b&egrave; của t&ocirc;i đ&atilde; được t&ocirc;i tiếp nhận v&agrave; viết ra trong những l&uacute;c rảnh rỗi, giữa những chuyến bay, giữa những thương vụ kinh doanh; viết ở nh&agrave;, viết tr&ecirc;n &ocirc; t&ocirc;, viết ở s&acirc;n bay, viết ở b&atilde;i biển, viết ở bất cứ nơi n&agrave;o m&agrave; t&ocirc;i c&oacute; cảm x&uacute;c. T&ocirc;i viết với một niềm tin s&acirc;u sắc rằng giống như ngọn lửa thi&ecirc;ng tr&ecirc;n đỉnh Olympia kh&ocirc;ng bao giờ tắt, ngọn lửa kh&aacute;t vọng Việt sẽ được duy tr&igrave; th&ocirc;ng qua việc truyền từ người Việt Nam n&agrave;y sang người Việt Nam kh&aacute;c, từ thế hệ Việt Nam n&agrave;y sang thế hệ Việt Nam kh&aacute;c. Việc c&aacute;c bạn đọc, nghiền ngẫm, chia sẻ v&agrave; trải nghiệm một v&agrave;i điều t&acirc;m đắc trong cuốn s&aacute;ch n&agrave;y cũng l&agrave; một phần của qu&aacute; tr&igrave;nh truyền lửa kh&aacute;t vọng Việt.&rdquo; Cuốn s&aacute;ch được chia l&agrave;m ba phần:</p>\r\n<p>&ndash; Phần 1: &ldquo;V&igrave; sao đất nước ta c&ograve;n ngh&egrave;o&rdquo; sẽ l&yacute; giải nguy&ecirc;n nh&acirc;n đất nước ta c&ograve;n ngh&egrave;o, đưa ra c&aacute;c giải ph&aacute;p cũng như những kh&aacute;t vọng v&agrave; h&agrave;nh động của FPT</p>\r\n<p>&ndash; Phần 2: &ldquo;Mạn đ&agrave;m về kinh tế&rdquo; sẽ n&oacute;i về c&aacute;ch nh&igrave;n đối với nhiều kh&iacute;a cạnh kinh tế như th&agrave;nh c&ocirc;ng l&agrave; g&igrave;, l&agrave;m thế n&agrave;o để th&agrave;nh c&ocirc;ng, c&aacute;c tấm gương th&agrave;nh c&ocirc;ng, v.v.</p>\r\n<p>&ndash; Phần 3: &ldquo;C&aacute;i nh&igrave;n đa chiều về x&atilde; hội&rdquo; sẽ n&oacute;i về quan điểm đối với nhiều vấn đề của x&atilde; hội như &ugrave;n tắc giao th&ocirc;ng, văn h&oacute;a xếp h&agrave;ng, c&aacute;ch l&agrave;m từ thiện v.v.</p>\r\n<p>Cuốn s&aacute;ch sẽ đem đến một g&oacute;c nh&igrave;n mới, gi&uacute;p thức tỉnh v&agrave; truyền động lực cho c&aacute;c độc giả, đặc biệt l&agrave; c&aacute;c độc giả trẻ.</p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>', '<p>Kh&aacute;t vọng Việt: V&igrave; sao đất nước ta c&ograve;n ngh&egrave;o? l&agrave; tập hợp những b&agrave;i viết của Đỗ Cao Bảo, nh&agrave; đồng s&aacute;ng lập, ph&oacute; tổng gi&aacute;m đốc phụ tr&aacute;ch kinh doanh tập đo&agrave;n FPT. Sinh ra v&agrave; lớn l&ecirc;n trong những năm th&aacute;ng chiến tranh gian khổ, &ocirc;ng mang trong m&igrave;nh &ldquo;kh&aacute;t ...</p>', null, '2017-05-18', 'kinh tế, khát vọng, tuổi trẻ, Khát Vọng Việt - Vì Sao Đất Nước Ta Còn Nghèo? ', 'kinh tế, khát vọng, tuổi trẻ, Khát Vọng Việt - Vì Sao Đất Nước Ta Còn Nghèo? ', 'phamgiang', '1494602543', '1494603324');
INSERT INTO `product` VALUES ('24', 'Thương Được Cứ Thương Đi (Tái Bản 2017)', '50', '24', null, '3', '2', '82000', '20', '2017-05-25 00:00:00', '2017-06-10 00:00:00', '4', '1', '3', '234', '24', '200 x 300', null, 'http://localhost/hocphp/datn/source/sach_van_hoc_trong_nuoc/251342_p74221m001.jpg', 'http://localhost/hocphp/datn/source/sach_van_hoc_trong_nuoc/252355_p74221eimg914.jpg', 'Việt Nam', 'Tiếng Việt', '<p>Kh&ocirc;ng một ch&uacute;t hư cấu, cuốn s&aacute;ch l&agrave; tập hợp những c&acirc;u chuyện ho&agrave;n to&agrave;n c&oacute; thật về t&igrave;nh thương giữa người với người trong x&atilde; hội c&ograve;n nhiều ấm lạnh, được viết n&ecirc;n từ ch&iacute;nh cuộc đời t&aacute;c giả v&agrave; từ những trải nghiệm của t&aacute;c giả tr&ecirc;n ...</p>', '<p>Kh&ocirc;ng một ch&uacute;t hư cấu, cuốn s&aacute;ch l&agrave; tập hợp những c&acirc;u chuyện ho&agrave;n to&agrave;n c&oacute; thật về t&igrave;nh thương giữa người với người trong x&atilde; hội c&ograve;n nhiều ấm lạnh, được viết n&ecirc;n từ ch&iacute;nh cuộc đời t&aacute;c giả v&agrave; từ những trải nghiệm của t&aacute;c giả tr&ecirc;n đường đời. Những c&acirc;u chuyện rất giản dị v&agrave; đời thường nhưng lại khiến người đọc bất gi&aacute;c cay cay sống mũi.&nbsp;</p>\r\n<p>Giữa cuộc đời c&ograve;n v&ocirc; v&agrave;n ch&ocirc;ng ch&ecirc;nh, cần lắm những t&igrave;nh thương b&igrave;nh dị. Để bước ch&acirc;n kia kh&ocirc;ng qu&aacute; hối hả giữa d&ograve;ng ngược xu&ocirc;i, để b&agrave;n tay ấy chẳng thờ ơ lướt qua những mong cầu nắm n&iacute;u. Đ&acirc;u đ&oacute; ngo&agrave;i kia, những phận đời gầy guộc vẫn đang c&uacute;i mặt. Xin h&atilde;y giữ cho m&igrave;nh một đ&ocirc;i mắt s&aacute;ng, một tr&aacute;i tim trong, một t&acirc;m hồn rộng. Người với người đ&acirc;u dễ ph&ocirc;i pha, dẫu thương bao nhi&ecirc;u cũng l&agrave; chưa đủ. Vậy n&ecirc;n, nếu c&ograve;n thương được, xin h&atilde;y cứ thương đi&hellip;</p>\r\n<p>***</p>\r\n<p><strong>Một số tr&iacute;ch dẫn:</strong></p>\r\n<p>Tiểu thuyết hay phim truyện đều được x&acirc;y từ chất liệu đời. V&agrave; đời thật th&igrave; vốn dĩ kh&ocirc;ng tr&ograve;n như c&aacute;ch ch&uacute;ng ta ngồi trong bốn bức tường v&agrave; nh&igrave;n n&oacute; qua m&agrave;n h&igrave;nh m&aacute;y t&iacute;nh hay điện thoại.</p>\r\n<p>T&ocirc;i lu&ocirc;n nh&igrave;n con người ở mặt thiện để thấy cuộc đời đ&aacute;ng sống, con người đ&aacute;ng thương.</p>\r\n<p>Niềm-vui l&agrave; một &yacute; niệm v&ocirc; h&igrave;nh, kh&ocirc;ng phải vật chất hiện hữu. Th&agrave;nh thử, n&oacute; l&agrave; thứ để nhận-ra chứ kh&ocirc;ng phải để kiếm-t&igrave;m.</p>\r\n<p>Con người vốn dĩ hay tự bơm phồng những kh&oacute; khăn hay đau khổ của ch&iacute;nh m&igrave;nh m&agrave; qu&ecirc;n mất rằng, chỉ cần sống chậm lại một ch&uacute;t, cởi mở hơn một ch&uacute;t, nghĩ tho&aacute;ng hơn một ch&uacute;t, niềm vui sẽ lu&ocirc;n c&oacute; b&ecirc;n ta, mỗi ng&agrave;y...</p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>', null, '2017-03-14', '', '', 'Phạm Thị Huyền', '1494861288', '1494867014');
INSERT INTO `product` VALUES ('25', 'GAM7 Book No 5: Content - Nội dung', '26', '25', null, '4', '3', '150000', '30', '2017-06-01 00:00:00', '2017-07-06 00:00:00', '0', '1', '3', '343', '123', '200 x 300', '128345876534', 'http://localhost/hocphp/datn/source/sach_kinh_te/maketing_ban_hang/254456_p75398mgam7.jpg', 'http://localhost/hocphp/datn/source/sach_kinh_te/maketing_ban_hang/256095_p75398eimg798.jpg', '', 'Tiếng Việt', '<p>&ldquo;Content is King&rdquo; hay Content Marketing - Tiếp thị nội dung l&agrave; thuật ngữ kh&ocirc;ng c&ograve;n xa lạ với c&aacute;c Marketer. Kh&ocirc;ng phải l&agrave; xu hướng nhất thời, Content Marketing thực sự l&agrave; phương thức tiếp cận kh&aacute;ch h&agrave;ng hiệu quả, mang tới những th&ocirc;ng tin hữu &iacute;ch v&agrave; khẳng ...</p>', '<p>&ldquo;Content is King&rdquo; hay Content Marketing - Tiếp thị nội dung l&agrave; thuật ngữ kh&ocirc;ng c&ograve;n xa lạ với c&aacute;c Marketer. Kh&ocirc;ng phải l&agrave; xu hướng nhất thời, Content Marketing thực sự l&agrave; phương thức tiếp cận kh&aacute;ch h&agrave;ng hiệu quả, mang tới những th&ocirc;ng tin hữu &iacute;ch v&agrave; khẳng định vị tr&iacute; cầu nối gi&uacute;p gắn kết thương hiệu với người d&ugrave;ng.&nbsp;</p>\r\n<p>Nhận biết được tầm quan trọng của Content Marketing, <strong><em>GAM7 Book No.5</em></strong> sẽ mang đến cho độc giả những chia sẻ về chiến lược nội dung của c&aacute;c thương hiệu dẫn đầu, vai tr&ograve; của content trong h&agrave;nh tr&igrave;nh chinh phục t&acirc;m tr&iacute; v&agrave; t&uacute;i tiền của kh&aacute;ch h&agrave;ng, v&agrave; những lời khuy&ecirc;n hữu &iacute;ch gi&uacute;p c&aacute;c marketer v&agrave; designer c&oacute; th&ecirc;m động lực s&aacute;ng tạo những nội dung th&uacute; vị mỗi ng&agrave;y.</p>\r\n<p><strong>03 điều chỉ c&oacute; ở GAM7 Book No.5:</strong></p>\r\n<p>1. Cập nhật những kiến thức tổng quan v&agrave; đa chiều về Content Marketing từ c&aacute;c chuy&ecirc;n gia h&agrave;ng đầu trong lĩnh vực x&acirc;y dựng thương hiệu, Marketing v&agrave; Truyền th&ocirc;ng s&aacute;ng tạo.</p>\r\n<p>2. Sự tham gia của 19 chuy&ecirc;n gia v&agrave; client đầu ng&agrave;nh: B&ecirc;n cạnh những t&ecirc;n tuổi quen thuộc của độc giả GAM7 như Hồ C&ocirc;ng Ho&agrave;i Phương, Huỳnh Vĩnh Sơn, GAM7 Book No.5 h&acirc;n hạnh c&oacute; th&ecirc;m những g&oacute;c nh&igrave;n s&acirc;u sắc từ t&aacute;c giả Kit Ong, Đỗ Minh Thuận, Phan Hải, Mai Nguyễn Quang Huy, Tuấn H&agrave;...</p>\r\n<p>3. Trải nghiệm thiết kế d&agrave;n trang đẹp mắt với phong c&aacute;ch minh họa độc đ&aacute;o gi&uacute;p bạn đọc dễ d&agrave;ng theo d&otilde;i v&agrave; thưởng thức nội dung.</p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>', null, '2013-11-07', 'GAM7 Book No 5: Content - Nội dung', 'GAM7 Book No 5: Content - Nội dung', 'Phạm Thị Huyền', '1494862115', '1494862115');
INSERT INTO `product` VALUES ('26', 'Trò Chuyện Với Cõi Vô Hình', '53', '26', null, '5', '4', '148000', '20', '2017-06-28 00:00:00', '2017-06-10 00:00:00', '2', '1', '3', '100', '123', '200 x 300', null, 'http://localhost/hocphp/datn/source/sach_van_hoc_trong_nuoc/tu_truyen_hoi_ki/254385_p75386mbiatruoc.jpg', 'http://localhost/hocphp/datn/source/sach_van_hoc_trong_nuoc/tu_truyen_hoi_ki/254470_p75386ebiasau.jpg', '', '', '<p><strong>Tự truyện nh&agrave; ngoại cảm Ho&agrave;ng Thị Thi&ecirc;m</strong></p>\r\n<p><strong>Người phụ nữ huyền b&iacute; c&oacute; con mắt thứ 3 v&agrave; c&oacute; khả năng kết nối với c&aacute;c linh hồn</strong></p>\r\n<p><strong>&bull; B&iacute; mật từ những ng&ocirc;i mộ cổ sẽ được khai mở</strong></p>\r\n<p><strong>&bull; Sững sờ của người Nhật trước si&ecirc;u nh&acirc;n ba mắt tr&ecirc;n truyền h&igrave;nh</strong></p>\r\n<p>Hơn bảy tỷ người tr&ecirc;n h&agrave;nh tinh n&agrave;y dường như kh&ocirc;ng ai c&oacute; thể nh&igrave;n được nếu bị bịt k&iacute;n hai mắt, trừ nh&agrave; ngoại cảm Ho&agrave;ng Thị Thi&ecirc;m, người được k&ecirc;nh truyền h&igrave;nh NHK uy t&iacute;n tại Nhật Bản mệnh danh l&agrave; &ldquo;Si&ecirc;u nh&acirc;n 3 mắt&rdquo;.</p>\r\n<p>Nếu bạn gặp một người phụ nữ nhỏ b&eacute;, giản dị, dịu d&agrave;ng, khi&ecirc;m tốn, tr&igrave;nh độ học vấn chỉ mới lớp 7, sống trong một nếp nh&agrave; nhỏ n&eacute;p dưới mảng xanh c&acirc;y tr&aacute;i của rừng n&uacute;i tỉnh H&ograve;a B&igrave;nh, c&oacute; lẽ bạn sẽ kh&ocirc;ng thể n&agrave;o tưởng tượng được con người đ&oacute; lại l&agrave; một nh&agrave; ngoại cảm ẩn chứa năng lực b&iacute; ẩn, vượt xa khả năng của những &ldquo;người trần mắt thịt&rdquo; ch&uacute;ng ta.&nbsp;</p>\r\n<p>Người phụ nữ ấy c&oacute; cuộc sống kh&aacute; k&iacute;n tiếng. Chị bước qua mọi kh&oacute; khăn, mọi điều tiếng v&agrave; cứ hồn nhi&ecirc;n sống, hồn nhi&ecirc;n l&agrave;m việc, chẳng cần tất tưởi bon chen. Khi tự kh&aacute;m ph&aacute; được những năng lực kỳ b&iacute; của bản th&acirc;n, chị sẵn s&agrave;ng hy sinh c&ocirc;ng việc gia đ&igrave;nh, mặc cho mảnh vườn đồi xanh, cỏ dại để d&agrave;nh thời gian gi&uacute;p người, gi&uacute;p đời. Tất cả những g&igrave; chị l&agrave;m l&agrave; bền bỉ thực hiện &ldquo;nhiệm vụ đặc biệt&rdquo; m&agrave; Đấng Si&ecirc;u linh truyền cho, kh&ocirc;ng đ&ograve;i hỏi lợi &iacute;ch g&igrave; cho ri&ecirc;ng m&igrave;nh. Nhiều lần vượt qua ranh giới của sự sống v&agrave; c&aacute;i chết, chịu đựng nỗi thống khổ của cuộc đời xảy đến, chấp nhận sự miệt thị, hắt hủi của người đời, nhưng Ho&agrave;ng Thị Thi&ecirc;m tựa như một đốm lửa lẻ loi soi đường cho những linh hồn lạc lối t&igrave;m về với người th&acirc;n.&nbsp;</p>\r\n<p>Vậy m&agrave;, người đang b&agrave; ba mắt ấy ngay cả khi được vinh danh cũng chỉ khi&ecirc;m tốn cho rằng đ&oacute; đơn giản l&agrave; bổn phận của m&igrave;nh.</p>\r\n<p><strong><em>&ldquo;Tr&ograve; Chuyện Với C&otilde;i V&ocirc; H&igrave;nh&rdquo;</em></strong> chứa đựng những sự thật m&agrave; dường như &iacute;t ai c&oacute; thế tin nổi, của một người đặc biệt. Đ&oacute;ng g&oacute;p rất nhiều trong sự thay đổi đời sống t&acirc;m linh của người Việt Nam đầu thế kỷ 21. C&oacute; thể n&oacute;i, thi&ecirc;n mệnh v&agrave; khả năng của chị Thi&ecirc;m l&agrave; &ldquo;sứ giả&rdquo; kết nối linh hồn người đ&atilde; khuất với người c&ograve;n sống, v&agrave; cuốn s&aacute;ch n&agrave;y l&agrave; c&acirc;u chuyện lạ thường của một phụ nữ n&ocirc;ng th&ocirc;n Việt Nam, từ một c&ocirc; g&aacute;i ngh&egrave;o kh&oacute; trở th&agrave;nh nh&acirc;n vật ch&iacute;nh của c&aacute;c buổi tọa đ&agrave;m ở H&agrave; Nội, c&aacute;c chương tr&igrave;nh &ldquo;Chuyện lạ Việt Nam&rdquo; tr&ecirc;n Đ&agrave;i Truyền h&igrave;nh Việt Nam; l&agrave; đối tượng nghi&ecirc;n cứu khoa học được c&aacute;c tổ chức quốc tế v&agrave; Đ&agrave;i Truyền h.nh H&agrave;n Quốc, Nhật Bản, Đức... mời ra nước ngo&agrave;i khảo nghiệm, được truyền h&igrave;nh trực tiếp về khả năng đặc biệt &ldquo;Người Ba Mắt&rdquo; v&agrave; được trao bằng chứng nhận cho hoạt động ngoại cảm.</p>\r\n<p>Ho&agrave;ng Thị Thi&ecirc;m kh&ocirc;ng c&ograve;n l&agrave; chuyện lạ của ri&ecirc;ng Việt Nam nữa, nhiều tổ chức nước ngo&agrave;i t&igrave;m đến mời chị tham gia v&agrave;o những cuộc khảo nghiệm của họ. Cho đến nay, Ho&agrave;ng Thị Thi&ecirc;m trở th&agrave;nh một hiện tượng chưa thể l&yacute; giải được, một người ẩn chứa b&iacute; mật của ng&agrave;n năm. Quanh chị l&agrave; một m&agrave;n sương m&ugrave; d&agrave;y đặc, kh&ocirc;ng thể t&igrave;m đ&acirc;u ra căn nguy&ecirc;n cho b&iacute; ẩn đ&oacute;, m&agrave; chỉ c&oacute; thể l&yacute; giải đ&oacute; l&agrave; hiện tượng si&ecirc;u nhi&ecirc;n.</p>\r\n<p>Sự xuất hiện n&agrave;y tạo ra tạo ra một thay đổi nhận thức lớn trong x&atilde; hội v&agrave; trong c&aacute;ch người Việt Nam nh&igrave;n nhận thế giới sau c&aacute;i chết qua c&aacute;ch ứng xử tr&acirc;n trọng &nbsp;t&acirc;m linh v&agrave; quan t&acirc;m thật sự đến luật nhận quả. V&agrave; đến h&ocirc;m nay, t&aacute;c phẩm &ldquo;Tr&ograve; chuyện với c&otilde;i v&ocirc; h&igrave;nh&rdquo; của Ho&agrave;ng Thị Thi&ecirc;m sẽ cho độc giả Việt Nam v&agrave; thế giới hiểu th&ecirc;m những kh&aacute;m ph&aacute; mới về thế giới v&ocirc; h&igrave;nh, huyền b&iacute; đang tồn tại song song với thế giới hữu h&igrave;nh m&agrave; ch&uacute;ng ta đang sống.</p>\r\n<p>Mong rằng bạn đọc sẽ ph&aacute;n x&eacute;t v&agrave; tiếp nhận c&acirc;u chuyện đời của Ho&agrave;ng Thị Thi&ecirc;m bằng một t&acirc;m thế kh&aacute;ch quan, cầu thị để cảm th&ocirc;ng, chia sẻ v&agrave; c&oacute; thể tự m&igrave;nh cắt nghĩa hay tiếp tục cuộc h&agrave;nh tr&igrave;nh t&acirc;m linh đầy b&iacute; ẩn n&agrave;y.</p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>', '<p>Tự truyện nh&agrave; ngoại cảm Ho&agrave;ng Thị Thi&ecirc;mNgười phụ nữ huyền b&iacute; c&oacute; con mắt thứ 3 v&agrave; c&oacute; khả năng kết nối với c&aacute;c linh hồn&bull; B&iacute; mật từ những ng&ocirc;i mộ cổ sẽ được khai mở&bull; Sững sờ của người Nhật trước si&ecirc;u nh&acirc;n ba mắt tr&ecirc;n truyền h&igrave;nhHơn ...</p>', null, '2017-04-27', '', '', 'Phạm Thị Huyền', '1494865489', '1494865489');
INSERT INTO `product` VALUES ('27', 'Pháo Đài Số', '54', '27', '2', '3', '3', '122000', '30', '2017-05-25 00:00:00', '2017-06-10 00:00:00', '1', '1', '0', '343', '123', '200 x 300', '85865498869', 'http://localhost/hocphp/datn/source/sach_vh_nuoc_ngoai/tieu_thuyet/254239_p75383mbiatruoc.jpg', 'http://localhost/hocphp/datn/source/sach_vh_nuoc_ngoai/tieu_thuyet/256635_p75383ebiasau.jpg', '', 'Tiếng Việt', '<p>Cơ quan An ninh Quốc gia NSA đảm nhiệm trọng tr&aacute;ch bảo vệ c&aacute;c li&ecirc;n lạc của ch&iacute;nh phủ Hoa Kỳ v&agrave; thu thập li&ecirc;n lạc của c&aacute;c quốc gia kh&aacute;c. V&agrave; con &aacute;t chủ b&agrave;i của họ ch&iacute;nh l&agrave; TRANSLTR, cỗ m&aacute;y vạn năng c&oacute; thể bẻ mọi mật m&atilde;. Cho đến khi n&oacute; đụng độ Ph&aacute;o Đ&agrave;i Số b&iacute; ẩn - thuật to&aacute;n xoay v&ograve;ng văn bản sạch c&oacute; thể tạo ra những mật m&atilde; kh&ocirc;ng thể giải m&atilde; v&agrave; khiến TRANSLTR trở n&ecirc;n lỗi thời.&nbsp;</p>\r\n<p>Susan Fletcher, trưởng Ban Mật m&atilde; của NSA, được triệu tập gấp để giải quyết khủng hoảng. C&ocirc; kh&ocirc;ng ngờ rằng m&igrave;nh sẽ buộc phải chiến đấu, kh&ocirc;ng chỉ cho niềm tin v&agrave; an nguy của đất nước, m&agrave; c&ograve;n cho t&iacute;nh mạng của ch&iacute;nh m&igrave;nh c&ugrave;ng người đ&agrave;n &ocirc;ng m&agrave; c&ocirc; y&ecirc;u.</p>\r\n<p>Tất cả đều nỗ lực đến tuyệt vọng để ph&aacute; hủy một s&aacute;ng tạo kh&ocirc;ng thể tưởng tượng nổi của một thi&ecirc;n t&agrave;i tật nguyền... một thuật to&aacute;n sẽ x&oacute;a sổ to&agrave;n bộ ng&agrave;nh t&igrave;nh b&aacute;o v&agrave; đe doạ c&aacute;n c&acirc;n quyền lực của ch&iacute;nh phủ Hoa Kỳ. M&atilde;i m&atilde;i.</p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>', '<p>Cơ quan An ninh Quốc gia NSA đảm nhiệm trọng tr&aacute;ch bảo vệ c&aacute;c li&ecirc;n lạc của ch&iacute;nh phủ Hoa Kỳ v&agrave; thu thập li&ecirc;n lạc của c&aacute;c quốc gia kh&aacute;c. V&agrave; con &aacute;t chủ b&agrave;i của họ ch&iacute;nh l&agrave; TRANSLTR, cỗ m&aacute;y vạn năng c&oacute; thể bẻ mọi mật m&atilde;. Cho đến khi n&oacute; đụng độ ...</p>', null, '2017-05-11', 'Pháo Đài Số hahaBook', 'Pháo Đài Số hahaBook', 'Phạm Thị Huyền', '1494866605', '1494866605');
INSERT INTO `product` VALUES ('28', 'Harry Potter Và Đứa Trẻ Bị Nguyền Rủa (Phần Một Và Hai)', '54', '16', '4', '7', '6', '150000', '20', '2017-05-16 00:00:00', '2017-06-10 00:00:00', '1', '1', '0', '372', '330', '14 x 20 cm', '8934974146421', 'http://localhost/hocphp/datn/source/sach_vh_nuoc_ngoai/tieu_thuyet/247294_p73614m1.jpg', 'http://localhost/hocphp/datn/source/sach_vh_nuoc_ngoai/tieu_thuyet/247255_p73614eimg329.jpg', 'Anh', 'Tiếng Việt', '<h3 class=\"mainbox2-title clearfix margin-top-20\">Harry Potter V&agrave; Đứa Trẻ Bị Nguyền Rủa (Phần Một V&agrave; Hai)</h3>\r\n<div class=\"mainbox2-body\">\r\n<div class=\"full-description\">\r\n<div class=\"box-author\">\r\n<div class=\"title\">Th&ocirc;ng tin t&aacute;c giả</div>\r\n<div class=\"author-description-wrap\">\r\n<div class=\"author-description\">\r\n<div class=\"author-name\"><a class=\"author\" title=\"T&aacute;c giả Nhiều T&aacute;c Giả\" href=\"https://www.vinabook.com/tac-gia/nhieu-tac-gia-1-i16605\">Nhiều T&aacute;c Giả</a></div>\r\n</div>\r\n<ul class=\"author-full-link\">\r\n<li><a class=\"readmore\" title=\"Xem chi tiết Nhiều T&aacute;c Giả\" href=\"https://www.vinabook.com/tac-gia/nhieu-tac-gia-1-i16605\">V&agrave;o trang ri&ecirc;ng của t&aacute;c giả</a></li>\r\n<li><a class=\"readmore\" title=\"Xem chi tiết Nhiều T&aacute;c Giả\" href=\"https://www.vinabook.com/tac-gia/nhieu-tac-gia-1-i16605\">Xem tất cả c&aacute;c s&aacute;ch của t&aacute;c giả</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n<p>Kịch bản Harry Potter v&agrave; Đứa trẻ bị nguyền rủa được viết dựa tr&ecirc;n c&acirc;u chuyện của J.K. Rowling, Jack Thorne v&agrave; John Tiffany. Từ những nh&acirc;n vật quen thuộc trong bộ Harry Potter, kịch bản n&oacute;i về cuộc phi&ecirc;u lưu của những hậu duệ, sự can thiệp v&agrave;o d&ograve;ng thời gian đ&atilde; g&acirc;y ra những thay đổi kh&ocirc;ng ngờ cho tương lai tưởng chừng đ&atilde; y&ecirc;n ổn sau khi vắng b&oacute;ng ch&uacute;a tể Voldermort.</p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>\r\n</div>\r\n</div>', '<p>Kịch bản Harry Potter v&agrave; Đứa trẻ bị nguyền rủa được viết dựa tr&ecirc;n c&acirc;u chuyện của J.K. Rowling, Jack Thorne v&agrave; John Tiffany. Từ những nh&acirc;n vật quen thuộc trong bộ Harry Potter, kịch bản n&oacute;i về cuộc phi&ecirc;u lưu của những hậu duệ, sự can thiệp v&agrave;o d&ograve;ng ...</p>', null, '2017-03-30', 'Harry Potter Và Đứa Trẻ Bị Nguyền Rủa (Phần Một Và Hai)  tiểu thuyêt', 'Harry Potter Và Đứa Trẻ Bị Nguyền Rủa (Phần Một Và Hai), tiểu thuyêt', 'dungpham1231', '1494887277', '1494887277');
INSERT INTO `product` VALUES ('29', 'Chiếc Ô Chia Mưa', '50', null, null, null, null, '69', '30', '2017-05-21 00:00:00', '2017-06-10 00:00:00', '0', '1', '1', '184', '242', '13.5 x 20.5 cm', '8936056792748', 'http://localhost/hocphp/datn/source/sach_van_hoc_trong_nuoc/truyen_ngan_tan_van/256888_p75651mbiatruoc.jpg', '', '230', '230', '<p>Cuốn truyện ngắn văn học Việt <em><strong>\"Chiếc &ocirc; chia mưa\"</strong></em> nằm trong top 3 giải thưởng văn học Đo&agrave;n Thị Điểm. Đ&acirc;y l&agrave; cuốn truyện ngắn viết về những mối t&igrave;nh, những rung động của tuổi thanh xu&acirc;n.</p>\r\n<p>T&igrave;nh y&ecirc;u giống như chiếc &ocirc; trong suốt. V&agrave; cơn mưa l&agrave; những nỗi buồn. Ch&uacute;ng ta l&agrave; những kẻ đ&atilde; từng đ&oacute;n nhận nỗi buồn theo c&aacute;ch của ri&ecirc;ng m&igrave;nh. Những ng&agrave;y ướt mưa khi đuổi theo một ai đ&oacute;, sẽ chẳng bao giờ gọi l&agrave; ngốc nghếch hay ph&iacute; ho&agrave;i thanh xu&acirc;n. Đơn giản l&agrave; người ta đang đuổi theo hạnh ph&uacute;c của ri&ecirc;ng m&igrave;nh, dẫu cho kết cục c&oacute; kh&ocirc;ng vẹn to&agrave;n đi chăng nữa.</p>\r\n<p>Nhưng khi người ta kh&ocirc;ng đấu tranh tất cả cho t&igrave;nh y&ecirc;u đ&oacute;, th&igrave; n&oacute; sẽ l&agrave; một sự &acirc;n hận lớn nhất trong cuộc đời. V&agrave; t&ocirc;i biết trong thế giới n&agrave;y, vẫn c&ograve;n rất nhiều chiếc &ocirc; chia mưa. Một người chấp nhận lạnh ướt để một người cảm thấy ấm &aacute;p.</p>\r\n<p><strong>Mời bạn đ&oacute;n đọc.</strong></p>', '<p>Cuốn truyện ngắn văn học Việt \"Chiếc &ocirc; chia mưa\" nằm trong top 3 giải thưởng văn học Đo&agrave;n Thị Điểm. Đ&acirc;y l&agrave; cuốn truyện ngắn viết về những mối t&igrave;nh, những rung động của tuổi thanh xu&acirc;n.T&igrave;nh y&ecirc;u giống như chiếc &ocirc; trong suốt. V&agrave; cơn mưa l&agrave; những ...</p>', null, '2017-05-22', 'Chiếc Ô Chia Mưa, kai hoàng, hahabook', 'Chiếc Ô Chia Mưa, kai hoàng, hahabook', 'dungpham1231', '1495133356', '1495133356');

-- ----------------------------
-- Table structure for province
-- ----------------------------
DROP TABLE IF EXISTS `province`;
CREATE TABLE `province` (
  `province_id` int(11) NOT NULL AUTO_INCREMENT,
  `province_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`province_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of province
-- ----------------------------
INSERT INTO `province` VALUES ('1', 'Hà Giang', '1491769216', '1493539674');
INSERT INTO `province` VALUES ('2', 'Nam Định', '1491770472', '1491770472');
INSERT INTO `province` VALUES ('3', 'Thái Bình', '1491809205', '1491809205');
INSERT INTO `province` VALUES ('4', 'Hà Nội', '1491809365', '1491809365');
INSERT INTO `province` VALUES ('5', 'Bắc Giang', '1491809612', '1491809612');
INSERT INTO `province` VALUES ('6', 'Bắc Ninh', '1491809741', '1491809741');
INSERT INTO `province` VALUES ('7', 'Phú Thọ', '1491809788', '1491809788');
INSERT INTO `province` VALUES ('8', 'Cao Bằng', '1491809862', '1491809862');
INSERT INTO `province` VALUES ('9', 'Thanh Hóa', '1491809925', '1491809925');
INSERT INTO `province` VALUES ('10', 'Hà Tĩnh', '1491810022', '1491810022');
INSERT INTO `province` VALUES ('11', 'Nghệ An', '1491810089', '1491810089');
INSERT INTO `province` VALUES ('12', 'Sa Pa', '1491810451', '1491810451');
INSERT INTO `province` VALUES ('13', 'Đà Lạt', '1491810810', '1491810810');
INSERT INTO `province` VALUES ('14', 'Hà Nam', '1491810923', '1491810923');
INSERT INTO `province` VALUES ('21', 'Hải Phòng', '1492165552', '1492165552');
INSERT INTO `province` VALUES ('22', 'Hải Dương', '1492165586', '1492165586');
INSERT INTO `province` VALUES ('23', 'Vũng Tàu', '1492165698', '1492165698');
INSERT INTO `province` VALUES ('24', 'Hòa Bình', '1492165736', '1492165736');
INSERT INTO `province` VALUES ('25', 'Đắc Lắc', '1492165819', '1492165819');
INSERT INTO `province` VALUES ('26', 'Bac can', '1492240293', '1492240293');
INSERT INTO `province` VALUES ('27', 'Hung yen', '1492240391', '1492240391');
INSERT INTO `province` VALUES ('28', 'Hoi an', '1492240910', '1492240910');
INSERT INTO `province` VALUES ('29', 'hoi an1', '1492240929', '1492240929');
INSERT INTO `province` VALUES ('30', 'long an', '1492244886', '1492244886');
INSERT INTO `province` VALUES ('31', 'my tho', '1492245100', '1492245100');

-- ----------------------------
-- Table structure for publisher
-- ----------------------------
DROP TABLE IF EXISTS `publisher`;
CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL AUTO_INCREMENT,
  `publisher_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(1) DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`publisher_id`),
  FULLTEXT KEY `FullText` (`publisher_name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of publisher
-- ----------------------------
INSERT INTO `publisher` VALUES ('1', 'Hông thắng', '1', '1492503148', '1492503148');
INSERT INTO `publisher` VALUES ('2', 'NXB Dân Trí', '1', '1494858908', '1494858908');
INSERT INTO `publisher` VALUES ('3', 'Nxb Lao động', '1', '1494861584', '1494861584');
INSERT INTO `publisher` VALUES ('4', 'Nxb Hội Nhà Văn', '1', '1494865140', '1494865140');
INSERT INTO `publisher` VALUES ('5', 'Nxb Lao động', '1', '1494866135', '1494866135');
INSERT INTO `publisher` VALUES ('6', 'Nxb Trẻ', '1', '1494882408', '1494882408');
INSERT INTO `publisher` VALUES ('7', 'Nxb văn học', '1', '1495132558', '1495132558');

-- ----------------------------
-- Table structure for supplier
-- ----------------------------
DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(1) DEFAULT '1',
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`supplier_id`),
  FULLTEXT KEY `FullText` (`supplier_name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of supplier
-- ----------------------------
INSERT INTO `supplier` VALUES ('2', 'BachvietBooks', '', '', '1', '', 'Thành lập vào tháng 11 năm 2006, Bách Việt là Công ty hoạt động trong lĩnh vực xuất bản với những thành viên trẻ tuổi, năng động, và say mê với tri thức, sách vở. Bách Việt hy vọng sẽ trở thành người bạn thân thiết của độc giả Việt Nam. Bách Việt đặt mục ', '1494858876', '1494858876');
INSERT INTO `supplier` VALUES ('3', 'BachvietBooks', '', '', '1', '', 'Thành lập vào tháng 11 năm 2006, Bách Việt là Công ty hoạt động trong lĩnh vực xuất bản với những thành viên trẻ tuổi, năng động, và say mê với tri thức, sách vở. Bách Việt hy vọng sẽ trở thành người bạn thân thiết của độc giả Việt Nam. Bách Việt đặt mục ', '1494858876', '1494858876');
INSERT INTO `supplier` VALUES ('4', 'RIO Creative', '', '', '1', '', '', '1494861620', '1494861620');
INSERT INTO `supplier` VALUES ('5', ' Trí Việt', '', '', '1', '', '', '1494865122', '1494865122');
INSERT INTO `supplier` VALUES ('6', ' BachvietBooks', '', '', '1', '', '', '1494866164', '1494866164');
INSERT INTO `supplier` VALUES ('7', 'Nxb Trẻ', '', '', '1', '', '', '1494882430', '1494882430');
INSERT INTO `supplier` VALUES ('8', 'Quảng Văn', '', '', '1', '', 'Công ty cổ phần sách và truyền thông Quảng Văn được thành lập vào tháng 9 năm 2009. Với định hướng trở thành thương hiệu tiên phong ở Việt Nam chuyên xuất bản những ấn phẩm dành cho nữ giới, hiện tại Quảng Văn đã xây dựng được bốn tủ sách chính: Tủ sách V', '1495132610', '1495132610');
INSERT INTO `supplier` VALUES ('9', ' Người Trẻ Việt', '', '', '1', '', ' Người Trẻ Việt', '1495133638', '1495133638');

-- ----------------------------
-- Table structure for translator
-- ----------------------------
DROP TABLE IF EXISTS `translator`;
CREATE TABLE `translator` (
  `translator_id` int(11) NOT NULL AUTO_INCREMENT,
  `translator_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(1) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `metakeyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `metadescription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`translator_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of translator
-- ----------------------------
INSERT INTO `translator` VALUES ('1', 'Mai Anh', '1', '', '', '', '1492503014', '1492503014');
INSERT INTO `translator` VALUES ('2', 'Lê Đình Chi ', '1', '', 'dịch giả Lê Đình Chi hahaBook', 'dịch giả Lê Đình Chi hahaBook', '1494866314', '1494866314');
INSERT INTO `translator` VALUES ('3', 'Lý Lan', '1', '<p><strong>L&yacute; Lan</strong> sinh ng&agrave;y 16/7/1957 tại Thủ Dầu Một, tỉnh B&igrave;nh Dương l&agrave; một nữ nh&agrave; văn, nh&agrave; thơ v&agrave; dịch giả tiếng Anh của Việt Nam. L&yacute; Lan được biết nhiều <strong><a href=\"http://www.vinabook.com/?q=harry+porter\">qua bản dịch Harry Potter</a></strong>. Qu&ecirc; mẹ ở L&aacute;i Thi&ecirc;u, qu&ecirc; cha ở huyện Triều Dương, th&agrave;nh phố S&aacute;n Đầu, tỉnh Quảng Đ&ocirc;ng, Trung Quốc. T&aacute;m năm đầu đời L&yacute; Lan sống ở qu&ecirc; mẹ, sau khi mẹ mất th&igrave; gia đ&igrave;nh về Chợ Lớn định cư.</p>\r\n<p>L&yacute; Lan học khoảng một năm ở trường l&agrave;ng, nửa năm ở trường Trung Ch&aacute;nh, v&agrave; Tiểu học Chợ Qu&aacute;n, Trung học Gia Long, Đại học Sư phạm Th&agrave;nh phố Hồ Ch&iacute; Minh, v&agrave; cao học (M.A.) Anh văn ở Đại học Wake Forest (Mỹ).</p>\r\n<p>Từ năm 1980 L&yacute; Lan bắt đầu dạy ở trường Trung học Cần Giuộc (Long An), năm 1984 chuyển về trường Trung học H&ugrave;ng Vương, Th&agrave;nh phố Hồ Ch&iacute; Minh. Năm 1991 chuyển qua trường Trung học L&ecirc; Hồng Phong, năm 1995 sang dạy ở Đại học Văn Lang đến năm 1997 th&igrave; nghỉ dạy.</p>\r\n<p>L&yacute; Lan lập gia đ&igrave;nh với Mart Stewart, một người Mỹ v&agrave; hiện định cư ở cả hai nơi, Hoa Kỳ v&agrave; Việt Nam.</p>\r\n<p>Truyện ngắn đầu tay của L&yacute; Lan l&agrave; Ch&agrave;ng Nghệ Sĩ in tr&ecirc;n b&aacute;o Tuổi Trẻ v&agrave; được giải thưởng (năm 1978). Lan tiếp tục viết v&agrave; đăng truyện tr&ecirc;n b&aacute;o Tuổi Trẻ, Văn Nghệ Giải Ph&oacute;ng, Khăn Qu&agrave;ng Đỏ. Tập truyện ngắn đầu tay Cỏ H&aacute;t (in chung với Trần Th&ugrave;y Mai) xuất bản năm 1983 (nh&agrave; xuất bản T&aacute;c Phẩm Mới, H&agrave; Nội). Tập truyện thiếu nhi <a href=\"http://www.vinabook.com/ngoi-nha-trong-co-m11i35440.html\">Ng&ocirc;i Nh&agrave; Trong Cỏ</a> (NXB Kim Đồng, H&agrave; Nội, 1984) được giải thưởng văn học thiếu nhi của Hội Nh&agrave; văn Việt Nam. Tập thơ L&agrave; M&igrave;nh Nh&agrave; xuất bản Văn Nghệ th&agrave;nh phố Hồ Ch&iacute; Minh, 2005) được giải thưởng thơ Hội Nh&agrave; Văn TP HCM. T&ugrave;y b&uacute;t Cổng trường mở ra của L&yacute; Lan được in trong S&aacute;ch gi&aacute;o khoa lớp 7, tập 1 của Việt Nam.</p>\r\n<p>L&yacute; Lan l&agrave; người đ&atilde; được Nh&agrave; xuất bản Trẻ giao c&ocirc;ng việc dịch truyện Harry Potter sang tiếng Việt. Với ng&ocirc;n từ phong ph&uacute; của m&igrave;nh, L&yacute; Lan đ&atilde; khiến cho Harry Potter để lại dấu ấn đậm n&eacute;t trong người đọc Việt Nam. C&ocirc;ng việc dịch truyện Harry Potter kh&ocirc;ng phải l&agrave; đơn giản, bởi c&acirc;u chuyện chứa đựng nhiều từ tiếng Anh rất kh&oacute; x&aacute;c định nghĩa. Nhưng, L&yacute; Lan đ&atilde; dịch một c&aacute;ch kh&aacute; ch&iacute;nh x&aacute;c v&agrave; nhanh ch&oacute;ng t&igrave;m ra trong kho t&agrave;ng của tiếng Việt nghĩa ph&ugrave; hợp cho những từ tiếng Anh đ&oacute;. Tuy nhi&ecirc;n cũng c&oacute; một số c&aacute;ch chơi chữ trong Harry Potter m&agrave; L&yacute; Lan đ&atilde; bỏ qua hoặc kh&ocirc;ng thể chuyển tải bằng tiếng Việt, hoặc một số trường hợp dịch sai. Đ&ocirc;i l&uacute;c lạm dụng việc dịch c&aacute;c c&acirc;u thần ch&uacute; sang tiếng Việt ở tập 7 qu&aacute; nhiều.&nbsp;</p>\r\n<p>L&yacute; Lan lu&ocirc;n hợp t&aacute;c c&ugrave;ng với Nh&agrave; xuất bản Trẻ để dịch v&agrave; cho ra mắt bản tiếng Việt với thời gian nhanh nhất, thể hiện qua việc vừa dịch vừa ph&aacute;t h&agrave;nh bằng c&aacute;c tập s&aacute;ch mỏng (từ tập 1 đến tập 5) v&agrave; ph&aacute;t h&agrave;nh <a href=\"http://www.vinabook.com/harry-potter-va-hoang-tu-lai-tap-6-tieng-viet-m11i15694.html\">tập 6</a>chỉ trong 40 ng&agrave;y sau bản tiếng Anh. Tuy nhi&ecirc;n, do &aacute;p lực thời gian, đ&atilde; c&oacute; những sai s&oacute;t khi dịch. V&iacute; dụ như, trong v&agrave;i tập đầu của tập nhỏ <a href=\"http://www.vinabook.com/harry-potter-va-hoi-phuong-hoang-tap-5-m11i53550.html\">tập 5</a>, L&yacute; Lan đ&atilde; dịch Harry Potter and the Order of Phoenix l&agrave; <a href=\"http://www.vinabook.com/harry-potter-va-hoi-phuong-hoang-tap-5-m11i53550.html\">Harry Potter v&agrave; Mệnh lệnh Phượng ho&agrave;ng</a>, sau khi dịch tới c&aacute;c phần sau, c&ocirc; mới dịch theo đ&uacute;ng &yacute; nghĩa của t&aacute;c giả l&agrave; <a href=\"http://www.vinabook.com/harry-potter-va-hoi-phuong-hoang-tap-5-m11i53550.html\">Harry Potter v&agrave; Hội Phượng ho&agrave;ng</a>. Hay trong tập 6, L&yacute; Lan chỉ dịch 25 chương đầu c&ograve;n 5 năm chương sau do Hương Lan dịch, n&ecirc;n hai giọng văn c&oacute; phần kh&ocirc;ng ăn khớp với nhau.</p>', 'lý lan, harry potter', 'lý lan, harry potter', '1494882368', '1494882368');
INSERT INTO `translator` VALUES ('4', ' Như Mai ', '1', '', ' Như Mai hahaBook', ' Như Mai hahaBook', '1494886534', '1494886534');

-- ----------------------------
-- Table structure for transport
-- ----------------------------
DROP TABLE IF EXISTS `transport`;
CREATE TABLE `transport` (
  `transport_id` int(11) NOT NULL AUTO_INCREMENT,
  `transport_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`transport_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of transport
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(1) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `province_id` int(11) DEFAULT NULL,
  `avata` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `role` int(1) NOT NULL DEFAULT '1' COMMENT '1 khách hàng, 2 manager, 3 admin',
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`),
  KEY `FK_PROVINCE` (`province_id`),
  CONSTRAINT `FK_PROVINCE` FOREIGN KEY (`province_id`) REFERENCES `province` (`province_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('2', 'dungpham1231', '2UHV0Udm_66wnLfln-RN8qpljOiS0Q84', '$2y$13$o9PV438tCliEwJpUoU27Yu0zrpNjkGIzTgBDRPULlpHtedIMY2hU6', null, 'dungpt@gmail.com', '1', '1492019435', '1495136590', '2', 'http://localhost/hocphp/datn/source/hai%20yeu.jpg', '0975738903', 'Đội Cấn, Ba Đình, Hà Nội', '0', '1995-02-28', '2', 'Phạm Thị Dung');
INSERT INTO `user` VALUES ('3', 'dungpham123', 'X2hb6Ep4sBi1JtRrSAm1GZXYUM9T_NOx', '$2y$13$m5qqv3is.i6TUdap54jgZe23WXRUtNX8Z9N9s9ka3u5BiiJgt1pYO', null, 'phamdung282123@gmail.com', '1', '1492066161', '1495134349', '2', 'http://localhost/hocphp/datn/source/h%C3%ACnh%20%E1%BA%A3nh0232_001.jpg', '9373458789', 'sd', '0', '2017-04-15', '1', 'dungpham');
INSERT INTO `user` VALUES ('4', 'haha', 'PG52lftLUC-wLDLbfT5IuwOBfKw5bLDx', '$2y$13$onUFQKQ820Hs481YpxZ7du1NzLspTUH7ETDThLftOv66sjRc3sZ36', null, 'haha@gmail.com', '1', '1492071696', '1492284326', '4', 'http://localhost/hocphp/datn/source/hai%20yeu_1.jpg', '0975738903', 'Bạch Long, Giao Thủy, Nam Định', '0', '1995-02-28', '0', 'Phạm Thị Dung');
INSERT INTO `user` VALUES ('5', 'phamgiang', '5kZbSbKBiwGnPcR5zbGeJKmN7-LiXyzI', '$2y$13$f8b/ZQzvC7zJaXgfNF744.sDJYFw05RMC/VR5YJCEbdEYkQVczZ7S', null, 'phamgiang@gmail.com', '1', '1492155920', '1492155920', null, null, null, null, null, null, '0', null);
INSERT INTO `user` VALUES ('6', 'hahaha', 'jjBQF032BjxGVmPykbyBTKlu3ELEucJa', '$2y$13$lYd0kosJmlGimBKuBk71vOA6cpNOVv/uk7bOD.ZmleCZG7bz1Kv3G', null, 'avc@gmail.com', '1', '1492283271', '1492283802', '5', 'http://localhost/hocphp/datn/source/C360_2014-07-04-07-52-54_1.jpg', '745897985', 'df', '1', '2017-04-05', '2', 'hahaha');
INSERT INTO `user` VALUES ('7', 'kakaka', 'Czhpwn6wEvOJecfzlXo45d9U3o7Fd1_i', '$2y$13$psroD2Il2ElLy.gCHnWUCeYD4y1MibO4NPFFdXazq6jgg4.n8YcDK', null, 'kk@gmail.com', '1', '1492285549', '1492316138', '2', 'http://localhost/hocphp/datn/source/hai%20yeu.jpg', '34546578', 'dfgfd', '1', '2017-04-04', '2', 'kakaka');
INSERT INTO `user` VALUES ('8', 'admin', 'fuGeD_clkFVka46lKr997P4fV7qOCp79', '$2y$13$lWdw.Ti08DybO3nOtXfGQ.RbV2GLsrB36yIZjf3TR5SW70QQQgb7O', null, 'adimn@gmail.com', '1', '1492317526', '1492317526', '3', 'http://localhost/hocphp/datn/source/hai%20yeu.jpg', '123456789', '', '1', '2017-04-12', '0', 'admin');
INSERT INTO `user` VALUES ('9', 'dunghaha', 'd5VQUwrqzniLl_0XvYEiZ9mEY5D0LDJS', '$2y$13$A6miHKBosa1JTwChXyz2bOhOjk1/hI.rKBEtZgxtlg9kZsa8pmOce', null, 'abc@gmail.com', '1', '1492409086', '1492409086', '4', 'http://localhost/hocphp/datn/source/HaiDung_1.jpg', '124325346', '', '0', '2017-04-27', '0', '2434');
INSERT INTO `user` VALUES ('10', 'à', 'l5KcCsUktI-TPBCHE9ZzQUcuOKhIqkfq', '$2y$13$/Sryed4yD19w93nM/4TCje90C0zl0ns6x0y/5Wh1JT9zzYgy3HAPq', null, 'abc123@gmail.com', '0', '1492411182', '1492411182', null, '', '', '', null, null, '1', 'à');
INSERT INTO `user` VALUES ('11', 'linh', '3DsNE6fX2rXO75pROou7Zn9uP2_2MjEF', '$2y$13$a.wYlrcjlrsIAAHS8NW2uuMjVR5iECSuA.m7DYwCZDkDELKUMG3Ya', null, 'linh@gmail.com', '0', '1492420606', '1492420606', null, '', '', '', '0', null, '1', 'linh');
INSERT INTO `user` VALUES ('12', 'nu', '1d3MsQtnDJq5ogxm_yEbGRgX_7Cr0gHJ', '$2y$13$M2I7AviWXG5h23Dk5xeTI.6jFyiKNa9hnCfm5ahSPkrNTiM7zYriq', null, 'dungpham@abc.com', '0', '1492420730', '1492420730', null, '', '112234', '', '0', null, '1', 'dung');
INSERT INTO `user` VALUES ('13', 'adminhaha', '_Ax3mVqPOT9ifj4ZeZ4wWhZzb3lNekaS', '$2y$13$eTAxnqYQMmLkPiNTAgo9qeuQtCVBa7uhiRXCnnshUxY.TBGwXuyyy', null, 'hahaha@gmail.com', '1', '1492436939', '1492446703', '2', 'http://localhost/hocphp/datn/source/C360_2014-07-04-07-52-54_1.jpg', '0987564532', 'sdf', null, '2017-05-01', '2', 'haha');
INSERT INTO `user` VALUES ('14', 'hoanghai', 'VvDnGXvggLHALEim-UiDWFpUrFcEu-us', '$2y$13$gSgktRkygov/My4dU6eH0uKlQ6RouEbthpUp5Sa86PWocRE5goZwK', null, 'hoanghai@gmail.com', '1', '1492445523', '1492445523', '2', 'http://localhost/hocphp/datn/source/hai%20yeu.jpg', '0987465738', 'giao thủy', '1', '2008-11-04', '0', 'hoanghai');
INSERT INTO `user` VALUES ('15', 'domai', 'qVYs3bFd9jQS7OIdczR0kJCH3BAo8F3N', '$2y$13$yLhNbeL1r9cXtO3UqElPRuvNzcXIna7qjbaM8aQPovyRraW3Zicbu', null, 'domai@gmail.com', '1', '1492523097', '1492523097', null, '', '27642374', '', '0', null, '1', 'domai');
INSERT INTO `user` VALUES ('16', 'linh123456', 'ZWqRmgHW40acp_wt-VRG5q9KrensCGcz', '$2y$13$Bl.wI72hMRX8tkNdFbJtmO9Aix/NfF.p/TSOykt1U2sqqfvaIqFNe', null, 'linh123@gmail.com', '1', '1493279562', '1493279562', null, null, null, null, '0', null, '0', null);
INSERT INTO `user` VALUES ('17', 'Phạm Thị Dung', 'MSsWSMOyIAEFBOqsIG8Mhlbnm7QYdwOQ', '$2y$13$aNhZWIN4jctlvvsanYn5zeUOXB68NNKJPkeMxh2HAQFL3kbPnMWS.', null, 'mama@gmail.com', '1', '1493448651', '1495134432', null, 'http://localhost/hocphp/datn/source/h%C3%ACnh%20%E1%BA%A3nh0232_001_1.jpg', '', '', null, null, '2', '');
INSERT INTO `user` VALUES ('18', 'dung', 'vgrK31aZLIvSsF_NxiictKhU6nhv_199', '$2y$13$AxLnsmXQIe5kpei.GWiCEu0XX0zkX8jDB9XDhc8XG3yGWgHIF.2zm', null, '123abc@gmail.com', '1', '1493460833', '1493460833', null, null, null, null, null, null, '0', null);
INSERT INTO `user` VALUES ('19', 'Đỗ Thị Mai', 'QeyNwR7IyY1-iVqvEpKvXdstEHQluNYq', '$2y$13$fVI4PEWdb2/L/hHw6K4HEeHkHuwQLEHy3iDm46EnSAA06QUKJLuYK', null, 'mai123@gmail.com', '1', '1494187139', '1494187139', null, null, null, null, '0', null, '0', null);
INSERT INTO `user` VALUES ('20', 'Phạm Văn Long', 'A5bXEC9BJWKMCxholTuqsJvGDdogof5q', '$2y$13$wmUuZ7LM8VFOGlyE54ZSl.TI/Lv.LjtprAxsQehKybsCvvpVcXWFG', null, 'long@gmail.com', '1', '1494778989', '1494778989', null, null, null, null, null, null, '0', null);
INSERT INTO `user` VALUES ('21', 'Dung Phạm', 'b8CgyVhEdEYpVZSiQpCa0ygvqiCifz3a', '$2y$13$bkvs8ZROyzJTludXdw.coOdkvmAY52tsenIujgEmVLZgSTbz37xI2', 'Qq-tUXyr7l8lFfSZzb4Nzbq722ui3gTE_1495109457', 'phamdung282@gmail.com', '1', '1494793450', '1495109457', null, null, null, null, '0', null, '0', null);
INSERT INTO `user` VALUES ('22', 'Phạm Thị Huyền', 'Vt76xtzgLsS80poE5ANzmmguTcejkBEJ', '$2y$13$/n4dFnRYH5EUbNjsGuY6JeB33dB8n/VHyrSM/jg6IFYczIl6JPBJC', null, 'huyenpt@gmail.com', '1', '1494822967', '1494822967', null, null, null, null, null, null, '0', null);

-- ----------------------------
-- Table structure for widget
-- ----------------------------
DROP TABLE IF EXISTS `widget`;
CREATE TABLE `widget` (
  `widget_id` int(11) NOT NULL AUTO_INCREMENT,
  `widget_name` varchar(255) NOT NULL,
  `cat_parent` int(11) DEFAULT NULL,
  `condition` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1' COMMENT '0 ẩn, 2 hiện',
  `create_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`widget_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of widget
-- ----------------------------
INSERT INTO `widget` VALUES ('1', 'Sách kinh tế mới phát hành', '15', 'new', '1', null);
INSERT INTO `widget` VALUES ('2', 'Sách thiếu nhi mới phát hành', '19', 'new', '0', null);
INSERT INTO `widget` VALUES ('3', 'Sách văn học trong nước mới phát hành', '16', 'new', '1', null);
INSERT INTO `widget` VALUES ('4', 'Sách ngoại văn mới phát hành', '14', 'new', '1', null);
INSERT INTO `widget` VALUES ('5', 'Sách bán chạy trong tuần', '0', 'best_seller', '1', null);
INSERT INTO `widget` VALUES ('6', 'Sách đang được yêu thích', '0', 'wish', '1', null);
INSERT INTO `widget` VALUES ('7', 'Sách kinh tế giảm giá', '15', 'sale', '1', null);
INSERT INTO `widget` VALUES ('8', 'Kho sách giảm giá', '0', 'sale', '1', null);
INSERT INTO `widget` VALUES ('9', 'Sách mới phát hành', '0', 'new', '1', null);
INSERT INTO `widget` VALUES ('10', 'Sách kinh tế bán chạy', '15', 'best_seller', '0', null);
INSERT INTO `widget` VALUES ('12', 'Sách kinh tế đang được yêu thích', '15', 'wish', '0', null);
INSERT INTO `widget` VALUES ('13', 'Sách văn học nước ngoài', '17', 'new', '1', null);

-- ----------------------------
-- Table structure for wishlist
-- ----------------------------
DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `date_created` int(1) DEFAULT '1',
  PRIMARY KEY (`wishlist_id`),
  KEY `product_id` (`product_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wishlist
-- ----------------------------
INSERT INTO `wishlist` VALUES ('37', '16', '22', '1', '1494695119');
INSERT INTO `wishlist` VALUES ('45', '16', '8', '1', '1494702186');
INSERT INTO `wishlist` VALUES ('46', '14', '22', '1', '1494705015');
INSERT INTO `wishlist` VALUES ('47', '14', '8', '1', '1494705017');
INSERT INTO `wishlist` VALUES ('49', '14', '18', '1', '1494705380');
INSERT INTO `wishlist` VALUES ('58', '21', '19', '1', '1495079439');
INSERT INTO `wishlist` VALUES ('59', '21', '27', '1', '1495104691');
INSERT INTO `wishlist` VALUES ('60', '21', '22', '1', '1495104694');
