<td id="news" align="left" valign="top" rowspan="2">
<table width="640" cellpadding="0" cellspacing="0">
<tr><td colspan="2" class="topbr"></td></tr>
<tr class="newstitletr"><td class="title"><img src="templates/<?echo $site_template ?>/images/strel.jpg" alt="" />&nbsp; Альбомы </td><td align="right" class="date"></td></tr>
<tr><td colspan="2" class="newsborder"></td></tr>
<tr><td colspan="2" class="newstop"></td></tr>
<tr><td class="text" colspan="2">
<?
	switchConnection(1, "realmd");
	if (isset($_GET['album'])) {
	$album = $_GET['album'];
	$result=dbquery("SELECT * FROM site_albums where id=$album") or die("eror");
	$result=dbarray($result);
?>

<table width = '95%' cellspacing = '0' cellpadding = '0' border = '0' class = "tbl">
<tr><td><p><h2><? echo $result[title] ?></h2>(В альбоме <?=$result['img_count'] ?> фотографий)</p></td><td width=20%><a href=?s=photos>Все альбомы</a></td></tr>
<tr><td>
<br>
<? for ($i=1; $i<=$result['img_count']; $i++)
{echo "<a class='highslide' href="; echo $site_url; echo"images/albums/$result[folder]/$i.jpg onclick='return hs.expand(this)'> <img src="; echo $site_url; echo"images/albums/$result[folder]/$i.jpg alt='' width=11% height=11%/></a>&nbsp";}?>
</tr></td>
</table>
<? } 
	else {
	$result=dbquery("SELECT * FROM site_albums order by id desc") or die("eror");
echo "<table width=100%><TH><tr><td widh=70%>Название альбома </td><td width=10% align=center>Кол-во фото</td><td width=20% align=center>Обложка</td></tr></TH>";
        if (dbrows($result) != 0)
            {
		while ($data=dbarray($result))
                {
                echo "<tr>
    		<td width=70%><a href= './?s=photos&album=$data[id]'>$data[title]</a> </td><td width=10% align=center> $data[img_count] </td><td width=20% align=center><a class='highslide' href="; echo $site_url; echo"images/albums/$data[folder]/1.jpg onclick='return hs.expand(this)'><img src="; echo $site_url; echo"images/albums/$data[folder]/1.jpg alt='' width=50% height=50%/></a></td></tr>";
                }
}
}
echo "</table>";
?>

</table>