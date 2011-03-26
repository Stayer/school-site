<?
	include"core.php";
	include"header.php";
	include "templates/$site_template/top.php";

	if($_GET['s']=="send")include "sendpass.php";
	elseif($_GET['s']=="register")include "register.php";
	elseif($_GET['s']=="teacher")include "teachers.php";
	elseif($_GET['s']=="news")include "news.php";
	elseif($_GET['s']=="login")include "login.php";
	elseif($_GET['s']=="docs")include "docs.php";
	elseif($_GET['s']=="photos")include "photos.php";
	elseif(!isset($_GET['p']))include "hello.php";
	
	if($_GET['p']==6&&$cp_login)include "hello.php";
	elseif($_GET['p']==15&&$cp_login)include "newpass.php";
	elseif($_GET['p']==16&&$cp_login)include "newmail.php";
	elseif($_GET['p']==18&&$cp_login)include "sendmail.php";

	include"templates/$site_template/footer.php";
?>
