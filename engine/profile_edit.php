<td id="news" align="left" valign="top" rowspan="2">
<table width="640" cellpadding="0" cellspacing="0">
<tr><td colspan="2" class="topbr"></td></tr>
<tr class="newstitletr"><td class="title">Мой профиль </td></tr>
<tr><td colspan="2" class="newsborder"></td></tr>
<tr><td colspan="2" class="newstop"></td></tr>
<tr><td class="text" colspan="2">
<table width = '100%' cellspacing = '0' cellpadding = '0' border = '0' class = "tbl">
<?
if($cp_login&&$level==1) {
if (isset($_POST['name'])&&isset($_POST['secondname'])&&$_POST['birth']!='пример:1994-03-08'){
switchConnection(1,"realmd");
if ($activ) {
$query="UPDATE site_pupil_profile SET name='$_POST[name]', secondname='$_POST[secondname]', birth='$_POST[birth]', site='$_POST[site]', icq='$_POST[icq]', email='$_POST[email]', learn='$_POST[learn]', class='$class', letter='$_POST[letter]', end_year='$end_year', science='$_POST[science]', about='$_POST[about]', other='$_POST[other]', level='1' WHERE id=$ac_id";}
else  {$query="INSERT INTO site_pupil_profile (id, name, secondname, birth, site, icq, email, learn, class, letter, end_year, science, about, other, level) VALUES ($ac_id, '$_POST[name]', '$_POST[secondname]', '$_POST[birth]', '$_POST[site]', $_POST[icq], '$_POST[email]', '$_POST[learn]', '$_POST[class]', '$_POST[letter]', '$_POST[end_year]', '$_POST[science]', '$_POST[about]', '$_POST[other]', 1)";}
$result=dbquery($query);
echo "Профиль успешно изменён!";}
echo "<b><h2><font color=#01b2f1><p align = left>Редактирование профиля</p></font></h2></b>";
echo "
<form name='newsadd' method='post' enctype='multipart/form-data'>
<h3>Основная информация</h3>
<table width=95%><tr>
<td width=30%>Имя:<font color=red>*</font>:<br>
<input type='text' name='name' size='20' maxlength='15'></td>
<td width=30%>Фамилия:<font color=red>*</font>:<br>
<input type='text' name='secondname' size='20' maxlength='20'></td>
<td width=30%>Дата рождения <br>(формат - гггг-мм-дд):<br>
<input type='text' name='birth' size='20' maxlength='10' value='пример:1994-03-08'></td></tr></table>

<h3>Контактная информация</h3>
<table width=95%><tr>
<td width=30%>Сайт:<br>
<input type='text' name='site' size='20' maxlength='60'></td>
<td width=30%>ICQ/Skype:<br>
<input type='text' name='icq' size='20' maxlength='20'></td>
<td width=30%>e-mail:<br>
<input type='text' name='email' size='20' maxlength='40'></td>
</tr></table>

<h3>Обучение</h3>
Ваш статус:<font color=red>*</font>:<br>
<input type=radio name='category' learn=1  CHECKED>Обучаюсь<br>
<input type=radio name='category' learn=0>Выпустился<br><br>

<table width=95%>
<tr><td width=50%>Если вы обучаетесь, укажите ваш класс и букву<font color=red>*</font>:<br>
<select size='1' name='class'>
<option disabled>Класс...</option>
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
<option disabled>Буква...</option>
<option value='а'>а</option>
<option value='б'>б</option>
<option value='в'>в</option>
<option value='г'>г</option>
<option value='д'>д</option>
</select>
</td>
<td>Если вы уже закончили обучение в лицее, укажите год выпуска<font color=red>*</font>:<br>
<input type='text' name='end_year' size='4'></td></tr></table><br><br>

<h3>Прочее</h3>
Ваши любимые предметы (через запятую, не более 30 символов):<br>
<input type='text' name='science' size='30' maxlength='30'><br><br>

Укажите информацию о себе:<br>
<textarea name='about' rows=5 cols=50></textarea><br><br>

Прочая информация, информация для связи:<br> 
<textarea name='other' rows=3 cols=50></textarea><br><br>

<label><input name='Submit' type=submit value='Отправить данные'></label>
</form>
<br><br>	
<b>Примечание: поля, отмеченные знаком <font color=red>*</font>, обязательны к заполнению!</b>";
}
else echo "Вы должны авторизироваться!";
?>
</table>
</table>