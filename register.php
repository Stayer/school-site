<? include "config.php"; ?>
<td id="news" align="left" valign="top" rowspan="2">
<table width="640" cellpadding="0" cellspacing="0">
<tr><td colspan="2" class="topbr"></td></tr>
<tr class="newstitletr"><td class="title">����������� �� ����� ����� </td>
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
    //��������� ���
    if ($_POST['login'] == "")
        $error="���������� ������ �����";
    else
        {
        $username=stripinput(trim(eregi_replace(" +", " ", $_POST['login'])));
        if (!preg_match("/^[0-9A-Z@]{6,20}$/i", $username))
            $error="���������� ������ ���������� ����� �� ������ 6 ��������";
        else{
            $result=dbquery("SELECT * FROM account WHERE username='$username'");
            if (dbrows($result) != 0)$error="������������ � ����� ������� ��� ���������������";
            else $name=true;
            }
        }
       ////////////////////
         //��������� ������
    if ($_POST['pass2'] == "")
        $error="���������� ����������� ������";
    else
        {
        $password1=stripinput(trim(eregi_replace(" +", "", $_POST['pass'])));
        if (preg_match("/^[0-9A-Z@]{6,20}$/i", $password1))
            {
            if ($password1 != $_POST['pass2'])
                $error="������ �� ���������";
            else $pas=true;
            }
        else
            {
            $error="���������� ������ ���������� ������ �� ������ 6 �������� ";
            }
        }

    ////////////////////
       //��������� �����
    if ($_POST['email'] == "")
        $error="���������� ������ E-Mail";
    else
        {
        $email=stripinput(trim(eregi_replace(" +", "", $_POST['email'])));

        if (!preg_match("/^[-0-9A-Z_\.]{1,50}@([-0-9A-Z_\.]+\.){1,50}([0-9A-Z]){2,4}$/i", $email))
            {
            $error="���������� ������ ���������� E-Mail";
            }
        else
            {
            $result=dbquery("SELECT * FROM account WHERE email='$email'");

            if (dbrows($result) != 0)
                $error="������ E-Mail ��� ���������������";
            else $mail =true;

            }
        }

    ///////////////////////
       //��������� �����
    if (empty($_POST['captcha']) or empty($_SESSION['captcha']))
        {
        $error="�� ������ ����������� ���";
        }
    elseif ($_POST['captcha'] == $_SESSION['captcha'])
        {$capt=true;}
    else
        $error="����������� ��� �� �����";

    //

      //��������� �������
    if ($_POST['Checkrule'] == "")
        $error="���������� ������������ � ���������";
    else
        $rules=true;
      //
      
     //������������
    if ($name && $pas && $mail && $capt && $rules){
    
     $pass=sha1(strtoupper($_POST['login']) . ":" . strtoupper($_POST['pass']));
     $result=dbquery("INSERT INTO `account` (`username` , `sha_pass_hash` ,`email`, `expansion`)VALUES
     ('".strtoupper($_POST[login])."', '$pass', '$_POST[email]', '$expansion');");
     $result1=dbquery("SELECT `id` FROM `account` WHERE `username`='$_POST[login]'");
     $result1=dbarray($result1);
     dbquery("INSERT INTO `site_pupil_profile` (`id`, `name`, `email`) VALUES ($result1['id'], '$_POST[login]', '$_POST[email]')");

      if ($result){
       $error="�� ������� ���������������� ��� �������  <strong>$_POST[login]</strong>! <a href='".$site_url."index.php'>�����</a> �� ����";
            }else $error="������!";
                                         }
                                 }
    echo '<form method="post" action=""><p><span class=red><b>'.$error.'</b></span></p>
    <table border="0" cellpadding="0" cellspacing="0" class="tbl">
             <tr>
               <td align="right">�����:</td>
               <td><input name="login" id="login" type="text" class="inp" value="'.$_POST['login'].'" size="15" style="width: 165px;"></td>
             </tr>
             <tr>
               <td align="right">������:</td>
               <td><input name="pass" id="pass" type="password" class="inp" size="15" style="width: 165px;"></td>
             </tr>
              <tr>
               <td align="right">������ ��� ���:</td>
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
               <td align="right">����������� ���:</td>
               <td><input name="captcha" id="captcha" type="text" class="inp" size="15" style="width: 165px;"></td>
             </tr>

             <tr>
              <td align="left" class="style">� <a href="'.$rules_url.'">���������</a> ���������� (�)</td>
              <td align="left"><input type="Checkbox" name="Checkrule" class="inp"/></td>
              </tr>
             <tr>
               <td colspan="2" align="right"><label>
                <input type="submit" class="submit" name="submit" style="width: 120px;" alt="����������������" title="����������������" value="����������������" >
               </label></td>
             </tr>
           </table></form>';
  ?>
  </p>
</div>