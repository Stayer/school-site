<body>
<div id="header">
<table id="head" cellpadding="0" cellspacing="0" border="0"><tr>
<td class="left"><a href="?p=6"><div class="iePNG" style="background-image:url(templates/<?echo $site_template ?>/style/images/logo.gif); background-repeat:no-repeat; width:222px; height:183px"></div></a></td>
<td align="right" class="right">
</td></tr></table>
</div>
<? error_reporting(0);
if($cp_login){
switch ($level) {
case 1:   $gm="”ченик"; break;
case 2:   $gm="ѕреподаватель"; break;
case 3:   $gm="јдминистратор"; break;
case 4:   $gm="ƒиректор"; break;
case 5:   $gm="јдмин сайта"; break;}

echo" <div id='userinfo'><div class='content' align='right'>
<a href=./index.php?p=6>«дравствуйте,</a> <strong>$profile[secondname] $profile[name]</strong><br /> Х "; 
if ($level==1 || $level==5) echo"<a href='?s=pupil&p=$profile[id]'>";  else echo"<a href='?s=teacher&t=$profile[id]'>"; 
echo "ѕрофиль</a> Х <a href=?p=1>–едактировать</a> Х <a href='".$site_url."logout.php'>¬ыйти</a><br />";
echo "¬аш e-mail: <strong>$profile[email]</strong><br />";
echo "Х<a href='".$site_url."?p=16'> —мена почты</a><br>Х<a href='".$site_url."?p=15'> —мена парол€</a><br></div></div>";
		}
?>
<div id="content">
<div id="mcontentblock">
<table width="969"><tr><td width="4%" rowspan="2"></td><td id="menu" valign="top">
<div id="menuimg" class="iePNG"></div><br />
<table id="mtable" cellpadding="0" cellspacing="0">
<?include "templates/$site_template/menu.php"?>
</table>
</td>