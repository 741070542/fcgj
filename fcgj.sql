/*
SQLyog Ultimate v11.24 (32 bit)
MySQL - 5.5.47 : Database - fcgj
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `hak_admin` */

CREATE TABLE `hak_admin` (
  `admin_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `user_name` varchar(60) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(32) NOT NULL DEFAULT '' COMMENT '密码',
  `add_time` int(11) DEFAULT '0' COMMENT '添加时间',
  `last_login` int(11) DEFAULT '0' COMMENT '最后登录时间',
  PRIMARY KEY (`admin_id`),
  KEY `user_name` (`user_name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `hak_admin` */

insert  into `hak_admin`(`admin_id`,`user_name`,`password`,`add_time`,`last_login`) values (2,'admin','e10adc3949ba59abbe56e057f20f883e',0,1512373432);

/*Table structure for table `hak_affairs` */

CREATE TABLE `hak_affairs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `consumption` decimal(10,2) DEFAULT NULL COMMENT '人均消费',
  `phone` varchar(32) DEFAULT NULL COMMENT '联系方式',
  `img` varchar(1000) DEFAULT NULL COMMENT '首页图片',
  `address` varchar(1000) DEFAULT NULL COMMENT '地址',
  `hours` varchar(255) DEFAULT NULL COMMENT '营业时间',
  `content` text COMMENT '内容',
  `click` int(11) DEFAULT NULL COMMENT '点击量',
  `sequencing` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `hak_affairs` */

/*Table structure for table `hak_album` */

CREATE TABLE `hak_album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '名称',
  `img` varchar(1000) DEFAULT NULL COMMENT '封面图',
  `describe` varchar(1000) DEFAULT NULL COMMENT '描述',
  `is_en` tinyint(4) DEFAULT NULL COMMENT '是否启用，1是，2否',
  `sequencing` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `hak_album` */

/*Table structure for table `hak_album_img` */

CREATE TABLE `hak_album_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) DEFAULT NULL COMMENT '所属相册',
  `name` varchar(1000) DEFAULT NULL COMMENT '名称',
  `img` varchar(1000) DEFAULT NULL COMMENT '图片',
  `sequencing` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `hak_album_img` */

/*Table structure for table `hak_answer` */

CREATE TABLE `hak_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mess_id` int(11) NOT NULL COMMENT '客户留言id',
  `answer` text COMMENT '回复',
  `name` varchar(255) DEFAULT NULL COMMENT '处理人',
  `time` varchar(32) DEFAULT NULL COMMENT '处理时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `hak_answer` */

/*Table structure for table `hak_classs` */

CREATE TABLE `hak_classs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `father` int(11) NOT NULL COMMENT '父级分类id',
  `number` varchar(255) DEFAULT NULL COMMENT '外部编号',
  `classname` varchar(50) NOT NULL COMMENT '分类名称',
  `type` tinyint(4) DEFAULT NULL COMMENT '类型1含有连接，2未含有连接',
  `url` varchar(1000) DEFAULT NULL COMMENT '连接地址',
  `is_an` tinyint(4) DEFAULT NULL COMMENT '是否菜单按钮，1是，2否',
  `sorting` int(11) DEFAULT NULL COMMENT '排序值',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='商品分类';

/*Data for the table `hak_classs` */

/*Table structure for table `hak_lease` */

CREATE TABLE `hak_lease` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '名字',
  `phone` varchar(32) DEFAULT NULL COMMENT '联系方式',
  `age` text COMMENT '从业年限',
  `grade` text COMMENT '个人成绩',
  `img` varchar(1000) DEFAULT NULL COMMENT '首页图片',
  `content` text COMMENT '内容',
  `click` int(11) DEFAULT NULL COMMENT '点击量',
  `sequencing` int(11) DEFAULT NULL COMMENT '排序',
  `time` varchar(32) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

/*Data for the table `hak_lease` */

/*Table structure for table `hak_life` */

CREATE TABLE `hak_life` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `consumption` decimal(10,2) DEFAULT NULL COMMENT '人均消费',
  `phone` varchar(32) DEFAULT NULL COMMENT '联系方式',
  `img` varchar(1000) DEFAULT NULL COMMENT '首页图片',
  `lifeclas_id` int(11) DEFAULT NULL COMMENT '分类id',
  `address` varchar(1000) DEFAULT NULL COMMENT '地址',
  `business_time` varchar(100) DEFAULT NULL COMMENT '营业时间',
  `content` text COMMENT '内容',
  `click` int(11) DEFAULT NULL COMMENT '点击量',
  `sequencing` int(11) DEFAULT NULL COMMENT '排序',
  `time` varchar(32) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

/*Data for the table `hak_life` */

/*Table structure for table `hak_lifeclas` */

CREATE TABLE `hak_lifeclas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '分类名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `hak_lifeclas` */

/*Table structure for table `hak_message` */

CREATE TABLE `hak_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(16) DEFAULT NULL COMMENT '联系方式',
  `name` varchar(255) DEFAULT NULL COMMENT '联系人',
  `source` int(11) DEFAULT '0' COMMENT '来源',
  `reservation` varchar(255) DEFAULT NULL COMMENT '预约房源',
  `message` text COMMENT '留言',
  `time` varchar(20) DEFAULT NULL COMMENT '创建时间',
  `status` tinyint(4) DEFAULT '0' COMMENT '是否处理，0否，1是',
  PRIMARY KEY (`id`),
  KEY `sysid` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='用户';

/*Data for the table `hak_message` */

/*Table structure for table `hak_news` */

CREATE TABLE `hak_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `clas_id` int(11) DEFAULT NULL COMMENT '所属分类',
  `picture` varchar(1000) DEFAULT NULL COMMENT '标题图片',
  `time` varchar(100) DEFAULT NULL COMMENT '时间',
  `content` text COMMENT '内容',
  `zan` int(11) DEFAULT NULL COMMENT '点赞',
  `click` int(11) DEFAULT NULL COMMENT '点击量',
  `sequencing` int(11) DEFAULT NULL COMMENT '排序值',
  `addtime` varchar(32) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

/*Data for the table `hak_news` */

/*Table structure for table `hak_news_rec` */

CREATE TABLE `hak_news_rec` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) DEFAULT NULL COMMENT '新闻id',
  `rec_id` int(11) DEFAULT NULL COMMENT '推荐新闻id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `hak_news_rec` */

/*Table structure for table `hak_news_recommend` */

CREATE TABLE `hak_news_recommend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) DEFAULT NULL COMMENT '新闻id',
  `recommend_id` varchar(1000) DEFAULT NULL COMMENT '推荐新闻的id以逗号连接',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `hak_news_recommend` */

