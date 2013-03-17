CREATE TABLE `fs_site_basic` (
`id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '索引',
`site_title` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '网站标题',
`site_keyword` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '网站关键字',
`site_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '网站描述',
`site_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '网站logo',
`site_copy` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '网站版权',
`lang` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '语言模块',
PRIMARY KEY (`id`) 
)
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `fs_site_templates` (
`id` bigint(20) NOT NULL AUTO_INCREMENT,
`tpl_name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '模版名字',
`tpl_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '模版路径',
PRIMARY KEY (`id`) 
)
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `fs_language` (
`lid` bigint(20) NOT NULL AUTO_INCREMENT,
`lang` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
`fullname` varchar(50) NOT NULL,
PRIMARY KEY (`lid`, `lang`) 
)
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `fs_users` (
`uid` bigint(20) NOT NULL AUTO_INCREMENT,
`name` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '显示名称',
`department` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '隶属',
`login_id` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '英文登陆名',
`password` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '密码 ',
`email` varchar(100) NULL,
`url` varchar(255) NULL,
`authority` smallint(6) NOT NULL COMMENT '权限等级',
`rank` int(11) NOT NULL DEFAULT 0 COMMENT '排名',
`flag` smallint(6) NOT NULL DEFAULT 0 COMMENT '是否启用',
`create_date` datetime NOT NULL COMMENT '注册时间',
`update_date` datetime NOT NULL COMMENT '更新时间',
`login_date` datetime NOT NULL COMMENT '登陆时间',
`regip` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '注册ip',
`lastip` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '最后登录ip',
PRIMARY KEY (`uid`) 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `fs_user_groups` (
`gid` bigint(20) NOT NULL AUTO_INCREMENT,
`name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '组名',
`influence` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '权利范围',
`parent` bigint(20) NULL COMMENT '父级id',
`LEF` text NULL COMMENT '左值',
`RIG` text NULL COMMENT '右值',
PRIMARY KEY (`gid`) 
)
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `fs_model` (
`mid` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '索引',
`name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '模型名称',
`desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '模型描述',
`icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '模型icon',
`flag` smallint(6) NOT NULL DEFAULT 0 COMMENT '是否启用',
`table` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '关联表',
`table_head` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT "fs_ext_" COMMENT '默认表头',
`tpl_page` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '模板页面',
`lang` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '语言',
PRIMARY KEY (`mid`) 
)
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `fs_categories` (
`id` bigint(20) NOT NULL AUTO_INCREMENT,
`name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '分类英文名称',
`mark` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '分类标记(menu,tag,link ...etc)',
`post` int NOT NULL DEFAULT 0 COMMENT '含有的文章数',
PRIMARY KEY (`id`) 
)
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `fs_categories_att` (
`caid` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '索引',
`ca_with` bigint(20) NOT NULL COMMENT '同属id，多语言标记用',
`ca_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '分类描述',
`ca_parent` int NULL COMMENT '父级id',
`ca_left` text NULL COMMENT '左值',
`ca_right` varchar(255) NULL COMMENT '右值',
`ca_name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '分类名称，多语言用',
`ca_order` int NOT NULL COMMENT '排序',
`lang` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '语言标记',
PRIMARY KEY (`caid`) 
)
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `fs_article` (
`id` bigint(20) NOT NULL AUTO_INCREMENT,
`author` bigint(20) NOT NULL COMMENT '作者',
`post_date` datetime NOT NULL COMMENT '发布时间',
`update_date` datetime NOT NULL COMMENT '更新时间',
`post_url` text NOT NULL COMMENT 'url名',
`post_password` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '加密访问',
`post_comment` smallint(6) NULL COMMENT '是否开启评论',
`comment_count` bigint NULL COMMENT '评论数',
`categories` bigint(20) NOT NULL COMMENT '所属分类',
PRIMARY KEY (`id`) 
)
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `fs_article_content` (
`id` bigint(20) NOT NULL AUTO_INCREMENT,
`keyid` bigint(20) NOT NULL COMMENT '关联主题列表寄存内容',
`title` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '主题',
`content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '内容',
`keyword` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '关键词',
`description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '描述',
`lang` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '关联语言',
PRIMARY KEY (`id`) 
)
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;

