<?
if($cp_login) {
if (isset($_POST['title'])&&isset($_POST['short_text'])&&isset($_POST['full_text'])){
switchConnection(1,"realmd");
// $result=dbquery("SELECT name, secondname FROM site_teach_profile WHERE id=1");
// $result=dbarray($result);
dbquery("INSERT INTO site_news (title, short_text, full_text, type) VALUES ('$_POST[title]', '$_POST[short_text]', '$_POST[full_text]', '$category') ");
echo "Новость успешно добавлена!";
}
echo "<b><h2><font color=#01b2f1><p align = left>Добавление новости</p></font></h2></b>";
echo "
<form name='newsadd' method='post' enctype='multipart/form-data'>
Заголовок новости<font color=red>*</font>:<br>
<input type='text' name='title' size='58'><br><br>
Короткий текст новости (для отображения на главной сайта)<font color=red>*</font>:<br>
<textarea name='short_text' rows=3 cols=50></textarea><br><br>
Полный текст новости<font color=red>*</font>:<br> 
<textarea name='full_text' rows=10 cols=50></textarea><br><br>
Выберите тип новости<font color=red>*</font>:<br><br>
<table>
<tr><td width 50%>
<input type=radio name='category' value=1  CHECKED>Объявления от администрации<br>
<input type=radio name='category' value=2>Праздники<br>
<input type=radio name='category' value=4>События в школе<br>
<input type=radio name='category' value=8>Ученикам<br></td>
<td>
<input type=radio name='category' value=16>Родителям<br>
<input type=radio name='category' value=32>Спорт<br>
<input type=radio name='category' value=64>Отдых<br>
<input type=radio name='category' value=128>Прочее<br>
</td></tr></table><br><br>
<label><input name='Submit' type=submit value='Отправить данные'></label>
</form>
<br><br>	
<b>Примечание: поля, отмеченные знаком <font color=red>*</font>, обязательны к заполнению!</b>";
}
else echo "Вы должны авторизироваться!";

?>