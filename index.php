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
   elseif($_GET['s']=="photo")include "photos2.php";
   elseif(!isset($_GET['p']))include "hello.php";
   
   if($_GET['p']==4&&$cp_login)include "donate.php";
   elseif($_GET['p']==6&&$cp_login)include "hello.php";
   elseif($_GET['p']==7&&$cp_login)include "history.php";
   elseif($_GET['p']==14&&$cp_login)include "ver.php";
   elseif($_GET['p']==15&&$cp_login)include "newpass.php";
   elseif($_GET['p']==16&&$cp_login)include "newmail.php";
   elseif($_GET['p']==18&&$cp_login)include "sendmail.php";

   include"templates/$site_template/footer.php";
?>
