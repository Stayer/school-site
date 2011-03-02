<td id="news" align="left" valign="top" rowspan="2">
<table width="640" cellpadding="0" cellspacing="0">
<tr><td colspan="2" class="topbr"></td></tr>
<?
	$album = $_GET['album'];
	switchConnection(1, "realmd");
	$result=dbquery("SELECT * FROM site_albums where id=$album") or die("eror");
	$result=dbarray($result);
?>
<tr class="newstitletr"><td class="title"><img src="templates/<?echo $site_template ?>/images/strel.jpg" alt="" />&nbsp; Àכüבמל - <? echo $result[title] ?> </td><td align="right" class="date"></td></tr>
<tr><td colspan="2" class="newsborder"></td></tr>
<tr><td colspan="2" class="newstop"></td></tr>
<tr><td class="text" colspan="2">
<table width = '100%' cellspacing = '0' cellpadding = '0' border = '0' class = "tbl">
<tr><td><p><h2><? echo $result[title] ?></h2>(Â אכüבמלו <?=$result['img_count'] ?> פמעמדנאפטי)</p></td><td width=20%><a href=?s=photos>Âסו אכüבמלû</a></td></tr>
<table width=95% align=center>
<br>
<? for ($i=1; $i<=$result['img_count']; $i++)
{echo "<a class='highslide' href="; echo $site_url; echo"images/albums/$result[folder]/$i.jpg onclick='return hs.expand(this)'> <img src="; echo $site_url; echo"images/albums/$result[folder]/$i.jpg alt='' width=10% height=10%/></a>&nbsp";}?>
</table>
</table>
</table>