<td id="news" align="left" valign="top" rowspan="2">
<table width="640" cellpadding="0" cellspacing="0">
<tr><td colspan="2" class="topbr"></td></tr>
<tr class="newstitletr"><td class="title">������� </td></tr>
<tr><td colspan="2" class="newsborder"></td></tr>
<tr><td colspan="2" class="newstop"></td></tr>
<tr><td class="text" colspan="2">
<?error_reporting(0);?>
<table width = '100%' cellspacing = '0' cellpadding = '0' border = '0' class = "tbl">
<tr><td>
                <p>�� ���� �������������� ��� �� ����� ������ ����� �7!</p>
                    <p><b>���������</b>
�� ��� ��������� � ����������. ����� ������� ���������</p>
                    <p><b>� �����</b><br>
                    �������. ����� � �������<br>
��������� - � ���� � ������!<br><br>
</td></tr>
<tr width=100% align=center><td align=center>
<script src='js/slide.js' type='text/javascript' language='JavaScript'></script>
<font align=center><div id="rotator">
  <ul>
    <li class="show"><a href="/?s=news"><img src=<?=$site_url ?>images/index/news.jpg width="300" height="300"  alt="�������" /></a></li>
    <li><a href="/?s=teacher"><img src=<?=$site_url ?>images/index/teach.jpg width="300" height="300"  alt="�������" /></a></li>
  </ul>
</div>
</font>
</td></tr>
</table>
<p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p>
<h2><p align=left>�������</p></h2>
    <?
	echo "<table width=100% align=center border=0 cellspacing='4' cellpadding='0'>";
	switchConnection(1, "realmd");
	$result=dbquery("SELECT * FROM site_news order by id desc limit $news_count") or die("eror");
	if (dbrows($result) != 0)
	{
		while ($data=dbarray($result))
		{
		echo "<tr>
	<td><p><b><a href= '".$site_url."?s=news&id=$data[id]'> <font size=3px>$data[title]</font> </a></b></p>$data[short_text]</td></tr>
	<tr><td align=right><font size='1'>���������: $data[date] �� <b>$data[name]</b></font></td></tr>";
		}
	}
    ?>
</table>