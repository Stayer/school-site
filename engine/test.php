<?
include "../core.php";
if (isset($_POST['title'])&&isset($_POST['short_text'])&&isset($_POST['full_text'])){
switchConnection(1,"realmd");
$result=dbquery("SELECT name, secondname FROM site_teach_profile WHERE id=1");
$result=dbarray($result);
dbquery("INSERT INTO site_news SET title=$_POST['title'], short_text=$_POST['short_text'], full_text=$_POST['full_text']  ");
}
echo "<b><i><h2><p align = left>Добавление новости</p></h2></i></b>";
echo "
<form name='addnews' method='post'>
Заголовок новости:<br>
<input type='text' name='title' size='58'><br><br>
Короткий текст новости (для отображения на главной сайта)<red>*</red>:<br>
<textarea name='full_text' rows=3 cols=50></textarea><br><br>
Полный текст новости:<br> 
<textarea name='full_text' rows=10 cols=50>LOL</textarea><br><br>
Выберите тип новости:<br><br>
<table>
<tr><td width 50%>
<input type=radio name=type value '1'  CHECKED>Объявления от администрации<br>
<input type=radio name=type value '2'>Праздники<br>
<input type=radio name=type value '4'>События в школе<br>
<input type=radio name=type value '8'>Ученикам<br></td>
<td>
<input type=radio name=type value '16'>Родителям<br>
<input type=radio name=type value '32'>Спорт<br>
<input type=radio name=type value '64'>Отдых<br>
<input type=radio name=type value '128'>Прочее<br>
</td></tr></table>
<input name='Submit' type=submit value='Отправить данные'>
</form>";
?>