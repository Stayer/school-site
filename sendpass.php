<?error_reporting(0);include "templates/$cp_template/top.php"?>
<td id="news" align="left" valign="top" rowspan="2">


  <table width="640" cellpadding="0" cellspacing="0">
  


  <tr><td colspan="2" class="topbr"></td></tr>
  <tr class="newstitletr"><td class="title"><img src="templates/imperial/images/strel.jpg" alt="" />
  &nbsp; Напоминание пароля </td><td align="right" class="date"></td></tr>
  <tr><td colspan="2" class="newsborder"></td></tr>
  <tr><td colspan="2" class="newstop"></td></tr>
  <tr><td class="text" colspan="2">
    <table width = "100%">
<? if (isset($_POST['username']))  {
    $username=strip_tags(trim($_POST['username']));
    switchConnection(1,"realmd");
    	$result = dbquery("SELECT email,id FROM account WHERE username='$username' limit 1");
      	if (dbrows($result) != 0) {
           $data = dbarray($result);
            if ($data['email']!="") {
                   $new_pass=rand(111111,999999);
                   $user_code=base64_encode(sha1(strtoupper($username).":".$new_pass));
                   $result=dbquery("INSERT INTO `cp_sendpass` (`acid` , `code`)VALUES ('$data[id]', '$user_code')");
                   if($result)send_mail(''.$username.'',''.$data['email'].'',$new_pass,$user_code);
                   echo'<p></p>Письмо успешно отправлено на электронную почту, указанную при регистрации данного аккаунта.<br><br></p>';


                            }else echo'
	<p></p><div class="other_message">Текущий адрес электронной почты введен неверно</div>
';
   
   
                             }else echo'
   <p></p><div class="other_message">Данный аккаунт не существует</div>
';

                                 }
    if (isset($_GET['code']))  {
       switchConnection(1,"realmd");
    	$result = dbquery("SELECT * FROM cp_sendpass WHERE code='$_GET[code]' and `activ`='0' limit 1");
       if (dbrows($result) != 0) {
             $data = dbarray($result);
                        dbquery("UPDATE `cp_sendpass` SET `activ` = '1' WHERE `id` ='$data[id]' LIMIT 1 ");
                        $new_pass=base64_decode($data['code']);
                        $resul =dbquery("UPDATE `account` SET `sha_pass_hash` = '$new_pass' ,v=0, s=0 WHERE `id` ='$data[acid]' LIMIT 1 ");
                         if($resul)echo'
	<p></p><div class="other_message">Пароль успешно изменён.</div>
';
                                 }else echo'<h2>Сообщение об ошибке</h2>
   <p></p><div class="other_message">Чтож ты сцука делаеш!</div>
';
                                    }
                                 
 echo'	<form name="sendpass" method="post">
		<table border="0" cellpadding="0" cellspacing="0" class="tbl">
             <tr>
               <td align="right">Имя аккаунта:</td>
               <td><input name="username" type="text" class="inp" size="15" style="width: 165px;"></td>
             </tr>
             <tr>
               <td colspan="2" align="right"><label>
                 <input type="submit" class="submit" value="Напомнить пароль" alt="Напомнить пароль" title="Напомнить пароль" style="width: 175px;">
               </label></td>
             </tr>
           </table>
	</form></p>
';
?>
<P></P></DIV>
