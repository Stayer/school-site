    <td id="news" align="left" valign="top" rowspan="2">


  <table width="640" cellpadding="0" cellspacing="0">
  


  <tr><td colspan="2" class="topbr"></td></tr>
  <tr class="newstitletr"><td class="title"><img src="templates/<?echo $cp_template ?>/images/strel.jpg" alt="" />
  &nbsp; Изменение пароля </td><td align="right" class="date"></td></tr>
  <tr><td colspan="2" class="newsborder"></td></tr>
  <tr><td colspan="2" class="newstop"></td></tr>
  <tr><td class="text" colspan="2">
<?error_reporting(0); if (isset($_POST['old'])&&isset($_POST['new'])&&isset($_POST['new2']))  {
    switchConnection(1,"realmd");
    	$result = dbquery("SELECT * FROM account WHERE id='$ac_id' limit 1");
      $data = dbarray($result);
    $user_pass=sha1(strtoupper($data['username']).":".strtoupper($_POST['old']));


	$result = dbquery("SELECT * FROM account WHERE username='$data[username]' AND sha_pass_hash='$user_pass'");
  	if (dbrows($result) != 0) {
     if(strlen($_POST['new'])>=6){
       if($_POST['new']==$_POST['new2']){
             $new=sha1(strtoupper($data['username']).":".strtoupper($_POST['new2']));
            dbquery("UPDATE account SET sha_pass_hash='$new',v=0, s=0 WHERE id='$ac_id' limit 1");

            $value="Смена пароля аккаунта.";
         history($value,$ac_id);
           echo'<h2>Смена пароля</h2>
	<p></p><div class="other_message">Пароль успешно изменен</div>
';

                             }else echo'<h2>Сообщение об ошибке</h2>
	<p></p><div class="other_message">Новые пароли не совпадают</div>';

                        }else echo'<h2>Сообщение об ошибке</h2>
	<p></p><div class="other_message">Новый пароль должен быть больше 6 символов</div>
';

                        }else echo'<h2>Сообщение об ошибке</h2>
	<p></p><div class="other_message">Текущий пароль введен неверно</div>
';

                        }else echo'<h2>Смена пароля</h2>';
 echo'
	<p>Для того чтобы изменить пароль вашего аккаунта, заполните форму ниже. Введите текущий пароль, новый пароль и нажмите кнопку "Изменить пароль".</p>
	<p><form name="newpass" method="post">
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl" align="center">
             <tr>
               <td align="right">Текущий пароль:</td>
               <td><input name="old" type="password" class="inp" size="15" style="width: 165px;"></td>
             </tr>
             <tr>
               <td align="right">Новый пароль:</td>
               <td><input name="new" type="password" class="inp" size="15" style="width: 165px;"></td>
             </tr>
             <tr>
               <td align="right">Новый пароль:</td>
               <td><input name="new2" type="password" class="inp" size="15" style="width: 165px;"></td>
             </tr>
             <tr>
               <td></td>
               <td align="left"><label>
                 <input type="submit" class="submit" value="Изменить пароль" alt="Изменить пароль" title="Изменить пароль" style="width: 175px;">
               </label></td>
             </tr>
           </table>
	</form></p>';
