<body>
<div id="header">
<table id="head" cellpadding="0" cellspacing="0" border="0"><tr>
<td class="left"><a href="?p=6"><div class="iePNG" style="background-image:url(templates/<?echo $site_template ?>/style/images/logo.gif); background-repeat:no-repeat; width:222px; height:183px"></div></a></td>
<td align="right" class="right">
</td></tr></table>
</div>
<? error_reporting(0);
if($cp_login){
	$result=dbquery("SELECT level FROM account WHERE id =$ac_id ");
	$data=dbarray($result);
        $gm="Ученик";
        If($data['level']==1)$gm="Преподаватель";
        If($data['level']==2)$gm="Администрация";
        If($data['level']==3)$gm="Директор";
	If($data['level']==4)$gm="Бог";
	if($data['level']==0)$result=dbquery("SELECT * FROM site_pupil_profile WHERE id =$ac_id ");
	else $result=dbquery("SELECT * FROM site_teach_profile WHERE id =$ac_id ");
 	$data=dbarray($result);
echo" <div id='userinfo'><div class='content' align='right'>
<a href=./index.php?p=6>Здравствуйте,</a> <strong>$data[name]&nbsp$data[secondname]</strong><br /><a href='".$site_url."logout.php'>Выйти</a><br />";
echo "Ваш e-mail: <strong><font color=green>$datag[email] </font></strong><br />";
echo "<a href='".$site_url."?p=16'>Смена почты<font color=red> New!</font></a>   <a href='".$site_url."?p=15'>Смена пароля<font color=red> New!</font></a>
</div></div>";
              }
  ?>
<div id="content">
<div id="mcontentblock">
  <table width="969"><tr><td width="2%" rowspan="2"></td><td id="menu" valign="top">
  <div id="menuimg" class="iePNG"></div><br />
   <table id="mtable" cellpadding="0" cellspacing="0">
   <?include "templates/$site_template/menu.php"?>
   <tr><td class="menuborder">
   </td></tr>
     </table>
  </td> 
