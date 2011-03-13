<td id="news" align="left" valign="top" rowspan="2">
<table width="640" cellpadding="0" cellspacing="0">
<tr><td colspan="2" class="topbr"></td></tr>
<tr class="newstitletr"><td class="title">Главная </td></tr>
<tr><td colspan="2" class="newsborder"></td></tr>
<tr><td colspan="2" class="newstop"></td></tr>
<tr><td class="text" colspan="2">
<?error_reporting(0);?>
<table width = '100%' cellspacing = '0' cellpadding = '0' border = '0' class = "tbl">
<tr><td> <p><h2>Мы рады приветствовать Вас на сайте нашего лицея №7!</h2></p><br></td></tr>
<tr><td><h2><p align=left>Новости</p></h2>
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
	<tr><td align=right><font size='1'>Размещено: $data[date] от <b>$data[name]</b></font></td></tr>";
		}
	}
    ?>
</td></tr></table>
<br><br><br><br>
<tr><td><h3>Основная информация</h3></td></tr>
<tr><td><p>
Директор: <a href=http://localhost:1010/index.php?s=teacher&t=1 >Мануйлова Ирина Викторовна</a><br>
Статус: Муниципальная Общеобразовательная Школа-Интернат "Лицей-интернат №7 г.Бердска"<br>
<ul>
<li>Педагогический коллектив-72, из них администрация - 6;</li>
<li>воспитатели, педагоги дополнительного образования-19,</li>
<li>учителя-46, в т.ч. учителя высшей квалификационной  категории-20 ,первой - 15 , </li>
<li>молодые специалисты-2;</li>
<li>Награждены грамотами Министерства образования и науки – 5;</li>
<li>Звание «Отличник народного образования» - 2;</li>
<li>«Почетный работник общего образования»- 2;</li>
<li>«Почетный работник профессионального образования» - 1 </li>
</ul>
</p>
</td></tr></table>
<table>
<tr><td width=33%>Структура классов по  образовательным учереждениям</td><td width=33%></td><td width=33%>Кадровое обеспечение</td></tr>
<tr>
<td width=33%><a href=<? echo $site_url ?>images/index/1.png onclick="return hs.expand(this)"><img src=<? echo $site_url ?>images/index/1.png width=189 height=252></a></td>
<td width=33%><a href=<? echo $site_url ?>images/index/2.png onclick="return hs.expand(this)"><img src=<? echo $site_url ?>images/index/2.png width=189 height=252></a></td>
<td width=33%><a href=<? echo $site_url ?>images/index/3.png onclick="return hs.expand(this)"><img src=<? echo $site_url ?>images/index/3.png width=189 height=252></a></td>
</tr></table>
<table>
<tr><td>
<br>
Наш адрес: Новосибирская область, г.Бердск улица Ленина, 104.  <a href="http://maps.yandex.ru/?text=%D0%9B%D0%B8%D1%86%D0%B5%D0%B9%207%20%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%BD%D0%B0%D1%82&amp;where&amp;sll=82.921597%2C55.02991&amp;sspn=0.946884%2C0.33802&amp;ll=82.897814%2C55.037832&amp;spn=0.014795%2C0.00528&amp;results=20&amp;ol=biz&amp;oid=1103778224&amp;z=17&amp;l=map">Посмотреть на Яндекс.Картах</a>,   <a href=http://maps.google.ru/maps?f=q&source=s_q&hl=ru&geocode=&q=%D0%BB%D0%B8%D1%86%D0%B5%D0%B9+%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%BD%D0%B0%D1%82+7+%D0%B1%D0%B5%D1%80%D0%B4%D1%81%D0%BA&aq=&sll=55.354135,40.297852&sspn=42.638363,114.169922&ie=UTF8&hq=%D0%BB%D0%B8%D1%86%D0%B5%D0%B9+%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%BD%D0%B0%D1%82+7&hnear=%D0%B3%D0%BE%D1%80%D0%BE%D0%B4+%D0%91%D0%B5%D1%80%D0%B4%D1%81%D0%BA,+%D0%9D%D0%BE%D0%B2%D0%BE%D1%81%D0%B8%D0%B1%D0%B8%D1%80%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C&ll=54.756542,83.114297&spn=0.005176,0.013937&t=h&z=17>Искать на Google.Maps</a>
<br> Телефон: (8-38341) 5-00-22, (8-38341) 5-36-13
<br> E-mail: <a href=mailto:bsk_sh07@mail.ru>bsk_sh07@mail.ru</a>
<br><br>
</td></tr>
<tr width=100% align=center><td align=center>
<script src='js/slide.js' type='text/javascript' language='JavaScript'></script>
<div id="rotator">
  <ul>
    <li class="show"><a href="/?s=news"><img src=<?=$site_url ?>images/index/news.jpg width="300" height="300"  alt="Новости" /></a></li>
    <li><a href="/?s=teacher"><img src=<?=$site_url ?>images/index/teach.jpg width="300" height="300"  alt="Учителя" /></a></li>
  </ul>
</div>
</td></tr>
<tr><td><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p></td></tr>
</table>
</table>