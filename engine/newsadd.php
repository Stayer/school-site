<br><p align=center><hr width=100% ></p>
<form action='process.php' method='post'>
<table>
<tr>
<td>��������� �������</td>
<td><input name='title' size=53></td>
</tr>
<tr>
<td>����� ����� �������</td>
<td><textarea cols=41 rows=10 name='text'></textarea></td>
</tr>
</table>
<br>
<input type='submit' value='��������� �������'></form>
<?
       $query= "SELECT * FROM site_teach_blog WHERE teach_id=$t order by id desc limit $news_count";
       $result1= dbquery($query);
?>
