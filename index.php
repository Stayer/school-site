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
   
   if($_GET['p']==2&&$cp_login)include "chars.php";
   elseif($_GET['p']==3&&$cp_login)include "action.php";
   elseif($_GET['p']==5&&$cp_login)include "bag.php";
   elseif($_GET['p']==4&&$cp_login)include "donate.php";
   elseif($_GET['p']==6&&$cp_login)include "hello.php";
   elseif($_GET['p']==7&&$cp_login)include "history.php";
   elseif($_GET['p']==9&&$cp_login)include "webmoney.php";
   elseif($_GET['p']==10&&$cp_login)include "bug.php";
   elseif($_GET['p']==11&&$cp_login)include "abuse.php";
   elseif($_GET['p']==12&&$cp_login)include "shaproblem.php";
   elseif($_GET['p']==13&&$cp_login)include "msghistory.php";
   elseif($_GET['p']==14&&$cp_login)include "ver.php";
   elseif($_GET['p']==15&&$cp_login)include "newpass.php";
   elseif($_GET['p']==16&&$cp_login)include "newmail.php";
   elseif($_GET['p']==18&&$cp_login)include "sendmail.php";
   elseif($_GET['p']==19&&$cp_login)include "prob.php";
   elseif($_GET['p']==20&&$cp_login)include "vote.php";
   elseif($_GET['p']==21&&$cp_login)include "vote_mmotop.php";
   elseif($_GET['p']==22&&$cp_login)include "vote_gatop.php";
   elseif($_GET['p']==23&&$cp_login)include "vote_gamerus.php";
   elseif($_GET['p']==24&&$cp_login)include "vote_xtreme.php";
   elseif($_GET['p']==25&&$cp_login)include "vote_rpgtop.php";
   elseif($_GET['p']==26&&$cp_login)include "vote_wartop.php";
   elseif($_GET['p']==33&&$cp_login)include "stat.php";


   include"templates/$site_template/footer.php";
?>
