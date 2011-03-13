SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Структура таблицы `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='Account System' AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `account`
--

INSERT INTO `account` (`id`, `username`, `sha_pass_hash`, `email`, `joindate`, `last_ip`, `level`, `locale`, `recruiter`) VALUES
(1, 'RODIONOV12', '4aa536fc492be831b7c513c5742b6d57e210acd1', 'rodionov12@yandex.ru', '2011-02-18 15:56:10', '127.0.0.1', 3, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `site_albums`
--

DROP TABLE IF EXISTS `site_albums`;
CREATE TABLE IF NOT EXISTS `site_albums` (
  `id` int(11) NOT NULL auto_increment,
  `folder` char(30) default NULL,
  `title` char(30) default NULL,
  `text` text,
  `img_count` smallint(2) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `site_albums`
--

INSERT INTO `site_albums` (`id`, `folder`, `title`, `text`, `img_count`) VALUES
(1, 'medal', 'Наши медалисты', 'В этом альбоме - ученики, которые очень успешно закончили обучение в нашем лицее!', 13),
(2, 'sport', 'Наши спортсмены', 'О, спорт! Ты - мир! Помимо учёбы, ребята успевают заниматься спортом, побеждать и отстаивать честь лицея!', 4),
(3, 'diplom', 'Дипломы', 'Награды, которые лицей получил', 9),
(4, 'karelin', 'Звёзды спорта в нашем лицее!', 'Приезд Александра Карелина, Елены Минх и других известных спортсменов России и СССР мирового уровня!', 13),
(5, '50', 'Лицею - 50!', 'Праздничный концерт, посвященный 50-летию со дня основания лицея!', 43),
(6, 'personal', 'Персонал школы', 'Без них - никуда!', 13),
(7, 'lessons', 'Лицейская жизнь - уроки', 'На уроках в нашем лицее никто не скучает!', 22);

-- --------------------------------------------------------

--
-- Структура таблицы `site_news`
--

DROP TABLE IF EXISTS `site_news`;
CREATE TABLE IF NOT EXISTS `site_news` (
  `id` int(11) NOT NULL auto_increment,
  `title` text character set cp1251 NOT NULL,
  `image` varchar(40) character set cp1251 default NULL,
  `short_text` text character set cp1251,
  `full_text` longtext character set cp1251,
  `type` mediumint(9) NOT NULL,
  `name` varchar(60) character set cp1251 NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `site_news`
--

INSERT INTO `site_news` (`id`, `title`, `image`, `short_text`, `full_text`, `type`, `name`, `date`) VALUES
(3, 'Юбилей школы', NULL, '25 февраля нашему лицею исполнилось 50 лет со дня основания! Состоялись торжественные празднования, а также встречи выпускников прошлых лет', '25 февраля провели концерт посвященный «50-летнему Юбилею школы №7».<br>\r\nОрганизовали чаепитие для ветеранов. 54 педагога лицея награждены  Грамотами  и  Благодарностями  Губернатора , Законодательного собрания, Министерства образования, науки и инновационной политики  Новосибирской области, главы города Бердска, управления образования.\r\n<br><br> \r\n26 февраля провели концерт посвященный «50-летнему Юбилею школы №7», для выпускников школы.<br>\r\nБолее 400 выпускников   присутствовали на  вечере встречи выпускников. В выступлениях  выпускников   звучали слова благодарности педагогам лицея за особую атмосферу, доброжелательность, чувство семьи, создаваемое ими.\r\n<br><br>\r\nВ приказе №303  Министерства образования, науки и инновационной политики, утверждены списки призеров и победителей регионального этапа олимпиады. 10 обучающихся лицея стали призерами и победителями  регионального этапа олимпиады школьников.\r\n<br><br>\r\nФотоотчёт о концерте к юбилею лицея  вы можете посмотреть в <a href=?s=photos&album=5>Галерее</a>\r\n', 0, 'Админ', '2011-02-26 10:00:00'),
(4, 'Поздравления к 8 марта!', NULL, 'Поздравляем всех дам с 8 марта! Пожелания - в полной новости!', '<center>Про этот праздник много есть стихов,<br>\r\nНо поздравлять с ним, право, не устану.<br>\r\nПусть голоса детей, сливаясь в хор,<br>\r\nПоздравят вас, родные наши мамы!<br>\r\nЗдоровья, счастья и большой любви<br>\r\nВсем женщинам сегодня пожелаем.<br>\r\nАх, если б в марте пели соловьи<br>\r\nИли цвела сирень, как в тёплом мае.<br>\r\n<br><br>\r\n<a class=''highslide'' href=./images/news/8.jpg onclick=''return hs.expand(this)''> <img src=./images/news/8.jpg /></a>\r\n</center>', 0, 'Админ', '2011-03-08 23:36:01'),
(1, 'Приветствие!', NULL, 'Добро пожаловать на сайт нашего лицея №7! Надеемся, что вам будет здесь уютно и комфортно! Располагайтесь!', 'Добро пожаловать на сайт нашего лицея №7! Надеемся, что вам будет здесь уютно и комфортно! Располагайтесь!', 0, 'Админ', '2011-02-01 11:10:20'),
(2, 'Приезд Александра Карелина', NULL, 'Наш лицей посетил «Карелин Фонд» - олимпийские чемпионы: Карелин А.А., Подгорный Е.А., Глухих А.В., Минх И.Э. ', '14 февраля наш лицей посетил «Карелин Фонд» - олимпийские чемпионы: Карелин А.А., Подгорный Е.А., Глухих А.В., Минх И.Э. В спортивном зале с 10 до 11 часов прошла спортивная эстафета «Будь верен России!» для 3,6 классов. \r\n<br><br>С 11 до 12 часов в актовом зале прошла встреча с олимпийскими звездами у 4в, 6, 9-11 классов. На конференции ребятам представилась возможность задать вопрос чемпиону и получить на него ответ.  \r\n<br><br>\r\nПриезд чемпионов не остался незамеченным. Фотоотчёт вы можете посмотреть в <a href=?s=photos&album=4>Галерее</a>', 0, 'Админ', '2011-02-14 21:41:01');

-- --------------------------------------------------------

--
-- Структура таблицы `site_teach_blog`
--

DROP TABLE IF EXISTS `site_teach_blog`;
CREATE TABLE IF NOT EXISTS `site_teach_blog` (
  `id` mediumint(9) NOT NULL auto_increment,
  `teach_id` smallint(6) default NULL,
  `date` timestamp NULL default NULL on update CURRENT_TIMESTAMP,
  `title` text,
  `text` longtext,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `site_teach_blog`
--

INSERT INTO `site_teach_blog` (`id`, `teach_id`, `date`, `title`, `text`) VALUES
(1, 1, '2011-03-09 21:02:24', 'Приветствие', 'Рада приветствовать Вас на моём персональном блоге, с помощью которого я рассчитываю получать от Вас свои отклики и мнения о деятельности нашего образовательного учреждения. Я надеюсь, что здесь мы сможем обмениваться мнениями о происходящих событиях.\r\nПриглашаю вас принять активное участие в обсуждении.'),
(2, 1, '2011-03-09 21:02:50', 'Возможно ли получить золотую или серебрянную медаль с одной тройкой в аттестате за 9-й класс?', 'Получить золотую или серебряную медаль возможно только после окончанию 11 классов. После окончания 9 классов возможно получить аттестат особого образца, но для этого необходимо закончить учебный год только на отлично.'),
(3, 1, '2011-03-09 21:03:20', 'Здравствуйте. Убедительная просьба, чтобы учителя выставляли оценки в дневники по итогам работы учащихся в течение урока, а не в конце месяца.', 'Такая практика предполагается сама собой. Но нередко возникает ситуация, когда ребенок, получив нежелательную отметку, отказывается дать дневник, ссылаясь на то, что забыл его дома. Не все дети своевременно сдают дневник классному руководителю для выставления отметок за определенный период (как правило, дневники проверяются один раз в неделю).'),
(4, 1, '2011-03-09 21:03:48', 'После нового года многие ученики начнут ещё более активно готовиться к егэ,в том числе я. Можно ли из расписания убрать час-два ненужных (провести опрос) предметов и на эти часы сделать нужные большинству факультативы?', 'Школьное расписание строится на основе базисного учебного плана, куда входят все обязательные для изучения предметы. Так что ненужных предметов в расписании нет. Если же хотя бы один из предметов будет отсутствовать, то выпускники не получат аттестаты об образовании. Поэтому ничего исключить нельзя. Кроме того, я думаю, что эти два часа не сыграют роли, если правильно распределить свое время. Даже на отдых время останется.'),
(5, 1, '2011-03-09 21:05:11', 'Нужно ли отправлять ребенка в школу в сильные морозы?', 'Для тех учеников, которые придут в школу несмотря на морозы, занятия будут проводиться. Решение о посещении ребенком учебного заведения принимают родители.  Родители должны сообщить о своем решении классному руководителю в письменном виде (после морозов). В таком случае уроки, пропущенные из-за погодных  условий, не будут засчитаны пропусками по неуважительной причине.'),
(6, 1, '2011-03-09 21:07:05', 'Как Вы поощряете своих учеников? ', 'Все школьные мероприятия заканчиваются награждением, призы самые разные: грамоты, сюрпризы, благодарности, сладости. В конце года проходит праздник «За честь школы», где награждаются все дети, которые отстаивали честь школы в различных мероприятиях.');

-- --------------------------------------------------------

--
-- Структура таблицы `site_teach_profile`
--

DROP TABLE IF EXISTS `site_teach_profile`;
CREATE TABLE IF NOT EXISTS `site_teach_profile` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=114 ;

--
-- Дамп данных таблицы `site_teach_profile`
--

INSERT INTO `site_teach_profile` (`id`, `image`, `class`, `letter`, `secondname`, `name`, `science`, `birth`, `email`, `icq`, `site`, `other`, `about`, `blog_enable`, `type`, `level`) VALUES
(1, 'director.bmp', NULL, NULL, 'Мануйлова', 'Ирина', 'Химия', '1965-10-26', 'bsk_sh07@mail.ru', NULL, NULL, NULL, NULL, '1', 1, 1),
(2, 'troll.jpg', NULL, NULL, 'Абрамова', 'Светлана', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(3, 'troll.jpg', NULL, NULL, 'Аксененко', 'Ольга', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(4, 'troll.jpg', NULL, NULL, 'Алдошина', 'Таисья', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(5, 'troll.jpg', NULL, NULL, 'Алексеенко', 'Юлия', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(6, 'troll.jpg', NULL, NULL, 'Багашова', 'Ирина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(7, 'troll.jpg', NULL, NULL, 'Баранова', 'Елена', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(8, 'troll.jpg', NULL, NULL, 'Баянова', 'Татьяна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(9, 'troll.jpg', NULL, NULL, 'Безлепкина', 'Валентина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(10, 'troll.jpg', NULL, NULL, 'Биденко', 'Ольга', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(11, 'troll.jpg', NULL, NULL, 'Бородулин', 'Федор', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(12, 'troll.jpg', NULL, NULL, 'Борщенко', 'Наталья', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(13, 'troll.jpg', NULL, NULL, 'Бредихина', 'Наталья', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(14, 'troll.jpg', NULL, NULL, 'Бритикова', 'Татьяна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(15, 'troll.jpg', NULL, NULL, 'Бровкова', 'Ирина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(16, 'troll.jpg', NULL, NULL, 'Булатова', 'Марина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(17, 'troll.jpg', NULL, NULL, 'Витенко', 'Ирина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(18, 'troll.jpg', NULL, NULL, 'Воронкина', 'Марина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(19, 'troll.jpg', NULL, NULL, 'Галигарова', 'Ирина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(20, 'troll.jpg', NULL, NULL, 'Гарсия', 'Светлана', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(21, 'troll.jpg', NULL, NULL, 'Глыва', 'Иван', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(22, 'troll.jpg', NULL, NULL, 'Головина', 'Елена', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(23, 'troll.jpg', NULL, NULL, 'Гринчук', 'Олеся', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(24, 'troll.jpg', NULL, NULL, 'Гурина', 'Тамара', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(25, 'troll.jpg', NULL, NULL, 'Демахин', 'Игорь', 'Физическая культура', NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(26, 'troll.jpg', NULL, NULL, 'Дробынина', 'Ирина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(27, 'troll.jpg', NULL, NULL, 'Евдокимова', 'Галина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(28, 'troll.jpg', NULL, NULL, 'Ермоленко', 'Татьяна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(29, 'troll.jpg', NULL, NULL, 'Зверев', 'Геннадий', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(30, 'troll.jpg', NULL, NULL, 'Зорина', 'Татьяна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(31, 'troll.jpg', NULL, NULL, 'Зубарева', 'Любовь', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(32, 'troll.jpg', NULL, NULL, 'Ивницкая', 'Лариса', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(33, '33.jpg', NULL, NULL, 'Ильина', 'Елена', 'Математика', NULL, NULL, NULL, NULL, NULL, '<br><b>1 Профессиональная деятельность.</b><br>\r\nУчитель математики высшей квалификационной категории с 2000 года. Преподаю алгебру и геометрию в 10-х и 11-х классах.\r\n    Наш лицей реализует три профиля обучения: физико-химический, социально-гуманитарный и спортивный. Я работаю во всех профильных классах.<br><br>\r\n<b>2.Результаты.</b> <br>\r\nВыпускники нашего лицея сдают математику в форме ЕГЭ с 2005 г. и традиционно  показывают на экзаменах очень хорошие результаты. Ребята становятся студентами любых вузов Новосибирска (НГУ, НГТУ, НГАСУ, Сиб АГС) и других городов России (Москва, Томск, Санкт-Петербург).<br><br>\r\n<b>3.Методическая работа.</b><br>\r\nМною разработаны программы элективных курсов по математике.<br><br>\r\n <b>4.Направления работы на перспективу.</b><br>\r\nНа данный момент я получаю второе высшее образование, обучаясь в Санкт-Петербургском институте повышения квалификации работников профессионального образования по специальности «Педагог профильной школы».<br>\r\n', '0', 1, 1),
(34, 'troll.jpg', NULL, NULL, 'Исакова', ' Татьяна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(35, 'troll.jpg', NULL, NULL, 'Карасева', 'Татьяна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(36, 'troll.jpg', NULL, NULL, 'Карепина', 'Римма', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(37, 'troll.jpg', NULL, NULL, 'Клименко', 'Юлия', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(38, 'troll.jpg', NULL, NULL, 'Ковалева', 'Марина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(39, 'troll.jpg', NULL, NULL, 'Козина', 'Ирина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(40, 'troll.jpg', NULL, NULL, 'Копылова', 'Татьяна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(41, 'troll.jpg', NULL, NULL, 'Кошанский', 'Александр', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(42, 'troll.jpg', NULL, NULL, 'Кошкарева', 'Светлана', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(43, 'troll.jpg', NULL, NULL, 'Кузнецова', 'Светлана', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(44, 'troll.jpg', NULL, NULL, 'Ланцухай', 'Татьяна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(45, 'troll.jpg', NULL, NULL, 'Лаптева', 'Ольга', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(46, 'troll.jpg', NULL, NULL, 'Ларионова', 'Ирина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(47, 'troll.jpg', NULL, NULL, 'Леванова', 'Людмила', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(48, 'troll.jpg', NULL, NULL, 'Лесных', 'Татьяна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(49, 'troll.jpg', NULL, NULL, 'Мазунина', 'Елена', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(50, 'troll.jpg', NULL, NULL, 'Манина', 'Ольга', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(51, 'troll.jpg', NULL, NULL, 'Мануйлова', 'Галина', 'Математика', NULL, NULL, NULL, NULL, NULL, '<br><b>1.Профессиональная деятельность:</b><br>\r\nУчитель математики высшей квалификационной категории, стаж работы 20 лет.<br><br>\r\n<b>2.Достижения учеников:</b><br>\r\n70% учеников участвуют в «Кенгуру».<br><br>\r\n<b>3. Внеучебная работа:</b><br>\r\nВ 2006-2007 и 2007-2008 уч.годах участвовала с детьми в дистанционной математической школе «Школа плюс» при Центре экономического и бизнес-образования г. Новосибирска.<br><br>\r\n<b>4. Методическая работа.</b><br>\r\nРазработка и ведение для летних каникулярных школ курсов по математике «Симметрия», «Вероятность и статистика», «Логика в математике».<br><br>\r\n<b>5. Сфера профессиональных интересов:</b><br>\r\nРазработка системы индивидуального подхода при обучении математике.<br>', '0', 1, 1),
(52, 'troll.jpg', NULL, NULL, 'Матыцина', 'Галина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(53, 'troll.jpg', NULL, NULL, 'Медведева', 'Лариса', 'Физика', NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(54, 'troll.jpg', NULL, NULL, 'Молокова', 'Любовь', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(55, 'troll.jpg', NULL, NULL, 'Морозова', 'Татьяна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(56, 'troll.jpg', 10, 'б', 'Морозова', 'Татьяна', 'Математика', NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(57, 'troll.jpg', NULL, NULL, 'Насекин', 'Павел', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(58, 'troll.jpg', NULL, NULL, 'Нефедова', 'Лариса', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(59, '59.jpg', NULL, NULL, 'Нешпор', 'Ирина', 'Физика', NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 1),
(60, 'troll.jpg', NULL, NULL, 'Никонова', 'Наталья', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(61, 'troll.jpg', NULL, NULL, 'Нилова', 'Людмила', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(62, 'troll.jpg', NULL, NULL, 'Новикова', 'Людмила', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(63, 'troll.jpg', NULL, NULL, 'Новикова', 'Светлана', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(64, 'troll.jpg', NULL, NULL, 'Оболенская', 'Лилия', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(65, 'troll.jpg', NULL, NULL, 'Обрывко', 'Марина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(66, 'troll.jpg', NULL, NULL, 'Озерец', 'Ольга', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(67, 'troll.jpg', NULL, NULL, 'Ощепкова', 'Любовь', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(68, 'troll.jpg', NULL, NULL, 'Павлинова', 'Надежда', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(69, 'troll.jpg', NULL, NULL, 'Паклина', 'Елена', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(70, 'troll.jpg', NULL, NULL, 'Пестрякова', 'Светлана', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(71, 'troll.jpg', NULL, NULL, 'Петровская', 'Елена', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(72, 'troll.jpg', NULL, NULL, 'Писарева', 'Наталья', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(73, 'troll.jpg', NULL, NULL, 'Полярус', 'Кристина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(74, 'troll.jpg', NULL, NULL, 'Понедельченко', 'Елена', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(75, 'troll.jpg', NULL, NULL, 'Попова', 'Татьяна', 'География', NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(76, 'troll.jpg', NULL, NULL, 'Прохорова', 'Анна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(77, 'troll.jpg', NULL, NULL, 'Проценко', 'Людмила', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(78, 'troll.jpg', NULL, NULL, 'Путинцева', 'Екатерина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(79, '79.jpg', NULL, NULL, 'Распопова', 'Екатерина', 'Математика', NULL, NULL, NULL, NULL, NULL, '<br><b>1. Профессиональная деятельность:</b><br>\r\nПреподавание математики в 5-9 классах.<br><br>\r\n<b>2. Результаты учащихся:</b><br>\r\n2004-2005 уч.год. Ковалев С.(6 кл) – призовое место в городской олимпиаде по математике;<br>\r\n2005-2006 уч.год. Гончаров В.(7кл) – вошел в «Золотую сотню» по России.<br><br>\r\n<b>3. Внеучебная работа с детьми:</b><br>\r\n•	Работа в летней каникулярной школе 2005-2006, 2006-2007, 2007-2008 уч.годы.<br>\r\nТема курса «Вероятность и статистика» для 6-9 классов.<br><br>\r\n<b>4. Методическая работа:</b><br>\r\n•	2006-2007 уч.год. Доклад на педагогических чтениях по теме «Дифференцированное обучение как необходимое условие повышения эффективности обучения»;<br>\r\n•	2003-2004 уч.год. Участие в городском семинаре «Организация учебной деятельности как форма активности школьников»;<br><br>\r\n<b>5. Основное направление профессиональных интересов: </b><br>\r\nДифференцированное обучение детей математике.<br>', '0', 1, 1),
(80, 'troll.jpg', NULL, NULL, 'Риб', 'Светлана', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(81, 'troll.jpg', NULL, NULL, 'Родыгина', 'Анна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(82, 'troll.jpg', NULL, NULL, 'Родько', 'Елена', 'Химия', NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(83, 'troll.jpg', NULL, NULL, 'Рыбалко', 'Евгения', 'Информатика', NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(84, 'troll.jpg', NULL, NULL, 'Рыжонина', 'Лариса', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(85, 'troll.jpg', NULL, NULL, 'Сенникова', 'Татьяна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(86, 'troll.jpg', NULL, NULL, 'Симакова', 'Зоя', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(87, 'troll.jpg', NULL, NULL, 'Синицына', 'Валентина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(88, 'troll.jpg', NULL, NULL, 'Смаглюк', 'Надежда', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(89, 'troll.jpg', NULL, NULL, 'Смирнова', 'Татьяна', 'Информатика', NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(90, 'troll.jpg', NULL, NULL, 'Солдатов', 'Андрей', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(91, 'troll.jpg', NULL, NULL, 'Сотникова', 'Наталья', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(92, 'troll.jpg', NULL, NULL, 'Стебаева', 'Елена', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(93, 'troll.jpg', NULL, NULL, 'Торопчина', 'Ирина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(94, 'troll.jpg', NULL, NULL, 'Третьякова', 'Виктора', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(95, 'troll.jpg', NULL, NULL, 'Тугарина', 'Елена', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(96, 'troll.jpg', NULL, NULL, 'Урюмцева', 'Галина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(97, 'troll.jpg', NULL, NULL, 'Федосеева', 'Ирина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(98, 'troll.jpg', NULL, NULL, 'Фигуренко', 'Наталья', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(99, 'troll.jpg', NULL, NULL, 'Хомякова', 'Нина', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(100, 'troll.jpg', NULL, NULL, 'Хомякова', 'Ольга', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(101, 'troll.jpg', NULL, NULL, 'Хотеенкова', 'Юлия', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(102, 'troll.jpg', NULL, NULL, 'Чеботникова', 'Вера', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(103, 'troll.jpg', NULL, NULL, 'Черненок', 'Ольга', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(104, 'troll.jpg', NULL, NULL, 'Черненок', 'Татьяна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(105, 'troll.jpg', NULL, NULL, 'Шааб', 'Анна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(106, 'troll.jpg', NULL, NULL, 'Швыдкова', 'Анна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(107, 'troll.jpg', NULL, NULL, 'Шевченко', 'Александр', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(108, '108.jpg', NULL, NULL, 'Шевченко', 'Елена', 'Математика', NULL, NULL, NULL, NULL, NULL, '<br>Учитель высшей квалификационной категории; общий трудовой стаж 43 года, педагогический стаж 15 лет; руководитель кафедры точных наук,  без наград, но человек творческий.<br><br>\r\n<b>1. Профессиональная деятельность. </b><br>\r\nПреподаю математику в 5 – 9 классах и являюсь классным руководителем 6 класса.  Учитель, который не только умеет грамотно спланировать и организовать свою работу, но и обладает высоким уровнем теоретических знаний, информационной компетентностью, реализуется творчески, при этом самокритичен, находится в постоянном поиске и готов учиться чему-то новому.<br><br>\r\n<b>2. Результат деятельности.</b><br>\r\n2004 – 2005 год – 100% количественной успеваемости. 74% качественной успеваемости.<br>\r\n2005 - 2006 год – 100% количественной успеваемости. 78% качественной успеваемости.<br>\r\n2006 - 2007 год – 100% количественной успеваемости. 79% качественной успеваемости. Сдача малого ЕГЭ – 20 человек 100% количественной успеваемости. 100% качественной успеваемости.<br>\r\n2007 -2008 год – 100% количественной успеваемости. 74% качественной успеваемости.<br><br>\r\n<b>3. Внеучебная деятельность с детьми.</b><br>\r\n Участие в работе летней каникулярной школы.<br>\r\n2003 – 2004 год – курс по математике “За страницами учебника”.<br>\r\n2004 – 2005 год – курс по математике “Элементы статистики и теории вероятности”.<br>\r\nУчастие в конкурсе “Кенгуру” – 30-40% ребят ежегодно.<br>\r\n2006 год Овчинников Иван, Фокин Назар – 104 место в регионе. <br>\r\nУчастие в предметных неделях – создан задачный материал для игры “Математическая карусель” 2005 -2006 год, для 5-6 классов.<br><br>\r\nЗанимаюсь с детьми олимпиадными задачами.<br>\r\nКак классный руководитель я много работаю в направлениях : семья; патриотическое воспитание ; спортивно – оздоровительное воспитание.<br>\r\n  Мой принцип : «Каждый ребенок- личность. Главное – воспитать личность, найти в ребенке хорошее и поддержать в нем это хорошее».<br><br>\r\n <b>4.Методическая работа. </b><br>\r\nОказываю методическую помощь учителям математики 5-9 классов при планировании, изучении отдельных тем по учебникам под редакции Никольского;<br>\r\nмною подобран, а к отдельным темам разработан дидактический материал по этим учебникам;<br>\r\nподобран материал к новой форме итоговой аттестации в 9 классе.<br>\r\nВыступала на пед. совете и семинарах по вопросам ; «Применение на урокх математике мною элементов технологии уровневой дифференциации», «организация подготовки учащихся к экзаменам».<br>\r\nВыступала с темой «Малое ЭГЕ, новая форма итоговой аттестации в 9 классе» на городском методобъединении.<br>\r\nНа городском семинаре классных руководителей поделилась опытом и выступила с докладом « Роль преемственности в адаптации пятиклассников».<br><br>\r\n<b>5. Тема и направление работы.</b><br>\r\nРабота с одаренными детьми. Использование ИКТ на уроках с целью деятельного усвоения знаний в современном понимании математической подготовки учащихся. <br>', '0', 1, 1),
(109, 'troll.jpg', NULL, NULL, 'Штурбабина', 'Татьяна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(110, 'troll.jpg', NULL, NULL, 'Шурыгина', 'Людмила', 'Английский язык', NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(111, 'troll.jpg', NULL, NULL, 'Щербатенко', 'Олеся', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(112, 'troll.jpg', NULL, NULL, 'Юдин', 'Евгений', 'ОБЖ', NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0),
(113, 'troll.jpg', NULL, NULL, 'Ясинская', 'Ира', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `site_timetable`
--

DROP TABLE IF EXISTS `site_timetable`;
CREATE TABLE IF NOT EXISTS `site_timetable` (
  `id` int(11) NOT NULL auto_increment,
  `class` smallint(2) default NULL,
  `letter` varchar(2) default NULL,
  `number` smallint(1) default NULL,
  `day` int(1) default NULL,
  `science` varchar(30) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
