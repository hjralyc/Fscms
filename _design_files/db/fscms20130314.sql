-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2013 年 03 月 13 日 16:01
-- 服务器版本: 5.5.27-log
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `fscms`
--

-- --------------------------------------------------------

--
-- 表的结构 `fs_article`
--

CREATE TABLE IF NOT EXISTS `fs_article` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `author` bigint(20) NOT NULL COMMENT '作者',
  `post_date` datetime NOT NULL COMMENT '发布时间',
  `update_date` datetime NOT NULL COMMENT '更新时间',
  `post_url` text NOT NULL COMMENT 'url名',
  `post_password` varchar(60) DEFAULT NULL COMMENT '加密访问',
  `post_comment` smallint(6) DEFAULT NULL COMMENT '是否开启评论',
  `comment_count` bigint(20) DEFAULT NULL COMMENT '评论数',
  `categories` bigint(20) NOT NULL COMMENT '所属分类',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fs_article_content`
--

CREATE TABLE IF NOT EXISTS `fs_article_content` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `keyid` bigint(20) NOT NULL COMMENT '关联主题列表寄存内容',
  `title` text NOT NULL COMMENT '主题',
  `content` longtext COMMENT '内容',
  `keyword` text COMMENT '关键词',
  `description` text COMMENT '描述',
  `lang` varchar(25) DEFAULT NULL COMMENT '关联语言',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fs_categories`
--

CREATE TABLE IF NOT EXISTS `fs_categories` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL COMMENT '分类英文名称',
  `mark` varchar(255) NOT NULL COMMENT '分类标记(menu,tag,link ...etc)',
  `post` int(11) NOT NULL DEFAULT '0' COMMENT '含有的文章数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fs_categories_att`
--

CREATE TABLE IF NOT EXISTS `fs_categories_att` (
  `caid` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '索引',
  `ca_with` bigint(20) NOT NULL COMMENT '同属id，多语言标记用',
  `ca_desc` text COMMENT '分类描述',
  `ca_parent` int(11) DEFAULT NULL COMMENT '父级id',
  `ca_left` text COMMENT '左值',
  `ca_right` varchar(255) DEFAULT NULL COMMENT '右值',
  `ca_name` text NOT NULL COMMENT '分类名称，多语言用',
  `ca_order` int(11) NOT NULL COMMENT '排序',
  `lang` varchar(25) DEFAULT NULL COMMENT '语言标记',
  PRIMARY KEY (`caid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fs_language`
--

CREATE TABLE IF NOT EXISTS `fs_language` (
  `lid` bigint(20) NOT NULL AUTO_INCREMENT,
  `lang` varchar(25) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  PRIMARY KEY (`lid`,`lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fs_model`
--

CREATE TABLE IF NOT EXISTS `fs_model` (
  `mid` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '索引',
  `name` varchar(50) NOT NULL COMMENT '模型名称',
  `desc` text COMMENT '模型描述',
  `icon` varchar(255) DEFAULT NULL COMMENT '模型icon',
  `flag` smallint(6) NOT NULL DEFAULT '0' COMMENT '是否启用',
  `table` varchar(20) NOT NULL COMMENT '关联表',
  `table_head` varchar(20) NOT NULL DEFAULT 'fs_ext_' COMMENT '默认表头',
  `tpl_page` text NOT NULL COMMENT '模板页面',
  `lang` varchar(25) DEFAULT NULL COMMENT '语言',
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fs_site_basic`
--

CREATE TABLE IF NOT EXISTS `fs_site_basic` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '索引',
  `site_title` text NOT NULL COMMENT '网站标题',
  `site_keyword` varchar(255) DEFAULT NULL COMMENT '网站关键字',
  `site_desc` text COMMENT '网站描述',
  `site_logo` varchar(255) DEFAULT NULL COMMENT '网站logo',
  `site_copy` text COMMENT '网站版权',
  `lang` varchar(25) DEFAULT NULL COMMENT '语言模块',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fs_site_templates`
--

CREATE TABLE IF NOT EXISTS `fs_site_templates` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tpl_name` text NOT NULL COMMENT '模版名字',
  `tpl_path` varchar(255) DEFAULT NULL COMMENT '模版路径',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fs_users`
--

CREATE TABLE IF NOT EXISTS `fs_users` (
  `uid` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` text COMMENT '显示名称',
  `department` text COMMENT '隶属',
  `login_id` text NOT NULL COMMENT '英文登陆名',
  `password` text NOT NULL COMMENT '密码 ',
  `email` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `authority` smallint(6) NOT NULL COMMENT '权限等级',
  `rank` int(11) NOT NULL DEFAULT '0' COMMENT '排名',
  `flag` smallint(6) NOT NULL DEFAULT '0' COMMENT '是否启用',
  `create_date` datetime NOT NULL COMMENT '注册时间',
  `update_date` datetime NOT NULL COMMENT '更新时间',
  `login_date` datetime NOT NULL COMMENT '登陆时间',
  `regip` varchar(20) NOT NULL COMMENT '注册ip',
  `lastip` varchar(20) NOT NULL COMMENT '最后登录ip',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fs_user_groups`
--

CREATE TABLE IF NOT EXISTS `fs_user_groups` (
  `gid` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '组名',
  `influence` text COMMENT '权利范围',
  `parent` bigint(20) DEFAULT NULL COMMENT '父级id',
  `LEF` text COMMENT '左值',
  `RIG` text COMMENT '右值',
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
