<td id="news" align="left" valign="top" rowspan="2">
<table width="640" cellpadding="0" cellspacing="0">
<tr><td colspan="2" class="topbr"></td></tr>
<tr class="newstitletr"><td class="title">Ученики </td></tr>
<tr><td colspan="2" class="newsborder"></td></tr>
<tr><td colspan="2" class="newstop"></td></tr>
<tr><td class="text" colspan="2">
<table width = '100%' cellspacing = '0' cellpadding = '0' border = '0' class = "tbl">
<?
	switchConnection(1, "realmd");
if (!isset($_GET['p'])) {
echo "<p align=center>Список учеников, зарегистрированных на сайте. Находите друг друга и общайтесь!</p></br></br>";
	$result=dbquery("SELECT * FROM site_pupil_profile order by level desc, secondname asc") or die("eror");
echo "<table width=90% align=center><tr><td width=35%><h2>Фамилия Имя</h2></td><td width=30%><h2>Класс</h2></td></tr><tr><td width=35%></td><td width=30%></td></tr>";
        if (dbrows($result) != 0)
            {
while ($data=dbarray($result))
                {
                echo "<tr>
    <td width=35%>"; if ($data['level']>0) {echo "<a href= './?s=pupil&p=$data[id]'>$data[secondname] $data[name] </a>";}  else {echo "$data[secondname] $data[name] ";} echo "</td><td width=30%> $data[science] </td><td width=10%></td>
    </tr>";
                }
}
echo "</table>";
}
else {	
        $t = $_GET['p'];
        $query= "SELECT * FROM site_pupil_profile WHERE id=$t";
        $result= dbquery($query);
        $result= dbarray($result);
if (isset($result['id'])){
        include "./engine/profile_p.php";
if ($result[blog_enable]=1) {
        include "./engine/blog.php";
}
}
else echo "Такой страницы не существует!";
	}
 ?>
<br><br />

<A HREF="javascript:history.back()" onMouseOver="window.status='Назад';return true">Назад</A>
                </table>
    </table>