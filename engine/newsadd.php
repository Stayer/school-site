<?
if($cp_login) {
if (isset($_POST['title'])&&isset($_POST['short_text'])&&isset($_POST['full_text'])){
switchConnection(1,"realmd");
// $result=dbquery("SELECT name, secondname FROM site_teach_profile WHERE id=1");
// $result=dbarray($result);
dbquery("INSERT INTO site_news (title, short_text, full_text, type) VALUES ('$_POST[title]', '$_POST[short_text]', '$_POST[full_text]', '$category') ");
echo "������� ������� ���������!";
}
echo "<b><h2><font color=#01b2f1><p align = left>���������� �������</p></font></h2></b>";
echo "
<form name='newsadd' method='post' enctype='multipart/form-data'>
��������� �������<font color=red>*</font>:<br>
<input type='text' name='title' size='58'><br><br>
�������� ����� ������� (��� ����������� �� ������� �����)<font color=red>*</font>:<br>
<textarea name='short_text' rows=3 cols=50></textarea><br><br>
������ ����� �������<font color=red>*</font>:<br> 
<textarea name='full_text' rows=10 cols=50></textarea><br><br>
�������� ��� �������<font color=red>*</font>:<br><br>
<table>
<tr><td width 50%>
<input type=radio name='category' value=1  CHECKED>���������� �� �������������<br>
<input type=radio name='category' value=2>���������<br>
<input type=radio name='category' value=4>������� � �����<br>
<input type=radio name='category' value=8>��������<br></td>
<td>
<input type=radio name='category' value=16>���������<br>
<input type=radio name='category' value=32>�����<br>
<input type=radio name='category' value=64>�����<br>
<input type=radio name='category' value=128>������<br>
</td></tr></table><br><br>
<label><input name='Submit' type=submit value='��������� ������'></label>
</form>
<br><br>	
<b>����������: ����, ���������� ������ <font color=red>*</font>, ����������� � ����������!</b>";
}
else echo "�� ������ ����������������!";

?>