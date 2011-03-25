/*
MySQL Data Transfer
Source Host: localhost
Source Database: develop
Target Host: localhost
Target Database: develop
Date: 25.03.2011 13:55:44
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for site_teach_profile
-- ----------------------------
CREATE TABLE `site_teach_profile` (
  `id` int(11) NOT NULL auto_increment,
  `image` varchar(30) default 'troll.jpg',
  `class` tinyint(4) default NULL,
  `letter` varchar(2) default NULL,
  `secondname` varchar(15) default NULL,
  `name` varchar(15) default NULL,
  `science` varchar(30) default NULL,
  `birth` date default NULL,
  `email` varchar(60) default NULL,
  `icq` varchar(12) default NULL,
  `site` varchar(60) default NULL,
  `other` text,
  `about` text,
  `blog_enable` decimal(1,0) default '0',
  `type` smallint(6) default '1',
  `level` tinyint(2) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `site_teach_profile` VALUES ('1', 'director.bmp', null, null, 'Мануйлова', 'Ирина', 'Химия', '1965-10-26', 'bsk_sh07@mail.ru', null, null, null, null, '1', '1', '1');
INSERT INTO `site_teach_profile` VALUES ('2', 'troll.jpg', null, null, 'Абрамова', 'Светлана', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('3', 'troll.jpg', null, null, 'Аксененко', 'Ольга', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('4', 'troll.jpg', null, null, 'Алдошина', 'Таисья', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('5', 'troll.jpg', null, null, 'Алексеенко', 'Юлия', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('6', 'troll.jpg', null, null, 'Багашова', 'Ирина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('7', 'troll.jpg', null, null, 'Баранова', 'Елена', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('8', 'troll.jpg', null, null, 'Баянова', 'Татьяна', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('9', 'troll.jpg', null, null, 'Безлепкина', 'Валентина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('10', 'troll.jpg', null, null, 'Биденко', 'Ольга', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('11', 'troll.jpg', null, null, 'Бородулин', 'Федор', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('12', 'troll.jpg', null, null, 'Борщенко', 'Наталья', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('13', 'troll.jpg', null, null, 'Бредихина', 'Наталья', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('14', 'troll.jpg', null, null, 'Бритикова', 'Татьяна', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('15', 'troll.jpg', null, null, 'Бровкова', 'Ирина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('16', 'troll.jpg', null, null, 'Булатова', 'Марина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('17', 'troll.jpg', null, null, 'Витенко', 'Ирина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('18', 'troll.jpg', null, null, 'Воронкина', 'Марина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('19', 'troll.jpg', null, null, 'Галигарова', 'Ирина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('20', 'troll.jpg', null, null, 'Гарсия', 'Светлана', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('21', 'troll.jpg', null, null, 'Глыва', 'Иван', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('22', 'troll.jpg', null, null, 'Головина', 'Елена', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('23', 'troll.jpg', null, null, 'Гринчук', 'Олеся', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('24', 'troll.jpg', null, null, 'Гурина', 'Тамара', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('25', 'troll.jpg', null, null, 'Демахин', 'Игорь', 'Физическая культура', null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('26', 'troll.jpg', null, null, 'Дробынина', 'Ирина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('27', 'troll.jpg', null, null, 'Евдокимова', 'Галина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('28', 'troll.jpg', null, null, 'Ермоленко', 'Татьяна', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('29', 'troll.jpg', null, null, 'Зверев', 'Геннадий', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('30', 'troll.jpg', null, null, 'Зорина', 'Татьяна', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('31', 'troll.jpg', null, null, 'Зубарева', 'Любовь', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('32', 'troll.jpg', null, null, 'Ивницкая', 'Лариса', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('33', '33.JPG', null, null, 'Ильина', 'Елена', 'Математика', null, null, null, null, null, '<br><b>1 Профессиональная деятельность.</b><br>\r\nУчитель математики высшей квалификационной категории с 2000 года. Преподаю алгебру и геометрию в 10-х и 11-х классах.\r\n    Наш лицей реализует три профиля обучения: физико-химический, социально-гуманитарный и спортивный. Я работаю во всех профильных классах.<br><br>\r\n<b>2.Результаты.</b> <br>\r\nВыпускники нашего лицея сдают математику в форме ЕГЭ с 2005 г. и традиционно  показывают на экзаменах очень хорошие результаты. Ребята становятся студентами любых вузов Новосибирска (НГУ, НГТУ, НГАСУ, Сиб АГС) и других городов России (Москва, Томск, Санкт-Петербург).<br><br>\r\n<b>3.Методическая работа.</b><br>\r\nМною разработаны программы элективных курсов по математике.<br><br>\r\n <b>4.Направления работы на перспективу.</b><br>\r\nНа данный момент я получаю второе высшее образование, обучаясь в Санкт-Петербургском институте повышения квалификации работников профессионального образования по специальности «Педагог профильной школы».<br>\r\n', '0', '1', '1');
INSERT INTO `site_teach_profile` VALUES ('34', 'troll.jpg', null, null, 'Исакова', ' Татьяна', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('35', 'troll.jpg', null, null, 'Карасева', 'Татьяна', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('36', 'troll.jpg', null, null, 'Карепина', 'Римма', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('37', 'troll.jpg', null, null, 'Клименко', 'Юлия', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('38', 'troll.jpg', null, null, 'Ковалева', 'Марина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('39', 'troll.jpg', null, null, 'Козина', 'Ирина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('40', 'troll.jpg', null, null, 'Копылова', 'Татьяна', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('41', 'troll.jpg', null, null, 'Кошанский', 'Александр', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('42', 'troll.jpg', null, null, 'Кошкарева', 'Светлана', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('43', 'troll.jpg', null, null, 'Кузнецова', 'Светлана', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('44', 'troll.jpg', null, null, 'Ланцухай', 'Татьяна', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('45', 'troll.jpg', null, null, 'Лаптева', 'Ольга', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('46', 'troll.jpg', null, null, 'Ларионова', 'Ирина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('47', 'troll.jpg', null, null, 'Леванова', 'Людмила', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('48', 'troll.jpg', null, null, 'Лесных', 'Татьяна', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('49', 'troll.jpg', null, null, 'Мазунина', 'Елена', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('50', 'troll.jpg', null, null, 'Манина', 'Ольга', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('51', 'troll.jpg', null, null, 'Мануйлова', 'Галина', 'Математика', null, null, null, null, null, '<br><b>1.Профессиональная деятельность:</b><br>\r\nУчитель математики высшей квалификационной категории, стаж работы 20 лет.<br><br>\r\n<b>2.Достижения учеников:</b><br>\r\n70% учеников участвуют в «Кенгуру».<br><br>\r\n<b>3. Внеучебная работа:</b><br>\r\nВ 2006-2007 и 2007-2008 уч.годах участвовала с детьми в дистанционной математической школе «Школа плюс» при Центре экономического и бизнес-образования г. Новосибирска.<br><br>\r\n<b>4. Методическая работа.</b><br>\r\nРазработка и ведение для летних каникулярных школ курсов по математике «Симметрия», «Вероятность и статистика», «Логика в математике».<br><br>\r\n<b>5. Сфера профессиональных интересов:</b><br>\r\nРазработка системы индивидуального подхода при обучении математике.<br>', '0', '1', '1');
INSERT INTO `site_teach_profile` VALUES ('52', 'troll.jpg', null, null, 'Матыцина', 'Галина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('53', 'troll.jpg', null, null, 'Медведева', 'Лариса', 'Физика', null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('54', 'troll.jpg', null, null, 'Молокова', 'Любовь', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('55', 'troll.jpg', null, null, 'Морозова', 'Татьяна', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('56', 'troll.jpg', '10', 'б', 'Морозова', 'Татьяна', 'Математика', null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('57', 'troll.jpg', null, null, 'Насекин', 'Павел', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('58', 'troll.jpg', null, null, 'Нефедова', 'Лариса', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('59', '59.JPG', null, null, 'Нешпор', 'Ирина', 'Физика', null, null, null, null, null, null, '0', '1', '1');
INSERT INTO `site_teach_profile` VALUES ('60', 'troll.jpg', null, null, 'Никонова', 'Наталья', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('61', 'troll.jpg', null, null, 'Нилова', 'Людмила', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('62', 'troll.jpg', null, null, 'Новикова', 'Людмила', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('63', 'troll.jpg', null, null, 'Новикова', 'Светлана', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('64', 'troll.jpg', null, null, 'Оболенская', 'Лилия', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('65', 'troll.jpg', null, null, 'Обрывко', 'Марина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('66', 'troll.jpg', null, null, 'Озерец', 'Ольга', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('67', 'troll.jpg', null, null, 'Ощепкова', 'Любовь', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('68', 'troll.jpg', null, null, 'Павлинова', 'Надежда', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('69', 'troll.jpg', null, null, 'Паклина', 'Елена', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('70', 'troll.jpg', null, null, 'Пестрякова', 'Светлана', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('71', 'troll.jpg', null, null, 'Петровская', 'Елена', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('72', 'troll.jpg', null, null, 'Писарева', 'Наталья', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('73', 'troll.jpg', null, null, 'Полярус', 'Кристина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('74', 'troll.jpg', null, null, 'Понедельченко', 'Елена', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('75', 'troll.jpg', null, null, 'Попова', 'Татьяна', 'География', null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('76', 'troll.jpg', null, null, 'Прохорова', 'Анна', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('77', 'troll.jpg', null, null, 'Проценко', 'Людмила', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('78', 'troll.jpg', null, null, 'Путинцева', 'Екатерина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('79', '79.JPG', null, null, 'Распопова', 'Екатерина', 'Математика', null, null, null, null, null, '<br><b>1. Профессиональная деятельность:</b><br>\r\nПреподавание математики в 5-9 классах.<br><br>\r\n<b>2. Результаты учащихся:</b><br>\r\n2004-2005 уч.год. Ковалев С.(6 кл) – призовое место в городской олимпиаде по математике;<br>\r\n2005-2006 уч.год. Гончаров В.(7кл) – вошел в «Золотую сотню» по России.<br><br>\r\n<b>3. Внеучебная работа с детьми:</b><br>\r\n•	Работа в летней каникулярной школе 2005-2006, 2006-2007, 2007-2008 уч.годы.<br>\r\nТема курса «Вероятность и статистика» для 6-9 классов.<br><br>\r\n<b>4. Методическая работа:</b><br>\r\n•	2006-2007 уч.год. Доклад на педагогических чтениях по теме «Дифференцированное обучение как необходимое условие повышения эффективности обучения»;<br>\r\n•	2003-2004 уч.год. Участие в городском семинаре «Организация учебной деятельности как форма активности школьников»;<br><br>\r\n<b>5. Основное направление профессиональных интересов: </b><br>\r\nДифференцированное обучение детей математике.<br>', '0', '1', '1');
INSERT INTO `site_teach_profile` VALUES ('80', 'troll.jpg', null, null, 'Риб', 'Светлана', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('81', 'troll.jpg', null, null, 'Родыгина', 'Анна', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('82', 'troll.jpg', null, null, 'Родько', 'Елена', 'Химия', null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('83', 'troll.jpg', null, null, 'Рыбалко', 'Евгения', 'Информатика', null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('84', 'troll.jpg', null, null, 'Рыжонина', 'Лариса', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('85', 'troll.jpg', null, null, 'Сенникова', 'Татьяна', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('86', 'troll.jpg', null, null, 'Симакова', 'Зоя', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('87', 'troll.jpg', null, null, 'Синицына', 'Валентина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('88', 'troll.jpg', null, null, 'Смаглюк', 'Надежда', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('89', 'troll.jpg', null, null, 'Смирнова', 'Татьяна', 'Информатика', null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('90', 'troll.jpg', null, null, 'Солдатов', 'Андрей', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('91', 'troll.jpg', null, null, 'Сотникова', 'Наталья', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('92', 'troll.jpg', null, null, 'Стебаева', 'Елена', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('93', 'troll.jpg', null, null, 'Торопчина', 'Ирина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('94', 'troll.jpg', null, null, 'Третьякова', 'Виктора', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('95', 'troll.jpg', null, null, 'Тугарина', 'Елена', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('96', 'troll.jpg', null, null, 'Урюмцева', 'Галина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('97', 'troll.jpg', null, null, 'Федосеева', 'Ирина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('98', 'troll.jpg', null, null, 'Фигуренко', 'Наталья', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('99', 'troll.jpg', null, null, 'Хомякова', 'Нина', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('100', 'troll.jpg', null, null, 'Хомякова', 'Ольга', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('101', 'troll.jpg', null, null, 'Хотеенкова', 'Юлия', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('102', 'troll.jpg', null, null, 'Чеботникова', 'Вера', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('103', 'troll.jpg', null, null, 'Черненок', 'Ольга', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('104', 'troll.jpg', null, null, 'Черненок', 'Татьяна', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('105', 'troll.jpg', null, null, 'Шааб', 'Анна', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('106', 'troll.jpg', null, null, 'Швыдкова', 'Анна', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('107', 'troll.jpg', null, null, 'Шевченко', 'Александр', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('108', '108.JPG', null, null, 'Шевченко', 'Елена', 'Математика', null, null, null, null, null, '<br>Учитель высшей квалификационной категории; общий трудовой стаж 43 года, педагогический стаж 15 лет; руководитель кафедры точных наук,  без наград, но человек творческий.<br><br>\r\n<b>1. Профессиональная деятельность. </b><br>\r\nПреподаю математику в 5 – 9 классах и являюсь классным руководителем 6 класса.  Учитель, который не только умеет грамотно спланировать и организовать свою работу, но и обладает высоким уровнем теоретических знаний, информационной компетентностью, реализуется творчески, при этом самокритичен, находится в постоянном поиске и готов учиться чему-то новому.<br><br>\r\n<b>2. Результат деятельности.</b><br>\r\n2004 – 2005 год – 100% количественной успеваемости. 74% качественной успеваемости.<br>\r\n2005 - 2006 год – 100% количественной успеваемости. 78% качественной успеваемости.<br>\r\n2006 - 2007 год – 100% количественной успеваемости. 79% качественной успеваемости. Сдача малого ЕГЭ – 20 человек 100% количественной успеваемости. 100% качественной успеваемости.<br>\r\n2007 -2008 год – 100% количественной успеваемости. 74% качественной успеваемости.<br><br>\r\n<b>3. Внеучебная деятельность с детьми.</b><br>\r\n Участие в работе летней каникулярной школы.<br>\r\n2003 – 2004 год – курс по математике “За страницами учебника”.<br>\r\n2004 – 2005 год – курс по математике “Элементы статистики и теории вероятности”.<br>\r\nУчастие в конкурсе “Кенгуру” – 30-40% ребят ежегодно.<br>\r\n2006 год Овчинников Иван, Фокин Назар – 104 место в регионе. <br>\r\nУчастие в предметных неделях – создан задачный материал для игры “Математическая карусель” 2005 -2006 год, для 5-6 классов.<br><br>\r\nЗанимаюсь с детьми олимпиадными задачами.<br>\r\nКак классный руководитель я много работаю в направлениях : семья; патриотическое воспитание ; спортивно – оздоровительное воспитание.<br>\r\n  Мой принцип : «Каждый ребенок- личность. Главное – воспитать личность, найти в ребенке хорошее и поддержать в нем это хорошее».<br><br>\r\n <b>4.Методическая работа. </b><br>\r\nОказываю методическую помощь учителям математики 5-9 классов при планировании, изучении отдельных тем по учебникам под редакции Никольского;<br>\r\nмною подобран, а к отдельным темам разработан дидактический материал по этим учебникам;<br>\r\nподобран материал к новой форме итоговой аттестации в 9 классе.<br>\r\nВыступала на пед. совете и семинарах по вопросам ; «Применение на урокх математике мною элементов технологии уровневой дифференциации», «организация подготовки учащихся к экзаменам».<br>\r\nВыступала с темой «Малое ЭГЕ, новая форма итоговой аттестации в 9 классе» на городском методобъединении.<br>\r\nНа городском семинаре классных руководителей поделилась опытом и выступила с докладом « Роль преемственности в адаптации пятиклассников».<br><br>\r\n<b>5. Тема и направление работы.</b><br>\r\nРабота с одаренными детьми. Использование ИКТ на уроках с целью деятельного усвоения знаний в современном понимании математической подготовки учащихся. <br>', '0', '1', '1');
INSERT INTO `site_teach_profile` VALUES ('109', 'troll.jpg', null, null, 'Штурбабина', 'Татьяна', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('110', 'troll.jpg', null, null, 'Шурыгина', 'Людмила', 'Английский язык', null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('111', 'troll.jpg', null, null, 'Щербатенко', 'Олеся', null, null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('112', 'troll.jpg', null, null, 'Юдин', 'Евгений', 'ОБЖ', null, null, null, null, null, null, '0', '1', '0');
INSERT INTO `site_teach_profile` VALUES ('113', 'troll.jpg', null, null, 'Ясинская', 'Ира', null, null, null, null, null, null, null, '0', '1', '0');
