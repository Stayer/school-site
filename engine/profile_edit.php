<td id="news" align="left" valign="top" rowspan="2">
<table width="640" cellpadding="0" cellspacing="0">
<tr><td colspan="2" class="topbr"></td></tr>
<tr class="newstitletr"><td class="title">��� ������� </td></tr>
<tr><td colspan="2" class="newsborder"></td></tr>
<tr><td colspan="2" class="newstop"></td></tr>
<tr><td class="text" colspan="2">
<table width = '100%' cellspacing = '0' cellpadding = '0' border = '0' class = "tbl">
<?
if (!$activ) {
$query="UPDATE site_pupil_profile (name, secondname, birth, site, icq, email, learn, class, letter, end_year, science, about, other, level) VALUES ('$_POST[name]', '$_POST[secondname]', '$_POST[birth]', '$_POST[ site]', '$_POST[icq]', '$_POST[email]', '$_POST[learn]', '$class', '$_POST[letter]', '$end_year', '$_POST[science]', '$_POST[about]', '$_POST[other]', 1) WHERE id=$ac_id");}
else  {$query="INSERT INTO site_pupil_profile (id, name, secondname, birth, site, icq, email, learn, class, letter, end_year, science, about, other, level) VALUES ($ac_id, '$_POST[name]', '$_POST[secondname]', '$_POST[birth]', '$_POST[ site]', '$_POST[icq]', '$_POST[email]', '$_POST[learn]', '$class', '$_POST[letter]', '$end_year', '$_POST[science]', '$_POST[about]', '$_POST[other]', 1)");}
if($cp_login&&$level==1) {
if (isset($_POST['name'])&&isset($_POST['secondname'])&&$_POST['birth']!='������:1994-03-08'){
switchConnection(1,"realmd");
if ($_POST[learn]==1) {$end_year='0'; $class='$_POST[class]';} else {$end_year='$_POST[end_year]'; $class='0';}
$result=dbquery($query);
// if ($result) echo "������� ������� ��������������!";
// else echo "������! ��������� ������������ �������� ������! ��������� <A HREF="javascript:history.back()" onMouseOver="window.status='�����';return true">�����</A>";
}
echo "<b><h2><font color=#01b2f1><p align = left>�������������� �������</p></font></h2></b>";
echo "
<form name='newsadd' method='post' enctype='multipart/form-data'>
<h3>�������� ����������</h3>
<table width=95%><tr>
<td width=30%>���:<font color=red>*</font>:<br>
<input type='text' name='name' size='20' maxlength='15'></td>
<td width=30%>�������:<font color=red>*</font>:<br>
<input type='text' name='secondname' size='20' maxlength='20'></td>
<td width=30%>���� �������� <br>(������ - ����-��-��):<br>
<input type='text' name='birth' size='20' maxlength='10' value='������:1994-03-08'></td></tr></table>

<h3>���������� ����������</h3>
<table width=95%><tr>
<td width=30%>����:<br>
<input type='text' name='site' size='20' maxlength='60'></td>
<td width=30%>ICQ/Skype:<br>
<input type='text' name='icq' size='20' maxlength='20'></td>
<td width=30%>e-mail:<br>
<input type='text' name='email' size='20' maxlength='40'></td>
</tr></table>

<h3>��������</h3>
��� ������:<font color=red>*</font>:<br>
<input type=radio name='category' learn=1  CHECKED>��������<br>
<input type=radio name='category' learn=0>����������<br><br>

<table width=95%>
<tr><td width=50%>���� �� ����������, ������� ��� ����� � �����<font color=red>*</font>:<br>
<select size='1' name='class'>
<option disabled>�����...</option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
<option value='11'>11</option>
</select>
	
<select size='1' name='letter'>
<option disabled>�����...</option>
<option value='�'>�</option>
<option value='�'>�</option>
<option value='�'>�</option>
<option value='�'>�</option>
<option value='�'>�</option>
</select>
</td>
<td>���� �� ��� ��������� �������� � �����, ������� ��� �������<font color=red>*</font>:<br>
<input type='text' name='end_year' size='4'></td></tr></table><br><br>

<h3>������</h3>
���� ������� �������� (����� �������, �� ����� 30 ��������):<br>
<input type='text' name='science' size='30' maxlength='30'><br><br>

������� ���������� � ����:<br>
<textarea name='about' rows=5 cols=50></textarea><br><br>

������ ����������, ���������� ��� �����:<br> 
<textarea name='other' rows=3 cols=50></textarea><br><br>

<label><input name='Submit' type=submit value='��������� ������'></label>
</form>
<br><br>	
<b>����������: ����, ���������� ������ <font color=red>*</font>, ����������� � ����������!</b>";
}
else echo "�� ������ ����������������!";
?>
</table>
</table>