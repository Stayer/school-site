<table width=95%><tr>
<td width=50%>������� ������� - <?=$result[name], " ", $result[secondname] ?>
<br>�������� ������������: <?=$result['class'], " ",$result[letter] ?>
<br>�������� �������: <?=$result[science] ?>
<br>
<br>���������� ����������
<ol>
E-mail: <?=$result[email] ?>
 <br>ICQ: <?=$result[icq] ?> 
 <br>����: <?=$result[site] ?></ol>
</td>
<td><p align=right><a href=<? echo $site_url ?>images/profiles/<? echo $result[image] ?> onclick="return hs.expand(this)"><img src=<? echo $site_url ?>images/profiles/<? echo $result[image] ?> width=189 height=252></a> </p></td></tr></table>
<table width=95%>
<tr width=100%><td>
<br>� ����: <?=$result[about] ?>
<br>������ ����������: <?=$result[other] ?>
<br></td></tr></table>