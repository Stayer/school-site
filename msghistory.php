<script type="text/javascript">
var fullmsgdivstate = 0;
function fullmsg(msgid) {
	var fullmsgdiv = document.getElementById('fullmsg');
	if (fullmsgdivstate != msgid) {
   document.getElementById('fullmsg').innerHTML = HttpRequest('engine/fullmsg.php?msgid=' + msgid);

  	fullmsgdivstate = msgid;
	} else {
		fullmsgdiv.innerHTML = '';
		fullmsgdivstate = 0;
	}
}
</script>
    <td id="news" align="left" valign="top" rowspan="2">


  <table width="640" cellpadding="0" cellspacing="0">
  


  <tr><td colspan="2" class="topbr"></td></tr>
  <tr class="newstitletr"><td class="title"><img src="templates/<?echo $cp_template ?>/images/strel.jpg" alt="" />
  &nbsp; История обращений к Администрации сервера </td><td align="right" class="date"></td></tr>
  <tr><td colspan="2" class="newsborder"></td></tr>
  <tr><td colspan="2" class="newstop"></td></tr>
  <tr><td class="text" colspan="2">
<?error_reporting(0);
echo'
<p>На этой странице вы можете отслеживать статус сообщений, которые вы отправили Администрации сервера. Как только сообщение будет прочитано одним из админов, статус обращения изменится и вы сможете прочитать ответ. Сообщения, на которые получен ответ, удаляются через 7 дней.</p>
<div id="fullmsg" style="padding-bottom: 25px;"></div>
<p><table width="100%" align="center" cellpadding="0" cellspacing="0">
<tr width="100%" height="24" class="tr">
<td align="center" width="10%">Номер</td>
<td align="center" width="30%">Дата</td>
<td align="center" width="20%">Тема</td>
<td align="center" width="20%">Ответил</td>
<td align="center" width="10%">Скриншот</td>
<td align="center" width="40%">Статус</td>
</tr>';
 switchConnection("1","realmd");
      $result=dbquery("SELECT * FROM `cp_admessage` WHERE `ac_id`='$ac_id'  ");
      if (dbrows($result)!=0){
      while ($data = dbarray($result)) {
$week = mktime ( 0 , 0 , 0 , date ( "m" ) , date ( "d" )-1 , date ( "Y" ));
if(strtotime($data[date])<$week && $data[n_answer]!=""){dbquery("DELETE FROM `cp_admessage` WHERE `id` = '$data[id]' LIMIT 1  ");}
if($data['screen']=="")$screen="Нет";else $screen="<a href=upload/".$ac_id."_".$data['screen'].">$data[screen]</a>";
if($data['answer']=="")$button="value=\"Пока нет ответа\""; else $button='onClick="fullmsg('.$data[id].')" value="Прочитать ответ"';
echo'<tr height="25">
<td align="center">ID#'.$data[id].'</td>
<td align="center">'.$data[date].'</td>
<td align="center">'.$local[$data[type]].'</td>
<td align="center">'.$data[n_answer].'</td>
<td align="center">'.$screen.'</td>
<td align="center"><input type="button" class="dissubmit" '.$button.' style="width: 175px;"></td>
</tr>';

          }   }else echo '<tr height="25"><td colspan=6 align="center">Нет сообщений</td></tr>';
echo'</table></p>';?>

