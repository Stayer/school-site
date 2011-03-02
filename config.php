<?

$realm_db = Array(
	'addr' => "127.0.0.1:3306",		// SQL server IP:port this realmd located on
	'user' => "root",			// SQL server login this realmd located on
	'pass' => "vertrigo",			// SQL server pass this realmd located on
	'name' => "develop",			// Realmd DB name
	);

// Some HTML settings

$header_title       = "Личный Кабинет игроков  --  WOW.1NSK.RU - Бесплатный сервер World Of Warcraft, версия клиента 3.3.5 (12340) , 1 реалм x100. ";
$header_description = "Cервер World of Warcraft.";
$header_keywords    = "сервер для wow, world of warcraft pvp сервер, world warcraft, lich king, burning crusade, fun server";

$site_name="1nsk wow";          // имя сайта
$site_url="http://localhost:1010/";   // адрес сайта
$forum_url="http://1nsk.ru/forum/forumdisplay.php?f=121";  // адрес форума
$register_url="http://localhost:1010/?s=register";  // адрес страницы регистрации

$news_count=5;
///////////////////////////////

// Panel stile
$site_template = "second"; // imperial , lich

//Почта "Сообщение Администратору" , "Напоминание пароля"
$admin_name  = "Властелин (всея Варкрафта)";
$admin_email = "rodionov12@gmail.com";

//Сообщение Администратору
$email_body_sendmail = '<p>Сообщение Администратору от [USERNAME]</p>
<p>[MESSAGE]</p>
<p>Сообщение c IP-адреса: [REMOTE_ADDR]</p>
<p>[SITE_URL]</p>';

//Напоминание пароля, шаблон письма
$email_subject_sendpass="Напоминание пароля"; //тема письма

$email_body_sendpass='<p>Здраствуйте,  [USERNAME]</p>
<p>[DATE] Вы запрашевали пароль к вашему аккаунту c IP-адреса: [REMOTE_ADDR]</p>
<p>Если Вы не делали такого запроса, просто проигнорируйте данное письмо.</p>
<p>Ваш новый пароль будет:  [USERPASS]</p>
<p>Для подтверждения нового пароля вы должны пройти по данной ссылке : '.$cp_url.'?s=send&code=[USERCODE]</p>
<p>С уважением, Администрация сервера - [SITE_URL]</p>';
///////////////////////////////////////

// Registration in control panel.
$site_register = true;
$level   = 1; // 0=> Classic 1=> TBC 2=> Wotlk

?>
