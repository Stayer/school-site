<td id="news" align="left" valign="top" rowspan="2">
<table width="640" cellpadding="0" cellspacing="0">
<tr><td colspan="2" class="topbr"></td></tr>
<tr class="newstitletr"><td class="title"> ������� </td></tr>
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
<tr><td><p><h2><? echo $result[title] ?></h2>(� ������� <?=$result['img_count'] ?> ����������)</p></td><td width=20%><a href=?s=photos>��� �������</a></td></tr>
<tr><td><?=$result[text]; ?></td></tr>
<tr><td>
<br>
<? for ($i=1; $i<=$result['img_count']; $i++)
{echo "<a class='highslide' href="; echo $site_url; echo"images/albums/$result[folder]/$i.jpg onclick='return hs.expand(this)'> <img src="; echo $site_url; echo"images/albums/$result[folder]/$i.jpg alt='' width=11% height=11%/></a>&nbsp";}?>
</tr></td>
</table>
<? } 
	else {
	$result=dbquery("SELECT * FROM site_albums order by id desc") or die("eror");
echo "<table width=100%><TH><tr><td widh=70%>�������� ������� </td><td width=10% align=center>���-�� ����</td><td width=20% align=center>�������</td></tr></TH>";
        if (dbrows($result) != 0)
            {
		while ($data=dbarray($result))
                {
                echo "<tr>
    		<td width=60%><a href= './?s=photos&album=$data[id]'>$data[title]</a> </td><td width=10% align=center> $data[img_count] </td><td width=30% align=center><a class='highslide' href="; echo $site_url; echo"images/albums/$data[folder]/1.jpg onclick='return hs.expand(this)'><img src="; echo $site_url; echo"images/albums/$data[folder]/1.jpg alt='' width=70% height=70%/></a></td></tr>";
                }
}
}
echo "</table>";
?>

</table>