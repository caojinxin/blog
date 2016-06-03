/*
SQLyog Ultimate v11.24 (32 bit)
MySQL - 5.6.11 : Database - blog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blog` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `blog`;

/*Table structure for table `zt_blog` */

DROP TABLE IF EXISTS `zt_blog`;

CREATE TABLE `zt_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `pic` varchar(200) NOT NULL DEFAULT '' COMMENT '图片',
  `author` varchar(10) NOT NULL DEFAULT '' COMMENT '作者',
  `read_num` int(11) NOT NULL DEFAULT '0' COMMENT '浏览次数',
  `description` varchar(500) NOT NULL DEFAULT '' COMMENT '描述',
  `categroy_id` int(11) NOT NULL DEFAULT '0' COMMENT '分类id',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父类id',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `zt_blog` */

insert  into `zt_blog`(`id`,`title`,`content`,`pic`,`author`,`read_num`,`description`,`categroy_id`,`parent_id`,`create_time`,`update_time`) values (6,'博客1','我的第一个博客','./Uploads/2016-06-02/574fd68a80e95.jpg','张金星1',1,'我',2,1,1464848068,1464850058),(7,'世界','中国','./Uploads/2016-06-02/574fcf5cac780.jpg','小三',2,'我是我',4,1,1464848220,1464849765),(8,'家庭','我的家人','./Uploads/2016-06-02/574fd83be2b73.jpg','小六',17,'明白',6,5,1464850380,1464850491),(9,'莹哥','我是很好的','./Uploads/2016-06-02/574fd7edf1566.jpg','桂清',11,'知识',7,1,1464850413,1464939596),(11,'你的都好','&lt;p&gt;		&lt;/p&gt;HELLO NI&lt;br/&gt;&lt;p&gt;	&lt;/p&gt;','./Uploads/2016-06-03/575133998187f.jpg','安抚',3,'啊啊速度快',8,5,1464939417,1464939583),(12,'暗示法啊','&lt;p&gt;		&lt;/p&gt;&lt;p&gt;暗示法安抚 啊&lt;br/&gt;&lt;/p&gt;&lt;p&gt;\r\n	&lt;/p&gt;','./Uploads/2016-06-03/57514ad47f391.jpg','萨芬',123,'123',9,5,1464945364,0);

/*Table structure for table `zt_categroy` */

DROP TABLE IF EXISTS `zt_categroy`;

CREATE TABLE `zt_categroy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT '' COMMENT '名称',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*Data for the table `zt_categroy` */

insert  into `zt_categroy`(`id`,`name`,`parent_id`) values (1,'慢生活',0),(2,'日记',1),(3,'碎言碎语',0),(4,'欣赏',1),(5,'学无止境',0),(6,'心得笔记',5),(7,'IP查询',5),(8,'网站建设',5),(9,'JS经典事例',5),(10,'程序人生',1);

/*Table structure for table `zt_comment` */

DROP TABLE IF EXISTS `zt_comment`;

CREATE TABLE `zt_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `blog_id` int(11) NOT NULL DEFAULT '0' COMMENT '博客id',
  `content` varchar(300) NOT NULL DEFAULT '' COMMENT '评论内容',
  `top` int(11) NOT NULL DEFAULT '0' COMMENT '顶次数',
  `is_report` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否举报 1举报',
  `is_del` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否删除 1删除',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父id',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `zt_comment` */

/*Table structure for table `zt_doing` */

DROP TABLE IF EXISTS `zt_doing`;

CREATE TABLE `zt_doing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(1000) NOT NULL DEFAULT '' COMMENT '内容',
  `pic` varchar(30) NOT NULL DEFAULT '' COMMENT '缩略图',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `zt_doing` */

/*Table structure for table `zt_user` */

DROP TABLE IF EXISTS `zt_user`;

CREATE TABLE `zt_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL DEFAULT '' COMMENT '邮箱',
  `nickname` varchar(30) NOT NULL DEFAULT '' COMMENT '昵称',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态 -1 删除',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `zt_user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
