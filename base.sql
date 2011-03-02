SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for account
-- ----------------------------
CREATE TABLE `account` (
  `id` int(11) unsigned NOT NULL auto_increment COMMENT 'Identifier',
  `username` varchar(32) NOT NULL default '',
  `sha_pass_hash` varchar(40) NOT NULL default '',
  `email` text,
  `joindate` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `last_ip` varchar(30) NOT NULL default '127.0.0.1',
  `level` tinyint(3) unsigned NOT NULL default '2',
  `locale` tinyint(3) unsigned NOT NULL default '0',
  `recruiter` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `idx_username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='Account System';

-- ----------------------------
-- Table structure for site_news
-- ----------------------------
CREATE TABLE `site_news` (
  `id` int(11) NOT NULL auto_increment,
  `title` text NOT NULL,
  `image` varchar(40) default NULL,
  `short_text` text,
  `full_text` longtext,
  `type` mediumint(9) NOT NULL,
  `name` varchar(60) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=cp1251;

-- ----------------------------
-- Table structure for site_teach_blog
-- ----------------------------
CREATE TABLE `site_teach_blog` (
  `id` mediumint(9) NOT NULL,
  `teach_id` smallint(6) default NULL,
  `date` timestamp NULL default NULL on update CURRENT_TIMESTAMP,
  `title` text,
  `text` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for site_teach_profile
-- ----------------------------
CREATE TABLE `site_teach_profile` (
  `id` int(11) NOT NULL,
  `image` varchar(30) default NULL,
  `class` tinyint(4) default NULL,
  `letter` varchar(2) default NULL,
  `name` varchar(30) default NULL,
  `secondname` varchar(30) default NULL,
  `science` varchar(30) default NULL,
  `birth` date default NULL,
  `email` varchar(60) default NULL,
  `icq` varchar(12) default NULL,
  `site` varchar(60) default NULL,
  `other` varchar(45) default NULL,
  `about` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `cp_admessage` (
  `id` int(11) NOT NULL auto_increment,
  `type` varchar(20) default '0',
  `realm` smallint(2) NOT NULL,
  `ac_id` int(11) NOT NULL,
  `bug` smallint(1) default '0',
  `wowhead` varchar(255) NOT NULL,
  `screen` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `pay_type` varchar(10) NOT NULL,
  `phone` varchar(20) default '0',
  `ip` varchar(16) NOT NULL,
  `n_answer` varchar(20) NOT NULL,
  `answer` text NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=cp1251;

-- ----------------------------
-- Table structure for cp_config_country
-- ----------------------------
CREATE TABLE `cp_config_country` (
  `id` smallint(2) NOT NULL auto_increment,
  `country` varchar(40) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=cp1251;

-- ----------------------------
-- Table structure for cp_history
-- ----------------------------
CREATE TABLE `cp_history` (
  `id` int(11) NOT NULL auto_increment,
  `acid` int(11) NOT NULL,
  `com` varchar(255) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `ip` varchar(16) NOT NULL,
  `usluga` varchar(15) default NULL,
  `bns` int(11) NOT NULL,
  `realm` smallint(2) default NULL,
  `guid` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6633 DEFAULT CHARSET=cp1251;

-- ----------------------------
-- Table structure for cp_news
-- ----------------------------
CREATE TABLE `cp_news` (
  `id` int(11) NOT NULL auto_increment,
  `title` text NOT NULL,
  `news` text NOT NULL,
  `name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=cp1251;

-- ----------------------------
-- Table structure for cp_sendpass
-- ----------------------------
CREATE TABLE `cp_sendpass` (
  `id` int(11) NOT NULL auto_increment,
  `acid` int(11) NOT NULL,
  `code` varchar(255) default NULL,
  `activ` smallint(1) default '0',
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=463 DEFAULT CHARSET=cp1251;
