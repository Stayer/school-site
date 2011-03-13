/*
SQLyog Community Edition- MySQL GUI v5.22a
Host - 5.0.91-community : Database - develop
*********************************************************************
Server version : 5.0.91-community
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `test`;

USE `test`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `account` */

DROP TABLE IF EXISTS `account`;

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='Account System';

/*Data for the table `account` */

insert  into `account`(`id`,`username`,`sha_pass_hash`,`email`,`joindate`,`last_ip`,`level`,`locale`,`recruiter`) values (1,'RODIONOV12','4aa536fc492be831b7c513c5742b6d57e210acd1','rodionov12@yandex.ru','2011-02-18 15:56:10','127.0.0.1',3,0,0);

/*Table structure for table `site_albums` */

DROP TABLE IF EXISTS `site_albums`;

CREATE TABLE `site_albums` (
  `id` int(11) NOT NULL auto_increment,
  `folder` char(30) default NULL,
  `title` char(30) default NULL,
  `text` text,
  `img_count` smallint(2) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `site_albums` */

insert  into `site_albums`(`id`,`folder`,`title`,`text`,`img_count`) values (1,'medal','Наши медалисты','В этом альбоме - ученики, которые очень успешно закончили обучение в нашем лицее!',13),(2,'sport','Наши спортсмены','О, спорт! Ты - мир! Помимо учёбы, ребята успевают заниматься спортом, побеждать и отстаивать честь лицея!',4),(3,'diplom','Дипломы','Награды, которые лицей получил',9),(4,'karelin','Звёзды спорта в нашем лицее!','Приезд Александра Карелина, Елены Минх и других известных спортсменов России и СССР мирового уровня!',13),(5,'50','Лицею - 50!','Праздничный концерт, посвященный 50-летию со дня основания лицея!',43),(6,'personal','Персонал школы','Без них - никуда!',13),(7,'lessons','Лицейская жизнь - уроки','На уроках в нашем лицее никто не скучает!',22);

/*Table structure for table `site_news` */

DROP TABLE IF EXISTS `site_news`;

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

/*Data for the table `site_news` */

insert  into `site_news`(`id`,`title`,`image`,`short_text`,`full_text`,`type`,`name`,`date`) values (1,'Приветствие!',NULL,'Добро пожаловать на сайт нашего лицея №7! Надеемся, что вам будет здесь уютно и комфортно! Располагайтесь!','Добро пожаловать на сайт нашего лицея №7! Надеемся, что вам будет здесь уютно и комфортно! Располагайтесь!',0,'Админ','2011-02-01 11:10:20'),(2,'Приезд Александра Карелина',NULL,'Наш лицей посетил «Карелин Фонд» - олимпийские чемпионы: Карелин А.А., Подгорный Е.А., Глухих А.В., Минх И.Э. ','14 февраля наш лицей посетил «Карелин Фонд» - олимпийские чемпионы: Карелин А.А., Подгорный Е.А., Глухих А.В., Минх И.Э. В спортивном зале с 10 до 11 часов прошла спортивная эстафета «Будь верен России!» для 3,6 классов. \r\n<br><br>С 11 до 12 часов в актовом зале прошла встреча с олимпийскими звездами у 4в, 6, 9-11 классов. На конференции ребятам представилась возможность задать вопрос чемпиону и получить на него ответ.  \r\n<br><br>\r\nПриезд чемпионов не остался незамеченным. Фотоотчёт вы можете посмотреть в <a href=?s=photos&album=4>Галерее</a>',0,'Админ','2011-02-14 21:41:01'),(3,'Юбилей школы',NULL,'25 февраля нашему лицею исполнилось 50 лет со дня основания! Состоялись торжественные празднования, а также встречи выпускников прошлых лет','25 февраля провели концерт посвященный «50-летнему Юбилею школы №7».<br>\r\nОрганизовали чаепитие для ветеранов. 54 педагога лицея награждены  Грамотами  и  Благодарностями  Губернатора , Законодательного собрания, Министерства образования, науки и инновационной политики  Новосибирской области, главы города Бердска, управления образования.\r\n<br><br> \r\n26 февраля провели концерт посвященный «50-летнему Юбилею школы №7», для выпускников школы.<br>\r\nБолее 400 выпускников   присутствовали на  вечере встречи выпускников. В выступлениях  выпускников   звучали слова благодарности педагогам лицея за особую атмосферу, доброжелательность, чувство семьи, создаваемое ими.\r\n<br><br>\r\nВ приказе №303  Министерства образования, науки и инновационной политики, утверждены списки призеров и победителей регионального этапа олимпиады. 10 обучающихся лицея стали призерами и победителями  регионального этапа олимпиады школьников.\r\n<br><br>\r\nФотоотчёт о концерте к юбилею лицея  вы можете посмотреть в <a href=?s=photos&album=5>Галерее</a>\r\n',0,'Админ','2011-02-26 10:00:00'),(4,'Поздравления к 8 марта!',NULL,'Поздравляем всех дам с 8 марта! Пожелания - в полной новости!','<center>Про этот праздник много есть стихов,<br>\r\nНо поздравлять с ним, право, не устану.<br>\r\nПусть голоса детей, сливаясь в хор,<br>\r\nПоздравят вас, родные наши мамы!<br>\r\nЗдоровья, счастья и большой любви<br>\r\nВсем женщинам сегодня пожелаем.<br>\r\nАх, если б в марте пели соловьи<br>\r\nИли цвела сирень, как в тёплом мае.<br>\r\n<br><br>\r\n<a class=\'highslide\' href=./images/news/8.jpg onclick=\'return hs.expand(this)\'> <img src=./images/news/8.jpg /></a>\r\n</center>',0,'Админ','2011-03-08 23:36:01');

/*Table structure for table `site_teach_blog` */

DROP TABLE IF EXISTS `site_teach_blog`;

CREATE TABLE `site_teach_blog` (
  `id` mediumint(9) NOT NULL auto_increment,
  `teach_id` smallint(6) default NULL,
  `date` timestamp NULL default NULL on update CURRENT_TIMESTAMP,
  `title` text,
  `text` longtext,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `site_teach_blog` */

insert  into `site_teach_blog`(`id`,`teach_id`,`date`,`title`,`text`) values (1,1,'2011-03-09 21:02:24','Приветствие','Рада приветствовать Вас на моём персональном блоге, с помощью которого я рассчитываю получать от Вас свои отклики и мнения о деятельности нашего образовательного учреждения. Я надеюсь, что здесь мы сможем обмениваться мнениями о происходящих событиях.\r\nПриглашаю вас принять активное участие в обсуждении.'),(2,1,'2011-03-09 21:02:50','Возможно ли получить золотую или серебрянную медаль с одной тройкой в аттестате за 9-й класс?','Получить золотую или серебряную медаль возможно только после окончанию 11 классов. После окончания 9 классов возможно получить аттестат особого образца, но для этого необходимо закончить учебный год только на отлично.'),(3,1,'2011-03-09 21:03:20','Здравствуйте. Убедительная просьба, чтобы учителя выставляли оценки в дневники по итогам работы учащихся в течение урока, а не в конце месяца.','Такая практика предполагается сама собой. Но нередко возникает ситуация, когда ребенок, получив нежелательную отметку, отказывается дать дневник, ссылаясь на то, что забыл его дома. Не все дети своевременно сдают дневник классному руководителю для выставления отметок за определенный период (как правило, дневники проверяются один раз в неделю).'),(4,1,'2011-03-09 21:03:48','После нового года многие ученики начнут ещё более активно готовиться к егэ,в том числе я. Можно ли из расписания убрать час-два ненужных (провести опрос) предметов и на эти часы сделать нужные большинству факультативы?','Школьное расписание строится на основе базисного учебного плана, куда входят все обязательные для изучения предметы. Так что ненужных предметов в расписании нет. Если же хотя бы один из предметов будет отсутствовать, то выпускники не получат аттестаты об образовании. Поэтому ничего исключить нельзя. Кроме того, я думаю, что эти два часа не сыграют роли, если правильно распределить свое время. Даже на отдых время останется.'),(5,1,'2011-03-09 21:05:11','Нужно ли отправлять ребенка в школу в сильные морозы?','Для тех учеников, которые придут в школу несмотря на морозы, занятия будут проводиться. Решение о посещении ребенком учебного заведения принимают родители.  Родители должны сообщить о своем решении классному руководителю в письменном виде (после морозов). В таком случае уроки, пропущенные из-за погодных  условий, не будут засчитаны пропусками по неуважительной причине.'),(6,1,'2011-03-09 21:07:05','Как Вы поощряете своих учеников? ','Все школьные мероприятия заканчиваются награждением, призы самые разные: грамоты, сюрпризы, благодарности, сладости. В конце года проходит праздник «За честь школы», где награждаются все дети, которые отстаивали честь школы в различных мероприятиях.');

/*Table structure for table `site_teach_profile` */

DROP TABLE IF EXISTS `site_teach_profile`;

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
  `level` tinyint(2) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `site_teach_profile` */

insert  into `site_teach_profile`(`id`,`image`,`class`,`letter`,`name`,`secondname`,`science`,`birth`,`email`,`icq`,`site`,`other`,`about`,`blog_enable`,`type`,`level`) values (1,'director.bmp',NULL,NULL,'Ирина','Мануйлова','Химия','1965-10-26','bsk_sh07@mail.ru',NULL,NULL,NULL,NULL,'1',1,NULL);

/*Table structure for table `site_timetable` */

DROP TABLE IF EXISTS `site_timetable`;

CREATE TABLE `site_timetable` (
  `id` int(11) NOT NULL auto_increment,
  `class` smallint(2) default NULL,
  `letter` varchar(2) default NULL,
  `number` smallint(1) default NULL,
  `day` int(1) default NULL,
  `science` varchar(30) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `site_timetable` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
