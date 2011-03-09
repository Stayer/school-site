    <td id="news" align="left" valign="top" rowspan="2">
  <table width="640" cellpadding="0" cellspacing="0"> 
  <tr><td colspan="2" class="topbr"></td></tr>
  <tr class="newstitletr"><td class="title">
  &nbsp; Изменение адреса электронной почты </td></tr>
  <tr><td colspan="2" class="newsborder"></td></tr>
  <tr><td colspan="2" class="newstop"></td></tr>
  <tr><td class="text" colspan="2">
<?error_reporting(0); if (isset($_POST['password'])&&isset($_POST['mail'])&&isset($_POST['newmail'])&&isset($_POST['renewmail']))  {
    switchConnection(1,"realmd");
    	$result = dbquery("SELECT * FROM account WHERE id='$ac_id' limit 1");
      $data = dbarray($result);
    $user_pass=sha1(strtoupper($data['username']).":".strtoupper($_POST['password']));

	$result = dbquery("SELECT * FROM account WHERE username='$data[username]' AND sha_pass_hash='$user_pass'");
  	if (dbrows($result) != 0) {
        if(strtolower($_POST['mail'])==strtolower($data['email'])){
     if(strlen($_POST['newmail'])>=5){
       if(strtolower($_POST['newmail'])==strtolower($_POST['renewmail'])){
            dbquery("UPDATE account SET email='$_POST[newmail]' WHERE id='$ac_id' limit 1");

            $value="Смена почты аккаунта.";
         history($value,$ac_id);
           echo'<div class="other_message">Адрес успешно изменен</div>
';

                             }else echo'<h2>Сообщение об ошибке</h2>
	<p></p><div class="other_message">Новые адреса не совпадают</div>';

                        }else echo'<h2>Сообщение об ошибке</h2>
	<p></p><div class="other_message">Адрес новой почты должен быть больше 5 символов</div>
';
                                        }else echo'<h2>Сообщение об ошибке</h2>
	<p></p><div class="other_message">Текущий адрес электронной почты введен неверно</div>
';
                        }else echo'<h2>Сообщение об ошибке</h2>
	<p></p><div class="other_message">Текущий пароль введен неверно</div>
';

                        }else echo'';
 echo'<p><h2>Смена почты</h2></p>
	<p>Для того чтобы изменить адрес электронной почты аккаунта, заполните эту форму. Введите текущий пароль, текущий и новый адреса электронной почты и нажмите кнопку "Изменить адрес".</p>
	<p><form name="newmail" method="post">
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl" align="center">
             <tr>
               <td align="right">Пароль:</td>
               <td><input name="password" type="password" class="inp" size="15" style="width: 165px;"></td>
             </tr>
             <tr>
               <td align="right">Текущий адрес эл. почты:</td>
               <td><input name="mail" type="text" class="inp" size="15" style="width: 165px;"></td>
             </tr>
             <tr>
               <td align="right">Новый адрес эл. почты:</td>
               <td><input name="newmail" type="text" class="inp" size="15" style="width: 165px;"></td>
             </tr>
             <tr>
               <td align="right">Новый адрес эл. почты:</td>
               <td><input name="renewmail" type="text" class="inp" size="15" style="width: 165px;"></td>
             </tr>
             <tr>
               <td></td>
               <td align="left"><label>
                 <input type="submit" class="submit" value="Изменить адрес" alt="Изменить адрес" title="Изменить адрес" style="width: 175px;">
               </label></td>
             </tr>
           </table>
	</form></p>';