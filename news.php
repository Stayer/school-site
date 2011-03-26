<td id="news" align="left" valign="top" rowspan="2">
<table width="640" cellpadding="0" cellspacing="0">
<tr><td colspan="2" class="topbr"></td></tr>
<tr class="newstitletr"><td class="title"> Новости </td></tr>
<tr><td colspan="2" class="newsborder"></td></tr>
<tr><td colspan="2" class="newstop"></td></tr>
<tr><td class="text" colspan="2">
<table width = '100%' cellspacing = '0' cellpadding = '0' border = '0' class = "tbl">

<?error_reporting(0); if (!isset($_GET['id'])&&!isset($_GET['do'])){ 
if($cp_login){echo "<td width=90% align=right><a href=./?s=news&do=addnews>[Добавить новость]</a></td>";}
        echo "<table width=100% align=center border=0 cellspacing='4' cellpadding='0'>";
        switchConnection(1, "realmd");
        $result=dbquery("SELECT * FROM site_news order by id desc limit $news_count") or die("eror");

        if (dbrows($result) != 0)
            {
            while ($data=dbarray($result))
                {
                echo "<tr>
    <td><p><b><a href= '".$site_url."?s=news&id=$data[id]'> $data[title] </a></b></p>$data[short_text]</td>
    </tr>
		<tr>
    <td align=right><font size='1'>Размещено: $data[date] от <b>$data[name]</b></font></td>
    </tr>";
                }
            }
        else echo "<tr>
    <td colspan=2 align=center>Нет новостей</td>
    </tr>
    </table>";

} elseif (isset($_GET['id'])) {
$id = $_GET['id'];
	switchConnection(1, "realmd");
	$result=dbquery("SELECT * FROM site_news where id=$id") or die("eror");
	$result=dbarray($result);?>
<h2> <? echo $result[title] ?></h2>
<p><table width=85%><tr><td width=80%>Дата: <? echo $result[date] ?></td><td>От кого: <? echo $result[name] ?></td></tr></table></p><br><br>
<table width=95%><?echo $result[full_text] ?></table>
<br><br>
<a href="javascript:scroll(0,0)">вверх</a>
</table>
<? }
elseif (isset($_GET['do=addnews'])) include "engine/addnews.php";
?>
</table>
</table>