/*Table structure for table `hak_room` */

CREATE TABLE `hak_room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tiele` varchar(255) DEFAULT NULL COMMENT '标题',
  `profile` text COMMENT '简介',
  `img` varchar(1000) DEFAULT NULL COMMENT '首页图片',
  `floor` int(11) DEFAULT NULL COMMENT '总楼层',
  `few` int(11) DEFAULT NULL COMMENT '几层',
  `addresses` varchar(1000) DEFAULT NULL COMMENT '门牌号',
  `area` int(11) DEFAULT NULL COMMENT '面积',
  `type` tinyint(4) DEFAULT NULL COMMENT '房源类型1精装，2清水',
  `family` varchar(255) DEFAULT NULL COMMENT '户型',
  `nettop` int(11) DEFAULT NULL COMMENT '净高层',
  `cost` decimal(10,2) DEFAULT NULL COMMENT '物业费',
  `small_rent` decimal(10,2) DEFAULT NULL COMMENT '最小租金',
  `large_rent` decimal(10,2) DEFAULT NULL COMMENT '最大租金',
  `toward` varchar(1000) DEFAULT NULL COMMENT '朝向',
  `remark` text COMMENT '备注',
  `is_recommend` tinyint(4) DEFAULT NULL COMMENT '是否推荐，1是，2否',
  `click` int(11) DEFAULT NULL COMMENT '点击量',
  `sequencing` int(11) DEFAULT NULL COMMENT '排序',
  `time` varchar(32) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/*Data for the table `hak_room` */

/*Table structure for table `hak_room_img` */

CREATE TABLE `hak_room_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) DEFAULT NULL COMMENT '房源推荐id',
  `img` varchar(1000) DEFAULT NULL COMMENT '展示图片',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

/*Data for the table `hak_room_img` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
