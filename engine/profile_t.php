<table width=95% ><tr>
<td width=65% valign=top><br><h4>Профиль</h4><ol> <?=$result[secondname], " ", $result[name], " ", $result[thirdname]  ?></ol>
<? if (isset($result[letter])) echo "<br>Классный руководитель: $result[class] $result[letter]"; ?>
<h4>Основной предмет</h4> <ol><?=$result[science] ?></ol>
<h4>Контактная информация</h4>
<ol>
<?
if (isset($result[email])) echo "E-mail: $result[email]";
if (isset($result[icq])) echo "<br>ICQ: $result[icq]";
if (isset($result[site])) echo "<br>Сайт: <a href='$result[site]'>$result[site]</a>";
?>
</ol>
<h4>Прочая информация</h4> <ol><?=$result[other] ?></ol>
</td>
<td><p align=right><a href=<? echo $site_url ?>images/profiles/<? echo $result[image] ?> onclick="return hs.expand(this)"><img src=<? echo $site_url ?>images/profiles/<? echo $result[image] ?> width=100% height=100%></a> </p></td></tr></table>
<table width=95%>
<tr width=100%><td>
<h4>О себе</h4> <?=$result[about] ?>
</td></tr></table>