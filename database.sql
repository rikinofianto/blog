/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.21-MariaDB : Database - blogy
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blogy` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `blogy`;

/*Table structure for table `migration` */

DROP TABLE IF EXISTS `migration`;

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `migration` */

insert  into `migration`(`version`,`apply_time`) values ('m000000_000000_base',1528116672),('m140506_102106_rbac_init',1528116715),('m170907_052038_rbac_add_index_on_auth_assignment_user_id',1528116715);

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `kontent` text NOT NULL,
  `gambar` text,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `post` */

insert  into `post`(`id_post`,`judul`,`kontent`,`gambar`,`created_at`,`created_by`,`updated_at`,`updated_by`) values (1,'Twice (band)','<p style=\"text-align: justify;\"><b>Twice</b>&nbsp;(<a href=\"https://en.wikipedia.org/wiki/Hangul\" title=\"Hangul\">Hangul</a>:&nbsp;트와이스; Japanese: トゥワイス) is a South Korean&nbsp;<a href=\"https://en.wikipedia.org/wiki/Girl_group\" title=\"Girl group\">girl group</a>&nbsp;formed by&nbsp;<a href=\"https://en.wikipedia.org/wiki/JYP_Entertainment\" title=\"JYP Entertainment\">JYP Entertainment</a>&nbsp;through the 2015 reality show&nbsp;<i><a href=\"https://en.wikipedia.org/wiki/Sixteen_(TV_series)\" title=\"Sixteen (TV series)\">Sixteen</a></i>. The group is composed of nine members: Nayeon, Jeongyeon, Momo, Sana, Jihyo, Mina, Dahyun, Chaeyoung, and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Chou_Tzu-yu\" title=\"Chou Tzu-yu\">Tzuyu</a>. The group debuted on October 20, 2015, with the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Extended_play\" title=\"Extended play\">extended play</a>&nbsp;(EP)&nbsp;<i><a href=\"https://en.wikipedia.org/wiki/The_Story_Begins\" title=\"The Story Begins\">The Story Begins</a></i>.<sup id=\"cite_ref-TSBMnet_1-0\"><a href=\"https://en.wikipedia.org/wiki/Twice_(band)#cite_note-TSBMnet-1\">[1]</a></sup></p>\r\n\r\n<p style=\"text-align: justify;\">Twice rose to fame in 2016 with their single &quot;<a href=\"https://en.wikipedia.org/wiki/Cheer_Up_(song)\" title=\"Cheer Up (song)\">Cheer Up</a>&quot;: the song charted at number 1 on the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Gaon_Digital_Chart\" title=\"Gaon Digital Chart\">Gaon Digital Chart</a>&nbsp;and became the&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_Gaon_Digital_Chart_number_ones_of_2016\" title=\"List of Gaon Digital Chart number ones of 2016\">best-performing single</a>&nbsp;of the year. It also won &quot;Song of the Year&quot; at two major music awards shows&mdash;<a href=\"https://en.wikipedia.org/wiki/Melon_Music_Awards#Song_of_the_Year\" title=\"Melon Music Awards\">Melon Music Awards</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/2016_Mnet_Asian_Music_Awards\" title=\"2016 Mnet Asian Music Awards\">Mnet Asian Music Awards</a>.<sup id=\"cite_ref-2\"><a href=\"https://en.wikipedia.org/wiki/Twice_(band)#cite_note-2\">[2]</a></sup><sup id=\"cite_ref-SOTY1_3-0\"><a href=\"https://en.wikipedia.org/wiki/Twice_(band)#cite_note-SOTY1-3\">[3]</a></sup><sup id=\"cite_ref-SOTY2_4-0\"><a href=\"https://en.wikipedia.org/wiki/Twice_(band)#cite_note-SOTY2-4\">[4]</a></sup>&nbsp;Their subsequent single &quot;<a href=\"https://en.wikipedia.org/wiki/TT_(song)\" title=\"TT (song)\">TT</a>&quot;, from their third EP&nbsp;<i><a href=\"https://en.wikipedia.org/wiki/Twicecoaster:_Lane_1\" title=\"Twicecoaster: Lane 1\">Twicecoaster: Lane 1</a></i>, claimed the top spot for four consecutive weeks. The EP was the highest selling K-pop girl group album of 2016, which sold 350,852 copies by year-end.<sup id=\"cite_ref-5\"><a href=\"https://en.wikipedia.org/wiki/Twice_(band)#cite_note-5\">[5]</a></sup><sup id=\"cite_ref-Gaon_2016_6-0\"><a href=\"https://en.wikipedia.org/wiki/Twice_(band)#cite_note-Gaon_2016-6\">[6]</a></sup>&nbsp;Within 19 months after debut, Twice has sold over 1.2&nbsp;million units of their four EPs and special album.<sup id=\"cite_ref-7\"><a href=\"https://en.wikipedia.org/wiki/Twice_(band)#cite_note-7\">[7]</a></sup><sup id=\"cite_ref-8\"><a href=\"https://en.wikipedia.org/wiki/Twice_(band)#cite_note-8\">[8]</a>&nbsp;</sup></p>\r\n\r\n<p style=\"text-align: justify;\">The group officially debuted in Japan on June 28, 2017, under&nbsp;<a href=\"https://en.wikipedia.org/wiki/Warner_Music_Group\" title=\"Warner Music Group\">Warner Music Japan</a>&nbsp;with the release of their first compilation album titled&nbsp;<i><a href=\"https://en.wikipedia.org/wiki/Twice_(album)\" title=\"Twice (album)\">#Twice</a></i>. The album debuted at number 2 on the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Oricon_Albums_Chart\" title=\"Oricon Albums Chart\">Oricon Albums Chart</a>, which sold 136,157 copies within seven days, the highest first week album sales of a K-pop artist in Japan in two years.<sup id=\"cite_ref-#Twice_on_Oricon_9-0\"><a href=\"https://en.wikipedia.org/wiki/Twice_(band)#cite_note-#Twice_on_Oricon-9\">[9]</a></sup><sup id=\"cite_ref-10\"><a href=\"https://en.wikipedia.org/wiki/Twice_(band)#cite_note-10\">[10]</a></sup>It was followed by the release of Twice&#39;s first original Japanese&nbsp;<a href=\"https://en.wikipedia.org/wiki/Maxi_single\" title=\"Maxi single\">maxi single</a>&nbsp;titled &quot;<a href=\"https://en.wikipedia.org/wiki/One_More_Time_(Twice_song)\" title=\"One More Time (Twice song)\">One More Time</a>&quot; in October. With over 250,000 unit sales, Twice became the first Korean girl group that earned&nbsp;<a href=\"https://en.wikipedia.org/wiki/Recording_Industry_Association_of_Japan#Certification_awards\" title=\"Recording Industry Association of Japan\">Platinum</a>&nbsp;certification by the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Recording_Industry_Association_of_Japan\" title=\"Recording Industry Association of Japan\">Recording Industry Association of Japan</a>&nbsp;(RIAJ) for both album and&nbsp;<a href=\"https://en.wikipedia.org/wiki/CD_single\" title=\"CD single\">CD single</a>&nbsp;in the same year.<sup id=\"cite_ref-11\"><a href=\"https://en.wikipedia.org/wiki/Twice_(band)#cite_note-11\">[11]</a></sup><sup id=\"cite_ref-12\"><a href=\"https://en.wikipedia.org/wiki/Twice_(band)#cite_note-12\">[12]</a></sup>&nbsp;Twice ranked third on Top Artist category of&nbsp;<i><a href=\"https://en.wikipedia.org/wiki/Billboard_Japan\" title=\"Billboard Japan\">Billboard Japan</a>&#39;</i>s 2017 Year-End Rankings.</p>\r\n','TWICE-What-is-Love2.jpg','2018-06-05 19:19:35','admin','2018-06-05 20:32:34','admin'),(2,'Jihyo','<p style=\"text-align: justify;\">&ndash; She was born in Guri, Gyeonggi-do, South Korea.<br />\r\n&ndash; Jihyo&rsquo;s real name is Park Jisoo. She legalized her name to Park Jihyo right before Sixteen.<br />\r\n&ndash; Jihyo has 2 younger sisters, Seoyeon and Jiyoung.<br />\r\n&ndash; She became a JYP trainee when&nbsp;she&nbsp;was a third grader after she won the 2nd&nbsp;place in a contest on Junior Naver for a child role.<br />\r\n&ndash; She is the Twice member who trained the most. She trained for 10 years.<br />\r\n&ndash; She was voted leader by the members and not JYP himself (by anonymous voting).<br />\r\n&ndash; Jihyo&rsquo;s favorite color is red.<br />\r\n&ndash; Jihyo cannot eat raw foods.<br />\r\n&ndash; Jihyo has a pineapple allergy. Her throat gets itchy if she eats it.<br />\r\n&ndash; Jihyo&rsquo;s hobbies are web-surfing and reading webtoons.<br />\r\n&ndash; Jihyo chose 21 as her favorite number, because she was born on February 1st.<br />\r\n&ndash; Jihyo is ambidextrous. (Twice Showtime)<br />\r\n&ndash; She appeared in miss A&rsquo;s &ldquo;Only You&rdquo; MV<br />\r\n&ndash; In the dorm, Jihyo, Nayeon, Sana, and Mina share the biggest room.</p>\r\n','jihyo-twice-signal-cute-hd-727.jpg','2018-06-05 20:34:17','admin',NULL,NULL);

/*Table structure for table `user` */

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`auth_key`,`password_hash`,`password_reset_token`,`email`,`status`,`created_at`,`updated_at`) values (1,'admin','67Q064kYV6jnqDaFr_ksaHz4pfo-p1c3','$2y$13$Ap86Dxbtqt0OTJTaYxiUSuiqseFDGVUI2VyCYH9KBsFjBje1WGbkS',NULL,'riki@docotelco.id',10,1500739043,1500739043);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
