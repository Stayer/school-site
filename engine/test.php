<?
include "../core.php";
if (isset($_POST['title'])&&isset($_POST['short_text'])&&isset($_POST['full_text'])){
switchConnection(1,"realmd");
$result=dbquery("SELECT name, secondname FROM site_teach_profile WHERE id=1");
$result=dbarray($result);
dbquery("INSERT INTO site_news SET title=$_POST['title'], short_text=$_POST['short_text'], full_text=$_POST['full_text']  ");
}
echo "<b><i><h2><p align = left>���������� �������</p></h2></i></b>";
echo "
<form name='addnews' method='post'>
��������� �������:<br>
<input type='text' name='title' size='58'><br><br>
�������� ����� ������� (��� ����������� �� ������� �����)<red>*</red>:<br>
<textarea name='full_text' rows=3 cols=50></textarea><br><br>
������ ����� �������:<br> 
<textarea name='full_text' rows=10 cols=50>LOL</textarea><br><br>
�������� ��� �������:<br><br>
<table>
<tr><td width 50%>
<input type=radio name=type value '1'  CHECKED>���������� �� �������������<br>
<input type=radio name=type value '2'>���������<br>
<input type=radio name=type value '4'>������� � �����<br>
<input type=radio name=type value '8'>��������<br></td>
<td>
<input type=radio name=type value '16'>���������<br>
<input type=radio name=type value '32'>�����<br>
<input type=radio name=type value '64'>�����<br>
<input type=radio name=type value '128'>������<br>
</td></tr></table>
<input name='Submit' type=submit value='��������� ������'>
</form>";
?>