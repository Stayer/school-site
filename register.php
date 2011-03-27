<? include "config.php"; ?>
<td id="news" align="left" valign="top" rowspan="2">
<table width="640" cellpadding="0" cellspacing="0">
<tr><td colspan="2" class="topbr"></td></tr>
<tr class="newstitletr"><td class="title">Регистрация на сайте лицея </td>
<tr><td colspan="2" class="newsborder"></td></tr>
<tr><td colspan="2" class="newstop"></td></tr>
<tr><td class="text" colspan="2">
<p>
<?  if(isset($_POST['submit'])&&$site_register){
    $name =false;
    $pas  =false;
    $mail =false;
    $capt =false;
   switchConnection("1","realmd");
    //проверяем имя
    if ($_POST['login'] == "")
        $error="Необходимо ввести Логин";
    else
        {
        $username=stripinput(trim(eregi_replace(" +", " ", $_POST['login'])));
        if (!preg_match("/^[0-9A-Z@]{6,20}$/i", $username))
            $error="Необходимо ввести корректный Логин не меньше 6 символов";
        else{
            $result=dbquery("SELECT * FROM account WHERE username='$username'");
            if (dbrows($result) != 0)$error="Пользователь с таким логином уже зарегистрирован";
            else $name=true;
            }
        }
       ////////////////////
         //проверяем пароль
    if ($_POST['pass2'] == "")
        $error="Необходимо подтвердить Пароль";
    else
        {
        $password1=stripinput(trim(eregi_replace(" +", "", $_POST['pass'])));
        if (preg_match("/^[0-9A-Z@]{6,20}$/i", $password1))
            {
            if ($password1 != $_POST['pass2'])
                $error="Пароли не совпадают";
            else $pas=true;
            }
        else
            {
            $error="Необходимо ввести корректный пароль не меньше 6 символов ";
            }
        }

    ////////////////////
       //проверяем почту
    if ($_POST['email'] == "")
        $error="Необходимо ввести E-Mail";
    else
        {
        $email=stripinput(trim(eregi_replace(" +", "", $_POST['email'])));

        if (!preg_match("/^[-0-9A-Z_\.]{1,50}@([-0-9A-Z_\.]+\.){1,50}([0-9A-Z]){2,4}$/i", $email))
            {
            $error="Необходимо ввести корректный E-Mail";
            }
        else
            {
            $result=dbquery("SELECT * FROM account WHERE email='$email'");

            if (dbrows($result) != 0)
                $error="Данный E-Mail уже зарегистрирован";
            else $mail =true;

            }
        }

    ///////////////////////
       //Проверяем капчу
    if (empty($_POST['captcha']) or empty($_SESSION['captcha']))
        {
        $error="Не указан проверочный код";
        }
    elseif ($_POST['captcha'] == $_SESSION['captcha'])
        {$capt=true;}
    else
        $error="Проверочный код не верен";

    //

      //проверяем правила
    if ($_POST['Checkrule'] == "")
        $error="Необходимо ознакомиться с правилами";
    else
        $rules=true;
      //
      
     //регистрируем
    if ($name && $pas && $mail && $capt && $rules){
    
     $pass=sha1(strtoupper($_POST['login']) . ":" . strtoupper($_POST['pass']));
     $result=dbquery("INSERT INTO `account` (`username` , `sha_pass_hash` ,`email`, `expansion`)VALUES
     ('".strtoupper($_POST[login])."', '$pass', '$_POST[email]', '$expansion');");
     $result1=dbquery("SELECT `id` FROM `account` WHERE `username`='$_POST[login]'");
     $result1=dbarray($result1);
     dbquery("INSERT INTO `site_pupil_profile` (`id`, `name`, `email`) VALUES ($result1['id'], '$_POST[login]', '$_POST[email]')");

      if ($result){
       $error="Вы успешно зарегистрированы под логином  <strong>$_POST[login]</strong>! <a href='".$site_url."index.php'>Войти</a> на сайт";
            }else $error="Ошибка!";
                                         }
                                 }
    echo '<form method="post" action=""><p><span class=red><b>'.$error.'</b></span></p>
    <table border="0" cellpadding="0" cellspacing="0" class="tbl">
             <tr>
               <td align="right">Логин:</td>
               <td><input name="login" id="login" type="text" class="inp" value="'.$_POST['login'].'" size="15" style="width: 165px;"></td>
             </tr>
             <tr>
               <td align="right">Пароль:</td>
               <td><input name="pass" id="pass" type="password" class="inp" size="15" style="width: 165px;"></td>
             </tr>
              <tr>
               <td align="right">Пароль ещё раз:</td>
               <td><input name="pass2" id="pass2" type="password" class="inp" size="15" style="width: 165px;"></td>
             </tr>
             <tr>
               <td align="right">E-mail:</td>
               <td><input name="email" id="email" type="text" class="inp" value="'.$_POST['email'].'" size="15" style="width: 165px;"></td>
             </tr>
             <tr>
             	<td colspan="2" align="right"><img src="captcha.php?a=image" height=43></td>
             </tr>
             <tr>
               <td align="right">Проверочный код:</td>
               <td><input name="captcha" id="captcha" type="text" class="inp" size="15" style="width: 165px;"></td>
             </tr>

             <tr>
              <td align="left" class="style">С <a href="'.$rules_url.'">правилами</a> ознакомлен (а)</td>
              <td align="left"><input type="Checkbox" name="Checkrule" class="inp"/></td>
              </tr>
             <tr>
               <td colspan="2" align="right"><label>
                <input type="submit" class="submit" name="submit" style="width: 120px;" alt="Зарегистрировать" title="Зарегистрировать" value="Зарегистрировать" >
               </label></td>
             </tr>
           </table></form>';
  ?>
  </p>
</div>