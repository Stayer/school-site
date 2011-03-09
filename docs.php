  <td id="news" align="left" valign="top" rowspan="2">
  <table width="640" cellpadding="0" cellspacing="0">
  <tr><td colspan="2" class="topbr"></td></tr>
  <tr class="newstitletr"><td class="title">Нормативные документы </td></tr>
  <tr><td colspan="2" class="newsborder"></td></tr>
  <tr><td colspan="2" class="newstop"></td></tr>
  <tr><td bgcolor=white colspan="2">
             <table width = '98%' cellspacing = '0' cellpadding = '0' border = '0' class = "tbl" align=center >
    <?
     if ($_GET['id']=='nsot')include "./docs/nsot.htm";
elseif ($_GET['id']=='npf')include "./docs/npf.htm";
elseif ($_GET['id']=='soko_kriterii')include "./docs/soko_kriterii.htm";
elseif ($_GET['id']=='spravkakpmo')include "./docs/spravkakpmo.htm";
elseif ($_GET['id']=='prikaz373')include "./docs/prikaz373.htm";
elseif ($_GET['id']=='sovetuchrejdeniya')include "./docs/sovetuchrejdeniya.htm";
?>
<br><br>&nbsp&nbsp&nbsp&nbsp<A HREF="javascript:history.back()" onMouseOver="window.status='Назад';return true">Назад</A>&nbsp&nbsp&nbsp&nbsp&nbsp<a href="javascript:scroll(0,0)">Вверх</a>&nbsp&nbsp&nbsp
<?
     if ($_GET['id']=='nsot') echo "<a href=./docs/nsot.doc>Скачать</a>";
elseif ($_GET['id']=='npf') echo "<a href=./docs/npf.doc>Скачать</a>";
elseif ($_GET['id']=='soko_kriterii') echo "<a href=./docs/soko_kriterii.doc>Скачать</a>";
elseif ($_GET['id']=='spravkakpmo') echo "<a href=./docs/spravkakpmo.doc>Скачать</a>";
elseif ($_GET['id']=='prikaz373') echo "<a href=./docs/prikaz373.doc>Скачать</a>";
elseif ($_GET['id']=='sovetuchrejdeniya') echo "<a href=./docs/sovetuchrejdeniya.doc>Скачать</a>";
?>
<br>
</table>
</table>