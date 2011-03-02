<table width=95%><tr>
<td width=50%>Профиль учителя - <?=$result[name], " ", $result[secondname] ?>
<br>Классный руководитель: <?=$result['class'], " ",$result[letter] ?>
<br>Основной предмет: <?=$result[science] ?>
<br>
<br>Контактная информация
<ol>
E-mail: <?=$result[email] ?>
 <br>ICQ: <?=$result[icq] ?> 
 <br>Сайт: <?=$result[site] ?></ol>
</td>
<td><p align=right><a href=<? echo $site_url ?>images/profiles/<? echo $result[image] ?> onclick="return hs.expand(this)"><img src=<? echo $site_url ?>images/profiles/<? echo $result[image] ?> width=189 height=252></a> </p></td></tr></table>
<table width=95%>
<tr width=100%><td>
<br>О себе: <?=$result[about] ?>
<br>Прочая информация: <?=$result[other] ?>
<br></td></tr></table>