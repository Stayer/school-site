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

-- Table "site_news" DDL

CREATE TABLE `site_news` (
  `id` int(11) NOT NULL auto_increment,
  `title` text character set cp1251 NOT NULL,
  `image` varchar(40) character set cp1251 default NULL,
  `short_text` text character set cp1251,
  `full_text` longtext character set cp1251,
  `type` mediumint(9) NOT NULL,
  `name` varchar(60) character set cp1251 NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Table "site_teach_blog" DDL

CREATE TABLE `site_teach_blog` (
  `id` mediumint(9) NOT NULL auto_increment,
  `teach_id` smallint(6) default NULL,
  `date` timestamp NULL default NULL on update CURRENT_TIMESTAMP,
  `title` text,
  `text` longtext,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Table "site_teach_profile" DDL

CREATE TABLE `site_teach_profile` (
  `id` int(11) NOT NULL,
  `image` varchar(30) default 'troll.jpg',
  `class` tinyint(4) default NULL,
  `letter` varchar(2) default NULL,
  `name` varchar(30) default NULL,
  `secondname` varchar(30) default NULL,
  `science` varchar(30) default NULL,
  `birth` date default NULL,
  `email` varchar(60) default NULL,
  `icq` varchar(12) default NULL,
  `site` varchar(60) default NULL,
  `other` text,
  `about` text,
  `blog_enable` decimal(1,0) default '0',
  `type` smallint(6) default '1',
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


-- Table "site_albums" DDL

CREATE TABLE `site_albums` (
  `id` int(11) NOT NULL auto_increment,
  `folder` char(30) default NULL,
  `title` char(30) default NULL,
  `text` text,
  `img_count` smallint(2) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;