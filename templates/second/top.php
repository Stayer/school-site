<body>
<div id="header">
<table id="head" cellpadding="0" cellspacing="0" border="0"><tr>
<td class="left"><a href="?p=6"><div class="iePNG" style="background-image:url(templates/<?echo $site_template ?>/style/images/logo.gif); background-repeat:no-repeat; width:222px; height:183px"></div></a></td>
<td align="right" class="right">
</td></tr></table>
</div>
<? error_reporting(0);
if($cp_login){
if ($level==1||$level==5) $result=dbquery("SELECT * FROM site_pupil_profile WHERE id =$ac_id ");
else $result=dbquery("SELECT * FROM site_teach_profile WHERE id =$ac_id "); 
$data=dbarray($result);
switch ($level) {
case 1:   $gm="������"; break;
case 2:   $gm="�������������"; break;
case 3:   $gm="�������������"; break;
case 4:   $gm="��������"; break;
case 5:   $gm="����� �����"; break;}

echo" <div id='userinfo'><div class='content' align='right'>
<a href=./index.php?p=6> ������������,</a> <strong>$data[secondname]&nbsp$data[name]</strong><br /> � "; 
if ($level==1 || $level==2) echo"<a href='?s=pupil&p=$data[id]'>";  else echo"<a href='?s=teacher&t=$data[id]'>"; 
echo "�������</a> � <a href='".$site_url."logout.php'>�����</a><br />";
echo "��� e-mail: <strong>$datag[email]</strong><br />";
echo "�<a href='".$site_url."?p=16'> ����� �����</a><br>�<a href='".$site_url."?p=15'> ����� ������</a></div></div>";
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